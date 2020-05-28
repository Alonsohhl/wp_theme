<div>
    <section class="adv-gallery">
    <div class="adv-gallery__grid container max-width-adaptive-xl">
        <div class="img_container">
        <?php $photo1 = get_field( 'photo1' ); ?>
        <?php if ( $photo1 ) : ?>
            <img class="adv-gallery__img" src="<?php echo esc_url( $photo1['url'] ); ?>" alt="<?php echo esc_attr( $photo1['alt'] ); ?>" />
        <?php endif; ?>

        </div>

        <div class="img_container">
        <img class="adv-gallery__img" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/gallery/g5_4.jpg" alt="Image description">
        </div>

        <div class="img_container">
        <img class="adv-gallery__img" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/gallery/g5_4.jpg" alt="Image description">
        </div>

        <div class="bg-contrast-lower padding-md flex@lg">
        <div class="margin-top-auto@lg">
            <div class="border-left border-contrast-high height-xxl margin-bottom-sm display@lg" aria-hidden="true"></div>
            <p class="text-md">Loremxx ipsum dolor sit amet consectetur adipisicing elit.</p>
        </div>
        </div>
    </div>
    </section>
    <section class="adv-gallery">
    <div class="adv-gallery__grid container max-width-adaptive-xl">
        <div class="img_container">
        <img class="adv-gallery__img" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/gallery/g5_4.jpg" alt="Image description">
        </div>

        <div>
        <img class="adv-gallery__img" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/gallery/g5_4.jpg" alt="Image description">
        </div>

        <div>
        <img class="adv-gallery__img" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/gallery/g5_4.jpg" alt="Image description">
        </div>

        <div class="bg-contrast-lower padding-md flex@lg">
        <div class="margin-top-auto@lg">
            <div class="border-left border-contrast-high height-xxl margin-bottom-sm display@lg" aria-hidden="true"></div>
            <p class="text-md">Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
        </div>
        </div>
    </div>
    </section>

</div>