<section class="adv-gallery">
    <div class="adv-gallery__grid container max-width-adaptive-xl parent-container">
        <?php $photo1 = get_field('photo1');?>
        <?php if ($photo1): ?>
        <div class="img_container popup-link" data-aos="fade-right" data-aos-offset="10" data-aos-easing="ease-in-sine"
            href="<?php echo esc_url($photo1['url']); ?>">

            <img class="adv-gallery__img" src="<?php echo esc_url($photo1['url']); ?>"
                alt="<?php echo esc_attr($photo1['alt']); ?>" />
        </div>
        <?php endif;?>

        <?php $photo2 = get_field('photo2');?>
        <?php if ($photo2): ?>
        <div class="img_container popup-link" data-aos="fade-up" data-aos-offset="10" data-aos-easing="ease-in-sine"
            href="<?php echo esc_url($photo2['url']); ?>">
            <img class="adv-gallery__img" src="<?php echo esc_url($photo2['url']); ?>"
                alt="<?php echo esc_attr($photo2['alt']); ?>" />
        </div>
        <?php endif;?>

        <?php $photo3 = get_field('photo3');?>
        <?php if ($photo3): ?>
        <div class="img_container popup-link" data-aos="fade-up" data-aos-anchor-placement="center-bottom"
            data-aos-id="super-duper" href="<?php echo esc_url($photo3['url']); ?>">
            <img class="adv-gallery__img" src="<?php echo esc_url($photo3['url']); ?>"
                alt="<?php echo esc_attr($photo3['alt']); ?>" />
        </div>
        <?php endif;?>


        <div class="bg-contrast-lower padding-md flex@lg">
            <div class="margin-top-auto@lg">
                <div class="border-left border-contrast-high height-xxl margin-bottom-sm display@lg" aria-hidden="true">
                </div>
                <p class="text-lg">Creating moments in time with Lasting Impressions...</p>
            </div>
        </div>
    </div>
</section>

<section class="adv-gallery">
    <div class="adv-gallery__grid container max-width-adaptive-xl">
        <?php $photo4 = get_field('photo4');?>
        <?php if ($photo4): ?>
        <div class="img_container popup-link" data-aos="fade-right" href="<?php echo esc_url($photo4['url']); ?>">
            <img class="adv-gallery__img" src="<?php echo esc_url($photo4['url']); ?>"
                alt="<?php echo esc_attr($photo4['alt']); ?>">
        </div>
        <?php endif;?>


        <?php $photo5 = get_field('photo5');?>
        <?php if ($photo5): ?>
        <div class="img_container popup-link" data-aos="fade-up" href="<?php echo esc_url($photo5['url']); ?>">
            <img class="adv-gallery__img" src="<?php echo esc_url($photo5['url']); ?>"
                alt="<?php echo esc_attr($photo5['alt']); ?>">
        </div>
        <?php endif;?>


        <?php $photo6 = get_field('photo6');?>
        <?php if ($photo6): ?>
        <div class="img_container popup-link" data-aos="fade-up" href="<?php echo esc_url($photo6['url']); ?>">
            <img class="adv-gallery__img" src="<?php echo esc_url($photo6['url']); ?>"
                alt="<?php echo esc_attr($photo6['alt']); ?>">

        </div>
        <?php endif;?>


        <?php $photo7 = get_field('photo7');?>
        <?php if ($photo7): ?>
        <div class="img_container popup-link" data-aos="fade-left" href="<?php echo esc_url($photo7['url']); ?>">
            <img class="adv-gallery__img" src="<?php echo esc_url($photo7['url']); ?>"
                alt="<?php echo esc_attr($photo7['alt']); ?>">
        </div>
        <?php endif;?>

    </div>
</section>

<?php $photo8 = get_field('photo8');?>
<?php $photo9 = get_field('photo9');?>
<?php $photo10 = get_field('photo10');?>


<?php if ($photo8 && $photo9 && $photo10): ?>

<section class="adv-gallery">
    <div class="adv-gallery__grid container max-width-adaptive-xl parent-container">

        <?php if ($photo8): ?>
        <div class="img_container popup-link" data-aos="fade-right" data-aos-offset="10" data-aos-easing="ease-in-sine"
            href="<?php echo esc_url($photo8['url']); ?>">

            <img class="adv-gallery__img" src="<?php echo esc_url($photo8['url']); ?>"
                alt="<?php echo esc_attr($photo8['alt']); ?>" />
        </div>
        <?php endif;?>

        <?php if ($photo9): ?>
        <div class="img_container popup-link" data-aos="fade-up" data-aos-offset="10" data-aos-easing="ease-in-sine"
            href="<?php echo esc_url($photo9['url']); ?>">
            <img class="adv-gallery__img" src="<?php echo esc_url($photo9['url']); ?>"
                alt="<?php echo esc_attr($photo9['alt']); ?>" />
        </div>
        <?php endif;?>

        <?php if ($photo10): ?>
        <div class="img_container popup-link" data-aos="fade-up" data-aos-anchor-placement="center-bottom"
            data-aos-id="super-duper" href="<?php echo esc_url($photo10['url']); ?>">
            <img class="adv-gallery__img" src="<?php echo esc_url($photo10['url']); ?>"
                alt="<?php echo esc_attr($photo10['alt']); ?>" />
        </div>
        <?php endif;?>


        <!-- <div class="bg-contrast-lower padding-md flex@lg">
            <div class="margin-top-auto@lg">
                <div class="border-left border-contrast-high height-xxl margin-bottom-sm display@lg" aria-hidden="true">
                </div>
                <p class="text-lg">photography is the beauty of life captured.</p>
            </div>
        </div> -->
    </div>
</section>
<?php endif;?>