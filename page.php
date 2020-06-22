<?php get_header();?>




<?php if (is_front_page()) {?>
<?php wp_enqueue_script('customjs');}?>

<?php if (is_page(array('CONTACT'))) {include 'pages/contact_content.php';} else {include 'pages/gallery_content.php';}?>


<?php get_footer();?>
<style>
body {
    overflow: auto;
}
</style>


<script>
document.getElementById("mainBody").style.overflow = "auto";
document.getElementById("footer").style.position = "fixed";


AOS.init();

jQuery(function($) {

    $('.popup-link').magnificPopup({
        type: 'image'
        // other options
    });
})
</script>


</body>

</html>