<?php
namespace App\Features\PostTypes;

class GangPostType{
    public static $slug= 'gang';
    public static function register(){
        register_post_type(self::$slug, [
            'labels' => [
                'name' => __('Gang'),
                'singular_name' => __('Gang'),
                'add_new' => __('Ajouter'),
                'add_new_item' => __('Ajouter un gang'),
                'edit_item' => __('Modifier le gang'),
                'new_item' => __('Nouvelle gang'),
                'view_item' => __('Voir le gang'),
                'view_items' => __('Voir les gangs'),
                'search_items' => __('Rechercher des gangs'),
                'not_found' => __('Pas de gang trouvés.'),
                'not_found_in_trash' =>('Pas de gangs dans la corbeille.'),
                'all_items' => __('Tout les gangs'),
                'archives' => __('Gangs archivés'),        
                'filter_items_list' => __('Filtre de gang'),
                'items_list_navigation' => __('Navigation de gang'),
                'items_list' =>__('Liste des gangs'),
                'item_published' => __('Gang publié.'),
                'item_published_privately' =>__('Gang publié en privé.'),
                'item_reverted_to_draft' =>__('Le gang est retournée au brouillon.'),
                'item_scheduled' => __('Gang planifié.'),
                'item_updated' =>__('Gang mis à jour.'), 
      
            ],
            'public'=>true,
            'has_archive'=> true,
            'rewrite'=>[
                'slug'=>'gang',
            ],
            'taxonomies'=>['category', 'post_tag'],
            'menu-icon'=>'dashicons-book',
            'supports'=>['title','editor','excerpt','thumbnail'],
        ]);
    }
}