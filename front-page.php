<?php get_header();?>

<?php
$args = array('post_type' => 'gallery_image');
query_posts($args);
?>




<!-- Begin Content -->
<div class="main-container with-padding">

    <!-- Begin Wrapper -->
    <div class="wrapper">

        <!-- Begin Horizontal Gallery -->
        <div class="gallery-h centered">

            <div class="nav">
                <a href="#" class="prev icon4-leftarrow23"></a>
                <a href="#" class="next icon4-chevrons"></a>
            </div>

            <div class="gallery clearfix">

                <div class="container" id="container">

                    <?php $galleryimg1 = get_field('galleryimg1');?>
                    <?php if ($galleryimg1): ?>

                    <div class="img">
                        <a href="<?php echo esc_url($galleryimg1['url']); ?>" rel="gallery">
                            <img class="lazy" data-original="<?php echo esc_url($galleryimg1['url']); ?>"
                                alt="<?php echo esc_attr($galleryimg1['alt']); ?>" data-width="600" data-height="800" />

                        </a>
                    </div>
                    <?php endif;?>

                    <?php $galleryimg2 = get_field('galleryimg2');?>
                    <?php if ($galleryimg2): ?>

                    <div class="img">
                        <a href="<?php echo esc_url($galleryimg2['url']); ?>" rel="gallery">
                            <img class="lazy" data-original="<?php echo esc_url($galleryimg2['url']); ?>"
                                alt="<?php echo esc_attr($galleryimg2['alt']); ?>" data-width="600" data-height="800" />

                        </a>
                    </div>
                    <?php endif;?>
                    <?php $galleryimg3 = get_field('galleryimg3');?>
                    <?php if ($galleryimg3): ?>

                    <div class="img active">
                        <a href="<?php echo esc_url($galleryimg3['url']); ?>" rel="gallery">
                            <img class="lazy" data-original="<?php echo esc_url($galleryimg3['url']); ?>"
                                alt="<?php echo esc_attr($galleryimg3['alt']); ?>" data-width="600" data-height="800" />

                        </a>
                    </div>
                    <?php endif;?>
                    <?php $galleryimg4 = get_field('galleryimg4');?>
                    <?php if ($galleryimg4): ?>

                    <div class="img">
                        <a href="<?php echo esc_url($galleryimg4['url']); ?>" rel="gallery">
                            <img class="lazy" data-original="<?php echo esc_url($galleryimg4['url']); ?>"
                                alt="<?php echo esc_attr($galleryimg4['alt']); ?>" data-width="600" data-height="800" />

                        </a>
                    </div>
                    <?php endif;?>
                    <?php $galleryimg5 = get_field('galleryimg5');?>
                    <?php if ($galleryimg5): ?>

                    <div class="img">
                        <a href="<?php echo esc_url($galleryimg5['url']); ?>" rel="gallery">
                            <img class="lazy" data-original="<?php echo esc_url($galleryimg5['url']); ?>"
                                alt="<?php echo esc_attr($galleryimg5['alt']); ?>" data-width="600" data-height="800" />

                        </a>
                    </div>
                    <?php endif;?>
                    <?php $galleryimg6 = get_field('galleryimg6');?>
                    <?php if ($galleryimg6): ?>

                    <div class="img">
                        <a href="<?php echo esc_url($galleryimg6['url']); ?>" rel="gallery">
                            <img class="lazy" data-original="<?php echo esc_url($galleryimg6['url']); ?>"
                                alt="<?php echo esc_attr($galleryimg6['alt']); ?>" data-width="600" data-height="800" />

                        </a>
                    </div>
                    <?php endif;?>

                    <?php $galleryimg7 = get_field('galleryimg7');?>
                    <?php if ($galleryimg7): ?>

                    <div class="img">
                        <a href="<?php echo esc_url($galleryimg7['url']); ?>" rel="gallery">
                            <img class="lazy" data-original="<?php echo esc_url($galleryimg7['url']); ?>"
                                alt="<?php echo esc_attr($galleryimg7['alt']); ?>" data-width="430" data-height="600" />

                        </a>
                    </div>
                    <?php endif;?>







                </div>

            </div>

        </div>
        <!-- End Horizontal Gallery -->

    </div>
    <!-- End Wrapper -->

</div>
<!-- End Content -->

<!-- Begin Footer -->

<?php get_footer();?>

<script>
// document.getElementById("footer").style.position = "fixed";

// jQuery(function($) {
//     $("img.lazyload").lazyload();

//     $("#container").imagesLoaded(function() {
//         console.log("all images successfully loaded");

//         // render();
//         // resize()
//         // images have loaded
//     });
// });
</script>

</body>
<!-- End body -->

</html>
<!-- End html -->