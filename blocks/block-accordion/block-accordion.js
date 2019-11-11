var $ = jQuery.noConflict();

$(document).ready(function() {
	block_accordion();
});

function block_accordion() {
	$('.accordion li .btn').click(function(e) {
        e.preventDefault();
        $('.accordion li.active').not($(this).closest('.accordion li')).removeClass('active').find('.entry-content').slideUp(100);
        $(this).closest('.accordion li').toggleClass('active').find('.entry-content').slideToggle(100);
    });
}