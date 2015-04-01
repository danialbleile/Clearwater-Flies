<?php get_header(); ?>
	<section id="front-page-summary">
    	<h1><?php echo get_bloginfo( 'description' );?></h1>
        <article>
        	<?php 
				$story = get_post( 11 );
				
				$excerpt = $story->post_excerpt;
				
				echo $excerpt;
			?>
        	<a href="<?php echo get_permalink( 11 ); ?>">Learn More</a>
        </article>
    </section>
    <section id="front-page-more">
    	<div id="our-patterns">
        	<?php get_template_part( 'parts/gallery' );?>
        </div><?php get_template_part( 'parts/contact-form' ); ?>
    </section>
<?php get_footer(); ?>