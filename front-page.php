<?php get_header();?>




<section class="hero hero--full-screen video-bg" style="background-image: url('<?php echo get_stylesheet_directory_uri(); ?>/assets/hero.jpg')">
<div class="video-bg__media" aria-hidden="true">
          <img src="?php echo get_stylesheet_directory_uri(); ?>/assets/hero.jpg">

          <video autoplay loop muted playsInline src="<?php echo get_stylesheet_directory_uri(); ?>/assets/video.mp4"></video>

        </div>

<div class="video-bg__content container max-width-adaptive-sm">
    <div class="hero__content text-center">
      <div class="hero__label margin-bottom-xxs">
      <img class="svg_logo" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/svg/Logo.svg" alt="Kiwi standing on oval" style="width:600px">
      </div>


    </div>
  </div>
</section>
<div class="color-overlay"></div>

<div class="container">
  <form id="contact" action="" method="post">
    <h3>Quick Contact</h3>
    <h4>Contact us today, and get reply with in 24 hours!</h4>
    <fieldset>
      <input placeholder="Your name" type="text" tabindex="1" required autofocus>
    </fieldset>
    <fieldset>
      <input placeholder="Your Email Address" type="email" tabindex="2" required>
    </fieldset>
    <fieldset>
      <input placeholder="Your Phone Number" type="tel" tabindex="3" required>
    </fieldset>
    <fieldset>
      <input placeholder="Your Web Site starts with http://" type="url" tabindex="4" required>
    </fieldset>
    <fieldset>
      <textarea placeholder="Type your Message Here...." tabindex="5" required></textarea>
    </fieldset>
    <fieldset>
      <button name="submit" type="submit" id="contact-submit" data-submit="...Sending">Submit</button>
    </fieldset>
  </form>


</div>



<?php get_footer();?>