<?php
/* Template Name: contact
*/
get_header('new');

?>
<div class="contact-benner">
    <div class="contact-header">
        <?php $contact_title= get_field("contact_title");?>
        <h2><?php echo esc_html($contact_title) ?></h2>
        <?php $contact_para= get_field("contact_paragraph");?>
        <p><?php echo esc_html($contact_para) ?></p>
    </div>
<?php echo the_content(); ?>

<div class="address-fields">
    <ul>
        <?php $contact_add= get_field("contact_address");?>
        <li><?php echo esc_html($contact_add) ?></li>
        <?php $contact_email= get_field("contact_email");?>
        <li><?php echo esc_html($contact_email) ?></li>
        <?php $contact_number= get_field("contact_number");?>
        <li><?php echo esc_html($contact_number) ?></li>
    </ul>


</div>
</div>
<?php
get_footer();
?>