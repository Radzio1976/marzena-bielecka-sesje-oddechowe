<section class="atma-contact" id="kontakt">

    <div class="atma-container">

        <div class="contact-card">

            <div class="contact-image">

                <?php
                $image_id = get_theme_mod('atma_about_image');

                if ($image_id) :
                    echo wp_get_attachment_image(
                        $image_id,
                        'large',
                        false,
                        ['class' => 'contact-img']
                    );
                endif;
                ?>

            </div>

            <div class="contact-content">

                <span class="contact-kicker">KONTAKT</span>

                <h2>Spotkajmy się online</h2>

                <p>
                    Zadzwoń lub wyślij SMS. Chętnie odpowiem na Twoje pytania i wspólnie znajdziemy najlepszy termin pierwszej sesji online.
                </p>

                <div class="contact-phone">

                    <span>Telefon</span>

                    <a href="tel:+48600000000">
                        +48 506 853 033
                    </a>

                </div>

                <a href="tel:+48600000000" class="atma-btn">
                    Zadzwoń lub wyślij SMS
                </a>

            </div>

        </div>

    </div>

</section>