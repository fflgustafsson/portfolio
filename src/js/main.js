//@prepros-prepend jquery-3.1.1.min.js
//@prepros-prepend jquery.flexslider.js
//@prepros-prepend scrollreveal.js

$( document ).ready(function() {
  
  console.log('kaka');

  window.sr = ScrollReveal();
	sr.reveal('.contact__img');
	sr.reveal('.contact__intro');
	sr.reveal('.contact__columns');

	$('.flexslider').flexslider({
	    animation: "slide",
	    slideshow: true,
	    itemWidth: 0
	});

});