<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package internet-service-provider-pro
 */
get_header();
//get_template_part( 'template-parts/banner' );
$background_img = get_theme_mod('internet_service_provider_pro_inner_page_banner_bgimage');
?>
<?php do_action( 'internet_service_provider_pro_after_page_header' ); ?>



<div class="title-box banner-img" style="background-image:url(<?php echo esc_url( $background_img); ?>)">
<div class="banner-page-text container">
	    <div class="row justify-content-center">
	      <div class="col-xl-8 col-lg-10 col-md-10">
	        <div class="above_title">
        		<h1><?php the_title();?></h1>
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

<div class="outer_dpage">
	<div class="container">
		<div class="middle-content">
			<?php while ( have_posts() ) : the_post(); ?>
				<?php the_content();
				// If comments are open or we have at least one comment, load up the comment template
				if ( comments_open() || '0' != get_comments_number() ) {
					comments_template(); }
			endwhile; // end of the loop. ?>
		</div>
		<div class="clearfix"></div>
	</div>
</div>
<?php do_action( 'internet_service_provider_pro_before_page_footer' ); ?>

<?php get_footer(); ?>
