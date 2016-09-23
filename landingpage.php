<?php /* Template Name: LandingPage */get_header();?>

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
            Phone: (847) 957-3137
          </div>
          <div class="fax-number">
            Fax: (866) 722-3137
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
  </div><!-- /.about-container -->

  <?php /* Template Name: landingpage */ get_footer();?>
