<?php

/*
Plugin Name: Custom Post Type Di Napoli 
Description: réglages pour le theme du site Pizza Di Napoli
Author: Marianne Piquet-Nowak
Version: 1.0.2
*/

// Source : @Link { https://codex.wordpress.org/Function_Reference/register_post_type }

// ======== Sécurisation du plugin ======== \\

// Empêche l'éxécution du plugin en dehors du contexte
if (!defined('WPINC')) 
    { 
        die();
    }

// ======== Classes nécessaires au plugin ======== \\

// CPT Pizza
require plugin_dir_path(__FILE__) . 'inc/pizza_cpt.php';

// Rôles administrateurs
require plugin_dir_path(__FILE__) . 'inc/role_admin.php';

// Rest API (Pour une V3 du site)
require plugin_dir_path(__FILE__) . 'inc/api_rest.php';