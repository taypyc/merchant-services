$(function(){var e=1;$(window).on("scroll resize",function(){$(window).scrollTop()>=parseInt(e)?$("html").hasClass("sticky-header-active")||$("html").addClass("sticky-header-active"):$("html").hasClass("sticky-header-active")&&$("html").removeClass("sticky-header-active")}),$(window).trigger("resize")}),$(function(){$("[data-popup-open]").each(function(){$(this).magnificPopup({type:"inline",fixedContentPos:!bowser.mobile&&!bowser.tablet&&"auto",fixedBgPos:!0,overflowY:"auto",closeBtnInside:!0,preloader:!1,midClick:!0,removalDelay:300,mainClass:"popup-animated",callbacks:{open:function(){$("html").addClass("popup-opened")},close:function(){$("html").removeClass("popup-opened")}}})})}),$(function(){var a=!1,e=$("<a />").addClass("scroll-up").attr({href:"#"}).append($('<svg class="icon icon-arrow-top"><use xlink:href="css/fonts/icons.svg#arrow-top"></use></svg>'));$("body").append(e),e.on("click",function(e){return e.preventDefault(),!a&&300<$(window).scrollTop()&&(a=!0,$("body, html").animate({scrollTop:0},500,function(){a=!1})),!1});var n=!1;$(window).scroll(function(){n||(n=!0,300<$(window).scrollTop()?e.stop(!0,!0).addClass("visible"):e.stop(!0,!0).removeClass("visible"),n=!1)})}),$(function(){$.fn.extend({disable:function(a){return this.each(function(){var e=$(this);e.prop("disabled",a),!0===a&&void 0!==e.data("loading-content")&&(e.data("original-content",e.html()),e.html(e.data("loading-content"))),!1===a&&void 0!==e.data("original-content")&&e.html(e.data("original-content"))})}}),$.validator.addMethod("valphone",function(e,a){return this.optional(a)||/^\(\d{3}\)\s\d{3}-\d{4}$/.test(e)}),$(".form-contact").each(function(){$(this).validate({onkeyup:function(e){"tel"==$(e).attr("type")?14==$(e).val().length&&$(e).valid():$.validator.defaults.onkeyup.apply(this,arguments)},rules:{phone:{required:!0,valphone:!0}},messages:{name:"Please enter your name",email:"Please enter your email",business_name:"Please enter your company name",phone:{required:"Please enter your phone",valphone:"Phone format (XXX) XXX-XXXX"}},submitHandler:function(e){var a=(e=$(e)).find('[type="submit"]');a.disable(!0),$.ajax({type:"POST",url:"php/form-contact.php",data:{name:e.find('[name="name"]').val(),phone:e.find('[name="phone"]').val(),email:e.find('[name="email"]').val(),business_name:e.find('[name="business_name"]').length?e.find('[name="business_name"]').val():"",comments:e.find('[name="comments"]').length?e.find('[name="comments"]').val():"",type:e.hasClass("form-feedback")?"feedback":""},dataType:"json",complete:function(e){if("object"==typeof e.responseJSON){if("success"==e.responseJSON.response)return void(window.location.href="thank-you");alert("It seems like we have a temporary problem. We are fixing it right now. Visit us later please.")}else alert("Undefined error, please try again later.");a.disable(!1)}})}})}),$(".form-services").each(function(){$(this).validate({onkeyup:function(e){"tel"==$(e).attr("type")?14==$(e).val().length&&$(e).valid():$.validator.defaults.onkeyup.apply(this,arguments)},rules:{phone:{required:!0,valphone:!0}},messages:{name:"Please enter your name",email:"Please enter your email",company_name:"Please enter your company name",phone:{required:"Please enter your phone",valphone:"Phone format (XXX) XXX-XXXX"}},submitHandler:function(e){var a=(e=$(e)).find('[type="submit"]');a.disable(!0),$.ajax({type:"POST",url:"php/form-services.php",data:{name:e.find('[name="name"]').val(),phone:e.find('[name="phone"]').val(),email:e.find('[name="email"]').val(),company_name:e.find('[name="company_name"]').val()},dataType:"json",complete:function(e){if("object"==typeof e.responseJSON){if("success"==e.responseJSON.response)return void(window.location.href="thank-you");alert("It seems like we have a temporary problem. We are fixing it right now. Visit us later please.")}else alert("Undefined error, please try again later.");a.disable(!1)}})}})}),$(".form-partners").each(function(){$(this).validate({onkeyup:function(e){"tel"==$(e).attr("type")?14==$(e).val().length&&$(e).valid():$.validator.defaults.onkeyup.apply(this,arguments)},rules:{phone:{required:!0,valphone:!0}},messages:{name:"Please enter your name",email:"Please enter your email",phone:{required:"Please enter your phone",valphone:"Phone format (XXX) XXX-XXXX"}},submitHandler:function(e){var a=(e=$(e)).find('[type="submit"]');a.disable(!0),$.ajax({type:"POST",url:"php/form-partners.php",data:{name:e.find('[name="name"]').val(),phone:e.find('[name="phone"]').val(),email:e.find('[name="email"]').val()},dataType:"json",complete:function(e){if("object"==typeof e.responseJSON){if("success"==e.responseJSON.response)return void(window.location.href="thank-you");alert("It seems like we have a temporary problem. We are fixing it right now. Visit us later please.")}else alert("Undefined error, please try again later.");a.disable(!1)}})}})});$(document).on("mask-it",function(){$('[name="phone"]').mask("(000) 000-0000")}).trigger("mask-it"),$('[name="phone"]').each(function(){var e=$(this);e.on("blur",function(){e.val().length<=1&&e.val("")})})}),$(function(){var t=!1;$(".header-btn-nav").on("click",function(){t||($(".header-btn-nav").toggleClass("header-btn-nav-active"),$(".header-nav").toggleClass("header-nav-active"))}),$(document).on("mouseup touchstart",function(e){var a=$(".header-nav"),n=$(".header-btn-nav");!a.hasClass("header-nav-active")||a.is(e.target)||0!==a.has(e.target).length||n.is(e.target)||0!==n.has(e.target).length||(t=!0,setTimeout(function(){t=!1},150),n.removeClass("header-btn-nav-active"),a.removeClass("header-nav-active"))})}),$(function(){bowser.msie&&$("html").addClass("ms-ie"),bowser.msedge&&$("html").addClass("ms-edge"),bowser.mobile||bowser.tablet?$("html").addClass("mt-device"):$("html").addClass("desktop-device"),bowser.opera&&$("html").addClass("opera")}),$(function(){$("[data-hash]").on("click",function(e){e.preventDefault();var a=$(this).attr("href");$("body").hasClass("scrolling")||($("body").addClass("scrolling"),$("html, body").animate({scrollTop:$(a).offset().top},700,"easeOutQuad",function(){$("body").removeClass("scrolling")}))})});