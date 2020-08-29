<?php 
function myblog_files(){
    wp_enqueue_style('main_style', get_stylesheet_uri());
    wp_enqueue_style('font-awsome','//use.fontawesome.com/releases/v5.7.2/css/all.css');
    wp_enqueue_style('bootstrap','//stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css');
} 

add_action('wp_enqueue_scripts', 'myblog_files');