'use strict';
$(function() {
  $('.call_tooltip').tooltip();
  console.log('Tooltip has initialized on DOM elements .call_tooltip');
});
// Intialize Nanobar
var simplebar = new Nanobar();
simplebar.go(99.99);
// Initialize OnePageScroll.js
// $(".main").onepage_scroll();
/* $(".main").onepage_scroll({
   sectionContainer: "section",
   easing: "ease",
   animationTime: 1000,
   pagination: true,
   updateURL: false,
   beforeMove: function(index) {},
   afterMove: function(index) {},
   loop: false,
   keyboard: true,
   responsiveFallback: false,
   direction: "vertical"
}); */