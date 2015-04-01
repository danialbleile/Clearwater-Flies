<?php
class Shortcode_PB_Column {
	
	private $defaults = array(
						'width' => false,
						);
	
	public function __construct(){
		
		add_shortcode( 'pbcolumn', array( $this , 'pb_render_column' ) );
		
	} // end method __construct
	
	public function pb_render_column( $atts , $content = null ){
		
		$a = shortcode_atts( $this->defaults, $atts );
		
		$html = '';
		
		global $is_email;
		
		if( ! empty( $is_email ) ) {
			
			// handle html emails
			
		} else {
			
			// handle standard webpage
			
			$style = '';
			
			if( ! empty( $a['width'] ) ) {
				
				$style = 'display: inline-block; vertical-align: top; width: ' . $a['width'] . ';';
				
			}; // end if
			
			$html = '<div class="column pb-column ' . $a['layout'] . '" style="' . $style . '">';
			
			$html .= '<div class="column-inner-wrapper">';
			
			$html .= do_shortcode( $content );
			
			$html .= '</div></div>';
			
		}; // end if
		
		
		return $html;
		
	} // end pb_render_column
	
} // end class Shortcode_pb_column