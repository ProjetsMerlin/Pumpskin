jQuery(document).ready(function(){
    $('input[type=checkbox]').on('change', function(e) {
        if( $(this).prop( "checked" ) === true) {
            $(this).parent().parent('.checkbox.required').addClass('active')
        }
        else {
            $(this).parents('.checkbox.required').removeClass('active')
        }
    })

    var verifmail = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
    
    function checkForm(form, btn, url) {
        
        var erreur    = 0,
        form      = $(form),
        id_form   = form.data('form'),
        is_custom = form.data('custom'),
        btn       = $(btn)
        
        form.find('.required').not('.radio, .checkbox').each(function () {
            if ($(this).is(':visible')) {
                if ($(this).val() == '' || $(this).val() == null) {
                    $(this).addClass('error')
                    erreur++
                }
                else {
                    $(this).removeClass('error')
                }
            }
            form.find('.mail').each(function () {
                if ($(this).is(':visible')) {
                    if (verifmail.exec($(this).val()) == null) {
                        $(this).addClass('error')
                        erreur++
                    }
                    else {
                        $(this).removeClass('error')
                    }
                }
            })
        })
        
        form.find('.checkbox.required').each(function () {
            if ($(this).is(':visible')) {
                if ($(this).hasClass('active')) {
                    $(this).removeClass('error')
                }
                else {
                    $(this).addClass('error')
                    erreur++
                }
            }
        })
        
        form.find('.radio.required').each(function () {
            if ($(this).is(':visible')) {
                if (!$(this).find('.radio__item.active').length) {
                    $(this).addClass('error')
                    erreur++
                }
                else {
                    $(this).removeClass('error')
                }
            }
        })
        
        form.find('.required').not('.radio, .checkbox').focusout(function () {
            if ($(this).is(':visible')) {
                if ($(this).val() == '' || $(this).val() == null) {
                    $(this).addClass('error')
                    erreur++
                }
                else {
                    $(this).removeClass('error')
                }
            }
        })
        
        if (is_custom) {
            erreur = erreur + parseInt(checkCustom(id_form))
        }
        
        if (erreur == 0 && !btn.hasClass('disabled')) {
            ajaxForm(form, btn, url)
        }
        else {
            $('html, body').animate({ scrollTop: $(".error").offset().top - 150 }, 450)
            $('.error:text:visible:first').focus()
        }
    }
    
    function ajaxForm(form, btn, url) {
        var form = $(form),
        id_form = form.data('form'),
        btn  = $(btn),
        fields = form.serialize()
        btn.addClass('disabled')
        btn.addClass('loading')
        
        $.ajax({
            type: 'POST',
            data: fields,
            url: url+'.php',
            success: function (response) {
                console.log(response)
                $('.loading').removeClass('loading')
                if(parseInt(response) === 1) {
                    afterSendOk(id_form)
                }
                else {
                    afterSendNotOk(response, id_form)
                }
            },
            error: function (error) {
                var errors = error.hasOwnProperty('responseJSON') ? error.responseJSON : []
                afterSendNotOk(errors, id_form)
                if(error.status === 500) {
                    console.log(error)
                }
            }
        })
    }
    
    $('.js_verif').click(function (e) {
        e.preventDefault()
        var id   = $(this).data('form')
        var form = $('form[data-form=' + id + ']')
        var url  = form.attr('action')
        var btn  = $(this)
        checkForm(form, btn, url)
    })
    
    /*  ==========================================================================
    After send
    ==========================================================================  */
    function afterSendOk(form) {
        switch (form) {
            case 'contact':
            $('body input, body textarea').val("")
            $('#result').html('<div class="success">Votre message nous est bien parvenu, nous ne manquerons pas de vous recontacter</div>')
            $('body input[type=checkbox]').attr("checked", false)
            break
        }
    }
    
    function afterSendNotOk(response, form) {
        switch (form) {
            case 'contact':
            $('#result').html('<div class="error">Une erreur est survenue :'+ response + '</div>')
            break
        }
    }
    
    /*  ==========================================================================
    Trigger enter
    ==========================================================================  */
    $("form input, form select").on('keyup keypress', function(e) {
        var keyCode = e.keyCode || e.which
        var id = $(this).parents("form").data("form")
        var form = $("form[data-form="+id+"]")
        var url = form.attr("action")
        var btn = form.find(".js_verif")
        if (keyCode == 13) {
            e.preventDefault()
            checkForm(form,btn,url)
            return false
        }
    })
})