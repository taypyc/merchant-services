// dapp and validation
// $(function() {
  var requiredFieldsArr = [
    'business_name',
    'owner_name',
    'owner_1_first_name',
    'owner_1_last_name',
    'business_time',
    'monthly_sales',
    'owner_1_cell_phone',
    'owner_1_email',

    'business_legal_name',
    'industry_type',
    'amount_requested',
    'amount_requested_for',
    'bankruptcy',
    'work_from_home',
    'website',
    'business_phone',
    'business_email',
    'physical_address',
    'physical_city',
    'physical_state',
    'physical_zip',
    'mailing_address',
    'mailing_city',
    'mailing_state',
    'mailing_zip',

    'owner_1_title',
    'owner_1_dob',
    'owner_1_address',
    'owner_1_city',
    'owner_1_state',
    'owner_1_zip',
    'owner_1_own',
    'owner_1_own_years',
    'owner_1_ssn',
    'owner_2_first_name',
    'owner_2_last_name',
    'owner_2_title',
    'owner_2_dob',
    'owner_2_cell_phone',
    'owner_2_email',
    'owner_2_address',
    'owner_2_city',
    'owner_2_state',
    'owner_2_zip',
    'owner_2_own',
    'owner_2_own_years',
    'owner_2_ssn',
    'entity_type',
    'state_incorporation',
    'property_ownership',
    'tax_id',
    'business_started_date',
    'actual_cash_advance_company',
    // 'actual_balance',
    'bank_credit',
    // 'line_of_credit',
    'accept_credit_cards',
    'monthly_total_sales',
    // 'processing_company',
  ];

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

  $.extend($.validator.messages, {
    required: "Campo Requerido." 
  });

  $.validator.addMethod('validEmail', function (value, element) {
    var email = $.validator.methods.email.bind(this);

    var lastPart = value.slice(value.lastIndexOf('@') + 1);
    var emailCondition = (lastPart.indexOf('.') > -1 && lastPart.slice(lastPart.lastIndexOf(".") + 1).length >= 2) ? true : false;

    return this.optional(element) || (email(value, element) && emailCondition);
  }, function(params, element) {
    return 'Por favor entre un correo electrónico válido.'
  });

  $.validator.addMethod('validString', function (value, element) {
    return this.optional(element) || $.trim(value).length > 0
  }, $.validator.format("Por favor entre una información válida."));

  $.validator.addMethod('validExactLength', function (value, element, param) {
    return this.optional(element) || value.length == param
  }, $.validator.format("Favor entrar exáctamente {0} caracteres."));

  $.validator.addMethod('validPhone', function (value, element) {
    return this.optional(element) || /^\(\d{3}\)\s\d{3}-\d{4}$/.test(value);
  }, function(params, element) {
    return 'Formato Teléfono (XXX) XXX-XXXX.'
  });

  $.validator.addMethod('validZip', function (value, element) {
    return this.optional(element) || /^\d{5}$/.test(value);
  }, function(params, element) {
    return 'Formato de Código Postal XXXXX'
  });

  $.validator.addMethod('validTax', function (value, element) {
    return this.optional(element) || /^\d{2}-\d{7}$/.test(value);
  }, function(params, element) {
    return 'Formato Seguro Social Patronal XX-XXXXXXX'
  });

  $.validator.addMethod('validSSN', function (value, element) {
    return this.optional(element) || /^\d{3}-\d{2}-\d{4}$/.test(value);
  }, function(params, element) {
    return 'Formato SSN XXX-XX-XXXX.'
  });

  $.validator.addMethod('validUrl', function (value, element) {
    var url = $.validator.methods.url.bind(this);
    return url(value, element) || url('http://' + value, element);
  }, function(params, element) {
    return 'Favor de entrar URL válido.'
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
    return 'Forma de Fecha MM/DD/YYYY'
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
    return 'Forma de Fecha MM/YYYY'
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
    return 'Forma de Fecha YYYY'
  });

  // Validation
  $('.form-application').each(function() {
    $(this).validate({
      ignore: '.fa-step-item:not(.slick-active) .form-control, :hidden',
      rules: {
        line_of_credit: {
          required: function(element) {
            return $('[name="bank_credit"]').val() == 'Yes'
          }
        }
      },
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
          'completed_step': 'Step DS'
        });
        // end GTM event

        // param which lead to docusign
        dataToPass.push({name: 'step', value: 'ds-init'});

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
                alert('Al parecer tenemos un problema temporero. Por favor verifique todos los campos.');
              }
            } else { 
              alert('Error no definido, trate otra vez luego.'); 
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
        } else if(elem.attr("type") == "radio" || elem.attr("type") == "checkbox") {
            error.insertAfter(elem.closest(".check-wrap"));
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

  for(var i=0; i < requiredFieldsArr.length; i++) {
    $('[name="' + requiredFieldsArr[i] + '"]').rules('add', 'required');
  }

  $('[data-field-string]').each(function() {
    $(this).rules('add', 'validString');
  });

  $('[type="email"]').each(function() {
    $(this).rules('add', {email: false});
    $(this).rules('add', 'validEmail');
  });

  $('[name="business_term"]').rules('add', 'validDateYear');
  $('[data-mask-date]').each(function() {
    $(this).rules('add', 'validDateFull');
  });

  $('[data-field-address]').each(function() {
    $(this).rules('add', {maxlength: 255});
  });
  $('[data-field-city]').each(function() {
    $(this).rules('add', {maxlength: 40});
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
  $('[data-mask-url]').each(function() {
    $(this).rules('add', 'validUrl');
  });

  $('[name="service"]').rules('add', {messages: {required: 'Please select device'}});
  $('[name="service"]').on('change', function() {
    $(this).valid();
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
  // Prefill existing values
  $('[data-select-predefined]').each(function() {
    var elem = $(this),
        selectPredefined = elem.data('select-predefined') + '';

    if(selectPredefined.length > 0) {
      elem.val(selectPredefined); 
      elem.trigger('change');
    }
    
  });

  $('[data-mask-rn]').each(function() {
    $(this).rules('add', {validExactLength: 9});
  });

  $('[data-mask-an]').each(function() {
    $(this).rules('add', {minlength: 5, maxlength: 17});
  });

  // dapp steps
  var stepsControl = {
    form: $('.application-form-steps'),
    completedSteps: [],
    finalStepNum: $('.application-form-steps').children().length == 1 ? 0 : $('.application-form-steps').children().length - 1,
    // cs: false, // continue step - uses for email notification

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
          elemToFocus = false,
          currentStep = _this.currentStep();

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
          'completed_step': 'Step ' + _this.determinateDappStep(currentStep, 'input_step')
        });
        // end GTM event

        // if checkput stage || user already completed this step - go to next without ajax
        /*if(currentStep == '1' || _this.completedSteps.indexOf(_this.determinateDappStep(currentStep, 'form_step')) != -1) {
          _this.changeStep(currentStep + 1);
        } else {
          _this.saveInfo(btn);
        }*/
        if(_this.completedSteps.indexOf(_this.determinateDappStep(currentStep, 'form_step')) == -1) {
          _this.saveInfo(btn);
        }
        
      } else {
        elemToFocus.focus();
      }
    },

    saveInfo: function(btn) {
      var _this = this,
          dataToPass = _this.form.serializeArray(),
          shouldChangeStep = false,
          currentStep = _this.currentStep(),
          signupCountry = $('[name="signupCountry"]');
      _this.loaderState('show');

      if(btn !== undefined) {
        shouldChangeStep = true;
        btn.disable(true);
      }

      /*if(_this.cs == true) {
        dataToPass.push({name: 'cs', value: 'true'});
        _this.cs = false;
      }*/

      // un-disable submit button
      if(_this.determinateDappStep(currentStep, 'form_step') == _this.finalStepNum - 1) {
        _this.formBtnActivate();
        dataToPass.push({name: 'step_ts', value: new Date().getTime()});
      }

      _this.loadDynamicScripts(currentStep + 1);

      $.ajax({
        method: 'POST',
        url: 'php/form-application.php',
        data: dataToPass,
        dataType: 'json',
        complete: function(data) {
          // console.log(data);
          if(typeof data.responseJSON === 'object' && data.responseJSON.response == 'success') {
            if(data.responseJSON.r.length > 1) {
              window.location.href = data.responseJSON.r;
              return;
            }
            _this.processStepResponse(data.responseJSON.d);
          }
          if(shouldChangeStep === true) {
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
      catch (e) {}

      return false;
    },

    changeStep: function(stepNum) {
      var _this = this,
          stepChangeDelay = 1,
          scrollOffset = $('#header').outerHeight(),
          currentStep = _this.currentStep(),
          dappStep = _this.determinateDappStep(stepNum, 'input_step'),
          stepNumCss = stepNum + 1;

      if(_this.completedSteps.indexOf(currentStep) == -1) {
        _this.completedSteps.push(currentStep);
      }

      setTimeout(function() {
        $('html, body').scrollTop(scrollOffset);

        _this.form.slick('slickGoTo', stepNum);
        $('[name="step"]').val(dappStep);
        _this.setHeaderStep();

      }, stepChangeDelay);
    },

    setHeaderStep: function() {
      var _this = this,
          headerSteps = $('.afw-steps-progress > .d-flex'),
          currentItem = _this.currentStep(),
          indexElement = headerSteps.children().eq(currentItem);

      if(indexElement.length) {
        processHeaderSteps(currentItem, indexElement, 'active', 'completed');
      } else {
        var lastExistingElement = headerSteps.children().eq(currentItem - 1);
        processHeaderSteps(currentItem, lastExistingElement, 'completed active', 'completed hidden');
      }

      function processHeaderSteps(index, currentActive, classesListForCurrent, classesListForPrev) {
        currentActive.addClass(classesListForCurrent);
        currentActive.prevAll().addClass(classesListForPrev);

        let renewedTab = $("[data-steps-progress-finalise]");
        if (indexElement.length && renewedTab.index() <= index) {
          renewedTab.nextAll().addBack().removeClass("pre-hidden");
          renewedTab.prevAll().addClass('hidden');
        }
      }
    },

    processStepResponse: function(step_response) {
      var _this = this,
          oidField = $('[name="id"]'),
          plaidLink = $('#plaid-url'),
          filesLink = $('#files-url'),
          responseJson = _this.parseJson(step_response);

      if(typeof responseJson === 'object') {
        oidField.val(responseJson.id);

        if("plaid_url" in responseJson && responseJson.plaid_url !== null && responseJson.plaid_url.length > 0) {
          plaidLink.attr('href', responseJson.plaid_url);
        }

        if("files_url" in responseJson) {
          filesLink.attr('href', responseJson.files_url);
        }
      }
    },

    continueFromStep: function() {
      var _this = this,
          stepToShow = $('[name="step"]').val(),
          stepToShowNum = parseInt(stepToShow, 10),
          isContinue = _this.form.attr('data-form-cs'),
          formStep = _this.determinateDappStep(stepToShowNum, 'form_step');

      if(typeof isContinue !== typeof undefined && isContinue !== false && _this.currentStep() !== formStep) {
        if(formStep == _this.finalStepNum) {
          _this.formBtnActivate();
        }
        // _this.cs = true;

        _this.form.slick('slickGoTo', formStep, true);
        _this.loadDynamicScripts(formStep);
      }
      
      // _this.showSignupCountry();
      _this.form.addClass('form-application-initialized');
    },

    showSignupData: function() {
      var _this = this,
          selectedValue = $('[name="monthly_sales"]').val(),
          result = '250,000',
          resultWrap = $('#qualify-result');

      switch(selectedValue) {
        case '$0 - $4,999':
          result = '5,000';
          break;
        case '$5,000 - $9,999':
          result = '10,000';
          break;
        case '$10,000 - $24,999':
          result = '25,000';
          break;
        case '$25,000 - $49,999':
          result = '50,000';
          break;
        case '$50,000 - $99,999':
          result = '100,000';
          break;
        case '$100,000 - $249,999':
          result = '250,000';
          break;
        case '$250,000+':
          result = '500,000';
      }

      resultWrap.text('$' + result);
    },

    determinateDappStep: function(stepNum, stepFor) {
      var result = stepNum;

      /*if(stepFor == 'input_step') {
        if(result > 1) {
          result--;
        }
      } else if(stepFor == 'form_step') {
        if(result > 1) {
          result++;
        }
      }*/
      
      return result;
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

    showSignupCountry: function() {
      if($('[name="signup_country"]').length) {
        var signupCountry = $('[name="signup_country"]').val();
      }
    },

    collapseElem: function(source) {
      var _this = this;
      _this.collapseAction(source, 'fadeToggle');
    },

    collapseAction(source, method) {
      var _this = this;
      $(source.data('collapsable-elem')).stop(true,true)[method](0);
      _this.form[0].slick.refresh();
    },

    determinateSigners: function(ownField, event) {
      var _this = this,
          ownFieldVal = ownField.val(),
          method = '',
          isAdditionalSignerVisible = $(ownField.data('collapsable-elem')).is(':visible');

      if(
        ((event.type == 'keyup' && ownFieldVal > 10 && ownFieldVal < 80) || (event.type == 'change' && ownFieldVal < 80)) &&
        !isAdditionalSignerVisible
      ) {
        method = 'fadeIn';
      } else if(
        ((event.type == 'keyup' && ownFieldVal >= 80) || (event.type == 'change' && ownFieldVal >= 80) || (event.type == 'change' && ownFieldVal.length == 0)) &&
        isAdditionalSignerVisible
      ) {
        method = 'fadeOut';
      }

      if(method.length > 0) {
        _this.collapseAction(ownField, method);
        if(event.type == 'keyup') {
          ownField.focus();
        }
      }
    },

    fillOwner1Name: function(ownerField) {
      var _this = this,
          ownerFullName = ownerField.val(),
          firstName = ownerFullName.split(' ').slice(0, -1).join(' ').trim(),
          lastName = ownerFullName.split(' ').slice(-1).join(' ').trim();

      if(firstName.length == 0 && lastName.length > 0) {
        firstName = lastName;
        lastName = '';
      }

      $('[name="owner_1_first_name"]').val(firstName);
      $('[name="owner_1_last_name"]').val(lastName);
    },

    loadDynamicScripts: function(formStep) {
      var _this = this,
          stepWrap = $('[data-slick-index="' + formStep + '"]');

      if(stepWrap !== undefined) {
        stepWrap.find('[data-load-scripts]').each(function() {
          if($(this).attr('data-load-scripts') == 'plaid' && (typeof $(this).attr('href') === 'undefined' || $(this).attr('href') === false)) {
            var jsScript = document.createElement('script');
            jsScript.src = 'https://cdn.plaid.com/link/v2/stable/link-initialize.js';
            document.body.appendChild(jsScript);
            jsScript.addEventListener('load', () => {
              _this.plaidOnLoadListener();
            });
          }
        });
      }
    },

    plaidOnLoadListener: function() {
      var _this = this;

      $('#plaid-url').on('click', function() {
        _this.plaidInitiateFlow();
      });

      if(_this.plaidLinkToken !== undefined && _this.plaidReceivedState !== undefined) {
        _this.plaidLinkLaunch(_this.plaidLinkToken, _this.plaidReceivedState);
      }
    },

    plaidInitiateFlow: function() {
      var _this = this,
          id = $('[name="id"]').val();
      _this.loaderState('show');

      $.ajax({
        method: 'POST',
        url: 'php/plaid-link-token.php',
        data: {id: id},
        dataType: 'json',
        complete: function(data) {
          if(typeof data.responseJSON === 'object' && data.responseJSON.response == 'success') {
            responseData = _this.parseJson(data.responseJSON.d);
            if(typeof responseData === 'object') {
              _this.plaidLinkLaunch(responseData.link_token);
            } else {
              alert('Al parecer tenemos un problema temporero. Por favor verifique todos los campos.');
            }
          } else { 
            alert('Error no definido, trate otra vez luego.'); 
          }
          _this.loaderState('hide');
        }
      });
    },

    plaidLinkLaunch: function(linkToken, receivedRedirectUri) {
      var _this = this;
      var handler = Plaid.create({
        token: linkToken,
        receivedRedirectUri: receivedRedirectUri === undefined ? null : receivedRedirectUri,
        onSuccess: function(public_token) {
          _this.loaderState('show');
          $.ajax({
            type: 'POST',
            url: 'php/plaid-public-token.php',
            data: {public_token: public_token},
            dataType: 'json',
            complete: function(data) {
              if (typeof data.responseJSON === 'object') {
                if (data.responseJSON.response == 'success') {
                  window.location.href = data.responseJSON.r;
                  return;
                } else {
                  alert('Al parecer tenemos un problema temporero. Por favor verifique todos los campos.');
                }
              } else { 
                alert('Error no definido, trate otra vez luego.'); 
              }
              _this.loaderState('hide');
            }
          });
        }

      });
      handler.open();
    },

    setControlParams: function(type, params) {
      var _this = this;
      if(type == 'plaid') {
        _this.plaidLinkToken = params.plaidLinkToken;
        _this.plaidReceivedState = params.plaidReceivedState;
      }
    }
  };

  $('button[data-form-next-step]').on('click', function() {
    stepsControl.goToNextStep($(this));
  });

  $('[data-collapsable-elem]:not([name="owner_1_own"])').on('change', function() {
    stepsControl.collapseElem($(this));
  });

  $('[name="owner_1_own"]').on('change keyup', function(event) {
    stepsControl.determinateSigners($(this), event);
  });

  $('[name="business_name"]').on('keyup focusout', function() {
    var legalNameField = $('[name="business_legal_name"]');
    if(!legalNameField[0].hasAttribute('data-field-prefilled')) {
      legalNameField.val($(this).val());
    }
  });

  $('[name="owner_name"]').on('keyup focusout', function() {
    stepsControl.fillOwner1Name($(this));
  });

  $('[name="monthly_sales"]').on('change', function() {
    stepsControl.showSignupData();
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

  stepsControl.showSignupData();
  stepsControl.continueFromStep();
  stepsControl.setHeaderStep();
// });

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







