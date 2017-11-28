//@prepros-prepend jquery-3.1.1.min.js
//@prepros-prepend jquery.flexslider.js
//@prepros-prepend scrollreveal.js

$( document ).ready(function() {

	console.log('kaka');

	// Mobilmeny
	$(".header__nav__toggle").on("click", function() {
		$(".nav__mobile").fadeToggle();
		$(".js-nav-overlay").toggle();
		$("body").css("overflow-y", "hidden");
	});

	$(".nav__mobile__close, .js-nav-overlay").on("click", function() {
		$(".nav__mobile").fadeToggle();
		$(".js-nav-overlay").toggle();
		$("body").css("overflow-y", "auto");
	});

	if ($(window).width() > 768) {
		$(".nav__mobile, .js-nav-overlay").hide();
		$("body").css("overflow-y", "auto");
	}

	$(window).resize(function() {
		if($(window).width() > 768) {
			$(".nav__mobile, .js-nav-overlay").hide();
			$("body").css("overflow-y", "auto");
		}
	});
	

  // Scrollreveal
  window.sr = ScrollReveal();
	sr.reveal('.contact__img');
	sr.reveal('.contact__intro');
	sr.reveal('.contact__columns');

	// Bildspel
	$('.flexslider').flexslider({
	    animation: "slide",
	    slideshow: true,
	    itemWidth: 0
	});

});