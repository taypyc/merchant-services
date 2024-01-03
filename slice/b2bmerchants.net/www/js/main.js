// header / menu
$(function() {
  if($('.header-01').length) {
    var activeStartPos = 1,
        activeStartElem = $('.section-hero'),
        shadowStartPos = 1,
        activeCss = 'header-active',
        shadowCss = 'header-shadow',
        html = $('html');
    if(activeStartElem && activeStartElem.length) {
      $(window).on('resize', function() {
        activeStartPos = $(activeStartElem).offset().top + $(activeStartElem).outerHeight();
      });
    }
    function checkActiveHeader() {
      // if ($(window).scrollTop() >= parseInt(activeStartPos)) {
      //   if(!html.hasClass(activeCss)) {
      //     html.addClass(activeCss);
      //     menuAction('close');
      //   }
      // } else {
      //   if(html.hasClass(activeCss)) {
      //     html.removeClass(activeCss);
      //   }
      // }
    }
    function checkShadowHeader() {
      if ($(window).scrollTop() >= parseInt(shadowStartPos)) {
        if(!html.hasClass(shadowCss)) {
          html.addClass(shadowCss);
        }
      } else {
        if(html.hasClass(shadowCss)) {
          html.removeClass(shadowCss);
        }
      }
    }
    $(window).on('scroll resize', function() {
      // checkActiveHeader();
      checkShadowHeader();
    });
    $(window).trigger('resize');
  }

  var closingNav = false;

  $('.header-btn-nav').on('click', function() {
    menuAction('toggle');
  });

  // Close menu if click outside or scroll main content
  $(document).on('mouseup touchstart', function (e) {
    var elem = $('.header-nav'),
        elemBtn = $('.header-btn-nav');
    if (elem.hasClass('header-nav-active') &&
        !elem.is(e.target) && elem.has(e.target).length === 0 &&
        !elemBtn.is(e.target) && elemBtn.has(e.target).length === 0) {
      menuAction('close');
    }
  });

  // close menu on click to menu
  $('.hn-menu a').on('click', function() {
    menuAction('close');
  });

  function menuAction(action) {
    if(closingNav) return;

    var elem = $('.header-nav'),
        elemBtn = $('.header-btn-nav');

    closingNav = true;
    setTimeout(function() {
      closingNav = false;
    }, 150);

    if(action == 'toggle') {
      elemBtn.toggleClass('header-btn-nav-active');
      elem.toggleClass('header-nav-active');
    } else if(action == 'close') {
      elemBtn.removeClass('header-btn-nav-active');
      elem.removeClass('header-nav-active');
    }
  }
});

// services select
$(function() {
  var closingNav = false,
      elem = $('.hb-cart-service-list'),
      elemBtn = $('.hb-cart-service-selected');

  /*function closeServicesList() {
    closingNav = true;
    setTimeout(function() {
      closingNav = false;
    }, 150);
    elemBtn.removeClass('active');
    elem.removeClass('active');
  }*/

  function selectService(serviceId) {
    var service = $('.hb-cart').find('[data-service="' + serviceId + '"]');
    /*var service = $('.hb-cart').find('[data-service="' + serviceId + '"]'),
        serviceTile = $('.fa-step-device').find('[data-service="' + serviceId + '"]');*/

    // add active class to cart item
    $('.hb-cart-service-list li').removeClass('active');
    service.addClass('active');
    // add active class to form tile
    /*$('.fa-step-device .tile-img-info-link').removeClass('active');
    serviceTile.addClass('active');*/

    $('.hb-cart-01 .hbc-main').html(service.find('> span').text());
    $('.hb-cart-01 .hbc-highlighted').html(service.find('.hb-cart-service-list-price > span:first-child').html());
    $('.hb-cart-01 .hbc-old').html(service.find('.hb-cart-service-list-price > span:last-child').html());

    /*var url = service.data('service-url');
    setUrl(url);*/

    /*$('[name="service"]').val(service.data('service'));
    $('[name="service"]').trigger('change');*/

    if(!$('.hb-cart-01').hasClass('visible')) {
      $('.hb-cart-01').addClass('visible'); // should trigger to autovalidate after change for hidden field
    }

    // closeServicesList();
  }

  /*function setUrl(url) {
    if (history.replaceState) {
      var query = window.location.search;
      history.replaceState(null, null, url + query);
    }
  }*/

  /*$('.hb-cart-service-selected').on('click', function() {
    if(closingNav) return;
    $('.hb-cart-service-selected').toggleClass('active');
    $('.hb-cart-service-list').toggleClass('active');
  });*/

  // close list if click outside or scroll main content
  /*$(document).on('mouseup touchstart', function (e) {
    if (elem.hasClass('active') &&
        !elem.is(e.target) && elem.has(e.target).length === 0 &&
        !elemBtn.is(e.target) && elemBtn.has(e.target).length === 0) {
      closeServicesList();
    }
  });*/

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
  /*$('.hb-cart-service-list li').on('click', function() {
    var serviceId = $(this).data('service');
    selectService(serviceId);
  });*/

  // select service on tiles inside form
  /*$('.fa-step-device .tile-img-info-link').on('click', function() {
    var serviceId = $(this).data('service');
    selectService(serviceId);
  });*/
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
  // tax format
  $.validator.addMethod('validTax', function (value, element) {
    return this.optional(element) || /^\d{2}-\d{7}$/.test(value);
  }, function(params, element) {
    return 'Tax ID format XX-XXXXXXX'
  });
  // ssn format
  $.validator.addMethod('validSSN', function (value, element) {
    return this.optional(element) || /^\d{3}-\d{3}-\d{3}$/.test(value);
  }, function(params, element) {
    return 'SIN format XXX-XXX-XXX'
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
  // date month format
  $.validator.addMethod('validDateMonth', function( value, element ) {
    function isValidDate(dateString) {
      // First check for the pattern
      if(!/^\d{1,2}\/\d{4}$/.test(dateString))
          return false;

      // Parse the date parts to integers
      var parts = dateString.split("/");
      var month = parseInt(parts[0], 10);
      var year = parseInt(parts[1], 10);

      var minYear = new Date();
      // minYear.setFullYear(minYear.getFullYear() - 17);

      // Check the ranges of month and year
      if(year < 1613 || year > minYear.getFullYear() || month == 0 || month > 12) {
        return false;
      }

      return true;
    };

    return this.optional(element) || isValidDate(value);
  }, function(params, element) {
    return 'Date format MM/YYYY'
  });
  // date year format
  $.validator.addMethod('validDateYear', function( value, element ) {
    function isValidDate(dateString) {
      // First check for the pattern
      if(!/^\d{4}$/.test(dateString))
          return false;

      var minYear = new Date();
      // minYear.setFullYear(minYear.getFullYear() - 17);

      // Check the ranges of month and year
      if(dateString < 1613 || dateString > minYear.getFullYear()) {
        return false;
      }

      return true;
    };

    return this.optional(element) || isValidDate(value);
  }, function(params, element) {
    return 'Date format YYYY'
  });

  /*$.validator.setDefaults({
    onkeyup: function () {
      var originalKeyUp = $.validator.defaults.onkeyup;
      var customKeyUp =  function (element, event) {
        var el = $(element);
        if (typeof(el.attr('data-mask-phone')) !== 'undefined' && el.attr('data-mask-phone') !== false) {
          //return false;
          if(el.val().length == 14) {
            el.valid();
          }
        } else {
          return originalKeyUp.call(this, element, event);
        }
      }

      return customKeyUp;
    }()
  });*/

  // Validation
  $('.form-application').each(function() {
    $(this).validate({
      // ignore: ':hidden:not([name="service"])',
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
          // data: form.serialize(),
          dataType: 'json',
          complete: function(data) {
            // console.log(data);
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
  // fieldsArr.push('business_tax_id');
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

  $('[name="business_term"]').rules('add', 'validDateMonth');
  $('[name="birth_date"]').rules('add', 'validDateFull');

  $('[data-field-address]').each(function() {
    // var maxLengthVal = parseInt($(this).data('maxlength'), 10);
    $(this).rules('add', {maxlength: 50});
  });

  $('[data-field-city]').each(function() {
    $(this).rules('add', {maxlength: 30});
  });

  $('[data-mask-phone]').each(function() {
    $(this).rules('add', 'validPhone');
  });
  // $('[data-mask-zip]').each(function() {
  //   $(this).rules('add', 'validZip');
  // });
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
  // potential savings value
  /*$('[name="annual_cards_vol"]').on('change', function() {
    stepsControl.calcPotentialSavings($(this));
  });*/

  var handleMasks = function() {
    $('[data-mask-phone]').mask('(000) 000-0000');
    $('[data-mask-tax]').mask('00-0000000');
    $('[data-mask-ssn]').mask('000-000-000');
    $('[data-mask-rn]').mask('000000000');
    $('[data-mask-an]').mask('00000999999999999');

    $('[data-mask-percentage]').mask('990', {clearIfNotMatch: true, reverse: true});

    $('[data-mask-date]').mask('00/00/0000');
    $('[data-mask-date-01]').mask('0000');
    $('[data-mask-date-02]').mask('00/0000');

    $('[data-mask-zip]').each(function() {
      var inputField = $(this);
      var masks = ['AAA AAAA', 'AAAA AAAA', 'AAAAAAAAAA'];
      var opts =  {
        onKeyPress: function(cep, e, field, options) {
          var mask = masks[0];
          var val = cep.replace(/\s/g, '');
          if(val.length < 7) {
            mask = masks[0];
          } else if(val.length == 7) {
            mask = masks[1];
          } else if(val.length > 7) {
            mask = masks[2];
          }
          inputField.mask(mask, opts);
        },
      };
      inputField.mask(masks[0], opts);
    });

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
      // minimumResultsForSearch: Infinity
      // typeof isContinue !== typeof undefined && isContinue !== false
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
            // console.log(data);
            if (typeof data.responseJSON === 'object') {
              if (data.responseJSON.response == 'success') {
                window.location.href = data.responseJSON.r;
                return;
              } else if(data.responseJSON.response == 'error') {
                var fields = data.responseJSON.d;
                // console.log(fields);
                for(var i = 0; i < fields.length; i++) {
                  var f = fields[i];
                  if(f.error === false) {
                    $('[name="' + f.field + '_s"]').val('s');
                  }
                }

                var filesError = 'Please select JPG or PNG image, <span style="white-space: nowrap">maximum size of image: 30 MB.</span>';
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
    // formHeaders: $('.ssw-headers'),
    // stepsNavigation: $('.ssw-navigation'),
    // sectionSignup: $('.section-signup'),
    completedSteps: [],
    finalStepNum: $('.application-form-steps').children().length == 1 ? 0 : $('.application-form-steps').children().length - 1,
    cs: false, // continue step - uses for email notifiaction

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
          oidField = $('[name="oid"]');

      _this.loaderState('show');

      if(btn !== undefined) {
        shouldChangeStep = true;
        btn.disable(true);
      }

      if(_this.cs == true) {
        dataToPass.push({name: 'cs', value: 'true'});
        _this.cs = false;
      }

      /*if(currentStep == 0) {
        _this.calcPotentialSavings($('[name="annual_cards_vol"]'));
      }*/



      // if(oidField.val().length > 0) {
      //   dataToPass.push({name: 'oid', value: oidField.val()});
      // }

      // pass number of step
      // dataToPass.push({name: 'step', value: currentStep});

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
          _this.loaderState('hide');
          // console.log(data);
          // save oid if create or update opportunity was successful
          if(typeof data.responseJSON === 'object' && data.responseJSON.response == 'success') {
            if(data.responseJSON.r.length > 1) {
              window.location.href = data.responseJSON.r;
            }
            oidField.val(data.responseJSON.d);
          }
          if(shouldChangeStep === true) {
            _this.completedSteps.push(currentStep);
            _this.changeStep(currentStep + 1);
            return;
          }
        }
      });
    },

    /*navToStep: function(btn) {
      var _this = this,
          navBtnWrap = btn.closest('.ssw-graph-item'),
          stepNum = navBtnWrap.index('.ssw-graph-item');

      if(stepNum < this.currentStep()) {
        _this.changeStep(stepNum);
      }
    },*/

    changeStep: function(stepNum) {
      var _this = this,
          stepChangeDelay = 1,
          scrollOffset = $('#header').outerHeight() + 30,
          stepNumCss = stepNum + 1;

      scrollOffset = 0;

      setTimeout(function() {
        $('html, body').scrollTop(0);
        // if(_this.sectionSignup.offset().top < $(window).scrollTop() + scrollOffset) {
        //   $('html, body').scrollTop(_this.sectionSignup.offset().top - scrollOffset)
          /*$('html, body').animate({
            scrollTop: _this.sectionSignup.offset().top - scrollOffset
          }, 200, 'easeOutQuad');
          stepChangeDelay = 100;*/
        // }

        // _this.formHeaders.slick('slickGoTo', stepNum);
        _this.form.slick('slickGoTo', stepNum);
        $('[name="step"]').val(stepNum);

        /*_this.stepsNavigation.removeClass(function(index, className) {
          return (className.match(/(^|\s)sswn-\S+/g) || []).join(' ');
        });
        _this.stepsNavigation.addClass('sswn-' + stepNumCss);*/

        // _this.stepHover(null, 'clear');
      }, stepChangeDelay);
    },

    continueFromStep: function() {
      var _this = this,
          stepToShow = $('[name="step"]').val(),
          stepToShowNum = parseInt(stepToShow, 10),
          isContinue = _this.form.attr('data-form-cs');

      // stepToShowNum = parseInt(stepToShow, 10);

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

    /*calcPotentialSavings: function(field) {
      var annualVal = field.val(),
          calcAnnualVal = $('#calc-annual-savings'),
          potentialSavingsDescription = 'up to';

      annualVal = parseInt(annualVal, 10);
      if(annualVal > 1000000) {
        annualVal = 1000000;
        $('#calc-annual-savings-d1').css('display', 'none');
        $('#calc-annual-savings-d2').css('display', 'inline-block');

        potentialSavingsDescription = 'more than';
      }

      var annualValPerc = parseInt(annualVal * 0.035, 10);
      calcAnnualVal.text(annualValPerc);
      calcAnnualVal.unmask();
      calcAnnualVal.mask('# ##0', {reverse: true});
      calcAnnualVal.text('$' + calcAnnualVal.text());

      $('[name="potential_savings"]').val(potentialSavingsDescription + ' ' + calcAnnualVal.text());
    },*/

    /*stepHover: function(btn, mouseAction) {
      var _this = this,
          hoveredClass = 'ssw-graph-item-hovered';

      if(mouseAction == 'clear') {
        $('.ssw-graph-item').removeClass(hoveredClass);
        return;
      }

      var graphItem = btn.closest('.ssw-graph-item');

      if(graphItem.index('.ssw-graph-item') < _this.currentStep()) {
        if(mouseAction == 'in' && !graphItem.hasClass(hoveredClass)) {
          graphItem.addClass(hoveredClass);
        } else if(mouseAction == 'out' && graphItem.hasClass(hoveredClass)) {
          graphItem.removeClass(hoveredClass);
        }
      }
    }*/
  };

  $('button[data-form-next-step]').on('click', function() {
    stepsControl.goToNextStep($(this));
  });

  /*$('.sswgi-desc, .sswgi-circle').on('click', function() {
    stepsControl.navToStep($(this));
  });*/

  /*$('.sswgi-desc, .sswgi-circle').hover(
    function() {
      stepsControl.stepHover($(this), 'in');
    },
    function() {
      stepsControl.stepHover($(this), 'out');
    }
  );*/

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
    // asNavFor: '.application-header-steps'
  });

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
          /*console.log(el);
          console.log(step);
          console.log(stepFields);
          console.log(nextFocusIndex);*/
          stepFields[nextFocusIndex].focus();
          e.preventDefault();
        }
      })
    });
  }

  $('.fa-step-item').each(function() {
    tabKeyControl($(this).find('.form-control'));
  });

  /*elems.each(function(index,element) {
    var el = $(element),
        step = el.closest('.fa-step-item'),
        stepFields = step.find('.form-control');

    el.keydown(function(e) {
      var code = e.keyCode || e.which;
      if(code === 9) {
        var nextFocusIndex = index == stepFields.length - 1 ? 0 : index + 1;
        console.log(el);
        console.log(step);
        console.log(stepFields);
        console.log(nextFocusIndex);
        stepFields[nextFocusIndex].focus();
        e.preventDefault();
      }
    })
  });*/
});

// testimonials carousel
$(function() {
  $('.testimonials-carousel').slick({
    dots: true,
    arrows: false,
    draggable: true,
    swipe: true,
    touchMove: true,
    infinite: true,
    speed: 500,
    slidesToShow: 3,
    // adaptiveHeight: false,
    // autoplay: true,
    // autoplaySpeed: 4000,
    responsive: [
      {
        breakpoint: 992,
        settings: {
          slidesToShow: 2
        }
      },
      {
        breakpoint: 576,
        settings: {
          slidesToShow: 1,
          adaptiveHeight: true
        }
      }
    ]
  });

  $('.img-carousel').slick({
    dots: true,
    arrows: false,
    draggable: true,
    swipe: true,
    touchMove: true,
    fade: true,
    infinite: true,
    speed: 400,
    slidesToShow: 1,
    adaptiveHeight: false,
    autoplay: true,
    autoplaySpeed: 3000
    // accessibility: false,
    // asNavFor: '.application-header-steps'
  });
});

// video
$(function() {
  var videoControl = {
    video: null,
    playPauseBtn: null,
    playBtn: null,
    pauseBtn: null,
    isPaused: true,
    isPreloaderHided: false,
    btnActiveClass: 'active',

    init: function() {
      var _t = this,
          supportsVideo = !!document.createElement('video').canPlayType;

      if (!supportsVideo || !$('.video-wrap:not([data-no-video])').length) {
        return;
      }

      var videoSource = $('.video-container').data('video-source'),
          videoPoster = $('.video-container').data('video-poster'),
          videoEl = '<video id="video" poster="img/' + videoPoster + '" playsinline muted loop preload="auto"><source src="video/' + videoSource + '.mp4" type="video/mp4"><source src="video/' + videoSource + '.webm" type="video/webm"></video>',
          videoControls = '<div class="video-controls"><div class="video-controls-play"><svg class="icon icon-play"><use xlink:href="css/fonts/icons.svg#play"></use></svg></div><div class="video-controls-pause"><svg class="icon icon-pause"><use xlink:href="css/fonts/icons.svg#pause"></use></svg></div></div>';

      $('.video-container').append(videoEl);
      $('.video-wrap').append(videoControls);

      _t.video = document.getElementById('video');
      _t.playPauseBtn = $('.video-controls');
      _t.playBtn = $('.video-controls-play');
      _t.pauseBtn = $('.video-controls-pause');

      _t.video.preload = 'auto';
      _t.video.controls = false;

      _t.playBtn.addClass(_t.btnActiveClass);

      /*_t.video.oncanplay = function() {
        // console.log('Can start playing video');
        // $('.video-preloader').addClass('hide');
        // here we could make video.play with promise to .pause right after start, to max smooth effect when video on viewport first time
      };*/
      _t.video.addEventListener('playing', function hidePreloader() {
        if(!_t.isPreloaderHided) { // if use video.oncanplay => will show video not smoothly
          _t.isPreloaderHided = true;
          $('.video-preloader').addClass('hide');
        }
        // console.log('hide-video-preloader');
        _t.video.removeEventListener('playing', hidePreloader);
      });

      _t.video.onplay = function() {
        _t.isPaused = false; // .isPaused => fix .play() Promise error on first play
        _t.pausePlayBtnState('pause');
      }
      _t.video.onpause = function() {
        _t.isPaused = true; // .isPaused => fix .play() Promise error on first play
        _t.pausePlayBtnState('play');
      };

      _t.playPauseBtn.on('click', function() {
        if (_t.video.paused || _t.video.ended) {
          _t.setPlay();
        } else {
          _t.setPause();
        }
      });

      _t.setupViewportPlayPause();
    },

    setupViewportPlayPause: function() {
      var _t = this,
          body = $('body');

      var intersectionObserver = new IntersectionObserver(function(entries) {
        if (entries[0].intersectionRatio <= 0 && entries[0].intersectionRect.width == 0) {
          // console.log('stop ' + entries[0].intersectionRatio);
          // console.log(entries[0].boundingClientRect);
          // console.log(entries[0].intersectionRect);

          _t.setPause();
        } else if(!body.hasClass('scrolling')) { // if don't scrolling to data-hash element
          // console.log('play ' + entries[0].intersectionRatio);
          // console.log(entries[0].boundingClientRect);
          // console.log(entries[0].intersectionRect);

          _t.setPlay();
        }
      }, {rootMargin: '0px 0px 0px 0px'});
      // start observing
      intersectionObserver.observe(_t.video);
    },

    setPlay: function() {
      var _t = this;

      if(_t.isPaused && _t.video.paused) { // .isPaused => fix .play() Promise error on first play
        _t.video.play();
      }
    },

    setPause: function() {
      var _t = this;

      if(!_t.isPaused && !_t.video.paused) { // .isPaused => fix .play() Promise error on first play
        _t.video.pause();
      }
    },

    pausePlayBtnState: function(state) {
      var _t = this,
          activeClass = _t.btnActiveClass;

      if(state == 'pause' && _t.playBtn.hasClass(activeClass)) {
        _t.playBtn.removeClass(activeClass);
        _t.pauseBtn.addClass(activeClass);
      } else if(state == 'play' && _t.pauseBtn.hasClass(activeClass)) {
        _t.pauseBtn.removeClass(activeClass);
        _t.playBtn.addClass(activeClass);
      }
    },

  };

  videoControl.init();
});





