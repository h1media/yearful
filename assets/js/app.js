(function ($) {

// Menu toggle

	jQuery(function($){
	     $( '#nav-icon1' ).click(function(){
	     $( '.responsive-menu' ).toggleClass( 'expand' );
	     $(this).toggleClass( 'open' );
	     });
	     $( '.primary-menu li a' ).click(function(){
	     $( '.responsive-menu' ).toggleClass( 'expand' );
	     $( '#nav-icon1' ).toggleClass( 'open' );
	     });
    });

 // Tabs same height

 	var highestBox = 0;
	jQuery('.tab .tab-description p').each(function() {
	    if (jQuery(this).height() > highestBox) {
	        highestBox = jQuery(this).height();
	    }
	});
	jQuery('.tab .tab-description p').css("min-height", highestBox + "px");

// Testimonials carousel

	jQuery(document).ready(function(){
	  jQuery(".owl-carousel").owlCarousel({
	  	loop:true,
	  	dots: true,
	  	items: 1,
	  	autoplay: true,
	  	autoplayHoverPause: true,
	  });
	});

})(jQuery);
