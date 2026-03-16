<?php
/**
 * Template part for displaying process
 *
 * @package internet-service-provider-pro
 */

  $section_hide = get_theme_mod( 'internet_service_provider_pro_process_enable' );
  if ( 'Disable' == $section_hide ) {
    return;
  }
  $img_bg = get_theme_mod('internet_service_provider_pro_process_bgimage_setting');
  if( get_theme_mod('internet_service_provider_pro_process_bgcolor','') ) {
    $about_backg = 'background-color:'.esc_attr(get_theme_mod('internet_service_provider_pro_process_bgcolor','')).';';
  }elseif( get_theme_mod('internet_service_provider_pro_process_bgimage','') ){
    $about_backg = 'background-image:url(\''.esc_url(get_theme_mod('internet_service_provider_pro_process_bgimage')).'\')';
  }else{
    $about_backg='';
  }

  $about_col1="";
  $about_col2="";
  if(get_theme_mod('internet_service_provider_pro_process_column_image')!=''){
    $about_col1="col-lg-7 col-md-6";
    $about_col2="col-lg-5 col-md-6";
  }else{
    $about_col1="col-lg-12 col-md-12";
    $about_col2="";
  }
  
?>
<section id="process" style="<?php echo esc_attr($about_backg); ?>" class="<?php echo esc_attr($img_bg); ?> position-relative">
    <div class="container">
        <div class="process-head section_main_head pb-5 text-center">
            <?php if(get_theme_mod('internet_service_provider_pro_process_tagline')!=''){ ?>
            <span class="section-tagline">
                <?php echo esc_html(get_theme_mod('internet_service_provider_pro_process_tagline')); ?>
            </span>
            <?php } ?>

            <?php if(get_theme_mod('internet_service_provider_pro_process_main_heading')!=''){ ?>
            <h3>
                <?php echo esc_html(get_theme_mod('internet_service_provider_pro_process_main_heading')); ?>
            </h3>
            <?php } ?>
        </div>
        <div class="about-head-outer">
            <div class="process-icon-box">
                <?php
                    $about_list_no = get_theme_mod('internet_service_provider_pro_process_icon_box_number');
                    for($i=1; $i<=$about_list_no; $i++)
                    {
                ?>
                <div class="process-box" data-aos="fade-up"
                    data-aos-duration="2000">
                    <div class="process-block">
                        <img src="<?php echo esc_html(get_theme_mod('internet_service_provider_pro_process_icon_box_image'.$i)); ?>"
                            class="img-responsive"
                            data-src="<?php echo esc_html(get_theme_mod('internet_service_provider_pro_process_icon_box_image'.$i)); ?>"
                            data-hover="<?php echo esc_html(get_theme_mod('internet_service_provider_pro_process_icon_box_hover_image'.$i)); ?>">
                         <?php if(get_theme_mod('internet_service_provider_pro_process_icon_box_title'.$i)!=''){ ?>
                        <h6>
                            <?php if(get_theme_mod('internet_service_provider_pro_process_icon_box_link_icon'.$i)!=''){ ?>
                            <a href="<?php echo esc_url(get_theme_mod('internet_service_provider_pro_process_icon_box_link_icon_url'.$i)); ?>">
                            <?php } ?>
                                <?php echo esc_html(get_theme_mod('internet_service_provider_pro_process_icon_box_title'.$i)); ?>
                            <?php if(get_theme_mod('internet_service_provider_pro_process_icon_box_link_icon'.$i)!=''){ ?>
                                </a>
                            <?php } ?>
                        </h6>
                        <?php } ?>

                        <?php if(get_theme_mod('internet_service_provider_pro_process_icon_box_text'.$i)!=''){ ?>
                        <div class="process-box-text">
                            <?php echo esc_html(get_theme_mod('internet_service_provider_pro_process_icon_box_text'.$i)); ?>
                        </div>
                        <?php } ?>
                    </div>
                </div>
                <?php } ?>
            </div>
        </div>
    </div>
</section>