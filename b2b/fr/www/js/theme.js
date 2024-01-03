// Scroll up
$(function() {

  var topScroll = 300;
  var topScrollEv = false;
  var scrollBtn = $('<a />')
        .addClass("scroll-up")
        .attr({
          'href': '#',
        })
        .append(
          $('<i class="material-icons">keyboard_arrow_up</i>')
        );
        
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
  var stickyStartPos = 1,
      stickyStartElem = false;
      
  if(stickyStartElem) {

    $(window).on('scroll resize', function() {
      stickyStartPos = $(stickyStartElem).offset().top;
    });

  }

  function checkStickyHeader() {
    if ($(window).scrollTop() >= parseInt(stickyStartPos)) {
      if(!$("html").hasClass('sticky-header-active')) {
        $("html").addClass('sticky-header-active');;
      }
    } else {
      if($("html").hasClass('sticky-header-active')) {
        $("html").removeClass('sticky-header-active');
      }
    }
  }
  
  $(window).on('scroll resize', function() {
    checkStickyHeader();
  });
  
  $(window).trigger('resize');
  
});

// Validate
$(function() {
  $('.contact-form').each(function() {
    
    $(this).validate({
      submitHandler: function(form) {

        var $form = $(form),
          $submitButton = $(this.submitButton);

        $submitButton.button('loading');

        $.ajax({
          type: 'POST',
          url: "php/contact-form.php",
          data: {
            target: "consultation",
            name: $form.find('[name="name"]').val(),
            email: $form.find('[name="email"]').val(),
            phone: $form.find('[name="phone"]').val(),
            company: $form.find('[name="company"]').val(),
            program: $form.find('[name="program"]').val(),
            lang: $form.find('[name="lang"]').val()
          },
          dataType: 'json',
          complete: function(data) {
            if (typeof data.responseJSON === 'object') {
              if (data.responseJSON.response == 'success') {
                window.location.href = "thank-you.php";
                return;
              } else {
                alert("It seems like we have temporary problem. We're fixing it right now. Visit us later please.");
              }
            } else { 
              alert("Undefined error, please try again later."); 
            }
            $submitButton.button('reset');
          }
        });

      },
      errorClass: "error",
      errorPlacement: function (error, element) {
        return true;
      },
      highlight: function (element, errorClass, validClass) {
        var elem = $(element);
        elem.parent().addClass(errorClass);
      },
      unhighlight: function (element, errorClass, validClass) {
        var elem = $(element);
        elem.parent().removeClass(errorClass);
      }
    });
    
  });
  
  $('.feedback-form').each(function() {
    
    $(this).validate({
      submitHandler: function(form) {

        var $form = $(form),
          $submitButton = $(this.submitButton);

        $submitButton.button('loading');

        $.ajax({
          type: 'POST',
          url: "php/contact-form.php",
          data: {
            target: "feedback",
            name: $form.find('[name="name"]').val(),
            email: $form.find('[name="email"]').val(),
            message: $form.find('[name="message"]').val(),
            lang: $form.find('[name="lang"]').val()
          },
          dataType: 'json',
          complete: function(data) {
            if (typeof data.responseJSON === 'object') {
              if (data.responseJSON.response == 'success') {
                window.location.href = "thank-you.php";
                return;
              } else {
                alert("It seems like we have temporary problem. We're fixing it right now. Visit us later please.");
              }
            } else { 
              alert("Undefined error, please try again later."); 
            }
            $submitButton.button('reset');
          }
        });

      },
      errorClass: "error",
      errorPlacement: function (error, element) {
        return true;
      },
      highlight: function (element, errorClass, validClass) {
        var elem = $(element);
        elem.parent().addClass(errorClass);
      },
      unhighlight: function (element, errorClass, validClass) {
        var elem = $(element);
        elem.parent().removeClass(errorClass);
      }
    });
    
  });
});

// Init form js
$(function() {
  $('[name="phone"]').mask('(000) 000-0000', {clearIfNotMatch: true});
  
  //Material placeholder fix position if field is not empty
  $(".form-control").on("keyup change", function() {
    ($(this).val().length > 0) ? $(this).parent().addClass("not-empty-field") : $(this).parent().removeClass("not-empty-field");
  });
  // label position fix on pageload
  $(".form-control").trigger("change");
});

// Burger menu animate
$(function() {
  $(".header-btn-nav").on("click", function() {
    $(this).toggleClass("header-btn-nav-active");
    $(".header-nav").toggleClass("header-nav-active");
  });
});

// Close menu if click or slide down main content
$(function() {
	$(document).on("mouseup touchstart", function (e) {
		var elem = $(".header-nav"),
        elemBtn = $(".header-btn-nav"),
        headerBody = $(".header-body");
		if (elem.hasClass("header-nav-active") && !elem.is(e.target) && elem.has(e.target).length === 0 && 
        !elemBtn.is(e.target) && elemBtn.has(e.target).length === 0 &&
        !headerBody.is(e.target) && headerBody.has(e.target).length === 0) {
      elemBtn.removeClass("header-btn-nav-active");
			elem.removeClass("header-nav-active");
		}
	});
});

// Browser detect
$(function() {
  if(bowser.msie) {
    $("html").addClass("ms-b");
  }
  if(bowser.msedge) {
    $("html").addClass("ms-edge");
  }
  if(bowser.mobile || bowser.tablet) {
    $("html").addClass("mob_tab");
  }
  if(bowser.opera) {
    $("html").addClass("opera");
  }
});

// Scroll to elem
$(function() {
  $("[data-hash]").on("click", function(e) {
    e.preventDefault();

    var target = $(this).attr("href"),
      offset = 50;
    if($("body").hasClass("scrolling"))
      return;
    
    $("body").addClass("scrolling");
    $("html, body").animate({
      scrollTop: $(target).offset().top - offset
    }, 700, "easeOutQuad", function() {
      $("body").removeClass("scrolling");
    });
  });
});

// Popup
$(function() {
  $('.form-popup').magnificPopup({
    type: 'inline',
    fixedContentPos: (bowser.mobile || bowser.tablet) ? false : true,
    fixedBgPos: true,
    overflowY: 'auto',
    closeBtnInside: true,
    preloader: false,
    midClick: true,
    removalDelay: 300,
    mainClass: 'my-mfp-zoom-in',
    callbacks: {
      beforeOpen: function() {
        var program = $.magnificPopup.instance.st.el.data("program"),
            programVal = (program == "MCA" || program == "TDA") ? program : "Not chosen";
        $("input[name='program']").val(programVal);
      },
      open: function() {
        $('html').addClass('lightbox-opened');
      },
      close: function() {
        $('html').removeClass('lightbox-opened');
      }
    }
  });
});