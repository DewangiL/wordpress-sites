<?php
add_theme_support( 'menus' );
if ( ! function_exists( 'mytheme_register_nav_menu' ) ) {
 
  function mytheme_register_nav_menu(){
      register_nav_menus( array(
          'primary_menu' => __( 'Primary Menu', 'text_domain' ),
          'top_menu'  => __( 'Top Menu', 'text_domain' ),
          'footer_menu_one'  => __( 'Footer Menu one', 'text_domain' ),
          'footer_menu_two'  => __( 'Footer Menu two', 'text_domain' ),
      ) );
  }
  add_action( 'after_setup_theme', 'mytheme_register_nav_menu', 0 );
}
?>