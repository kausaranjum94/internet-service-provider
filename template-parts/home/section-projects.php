<?php
/**
 * Template part for displaying projects
 *
 * @projects internet-service-provider-pro
 */

  $section_hide = get_theme_mod( 'internet_service_provider_pro_projects_enable' );
  if ( 'Disable' == $section_hide ) {
    return;
  }
  $img_bg = get_theme_mod('internet_service_provider_pro_projects_bgimage_setting');
  if( get_theme_mod('internet_service_provider_pro_projects_bgcolor','') ) {
    $about_backg = 'background-color:'.esc_attr(get_theme_mod('internet_service_provider_pro_projects_bgcolor','')).';';
  }elseif( get_theme_mod('internet_service_provider_pro_projects_bgimage','') ){
    $about_backg = 'background-image:url(\''.esc_url(get_theme_mod('internet_service_provider_pro_projects_bgimage')).'\')';
  }else{
    $about_backg='';
  }

  $img_bg = get_theme_mod( 'internet_service_provider_pro_projects_bgimage_setting' );

  if ( function_exists( 'is_amp_endpoint' ) && is_amp_endpoint() ) {
    $amp_class = 'col-lg-4 col-md-4 col-md-6 mb-4';
    $amp_row = 'row';
  }
  else{
    $amp_class = '';
    $amp_row = 'owl-carousel';
  }

?>
<section id="projects" class="<?php echo esc_attr($img_bg); ?> position-relative" style="<?php echo esc_attr($about_backg); ?>">
  <div class="container position-relative">
    <div class="projects-container">
      <div class="card-list">
        <?php
        $i=1;
        $args = array(
          'post_type' => 'projects',
          'post_status' => 'publish',
          'posts_per_page' => 1,
          'order' => 'ASC'
        );  
        $query = new WP_Query($args); 
        if ( $query->have_posts() ) :  
          while ($query->have_posts()) : $query->the_post(); ?>
            <div class="project-card">
              <div class="row">
                <div class="col-lg-7 col-md-7">
                  <div class="post_img h-100">
                    <?php the_post_thumbnail(); ?>
                    <div class="video-block">
                      <div class="video-block-innner">
                        <?php $video_title = get_post_meta(get_the_ID(), 'internet_service_provider_pro_posttype_projects_video_text', true);
                        $video_url = get_post_meta(get_the_ID(), 'internet_service_provider_pro_posttype_projects_video_url', true);
                        if ($video_url) {
                            echo '<a  href="'. esc_html($video_url) .'" data-fancybox="gallery"><i class="fa-solid fa-play"></i></a>';
                        }
                          if ($video_title) {
                            echo '<span>' . esc_html($video_title) . '</span>';
                        } ?> 
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-lg-5 col-md-5 d-flex align-items-center">
                  <div class="news-content">
                    <div class="projects-head section_main_head pb-4" data-aos="fade-up" data-aos-duration="3000">
                      <?php if(get_theme_mod('internet_service_provider_pro_projects_tagline')!=''){ ?>
                        <span class="section-tagline">
                          <?php echo esc_html(get_theme_mod('internet_service_provider_pro_projects_tagline')); ?>
                        </span>
                      <?php } ?>
                      <?php if(get_theme_mod('internet_service_provider_pro_projects_main_heading')!='' ){ ?>
                        <h3>
                          <?php echo esc_html(get_theme_mod('internet_service_provider_pro_projects_main_heading')); ?>
                        </h3>
                      <?php } ?>
                    </div>
                    <div class="project-content">
                      <div class="news-title-box">
                        <div class="project-meta-span">
                          <?php if(get_theme_mod('internet_service_provider_pro_projects_project_name_image')!=''){ ?>
                            <img src="<?php echo esc_url(get_theme_mod('internet_service_provider_pro_projects_project_name_image')); ?>">
                          <?php } ?>
                          <?php if(get_theme_mod('internet_service_provider_pro_projects_project_name')!='' ){ ?>
                            <span>
                              <?php echo esc_html(get_theme_mod('internet_service_provider_pro_projects_project_name')); ?>
                            </span>
                          <?php } ?>
                          <?php the_title(); ?>
                        </div>
                        <div class="project-meta-span">
                          <?php if(get_theme_mod('internet_service_provider_pro_projects_location_image')!=''){ ?>
                            <img src="<?php echo esc_url(get_theme_mod('internet_service_provider_pro_projects_location_image')); ?>">
                          <?php } ?>
                          <?php if(get_theme_mod('internet_service_provider_pro_projects_location')!='' ){ ?>
                            <span>
                              <?php echo esc_html(get_theme_mod('internet_service_provider_pro_projects_location')); ?>
                            </span>
                          <?php } ?>
                          <?php the_title(); ?>
                        </div>
                        <div class="project-meta-span">
                          <?php if(get_theme_mod('internet_service_provider_pro_projects_style_image')!=''){ ?>
                            <img src="<?php echo esc_url(get_theme_mod('internet_service_provider_pro_projects_style_image')); ?>">
                          <?php } ?>
                          <?php if(get_theme_mod('internet_service_provider_pro_projects_style')!='' ){ ?>
                            <span>
                              <?php echo esc_html(get_theme_mod('internet_service_provider_pro_projects_style')); ?>
                            </span>
                          <?php } ?>
                          <?php $style = get_post_meta(get_the_ID(), 'internet_service_provider_pro_posttype_projects_style', true);
                            if ($style) {
                              echo '<span class="projects-meta-heading">' . esc_html($style) . '</span>';
                            } ?> 
                        </div>
                        <?php if(get_theme_mod('internet_service_provider_pro_projects_button_title')!=''){ ?>
                          <div class="projest-btn mt-4" data-aos="fade-up" data-aos-duration="1100">
                            <a class="theme_button" href="<?php echo esc_url(get_theme_mod('internet_service_provider_pro_projects_button_url')); ?>">
                              <?php echo esc_html(get_theme_mod('internet_service_provider_pro_projects_button_title')); ?>
                              <?php if( get_theme_mod( 'internet_service_provider_pro_projects_button_icon',true) != '') { ?>
                              <span class="button-icon"><i class="<?php echo esc_attr(get_theme_mod('internet_service_provider_pro_projects_button_icon')); ?>"></i></span>
                              <?php } ?>
                            </a>
                        </div>
                        <?php } ?>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          <?php $i++; endwhile; 
        endif; ?>
      </div>
    </div>
  </div>
</section>