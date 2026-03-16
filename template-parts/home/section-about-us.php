<?php
/**
 * Template part for displaying about us
 *
 * @package internet-service-provider-pro
 */

  $section_hide = get_theme_mod( 'internet_service_provider_pro_about_us_enable' );
  if ( 'Disable' == $section_hide ) {
    return;
  }
  $img_bg = get_theme_mod('internet_service_provider_pro_about_us_bgimage_setting');
  if( get_theme_mod('internet_service_provider_pro_about_us_bgcolor','') ) {
    $about_backg = 'background-color:'.esc_attr(get_theme_mod('internet_service_provider_pro_about_us_bgcolor','')).';';
  }elseif( get_theme_mod('internet_service_provider_pro_about_us_bgimage','') ){
    $about_backg = 'background-image:url(\''.esc_url(get_theme_mod('internet_service_provider_pro_about_us_bgimage')).'\')';
  }else{
    $about_backg='';
  }

  $about_col1="";
  $about_col2="";
  if(get_theme_mod('internet_service_provider_pro_about_us_column_image')!=''){
    $about_col1="col-lg-7 col-md-6";
    $about_col2="col-lg-5 col-md-6";
  }else{
    $about_col1="col-lg-12 col-md-12";
    $about_col2="";
  }
  
?>
<section id="about-us" style="<?php echo esc_attr($about_backg); ?>"
    class="<?php echo esc_attr($img_bg); ?> position-relative">
    <div class="row ">
        <div class="col-lg-4 col-md-4">
            <div class="about-image about-image1" data-aos="flip-up" data-aos-duration="1000">
                <?php if(get_theme_mod('internet_service_provider_pro_about_us_column_image')!=''){ ?>
                <img src="<?php echo esc_url(get_theme_mod('internet_service_provider_pro_about_us_column_image')); ?>">
                <?php } ?>
            </div>
        </div>
        <div class="col-lg-4 col-md-4 align-items-center d-flex">
            <div class="about-head-outer">
                <div class="about-head section_main_head text-center">

                    <?php if(get_theme_mod('internet_service_provider_pro_about_us_tagline')!=''){ ?>
                    <span class="section-tagline" data-aos="fade-right" data-aos-duration="800">
                        <?php echo esc_html(get_theme_mod('internet_service_provider_pro_about_us_tagline')); ?>
                    </span>
                    <?php } ?>
                    <?php if(get_theme_mod('internet_service_provider_pro_about_us_main_heading')!=''){ ?>
                    <h3 data-aos="fade-right" data-aos-duration="800">
                        <?php echo esc_html(get_theme_mod('internet_service_provider_pro_about_us_main_heading')); ?>
                    </h3>
                    <?php } ?>

                    <?php if(get_theme_mod('internet_service_provider_pro_about_us_text')!=''){ ?>
                    <div class="section-text" data-aos="fade-right" data-aos-duration="900">
                        <?php echo get_theme_mod('internet_service_provider_pro_about_us_text'); ?>
                    </div>
                    <?php } ?>

                    <?php if(get_theme_mod('internet_service_provider_pro_about_us_button_title')!=''){ ?>
                    <div class="banner_btn mt-3">
                        <a class="theme_button"
                            href="<?php echo esc_url(get_theme_mod('internet_service_provider_pro_about_us_button_url')); ?>">
                            <?php echo esc_html(get_theme_mod('internet_service_provider_pro_about_us_button_title')); ?>
                            <?php if( get_theme_mod( 'internet_service_provider_pro_about_us_button_icon',true) != '') { ?>
                            <span class="button-icon"><i
                                    class="<?php echo esc_attr(get_theme_mod('internet_service_provider_pro_about_us_button_icon')); ?>"></i></span>
                            <?php } ?>
                        </a>
                    </div>
                    <?php } ?>
                </div>
            </div>
        </div>
        <div class="col-lg-4 col-md-4">
            <div class="about-image about-image2" data-aos="flip-up" data-aos-duration="1000">
                <?php if(get_theme_mod('internet_service_provider_pro_about_us_column_image2')!=''){ ?>
                <img src="<?php echo esc_url(get_theme_mod('internet_service_provider_pro_about_us_column_image2')); ?>">
                <?php } ?>
            </div>
        </div>
    </div>
</section>