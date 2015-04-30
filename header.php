<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package _sbcgtheme
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title><?php wp_title( '|', true, 'right' ); ?></title>
	<link rel="shortcut icon" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/favicon.ico">
	<link rel="apple-touch-icon" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/apple-touch-icon.png">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="hfeed site">
	<!--[if lt IE 9]>
	    <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
	<![endif]-->

	<a class="skip-link sr" href="#content"><?php _e( 'Skip to content', '_sbcgtheme' ); ?></a>

	<header id="masthead" class="main-header" role="banner">
  	<div class="container">
  		<div class="header-branding">
  			<h1 class="header-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
  		</div>
  
  		<nav id="site-navigation" class="main-navigation" role="navigation">
  			<button class="nav-toggle"><?php _e( 'Primary Menu', '_sbcgtheme' ); ?></button>
  			<?php wp_nav_menu( array( 'theme_location' => 'primary', 
    			                        'depth' => 1, 
    			                        'container' => '',
    			                        'menu_class' => 'nav-primary', 
    			                        'walker' => new Sbcg_Menu() ) ); ?>
  		</nav><!-- #site-navigation -->
  	</div><!-- .container -->
	</header><!-- #masthead -->

	<div id="content" class="container">
