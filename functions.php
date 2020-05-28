<?php

function load_stylesheets()
{
    // wp_register_style('stylesheet', get_template_directory_uri() . '/css/bootstrap.min.css', array(), false, 'all');
    // wp_enqueue_style('stylesheet');

    wp_enqueue_style( 'codyframe', get_template_directory_uri() . '/assets/css/style.css', array(), $theme_version );

    wp_register_style('style', get_template_directory_uri() . '/style.css', array(), false, 'all');
    wp_enqueue_style('style');

    wp_register_style('fontStyle', get_template_directory_uri() . '/assets/css/fontStyle.css', array(), false, 'all');
    wp_enqueue_style('fontStyle');


    // wp_register_style('flexStyle', get_template_directory_uri() . '/assets/js/flexslider/style.css', array(), false, 'all');
    // wp_enqueue_style('flexStyle');

    // wp_register_style('aos_style', get_template_directory_uri() . '/assets/css/aos.css', array(), false, 'all');
    // wp_enqueue_style('aos_style');

    wp_register_style('MagnificCss', get_template_directory_uri() . '/assets/js/Magnific-Popup/magnific-popup.css', array(), false, 'all');
    wp_enqueue_style('MagnificCss');

    wp_register_style('Cosy', get_template_directory_uri() . '/assets/css/cosy/style.css', array(), false, 'all');
    wp_enqueue_style('Cosy');

    wp_register_style('fontAwesome', get_template_directory_uri() . '/assets/fonts/font_awesome/font-awesome.css', array(), false, 'all');
    wp_enqueue_style('fontAwesome');

    wp_register_style('customStyle', get_template_directory_uri() . '/assets/css/custom.css', array(), false, 'all');
    wp_enqueue_style('customStyle');

    wp_register_style('reset', get_template_directory_uri() . '/assets/css/reset.css', array(), false, 'all');
    wp_enqueue_style('reset');




}
add_action('wp_enqueue_scripts', 'load_stylesheets');

// function codyframe_register_styles()
// {
//     $theme_version = wp_get_theme()->get('Version');
//     wp_enqueue_style('codyframe', get_template_directory_uri() . '/assets/css/style.css', array(), $theme_version);
// }
// add_action('wp_enqueue_scripts', 'codyframe_register_styles');

wp_register_script('aos', get_template_directory_uri() . '/js/aos.js');
wp_register_script('codyframe', get_template_directory_uri() . '/assets/js/scripts.js', array('jquery'));
wp_register_script('fitbits', get_template_directory_uri() . '/assets/js/fitvids.js', array('jquery'));
wp_register_script('customjs', get_template_directory_uri() . '/assets/js/scripts2.js', array('fitbits'));
wp_register_script('flexslider', get_template_directory_uri() . '/assets/js/flexslider/flexslider.min.js', array('jquery'));
wp_register_script('lazyload', get_template_directory_uri() . '/assets/js/lazyload.min.js', array('jquery'));
wp_register_script('mousewheel', get_template_directory_uri() . '/assets/js/mousewheel.min.js', array('jquery'));
wp_register_script('isotope', get_template_directory_uri() . '/assets/js/isotope.min.js', array('jquery'));
wp_register_script('magnific', get_template_directory_uri() . '/assets/js/Magnific-Popup/magnific-popup.min.js', array('jquery'));
wp_register_script('scrollTo', get_template_directory_uri() . '/assets/js/scrollTo-min.js', array('jquery'));
wp_register_script('niceScroll', get_template_directory_uri() . '/assets/js/nicescroll.min.js', array('jquery'));
wp_register_script('easing', get_template_directory_uri() . '/assets/js/easing.1.3.js', array('jquery'));


function aos_register_scripts()
{
    wp_enqueue_script('aos');
    wp_enqueue_script('codyframe');
    wp_enqueue_script('fitbits');
    wp_enqueue_script('flexslider');
    wp_enqueue_script('lazyload');
    wp_enqueue_script('mousewheel');
    wp_enqueue_script('isotope');
    wp_enqueue_script('magnific');
    wp_enqueue_script('scrollTo');
    wp_enqueue_script('niceScroll');
    wp_enqueue_script('easing');

    // if(is_page()){ //Check if we are viewing a page
    //   global $wp_query;
    //         //Check which template is assigned to current page we are looking at
    //   $template_name = get_post_meta( $wp_query->post->ID, '_wp_page_template', true );
    //   if($template_name == 'page.php'){
    //            //If page is using slider portfolio template then load our slider script
    //     //  wp_enqueue_script('my_third_script', get_template_directory_uri() .'/includes/js/my_third_script.js');
    //     wp_enqueue_script('customjs');
    //   }
    // }
    // wp_enqueue_script('customjs');

    if( ! is_page( array( 'CHILDREN', 'CONTACT', 'management' ) ) ){
        wp_enqueue_script('customjs');
    }



}
add_action('wp_enqueue_scripts', 'aos_register_scripts');
add_theme_support('menus');

register_nav_menus(
    array(
        'top-menu' => __('Top Menu','theme'),
        'footer-menu'=>__('Footer Menu','theme')
    )
);

add_filter('nav_menu_css_class' , 'special_nav_class' , 10 , 2);

function special_nav_class ($classes, $item) {
  if (in_array('current-menu-item', $classes) ){
    $classes[] = 'active ';
  }
  return $classes;
}


// function codyframe_register_scripts() {

//   $theme_version = wp_get_theme()->get( 'Version' );
//   wp_enqueue_script( 'codyframe', get_template_directory_uri() . './assets/js/scripts.js', array(), $theme_version, true );
// }

// add_action( 'wp_enqueue_scripts', 'codyframe_register_scripts' );