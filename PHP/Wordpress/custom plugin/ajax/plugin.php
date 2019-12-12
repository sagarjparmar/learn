<?php
add_action('wp_ajax_custom_plugin','prefix_ajax_custom_plugin');
function prefix_ajax_custom_plugin(){
    print_r($_REQUEST);
    wp_die();
}
add_action('wp_ajax_add_author_details','add_author_detail_ajax');
function add_author_detail_ajax(){
    $data = json_encode($_REQUEST);
    echo $data->name;
    wp_die();
}
?>