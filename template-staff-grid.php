<?php
/**
 * Template Name:  Staff Page
 *
 * This is the template that creates a single section
 * to be displayed in a Parent Sectional Page.
 *
 * @package garden
 */

get_header(); ?>

	<div class="section-item">
		<main id="main" class="site-main" role="main">

		
			<?php while ( have_posts() ) : the_post(); ?>

				<?php get_template_part( 'content', 'staff' ); ?>

			<?php endwhile; // end of the loop. ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
