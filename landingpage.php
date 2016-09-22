<?php /* Template Name: LandingPage */

get_header();?>
<header id="masthead" class="site-header" role="banner">
  <div class="navbar-fixed">
    <nav>
      <div class="nav-wrapper">
        <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="brand-logo center">LEEPT</a>
        <a href="#" data-activates="mobile-demo" class="button-collapse">=</a>
        <ul class="left hide-on-med-and-down">
          <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>">Home</a></li>
          <li><a href="about">About</a></li>
          <li><a href="faq">FAQ</a></li>
          <li><a href="#">Blog</a></li>
        </ul>
        <ul class="right hide-on-med-and-down">
          <li><a href="#contact">Contact</a></li>
          <li><span>(123) 456 - 7890</span></li>
        </ul>
        <ul class="side-nav" id="mobile-demo">
          <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>">Home</a></li>
          <li><a href="about">About</a></li>
          <li><a href="faq">FAQ</a></li>
          <li><a href="#">Blog</a></li>
          <hr />
          <li><a href="#contact">Contact</a></li>
          <li><span>(123) 456 - 7890</span></li>
        </ul>
      </div>
    </nav>
  </div>
</header><!-- #masthead -->

<body>
  <div class="">
    <div class="header">

      <div class="header-desc">
        <span class="header-intro">LEE PHYSICAL THERAPY</span><br>
        <span class="header-sentence">Decrease pain, restore motion, and enhance performance.</span>
      </div>
    </div>

    <div class="landing-picture">
    </div>
    <div class="about-container">
      <div class="contact-header">
        <span class="header-intro">Bio</span><br>
      </div>
      <div class="about">
        <div class="picture-container">
          <div class="profile-picture">
          </div>
        </div>
        <div class="about-paragraphs">
          <h5>James Lee, PT, DPT</h5>
          <p>James Lee has been a Doctor of Physical Therapy since 2010 and he has a strong background in treating all orthopedic conditions including sports injuries, joint replacements, ligament sprain/reconstruction, neck/low back pain, muscle strains, fractures, etc.</p>
          <p>James received his DPT degree from Rosalind Franklin University of Medicine and Science. In 2012 he began his focus on completing a fellowship program specializing in manual therapy. He will be completing this program by the end of 2016.</p>
          <p>James helps his patients with skilled hands on manual therapy to get them moving better. He guides them through targeted exercises to facilitate movement, accelerate healing, minimize pain, and improve strength.</p><br>
          <a class="button" href="about">Learn More</a>
        </div>
      </div>

      <div class="contact-header">
        <span class="header-intro" id="contact">CONTACT</span><br>
      </div>
      <div class="contact-div">
        <div class="contact-info row">
          <div class="phone-number">
            Phone: (123) 456 - 789
          </div>
          <div class="email">
            Email:
            <a style="color:#E74A33" href="mailto:&#106;&#097;&#109;&#101;&#115;&#108;&#101;&#101;&#100;&#112;&#116;&#064;&#103;&#109;&#097;&#105;&#108;&#046;&#099;&#111;&#109;">
              &#106;&#097;&#109;&#101;&#115;&#108;&#101;&#101;&#100;&#112;&#116;&#064;&#103;&#109;&#097;&#105;&#108;&#046;&#099;&#111;&#109;
          </a>
          </div>
        </div>
        <div class="contact row">
          <form action="https://formspree.io/jamesleedpt@gmail.com"
          method="POST" class="col s12">
          <div class="row">
            <div class="input-field col s12">
              <input type="text" name="name">
              <label for="name">Name</label>
            </div>
          </div>
          <div class="row">
            <div class="input-field col s12">
              <input type="text" name="email">
              <label for="email">Email</label>
            </div>
          </div>
          <div class="row">
            <div class="input-field col s6">
              <input type="text" name="phone">
              <label for="phone">Phone (Optional)</label>
            </div>
            <div class="input-field col s6">
              <input type="text" name="age">
              <label for="age">Age (Optional)</label>
            </div>
          </div>
          <div class="row">
            <div class="input-field col s12">
              <textarea type="text" name="message" id="textarea1" class="materialize-textarea"></textarea>
              <label for="textarea1">Comments</label>
            </div>
          </div>
          <input class="submit" type="submit" value="Send">
        </form>
      </div>
    </div>
  </div><!-- /.container -->

  <footer class="page-footer">
    <div class="container center">
      <div class="row footer-social">
        <a class="social-icon" href="#"><img src="<?php bloginfo('template_url'); ?>/img/icon/facebook.png"/></a>
        <a class="social-icon" href="#"><img src="<?php bloginfo('template_url'); ?>/img/icon/instagram.png"/></a>
        <a class="social-icon" href="#"><img src="<?php bloginfo('template_url'); ?>/img/icon/google-plus.png"/></a>
        <a class="social-icon" href="#"><img src="<?php bloginfo('template_url'); ?>/img/icon/wordpress.png"/></a>
      </div>

      <div class="row footer-nav">
        <a href="<?php echo esc_url( home_url( '/' ) ); ?>">Home</a>
        <a href="about">About</a>
        <a href="faq">FAQ</a>
        <a href="#">Blog</a>
        <a href="#contact">Contact</a>
      </div>
    </div>
    <!-- <div class="footer-copyright">
      <div class="container">
        Copyright © 2016 LEEPT
      </div>
    </div> -->
  </footer>

</body>
</html>
