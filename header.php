<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package _s
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title><?php wp_title( '|', true, 'right' ); ?></title>
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

<?php 
	global $post;

	$about = array (
		'theme_location' 	=> 'secondary',
		'menu' 				=> 'About',
		'container'			=> 'div',
		'container_class'	=> 'secondary-nav',
		'items_wrap'      	=> '<ul id="%1$s" class="%2$s">%3$s</ul>'
	);

	$connect = array (
		'theme_location' 	=> 'secondary',
		'menu' 				=> 'Connect',
		'container'			=> 'div',
		'container_class'	=> 'secondary-nav',
		'items_wrap'      	=> '<ul id="%1$s" class="%2$s">%3$s</ul>'
	);
?>

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="hfeed site">

	<header id="masthead" class="site-header" role="banner">
		<div class="main-header">
			<div class="site-branding">
				<h1 class="site-title"><?php echo bloginfo( 'name' ); ?></h1>
				<a id="logo" href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><img src="<?php echo get_stylesheet_directory_uri() . '/img/logo.png'; ?>" alt="The Garden Logo" /></a>
			</div>

			<nav id="site-navigation" class="main-navigation" role="navigation">
				<p id="menu-btn">Menu</p>
				<a class="skip-link screen-reader-text" href="#content"><?php _e( 'Skip to content', 'garden' ); ?></a>

				<?php wp_nav_menu( array( 'theme_location' => 'main-menu' ) ); ?>
			</nav><!-- #site-navigation -->
		</div><!-- .main-header -->

			<?php if( is_page( 'about' )) {
					wp_nav_menu( $about );
				} elseif( is_page( 'connect' )) {
					wp_nav_menu( $connect );
				}
			?>

	</header><!-- #masthead -->

	<div id="content" class="site-content">
