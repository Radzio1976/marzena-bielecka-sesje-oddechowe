<?php
$testimonial_defaults = [
    1 => [
        'text'   => 'To było naprawdę niesamowite doświadczenie.',
        'name'   => 'Agata Nowak',
        'city'   => 'Jelenia Góra',
        'rating' => 5,
    ],
    2 => [
        'text'   => 'Marzena to wspaniała terapeutka. Sesja była naprawdę mocna.',
        'name'   => 'Stefan Koziński',
        'city'   => 'Golub-Dobrzyń',
        'rating' => 5,
    ],
    3 => [
        'text'   => 'To była super sesja.',
        'name'   => 'Anna Kowalska',
        'city'   => 'Warszawa',
        'rating' => 5,
    ],
];

$testimonials = [];

foreach ($testimonial_defaults as $index => $defaults) {
    $testimonials[] = [
        'text'   => get_theme_mod("atma_testimonial_{$index}_text", $defaults['text']),
        'name'   => get_theme_mod("atma_testimonial_{$index}_name", $defaults['name']),
        'city'   => get_theme_mod("atma_testimonial_{$index}_city", $defaults['city']),
        'rating' => min(5, max(1, absint(get_theme_mod("atma_testimonial_{$index}_rating", $defaults['rating'])))),
    ];
}
?>

<section class="atma-testimonials" id="opinie">

    <div class="atma-container">

        <div class="testimonials-heading">
            <span class="testimonials-kicker"><?php echo esc_html(get_theme_mod('atma_testimonials_kicker', 'OPINIE KLIENTÓW')); ?></span>

            <h2><?php echo esc_html(get_theme_mod('atma_testimonials_title', 'Co mówią osoby po sesjach?')); ?></h2>

            <p>
                <?php echo esc_html(get_theme_mod('atma_testimonials_description', 'Każda historia jest inna, ale wszystkie łączy jedno — większy spokój, lekkość i głębszy kontakt ze sobą.')); ?>
            </p>
        </div>

        <div class="testimonials-grid">

            <?php foreach ($testimonials as $testimonial) : ?>

                <article class="testimonial-card">

                    <div class="testimonial-stars">
                        <?php
                        for ($star = 0; $star < $testimonial['rating']; $star++) {
                            echo '★';
                        }
                        ?>
                    </div>

                    <div class="testimonial-text">
                        <?php echo esc_html($testimonial['text']); ?>
                    </div>

                    <div class="testimonial-footer">
                        <div class="testimonial-author">
                            <?php echo esc_html($testimonial['name']); ?>
                        </div>

                        <div class="testimonial-city">
                            <?php echo esc_html($testimonial['city']); ?>
                        </div>
                    </div>

                </article>

            <?php endforeach; ?>

        </div>

    </div>

</section>