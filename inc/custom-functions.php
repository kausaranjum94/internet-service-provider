<?php

/*
* Related Post
*/

if ( !function_exists('internet_service_provider_pro_related_posts') ) {
    function internet_service_provider_pro_related_posts(){ ?>
        <div class="related-post-wrapper">
            <?php if(get_theme_mod('internet_service_provider_pro_related_posts_title')!=''){ ?>
                <h3>
                    <?php echo esc_html(get_theme_mod('internet_service_provider_pro_related_posts_title')); ?>
                </h3>
            <?php } ?>
            <div class="row">
                <?php
                    $current_post_title = get_the_ID();
                    $args = array(
                    'post_type' => 'post',
                    'post_status' => 'publish',
                    'posts_per_page' => get_theme_mod('internet_service_provider_pro_related_post_count')
                    );
                    $query = new WP_Query($args);
                    if ( $query->have_posts() ) :  while ($query->have_posts()) : $query->the_post();

                    if(get_the_ID() != $current_post_title){?>
                    <div class="col-lg-4 col-md-4 related-post-wrap mb-4">
                        <?php
                        if(has_post_thumbnail()){
                          the_post_thumbnail();
                        }
                        ?>
                        <a href="<?php the_permalink(); ?>" class="post-page-title pt-2"><?php the_title(); ?></a>
                        <div class="post-single-text"><?php $excerpt = get_the_excerpt(); echo esc_html(internet_service_provider_pro_string_limit_words($excerpt,15)); ?></div>
                    </div>
                <?php } endwhile; endif; ?>
            </div>
        </div>
    <?php }
}

/*
* Post navigation
*/
if ( !function_exists('internet_service_provider_pro_single_navigation') ) {
    function internet_service_provider_pro_single_navigation(){
        the_post_navigation( array(
            'next_text' => '<span class="meta-nav" aria-hidden="true">' . __(get_theme_mod('internet_service_provider_pro_blog_category_next_title'), 'internet-service-provider-pro' ) .'</span> ' .
                '<span class="screen-reader-text">' . __( 'Next post:', 'internet-service-provider-pro' ) . '</span> ' .
                '<span class="post-title">%title</span>',
            'prev_text' => '<span class="meta-nav" aria-hidden="true">'. __(get_theme_mod('internet_service_provider_pro_blog_category_prev_title'), 'internet-service-provider-pro' ) . '</span> ' .
                '<span class="screen-reader-text">' . __( 'Previous post:', 'internet-service-provider-pro' ) . '</span> ' .
                '<span class="post-title">%title</span>',
        ) );
    }
}

/*
* Show Page title on pages, post.
*/


/*
* Show post Share
*/
if ( !function_exists('internet_service_provider_pro_social_share') ) {
    /**
     * [internet_service_provider_pro_social_share show all the social share buttons
     * @return [type] string
     */
    function internet_service_provider_pro_social_share(){
        ?>
        <?php do_action('internet_service_provider_pro_before_blog_sharing'); ?>
            <div class="share_icon">
                <div class="socila_share position-relative">
                    <?php if(get_theme_mod('internet_service_provider_pro_post_general_settings_post_share_facebook',true)==1 || get_theme_mod('internet_service_provider_pro_post_general_settings_post_share_linkedin',true)==1 || get_theme_mod('internet_service_provider_pro_post_general_settings_post_share_twitter',true)==1){ ?>

                    <div class="meta-heading" style="cursor:pointer"><?php echo esc_html('Share  ','internet-service-provider-pro'); ?><i class="fa-solid fa-chevron-down"></i></div>

                  <?php }?>
                  <div class="social-share-icon-main">
                    <?php   if ( get_theme_mod('internet_service_provider_pro_post_general_settings_post_share_facebook',true) == "1" ) { ?>
                          <a href="https://www.facebook.com/sharer/sharer.php?u=<?php echo the_permalink(); ?>" target="_blank"><i class="fab fa-facebook-f"></i><span class="screen-reader-text"><?php echo esc_html('facebook.com', 'internet-service-provider-pro' ) ; ?></span></a>
                      <?php }

                      if ( get_theme_mod('internet_service_provider_pro_post_general_settings_post_share_linkedin',true) == "1" ) { ?>
                          <a href="https://www.linkedin.com/shareArticle?mini=true&url=<?php the_permalink(); ?>&title=<?php the_title(); ?>&source=<?php the_title(); ?>" target="_blank"><i class="fab fa-linkedin-in"></i><span class="screen-reader-text"><?php echo esc_html('linkedin.com', 'internet-service-provider-pro' ) ; ?></span></a>
                      <?php }

                      if ( get_theme_mod('internet_service_provider_pro_post_general_settings_post_share_twitter',true) == "1" ) { ?>
                          <a href="https://twitter.com/share?url=<?php the_permalink(); ?>&amp;text=<?php echo the_title(); ?>" target="_blank"><i class="fab fa-x-twitter"></i><span class="screen-reader-text"><?php echo esc_html('twitter.com', 'internet-service-provider-pro' ) ; ?></span></a>
                      <?php } ?>
                  </div>

                </div>
            </div>
        <?php
    }
}

 /* Breadcrumb Begin */
 function internet_service_provider_pro_shop_breadcrumbs() {
  if (!is_home()) {
      echo '<a href="' . esc_url(home_url()) . '"> Home </a> / ';
      if (is_shop()) {
          echo "<span>Shop</span>";
      } elseif (is_product_category()) {
          $category = get_queried_object();
    echo "<span> ";
          echo esc_html($category->name);
    echo "</span> ";
      }
  }
}


function internet_service_provider_pro_the_breadcrumb() {
    if (!is_home()) {
      echo '<a href="';
        echo esc_url(home_url());
      echo '">';
       echo ' Home /';
      echo "</a> ";
      if (is_category() || is_single()) {
        the_category(', ');
        if (is_single()) {
          echo "<span> ";
            the_title();
          echo "</span> ";
        }
      } elseif (is_page()) {
        echo "<span> ";
          the_title();
        echo "</span> ";
      } elseif (is_tax()) {
        echo '<span>';
        single_term_title();
        echo '</span>';
      }
    }
}

function internet_service_provider_pro_string_limit_words($string, $word_limit) {
  $words = explode(' ', $string, ($word_limit + 1));
  if(count($words) > $word_limit)
  array_pop($words);
  return implode(' ', $words);
}

// Recent post widget with thumbnails
// include internet_service_provider_pro_EXT_DIR.'../../../wp-includes/default-widgets.php';
Class My_Recent_Posts_Widget extends WP_Widget_Recent_Posts {
    function widget($args, $instance) {
            if ( ! isset( $args['widget_id'] ) ) {
            $args['widget_id'] = $this->id;
        }
        $title = ( ! empty( $instance['title'] ) ) ? $instance['title'] : __( 'Recent Posts', 'internet-service-provider-pro' );
        /** This filter is documented in wp-includes/widgets/class-wp-widget-pages.php */
        $title = apply_filters( 'widget_title', $title, $instance, $this->id_base );
        $number = ( ! empty( $instance['number'] ) ) ? absint( $instance['number'] ) : 5;
        if ( ! $number )
            $number = 5;
        $show_date = isset( $instance['show_date'] ) ? $instance['show_date'] : false;
        /**
         * Filter the arguments for the Recent Posts widget.
         *
         * @since 3.4.0
         *
         * @see WP_Query::get_posts()
         *
         * @param array $args An array of arguments used to retrieve the recent posts.
         */
        $r = new WP_Query( apply_filters( 'widget_posts_args', array(
            'posts_per_page'      => $number,
            'no_found_rows'       => true,
            'post_status'         => 'publish',
            'ignore_sticky_posts' => true
        ) ) );
        if ($r->have_posts()) :
        ?>
        <?php echo $args['before_widget']; ?>
        <?php if ( $title ) {
            echo $args['before_title'] . esc_html($title) . $args['after_title'];
        } ?>
        <ul>
          <?php while ( $r->have_posts() ) : $r->the_post(); ?>
              <li>
                <div class="recent-post-box">
                  <div class="media post-thumb">
                    <?php if(has_post_thumbnail()) { the_post_thumbnail(); } ?>
                    <div class="media-body post-content ps-3">
                      <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                     <?php if ( $show_date ) : ?>
                         <p class="post-date"><?php echo get_the_date(); ?></p>
                     <?php endif; ?>
                    </div>
                  </div>
                </div>
              </li>
          <?php endwhile;
          wp_reset_postdata(); ?>
        </ul>

        <?php echo $args['after_widget'];

        endif;
    }
}
function my_recent_widget_registration() {
  unregister_widget('WP_Widget_Recent_Posts');
  register_widget('My_Recent_Posts_Widget');
}
add_action('widgets_init', 'my_recent_widget_registration');


function internet_service_provider_pro_section_about_us_shortcode( ){
  ob_start();
  echo get_template_part( 'template-parts/home/section-about-us' );
  return ob_get_clean();
}
add_shortcode( 'internet-service-provider-pro-about-us', 'internet_service_provider_pro_section_about_us_shortcode' );

function internet_service_provider_pro_section_kitchen_style_shortcode( ){
  ob_start();
  echo get_template_part( 'template-parts/home/section-kitchen-style' );
  return ob_get_clean();
}
add_shortcode( 'internet-service-provider-pro-kitchen-style', 'internet_service_provider_pro_section_kitchen_style_shortcode' );

function internet_service_provider_pro_section_kitchen_tab_shortcode( ){
  ob_start();
  echo get_template_part( 'template-parts/home/section-kitchen-tab' );
  return ob_get_clean();
}
add_shortcode( 'internet-service-provider-pro-kitchen-tab', 'internet_service_provider_pro_section_kitchen_tab_shortcode' );

function internet_service_provider_pro_section_project_shortcode( ){
  ob_start();
  echo get_template_part( 'template-parts/home/section-projects' );
  return ob_get_clean();
}
add_shortcode( 'internet-service-provider-pro-projects', 'internet_service_provider_pro_section_project_shortcode' );

function internet_service_provider_pro_section_testimonials_shortcode( ){
  ob_start();
  echo get_template_part( 'template-parts/home/section-testimonials' );
  return ob_get_clean();
}
add_shortcode( 'internet-service-provider-pro-testimonials', 'internet_service_provider_pro_section_testimonials_shortcode' );

function internet_service_provider_pro_section_latest_news_shortcode( ){
  ob_start();
  echo get_template_part( 'template-parts/home/section-latest-news' );
  return ob_get_clean();
}
add_shortcode( 'internet-service-provider-pro-latest-news', 'internet_service_provider_pro_section_latest_news_shortcode' );

function internet_service_provider_pro_section_team_shortcode( ){
  ob_start();
  echo get_template_part( 'template-parts/home/section-team' );
  return ob_get_clean();
}
add_shortcode( 'internet-service-provider-pro-team', 'internet_service_provider_pro_section_team_shortcode' );

function internet_service_provider_pro_section_why_choose_us_shortcode( ){
  ob_start();
  echo get_template_part( 'template-parts/home/section-why-choose-us' );
  return ob_get_clean();
}
add_shortcode( 'internet-service-provider-pro-why-choose-us', 'internet_service_provider_pro_section_why_choose_us_shortcode' );

function internet_service_provider_pro_section_sustainability_commitment_shortcode( ){
  ob_start();
  echo get_template_part( 'template-parts/home/section-sustainability-commitment' );
  return ob_get_clean();
}
add_shortcode( 'internet-service-provider-pro-sustainability-commitment', 'internet_service_provider_pro_section_sustainability_commitment_shortcode' );


if (!function_exists('bmp_dimension_css')) {

    function bmp_dimension_css($key = '', $params = array()) {
        if (!$key)
            return;

        $default_params = array(
            'position' => array('left', 'top', 'bottom', 'right'),
            'selector' => '',
            'type' => 'margin',
            'unit' => 'px',
            'responsive' => true
        );

        $params = wp_parse_args($params, $default_params);

        $devices = array('desktop');
        if ($params['responsive']) {
            $devices = array('desktop', 'tablet', 'mobile');
        }
        $type = $params['type'] . '-';
        $positions = $params['position'];
        $unit = $params['unit'];
        $selector = $params['selector'];

        $css = '';
        foreach ($devices as $device) {
            $style = array();
            foreach ($positions as $position) {
                $val = get_theme_mod($key . '_' . $position . '_' . $device);
                if ($val === '0' || $val) {
                    $style[] = $type . $position . ':' . $val . $unit;
                }
            }
            if ($style) {
                if ($device == 'tablet') {
                    $css .= '@media screen and (max-width:768px){';
                } elseif ($device == 'mobile') {
                    $css .= '@media screen and (max-width:580px){';
                }
                $css .= $selector . '{' . implode(';', $style) . '}';
                if ($device == 'tablet' || $device == 'mobile') {
                    $css .= '}';
                }
            }
        }

        return $css;
    }
}

/**
 * Number with blank value sanitization callback
 *
 */

function internet_service_provider_pro_sanitize_number_blank($val) {
    return is_numeric($val) ? $val : '';
}