<?php 

class Pizzas_Cpt
{
    public function __construct()
    {
        add_action('init', [$this, 'create_cpt_pizzas']);
        add_action('init', [$this, 'create_taxonomies']);
    }

    // =========== Création du CPT des Pizzas ============== \\ 

    // Cette fonction permet au responsable d'avoir un menu Pizza sur la sidebar du dashboard de WP
    // Il pourra facilement ajouter de nouvelles pizzas à son menu, à la même manière qu'un article classique

    // Source icones : @Link { https://developer.wordpress.org/resource/dashicons/ }
    public function create_cpt_pizzas()
    {
        $labels = [
            "name"                  => "Pizzas",
            "singular_name"         => "Pizza",
            "menu_name"             => "Pizzas",
            "name_admin_bar"        => "Pizza",
            'archives'              => 'Archives des pizzas',
            'attributes'            => 'Attributs des pizzas',
            'parent_item_colon'     => 'Element parent',
            'all_items'             => 'Toutes les pizzas',
            "add_new"               => "Ajouter une pizza",
            "add_new_item"          => "Ajouter une nouvelle pizza",
            "new_item"              => "Nouvelle pizza",
            "edit_item"             => "Editer la pizza",
            'update_item'           => "Mettre à jour la pizza",
            "view_item"             => "Voir la pizza", 
            "all_items"             => "Voir toutes les pizzas",
            "search_items"          => "Rechercher une pizza",
            "not_found"             => "Aucune pizza trouvée",
            "not_found_in_trash"    => "Aucune pizza trouvée dans la corbeille",
            "featured_media"        => "Image de la pizza",
            "set_featured_media"    => "Ajouter une image à la pizza",
            "remove_featured_image" => "Supprimer l'image de la pizza",
            "use_featured_media"    => "Utiliser l'image de la pizza",
            'insert_into_item'      => "Insérer dans la pizza",
            "uploaded_to_this_item" => "Téléverser dans la pizza",
            "items_list"            => "Liste des pizzas",
            "items_list_navigation" => "Liste des pizzas",
            "filter_items_list"     => "Filtrer la liste des pizzas"
        ];

        $args = [
            "labels"                => $labels,
            "description"           => "Pizzas du menu",
            "supports"              => [
                "title",
                "editor",
                "thumbnail",
                "custom-fields",
                "revision"
            ],
            "public"                => true, // Accéder à nos recettes sur le front
            "hierarchical"          => false,
            "menu_position"         => 5, // Au dessus de Articles
            "menu_icon"             => "dashicons-carrot",
            'has_archive'           => true, // Je veux que mes pizzas soient bien archivées
            'rewrite'               => [
                'slug'              => 'pizza',
                'with_front'        => true, 
            ],
            "capabilities"  => [
                'edit_post'          => 'edit_pizzas', 
                'read_post'          => 'edit_pizzas', 
                'delete_post'        => 'edit_pizzas',  
                'edit_posts'         => 'edit_pizzas', 
                'edit_others_posts'  => 'edit_pizzas', 
                'publish_posts'      => 'edit_pizzas',       
                'read_private_posts' => 'edit_pizzas', 
                'create_posts'       => 'edit_pizzas', 
            ],

            'show_in_ui'            => true, 
            'show_in_rest'          => true, 
            // 'rest_base'             => 'pizzas'
        
        ];

        register_post_type("pizza", $args);

    }

    // =========== Création des taxonomies ============== \\

    public function create_taxonomies()
    {
        // Taxonomie "ingrédients"
        $labels =  [ 
            'name'                          => 'Ingrédients',
            'singular_name'                 => 'Ingrédient',
            "menu_name"                     => "Ingrédients",
            'all_items'                     => 'Toutes les ingrédients',
            "add_new_item"                  => "Ajouter un nouvel ingrédient",
            "new_item_name"                 => "Nouvel ingrédient",
            "edit_item"                     => "Editer les ingrédients",
            'update_item'                   => "Mettre à jour les ingrédients",
            "view_item"                     => "Voir les ingrédients", 
            'separate_items_with_commas'    => "Séparer les ingrédients avec une virgule",
            "add_or_remove_items"           => "Ajouter ou supprimer un ingrédient",
            "choose_from_most_used"         => "Choisir parmis les ingrédients les plus utilisés",
            "popular_items"                 => "Ingrédients populaires",
            "all_items"                     => "Voir tous les ingrédients",
            "search_items"                  => "Rechercher un ingrédient",
            "not_found"                     => "Aucun ingrédient trouvé",
            "items_list"                    => "Liste des ingrédients",
        ];

        $args = [
            'labels'                => $labels,
            "hierarchical"          => false,
            "public"                => true, 
            'show_in_ui'            => true, 
            'show_in_rest'          => true, 
            'capabilities'          => [
                'manage_terms'  => 'edit_pizza_taxo',
                'edit_terms'    => 'edit_pizza_taxo',
                'delete_terms'  => 'edit_pizza_taxo',
                'assign_terms'  => 'edit_pizza_taxo',
            ],
        ];

        // nom de la taxo, lié au cpt, on lui donne nos arguments
        register_taxonomy('ingredient', 'pizzas', $args);

        // =============================================================== \\

        // Taxonomie "styles" pour les styles de pizzas
        $labels =  [ 
            'name'                          => 'Styles',
            'singular_name'                 => 'Style',
            "menu_name"                     => "Styles",
            'all_items'                     => 'Toutes les styles de pizzas',
            "add_new_item"                  => "Ajouter un nouveau style de pizza",
            "new_item_name"                 => "Nouveau style de pizza",
            "edit_item"                     => "Editer le style de la pizza",
            'update_item'                   => "Mettre à jour le style de la pizza",
            "view_item"                     => "Voir la pizza", 
            'separate_items_with_commas'    => "Séparer les styles de pizzas avec une virgule",
            "add_or_remove_items"           => "Ajouter ou supprimer un style de pizza",
            "choose_from_most_used"         => "Choisir parmis les styles de pizzas les plus utilisés",
            "popular_items"                 => "styles de pizzas populaires",
            "all_items"                     => "Voir tous les styles de pizzas",
            "search_items"                  => "Rechercher un style pizza",
            "not_found"                     => "Aucun style de pizza trouvé",
            "items_list"                    => "Liste des styles de pizzas",
        ];

        $args = [
            'labels' => $labels,
            'public' => true,
            'hierarchical' => true, 
            'show_in_ui'   => true, 
            'show_in_rest' => true,

        ];

        register_taxonomy('style', "pizzas", $args);
    }

    // Re-calcul des routes à l'activation et la désactivation du plugin 
    // Afin d'éviter d'aller enregistrer les permaliens à chaque nouveau post du cpt

    public function pizzas_activate()
    {
        $this->create_cpt_pizzas();
        $this->create_taxonomies();

        flush_rewrite_rules(); // Recalcul les routes
    }

    public function pizzas_desactivate()
    {
        
        flush_rewrite_rules();
    }
}
