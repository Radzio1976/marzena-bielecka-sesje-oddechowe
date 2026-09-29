<section class="atma-contact" id="kontakt">

    <div class="atma-container">

        <div class="contact-card">

            <div class="contact-image">

                <?php
                $contact_image_url = get_theme_mod('atma_contact_image');
                $image_id = $contact_image_url ? attachment_url_to_postid($contact_image_url) : 0;

                if (!$image_id) {
                    $image_id = absint(get_theme_mod('atma_about_image'));
                }

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

                <span class="contact-kicker"><?php echo esc_html(get_theme_mod('atma_contact_kicker', 'KONTAKT')); ?></span>

                <h2><?php echo esc_html(get_theme_mod('atma_contact_title', 'Spotkajmy się online')); ?></h2>

                <p>
                    <?php echo esc_html(get_theme_mod('atma_contact_description', 'Zadzwoń lub wyślij SMS. Chętnie odpowiem na Twoje pytania i wspólnie znajdziemy najlepszy termin pierwszej sesji online.')); ?>
                </p>

                <div class="contact-phone">

                    <span>Telefon</span>

                    <a href="<?php echo esc_url('tel:' . preg_replace('/[^0-9+]/', '', get_theme_mod('atma_contact_phone', '+48 506 853 033')), array_merge(wp_allowed_protocols(), ['tel'])); ?>">
                        <?php echo esc_html(get_theme_mod('atma_contact_phone', '+48 506 853 033')); ?>
                    </a>

                </div>

                <a href="<?php echo esc_url(get_theme_mod('atma_contact_button_url', 'tel:+48506853033'), array_merge(wp_allowed_protocols(), ['tel'])); ?>" class="atma-btn">
                    <?php echo esc_html(get_theme_mod('atma_contact_button_text', 'Zadzwoń lub wyślij SMS')); ?>
                </a>

            </div>

        </div>

    </div>

</section>