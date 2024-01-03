// Animate plugin
$(function() {
  $('[data-appear-animation]').each(function() {
    var elem = $(this),
        accXval = 0,
        accYval = 0,
        delay = 1;

    accYval = (elem.attr('data-appear-animation-accy') && parseInt(elem.attr('data-appear-animation-accy'), 10) !== 0) ? parseInt(elem.attr('data-appear-animation-accy'), 10) : accYval;

    if ($(window).width() > 767) {
      elem.appear(function() {
        delay = (elem.attr('data-appear-animation-delay') ? elem.attr('data-appear-animation-delay') : delay);
        if (delay > 1) {
          elem.css('animation-delay', delay + 'ms');
        }
        elem.addClass(elem.attr('data-appear-animation'));
        setTimeout(function() {
          elem.addClass('appear-animation-visible');
        }, delay);
      }, {
        accX: accXval,
        accY: accYval
      });
    } else {
      elem.addClass('appear-animation-visible');
    }
  });
});

// Magnific-popup
$(function() {
  $('.pop-up').each(function() {
    $(this).magnificPopup({
      tClose: 'Close (Esc)', // Alt text on close button
      tLoading: 'Loading...', // Text that is displayed during loading. Can contain %curr% and %total% keys
      gallery: {
        tPrev: 'Previous (Left arrow key)', // Alt text on left arrow
        tNext: 'Next (Right arrow key)', // Alt text on right arrow
        tCounter: '%curr% of %total%' // Markup for "1 of 7" counter
      },
      callbacks: {
        open: function() {
          $('html').addClass('popup-opened');
        },
        close: function() {
          $('html').removeClass('popup-opened');
        }
      }
    });
  });

  $('.popup-with-move-anim').each(function() {
    $(this).magnificPopup({
      type: 'inline',

      fixedContentPos: (bowser.mobile || bowser.tablet) ? false : 'auto',
      fixedBgPos: true,

      overflowY: 'auto',

      closeBtnInside: true,
      preloader: false,

      midClick: true,
      removalDelay: 300,
      mainClass: 'my-mfp-slide-bottom',

      callbacks: {
        open: function() {
          $('html').addClass('popup-opened');
        },
        close: function() {
          $('html').removeClass('popup-opened');
        }
      }
    });
  });

  $('.popup-youtube, .popup-vimeo, .popup-gmaps').each(function() {
    $(this).magnificPopup({
      disableOn: 700,
      type: 'iframe',
      mainClass: 'mfp-fade',
      removalDelay: 160,
      preloader: false,

      fixedContentPos: false
    });
  });
});

// Scroll up
$(function() {
  var topScroll = 300,
      topScrollEv = false,
      scrollBtn = $('<a />')
        .addClass('scroll-up')
        .attr({'href': '#',})
          .append($('<svg class="icon icon-arrow-top"><use xlink:href="/demo/csh/assets-global/m01/css/fonts/icons.svg#arrow-top"></use></svg>'));

  $('body').append(scrollBtn);
  scrollBtn.on('click', function(e) {
    e.preventDefault();
    if(!topScrollEv && $(window).scrollTop() > topScroll) {
      topScrollEv = true;
      $('body, html').animate({
        scrollTop: 0
      }, 500, function() {
        topScrollEv = false;
      });
    }
    return false;
  });
  var _windowScrolling = false;
  $(window).scroll(function() {
    if (!_windowScrolling) {
      _windowScrolling = true;
      if ($(window).scrollTop() > 300) {
        scrollBtn.stop(true, true).addClass('visible');
        _windowScrolling = false;
      } else {
        scrollBtn.stop(true, true).removeClass('visible');
        _windowScrolling = false;
      }
    }
  });
});

// Header
$(function() {
  var stickyStartPos = 0,
      stickyStartElem = false;
  if(stickyStartElem) {
    $(window).on('resize', function() {
      stickyStartPos = $(stickyStartElem).offset().top;
    });
  }
  function checkStickyHeader() {
    if ($(window).scrollTop() >= parseInt(stickyStartPos)) {
      if(!$('html').hasClass('sticky-header-active')) {
        $('html').addClass('sticky-header-active');
      }
    } else {
      if($('html').hasClass('sticky-header-active')) {
        $('html').removeClass('sticky-header-active');
      }
    }
  }
  $(window).on('scroll resize', function() {
    checkStickyHeader();
  });
  $(window).trigger('resize');
});

// Tips bootstrap
$(function() {
  if ($('[data-tooltip]').length) {
    $('[data-tooltip]').tooltip();
  }
  if ($('[data-popover]').length) {
    $('[data-popover]').popover($(this).data('plugin-options'));
  }
});

// Forms
$(function() {
  // btns disable / enable
  $.fn.extend({
    disable: function(state) {
      return this.each(function() {
        var el = $(this);
        el.prop('disabled', state);
        if(state === true && el.data('loading-content') !== undefined) {
          el.data('original-content', el.html());
          el.html(el.data('loading-content'));
        }
        if(state === false && el.data('original-content') !== undefined) {
          el.html(el.data('original-content'));
        }
      });
    }
  });

  // email with dot
  $.validator.addMethod('validEmail', function (value, element) {
    var email = $.validator.methods.email.bind(this);

    var lastPart = value.slice(value.lastIndexOf('@') + 1);
    var emailCondition = (lastPart.indexOf('.') > -1 && lastPart.slice(lastPart.lastIndexOf(".") + 1).length >= 2) ? true : false;

    return this.optional(element) || (email(value, element) && emailCondition);
  }, function(params, element) {
    return 'Please enter a valid email address.'
  });
  // string non space
  $.validator.addMethod('validString', function (value, element) {
    return this.optional(element) || $.trim(value).length > 0
  }, $.validator.format("Please enter a valid info."));
  // exact length
  $.validator.addMethod('validExactLength', function (value, element, param) {
    return this.optional(element) || value.length == param
  }, $.validator.format("Please enter exactly {0} characters"));
  // phone format
  $.validator.addMethod('validPhone', function (value, element) {
    return this.optional(element) || /^\(\d{3}\)\s\d{3}-\d{4}$/.test(value);
  }, function(params, element) {
    return 'Phone format (XXX) XXX-XXXX'
  });
  // zip format
  $.validator.addMethod('validZip', function (value, element) {
    return this.optional(element) || /^\d{5}$/.test(value);
  }, function(params, element) {
    return 'Zip format XXXXX'
  });
  // url
  $.validator.addMethod('validUrl', function (value, element) {
    var url = $.validator.methods.url.bind(this);
    return url(value, element) || url('http://' + value, element);
  }, function(params, element) {
    return 'Please enter a valid URL.'
  });
  // date format
  $.validator.addMethod('validDateFull', function( value, element ) {
    function isValidDate(dateString) {
      // First check for the pattern
      if(!/^\d{1,2}\/\d{1,2}\/\d{4}$/.test(dateString))
          return false;

      // Parse the date parts to integers
      var parts = dateString.split("/");
      var month = parseInt(parts[0], 10);
      var day = parseInt(parts[1], 10);
      var year = parseInt(parts[2], 10);

      var minYear = new Date();
      // minYear.setFullYear(minYear.getFullYear() - 17);

      // Check the ranges of month and year
      if(year < 1900 || year > minYear.getFullYear() || month == 0 || month > 12) {
        return false;
      }

      var monthLength = [ 31, 28, 31, 30, 31, 30, 31, 31, 30, 31, 30, 31 ];

      // Adjust for leap years
      if(year % 400 == 0 || (year % 100 != 0 && year % 4 == 0))
          monthLength[1] = 29;

      // Check the range of the day
      return day > 0 && day <= monthLength[month - 1];
    };

    return this.optional(element) || isValidDate(value);
  }, function(params, element) {
    return 'Date format MM/DD/YYYY'
  });

  /*$.validator.setDefaults({
    onkeyup: function () {
      var originalKeyUp = $.validator.defaults.onkeyup;
      var customKeyUp =  function (element, event) {
        if ($(element).attr('type') == 'tel') {
          //return false;
          if($(element).val().length == 14) {
            $(element).valid();
          }
        } else {
          return originalKeyUp.call(this, element, event);
        }
      }

      return customKeyUp;
    }()
  });*/

  // Validation English
  $('.form-contact.en').each(function() {
    $(this).validate({
      rules: {
        name: {
          required: true
        },
        email: {
          required: true
        },
        message: {
          required: true
        }
      },
      messages: {
        name: 'Please enter your name',
        email: 'Please enter your email'
      },
      submitHandler: function(form) {
        var form = $(form),
            submitButton = form.find('[type="submit"]');
        submitButton.disable(true);

        $.ajax({
          method: 'POST',
          url: 'php/form-contact.php',
          data: {
            name: form.find('[name="name"]').val(),
            email: form.find('[name="email"]').val(),
            message: form.find('[name="message"]').val()
          },
          dataType: 'json',
          complete: function(data) {
            if (typeof data.responseJSON === 'object') {
              if (data.responseJSON.response == 'success') {
                window.location.href = 'thank-you';
                //form.submit();
                return;
              } else {
                alert('It seems like we have a temporary problem. We are fixing it right now. Visit us later please.');
              }
            } else {
              alert('Undefined error, please try again later.');
            }
            submitButton.disable(false);
          }
        });
      },
      errorClass: "error",
      errorPlacement: function (error, element) {
        var elem = $(element);
        if (elem.hasClass("select-item")) {
          error.insertAfter(elem.next());
        } else {
          error.insertAfter(elem);
        }
      },
      highlight: function (element, errorClass, validClass) {
        var elem = $(element);
        if (elem.hasClass("select-item")) {
          elem.next().addClass(errorClass);
        } else {
          elem.addClass(errorClass);
        }
      },
      unhighlight: function (element, errorClass, validClass) {
        var elem = $(element);
        if (elem.hasClass("select-item")) {
          elem.next().removeClass(errorClass);
        } else {
          elem.removeClass(errorClass);
        }
      }
    });
  });

  // Validation Spanish
  $('.form-contact.es').each(function() {
    $(this).validate({
      rules: {
        name: {
          required: true
        },
        email: {
          required: true
        },
        message: {
          required: true
        }
      },
      messages: {
        name: 'Por favor, escriba su nombre',
        email: 'Por favor introduzca su correo electrónico',
        message: 'Este campo es requerido'
      },
      submitHandler: function(form) {
        var form = $(form),
            submitButton = form.find('[type="submit"]');
        submitButton.disable(true);

        $.ajax({
          method: 'POST',
          url: 'php/form-contact.php',
          data: {
            name: form.find('[name="name"]').val(),
            email: form.find('[name="email"]').val(),
            message: form.find('[name="message"]').val()
          },
          dataType: 'json',
          complete: function(data) {
            if (typeof data.responseJSON === 'object') {
              if (data.responseJSON.response == 'success') {
                window.location.href = 'thank-you';
                //form.submit();
                return;
              } else {
                alert('Parece que tenemos un problema temporal. Lo estamos arreglando ahora mismo. Visítenos más tarde por favor.');
              }
            } else {
              alert('Error indefinido, inténtalo de nuevo más tarde.');
            }
            submitButton.disable(false);
          }
        });
      },
      errorClass: "error",
      errorPlacement: function (error, element) {
        var elem = $(element);
        if (elem.hasClass("select-item")) {
          error.insertAfter(elem.next());
        } else {
          error.insertAfter(elem);
        }
      },
      highlight: function (element, errorClass, validClass) {
        var elem = $(element);
        if (elem.hasClass("select-item")) {
          elem.next().addClass(errorClass);
        } else {
          elem.addClass(errorClass);
        }
      },
      unhighlight: function (element, errorClass, validClass) {
        var elem = $(element);
        if (elem.hasClass("select-item")) {
          elem.next().removeClass(errorClass);
        } else {
          elem.removeClass(errorClass);
        }
      }
    });
  });

  // valid rules
  $('[data-mask-phone]').each(function() {
    $(this).rules('add', 'validPhone');
  });
  $('[type="email"]').each(function() {
    $(this).rules('add', {email: false});
    $(this).rules('add', 'validEmail');
  });
  $('[data-field-string]').each(function() {
    $(this).rules('add', 'validString');
  });

  // Mask
  var handleMasks = function() {
    $('[data-mask-phone]').mask('(000) 000-0000');
  };
  $(document).on('mask-it', function() {
    handleMasks();
  }).trigger('mask-it');

  // Select2 init
  $('.select-item').each(function() {
    var elem = $(this);
    elem.select2({
      placeholder: (elem.data('select-placeholder') && elem.data('select-placeholder').length > 0) ? elem.data('select-placeholder') : 'Please select...',
      allowClear: true,
      minimumResultsForSearch: Infinity
    });
  });
  // Validate after change
  $('.select-item').on('change.s2v', function () {
    $(this).valid();
  });
});

// Burger menu animate
$(function() {
  var closingNav = false;
  $('.header-btn-nav').on('click', function() {
    if(closingNav) return;
    $('.header-btn-nav').toggleClass('header-btn-nav-active');
    $('.header-nav').toggleClass('header-nav-active');
  });

  // Close menu if click outside or scroll main content
  $(document).on('mouseup touchstart', function (e) {
    var elem = $('.header-nav'),
        elemBtn = $('.header-btn-nav');
    if (elem.hasClass('header-nav-active') &&
        !elem.is(e.target) && elem.has(e.target).length === 0 &&
        !elemBtn.is(e.target) && elemBtn.has(e.target).length === 0) {
      closingNav = true;
      setTimeout(function() {
        closingNav = false;
      }, 150);
      elemBtn.removeClass('header-btn-nav-active');
      elem.removeClass('header-nav-active');
    }
  });
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

// faq toggle
$(function() {
  $('.ciw-item-toggle').on('click', function() {
    var el = $(this);
    el.closest('.ciw-item').toggleClass('active');
    el.siblings('.ciw-item-info').stop(true).slideToggle(300, 'easeInOutSine');
  })
});

// Click on testimonial video

$(function() {
  let videoWrap = $('.testimonials-page-video-wrap');

  $(videoWrap).on('click', function() {
    var el = $(this),
        iFrameContainer = $('#testimonials-page-current-video')
        videoId = el.data('id');

        $('iframe', iFrameContainer).removeClass('active');
        $(iFrameContainer.find('iframe')[videoId]).addClass('active');
        $(videoWrap).removeClass('active');
        el.addClass('active');
  })
});

// slick slider
$(function() {
  if ($('.testimonials-slider').length) {
    let testimonialSlider = $('.testimonials-slider');

    testimonialSlider.slick({
      slidesToShow: 1,
      slidesToScroll: 1,
      dragging: false,
      centerMode: true,
      infinite: true,
      mobileFirst: true,
      responsive: [
        {
          breakpoint: 991,
          settings: {
            slidesToShow: 3
          }
        }
      ]
    });

    testimonialSlider.on('afterChange', function(slick, currentSlide){
      let currentFrame = $('iframe', currentSlide.$slides[currentSlide.currentSlide]),
          src = '';

      if(!currentFrame.attr('src')) {
        src = currentFrame.attr('data-src')
        currentFrame.attr('src', src);
      }
    });
  }

  if ($('.review-slider').length) {
    $('.review-slider').slick({
      slidesToShow: 1,
      slidesToScroll: 1,
      dragging: true,
      dots: true,
      arrows: false,
      mobileFirst: true,
      responsive: [
        {
          breakpoint: 375,
          settings: {
            slidesToShow: 2,
            slidesToScroll: 2
          }
        },
        {
          breakpoint: 767,
          settings: {
            slidesToShow: 2,
            slidesToScroll: 2,
            dots: false,
          }
        },
      ]
    });
  }
})
