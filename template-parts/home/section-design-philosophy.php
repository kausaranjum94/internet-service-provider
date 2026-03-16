<?php
/**
 * Template part for displaying design philosophy
 *
 * @package internet-service-provider-pro
 */

  $section_hide = get_theme_mod( 'internet_service_provider_pro_design_philosophy_enable' );
  if ( 'Disable' == $section_hide ) {
    return;
  }
  $img_bg = get_theme_mod('internet_service_provider_pro_design_philosophy_bgimage_setting');
  if( get_theme_mod('internet_service_provider_pro_design_philosophy_bgcolor','') ) {
    $about_backg = 'background-color:'.esc_attr(get_theme_mod('internet_service_provider_pro_design_philosophy_bgcolor','')).';';
  }elseif( get_theme_mod('internet_service_provider_pro_design_philosophy_bgimage','') ){
    $about_backg = 'background-image:url(\''.esc_url(get_theme_mod('internet_service_provider_pro_design_philosophy_bgimage')).'\')';
  }else{
    $about_backg='';
  }

  $about_col1="";
  $about_col2="";
  if(get_theme_mod('internet_service_provider_pro_design_philosophy_column_image')!=''){
    $about_col1="col-lg-7 col-md-6";
    $about_col2="col-lg-5 col-md-6";
  }else{
    $about_col1="col-lg-12 col-md-12";
    $about_col2="";
  }
  
?>
<section id="design-philosophy" style="<?php echo esc_attr($about_backg); ?>"
    class="<?php echo esc_attr($img_bg); ?> position-relative">
    <div class="container">
        <div class="row">
            <div class="design-philosophy-head section_main_head pb-5 text-center">
                <?php if(get_theme_mod('internet_service_provider_pro_design_philosophy_tagline')!=''){ ?>
                    <span class="section-tagline">
                        <?php echo esc_html(get_theme_mod('internet_service_provider_pro_design_philosophy_tagline')); ?>
                    </span>
                <?php } ?>

                <?php if(get_theme_mod('internet_service_provider_pro_design_philosophy_main_heading')!=''){ ?>
                    <h3>
                        <?php echo esc_html(get_theme_mod('internet_service_provider_pro_design_philosophy_main_heading')); ?>
                    </h3>
                <?php } ?>
            </div>
            <div class="design-philosophy-outer">
                <div class="row design-philosophy-icon-box">
                    <?php
                      $about_list_no = get_theme_mod('internet_service_provider_pro_design_philosophy_box_number');
                      for($i=1; $i<=$about_list_no; $i++)
                      {
                    ?>
                    <div class="col-lg-4 col-md-4 col-sm-6 mb-4 design-philosophy-box text-center" data-aos="fade-up"
                        data-aos-duration="2000">
                        <div class="design-philosophy-block position-relative">
                            <div class="design-philosophy-block-image">
                                <img
                                    src="<?php echo esc_html(get_theme_mod('internet_service_provider_pro_design_philosophy_box_image'.$i)); ?>">
                                <div class="box-content">
                                    <div class="inner-content">
                                    </div>
                                </div>
                            </div>
                            <h6>
                                <?php if(get_theme_mod('internet_service_provider_pro_design_philosophy_box_title'.$i)!=''){ ?>
                                <?php echo esc_html(get_theme_mod('internet_service_provider_pro_design_philosophy_box_title'.$i)); ?>
                                <?php } ?>
                            </h6>

                            <?php if(get_theme_mod('internet_service_provider_pro_design_philosophy_box_text'.$i)!=''){ ?>
                            <div class="box-text">
                                <?php echo esc_html(get_theme_mod('internet_service_provider_pro_design_philosophy_box_text'.$i)); ?>
                            </div>
                            <?php } ?>
                        </div>
                    </div>
                    <?php } ?>
                </div>
            </div>
        </div>
    </div>
</section>