<?php
/**
 * Template Name: Contact
*/
get_header(); get_template_part( 'template-parts/banner' ); ?>

<div class="contact-box">
	<div class="container pb-5">
		<div class="row">
			<div class="col-lg-12 col-md-12 text-center">
				<div class="contact-info">
					

					<div class="row mt-4">
							<?php if ( get_theme_mod('internet_service_provider_pro_address_title',true) != "" ) { ?>
								<div class="contact-address col-lg-4 col-md-4 col-sm-6">
									<div class="inner-cont">
										<div class="inner-cont-blk">
											<div class="c_icon">
												<i class="fas fa-map-marker-alt"></i>
											</div>
											<div class="c_content">
												<div class="cont_head"><?php echo esc_html(get_theme_mod('internet_service_provider_pro_address_title')); ?></div>
												<p class="m-0"><a href="http://maps.google.com/?q=1200 <?php echo (get_theme_mod('internet_service_provider_pro_address')); ?>" target="_blank"><?php echo (get_theme_mod('internet_service_provider_pro_address')); ?></a></p>
											</div>
										</div>
									</div>
								</div>
							<?php }?>

						<?php if ( get_theme_mod('internet_service_provider_pro_contactpage_phone_title',true) != "" ) { ?>
							<div class="contact-phone col-lg-4 col-md-4 col-sm-6">
								<div class="inner-cont">
									<div class="inner-cont-blk">
										<div class="c_icon">
											<i class="fas fa-phone-volume"></i>
										</div>
										<div class=" c_content">
											<div class="cont_head"><?php echo esc_html(get_theme_mod('internet_service_provider_pro_contactpage_phone_title')); ?></div>
											<p class="m-0"><a href="tel:<?php echo esc_html(get_theme_mod('internet_service_provider_pro_contactpage_phone')); ?>">
												<?php echo esc_html(get_theme_mod('internet_service_provider_pro_contactpage_phone')); ?>
											</a></p>
										</div>
									</div>
								</div>
							</div>
						<?php }?>

						<?php if ( get_theme_mod('internet_service_provider_pro_contactpage_email_title',true) != "" ) { ?>
							<div class="contact-email col-lg-4 col-md-4 col-sm-6">
								<div class="inner-cont">
									<div class="inner-cont-blk">
										<div class="c_icon">
											<i class="far fa-envelope-open"></i>
										</div>
										<div class=" c_content">
											<div class="w-100 cont_head"><?php echo esc_html(get_theme_mod('internet_service_provider_pro_contactpage_email_title')); ?></div>
											<p class="m-0"><a href="mailto:<?php echo esc_html(get_theme_mod('internet_service_provider_pro_contactpage_email',__('abc@gamil.com', 'internet-service-provider-pro'))); ?>"><?php echo esc_html(get_theme_mod('internet_service_provider_pro_contactpage_email',__('abc@gamil.com', 'internet-service-provider-pro'))); ?></a></p>
										</div>
									</div>
								</div>
							</div>
						<?php }?>
					</div>
				</div>
			</div>
			<div class="col-lg-12 col-md-12 mt-4">

		      	<div class="contac_form">
					<div class="pb-2" data-aos="zoom-in-up" data-aos-duration="2000">
				      <?php if(get_theme_mod('internet_service_provider_pro_contactpage_form_title')!=''){ ?>
				        <h3>
				          <?php echo esc_html(get_theme_mod('internet_service_provider_pro_contactpage_form_title')); ?>
				        </h3>
				      <?php } ?>
				    </div>

					<div class="form_code">
						<?php if(get_theme_mod('internet_service_provider_pro_contact_form_code') != ''){?>
							<?php echo do_shortcode(get_theme_mod('internet_service_provider_pro_contact_form_code')); ?>
			    		<?php } ?>
					</div>

					<?php while ( have_posts() ) : the_post(); ?>
		    			<?php the_content(); ?>
					<?php endwhile; // end of the loop. ?>

				</div>
			</div>
		</div>
	</div>
	
	<div class="container">
		<?php do_action('internet_service_provider_pro_before_map'); ?>
		<section class="google-map text-center p-0" id="map">
			<?php if ( get_theme_mod('internet_service_provider_pro_address_latitude',true) != "" && get_theme_mod('internet_service_provider_pro_address_longitude',true) != "" ) { ?>
			  <embed width="100%" height="325" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?q=<?php echo esc_attr(get_theme_mod('internet_service_provider_pro_address_latitude')); ?>,<?php echo esc_attr(get_theme_mod('internet_service_provider_pro_address_longitude')); ?>&hl=es;z=14&amp;output=embed"></embed>
			<?php } ?>
		</section>
	<?php do_action('internet_service_provider_pro_after_map'); ?>
	</div>
</div>

<?php get_footer(); ?>
