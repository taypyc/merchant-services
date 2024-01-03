if (!'IntersectionObserver' in window &&
    !'IntersectionObserverEntry' in window &&
    !'intersectionRatio' in window.IntersectionObserverEntry.prototype) {
// if(1==1) {
  var scriptElement = document.createElement('script');
  scriptElement.async = false;
  scriptElement.src = 'js/polyfills.js';
  document.head.appendChild(scriptElement);
}