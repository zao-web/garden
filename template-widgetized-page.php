<?php
/**
 * 
 *Template Name: Widgetized Page
 *
 *The template for displaying all pages.
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
				
				<p class="green-title">
					<?php the_field('green_page_title'); ?>
				</p><!-- .green-title -->

				<h1 class="page-tagline">
					<?php the_field('page_tagline'); ?>
				</h1><!-- .page-tagline -->
			</header><!-- .page-header -->

			<?php while ( have_posts() ) : the_post(); ?>

				<?php get_template_part( 'content', 'page' ); ?>

			<?php endwhile; // end of the loop. ?>

			<div class="widget-content">
				<div class="widget-top-left">
					<?php 
						if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar("Top-left") ) : ?>
					<?php endif; ?>
				</div>

				<div class="widget-top-right">
					<?php 
						if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar("Top-right") ) : ?>
					<?php endif; ?>
				</div>

				<div class="widget-middle-left">
					<?php 
						if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar("Middle-left") ) : ?>
					<?php endif; ?>
				</div>

				<div class="widget-middle-right">
					<?php 
						if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar("Middle-right") ) : ?>
					<?php endif; ?>
				</div>	

				<div class="widget-bottom-left">
					<?php 
						if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar("Bottom-left") ) : ?>
					<?php endif; ?>
				</div>

				<div class="widget-bottom-right">
					<?php 
						if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar("Bottom-right") ) : ?>
					<?php endif; ?>
				</div>

			</div><!-- .widget-content -->

			 
		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
