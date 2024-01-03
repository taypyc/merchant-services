// Header
$(function() {
  var stickyStartPos = 1,
      stickyStartElem = $('#header');
  if(stickyStartElem) {
    $(window).on('resize', function() {
      stickyStartPos = stickyStartElem.offset().top;
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

  // smooth menu hover ux
  $('.hn-menu li a').each(function() {
    var link = $(this);
    link.data('hovered-timeout', false);
    link.mouseenter(function() {
      if(link.data('hovered-timeout') === false) {
        link.addClass('hovered');
        link.data('hovered-timeout', true);
        setTimeout(function() {
          link.removeClass('hovered');
          link.data('hovered-timeout', false);
        },200);
      }
    });
  });
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

  // Validation
  $('.form-contact').each(function() {
    $(this).validate({
      onkeyup: function(el) {
        if($(el).attr('type') == 'tel') {
          if($(el).val().length == 14) {
            $(el).valid();
          }
        } else {
          if($(el).val().length > 0)
            $(el).valid();
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
        business_name: 'Please enter business name',
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
          url: 'php/form-contact.php',
          data: {
            name: form.find('[name="name"]').val(),
            business_name: form.find('[name="business_name"]').val(),
            email: form.find('[name="email"]').val(),
            phone: form.find('[name="phone"]').val()
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
          if($(el).val().length > 0)
            $(el).valid();
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
            email: form.find('[name="email"]').val(),
            phone: form.find('[name="phone"]').val()
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
      }
    });
  });

  $('.form-feedback').each(function() {
    $(this).validate({
      onkeyup: function(el) {
        if($(el).attr('type') == 'tel') {
          if($(el).val().length == 14) {
            $(el).valid();
          }
        } else {
          if($(el).val().length > 0)
            $(el).valid();
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
        message: 'Please enter business name',
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
          url: 'php/form-feedback.php',
          data: {
            name: form.find('[name="name"]').val(),
            message: form.find('[name="message"]').val(),
            email: form.find('[name="email"]').val(),
            phone: form.find('[name="phone"]').val()
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
      }
    });
  });

  // files form
  $('.form-careers').each(function() {
    $(this).validate({
      submitHandler: function(form) {
        var form = $(form),
            submitButton = form.find('[type="submit"]'),
            formData = new FormData(form[0]);
        submitButton.disable(true);

        $.ajax({
          method: 'POST',
          url: 'php/form-careers.php',
          data: formData,
          contentType: false,
          processData: false,
          dataType: 'json',
          complete: function(data) {
            // console.log(data);
            if(typeof data.responseJSON === 'object') {
              if(data.responseJSON.response == 'success') {
                window.location.href = 'careers/thank-you';
                return;
              } else if(data.responseJSON.response == 'error') {
                if(data.responseJSON.d == 'incorrect-file') {
                  var filesError = 'Please select .doc, .docx or .pdf file, <span style="white-space: nowrap">maximum size of file: 30 MB.</span>';
                  if($('.file-input-error-description').length == 0) {
                    $('<p class="file-input-error-description">' + filesError + '</p>').appendTo(form.find('.fg-file'));
                  }
                } else {
                  alert('It seems like we have a temporary problem. We are fixing it right now. Visit us later please.');
                }
              }
            } else { 
              alert('Undefined error, please try again later.'); 
            }
            submitButton.disable(false);
          }
        });
      },
      /*errorClass: "error",
      errorPlacement: function (error, element) {
        var elem = $(element);
        if (elem.hasClass("select-item") || elem.hasClass("custom-file-input")) {
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
      }*/
    });
  });

  // Mask
  var handleMasks = function() {
    $('[name="phone"]').mask('(000) 000-0000');
    $('[data-mask-zip]').mask('00000');
  };
  $(document).on('mask-it', function() {
    handleMasks();
  }).trigger('mask-it');

  $('.select-wrap select').on('change', function() {
    if($(this).val().length > 0) {
      $(this).addClass('selected');
    } else {
      $(this).removeClass('selected');
    }
  });

  // show filename on select
  $('.file-input').each(function() {
    var cssSelected = 'file-input-selected';
    var elErrorDesc = '.file-input-error-description';
    var elFileWrap = '.fg-file';
    $(this).on('change',function() {
      var fileInput = $(this);
      var fileName = fileInput.val().split('\\').pop();

      if(fileName.length) {
        fileInput.closest(elFileWrap).addClass(cssSelected);
      } else {
        fileInput.closest(elFileWrap).removeClass(cssSelected);
      }

      fileInput.closest(elFileWrap).find('.fg-file-name > span').text(fileName);

      if($(elErrorDesc).length) {
        $(elErrorDesc).remove();
      }
      
      // fileInput.valid();
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

  $('[data-mask-phone]').each(function() {
    $(this).rules('add', 'validPhone');
  });
  $('[data-mask-zip]').each(function() {
    $(this).rules('add', 'validZip');
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
  if(bowser.msie) {
    $('html').addClass('ms-ie');
  }
  if(bowser.msedge) {
    $('html').addClass('ms-edge');
  }
  if(bowser.opera) {
    $('html').addClass('opera');
  }
  if(bowser.mac) {
    $('html').addClass('macos');
  }
  if(bowser.safari) {
    $('html').addClass('safari');
  }
  if(bowser.mobile || bowser.tablet) {
    $('html').addClass('mt-device');
  } else {
    $('html').addClass('desktop-device');
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

// scroll effects
$(function() {
  function scrollAnimation() {
    var scrollAnimationObj = {
      inited: false,
      curWidth: 0,
      enableOn: 0,
      initialProgress: 0,
      cssClass: 'animation-init',
      offsetScreen: {},
      anims: [],
      animsCount: 0,
      animOptsDefault: {
        duration: 1,
        easing: 'linear',
        autoplay: false,
      },
      setSettings: function() {
        var _t = this;
        _t.offsetScreen.top = $('.header-container').outerHeight();
        _t.curWidth = window.innerWidth;
        inView.offset(_t.offsetScreen);
      },
      setAnimProgress: function(el) {
        var _t = this,
            w = $(window),
            viewport = w.height() - _t.offsetScreen.top,
            eID = el.data('scroll-id'),
            elemPos = el.offset().top - w.scrollTop() - _t.offsetScreen.top,
            progress = 0;
            if(_t.anims[eID].viewportFull) {
              var elHeight = el.outerHeight();
              progress = 1 - (elemPos + elHeight) / (viewport + elHeight);
            } else {
              progress = 1 - elemPos / viewport;
            }

        progress = progress / _t.anims[eID].distance;
        return progress > 1 ? 1 : progress < 0 ? 0 : progress;
      },
      setAnim: function(elements, type, settings) {
        var _t = this,
            enableOn = 'enableOn' in settings ? settings.enableOn : _t.enableOn,
            initialProgress = 'initialProgress' in settings ? settings.initialProgress : _t.initialProgress,
            viewportFull = ('viewportFull' in settings && settings.viewportFull === true) ? true : false,
            distance = ('distance' in settings && settings.distance >= 0 && settings.distance <= 1) ? settings.distance : 1;

        if(type === 'scrollDynamic') {
          $(elements).each(function() {
            var el = $(this),
                eID = _t.animsCount++,
                opts = $.extend({}, _t.animOptsDefault, settings.options, {targets: el[0]});

            el.data('scroll-id', eID);
            _t.anims[eID] = {};
            _t.anims[eID].el = el;
            _t.anims[eID].enableOn = enableOn;
            _t.anims[eID].initialProgress = initialProgress;
            _t.anims[eID].viewportFull = viewportFull;
            _t.anims[eID].distance = distance;
            _t.anims[eID].opts = opts;
            _t.anims[eID].anim = anime(opts);
            if(_t.curWidth >= enableOn) {
              var progress = _t.setAnimProgress(el);
              _t.anims[eID].anim.seek(progress);
            } else {
              _t.anims[eID].anim.seek(initialProgress);
            }
          });
          inView(elements)
            .on('enter', function(el) {
              _t.triggerAnim(el, 'enter');
            })
            .on('exit', function(el) {
              _t.triggerAnim(el, 'exit');
            });
        } else if(type === 'scrollClass') {
          var cssClass = ('cssClass' in settings) ? settings.cssClass : _t.cssClass,
              triggerElement = ('triggerElement' in settings) ? settings.triggerElement : false;
        
          if(_t.curWidth >= enableOn) {
            inView(elements)
              .once('enter', function(el) {
                if(triggerElement !== false) {
                  triggerElement.addClass(cssClass);
                } else {
                  $(el).addClass(cssClass);
                }
              });
          } else {
            if(triggerElement !== false) {
              triggerElement.addClass(cssClass);
            } else {
              $(elements).addClass(cssClass);
            }
          }
        }
      },
      progressAnim: function(el) {
        var _t = this,
            eID = el.data('scroll-id');
        if(_t.curWidth >= _t.anims[eID].enableOn) {
          _t.anims[eID].anim.seek(_t.setAnimProgress(el));
        }
      },
      triggerAnim: function(element, action) {
        var _t = this,
            el = $(element),
            w = $(window);
        if(action === 'enter') {
          w.on('scroll.' + el.data('scroll-id'), function() {
            _t.progressAnim(el);
          }).trigger('scroll');
        } else if(action === 'exit') {
          w.off('scroll.' + el.data('scroll-id'));
        }
      },
      updateAnims: function() {
        var _t = this;
        _t.setSettings();
        _t.anims.forEach(function(item) {
          if(_t.curWidth >= item.enableOn) {
            // item.anim.seek(0);
            item.anim.seek(item.initialProgress);
            item.anim = anime(item.opts);
            _t.progressAnim(item.el);
          } else {
            item.anim.seek(item.initialProgress);
          }
        });
      },
      init: function() {
        var _t = this;
        _t.inited = true;
        _t.setSettings();
        $(window).on('resize', function() {
          _t.updateAnims();
        });
      }
    };

    return scrollAnimationObj;
  }

  var sa = scrollAnimation();
  sa.init();

  // card block
  sa.setAnim('.card-element-wrap', 'scrollClass', {});

  sa.setAnim('.card-element-decor', 'scrollDynamic', {
    viewportFull: true,
    enableOn: 640,
    options: {
      translateY: function(el) {
        var i = 1;
        if($(el).hasClass('ced-second')) i = 2;
        return '-' + 9.5 * i + '%';
      },
      translateX: function(el) {
        var i = 1;
        if($(el).hasClass('ced-second')) i = 2;
        return '-' + 9.5 * i + '%';
      },
    }
  });

  sa.setAnim('.svp-card-wrap', 'scrollDynamic', {
    viewportFull: true,
    enableOn: 640,
    options: {
      translateY: '47%',
      rotate: '-12deg'
    }
  });

  sa.setAnim('.additional-info', 'scrollDynamic', {
    distance: 0.8,
    enableOn: 992,
    initialProgress: 1,
    options: {
      translateX: ['-14.5%',0],
      opacity: [0,1],
    }
  });

  // equipmnent
  sa.setAnim('.tsw-anim .tile-service-info', 'scrollDynamic', {
    viewportFull: true,
    enableOn: 640,
    options: {
      translateY: function(el) {
        var w = window.innerWidth,
            tileInfo = $(el),
            tileParent = tileInfo.closest('.tile-service'),
            tileParentHeight = tileParent.outerHeight(),
            tileInfoHeight = tileInfo.outerHeight(),
            offset = parseInt(tileInfo.css('bottom'), 10),
            delta = tileParentHeight - offset*2 - tileInfoHeight;
        return -delta;
      }
    }
  });

  // testimonials
  sa.setAnim('.bdr-wrap', 'scrollClass', {
    enableOn: 640,
  });

  // calculator
  sa.setAnim('#animation-tile-card-info', 'scrollClass', {
    triggerElement: $('.tile-card-info-wrap')
  });

  sa.setAnim('.tile-card-decor', 'scrollDynamic', {
    viewportFull: true,
    enableOn: 992,
    options: {
      translateX: function(el) {
        var i = 1;
        if($(el).hasClass('tcd-second')) i = 2;
        return '+' + 6 * i + '%';
      },
    }
  });

  // free processing brand
  sa.setAnim('.block-brand #svg-inline-brand', 'scrollClass', {});

  // tile decor bg
  sa.setAnim('.tile-decor-substrate-anim > div', 'scrollDynamic', {
    viewportFull: true,
    enableOn: 768,
    initialProgress: 0.5,
    options: {
      translateY: ['20%','-20%']
    }
  });

  sa.setAnim('#tiles-cascade-init', 'scrollClass', {
    enableOn: 480
  });

  sa.setAnim('.tntd-decor-wrap .tntd-decor-item', 'scrollDynamic', {
    distance: 0.7,
    enableOn: 768,
    initialProgress: 1,
    options: {
      easing: 'easeOutQuad',
      translateX: '-100%'
    }
  });

  sa.setAnim('#compare-table-highlight', 'scrollClass', {
    enableOn: 992,
    triggerElement: $('.tile-table-column-highlight')
  });

  sa.setAnim('#cta-anim', 'scrollClass', {
    triggerElement: $('.section-cta')
  });
});

// Slider
$(function() {
  if($("#money-slider").length) {
    var slider = document.getElementById('money-slider');
    noUiSlider.create(slider, {
      start: 250000,
      connect: [true, false],
      range: {
        'min': [100000, 5000],
        '25%': [250000, 5000],
        '50%': [500000, 10000],
        '75%': [1000000, 50000],
        'max': 5000000
      },
      format: wNumb({
        decimals: 0,
        thousand: ' ',
        prefix: '$',
      }),
      pips: {
        mode: 'range',
        density: 100,
        format: wNumb({
          decimals: 0,
          prefix: '$',
          thousand: ' ',
          prefix: '$',
        })
      }
    });
    
    var inputFormat = document.getElementById('amount-value'),
        calcResult = document.getElementById('calculator-result');
    slider.noUiSlider.on('update', function( values, handle ) {
      inputFormat.value = values[handle];
      calcResult.innerHTML = parseInt(values[handle].replace(/\D/g,''), 10) * 0.03;
      var bgPos = ((parseInt(values[handle].replace(/\D/g,''), 10) - 100000) / 5000000) * 100 * 5.5;
      if(bgPos > 100) bgPos = 100;
      anime({
        targets: $('.tile-card-info-bg')[0],
        top: -bgPos + '%',
        duration: 0
      })
    });
    inputFormat.addEventListener('change', function(){
      slider.noUiSlider.set(this.value);
    });
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

// tilt
$(function() {
  $('.tile-service-link-img, .tile-service-sm-img').tilt({
    scale: 1.02
  });
});