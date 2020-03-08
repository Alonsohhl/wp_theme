<?php

function load_stylesheets(){

    wp_register_style('stylesheet', get_template_directory_uri() . '/css/bootstrap.min.css',array(),false,'all');
    wp_enqueue_style('stylesheet');

    wp_register_style('style', get_template_directory_uri() . '/style.css',array(),false,'all');
    wp_enqueue_style('style');
}

function codyframe_register_styles() {

    $theme_version = wp_get_theme()->get( 'Version' );

    wp_enqueue_style( 'codyframe', get_template_directory_uri() . '/assets/css/style.css', array(), $theme_version );
  }

  add_action( 'wp_enqueue_scripts', 'codyframe_register_styles' );

  function codyframe_register_scripts() {

    $theme_version = wp_get_theme()->get( 'Version' );

    wp_enqueue_script( 'codyframe', get_template_directory_uri() . '/assets/js/scripts.js', array(), $theme_version, true );
  }



add_action('wp_enqueue_scripts','load_stylesheets');
add_action( 'wp_enqueue_scripts', 'codyframe_register_scripts' );