// Validate
$(function() {
  $.extend($.validator.messages, {
    required: "Required field." 
  });

  $.validator.addMethod('validEmail', function (value, element) {
    var email = $.validator.methods.email.bind(this);

    var lastPart = value.slice(value.lastIndexOf('@') + 1);
    var emailCondition = (lastPart.indexOf('.') > -1 && lastPart.slice(lastPart.lastIndexOf(".") + 1).length >= 2) ? true : false;

    return this.optional(element) || (email(value, element) && emailCondition);
  }, function(params, element) {
    return 'Please enter a valid email.'
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
    return 'Date format XXXX'
  });



  $.validator.addMethod('validString', function (value, element) {
    return this.optional(element) || $.trim(value).length > 0
  }, $.validator.format("Please enter valid information."));

  $.validator.addMethod('validPhone', function (value, element) {
    return this.optional(element) || /^\(\d{3}\)\s\d{3}-\d{4}$/.test(value);
  }, function(params, element) {
    return 'Phone Format (XXX) XXX-XXXX.'
  });
  
  $('.contact-form').each(function() {
    
    $(this).validate({
      submitHandler: function(form) {

        var form = $(form),
          $submitButton = $(this.submitButton),
          dataToPass = form.serializeArray();

        $submitButton.button('loading');

        // GTM event
        var gtm = window.dataLayer || [];

        gtm.push({
          'event': 'submit_form',
          'completed_step': 'completed-step-0'
        });
        // end GTM event

        $.ajax({
          type: 'POST',
          url: 'php/form-application.php',
          data: dataToPass,
          dataType: 'json',
          complete: function(data) {
            if (typeof data.responseJSON === 'object') {
              if (data.responseJSON.response == 'success') {
                if(data.responseJSON.r.length > 1) {
                  window.location.href = data.responseJSON.r;
                  return;
                }
                window.location.href = 'thank-you';
                return;
              } else {
                alert('We seem to have a temporary problem. Please check all the fields.');
              }
            } else { 
              alert('Undefined error, try again later.'); 
            }
            $submitButton.button('reset');
          }
        });

      },
      errorClass: "error",
      errorPlacement: function (error, element) {
        return;
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
  // select2 validate after change
  $(document).on("change", ".select-item", function () {
    $(this).valid();
  });

  $('[type="email"]').each(function() {
    $(this).rules('add', {email: false});
    $(this).rules('add', 'validEmail');
  });
  $('[name="business_term"]').each(function() {
    $(this).rules('add', 'validDateYear');
  });
});

// fb pageview event
/*$(function() {
  $.ajax({
    method: 'POST',
    url: 'php/store-data.php',
    data: {url: window.location.href},
    dataType: 'json'
  });
});*/

// Init form js
$(function() {
  // Mask
  $('[name="business_phone"]').mask('(000) 000-0000', {clearIfNotMatch: true});
  $('[data-mask-date-01]').mask('0000');
  
  // Select2 init
  $(".select-item").each(function() {
    var elem = $(this);
    elem.select2({
      placeholder: (elem.data("select-placeholder") && elem.data("select-placeholder").length > 0) ? elem.data("select-placeholder") : "Please select...",
      allowClear: true,
      minimumResultsForSearch: Infinity
    });
  });

  $('[name="owner_name"]').on('keyup focusout', function() {
    fillOwner1Name($(this));
  });

  function fillOwner1Name(ownerField) {
    var ownerFullName = ownerField.val(),
        firstName = ownerFullName.split(' ').slice(0, -1).join(' ').trim(),
        lastName = ownerFullName.split(' ').slice(-1).join(' ').trim();

    if(firstName.length == 0 && lastName.length > 0) {
      firstName = lastName;
      lastName = '';
    }

    $('[name="owner_1_first_name"]').val(firstName);
    $('[name="owner_1_last_name"]').val(lastName);
  }
});