<?php
class EFP_Fly {
	
	private $key = '_fly';
	
	public $materials = '';
	
	public $hook_sizes = array();
	
	public $summary = '';
	
	public function __construct(){
		
		add_action( 'init', array( $this , 'add_post_type' ) );
		
		add_action( 'edit_form_after_title' , array( $this , 'add_edit_form' ) );
		
	}
	
	public function add_post_type(){
		
		register_post_type( 'flies',
			array(
				'labels' => array(
					'name' => __( 'Flies' ),
					'singular_name' => __( 'Fly' )
				),
			'public' => true,
			'has_archive' => true,
			'supports' => array( 'title', 'editor','thumbnail' ),
			)
		);
	}
	
	public function add_edit_form( $post ){
		
		$this->get_fly_from_meta( $post );
		
		include EFPMINISTRYDIR . '/inc/inc-form-fly.php';
		
	}
	
	public function get_fly_from_meta( $post ){
		
		$meta = get_post_meta( $post->ID , $this->key , true );
		
		if ( ! empty( $meta['materials'] ) ) {
			
			$this->materials = $meta['materials'];
			
		};// end if
		
		if ( ! empty( $meta['hooks'] ) ) {
			
			$this->hook_sizes = $meta['hook_sizes'];
			
		};// end if
		
		if( $post->post_excerpt ) {
			
			$this->summary = $post->post_excerpt;
			
		}; // end if
		
	}
	
	
} // end EFP_Fly