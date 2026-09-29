
<section class="atma-hero">
    <div class="atma-container">

        <div class="hero-left">
            <span class="hero-kicker">
                <?php echo esc_html(get_theme_mod('atma_hero_kicker', 'MARZENA BIELECKA • SESJE ODDECHOWE')); ?>
            </span>

            <h1><?php echo esc_html(get_theme_mod('atma_hero_title', 'Oddech, który prowadzi do wewnętrznego spokoju')); ?></h1>

            <p>
                <?php echo esc_html(get_theme_mod('atma_hero_description', 'Indywidualne sesje oddechowe, medytacja i świadoma praca z energią. Odkryj moc głębokiego oddechu i odzyskaj równowagę.')); ?>
            </p>

            <div class="hero-buttons">
                <a href="<?php echo esc_url(get_theme_mod('atma_hero_button_primary_url', '#kontakt')); ?>" class="atma-btn"><?php echo esc_html(get_theme_mod('atma_hero_button_primary_text', 'Umów sesję')); ?></a>
                <a href="<?php echo esc_url(get_theme_mod('atma_hero_button_secondary_url', '#metoda')); ?>" class="atma-btn-outline"><?php echo esc_html(get_theme_mod('atma_hero_button_secondary_text', 'Poznaj metodę')); ?></a>
            </div>
        </div>

<div class="hero-right">

    <?php if ( has_post_thumbnail() ) : ?>

        <?php the_post_thumbnail(
            'large',
            ['class' => 'hero-image']
        ); ?>

    <?php else : ?>

        <div class="hero-image-placeholder">
            Zdjęcie Marzeny
        </div>

    <?php endif; ?>

</div>

    </div>
</section>