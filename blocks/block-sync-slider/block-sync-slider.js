var $ = jQuery.noConflict();

$(document).ready(function() {
    block_sync_slider();
});

function block_sync_slider() {
    var galleryTop = new Swiper('.gallery-top', {
        loop: true,
        loopedSlides: 4,
        navigation: {
            nextEl: '.gallery-top .swiper-button-next',
            prevEl: '.gallery-top .swiper-button-prev',
        },
        keyboard: {
            enabled: true,
            onlyInViewport: false,
        }
    });
    
    var galleryThumbs = new Swiper('.gallery-thumbs', {
        slidesPerView: 4,
        spaceBetween: 7,
        loop: true,
        slideToClickedSlide: true,
        keyboard: {
            enabled: true,
            onlyInViewport: false,
        }
    });
    
    if ( $('.block-sync-slider').length ) {
        galleryTop.controller.control = galleryThumbs;
        galleryThumbs.controller.control = galleryTop;
    }
}
