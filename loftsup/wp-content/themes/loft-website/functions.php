<?php
  require get_template_directory() . '/inc/enque.php';
  require get_template_directory() . '/inc/option.php';
  require get_template_directory() . '/inc/menus.php';
  require get_template_directory() . '/inc/gallery.php';
  require get_template_directory() . '/inc/faqs.php';
  require get_template_directory() . '/inc/map.php';
  require get_template_directory() . '/inc/enquemap.php';

?>
<?php

function locations_map (){
    
  $args = array(
      'post_type' => 'location',
      'posts_per_page' => -1,
  );
  
  $locations_query = new WP_QUERY($args);
  
  if ( $locations_query->have_posts() ) {
  
  ob_start(); 
  
  
  ?>
  
  <div class="marker-filter">
        <span class="filter-box">
            <label for="regular">
                <input type="checkbox" name="regular" value="regular" id="regular" checked  onchange="filterMarker(this.value);"> 
                Regular
            </label>
        </span>
        <span class="filter-box">
            <label for="special">
                <input type="checkbox" name="special" value="special" id="special"  onchange="filterMarker(this.value);"> 
                Special
            </label>
        </span>
        <span class="filter-box">
            <label for="upcoming">
                <input type="checkbox" name="upcoming" value="upcoming" id="upcoming" onchange="filterMarker(this.value);"> 
                Upcoming
            </label>
        </span>
    </div>
  <div class="acf-map" style="overflow: hidden; position: relative;">
  <?php
  while ( $locations_query->have_posts() ) {
    $locations_query->the_post(); 
    $address = get_field('address');
    $title = get_the_title();
    $map_point = the_field('map_point');
    $outlet_type = get_field('outlet_type');
    $phone = get_field('phone');
                    
        if ($outlet_type == 'regular') {
            $outlet_text = 'Regular';
        } elseif ($outlet_type == 'special') {   
          $outlet_text = 'Special';
        } else {
          $outlet_text = 'Upcoming';
        }
?>
      <div class="marker" category="<?php echo $outlet_text; ?>" data-lat="<?php echo $address['lat']; ?>" data-lng="<?php echo $address['lng']; ?>"  ?>">
          <div class="inside-marker">
            <h5><?php echo $title; ?></h5>
            <?php
                echo $outlet_text.'<br>';   
                if($phone) {
                 echo 'Phone: '.$phone;       
                }
            ?>
        </div>
      </div>
      
  <?php } ?>
  </div>
  
  <?php wp_reset_postdata(); 
  
  }
  
  return ob_get_clean();
      
}

add_shortcode( 'locations_map', 'locations_map' );
?>

