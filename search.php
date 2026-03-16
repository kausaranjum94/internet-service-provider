<?php
/**
 * The template for displaying Search Results pages.
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
				 <h1>Search</h1>
	            <?php if ( get_theme_mod('vw_education_pro_site_breadcrumb_enable', true) != '' ) { ?>
	                  <div class=" bradcrumbs">
						<a href="">Home / Search</a>
	                  </div>
	              <?php }
	              ?>
		      </div>
	      </div>
	    </div>
	  </div>
</div>
<section id="search-page">
	<div class="container">
		<h1 class="entry-title mb-4"><?php printf( __( 'Results For: %s', 'internet-service-provider-pro' ), '<span>' . get_search_query() . '</span>' ); ?></h1>
	</div>
	<div class="container">
		<div class="middle-align">
			<div class="row">
				<div class="col-lg-12">
					<div class="row">
						<?php if ( have_posts() ) : ?>
							<?php while ( have_posts() ) : the_post();
								get_template_part( 'template-parts/post/post-content' );
							endwhile; ?>
							<div class="navigation">
								<?php // Previous/next page navigation.
								the_posts_pagination( array(
									'prev_text'          => __( '<i class="fas fa-chevron-left"></i>', 'internet-service-provider-pro' ),
									'next_text'          => __( '<i class="fas fa-chevron-right"></i>', 'internet-service-provider-pro' ),
									'before_page_number' => '<span class="meta-nav screen-reader-text">' . __( 'Page', 'internet-service-provider-pro' ) . ' </span>',
								)); ?>
							</div>
						<?php else : ?>
							<?php get_template_part( 'no-results', 'search' ); ?>
						<?php endif; ?>
					</div>
				</div>
				<div class="col-lg-3 col-md-4 col-sm-6">
					<?php //get_sidebar('page'); ?>
				</div>
				<div class="clearfix"></div>
			</div>
		</div>
	</div>
</section>
<?php get_footer(); ?>