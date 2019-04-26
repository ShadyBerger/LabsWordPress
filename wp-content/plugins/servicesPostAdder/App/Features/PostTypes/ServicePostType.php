<?php
namespace App\Features\PostTypes;

class ServicePostType{
    public static $slug= 'service';
    public static function register(){
        register_post_type(self::$slug, [
            'labels' => [
                'name' => __('Services'),
                'singular_name' => __('Service'),
                'add_new' => __('Ajouter'),
                'add_new_item' => __('Ajouter un service'),
                'edit_item' => __('Modifier le service'),
                'new_item' => __('Nouvelle service'),
                'view_item' => __('Voir le service'),
                'view_items' => __('Voir les services'),
                'search_items' => __('Rechercher des services'),
                'not_found' => __('Pas de service trouvés.'),
                'not_found_in_trash' =>('Pas de services dans la corbeille.'),
                'all_items' => __('Tout les services'),
                'archives' => __('Services archivés'),        
                'filter_items_list' => __('Filtre de service'),
                'items_list_navigation' => __('Navigation de service'),
                'items_list' =>__('Liste des services'),
                'item_published' => __('Service publié.'),
                'item_published_privately' =>__('Service publié en privé.'),
                'item_reverted_to_draft' =>__('Le service est retournée au brouillon.'),
                'item_scheduled' => __('Service planifié.'),
                'item_updated' =>__('Service mis à jour.'), 
      
            ],
            'public'=>true,
            'has_archive'=> true,
            'rewrite'=>[
                'slug'=>'service',
            ],
            'taxonomies'=>['category', 'post_tag'],
            'menu-icon'=>'dashicons-book',
            'supports'=>['title','editor','excerpt','thumbnail'],
        ]);
    }
}
// add_action('init','register_serviceCard_post_type');