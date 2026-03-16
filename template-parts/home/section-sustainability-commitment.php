<?php
/**
 * Template part for displaying sustainability_commitment
 *
 * @package internet-service-provider-pro
 */

  $section_hide = get_theme_mod( 'internet_service_provider_pro_sustainability_commitment_enable' );
  if ( 'Disable' == $section_hide ) {
    return;
  }
  $img_bg = get_theme_mod('internet_service_provider_pro_sustainability_commitment_bgimage_setting');
  if( get_theme_mod('internet_service_provider_pro_sustainability_commitment_bgcolor','') ) {
    $about_backg = 'background-color:'.esc_attr(get_theme_mod('internet_service_provider_pro_sustainability_commitment_bgcolor','')).';';
  }elseif( get_theme_mod('internet_service_provider_pro_sustainability_commitment_bgimage','') ){
    $about_backg = 'background-image:url(\''.esc_url(get_theme_mod('internet_service_provider_pro_sustainability_commitment_bgimage')).'\')';
  }else{
    $about_backg='';
  }

  $about_col1="";
  $about_col2="";
  if(get_theme_mod('internet_service_provider_pro_sustainability_commitment_column_image')!=''){
    $about_col1="col-lg-7 col-md-6";
    $about_col2="col-lg-5 col-md-6";
  }else{
    $about_col1="col-lg-12 col-md-12";
    $about_col2="";
  }
  
?>
<section id="sustainability-commitment" style="<?php echo esc_attr($about_backg); ?>" class="<?php echo esc_attr($img_bg); ?> position-relative">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-6">
                <div class="sustainability_commitment-head section_main_head pb-4">
                    <?php if(get_theme_mod('internet_service_provider_pro_sustainability_commitment_tagline')!=''){ ?>
                        <span class="section-tagline">
                            <?php echo esc_html(get_theme_mod('internet_service_provider_pro_sustainability_commitment_tagline')); ?>
                        </span>
                    <?php } ?>

                    <?php if(get_theme_mod('internet_service_provider_pro_sustainability_commitment_main_heading')!=''){ ?>
                        <h3>
                            <?php echo esc_html(get_theme_mod('internet_service_provider_pro_sustainability_commitment_main_heading')); ?>
                        </h3>
                    <?php } ?>
                </div>
                 <div class="sustainability-commitment-image" data-aos="flip-up" data-aos-duration="1000">
                    <?php if(get_theme_mod('internet_service_provider_pro_sustainability_commitment_column_image')!=''){ ?>
                    <img src="<?php echo esc_url(get_theme_mod('internet_service_provider_pro_sustainability_commitment_column_image')); ?>">
                <?php } ?>
            </div>
            </div>
            <div class="col-lg-6 col-md-6">
                <div class="sustainability-commitment-head-outer">
                    <div class="sustainability-commitment-icon-box">
                        <?php
                            $about_list_no = get_theme_mod('internet_service_provider_pro_sustainability_commitment_icon_box_number');
                            for($i=1; $i<=$about_list_no; $i++)
                            {
                        ?>
                        <div class="sustainability-commitment-box" data-aos="fade-up"
                            data-aos-duration="2000">
                            <div class="sustainability-commitment-content position-relative">
                                <div class="media align-items-center">
                                    <?php if(get_theme_mod('internet_service_provider_pro_sustainability_commitment_icon_box_image'.$i)!=''){ ?>
                                        <div class="sustainability-commitment-icon-image">
                                            <img src="<?php echo esc_html(get_theme_mod('internet_service_provider_pro_sustainability_commitment_icon_box_image'.$i)); ?>">
                                        </div>
                                    <?php } ?>
                                    <div class="media-body">
                                        <?php if(get_theme_mod('internet_service_provider_pro_sustainability_commitment_icon_box_title'.$i)!=''){ ?>
                                        <h6>
                                            <?php if(get_theme_mod('internet_service_provider_pro_sustainability_commitment_icon_box_link_icon'.$i)!=''){ ?>
                                            <a href="<?php echo esc_url(get_theme_mod('internet_service_provider_pro_sustainability_commitment_icon_box_link_icon_url'.$i)); ?>">
                                            <?php } ?>
                                                <?php echo esc_html(get_theme_mod('internet_service_provider_pro_sustainability_commitment_icon_box_title'.$i)); ?>
                                            <?php if(get_theme_mod('internet_service_provider_pro_sustainability_commitment_icon_box_link_icon'.$i)!=''){ ?>
                                                </a>
                                            <?php } ?>
                                        </h6>
                                        <?php } ?>

                                        <?php if(get_theme_mod('internet_service_provider_pro_sustainability_commitment_icon_box_text'.$i)!=''){ ?>
                                        <div class="sustainability-commitment-box-text">
                                            <?php if(get_theme_mod('internet_service_provider_pro_sustainability_commitment_icon_box_percentage'.$i)!=''){ ?>
                                                <span class="sustainability-commitment-percentage">
                                                    <?php echo esc_html(get_theme_mod('internet_service_provider_pro_sustainability_commitment_icon_box_percentage'.$i)); ?>
                                                </span>
                                            <?php } ?>
                                            <?php echo esc_html(get_theme_mod('internet_service_provider_pro_sustainability_commitment_icon_box_text'.$i)); ?>
                                        </div>
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
    </div>
</section>