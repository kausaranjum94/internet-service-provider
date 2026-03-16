<?php
/**
 * The template for displaying Archive pages.
 *
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package internet-service-provider-pro
 */
get_header();
$background_img = get_theme_mod('internet_service_provider_pro_inner_page_banner_bgimage');
// get_template_part('template-parts/banner');
?>

<div class="title-box text-center banner-img" style="background-image:url(<?php echo esc_url( $background_img); ?>)">
  <div class="banner-page-text container">
    <div class="row">
      <div class="col-lg-5 col-sm-7 col-7 banner-left-col">
        <div class="above_title">
            <h1><?php the_title();?></h1>
            <?php if ( get_theme_mod('internet_service_provider_pro_site_breadcrumb_enable', true) != '' ) { ?>
                  <div class=" bradcrumbs">
                    <?php internet_service_provider_pro_the_breadcrumb(); ?>
                  </div>
              <?php }
              ?>
      </div>
      </div>
      <div class="col-lg-8">

      </div>
    </div>
  </div>
</div>
<div class="container">
	<div class="middle-align">
		<div class="row">
			<div class="col-md-12">
				<div class="row">
					<?php if ( have_posts() ) : ?>
						<header class="page-header mb-4">
							<?php the_archive_title( '<h1 class="page-title">', '</h1>' );
							the_archive_description( '<div class="taxonomy-description">', '</div>' );?>
						</header>
						<?php /* Start the Loop */ ?>
						<?php while ( have_posts() ) : the_post();
							get_template_part( 'template-parts/post/post-content' );
						endwhile;
						// Previous/next page navigation.
						the_posts_pagination( array(
							'prev_text'          => __( 'Previous page', 'internet-service-provider-pro' ),
							'next_text'          => __( 'Next page', 'internet-service-provider-pro' ),
							'before_page_number' => '<span class="meta-nav screen-reader-text">' . __( 'Page', 'internet-service-provider-pro' ) . ' </span>',
						));
					else :
						get_template_part( 'no-results', 'archive' ); ?>
					<?php endif; ?>
				</div>
			</div>
			<?php /*<div class="col-md-4">
				<?php get_sidebar( 'page' ); ?>
			</div> */ ?>

			<div class="clearfix"></div>
		</div>
	</div>
</div>
<?php get_footer(); ?>
