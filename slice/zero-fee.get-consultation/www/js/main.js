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

// menu animate
// $(function() {
//   var closingNav = false;
//   $('.header-btn-nav').on('click', function() {
//     if(closingNav) return;
//     $('.header-btn-nav').toggleClass('header-btn-nav-active');
//     $('.header-nav').toggleClass('header-nav-active');
//   });

//   // Close menu if click outside or scroll main content
//   $(document).on('mouseup touchstart', function (e) {
//     var elem = $('.header-nav'),
//         elemBtn = $('.header-btn-nav');
//     if (elem.hasClass('header-nav-active') && 
//         !elem.is(e.target) && elem.has(e.target).length === 0 && 
//         !elemBtn.is(e.target) && elemBtn.has(e.target).length === 0) {
//       closingNav = true;
//       setTimeout(function() {
//         closingNav = false;
//       }, 150);
//       elemBtn.removeClass('header-btn-nav-active');
//       elem.removeClass('header-nav-active');
//     }
//   });
// });

// services select
$(function() {
  var closingNav = false,
      elem = $('.hb-cart-service-list'),
      elemBtn = $('.hb-cart-service-selected');

  function closeServicesList() {
    closingNav = true;
    setTimeout(function() {
      closingNav = false;
    }, 150);
    elemBtn.removeClass('active');
    elem.removeClass('active');
  }

  function selectService(serviceId) {
    var service = $('.hb-cart').find('[data-service="' + serviceId + '"]'),
        serviceTile = $('.fa-step-device').find('[data-service="' + serviceId + '"]');

    // add active class to cart item
    $('.hb-cart-service-list li').removeClass('active');
    service.addClass('active');
    // add active class to form tile
    $('.fa-step-device .tile-img-info-link').removeClass('active');
    serviceTile.addClass('active');

    $('.hb-cart-01 .hbc-main').html(service.find('> span').text());
    $('.hb-cart-01 .hbc-highlighted').html(service.find('.hb-cart-service-list-price > span:first-child').html());
    $('.hb-cart-01 .hbc-old').html(service.find('.hb-cart-service-list-price > span:last-child').html());

    var url = service.data('service-url');
    setUrl(url);

    $('[name="service"]').val(service.data('service'));
    $('[name="service"]').trigger('change');

    if(!$('.hb-cart-01').hasClass('visible')) {
      $('.hb-cart-01').addClass('visible'); // should trigger to autovalidate after change for hidden field
    }

    closeServicesList();
  }

  function setUrl(url) {
    if (history.replaceState) {
      var query = window.location.search;
      history.replaceState(null, null, url + query);
    }
  }

  $('.hb-cart-service-selected').on('click', function() {
    if(closingNav) return;
    $('.hb-cart-service-selected').toggleClass('active');
    $('.hb-cart-service-list').toggleClass('active');
  });

  // close list if click outside or scroll main content
  $(document).on('mouseup touchstart', function (e) {
    if (elem.hasClass('active') && 
        !elem.is(e.target) && elem.has(e.target).length === 0 && 
        !elemBtn.is(e.target) && elemBtn.has(e.target).length === 0) {
      closeServicesList();
    }
  });

  if($('[name="service"]').length && $('[name="service"]').val().length > 0) {
    selectService($('[name="service"]').val());
  }
  /*if($('.hb-cart-service-list li.active').length) {
    var serviceId = $('.hb-cart-service-list li.active').data('service');
    selectService(serviceId);
  }*/

  // show header services button after init
  if(!$('.hb-cart').hasClass('hb-cart-visible')) {
    $('.hb-cart').addClass('hb-cart-visible');
  }

  // update selected service and close list
  $('.hb-cart-service-list li').on('click', function() {
    var serviceId = $(this).data('service');
    selectService(serviceId);
  });

  // select service on tiles inside form
  $('.fa-step-device .tile-img-info-link').on('click', function() {
    var serviceId = $(this).data('service');
    selectService(serviceId);
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

// dapp and validation
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

  $.validator.addMethod('validEmail', function (value, element) {
    var email = $.validator.methods.email.bind(this);

    var lastPart = value.slice(value.lastIndexOf('@') + 1);
    var emailCondition = (lastPart.indexOf('.') > -1 && lastPart.slice(lastPart.lastIndexOf(".") + 1).length >= 2) ? true : false;

    return this.optional(element) || (email(value, element) && emailCondition);
  }, function(params, element) {
    return 'Please enter a valid email address.'
  });

  $.validator.addMethod('validString', function (value, element) {
    return this.optional(element) || $.trim(value).length > 0
  }, $.validator.format("Please enter a valid info."));

  $.validator.addMethod('validExactLength', function (value, element, param) {
    return this.optional(element) || value.length == param
  }, $.validator.format("Please enter exactly {0} characters"));

  $.validator.addMethod('validPhone', function (value, element) {
    return this.optional(element) || /^\(\d{3}\)\s\d{3}-\d{4}$/.test(value);
  }, function(params, element) {
    return 'Phone format (XXX) XXX-XXXX'
  });

  $.validator.addMethod('validZip', function (value, element) {
    return this.optional(element) || /^\d{5}$/.test(value);
  }, function(params, element) {
    return 'Zip format XXXXX'
  });

  $.validator.addMethod('validTax', function (value, element) {
    return this.optional(element) || /^\d{2}-\d{7}$/.test(value);
  }, function(params, element) {
    return 'Tax ID format XX-XXXXXXX'
  });

  $.validator.addMethod('validSSN', function (value, element) {
    return this.optional(element) || /^\d{3}-\d{2}-\d{4}$/.test(value);
  }, function(params, element) {
    return 'SSN format XXX-XX-XXXX'
  });

  $.validator.addMethod('validUrl', function (value, element) {
    var url = $.validator.methods.url.bind(this);
    return url(value, element) || url('http://' + value, element);
  }, function(params, element) {
    return 'Please enter a valid URL.'
  });
  // date format
  $.validator.addMethod('validDateFull', function( value, element ) {
    function isValidDate(dateString) {
      if(!/^\d{1,2}\/\d{1,2}\/\d{4}$/.test(dateString))
          return false;

      var parts = dateString.split("/");
      var month = parseInt(parts[0], 10);
      var day = parseInt(parts[1], 10);
      var year = parseInt(parts[2], 10);

      var minYear = new Date();
      // minYear.setFullYear(minYear.getFullYear() - 17);

      if(year < 1900 || year > minYear.getFullYear() || month == 0 || month > 12) {
        return false;
      }

      var monthLength = [ 31, 28, 31, 30, 31, 30, 31, 31, 30, 31, 30, 31 ];

      // Adjust for leap years
      if(year % 400 == 0 || (year % 100 != 0 && year % 4 == 0))
          monthLength[1] = 29;

      return day > 0 && day <= monthLength[month - 1];
    };

    return this.optional(element) || isValidDate(value);
  }, function(params, element) {
    return 'Date format MM/DD/YYYY'
  });

  $.validator.addMethod('validDateMonth', function( value, element ) {
    function isValidDate(dateString) {
      if(!/^\d{1,2}\/\d{4}$/.test(dateString))
          return false;

      var parts = dateString.split("/");
      var month = parseInt(parts[0], 10);
      var year = parseInt(parts[1], 10);

      var minYear = new Date();
      // minYear.setFullYear(minYear.getFullYear() - 17);

      if(year < 1700 || year > minYear.getFullYear() || month == 0 || month > 12) {
        return false;
      }

      return true;
    };

    return this.optional(element) || isValidDate(value);
  }, function(params, element) {
    return 'Date format MM/YYYY'
  });

  $.validator.addMethod('validDateYear', function( value, element ) {
    function isValidDate(dateString) {
      if(!/^\d{4}$/.test(dateString))
          return false;

      var minYear = new Date();
      // minYear.setFullYear(minYear.getFullYear() - 17);

      if(dateString < 1700 || dateString > minYear.getFullYear()) {
        return false;
      }

      return true;
    };

    return this.optional(element) || isValidDate(value);
  }, function(params, element) {
    return 'Date format YYYY'
  });

  // Validation
  $('.form-application').each(function() {
    $(this).validate({
      ignore: ':hidden:not([name="service"]), .fa-step-item:not(.slick-active) .form-control',
      submitHandler: function(form) {
        var form = $(form),
            submitButton = form.find('[type="submit"]'),
            dataToPass = form.serializeArray();
        submitButton.disable(true);

        stepsControl.loaderState('show');

        // GTM event
        var gtm = window.dataLayer || [];

        gtm.push({
          'event': 'submit_form',
          'completed_step': 'completed-step-prepare-to-docusign'
        });
        // end GTM event

        // param which lead to docusign
        dataToPass.push({name: 'step', value: 'ds'});

        if(stepsControl.cs == true) {
          dataToPass.push({name: 'cs', value: 'true'});
          stepsControl.cs = false;
        }

        $.ajax({
          method: 'POST',
          url: 'php/form-application.php',
          data: dataToPass,
          dataType: 'json',
          complete: function(data) {
            if (typeof data.responseJSON === 'object') {
              if (data.responseJSON.response == 'success') {
                window.location.href = data.responseJSON.r;
                return;
              } else {
                alert('It seems like we have a temporary problem. Please re-check all fields.');
              }
            } else { 
              alert('Undefined error, please try again later.'); 
            }
            submitButton.disable(false);
            stepsControl.loaderState('hide');
          }
        });
      },
      errorClass: "error",
      errorPlacement: function (error, element) {
        var elem = $(element);
        if (elem.hasClass("select-item")) {
          error.insertAfter(elem.next());
        } else if(elem.is('[name="service"]')) {
          error.insertBefore('#fg-btn-submit button');
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

  var fieldsArr = [];
  fieldsArr.push('service');
  fieldsArr.push('business_legal_name');
  fieldsArr.push('business_term');
  fieldsArr.push('business_email');
  fieldsArr.push('annual_cards_vol');
  fieldsArr.push('avg_sale');
  fieldsArr.push('business_dba_name');
  fieldsArr.push('products_service_sold');
  fieldsArr.push('business_type');
  fieldsArr.push('business_phone');
  fieldsArr.push('business_tax_id');
  fieldsArr.push('business_address_street');
  fieldsArr.push('business_city');
  fieldsArr.push('business_state');
  fieldsArr.push('business_zip');
  fieldsArr.push('first_name');
  fieldsArr.push('last_name');
  fieldsArr.push('title_name');
  fieldsArr.push('ownership_perc');
  fieldsArr.push('birth_date');
  fieldsArr.push('personal_email');
  fieldsArr.push('personal_phone');
  fieldsArr.push('home_address_street');
  fieldsArr.push('home_city');
  fieldsArr.push('home_state');
  fieldsArr.push('home_zip');
  fieldsArr.push('social_security');

  for(var i=0; i < fieldsArr.length; i++) {
    $('[name="' + fieldsArr[i] + '"]').rules('add', 'required');
  }

  $('[data-field-string]').each(function() {
    $(this).rules('add', 'validString');
  });

  $('[type="email"]').each(function() {
    $(this).rules('add', {email: false});
    $(this).rules('add', 'validEmail');
  });

  $('[name="business_term"]').rules('add', 'validDateYear');
  $('[name="birth_date"]').rules('add', 'validDateFull');

  $('[data-field-address]').each(function() {
    $(this).rules('add', {maxlength: 50});
  });

  $('[data-field-city]').each(function() {
    $(this).rules('add', {maxlength: 30});
  });

  $('[data-mask-phone]').each(function() {
    $(this).rules('add', 'validPhone');
  });
  $('[data-mask-zip]').each(function() {
    $(this).rules('add', 'validZip');
  });
  $('[data-mask-tax]').each(function() {
    $(this).rules('add', 'validTax');
  });
  $('[data-mask-percentage]').each(function() {
    $(this).rules('add', {min: 1, max: 100});
  });
  $('[data-mask-ssn]').each(function() {
    $(this).rules('add', 'validSSN');
  });

  $('[name="service"]').rules('add', {messages: {required: 'Please select device'}});
  $('[name="service"]').on('change', function() {
    $(this).valid();
  });

  // autofill business dba name
  $('[name="business_legal_name"]').on('keyup focusout', function() {
    $('[name="business_dba_name"]').val($(this).val());
  });

  var handleMasks = function() {
    $('[data-mask-phone]').mask('(000) 000-0000');
    $('[data-mask-zip]').mask('00000');
    $('[data-mask-tax]').mask('00-0000000');
    $('[data-mask-ssn]').mask('000-00-0000');
    $('[data-mask-rn]').mask('000000000');
    $('[data-mask-an]').mask('00000999999999999');

    $('[data-mask-percentage]').mask('990', {clearIfNotMatch: true, reverse: true});

    $('[data-mask-date]').mask('00/00/0000');
    $('[data-mask-date-01]').mask('0000');

    $('[data-mask-money]').each(function() {
      var inputField = $(this);
      var moneyOptions =  {
        onKeyPress: function(cep, e, field, options) {
          var masks = ['$0#', '$0 00#', '$00 000#', '$000 000#', '$0 000 000#', '$00 000 000#', '$000 000 000'];
          var mask = '$0#';
          var num = cep.replace(/\s/g, '');
          if(num.length <= 4) {
            mask = masks[0];
          } else if(num.length == 5) {
            mask = masks[1];
          } else if(num.length == 6) {
            mask = masks[2];
          } else if(num.length == 7) {
            mask = masks[3];
          } else if(num.length == 8) {
            mask = masks[4];
          } else if(num.length == 9) {
            mask = masks[5];
          } else if(num.length == 10) {
            mask = masks[6];
          }
          inputField.mask(mask, moneyOptions);
        },
        clearIfNotMatch: true,
        placeholder: '$'
      };
      inputField.mask('$0#', moneyOptions);
    });
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
      minimumResultsForSearch: elem.is('[data-select-input]') ? 0 : Infinity
    });
  });
  // Validate after change
  $('.select-item').on('change.s2v', function () {
    $(this).valid();
  });
  // Focus input field when open im mobile
  $('[data-select-input]').on('select2:open', function() {
    $('.select2-search__field').focus();
  });

  // files form
  $('.form-files').each(function() {
    $(this).validate({
      submitHandler: function(form) {
        var form = $(form),
            submitButton = form.find('[type="submit"]'),
            formData = new FormData(form[0]);
        submitButton.disable(true);

        stepsControl.loaderState('show');

        $.ajax({
          method: 'POST',
          url: 'php/form-files.php',
          data: formData,
          contentType: false,
          processData: false,
          dataType: 'json',
          complete: function(data) {
            if (typeof data.responseJSON === 'object') {
              if (data.responseJSON.response == 'success') {
                window.location.href = data.responseJSON.r;
                return;
              } else if(data.responseJSON.response == 'error') {
                var fields = data.responseJSON.d;
                for(var i = 0; i < fields.length; i++) {
                  var f = fields[i];
                  if(f.error === false) {
                    $('[name="' + f.field + '_s"]').val('s');
                  }
                }

                var filesError = 'Please select JPG or PNG image, <span style="white-space: nowrap">maximum size of image: 10 MB.</span>';
                if($('.fileinput-error-description').length == 0) {
                  $('<p class="fileinput-error-description">' + filesError + '</p>').insertAfter($('#voided-check-photo'));
                }
              }
            } else { 
              alert('Undefined error, please try again later.'); 
            }
            submitButton.disable(false);
            stepsControl.loaderState('hide');
          }
        });
      },
      errorClass: "error",
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
      }
    });
  });

  $('[data-mask-rn]').each(function() {
    $(this).rules('add', {validExactLength: 9});
  });

  $('[data-mask-an]').each(function() {
    $(this).rules('add', {minlength: 5, maxlength: 17});
  });

  // show filename on select
  $('.custom-file-input').each(function() {
    $(this).on('change',function() {
      var fileInput = $(this);
      //get the file name
      var fileName = fileInput.val().split('\\').pop();
      //replace the "Choose a file" label
      if(fileName.length) {
        fileInput.next('.custom-file-label').find('.cfl-text > span').text(fileName);
        fileInput.addClass('custom-file-input-selected');
      } else {
        fileInput.removeClass('custom-file-input-selected');
      }

      if($('.fileinput-error-description').length) {
        $('.fileinput-error-description').remove();
      }
      
      fileInput.valid();
    });
  });

  // dapp steps
  var stepsControl = {
    form: $('.application-form-steps'),
    completedSteps: [],
    finalStepNum: $('.application-form-steps').children().length == 1 ? 0 : $('.application-form-steps').children().length - 1,
    cs: false, // continue step - uses for email notification

    currentStep: function() {
      var _this = this;
      return _this.form.slick('slickCurrentSlide');
    },

    formBtnActivate: function() {
      var _this = this;
      _this.form.find('[type="submit"]').prop('disabled', false);
    },

    goToNextStep: function(btn) {
      var _this = this,
          stepWrap = btn.closest('.fa-step-item'),
          isAllFieldsValid = true,
          elemToFocus = false;

      stepWrap.find('.form-control').each(function() {
        if(!$(this).valid()) {
          isAllFieldsValid = false;
          if(elemToFocus === false) {
            elemToFocus = $(this);
          }
        }
      });

      if(isAllFieldsValid) {
        // GTM event
        var gtm = window.dataLayer || [];
        gtm.push({
          'event': 'submit_form',
          'completed_step': 'completed-step-' + _this.currentStep()
        });
        // end GTM event

        _this.saveInfo(btn);
      } else {
        elemToFocus.focus();
      }
    },

    saveInfo: function(btn) {
      var _this = this,
          dataToPass = _this.form.serializeArray(),
          shouldChangeStep = false,
          currentStep = _this.currentStep(),
          oidField = $('[name="id"]'),
          potentialSavings = $('[name="potential_savings"]');

      _this.loaderState('show');

      if(btn !== undefined) {
        shouldChangeStep = true;
        btn.disable(true);
      }

      if(_this.cs == true) {
        dataToPass.push({name: 'cs', value: 'true'});
        _this.cs = false;
      }

      // un-disable submit button
      if(currentStep == _this.finalStepNum - 1) {
        _this.formBtnActivate();
      }

      // if user already complete this step - go to next without ajax
      if(_this.completedSteps.indexOf(currentStep) != -1) {
        _this.loaderState('hide');
        if(shouldChangeStep === true) {
          _this.changeStep(currentStep + 1);
        }
        return;
      }

      $.ajax({
        method: 'POST',
        url: 'php/form-application.php',
        data: dataToPass,
        dataType: 'json',
        complete: function(data) {
          if(typeof data.responseJSON === 'object' && data.responseJSON.response == 'success') {
            if(data.responseJSON.r.length > 1) {
              window.location.href = data.responseJSON.r;
              return;
            }
            var dataReturnJson = _this.parseJson(data.responseJSON.d);
            if(typeof dataReturnJson === 'object') {
              oidField.val(dataReturnJson.id);
              potentialSavings.val(dataReturnJson.potential_savings);
            }
            _this.showPotentialSavings();
          }
          if(shouldChangeStep === true) {
            _this.completedSteps.push(currentStep);
            _this.changeStep(currentStep + 1);
          }
          _this.loaderState('hide');
        }
      });
    },

    parseJson: function(jsonString) {
      try {
        var o = JSON.parse(jsonString);
        if (o && typeof o === "object") {
          return o;
        }
      }
      catch (e) { }

      return false;
    },

    changeStep: function(stepNum) {
      var _this = this,
          stepChangeDelay = 1,
          scrollOffset = $('#header').outerHeight() + 30,
          stepNumCss = stepNum + 1;

      scrollOffset = 0;

      setTimeout(function() {
        $('html, body').scrollTop(0);

        _this.form.slick('slickGoTo', stepNum);
        $('[name="step"]').val(stepNum);

      }, stepChangeDelay);
    },

    continueFromStep: function() {
      var _this = this,
          stepToShow = $('[name="step"]').val(),
          stepToShowNum = parseInt(stepToShow, 10),
          isContinue = _this.form.attr('data-form-cs');

      if(typeof isContinue !== typeof undefined && isContinue !== false && _this.currentStep() !== stepToShowNum) {
        if(stepToShowNum == _this.finalStepNum) {
          _this.formBtnActivate();
        }
        _this.cs = true;
        _this.form.slick('slickGoTo', stepToShowNum, true);
      }
      
      _this.form.addClass('form-application-initialized');
    },

    loaderState: function(action) {
      var _this = this,
          loader = $('.loader-wrap'),
          loaderActiveCss = 'loader-active';

      if(action == 'show') {
        loader.addClass(loaderActiveCss);
      } else if(action == 'hide') {
        loader.removeClass(loaderActiveCss);
      }
    },

    showPotentialSavings: function() {
      if($('[name="potential_savings"]').length) {
        var potentialSavings = $('[name="potential_savings"]').val(),
            psVal = '',
            psText = '',
            psTextHtml = '';

        if(potentialSavings.length > 0) {
          var psDividerPos = potentialSavings.indexOf("$");

          psVal = potentialSavings.substring(psDividerPos);
          psText = potentialSavings.substring(0, psDividerPos);

          if(psVal.length > 0 && psText.length > 0) {
            var psTextSplit = psText.split(' ');
            psTextHtml = psTextSplit[0] + '<br>' + psTextSplit[1];
            $('#calc-annual-savings').text(psVal);
            $('.iil-description-01').html(psTextHtml);
          }
        }
        if(psVal.length == 0 || psTextHtml.length == 0) {
          $('.potential-savings-result-wrap').css('display', 'none');
        } else {
          $('.potential-savings-result-wrap').css('display', 'block');
        }
      }
    },

  };

  $('button[data-form-next-step]').on('click', function() {
    stepsControl.goToNextStep($(this));
  });

  // should run after validation and before continueFromStep to properly work
  $('.application-form-steps').slick({
    dots: false,
    arrows: false,
    draggable: false,
    swipe: false,
    touchMove: false,
    fade: true,
    infinite: false,
    speed: 400,
    slidesToShow: 1,
    adaptiveHeight: true,
    accessibility: false,
  });

  stepsControl.showPotentialSavings();
  stepsControl.continueFromStep();
});

// focus loop on elements inside the step on tab key click or next field button on mobile keyboard
$(function() {
  var lastFocused = false;
  $('.fa-step-item .form-control').each(function() {
    var field = $(this);

    field.on('focus', function() {
      var fieldFocused = $(this);
      if(lastFocused === false) {
        lastFocused = fieldFocused;
      }
      if(fieldFocused.closest('.fa-step-item').hasClass('slick-active')) {
        lastFocused = fieldFocused;
      } else {
        lastFocused.focus();
      }
    });
  });

  function tabKeyControl(fields) {
    fields.each(function(index,element) {
      var el = $(element),
          step = el.closest('.fa-step-item'),
          stepFields = step.find('.form-control');

      el.keydown(function(e) {
        var code = e.keyCode || e.which;
        if(code === 9) {
          var nextFocusIndex = index == stepFields.length - 1 ? 0 : index + 1;
          stepFields[nextFocusIndex].focus();
          e.preventDefault();
        }
      })
    });
  }

  $('.fa-step-item').each(function() {
    tabKeyControl($(this).find('.form-control'));
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







