<?php
/*
Plugin Name: Custom Plugin
Plugin URI: www.s 
agar.com
Description: This is our custom Plugin
Author: Sagar Parmar
Author URI: www.sagar.com
Text Domain: custom-plugin
Version: 1.0
*/
define("PLUGIN_DIR_PATH",plugin_dir_path(__FILE__));    //to fatch current directory path
define("PLUGIN_URl",plugins_url()); //url path
define("PLUGIN_VER","1.0");
//create ajax call 
include_once PLUGIN_DIR_PATH."/view/view.php";
wp_enqueue_script("custom_plugin_js",PLUGIN_URl."/custom_plugin/js/script.js",'',PLUGIN_VER);
add_action('wp_ajax_custom_plugin','prefix_ajax_custom_plugin');
function prefix_ajax_custom_plugin(){
    print_r(html_entity_decode($_REQUEST['description']));
    wp_die();
}

?>