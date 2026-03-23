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

?>
<div id="newsletter-section">
  <div class="container position-relative">
    <div class="newsletter-container " >
      <div class="row align-items-center">
        <div class="col-lg-6 col-md-6">
          <div class="newsletter_head  position-relative">
            <div class="section_main_head" >
              <?php if(get_theme_mod('internet_service_provider_pro_newsletter_main_heading')!=''){ ?>
                <h3>
                  <?php echo esc_html(get_theme_mod('internet_service_provider_pro_newsletter_main_heading')); ?>
                </h3>
              <?php } ?>
            </div>
          </div>
        </div>
        <div class="col-lg-6 col-md-6">
          <?php if(get_theme_mod('internet_service_provider_pro_newsletter_form_shortcode')!=''){ ?>
            <div class="position-relative newsletter_form">
              <div class="newsletter_shortcode position-relative">
                <?php echo do_shortcode(get_theme_mod('internet_service_provider_pro_newsletter_form_shortcode')); ?>
              </div>
            </div>
          <?php } ?>
        </div>
      </div>
    </div>
  </div>  
</div>