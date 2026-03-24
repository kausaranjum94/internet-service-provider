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
                $services = new WP_Query(array(
                    'post_type'      => 'services',
                    'posts_per_page' => get_theme_mod('internet_service_provider_pro_services_box_number'),
                    'order'          => 'ASC',
                ));

                if($services->have_posts()):
                    while($services->have_posts()): $services->the_post();
                        $price_text       = get_post_meta(get_the_ID(), '_price_text', true);
                        $price            = get_post_meta(get_the_ID(), '_price', true);
                        $short_description= get_post_meta(get_the_ID(), '_short_description', true);
                        $bg               = get_post_meta(get_the_ID(), '_background_style', true);
                        $images           = get_post_meta(get_the_ID(), '_customer_images', true);
                        $images_array     = !empty($images) ? explode(',', $images) : array();
                ?>
                <div class="col-lg-4 col-md-6 col-sm-6 mb-4 services-box <?php echo esc_attr($bg); ?>" data-aos="fade-up" data-aos-duration="2000">
                    <div class="services-block ">
                        <?php if(has_post_thumbnail()): ?>
                            <?php the_post_thumbnail('medium'); ?>
                        <?php endif; ?>
                        <div class="services-block-content">
                            <div class="services-block-top-content">
                                <div class="customer-image-box">
                                    <div class="customer-image">
                                        <?php 
                                        $count = 0;
                                        foreach($images_array as $id){
                                            if($count >= 3) break; // limit to 3
                                            echo wp_get_attachment_image((int) $id, 'thumbnail');
                                            $count++;
                                        }
                                        ?>
                                        
                                        <span class="more-customer"><i class="fa-solid fa-plus"></i></span>
                                    </div>
                                </div>
                                <div class="pricing-box">
                                    <div class="pricing-box-title d-flex align-items-center justify-content-between mb-2">
                                        <?php if(!empty($price_text)): ?>
                                            <span class="start-now"><?php echo esc_html($price_text); ?></span>
                                        <?php endif; ?>
                                        
                                        <a href="<?php the_permalink(); ?>">
                                            <i class="fa-solid fa-arrow-right"></i>
                                        </a>
                                    </div>
                                    <?php if(!empty($price)): ?>
                                        <span class="start-now-pricing"><?php echo esc_html($price); ?></span>
                                    <?php endif; ?>
                                </div>
                            </div>
                            <div class="services-block-bottom-content">
                                <h6><?php the_title(); ?></h6>
                                <?php if(!empty($short_description)): ?>
                                    <div class="box-text"><?php echo esc_html($short_description); ?></div>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
                </div>
                <?php endwhile; wp_reset_postdata(); endif; ?>
            </div>

        </div>
</section>