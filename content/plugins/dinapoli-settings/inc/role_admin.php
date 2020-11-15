<?php 

// Création des rôles administrateur 

// Source : @Link { https://codex.wordpress.org/fr:R%C3%B4les_et_Capacit%C3%A9s }

class Role_Admin 
{
    public function add_chief() {
        // Rôle du Chef (au cas où le responsable du restaurant est absent)
        add_role(
            'chef', 
            'Chef Remplaçant',
            [
                'read'             => true,
                'upload_files'     => true,
                'edit_posts'       => true,
            ]
        );
    }

    public function add_capabilities()
    {
        $role = get_role('chef'); 
        $role->add_cap('edit_pizza'); // Il peut éditer des pizzas
        $role->add_cap('edit_pizza_taxo'); // Mais aussi ajouter et supprimer des ingrédients
        $role->add_cap('delete_pizza'); // Il peut supprimer ses pizza, mais pas celles déjà publiées
    }

    public function removeRole()
    {
        remove_role('chef');
    }

    public function role_activate(){
        $this->add_chief();
        $this->add_capabilities();
    }

    public function role_desactivate() // A la désactivation du plugin
    {
        $this->removeRole();
    }
}