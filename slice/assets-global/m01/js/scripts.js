$(document).ready(function () {
    $(".navigation").on("click", ".menu-icon", function () {
        $(".navigation").find("ul.menu").toggleClass("opened")
    });
    new Swiper(".main-banner .swiper-container", {
        autoplay: {delay: 9000},
        speed: 1e3,
        loop: !0,
        pagination: {el: ".main-banner .swiper-pagination .container", clickable: !0}
    }), new Swiper(".features-slider .swiper-container", {
        autoplay: {delay: 4500},
        effect: "fade",
        speed: 800,
        loop: !0,
        centeredSlides: !0,
        pagination: {el: ".features-slider .swiper-pagination", clickable: !0}
    }), new Swiper(".testimonials-slider .swiper-container", {
        slidesPerView: 3,
        spaceBetween: 24,
        autoplay: {delay: 5e3},
        speed: 1e3,
        loop: !0,
        pagination: {el: ".testimonials-slider .swiper-pagination", clickable: !0},
        breakpoints: {540: {slidesPerView: 1, spaceBetween: 10}, 720: {slidesPerView: 2, spaceBetween: 30}}
    });

    function e() {
        var e = "url(" + $(".tabs__content.active .tabs-hidden-image img").attr("src") + ")";
        $(".tabs-wrap .tabs-image-wrap").css({"background-image": e})
    }

    $(".navigation a").click(function () {
        return $("html, body").animate({scrollTop: $($.attr(this, "href")).offset().top}, 500), !1
    }), 0 < $(".tabs-wrap").length && e(), $(function () {
        $("ul.tabs__caption").on("click", "li:not(.active)", function () {
            $(this).addClass("active").siblings().removeClass("active").closest("div.tabs").find("div.tabs__content").removeClass("active").eq($(this).index()).addClass("active"), e()
        })
    })
}), $(window).resize(function () {
    1100 < $(window).width() && ($(".navigation").find("ul.menu").removeClass("opened"), $(".navigation .menu-btn").prop("checked", !1))
});

// faq toggle
$(function() {
  $('.ciw-item-toggle').on('click', function() {
    var el = $(this);
    el.closest('.ciw-item').toggleClass('active');
    el.siblings('.ciw-item-info').stop(true).slideToggle(300);
  })
});
