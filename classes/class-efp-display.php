<?php
class EFP_Display {
	
	public function get_display_object( $display ,  $c_post , $type = 'local' ) {
		
		$display_obj = array();
		
		switch ( $type ) {
			
			default: 
				$display_obj = $this->get_local_display_object( $display , $c_post );
				break;
			
		}; // end switch
		
		return $display_obj;
		
	} // end method get_display_object
	
	
	
	public function get_local_display_object( $display , $c_post ){
		
		global $post;
		
		$display_obj = array();
		
		$in_loop = false;
		
		if ( isset( $post ) && $c_post->ID == $post->ID && in_the_loop() ) {
			
			$in_loop = true;
			
		} // end if
		
		$display_obj['title'] = apply_filters( 'the_title' , $c_post->post_title );
		
		$display_obj['content'] = apply_filters( 'the_content' , $c_post->post_content );
		
		$display_obj['img'] = get_the_post_thumbnail( $c_post->ID, 'thumbnail' );
		
		$display_obj['post_type'] = $c_post->post_type;
		
		if( $c_post->post_excerpt ) {
			
			$display_obj['excerpt'] = $c_post->post_excerpt;
			
		} else {
			
			$display_obj['excerpt'] = wp_trim_words( $c_post->post_content , 35 );
			
		};// end if
		
		return $display_obj;
		
	} // end get_local_display_object
	
	public function get_display( $display , $display_ar ){
		
		switch( $display ){
			case 'gallery':
				echo $this->get_gallery( $display , $display_ar );
				break;
			
		}; // end switch
		
	}
	
	public function get_gallery( $display , $display_ar ){
		
		$img = ( ! empty( $display_ar['img'] ) ) ? ' has-image' : '';
		
		$html = '<ul class="gallery' . $img . ' ' . $display_ar['post_type'] . '">';
		
		if ( ! empty( $display_ar['img'] ) ){
	
			$html .= '<li class="image-wrapper">' . $display_ar['img'] . '</li>';
			
		}
		
		$html .= '<li class="caption">';
		
    	if ( ! empty( $display_ar['title'] ) ){
			
    		$html .= '<h4>' . $display_ar['title'] . '</h4>';
		
		}
        
		if ( ! empty( $display_ar['excerpt'] ) ){
			
    		$html .= '<span class="excerpt">' . $display_ar['excerpt'] .'</span>';
		}
		
    	$html .= '</li></ul>';
		
		return $html;
		
	}
	
} // end class EFP_Display