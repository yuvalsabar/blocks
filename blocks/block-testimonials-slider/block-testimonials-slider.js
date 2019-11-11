var $ = jQuery.noConflict();

$(document).ready(function() {
	block_testimonials();
});

function block_testimonials() {
	var testimonials_slider = new Swiper('.block-testimonials-slider .swiper-container', {
	    //slidesPerView: 1,
	    loop: true,
	    autoplay: {
	        delay: 5000,
	    },
	    pagination: {
			el: '.swiper-pagination',
			type: 'bullets',
			clickable: true,
		},
	    navigation: {
	        nextEl: '.block-testimonials-slider .swiper-button-next',
	        prevEl: '.block-testimonials-slider .swiper-button-prev',
	    },
	    keyboard: {
	        enabled: true,
	        onlyInViewport: false,
	    },
	});
}
