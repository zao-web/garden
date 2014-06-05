<?php
/**
 * The main front-page template file.
 *
 *
 *
 * @package garden
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
			<div class="hero">
				<div class="hero-image"><img src="<?php echo the_field( 'hero_image' ); ?>" /></div>
				<h2 id="hero-title"><?php the_field( 'hero_image_title' ); ?></h2>
				<?php if ( get_post_meta(get_the_ID(), 'line_1', true)) : ?>
					<p id="line_1"><?php the_field( 'line_1' ); ?></p>
				<?php endif; ?>
				<?php if ( get_post_meta(get_the_ID(), 'line_2', true)) : ?>
					<p id="line_2"><?php the_field( 'line_2' ); ?></p>
				<?php endif; ?>
				<?php if ( get_post_meta(get_the_ID(), 'line_3', true)) : ?>
					<p id="line_3"><?php the_field( 'line_3' ); ?></p>
				<?php endif; ?>
				<div class="cta"><a href="<?php the_field( 'call_to_action_url' ); ?>"><?php the_field( 'call_to_action' ); ?></a></div>
				<div class="hero-social-media">
					<a href="https://twitter.com/thegardenlb"><div class="hero-dashicons dashicons dashicons-twitter"></div></a>
					<a href="http://instagram.com/thegardenlb"><img class="hero-dashicons" src="<?php echo get_stylesheet_directory_uri() . '/img/instagram.png'; ?>" alt="Instagram Icon" /></a>
					<a href="https://www.facebook.com/thegardenlb"><div class="hero-dashicons dashicons dashicons-facebook-alt"></div></a>
				</div><!-- .hero-social-media -->

			</div><!-- .hero -->

			<div class="home widget-content">
				<div class="home-widget widget-top-left">
					<?php 
						if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar("Top-left") ) : ?>
					<?php endif; ?>
				</div>

				<div class="home-widget widget-top-right">
					<?php 
						if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar("Top-right") ) : ?>
					<?php endif; ?>
				</div>

				<div class="home-widget widget-middle-left">
					<?php 
						if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar("Middle-left") ) : ?>
					<?php endif; ?>
				</div>

				<div class="home-widget widget-middle-right">
					<?php 
						if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar("Middle-right") ) : ?>
					<?php endif; ?>
				</div>	

				<div class="home-widget widget-bottom-left">
					<?php 
						if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar("Bottom-left") ) : ?>
					<?php endif; ?>
				</div>

				<div class="home-widget widget-bottom-right">
					<?php 
						if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar("Bottom-right") ) : ?>
					<?php endif; ?>
				</div>

			</div><!-- .home .widget-content -->
		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
