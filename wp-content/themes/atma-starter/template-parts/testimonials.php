<?php
$name   = get_post_meta(get_the_ID(),'client_name',true);
$city   = get_post_meta(get_the_ID(),'client_city',true);
$rating = get_post_meta(get_the_ID(),'client_rating',true);
?>

<section class="atma-testimonials" id="opinie">

    <div class="atma-container">

        <div class="testimonials-heading">
            <span class="testimonials-kicker">OPINIE KLIENTÓW</span>

            <h2>Co mówią osoby po sesjach?</h2>

            <p>
                Każda historia jest inna, ale wszystkie łączy jedno —
                większy spokój, lekkość i głębszy kontakt ze sobą.
            </p>
        </div>

        <div class="testimonials-grid">

            <?php

            $opinie = new WP_Query([
                'post_type'      => 'opinia',
                'posts_per_page' => 3,
            ]);

            if ($opinie->have_posts()) :

                while ($opinie->have_posts()) :
                    $opinie->the_post();

                    $name   = get_post_meta(get_the_ID(),'client_name',true);
                    $city   = get_post_meta(get_the_ID(),'client_city',true);
                    $rating = intval(get_post_meta(get_the_ID(),'client_rating',true));
            ?>

                <article class="testimonial-card">

                    <div class="testimonial-stars">
                        <?php echo str_repeat('★', $rating); ?>
                    </div>

                    <div class="testimonial-text">
                        <?php the_content(); ?>
                    </div>

                    <div class="testimonial-footer">
                        <div class="testimonial-author">
                            <?php echo esc_html($name); ?>
                        </div>

                        <div class="testimonial-city">
                            <?php echo esc_html($city); ?>
                        </div>
                    </div>

                </article>

            <?php
                endwhile;
                wp_reset_postdata();

            endif;
            ?>

        </div>

    </div>

</section>