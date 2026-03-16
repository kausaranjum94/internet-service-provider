<?php
/**
 * The Template for displaying Newsletter Banner.
 *
 * @package internet-service-provider-pro
 */
$about_section = get_theme_mod( 'internet_service_provider_pro_newsletter_enable' );
if ( 'Disable' == $about_section ) {
  return;
} 

  $img_bg = get_theme_mod('internet_service_provider_pro_newsletter_bgimage_setting');

  if( get_theme_mod('internet_service_provider_pro_newsletter_bgcolor','') ) {
    $about_backg = 'background-color:'.esc_attr(get_theme_mod('internet_service_provider_pro_newsletter_bgcolor','')).';';
  }elseif( get_theme_mod('internet_service_provider_pro_newsletter_bgimage','') ){
    $about_backg = 'background-image:url(\''.esc_url(get_theme_mod('internet_service_provider_pro_newsletter_bgimage')).'\')';
  }else{
    $about_backg='';
  }

?>
<section id="newsletter-section" class="" >
  <div class="container position-relative">
    <div class="newsletter-container <?php echo esc_attr($img_bg); ?>" style="<?php echo esc_attr($about_backg); ?>">
      <div class="row">
        <div class="col-lg-4 col-md-4">
          <div class="newsletter_head  position-relative">
            <div class="section_main_head" data-aos="fade-left" data-aos-duration="2000">
              <?php if(get_theme_mod('internet_service_provider_pro_newsletter_tagline')!=''){ ?>
                <span class="section-tagline">
                  <?php echo esc_html(get_theme_mod('internet_service_provider_pro_newsletter_tagline')); ?>
                </span>
              <?php } ?>
              <?php if(get_theme_mod('internet_service_provider_pro_newsletter_main_heading')!=''){ ?>
                <h3>
                  <?php echo esc_html(get_theme_mod('internet_service_provider_pro_newsletter_main_heading')); ?>
                </h3>
              <?php } ?>
            </div>
          </div>
        </div>
        <div class="col-lg-5 col-md-5">
          <?php if(get_theme_mod('internet_service_provider_pro_newsletter_form_shortcode')!=''){ ?>
            <div class="position-relative newsletter_form">
              <div class="newsletter_shortcode position-relative">
                <?php echo do_shortcode(get_theme_mod('internet_service_provider_pro_newsletter_form_shortcode')); ?>
              </div>
            </div>
          <?php } ?>
        </div>
        <div class="col-lg-3 col-md-3">
          <?php if(get_theme_mod('internet_service_provider_pro_newsletter_social_icons_title')!=''){ ?>
            <span class="social-icons-title">
              <?php echo esc_html(get_theme_mod('internet_service_provider_pro_newsletter_social_icons_title')); ?>
            </span>
          <?php } ?>
          <?php get_template_part('template-parts/home/social-icons'); ?>
        </div>
      </div>
    </div>
  </div>  
</section>