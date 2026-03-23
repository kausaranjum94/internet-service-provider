<?php
/**
 * Template part for displaying pricing plan
 *
 * @package internet-service-provider-pro
 */

  $section_hide = get_theme_mod( 'internet_service_provider_pro_pricing_plan_enable' );
  if ( 'Disable' == $section_hide ) {
    return;
  }
   $img_bg = get_theme_mod('internet_service_provider_pro_pricing_plan_bgimage_setting');
  if( get_theme_mod('internet_service_provider_pro_pricing_plan_bgcolor','') ) {
    $about_backg = 'background-color:'.esc_attr(get_theme_mod('internet_service_provider_pro_pricing_plan_bgcolor','')).';';
  }elseif( get_theme_mod('internet_service_provider_pro_pricing_plan_bgimage','') ){
    $about_backg = 'background-image:url(\''.esc_url(get_theme_mod('internet_service_provider_pro_pricing_plan_bgimage')).'\')';
  }else{
    $about_backg='';
  }

  if( get_theme_mod('internet_service_provider_pro_pricing_plan_carousel_loop', false) ) { $carousel_loop = 'true'; }
  else{ $carousel_loop = 'false'; }

  if( get_theme_mod('internet_service_provider_pro_pricing_plan_carousel_speed') ) { $carousel_speed = get_theme_mod('internet_service_provider_pro_pricing_plan_carousel_speed'); }
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
<section id="pricing-plan" style="<?php echo esc_attr($about_backg); ?>" class="<?php echo esc_attr($img_bg); ?>" data-loops="<?php echo esc_html($carousel_loop); ?>" data-speed="<?php echo esc_html($carousel_speed); ?>">
  <div class="container">
    <div class="plan-head section_main_head">
      <?php if(get_theme_mod('internet_service_provider_pro_pricing_plan_tagline')!=''){ ?>
        <span class="section-tagline">
          <?php echo esc_html(get_theme_mod('internet_service_provider_pro_pricing_plan_tagline')); ?>
        </span>
      <?php } ?>
      <?php if(get_theme_mod('internet_service_provider_pro_pricing_plan_main_heading')!='' ){ ?>
        <h3>
          <?php echo esc_html(get_theme_mod('internet_service_provider_pro_pricing_plan_main_heading')); ?>
        </h3>
      <?php } ?>
    </div>
    <div class="row align-items-center">
      <div class="<?php echo esc_attr($amp_row); ?> plan_row position-relative" data-aos="zoom-in" data-aos-duration="2000">
        <?php
        $plan_count=get_theme_mod('internet_service_provider_pro_pricing_plan_number');
        for($i=1;$i<=$plan_count;$i++)
        {
        ?>
        <?php
          $recommended_plan = get_theme_mod('internet_service_provider_pro_pricing_plan_recommended'.$i);
          if($recommended_plan != 0){
            $recommended_class = 'recommended_box';
          } else {
            $recommended_class = '';
          }
        ?>
          <div class="plan-info-inner <?php echo esc_attr($recommended_class); ?> plan-box<?php echo esc_attr($i); ?>">
            <div class="<?php echo esc_attr($amp_class); ?> plan-info ">
              <div class="plan-details">
                <div class="media">
                  <div class="plan-image" data-aos="flip-up" data-aos-duration="1000">
                    <img src="<?php echo esc_html(get_theme_mod('internet_service_provider_pro_pricing_plan_image'.$i)); ?>"
                      class="img-responsive"
                      data-src="<?php echo esc_html(get_theme_mod('internet_service_provider_pro_pricing_plan_image'.$i)); ?>"
                      data-hover="<?php echo esc_html(get_theme_mod('internet_service_provider_pro_pricing_plan_hover_image'.$i)); ?>">
                  </div>
                  <div class="media-body plan-heading">
                    <?php if(get_theme_mod('internet_service_provider_pro_pricing_plan_title'.$i)!=''){ ?>
                      <h4>
                        <?php echo esc_html(get_theme_mod('internet_service_provider_pro_pricing_plan_title'.$i)); ?>
                      </h4>
                    <?php } ?>
                    <?php if(get_theme_mod('internet_service_provider_pro_pricing_plan_text'.$i)!=''){ ?>
                      <span class="plan-text">
                        <?php echo esc_html(get_theme_mod('internet_service_provider_pro_pricing_plan_text'.$i)); ?>
                      </span>
                    <?php } ?>
                  </div>
                </div>
                <?php if(get_theme_mod('internet_service_provider_pro_pricing_plan_price'.$i)!=''){ ?>
                  <div class="plan-price mb-3">
                    <div class="plan_price">
                      <?php if(get_theme_mod('internet_service_provider_pro_pricing_plan_price_cur'.$i)!=''){ ?>
                        <span class="plan_cr">
                          <?php echo esc_html(get_theme_mod('internet_service_provider_pro_pricing_plan_price_cur'.$i)); ?>
                        </span>
                      <?php } ?>
                      <?php echo esc_html(get_theme_mod('internet_service_provider_pro_pricing_plan_price'.$i)); ?>
                      <?php if(get_theme_mod('internet_service_provider_pro_pricing_plan_duration'.$i)!=''){ ?>
                        <span class="plan_package">
                          <?php echo esc_html(get_theme_mod('internet_service_provider_pro_pricing_plan_duration'.$i)); ?>
                        </span>
                      <?php } ?>
                    </div>
                    <?php if(get_theme_mod('internet_service_provider_pro_pricing_plan_short_text'.$i)!=''){ ?>
                      <span class="plan-short-text">
                        <?php echo esc_html(get_theme_mod('internet_service_provider_pro_pricing_plan_short_text'.$i)); ?>
                      </span>
                    <?php } ?>
                  </div>
                <?php } ?>

                 <div class="plan-btn">
                    <?php if(get_theme_mod('internet_service_provider_pro_pricing_plan_button_title'.$i)!=''){ ?>
                      <a class="theme_button mt-3" href="<?php echo esc_html(get_theme_mod('internet_service_provider_pro_pricing_plan_button_url'.$i)); ?>">
                        <span><?php echo esc_html(get_theme_mod('internet_service_provider_pro_pricing_plan_button_title'.$i)); ?></span>
                      </a>
                    <?php } ?>
                  </div>
                <div class="feature-box">
                  <?php if(get_theme_mod('internet_service_provider_pro_pricing_plan_starter_features_heading'.$i)!=''){ ?>
                    <h6 class="plan-feature-heading">
                      <?php echo esc_html(get_theme_mod('internet_service_provider_pro_pricing_plan_starter_features_heading'.$i)); ?>
                    </h6>
                  <?php } ?>

                  <?php $feature_count=get_theme_mod('internet_service_provider_pro_pricing_plan_feature_no'.$i); ?>
                  <div class="plan-features">
                    <ul>
                      <?php for($j=1;$j<=$feature_count;$j++)
                      { 
                      ?>
                        <?php if(get_theme_mod('internet_service_provider_pro_pricing_plan_feature_title'.$i.$j)!=''){ ?>
                          <li>
                            <span class="plan-feature-icon"><i class="fa-solid fa-plus"></i></span>
                            <span class="plan-feature-text"><?php echo esc_html(get_theme_mod('internet_service_provider_pro_pricing_plan_feature_title'.$i.$j)); ?></span>
                          </li>
                        <?php } } ?>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </div>
        <?php } ?>
      </div>
    </div>
  </div>
</section>