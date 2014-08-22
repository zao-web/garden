<?php
/**
 * The Template for displaying all single posts.
 *
 * @package _s
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

		<?php while ( have_posts() ) : the_post(); ?>

			<?php get_template_part( 'content', 'single' ); ?>

			<?php garden_post_nav(); ?>

		<?php endwhile; // end of the loop. ?>

		</main><!-- #main -->
	</div><!-- #primary -->
<<<<<<< HEAD
<?php /*get_sidebar();*/ ?>
=======

>>>>>>> blog
<?php get_footer(); ?>