<?php
/**
 *    The Template for displaying of Testimonials
 *
 */
	$section_hide = get_theme_mod( 'internet_service_provider_pro_testimonials_enable' );
  if ( 'Disable' == $section_hide ) {
    return;
  }

  if( get_theme_mod('internet_service_provider_pro_testimonials_bgcolor','') ) {
    $left_backg = 'background-color:'.esc_attr(get_theme_mod('internet_service_provider_pro_testimonials_bgcolor','')).';';
  }elseif( get_theme_mod('internet_service_provider_pro_testimonials_bgimage','') ){
    $left_backg = 'background-image:url(\''.esc_url(get_theme_mod('internet_service_provider_pro_testimonials_bgimage')).'\')';
  }else{
    $left_backg = '';
  }

  if( get_theme_mod('internet_service_provider_pro_testimonials_carousel_loop', true) ) { $carousel_loop = 'true'; }
  else{ $carousel_loop = 'false'; }

  if( get_theme_mod('internet_service_provider_pro_testimonials_carousel_speed') ) { $carousel_speed = get_theme_mod('internet_service_provider_pro_testimonials_carousel_speed'); }
  else{ $carousel_speed = 10000; }

  if( get_theme_mod('internet_service_provider_pro_testimonials_carousel_dots', true) ) { $carousel_dots = 'true'; }
    else{ $carousel_dots = 'false'; }


  if ( function_exists( 'is_amp_endpoint' ) && is_amp_endpoint() ) {
    $amp_class = 'col-lg-12 col-md-12 col-md-12 mb-4 ';
    $amp_row = 'row';
  }
  else{
    $amp_class = '';
    $amp_row = 'owl-carousel';
  }

?>
<section id="testimonials" class="position-relative" style="<?php echo esc_attr($left_backg); ?>" data-loops="<?php echo esc_html($carousel_loop); ?>" data-speed="<?php echo esc_html($carousel_speed); ?>" data-dots="<?php echo esc_html($carousel_dots); ?>">
  
  <div class="container">
    <div class="row align-items-end mb-5">
      <div class="col-lg-5 col-md-5 map-area-head-listing">
          <div class="map-area-head section_main_head">
              <?php if(get_theme_mod('internet_service_provider_pro_testimonials_tagline')!=''){ ?>
                  <span class="section-tagline">
                      <?php echo esc_html(get_theme_mod('internet_service_provider_pro_testimonials_tagline')); ?>
                  </span>
              <?php } ?>

              <?php if(get_theme_mod('internet_service_provider_pro_testimonials_main_heading')!=''){ ?>
                  <h3>
                      <?php echo esc_html(get_theme_mod('internet_service_provider_pro_testimonials_main_heading')); ?>
                  </h3>
              <?php } ?>
          </div>
      </div>
      <div class="col-lg-7 col-md-7">
          <?php if(get_theme_mod('internet_service_provider_pro_testimonials_text')!=''){ ?>
              <div class="section-text">
                  <?php echo esc_html(get_theme_mod('internet_service_provider_pro_testimonials_text')); ?>
              </div>
          <?php } ?>
      </div>
    </div>
    <div class="testimonial-blockquote">
      <div class="testimonials-row">
        <?php if(defined('internet_service_provider_pro_POSTTYPE_VERSION')){ ?>
          <?php
          $args = array(
            'post_type' => 'testimonials',
            'post_status' => 'publish',
            'posts_per_page' => get_theme_mod('internet_service_provider_pro_testimonials_number'),
            'order' => 'ASC',
          ); 
          $i = 1;
          $query = new WP_Query($args); 
          if ( $query->have_posts() ) :  while ($query->have_posts()) : $query->the_post(); 
          ?>
            <div class="testimonial_outer mb-3" data-aos="zoom-in-up" data-aos-duration="2000">
              <div class="row testonials-block-blocks <?php echo ($i % 2 == 0) ? 'even' : 'odd'; ?>">
                <div class="col-lg-9 col-md-9 testonials-block-top">
                  
                  <div class="testonials-block-top-content position-relative">
                     <svg width="81" height="82" viewBox="0 0 81 82" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <path d="M44.9647 43.392L44.9647 81.792L80.3215 81.792L80.3215 46.464L63.4117 -1.50536e-06L44.9647 -3.14758e-06L59.1843 43.392L44.9647 43.392ZM-1.8984e-05 43.392L-2.22807e-05 81.792L35.3568 81.792L35.3568 46.464L18.447 -5.50827e-06L-1.52588e-05 -7.15048e-06L14.2196 43.392L-1.8984e-05 43.392Z" fill="#E1E1E1"/>
                      </svg>
                    <div class="row">
                      <div class="col-lg-4 col-md-4 col-sm-6">
                        <div class="testimonials_image h-100 full-height-width-image">
                            <?php if(has_post_thumbnail()){
                                the_post_thumbnail();
                            } ?>
                        </div>
                      </div>
                      <div class="col-lg-8 col-md-8 col-sm-6 d-flex align-items-center">
                        <div class="testimonial-content">
                          <?php the_content(); ?>
                          <h5 class="testimonial-title">
                            <?php the_title(); ?>
                          </h5>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-lg-3 col-md-3 testonials-block-bottom">
                  <?php if(get_post_meta(get_the_ID(),'internet_service_provider_pro_posttype_testimonial_image_2',true)){ ?>
                    <div class="testimonials--video-image full-height-width-image" data-aos="flip-up" data-aos-duration="1000">
                      <img src="<?php echo esc_url(get_post_meta(get_the_ID(),'internet_service_provider_pro_posttype_testimonial_image_2',true)); ?>">
                      <div class="video-block-innner">
                        <?php 
                        $video_url = get_post_meta(get_the_ID(), 'internet_service_provider_pro_posttype_testimonial_video_url', true);
                        if ($video_url) {
                            echo '<a  href="'. esc_html($video_url) .'" data-fancybox="gallery"><i class="fa-solid fa-play"></i></a>';
                        }?> 
                      </div>
                    </div>
                  <?php } ?>
                </div>
              </div>
            </div>
          <?php $i++; endwhile; wp_reset_query(); endif; ?>
        <?php }else{ ?>
          <h4 class="post-type-msg text-center"><?php echo esc_html_e('Please install Modular Kitchen Posttype plugin and add your Testimonials to enable this section','internet-service-provider-pro')?></h4>
        <?php } ?>
      </div>
    </div>
  </div>
</section>