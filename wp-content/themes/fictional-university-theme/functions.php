<?php

function university_files() {
    // Enqueue main JavaScript file, depends on jQuery, loaded in footer
    wp_enqueue_script('main-university-js', get_theme_file_uri('/build/index.js'), array('jquery'), '1.0', true);

    // Enqueue stylesheets
    wp_enqueue_style('our-main-styles-vendor', get_theme_file_uri('/build/index.css'), array(), '1.0');
    wp_enqueue_style('our-main-styles', get_theme_file_uri('/build/style-index.css'), array(), '1.0');

    // Google Fonts
    wp_enqueue_style(
        'google-fonts',
        'https://fonts.googleapis.com/css?family=Roboto+Condensed:300,300i,400,400i,700,700i|Roboto:100,300,400,400i,700,700i',
        false,
        null
    );

    // Font Awesome
    wp_enqueue_style(
        'font-awesome',
        'https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css',
        array(),
        '4.7.0'
    );

    // Google Maps API (replace YOUR_API_KEY with actual key)
    wp_enqueue_script('googleMap', 'https://maps.googleapis.com/maps/api/js?key=YOUR_API_KEY', array(), null, true);

    // Pass data from PHP to JS (optional, needed for REST API usage etc.)
    wp_localize_script('main-university-js', 'universityData', array(
        'root_url' => get_site_url(),
        'nonce' => wp_create_nonce('wp_rest')
    ));
}
add_action('wp_enqueue_scripts', 'university_files');


add_action('after_setup_theme', 'university_features');
function university_features() {   
    // Enable support for post thumbnails
    add_theme_support('title-tag');
}


   