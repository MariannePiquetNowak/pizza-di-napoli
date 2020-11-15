<?php get_header(); ?>


        <!-- ======= MAIN CONTAIN STEP ======= -->

    <section class="hours">
        <?php

            $args = [
                'post_type' => 'page',
                'name' => 'horaires',
            ];

            $wp_query = new WP_Query($args);

                if ($wp_query->have_posts()): while ($wp_query->have_posts()): $wp_query->the_post();

                    get_template_part('template-parts/posts/post', 'hours');

                endwhile; endif;

                wp_reset_postdata();


        ?>
    </section>

<?php get_footer(); ?>