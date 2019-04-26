<?php

use App\Features\PostTypes\ServicePostType as ServicePostType;

use App\Features\Taxonomies\ServiceTaxonomy;

use App\Features\Metaboxes\ServiceDetailsMetabox;

use App\Features\Pages\Page;

use App\Http\Controllers\MailController;

use App\Setup;

use App\Database\Database;


add_action('init',[ServicePostType::class, 'register']);

add_action('init', [ServiceTaxonomy::class, 'register']); 

add_action('add_meta_boxes_service', [ServiceDetailsMetabox::class, 'add_meta_box']);

add_action('save_post_' . ServicePostType::$slug, [ServiceDetailsMetabox::class, 'save']);

add_action('admin_menu', [Page::class, 'init']);

add_action('admin_action_send-mail', [MailController::class, 'send']);

add_action('admin_init', [Setup::class, 'start_session']); 

register_activation_hook(__DIR__ . '/ratatouille.php', [Database::class, 'init']); 

add_action('admin_enqueue_scripts', [Setup::class, 'enqueue_scripts']); 
