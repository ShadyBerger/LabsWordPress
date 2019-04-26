<?php

namespace App\Features\Metaboxes;

use App\Features\PostTypes\ServicePostType;

class ServiceDetailsMetabox
{
    public static $slug = 'service_details_metabox';

    public static function add_meta_box()
    {
        $screen = [ServicePostType::$slug];
        add_meta_box(
            self::$slug,
            __("Détails du service"),
            [self::class, 'render'],
            $screen
        );
    }

    public static function render()
    {
        $data = get_post_meta(get_the_ID(),'key_selected_icon');
        $icon = data[0];
        view('metaboxes/service-detail', compact('icon'));
    }

    public static function save($post_id)
    {
        if (count($_POST) != 0) {
            $icon = $_POST['selected_icon'];
            update_post_metas($post_id, ['key_selected_icon' => $icon]);
        }
    }
}
