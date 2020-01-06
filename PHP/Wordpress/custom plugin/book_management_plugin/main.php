<?php

/**
 *   Plugin Name: Book Managment
 *   Plugin URI: www.google.com/sagarparmar
 *   Description: This is custom description plugin
 *   Author: Sagar Parmar
 *   Author URI: parmartechnology.com
 *   Version: 1.0
 */

/* CREATE CONSTANT PATH AND DIRECTORY URI FOR PLUGIN */
if (!defined("ABSPATH")) exit;
if (!defined("BM_PLUGIN_DIR_PATH")) {
    define("BM_PLUGIN_DIR_PATH", plugin_dir_path(__FILE__));
}
if (!defined("BM_PLUGIN_URI")) {
    define("BM_PLUGIN_URI", plugins_url() . "/book_management");
}

function bm_include_assets(){
    /* INCLUDE CSS */
    wp_enqueue_style("bootstrap","https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css");
    wp_enqueue_style("datatable",BM_PLUGIN_URI."/assets/css/jquery.dataTables.min.css");
    wp_enqueue_style("notifybar",BM_PLUGIN_URI."/assets/css/jquery.notifyBar.css");
    //wp_enqueue_style( "datatablestyle",BM_PLUGIN_URI."/assets/css/jquery.dataTablesStyle.min.css"); 
    wp_enqueue_style("bm_custom_style",BM_PLUGIN_URI."/assets/css/style.css");

    /* INCLUDE JS */
    wp_enqueue_script("jquery");
    wp_enqueue_script("bootstrap.min.js",BM_PLUGIN_URI."/assets/js/bootstrap.min.js","",true);
    wp_enqueue_script("jquery.dataTables.min.js",BM_PLUGIN_URI."/assets/js/jquery.dataTables.min.js","",true);
    wp_enqueue_script("jquery.validate.min.js",BM_PLUGIN_URI."/assets/js/jquery.validate.min.js","",true);
    wp_enqueue_script("jquery.notifyBar.js",BM_PLUGIN_URI."/assets/js/jquery.notifyBar.js","",true);
    wp_enqueue_script("script.js",BM_PLUGIN_URI."/assets/js/script.js","",true);
    
    /* SET AJAX URL */
    wp_localize_script( "script.js","bm_ajax_uri",admin_url("admin-ajax.php"));
}
/* SET HOOK FOR INCLUDE ASSETS */
add_action("init","bm_include_assets");

/* FUNCTION FOR CREATE MENU */
function bm_set_menu(){
    /* MAIN MENU */
    add_menu_page( "My_Book","My Book","manage_options","book-list","bm_view_book_list","dashicons-book-alt",30);

    /* SUBMENUS */
    add_submenu_page("book-list","Book List","Book List","manage_options","book-list","bm_view_book_list");
    add_submenu_page("book-list","Add New Book","Add New Book","manage_options","add-new-book","bm_add_new_book");
    add_submenu_page("book-list","","","manage_options","edit-book","bm_edit_book");
}

/* CALL CREATE MENU FUNCTION IN HOOK */
add_action("admin_menu","bm_set_menu");

/* CALLABLE FUNCTIONS FOR MENU PAGES */
function bm_edit_book(){
    include_once BM_PLUGIN_DIR_PATH."/view/edit-book.php";
}
function bm_view_book_list(){
    include_once BM_PLUGIN_DIR_PATH."/view/view_book_list.php";
}
function bm_add_new_book(){
    include_once BM_PLUGIN_DIR_PATH."/view/add_book.php";
}

function my_book_table(){
    global $wpdb;
    $table_name = $wpdb->prefix."my_books";
}

function generate_my_book_table(){
    global $wpdb;
    $table_name = $wpdb->prefix."bm_book";
    require_once ABSPATH."wp-admin/includes/upgrade.php";
    $sql = "CREATE TABLE `custom_plugin`.`$table_name` ( `id` INT NOT NULL , `name` VARCHAR(255) NULL , `author` VARCHAR(255) NULL , `about` TEXT NULL , `book_image` TEXT NULL , `created_at` TIMESTAMP NULL , PRIMARY KEY (`id`)) ENGINE = MyISAM;";
    dbDelta($sql);
}
register_activation_hook( __FILE__,"generate_my_book_table");

function remove_bm_tables(){
    global $wpdb;
    $table_name = $wpdb->prefix."bm_book";
    $wpdb->query("DROP TABLE IF EXISTS $table_name");
}
register_deactivation_hook( __FILE__,"remove_bm_tables");
//register_uninstall_hook(__FILE__,"remove_bm_tables");

add_action("wp_ajax_mybooklibrary","my_book_ajax_handler");
function my_book_ajax_handler(){
    global $wpdb;
    $table_name = $wpdb->prefix."bm_book";
    if($_REQUEST['param']=="save_book"){
        $wpdb->insert(
            $table_name,
            array(
                "name" => $_REQUEST['name'],
                "author" => $_REQUEST['author'],
                "about"=>$_REQUEST['about'],
                "book_image"=>$_REQUEST['image-name'] 
            )
        );
        echo json_encode(array('status'=>1,'message'=>'Book created sccessfully.'));
        
    }
    else if($_REQUEST['param']=="update_book"){
        $wpdb->update(
            $table_name,
            array(
                "name" => $_REQUEST['name'],
                "author" => $_REQUEST['author'],
                "about"=>$_REQUEST['about'],
                "book_image"=>$_REQUEST['image-name'] 
            ),
            array(
                "id"=>$_REQUEST['book_id']
            )
        );
        echo json_encode(array('status'=>1,'message'=>'Book updated sccessfully.'));
    }else if($_REQUEST['param']=="delete_book"){
        $wpdb->delete($table_name,array(
            "id" => $_REQUEST['id']
        ));
        echo json_encode(array('status'=>1,'message'=>'Book deleted sccessfully.'));
    }
    wp_die();
}
?>