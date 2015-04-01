<?php

class EFP_Ministry {
	
	public function __construct(){
		
		add_theme_support( 'post-thumbnails' );
		
		define( 'EFPMINISTRYURL' , get_stylesheet_directory_uri() );
		
		define( 'EFPMINISTRYDIR' , get_stylesheet_directory() );
		
		$this->efp_add_flies();
		
		$flies = new EFP_Fly();
		
		add_action( 'wp_enqueue_scripts', array( $this , 'efp_wp_enqueue_scripts' ) );
		
		add_action( 'after_setup_theme', array( $this , 'efp_register_menu' ) );
		
		add_action('init', array( $this , 'efp_init' ) );
		
		$this->efp_shortcodes();
		
	} // end method __construct
	
	private function efp_add_flies(){
		
		require_once EFPMINISTRYDIR . '/classes/class-efp-fly.php';
		
		require_once EFPMINISTRYDIR . '/classes/class-efp-post.php';
		
		require_once EFPMINISTRYDIR . '/classes/class-efp-display.php';
		
	}
	
	public function efp_init(){
		
		add_post_type_support( 'page', 'excerpt' );
		
	}
	
	public function efp_register_menu(){
		
		register_nav_menu( 'primary', 'Primary Menu' );
		
	}
	
	/*
	 * @desc - Adds public css
	*/
	public function efp_wp_enqueue_scripts() {
		
		wp_enqueue_style( 'style', get_template_directory_uri() . '/style.css', array(), '0.0.1' );
		
		wp_enqueue_script( 'jQuery', '//ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js', array(), '0.0.1' );
		
		wp_enqueue_script( 'cycle2', get_template_directory_uri() . '/js/cycle2.js', array('jQuery'), '0.0.1' );
		
		wp_enqueue_script( 'public-js', get_template_directory_uri() . '/js/public.js', array('jQuery'), '0.0.1' );
		
	} // end method efp_wp_enqueue_scripts
	
	
	public function efp_shortcodes() {
		
		require_once EFPMINISTRYDIR . '/shortcodes/shortcode-pb-row.php';
		
		require_once EFPMINISTRYDIR . '/shortcodes/shortcode-pb-column.php';
		
		$shortcode_pb_row = new Shortcode_PB_Row();
		
		$shortcode_pb_column = new Shortcode_PB_Column();
		
	} // end method efp_shortcodes
	
} // end class efp_ministry

$efp_ministry = new EFP_Ministry();