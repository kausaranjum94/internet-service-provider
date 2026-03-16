<?php
/**
 *    The Template for displaying of pormotional_banner
 *
 */
	$section_hide = get_theme_mod( 'internet_service_provider_pro_pormotional_banner_enable' );
    if ( 'Disable' == $section_hide ) {
      return;
    }

  if( get_theme_mod('internet_service_provider_pro_pormotional_banner_bgcolor','') ) {
    $left_backg = 'background-color:'.esc_attr(get_theme_mod('internet_service_provider_pro_pormotional_banner_bgcolor','')).';';
  }elseif( get_theme_mod('internet_service_provider_pro_pormotional_banner_bgimage','') ){
    $left_backg = 'background-image:url(\''.esc_url(get_theme_mod('internet_service_provider_pro_pormotional_banner_bgimage')).'\')';
  }else{
    $left_backg = '';
  }

  if( get_theme_mod('internet_service_provider_pro_pormotional_banner_carousel_loop', true) ) { $carousel_loop = 'true'; }
  else{ $carousel_loop = 'false'; }

  if( get_theme_mod('internet_service_provider_pro_pormotional_banner_carousel_speed') ) { $carousel_speed = get_theme_mod('internet_service_provider_pro_pormotional_banner_carousel_speed'); }
  else{ $carousel_speed = 10000; }

  if( get_theme_mod('internet_service_provider_pro_pormotional_banner_carousel_nav', true) ) { $carousel_nav = 'true'; }
  else{ $carousel_nav = 'false'; }

   $img_bg = get_theme_mod('internet_service_provider_pro_pormotional_banner_bgimage_attachment');


  if ( function_exists( 'is_amp_endpoint' ) && is_amp_endpoint() ) {
    $amp_class = 'col-lg-12 col-md-12 col-md-12 mb-4 ';
    $amp_row = 'row';
  }
  else{
    $amp_class = '';
    $amp_row = 'owl-carousel';
  }

?>
<section id="pormotional-banner" class="position-relative <?php echo esc_attr($img_bg); ?>" data-loops="<?php echo esc_html($carousel_loop); ?>" data-speed="<?php echo esc_html($carousel_speed); ?>" data-nav="<?php echo esc_html($carousel_nav); ?>" style="<?php echo esc_attr($left_backg); ?>">
  <div class="container">
    <div class="section_main_head">
        <?php if(get_theme_mod('internet_service_provider_pro_pormotional_banner_tagline')!=''){ ?>
        <span class="section-tagline" data-aos="fade-up" data-aos-duration="1000">
            <?php echo esc_html(get_theme_mod('internet_service_provider_pro_pormotional_banner_tagline')); ?>
        </span>
        <?php } ?>
        <?php if(get_theme_mod('internet_service_provider_pro_pormotional_banner_main_heading')!=''){  ?>
        <h3 data-aos="fade-up" data-aos-duration="2000">
            <?php echo esc_html(get_theme_mod('internet_service_provider_pro_pormotional_banner_main_heading')); ?>
        </h3>
        <?php } ?>

        <div class="mt-3" data-aos="fade-up" data-aos-duration="4000">
            <?php if(get_theme_mod('internet_service_provider_pro_pormotional_banner_section_button_title')!=''){ ?>
            <a class="theme_button"
                href="<?php echo esc_url(get_theme_mod('internet_service_provider_pro_tepormotional_banner_section_button_url')); ?>">
                <?php echo esc_html(get_theme_mod('internet_service_provider_pro_pormotional_banner_section_button_title')); ?>
                <?php if( get_theme_mod( 'internet_service_provider_pro_pormotional_banner_section_button_icon',true) != '') { ?>
                <span class="button-icon">
                    <i
                        class="<?php echo esc_attr(get_theme_mod('internet_service_provider_pro_pormotional_banner_section_button_icon')); ?>"></i>
                </span>
                <?php } ?>
            </a>
            <?php } ?>
        </div>
    </div>
  </div>
</section>