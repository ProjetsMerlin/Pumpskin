$(document).ready(function() {

    var filterClass = '.filter',
        $fields = $(filterClass+' input[type="checkbox"], '+filterClass+' input[type="text"], '+filterClass+' input[type="date"], '+filterClass+' input[type="range"], '+filterClass+' select'),
        items = '.blog>a',
        exclusif = 'select',
        range = 'range',
        date = 'date',
        qsRegex = '',
        filter = []
  
    const articlesPerPage = 2
    
    /* PAGINATION */
    function showPage(pageNumber) {
      const start = (pageNumber - 1) * articlesPerPage
      const end = start + articlesPerPage
      $(items).hide().slice(start, end).show()
    }
    
    /* RUN DATA */
    function runData(filter) {
      $(items).hide()
  
      if(filter["checkbox"]) {
        $(filter["checkbox"]).show()
      }
  
      if(filter["select"]) {
        $(items + ":visible").each(function() {
          $(this).hide()
          if( $(this).attr("data-"+exclusif) === filter[exclusif] ) {
            $(this).show()
          }
        })
      }
  
      if(filter["text"]) {
        $(items + ":visible").each(function() {
          $(this).hide()
          if( $(this).text().sansAccent().match(qsRegex) ) {
            $(this).show()
          }
        })
      }
  
      if(filter["range"]) {
        $('body '+filterClass+' span.rangeValue').text(filter["range"])
        $(items + ":visible").each(function() {
          $(this).hide()
          if( parseInt($(this).attr("data-"+range)) <= parseInt(filter["range"]) ) {
            $(this).show()
          }
        })
      }
  
      if(filter["date"]) {
        $(items + ":visible").each(function() {
          $(this).hide()
          var getdate = new Date(filter["date"])
          var itemDate = new Date($(this).attr("data-"+date))
          if( itemDate >= getdate ) {
            $(this).show()
          }
        })
      }
  
      /* PAGINATION */
      var totalArticles = $('body ' + items + ":visible").length
      var totalPages = Math.ceil(totalArticles / articlesPerPage)
      if(totalPages > 1) {
        $('body #pagination button').remove()
        for (let i = 1; i <= totalPages; i++) {
          $('body #pagination').append('<button class="page-btn btn">' + i + '</button>')
          $('body #pagination button:first').addClass('btn---light')
        }
        $('.no_result').hide()
      }
      else if (totalArticles === 0) {
        $('.no_result').show()
      }
      
    if($('.results')) {
        $('.results').html(
        + filter["checkbox"]
        + " | "
        + filter["select"]
        + " | "
        +  filter["range"]
        + " | "
        +  filter["date"])
        }
}
    
    /* FILTER TEXT */
    String.prototype.sansAccent = function() {
      var noaccent = ['A','a','E','e','I','i','O','o','U','u','N','n','C','c'],
          str = this
  
      var accent = [
        /*A, a*/
        /[\300-\306]/g, /[\340-\346]/g,
        /*E, e*/
        /[\310-\313]/g, /[\350-\353]/g,
        /*I, i*/
        /[\314-\317]/g, /[\354-\357]/g,
        /*O, o*/
        /[\322-\330]/g, /[\362-\370]/g,
        /*U, u*/
        /[\331-\334]/g, /[\371-\374]/g,
        /*N, n*/
        /[\321]/g, /[\361]/g,
        /*C, c*/
        /[\307]/g, /[\347]/g,
      ]
  
      for(var i = 0; i < accent.length; i++){
        str = str.replace(accent[i], noaccent[i])
      }
  
      return str
    }
  
    function debounce( fn, threshold ) {
      var timeout
      threshold = threshold || 100
      return function debounced() {
        clearTimeout( timeout )
        var args = arguments
        var _this = this
        function delayed() {
          fn.apply( _this, args )
        }
        timeout = setTimeout( delayed, threshold )
      }
    }
    
    /* run FILTER */
    function runFilter($this) {
      var key = $this.attr("name")
  
      if(key === "checkbox") {
        var inclusif = $(filterClass+' input[type="checkbox"]:checked').map(function() {
          return "." + this.value
        }).get().join(",")
        filter[key] = inclusif
      }
      else {
        filter[key] = $this.val()
      }
  
      runData(filter)
    }
    
    /* START */
    if($(filterClass)) {
      $fields.on("change", function (e) {
        e.preventDefault()
        runFilter($(this))
      })
  
      $(filterClass+' input[type="text"]').keyup( debounce( function() {
        qsRegex = new RegExp($(this).val().sansAccent(), 'gi')
        $fields.trigger('change')
      }))
  
      $(filterClass+' input[type="reset"]').on("click", function (e) {
        e.preventDefault()
        $(filterClass+' form').trigger('reset')
        $fields.trigger('change')
      })
  
      $('body #pagination').on('click', '.page-btn', function(e) {
        e.preventDefault()
        $("body .page-btn").removeClass('btn--light')
        $(this).addClass('btn--light')
        const pageNumber = $(this).text()
        showPage(pageNumber)
      })
      
      $(filterClass+' input[type="range"]').after("<span class='rangeValue'></span>")
    }

  })