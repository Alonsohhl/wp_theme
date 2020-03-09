<?php

function load_stylesheets()
{

    wp_register_style('stylesheet', get_template_directory_uri() . '/css/bootstrap.min.css', array(), false, 'all');
    wp_enqueue_style('stylesheet');

    wp_register_style('style', get_template_directory_uri() . '/style.css', array(), false, 'all');
    wp_enqueue_style('style');

    wp_register_style('aos_style', get_template_directory_uri() . '/assets/css/aos.css', array(), false, 'all');
    wp_enqueue_style('aos_style');
}
add_action('wp_enqueue_scripts', 'load_stylesheets');

function codyframe_register_styles()
{

    $theme_version = wp_get_theme()->get('Version');

    wp_enqueue_style('codyframe', get_template_directory_uri() . '/assets/css/style.css', array(), $theme_version);
}
add_action('wp_enqueue_scripts', 'codyframe_register_styles');

wp_register_script('aos', get_template_directory_uri() . '/js/aos.js');
wp_register_script('codyframe', get_template_directory_uri() . '/assets/js/scripts.js', array('jquery'));

function aos_register_scripts()
{
    wp_enqueue_script('aos');
    wp_enqueue_script('codyframe');

}
add_action('wp_enqueue_scripts', 'aos_register_scripts');
