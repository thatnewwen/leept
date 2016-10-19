<?php
/**
* The template for displaying the footer.
*
* Contains the closing of the #content div and all content after.
*
* @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
*
* @package leept
*/

?>

</div><!-- #content -->
<footer class="page-footer">
	<div class="container center">
		<div class="row footer-social">
			<a class="social-icon" target="_blank" href="https://www.facebook.com/LEEDPT/"><img src="<?php bloginfo('template_url'); ?>/img/icon/facebook.svg"/></a>
			<a class="social-icon" target="_blank"  href="https://www.instagram.com/jamesleedpt/"><img src="<?php bloginfo('template_url'); ?>/img/icon/instagram.svg"/></a>
			<a class="social-icon" target="_blank" href="https://goo.gl/maps/JWcFRjE1vBC2"><img src="<?php bloginfo('template_url'); ?>/img/icon/google-plus.svg"/></a>
			<a class="social-icon" href="blog"><img src="<?php bloginfo('template_url'); ?>/img/icon/wordpress.svg"/></a>
		</div>

		<div class="row footer-nav">
			<a href="<?php echo esc_url( home_url( '/' ) ); ?>">Home</a>
			<a href="about">About</a>
			<a href="faq">FAQ</a>
			<a href="#">Blog</a>
			<a href="<?php echo esc_url( home_url( '/' ) ); ?>#contact">Contact</a>
		</div>
	</div>
	<!-- <div class="footer-copyright">
	<div class="container">
	Copyright © 2016 LEEPT
</div>
</div> -->
</footer>
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
