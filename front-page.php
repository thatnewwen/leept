<?php
/**
 * The front page template file
 *
 * If the user has selected a static page for their homepage, this is what will
 * appear.
 * Learn more: https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */

get_header(); ?>

<div id="primary" class="content-area">
	<main id="main" class="site-main" role="main">
		<div class="panel-content text-center" id="panel-why-choose-us">
			<div class="wrap">
				<header class="entry-header">
					<h2 class="entry-title">Why Choose Us?</h2>
				</header>
				<div class="entry-content">
					<div class="flex-container">
						<div><div class="icon-wrap" style="background-image: url(/wordpress/wp-content/themes/LEEPT/assets/images/why-choose-us-mission.png)"></div><div class="icon-title">Our Mission</div><div class="icon-descirption">Quick recovery and patient centered therapy to safely return to activities you enjoy the most</div></div>
						<div><div class="icon-wrap" style="background-image: url(/wordpress/wp-content/themes/LEEPT/assets/images/why-choose-us-manual.png)"></div><div class="icon-title">Hands on Manual Therapy</div><div class="icon-descirption">Move and feel better in a shorter time. Direct hands on treatment improve stiffness, release nerve tension and wake up dysfunctional muscles</div></div>
						<div><div class="icon-wrap" style="background-image: url(/wordpress/wp-content/themes/LEEPT/assets/images/why-choose-us-cash.png)"></div><div class="icon-title">Cash Pay Practice</div><div class="icon-descirption">No surprises. No demands of insurance companies. Our full attention is on you and we respect your investment in your body.</div></div>
						<div><div class="icon-wrap" style="background-image: url(/wordpress/wp-content/themes/LEEPT/assets/images/why-choose-us-education.png)"></div><div class="icon-title">Patient Education</div><div class="icon-descirption">Learn from the movement experts how to safely manage your condition, modify activities, overcome fear and take control of your life again.</div></div>
					</div>
				</div>
			</div>
		</div>

		<div class="panel-content text-center" id="panel-overview">
			<div class="background-wrap flex-container">
				<!-- <div class="backgorund-intro"style="background: url(/wordpress/wp-content/themes/LEEPT/assets/images/james.png) no-repeat 0"> -->
					<div class="backgorund-intro">
						<img src="/wordpress/wp-content/themes/LEEPT/assets/images/james.png">
					</div>
					<div class="background-review"></div>
				</div>
				<div class="wrap">
					<div class="entry-content">
						<div class="flex-container">
							<div id="bio">
								<div>
									<h3 style="margin-bottom: 0">Dr. James Lee.</h3>
									<h4 style="padding-top: 0" class="orange">PT, DPT, FAAOMPT</h4>
									<p>As a native of Chicago, James has been a Doctor of Physical Therapy since 2010 and he has a strong background in treating all orthopedic conditions. </p>
									<p>He has been rock climbing since 2009. With his passion for the sport and professional training in PT, James has come to specialize in treating many climbing injuries from tendon strains, pulley injuries, shoulder pain, etc. He is also a passionate advocate for active injury prevention.</p> 
								</div>
							</div>
							<div id="review">
								<div><p>"... I would highly recommend James if you want a one-on-one, hands on, individual who wants to help you get better and help you better understand where your body vulnerabilities are."</p></div>
								<div><p>"... Without James' knowledge and expertise as a therapist and climber, this issue would not have been handled so comprehensively. I strongly recommend his services to anyone with an injury or looking for injury prevention."</p></div>
							</div>
						</div>
					</div>
				</div>
			</div>

			<div class="panel-content text-center" id="panel-location">
				<div class="wrap">
					<header class="entry-header">
						<h2 class="entry-title">Locations</h2>
					</header>
					<div class="entry-content">
						<div class="flex-container">
							<a href="https://leedpt.setmore.com/" target="_blank"><div class="wrap-location">
								<img src="/wordpress/wp-content/themes/LEEPT/assets/images/location-home.jpg">
								<h4>Home Visit</h4>
								<div class="location-description"><p>Best service provided in the comfort and convience of your own home or work space</p>
								</div>
								<a class="button" target="_blank" href="https://leedpt.setmore.com/">Book Now</a>
							</div></a>
							<a href="https://leedpt.setmore.com/" target="_blank" style="box-shadow: none"><div class="wrap-location">
								<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2968.9162079798634!2d-87.65864468455774!3d41.91615997921916!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x880fa2cac5828aeb%3A0x62bf3b2a7a1887c8!2sLee+Physical+Therapy!5e0!3m2!1sen!2sus!4v1522269128536" frameborder="0" style="border:0; width: 100vw; height: 14vw; margin:0" allowfullscreen ></iframe>
								<h4>Lincoln Park</h4>
								<div class="location-description"><p><a target="_blank" href="https://goo.gl/maps/tGXJdBxUfM82">1925 N Clybourn Ave #302, Chicago<br/></a>In the heart of city, off Clybourn Ave and Sherffield Ave, walking distance to Red and Brown line</p>
								</div>
								<a class="button" target="_blank" href="https://leedpt.setmore.com/">Book Now</a>
							</div></a>
							<a href="" target="_blank"><div class="wrap-location">
								<img src="/wordpress/wp-content/themes/LEEPT/assets/images/location-fa.jpg"><h4>Seminars</h4>
								<div class="location-description"><p>Educational semniars on how to climb pain-free</p>
								</div>
								<a class="button" target="_blank" href="https://leedpt.setmore.com/">Class Schedule</a>
							</div></a>
						</div>
					</div>
				</div>
			</div>

			<div class="panel-content text-center" id="panel-connect">			
				<div class="wrap">
					<header class="entry-header">
						<h2 class="entry-title  text-center">Get in touch</h2>
						
					</header>
					<div class="entry-content">
						<div class="contact-info" >
							<div class="flex-container">
								<span><i class="fas fa-phone"></i><br/><b>phone</b><br/><a href="tel: 1-847-957-3137">(847) 957-3137</a></span>
								<span><i class="fas fa-fax"></i><br/><b>fax</b> <br/><a href="tel: 1-866-722-3137">(866) 722-3137</a></span>
								<span><i class="far fa-envelope"></i><br/><b>email</b> <br/><a href="mailto:james@leeptchicago.com">james@leeptchicago.com</a></span>	
								<span><i class="fab fa-facebook-messenger"></i><br/><b>Messenger</b><br/><a href="http://m.me/leedpt">m.me/leedpt</a></span>
							</div>												
						</div>
						<div class="contact-form" >
							<h3 style="margin-bottom: 0">Got questions?</h3>
							<h4 style="margin-bottom: 30px;padding-top: 0">Check out the <a href="">FAQ page</a> or send us a message.</h4>
							<form action="https://formspree.io/james@leeptchicago.com" method="POST">
								<span class="input input--minoru">
									<input class="input__field input__field--minoru" type="text" id="input-1"  name="name">
									<label class="input__label input__label--minoru" for="input-1" data-content="Name">
										<span class="input__label-content input__label-content--minoru">Name</span>
									</label>
								</span>
								<span class="input input--minoru">
									<input class="input__field input__field--minoru" type="email" id="input-2"  name="email">
									<label class="input__label input__label--minoru" for="input-2" data-content="Email">
										<span class="input__label-content input__label-content--minoru">Email</span>
									</label>
								</span>
								<span class="input input--minoru">
									<textarea class="input__field input__field--minoru" type="text" id="input-3"  name="message" rows="2" ></textarea>
									<label class="input__label input__label--minoru" for="input-3" data-content="Message">
										<span class="input__label-content input__label-content--minoru">Message</span>
									</label>
								</span>
								<input class="btn btn-alt" type="submit" value="Send" style="width:40%">
							</form>
						</div>
						<div>
							<h2 class="entry-title  text-center">Connect with us</h2>
							<ul class="social">
								<li>
									<a href="https://www.facebook.com/LEEDPT/" target="_blank"><img class="social-icon" src="http://leedpt.com/wp-content/themes/leept/images/facebook.svg"></a>
								</li>
								<li>
									<a href="https://www.instagram.com/jamesleedpt/" target="_blank"><img class="social-icon" src="http://leedpt.com/wp-content/themes/leept/images/instagram.svg"></a>
								</li>
								<li>
									<a href="https://www.linkedin.com/in/james-lee-pt-dpt-2602a213/" target="_blank"><img class="social-icon" src="http://leedpt.com/wp-content/themes/leept/images/linkedin.svg"></a>
								</li>
							</ul>
						</div>
					</div>
				</div>
			</div>

			<div class="panel-content text-center" id="panel-blog">			
				<div class="wrap">
					<header class="entry-header">
						<h2 class="entry-title  text-center">Blog</h2>
					</header>
					<div class="entry-content">
						<div class="contact-info" >
							<div class="flex-container">
								<?php $the_query = new WP_Query( 'posts_per_page=3' ); ?>

								<?php while ($the_query -> have_posts()) : $the_query -> the_post(); ?>

									<div class="blog-post">
										<a href="<?php the_permalink() ?>">
											<?php
											if (has_post_thumbnail() ){
												echo '<div class="home-blog-thumb">';
												the_post_thumbnail();
												echo '</div>';
											}
											?>
										</a>
										<div class="blog-info">
											<p class="home-blog-category">&gt; <?php the_category(', ','');?></p>
											<a href="<?php the_permalink() ?>"><h4 class="blog-title"><?php the_title(); ?></h4></a>
										</div>
									</div>
									<?php
								endwhile;
								wp_reset_postdata();
								?>
							</div>
						</div>
					</div>
				</div>
			</div>

			<?php
		// Get each of our panels and show the post data.
		if ( 0 !== twentyseventeen_panel_count() || is_customize_preview() ) : // If we have pages to show.

			/**
			 * Filter number of front page sections in Twenty Seventeen.
			 *
			 * @since Twenty Seventeen 1.0
			 *
			 * @param int $num_sections Number of front page sections.
			 */
			$num_sections = apply_filters( 'twentyseventeen_front_page_sections', 4 );
			global $twentyseventeencounter;

			// Create a setting and control for each of the sections available in the theme.
			for ( $i = 1; $i < ( 1 + $num_sections ); $i++ ) {
				$twentyseventeencounter = $i;
				twentyseventeen_front_page_section( null, $i );
			}

			endif; // The if ( 0 !== twentyseventeen_panel_count() ) ends here. ?>

		</main><!-- #main -->
	</div><!-- #primary -->

	<?php get_footer();
