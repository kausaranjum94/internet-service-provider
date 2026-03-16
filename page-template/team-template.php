<?php
/**
 * Template Name: Team Template
*/

get_header(); 
get_template_part( 'template-parts/banner' );?>
<div id="team" class="testimonial_page_template my-5">
	<div class="container">
		<div class="team-content row position-relative " data-aos="fade-right" data-aos-duration="2000">
      <?php if ( defined( 'internet_service_provider_pro_POSTTYPE_VERSION' ) ) {
        $theme_paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;
        $query = new WP_Query( array( 
          'post_type' => 'team',
          'paged' => $theme_paged, 
          ) ); 
        if ( $query->have_posts() ) :  while ($query->have_posts()) : $query->the_post(); ?>
          <div class=" col-lg-3 col-md-3 col-sm-6 mb-4" data-aos="zoom-in-up" data-aos-duration="2000">
            <div class="team_outer" data-aos="zoom-in-up" data-aos-duration="2000">
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
          </div>
        <?php endwhile; endif; ?>
      <?php } else{ ?>
        <h4 class="post-type-msg text-center"><?php echo esc_html_e('Please install Internet Service Provider Pro Posttype plugin and add your team to enable this section','internet-service-provider-pro')?></h4>
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
