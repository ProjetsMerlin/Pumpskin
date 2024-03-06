jQuery(document).ready(function() {
  /* SCROLL TO */
  $('.js_scroll_to').click(function(e) {
    e.preventDefault()
    var id_element = $(this).attr('href')
    $('html,body').animate({
      scrollTop: $(id_element).offset().top
    }, 'slow')
  })
  
  /* PROGRESS BAR */
  if($('.progess_bar').length > 0) {
    $(document).on('scroll',function(){
      var hauteur = $(document).height() - $(window).height(),
      position = $(document).scrollTop(),
      largeur = $(window).width(),
      barre = position / hauteur * largeur
      $('.progess_bar').css('width',barre)
    })
  }
  
  /* BEFORE AFTER */
  if($('.beer-slider').length > 0) {
    $.fn.BeerSlider = function ( options ) {
      options = options || {}
      return this.each(function() {
        new BeerSlider(this, options)
      })
    }
    $('.beer-slider').BeerSlider({start: 50})
  }
  
  /* MENU BURGER */
  $('.header .js_toggleMenu').on('click', function(e) {
    e.preventDefault()
    $('.header').toggleClass('activate')
    $('body').toggleClass('menu_activate')
  })
  
  /* ACCORDION */
  if( $('.accordion')) {
    $('.accordion summary').on('click', function(e) {
      $('.accordion details[open]').removeAttr('open')
      $(this).parent("details").attr('open')
    })
  }
  
  /* SLIDERS */
  if($('.slider').length > 0) {
    $('.slider').slick({
      autoplay: true,
      
      slidesToShow: 4,
      slidesToScroll: 1,
      centerMode: false,
      arrows: true,
      dots: true,
      lazyLoad: 'ondemand',
      infinite: true,
      initialSlide: 0,
      autoplaySpeed: 2000,
      pauseOnHover: true,
      responsive: [
        {
          breakpoint: 1280,
          settings: {
            slidesToShow: 3,
            slidesToScroll: 1,
          }
        },{
          breakpoint: 920,
          settings: {
            slidesToShow: 2,
            slidesToScroll: 1,
          }
        },{
          breakpoint: 767,
          settings: {
            slidesToShow: 1,
            slidesToScroll: 1
          }
        }
      ]
    });
  }
  
  /* POPUP */
  if($('.popup').length > 0) {
    $('.js_openPopup').click(function(e) {
      e.preventDefault()
      $('.popup').addClass('invisible')
      var popup = $(this).attr("data-popup")
      $(".popup[data-popup='"+popup+"']").removeClass('invisible')
    })
    
    $('.js_closePopup').click(function(e) {
      e.preventDefault()
      var popup = $(this).attr("data-popup")
      $(".popup[data-popup='"+popup+"']").addClass('invisible')
    })
  }
  
})