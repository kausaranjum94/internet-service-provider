<?php
/**
 * The template for displaying all category pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package internet-service-provider-pro
 */
 $background_img = get_theme_mod('internet_service_provider_pro_inner_page_banner_bgimage');
get_header();
?>
<div class="title-box banner-img" style="background-image:url(<?php echo esc_url( $background_img); ?>)">
<div class="banner-page-text container">
	    <div class="row justify-content-center">
	      <div class="col-xl-8 col-lg-10 col-md-10">
	        <div class="above_title">
        		<h1><?php single_term_title();?></h1>
	            <?php if ( get_theme_mod('vw_education_pro_site_breadcrumb_enable', true) != '' ) { ?>
	                  <div class=" bradcrumbs">
	                    <?php internet_service_provider_pro_the_breadcrumb(); ?>
	                  </div>
	              <?php }
	              ?>
		      </div>
	      </div>
	    </div>
	  </div>
</div>
<section >


<div class="container">
    <div class="row">
		<div class="col-md-12">
			<div class="row">
				<?php if ( have_posts() ) : ?>
	                <?php while ( have_posts() ) : the_post();
						get_template_part( 'template-parts/post/post-content' );
					endwhile; ?>
	            <?php else : ?>
	                <?php get_template_part( 'no-results', 'archive' ); ?>
	            <?php endif; ?>
	            <div class="navigation">
					<?php // Previous/next page navigation.
			            the_posts_pagination( array(
			                'prev_text'  => __( 'Previous page', 'internet-service-provider-pro' ),
			                'next_text'  => __( 'Next page', 'internet-service-provider-pro' ),
			                'before_page_number' => '<span class="meta-nav screen-reader-text">' . __( 'Page', 'internet-service-provider-pro' ) . ' </span>',
			            ));
					?>
				</div>
			</div>
        </div>

			<?php /*	<div id="sidebar" class="col-md-3">
					<?php get_sidebar( 'page' ); ?>
				</div> */ ?>

        <div class="clearfix"></div>
    </div>
</div>
</section>
<?php get_footer(); ?>
