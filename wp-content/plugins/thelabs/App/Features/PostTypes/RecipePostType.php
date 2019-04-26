<?php
/*
 * Plugin Name: Ratatouille
 * Author: Plugin Author
 * Text Domain: recipe
 * Domain Path: /languages
 */

namespace App\Features\PostTypes;

class RecipePostType
{
  // On créer une variable qu'on appel 'slug' on la rend public et static pour pouvoir s'en servir dans les functions de la class RecipePostType et en dehors.
  public static $slug = 'recipe';
  public static function register()
  {
    // info sur la fonction https://developer.wordpress.org/reference/functions/register_post_type/
    register_post_type(
      // on remplace le slug qui était écrit en dur 'recipe' par la variable, on fait cela car on va fair appel à notre function register_post_type par son indentifiant à plusieurs endroits, si jamais on décide de changer l'identifiant qui est 'recipe' par 'carotte' bah il faudra le changer a de nombreux endroit si on laisse cela en dur c'est pour cela qu'on à choisis de créer une variable,on change la valeur de la variable est tous les endroits ou son identifiant est utilisé sera mis à jours.
      self::$slug, 
      [
        
        'labels' => [
          'name' => __('Service'),
          'singular_name' => __('Service'),
          'add_new' => __('Ajouter'),
          'add_new_item' => __('Ajouter un service'),
          'edit_item' => __('Modifier le service'),
          'new_item' => __('Nouveau service'),
          'view_item' => __('Voir le service'),
          'view_items' => __('Voir les services'),
          'search_items' => __('Rechercher des services'),
          'not_found' => __('Pas de services trouvées.'),
          'not_found_in_trash' =>('Pas de services dans la corbeille.'),
          'all_items' => __('Tous les services'),
          'archives' => __('Services archivées'),        
          'filter_items_list' => __('Filtre de service'),
          'items_list_navigation' => __('Navigation de service'),
          'items_list' =>__('Liste services'),
          'item_published' => __('Service publiée.'),
          'item_published_privately' =>__('Service publiée en privé.'),
          'item_reverted_to_draft' =>__('La service est retournée au brouillon.'),
          'item_scheduled' => __('Service planifiée.'),
          'item_updated' =>__('Service mise à jours.'), 
          
        ],
        'public' => true,
        'has_archive' => true,
        'rewrite' => [
          'slug' => 'recette',
        ],
        // On active la possibilité d'assigner une catégorie à notre Recette grâce à la taxonomie 'category', rajoutez là puis allez voir,une fois fait essayez de rajouter un second arguement dans le tableau 'post_tag' et voyez ce que cela fait.
        'taxonomies' => ['category','post_tag'],
        'menu_icon' => 'dashicons-book',
        // On choisis dans supports ce qu'on veut rendre accessible dans notre post-type, un titre,un textarea,un extrait et la possibilité de rajouter une image mise en avant.
        'supports' =>  ['title', 'editor', 'excerpt', 'thumbnail'],
      ]
    );

  }
}