<?php
/**
 * Template part for displaying exclusive offers
 *
 * @package internet-service-provider-pro
 */

  $section_hide = get_theme_mod( 'internet_service_provider_pro_exclusive_offers_enable' );
  if ( 'Disable' == $section_hide ) {
    return;
  }
  $img_bg = get_theme_mod('internet_service_provider_pro_exclusive_offers_bgimage_setting');
  if( get_theme_mod('internet_service_provider_pro_exclusive_offers_bgcolor','') ) {
    $about_backg = 'background-color:'.esc_attr(get_theme_mod('internet_service_provider_pro_exclusive_offers_bgcolor','')).';';
  }elseif( get_theme_mod('internet_service_provider_pro_exclusive_offers_bgimage','') ){
    $about_backg = 'background-image:url(\''.esc_url(get_theme_mod('internet_service_provider_pro_exclusive_offers_bgimage')).'\')';
  }else{
    $about_backg='';
  }
?>
<section id="exclusive-offers" style="<?php echo esc_attr($about_backg); ?>"
    class="<?php echo esc_attr($img_bg); ?> position-relative">

    <div class="container">
        
        <div class="row align-items-end">
            <div class="col-lg-5 col-md-7 exclusive-offers-head-listing">
                <div class="exclusive-offers-head section_main_head pb-5">
                    <?php if(get_theme_mod('internet_service_provider_pro_exclusive_offers_tagline')!=''){ ?>
                        <span class="section-tagline">
                            <?php echo esc_html(get_theme_mod('internet_service_provider_pro_exclusive_offers_tagline')); ?>
                        </span>
                    <?php } ?>

                    <?php if(get_theme_mod('internet_service_provider_pro_exclusive_offers_main_heading')!=''){ ?>
                        <h3>
                            <?php echo esc_html(get_theme_mod('internet_service_provider_pro_exclusive_offers_main_heading')); ?>
                        </h3>
                    <?php } ?>
                    <?php if(get_theme_mod('internet_service_provider_pro_exclusive_offers_text')!=''){ ?>
                        <div class="section-text">
                            <?php echo esc_html(get_theme_mod('internet_service_provider_pro_exclusive_offers_text')); ?>
                        </div>
                    <?php } ?>
                </div>
                <ul>
                <?php
                      $about_list_no = get_theme_mod('internet_service_provider_pro_exclusive_offers_listing_number');
                      for($i=1; $i<=$about_list_no; $i++)
                      {
                    ?>
                    <li data-aos="fade-up" data-aos-duration="2000">
                        <?php if(get_theme_mod('internet_service_provider_pro_exclusive_offers_listing'.$i)!=''){ ?>
                            <span class="exclusive-offers-icon">
                                <i class="fa-solid fa-plus"></i>
                            </span>
                            <?php echo esc_html(get_theme_mod('internet_service_provider_pro_exclusive_offers_listing'.$i)); ?>
                        <?php } ?>
                    </li>
                    <?php } ?>
                </ul>
            </div>
            <div class="col-lg-7 col-md-5">
                <div class="exclusive-offers-icon-box row">
                    <?php
                      $about_list_no = get_theme_mod('internet_service_provider_pro_exclusive_offers_icon_box_number');
                      for($i=1; $i<=$about_list_no; $i++)
                      {
                    ?>
                    <div class="col-lg-6 col-md-12 col-sm-6 mb-md-3 mb-lg-0 exclusive-offers-box" data-aos="fade-up" data-aos-duration="2000">
                        <div class="exclusive-offers-block">
                            <div class="exclusive-offers-block-inner position-relative">
                                <?php if(get_theme_mod('internet_service_provider_pro_exclusive_offers_icon_box_title'.$i)!=''){ ?>
                                    <h6>
                                        <?php echo esc_html(get_theme_mod('internet_service_provider_pro_exclusive_offers_icon_box_title'.$i)); ?>
                                    </h6>
                                <?php } ?>
                                <div class="exclusive-offers-bottom-block">
                                    <?php if(get_theme_mod('internet_service_provider_pro_exclusive_offers_icon_box_speed'.$i)!=''){ ?>
                                        <span class="exclusive-offers-speed">
                                            <?php echo esc_html(get_theme_mod('internet_service_provider_pro_exclusive_offers_icon_box_speed'.$i)); ?>
                                        </span>
                                    <?php } ?>

                                    <?php if(get_theme_mod('internet_service_provider_pro_exclusive_offers_icon_box_package'.$i)!=''){ ?>
                                        <span class="exclusive-offers-package">
                                            <?php echo esc_html(get_theme_mod('internet_service_provider_pro_exclusive_offers_icon_box_package'.$i)); ?>
                                        </span>
                                    <?php } ?>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php } ?>
                </div>
            </div>
        </div>
    </div>
</section>