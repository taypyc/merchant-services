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

// Scroll up
$(function() {
  var topScroll = 300,
      topScrollEv = false,
      scrollBtn = $('<a />')
        .addClass("scroll-up")
        .attr({
          'href': '#',
        })
        .append(
          $('<i />')
          .addClass("fa fa-angle-up")
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
        $("html").addClass('sticky-header-active');
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

// Tips bootstrap
$(function() {
  $('[data-tooltip]').tooltip();
  $('[data-popover]').popover($(this).data('plugin-options'));
});

// Validate
$(function() {
  $('.contact-form').each(function() {
    $(this).validate({
      messages: {
        name: "Please enter your name",
        email: "Please enter your email",
        phone: "Please enter your phone"
      },
      submitHandler: function(form) {
        var $form = $(form),
          $submitButton = $(this.submitButton);
        $submitButton.button('loading');
        $.ajax({
          type: 'POST',
          url: "php/contact-form.php",
          data: {
            name: $form.find('[name="name"]').val(),
            email: $form.find('[name="email"]').val(),
            phone: $form.find('[name="phone"]').val(),
            company: $form.find('[name="company"]').val(),
            business_years: $form.find('[name="business_years"]').val(),
            comments: $form.find('[name="comments"]').val()
          },
          dataType: 'json',
          complete: function(data) {
            if (typeof data.responseJSON === 'object') {
              if (data.responseJSON.response == 'success') {
                window.location.href = "thank-you";
                //form.submit();
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
});

// Burger menu animate
$(function() {
  $(".header-btn-nav").on("click", function() {
    $(".header-btn-nav").toggleClass("header-btn-nav-active");
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

// Init form js
$(function() {
  // Mask
  $('[name="phone"]').mask('(000) 000-0000', {clearIfNotMatch: true});
  
  // Select2 init
  $(".select-item").each(function() {
    var elem = $(this);
    elem.select2({
      placeholder: (elem.data("select-placeholder") && elem.data("select-placeholder").length > 0) ? elem.data("select-placeholder") : "Please select...",
      allowClear: true,
      minimumResultsForSearch: Infinity
    });
  });
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