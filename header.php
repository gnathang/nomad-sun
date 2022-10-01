<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package nomadsun
 */

?>

<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	
	<link href="https://fonts.googleapis.com/css2?family=Archivo+Black&family=Cardo:ital@0;
	1&family=Tenor+Sans&family=Archivo&display=swap" rel="stylesheet">

	<link rel="stylesheet" href="https://unpkg.com/tachyons@4.12.0/css/tachyons.min.css"/>

	
	
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>


<div id="barba-wrapper">



	<?php wp_body_open(); ?>
	<div id="page" class="barba-container relative">
		<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'nomadsun' ); ?>
    </a>
                      <!-- z-2 makes the 2 index 2, so the header sits underneath the overlay -->
	<header id="masthead" class="site-header fixed top-0 left-0 w-100 pa3 ph4-l z-2">
      <nav id="site-navigation" class="main-navigation flex justify-between items-center">
        <!-- menu toggle, bg left and db are added for the overlay nav menu -->
        <a class="menu-toggle f6 archivo white ttu tracked block w4 bg-left db">
          Places
        </a>

        <a href="<?php echo get_site_url(); ?>">
          <img src="<?php bloginfo('template_directory'); ?>/images/sun-logo.svg" class="db">
        </a>

        <div class="flex items-center justify-end w4">
          <a href="https://facebook.com/nomadsun" class="fb-logo db mh2 link">
            <img src="<?php bloginfo('template_directory')?>/images/facebook-black.svg" class="db">
          </a>
          <a href="https://twitter.com/nomadsun" class="twitter-logo db mh2 link">
            <img src="<?php bloginfo('template_directory');?>/images/twitter-black.svg" class="db">
          </a>
          <a href="https://instagram.com/nomadsun" class="ig-logo db mh2 link">
            <img src="<?php bloginfo('template_directory');?>/images/insta-black.svg" class="db">
          </a>
        </div>
      </nav><!-- #site-navigation -->
    </header><!-- #masthead -->

    <!-- this grabs the overlay menu from its template folder -->
    <?php get_template_part('template-parts/content-menu'); ?>

<div id="content" class="site-content">