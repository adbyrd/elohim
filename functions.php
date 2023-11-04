<?php

/**
 * Elohim Theme Functions
 * @package Elohim
*/

/**
 * ENQUEUE SCRIPTS
*/
function elohim_enqueue_scripts(){
   wp_enqueue_style( 'elohim-stylesheet', get_stylesheet_uri(), [], filemtime( get_template_directory() . '/style.css') ); // THEME STYLESHEET
   wp_enqueue_style( 'tailwindcss_output', get_template_directory_uri() . '/assets/tailwindcss/tailwind.css'); // TAILWINDCSS
   wp_enqueue_script( 'fascript', 'https://kit.fontawesome.com/9a56d993d6.js'); // FONT AWESOME
   wp_enqueue_script( 'main-js', get_template_directory_uri() . '/assets/main.js', [], filemtime( get_template_directory() . '/assets/main.js') ); // BASE: SCRIPTS
}
add_action( 'wp_enqueue_scripts', 'elohim_enqueue_scripts' );