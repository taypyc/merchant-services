// Header
$(function() {
  var stickyStartPos = 1,
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

// Magnific-popup
$(function() {
  $('[data-popup-open]').each(function() {
    $(this).magnificPopup({
      type: 'inline',
      fixedContentPos: (bowser.mobile || bowser.tablet) ? false : 'auto',
      fixedBgPos: true,
      overflowY: 'auto',
      closeBtnInside: true,
      preloader: false,
      midClick: true,
      removalDelay: 300,
      mainClass: 'popup-animated',
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
});

// Scroll up
$(function() {
  var topScroll = 300,
      topScrollEv = false,
      scrollBtn = $('<a />')
        .addClass('scroll-up')
        .attr({'href': '#',})
        .append($('<svg class="icon icon-arrow-top"><use xlink:href="css/fonts/icons.svg#arrow-top"></use></svg>'));
        
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

  // phone format
  $.validator.addMethod('valphone', function (value, element) {
    return this.optional(element) || /^\(\d{3}\)\s\d{3}-\d{4}$/.test(value);
  });

  // Validation
  $('.form-contact').each(function() {
    $(this).validate({
      onkeyup: function(el) {
        if($(el).attr('type') == 'tel') {
          if($(el).val().length == 14) {
            $(el).valid();
          }
        } else {
          $.validator.defaults.onkeyup.apply(this,arguments);
          // $(el).valid();
        }
      },
      rules: {
        phone: {
          required: true,
          valphone: true
        }
      },
      messages: {
        name: 'Please enter your name',
        email: 'Please enter your email',
        business_name: 'Please enter your company name',
        phone: {
          required: 'Please enter your phone',
          valphone: 'Phone format (XXX) XXX-XXXX'
        }
      },
      submitHandler: function(form) {
        var form = $(form),
            submitButton = form.find('[type="submit"]');
        submitButton.disable(true);

        $.ajax({
          type: 'POST',
          url: 'php/form-contact.php',
          data: {
            name: form.find('[name="name"]').val(),
            phone: form.find('[name="phone"]').val(),
            email: form.find('[name="email"]').val(),
            business_name: form.find('[name="business_name"]').length ? form.find('[name="business_name"]').val() : '',
            comments: form.find('[name="comments"]').length ? form.find('[name="comments"]').val() : '',
            type: form.hasClass('form-feedback') ? 'feedback' : '',
          },
          dataType: 'json',
          complete: function(data) {
            if (typeof data.responseJSON === 'object') {
              if (data.responseJSON.response == 'success') {
                window.location.href = 'thanks';
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
      }
    });
  });

  $('.form-services').each(function() {
    $(this).validate({
      onkeyup: function(el) {
        if($(el).attr('type') == 'tel') {
          if($(el).val().length == 14) {
            $(el).valid();
          }
        } else {
          $.validator.defaults.onkeyup.apply(this,arguments);
          // $(el).valid();
        }
      },
      rules: {
        phone: {
          required: true,
          valphone: true
        }
      },
      messages: {
        name: 'Please enter your name',
        email: 'Please enter your email',
        company_name: 'Please enter your company name',
        phone: {
          required: 'Please enter your phone',
          valphone: 'Phone format (XXX) XXX-XXXX'
        }
      },
      submitHandler: function(form) {
        var form = $(form),
            submitButton = form.find('[type="submit"]');
        submitButton.disable(true);

        $.ajax({
          type: 'POST',
          url: 'php/form-services.php',
          data: {
            name: form.find('[name="name"]').val(),
            phone: form.find('[name="phone"]').val(),
            email: form.find('[name="email"]').val(),
            company_name: form.find('[name="company_name"]').val(),
          },
          dataType: 'json',
          complete: function(data) {
            if (typeof data.responseJSON === 'object') {
              if (data.responseJSON.response == 'success') {
                window.location.href = 'thanks';
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
      }
    });
  });

  $('.form-partners').each(function() {
    $(this).validate({
      onkeyup: function(el) {
        if($(el).attr('type') == 'tel') {
          if($(el).val().length == 14) {
            $(el).valid();
          }
        } else {
          $.validator.defaults.onkeyup.apply(this,arguments);
          // $(el).valid();
        }
      },
      rules: {
        phone: {
          required: true,
          valphone: true
        }
      },
      messages: {
        name: 'Please enter your name',
        email: 'Please enter your email',
        phone: {
          required: 'Please enter your phone',
          valphone: 'Phone format (XXX) XXX-XXXX'
        }
      },
      submitHandler: function(form) {
        var form = $(form),
            submitButton = form.find('[type="submit"]');
        submitButton.disable(true);

        $.ajax({
          type: 'POST',
          url: 'php/form-partners.php',
          data: {
            name: form.find('[name="name"]').val(),
            phone: form.find('[name="phone"]').val(),
            email: form.find('[name="email"]').val(),
          },
          dataType: 'json',
          complete: function(data) {
            if (typeof data.responseJSON === 'object') {
              if (data.responseJSON.response == 'success') {
                window.location.href = 'thanks';
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
      }
    });
  });

  // Mask
  var handleMasks = function() {
    $('[name="phone"]').mask('(000) 000-0000');
  };
  $(document).on('mask-it', function() {
    handleMasks();
  }).trigger('mask-it');

  $('[name="phone"]').each(function() {
    var field = $(this);
    field.on('blur', function() {
      if(field.val().length <= 1) {
        field.val('');
      }
    });
  });

  // Select2 init
  /*$('.select-item').each(function() {
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
  });*/
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
  if(bowser.msie) {
    $('html').addClass('ms-ie');
  }
  if(bowser.msedge) {
    $('html').addClass('ms-edge');
  }
  if(bowser.mobile || bowser.tablet) {
    $('html').addClass('mt-device');
  } else {
    $('html').addClass('desktop-device');
  }
  if(bowser.opera) {
    $('html').addClass('opera');
  }
});

// Scroll to elem
$(function() {
  $('[data-hash]').on('click', function(e) {
    e.preventDefault();
    var target = $(this).attr('href');
    if($('body').hasClass('scrolling'))
      return;

    $('body').addClass('scrolling');
    $('html, body').animate({
      scrollTop: $(target).offset().top
    }, 700, 'easeOutQuad', function() {
      $('body').removeClass('scrolling');
    });
  });
});