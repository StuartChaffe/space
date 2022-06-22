jQuery(document).ready(function($) {
	$(".testimonials--slider").slick({
		// settings: "unslick",
		speed: 300,
		slidesToShow: 1,
		slidesToScroll: 1,
		autoplay: true,
		autoplaySpeed: 4000,
		arrows: true,
		infinite: true,
		dots: false,
		adaptiveHeight: true,
		pauseOnHover: false,
		// responsive: [
		// 	{
		// 		breakpoint: 640,
		// 		settings: {
		// 			slidesToShow: 2,
		// 		}
		// 	},
		// 	{
		// 		breakpoint: 1024,
		// 		settings: {
		// 			slidesToShow: 3,
		// 		}
		// 	}
		// ]
	});
});