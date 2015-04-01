<?php
class EFP_Post {
	
	public function get_posts( $query, $display = 'promo' ) {
		
		$the_query = new WP_Query( $query );
		
		$post_display = new EFP_Display();
		
		while ( $the_query->have_posts() ) {
			
			$the_query->the_post();
			
			$display_obj = $post_display->get_display_object( $display , $the_query->post );
			
			$post_display->get_display( $display , $display_obj );
			
		}; // end while
		
		wp_reset_postdata();
		
	} // end method get_posts
	
} // end class Post