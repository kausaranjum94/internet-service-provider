<?php
/**
 * Template part for displaying Footer Contact
 *
 * @package internet_service_provider_pro
 */

$about_section = get_theme_mod( 'internet_service_provider_pro_footer_contact_enable' );
if ( 'Disable' == $about_section ) {
  return;
}


?>
<div id="footer-contact">
    <div class="container">
        <div class="footer-contact-row">

            <div class="d-flex align-items-center footer-contact-details">
                <?php if( get_theme_mod( 'internet_service_provider_pro_footer_contact_phone_number_icon',true) != '' || get_theme_mod( 'internet_service_provider_pro_footer_contact_phone_number',true) != '' || get_theme_mod( 'internet_service_provider_pro_footer_contact_phone_title',true) != '' ) { ?>
                <div class="footer-git-block">
                    <?php if( get_theme_mod( 'internet_service_provider_pro_footer_contact_phone_number_icon',true) != '') { ?>
                    <span class="footer-contact-icon"><i class="<?php echo esc_attr(get_theme_mod('internet_service_provider_pro_footer_contact_phone_number_icon')); ?>"></i></span>
                    <?php } ?>
                    <?php if( get_theme_mod( 'internet_service_provider_pro_footer_contact_phone_number',true) != '' ) { ?>
                    <a class="footer-contact-text"
                        href="tel:<?php echo esc_html(get_theme_mod('internet_service_provider_pro_footer_contact_phone_number')); ?>"><?php echo esc_html(get_theme_mod('internet_service_provider_pro_footer_contact_phone_number')); ?></a>
                    <?php }?>
                </div>
                <?php }?>

                <?php if( get_theme_mod( 'internet_service_provider_pro_footer_contact_email_icon',true) != '' || get_theme_mod( 'internet_service_provider_pro_footer_contact_email',true) != '' || get_theme_mod( 'internet_service_provider_pro_footer_contact_phone_title',true) != '' ) { ?>
                <div class="footer-git-block">
                    <?php if( get_theme_mod( 'internet_service_provider_pro_footer_contact_email_icon',true) != '') { ?>
                    <span class="footer-contact-icon"><i class="<?php echo esc_attr(get_theme_mod('internet_service_provider_pro_footer_contact_email_icon')); ?>"></i></span>
                    <?php } ?>
                    <?php if( get_theme_mod( 'internet_service_provider_pro_footer_contact_email',true) != '' ) { ?>
                    <a class="footer-contact-text"
                        href="mailto:<?php echo esc_html(get_theme_mod('internet_service_provider_pro_footer_contact_email')); ?>"><?php echo esc_html(get_theme_mod('internet_service_provider_pro_footer_contact_email')); ?></a>
                    <?php }?>
                </div>
                <?php }?>
                <?php if( get_theme_mod( 'internet_service_provider_pro_footer_contact_location_icon',true) != '' || get_theme_mod( 'internet_service_provider_pro_footer_contact_location',true) != '' || get_theme_mod( 'internet_service_provider_pro_footer_contact_phone_title',true) != '' ) { ?>
                    <div class="footer-git-block">
                        <?php if( get_theme_mod( 'internet_service_provider_pro_footer_contact_location_icon',true) != '') { ?>
                        <span class="footer-contact-icon"><i class="<?php echo esc_attr(get_theme_mod('internet_service_provider_pro_footer_contact_location_icon')); ?>"></i></span>
                        <?php } ?>
                        <?php if( get_theme_mod( 'internet_service_provider_pro_footer_contact_location',true) != '' ) { ?>
                        <a class="footer-contact-text" href="http://maps.google.com/?q=1200<?php echo esc_html(get_theme_mod('internet_service_provider_pro_footer_contact_location')); ?>"><?php echo esc_html(get_theme_mod('internet_service_provider_pro_footer_contact_location')); ?></a>
                        <?php }?>
                    </div>
                <?php }?>
            </div>
        </div>
    </div>
</div>