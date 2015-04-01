jQuery(document).ready(function( $ ){
	
	var banner = $( '#page-banner .banner-inner');
	
	$( window ).scroll( function(){
		
		var scr = $( window ).scrollTop();
		
		var b_scr = scr * 0.5;
		
		banner.css( 'top', b_scr + 'px' );
		
		
	}); // end window scroll
	
	
}); // end document ready