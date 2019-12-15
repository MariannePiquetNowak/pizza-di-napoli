<a href="<?= home_url(); ?>" class="header__home">Accueil</a>
    <input class="menu-btn" type="checkbox" id="menu-btn" />
    <label class="menu-icon" for="menu-btn"><span class="navicon"></span></label>
    <!-- <ul class="menu">
        <li><a href="#">A propos</a></li>
        <li><a href="#">Nos produits</a></li>
        <li><a href="#">Nos pizzas</a></li>
        <li><a href="#">Horaires</a></li>
        <li><a href="#">Contact</a></li>
    </ul> -->


<?php

$menu = wp_nav_menu([
            'container' => 'ul',
            'menu_class' => false,
            'container_class' => 'header',
            'menu_class' => 'menu',
            'theme_location' => 'navbar'
        ]);

// Comme mon menu est créé par défaut avec de ul/li
// je les supprime via PHP (en mode violent)
$menu = strip_tags($menu, '<a><div>');
// J'ai besoin d'avoir une classe sur mes balises <a>
// Comme WP ne me permet pas de le faire (normalement on les ajoute sur les <li>)
// Je le fait en mode filou grace à PHP
// $menu = str_replace('ul', 'ul class="menu"', $menu);
echo $menu;