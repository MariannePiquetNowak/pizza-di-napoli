<?php get_header(); ?>



<!-- ======= CONTACT FORM STEP ======= -->
<section class="container__contact contact" id="contact">
<?php

            $args = [
                'post_type' => 'page',
                'name' => 'contact',
            ];

            $wp_query = new WP_Query($args);

            if ($wp_query->have_posts()): while ($wp_query->have_posts()): $wp_query->the_post();

               the_content(); // Créer le shotcode contact

            endwhile; endif;

            wp_reset_postdata();
?>
</section>

<?php get_footer(); ?>