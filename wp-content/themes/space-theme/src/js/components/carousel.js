jQuery(document).ready(function($) {
	$(".quote--slider").slick({
		// settings: "unslick",
		speed: 300,
		slidesToShow: 1,
		slidesToScroll: 1,
		autoplay: true,
		autoplaySpeed: 8000,
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