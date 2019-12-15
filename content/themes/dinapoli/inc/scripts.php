<?php

if (!function_exists('dinapoli_scripts')) :

    function dinapoli_scripts() {


        wp_enqueue_style(
            'dinapoli-style',
            get_theme_file_uri('public/css/style.css'),
            [],
            '1.0.1'
        );

        wp_enqueue_script(
            'dinapoli-app',
            get_theme_file_uri('public/js/app.js'),
            [],
            '0.0.1',
            true
        );

    }

endif;

add_action('wp_enqueue_scripts', 'dinapoli_scripts');