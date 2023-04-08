<?php
function themeStyle(){
    wp_enqueue_style('bootstrap', get_template_directory_uri().'/assets/css/bootstrap.min.css');
    wp_enqueue_style('bootstrap', get_template_directory_uri().'/style.css');
    wp_enqueue_style('style', get_template_directory_uri().'/style.css');
    
}

function themeScript(){
    wp_enqueue_script('script', get_template_directory_uri().'assets/js/bootstrap.min.js');
    wp_enqueue_script('script', get_template_directory_uri().'assets/js/main.js');

}

add_action('wp_enqueue_scripts', 'themeStyle'); 
add_action('wp_enqueue_scripts', 'themeScript'); 

?>