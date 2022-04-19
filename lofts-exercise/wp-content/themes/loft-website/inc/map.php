<?php



//custom post
function my_first_post_type(){
    register_post_type( 'location',

    array(
        'labels' => array(
            'name' => __( 'Location' ),
            'singular_name' => __( 'Location' ),
            'description' => '',
            'public' => true,
            'publicly_queryable' => true,
            'show_ui' => true,
            'delete_with_user' => false,
            'show_in_rest' => true,
            'rest_base' => '',
            'rest_controller_class' => 'WP_REST_Posts_Controller',
            'has_archive' => false,
            'show_in_menu' => true,
            'show_in_nav_menus' => true,
            'exclude_from_search' => false,
            'capability_type' => 'post',
            'map_meta_cap' => true,
            'hierarchical' => false,
            'rewrite' => array( 'slug' => 'location', 'with_front' => true ),
            'query_var' => true,
            'supports' => array( 'title' ),
        ),
        'public' => true,
        'has_archive' => true,
        'rewrite' => array('slug' => 'location'),
        'show_in_rest' => true,

    )
);
}
add_action('init','my_first_post_type');

function my_first_taxonomy(){
    $args= array(
        'labels' => array(
            'name' => 'Places',
            'singular_name' =>'Place'
        ),
        'hierarchical' => true,//false then it get tagss
        'public' => true,
    );
    register_taxonomy('places', array('location'), $args);
}
add_action('init','my_first_taxonomy');
?>
<?php

function my_acf_init() {
	
	acf_update_setting('google_api_key', 'AIzaSyA157quXbUlHHgm4wJJxzD49MivKgPSil8');
}

add_action('acf/init', 'my_acf_init');
?>