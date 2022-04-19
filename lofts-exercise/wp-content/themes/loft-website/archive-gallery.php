
<?php
/* Template Name:gallery
*/
 get_header(); ?>
    <div class="gallery-title">
        <?php $gallery_title = get_field('gallery_title','option');
        if($gallery_title) : ?>
        <h1><?php echo esc_html($gallery_title) ?></h1>
        <?php endif;
        ?>
    </div>
<?php
$galleryLayout  =   get_field('gallery_layout', 'option');

            if( $galleryLayout == 'two' ) { 
                $template_column    =   "1fr 1fr";
                $posts_per_page     =   "2";
                
            } else {
                $template_column    =   "1fr 1fr 1fr";
                $posts_per_page     =   "3";
                $gap                =   "1%";
            } 

    $args = array (
    'post_type'         =>  'gallery',
    'post_status'       =>  'publish',
    'order'             =>  'ASC',  
    'posts_per_page'    =>  $posts_per_page,
    'paged' => 1,
    );

    $blog_posts = new WP_Query( $args );
    ?>
 
    <?php if ( $blog_posts->have_posts() ) : ?>
        <div class="gallery-grid" style="grid-template-columns: <?php echo $template_column; ?>; grid-gap: <?php echo $gap; ?>">
            <?php while ( $blog_posts->have_posts() ) : $blog_posts->the_post(); ?>
                <?php the_content(); ?>
            <?php endwhile; ?>
            <?php wp_reset_postdata(); ?>
        </div>
        
    <?php endif; ?>
<?php get_footer(); ?>
