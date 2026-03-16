<?php
$address_section = get_theme_mod( 'internet_service_provider_pro_radiolast_enable' );
if ( 'Disable' == $address_section ) {
	return;
}

if( get_theme_mod('internet_service_provider_pro_section_footer_bgcolor','') ) {
	$footer_backg = 'background-color:'.esc_attr(get_theme_mod('internet_service_provider_pro_section_footer_bgcolor','')).';';
   }elseif( get_theme_mod('internet_service_provider_pro_section_footer_bgimage','') ){
	$footer_backg = 'background-image:url(\''.esc_url(get_theme_mod('internet_service_provider_pro_section_footer_bgimage')).'\')';
   }else{
	$footer_backg='';
   }
   $img_bg =get_theme_mod('internet_service_provider_pro_section_footer_bg_attachment');
?>
<?php if (get_theme_mod('internet_service_provider_pro_custom_footer_widget_section', 'true') !='') { ?>
<section id="footer" class="<?php echo esc_attr($img_bg); ?>"  style="<?php echo esc_attr( $footer_backg ); ?>">
<?php if ( get_theme_mod('internet_service_provider_pro_genral_section_show_scroll_top',true) == "1" ) { ?>
	<a href="javascript:" id="return-to-top"><i
			class="<?php echo esc_html(get_theme_mod('internet_service_provider_pro_genral_section_show_scroll_top_icon')); ?>"></i><span
			class="screen-reader-text"><?php esc_html_e('Return To Top Button','internet-service-provider-pro')?></span></a>
	<?php }?>
<div class="footer-clip-one footer-clip"></div>
    <div id="footer_box" class="darkbox">
        <div class="container footer-cols">
            <?php
			$count = 0;
			if ( is_active_sidebar('footer-1') != '' ) {
				$count++;
			}
			if ( is_active_sidebar('footer-2') != '' ) {
				$count++;
			}
			if ( is_active_sidebar('footer-3') != '' ) {
				$count++;
			}
			if ( is_active_sidebar('footer-4') != '' ) {
				$count++;
			}

			if ( $count == 1 ) {
			 $colmd = 'col-lg-12 col-sm-6';
			 $collg = 'col-lg-12 col-sm-6';
			 $colsm = 'col-lg-12 col-sm-6';
		 } elseif ( $count == 2 ) {
			 $colmd = 'col-lg-6 col-sm-6';
			 $collg = 'col-lg-6 col-sm-6';
			 $colsm = 'col-lg-6 col-sm-6';
		 } elseif ( $count == 3 ){
			 $colmd = 'col-lg-4 col-sm-6';
			 $collg = 'col-lg-4 col-sm-6';
			 $colsm = 'col-lg-4 col-sm-6';
		 } else {
			 $colmd = 'col-lg-4 col-sm-6';
			 $colsm = 'col-lg-2 col-sm-6';
			 $collg = 'col-lg-2 col-sm-4';
			 $colxl = 'col-lg-4 col-sm-8';
		 }
			?>
            <div class="row">
				<div class="<?php if ( is_active_sidebar('footer-1') == '' ) { echo 'footer_hide'; } else { echo esc_html( $colmd ); } ?> footer-col-one">
                    <?php dynamic_sidebar( 'footer-1' ); ?>
                </div>
                <div
                    class="<?php if ( is_active_sidebar('footer-2') == '' ) { echo 'footer_hide'; } else { echo esc_html( $colsm ); } ?>">
                    <?php dynamic_sidebar( 'footer-2' ); ?>
                </div>
                <div
                    class="<?php if ( is_active_sidebar('footer-3') == '' ) { echo 'footer_hide'; } else { echo esc_html( $collg ); } ?>">
                    <?php dynamic_sidebar( 'footer-3' ); ?>
                </div>
                <div
                    class="<?php if ( is_active_sidebar('footer-4') == '' ) { echo 'footer_hide'; } else { echo esc_html( $colxl ); } ?> footer-col-four">
                    <?php dynamic_sidebar( 'footer-4' ); ?>
                </div>
            </div>
          
        </div><!-- .container -->

		<?php get_template_part( 'template-parts/footer/footer-contact' ); ?>
		
		<?php get_template_part( 'template-parts/footer/copyright' ); ?>
		
    </div><!-- #footer_box -->

</section>
<?php } ?>