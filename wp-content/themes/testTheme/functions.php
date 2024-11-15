<?php
function load_style_script()
{
    wp_enqueue_style('style', get_template_directory_uri() . '/style.css');
    wp_enqueue_scripts('script', get_template_directory_uri() . '/js/script.js');
}

add_action('wp_enqueue_scripts', 'load_style_script');
