jQuery(document).ready(function( $ ){
	
	var banner = $( '#page-banner .banner-inner');
	
	$( window ).scroll( function(){
		
		var scr = $( window ).scrollTop();
		
		var b_scr = scr * 0.5;
		
		banner.css( 'top', b_scr + 'px' );
		
	}); // end window scroll
	
	$( '#contact-us-form' ).on( 'submit' , function( event ) {
		
		event.preventDefault();
		
		form = $( this );
		
		var input = form.serialize();
		
		$.post(
			form.attr('action'),
			input,
			function( data ){
				
				form.find('.message').html( data );
				
				form.find( 'input, textarea' ).not( '.submit' ).val('');
				
			} 
		);
		
	});
	
	
}); // end document ready