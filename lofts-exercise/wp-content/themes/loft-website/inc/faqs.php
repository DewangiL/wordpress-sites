<?php
//Register gallery
function create_faq() {
 
 register_post_type( 'faqs',

     array(
         'labels' => array(
             'name' => __( 'Faqs' ),
             'singular_name' => __( 'Faqs' )
         ),
         'public' => true,
         'has_archive' => true,
         'rewrite' => array('slug' => 'faqs'),
         'show_in_rest' => true,

     )
 );
}

add_action( 'init', 'create_faq' );
?>