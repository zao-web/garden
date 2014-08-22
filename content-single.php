<?php
/**
 * @package garden
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="featured-image">	
		<?php 
		if ( has_post_thumbnail() ) { // check if the post has a Post Thumbnail assigned to it.
		  the_post_thumbnail( 'full' );
		} 
		?>
	</header><!-- .featured-image-->

	<div class="blog-entry-header">
		<h1 class="entry-title"><?php the_title(); ?></h1>

		<div class="entry-meta">
			<?php garden_posted_on(); ?>
		</div><!-- .entry-meta -->

		<div class="author-gravatar">
			<?php echo get_avatar( get_the_author_meta('email'), '100' ); ?>
		</div><!-- .author-gravatar -->
	</div><!-- .entry-header -->

	<div class="blog-entry-content">
		<?php the_content(); ?>
		<?php
			wp_link_pages( array(
				'before' => '<div class="page-links">' . __( 'Pages:', 'garden' ),
				'after'  => '</div>',
			) );
		?>
	</div><!-- .blog-entry-content -->

	<div class="social-media">
		<a href="#"><div class="dashicons dashicons-twitter"></div></a>
		<a href="#"><div class="dashicons dashicons-facebook-alt"></div></a>
		<a href="#"><img id="linkedin" src="<?php echo get_stylesheet_directory_uri() . '/img/green-in.png'; ?>" alt="Linked In Icon" /></a>
		<a href="#"><img id="arrow" src="<?php echo get_stylesheet_directory_uri() . '/img/green-recarrow.png'; ?>" alt="" /></a>	
		<a href="#"><div class="dashicons dashicons-googleplus"></div></a>
	</div><!-- .social-media -->

	<hr>

</article><!-- #post-## -->
