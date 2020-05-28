<?php get_header();?>

  <?php if( ! is_page( array( 'CHILDREN', 'CONTACT', 'management' ) ) ){?>
  <?php       wp_enqueue_script('customjs');   }?>

  <?php if( is_page( array( 'CHILDREN' ) ) ){include('pages/gallery_content.php');}?>
  <?php if( is_page( array( 'CONTACT' ) ) ){include('pages/contact_content.php');}?>


<?php get_footer();?>
<style>
  footer{
    position:fixed
  }
</style>

<script>
  document.getElementById("mainBody").style.overflow = "auto";
  document.getElementById("footer").style.position = "fixed";

</script>
