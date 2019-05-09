<?php

namespace App\Features\Metaboxes;

use App\Features\PostTypes\GangPostType;

class GangDetailsMetabox
{
    public static $slug = 'gang_details_metabox';

    public static function add_meta_box()
    {
        $screen = [GangPostType::$slug];
        add_meta_box(
            self::$slug,
            __("Détails du gang"),
            [self::class, 'render'],
            $screen
        );
    }

    public static function render()
    {
        $data = get_post_meta(get_the_ID(),'key_selected_icon');
        $icon = data[0];
        view('metaboxes/gang-detail', compact('icon'));
    }

    public static function save($post_id)
    {
        if (count($_POST) != 0) {
            $icon = $_POST['selected_icon'];
            update_post_metas($post_id, ['key_selected_icon' => $icon]);
        }
    }
}
