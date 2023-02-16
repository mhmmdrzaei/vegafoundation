$(function(){

	jQuery('.slick-carousel').slick({
		autoplay: true, // Set to true to auto-play the carousel
		arrows: true, // Set to true to display arrow buttons for navigating the carousel
		dots: true, // Set to true to display pagination dots for navigating the carousel
		infinite: true, // Set to true to loop through the images endlessly
		transition: 500, // Set the transition speed in milliseconds
		slidesToShow: 1, // Set the number of images to display at a time
		adaptiveHeight: true // Set to true to adjust the carousel's height to fit the images
		});

});