<?php

	/*------------------------ Header Section----------------------- */

	// middle header icon settings
	$wp_customize->add_section('internet_service_provider_pro_sec_header_section',array(
		'title'	=> __('Header','internet-service-provider-pro'),
		'description'	=> __('Header Settings','internet-service-provider-pro'),
		'priority'	=> null,
		'panel' => 'internet_service_provider_pro_panel_id',
	));

	$wp_customize->add_setting( 'internet_service_provider_pro_header_search_setting',
    array(
        'default' => '',
        'transport' => 'postMessage',
        'sanitize_callback' => 'internet_service_provider_pro_text_sanitization'
    ));
    $wp_customize->add_control( new VW_Themes_Seperator_custom_Control( $wp_customize, 'internet_service_provider_pro_header_search_setting',
      array(
        'label' => __('Product Search','internet-service-provider-pro'),
        'section' => 'internet_service_provider_pro_header_content_section'
      )
    ) );

    $wp_customize->add_setting( 'internet_service_provider_pro_header_search', array(
        'default' => 1,
        'transport' => 'refresh',
        'sanitize_callback' => 'internet_service_provider_pro_switch_sanitization'
    ));
    $wp_customize->add_control( new internet_service_provider_pro_Toggle_Switch_Custom_control( $wp_customize, 'internet_service_provider_pro_header_search',
        array(
            'label' => __( 'On / Off','internet-service-provider-pro' ),
            'section' => 'internet_service_provider_pro_header_content_section'
        )
    ) );

    $wp_customize->add_setting('internet_service_provider_pro_header_serach_input_placeholder_text',array(
        'default' => '',
        'sanitize_callback' => 'sanitize_text_field'
    ));
    $wp_customize->add_control('internet_service_provider_pro_header_serach_input_placeholder_text',array(
        'label' => __('Input Placeholder','internet-service-provider-pro'),
        'section' => 'internet_service_provider_pro_header_content_section',
        'setting' => 'internet_service_provider_pro_header_serach_input_placeholder_text',
        'type'    => 'text'
    ));

	$wp_customize->add_setting( 'internet_service_provider_pro_sec_header_section_button',
		array(
		'default' => '',
		'transport' => 'postMessage',
		'sanitize_callback' => 'internet_service_provider_pro_text_sanitization'
	));
	$wp_customize->add_control( new VW_Themes_Seperator_custom_Control( $wp_customize, 'internet_service_provider_pro_sec_header_section_button',
		array(
		'label' => __('Section Button','internet-service-provider-pro'),
		'section' => 'internet_service_provider_pro_header'
	)));

	$wp_customize->add_setting('internet_service_provider_pro_header_button_title',array(
		'default' => '',
		'sanitize_callback' => 'sanitize_text_field'
	));
	$wp_customize->add_control('internet_service_provider_pro_header_button_title',array(
		'label' => __('Section Button Title','internet-service-provider-pro'),
		'section' => 'internet_service_provider_pro_header',
		'setting' => 'internet_service_provider_pro_header_button_title',
		'type'    => 'text'
	));

	$wp_customize->add_setting('internet_service_provider_pro_header_button_url',array(
		'default' => '',
		'sanitize_callback' => 'sanitize_text_field'
	));
	$wp_customize->add_control('internet_service_provider_pro_header_button_url',array(
		'label' => __('Section Button Url','internet-service-provider-pro'),
		'section' => 'internet_service_provider_pro_header',
		'setting' => 'internet_service_provider_pro_header_button_url',
		'type'    => 'text'
	));

	$wp_customize->add_setting( 'internet_service_provider_pro_head_title_section_ct_pallete',
	  array(
	  'default' => '',
	  'transport' => 'postMessage',
	  'sanitize_callback' => 'internet_service_provider_pro_text_sanitization'
	));
	$wp_customize->add_control( new VW_Themes_Seperator_custom_Control( $wp_customize, 'internet_service_provider_pro_head_title_section_ct_pallete',
	  array(
	  'label' => __('Header Title Typography ','internet-service-provider-pro'),
	  'section' => 'internet_service_provider_pro_sec_header_section'
	)));

	$wp_customize->add_setting( 'internet_service_provider_pro_header_title_color', array(
	  'default' => '',
	  'sanitize_callback'	=> 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'internet_service_provider_pro_header_title_color', array(
	  'label' => __('Header Main title Color', 'internet-service-provider-pro'),
	  'section' => 'internet_service_provider_pro_sec_header_section',
	  'settings' => 'internet_service_provider_pro_header_title_color',
	)));
	$wp_customize->add_setting('internet_service_provider_pro_header_title_font_family',array(
	  'default' => '',
	  'capability' => 'edit_theme_options',
	  'sanitize_callback' => 'sanitize_text_field'
	));
	$wp_customize->add_control(
	    'internet_service_provider_pro_header_title_font_family', array(
	    'section'  => 'internet_service_provider_pro_sec_header_section',
	    'label'    => __('Header Main title Font family','internet-service-provider-pro'),
	    'type'     => 'select',
	    'choices'  => $font_array,
	));

	$wp_customize->add_setting('internet_service_provider_pro_header_title_font_size',array(
	  'default' => '',
	  'sanitize_callback' => 'sanitize_text_field'
	));
	$wp_customize->add_control('internet_service_provider_pro_header_title_font_size',array(
	  'label' => __('Header Title Font Size','internet-service-provider-pro'),
	  'description' => __('Add font size in px','internet-service-provider-pro'),
	  'section' => 'internet_service_provider_pro_sec_header_section',
	  'setting' => 'internet_service_provider_pro_header_title_font_size',
	  'type'    => 'number'
	));


	$wp_customize->add_setting( 'internet_service_provider_pro_header_subtitle_color', array(
	  'default' => '',
	  'sanitize_callback'	=> 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'internet_service_provider_pro_header_subtitle_color', array(
	  'label' => __('Tagline Color', 'internet-service-provider-pro'),
	  'section' => 'internet_service_provider_pro_sec_header_section',
	  'settings' => 'internet_service_provider_pro_header_subtitle_color',
	)));
	$wp_customize->add_setting('internet_service_provider_pro_header_subtitle_font_family',array(
	  'default' => '',
	  'capability' => 'edit_theme_options',
	  'sanitize_callback' => 'sanitize_text_field'
	));
	$wp_customize->add_control(
	    'internet_service_provider_pro_header_subtitle_font_family', array(
	    'section'  => 'internet_service_provider_pro_sec_header_section',
	    'label'    => __('Tagline Font family','internet-service-provider-pro'),
	    'type'     => 'select',
	    'choices'  => $font_array,
	));

	$wp_customize->add_setting('internet_service_provider_pro_header_subtitle_font_size',array(
	  'default' => '',
	  'sanitize_callback' => 'sanitize_text_field'
	));
	$wp_customize->add_control('internet_service_provider_pro_header_subtitle_font_size',array(
	  'label' => __('Tagline Font Size','internet-service-provider-pro'),
	  'description' => __('Add font size in px','internet-service-provider-pro'),
	  'section' => 'internet_service_provider_pro_sec_header_section',
	  'setting' => 'internet_service_provider_pro_header_subtitle_font_size',
	  'type'    => 'number'
	));


	$wp_customize->add_setting( 'internet_service_provider_pro_header_menu_ct_pallete',
    array(
        'default' => '',
        'transport' => 'postMessage',
        'sanitize_callback' => 'internet_service_provider_pro_text_sanitization'
    ));
    $wp_customize->add_control( new VW_Themes_Seperator_custom_Control( $wp_customize, 'internet_service_provider_pro_header_menu_ct_pallete',
    array(
        'label' => __('Menu Typography ','internet-service-provider-pro'),
        'section' => 'internet_service_provider_pro_sec_header_section'
    )));

	$wp_customize->add_setting( 'internet_service_provider_pro_header_menu_bgcolor', array(
		'default' => '',
		'sanitize_callback'	=> 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'internet_service_provider_pro_header_menu_bgcolor', array(
		'label' => __('Menu Background Color', 'internet-service-provider-pro'),
		'section' => 'internet_service_provider_pro_sec_header_section',
		'settings' => 'internet_service_provider_pro_header_menu_bgcolor'
	)));

	// This is Header Menu Color picker setting
	$wp_customize->add_setting( 'internet_service_provider_pro_header_menu_color', array(
		'default' => '',
		'sanitize_callback'	=> 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'internet_service_provider_pro_header_menu_color', array(
		'label' => __('Menu Item Color', 'internet-service-provider-pro'),
		'section' => 'internet_service_provider_pro_sec_header_section',
		'settings' => 'internet_service_provider_pro_header_menu_color'
	)));

	//This is Header Menu FontFamily picker setting
	$wp_customize->add_setting('internet_service_provider_pro_header_menu_font_family',array(
	  'default' => '',
	  'capability' => 'edit_theme_options',
	  'sanitize_callback' => 'internet_service_provider_pro_sanitize_choices'
	 ));
	$wp_customize->add_control(
	    'internet_service_provider_pro_header_menu_font_family', array(
	    'section'  => 'internet_service_provider_pro_sec_header_section',
	    'label'    => __( 'Menu Item Fonts','internet-service-provider-pro'),
	    'type'     => 'select',
	    'choices'  => $font_array
	));

    $wp_customize->add_setting('internet_service_provider_pro_header_menu_font_size',array(
        'default'=> '',
        'sanitize_callback' => 'sanitize_text_field'
    ));
    $wp_customize->add_control('internet_service_provider_pro_header_menu_font_size',array(
        'label' => __('Menu Items Font Size','internet-service-provider-pro'),
        'input_attrs' => array(
            'step' => 1,
            'min'  => 0,
            'max'  => 50,
        ),
        'section'=> 'internet_service_provider_pro_sec_header_section',
        'type'=> 'number',
    ));

    $wp_customize->add_setting( 'internet_service_provider_pro_header_menu_active_color', array(
        'default' => '',
        'sanitize_callback' => 'sanitize_hex_color'
    ));
    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'internet_service_provider_pro_header_menu_active_color', array(
        'label' => __('Active Menu Color', 'internet-service-provider-pro'),
        'section' => 'internet_service_provider_pro_sec_header_section',
        'settings' => 'internet_service_provider_pro_header_menu_active_color'
    )));
    $wp_customize->add_setting( 'internet_service_provider_pro_header_menu_active_bgcolor', array(
        'default' => '',
        'sanitize_callback' => 'sanitize_hex_color'
    ));
    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'internet_service_provider_pro_header_menu_active_bgcolor', array(
        'label' => __('Active Menu Background Color', 'internet-service-provider-pro'),
        'section' => 'internet_service_provider_pro_sec_header_section',
        'settings' => 'internet_service_provider_pro_header_menu_active_bgcolor'
    )));

	$wp_customize->add_setting( 'internet_service_provider_pro_header_menu_hovercolor', array(
		'default' => '',
		'sanitize_callback'	=> 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'internet_service_provider_pro_header_menu_hovercolor', array(
		'label' => __('Menu Item Hover Color', 'internet-service-provider-pro'),
		'section' => 'internet_service_provider_pro_sec_header_section',
		'settings' => 'internet_service_provider_pro_header_menu_hovercolor'
	)));

	$wp_customize->add_setting( 'internet_service_provider_pro_dropdown_item_color', array(
		'default' => '',
		'sanitize_callback'	=> 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'internet_service_provider_pro_dropdown_item_color', array(
		'label' => __('Menu DropDown Item Color', 'internet-service-provider-pro'),
		'section' => 'internet_service_provider_pro_sec_header_section',
		'settings' => 'internet_service_provider_pro_dropdown_item_color'
	)));

    $wp_customize->add_setting('internet_service_provider_pro_dropdown_item_font_family',array(
      'default' => '',
      'capability' => 'edit_theme_options',
      'sanitize_callback' => 'internet_service_provider_pro_sanitize_choices'
     ));
    $wp_customize->add_control(
        'internet_service_provider_pro_dropdown_item_font_family', array(
        'section'  => 'internet_service_provider_pro_sec_header_section',
        'label'    => __( 'Menu Dropdown Item Fonts','internet-service-provider-pro'),
        'type'     => 'select',
        'choices'  => $font_array
    ));

    $wp_customize->add_setting('internet_service_provider_pro_dropdown_item_font_size',array(
        'default'=> '',
        'sanitize_callback' => 'sanitize_text_field'
    ));
    $wp_customize->add_control('internet_service_provider_pro_dropdown_item_font_size',array(
        'label' => __('Menu Dropdown Items Font Size','internet-service-provider-pro'),
        'input_attrs' => array(
            'step' => 1,
            'min'  => 0,
            'max'  => 50,
        ),
        'section'=> 'internet_service_provider_pro_sec_header_section',
        'type'=> 'number',
    ));

    $wp_customize->add_setting( 'internet_service_provider_pro_dropdown_bgcolor', array(
        'default' => '',
        'sanitize_callback' => 'sanitize_hex_color'
    ));
    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'internet_service_provider_pro_dropdown_bgcolor', array(
        'label' => __('Dropdown Background Color', 'internet-service-provider-pro'),
        'section' => 'internet_service_provider_pro_sec_header_section',
        'settings' => 'internet_service_provider_pro_dropdown_bgcolor'
    )));

	$wp_customize->add_setting( 'internet_service_provider_pro_dropdown_item_hover_color', array(
		'default' => '',
		'sanitize_callback'	=> 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'internet_service_provider_pro_dropdown_item_hover_color', array(
		'label' => __('Menu DropDown Item Hover Color', 'internet-service-provider-pro'),
		'section' => 'internet_service_provider_pro_sec_header_section',
		'settings' => 'internet_service_provider_pro_dropdown_item_hover_color'
	)));

    $wp_customize->add_setting( 'internet_service_provider_pro_dropdown_item_border_color', array(
		'default' => '',
		'sanitize_callback'	=> 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'internet_service_provider_pro_dropdown_item_border_color', array(
		'label' => __('Menu DropDown Item Border Color', 'internet-service-provider-pro'),
		'section' => 'internet_service_provider_pro_sec_header_section',
		'settings' => 'internet_service_provider_pro_dropdown_item_border_color'
	)));

    $wp_customize->add_setting( 'internet_service_provider_pro_dropdown_menu_active_item_color', array(
        'default' => '',
        'sanitize_callback' => 'sanitize_hex_color'
    ));
    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'internet_service_provider_pro_dropdown_menu_active_item_color', array(
        'label' => __('Dropdown Active Item Color', 'internet-service-provider-pro'),
        'section' => 'internet_service_provider_pro_sec_header_section',
        'settings' => 'internet_service_provider_pro_dropdown_menu_active_item_color'
    )));

	/* ---------  Mobile Menu ----------- */

    $wp_customize->add_setting( 'internet_service_provider_pro_header_mobilemenu_ct_pallete',
    array(
        'default' => '',
        'transport' => 'postMessage',
        'sanitize_callback' => 'internet_service_provider_pro_text_sanitization'
    ));
    $wp_customize->add_control( new VW_Themes_Seperator_custom_Control( $wp_customize, 'internet_service_provider_pro_header_mobilemenu_ct_pallete',
    array(
        'label' => __('Mobile Menu Typography ','internet-service-provider-pro'),
        'section' => 'internet_service_provider_pro_sec_header_section'
    )));

    $wp_customize->add_setting( 'internet_service_provider_pro_responsive_menu_bgcolor', array(
		'default' => '',
		'sanitize_callback'	=> 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'internet_service_provider_pro_responsive_menu_bgcolor', array(
		'label' => __('Menu Background Color', 'internet-service-provider-pro'),
		'section' => 'internet_service_provider_pro_sec_header_section',
		'settings' => 'internet_service_provider_pro_responsive_menu_bgcolor'
	)));

	//In Responsive
	$wp_customize->add_setting( 'internet_service_provider_pro_responsive_menu_color', array(
		'default' => '',
		'sanitize_callback'	=> 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'internet_service_provider_pro_responsive_menu_color', array(
		'label' => __('Menu Color', 'internet-service-provider-pro'),
		'section' => 'internet_service_provider_pro_sec_header_section',
		'settings' => 'internet_service_provider_pro_responsive_menu_color'
	)));

    $wp_customize->add_setting('internet_service_provider_pro_responsive_menu_font_size',array(
        'default'=> '',
        'sanitize_callback' => 'sanitize_text_field'
    ));
    $wp_customize->add_control('internet_service_provider_pro_responsive_menu_font_size',array(
        'label' => __('Font Size','internet-service-provider-pro'),
        'input_attrs' => array(
            'step' => 1,
            'min'  => 0,
            'max'  => 50,
        ),
        'section'=> 'internet_service_provider_pro_sec_header_section',
        'type'=> 'number',
    ));

    $wp_customize->add_setting('internet_service_provider_pro_responsive_menu_font_family',array(
      'default' => '',
      'capability' => 'edit_theme_options',
      'sanitize_callback' => 'internet_service_provider_pro_sanitize_choices'
     ));
    $wp_customize->add_control(
        'internet_service_provider_pro_responsive_menu_font_family', array(
        'section'  => 'internet_service_provider_pro_sec_header_section',
        'label'    => __( 'Font Family','internet-service-provider-pro'),
        'type'     => 'select',
        'choices'  => $font_array
    ));

    $wp_customize->add_setting( 'internet_service_provider_pro_responsive_active_menu_color', array(
        'default' => '',
        'sanitize_callback' => 'sanitize_hex_color'
    ));
    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'internet_service_provider_pro_responsive_active_menu_color', array(
        'label' => __('Active Menu Color', 'internet-service-provider-pro'),
        'section' => 'internet_service_provider_pro_sec_header_section',
        'settings' => 'internet_service_provider_pro_responsive_active_menu_color'
    )));

	$wp_customize->add_setting(
		'internet_service_provider_pro_res_open_menu_icon',
		array(
			'default'     => '',
			'sanitize_callback' => 'sanitize_text_field'
		)
	);
	$wp_customize->add_control(
		new internet_service_provider_pro_Fontawesome_Icon_Chooser(
			$wp_customize,
			'internet_service_provider_pro_res_open_menu_icon',
			array(
			'settings'    => 'internet_service_provider_pro_res_open_menu_icon',
			'section'   => 'internet_service_provider_pro_sec_header_section',
			'type'      => 'icon',
			'label'     => esc_html__( 'Choose  Icon', 'internet-service-provider-pro' ),
			)
		)
	);

	$wp_customize->add_setting(
		'internet_service_provider_pro_res_close_menu_icon',
		array(
			'default'     => '',
			'sanitize_callback' => 'sanitize_text_field'
		)
	);
	$wp_customize->add_control(
		new internet_service_provider_pro_Fontawesome_Icon_Chooser(
			$wp_customize,
			'internet_service_provider_pro_res_close_menu_icon',
			array(
			'settings'    => 'internet_service_provider_pro_res_close_menu_icon',
			'section'   => 'internet_service_provider_pro_sec_header_section',
			'type'      => 'icon',
			'label'     => esc_html__( 'Choose  Icon', 'internet-service-provider-pro' ),
			)
		)
	);

    $wp_customize->add_setting( 'internet_service_provider_pro_menu_open_bar_color', array(
        'default' => '',
        'sanitize_callback' => 'sanitize_hex_color'
    ));
    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'internet_service_provider_pro_menu_open_bar_color', array(
        'label' => __('Menu Open Bar Color', 'internet-service-provider-pro'),
        'section' => 'internet_service_provider_pro_sec_header_section',
        'settings' => 'internet_service_provider_pro_menu_open_bar_color',
    )));

    $wp_customize->add_setting('internet_service_provider_pro_menu_open_bar_font_size',array(
      'default' => '',
      'sanitize_callback' => 'sanitize_text_field'
    ));
    $wp_customize->add_control('internet_service_provider_pro_menu_open_bar_font_size',array(
      'label' => __('Font Size','internet-service-provider-pro'),
      'section' => 'internet_service_provider_pro_sec_header_section',
      'setting' => 'internet_service_provider_pro_menu_open_bar_font_size',
      'type'    => 'number'
    ));


    $wp_customize->add_setting( 'internet_service_provider_pro_menu_close_color', array(
        'default' => '',
        'sanitize_callback' => 'sanitize_hex_color'
    ));
    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'internet_service_provider_pro_menu_close_color', array(
        'label' => __('Menu Close Icon Color', 'internet-service-provider-pro'),
        'section' => 'internet_service_provider_pro_sec_header_section',
        'settings' => 'internet_service_provider_pro_menu_close_color',
    )));

    $wp_customize->add_setting('internet_service_provider_pro_menu_close_font_size',array(
      'default' => '',
      'sanitize_callback' => 'sanitize_text_field'
    ));
    $wp_customize->add_control('internet_service_provider_pro_menu_close_font_size',array(
      'label' => __('Font Size','internet-service-provider-pro'),
      'section' => 'internet_service_provider_pro_sec_header_section',
      'setting' => 'internet_service_provider_pro_menu_close_font_size',
      'type'    => 'number'
    ));

	$wp_customize->add_setting( 'internet_service_provider_pro_header_button_ct_pallete',
  array(
    'default' => '',
    'transport' => 'postMessage',
    'sanitize_callback' => 'internet_service_provider_pro_text_sanitization'
  ));
  $wp_customize->add_control( new VW_Themes_Seperator_custom_Control( $wp_customize, 'internet_service_provider_pro_header_button_ct_pallete',
      array(
      'label' => __('Header Button Typography ','internet-service-provider-pro'),
      'section' => 'internet_service_provider_pro_sec_header_section'
  )));

  $wp_customize->add_setting( 'internet_service_provider_pro_header_button_color', array(
      'default' => '',
      'sanitize_callback' => 'sanitize_hex_color'
  ));
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'internet_service_provider_pro_header_button_color', array(
      'label' => __('Color', 'internet-service-provider-pro'),
      'section' => 'internet_service_provider_pro_sec_header_section',
      'settings' => 'internet_service_provider_pro_header_button_color',
  )));
  $wp_customize->add_setting('internet_service_provider_pro_header_button_font_family',array(
      'default' => '',
      'capability' => 'edit_theme_options',
      'sanitize_callback' => 'sanitize_text_field'
  ));
  $wp_customize->add_control(
      'internet_service_provider_pro_header_button_font_family', array(
      'section'  => 'internet_service_provider_pro_sec_header_section',
      'label'    => __('Font Family','internet-service-provider-pro'),
      'type'     => 'select',
      'choices'  => $font_array,
  ));

  $wp_customize->add_setting('internet_service_provider_pro_header_button_font_size',array(
      'default' => '',
      'sanitize_callback' => 'sanitize_text_field'
  ));
  $wp_customize->add_control('internet_service_provider_pro_header_button_font_size',array(
      'label' => __('Font Size','internet-service-provider-pro'),
      
      'section' => 'internet_service_provider_pro_sec_header_section',
      'setting' => 'internet_service_provider_pro_header_button_font_size',
      'type'    => 'number'
  ));

  $wp_customize->add_setting( 'internet_service_provider_pro_sec_header_section_button_bgcolor', array(
      'default' => '',
      'sanitize_callback' => 'sanitize_hex_color'
  ));
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'internet_service_provider_pro_sec_header_section_button_bgcolor', array(
      'label' => __('Background Color', 'internet-service-provider-pro'),
      'section' => 'internet_service_provider_pro_sec_header_section',
      'settings' => 'internet_service_provider_pro_sec_header_section_button_bgcolor',
  )));

  $wp_customize->add_setting( 'internet_service_provider_pro_header_button_icon_color', array(
      'default' => '',
      'sanitize_callback' => 'sanitize_hex_color'
  ));
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'internet_service_provider_pro_header_button_icon_color', array(
      'label' => __('Icon Color', 'internet-service-provider-pro'),
      'section' => 'internet_service_provider_pro_sec_header_section',
      'settings' => 'internet_service_provider_pro_header_button_icon_color',
  )));

  $wp_customize->add_setting( 'internet_service_provider_pro_header_button_icon_bgcolor', array(
      'default' => '',
      'sanitize_callback' => 'sanitize_hex_color'
  ));
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'internet_service_provider_pro_header_button_icon_bgcolor', array(
      'label' => __('Icon Background Color', 'internet-service-provider-pro'),
      'section' => 'internet_service_provider_pro_sec_header_section',
      'settings' => 'internet_service_provider_pro_header_button_icon_bgcolor',
  )));

  $wp_customize->add_setting( 'internet_service_provider_pro_header_button_icon_hover_color', array(
      'default' => '',
      'sanitize_callback' => 'sanitize_hex_color'
  ));
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'internet_service_provider_pro_header_button_icon_hover_color', array(
      'label' => __('Icon Hover Color', 'internet-service-provider-pro'),
      'section' => 'internet_service_provider_pro_sec_header_section',
      'settings' => 'internet_service_provider_pro_header_button_icon_hover_color',
  )));

  $wp_customize->add_setting( 'internet_service_provider_pro_header_button_icon_hover_bgcolor', array(
      'default' => '',
      'sanitize_callback' => 'sanitize_hex_color'
  ));
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'internet_service_provider_pro_header_button_icon_hover_bgcolor', array(
      'label' => __('Icon Hover Background Color', 'internet-service-provider-pro'),
      'section' => 'internet_service_provider_pro_sec_header_section',
      'settings' => 'internet_service_provider_pro_header_button_icon_hover_bgcolor',
  )));

  $wp_customize->add_setting( 'internet_service_provider_pro_sec_header_section_button_hover_bgcolor', array(
      'default' => '',
      'sanitize_callback' => 'sanitize_hex_color'
  ));
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'internet_service_provider_pro_sec_header_section_button_hover_bgcolor', array(
      'label' => __('Hover Background Color', 'internet-service-provider-pro'),
      'section' => 'internet_service_provider_pro_sec_header_section',
      'settings' => 'internet_service_provider_pro_sec_header_section_button_hover_bgcolor',
  )));

  $wp_customize->add_setting( 'internet_service_provider_pro_header_button_text_color_hover', array(
      'default' => '',
      'sanitize_callback' => 'sanitize_hex_color'
  ));
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'internet_service_provider_pro_header_button_text_color_hover', array(
      'label' => __('Hover Text Color', 'internet-service-provider-pro'),
      'section' => 'internet_service_provider_pro_sec_header_section',
      'settings' => 'internet_service_provider_pro_header_button_text_color_hover',
  )));