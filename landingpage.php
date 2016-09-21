<?php /* Template Name: LandingPage */ 

get_header();?>
<header id="masthead" class="site-header" role="banner">
    <nav>
      <div class="nav-wrapper">
        <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="brand-logo">LEEPT</a>
        <a href="#" data-activates="mobile-demo" class="button-collapse">=</a>
        <ul class="right hide-on-med-and-down">
          <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>">Home</a></li>
          <li><a href="about">About</a></li>
          <li><a href="faq">FAQs</a></li>
          <li><a href="#contact">Contact</a></li>
          <li><a href="#">Blog</a></li>          
          <li><span>(123) 456 - 7890</span></li>
        </ul>
        <ul class="side-nav" id="mobile-demo">
          <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>">Home</a></li>
          <li><a href="about">About</a></li>
          <li><a href="faq">FAQs</a></li>
          <li><a href="#contact">Contact</a></li>
          <li><a href="#">Blog</a></li>          
          <li><span>(123) 456 - 7890</span></li>
        </ul>
      </div>
    </nav>
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
        <span class="header-intro">James Lee, PT, DPT</span><br>
      </div>
        <div class="about">
          <div class="picture-container">
            <div class="profile-picture">
            </div>
          </div>
          <div class="about-paragraphs">
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
        <div class="contact-info">
          <div class="phone-number">
            Phone: (123) 456 - 789
          </div>
          <div class="email">
            Email: email@email.com
          </div>
        </div>
        <div class="contact row">
          <form action="https://formspree.io/your@email.com"
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
                <label for="textarea1">Message</label>
              </div>
            </div>
              <input class="submit" type="submit" value="Send">
          </form>
        </div>
      </div>
    </div><!-- /.container -->


  </body>
</html>
