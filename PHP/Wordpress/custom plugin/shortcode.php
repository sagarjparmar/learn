<?php
add_shortcode("simple_shortcode","show_simple_shortcode");
function show_simple_shortcode(){
    echo "<h1>This is simple shortcode</h1>";
}
add_shortcode("shortcode_with_parameter","param_shortcode");
function param_shortcode($param){
    extract(shortcode_atts(
        array(
            "name"=>"sagar",
            "email"=>"sagar@mail.com"
        ),$param
     ));
     echo "<h1> Name: $name And Email: $email";
}
add_shortcode("tag_based_shortcode","tagbased_shortcode_function");
function tagbased_shortcode_function($param,$content){
    echo "<h1>$content</h1>";
}
add_shortcode("multi_shortcode_one","multi_shortcode_function");
add_shortcode("multi_shortcode_two","multi_shortcode_function");
function multi_shortcode_function($param,$content,$tag)
{
    extract (
        shortcode_atts(
            array(
                "name"=>"babu",
                "phone"=>"123456789"
            ),$param
        )
    );
    if($tag == "multi_shortcode_one"){
        echo "this is shortcode 1 and its detail is name: $name and phonenumber : $phone";
    }
    if($tag == "multi_shortcode_two"){
        echo "<span>$content this is tagbased shortcode name: $name and  phone: $phone </span>";  
    }
}
?>