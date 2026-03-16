<?php
/**
 * Template part for displaying Top Bar Content
 *
 * @package internet_service_provider_pro
 */

$about_section = get_theme_mod( 'internet_service_provider_pro_topbar_enable' );
if ( 'Disable' == $about_section ) {
  return;
}

if( get_theme_mod('internet_service_provider_pro_topbar_bgcolor','') ) {
 $topbar_back = 'background-color:'.esc_attr(get_theme_mod('internet_service_provider_pro_topbar_bgcolor','')).';';
}elseif( get_theme_mod('internet_service_provider_pro_topbar_bgimage','') ){
 $topbar_back = 'background-image:url(\''.esc_url(get_theme_mod('internet_service_provider_pro_topbar_bgimage')).'\')';
}else{
 $topbar_back='';
}


?>
<div id="site_top" style="<?php echo esc_attr( $topbar_back ); ?>">
    <div class="container">
        <div class="row">
            <div class="col-xl-10 col-lg-10 col-md-12 d-flex align-items-center header-contact-details">
                <?php if( get_theme_mod( 'internet_service_provider_pro_topbar_phone_number_icon',true) != '' || get_theme_mod( 'internet_service_provider_pro_topbar_phone_number',true) != '' || get_theme_mod( 'internet_service_provider_pro_topbar_phone_title',true) != '' ) { ?>
                <div class="header-git-block">
                    <?php if( get_theme_mod( 'internet_service_provider_pro_topbar_phone_number_icon',true) != '') { ?>
                    <i
                        class="<?php echo esc_attr(get_theme_mod('internet_service_provider_pro_topbar_phone_number_icon')); ?>"></i>
                    <?php } ?>
                    <?php if( get_theme_mod( 'internet_service_provider_pro_topbar_phone_number',true) != '' ) { ?>
                    <a class="header-contact-text"
                        href="tel:<?php echo esc_html(get_theme_mod('internet_service_provider_pro_topbar_phone_number')); ?>"><?php echo esc_html(get_theme_mod('internet_service_provider_pro_topbar_phone_number')); ?></a>
                    <?php }?>
                </div>
                <?php }?>

                <?php if( get_theme_mod( 'internet_service_provider_pro_topbar_email_icon',true) != '' || get_theme_mod( 'internet_service_provider_pro_topbar_email',true) != '' || get_theme_mod( 'internet_service_provider_pro_topbar_phone_title',true) != '' ) { ?>
                <div class="header-git-block">
                    <?php if( get_theme_mod( 'internet_service_provider_pro_topbar_email_icon',true) != '') { ?>
                    <i class="<?php echo esc_attr(get_theme_mod('internet_service_provider_pro_topbar_email_icon')); ?>"></i>
                    <?php } ?>
                    <?php if( get_theme_mod( 'internet_service_provider_pro_topbar_email',true) != '' ) { ?>
                    <a class="header-contact-text"
                        href="mailto:<?php echo esc_html(get_theme_mod('internet_service_provider_pro_topbar_email')); ?>"><?php echo esc_html(get_theme_mod('internet_service_provider_pro_topbar_email')); ?></a>
                    <?php }?>
                </div>
                <?php }?>
                <?php if(get_theme_mod('internet_service_provider_pro_topbar_note')!=''){ ?>
                <span class="header-top-note">
                    <?php if( get_theme_mod( 'internet_service_provider_pro_topbar_note_icon',true) != '') { ?>
                    <i class="<?php echo esc_attr(get_theme_mod('internet_service_provider_pro_topbar_note_icon')); ?>"></i>
                    <?php } ?>
                    <?php echo esc_html(get_theme_mod('internet_service_provider_pro_topbar_note')); ?>
                </span>
                <?php } ?>
            </div>
            <div class="col-xl-2 col-lg-2 col-md-12">
                <?php get_template_part('template-parts/home/social-icons'); ?>
            </div>
        </div>
    </div>
</div>