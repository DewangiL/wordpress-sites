
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<section class="main">
<div class="nav-top" id="myHeader">
<span class="back">
<?php
if(get_field('show_topbar', 'option') ) : ?>
<div class="top">
<?php
          wp_nav_menu( array(
            'theme_location' 	=> 	'top_menu', 
						'container' 		=> 	'<div>', 
            'menu_class' 		=> 	'top-nav', 
						'menu' 				=>	'first'
        ) )
        
?>
</div> 
<?php endif; ?>       
     
     <nav class="navbar"> 
    

          <?php $header_logo = get_field('Header_logo','option');
          if($header_logo) : ?>
          <a href="http://localhost/lofts-exercise/"><img src="<?php echo esc_html($header_logo) ?>" alt="lofts-uptown" class="logo-desk" width="100%" height="auto"/></a>
          <?php endif;
          ?>
      
          <?php $header_mob = get_field('Header_mobile_logo','option');
          if($header_mob) : ?>
          <img src="<?php echo esc_html($header_mob) ?>" alt="lofts-uptown" class="logo-mob" /> 
          <?php endif;
          ?>

        <div class="ham" >  
        <span class="bar1"></span>  
        <span class="bar2"></span>  
        <span class="bar3"></span>  
        </div> 
        <?php
          wp_nav_menu( array(
            'theme_location' 	=> 	'primary_menu', 
						'container' 		=> 	'', 
						'menu_class' 		=> 	'nav-sub', 
						'menu' 				=>	'top',
        ) )
        ?>

      <?php
          wp_nav_menu( array(
            'theme_location' 	=> 	'top_menu', 
						'container' 		=> 	'', 
						'menu_class' 		=> 	'nav-s nav-l desk-none', 
						'menu' 				=>	'main',
        ) )
        ?>
         
         
        
    </nav> 
    </span>
 </div>
