<?php 

/*
Plugin Name: Custom Post Type Pizzas
Description : Création d'un CPT pour rassembler les pizzas du menu
Version: 1.0.0
*/

// Source pour création de Custom Post Field : https://codex.wordpress.org/Function_Reference/register_post_type

// On empêche l'exécution du plugin en dehors du contexte
if (!defined('WPINC')) {die();}

// Inclusion des différentes classes nécessaire au plugin

// 1) mon CPT Pizzas
require plugin_dir_path(__FILE__) . 'inc/pizza_cpt.php';

// 2) La création des rôles pour accéder au dashboard
require plugin_dir_path(__FILE__) . 'inc/role.php';

// CPT Pizzas + TAXO 
$pizzas_cpt = new Pizzas_Cpt();

register_activation_hook(__FILE__, [$pizzas_cpt, 'pizzas_activate']);
register_deactivation_hook(__FILE__, [$pizzas_cpt, 'pizzas_desactivate']); 



// ROLES
// Source : https://codex.wordpress.org/fr:R%C3%B4les_et_Capacit%C3%A9s

$roleAdmin = new Role_Admin ();

register_activation_hook(__FILE__, [$roleAdmin, 'role_activate']);
register_deactivation_hook(__FILE__, [$roleAdmin, 'role_desactivate']); 
