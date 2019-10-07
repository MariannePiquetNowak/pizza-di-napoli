<?php

class Recipe_cpt
{
    public function __construct()
    {

    }

    public function create_cpt()
    {
        $labels = [
            'name'                  => 'Pizzas',
            'singular_name'         => 'Pizzas',
            'menu_name'             => 'Pizzas',
            'name_admin_bar'        => 'Pizzas',
            'archives'              => 'Archives des Pizzas',
            'attributes'            => 'Attributs des Pizzas',
            'parent_item_colon'     => 'Element parent',
            'all_items'             => 'Toutes les Pizzas',
            'add_new_item'          => 'Ajouter une nouvelle pizza',
            'add_new'               => 'Ajouter une nouvelle pizza',
            'new_item'              => 'Nouvelle pizza',
            'edit_item'             => 'Editer la pizza',
            'update_item'           => 'Mettre à jour la pizza',
            'view_item'             => 'Voir la pizza',
            'view_items'            => 'Voir les Pizzas',
            'search_items'          => 'Rechercher les Pizzas',
            'not_found'             => 'Aucune pizza trouvée',
            'not_found_in_trash'    => 'Aucune pizza trouvée dans la corbeille',
            'featured_image'        => 'Image de la pizza',
            'set_featured_image'    => 'Ajouter une image à la pizza',
            'remove_featured_image' => 'Supprimer l\'image de la pizza',
            'use_featured_image'    => 'Utiliser une image pour la pizza',
            'items_list'            => 'Liste des Pizzas',
            'items_list_navigation' => 'Liste des Pizzas',
            'filter_items_list'     => 'Filtrer la liste des Pizzas',
        ];

        $args = [
            'label'                 => 'Pizza',
            'labels'                => $labels,
            'description'           => 'Toutes les pizzas que fait Di Napoli',
            'supports'              => [
                'title',
                'editor',
                'author',
                'thumbnail',
                'excerpt',
                'custom-fields',
                'revisions',
            ],
            'rewrite'			    => ['slug' => 'series-tv'],
            'hierarchical'          => false,
            'public'                => true,
            'menu_position'         => 4,
            'menu_icon'             => 'dashicons-carrot',
            'has_archive'           => true,
            'show_in_rest'          => true,
            'capabilities' => array(
                'edit_post'          => 'edit_pizza',
                'read_post'          => 'edit_pizza',
                'delete_posts'       => 'edit_pizza',
                'edit_posts'         => 'edit_pizza',
                'edit_others_posts'  => 'edit_pizza',
                'publish_posts'      => 'edit_pizza',
                'read_private_posts' => 'edit_pizza',
                'create_posts'       => 'edit_pizza'
                )
        ];

        register_post_type('pizza', $args);
    }

    public function create_taxo()
    {

    }

    public function activation()
    {
        $this->create_cpt();
        $this->create_taxo();
        flush_rewrite_rules();
    }

    public function deactivation()
    {
        flush_rewrite_rules();
    }
}
