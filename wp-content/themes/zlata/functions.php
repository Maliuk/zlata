<?php

// Custom functions 
// Tidy up the <head> a little. Full reference of things you can show/remove is here: http://rjpargeter.com/2009/09/removing-wordpress-wp_head-elements/
remove_action('wp_head', 'wp_generator'); // Removes the WordPress version as a layer of simple security 

add_theme_support('post-thumbnails');

show_admin_bar(false);

// =============================================================
// Move All Scrips to Footer
// =============================================================
function remove_head_scripts() {
    remove_action('wp_head', 'wp_print_scripts');
    remove_action('wp_head', 'wp_print_head_scripts', 9);
    remove_action('wp_head', 'wp_enqueue_scripts', 1);

    add_action('wp_footer', 'wp_print_scripts', 5);
    add_action('wp_footer', 'wp_enqueue_scripts', 5);
    add_action('wp_footer', 'wp_print_head_scripts', 5);
}

add_action('wp_enqueue_scripts', 'remove_head_scripts');

// =============================================================
// Styles
// =============================================================
function add_styles() {
    wp_enqueue_style('font-awesome', get_stylesheet_directory_uri() . '/css/font-awesome.css');
    wp_enqueue_style('bootstrap', get_stylesheet_directory_uri() . '/css/bootstrap.css');

    wp_enqueue_style('theme-style', get_stylesheet_directory_uri() . '/css/main.css', '', '1.0.1');
}

add_action('wp_enqueue_scripts', 'add_styles');

// =============================================================
// Scripts
// =============================================================
function add_scripts() {
    wp_register_script("jquery", "//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.js", array(), null);
    wp_register_script("bootstrap", get_stylesheet_directory_uri() . "/js/vendor/bootstrap.min.js", array("jquery"), null);
    wp_register_script("TweenMax", get_stylesheet_directory_uri() . "/js/vendor/greensock-js/src/minified/TweenMax.min.js");
    wp_register_script('google-map', 'https://maps.googleapis.com/maps/api/js?v=3.exp&signed_in=true&language=ru&key=AIzaSyD7u_UGkHAHL4bOttXAkOlM9_GbW0bOkns');
    wp_register_script("main", get_stylesheet_directory_uri() . "/js/main.js", array("jquery"), null);

    wp_enqueue_script("jquery");
    wp_enqueue_script("bootstrap");
    wp_enqueue_script("TweenMax");
    wp_enqueue_script('google-map');
    wp_enqueue_script("main");

    wp_localize_script('main', 'variables', array('ajaxurl' => admin_url('admin-ajax.php')));
}

add_action('wp_enqueue_scripts', 'add_scripts');
