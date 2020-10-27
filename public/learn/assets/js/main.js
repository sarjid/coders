(function ($) {
 "use strict";
 
/*--------------------------
venobox
---------------------------- */	
$(document).ready(function(){
    $('.venobox').venobox();
});
 
/*--------------------------
mobile-menu
---------------------------- */	
$('#mobile-menu').mmenu();

/*---------------------
menu-stick
--------------------- */
var s = $("#sticker");
var pos = s.position();					   
$(window).on('scroll',function() {
	var windowpos = $(window).scrollTop();
	if (windowpos > pos.top) {
	s.addClass("stick");
	} else {
		s.removeClass("stick");	
	}
});
/*--------------------------
 cart dropdown
---------------------------- */	
$(".minicart-icon").on('click', function(){
	$(".minicart-icon").toggleClass("active");
	$(".cart-dropdown").slideToggle();
});
/*--------------------------
scrollUp
---------------------------- */	
$.scrollUp({
	scrollText: '<i class="fa fa-angle-up"></i>',
	easingType: 'linear',
	scrollSpeed: 900,
	animation: 'slide'
});
/*-------------------------------------
Hero Slider
----------------------------------------*/
var mainSlider = $('.main-slider');
mainSlider.slick({
	arrows: false,
	prevArrow:"<button type='button' class='slick-prev'><i class='fa fa-angle-left'></i></button>",
	nextArrow:"<button type='button' class='slick-next'><i class='fa fa-angle-right'></i></button>",
	autoplay: true,
	autoplaySpeed: 5000,
	dots: true,
	pauseOnFocus: false,
	pauseOnHover: false,
	fade: true,
	infinite: true,
	slidesToShow: 1,
	responsive: [
		{
		  breakpoint: 767,
		  settings: {
			  arrows: false
		  }
		},
		{
			breakpoint: 479,
			settings: {
				arrows: false
			}
		}
	]
});
mainSlider.on('beforeChange', function(event, slick, currentSlide, nextSlide){
	var sliderTitle = $('.main-slider h1');
	var currentTitle = $('.slick-current h1');
	sliderTitle.removeClass('cssanimation leDoorCloseLeft sequence');
	currentTitle.addClass('cssanimation leDoorCloseLeft sequence');
});
mainSlider.on('afterChange', function(event, slick, currentSlide, nextSlide){
	var sliderTitle = $('.main-slider h1');
	var currentTitle = $('.slick-current h1');
	sliderTitle.removeClass('cssanimation leDoorCloseLeft sequence');
	currentTitle.addClass('cssanimation leDoorCloseLeft sequence');
});
/*--------------------------
course-carousel
---------------------------- */
$(".course-carousel").slick({
  dots: true,
  arrows:true,
  infinite: true,
  speed: 300,
  slidesToShow: 4,
  slidesToScroll: 4,
  autoPlay: true,
  adaptiveHeight: true,
  prevArrow: '<i class="fa fa-angle-left"></i>',
  nextArrow: '<i class="fa fa-angle-right"></i>',
	responsive: [
		{
			breakpoint: 1169,
			settings: {
				slidesToShow: 3,
				slidesToScroll: 3
			}
		},
		{
			breakpoint: 769,
			settings: {
				slidesToShow: 2,
				slidesToScroll: 2,
			}
		},
		{
			breakpoint: 481,
			settings: {
				slidesToShow: 1,
				slidesToScroll: 1,
			}
		},
	]
});
/*--------------------------
Three Items
---------------------------- */
$(".three-items").slick({
  dots: false,
  arrows:true,
  infinite: true,
  speed: 300,
  slidesToShow: 3,
  slidesToScroll: 3,
  autoPlay: true,
  adaptiveHeight: true,
  prevArrow: '<i class="fa fa-angle-left"></i>',
  nextArrow: '<i class="fa fa-angle-right"></i>',
	responsive: [
		{
			breakpoint: 992,
			settings: {
				slidesToShow: 3,
				slidesToScroll: 3
			}
		},
		{
			breakpoint: 769,
			settings: {
				slidesToShow: 2,
				slidesToScroll: 2,
			}
		},
		{
			breakpoint: 361,
			settings: {
				slidesToShow: 1,
				slidesToScroll: 1,
			}
		},
	]
});
/*--------------------------
testimonial-carousel
---------------------------- */
$(".testimonial-carousel").slick({
  dots: true,
  arrows:false,
  infinite: true,
  speed: 300,
  slidesToShow: 2,
  slidesToScroll: 2,
  autoPlay: true,
  adaptiveHeight: true,
  prevArrow: '<i class="fa fa-angle-left"></i>',
  nextArrow: '<i class="fa fa-angle-right"></i>',
  responsive: [
    {
      breakpoint: 768,
      settings: {
        arrows: false,
        slidesToShow: 1
      }
    }
  ]
});
/*--------------------------
 testimonial-carousel 2
----------------------------*/
$(".testimonial-carousel-center").slick({
  centerMode: true,
  centerPadding: '100px',
  slidesToShow: 2,
  dots:true,
  arrows:false,
  responsive: [
    {
		breakpoint: 992,
			settings: {
			arrows: false,
			centerMode: false,
			centerPadding: '0',
			slidesToShow: 1,
			slidesToScroll: 1
		}
    }
  ]
});
/*--------------------------
 team-carousel
---------------------------- */
$(".team-carousel").slick({
  dots: false,
  arrow:true,
  infinite: true,
  speed: 300,
  slidesToShow: 3,
  slidesToScroll: 3,
  autoPlay: true,
  adaptiveHeight: true,
  prevArrow: '<i class="fa fa-angle-left"></i>',
  nextArrow: '<i class="fa fa-angle-right"></i>',
	responsive: [
		{
			breakpoint: 992,
			settings: {
				slidesToShow: 3,
				slidesToScroll: 3
			}
		},
		{
			breakpoint: 768,
			settings: {
				slidesToShow: 2,
				slidesToScroll: 2,
			}
		},
		{
			breakpoint: 361,
			settings: {
				slidesToShow: 1,
				slidesToScroll: 1,
			}
		},
	]
});
/*--------------------------
 counterUp
---------------------------- */	
$('.count1').counterUp({
	delay: 10,
	time: 1000
});	

$('.count2').counterUp({
	delay: 15,
	time: 2000
});

$('.count3').counterUp({
	delay: 20,
	time: 3000
});

$('.count4').counterUp({
	delay: 10,
	time: 4000
});
/*---------------------
countdown
--------------------- */
$('[data-countdown]').each(function() {
	
	var $this = $(this), finalDate = $(this).data('countdown');
	
	$this.countdown(finalDate, function(event) {
	$this.html(event.strftime('<span class="cdown days"><span class="time-count">%-D</span><p>/Days</p></span> <span class="cdown hour"><span class="time-count">%-H</span> <p>/Hour</p></span> <span class="cdown minutes"><span class="time-count">%M</span> <p>/Min</p></span> <span class="cdown second"> <span><span class="time-count">%S</span> <p>/Sec</p></span>'));
	});
	
});
/*----------------------------
 price-slider
------------------------------ */  
$( "#slider-range" ).slider({
	range: true,
	min: 40,
	max: 600,
	values: [ 60, 570 ],
	slide: function( event, ui ) {
	$( "#amount" ).val( "$" + ui.values[ 0 ] + " - $" + ui.values[ 1 ] );
	}
});
$( "#amount" ).val( "$" + $( "#slider-range" ).slider( "values", 0 ) +
" - $" + $( "#slider-range" ).slider( "values", 1 ) );
/*--------------------------
 isotop
---------------------------- */

$(window).on('load',function() {
	
	var layoutMode = 'fitRows';

	if($(window).width() < 992) {
		layoutMode = 'masonry';
	}
	
	$('.gallery-items').isotope({
		layoutMode: layoutMode,
	});
});

$('.gallery-nav li').on('click', function() {
	
  $(".gallery-nav li").removeClass("active");
  $(this).addClass("active");        

	var selector = $(this).attr('data-filter'); 
	$(".gallery-items").isotope({ 
		filter: selector, 
		animationOptions: { 
			duration: 750, 
			easing: 'linear', 
			queue: false
		} 
	}); 
  return false; 
});
/*----------------------------
 cart-plus-minus-button
------------------------------ */  
$(".qtybutton").on("click", function() {
	var $button = $(this);
	var oldValue = $button.parent().find("input").val();

	if ($button.text() == "+") {
	  var newVal = parseFloat(oldValue) + 1;
	} else {
		// Don't allow decrementing below zero
		if (oldValue > 0) {
			var newVal = parseFloat(oldValue) - 1;
		} else {
			newVal = 0;
		}
	}
	
	$button.parent().find("input").val(newVal);
});
})(jQuery); 