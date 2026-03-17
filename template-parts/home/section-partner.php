<?php
/**
 * Template part for displaying partner
 *
 * @package internet-service-provider-pro
 */

  $section_hide = get_theme_mod( 'internet_service_provider_pro_partner_enable' );
  if ( 'Disable' == $section_hide ) {
    return;
  }

  if( get_theme_mod('internet_service_provider_pro_partner_carousel_loop', true) ) { $carousel_loop = 'true'; }
  else{ $carousel_loop = 'false'; }

  if( get_theme_mod('internet_service_provider_pro_partner_carousel_speed') ) { $carousel_speed = get_theme_mod('internet_service_provider_pro_partner_carousel_speed'); }
  else{ $carousel_speed = 10000; }

  if ( function_exists( 'is_amp_endpoint' ) && is_amp_endpoint() ) {
    $amp_class = 'col-lg-4 col-md-4 col-md-6 mb-4 ';
    $amp_row = 'row';
  }
  else{
    $amp_class = '';
    $amp_row = 'owl-carousel';
  }

?>
<div id="our-partner" data-loops="<?php echo esc_html($carousel_loop); ?>" data-speed="<?php echo esc_html($carousel_speed); ?>">
  <div class="logo-container position-relative">
    <div class="logo-container-inner section_main_head text-center">
      <?php if(get_theme_mod('internet_service_provider_pro_partner_heading')!=''){ ?>
        <h3>
          <?php echo esc_html(get_theme_mod('internet_service_provider_pro_partner_heading')); ?>
        </h3>
      <?php } ?>
    </div>
    <div class="<?php echo esc_attr($amp_row); ?> _partner-row">
      <?php
      $partner_no=get_theme_mod('internet_service_provider_pro_partner_number');
      for($i=1;$i<=$partner_no;$i++)
      {
      ?>
        <div class="<?php echo esc_attr($amp_class); ?> text-center">
          <div class="logo-images">
            <?php if( get_theme_mod('internet_service_provider_pro_partner_url'.$i) ) { ?>
              <a href="<?php echo esc_html(get_theme_mod('internet_service_provider_pro_partner_url'.$i)); ?>">
            <?php } ?>
            <img src="<?php echo esc_html(get_theme_mod('internet_service_provider_pro_partner_image'.$i)); ?>">
            <?php if( get_theme_mod('internet_service_provider_pro_partner_url'.$i) ) { ?>
              </a>
            <?php } ?>
          </div>
        </div>
      <?php } ?>
    </div>
  </div>
</div>