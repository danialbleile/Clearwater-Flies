<?php get_header(); ?>
	<?php get_sidebar();?>
	<main class="has-sidebar">
        <section>
            <?php if (have_posts()) : while (have_posts()) : the_post();?>
            <h1 id="post-<?php the_ID(); ?>"><?php the_title();?></h1>
            <?php edit_post_link('Edit this entry.', '<p>', '</p>'); ?>
            <article class="post">
                <div class="entrytext">
                    <?php the_content('<p class="serif">Read the rest of this page »</p>'); ?>
                </div>
                
            </article>
            <?php endwhile; endif; ?>
        </section>
    </main>
<?php get_footer(); ?>