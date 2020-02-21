<?php
/**
 * Plugin Name: Xander Core
 * Plugin URI: http://radontheme.com/xander
 * Description: Xander is a modern & stylish Tea Shop WordPress Theme that you definitely need for impressive online presentation of your colorful tea store, coffee shop, cafe, bar business services, restaurant, bakery, etc.
 * Version: 1.0.0
 * Author: radontheme
 * Author URI: http://radontheme.com/
 * Text Domain: xander
 * License: GPL/GNU.
 *Copyright 2017  Creative (email : radontheme@gmail.com)
*This program is free software; you can redistribute it and/or modify it under the terms of the GNU General Public License, version 2, as published by the Free Software Foundation.This program is distributed in the hope that it will be useful,but WITHOUT ANY WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the GNU General Public License for more details.You should have received a copy of the GNU General Public License along with this program; if not, write to the Free Software Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA  02110-1301  USA
*/

//define

define("PLUGIN_DIR_PATH", plugin_dir_path(__FILE__));
define("PLUGIN_URL", plugins_url());

include_once PLUGIN_DIR_PATH."inc/menu-item-custom-fields.php";
include_once PLUGIN_DIR_PATH."inc/xander_custom_post.php";
include_once PLUGIN_DIR_PATH."inc/xander_resizer.php";
include_once PLUGIN_DIR_PATH."inc/xander-about-widget.php";
include_once PLUGIN_DIR_PATH."inc/xander_recent_post_widget.php";
include_once PLUGIN_DIR_PATH."inc/xander_recent_photo.php";

function xander_theme_filter__extensions($extensions) {

    $extensions[dirname(__FILE__) . '/extensions'] =  plugin_dir_url( __FILE__ ) . 'extensions';  

    return $extensions;

}
add_filter('fw_extensions_locations', 'xander_theme_filter__extensions');


