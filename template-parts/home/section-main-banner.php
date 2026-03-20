<?php
/**
 * Template part for displaying main banner
 *
 * @package internet-service-provider-pro
 */

  $section_hide = get_theme_mod( 'internet_service_provider_pro_main_banner_enable' );
  if ( 'Disable' == $section_hide ) {
    return;
  }
  $img_bg = get_theme_mod('internet_service_provider_pro_main_banner_bgimage_setting');
  if( get_theme_mod('internet_service_provider_pro_main_banner_bgcolor','') ) {
    $about_backg = esc_attr(get_theme_mod('internet_service_provider_pro_main_banner_bgcolor',''));
  }elseif( get_theme_mod('internet_service_provider_pro_main_banner_bgimage','') ){
    $about_backg = esc_attr(get_theme_mod('internet_service_provider_pro_main_banner_bgimage',''));
  }else{
    $about_backg='';
  }
  
?>
<section id="main-banner" class="<?php echo esc_attr($img_bg); ?>  position-relative">
    
    <div class="container">
        <div class="main-banner-row row">
            <div class="col-lg-5 col-md-5" data-aos="fade-right" data-aos-duration="2000">
                <div class="banner-head-outer">
                    <div class="banner-head pb-2">
                        <?php if(get_theme_mod('internet_service_provider_pro_main_banner_tagline')!=''){ ?>
                            <span class="section-tagline" data-aos="fade-up" data-aos-duration="800">
                                <?php echo esc_html(get_theme_mod('internet_service_provider_pro_main_banner_tagline')); ?>
                            </span>
                        <?php } ?>

                        <?php if(get_theme_mod('internet_service_provider_pro_main_banner_main_heading')!='' || get_theme_mod('internet_service_provider_pro_main_banner_main_heading2')!='' || get_theme_mod('internet_service_provider_pro_main_banner_main_heading3')!=''){ ?>
                        <h1 data-aos="fade-up" data-aos-duration="900">
                            <span class="heading-span0"><?php echo esc_html(get_theme_mod('internet_service_provider_pro_main_banner_main_heading')); ?></span>
                            <?php if(get_theme_mod('internet_service_provider_pro_main_banner_main_heading')!=''){ ?>
                            <span class="heading-span1" data-aos="fade-up" data-aos-duration="800">
                                <?php echo esc_html(get_theme_mod('internet_service_provider_pro_main_banner_main_heading2')); ?>
                            </span>
                            <?php } ?>
                             <?php if(get_theme_mod('internet_service_provider_pro_main_banner_heading_image')!=''){ ?>
                                <img src="<?php echo esc_url(get_theme_mod('internet_service_provider_pro_main_banner_heading_image')); ?>">
                            <?php } ?>
                        </h1>
                        <?php } ?>

                        <?php if(get_theme_mod('internet_service_provider_pro_main_banner_text')!=''){ ?>
                            <div class="section-text" data-aos="fade-up" data-aos-duration="1000">
                                <?php echo get_theme_mod('internet_service_provider_pro_main_banner_text'); ?>
                            </div>
                        <?php } ?>
                        <div class="d-flex align-items-center my-4 bth-block">
                            <?php if(get_theme_mod('internet_service_provider_pro_main_banner_button_title')!=''){ ?>
                                <div class="main-banner-button" data-aos="fade-up" data-aos-duration="1100">
                                    <a class="theme_button" href="<?php echo esc_url(get_theme_mod('internet_service_provider_pro_main_banner_button_url')); ?>">
                                        <span><?php echo esc_html(get_theme_mod('internet_service_provider_pro_main_banner_button_title')); ?></span>
                                    </a>
                                </div>
                            <?php } ?>
                            <?php if(get_theme_mod('internet_service_provider_pro_main_banner_link_text')!=''){ ?>
                                <div class="main-banner-link" data-aos="fade-up" data-aos-duration="1100">
                                    <a href="<?php echo esc_url(get_theme_mod('internet_service_provider_pro_main_banner_link_url')); ?>">
                                        <?php echo esc_html(get_theme_mod('internet_service_provider_pro_main_banner_link_text')); ?>
                                    </a>
                                </div>
                            <?php } ?>
                        </div>
                        <div class="d-flex align-items-center my-4 rating-blk-wrap">
                            <div class="rating-blk">
                                <?php if(get_theme_mod('internet_service_provider_pro_main_banner_rating_text')!=''){ ?>
                                    <div class="rating-box" data-aos="fade-up" data-aos-duration="800">
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <span class="rating-tagline" data-aos="fade-up" data-aos-duration="800"><?php echo esc_html(get_theme_mod('internet_service_provider_pro_main_banner_rating_text')); ?></span>
                                    </div>
                                <?php } ?>
                                <div class="customer-image">
                                    <?php
                                        for($i=1; $i<=4; $i++)
                                        {
                                        ?>
                                            <img src="<?php echo esc_html(get_theme_mod('internet_service_provider_pro_main_banner_customer_image'.$i)); ?>"
                                        >
                                    <?php } ?>
                                </div>
                            </div>
                            <div class="customer-records">
                                <?php if(get_theme_mod('internet_service_provider_pro_main_banner_customer_number')!=''){ ?>
                                    <span class="customer-number" data-aos="fade-up" data-aos-duration="1100">
                                        <?php echo esc_html(get_theme_mod('internet_service_provider_pro_main_banner_customer_number')); ?>
                                    </span>
                                <?php } ?>
                                <?php if(get_theme_mod('internet_service_provider_pro_main_banner_customer_text')!=''){ ?>
                                    <span class="customer-text" data-aos="fade-up" data-aos-duration="1100">
                                        <?php echo esc_html(get_theme_mod('internet_service_provider_pro_main_banner_customer_text')); ?>
                                    </span>
                                <?php } ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-4">
                <div class="banner-column-image">
                    <?php if(get_theme_mod('internet_service_provider_pro_main_banner_column_image')!=''){ ?>
                        <img src="<?php echo esc_url(get_theme_mod('internet_service_provider_pro_main_banner_column_image')); ?>">
                    <?php } ?>
                    <div class="rating-records">
                        <?php if(get_theme_mod('internet_service_provider_pro_main_banner_column_image_pricing_text')!=''){ ?>
                            <span class="pricing-text" data-aos="fade-up" data-aos-duration="1100">
                                <?php echo esc_html(get_theme_mod('internet_service_provider_pro_main_banner_column_image_pricing_text')); ?>
                            </span>
                        <?php } ?>
                        <?php if(get_theme_mod('internet_service_provider_pro_main_banner_column_image_pricing_text2')!=''){ ?>
                            <span class="pricing-text2" data-aos="fade-up" data-aos-duration="1100">
                                <?php echo esc_html(get_theme_mod('internet_service_provider_pro_main_banner_column_image_pricing_text2')); ?>
                                <?php if(get_theme_mod('internet_service_provider_pro_main_banner_column_image_pricing_text2')!=''){ ?>
                                    <a href="<?php echo esc_html(get_theme_mod('internet_service_provider_pro_main_banner_column_image_pricing_link')); ?>" data-aos="fade-up" data-aos-duration="1100">
                                        <i class="fa-solid fa-arrow-right"></i>
                                    </a>
                                <?php } ?>
                            </span>
                        <?php } ?>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-3 image-hover-effect">
                <div class="banner-roght-column-image">
                    <?php if(get_theme_mod('internet_service_provider_pro_main_banner_last_column_text')!=''){ ?>
                        <span class="right-column-text" data-aos="fade-up" data-aos-duration="1100">
                            <?php echo esc_html(get_theme_mod('internet_service_provider_pro_main_banner_last_column_text')); ?>
                        </span>
                    <?php } ?>
                    <div class="box my-4 ive-internet-service-provider-pro-border-radius-20">
                        <?php if(get_theme_mod('internet_service_provider_pro_main_banner_column_image2')!=''){ ?>
                            <img src="<?php echo esc_url(get_theme_mod('internet_service_provider_pro_main_banner_column_image2')); ?>">
                        <?php } ?>
                    </div>
                    <?php if(get_theme_mod('internet_service_provider_pro_main_banner_last_column_text2')!=''){ ?>
                        <span class="right-column-text2" data-aos="fade-up" data-aos-duration="1100">
                            <?php echo esc_html(get_theme_mod('internet_service_provider_pro_main_banner_last_column_text2')); ?>
                        </span>
                    <?php } ?>
                </div>
            </div>
        </div>
    </div>
    <div class="main-banner-vector-shape">
        <?php if(get_theme_mod('internet_service_provider_pro_main_banner_vector_image')!=''){ ?>
            <img src="<?php echo esc_url(get_theme_mod('internet_service_provider_pro_main_banner_vector_image')); ?>">
        <?php } ?>
    </div>
</section>