<?php

/**
 * Plugin Name:     Customer Management
 * Plugin URI:      https://github.com/luispaiva/customer-management.git
 * Description:     Plugin desenvolvido para gerenciar clientes no WordPress.
 * Author:          Luis Fernando de Paiva
 * Author URI:      https://luispaiva.com.br
 * Text Domain:     customer_management
 * Domain Path:     /languages
 * Version:         0.1.0
 * License:         GPLv2 or later
 *
 * @package         Customer_Management
 */

if (!defined("ABSPATH")) {
    exit();
}

if (file_exists(dirname(__FILE__) . "/vendor/autoload.php")) {
    require_once(dirname(__FILE__) . "/vendor/autoload.php");
}

if (class_exists("Source\\Init")) {
    Source\Init::get_instance();
}
