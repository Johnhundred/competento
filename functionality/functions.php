<?php

function add_theme_themes_and_scripts(){
    wp_enqueue_style( 'mainCSS', get_template_directory_uri() . '/assets/css/main.css',false,'1.0','all');

    wp_register_script( 'mainJS', get_template_directory_uri() . '/assets/js/main.js', array ( 'jquery' ), 1.0, true);
    wp_enqueue_script( 'mainJS' );
}

add_action( 'wp_enqueue_scripts', 'add_theme_themes_and_scripts' );

?>