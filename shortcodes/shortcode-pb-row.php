<?php
class Shortcode_PB_Row {
	
	private $defaults = array(
						'layout' => 'single-column'
						);
	
	public function __construct(){
		
		add_shortcode( 'pbrow', array( $this , 'pb_render_row' ) );
		
	} // end method __construct
	
	public function pb_render_row( $atts , $content = null ){
		
		$a = shortcode_atts( $this->defaults, $atts );
		
		$html = '';
		
		global $is_email;
		
		if( ! empty( $is_email ) ) {
			
			// handle html emails
			
		} else {
			
			// handle standard webpage
			
			$html = '<div class="row pb-row ' . $a['layout'] . '">';
			
			$html .= do_shortcode( $content );
			
			$html .= '</div>';
			
		}; // end if
		
		
		return $html;
		
	} // end pb_render_row
	
} // end class Shortcode_pb_row