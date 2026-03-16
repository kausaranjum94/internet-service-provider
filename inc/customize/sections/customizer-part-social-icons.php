<?php
    /* Footer Sections */
    $wp_customize->add_section('internet_service_provider_pro_social_icons',array(
        'title' => __('Social Icons','internet_service_provider_pro'),
        'description'   => __('Add social Icons details Here','internet_service_provider_pro'),
        'panel' => 'internet_service_provider_pro_panel_id',
    ));

    $wp_customize->selective_refresh->add_partial( 'internet_service_provider_pro_headertwitter', array(
        'selector' => '.socialbox',
        'render_callback' => 'twentyfifteen_customize_partial_internet_service_provider_pro_headertwitter',
    ) );

    $wp_customize->add_setting( 'internet_service_provider_pro_social_icons_content_setting',
    array(
      'default' => '',
      'transport' => 'postMessage',
      'sanitize_callback' => 'internet_service_provider_pro_text_sanitization'
    ));
    $wp_customize->add_control( new VW_Themes_Seperator_custom_Control( $wp_customize, 'internet_service_provider_pro_social_icons_content_setting',
        array(
          'label' => __('Social Icons Settings','internet_service_provider_pro'),
          'section' => 'internet_service_provider_pro_social_icons'
        )
    ) );

    $wp_customize->add_setting(
		'internet_service_provider_pro_headertwitter_icon',
		array(
			'default'     => '',
			'sanitize_callback' => 'sanitize_text_field'
		)
	);
	$wp_customize->add_control(
		new internet_service_provider_pro_Fontawesome_Icon_Chooser(
			$wp_customize,
			'internet_service_provider_pro_headertwitter_icon',
			array(
			'settings'    => 'internet_service_provider_pro_headertwitter_icon',
			'section'   => 'internet_service_provider_pro_social_icons',
			'type'      => 'icon',
			'label'     => esc_html__( 'Choose  Icon', 'internet-service-provider-pro' ),
			)
		)
	);

    $wp_customize->add_setting('internet_service_provider_pro_headertwitter',array(
        'default'   => '',
        'sanitize_callback' => 'esc_url_raw'
    ));
    $wp_customize->add_control('internet_service_provider_pro_headertwitter',array(
        'label' => __('Add twitter link','internet_service_provider_pro'),
        'section'   => 'internet_service_provider_pro_social_icons',
        'setting'   => 'internet_service_provider_pro_headertwitter',
        'type'      => 'text'
    ));

    $wp_customize->add_setting(
		'internet_service_provider_pro_headerpinterest_icon',
		array(
			'default'     => '',
			'sanitize_callback' => 'sanitize_text_field'
		)
	);
	$wp_customize->add_control(
		new internet_service_provider_pro_Fontawesome_Icon_Chooser(
			$wp_customize,
			'internet_service_provider_pro_headerpinterest_icon',
			array(
			'settings'    => 'internet_service_provider_pro_headerpinterest_icon',
			'section'   => 'internet_service_provider_pro_social_icons',
			'type'      => 'icon',
			'label'     => esc_html__( 'Choose  Icon', 'internet-service-provider-pro' ),
			)
		)
	);
 

    $wp_customize->add_setting('internet_service_provider_pro_headerpinterest',array(
        'default'   => '',
        'sanitize_callback' => 'esc_url_raw'
    ));    
    $wp_customize->add_control('internet_service_provider_pro_headerpinterest',array(
        'label' => __('Add pinterest link','internet_service_provider_pro'),
        'section'   => 'internet_service_provider_pro_social_icons',
        'setting'   => 'internet_service_provider_pro_headerpinterest',
        'type'  => 'text'
    ));

    $wp_customize->add_setting(
		'internet_service_provider_pro_headerfacebook_icon',
		array(
			'default'     => '',
			'sanitize_callback' => 'sanitize_text_field'
		)
	);
	$wp_customize->add_control(
		new internet_service_provider_pro_Fontawesome_Icon_Chooser(
			$wp_customize,
			'internet_service_provider_pro_headerfacebook_icon',
			array(
			'settings'    => 'internet_service_provider_pro_headerfacebook_icon',
			'section'   => 'internet_service_provider_pro_social_icons',
			'type'      => 'icon',
			'label'     => esc_html__( 'Choose  Icon', 'internet-service-provider-pro' ),
			)
		)
	);

   
    $wp_customize->add_setting('internet_service_provider_pro_headerfacebook',array(
        'default'   => '',
        'sanitize_callback' => 'esc_url_raw'
    ));
    $wp_customize->add_control('internet_service_provider_pro_headerfacebook',array(
        'label' => __('Add Facebook link','internet_service_provider_pro'),
        'section'   => 'internet_service_provider_pro_social_icons',
        'setting'   => 'internet_service_provider_pro_headerfacebook',
        'type'  => 'text'
    ));

    $wp_customize->add_setting(
		'internet_service_provider_pro_headeryoutube_icon',
		array(
			'default'     => '',
			'sanitize_callback' => 'sanitize_text_field'
		)
	);
	$wp_customize->add_control(
		new internet_service_provider_pro_Fontawesome_Icon_Chooser(
			$wp_customize,
			'internet_service_provider_pro_headeryoutube_icon',
			array(
			'settings'    => 'internet_service_provider_pro_headeryoutube_icon',
			'section'   => 'internet_service_provider_pro_social_icons',
			'type'      => 'icon',
			'label'     => esc_html__( 'Choose  Icon', 'internet-service-provider-pro' ),
			)
		)
	);

    $wp_customize->add_setting('internet_service_provider_pro_headeryoutube',array(
        'default'   => '',
        'sanitize_callback' => 'esc_url_raw'
    ));
    $wp_customize->add_control('internet_service_provider_pro_headeryoutube',array(
        'label' => __('Add Youtube link','internet_service_provider_pro'),
        'section'   => 'internet_service_provider_pro_social_icons',
        'setting'   => 'internet_service_provider_pro_headeryoutube',
        'type'  => 'text'
    ));

    $wp_customize->add_setting(
		'internet_service_provider_pro_headerinstagram_icon',
		array(
			'default'     => '',
			'sanitize_callback' => 'sanitize_text_field'
		)
	);
	$wp_customize->add_control(
		new internet_service_provider_pro_Fontawesome_Icon_Chooser(
			$wp_customize,
			'internet_service_provider_pro_headerinstagram_icon',
			array(
			'settings'    => 'internet_service_provider_pro_headerinstagram_icon',
			'section'   => 'internet_service_provider_pro_social_icons',
			'type'      => 'icon',
			'label'     => esc_html__( 'Choose  Icon', 'internet-service-provider-pro' ),
			)
		)
	);

    $wp_customize->add_setting('internet_service_provider_pro_headerinstagram',array(
        'default'   => '',
        'sanitize_callback' => 'esc_url_raw'
    ));    
    $wp_customize->add_control('internet_service_provider_pro_headerinstagram',array(
        'label' => __('Add Instagram link','internet_service_provider_pro'),
        'section'   => 'internet_service_provider_pro_social_icons',
        'setting'   => 'internet_service_provider_pro_headerinstagram',
        'type'  => 'text'
    ));

    $wp_customize->add_setting(
		'internet_service_provider_pro_headerlinkedin_icon',
		array(
			'default'     => '',
			'sanitize_callback' => 'sanitize_text_field'
		)
	);
	$wp_customize->add_control(
		new internet_service_provider_pro_Fontawesome_Icon_Chooser(
			$wp_customize,
			'internet_service_provider_pro_headerlinkedin_icon',
			array(
			'settings'    => 'internet_service_provider_pro_headerlinkedin_icon',
			'section'   => 'internet_service_provider_pro_social_icons',
			'type'      => 'icon',
			'label'     => esc_html__( 'Choose  Icon', 'internet-service-provider-pro' ),
			)
		)
	);

    $wp_customize->add_setting('internet_service_provider_pro_headerlinkedin',array(
        'default'   => '',
        'sanitize_callback' => 'esc_url_raw'
    ));    
    $wp_customize->add_control('internet_service_provider_pro_headerlinkedin',array(
        'label' => __('Add Linkedin link','internet_service_provider_pro'),
        'section'   => 'internet_service_provider_pro_social_icons',
        'setting'   => 'internet_service_provider_pro_headerlinkedin',
        'type'  => 'text'
    ));


    $wp_customize->add_setting(
		'internet_service_provider_pro_headertumblr_icon',
		array(
			'default'     => '',
			'sanitize_callback' => 'sanitize_text_field'
		)
	);
	$wp_customize->add_control(
		new internet_service_provider_pro_Fontawesome_Icon_Chooser(
			$wp_customize,
			'internet_service_provider_pro_headertumblr_icon',
			array(
			'settings'    => 'internet_service_provider_pro_headertumblr_icon',
			'section'   => 'internet_service_provider_pro_social_icons',
			'type'      => 'icon',
			'label'     => esc_html__( 'Choose  Icon', 'internet-service-provider-pro' ),
			)
		)
	);
    

    $wp_customize->add_setting('internet_service_provider_pro_headertumblric',array(
        'default'   => '',
        'sanitize_callback' => 'esc_url_raw'
    ));    
    $wp_customize->add_control('internet_service_provider_pro_headertumblric',array(
        'label' => __('Add Tumblr link','internet_service_provider_pro'),
        'section'   => 'internet_service_provider_pro_social_icons',
        'setting'   => 'internet_service_provider_pro_headertumblric',
        'type'  => 'text'
    ));

    $wp_customize->add_setting(
		'internet_service_provider_pro_headerflickr_icon',
		array(
			'default'     => '',
			'sanitize_callback' => 'sanitize_text_field'
		)
	);
	$wp_customize->add_control(
		new internet_service_provider_pro_Fontawesome_Icon_Chooser(
			$wp_customize,
			'internet_service_provider_pro_headerflickr_icon',
			array(
			'settings'    => 'internet_service_provider_pro_headerflickr_icon',
			'section'   => 'internet_service_provider_pro_social_icons',
			'type'      => 'icon',
			'label'     => esc_html__( 'Choose  Icon', 'internet-service-provider-pro' ),
			)
		)
	);

    $wp_customize->add_setting('internet_service_provider_pro_headerflickr',array(
        'default'   => '',
        'sanitize_callback' => 'esc_url_raw'
    ));     
    $wp_customize->add_control('internet_service_provider_pro_headerflickr',array(
        'label' => __('Add Flickr link','internet_service_provider_pro'),
        'section'   => 'internet_service_provider_pro_social_icons',
        'setting'   => 'internet_service_provider_pro_headerflickr',
        'type'  => 'text'
    ));

    $wp_customize->add_setting(
		'internet_service_provider_pro_headervk_icon',
		array(
			'default'     => '',
			'sanitize_callback' => 'sanitize_text_field'
		)
	);
	$wp_customize->add_control(
		new internet_service_provider_pro_Fontawesome_Icon_Chooser(
			$wp_customize,
			'internet_service_provider_pro_headervk_icon',
			array(
			'settings'    => 'internet_service_provider_pro_headervk_icon',
			'section'   => 'internet_service_provider_pro_social_icons',
			'type'      => 'icon',
			'label'     => esc_html__( 'Choose  Icon', 'internet-service-provider-pro' ),
			)
		)
	);

    $wp_customize->add_setting('internet_service_provider_pro_headervk',array(
        'default'   => '',
        'sanitize_callback' => 'esc_url_raw'
    ));    
    $wp_customize->add_control('internet_service_provider_pro_headervk',array(
        'label' => __('Add VK link','internet_service_provider_pro'),
        'section'   => 'internet_service_provider_pro_social_icons',
        'setting'   => 'internet_service_provider_pro_headervk',
        'type'  => 'text'
    ));