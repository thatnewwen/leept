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
        <button id="call-modal" type="button" class="btn btn-alt" data-toggle="modal" data-target="#myModal">Contact Now</button>
      <?php endif; ?>
    </div>
  </div>
</div>

<div id="about" class="container intro">
  <!-- Example row of columns -->
  <div class="row">
    <div class="col-md-4 col-md-push-7" style="padding: 0 30px;">
      <div class="row" style="margin: 0 -20px 20px -20px">
        <img class="col-xs-5 col-md-5 bio-image" src="http://leedpt.com/wp-content/uploads/2017/04/profile2017.jpg" />
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
        <a style="color:#E74A33" href="<?php echo home_url( '/#contact' );?>">Inquire</a>
        <span style="padding: 0 15px;">|</span>
        <a style="color:#E74A33" target="_blank" href="https://leedpt.setmore.com/">Schedule an Appointment</a>
      </div>
      <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d11849.939413321361!2d-87.7501261!3d42.0542257!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x62bf3b2a7a1887c8!2sLee+Physical+Therapy!5e0!3m2!1sen!2sus!4v1489361069410&z=10" width="100%" height="200" frameborder="0" style="border:0" allowfullscreen></iframe>
      <p class="text-center" style="margin: 5px 10px;font-size: 16px;">Home service in the <b>Greater Chicago Area</b></p>
    </div>
    <div class="col-md-6 col-md-offset-1 col-md-pull-4 about">
      <div class="borde-top"></div>
      <h3>Mission</h3>
      <p>Lee Physical Therapy serves the Chicago community and is dedicated to quick recovery in order to safely return to activities you enjoy the most. Direct hands-on manual therapy and guided exercises will facilitate movement, accelerate healing, minimize pain, and improve strength.</p>

      <h3>Dr. James Lee PT, DPT, FAAOMPT</h3>
      <p>As a native of Chicago, James has been a doctor of physical therapy since 2010 and he has a strong background in treating orthopedic conditions. In 2017 James completed his training and received his Fellowship title by the American Academy of Orthopeadic Manual Physical Therapists.
        This title serves to recognize his competence and expertise in advanced clinical, analytical, and hands-on training in the treatment of musculoskeletal orthopedic movement disorders.</p>
      <p>He has been rock climbing since 2009 and has been to various parts of the world to climb. Due to his passion for climbing,
        James has come to specialize in treating many climbing injuries from tendon strains, pulley injuries, shoulder pain, cervical nerve impingement, medial epicondylopathy, etc.
      </p>
    </div>
  </div>


</div>
<div id="testimonals" class="container review">
  <div class="row text-center">
    <h2 class="section-title">Testimonials</h2>
    <div class="col-md-4">
      <div class="review-section">
        <div class="review-star">
          &#9733  &#9733  &#9733 &#9733  &#9733
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
        <div class="review-star">
          &#9733  &#9733  &#9733 &#9733  &#9733
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
        <div class="review-star">
          &#9733  &#9733  &#9733 &#9733  &#9733
        </div>
        <p>
          "... I am climbing well again and I am trusting my finger more and more...
          As a fellow climber, he could understand my frustration and this was very reassuring."
        </p>
        <p>
          - Dhruv M.
        </p>
      </div>
    </div>
  </div>
  <div class="row text-center">
    <a class="btn btn-alt" href="https://goo.gl/maps/JWcFRjE1vBC2" target="_blank">Leave a review</a>
  </div>
</div>
<div class="container bio" >
  <div class="row" style="margin: 0px">
    <h2 class="text-center section-title">About</h2>
      <div class="bio-section">
        <h3>Manual Therapy</h3>
        <p>Avoid the endless, repetitive exercises that are commonly attributed to physical therapy. Get direct hands on treatment to mobilize your joints, release nerve tension and work to target muscles that improve motor control. Each session is 1 hour. With manual therapy plus guided exercises to retrain your muscles, you will feel and move better in a shorter period of time.</p>
      </div>
      <div class="bio-wide-img" id="bio-wide-bottom" style="background-image:url(http://leedpt.com/wp-content/uploads/2017/04/landing_homeSession.jpg)"></div>
      <div class="bio-section">
        <h3>Home Sessions</h3>
        <p>Physical therapy is provided in the comfort and convenience of your own home or work space. A portable treatment table is brought in and set up for complete care.</p>
      </div>
      <div class="bio-wide-img" id="bio-wide-top" style="background-image:url(http://leedpt.com/wp-content/uploads/2017/04/landing_bouldering.jpg)"></div>
      <div class="bio-section">
        <h3>Education</h3>
        <p>Physical therapists are the movement experts in medicine. Movement in dysfunction over time may cause certain parts of your body to break down and lead to pain. Learn how to safely manage your condition, modify activities, reduce fear avoidance, take control and be confident with your movement. Our ultimate goal is to train you out of therapy into full independence.</p>
      </div>
  </div>
</div>

<div id="faq" class="container faq">
  <div class="row text-center">
    <h2 class="section-title">FAQ</h2>
  </div>
  <div class="row">
    <div class="home-faq col-md-8 col-md-offset-2">
      <h4>Q. What is manual therapy? What differentiates you from other clinics on the market?</h4>
      <p>Manual therapy is a specialized area of physical therapy. It uses highly specific treatment approaches including manual techniques and therapeutic exercises.
        Many of the methods may be perceived as chiropractic. Our goal is to get you moving better and feeling confident that your body can handle the activities you love doing. </p>
      <p>Unlike the vast majority of physical therapy clinics where you see the therapist for 15 mins and then spend the rest of the session doing exercises, you will be treated by our skilled therapist for a FULL hour.
        Because of the high intensity of treatment, you will get back to do what you love the most in fewer visits.</p>
    </div>
    <div class="home-faq col-md-8 col-md-offset-2">
      <h4>Q. Where are you located?</h4>
      <p>We bring our mobile clinic to you.  A treatment table is set up and therapy is provided in your own home or office at your comfort.
        Your home exercise program will be tailored to your personal environment.</p>
    </div>
  </div>
  <div class="row">
    <div class="home-faq col-md-8 col-md-offset-2">
      <h4>Q. Do you accept insurance?</h4>
      <p>Lee Physical Therapy is considered to be an “out-of-network” provider to your insurance company.</p>
      <p>We are a cash based practice, which means that we do not work directly with insurance companies.
         However we provide the proper documents for you to submit claims to your insurance company to possibly receive reimbursements.
         Without having to meet the demands of insurance companies, our therapists focus on addressing your individual needs 100%.</p>
      <p>The  importance of this investment you make to your body is our primary focus.</p>
    </div>
    <div class="home-faq col-md-8 col-md-offset-2">
      <h4>Q. Do I need a physician’s prescription to see you?</h4>
      <p>Yes, Illinois law requires you to have a prescription for physical therapy.</p>
      <p>If you do not have a prescription however, on your first visit we perform a full 1 hour detailed evaluation to see exactly where the problem is.
        This eval is then faxed and signed for approval from your physician and you are good to go. </p>
    </div>
  </div>
  <div class="row text-center">
    <a class="btn btn-alt" href="https://m.me/LEEDPT" target="_blank">Ask a question</a>
  </div>
</div>

<div class="container blog">
  <div class="row text-center">
    <h2 class="section-title">Blog</h2>
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
        </a>
        <div class="home-blog-info">
          <p class="home-blog-category">&gt; <?php the_category(', ','');?></p>
          <a href="<?php the_permalink() ?>"><h4 class="home-blog-title"><?php the_title(); ?></h4></a>
        </div>
      </div>
      <?php
    endwhile;
    wp_reset_postdata();
    ?>
  </div>
</div>
<?php get_footer(); ?>
</div> <!-- /container -->

</body>
</html>

<!-- Modal -->
<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Contact Now</h4>
      </div>
      <div class="modal-body">
        Phone: <a href="tel:8479573137">(847) 957-3137</a>
      </div>
      <div class="modal-body">
        Email: <a href="mailto:jamesleedpt@gmail.com">&#106;&#97;&#109;&#101;&#115;&#108;&#101;&#101;&#100;&#112;&#116;&#64;&#103;&#109;&#97;&#105;&#108;&#46;&#99;&#111;&#109;</a>
      </div>
      <div class="modal-body">
        Chat: <a href="https://m.me/LEEDPT">@LEEDPT</a>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>
