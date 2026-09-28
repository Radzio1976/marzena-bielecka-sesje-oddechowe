<?php

/* ==========================================
   STYLE
========================================== */

add_action('wp_enqueue_scripts', function () {

    wp_enqueue_style(
        'atma-starter-style',
        get_stylesheet_uri(),
        ['hello-elementor-theme-style'],
        wp_get_theme()->get('Version')
    );

    wp_enqueue_style(
        'atma-main',
        get_stylesheet_directory_uri() . '/assets/css/main.css',
        ['atma-starter-style'],
        wp_get_theme()->get('Version')
    );

});

/* ==========================================
   THEME SETUP
========================================== */

add_action('after_setup_theme', function () {

    register_nav_menus([
        'primary' => 'Menu główne',
    ]);

});

/* ==========================================
   CUSTOMIZER
========================================== */

function atma_customize_register($wp_customize) {

    /* ===== OFERTA ===== */

    $wp_customize->add_section('atma_offer', [
        'title'    => 'Atma Starter – Oferta',
        'priority' => 30,
    ]);

    $wp_customize->add_setting('atma_offer_image');

    $wp_customize->add_control(
        new WP_Customize_Media_Control(
            $wp_customize,
            'atma_offer_image',
            [
                'label'     => 'Zdjęcie sekcji Oferta',
                'section'   => 'atma_offer',
                'mime_type' => 'image',
            ]
        )
    );

    /* ===== O MNIE ===== */

    $wp_customize->add_section('atma_about', [
        'title'    => 'Atma Starter – O mnie',
        'priority' => 31,
    ]);

    $wp_customize->add_setting('atma_about_image');

    $wp_customize->add_control(
        new WP_Customize_Media_Control(
            $wp_customize,
            'atma_about_image',
            [
                'label'     => 'Zdjęcie Marzeny',
                'section'   => 'atma_about',
                'mime_type' => 'image',
            ]
        )
    );

}

add_action('customize_register', 'atma_customize_register');