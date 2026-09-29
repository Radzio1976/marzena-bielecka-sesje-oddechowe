<section class="atma-about" id="o-mnie">

    <div class="atma-container">

        <div class="about-grid">

            <div class="about-image">

                <?php
                $image_id = get_theme_mod('atma_about_image');
                $image_url = $image_id ? wp_get_attachment_image_url($image_id, 'large') : false;

                if ($image_url) :

                    ?>
                    <img src="<?php echo esc_url($image_url); ?>" alt="<?php echo esc_attr(get_post_meta($image_id, '_wp_attachment_image_alt', true)); ?>" class="about-img">

                <?php else : ?>

                    <div class="about-placeholder">
                        Zdjęcie Marzeny
                    </div>

                <?php endif; ?>

            </div>

            <div class="about-content">

                <span class="about-kicker">
                    <?php echo esc_html(get_theme_mod('atma_about_kicker', 'O MNIE')); ?>
                </span>

                <h2>
                    <?php echo esc_html(get_theme_mod('atma_about_title', 'Poznaj Marzenę Bielecką')); ?>
                </h2>

                <p>
                    <?php echo wp_kses_post(get_theme_mod('atma_about_paragraph1', 'Oddech jest dla mnie drogą do odzyskiwania kontaktu z ciałem, emocjami i wewnętrznym spokojem. Tworzę bezpieczną przestrzeń, w której możesz zatrzymać się i naprawdę usłyszeć siebie.')); ?>
                </p>

                <p>
                    <?php echo wp_kses_post(get_theme_mod('atma_about_paragraph2', 'Łączę świadomą pracę z oddechem, uważność oraz indywidualne podejście do każdej osoby. Każde spotkanie jest inne, ponieważ każda historia jest wyjątkowa.')); ?>
                </p>

                <a href="<?php echo esc_url(get_theme_mod('atma_about_button_url', '#historia')); ?>" class="atma-btn">
                    <?php echo esc_html(get_theme_mod('atma_about_button_text', 'Poznaj moją historię')); ?>
                </a>

            </div>

        </div>

    </div>

</section>