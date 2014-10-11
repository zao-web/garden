<?php
/**
 * The Template for displaying all single posts.
 *
 * @package _s
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

		<?php if( have_posts() ): while ( have_posts() ) : the_post(); ?>

			<?php get_template_part( 'content', 'single' ); ?>

		<?php endwhile; endif; // end of the loop. ?>

			<div class="post_nav">
			<?php 
			/**
			 *  Infinite next and previous post looping in WordPress
			 */
				if( get_adjacent_post(false, '', true) ) : ?> 
					<p class="previous"><?php previous_post_link('%link', 'Recent Post<br> &#8592;');?></p>
				<?php else: 
				    $first = new WP_Query('posts_per_page=1&order=DESC'); $first->the_post();
				    	echo '<p class="previous"><a href="' . get_permalink() . '">Recent Post<br> &#8592;</a></p>';
				  	wp_reset_query();
				endif; 
				    
				if( get_adjacent_post(false, '', false) ) : ?>
					<p class="next"><?php next_post_link('%link', 'Next Post<br> &#8594;');?></p>
				<?php else: 
					$last = new WP_Query('posts_per_page=1&order=ASC'); $last->the_post();
				    	echo '<p class="next"><a href="' . get_permalink() . '">Next Post<br> &#8594;</a></p>';
				    wp_reset_query();
				endif; ?>
			</div>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>