$(function() {
    if ($('body') !== null) {
      $('body').addClass('show');
    }
    if ($('#btc') !== null) {
      $('#btc').addClass('show');
    }
});


// Mobile menu
$( ".hamburger-wrapper" ).click(function() {
  $(".mobile-menu").toggleClass( "mobile-menu-active" );
});

// Add "show" class into "#myBtn" to add transiton
$(window).scroll(function() {
  if ($(window).scrollTop() > 600) {
    $('#myBtn').addClass('show');
  } else {
    $('#myBtn').removeClass('show');
  }
});

// Scroll to News
$(".news_link").click(function() {
     $('html, body').animate({
         scrollTop: $("#news").offset().top
     }, 600);
 });
$(".news_mobile_link").click(function() {
	$(".mobile-menu").toggleClass( "mobile-menu-active" ); // close mobile menu
     $('html, body').animate({
         scrollTop: $("#news").offset().top
     }, 600);
 });
// Scroll to Bitcoin Longs vs Shorts
$(".longsShorts_link").click(function() {
     $('html, body').animate({
         scrollTop: $("#BitcoinShortsLongsAll").offset().top
     }, 600);
 });
$(".longsShorts_mobile_link").click(function() {
	 $(".mobile-menu").toggleClass( "mobile-menu-active" ); // close mobile menu
     $('html, body').animate({
         scrollTop: $("#BitcoinShortsLongsAll").offset().top
     }, 600);
 });