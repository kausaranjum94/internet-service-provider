<?php
/**
 *    The Template for displaying of kitchen_style
 *
 */
	$section_hide = get_theme_mod( 'internet_service_provider_pro_kitchen_style_enable' );
    if ( 'Disable' == $section_hide ) {
      return;
    }

  if( get_theme_mod('internet_service_provider_pro_kitchen_style_bgcolor','') ) {
    $left_backg = 'background-color:'.esc_attr(get_theme_mod('internet_service_provider_pro_kitchen_style_bgcolor','')).';';
  }elseif( get_theme_mod('internet_service_provider_pro_kitchen_style_bgimage','') ){
    $left_backg = 'background-image:url(\''.esc_url(get_theme_mod('internet_service_provider_pro_kitchen_style_bgimage')).'\')';
  }else{
    $left_backg = '';
  }

  if( get_theme_mod('internet_service_provider_pro_kitchen_style_carousel_loop', true) ) { $carousel_loop = 'true'; }
  else{ $carousel_loop = 'false'; }

  if( get_theme_mod('internet_service_provider_pro_kitchen_style_carousel_speed') ) { $carousel_speed = get_theme_mod('internet_service_provider_pro_kitchen_style_carousel_speed'); }
  else{ $carousel_speed = 10000; }

  if( get_theme_mod('internet_service_provider_pro_kitchen_style_carousel_nav', true) ) { $carousel_nav = 'true'; }
  else{ $carousel_nav = 'false'; }

   $img_bg = get_theme_mod('internet_service_provider_pro_kitchen_style_bgimage_attachment');


  if ( function_exists( 'is_amp_endpoint' ) && is_amp_endpoint() ) {
    $amp_class = 'col-lg-12 col-md-12 col-md-12 mb-4 ';
    $amp_row = 'row';
  }
  else{
    $amp_class = '';
    $amp_row = 'owl-carousel';
  }

?>
<section id="kitchen-style" class="position-relative <?php echo esc_attr($img_bg); ?>" data-loops="<?php echo esc_html($carousel_loop); ?>" data-speed="<?php echo esc_html($carousel_speed); ?>" data-nav="<?php echo esc_html($carousel_nav); ?>" style="<?php echo esc_attr($left_backg); ?>">
  <div class="container">
    <div class="row">
      <div class="col-lg-4 col-md-4 kitchen-style-left-col d-flex align-items-center">
        <div class="kitchen-style-left-col-inner">
          <div class="section_main_head pb-4">
              <?php if(get_theme_mod('internet_service_provider_pro_kitchen_style_tagline')!=''){ ?>
              <span class="section-tagline" data-aos="fade-up" data-aos-duration="1000">
                  <?php echo esc_html(get_theme_mod('internet_service_provider_pro_kitchen_style_tagline')); ?>
              </span>
              <?php } ?>
              <?php if(get_theme_mod('internet_service_provider_pro_kitchen_style_main_heading')!=''){  ?>
              <h3 data-aos="fade-up" data-aos-duration="2000">
                  <?php echo esc_html(get_theme_mod('internet_service_provider_pro_kitchen_style_main_heading')); ?>
              </h3>
              <?php } ?>

              <?php if(get_theme_mod('internet_service_provider_pro_kitchen_style_text')!=''){  ?>
              <div class="section-text mt-3" data-aos="fade-up" data-aos-duration="3000">
                  <?php echo esc_html(get_theme_mod('internet_service_provider_pro_kitchen_style_text')); ?>
              </div>
              <?php } ?>

              <div class="mt-3" data-aos="fade-up" data-aos-duration="4000">
                  <?php if(get_theme_mod('internet_service_provider_pro_kitchen_style_section_button_title')!=''){ ?>
                  <a class="theme_button"
                      href="<?php echo esc_url(get_theme_mod('internet_service_provider_pro_tekitchen_style_section_button_url')); ?>">
                      <?php echo esc_html(get_theme_mod('internet_service_provider_pro_kitchen_style_section_button_title')); ?>
                      <?php if( get_theme_mod( 'internet_service_provider_pro_kitchen_style_section_button_icon',true) != '') { ?>
                      <span class="button-icon">
                          <i
                              class="<?php echo esc_attr(get_theme_mod('internet_service_provider_pro_kitchen_style_section_button_icon')); ?>"></i>
                      </span>
                      <?php } ?>
                  </a>
                  <?php } ?>
              </div>
          </div>
        </div>
      </div>
      <div class="col-lg-8 col-md-8 kitchen-style-right-col">
        <div class="kitchen-style-wrapper position-relative">
          <div class="owl-carousel">
            <?php if ( defined( 'internet_service_provider_pro_POSTTYPE_VERSION' ) ) {
              $query = new WP_Query( array( 
                'post_type' => 'kitchen', 
                'posts_per_page' => get_theme_mod('internet_service_provider_pro_kitchen_style_number')
              ) ); 
              if ( $query->have_posts() ) :  
                while ($query->have_posts()) : $query->the_post(); ?>
                  <div class="kitchen-style_outer">
                    <div class="kitchen-style-block" data-aos="fade-up" data-aos-duration="3000">
                      <div class="kitchen_style_image">
                        <?php the_post_thumbnail('full'); ?>
                      </div>
                      <div class="kitchen-content">
                        <h5 class="kitchen-style-title"><?php the_title(); ?></h5>
                        <div class="kitchen-excerpt"><?php the_excerpt(); ?></div>
                        <div class="kitchen-icon-url">
                          <?php if(get_theme_mod('internet_service_provider_pro_kitchen_style_box_link_icon')!=''){ ?>
                          <a
                              href="<?php the_permalink(); ?>">
                              <?php if( get_theme_mod( 'internet_service_provider_pro_kitchen_style_box_link_icon',true) != '') { ?>
                              <i
                                  class="<?php echo esc_attr(get_theme_mod('internet_service_provider_pro_kitchen_style_box_link_icon')); ?>"></i>
                              <?php } ?>
                          </a>
                          <?php } ?>
                        </div>
                      </div>
                    </div>
                  </div>
                <?php endwhile; endif; wp_reset_postdata();
            } ?>
          </div>
        </div>
      </div>

    </div>
  </div>
</section>