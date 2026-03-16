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
  <?php if(get_theme_mod('internet_service_provider_pro_testimonials_image')!=''){ ?>
    <div class="testimonials-image" data-aos="flip-up" data-aos-duration="1000">
      <img src="<?php echo esc_url(get_theme_mod('internet_service_provider_pro_testimonials_image')); ?>">
    </div>
  <?php } ?>
  <div class="container">
    <div class="testimonial-blockquote">
      <div class="testimonials-head section_main_head text-center pb-5" data-aos="fade-up" data-aos-duration="3000">
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
      <div class="testimonials-row <?php echo esc_attr($amp_row); ?>">
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
            <div class="testimonial_outer <?php echo esc_attr($amp_class); ?>" data-aos="zoom-in-up" data-aos-duration="2000">
              <div class="testimonial-block quote_box">
                <div class="testimonials-image-box position-relative">
                  <div class="media">
                    <div class="testimonials_image">
                      <?php if(has_post_thumbnail()){ ?>
                        <img src="<?php the_post_thumbnail_url( 'full' ); ?>" alt="<?php the_title(); ?>">
                      <?php } ?>
                    </div>
                    <div class="media-body">
                        <h5 class="testimonial-title">  
                          <?php the_title(); ?>
                        </h5>
                        <?php if(get_post_meta(get_the_ID(),'internet_service_provider_pro_posttype_testimonial_location',true) != ''){ ?>
                        <div class="t-location">
                          <?php echo esc_html(get_post_meta(get_the_ID(),'internet_service_provider_pro_posttype_testimonial_location',true)); ?>
                        </div>
                        <?php } ?>
                    </div>
                  </div>
                </div>
                <div class="testimonials-info position-relative">
                  <?php the_content(); ?>
                </div>
                <?php if(get_post_meta(get_the_ID(),'internet_service_provider_pro_posttype_star_review',true) != ''){ ?>
                  <div class="testimonial-star"> 
                    <?php for ($k=0; $k <=4 ; $k++) {
                      $rating = esc_html(get_post_meta(get_the_ID(),'internet_service_provider_pro_posttype_star_review',true));
                      $final_rating = isset($rating) ? $rating : 0 ;
                      if ($final_rating <= $k) {?>
                            <!-- filled -->
                          <span class="without_filled"><i class="fas fa-star"></i></span>
                      <?php }else{?>
                          <!-- // without filled -->
                          <span ><i class="fas fa-star"></i></span>
                      <?php }
                    } ?>
                  </div>
                <?php } ?>
                
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