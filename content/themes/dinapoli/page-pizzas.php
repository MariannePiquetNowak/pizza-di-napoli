<?php
/*
Template Name: Page du CPT Pizzas

Pour la définir, dans le BO, Pages > Page concernée (ici, Recettes) > Attributs de page > Modèle > le nom du template (ici: Page du CPT Pizzas)
*/
?>

<?php get_header(); ?>


        <!-- ======= MAIN CONTAIN STEP ======= -->

        <?php

            $args = [
                'post_type' => 'pizzas',
               // 'orderby' => 'title',
            ];

            $wp_query = new WP_Query($args);

            if ($wp_query->have_posts()): while ($wp_query->have_posts()): $wp_query->the_post();

               get_template_part('template-parts/posts/post', 'pizza');

            endwhile; endif;

        ?>


<?php get_footer(); ?>