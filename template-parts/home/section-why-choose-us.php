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
        <div class="row">
            <div class="about-head section_main_head pb-5 text-center">
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
            <div class="about-head-outer mt-4">
                <div class="row whychoose-icon-box">
                    <?php
                      $about_list_no = get_theme_mod('internet_service_provider_pro_why_choose_us_icon_box_number');
                      for($i=1; $i<=$about_list_no; $i++)
                      {
                    ?>
                    <div class="col-lg-3 col-md-3 col-sm-6 mb-4 whychoose-box text-center" data-aos="fade-up"
                        data-aos-duration="2000">
                        <div class="why-choose-us-block">
                            <img src="<?php echo esc_html(get_theme_mod('internet_service_provider_pro_why_choose_us_icon_box_image'.$i)); ?>"
                                class="img-responsive"
                                data-src="<?php echo esc_html(get_theme_mod('internet_service_provider_pro_why_choose_us_icon_box_image'.$i)); ?>"
                                data-hover="<?php echo esc_html(get_theme_mod('internet_service_provider_pro_why_choose_us_icon_box_hover_image'.$i)); ?>">
                            <h6>
                                <?php if(get_theme_mod('internet_service_provider_pro_why_choose_us_icon_box_title'.$i)!=''){ ?>
                                <?php echo esc_html(get_theme_mod('internet_service_provider_pro_why_choose_us_icon_box_title'.$i)); ?>
                                <?php } ?>
                            </h6>

                            <?php if(get_theme_mod('internet_service_provider_pro_why_choose_us_icon_box_text'.$i)!=''){ ?>
                            <div class="box-text">
                                <?php echo esc_html(get_theme_mod('internet_service_provider_pro_why_choose_us_icon_box_text'.$i)); ?>
                            </div>
                            <?php } ?>

                            <div class="icon-url">
                                <?php if(get_theme_mod('internet_service_provider_pro_why_choose_us_icon_box_link_icon'.$i)!=''){ ?>
                                <a
                                    href="<?php echo esc_url(get_theme_mod('internet_service_provider_pro_why_choose_us_icon_box_link_icon_url'.$i)); ?>">
                                    <?php if( get_theme_mod( 'internet_service_provider_pro_why_choose_us_icon_box_link_icon'.$i,true) != '') { ?>
                                    <i
                                        class="<?php echo esc_attr(get_theme_mod('internet_service_provider_pro_why_choose_us_icon_box_link_icon'.$i)); ?>"></i>
                                    <?php } ?>
                                </a>
                                <?php } ?>
                            </div>
                        </div>
                    </div>
                    <?php } ?>
                </div>
            </div>
        </div>
</section>