<?php 
/**
 * Load Scripts
 */

function loadAssets() {
    wp_deregister_script('jquery');

    wp_enqueue_style(
        'themeName',
        get_template_directory_uri() . '/assets/dist/main.css',
        [],
        time()
    );

    wp_register_script(
        'jquery',
        'https://code.jquery.com/jquery-3.6.0.min.js',
        false,
        '3.5.1',
        true
    );

    wp_enqueue_script(
        'themeName',
        get_template_directory_uri() . '/assets/dist/main.js',
        ['jquery'],
        '1.7',
        true
    );
}
add_action('wp_enqueue_scripts', 'loadAssets');