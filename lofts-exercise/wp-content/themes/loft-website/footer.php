

<div class="footer">
  <div class="foot-new">
      <div class="footer-logo">
      <?php $footer_logo = get_field('Footer_logo','option');
        if($footer_logo) : ?>
        <a><img src="<?php echo esc_html($footer_logo) ?>" width="300px" height="auto"/></a>
        <?php endif;
        ?>
      </div>
      <div class="footer-content">
      <?php $footer_title = get_field('footer_title','option');
        if($footer_title) : ?>
        <h2><?php echo esc_html($footer_title) ?></h2>
        <?php endif;
        ?>
        <div class= "social-icons">
        <?php
           
           // Check rows exists.
           if( have_rows('social_icon_desktop','option') ):

               // Loop through rows.
               while( have_rows('social_icon_desktop', 'option') ) : the_row();

                   // Load sub field value.
                   $sub_value = get_sub_field('social_icon_desktop_image', 'option');
                   $sub_val = get_sub_field('social_link', 'option');
                   ?><a href="<?php echo esc_html($sub_val) ?>"><img src="<?php echo esc_html($sub_value) ?>"  width="36px" height="36"/></a><?php
                   // Do something...

               // End loop.
               endwhile;

           // No value.
           else :
               // Do something...
           endif;
         ?>
        </div>
       
        <div class= "Avalibility">
          
        <?php
          wp_nav_menu( array(
            'theme_location' 	=> 	'footer_menu_one', 
						'container' 		=> 	'',  
						'menu' 				=>	'footer one'
        ) )
        ?>
        </div>

        <div class= "Features">
        <?php
          wp_nav_menu( array(
            'theme_location' 	=> 	'footer_menu_two', 
						'container' 		=> 	'',  
						'menu' 				=>	'footer two'
        ) )
        ?>
        </div>

      </div>
      <div class="div" id="foot">
      <a href="javascript:void(0);" id="sc" title="Scroll to Top" style="display: none;">top</a>
      </div>
      <div class="next-block">
      <div class="left-block">
          <?php $foot_small_logo = get_field('footer_small_logo','option');
          if($foot_small_logo) : ?>
          <a class="first-l"><img src="<?php echo esc_html($foot_small_logo) ?>"  width="110px"/></a>
          <?php endif;
          ?>

          <?php $epoch = get_field('epoch_residental','option');
          if($epoch) : ?>
          <a class="sec-l"><img src="<?php echo esc_html($epoch) ?>" width="200px"/></a>
          <?php endif;
          ?>
      </div>
      <div class="right-block">
        <ul class="right-b-ul">
          <?php $phone = get_field('phone_number','option');
          if($phone) : ?>
          <li class="phone"><a><?php echo esc_html($phone) ?></a></li>
          <?php endif;
          ?>

          <?php $email = get_field('email','option');
          if($email) : ?>
          <li class="email"><a><?php echo esc_html($email) ?></a></li>
          <?php endif;
          ?>

          <?php $add = get_field('address','option');
          if($add) : ?>
          <li class="add"><p><?php echo esc_html($add) ?> </p></li>
          <?php endif;
          ?>

          <li class="privacy-disp-mob"><a>Privacy Policy</a></li>
        </ul>

        <?php $logow = get_field('footer_mobile_logo','option');
        if($logow) : ?>
        <a class="logo-white-mob"><img src="<?php echo esc_html($logow) ?>" width="200px" height="auto"/></a>
        <?php endif;
        ?>

        <div class= "social-icons-mob">
        <?php
           
           // Check rows exists.
           if( have_rows('social_icon_mobile','option') ):

               // Loop through rows.
               while( have_rows('social_icon_mobile', 'option') ) : the_row();

                   // Load sub field value.
                   $sub_value = get_sub_field('social_icon_mobile_image', 'option');
                   $sub_va = get_sub_field('social_links', 'option');
                   ?><a href="<?php echo esc_html($sub_va) ?>"><img src="<?php echo esc_html($sub_value) ?>"  width="20px" height="20"></a></img><?php
                   // Do something...

               // End loop.
               endwhile;

           // No value.
           else :
               // Do something...
           endif;
         ?>
        
        </div>
      </div>
      </div>
    </div>
    </div>
    </div>
   </section> 
<?php wp_footer(); ?>

</body>
</html>
