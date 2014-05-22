<?php
/*
 * Template Name: Parent Sectional Page
 * Description: The template for displaying sectional pages such as the About or Connect pages.
 *
 * This is the template that displays sectional pages. It will
 * pull in the lower level sub-sections and display them all as one page.
 *
 * @package garden
 *
 */
 
get_header(); 
 
?>
 
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
 
			<div class="parent-content">

				<?php while ( have_posts() ) : the_post(); ?>

					<?php get_template_part( 'content', 'page' ); ?>

				<?php endwhile; // end of the loop. ?>	

				<?php
	 
					$query_args = array(
					  'post_type'   => 'page',
					  'post_status' => 'publish',
					  'post_parent' => get_the_ID(),
					  'orderby' => 'menu_order title'
					);
					 
					$children = new WP_Query( $query_args );
					
					//Checks to see if child section items exist and pull them into parent page.
					if ( $children->have_posts() ) {
 
						while ( $children->have_posts() ) :
							$children->the_post(); 
						?>
					     
						<div class="child-featured-img">
							<?php 
								if ( has_post_thumbnail() ) { 
									// check if the post has a Post Thumbnail assigned to it.
									the_post_thumbnail( 'full' );
								} 	
							?> 
							<h1 class="child-title">
								<?php the_title(); ?>
							</h1><!-- .child-title -->
						</div><!-- .child-featured-img -->
						
						<div class="child-content">
							<?php the_content(); ?>
						</div><!-- .child-content -->
						
					<?php 
						endwhile; // end of the loop. 
				 	}
					/* Restore original Post Data */
					wp_reset_postdata(); ?>
					
			<div><!-- .content-->
		</main><!-- #main -->
	</div><!-- #primary -->
 
<?php get_footer(); ?>