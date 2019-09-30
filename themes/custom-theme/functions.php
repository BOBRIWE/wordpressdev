<?php

function customtheme_styles() {
    wp_register_style( 'style', get_stylesheet_uri(), array(), false, 'all' );
    wp_enqueue_style('style');
}
add_action('wp_enqueue_scripts', 'customtheme_styles');
