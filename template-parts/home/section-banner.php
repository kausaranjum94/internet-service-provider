<?php
/**
 * Template to show the content of Offer Banners
 *
 * @package internet_service_provider_pro
 */
$banner_section = get_theme_mod( 'internet_service_provider_pro_banner_enable' );
if ( 'Disable' == $banner_section ) {
  return;
}
if( get_theme_mod('internet_service_provider_pro_banner_bgcolor','') ) {
  $offer_backg = 'background-color:'.esc_attr(get_theme_mod('internet_service_provider_pro_banner_bgcolor','')).';';
}elseif( get_theme_mod('internet_service_provider_pro_banner_bgimage','') ){
  $offer_backg = 'background-image:url(\''.esc_url(get_theme_mod('internet_service_provider_pro_banner_bgimage')).'\')';
}else{
  $offer_backg = '';
}
$img_bg = get_theme_mod('internet_service_provider_pro_banner_bg_image_attachment');

$btn_svg = file_get_contents(get_template_directory_uri().'/assets/images/btn-icon.svg');
?>
<section id="banner" style="<?php echo esc_attr($offer_backg); ?>" class="<?php echo esc_attr($img_bg); ?> position-relative">
   <div class="container">
        <div class="row justify-content-center py-4">
            <div class="col-lg-8">
                <?php if(get_theme_mod('internet_service_provider_pro_banner_heading')!=''){ ?>
                    <h2 class="text-center mb-2"><?php echo esc_html(get_theme_mod('internet_service_provider_pro_banner_heading')); ?></h2>
                <?php } ?>
                <div class="btn-wrap m-auto">
                      <a class="theme-btn" href="<?php echo esc_html(get_theme_mod('internet_service_provider_pro_banner_btn_url')); ?>">
                          <?php echo esc_html(get_theme_mod('internet_service_provider_pro_banner_btn_text')); ?>
                      </a>
                      <?php echo $btn_svg; ?>
                </div>
            </div>
        </div>
   </div>
</section>
