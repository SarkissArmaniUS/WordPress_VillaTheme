<?php
function theme_enqueue_styles() {
    // Enqueue Google Fonts
    wp_enqueue_style( 'google-fonts', 'https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap' );

    // Enqueue Bootstrap core CSS
    wp_enqueue_style( 'bootstrap-css', get_template_directory_uri() . '/vendor/bootstrap/css/bootstrap.min.css' );

    // Enqueue Additional CSS Files
    wp_enqueue_style( 'fontawesome-css', get_template_directory_uri() . '/assets/css/fontawesome.css' );
    wp_enqueue_style( 'templatemo-villa-agency-css', get_template_directory_uri() . '/assets/css/templatemo-villa-agency.css' );
    wp_enqueue_style( 'owl-css', get_template_directory_uri() . '/assets/css/owl.css' );
    wp_enqueue_style( 'animate-css', get_template_directory_uri() . '/assets/css/animate.css' );
    wp_enqueue_style( 'swiper-css', 'https://unpkg.com/swiper@7/swiper-bundle.min.css' );
}

add_action( 'wp_enqueue_scripts', 'theme_enqueue_styles' );

function theme_enqueue_scripts() {
    // Enqueue jQuery
    wp_enqueue_script( 'jquery' );

    // Enqueue Bootstrap core JS
    wp_enqueue_script( 'bootstrap-js', get_template_directory_uri() . '/vendor/bootstrap/js/bootstrap.min.js', array('jquery'), '', true );

    // Enqueue Additional JS Files
    wp_enqueue_script( 'isotope-js', get_template_directory_uri() . '/assets/js/isotope.min.js', array('jquery'), '', true );
    wp_enqueue_script( 'owl-carousel-js', get_template_directory_uri() . '/assets/js/owl-carousel.js', array('jquery'), '', true );
    wp_enqueue_script( 'counter-js', get_template_directory_uri() . '/assets/js/counter.js', array('jquery'), '', true );
    wp_enqueue_script( 'custom-js', get_template_directory_uri() . '/assets/js/custom.js', array('jquery'), '', true );
}

add_action( 'wp_enqueue_scripts', 'theme_enqueue_scripts' );
?>
