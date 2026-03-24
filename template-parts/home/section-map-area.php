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

    <?php
        $about_list_no = get_theme_mod('internet_service_provider_pro_map_area_areas_number');
        ?>

        <!-- Ticker -->
        <div class="ticker-wrapper mb-5">
            <ul class="ticker nav nav-tabs">
                <?php for($i=1; $i<=$about_list_no; $i++): ?>
                    <?php if(get_theme_mod('internet_service_provider_pro_map_area_name'.$i)!=''): ?>
                        <li class="nav-item">
                            <button class="nav-link map-area-name"
                                    data-bs-toggle="tab"
                                    data-bs-target="#map-area-<?php echo $i; ?>">
                                <?php echo esc_html(get_theme_mod('internet_service_provider_pro_map_area_name'.$i)); ?>
                            </button>
                        </li>
                    <?php endif; ?>
                <?php endfor; ?>
            </ul>
        </div>

        <!-- Bootstrap Tabs Content -->
        <div class="tab-content">
            <?php $api_key = get_theme_mod('internet_service_provider_pro_map_area_api_key_map'); ?>

            <?php for($i=1; $i<=$about_list_no; $i++): ?>
                <div class="tab-pane fade <?php echo ($i == 1) ? 'show active' : ''; ?>" id="map-area-<?php echo $i; ?>">
                    <?php 
                    $type = get_theme_mod('internet_service_provider_pro_map_area_type_'.$i);
                    $name = get_theme_mod('internet_service_provider_pro_map_area_name_'.$i);
                    ?>
                    <?php if($name): ?>
                        <?php if($type === 'image'): ?>
                            <?php $img = get_theme_mod('internet_service_provider_pro_map_area_image_'.$i); ?>
                            <?php if($img): ?>
                                <img src="<?php echo esc_url($img); ?>" alt="<?php echo esc_attr($name); ?>" class="img-fluid rounded shadow">
                            <?php endif; ?>
                        <?php else: ?>
                            <?php 
                            $lat = trim(get_theme_mod('internet_service_provider_pro_map_area_lat'.$i));
                            $lng = trim(get_theme_mod('internet_service_provider_pro_map_area_lng'.$i));

                            ?>
                            <?php if($lat && $lng): ?>
                                <?php if ($lat != "" && $lng ) { ?>
                                    <embed width="100%" height="793" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?q=<?php echo esc_attr($lat); ?>,<?php echo esc_attr($lng); ?>&hl=es;z=14&amp;output=embed"></embed>
                                <?php } ?>

                            <?php endif; ?>
                        <?php endif; ?>
                    <?php endif; ?>
                </div>
            <?php endfor; ?>
        </div>
</section>