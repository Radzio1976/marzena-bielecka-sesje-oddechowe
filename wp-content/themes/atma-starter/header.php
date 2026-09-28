<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<header class="atma-header">

    <div class="atma-container atma-nav">

        <a href="<?php echo home_url(); ?>" class="atma-logo">
            <?php bloginfo('name'); ?>
        </a>

        <nav class="atma-menu">
            <?php
            wp_nav_menu([
                'theme_location' => 'primary',
                'container'      => false,
                'menu_class'     => 'menu'
            ]);
            ?>
        </nav>

        <a href="#kontakt" class="atma-btn">
            Umów się
        </a>

    </div>

</header>

<main>