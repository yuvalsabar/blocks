var $ = jQuery.noConflict();

$(document).ready(function() {
	block_slider();
});

function block_slider() {
	var block_slider = new Swiper('.block-slider .swiper-container', {
	    slidesPerView: 3,
	    loop: true,
	    autoplay: {
	        delay: 5000,
	    },
	    pagination: {
			el: '.block-slider .swiper-pagination',
			type: 'bullets',
			clickable: true,
		},
	    navigation: {
	        nextEl: '.block-slider .swiper-button-next',
	        prevEl: '.block-slider .swiper-button-prev',
	    },
	    keyboard: {
	        enabled: true,
	        onlyInViewport: false,
	    },
	});
}
