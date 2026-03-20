<?php

 $header_widgets_section = get_theme_mod( 'internet_service_provider_pro_header_widgets_enable' );
 if ( 'Disable' == $header_widgets_section ) {
   return;
 }
 if( get_theme_mod('internet_service_provider_pro_header_widgets_bgcolor','') ) {
   $background_setting = 'background-color:'.esc_attr(get_theme_mod('internet_service_provider_pro_header_widgets_bgcolor','')).';';
 }else{
   $background_setting = '';
 }
?>

<div id="vw-sticky-menu">
    <div class="container header-inner">
        <div class="row align-items-center ">
            <div class="col-lg-3 col-md-4 col-5">
                <div class="vw-logo" id="site-sticky-menu1">
                    <?php
                 $logo= get_theme_mod( 'custom_logo' );
                 if($logo != ''){
                    if( has_custom_logo() ){  internet_service_provider_pro_the_custom_logo();  }
                  }else { ?>
                    <?php if( get_theme_mod('internet_service_provider_pro_display_default_logo',true) != false){ ?>
                    <a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home" target="_blank"><img
                            src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/Logo.png"
                            alt="<?php bloginfo( 'name' ); ?>" /></a>
                    <?php } ?>
                    <?php } ?>
                    <div class="logo-text">
                        <?php if( get_theme_mod('internet_service_provider_pro_display_title') != false){ ?>
                        <h2><a href="<?php echo esc_url( home_url( '/' ) ); ?>"
                                rel="home"><?php esc_attr(bloginfo( 'name' )); ?></a></h2>
                        <?php }
                   if( get_theme_mod('internet_service_provider_pro_display_tagline') != false){
                     $description = get_bloginfo( 'description', 'display' );
                     if ( $description || is_customize_preview() ) : ?>
                        <p>
                            <?php echo esc_html($description); ?>
                        </p>
                        <?php endif; }
                 ?>
                    </div>
                </div>
            </div>
            <div class="col-lg-9 col-md-8 col-7 d-flex align-items-center justify-content-end">
                <div class="header-menu-wrap d-flex align-items-center justify-content-end">
                    <div class="innermenubox">
                        <div class="toggle-nav mobile-menu">
                            <div role="button" on="tap:sidebar1.toggle" tabindex="0" class="hamburger" id="open_nav">
                                <span
                                    class="screen-reader-text"><?php echo esc_html( 'Menu', 'internet-service-provider-pro' ); ?></span><i
                                    class="<?php echo esc_html(get_theme_mod('internet_service_provider_pro_res_open_menu_icon', 'fas fa-bars')); ?>"></i>
                            </div>
                        </div>
                        <div class="main-header">
                            <div id="mySidenav" class="sidenav">
                                <nav id="site-navigation" class="main-navigation side-navigation">
                                    <?php
                                        wp_nav_menu( array(
                                            'theme_location' => 'primary',
                                            'container_class' => 'primary-menu' ,
                                        ) );
                                    ?>
                                </nav>
                            </div>
                        </div>
                        <amp-sidebar id="sidebar1" layout="nodisplay" side="left">
                            <div role="button" aria-label="close sidebar" on="tap:sidebar1.toggle" tabindex="0"
                                class="close-sidebar closebtn mobile-menu" id="close_nav"><i
                                    class="<?php echo esc_html(get_theme_mod('internet_service_provider_pro_res_close_menu_icon', 'fas fa-times')); ?>"></i>
                            </div>
                            <div id="mySidenav" class="nav sidenav">
                                <nav id="site-navigation" class="main-navigation">
                                    <?php
                                        wp_nav_menu( array(
                                        'theme_location' => 'primary',
                                        'container_class' => 'menu clearfix' ,
                                        'menu_class' => 'clearfix',
                                        'items_wrap' => '<ul id="%1$s" class="%2$s mobile_nav">%3$s</ul>',
                                        'fallback_cb' => 'wp_page_menu',
                                        ) );
                                    ?>
                                </nav>
                            </div>
                        </amp-sidebar>
                    </div>
                    <?php if( get_theme_mod( 'internet_service_provider_pro_header_search',true) != 0) { ?>
						<div class="search-mobile">
							<div class="search-btn">
								<span class="fas fa-search"></span>
							</div>
							<div class="search-wrapper">
								<div class="close-btn">
									<span class="fas fa-times"></span>
								</div>
								
								<div class="search-data">
									<div class="product-search-form">
										<form method="get" action="<?php echo esc_url(home_url('/')); ?>">
											<input type="hidden" name="post_type" value="post" />
											<input class="header-search-input" name="s" type="text" placeholder="<?php echo esc_attr(get_theme_mod('internet_service_provider_pro_header_serach_input_placeholder_text')); ?>"/>
											<button class="header-search-button" type="submit"><i class="fas fa-search"></i></button>
										</form>
									</div>
								</div>
							</div>
						</div>
					<?php }?>
                    <?php if(get_theme_mod('internet_service_provider_pro_header_button_title')!=''){ ?>
                    <div class="header-btn" data-aos="fade-up" data-aos-duration="1100">
                        <a class="theme_button theme_button2" href="<?php echo esc_url(get_theme_mod('internet_service_provider_pro_header_button_url')); ?>">
                            <span><?php echo esc_html(get_theme_mod('internet_service_provider_pro_header_button_title')); ?></span>
                        </a>
                    </div>
                    <?php } ?>
                </div>
            </div>

        </div>
    </div>
</div>
</div>

<span class="d-none" id="menu-width"><?php echo esc_html($menu_width); ?></span>