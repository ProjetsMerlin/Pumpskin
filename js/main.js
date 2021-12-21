jQuery(document).ready(function() {
  /* SCROLL TO */
  $('.js_scroll_to').click(function(e) {
    e.preventDefault();
    var id_element = $(this).attr('href');
    $('html,body').animate({
      scrollTop: $(id_element).offset().top
    }, 'slow');
  });

  /*MENU BURGER*/
  $('.js_menu_burger').hide();
  if($('body').width() < 768 ) {
    $('.js_menu_burger').show();
    $('.menu').addClass('phone_menu');
    $('.header .js_menu_burger').on('click', function() {
      $(this).children().toggleClass('fa-bars').toggleClass('fa-close');
      $('.header .menu').toggleClass('activate');
      $('body').toggleClass('menu_activate');
    });

    $('.header .menu a').on('click', function() {
      $('.header .js_menu_burger').children().removeClass('fa-close').addClass('fa-bars');
      $('.header .menu').removeClass('activate');
      $('body').removeClass('menu_activate');
    });
  }

  /* SLIDERS */
  if($('.slider').length > 0) {
    $('.slider').slick({
      autoplay: true,
      slidesToShow: 3,
      slidesToScroll: 1,
      centerMode: false,
      arrows: false,
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

  /* ACCORDION */
  if($('.accordion').length > 0) {
    $('.accordion_content').slideUp().first().slideDown();
    $('.js_title_accordion').on('click', function() {
      $('.accordion_content').slideUp();
      var item = $(this).parent().attr('id');
      $('.accordion_content[data-accordion='+item+']').slideDown();
    });
  }

  /* PROGRESS BAR */
  if($('.progess_bar').length > 0) {
    $(document).on('scroll',function(){
      var hauteur = $(document).height() - $(window).height(),
      position = $(document).scrollTop(),
      largeur = $(window).width(),
      barre = position / hauteur * largeur;
      $('.progess_bar').css('width',barre);
    });
  }

  /* POPUP */
  $('.popup').addClass('invisible');
  if($('.popup').length > 0) {
    $('.js_popup').click(function(e) {
      e.preventDefault();
      $('.popup').removeClass('invisible').addClass('visible fixed');
    });

    $('.js_closePopup').click(function() {
      $('.popup').removeClass('fixed visible').addClass('invisible');
    });
  }

  $('.js_closeCookies').click(function(e) {
    e.preventDefault();
    $('.cookies').addClass('none');
  });

  /* BEFORE AFTER */
  if($('.beer-slider').length > 0) {
    $.fn.BeerSlider = function ( options ) {
      options = options || {};
      return this.each(function() {
        new BeerSlider(this, options);
      });
    };
    $('.beer-slider').BeerSlider({start: 50});
  }

  if($('#bgndVideo').length > 0) {
    $("#bgndVideo").YTPlayer({
      containment:'self',
      autoPlay: true,
      stopMovieOnBlur: false,
      mute: true,
      showControls: true,
      vol: 20,
      showYTLogo: false,
      gaTrack: false,
      ratio: "16/9"
    });

    var filters = {
      sepia: 90,
      hue_rotate : 220
    }

    $('#bgndVideo').YTPApplyFilters(filters);
  }

  if($('.filter').length > 0) {
    $('.js_filter').click(function(e) {
      e.preventDefault();
      $('.js_filter_items').removeClass('visible').addClass('invisible');
      var filterValue = $(this).data('filter');
      if(filterValue === 'all')
        $('.js_filter_items').removeClass('invisible').addClass('visible');
      $('.js_filter_items[data-type="'+filterValue+'"]').removeClass('invisible').addClass('visible');
    });
  }
});