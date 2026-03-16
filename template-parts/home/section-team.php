<?php
/**
 * Template part for displaying team
 *
 * @package internet-service-provider-pro
 */

  $section_hide = get_theme_mod( 'internet_service_provider_pro_radio_team_enable' );
  if ( 'Disable' == $section_hide ) {
    return;
  }
  if( get_theme_mod('internet_service_provider_pro_team_bgcolor','') ) {
    $about_backg = 'background-color:'.esc_attr(get_theme_mod('internet_service_provider_pro_team_bgcolor','')).';';
  }elseif( get_theme_mod('internet_service_provider_pro_team_bgimage','') ){
    $about_backg = 'background-image:url(\''.esc_url(get_theme_mod('internet_service_provider_pro_team_bgimage')).'\')';
  }else{
    $about_backg='';
  }

    $img_bg = get_theme_mod( 'internet_service_provider_pro_team_bgimage_attachment' );

  if( get_theme_mod('internet_service_provider_pro_team_carousel_loop', true) ) { $carousel_loop = 'true'; }
  else{ $carousel_loop = 'false'; }

  if( get_theme_mod('internet_service_provider_pro_team_carousel_speed') ) { $carousel_speed = get_theme_mod('internet_service_provider_pro_team_carousel_speed'); }
  else{ $carousel_speed = 10000; }

  if( get_theme_mod('internet_service_provider_pro_team_carousel_dots', true) ) { $carousel_dots = 'true'; }
    else{ $carousel_dots = 'false'; }

    if( get_theme_mod('internet_service_provider_pro_team_carousel_nav', false) ) { $carousel_nav = 'true'; }
    else{ $carousel_nav = 'false'; }

  if ( function_exists( 'is_amp_endpoint' ) && is_amp_endpoint() ) {
    $amp_class = 'col-lg-12 col-md-12 col-md-12 mb-4 ';
    $amp_row = 'row';
  }
  else{
    $amp_class = '';
    $amp_row = 'owl-carousel';
  }

?>
<section id="team" class="<?php echo esc_attr($img_bg); ?> position-relative" style="<?php echo esc_attr($about_backg); ?>" data-loops="<?php echo esc_html($carousel_loop); ?>" data-speed="<?php echo esc_html($carousel_speed); ?>" data-dots="<?php echo esc_html($carousel_dots); ?>" data-nav="<?php echo esc_html($carousel_nav); ?>">
  <div class="container">
    <div class="team-head section_main_head text-center pb-3">
      <?php if(get_theme_mod('internet_service_provider_pro_team_tagline')!=''){ ?>
        <span class="section-tagline">
          <?php echo esc_html(get_theme_mod('internet_service_provider_pro_team_tagline')); ?>
        </span>
      <?php } ?>

      <?php if(get_theme_mod('internet_service_provider_pro_team_main_heading')!=''){ ?>
        <h3>
          <?php echo esc_html(get_theme_mod('internet_service_provider_pro_team_main_heading')); ?>
        </h3>
      <?php } ?>
    </div>
    <div class="position-relative">
      <div class="team_block">
        <?php if(defined('internet_service_provider_pro_POSTTYPE_VERSION')){ ?>
          <div class="team-items <?php echo esc_attr($amp_row); ?>">
            <?php
            $args = array(
              'post_type' => 'team',
              'post_status' => 'publish',
              'posts_per_page' => get_theme_mod('internet_service_provider_pro_team_number')
            );  
            $query = new WP_Query($args); 
            if ( $query->have_posts() ) :  while ($query->have_posts()) : $query->the_post(); 
            ?>

            <div class="team_outer <?php echo esc_attr($amp_class); ?>" data-aos="zoom-in-up" data-aos-duration="2000">
              <div class="team-box">
                <div class="team-img position-relative">
                  <?php if(has_post_thumbnail( )){
                    the_post_thumbnail();
                  } ?>
                </div>
                <div class="team-box-inner-wrap">
                  <div class="team-box-inner">
                    <div class="team-box-inner-content">
                      <h5 class="team_head"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                      </h5>
                      <?php if(get_post_meta(get_the_ID(),'meta-team-designation',true)!=''){ ?>
                        <div class="team-desig"><?php echo esc_html(get_post_meta(get_the_ID(),'meta-team-designation',true)); ?></div>
                      <?php } ?>
                      <ul class="team-social-profiles">
                        <?php if(get_post_meta(get_the_ID(),'meta-team-facebookurl',true)) { ?>
                            <li><a class="" href="<?php echo esc_html(get_post_meta(get_the_ID(),'meta-team-facebookurl',true)); ?>" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
                        <?php }
                        if(get_post_meta(get_the_ID(),'meta-team-twitterurl',true)) { ?>
                            <li><a class="" href="<?php echo esc_html(get_post_meta(get_the_ID(),'meta-team-twitterurl',true)); ?>" target="_blank"><i class="fab fa-x-twitter"></i></a></li>
                        <?php }
                        if(get_post_meta(get_the_ID(),'meta-team-linkdenurl',true)) { ?>
                          <li><a class="" href="<?php echo esc_html(get_post_meta(get_the_ID(),'meta-team-linkdenurl',true)); ?>" target="_blank"><i class="fab fa-linkedin-in"></i></a></li>
                        <?php } 
                          if(get_post_meta(get_the_ID(),'meta-team-instagram',true)!= ''){ ?>
                          <li><a href="<?php echo esc_html(get_post_meta(get_the_ID(),'meta-team-instagram',true)); ?>" target="_blank">
                            <i class="fab fa-instagram"></i></a>
                          </li>
                        <?php } if(get_post_meta(get_the_ID(),'meta-team-pinterest',true)!= ''){ ?>
                            <li><a href="<?php echo esc_html(get_post_meta(get_the_ID(),'meta-team-pinterest',true)); ?>" target="_blank">
                              <i class="fab fa-pinterest-p "></i></a>
                            </li>
                        <?php } ?>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <?php endwhile; endif; ?>
          </div>
        <?php }else{ ?>
          <h5>
            <?php esc_html_e('Upload And Activate Business Accountant Pro Posttype Plugin To Display Your team Details','internet-service-provider-pro'); ?>
          </h5>
        <?php } ?>
      </div>
    </div>
    <?php if(get_theme_mod('internet_service_provider_pro_team_section_button_title')!=''){ ?>
      <div class="team-btn mt-3 text-center">
        <a class="theme_button" href="<?php echo esc_url(get_theme_mod('internet_service_provider_pro_team_section_button_url')); ?>">
          <?php echo esc_html(get_theme_mod('internet_service_provider_pro_team_section_button_title')); ?>
        </a>
      </div>
    <?php } ?>
  </div>
</section>