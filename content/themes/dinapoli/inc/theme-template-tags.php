<?php 

// Récupération des informations supplémentaires aux recettes de pizza ACF 
function get_first_meta($post_id, $meta_name)
{
    return get_post_meta($post_id, $meta_name, true);
}

// ================================================================================ \\

// Récupère le prix d'une pizza
function get_pizza_price($post_id)
{
    return get_first_meta($post_id, 'prix');
}

// ================================================================================ \\

// récupère les ingrédients d'une pizza
function get_pizza_ingredients($post_id)
{
    $html = "";

    // Récupère la taxonomie "ingrédient" => dans /plugins/pizza_cpt.php/
    $array_ingredients = wp_get_post_terms($post_id, 'ingredient');

    foreach ($array_ingredients as $wp_term)
    {
        $html .= '<a href="'.get_term_link($wp_term).'">';
        $html .= ucfirst($wp_term->name);
        $html .= '</a>';
    }

    return $html;
}

// ================================================================================ \\

// Recupère les styles de pizza (carnivore, classique, végé etc.)
function get_pizza_styles($post_id)
{
    $html = "";

    $array_styles = wp_get_post_terms($post_id, 'style');

    foreach ($array_styles as $wp_term)
    {
        $html .= '<a href="'.get_term_link($wp_term).'">';
        $html .= ucfirst($wp_term->name);
        $html .= '</a>';
    }

    return $html;
}

// ================================================================================ \\

// Affiche la liste des catégories parents (ex : Plats, Desserts)
function get_type_list()
{

    $html = "";

    $list = get_terms([
        'taxonomy'      => 'type',
        'parent'        => 0,
        'hide_empty'    => false // On souhaite tous les styles parents, même ceux non associés
    ]);

    return $html;
}

