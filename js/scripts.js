$(function(){

	jQuery('.slick-carousel').slick({
		autoplay: false, // Set to true to auto-play the carousel
		accessibility: true,
		arrows: true, // Set to true to display arrow buttons for navigating the carousel
		dots: false, // Set to true to display pagination dots for navigating the carousel
		infinite: true, // Set to true to loop through the images endlessly
		transition: 500, // Set the transition speed in milliseconds
		slidesToShow: 1, // Set the number of images to display at a time
		lazyLoad: 'progressive',
		adaptiveHeight: false // Set to true to adjust the carousel's height to fit the images
		});
//hamburger menu
$('.mobileMenu').click(function(){
	$('header nav').toggleClass('openNav');
	$('.menuOpenButton').toggleClass('openNow');
	$('.menuCloseButton').toggleClass('openNow');
	
	$(this).toggleClass('open');
    var isOpen = $(this).hasClass('open');
    if (isOpen) {
    //   $(this).text('Close');
    } else {
    //   $(this).text('Menu');
    }
	});



});


$('.menu-item').click(function(){
	if($('header nav').hasClass('openNav')) {
		$('header nav').removeClass('openNav');
		$('.mobileMenu').toggleClass('open');
		$('.mobileMenu .menuOpenButton').css('display',"none");
	}


	});


const video = document.querySelector('#ParallaxVideo video');

const observer = new IntersectionObserver(entries => {
  entries.forEach(entry => {
    if (entry.isIntersecting) {
      video.play();
    } else {
      video.pause();
    }
  });
});

observer.observe(video);