<?php
function insert_jquery()
{
    wp_enqueue_script('jquery', get_theme_file_uri('/js/jquery-3.5.1.min.js'), null, '3.5.1', false);
}
add_filter('wp_enqueue_scripts', 'insert_jquery', 1);

function maps()
{
    wp_enqueue_script('js-map', get_theme_file_uri('/JS/map.js'), null, 1.0, true);
   
}
add_action('wp_enqueue_scripts', 'maps',100);
?>