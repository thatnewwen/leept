<?php /* Template Name: Landing */
get_header();
?>

<!DOCTYPE html>
<body>
  <div class="header">
    <div class="overlay"></div>
    <div class="header-info">
      <img class="header-logo" src="<?php bloginfo('template_directory'); ?>/images/header-logo.png" alt="header-logo" />
      <div class="header-text">
        <h1 class="header-title"><?php esc_attr(bloginfo( 'name' )); ?></h1>
        <?php $description = get_bloginfo( 'description', 'display' );
        if ( $description || is_customize_preview() ) : ?>
          <span class="header-sentence"><?php echo $description; ?></span>
        <?php endif; ?>
      </div>
    </div>
  </div>

  <div class="container intro">
    <!-- Example row of columns -->
    <div class="row">
      <div class="col-md-4 col-md-push-7" style="padding: 0 30px;">
        <div class="row" style="margin-bottom: 20px">
        <img class="col-xs-5 col-md-5 bio-image" src="http://leedpt.com/wp-content/themes/leept/img/profile-picture.jpg" />
        <div class="col-xs-7 col-md-7 contact">
          <p><b>p:</b> <a href="tel: 1-847-957-3137">(847) 957-3137</a></p>
          <p><b>f:</b> <a href="tel: 1-866-722-3137">(866) 722-3137</a></p>
          <p><b>e:</b> <a href="mailto:jamesleedpt@gmail.com">&#106;&#97;&#109;&#101;&#115;&#108;&#101;&#101;&#100;&#112;&#116;&#64;&#103;&#109;&#97;&#105;&#108;&#46;&#99;&#111;&#109;</a></p>
          <ul class="social">
            <li>
              <a href="https://www.facebook.com/LEEDPT/" target="_blank"><img class="social-icon" src="<?php bloginfo('template_directory'); ?>/images/facebook.svg" /></a>
            </li>
            <li>
              <a href="https://www.instagram.com/jamesleedpt/" target="_blank"><img class="social-icon" src="<?php bloginfo('template_directory'); ?>/images/instagram.svg" /></a>
            </li>
            <li>
              <a href="https://www.linkedin.com/in/james-lee-pt-dpt-2602a213/" target="_blank"><img class="social-icon" src="<?php bloginfo('template_directory'); ?>/images/linkedin.svg" /></a>
            </li>
          </ul>
        </div>
        </div>
          <div class="text-center" style="font-size: 16px; margin-bottom: 15px;">
          <a style="color:#E74A33" href="https://leedpt.setmore.com/">Inquire</a> <span style="padding: 0 15px;">|</span> <a style="color:#E74A33" href="https://leedpt.setmore.com/">Schedule an Appointment</a>
          </div>
        <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d11849.939413321361!2d-87.7501261!3d42.0542257!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x62bf3b2a7a1887c8!2sLee+Physical+Therapy!5e0!3m2!1sen!2sus!4v1489361069410" width="100%" height="200" frameborder="0" style="border:0" allowfullscreen></iframe>
        <p class="text-center" style="margin: 0 10px;">Home service in the <b>Greater Chicago Area</b></p>
      </div>
      <div class="col-md-6 col-md-offset-1 col-md-pull-4 about">
        <div class="borde-top"></div>
        <h3>Mission</h3>
        <p>Lee Physical Therapy serves the Chicago community and is dedicated to quick recovery in order to safely return to activities you enjoy the most. We stay up to date with current sport specific movements and help you with hands-on manual therapy and guided exercises to facilitate movement, accelerate healing, minimize pain, and improve strength.</p>

        <h3>Dr. James Lee PT, DPT, FAAOMPT</h3>
        <p>As a native of Chicago, James has been a Doctor of Physical Therapy since 2010 and he has a strong background in treating all orthopedic conditions. In 2016 James was recognized by  Fellow of the America Association of Manual Physical Therapists for his competence and expertise in advanced clinical, analytical, and hands-on skills in the treatment of musculoskeletal orthopedic movement disorders.</p>

        <p>He has been rock climbing for 11 years and accented routes in different corners of the world. Due to his enjoyment for climbing, has come to specialize in treating many climbing injuries from tendon strains, pulley injuries, shoulder pain, cervical nerve impingement, medial epicondylitis, etc.</p>

      </div>
    </div>


  </div>

  <div class="container bio" >
    <div class="row">
      <div class="col-md-6">
      </div>
      <div class="col-md-6">
        <div class="bio-text">
        <h3>Manual Therapy</h3>
        <p>Avoid the endless, repetitive exercises that are commonly attributed to physical therapy. Get direct hands on treatment to mobilize your joints, release nerve tension and work to target muscles that improve motor control. Each session is 1 hour. With manual therapy plus guided exercises to retrain your muscles, you will feel and move better in a shorter period of time.</p>

        <h3>Home Sessions</h3>
        <p>Physical therapy is provided in the comfort and convenience of your own home or work space. A portable treatment table is brought in and set up for complete care.</p>

        <h3>Education</h3>
        <p>Physical therapists are the movement experts in medicine. Movement in dysfunction over time may cause certain parts of your body to break down and lead to pain. Learn how to safely manage your condition, modify activities, reduce fear avoidance, take control and be confident with your movement. Our ultimate goal is to train you out of therapy into full independence.</p>
        </div>
      </div>
    </div>
  </div>
    <div class="container review">
      <div class="row text-center">
        <h2 class="">Testimonials</h2>
        <div class="col-md-4">
          <div class="review-section">
            <div>
              5 stars
            </div>
            <p>
              "... I would highly recommend James if you want a one-on-one, hands on, individual who wants to help you get better and help you better understand where your body vulnerabilities are."
            </p>
            <p>
              - David C.
            </p>
          </div>
        </div>
        <div class="col-md-4">
          <div class="review-section">
            <div>
              5 stars
            </div>
            <p>
              "... Without James' knowledge and expertise as a therapist and climber, this issue would not have been handled so comprehensively.  I strongly recommend his services to anyone with an injury or looking for injury prevention."
            </p>
            <p>
              - Patrick H.
            </p>
          </div>
        </div>
        <div class="col-md-4">
          <div class="review-section">
            <div>
              5 stars
            </div>
            <p>
              "...James offered support and reassurance that kept me motivated and helped me get through the healing process. I'd recommend him to anyone who needs physical therapy."
            </p>
            <p>
              - Holly P.
            </p>
          </div>
        </div>
        <div class="text-center">
          <a class="btn btn-default" href="https://goo.gl/maps/JWcFRjE1vBC2" target="_blank">Leave a review</a>
        </div>
      </div>
    </div>

    <div class="container faq">
      <div class="row text-center">
        <h2>FAQ</h2>
      </div>
      <div class="row">
        <div class="home-faq col-md-4 col-md-offset-2">
          <h4>Q. How many eggs can you eat in one day?</h4>
          <p>That is a good question. I think if you are older, the number is two. Otherwise, you can eat up to 400 eggs a day and still be healthy!</p>
        </div>
        <div class="home-faq col-md-4" style="margin-bottom: 0px">
          <h4>Q. How many eggs can you eat in one day?</h4>
          <p>That is a good question. I think if you are older, the number is two. Otherwise, you can eat up to 400 eggs a day and still be healthy!</p>
        </div>
      </div>
      <div class="row">
        <div class="home-faq col-md-4 col-md-offset-2">
          <h4>Q. How many eggs can you eat in one day?</h4>
          <p>That is a good question. I think if you are older, the number is two. Otherwise, you can eat up to 400 eggs a day and still be healthy!</p>
        </div>
        <div class="home-faq col-md-4">
          <h4>Q. How many eggs can you eat in one day?</h4>
          <p>That is a good question. I think if you are older, the number is two. Otherwise, you can eat up to 400 eggs a day and still be healthy!</p>
        </div>
      </div>
      <div class="row text-center">
        <a class="btn btn-alt" href="">More FAQ</a>
      </div>
    </div>

    <div class="container blog">
      <div class="row text-center">
        <h2>Blog</h2>
      </div>
      <div class="row">
      <?php $the_query = new WP_Query( 'posts_per_page=3' ); ?>

      <?php while ($the_query -> have_posts()) : $the_query -> the_post(); ?>

      <div class="col-md-4 home-blog-post">
      <a href="<?php the_permalink() ?>">
        <?php
              if (has_post_thumbnail() ){
            echo '<div class="home-blog-thumb">';
                  the_post_thumbnail();
            echo '</div>';
          }
              ?>
          <div class="home-blog-info">
            <!-- <p><?php the_category();?></p> -->
            <h4 class="home-blog-title"><?php the_title(); ?></h4>
          </div>
        </a>
      </div>
      <?php
      endwhile;
      wp_reset_postdata();
      ?>
      </div>
    </div>
<?php get_footer(); ?>
</div> <!-- /container -->


<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')</script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
<!-- <script src="../../assets/js/ie10-viewport-bug-workaround.js"></script> -->
</body>
</html>
