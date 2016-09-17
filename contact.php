<?php /* Template Name: Contact */ get_header();?>


<div class="about-header">
	<span class="header-intro">CONTACT</span><br>
</div>

<div class="contact">
  <form action="https://formspree.io/your@email.com"
        method="POST">
    <div class="input-field">
      <input type="text" class="input-field" name="name">
      <label for="name">Name</label>
    </div>            
    <div class="input-field">
      <input type="text" name="email" class="input-field">
      <label for="email">Email</label>
    </div>
    <div class="input-field">
      <textarea type="text" name="message" id="textarea1" class="materialize-textarea"></textarea>
      <label for="textarea1">Message</label>
    </div>
      <input class="submit" type="submit" value="Send">
  </form>
</div>