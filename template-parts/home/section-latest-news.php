<?php
/**
 * Template part for displaying latest news
 *
 * @package internet-service-provider-pro
 */

  $section_hide = get_theme_mod( 'internet_service_provider_pro_latest_news_enable' );
  if ( 'Disable' == $section_hide ) {
    return;
  }
  $img_bg = get_theme_mod('internet_service_provider_pro_latest_news_bgimage_setting');
  if( get_theme_mod('internet_service_provider_pro_latest_news_bgcolor','') ) {
    $about_backg = 'background-color:'.esc_attr(get_theme_mod('internet_service_provider_pro_latest_news_bgcolor','')).';';
  }elseif( get_theme_mod('internet_service_provider_pro_latest_news_bgimage','') ){
    $about_backg = 'background-image:url(\''.esc_url(get_theme_mod('internet_service_provider_pro_latest_news_bgimage')).'\')';
  }else{
    $about_backg='';
  }

   if( get_theme_mod('internet_service_provider_pro_latest_news_carousel_loop', true) ) { $carousel_loop = 'true'; }
  else{ $carousel_loop = 'false'; }

  if( get_theme_mod('internet_service_provider_pro_latest_news_carousel_speed') ) { $carousel_speed = get_theme_mod('internet_service_provider_pro_latest_news_carousel_speed'); }
  else{ $carousel_speed = 10000; }

  if( get_theme_mod('internet_service_provider_pro_latest_news_carousel_dots', true) ) { $carousel_dots = 'true'; }
    else{ $carousel_dots = 'false'; }

    if( get_theme_mod('internet_service_provider_pro_latest_news_carousel_nav', true) ) { $carousel_nav = 'true'; }
    else{ $carousel_nav = 'false'; }



  if ( function_exists( 'is_amp_endpoint' ) && is_amp_endpoint() ) {
    $amp_class = 'col-lg-4 col-md-4 col-md-6 mb-4 ';
    $amp_row = 'row';
  }
  else{
    $amp_class = '';
    $amp_row = 'owl-carousel';
  }

  $post_excerpt = "";
  if(get_theme_mod('internet_service_provider_pro_latest_news_excerpt_no')!=''){
    $post_excerpt = get_theme_mod('internet_service_provider_pro_latest_news_excerpt_no', '12');
  }

?>
<section id="latest-news" style="<?php echo esc_attr($about_backg); ?>" class="<?php echo esc_attr($img_bg); ?>" data-loops="<?php echo esc_html($carousel_loop); ?>" data-speed="<?php echo esc_html($carousel_speed); ?>" data-dots="<?php echo esc_html($carousel_dots); ?>" data-nav="<?php echo esc_html($carousel_nav); ?>">
  <div class="container">
    <div class="latest_news-head section_main_head text-center pb-4" data-aos="zoom-in-up" data-aos-duration="2000">
      <?php if(get_theme_mod('internet_service_provider_pro_latest_news_tagline')!=''){ ?>
        <span class="section-tagline">
          <?php echo esc_html(get_theme_mod('internet_service_provider_pro_latest_news_tagline')); ?>
        </span>
      <?php } ?>
      <?php if(get_theme_mod('internet_service_provider_pro_latest_news_main_heading')!=''){ ?>
        <h3>
          <?php echo esc_html(get_theme_mod('internet_service_provider_pro_latest_news_main_heading')); ?>
        </h3>
      <?php } ?>
    </div>

    <div class="news-row row">
      <div class="<?php echo esc_attr($amp_row); ?> post-row" >
        <?php
          $i=1;
          $args = array(
            'post_type' => 'post',
            'post_status' => 'publish',
            'category_name' => get_theme_mod('internet_service_provider_pro_latest_news_category_setting'),
            'posts_per_page' => get_theme_mod('internet_service_provider_pro_latest_news_number'),
            'order' => 'ASC'
          );  
          $query = new WP_Query($args); 
          if ( $query->have_posts() ) :  while ($query->have_posts()) : $query->the_post(); 
          ?>
          <div class="news-box mb-4 <?php echo esc_attr($amp_class); ?>" data-aos="zoom-in-up" data-aos-duration="2000">
            <div class="box">
              <div class="post-image-block">
                <?php
                  if(has_post_thumbnail()){
                    the_post_thumbnail(); 
                  }
                ?>
              </div>
              <div class="box-content">
                <div class="box-content-inner">
                  <h5 class="p-0"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h5>
                  <div class="news-text">
                    <?php the_excerpt(); ?>
                  </div>
                </div>
                <div class="news-icon" data-aos="fade-up" data-aos-duration="1100">
                  <a href="<?php the_permalink(); ?>">
                    <?php if( get_theme_mod( 'internet_service_provider_pro_projects_button_icon',true) != '') { ?>
                      <span class="button-icon"><i class="fa-solid fa-arrow-right"></i></span>
                    <?php } ?>
                  </a>
                </div>
              </div>
            </div>
          </div>
        <?php endwhile; endif; ?>
      </div>
    </div>
  </div>
</section>