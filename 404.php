<?php
/**
 * The template for displaying 404 pages (Not Found).
 *
 * @package internet-service-provider-pro
 */
	get_header();
	get_template_part( 'template-parts/banner' );

	if( get_theme_mod('internet_service_provider_pro_404_page_bgcolor','') ) {
		$error_page_back = 'background-color:'.esc_attr(get_theme_mod('internet_service_provider_pro_404_page_bgcolor','')).';';
	}elseif( get_theme_mod('internet_service_provider_pro_404_page_bgimage','') ){
		$error_page_back = 'background-image:url(\''.esc_url(get_theme_mod('internet_service_provider_pro_404_page_bgimage')).'\')';
	}else{
		$error_page_back='';
	}
	$img_bg = get_theme_mod('internet_service_provider_pro_404_page_bg_attachment');
	$btn_svg = file_get_contents(get_template_directory_uri().'/assets/images/btn-icon.svg');
?>
<section class="content_page error-page <?php echo esc_attr($img_bg); ?>" style="<?php echo esc_attr($error_page_back);?>">
	<div class="container">
		<div class="row text-center justify-content-center">
			<div class="col-lg-7">
				<div class="page-content error_bgs d-flex flex-column gap-2">
					<div class="404-image" data-aos="flip-up" data-aos-duration="1000">
						<?php if(get_theme_mod('internet_service_provider_pro_404_image')!=''){ ?>
							<img src="<?php echo esc_url(get_theme_mod('internet_service_provider_pro_404_image')); ?>">
						<?php } ?>
					</div>
					
					<?php if ( get_theme_mod('internet_service_provider_pro_404_page_content') != ''): ?>
						<p class="error-para mb-0">
							<?php echo esc_html(get_theme_mod('internet_service_provider_pro_404_page_content')); ?>
						</p>
					<?php endif; ?>
					<?php if ( get_theme_mod('internet_service_provider_pro_404_page_button_text') != ''): ?>
					<div class="m-auto mt-3">
						<a class="theme_button" href="<?php echo esc_url( home_url() ); ?>">
							<span><?php echo esc_html(get_theme_mod('internet_service_provider_pro_404_page_button_text')); ?></span>
						</a>
					</div>
					<?php endif; ?>
			</div>
		   </div>
		</div>
	</div>
</div>
</section>
<?php get_footer(); ?>
