<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package Twenty Minutes
 */
?>
<div id="footer-wrapper">
    	<div class="container">
    	  <form class="footer-form" action="https://formspree.io/your@email.com"
    	  method="POST">
    		<h3 class="footer-form-title">Contact</h3>
    	  <span class="input input--madoka input-field">
    	    <input type="text" class="input-field input__field input__field--madoka" name="name" id="name">
    	    <label class="input__label input__label--madoka" for="name"><svg class="graphic graphic--madoka" width="100%" height="100%" viewBox="0 0 404 77" preserveAspectRatio="none">    	  			<path d="m0,0l404,0l0,77l-404,0l0,-77z"/></svg>
				<span class="input__label-content input__label-content--madoka">Name</span></label>
    	  </span>
    	  <span class="input input--madoka input-field">
    	    <input type="text" name="email" class="input-field input__field input__field--madoka" id="email">
    	    <label class="input__label input__label--madoka" for="email">			<svg class="graphic graphic--madoka" width="100%" height="100%" viewBox="0 0 404 77" preserveAspectRatio="none"> 				<path d="m0,0l404,0l0,77l-404,0l0,-77z"/></svg><span class="input__label-content input__label-content--madoka">Email</span></label>
    	  </span>
    	  <span class="input input--madoka input-field">
    	    <textarea type="text" name="message" id="textarea1" class="textarea input__field input__field--madoka"></textarea>
    	    <label class="input__label input__label--madoka" for="textarea1">	<svg class="graphic graphic--madoka" width="100%" height="100%" viewBox="0 0 404 77" preserveAspectRatio="none"> <path d="m0,0l404,0l0,77l-404,0l0,-77z"/></svg>				<span class="input__label-content input__label-content--madoka">Message</span></label>
    	  </span>
    	  <input class="submit" type="submit" value="Send">
    	</form>
    	<?php 
    	if (   is_active_sidebar( 'footer-widget-area'  )
    	) : ?>
		    <div class="footer-widget">
		        <?php dynamic_sidebar( 'footer-widget-area' ); ?>
		    </div><!-- .first .widget-area -->
  	  <?php endif;?>
    </div><!--end .container-->
    
    <div class="copyright-section">
	    <span>Copyright 2017 LEEPT</span>
    </div>
    </div><!--end .footer-wrapper-->
<?php wp_footer(); ?>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</body>
</html>
<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/classie.js"></script>
<script>
			(function() {
				// trim polyfill : https://developer.mozilla.org/en-US/docs/Web/JavaScript/Reference/Global_Objects/String/Trim
				if (!String.prototype.trim) {
					(function() {
						// Make sure we trim BOM and NBSP
						var rtrim = /^[\s\uFEFF\xA0]+|[\s\uFEFF\xA0]+$/g;
						String.prototype.trim = function() {
							return this.replace(rtrim, '');
						};
					})();
				}

				[].slice.call( document.querySelectorAll( 'input.input__field' ) ).forEach( function( inputEl ) {
					// in case the input is already filled..
					if( inputEl.value.trim() !== '' ) {
						classie.add( inputEl.parentNode, 'input--filled' );
					}

					// events:
					inputEl.addEventListener( 'focus', onInputFocus );
					inputEl.addEventListener( 'blur', onInputBlur );
				} );

				function onInputFocus( ev ) {
					classie.add( ev.target.parentNode, 'input--filled' );
				}

				function onInputBlur( ev ) {
					if( ev.target.value.trim() === '' ) {
						classie.remove( ev.target.parentNode, 'input--filled' );
					}
				}
			})();
		</script>