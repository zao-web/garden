<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package garden
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<header class="page-header">	
				<div class="featured-image">
					<?php 
					if ( has_post_thumbnail() ) { // check if the post has a Post Thumbnail assigned to it.
					  the_post_thumbnail( 'full' );
					} ?>
				</div><!-- .featured-image -->
				
				<h1 class="green-title">
					<?php the_field('green_page_title'); ?>
				</h1><!-- .green-title -->

				<h2 class="page-tagline">
					<?php the_field('page_tagline'); ?>
				</h2><!-- .page-tagline -->

				<?php if( is_page( 'sermons' )) : ?>

					<?php get_template_part( 'sermons', 'cta' ); ?>

				<?php endif; ?>

			</header><!-- .page-header -->

			<?php if( is_page( 'contact' )) : ?>

				<?php get_template_part( 'custom', 'contact' ); ?>

			<?php endif; ?>

			<?php if( is_page( 'sermons' )) : ?>

				<?php while ( have_posts() ) : the_post(); ?>

					<?php get_template_part( 'content', 'page' ); ?>

				<?php endwhile; // end of the sermons loop. ?>

					<?php get_template_part( 'custom', 'sermons' ); ?>

			<?php elseif( is_page( 'give' )) : ?>
				
				<?php get_template_part( 'custom', 'give' ); ?>

			<?php elseif( is_page( 'blogs' )) : ?>

				<?php get_template_part( 'custom', 'blogs' ); ?>

			<?php else : ?>

			<?php while ( have_posts() ) : the_post(); ?>

				<?php get_template_part( 'content', 'page' ); ?>

			<?php endwhile; // end of the loop. ?>
			
			<?php endif; ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
