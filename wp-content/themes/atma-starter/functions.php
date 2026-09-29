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

    /* ===== HERO ===== */

    $wp_customize->add_section('atma_hero', [
        'title'    => 'Atma Starter – Hero',
        'priority' => 29,
    ]);

    $hero_settings = [
        'atma_hero_kicker' => [
            'label'   => 'Nadtytuł',
            'default' => 'MARZENA BIELECKA • SESJE ODDECHOWE',
            'type'    => 'text',
        ],
        'atma_hero_title' => [
            'label'   => 'Tytuł',
            'default' => 'Oddech, który prowadzi do wewnętrznego spokoju',
            'type'    => 'textarea',
        ],
        'atma_hero_description' => [
            'label'   => 'Opis',
            'default' => 'Indywidualne sesje oddechowe, medytacja i świadoma praca z energią. Odkryj moc głębokiego oddechu i odzyskaj równowagę.',
            'type'    => 'textarea',
        ],
        'atma_hero_button_primary_text' => [
            'label'   => 'Tekst głównego przycisku',
            'default' => 'Umów sesję',
            'type'    => 'text',
        ],
        'atma_hero_button_primary_url' => [
            'label'   => 'Adres głównego przycisku',
            'default' => '#kontakt',
            'type'    => 'url',
        ],
        'atma_hero_button_secondary_text' => [
            'label'   => 'Tekst drugiego przycisku',
            'default' => 'Poznaj metodę',
            'type'    => 'text',
        ],
        'atma_hero_button_secondary_url' => [
            'label'   => 'Adres drugiego przycisku',
            'default' => '#metoda',
            'type'    => 'url',
        ],
    ];

    foreach ($hero_settings as $setting_id => $setting) {
        $wp_customize->add_setting($setting_id, [
            'default'           => $setting['default'],
            'sanitize_callback' => $setting['type'] === 'url' ? 'esc_url_raw' : ($setting['type'] === 'textarea' ? 'sanitize_textarea_field' : 'sanitize_text_field'),
        ]);

        $wp_customize->add_control($setting_id, [
            'label'   => $setting['label'],
            'section' => 'atma_hero',
            'type'    => $setting['type'],
        ]);
    }

    /* ===== OFERTA ===== */

    $wp_customize->add_section('atma_offer', [
        'title'    => 'Atma Starter – Oferta',
        'priority' => 30,
    ]);

    $offer_settings = [
        'atma_offer_kicker' => [
            'label'   => 'Nadtytuł',
            'default' => 'INDYWIDUALNE SESJE ODDECHOWE',
            'type'    => 'text',
        ],
        'atma_offer_title' => [
            'label'   => 'Tytuł',
            'default' => 'Przestrzeń, w której ciało może naprawdę odetchnąć',
            'type'    => 'text',
        ],
        'atma_offer_description' => [
            'label'   => 'Opis',
            'default' => 'Każda sesja jest indywidualnym spotkaniem, podczas którego poprzez świadomy oddech, uważność i delikatną pracę z ciałem odnajdujesz więcej spokoju, lekkości i kontaktu ze sobą.',
            'type'    => 'textarea',
        ],
        'atma_offer_feature1_title' => [
            'label'   => 'Tytuł pierwszej korzyści',
            'default' => 'Sesja indywidualna',
            'type'    => 'text',
        ],
        'atma_offer_feature1_text' => [
            'label'   => 'Opis pierwszej korzyści',
            'default' => 'To spokojna, kameralna przestrzeń, w której możesz zatrzymać się, rozluźnić napięcia i odzyskać kontakt z własnym oddechem.',
            'type'    => 'textarea',
        ],
        'atma_offer_feature2_title' => [
            'label'   => 'Tytuł drugiej korzyści',
            'default' => 'Dla kogo?',
            'type'    => 'text',
        ],
        'atma_offer_feature2_text' => [
            'label'   => 'Opis drugiej korzyści',
            'default' => 'Dla osób odczuwających stres, przewlekłe napięcie, zmęczenie emocjonalne lub pragnących głębiej poznać siebie poprzez pracę z oddechem.',
            'type'    => 'textarea',
        ],
        'atma_offer_button_text' => [
            'label'   => 'Tekst przycisku',
            'default' => 'Umów pierwszą sesję',
            'type'    => 'text',
        ],
        'atma_offer_button_url' => [
            'label'   => 'Adres przycisku',
            'default' => '#kontakt',
            'type'    => 'url',
        ],
    ];

    foreach ($offer_settings as $setting_id => $setting) {
        $wp_customize->add_setting($setting_id, [
            'default'           => $setting['default'],
            'sanitize_callback' => $setting['type'] === 'url' ? 'esc_url_raw' : ($setting['type'] === 'textarea' ? 'sanitize_textarea_field' : 'sanitize_text_field'),
        ]);

        $wp_customize->add_control($setting_id, [
            'label'   => $setting['label'],
            'section' => 'atma_offer',
            'type'    => $setting['type'],
        ]);
    }

    $wp_customize->add_setting('atma_offer_image', [
        'default'           => 0,
        'sanitize_callback' => 'absint',
    ]);

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

/* ==========================================
   CUSTOM POST TYPE — OPINIE
========================================== */

function atma_register_testimonials() {

    register_post_type('opinia', [

        'labels' => [
            'name'          => 'Opinie',
            'singular_name' => 'Opinia',
            'add_new_item'  => 'Dodaj opinię',
            'edit_item'     => 'Edytuj opinię',
        ],

        'public'       => true,
        'show_in_rest' => true,
        'menu_icon'    => 'dashicons-format-quote',
'supports' => ['title', 'editor'],
        'has_archive'  => false,

    ]);

}

add_action('init', 'atma_register_testimonials');

/* ==========================================
   META BOX — OPINIA
========================================== */

function atma_add_testimonial_meta() {

    add_meta_box(
        'atma_testimonial',
        'Dane klienta',
        'atma_testimonial_callback',
        'opinia'
    );

}

add_action('add_meta_boxes', 'atma_add_testimonial_meta');

function atma_testimonial_callback($post) {

    $name   = get_post_meta($post->ID, 'client_name', true);
    $city   = get_post_meta($post->ID, 'client_city', true);
    $rating = get_post_meta($post->ID, 'client_rating', true);

    ?>

    <p>
        <label>Imię i nazwisko</label><br>
        <input type="text" name="client_name" value="<?php echo esc_attr($name); ?>" style="width:100%;">
    </p>

    <p>
        <label>Miasto</label><br>
        <input type="text" name="client_city" value="<?php echo esc_attr($city); ?>" style="width:100%;">
    </p>

    <p>
        <label>Ocena</label><br>
        <select name="client_rating">
            <?php for($i=5;$i>=1;$i--) : ?>
                <option value="<?php echo $i; ?>" <?php selected($rating,$i); ?>>
                    <?php echo $i; ?> ★
                </option>
            <?php endfor; ?>
        </select>
    </p>

    <?php
}

function atma_save_testimonial($post_id) {

    if(isset($_POST['client_name']))
        update_post_meta($post_id,'client_name',sanitize_text_field($_POST['client_name']));

    if(isset($_POST['client_city']))
        update_post_meta($post_id,'client_city',sanitize_text_field($_POST['client_city']));

    if(isset($_POST['client_rating']))
        update_post_meta($post_id,'client_rating',intval($_POST['client_rating']));
}

add_action('save_post_opinia','atma_save_testimonial');