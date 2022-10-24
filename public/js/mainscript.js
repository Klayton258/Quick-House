/******/ (() => { // webpackBootstrap
var __webpack_exports__ = {};
/*!************************************!*\
  !*** ./resources/js/mainscript.js ***!
  \************************************/
$(document).ready(function () {
  $('#autoWidth').lightSlider({
    autoWidth: true,
    loop: true,
    onSliderLoad: function onSliderLoad() {
      $('#autoWidth').removeClass('cS-hidden');
    }
  });
  var autoplaySlider = $('#autoplay').lightSlider({
    auto: true,
    loop: true,
    pauseOnHover: true,
    onBeforeSlide: function onBeforeSlide(el) {
      $('#current').text(el.getCurrentSlideCount());
    }
  });
  $('#total').text(autoplaySlider.getTotalSlideCount());
}); // --------------------------------
//     Navbar
// --------------------------------

var btnMobile = document.getElementById('btn-menumobile');

function toggleMenu(event) {
  if (event.type == 'touchstart') event.preventDefault();
  var nav = document.getElementById('menu');
  nav.classList.toggle('active');
  var active = nav.classList.contains('active');
  event.currentTarget.setAttribute('aria-expanded', active);
}

btnMobile.addEventListener('click', toggleMenu);
btnMobile.addEventListener('touchstart', toggleMenu); // -------------------------------------

var rellax = new Rellax(".rellax"); // --------------------------------
//     House
// --------------------------------

$(document).ready(function () {
  $('#imageGallery').lightSlider({
    gallery: true,
    item: 1,
    loop: true,
    thumbItem: 8,
    slideMargin: 0,
    enableDrag: true,
    currentPagerPosition: 'left',
    onSliderLoad: function onSliderLoad(el) {
      el.lightGallery({
        selector: '#imageGallery .lslide'
      });
    }
  });
});
$('#timesbtn').click(function times() {
  var times = $(this).attr('data-visits');
  console.log(times.split('|'));
  var data = times.split('|');
  var dates = data.join(',');
  console.log(dates);
  config = {
    enable: [dates],
    enableTime: true,
    minTime: "12:00",
    maxTime: "16:30"
  };
  flatpickr("input[type=datetime-local]", config);
});
/******/ })()
;