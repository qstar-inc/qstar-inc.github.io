/******/ (() => { // webpackBootstrap
/*!************************************!*\
  !*** ./source/_assets/js/starq.js ***!
  \************************************/
document.getElementById("mail").addEventListener("click", function () {
  var user = 'qst' + 'ar.' + 'inc';
  var host = 'gm' + 'ail.' + 'com';
  this.innerHTML = "<a href=\"mailto:".concat(user + "@" + host, "\">").concat(user + "@" + host, "</a>");
  this.classList.add("revealed");
});
function setBodyTextMinHeight() {
  var navbarHeight = document.querySelector('.navbar').offsetHeight;
  var letsHeight = document.querySelector('#lets-connect').offsetHeight;
  var viewportHeight = window.innerHeight;
  var bodyText = document.querySelector('#body-text');
  var minHeight = viewportHeight - navbarHeight - letsHeight;
  bodyText.style.minHeight = "".concat(minHeight, "px");
}
window.addEventListener('load', setBodyTextMinHeight);
window.addEventListener('resize', setBodyTextMinHeight);
/******/ })()
;