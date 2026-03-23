<?php
/**
 * Template part for displaying about us
 *
 * @package internet-service-provider-pro
 */

  $section_hide = get_theme_mod( 'internet_service_provider_pro_why_choose_us_enable' );
  if ( 'Disable' == $section_hide ) {
    return;
  }
  $img_bg = get_theme_mod('internet_service_provider_pro_why_choose_us_bgimage_setting');
  if( get_theme_mod('internet_service_provider_pro_why_choose_us_bgcolor','') ) {
    $about_backg = 'background-color:'.esc_attr(get_theme_mod('internet_service_provider_pro_why_choose_us_bgcolor','')).';';
  }elseif( get_theme_mod('internet_service_provider_pro_why_choose_us_bgimage','') ){
    $about_backg = 'background-image:url(\''.esc_url(get_theme_mod('internet_service_provider_pro_why_choose_us_bgimage')).'\')';
  }else{
    $about_backg='';
  }

  $about_col1="";
  $about_col2="";
  if(get_theme_mod('internet_service_provider_pro_why_choose_us_column_image')!=''){
    $about_col1="col-lg-7 col-md-6";
    $about_col2="col-lg-5 col-md-6";
  }else{
    $about_col1="col-lg-12 col-md-12";
    $about_col2="";
  }
  
?>
<section id="why-choose-us" style="<?php echo esc_attr($about_backg); ?>"
    class="<?php echo esc_attr($img_bg); ?> position-relative">

    <div class="container">
        <div class="why-choose-us-head section_main_head pb-5 text-center">
            <?php if(get_theme_mod('internet_service_provider_pro_why_choose_us_tagline')!=''){ ?>
            <span class="section-tagline">
                <?php echo esc_html(get_theme_mod('internet_service_provider_pro_why_choose_us_tagline')); ?>
            </span>
            <?php } ?>

            <?php if(get_theme_mod('internet_service_provider_pro_why_choose_us_main_heading')!=''){ ?>
            <h3>
                <?php echo esc_html(get_theme_mod('internet_service_provider_pro_why_choose_us_main_heading')); ?>
            </h3>
            <?php } ?>
        </div>
        <div class="row align-items-end">
            <div class="col-lg-5 col-md-5  image-hover-effect">
                <div class="why-choose-us-image full-height-width-image box ive-internet-service-provider-pro-border-radius-20" data-aos="flip-up" data-aos-duration="1000">
                    <?php if(get_theme_mod('internet_service_provider_pro_why_choose_us_column_image')!=''){ ?>
                        <img src="<?php echo esc_url(get_theme_mod('internet_service_provider_pro_why_choose_us_column_image')); ?>">
                    <?php } ?>
                    <div class="image-caption">
                        <div class="d-flex align-items-center justify-content-between">
                            <div class="media">
                                <span class="image-caption-img">
                                    <?php if(get_theme_mod('internet_service_provider_pro_why_choose_us_column_image_title_image')!=''){ ?>
                                        <img src="<?php echo esc_url(get_theme_mod('internet_service_provider_pro_why_choose_us_column_image_title_image')); ?>">
                                    <?php } ?>
                                </span>
                                <div class="media-body">
                                    <?php if(get_theme_mod('internet_service_provider_pro_why_choose_us_column_image_title')!=''){ ?>
                                        <?php echo esc_html(get_theme_mod('internet_service_provider_pro_why_choose_us_column_image_title')); ?>
                                    <?php } ?>
                                </div>
                            </div>
                            <div class="caption-icon-url">
                            <?php if(get_theme_mod('internet_service_provider_pro_why_choose_us_column_image_link_icon')!=''){ ?>
                                <a
                                    href="<?php echo esc_attr(get_theme_mod('internet_service_provider_pro_why_choose_us_column_image_link')); ?>">
                                    <?php if( get_theme_mod( 'internet_service_provider_pro_why_choose_us_column_image_link_icon',true) != '') { ?>
                                    <i
                                        class="<?php echo esc_attr(get_theme_mod('internet_service_provider_pro_why_choose_us_column_image_link_icon')); ?>"></i>
                                    <?php } ?>
                                </a>
                            <?php } ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-7 col-md-7">
                <div class="whychoose-icon-box">
                    <?php
                      $about_list_no = get_theme_mod('internet_service_provider_pro_why_choose_us_icon_box_number');
                      for($i=1; $i<=$about_list_no; $i++)
                      {
                    ?>
                    <div class="whychoose-box" data-aos="fade-up" data-aos-duration="2000">
                        <div class="why-choose-us-block row">
                            <div class="why-choose-us-col-left col-lg-6 col-md-6 col-sm-6">
                                <div class="media">
                                    <?php if(get_theme_mod('internet_service_provider_pro_why_choose_us_icon_box_step'.$i)!=''){ ?>
                                        <span class="why-choose-us-step">
                                            <?php echo esc_html(get_theme_mod('internet_service_provider_pro_why_choose_us_icon_box_step'.$i)); ?>
                                        </span>
                                    <?php } ?>
                                    <?php if(get_theme_mod('internet_service_provider_pro_why_choose_us_icon_box_title'.$i)!=''){ ?>
                                        <h6>
                                            <?php echo esc_html(get_theme_mod('internet_service_provider_pro_why_choose_us_icon_box_title'.$i)); ?>
                                        </h6>
                                    <?php } ?>
                                </div>
                            </div>
                            <div class="why-choose-us-col-right col-lg-6 col-md-6 col-sm-6">
                                <?php if(get_theme_mod('internet_service_provider_pro_why_choose_us_icon_box_text'.$i)!=''){ ?>
                                    <div class="box-text">
                                        <?php echo esc_html(get_theme_mod('internet_service_provider_pro_why_choose_us_icon_box_text'.$i)); ?>
                                    </div>
                                <?php } ?>
                            </div>
                        </div>
                    </div>
                    <?php } ?>
                </div>
                <div class="why-choose-us-bottom-row row align-items-end">
                    <div class="col-lg-6 col-md-6 col-sm-6">
                        <?php if(get_theme_mod('internet_service_provider_pro_why_choose_us_bottom_block_text')!=''){ ?>
                            <span class="why-choose-us-bottom-text">
                                <?php echo esc_html(get_theme_mod('internet_service_provider_pro_why_choose_us_bottom_block_text')); ?>
                            </span>
                        <?php } ?>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-6">
                        <div class="why-choose-us-bottom-block">
                            <?php if(get_theme_mod('internet_service_provider_pro_why_choose_us_bottom_block_tagline')!=''){ ?>
                                <span class="why-choose-us-bottom-tagline">
                                    <svg width="14" height="14" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M7.36001 13.4323C7.12833 13.5217 6.87168 13.5217 6.64001 13.4323V13.4323C4.83228 12.7383 3.2776 11.5123 2.18135 9.91608C1.08509 8.3199 0.498834 6.42872 0.500006 4.49235V1.88235C0.499458 1.77285 0.534167 1.66608 0.599 1.57783C0.663834 1.48959 0.755348 1.42455 0.860006 1.39235C4.86688 0.202551 9.13313 0.202551 13.14 1.39235C13.2447 1.42455 13.3362 1.48959 13.401 1.57783C13.4658 1.66608 13.5006 1.77285 13.5 1.88235V4.49235C13.5012 6.42872 12.9149 8.3199 11.8187 9.91608C10.7224 11.5123 9.16774 12.7383 7.36001 13.4323V13.4323Z" stroke="white" stroke-linecap="round" stroke-linejoin="round"/>
                                    </svg>

                                    <?php echo esc_html(get_theme_mod('internet_service_provider_pro_why_choose_us_bottom_block_tagline')); ?>
                                </span>
                            <?php } ?>
                            <div class="speed-text">
                                <?php if(get_theme_mod('internet_service_provider_pro_why_choose_us_bottom_block_speed_text')!=''){ ?>
                                    <span class="why-choose-us-bottom-speed-text">
                                        <?php echo esc_html(get_theme_mod('internet_service_provider_pro_why_choose_us_bottom_block_speed_text')); ?>
                                    </span>
                                <?php } ?>
                                <?php if(get_theme_mod('internet_service_provider_pro_why_choose_us_bottom_block_speed')!=''){ ?>
                                    <span class="why-choose-us-bottom-speed">
                                        <?php echo esc_html(get_theme_mod('internet_service_provider_pro_why_choose_us_bottom_block_speed')); ?>
                                    </span>
                                <?php } ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>