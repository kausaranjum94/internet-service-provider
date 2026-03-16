<?php
/**
 * Template Name: kitchen Template
*/

get_header(); 
get_template_part( 'template-parts/banner' );?>
<div id="kitchen-page" class="testimonial_page_template my-5">
	<div class="container">
		<div class="kitchen-content row position-relative" data-aos="fade-right" data-aos-duration="2000">
      <?php if ( defined( 'internet_service_provider_pro_POSTTYPE_VERSION' ) ) {
        $theme_paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;
        $query = new WP_Query( array( 
          'post_type' => 'kitchen',
          'paged' => $theme_paged, 
          ) ); 
        if ( $query->have_posts() ) :  while ($query->have_posts()) : $query->the_post(); ?>
          <div class=" col-lg-3 col-md-3 col-sm-6 mb-4" data-aos="zoom-in-up" data-aos-duration="2000">
            <div class="kitchen-item" data-aos="fade-left" data-aos-duration="2000" >
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
          </div>
        <?php endwhile; endif; ?>
      <?php } else{ ?>
        <h4 class="post-type-msg text-center"><?php echo esc_html_e('Please install Internet Service Provider Pro Posttype plugin and add your kitchen to enable this section','internet-service-provider-pro')?></h4>
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
