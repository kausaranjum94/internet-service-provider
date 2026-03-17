<?php
/**
 * The Template for displaying all single projects.
 *
 * @package internet-service-provider-pro
 */
get_header();
get_template_part('template-parts/banner'); 
?>
<div class="container">
    <div id="single-projects">
        <div class="row">
            <?php while ( have_posts() ) : the_post(); ?>
                <div class="col-md-7 col-sm-12 col-lg-8 col-xs-12">
                    <div class="position-relative">
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
                    <div class="d-flex justify-content-between mt-3 project-meta-details">
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
                    </div>

                    <div class="single-page-content mt-3"><?php the_content();?></div>
                </div>
                <div class="col-md-5 col-sm-12 col-lg-4 col-xs-12" id="sidebar">
                  <?php dynamic_sidebar('sidebar-1'); ?>
                </div>
            <?php endwhile; // end of the loop. ?>
        </div>
    </div>
</div>
<?php get_footer(); ?>