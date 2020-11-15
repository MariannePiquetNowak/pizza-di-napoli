<?php get_header(); ?>


        <!-- ======= MAIN CONTAIN STEP ======= -->

        <?php

            $args = [
                'category_name' => 'produits',
                'post_per_page' => -1,
                'order' => 'DESC',

            ];

            $wp_query = new WP_Query($args);

            if ($wp_query->have_posts()): while ($wp_query->have_posts()): $wp_query->the_post();

                get_template_part('template-parts/posts/post', 'products');

            endwhile; endif;

            wp_reset_postdata();

        ?>


<?php get_footer(); ?>