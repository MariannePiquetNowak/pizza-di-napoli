<?php get_header(); ?>

        <!-- ======= MAIN CONTAIN STEP ======= -->

            <?php

                $args = [
                    "category_name" => 'news',
                    'posts_per_page' => -1,
                    'order' => 'ASC',
                ];

                $wp_query = new WP_Query($args);

                if ($wp_query->have_posts()): while ($wp_query->have_posts()): $wp_query->the_post();

                    get_template_part('template-parts/posts/post', 'excerpt');

                endwhile; endif;

                wp_reset_postdata();

            ?>



<?php get_footer(); ?><s