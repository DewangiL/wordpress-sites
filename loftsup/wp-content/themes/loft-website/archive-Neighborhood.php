<?php
/* Template Name: neighborhood */

get_header('new');
?>
<?php $neighborhood_image = get_field("neighborhood_image");?>
<section class="neigh-banner" style="background-image: url('<?php echo esc_html($neighborhood_image) ?>');" >

    <div class="neigh-home-content">
        <?php $neighborhood_title = get_field("neighborhood_title");?> 
        <h1><?php echo esc_html($neighborhood_title) ?></h1>

        <?php $neighborhood_see_around = get_field("neighborhood_see_around");?>
        <a href="http://training-devangil.md-staging.com/lofts-exercise/neighborhood/">SEE WHAT'S AROUND</a>
    </div>

</section>

<div class="neigh-img-mobile">
        <?php $neighborhood_image_mobile = get_field("neighborhood_image_mobile");?>
        <img src="<?php echo esc_html($neighborhood_image_mobile) ?>" width="100%" height="auto" />

        <?php $neighborhood_title = get_field("neighborhood_title");?> 
        <h1><?php echo esc_html($neighborhood_title) ?></h1>
    </div>
<div class="Neigh-second-part" id="neigh">

<?php
$hero = get_field('neighborhood_second_part');
if( $hero ): ?>
    <div class="neigh-second-img">
        <img src="<?php echo esc_url( $hero['neighborhood_second_image']); ?>" />
    </div>
    <?php endif; ?>
    <div class="neigh-second-paragraph">
       <p><?php echo esc_html( $hero['neighborhood_second_content_p1']); ?></p> 
       <p><?php echo esc_html( $hero['neighborhood_second_content_p2']); ?></p>
    </div>
</div>
<?php
 the_content();
$hero_ban = get_field('neighborhood_here_what');
if( $hero_ban ): ?>
<div class="Here">
    <h2><?php echo esc_html( $hero_ban['here_what_title']); ?></h2>
    <p><?php echo esc_html( $hero_ban['here_what_paragraph1']); ?></p>
    <p><?php echo esc_html( $hero_ban['here_what_paragraph2']); ?></p>
    <p><?php echo esc_html( $hero_ban['here_what_paragraph3']); ?></p>
    <p><?php echo esc_html( $hero_ban['here_what_paragraph4']); ?></p>
</div>
<?php endif; ?>

<div class="neighborhood_last">
    <?php
    $hero_tw = get_field('neighborhood_last');
    if( $hero_tw ): ?>
    <div class="neighborhood_last_content">
    <p><?php echo esc_html( $hero_tw['neighborhood_last_content']); ?></p>
    </div>
    <div class="neighborhood_last_image">
    <img src="<?php echo esc_url( $hero_tw['neighborhood_last_image']); ?>" />
    </div>
    
</div>
<?php endif; ?>
<div class="footer-neigh">
<?php
get_footer();
?>
</div>