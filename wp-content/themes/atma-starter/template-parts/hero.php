
<section class="atma-hero">
    <div class="atma-container">

        <div class="hero-left">
            <span class="hero-kicker">
                MARZENA BIELECKA • SESJE ODDECHOWE
            </span>

            <h1>Oddech, który prowadzi do wewnętrznego spokoju</h1>

            <p>
                Indywidualne sesje oddechowe, medytacja i świadoma
                praca z energią. Odkryj moc głębokiego oddechu
                i odzyskaj równowagę.
            </p>

            <div class="hero-buttons">
                <a href="#kontakt" class="atma-btn">Umów sesję</a>
                <a href="#metoda" class="atma-btn-outline">Poznaj metodę</a>
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