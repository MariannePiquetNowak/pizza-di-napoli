<?php 

class Pizzas_Cpt
{
    public function __construct() 
    {
        add_action('init', [$this, 'create_cpt_pizzas']);
        add_action('init', [$this, 'create_taxonomies']);


        
    }

    // =========== CREATION DU CUSTOM POST TYPE RECETTES ============== \\

    public function create_cpt_pizzas() 
    {
        // Importe icon personnalisée SVG 
        $icon = file_get_contents( plugin_dir_path( __FILE__ ) . '/assets/pizza.svg' );

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
            "description"           => "Liste des Pizzas du Menu",
            "supports"              => [
                "title",
                "editor",
                "thumbnail",
                "excerpt",
                "custom-fields",
                "revision", 
            ],
            "public"                => true, // Accéder à nos pizzas sur le front
            "hierarchical"          => false,
            "menu_position"         => 5, // en dessous de Articles
            "menu_icon"             => 'data:image/svg+xml;base64,' . base64_encode($icon),
            'has_archive'           => true, // Je veux que mes pizzas soient bien archivées
            'rewrite'               => [
                'slug'              => 'pizza',
                'with_front'        => true, 
            ],
          
                
            'show_in_ui'            => true, 
            'show_in_rest'          => true, /* /!\ A mettre en commentaire car impossible d'éditer les taxo dans le BO sinon */
            // 'rest_base'             => 'pizzas'
        ];


        register_post_type("pizzas", $args);

    }

    // =========== CREATION DES TAXONOMIES ============== \\

    public function create_taxonomies() 
    {
        // Création d'une taxonomie ingrédients
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
            
        ];

        // nom de la taxo, lié au cpt, on lui donne nos arguments
        register_taxonomy('ingredient', 'pizzas', $args);

    // =============================================================== \\

        // Création d'une taxo Type pour relié les pizzas par catégories de pizzas
        $labels =  [ 
            'name'                          => 'Styles',
            'singular_name'                 => 'Style',
            "menu_name"                     => "Styles",
            'all_items'                     => 'Toutes les styles de recettes',
            "add_new_item"                  => "Ajouter un nouveau style de recette",
            "new_item_name"                 => "Nouveau style de recette",
            "edit_item"                     => "Editer le style de la recette",
            'update_item'                   => "Mettre à jour le style de la recette",
            "view_item"                     => "Voir la recette", 
            'separate_items_with_commas'    => "Séparer les styles de recettes avec une virgule",
            "add_or_remove_items"           => "Ajouter ou supprimer un style de recette",
            "choose_from_most_used"         => "Choisir parmis les styles de recettes les plus utilisés",
            "popular_items"                 => "styles de recettes populaires",
            "all_items"                     => "Voir tous les styles de recettes",
            "search_items"                  => "Rechercher un style recette",
            "not_found"                     => "Aucun style de recette trouvé",
            "items_list"                    => "Liste des styles de recettes",
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

    // re-calcul des routes à l'activation et la désactivation du plugin 
    // Pour éviter d'aller enregistrer les permaliens à chaque nouveau post du cpt
    public function pizzas_activate()
    {
        // Exécute la méthode du plugin qui permet de décaler le cpt à WP
        $this->create_cpt_pizzas();
        // pareil pour la taxonomie
        $this->create_taxonomies();
        // Exécute la fonction native de WP qui permet de recalculer les routes et les droits
        flush_rewrite_rules();
    }

    public function pizzas_desactivate()
    {
        // On recalcule juste les routes et les droits (on ne lui déclare plus le cpt)
        flush_rewrite_rules();
    }
}