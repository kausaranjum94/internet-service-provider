<?php
/**
 * Template part for displaying services
 *
 * @package internet-service-provider-pro
 */

  $section_hide = get_theme_mod( 'internet_service_provider_pro_services_enable' );
  if ( 'Disable' == $section_hide ) {
    return;
  }
  $img_bg = get_theme_mod('internet_service_provider_pro_services_bgimage_setting');
  if( get_theme_mod('internet_service_provider_pro_services_bgcolor','') ) {
    $about_backg = 'background-color:'.esc_attr(get_theme_mod('internet_service_provider_pro_services_bgcolor','')).';';
  }elseif( get_theme_mod('internet_service_provider_pro_services_bgimage','') ){
    $about_backg = 'background-image:url(\''.esc_url(get_theme_mod('internet_service_provider_pro_services_bgimage')).'\')';
  }else{
    $about_backg='';
  }

  $about_col1="";
  $about_col2="";
  if(get_theme_mod('internet_service_provider_pro_services_column_image')!=''){
    $about_col1="col-lg-7 col-md-6";
    $about_col2="col-lg-5 col-md-6";
  }else{
    $about_col1="col-lg-12 col-md-12";
    $about_col2="";
  }
  
?>
<section id="services" style="<?php echo esc_attr($about_backg); ?>"  class="<?php echo esc_attr($img_bg); ?> position-relative">
    <div class="container">
        <div class="row align-items-end mb-5">
            <div class="col-lg-6 col-md-6">
                <div class="services-head section_main_head">
                    <?php if(get_theme_mod('internet_service_provider_pro_services_tagline')!=''){ ?>
                        <span class="section-tagline">
                            <?php echo esc_html(get_theme_mod('internet_service_provider_pro_services_tagline')); ?>
                        </span>
                    <?php } ?>

                    <?php if(get_theme_mod('internet_service_provider_pro_services_main_heading')!=''){ ?>
                        <h3>
                            <?php echo esc_html(get_theme_mod('internet_service_provider_pro_services_main_heading')); ?>
                        </h3>
                    <?php } ?>
                </div>
            </div>
            <div class="col-lg-6 col-md-6">
                <?php if(get_theme_mod('internet_service_provider_pro_services_text')!=''){ ?>
                    <span class="section-text">
                        <?php echo esc_html(get_theme_mod('internet_service_provider_pro_services_text')); ?>
                    </span>
                <?php } ?>
            </div>
            
        </div>
         <div class="about-head-outer mt-4">
            <div class="row services-icon-box justify-content-center">
                <?php
                    $about_list_no = get_theme_mod('internet_service_provider_pro_services_box_number');
                    for($i=1; $i<=$about_list_no; $i++)
                    {
                ?>
                <div class="col-lg-4 col-md-6 col-sm-6 mb-4 services-box" data-aos="fade-up"
                    data-aos-duration="2000">
                    <div class="services-block">
                        <?php if(get_theme_mod('internet_service_provider_pro_services_box_image'.$i)!=''){ ?>
                            <img src="<?php echo esc_html(get_theme_mod('internet_service_provider_pro_services_box_image'.$i)); ?>" >
                        <?php } ?>
                        <div class="services-block-content">
                            <div class="services-block-top-content">
                                <div class="customer-image-box">
                                    <div class="customer-image">
                                        <?php
                                            for($j=1; $j<=3; $j++)
                                            {
                                            ?>
                                                <img src="<?php echo esc_html(get_theme_mod('internet_service_provider_pro_services_box_customer_image'.$i.$j)); ?>"
                                            >
                                        <?php } ?>
                                        <span class="more-customer"><i class="fa-solid fa-plus"></i></span>
                                    </div>
                                </div>
                                <div class="pricing-box">
                                    <div class="pricing-box-title d-flex align-items-center justify-content-between mb-2">
                                        <?php if(get_theme_mod('internet_service_provider_pro_services_box_start_now'.$i)!=''){ ?>
                                            <span class="start-now">
                                                <?php echo esc_html(get_theme_mod('internet_service_provider_pro_services_box_start_now'.$i)); ?>
                                            </span>
                                        <?php } ?>
                                         <?php if(get_theme_mod('internet_service_provider_pro_services_box_link_icon'.$i)!=''){ ?>
                                            <a
                                                href="<?php echo esc_url(get_theme_mod('internet_service_provider_pro_services_box_link_icon_url'.$i)); ?>">
                                                <?php if( get_theme_mod( 'internet_service_provider_pro_services_box_link_icon'.$i,true) != '') { ?>
                                                <i
                                                    class="<?php echo esc_attr(get_theme_mod('internet_service_provider_pro_services_box_link_icon'.$i)); ?>"></i>
                                                <?php } ?>
                                            </a>
                                        <?php } ?>
                                    </div>
                                    <?php if(get_theme_mod('internet_service_provider_pro_services_box_start_now_pricing'.$i)!=''){ ?>
                                        <span class="start-now-pricing">
                                            <?php echo esc_html(get_theme_mod('internet_service_provider_pro_services_box_start_now_pricing'.$i)); ?>
                                        </span>
                                    <?php } ?>
                                </div>
                            </div>
                            <div class="services-block-bottom-content">
                                <?php if(get_theme_mod('internet_service_provider_pro_services_box_title'.$i)!=''){ ?>
                                    <h6>
                                        <?php echo esc_html(get_theme_mod('internet_service_provider_pro_services_box_title'.$i)); ?>
                                    </h6>
                                <?php } ?>
                                <?php if(get_theme_mod('internet_service_provider_pro_services_box_text'.$i)!=''){ ?>
                                    <div class="box-text">
                                        <?php echo esc_html(get_theme_mod('internet_service_provider_pro_services_box_text'.$i)); ?>
                                    </div>
                                <?php } ?>
                            </div>
                        </div>
                    </div>
                </div>
                <?php } ?>
            </div>
        </div>
</section>