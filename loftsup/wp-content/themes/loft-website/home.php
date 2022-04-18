
<?php 
/*
Template Name: home
 */
get_header(); ?>

  
<div class="home-banner">
      <div class="home-banner-left">
        <div class="home-bann-content">
          <?php $head = get_field("heading");?>
          <h1><?php echo esc_html($head) ?></h1>

          <?php $sub_head = get_field("sub_heading");?>
          <h3><?php echo esc_html($sub_head) ?></h3>

          <?php $head = get_field("header_paragraph");?>
          <p><?php echo esc_html($head) ?></p>

          <?php $sch= get_field("sch");?>
          <a class="sch-tour" href="#"><?php echo esc_html($sch) ?></a>
        </div>
      </div>
      <div class="home-banner-right">
        <?php $hero= get_field("header_image");?>
        <img src="<?php echo esc_html($hero) ?>" class="home-hero" alt="LOFT"/>

        <?php $hero_m= get_field("header_image_mobile");?>
        <img src="<?php echo esc_html($hero_m) ?>" class="home-mob" alt="LOFT"/>
      </div>
</div>

    <div class="century" id="cenn">
    <?php $cen= get_field("santury");?>
     <h5 class="c-desk"><?php echo esc_html($cen) ?> </h5>
     <div class="cen">
      <div class="century-right">
        <?php $p_o= get_field("pic");?>
        <img src="<?php echo esc_html($p_o) ?>" alt="A SANCTURY OF STYLE"/>
        <h5 class="c-mob"><?php echo esc_html($cen) ?></h5>
      </div>

      <div class="century-left">
      <?php $cen_para= get_field("santury_paragraph");?>
        <p><?php echo esc_html($cen_para) ?></p>

        <?php $cen_btn= get_field("see_whats_here");?>
        <a class="sch-tour" href="http://training-devangil.md-staging.com/lofts-exercise/">SEE WHAT'S HERE</a>
      </div>
    </div>
</div>

    <div class="img-anicon">
      <?php $ana= get_field("image_anacon");?>
      <img src="<?php echo esc_html($ana) ?>" alt="An Icon of Uptown Altamonte">
    </div>

    <div class="image-two">
      <div class="left-image">
       <?php $pic03= get_field("pic03");?>
        <img src="<?php echo esc_html($pic03) ?>" alt="LOFT">
      </div>
      <div class="right-image">
      <?php $pic02= get_field("pic02");?>
        <img src="<?php echo esc_html($pic02) ?>" alt="LOFT">
        <div class="right-image-content">

          <?php $pic02_content= get_field("pic02_content");?>
          <p><?php echo esc_html($pic02_content) ?></p>

          <?php $learn_more= get_field("learn_more");?>
          <a class="sch-tour" href="http://training-devangil.md-staging.com/lofts-exercise/">Learn More</a>
        </div>
      </div>
    </div>

    <div class="newly-refresh">
      <?php $newly_refresh= get_field("newly_refresh");?>
      <h2 class="n-r-none"><?php echo esc_html($newly_refresh) ?></h2>

      <div class="newly-content">
        <div class="newly-left">

         <?php $newly_refresh_paragraph= get_field("newly_refresh_paragraph");?>
         <p><?php echo esc_html($newly_refresh_paragraph) ?></p>

         <?php $learn_more= get_field("view_floor_plans");?>
         <a class="sch-tour" href="http://training-devangil.md-staging.com/lofts-exercise/">View Floor Plans</a>
        </div>
        <div class="newly-right">
        <?php $new= get_field("new");?>
          <img src="<?php echo esc_html($new) ?>" alt="LOFT">
          <h2 class="n-r-mob"><?php echo esc_html($newly_refresh) ?> </h2>
        </div>
      </div>
    </div>
  </div>
  
<?php get_footer(); ?>