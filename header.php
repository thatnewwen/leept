<?php
/**
 * The header for our theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package leept
 */


function wptuts_scripts_basic()
{
    // Register the script like this for a theme:
    wp_register_script( 'hamburger', get_template_directory_uri() . '/js/hamburger.js' );
 
    // For either a plugin or a theme, you can then enqueue the script:
    wp_enqueue_script( 'hamburger' );
}
add_action( 'wp_enqueue_scripts', 'wptuts_scripts_basic' );
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">

    <link href="https://fonts.googleapis.com/css?family=Montserrat|Open+Sans" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.7/css/materialize.min.css">

    <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
    
	  <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.7/js/materialize.min.js"></script>

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'leept' ); ?></a>


	<div id="content" class="site-content">

		<header id="masthead" class="site-header" role="banner">
		  <div class="navbar-fixed">
		    <nav>
		      <div class="nav-wrapper">
		        <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="brand-logo center">LEEPT</a>
		        <a href="#" data-activates="mobile-demo" class="button-collapse"><img id="hamburger" src="<?php echo get_bloginfo('template_url') ?>/img/hamburger.png"/></a>
		        <ul class="left hide-on-med-and-down">
		          <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>">Home</a></li>
		          <li><a href="about">About</a></li>
		          <li><a href="faq">FAQ</a></li>
		          <li><a href="blog">Blog</a></li>
		        </ul>
		        <ul class="right hide-on-med-and-down">
		          <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>#contact">Contact</a></li>
		          <li><span>(847) 957-3137</span></li>
		        </ul>
		        <ul class="side-nav" id="mobile-demo">
		          <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>">Home</a></li>
		          <li><a href="about">About</a></li>
		          <li><a href="faq">FAQ</a></li>
		          <li><a href="blog">Blog</a></li>
		          <hr />
		          <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>#contact">Contact</a></li>
		          <li><span>(847) 957-3137</span></li>
		        </ul>
		      </div>
		    </nav>
		  </div>
		</header><!-- #masthead -->
