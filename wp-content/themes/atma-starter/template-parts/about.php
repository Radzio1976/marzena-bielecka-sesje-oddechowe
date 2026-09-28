<section class="atma-about" id="o-mnie">

    <div class="atma-container">

        <div class="about-grid">

            <div class="about-image">

                <?php
                $image_id = get_theme_mod('atma_about_image');

                if ($image_id) :

                    echo wp_get_attachment_image(
                        $image_id,
                        'large',
                        false,
                        ['class' => 'about-img']
                    );

                else :
                ?>

                    <div class="about-placeholder">
                        Zdjęcie Marzeny
                    </div>

                <?php endif; ?>

            </div>

            <div class="about-content">

                <span class="about-kicker">
                    O MNIE
                </span>

                <h2>
                    Poznaj Marzenę Bielecką
                </h2>

                <p>
                    Oddech jest dla mnie drogą do odzyskiwania kontaktu z ciałem,
                    emocjami i wewnętrznym spokojem. Tworzę bezpieczną przestrzeń,
                    w której możesz zatrzymać się i naprawdę usłyszeć siebie.
                </p>

                <p>
                    Łączę świadomą pracę z oddechem, uważność oraz indywidualne
                    podejście do każdej osoby. Każde spotkanie jest inne,
                    ponieważ każda historia jest wyjątkowa.
                </p>

                <a href="#kontakt" class="atma-btn">
                    Poznaj moją historię
                </a>

            </div>

        </div>

    </div>

</section>