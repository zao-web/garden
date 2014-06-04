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

			<div class="child-content">

			<?php 

			$args = array(
				'post_type' => 'staff',
				'orderby' => 'DESC',
				'posts_per_page' => -1
			);

			$the_query = new WP_Query( $args );

			?>

		
			<?php if ( have_posts() ) : while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
			
				<div class="staff-profile">
					<div class="staff-img"><img src="<?php echo the_field( 'image' ); ?>" /></div>
					<div class="staff-overlay">	
						<p class="staff-name"><?php the_title(); ?></p> 
						<p><?php the_field( 'position_title' ); ?></p>

						<?php if ( get_post_meta(get_the_ID(), 'twitter', true)) : ?>
							<a href="<?php the_field( 'twitter' ); ?>"><div class="staff dashicons dashicons-twitter"></div></a>
						<?php endif; ?>

						<?php if ( get_post_meta(get_the_ID(), 'instagram', true)) : ?>
							<a href="<?php the_field( 'instagram' ); ?>"><img class="staff" src="<?php echo get_stylesheet_directory_uri() . '/img/instagram.png'; ?>" alt="Instagram Icon" /></a>
						<?php endif; ?>

						<?php if ( get_post_meta(get_the_ID(), 'facebook', true)) : ?>
							<a href="<?php the_field( 'facebook' ); ?>"><div class="staff dashicons dashicons-facebook-alt"></div></a>
						<?php endif; ?>
						
						<?php if ( get_post_meta(get_the_ID(), 'email', true)) : ?>
							<a href="mailto:<?php the_field( 'email' ); ?>"><div class="staff dashicons dashicons-email"></div></a>
						<?php endif; ?>	
					</div> <!--.staff-overlay-->
				</div> <!--.staff-profile-->
				
			<?php endwhile; endif;// end of the loop. ?>

			</div><!-- .child-content -->
		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
