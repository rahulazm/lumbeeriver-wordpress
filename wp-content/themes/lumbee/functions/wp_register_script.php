<?php
function register_theme_name_scripts() {
    wp_enqueue_style( 'bootstrap', get_template_directory_uri() . '/assets/css/bootstrap.min.css' );
    wp_enqueue_style( 'bootstrap-nav', get_template_directory_uri() . '/assets/css/bootsnav.css' );
    wp_enqueue_style( 'animate', get_template_directory_uri() . '/assets/css/animate.css' );
    wp_enqueue_style( 'overwright', get_template_directory_uri() . '/assets/css/overwrite.css' );
    wp_enqueue_style( 'owl-slider', get_template_directory_uri() . '/assets/css/owl.carousel.css' );
    wp_enqueue_style( 'owl-theme', get_template_directory_uri() . '/assets/css/owl-theme.css' );
    wp_enqueue_style( 'owl-transitions', get_template_directory_uri() . '/assets/css/owl.transitions.css' );
    wp_enqueue_style( 'style', get_template_directory_uri() . '/assets/css/style.css' );
    wp_enqueue_style( 'responsive', get_template_directory_uri() . '/assets/css/responsive.css' );
    wp_enqueue_style( 'font-awesome', 'https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css' );
   
    wp_enqueue_script( 'jquery-js', get_template_directory_uri() . '/assets/js/jquery-1.12.2.min.js', array(), '1.0.0', true );
    wp_enqueue_script( 'bootstrap-js', get_template_directory_uri() . '/assets/js/bootstrap.min.js', array(), '1.0.0', true );
    wp_enqueue_script( 'bootsnav', get_template_directory_uri() . '/assets/js/bootsnav.js', array(), '1.0.0', true );
    wp_enqueue_script( 'wow', get_template_directory_uri() . '/assets/js/wow.min.js', array(), '1.0.0', true );
    wp_enqueue_script( 'owl-slider', get_template_directory_uri() . '/assets/js/owl.carousel.js', array(), '1.0.0', true );
    wp_enqueue_script( 'custom', get_template_directory_uri() . '/assets/js/custom.js', array(), '1.0.0', true );
}
add_action( 'wp_enqueue_scripts', 'register_theme_name_scripts' );

