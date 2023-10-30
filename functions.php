<?php

/**
 * Elohim Theme Functions
 * @package Elohim
*/

// echo '<pre>';
// print_r( filemtime( get_template_directory() . '/style.css') );
// wp_die();


 function elohim_enqueue_scripts(){
    wp_enqueue_style( 'elohim-stylesheet', get_stylesheet_uri(), [], filemtime( get_template_directory() . '/style.css') );
    wp_enqueue_style( 'tailwindcss_output', get_template_directory_uri() . '/dist/output.css');
    wp_enqueue_script( 'main-js', get_template_directory_uri() . '/assets/main.js', [], filemtime( get_template_directory() . '/assets/main.js') );
 }
 add_action( 'wp_enqueue_scripts', 'elohim_enqueue_scripts' );