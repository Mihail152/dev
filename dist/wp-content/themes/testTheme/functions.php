<?php
function load_style_script()
{
    // Подключение стилей
    wp_enqueue_style('style', get_template_directory_uri() . '/style.css');

    // Подключение скриптов
    wp_enqueue_script('script', get_template_directory_uri() . '/js/script.js', array(), null, true);
}

add_action('wp_enqueue_scripts', 'load_style_script');
