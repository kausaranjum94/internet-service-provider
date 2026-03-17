<?php
/**
 * Template part for displaying records
 *
 * @package internet-service-provider-pro
 */

  $section_hide = get_theme_mod( 'internet_service_provider_pro_records_enable' );
  if ( 'Disable' == $section_hide ) {
    return;
  }
  if( get_theme_mod('internet_service_provider_pro_records_bgcolor','') ) {
    $left_backg = 'background-color:'.esc_attr(get_theme_mod('internet_service_provider_pro_records_bgcolor','')).';';
  }elseif( get_theme_mod('internet_service_provider_pro_records_bgimage','') ){
    $left_backg = 'background-image:url(\''.esc_url(get_theme_mod('internet_service_provider_pro_records_bgimage')).'\')';
  }else{
    $left_backg = '';
  }

  if( get_theme_mod('internet_service_provider_pro_records_carousel_loop', true) ) { $carousel_loop = 'true'; }
  else{ $carousel_loop = 'false'; }

  if( get_theme_mod('internet_service_provider_pro_records_carousel_speed') ) { $carousel_speed = get_theme_mod('internet_service_provider_pro_records_carousel_speed'); }
  else{ $carousel_speed = 10000; }

  if ( function_exists( 'is_amp_endpoint' ) && is_amp_endpoint() ) {
    $amp_class = 'col-lg-4 col-md-4 col-md-6 mb-4 ';
    $amp_row = 'row';
  }
  else{
    $amp_class = '';
    $amp_row = 'owl-carousel';
  }

  $img_bg = get_theme_mod('internet_service_provider_pro_records_bgimage_setting');

?>
<div id="records" class="<?php echo esc_attr($img_bg); ?> mt-5" style="<?php echo esc_attr($left_backg); ?>" data-loops="<?php echo esc_html($carousel_loop); ?>" data-speed="<?php echo esc_html($carousel_speed); ?>">
  <div class="container">
    <div class="records-row">
      <div class="row align-items-center">
        <div class="col-lg-5 col-md-5">
          <div class="records-image full-height-width-image h-100" data-aos="flip-up" data-aos-duration="1000">
            <?php if(get_theme_mod('internet_service_provider_pro_records_image')!=''){ ?>
              <img src="<?php echo esc_url(get_theme_mod('internet_service_provider_pro_records_image')); ?>">
            <?php } ?>
          </div>
        </div>
        <div class="offset-lg-1 col-lg-6 col-md-7">
          <div class="record-blocks-inner position-relative">
            <div class="<?php echo esc_attr($amp_row); ?>">
              <?php
              $number = get_theme_mod('internet_service_provider_pro_records_number');
              for($i=1;$i<=$number;$i++)
              {
              ?>
                <div class="records-info<?php echo esc_attr($amp_class); ?>">
                  <div class="records-box" data-aos="flip-left"  data-aos-easing="ease-out-cubic" data-aos-duration="2000">
                    <div class="record_detail">
                      <div class="media">
                        <div class="record-image">
                          <?php if(get_theme_mod('internet_service_provider_pro_records_image'.$i)!=''){
                            $image_url = ts_get_image_id(get_theme_mod('internet_service_provider_pro_records_image'.$i));
                            if($image_url != ''){
                              echo wp_get_attachment_image( $image_url, 'full' ); 
                            } else {?>
                              <?php if(get_theme_mod('internet_service_provider_pro_records_image'.$i)!=''){ ?>
                                <img src="<?php echo esc_url(get_theme_mod('internet_service_provider_pro_records_image'.$i)); ?>">
                              <?php }
                            }
                          } ?>
                        </div>
                        
                        <div class="media-body">
                          <?php if(get_theme_mod('internet_service_provider_pro_records_no'.$i)!=''){ ?>
                            <div class="count-box-number box-count">
                                <span class="count"><?php echo esc_html(get_theme_mod('internet_service_provider_pro_records_no'.$i)); ?></span>
                                <?php if(get_theme_mod('internet_service_provider_pro_records_sign'.$i)!=''){ ?>
                                  <span class="plus_sign">
                                    <?php echo esc_html(get_theme_mod('internet_service_provider_pro_records_sign'.$i)); ?>
                                  </span>
                                <?php } ?>
                              </div>
                          <?php } if(get_theme_mod('internet_service_provider_pro_records_title'.$i)!=''){ ?>
                            <h6 class="pb-0">
                              <?php if( get_theme_mod('internet_service_provider_pro_records_url'.$i) ) { ?>
                                <a href="<?php echo esc_html(get_theme_mod('internet_service_provider_pro_records_url'.$i)); ?>">
                              <?php } ?>
                              <?php echo esc_html(get_theme_mod('internet_service_provider_pro_records_title'.$i)); ?>

                              <?php if( get_theme_mod('internet_service_provider_pro_records_url'.$i) ) { ?>
                                </a>
                              <?php } ?>
                            </h6>
                          <?php } ?>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              <?php } ?>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>