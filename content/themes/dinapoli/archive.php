<?php 
/*
Affiche les archives des recettes 
Permet donc d'être reliée par types, ingrédients
*/ 
?>

<?php get_header(); ?>

<div class="container-article">

    <?php 

        $args = [
            'ppost_type' => 'pizzas',
        ];

        $wp_query = new WP_Query($args);

        if($wp_query->have_posts()): while($wp_query->have_posts()): $wp_query->the_post();

            get_template_part('template_parts/posts/post', 'archive');

        endwhile; endif;

        wp_reset_postdata();

    ?>
</div>

<?php get_footer(); ?>