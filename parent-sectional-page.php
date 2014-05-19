<?php
/*
 * Template Name: Parent Sectional Page
 * Description: The template for displaying sectional pages such as the About or Connect pages.
 *
 * This is the template that displays sectional pages. It will
 * pull in the lower level sub-sections and display them all as one page.
 *
 * @package garden
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<?php while ( have_posts() ) : the_post(); ?>

				<?php get_template_part( 'content', 'page' ); ?>

			<?php endwhile; // end of the loop. ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>
