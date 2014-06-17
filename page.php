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
				
				<p class="green-title">
					<?php the_field('green_page_title'); ?>
				</p><!-- .green-title -->

				<h1 class="page-tagline">
					<?php the_field('page_tagline'); ?>
				</h1><!-- .page-tagline -->
			</header><!-- .page-header -->

			<?php if( is_page( 'sermons' )) : ?>

				<?php while ( have_posts() ) : the_post(); ?>

					<?php get_template_part( 'content', 'page' ); ?>

				<?php endwhile; // end of the sermons loop. ?>

				<div class="sermons-archive-cta">
					<img src="<?php echo get_stylesheet_directory_uri() . '/img/sermons-archive.png'; ?>">
					<h1>The Garden Archive.</h1>
					<div class="archive secondary-button">
						<a href="http://thegardenlb.sermoncampus.info/main/main/20049955">View Now</a>
					</div>
				</div>

			<?php elseif( is_page( 'give' )) : ?>
				
				<div class="give entry-content">
					<div class="give-account secondary-button"><a href="#">My Account</a></div>
				</div>

				<?php while ( have_posts() ) : the_post(); ?>

					<?php get_template_part( 'content', 'page' ); ?>

				<?php endwhile; // end of the sermons loop. ?>

				<div class="kindred">
					<img class="kindred-bg" src="<?php echo get_stylesheet_directory_uri() . '/img/kindred-bg.png'; ?>">
					<h1>Also, with a text.</h1>
					<p>Text “GIVE” to 562.296.4839 to get started.</p>
				</div>

				<div class="give entry-content">
					<p>To learn more about Kindred, click <a href="#">here.</a></p>
				</div>

			<?php elseif( is_page( 'blogs' )) : ?>

				<div class="entry-content">
					<div class="blog-banner">
						<a href="http://localhost/thegarden.com/blog/">
							<img src="<?php echo get_stylesheet_directory_uri() . '/img/garden-blog.png'; ?>" alt="Welcome Home The Garden Church banner">
							<h3>Click to View The Garden Blog</h3>
						</a>
					</div>

					<div class="blog-banner">
						<a href="http://darrenr.com/">
							<img src="<?php echo get_stylesheet_directory_uri() . '/img/darren-blog.png'; ?>" alt="Pastor Darren on stage">
							<h3>Click to View Pastor Darren's Blog</h3>
						</a>
					</div>

					<div class="blog-banner">
						<a href="http://bdogterom.blogspot.com/">
							<img src="<?php echo get_stylesheet_directory_uri() . '/img/bill-blog.png'; ?>" alt="Pastor Bill on pews">
							<h3>Click to View Pastor Bill's Blog</h3>
						</a>
					</div>
				</div>

			<?php else : ?>

			<?php while ( have_posts() ) : the_post(); ?>

				<?php get_template_part( 'content', 'page' ); ?>

			<?php endwhile; // end of the loop. ?>
			
			<?php endif; ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
