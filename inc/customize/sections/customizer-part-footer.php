<?php
    
    // Footer Menu

    /*----------- Newsletter -----------*/
    $wp_customize->add_section('internet_service_provider_pro_newsletter',array(
        'title' => __('Newsletter','internet-service-provider-pro'),
        'panel' => 'internet_service_provider_pro_panel_id',
    ));
    $wp_customize->add_setting('internet_service_provider_pro_newsletter_enable',
      array(
          'default' => 'Enable',
          'sanitize_callback' => 'internet_service_provider_pro_sanitize_choices'
    ));
    $wp_customize->add_control('internet_service_provider_pro_newsletter_enable',
      array(
      'type' => 'radio',
      'label' => __('Do you want this section', 'internet-service-provider-pro'),
      'section' => 'internet_service_provider_pro_newsletter',
      'choices' => array(
      'Enable' => __('Enable', 'internet-service-provider-pro'),
      'Disable' => __('Disable', 'internet-service-provider-pro')
      ),
    ));
  
    $wp_customize->selective_refresh->add_partial( 'internet_service_provider_pro_newsletter_enable', array(
      'selector' => '#newsletter_section h3',
      'render_callback' => 'internet_service_provider_pro_customize_partial_internet_service_provider_pro_newsletter_enable',
    ) );
  
    $wp_customize->add_setting( 'internet_service_provider_pro_newsletter_content_settings',
    array(
      'default' => '',
      'transport' => 'postMessage',
      'sanitize_callback' => 'internet_service_provider_pro_text_sanitization'
    ));
    $wp_customize->add_control( new VW_Themes_Seperator_custom_Control( $wp_customize, 'internet_service_provider_pro_newsletter_content_settings',
      array(
      'label' => __('Section Content Settings','internet-service-provider-pro'),
      'section' => 'internet_service_provider_pro_newsletter'
    )));

    $wp_customize->add_setting('internet_service_provider_pro_newsletter_tagline',array(
      'default'=> '',
      'sanitize_callback' => 'sanitize_text_field'
    ));
    $wp_customize->add_control('internet_service_provider_pro_newsletter_tagline',array(
      'label' => __('Tagline','internet-service-provider-pro'),
      'section'=> 'internet_service_provider_pro_newsletter',
      'setting'=> 'internet_service_provider_pro_newsletter_tagline',
      'type'=> 'text'
    ));
  
    $wp_customize->add_setting('internet_service_provider_pro_newsletter_main_heading',array(
      'default'=> '',
      'sanitize_callback' => 'sanitize_text_field'
    ));
    $wp_customize->add_control('internet_service_provider_pro_newsletter_main_heading',array(
      'label' => __('Main Heading','internet-service-provider-pro'),
      'section'=> 'internet_service_provider_pro_newsletter',
      'setting'=> 'internet_service_provider_pro_newsletter_main_heading',
      'type'=> 'text'
    ));
    
    
    $wp_customize->add_setting( 'internet_service_provider_pro_newsletter_box_settings',
        array(
        'default' => '',
        'transport' => 'postMessage',
        'sanitize_callback' => 'internet_service_provider_pro_text_sanitization'
    ));
    $wp_customize->add_control( new VW_Themes_Seperator_custom_Control( $wp_customize, 'internet_service_provider_pro_newsletter_box_settings',
        array(
        'label' => __('Form Settings','internet-service-provider-pro'),
        'section' => 'internet_service_provider_pro_newsletter'
    )));
  
    $wp_customize->add_setting('internet_service_provider_pro_newsletter_form_shortcode',array(
        'default' => '',
        'sanitize_callback' => 'sanitize_text_field'
    ));
    $wp_customize->add_control('internet_service_provider_pro_newsletter_form_shortcode',array(
        'label' => __('Form Shortcode','internet-service-provider-pro'),
        'section' => 'internet_service_provider_pro_newsletter',
        'setting' => 'internet_service_provider_pro_newsletter_form_shortcode',
        'type'    => 'text'
    ));

    $wp_customize->add_setting('internet_service_provider_pro_newsletter_social_icons_title',array(
      'default'=> '',
      'sanitize_callback' => 'sanitize_text_field'
    ));
    $wp_customize->add_control('internet_service_provider_pro_newsletter_social_icons_title',array(
      'label' => __('Add Title','internet-service-provider-pro'),
      'section'=> 'internet_service_provider_pro_newsletter',
      'setting'=> 'internet_service_provider_pro_newsletter_social_icons_title',
      'type'=> 'text'
    ));

    $wp_customize->add_setting( 'internet_service_provider_pro_newsletter_color_settings_ct_pallete',
    array(
      'default' => '',
      'transport' => 'postMessage',
      'sanitize_callback' => 'internet_service_provider_pro_text_sanitization'
    ));
    $wp_customize->add_control( new VW_Themes_Seperator_custom_Control( $wp_customize, 'internet_service_provider_pro_newsletter_color_settings_ct_pallete',
    array(
    'label' => __('Section Color & Typography ','internet-service-provider-pro'),
    'section' => 'internet_service_provider_pro_newsletter'
    )));

    $wp_customize->add_setting( 'internet_service_provider_pro_newsletter_tagline_ct_pallete',
    array(
      'default' => '',
      'transport' => 'postMessage',
      'sanitize_callback' => 'internet_service_provider_pro_text_sanitization'
    ));
    $wp_customize->add_control( new VW_Themes_Seperator_custom_Control( $wp_customize, 'internet_service_provider_pro_newsletter_tagline_ct_pallete',
    array(
    'label' => __('Tagline Typography ','internet-service-provider-pro'),
    'section' => 'internet_service_provider_pro_newsletter'
    )));
  
    $wp_customize->add_setting( 'internet_service_provider_pro_newsletter_tagline_color', array(
    'default' => '',
    'sanitize_callback' => 'sanitize_hex_color'
    ));
    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'internet_service_provider_pro_newsletter_tagline_color', array(
    'label' => __('Color', 'internet-service-provider-pro'),
    'section' => 'internet_service_provider_pro_newsletter',
    'settings' => 'internet_service_provider_pro_newsletter_tagline_color',
    )));
  
    $wp_customize->add_setting('internet_service_provider_pro_newsletter_tagline_font_family',array(
    'default' => '',
    'capability' => 'edit_theme_options',
    'sanitize_callback' => 'sanitize_text_field'
    ));
    $wp_customize->add_control(
    'internet_service_provider_pro_newsletter_tagline_font_family', array(
    'section'  => 'internet_service_provider_pro_newsletter',
    'label'    => __('Font Family','internet-service-provider-pro'),
    'type'     => 'select',
    'choices'  => $font_array,
    ));
  
    $wp_customize->add_setting('internet_service_provider_pro_newsletter_tagline_font_size',array(
    'default' => '',
    'sanitize_callback' => 'sanitize_text_field'
    ));
    $wp_customize->add_control('internet_service_provider_pro_newsletter_tagline_font_size',array(
    'label' => __('Font Size','internet-service-provider-pro'),
    
    'section' => 'internet_service_provider_pro_newsletter',
    'setting' => 'internet_service_provider_pro_newsletter_tagline_font_size',
    'type'    => 'number'
    ));
  
    $wp_customize->add_setting( 'internet_service_provider_pro_newsletter_main_heading_ct_pallete',
    array(
      'default' => '',
      'transport' => 'postMessage',
      'sanitize_callback' => 'internet_service_provider_pro_text_sanitization'
    ));
    $wp_customize->add_control( new VW_Themes_Seperator_custom_Control( $wp_customize, 'internet_service_provider_pro_newsletter_main_heading_ct_pallete',
    array(
    'label' => __('Main Heading Typography ','internet-service-provider-pro'),
    'section' => 'internet_service_provider_pro_newsletter'
    )));
  
    $wp_customize->add_setting( 'internet_service_provider_pro_newsletter_main_heading_color', array(
    'default' => '',
    'sanitize_callback' => 'sanitize_hex_color'
    ));
    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'internet_service_provider_pro_newsletter_main_heading_color', array(
    'label' => __('Color', 'internet-service-provider-pro'),
    'section' => 'internet_service_provider_pro_newsletter',
    'settings' => 'internet_service_provider_pro_newsletter_main_heading_color',
    )));
  
    $wp_customize->add_setting('internet_service_provider_pro_newsletter_main_heading_font_family',array(
    'default' => '',
    'capability' => 'edit_theme_options',
    'sanitize_callback' => 'sanitize_text_field'
    ));
    $wp_customize->add_control(
    'internet_service_provider_pro_newsletter_main_heading_font_family', array(
    'section'  => 'internet_service_provider_pro_newsletter',
    'label'    => __('Font Family','internet-service-provider-pro'),
    'type'     => 'select',
    'choices'  => $font_array,
    ));
  
    $wp_customize->add_setting('internet_service_provider_pro_newsletter_main_heading_font_size',array(
    'default' => '',
    'sanitize_callback' => 'sanitize_text_field'
    ));
    $wp_customize->add_control('internet_service_provider_pro_newsletter_main_heading_font_size',array(
    'label' => __('Font Size','internet-service-provider-pro'),
    
    'section' => 'internet_service_provider_pro_newsletter',
    'setting' => 'internet_service_provider_pro_newsletter_main_heading_font_size',
    'type'    => 'number'
    ));

    $wp_customize->add_setting( 'internet_service_provider_pro_newsletter_widget_input_ct_pallete',
    array(
      'default' => '',
      'transport' => 'postMessage',
      'sanitize_callback' => 'internet_service_provider_pro_text_sanitization'
    ));
    $wp_customize->add_control( new VW_Themes_Seperator_custom_Control( $wp_customize, 'internet_service_provider_pro_newsletter_widget_input_ct_pallete',
    array(
      'label' => __('Input Typography ','internet-service-provider-pro'),
      'section' => 'internet_service_provider_pro_newsletter'
    )));
  
    $wp_customize->add_setting( 'internet_service_provider_pro_newsletter_widget_input_color', array(
      'default' => '',
      'sanitize_callback' => 'sanitize_hex_color'
    ));
    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'internet_service_provider_pro_newsletter_widget_input_color', array(
      'label' => __('Input Color', 'internet-service-provider-pro'),
      'section' => 'internet_service_provider_pro_newsletter',
      'settings' => 'internet_service_provider_pro_newsletter_widget_input_color',
    )));
    $wp_customize->add_setting('internet_service_provider_pro_newsletter_widget_input_font_family',array(
      'default' => '',
      'capability' => 'edit_theme_options',
      'sanitize_callback' => 'sanitize_text_field'
    ));
    $wp_customize->add_control(
      'internet_service_provider_pro_newsletter_widget_input_font_family', array(
      'section'  => 'internet_service_provider_pro_newsletter',
      'label'    => __('Input Font Family','internet-service-provider-pro'),
      'type'     => 'select',
      'choices'  => $font_array,
    ));
  
    $wp_customize->add_setting('internet_service_provider_pro_newsletter_widget_input_font_size',array(
      'default' => '',
      'sanitize_callback' => 'sanitize_text_field'
    ));
    $wp_customize->add_control('internet_service_provider_pro_newsletter_widget_input_font_size',array(
      'label' => __('Font Size','internet-service-provider-pro'),
      'description' => __('Add font size in px','internet-service-provider-pro'),
      'section' => 'internet_service_provider_pro_newsletter',
      'setting' => 'internet_service_provider_pro_newsletter_widget_input_font_size',
      'type'    => 'number'
    ));
  
    $wp_customize->add_setting( 'internet_service_provider_pro_newsletter_widget_input_border_color', array(
      'default' => '',
      'sanitize_callback' => 'sanitize_hex_color'
    ));
    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'internet_service_provider_pro_newsletter_widget_input_border_color', array(
      'label' => __('Input Border Color', 'internet-service-provider-pro'),
      'section' => 'internet_service_provider_pro_newsletter',
      'settings' => 'internet_service_provider_pro_newsletter_widget_input_border_color',
    )));
  
    $wp_customize->add_setting( 'internet_service_provider_pro_newsletter_submit_button_ct_pallete',
      array(
        'default' => '',
        'transport' => 'postMessage',
        'sanitize_callback' => 'internet_service_provider_pro_text_sanitization'
    ));
    $wp_customize->add_control( new VW_Themes_Seperator_custom_Control( $wp_customize, 'internet_service_provider_pro_newsletter_submit_button_ct_pallete',
      array(
      'label' => __('Section Button Typography ','internet-service-provider-pro'),
      'section' => 'internet_service_provider_pro_newsletter'
    )));
  
    $wp_customize->add_setting( 'internet_service_provider_pro_newsletter_submit_icon_color', array(
      'default' => '',
      'sanitize_callback' => 'sanitize_hex_color'
    ));
    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'internet_service_provider_pro_newsletter_submit_icon_color', array(
      'label' => __('Submit Color', 'internet-service-provider-pro'),
      'section' => 'internet_service_provider_pro_newsletter',
      'settings' => 'internet_service_provider_pro_newsletter_submit_icon_color',
    )));
  
    $wp_customize->add_setting( 'internet_service_provider_pro_newsletter_submit_icon_bgcolor', array(
      'default' => '',
      'sanitize_callback' => 'sanitize_hex_color'
    ));
    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'internet_service_provider_pro_newsletter_submit_icon_bgcolor', array(
      'label' => __('Submit Background Color', 'internet-service-provider-pro'),
      'section' => 'internet_service_provider_pro_newsletter',
      'settings' => 'internet_service_provider_pro_newsletter_submit_icon_bgcolor',
    )));
  
    $wp_customize->add_setting( 'internet_service_provider_pro_newsletter_submit_icon_hover_bgcolor', array(
      'default' => '',
      'sanitize_callback' => 'sanitize_hex_color'
    ));
    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'internet_service_provider_pro_newsletter_submit_icon_hover_bgcolor', array(
      'label' => __('Hover Background Color', 'internet-service-provider-pro'),
      'section' => 'internet_service_provider_pro_newsletter',
      'settings' => 'internet_service_provider_pro_newsletter_submit_icon_hover_bgcolor',
    )));
  
    $wp_customize->add_setting( 'internet_service_provider_pro_newsletter_submit_icon_text_color_hover', array(
      'default' => '',
      'sanitize_callback' => 'sanitize_hex_color'
    ));
    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'internet_service_provider_pro_newsletter_submit_icon_text_color_hover', array(
      'label' => __('Hover Icon Color', 'internet-service-provider-pro'),
      'section' => 'internet_service_provider_pro_newsletter',
      'settings' => 'internet_service_provider_pro_newsletter_submit_icon_text_color_hover',
    )));

    $wp_customize->add_setting( 'internet_service_provider_pro_newsletter_social_icons_title_ct_pallete',
    array(
      'default' => '',
      'transport' => 'postMessage',
      'sanitize_callback' => 'internet_service_provider_pro_text_sanitization'
    ));
    $wp_customize->add_control( new VW_Themes_Seperator_custom_Control( $wp_customize, 'internet_service_provider_pro_newsletter_social_icons_title_ct_pallete',
    array(
      'label' => __('Social Icon Title Typography ','internet-service-provider-pro'),
      'section' => 'internet_service_provider_pro_newsletter'
    )));
  
    $wp_customize->add_setting( 'internet_service_provider_pro_newsletter_social_icons_title_color', array(
      'default' => '',
      'sanitize_callback' => 'sanitize_hex_color'
    ));
    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'internet_service_provider_pro_newsletter_social_icons_title_color', array(
      'label' => __('Input Color', 'internet-service-provider-pro'),
      'section' => 'internet_service_provider_pro_newsletter',
      'settings' => 'internet_service_provider_pro_newsletter_social_icons_title_color',
    )));
    $wp_customize->add_setting('internet_service_provider_pro_newsletter_social_icons_title_font_family',array(
      'default' => '',
      'capability' => 'edit_theme_options',
      'sanitize_callback' => 'sanitize_text_field'
    ));
    $wp_customize->add_control(
      'internet_service_provider_pro_newsletter_social_icons_title_font_family', array(
      'section'  => 'internet_service_provider_pro_newsletter',
      'label'    => __('Input Font Family','internet-service-provider-pro'),
      'type'     => 'select',
      'choices'  => $font_array,
    ));
  
    $wp_customize->add_setting('internet_service_provider_pro_newsletter_social_icons_title_font_size',array(
      'default' => '',
      'sanitize_callback' => 'sanitize_text_field'
    ));
    $wp_customize->add_control('internet_service_provider_pro_newsletter_social_icons_title_font_size',array(
      'label' => __('Font Size','internet-service-provider-pro'),
      'description' => __('Add font size in px','internet-service-provider-pro'),
      'section' => 'internet_service_provider_pro_newsletter',
      'setting' => 'internet_service_provider_pro_newsletter_social_icons_title_font_size',
      'type'    => 'number'
    ));

    /** ------------------- Footer Contact ------------------ */
    $wp_customize->add_section('internet_service_provider_pro_footer_contact_details',array(
		'title'	=> __('Footer Contact','internet-service-provider-pro'),
		'priority'	=> null,
		'panel' => 'internet_service_provider_pro_panel_id',
	));

	$wp_customize->add_setting('internet_service_provider_pro_footer_contact_enable',
    array(
        'default' => 'Enable',
        'sanitize_callback' => 'internet_service_provider_pro_sanitize_choices'
    ));
    $wp_customize->add_control('internet_service_provider_pro_footer_contact_enable',
    array(
        'type' => 'radio',
        'label' => 'Do you want this section',
        'section' => 'internet_service_provider_pro_footer_contact_details',
        'choices' => array(
            'Enable' => __('Enable', 'internet-service-provider-pro'),
            'Disable' => __('Disable', 'internet-service-provider-pro')
        ),
    ));

    $wp_customize->selective_refresh->add_partial( 'internet_service_provider_pro_footer_contact_enable', array(
	    'selector' => '#site_top .container',
	    'render_callback' => 'optical_lens_shop_customize_partial_internet_service_provider_pro_footer_contact_enable',
    ));

	$wp_customize->add_setting( 'internet_service_provider_pro_header_section_ct_pallete',
		array(
		  'default' => '',
		  'transport' => 'postMessage',
		  'sanitize_callback' => 'internet_service_provider_pro_text_sanitization'
	));
	$wp_customize->add_control( new VW_Themes_Seperator_custom_Control( $wp_customize, 'internet_service_provider_pro_header_section_ct_pallete',
	array(
		'label' => __('Section Typography ','internet-service-provider-pro'),
		'section' => 'internet_service_provider_pro_footer_contact_details'
	)));

    $wp_customize->add_setting( 'internet_service_provider_pro_footer_contact_phone_number_settings',
        array(
        'default' => '',
        'transport' => 'postMessage',
        'sanitize_callback' => 'internet_service_provider_pro_text_sanitization'
    ));
    $wp_customize->add_control( new VW_Themes_Seperator_custom_Control( $wp_customize, 'internet_service_provider_pro_footer_contact_phone_number_settings',
        array(
        'label' => __('Phone Number Settings','internet-service-provider-pro'),
        'section' => 'internet_service_provider_pro_footer_contact_details'
    )));

    $wp_customize->add_setting('internet_service_provider_pro_footer_contact_phone_number',array(
        'default' => '',
        'sanitize_callback' => 'sanitize_text_field'
    ));
    $wp_customize->add_control('internet_service_provider_pro_footer_contact_phone_number',array(
        'label' => __('Add Number','internet-service-provider-pro'),
        'section' => 'internet_service_provider_pro_footer_contact_details',
        'setting' => 'internet_service_provider_pro_footer_contact_phone_number',
        'type'    => 'text'
    ));

	$wp_customize->add_setting(
		'internet_service_provider_pro_footer_contact_phone_number_icon',
		array(
			'default'     => '',
			'sanitize_callback' => 'sanitize_text_field'
		)
	);
	$wp_customize->add_control(
		new internet_service_provider_pro_Fontawesome_Icon_Chooser(
			$wp_customize,
			'internet_service_provider_pro_footer_contact_phone_number_icon',
			array(
			'settings'    => 'internet_service_provider_pro_footer_contact_phone_number_icon',
			'section'   => 'internet_service_provider_pro_footer_contact_details',
			'type'      => 'icon',
			'label'     => esc_html__( 'Choose  Icon', 'internet-service-provider-pro' ),
			)
		)
	);

    $wp_customize->add_setting( 'internet_service_provider_pro_footer_contact_email_settings',
        array(
        'default' => '',
        'transport' => 'postMessage',
        'sanitize_callback' => 'internet_service_provider_pro_text_sanitization'
    ));
    $wp_customize->add_control( new VW_Themes_Seperator_custom_Control( $wp_customize, 'internet_service_provider_pro_footer_contact_email_settings',
        array(
        'label' => __('Email Settings','internet-service-provider-pro'),
        'section' => 'internet_service_provider_pro_footer_contact_details'
    )));

    $wp_customize->add_setting('internet_service_provider_pro_footer_contact_email',array(
        'default' => '',
        'sanitize_callback' => 'sanitize_text_field'
    ));
    $wp_customize->add_control('internet_service_provider_pro_footer_contact_email',array(
        'label' => __('Add Email','internet-service-provider-pro'),
        'section' => 'internet_service_provider_pro_footer_contact_details',
        'setting' => 'internet_service_provider_pro_footer_contact_email',
        'type'    => 'text'
    ));

	$wp_customize->add_setting(
		'internet_service_provider_pro_footer_contact_email_icon',
		array(
			'default'     => '',
			'sanitize_callback' => 'sanitize_text_field'
		)
	);
	$wp_customize->add_control(
		new internet_service_provider_pro_Fontawesome_Icon_Chooser(
			$wp_customize,
			'internet_service_provider_pro_footer_contact_email_icon',
			array(
			'settings'    => 'internet_service_provider_pro_footer_contact_email_icon',
			'section'   => 'internet_service_provider_pro_footer_contact_details',
			'type'      => 'icon',
			'label'     => esc_html__( 'Choose  Icon', 'internet-service-provider-pro' ),
			)
		)
	);

    $wp_customize->add_setting( 'internet_service_provider_pro_footer_contact_location_settings',
        array(
        'default' => '',
        'transport' => 'postMessage',
        'sanitize_callback' => 'internet_service_provider_pro_text_sanitization'
    ));
    $wp_customize->add_control( new VW_Themes_Seperator_custom_Control( $wp_customize, 'internet_service_provider_pro_footer_contact_location_settings',
        array(
        'label' => __('Location Settings','internet-service-provider-pro'),
        'section' => 'internet_service_provider_pro_footer_contact_details'
    )));

    $wp_customize->add_setting('internet_service_provider_pro_footer_contact_location',array(
        'default' => '',
        'sanitize_callback' => 'sanitize_text_field'
    ));
    $wp_customize->add_control('internet_service_provider_pro_footer_contact_location',array(
        'label' => __('Add Number','internet-service-provider-pro'),
        'section' => 'internet_service_provider_pro_footer_contact_details',
        'setting' => 'internet_service_provider_pro_footer_contact_location',
        'type'    => 'text'
    ));

	$wp_customize->add_setting(
		'internet_service_provider_pro_footer_contact_location_icon',
		array(
			'default'     => '',
			'sanitize_callback' => 'sanitize_text_field'
		)
	);
	$wp_customize->add_control(
		new internet_service_provider_pro_Fontawesome_Icon_Chooser(
			$wp_customize,
			'internet_service_provider_pro_footer_contact_location_icon',
			array(
                'settings'    => 'internet_service_provider_pro_footer_contact_location_icon',
                'section'   => 'internet_service_provider_pro_footer_contact_details',
                'type'      => 'icon',
                'label'     => esc_html__( 'Choose  Icon', 'internet-service-provider-pro' ),
			)
		)
	);

    $wp_customize->add_setting( 'internet_service_provider_pro_footer_contact_details_ct_pallete',
		array(
		'default' => '',
		'transport' => 'postMessage',
		'sanitize_callback' => 'internet_service_provider_pro_text_sanitization'
	));
	$wp_customize->add_control( new VW_Themes_Seperator_custom_Control( $wp_customize, 'internet_service_provider_pro_footer_contact_details_ct_pallete',
		array(
		'label' => __('Contact Details Typography ','internet-service-provider-pro'),
		'section' => 'internet_service_provider_pro_footer_contact_details'
	)));

	$wp_customize->add_setting( 'internet_service_provider_pro_footer_contact_details_color', array(
		'default' => '',
		'sanitize_callback' => 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'internet_service_provider_pro_footer_contact_details_color', array(
		'label' => __('Color', 'internet-service-provider-pro'),
		'section' => 'internet_service_provider_pro_footer_contact_details',
		'settings' => 'internet_service_provider_pro_footer_contact_details_color',
	)));

	$wp_customize->add_setting('internet_service_provider_pro_footer_contact_details_font_family',array(
		'default' => '',
		'capability' => 'edit_theme_options',
		'sanitize_callback' => 'sanitize_text_field'
	));
	$wp_customize->add_control(
		'internet_service_provider_pro_footer_contact_details_font_family', array(
		'section'  => 'internet_service_provider_pro_footer_contact_details',
		'label'    => __('Font Family','internet-service-provider-pro'),
		'type'     => 'select',
		'choices'  => $font_array,
	));

	$wp_customize->add_setting('internet_service_provider_pro_footer_contact_details_font_size',array(
		'default' => '',
		'sanitize_callback' => 'sanitize_text_field'
	));
	$wp_customize->add_control('internet_service_provider_pro_footer_contact_details_font_size',array(
		'label' => __('Font Size','internet-service-provider-pro'),
		
		'section' => 'internet_service_provider_pro_footer_contact_details',
		'setting' => 'internet_service_provider_pro_footer_contact_details_font_size',
		'type'    => 'number'
	));

	$wp_customize->add_setting( 'internet_service_provider_pro_footer_contact_details_icon_color', array(
		'default' => '',
		'sanitize_callback' => 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'internet_service_provider_pro_footer_contact_details_icon_color', array(
		'label' => __('Icon Color', 'internet-service-provider-pro'),
		'section' => 'internet_service_provider_pro_footer_contact_details',
		'settings' => 'internet_service_provider_pro_footer_contact_details_icon_color',
	)));

    $wp_customize->add_setting( 'internet_service_provider_pro_footer_contact_details_icon_bgcolor', array(
		'default' => '',
		'sanitize_callback' => 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'internet_service_provider_pro_footer_contact_details_icon_bgcolor', array(
		'label' => __(' Background Color', 'internet-service-provider-pro'),
		'section' => 'internet_service_provider_pro_footer_contact_details',
		'settings' => 'internet_service_provider_pro_footer_contact_details_icon_bgcolor',
	)));

     $wp_customize->add_setting( 'internet_service_provider_pro_footer_contact_details_row_bgcolor', array(
		'default' => '',
		'sanitize_callback' => 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'internet_service_provider_pro_footer_contact_details_row_bgcolor', array(
		'label' => __('Row Background Color', 'internet-service-provider-pro'),
		'section' => 'internet_service_provider_pro_footer_contact_details',
		'settings' => 'internet_service_provider_pro_footer_contact_details_row_bgcolor',
	)));

    /* --------------------- Footer Menu */

    $wp_customize->add_section('internet_service_provider_pro_footer_menu_section',array(
        'title' => __('Footer Menu','internet-service-provider-pro'),
        'panel' => 'internet_service_provider_pro_panel_id',
    ));
    $wp_customize->add_setting( 'internet_service_provider_pro_section_footer_bgcolor', array(
        'default' => '',
        'sanitize_callback' => 'sanitize_hex_color'
    ));
    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'internet_service_provider_pro_section_footer_bgcolor', array(
        'label' => __('Background Color', 'internet-service-provider-pro'),
        'section' => 'internet_service_provider_pro_footer_menu_section',
        'description' => __('Either add background color or background image, if you add both background color will be top most priority', 'internet-service-provider-pro'),
        'settings' => 'internet_service_provider_pro_section_footer_bgcolor',
    )));
    $wp_customize->add_setting('internet_service_provider_pro_section_footer_bgimage',array(
        'default'   => '',
        'sanitize_callback' => 'esc_url_raw',
    ));
    $wp_customize->add_control(
        new WP_Customize_Image_Control(
            $wp_customize,
            'internet_service_provider_pro_section_footer_bgimage',
            array(
                'label' => __('Background image','internet-service-provider-pro'),
                'section' => 'internet_service_provider_pro_footer_menu_section',
                'settings' => 'internet_service_provider_pro_section_footer_bgimage'
    )));
  $wp_customize->add_setting( 'internet_service_provider_pro_section_footer_bg_attachment', array(
      'default'         => '',
      'sanitize_callback' => 'internet_service_provider_pro_sanitize_choices'
  ));
  $wp_customize->add_control('internet_service_provider_pro_section_footer_bg_attachment', array(
      'type'      => 'radio',
      'label'     => __('Choose image option', 'internet-service-provider-pro'),
      'section'   => 'internet_service_provider_pro_footer_menu_section',
      'choices'   => array(
      'vw-fixed'      => __( 'Fixed', 'internet-service-provider-pro' ),
      'vw-scroll'      => __( 'Scroll', 'internet-service-provider-pro' ),
  )));


    $wp_customize->selective_refresh->add_partial( 'internet_service_provider_pro_radiolast_enable', array(
      'selector' => '#footer_box',
      'render_callback' => 'optical_lens_shop_customize_partial_internet_service_provider_pro_radiolast_enable',
    ));

    $wp_customize->add_setting( 'internet_service_provider_pro_footer_menu_title_ct_pallete',
    array(
        'default' => '',
        'transport' => 'postMessage',
        'sanitize_callback' => 'internet_service_provider_pro_text_sanitization'
    ));
    $wp_customize->add_control( new VW_Themes_Seperator_custom_Control( $wp_customize, 'internet_service_provider_pro_footer_menu_title_ct_pallete',
    array(
        'label' => __('Widget Title Typography ','internet-service-provider-pro'),
        'section' => 'internet_service_provider_pro_footer_menu_section'
    )));
    $wp_customize->add_setting( 'internet_service_provider_pro_footer_menu_heading_color', array(
        'default' => '',
        'sanitize_callback' => 'sanitize_hex_color'
    ));
    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'internet_service_provider_pro_footer_menu_heading_color', array(
        'label' => __( 'Color', 'internet-service-provider-pro'),
        'section' => 'internet_service_provider_pro_footer_menu_section',
        'settings' => 'internet_service_provider_pro_footer_menu_heading_color',
    )));
    $wp_customize->add_setting('internet_service_provider_pro_footer_menu_heading_font_family',array(
      'default' => '',
      'capability' => 'edit_theme_options',
      'sanitize_callback' => 'internet_service_provider_pro_sanitize_choices'
    ));
    $wp_customize->add_control(
        'internet_service_provider_pro_footer_menu_heading_font_family', array(
        'section'  => 'internet_service_provider_pro_footer_menu_section',
        'label'    => __( 'Font Family','internet-service-provider-pro'),
        'type'     => 'select',
        'choices'  => $font_array
    ));

    $wp_customize->add_setting('internet_service_provider_pro_footer_menu_heading_font_size',array(
        'default' => '',
        'sanitize_callback' => 'sanitize_text_field'
    ));
    $wp_customize->add_control('internet_service_provider_pro_footer_menu_heading_font_size',array(
        'label' => __('Font Size','internet-service-provider-pro'),
        'description' => __('Add font size in px','internet-service-provider-pro'),
        'section' => 'internet_service_provider_pro_footer_menu_section',
        'setting' => 'internet_service_provider_pro_footer_menu_heading_font_size',
        'type'    => 'number'
    ));   

    $wp_customize->add_setting( 'internet_service_provider_pro_footer_menu_content_ct_pallete',
    array(
        'default' => '',
        'transport' => 'postMessage',
        'sanitize_callback' => 'internet_service_provider_pro_text_sanitization'
    ));
    $wp_customize->add_control( new VW_Themes_Seperator_custom_Control( $wp_customize, 'internet_service_provider_pro_footer_menu_content_ct_pallete',
    array(
        'label' => __('Widget Content Typography ','internet-service-provider-pro'),
        'section' => 'internet_service_provider_pro_footer_menu_section'
    )));

    $wp_customize->add_setting( 'internet_service_provider_pro_footer_menu_item_color', array(
        'default' => '',
        'sanitize_callback' => 'sanitize_hex_color'
    ));
    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'internet_service_provider_pro_footer_menu_item_color', array(
        'label' => __('Color', 'internet-service-provider-pro'),
        'section' => 'internet_service_provider_pro_footer_menu_section',
        'settings' => 'internet_service_provider_pro_footer_menu_item_color',
    )));
    $wp_customize->add_setting('internet_service_provider_pro_footer_menu_item_font_family',array(
      'default' => '',
      'capability' => 'edit_theme_options',
      'sanitize_callback' => 'internet_service_provider_pro_sanitize_choices'
    ));
    $wp_customize->add_control(
        'internet_service_provider_pro_footer_menu_item_font_family', array(
        'section'  => 'internet_service_provider_pro_footer_menu_section',
        'label'    => __( 'Font Family','internet-service-provider-pro'),
        'type'     => 'select',
        'choices'  => $font_array
    ));

    $wp_customize->add_setting('internet_service_provider_pro_footer_menu_item_font_size',array(
        'default' => '',
        'sanitize_callback' => 'sanitize_text_field'
    ));
    $wp_customize->add_control('internet_service_provider_pro_footer_menu_item_font_size',array(
        'label' => __('Font Size','internet-service-provider-pro'),
        'section' => 'internet_service_provider_pro_footer_menu_section',
        'setting' => 'internet_service_provider_pro_footer_menu_item_font_size',
        'type'    => 'number'
    ));

    // /*----------------------- Footer Sections --------------------------------------*/

    $wp_customize->add_section('internet_service_provider_pro_footer_copyright_section',array(
        'title' => __('Footer Text','internet-service-provider-pro'),
        'description'   => __('Add some footer text here.','internet-service-provider-pro'),
        'priority'  => null,
        'panel' => 'internet_service_provider_pro_panel_id',
    ));

    $wp_customize->add_setting( 'internet_service_provider_pro_footer_text_content_pallate',
    array(
        'default' => '',
        'transport' => 'postMessage',
        'sanitize_callback' => 'internet_service_provider_pro_text_sanitization'
    ));
    $wp_customize->add_control( new VW_Themes_Seperator_custom_Control( $wp_customize, 'internet_service_provider_pro_footer_text_content_pallate',
    array(
        'label' => __('Footer Text Typography ','internet-service-provider-pro'),
        'section' => 'internet_service_provider_pro_footer_copyright_section'
    )));

    $wp_customize->add_setting('internet_service_provider_pro_footer_copyright_para',array(
    	'default' => '',
    	'sanitize_callback' => 'sanitize_text_field'
    ));
    $wp_customize->add_control('internet_service_provider_pro_footer_copyright_para',array(
    	'label' => __('Footer Copyright Text','internet-service-provider-pro'),
    	'section' => 'internet_service_provider_pro_footer_copyright_section',
    	'setting' => 'internet_service_provider_pro_footer_copyright_para',
    	'type' => 'text'
    ));

    $wp_customize->add_setting( 'internet_service_provider_pro_footer_privacy_text_color', array(
        'default' => '',
        'sanitize_callback' => 'sanitize_hex_color'
    ));
    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'internet_service_provider_pro_footer_privacy_text_color', array(
        'label' => __('Text Color', 'internet-service-provider-pro'),
        'section' => 'internet_service_provider_pro_footer_copyright_section',
        'settings' => 'internet_service_provider_pro_footer_privacy_text_color',
    )));
    $wp_customize->add_setting('internet_service_provider_pro_footer_privacy_text_font_family',array(
      'default' => '',
      'capability' => 'edit_theme_options',
      'sanitize_callback' => 'internet_service_provider_pro_sanitize_choices'
    ));
    $wp_customize->add_control(
        'internet_service_provider_pro_footer_privacy_text_font_family', array(
        'section'  => 'internet_service_provider_pro_footer_copyright_section',
        'label'    => __( 'Text Font Family','internet-service-provider-pro'),
        'type'     => 'select',
        'choices'  => $font_array
    ));

    $wp_customize->add_setting('internet_service_provider_pro_footer_privacy_text_font_size',array(
        'default' => '',
        'sanitize_callback' => 'sanitize_text_field'
    ));
    $wp_customize->add_control('internet_service_provider_pro_footer_privacy_text_font_size',array(
        'label' => __('Text Font Size','internet-service-provider-pro'),
        'description' => __('Add font size in px','internet-service-provider-pro'),
        'section' => 'internet_service_provider_pro_footer_copyright_section',
        'setting' => 'internet_service_provider_pro_footer_privacy_text_font_size',
        'type'    => 'number'
    ));