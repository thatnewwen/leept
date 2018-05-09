<?php
/**
 * Displays header site branding
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */

?>
<div class="site-branding">
	<div class="wrap">
		<div class="site-branding-text">
			<?php if ( is_front_page() ) : ?>
				 <h2>Decrease pain, restore motion,<br/> and enhance performance.</h2>
				 <a href=""><button class="header-button" style="margin-right: 10px">Contact</button></a>
			     <a href="https://leedpt.setmore.com/" target="_blank"><button class="header-button" style="background-color:rgba(230, 74, 51, .9)">Book Now</button></a>
			<?php else : ?>
				<!-- <div style="height: 200px"></div> -->
			<?php endif; ?>
		</div><!-- .site-branding-text -->

		<?php if ( ( twentyseventeen_is_frontpage() || ( is_home() && is_front_page() ) ) && ! has_nav_menu( 'top' ) ) : ?>
		<a href="#content" class="menu-scroll-down"><?php echo twentyseventeen_get_svg( array( 'icon' => 'arrow-right' ) ); ?><span class="screen-reader-text"><?php _e( 'Scroll down to content', 'twentyseventeen' ); ?></span></a>
	<?php endif; ?>

	</div><!-- .wrap -->
</div><!-- .site-branding -->
