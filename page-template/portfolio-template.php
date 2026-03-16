<?php
/**
 * Template Name: project Template
*/

get_header(); 
get_template_part( 'template-parts/banner' );?>
<div id="project-page" class="testimonial_page_template my-5">
	<div class="container">
		<div class="project-content row position-relative" data-aos="fade-right" data-aos-duration="2000">
      <?php if ( defined( 'internet_service_provider_pro_POSTTYPE_VERSION' ) ) {
        $theme_paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;
        $query = new WP_Query( array( 
          'post_type' => 'projects',
          'paged' => $theme_paged, 
          ) ); 
        if ( $query->have_posts() ) :  while ($query->have_posts()) : $query->the_post(); ?>
          <div class="projects-container my-4">
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
                            <a class="theme_button" href="<?php the_permalink(); ?>">
                              Read More
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
        </div>
        <?php endwhile; endif; ?>
      <?php } else{ ?>
        <h4 class="post-type-msg text-center"><?php echo esc_html_e('Please install Internet Service Provider Pro Posttype plugin and add your project to enable this section','internet-service-provider-pro')?></h4>
      <?php } ?>

      <div class="navigation">
        <?php 
          $big = 999999999;
          echo paginate_links( array(
            'base' => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
            'format' => 'paged=%#%',
            'current' =>  (get_query_var('paged') ? get_query_var('paged') : 1),
            'total' => $query->max_num_pages
          ) );
        ?>
      </div>

    </div>
  </div>
</div>
<?php get_footer(); ?>
