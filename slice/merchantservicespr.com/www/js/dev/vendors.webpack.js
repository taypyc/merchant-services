/*
import 'bootstrap/scss/_functions.scss'
import 'bootstrap/scss/_variables.scss'
import 'bootstrap/scss/_mixins.scss'
import 'bootstrap/scss/_reboot.scss'
import 'bootstrap/scss/_grid.scss'
import 'bootstrap/scss/_forms.scss'
import 'bootstrap/scss/_custom-forms.scss'
import 'bootstrap/scss/_alert.scss'
import 'bootstrap/scss/_close.scss'
import 'bootstrap/scss/_tooltip.scss'
import 'bootstrap/scss/_popover.scss'

import 'bootstrap/js/src/util.js';
import 'bootstrap/js/src/alert.js';
import 'bootstrap/js/src/dropdown.js';
import 'bootstrap/js/src/tooltip.js';
import 'bootstrap/js/src/button';
import 'bootstrap/js/src/carousel';
import 'bootstrap/js/src/collapse';
import 'bootstrap/js/src/modal';
import 'bootstrap/js/src/popover';
import 'bootstrap/js/src/scrollspy';
import 'bootstrap/js/src/tab';*/

import $ from 'jquery'
window.$ = window.jquery = window.jQuery = $

// css
// import '../../css/vendors/theme-animate.css'
// import '../../css/vendors/font-awesome/css/font-awesome.css'
// bootstrap
import '../../css/vendors/bootstrap.sass'
// import 'bootstrap/js/src/util.js'
// import 'bootstrap/js/src/alert.js'
// import 'bootstrap/js/src/dropdown.js'
// import 'bootstrap/js/src/tooltip.js'
// import 'bootstrap/js/src/popover'
// browser detect
import bowser from 'bowser'
window.bowser = bowser
// add class on scroll
// http://michalsnik.github.io/aos/
// https://scrollrevealjs.org/
// https://github.com/terwanerik/ScrollTrigger
// import 'jquery.appear/jquery.appear.js'
// jquery timing functions
import 'jquery.easing/jquery.easing.js'
// popup
// import 'magnific-popup/dist/magnific-popup.css'
// import 'magnific-popup/dist/jquery.magnific-popup.min.js'
// input masks
import 'jquery-mask-plugin/dist/jquery.mask.min.js'
// form validations
import 'jquery-validation/dist/jquery.validate.min.js'
// form selects
import 'select2/dist/css/select2.min.css'
import 'select2/dist/js/select2.min.js'
// svg fix
// import 'svgxuse/svgxuse.min.js'
import svg4everybody from 'svg4everybody/dist/svg4everybody.min.js'
svg4everybody()
// slick slider
import 'slick-carousel/slick/slick.scss'
import 'slick-carousel/slick/slick.min.js'
