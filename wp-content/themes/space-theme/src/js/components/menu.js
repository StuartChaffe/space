jQuery(document).ready(function($) {
	// Primary nav
	var $menuBtn = $(".site-header--nav-btn");
	var $menuContainer = $(".site-header--nav__mobile");
	$menuBtn.click(function() {
		$(this).toggleClass("is-active");
		$("body").toggleClass("menu-active");
		$menuContainer.toggleClass("is-active");
	});
	$(window).scroll(function(){
		if ($(this).scrollTop() > 50) {
			$('.site-header').removeClass('site-header__down').addClass('site-header__up')
			} else {
			$('.site-header').addClass('site-header__down').removeClass('site-header__up')
			}
	});

});

jQuery(document).ready(function( $ ) {
	$( ".site-header--nav__mobile .menu-item-has-children > a" ).after( '<span class="dropdown-button">&nbsp;</span>' );
	$('.dropdown-button').click(function() {
		if ($(this).hasClass("is-active")) {
			$(this).removeClass('is-active');
			$(this).next('.sub-menu').slideUp('normal');
		} else {
			$(this).addClass('is-active');
			$(this).next('.sub-menu').slideDown('normal');
		}

		return false;
	});
});