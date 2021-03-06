<?php
use App\Http\Controllers\MailController;

/**
 * Plugin Name:     ServicesPostAdder
 * Plugin URI:      Labs
 * Description:     postType serviceCard helper
 * Author:          Shady
 * Author URI:      YOUR SITE HERE
 * Text Domain:     servicesPostAdder
 * Domain Path:     /languages
 * Version:         0.1.0
 *
 * @package         ServicesPostAdder
 */

// Your code starts here.

require_once('autoload.php');
require_once('bootstrap.php');

add_action("admin_post_emailLabs", [MailController::class, "send"]);

add_action("admin_post_nopriv_emailLabs", [MailController::class, "send"]);