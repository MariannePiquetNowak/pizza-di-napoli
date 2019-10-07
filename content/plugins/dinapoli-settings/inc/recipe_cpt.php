<?php

class Recipe_cpt
{
    public function __construct()
    {

    }

    public function create_cpt()
    {
        $labels = [
            'name'                  => 'Recettes',
            'singular_name'         => 'Recette',
            'menu_name'             => 'Recettes',
            'name_admin_bar'        => 'Recettes',
            'archives'              => 'Archives des recettes',
            'attributes'            => 'Attributs des recettes',
            'parent_item_colon'     => 'Element parent',
            'all_items'             => 'Toutes les recettes',
            'add_new_item'          => 'Ajouter une nouvelle recette',
            'add_new'               => 'Ajouter une nouvelle recette',
            'new_item'              => 'Nouvelle recette',
            'edit_item'             => 'Editer la recette',
            'update_item'           => 'Mettre à jour la recette',
            'view_item'             => 'Voir la recette',
            'view_items'            => 'Voir les recettes',
            'search_items'          => 'Rechercher les recettes',
            'not_found'             => 'Aucune recette trouvée',
            'not_found_in_trash'    => 'Aucune recette trouvée dans la corbeille',
            'featured_image'        => 'Image de la recette',
            'set_featured_image'    => 'Ajouter une image à la recette',
            'remove_featured_image' => 'Supprimer l\'image de la recette',
            'use_featured_image'    => 'Utiliser une image pour la recette',
            'insert_into_item'      => 'Inserer dans la recette',
            'uploaded_to_this_item' => 'Televerser dans la recette',
            'items_list'            => 'Liste des recettes',
            'items_list_navigation' => 'Liste des recettes',
            'filter_items_list'     => 'Filtrer la liste des recettes',
        ];

        $args = [
            'label'                 => 'Recette',
            'labels'                => $labels,
            'description'           =>
        ];
    }

    public function create_taxo()
    {

    }
}
