<?php

/*
Plugin Name: CPT Di Napoli 
Description: Custom Post Type pour le theme du site Pizza Di Napoli
Author: Marianne Piquet-Nowak
Version: 1.0.2
*/

// Source : @Link { https://codex.wordpress.org/Function_Reference/register_post_type }

// ======== Sécurisation du plugin ======== \\

// Empêche l'éxécution du plugin en dehors du contexte
if (!defined('WPINC')) {
    die();
    }

// ======== Classes nécessaires au plugin ======== \\

// CPT Pizza
require plugin_dir_path(__FILE__) . 'inc/pizzas_cpt.php';

// Rôles administrateurs
require plugin_dir_path(__FILE__) . 'inc/role_admin.php';

// Rest API (Pour une V3 du site)
// require plugin_dir_path(__FILE__) . 'inc/api_rest.php';


// Import des CPT + Taxonomies

$pizzas_cpt = new Pizzas_Cpt();

register_activation_hook(__FILE__, [$pizzas_cpt, 'pizzas_activate']);
register_deactivation_hook(__FILE__, [$pizzas_cpt, 'pizzas_desactivate']); 

// Import des rôles admin
$pizza_role = new Role_Admin();

register_activation_hook(__FILE__, [$pizza_role, "role_activate"]);
register_deactivation_hook(__FILE__, [$pizza_role, "role_desactivate"]);




