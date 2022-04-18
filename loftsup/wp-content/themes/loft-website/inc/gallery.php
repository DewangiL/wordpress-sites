<?php
//Register gallery
function create_posttype() {
 
 register_post_type( 'gallery',

     array(
         'labels' => array(
             'name' => __( 'Gallery' ),
             'singular_name' => __( 'Gallery' )
         ),
         'public' => true,
         'has_archive' => true,
         'rewrite' => array('slug' => 'gallery'),
         'show_in_rest' => true,

     )
 );
}

add_action( 'init', 'create_posttype' );
?>

<?php
function blog_scripts() {
// Register the script
wp_register_script( 'custom-script', get_stylesheet_directory_uri(). '/JS/custom.js', array('jquery'), false, true );

// Localize the script with new data
$script_data_array = array(
   'ajaxurl' => admin_url( 'admin-ajax.php' ),
   'security' => wp_create_nonce( 'load_more_posts' ),
);
wp_localize_script( 'custom-script', 'blog', $script_data_array );

// Enqueued script with localized data.
wp_enqueue_script( 'custom-script' );
}
add_action( 'wp_enqueue_scripts', 'blog_scripts' );

add_action('wp_ajax_load_posts_by_ajax', 'load_posts_by_ajax_callback');
add_action('wp_ajax_nopriv_load_posts_by_ajax', 'load_posts_by_ajax_callback');

function load_posts_by_ajax_callback() {
check_ajax_referer('load_more_posts', 'security');

$args = array(
   'post_type' => 'gallery',
   'post_status' => 'publish',
   'paged' => $_POST['page'],
);

$blog_posts = new WP_Query( $args );


if ( $blog_posts->have_posts() ) : ?>
   <?php while ( $blog_posts->have_posts() ) : $blog_posts->the_post(); ?>
       <?php the_content(); ?>
   <?php endwhile; ?>
   <?php wp_reset_postdata(); ?>
<?php endif; ?>
<?php
wp_die();
}
?>