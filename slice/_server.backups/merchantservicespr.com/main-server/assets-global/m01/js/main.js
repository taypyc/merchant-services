$(function(){var e,s,t,a;$(".header-01").length&&(e=1,s=$(".section-hero"),t="header-active",a="header-shadow",s&&s.length&&$(window).on("resize",function(){e=$(s).offset().top+$(s).outerHeight()}),$(window).on("scroll resize",function(){$(window).scrollTop()>=parseInt(e)?$("html").hasClass(t)||$("html").addClass(t):$("html").hasClass(t)&&$("html").removeClass(t),$(window).scrollTop()>=parseInt(1)?$("html").hasClass(a)||$("html").addClass(a):$("html").hasClass(a)&&$("html").removeClass(a)}),$(window).trigger("resize"))}),$(function(){$(".ciw-item-toggle").on("click",function(){var e=$(this);e.closest(".ciw-item").toggleClass("active"),e.siblings(".ciw-item-info").stop(!0).slideToggle(300,"easeInOutSine")})}),$(function(){var e=bowser.getParser(window.navigator.userAgent),s=e.parsedResult.browser.name,t=e.parsedResult.os.name,e=e.parsedResult.platform.type;"Internet Explorer"==s&&$("html").addClass("ms-ie"),"Microsoft Edge"==s&&$("html").addClass("ms-edge"),"Opera"==s&&$("html").addClass("opera"),"macOS"==t&&$("html").addClass("macos"),"mobile"==e||"tablet"==e?$("html").addClass("mt-device"):$("html").addClass("desktop-device")}),$(function(){$("[data-hash]").on("click",function(e){e.preventDefault();e=$(this).attr("href");$("body").hasClass("scrolling")||($("body").addClass("scrolling"),$("html, body").animate({scrollTop:$(e).offset().top-50},700,"easeOutQuad",function(){$("body").removeClass("scrolling")}))})}),$(function(){$(".testimonials-carousel").slick({dots:!0,arrows:!1,draggable:!0,swipe:!0,touchMove:!0,fade:!0,infinite:!0,speed:400,slidesToShow:1,adaptiveHeight:!0})}),$(function(){$.ajax({method:"POST",url:"php/store-data.php",data:{url:window.location.href},dataType:"json"})});