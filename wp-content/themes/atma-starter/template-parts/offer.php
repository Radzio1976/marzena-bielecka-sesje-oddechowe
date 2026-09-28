<section class="atma-offer" id="sesje">

    <div class="atma-container">

        <div class="offer-heading">
            <span class="offer-kicker">
                INDYWIDUALNE SESJE ODDECHOWE
            </span>

            <h2>Przestrzeń, w której ciało może naprawdę odetchnąć</h2>

            <p>
                Każda sesja jest indywidualnym spotkaniem, podczas którego
                poprzez świadomy oddech, uważność i delikatną pracę z ciałem
                odnajdujesz więcej spokoju, lekkości i kontaktu ze sobą.
            </p>
        </div>

        <div class="offer-image">

            <?php
            $image_id = get_theme_mod('atma_offer_image');

            if ($image_id) :

                echo wp_get_attachment_image(
                    $image_id,
                    'large',
                    false,
                    ['class' => 'offer-img']
                );

            else :
            ?>

                <div class="offer-placeholder">
                    Zdjęcie sesji oddechowej
                </div>

            <?php endif; ?>

        </div>

        <div class="offer-content">

            <div class="offer-card">
                <h3>Sesja indywidualna</h3>

                <p>
                    To spokojna, kameralna przestrzeń, w której możesz
                    zatrzymać się, rozluźnić napięcia i odzyskać kontakt
                    z własnym oddechem.
                </p>
            </div>

            <div class="offer-card">
                <h3>Dla kogo?</h3>

                <p>
                    Dla osób odczuwających stres, przewlekłe napięcie,
                    zmęczenie emocjonalne lub pragnących głębiej poznać siebie
                    poprzez pracę z oddechem.
                </p>
            </div>

            <a href="#kontakt" class="atma-btn">
                Umów pierwszą sesję
            </a>

        </div>

    </div>

</section>