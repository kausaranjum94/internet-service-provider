<?php
/**
 * Template to show the content of product tab section
 *
 * @package internet_service_provider_pro
 */ 
  $about_section = get_theme_mod( 'internet_service_provider_pro_radio_kitchen_tab_enable' );
  if ( 'Disable' == $about_section ) {
  return;
  }

  if( get_theme_mod('internet_service_provider_pro_kitchen_tab_bgcolor','') ) {
    $about_backg = 'background-color:'.esc_attr(get_theme_mod('internet_service_provider_pro_kitchen_tab_bgcolor','')).';';
  }elseif( get_theme_mod('internet_service_provider_pro_kitchen_tab_bgimage','') ){
    $about_backg = 'background-image:url(\''.esc_url(get_theme_mod('internet_service_provider_pro_kitchen_tab_bgimage')).'\')';
  }else{
    $about_backg = '';
  }

  if( get_theme_mod('internet_service_provider_pro_kitchen_tab_carousel_loop', true) ) { $carousel_loop = 'true'; }
  else{ $carousel_loop = 'false'; }

  if( get_theme_mod('internet_service_provider_pro_kitchen_tab_carousel_speed') ) { $carousel_speed = get_theme_mod('internet_service_provider_pro_kitchen_tab_carousel_speed'); }
  else{ $carousel_speed = 10000; }

  if( get_theme_mod('internet_service_provider_pro_kitchen_tab_carousel_nav', true) ) { $carousel_nav = 'true'; }
  else{ $carousel_nav = 'false'; }
  
  if( get_theme_mod('internet_service_provider_pro_kitchen_tab_carousel_dots', true) ) { $carousel_dot = 'true'; }
  else{ $carousel_dot = 'false'; }

  $img_bg =  get_theme_mod('internet_service_provider_pro_kitchen_tab_bgimage_attachment');

  $post_excerpt = "";
  if(get_theme_mod('internet_service_provider_pro_kitchen_tab_excerpt')!=''){
    $post_excerpt = get_theme_mod('internet_service_provider_pro_kitchen_tab_excerpt', '4');
  }

?>
<section id="kitchen-tabs" class="<?php echo esc_attr($img_bg); ?> position-relative" style="<?php echo esc_attr($about_backg); ?>" data-loops="<?php echo esc_html($carousel_loop); ?>" data-speed="<?php echo esc_html($carousel_speed); ?>" data-nav="<?php echo esc_html($carousel_nav); ?>" data-dots="<?php echo esc_html($carousel_dot); ?>">
  <div class="container">
    <div class="row">
        <div class="kitchen-heading-block" data-aos="fade-up" data-aos-duration="2000">
          <div class="section_main_head head_center white_head text-center pb-4">
            <?php if(get_theme_mod('internet_service_provider_pro_kitchen_tab_tagline')!=''){ ?>
              <span class="section-tagline" data-aos="fade-up" data-aos-duration="800">
                <?php echo esc_html(get_theme_mod('internet_service_provider_pro_kitchen_tab_tagline')); ?>
              </span>
            <?php } ?>
            <?php if(get_theme_mod('internet_service_provider_pro_kitchen_tab_main_heading')!=''){  ?>
              <h3 data-aos="fade-up" data-aos-duration="1000">
                <?php echo esc_html(get_theme_mod('internet_service_provider_pro_kitchen_tab_main_heading')); ?>
              </h3>
            <?php } ?>
          </div>
          <div class="tab_list">
            <ul class="nav nav-tabs justify-content-center" role="tablist" data-aos="fade-up" data-aos-duration="3000">
              <?php $tab_count = get_theme_mod('internet_service_provider_pro_kitchen_tab_number'); 
              for($i=1; $i<= $tab_count; $i++ ) {?>
                <li class="nav-item">
                  <a class="nav-link <?php if($i == 1){ echo 'active'; } ?>" href="javascript:void(0)" data-bs-toggle="tab" data-bs-target="#kitchen_tab<?php echo esc_attr($i);?>" role="tab" aria-controls="kitchen_tab<?php echo esc_attr($i);?>" aria-selected="true">
                    <?php echo esc_html(get_theme_mod('internet_service_provider_pro_kitchen_tab_tab_title'.$i)); ?>
                    </a>
                </li>
              <?php } ?>
            </ul>
          </div>
        </div>
        <div class="tab-content kitchen_tab custom_items ml-0" data-aos="fade-up" data-aos-duration="2000">
          <?php $tab_count = get_theme_mod('internet_service_provider_pro_kitchen_tab_number'); 
          for($i=1; $i<= $tab_count; $i++ ) { $delay = $i * 800;?>
            <div role="tabpanel" class="tab-pane <?php if($i == 1){echo 'active';} ?>" id="kitchen_tab<?php echo esc_attr($i);?>" >
              <div class="owl-carousel">
                <?php
                $args = array( 
                'post_type' => 'kitchen',
                'posts_per_page' => get_theme_mod('internet_service_provider_pro_kitchen_tab_limit'.$i),
                'kitchen_category' => get_theme_mod('internet_service_provider_pro_kitchen_tab_category'.$i)
                );
                $loop = new WP_Query( $args );
                while ( $loop->have_posts() ) : $loop->the_post(); global $product; ?>
                <div class="kitchen-item" data-aos="fade-left" data-aos-duration="2000" data-aos-delay="<?php echo esc_attr($delay); ?>">
                  <?php if(has_post_thumbnail()){
                    the_post_thumbnail();
                  } ?>
                  <div class="kitchn-media-body">
                    <h5>
                      <?php the_title(); ?>
                    </h5>
                    <div class="kitchen-icon-url">
                      <?php if(get_theme_mod('internet_service_provider_pro_kitchen_tab_box_link_icon')!=''){ ?>
                      <a
                          href="<?php the_permalink(); ?>">
                          <?php if( get_theme_mod( 'internet_service_provider_pro_kitchen_tab_box_link_icon',true) != '') { ?>
                          <i
                              class="<?php echo esc_attr(get_theme_mod('internet_service_provider_pro_kitchen_tab_box_link_icon')); ?>"></i>
                          <?php } ?>
                      </a>
                      <?php } ?>
                    </div>
                  </div>
                </div>
                <?php endwhile; ?>
                <?php wp_reset_query(); ?>
              </div>
            </div>
          <?php }?>
        </div>
      </div>
    </div>
  </div>
</section>