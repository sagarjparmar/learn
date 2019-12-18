<?php
/**
 * Plugin Name: special product categories
 * Plugin URI: www.website.com
 * Description: plugin for special product categories 
 * Author:  Sagar Parmar
 * Author URI: www.author.com
 * Version: 1.0
 */
define("PLUGIN_DIR_PATH",plugin_dir_path(__FILE__));    //to fatch current directory path
define("PLUGIN_URl",plugins_url()); //url path
define("PLUGIN_VER","1.0");

add_action('admin_menu','create_special_categories_menu');
function create_special_categories_menu(){
    add_submenu_page('edit.php?post_type=product','special categories','special categories','edit_products','special_categories','callback_special_categories',9999);
}
function callback_special_categories()
{   
    include PLUGIN_DIR_PATH."/templates/special_categories_view.php";
}

/* 
* Referance:
* create menu for product
* https://businessbloomer.com/woocommerce-add-new-subpage-wordpress-admin-dashboard/
*
*/
?>

