<?php

namespace App\Features\Taxonomies;

use App\Features\PostTypes\GangPostType;

class GangTaxonomy{
    public static $slug = 'gang_taxonomy';
    public static function register(){
        $labels = [
            'name' => __('Type de gangs'),
            'singular_name' => __('Type de gang'),
          ];
          $args = [
            'labels' => $labels,
            'hierarchical'=>true,
            'show_ui'=>'true',
            'show_in_menu'=>true,
            'show_admin_column'=>true,
          ];
          register_taxonomy(self::$slug, [GangPostType::$slug],$args);
    }
}