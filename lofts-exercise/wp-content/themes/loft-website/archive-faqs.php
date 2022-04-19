
<?php 
/*Template Name: faqs*/
get_header();?>

<?php
$args = array (
    'post_type'         =>  'faqs',
    'post_status'       =>  'publish',
    'order'             =>  'ASC',  
    'paged' => 1,
    );
    $faq_posts = new WP_Query( $args );
?>
 
<div class="accordion-body">
  <div class="accordion">
  <?php if ( $faq_posts->have_posts() ) : ?>
    <?php while ( $faq_posts->have_posts() ) : $faq_posts->the_post(); ?>
    <div class="container">  
      <div class="label">
        <?php wp_kses_post( the_title() ); ?>
      </div>
      <hr>
      <div class="content">
        <?php wp_kses_post( the_content() );?>
      </div>
      
    </div>
    <?php endwhile; ?>
      <?php endif; ?>
    
    
  </div>
  </div>
<?php
get_footer();
?>