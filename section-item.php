<?php
/**
 * Template Name:  Section Item
 *
 * This is the template that creates a single section
 * to be displayed in a Parent Sectional Page.
 *
 * @package garden
 */

get_header(); ?>

	<div class="section-item">
		<main id="main" class="site-main" role="main">

		<header class="featured-image">	
			<?php 
			if ( has_post_thumbnail() ) { // check if the post has a Post Thumbnail assigned to it.
			  the_post_thumbnail( 'full' );
			} 
			?>
		</header><!-- .featured-image-->


			<?php while ( have_posts() ) : the_post(); ?>

				<?php get_template_part( 'content', 'page' ); ?>

				<?php
					// If comments are open or we have at least one comment, load up the comment template
					if ( comments_open() || '0' != get_comments_number() ) :
						comments_template();
					endif;
				?>

			<?php endwhile; // end of the loop. ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>
