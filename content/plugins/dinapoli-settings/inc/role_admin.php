<?php 

// Création des rôles administrateur 

// Source : @Link { https://codex.wordpress.org/fr:R%C3%B4les_et_Capacit%C3%A9s }

class AdminRole {
    public function addChief() {
        // Rôle du Chef (au cas où le responsable du restaurant est absent)
        add_role(
            'chef', 
            'Créer des pizzas pour Di Napoli',
            [
                'read'             => true,
                'upload_files'     => true,
                'edit_posts'       => true,
            ]
            );
    }

    public function addCapabilities()
    {
        $role = get_role('chef'); 
        $role->add_cap('edit_pizza'); // Il peut éditer des pizzas
        $role->add_cap('edit_pizza_taxo'); // Mais aussi ajouter et supprimer des ingrédients
        $role-add_cap('delete_pizza'); // Il peut supprimer ses pizza, mais pas celles déjà publiées
    }

    public function role_activate(){
        $this->addChief;
        $this->addCapabilities;
    }

    public function role_deactivate() // A la désactivation du plugin
    {
        $this->removeRole();
    }
}