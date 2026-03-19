<?php
/**
 * Template part for displaying Map Area
 *
 * @package internet-service-provider-pro
 */

  $section_hide = get_theme_mod( 'internet_service_provider_pro_map_area_enable' );
  if ( 'Disable' == $section_hide ) {
    return;
  }
  $img_bg = get_theme_mod('internet_service_provider_pro_map_area_bgimage_setting');
  if( get_theme_mod('internet_service_provider_pro_map_area_bgcolor','') ) {
    $about_backg = 'background-color:'.esc_attr(get_theme_mod('internet_service_provider_pro_map_area_bgcolor','')).';';
  }elseif( get_theme_mod('internet_service_provider_pro_map_area_bgimage','') ){
    $about_backg = 'background-image:url(\''.esc_url(get_theme_mod('internet_service_provider_pro_map_area_bgimage')).'\')';
  }else{
    $about_backg='';
  }
?>
<section id="map-area" style="<?php echo esc_attr($about_backg); ?>"
    class="<?php echo esc_attr($img_bg); ?> position-relative">
    <div class="container">
        <div class="row align-items-end mb-5">
            <div class="col-lg-5 col-md-5 map-area-head-listing">
                <div class="map-area-head section_main_head">
                    <?php if(get_theme_mod('internet_service_provider_pro_map_area_tagline')!=''){ ?>
                        <span class="section-tagline">
                            <?php echo esc_html(get_theme_mod('internet_service_provider_pro_map_area_tagline')); ?>
                        </span>
                    <?php } ?>

                    <?php if(get_theme_mod('internet_service_provider_pro_map_area_main_heading')!=''){ ?>
                        <h3>
                            <?php echo esc_html(get_theme_mod('internet_service_provider_pro_map_area_main_heading')); ?>
                        </h3>
                    <?php } ?>
                </div>
            </div>
            <div class="col-lg-7 col-md-7">
                <?php if(get_theme_mod('internet_service_provider_pro_map_area_text')!=''){ ?>
                    <div class="section-text">
                        <?php echo esc_html(get_theme_mod('internet_service_provider_pro_map_area_text')); ?>
                    </div>
                <?php } ?>
            </div>
        </div>
    </div>
    <ul>

    <div class="ticker-wrapper mb-5">
        <ul class="ticker">
            <?php
            $about_list_no = get_theme_mod('internet_service_provider_pro_map_area_areas_number');
            for($i=1; $i<=$about_list_no; $i++) {
                if(get_theme_mod('internet_service_provider_pro_map_area_name'.$i)!=''){ ?>
                    <li>
                        <span class="map-area-name">
                            <?php echo esc_html(get_theme_mod('internet_service_provider_pro_map_area_name'.$i)); ?>
                        </span>
                    </li>
                <?php }
            } ?>

            <!-- Duplicate list for seamless loop -->
            <?php
            for($i=1; $i<=$about_list_no; $i++) {
                if(get_theme_mod('internet_service_provider_pro_map_area_name'.$i)!=''){ ?>
                    <li>
                        <span class="map-area-name">
                            <?php echo esc_html(get_theme_mod('internet_service_provider_pro_map_area_name'.$i)); ?>
                        </span>
                    </li>
                <?php }
            } ?>
        </ul>
    </div>


    <div id="map-container" class=" map-imgae full-height-width-image">
        <?php if(get_theme_mod('internet_service_provider_pro_map_area_map_image')!=''){ ?>
            <img id="map-image" src="<?php echo esc_url(get_theme_mod('internet_service_provider_pro_map_area_map_image')); ?>">
        <?php } ?>
    </div>
</section>