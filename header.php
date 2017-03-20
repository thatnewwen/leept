<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div class="container">
 *
 * @package Twenty Minutes
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="Decrease pain, restore motion, and enchance performace.">
<meta name="author" content="James Lee">
<title>LEEPT</title>
<link rel="icon" href="<?php bloginfo('template_directory'); ?>/favicon.ico">
<link href="https://fonts.googleapis.com/css?family=Lato:400,700" rel="stylesheet">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
<?php wp_head(); ?>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
<link href="<?php bloginfo('template_directory'); ?>/css/leept-style.css" rel="stylesheet">
</head>
<body <?php body_class(); ?>>

  <div id="menubar">
     <div class="container">
    <div class="toggle">
        <a class="toggleMenu" href="<?php echo esc_url('#');?>"><?php _e('Menu','twenty-minutes'); ?></a>
     </div><!-- toggle -->
     <nav class="navbar navbar-fixed-top navbar-default">
       <div class="container-fluid">
         <!-- Brand and toggle get grouped for better mobile display -->
         <div class="navbar-header">
           <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
             <span class="sr-only">Toggle navigation</span>
             <span class="icon-bar"></span>
             <span class="icon-bar"></span>
             <span class="icon-bar"></span>
           </button>
           <a class="navbar-brand" href="#">LEEPT</a>
         </div>

         <!-- Collect the nav links, forms, and other content for toggling -->
         <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
           <ul class="nav navbar-nav">
             <li><a href="#">About</a></li>
             <li><a href="#">Testimonials</a></li>
             <li><a href="#">FAQ</a></li>
           </ul>
           <ul class="nav navbar-nav navbar-right">
             <li><a href="#">Blog</a></li>
             <li><a href="#">Schedule</a></li>
             <li><a href="#">Contact</a></li>
           </ul>
         </div><!-- /.navbar-collapse -->
       </div><!-- /.container-fluid -->
     </nav>
     </div>
  </div><!--#menubar -->
