// Header
$(function() {
  if($('.header-01').length) {
  var activeStartPos = 1,
      activeStartElem = $('.section-hero'),
      shadowStartPos = 1,
      activeCss = 'header-active',
      shadowCss = 'header-shadow';
  if(activeStartElem && activeStartElem.length) {
    $(window).on('resize', function() {
      activeStartPos = $(activeStartElem).offset().top + $(activeStartElem).outerHeight();
    });
  }
  function checkActiveHeader() {
    if ($(window).scrollTop() >= parseInt(activeStartPos)) {
      if(!$('html').hasClass(activeCss)) {
        $('html').addClass(activeCss);
      }
    } else {
      if($('html').hasClass(activeCss)) {
        $('html').removeClass(activeCss);
      }
    }
  }
  function checkShadowHeader() {
    if ($(window).scrollTop() >= parseInt(shadowStartPos)) {
      if(!$('html').hasClass(shadowCss)) {
        $('html').addClass(shadowCss);
      }
    } else {
      if($('html').hasClass(shadowCss)) {
        $('html').removeClass(shadowCss);
      }
    }
  }
  $(window).on('scroll resize', function() {
    checkActiveHeader();
    checkShadowHeader();
  });
  $(window).trigger('resize');
  }
});

// faq toggle
$(function() {
  $('.ciw-item-toggle').on('click', function() {
    var el = $(this);
    el.closest('.ciw-item').toggleClass('active');
    el.siblings('.ciw-item-info').stop(true).slideToggle(300, 'easeInOutSine');
  })
});

// Browser detect
$(function() {
  var parser = bowser.getParser(window.navigator.userAgent),
      userBrowser = parser.parsedResult.browser.name,
      userOS = parser.parsedResult.os.name,
      userPlatform = parser.parsedResult.platform.type;

  if(userBrowser == 'Internet Explorer') {
    $('html').addClass('ms-ie');
  }
  if(userBrowser == 'Microsoft Edge') {
    $('html').addClass('ms-edge');
  }
  if(userBrowser == 'Opera') {
    $('html').addClass('opera');
  }
  if(userOS == 'macOS') {
    $('html').addClass('macos');
  }
  
  if(userPlatform == 'mobile' || userPlatform == 'tablet') {
    $('html').addClass('mt-device');
  } else {
    $('html').addClass('desktop-device');
  }
});

// Scroll to elem
$(function() {
  $('[data-hash]').on('click', function(e) {
    e.preventDefault();
    var target = $(this).attr('href'),
      offset = 50;
    if($('body').hasClass('scrolling'))
      return;

    $('body').addClass('scrolling');
    $('html, body').animate({
      scrollTop: $(target).offset().top - offset
    }, 700, 'easeOutQuad', function() {
      $('body').removeClass('scrolling');
    });
  });
});

// testimonials carousel
$(function() {
  $('.testimonials-carousel').slick({
    dots: true,
    arrows: false,
    draggable: true,
    swipe: true,
    touchMove: true,
    fade: true,
    infinite: true,
    speed: 400,
    slidesToShow: 1,
    adaptiveHeight: true,
  });
});

// fb pageview event
$(function() {
  $.ajax({
    method: 'POST',
    url: 'php/store-data.php',
    data: {url: window.location.href},
    dataType: 'json'
  });
});





