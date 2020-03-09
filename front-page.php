<?php get_header();?>




<section class="hero hero--full-screen video-bg" style="background-image: url('<?php echo get_stylesheet_directory_uri(); ?>/assets/hero.jpg')" >
  <div class="video-bg__media" aria-hidden="true" id='hero_main'>
    <img src="?php echo get_stylesheet_directory_uri(); ?>/assets/hero.jpg">
    <video autoplay loop muted playsInline src="<?php echo get_stylesheet_directory_uri(); ?>/assets/video.mp4"></video>
  </div>
  <div class="color-overlay"></div>
  <div class="border_frame"></div>
  <div class="video-bg__content container max-width-adaptive-sm">
    <div class="hero__content text-center">
      <div class="hero__label margin-bottom-xxs">
        <object type="image/svg+xml"  class="svg_logo" data="<?php echo get_stylesheet_directory_uri(); ?>/assets/svg/Logo.svg" alt="logo" style="width:600px" ></object>
      </div>
    </div>
  </div>


</section>
<!-- Image Gallery -->

<section class="products-gallery padding-y-xxl" >
  <div class="container max-width-adaptive-lg">


    <div class="grid" data-aos="photo-animation">
      <div class="prod-card col-3@md  col-6@xs ">


        <a href="#0" class="prod-card__img-link photo1" aria-label="Description of the link">
          <figure class="prod-card__img photoframe" >
          <?php $Image1 = get_field('Image1');?>
          <?php if ($Image1) {?>
            <img src="<?php echo $Image1['url']; ?>" alt="<?php echo $Image1['alt']; ?>" />
          <?php }?>


          </figure>
        </a>


      </div>

      <div class="prod-card col-3@md  col-6@xs">


        <a href="#0" class="prod-card__img-link photo2" aria-label="Description of the link">
          <figure class="prod-card__img photoframe ">
          <?php $Image2 = get_field('Image2');?>
          <?php if ($Image2) {?>
            <img src="<?php echo $Image2['url']; ?>" alt="<?php echo $Image2['alt']; ?>" />
          <?php }?>
          </figure>
        </a>


      </div>


      <div class="prod-card col-3@md  col-6@xs">
        <a href="#0" class="prod-card__img-link photo3" aria-label="Description of the link">
          <figure class="prod-card__img photoframe" >
          <?php $Image3 = get_field('Image3');?>
          <?php if ($Image3) {?>
            <img src="<?php echo $Image3['url']; ?>" alt="<?php echo $Image3['alt']; ?>" />
          <?php }?>
          </figure>
        </a>


      </div>

      <div class="prod-card col-3@md  col-6@xs">
        <a href="#0" class="prod-card__img-link photo4" aria-label="Description of the link">
          <figure class="prod-card__img photoframe" >
          <?php $Image4 = get_field('Image4');?>
          <?php if ($Image4) {?>
            <img src="<?php echo $Image4['url']; ?>" alt="<?php echo $Image4['alt']; ?>" />
          <?php }?>
          </figure>
        </a>


      </div>
    </div>


  </div>
</section>

<!-- Article  -->
<div class="container">


          <article class="article text-component">
               <h1>THE STRAIT AND NARROW BRAND AMBASSADOR</h1>
               <h2>#VAN LIFE DREAM JOB</h2>

               <p class="text-md ">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec dictum orci elit, in
                    accumsan justo convallis ut. Donec consectetur ultricies lectus id aliquet. Etiam dictum rhoncus
                    libero, non vestibulum neque mattis sollicitudin. Nam pulvinar, diam vel pretium ornare, mauris
                    tortor tristique neque, id bibendum augue ex a lorem. Donec ornare pulvinar lectus. Praesent a est
                    molestie, pellentesque neque non, ullamcorper orci. Duis egestas ipsum eget lorem fringilla, quis
                    ornare nunc laoreet. Suspendisse auctor mi non tempor pellentesque. Donec condimentum lorem
                    dignissim odio lobortis hendrerit non id lorem. Mauris et mauris diam. Vivamus quam enim, faucibus
                    non imperdiet sit amet, scelerisque id dolor. Suspendisse pellentesque rutrum dui, sit amet
                    malesuada arcu egestas in. Aliquam et ligula erat.
                    <a href="#">
                         <h2>Job Details <i class="material-icons" style='text-decoration: none;'>file_download</i></h1>
                    </a>

               </p>


          </article>
     </div>


<!-- FORM  -->

<div class="container">
          <form class="padding-y-xxl" data-aos="fade-up">
            <div class="margin-bottom-sm">
              <div class="grid gap-xs">
                <div class="col-6@md">
                  <label class="form-label margin-bottom-xxxs" for="inputFirstName">Name</label>
                  <input class="form-control width-100%" type="text" name="inputFirstName" id="inputFirstName">
                </div>

                <div class="col-6@md">
                  <label class="form-label margin-bottom-xxxs" for="inputLastName">Email</label>
                  <input class="form-control width-100%" type="text" name="inputLastName" id="inputLastName">
                </div>
              </div>
            </div>
            <div class="margin-bottom-sm">
              <div class="grid gap-xs">
                <div class="col-6@md">
                  <label class="form-label margin-bottom-xxxs" for="inputService">Service</label>
                  <input class="form-control width-100%" type="text" name="inputService" id="inputService">
                </div>

                <div class="col-6@md">
                  <label class="form-label margin-bottom-xxxs" for="inputPhone">Phone Number</label>
                  <input class="form-control width-100%" type="text" name="inputPhone" id="inputPhone">
                </div>
              </div>
            </div>
            <div class="margin-bottom-sm">
              <div class="grid gap-xs">
                <div class="col-12@md">
                  <label class="form-label margin-bottom-xxxs" for="inputMessage">Message</label>
                  <textarea class="form-control width-100%" type="text" name="inputMessage" id="inputMessage">

                  </textarea>
                </div>


              </div>
            </div>
            <div class="margin-bottom-sm">
              <button class="btn btn--primary btn--slide-fx js-btn--slide-fx">
                <span class="btn__label">Submit</span>
                <!-- <svg class="icon icon--xs margin-left-xxs" aria-hidden="true" viewBox="0 0 12 12"><path d="M6,0a6,6,0,1,0,6,6A6,6,0,0,0,6,0ZM5,9V3L9,6Z"></path></svg> -->
              </button>
            </div>
          </form>
     </div>

<?php get_footer();?>