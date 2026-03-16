<?php

// ----------------- Contact Page section ------------
  $wp_customize->add_section('internet_service_provider_pro_contact_page_section',array(
      'title' => __('Contact','internet-service-provider-pro'),
      'description'   => __('Add contact page settings here','internet-service-provider-pro'),
      'priority'  => null,
      'panel' => 'internet_service_provider_pro_panel_id',
  ));
  $wp_customize->add_setting( 'internet_service_provider_pro_contact_page_form_setting',
  array(
    'default' => '',
    'transport' => 'postMessage',
    'sanitize_callback' => 'internet_service_provider_pro_text_sanitization'
  ));
  $wp_customize->add_control( new VW_Themes_Seperator_custom_Control( $wp_customize, 'internet_service_provider_pro_contact_page_form_setting',
  array(
    'label' => __('Form Settings','internet-service-provider-pro'),
    'section' => 'internet_service_provider_pro_contact_page_section'
  )
  ) );

  $wp_customize->add_setting('internet_service_provider_pro_contactpage_form_title',array(
      'default'   => '',
      'sanitize_callback' => 'sanitize_text_field',
  ));
  $wp_customize->add_control('internet_service_provider_pro_contactpage_form_title',array(
      'label' => __('Form Title','internet-service-provider-pro'),
      'section' => 'internet_service_provider_pro_contact_page_section',
      'setting'   => 'internet_service_provider_pro_contactpage_form_title',
      'type'  => 'text'
  ));

  $wp_customize->add_setting('internet_service_provider_pro_contact_form_code',array(
      'default'   => '',
      'sanitize_callback' => 'sanitize_text_field',
  ));
  $wp_customize->add_control('internet_service_provider_pro_contact_form_code',array(
      'label' => __('Add Shortcode','internet-service-provider-pro'),
      'section' => 'internet_service_provider_pro_contact_page_section',
      'setting'   => 'internet_service_provider_pro_contact_form_code',
      'type'  => 'text'
  ));

  $wp_customize->add_setting( 'internet_service_provider_pro_contact_page_map_setting',
  array(
    'default' => '',
    'transport' => 'postMessage',
    'sanitize_callback' => 'internet_service_provider_pro_text_sanitization'
  ));
  $wp_customize->add_control( new VW_Themes_Seperator_custom_Control( $wp_customize, 'internet_service_provider_pro_contact_page_map_setting',
  array(
    'label' => __('Map Settings','internet-service-provider-pro'),
    'section' => 'internet_service_provider_pro_contact_page_section'
  )
  ) );
  $wp_customize->add_setting('internet_service_provider_pro_address_longitude',array(
      'default'   => '',
      'sanitize_callback' => 'sanitize_text_field'
  ));
  $wp_customize->add_control('internet_service_provider_pro_address_longitude',array(
      'label' => __('Longitude','internet-service-provider-pro'),
      'section' => 'internet_service_provider_pro_contact_page_section',
      'setting'   => 'internet_service_provider_pro_address_longitude',
      'type'=>'text'
  ));
  $wp_customize->add_setting('internet_service_provider_pro_address_latitude',array(
      'default'   => '',
      'sanitize_callback' => 'sanitize_text_field'
  ));
  $wp_customize->add_control('internet_service_provider_pro_address_latitude',array(
      'label' => __('Latitude','internet-service-provider-pro'),
      'section' => 'internet_service_provider_pro_contact_page_section',
      'setting'   => 'internet_service_provider_pro_address_latitude',
      'type'=>'text'
  ));

  $wp_customize->add_setting( 'internet_service_provider_pro_contact_page_contact_details_setting',
  array(
    'default' => '',
    'transport' => 'postMessage',
    'sanitize_callback' => 'internet_service_provider_pro_text_sanitization'
  ));
  $wp_customize->add_control( new VW_Themes_Seperator_custom_Control( $wp_customize, 'internet_service_provider_pro_contact_page_contact_details_setting',
  array(
    'label' => __('Contact Details Settings','internet-service-provider-pro'),
    'section' => 'internet_service_provider_pro_contact_page_section'
  )
  ) );

  $wp_customize->add_setting('internet_service_provider_pro_contact_page_contact_details_heading',array(
      'default'   => '',
      'sanitize_callback' => 'sanitize_text_field',
  ));
  $wp_customize->add_control('internet_service_provider_pro_contact_page_contact_details_heading',array(
      'label' => __('Heading','internet-service-provider-pro'),
      'section' => 'internet_service_provider_pro_contact_page_section',
      'setting'   => 'internet_service_provider_pro_contact_page_contact_details_heading',
      'type'  => 'text'
  ));

  $wp_customize->add_setting( 'internet_service_provider_pro_contact_page_address_setting',
  array(
    'default' => '',
    'transport' => 'postMessage',
    'sanitize_callback' => 'internet_service_provider_pro_text_sanitization'
  ));
  $wp_customize->add_control( new VW_Themes_Seperator_custom_Control( $wp_customize, 'internet_service_provider_pro_contact_page_address_setting',
  array(
    'label' => __('Address Settings','internet-service-provider-pro'),
    'section' => 'internet_service_provider_pro_contact_page_section'
  )
  ) );
  $wp_customize->add_setting('internet_service_provider_pro_address_title',array(
      'default'   => '',
      'sanitize_callback' => 'sanitize_textarea_field',
  ));
  $wp_customize->add_control('internet_service_provider_pro_address_title',array(
      'label' => __('Address Title','internet-service-provider-pro'),
      'section' => 'internet_service_provider_pro_contact_page_section',
      'setting'   => 'internet_service_provider_pro_address_title',
      'type'  => 'text'
  ));
  $wp_customize->add_setting('internet_service_provider_pro_address',array(
      'default'   => '',
      'capability'         => 'edit_theme_options',
      'sanitize_callback' => 'wp_kses_post',
  ));
  $wp_customize->add_control('internet_service_provider_pro_address',array(
      'label' => __('Address ','internet-service-provider-pro'),
      'section' => 'internet_service_provider_pro_contact_page_section',
      'setting'   => 'internet_service_provider_pro_address',
  ));

  $wp_customize->add_setting( 'internet_service_provider_pro_contact_page_phone_setting',
  array(
    'default' => '',
    'transport' => 'postMessage',
    'sanitize_callback' => 'internet_service_provider_pro_text_sanitization'
  ));
  $wp_customize->add_control( new VW_Themes_Seperator_custom_Control( $wp_customize, 'internet_service_provider_pro_contact_page_phone_setting',
  array(
    'label' => __('Phone Settings','internet-service-provider-pro'),
    'section' => 'internet_service_provider_pro_contact_page_section'
  )
  ) );
  $wp_customize->add_setting('internet_service_provider_pro_contactpage_phone_title',array(
      'default'   => '',
      'sanitize_callback' => 'sanitize_text_field',
  ));
  $wp_customize->add_control('internet_service_provider_pro_contactpage_phone_title',array(
      'label' => __('Phone Title','internet-service-provider-pro'),
      'section' => 'internet_service_provider_pro_contact_page_section',
      'setting'   => 'internet_service_provider_pro_contactpage_phone_title',
      'type'  => 'text'
  ));
  $wp_customize->add_setting('internet_service_provider_pro_contactpage_phone',array(
      'default'   => '',
      'sanitize_callback' => 'sanitize_text_field',
  ));
  $wp_customize->add_control('internet_service_provider_pro_contactpage_phone',array(
      'label' => __('Phone ','internet-service-provider-pro'),
      'section' => 'internet_service_provider_pro_contact_page_section',
      'setting'   => 'internet_service_provider_pro_contactpage_phone',
      'type'  => 'text'
  ));

  $wp_customize->add_setting( 'internet_service_provider_pro_contact_page_email_setting',
  array(
    'default' => '',
    'transport' => 'postMessage',
    'sanitize_callback' => 'internet_service_provider_pro_text_sanitization'
  ));
  $wp_customize->add_control( new VW_Themes_Seperator_custom_Control( $wp_customize, 'internet_service_provider_pro_contact_page_email_setting',
  array(
    'label' => __('Email Settings','internet-service-provider-pro'),
    'section' => 'internet_service_provider_pro_contact_page_section'
  )
  ) );
  $wp_customize->add_setting('internet_service_provider_pro_contactpage_email_title',array(
      'default'   => '',
      'sanitize_callback' => 'sanitize_text_field',
  ));
  $wp_customize->add_control('internet_service_provider_pro_contactpage_email_title',array(
      'label' => __('Email Title','internet-service-provider-pro'),
      'section' => 'internet_service_provider_pro_contact_page_section',
      'setting'   => 'internet_service_provider_pro_contactpage_email_title',
      'type'  => 'text'
  ));

  $wp_customize->selective_refresh->add_partial( 'internet_service_provider_pro_contactpage_email_title', array(
      'selector' => '.contact-info',
      'render_callback' => 'internet_service_provider_pro_customize_partial_internet_service_provider_pro_contactpage_email_title',
    ));

  $wp_customize->add_setting('internet_service_provider_pro_contactpage_email',array(
      'default'   => '',
      'sanitize_callback' => 'sanitize_text_field',
  ));
  $wp_customize->add_control('internet_service_provider_pro_contactpage_email',array(
      'label' => __('Email ','internet-service-provider-pro'),
      'section' => 'internet_service_provider_pro_contact_page_section',
      'setting'   => 'internet_service_provider_pro_contactpage_email',
      'type'  => 'text'
  ));

  $wp_customize->selective_refresh->add_partial( 'internet_service_provider_pro_contactpage_form_small_title', array(
      'selector' => '.contac_form h6',
      'render_callback' => 'internet_service_provider_pro_customize_partial_internet_service_provider_pro_contactpage_form_small_title',
  ));

  $wp_customize->add_setting( 'internet_service_provider_pro_contact_page_content_setting',
  array(
    'default' => '',
    'transport' => 'postMessage',
    'sanitize_callback' => 'internet_service_provider_pro_text_sanitization'
  ));
  $wp_customize->add_control( new VW_Themes_Seperator_custom_Control( $wp_customize, 'internet_service_provider_pro_contact_page_content_setting',
  array(
    'label' => __('Section Color & Typography','internet-service-provider-pro'),
    'section' => 'internet_service_provider_pro_contact_page_section'
  )
  ) );

    $wp_customize->add_setting( 'internet_service_provider_pro_contact_page_box_heading_color_setting',
  array(
    'default' => '',
    'transport' => 'postMessage',
    'sanitize_callback' => 'internet_service_provider_pro_text_sanitization'
  ));
  $wp_customize->add_control( new VW_Themes_Seperator_custom_Control( $wp_customize, 'internet_service_provider_pro_contact_page_box_heading_color_setting',
  array(
    'label' => __('Main Heading Typography','internet-service-provider-pro'),
    'section' => 'internet_service_provider_pro_contact_page_section'
  ) ) );
  
  $wp_customize->add_setting( 'internet_service_provider_pro_contact_page_box_heading_color', array(
      'default' => '',
      'sanitize_callback' => 'sanitize_hex_color'
  ));
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'internet_service_provider_pro_contact_page_box_heading_color', array(
      'label' => __('Color', 'internet-service-provider-pro'),
      'section' => 'internet_service_provider_pro_contact_page_section',
      'settings' => 'internet_service_provider_pro_contact_page_box_heading_color',
  )));
  //This is Section Heading FontFamily picker setting
  $wp_customize->add_setting('internet_service_provider_pro_contact_page_box_heading_font_family',array(
    'default' => '',
    'capability' => 'edit_theme_options',
    'sanitize_callback' => 'internet_service_provider_pro_sanitize_choices'
  ));
  $wp_customize->add_control(
      'internet_service_provider_pro_contact_page_box_heading_font_family', array(
      'section'  => 'internet_service_provider_pro_contact_page_section',
      'label'    => __( 'Font Family','internet-service-provider-pro'),
      'type'     => 'select',
      'choices'  => $font_array,
  ));
  $wp_customize->add_setting('internet_service_provider_pro_contact_page_box_heading_font_size',array(
      'default'           => '',
      'sanitize_callback' => 'sanitize_text_field'
  ));
  $wp_customize->add_control('internet_service_provider_pro_contact_page_box_heading_font_size',array(
      'label'   => __('Font Size ','internet-service-provider-pro'),
      'section' => 'internet_service_provider_pro_contact_page_section',
      'setting' => 'internet_service_provider_pro_contact_page_box_heading_font_size',
      'type'    => 'text'
  ));

  $wp_customize->add_setting( 'internet_service_provider_pro_contact_page_box_title_color_setting',
  array(
    'default' => '',
    'transport' => 'postMessage',
    'sanitize_callback' => 'internet_service_provider_pro_text_sanitization'
  ));
  $wp_customize->add_control( new VW_Themes_Seperator_custom_Control( $wp_customize, 'internet_service_provider_pro_contact_page_box_title_color_setting',
  array(
    'label' => __('Contact Box Title Typography','internet-service-provider-pro'),
    'section' => 'internet_service_provider_pro_contact_page_section'
  ) ) );
  
  $wp_customize->add_setting( 'internet_service_provider_pro_contact_page_box_title_color', array(
      'default' => '',
      'sanitize_callback' => 'sanitize_hex_color'
  ));
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'internet_service_provider_pro_contact_page_box_title_color', array(
      'label' => __('Color', 'internet-service-provider-pro'),
      'section' => 'internet_service_provider_pro_contact_page_section',
      'settings' => 'internet_service_provider_pro_contact_page_box_title_color',
  )));
  //This is Section Heading FontFamily picker setting
  $wp_customize->add_setting('internet_service_provider_pro_contact_page_box_title_font_family',array(
    'default' => '',
    'capability' => 'edit_theme_options',
    'sanitize_callback' => 'internet_service_provider_pro_sanitize_choices'
  ));
  $wp_customize->add_control(
      'internet_service_provider_pro_contact_page_box_title_font_family', array(
      'section'  => 'internet_service_provider_pro_contact_page_section',
      'label'    => __( 'Font Family','internet-service-provider-pro'),
      'type'     => 'select',
      'choices'  => $font_array,
  ));
  $wp_customize->add_setting('internet_service_provider_pro_contact_page_box_title_font_size',array(
      'default'           => '',
      'sanitize_callback' => 'sanitize_text_field'
  ));
  $wp_customize->add_control('internet_service_provider_pro_contact_page_box_title_font_size',array(
      'label'   => __('Font Size ','internet-service-provider-pro'),
      'section' => 'internet_service_provider_pro_contact_page_section',
      'setting' => 'internet_service_provider_pro_contact_page_box_title_font_size',
      'type'    => 'text'
  ));

  $wp_customize->add_setting( 'internet_service_provider_pro_contact_page_box_text_color_setting',
  array(
    'default' => '',
    'transport' => 'postMessage',
    'sanitize_callback' => 'internet_service_provider_pro_text_sanitization'
  ));
  $wp_customize->add_control( new VW_Themes_Seperator_custom_Control( $wp_customize, 'internet_service_provider_pro_contact_page_box_text_color_setting',
  array(
    'label' => __('Contact Text Typography','internet-service-provider-pro'),
    'section' => 'internet_service_provider_pro_contact_page_section'
  ) ) );
  
  $wp_customize->add_setting( 'internet_service_provider_pro_contact_page_box_text_color', array(
      'default' => '',
      'sanitize_callback' => 'sanitize_hex_color'
  ));
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'internet_service_provider_pro_contact_page_box_text_color', array(
      'label' => __('Color', 'internet-service-provider-pro'),
      'section' => 'internet_service_provider_pro_contact_page_section',
      'settings' => 'internet_service_provider_pro_contact_page_box_text_color',
  )));
  //This is Section Heading FontFamily picker setting
  $wp_customize->add_setting('internet_service_provider_pro_contact_page_box_text_font_family',array(
    'default' => '',
    'capability' => 'edit_theme_options',
    'sanitize_callback' => 'internet_service_provider_pro_sanitize_choices'
  ));
  $wp_customize->add_control(
      'internet_service_provider_pro_contact_page_box_text_font_family', array(
      'section'  => 'internet_service_provider_pro_contact_page_section',
      'label'    => __( 'Font Family','internet-service-provider-pro'),
      'type'     => 'select',
      'choices'  => $font_array,
  ));
  $wp_customize->add_setting('internet_service_provider_pro_contact_page_box_text_font_size',array(
      'default'           => '',
      'sanitize_callback' => 'sanitize_text_field'
  ));
  $wp_customize->add_control('internet_service_provider_pro_contact_page_box_text_font_size',array(
      'label'   => __('Font Size ','internet-service-provider-pro'),
      'section' => 'internet_service_provider_pro_contact_page_section',
      'setting' => 'internet_service_provider_pro_contact_page_box_text_font_size',
      'type'    => 'text'
  ));
  
  $wp_customize->add_setting( 'internet_service_provider_pro_contact_page_icon_color', array(
      'default' => '',
      'sanitize_callback' => 'sanitize_hex_color'
  ));
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'internet_service_provider_pro_contact_page_icon_color', array(
      'label' => __('Icon Color', 'internet-service-provider-pro'),
      'section' => 'internet_service_provider_pro_contact_page_section',
      'settings' => 'internet_service_provider_pro_contact_page_icon_color',
  )));

  $wp_customize->add_setting( 'internet_service_provider_pro_contact_page_icon_bgcolor', array(
      'default' => '',
      'sanitize_callback' => 'sanitize_hex_color'
  ));
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'internet_service_provider_pro_contact_page_icon_bgcolor', array(
      'label' => __('Icon Background Color', 'internet-service-provider-pro'),
      'section' => 'internet_service_provider_pro_contact_page_section',
      'settings' => 'internet_service_provider_pro_contact_page_icon_bgcolor',
  )));

  $wp_customize->add_setting( 'internet_service_provider_pro_contact_page_icon_hover_color', array(
      'default' => '',
      'sanitize_callback' => 'sanitize_hex_color'
  ));
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'internet_service_provider_pro_contact_page_icon_hover_color', array(
      'label' => __('Icon Hover Color', 'internet-service-provider-pro'),
      'section' => 'internet_service_provider_pro_contact_page_section',
      'settings' => 'internet_service_provider_pro_contact_page_icon_hover_color',
  )));

  $wp_customize->add_setting( 'internet_service_provider_pro_contact_page_icon_hover_bgcolor', array(
      'default' => '',
      'sanitize_callback' => 'sanitize_hex_color'
  ));
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'internet_service_provider_pro_contact_page_icon_hover_bgcolor', array(
      'label' => __('Icon Hover Background Color', 'internet-service-provider-pro'),
      'section' => 'internet_service_provider_pro_contact_page_section',
      'settings' => 'internet_service_provider_pro_contact_page_icon_hover_bgcolor',
  )));

  $wp_customize->add_setting( 'internet_service_provider_pro_contact_page_box_bgcolor', array(
      'default' => '',
      'sanitize_callback' => 'sanitize_hex_color'
  ));
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'internet_service_provider_pro_contact_page_box_bgcolor', array(
      'label' => __('Box Background Color', 'internet-service-provider-pro'),
      'section' => 'internet_service_provider_pro_contact_page_section',
      'settings' => 'internet_service_provider_pro_contact_page_box_bgcolor',
  )));

  $wp_customize->add_setting( 'internet_service_provider_pro_contact_page_form_ct_pallete',
  array(
      'default' => '',
      'transport' => 'postMessage',
      'sanitize_callback' => 'internet_service_provider_pro_text_sanitization'
  ));
  $wp_customize->add_control( new VW_Themes_Seperator_custom_Control( $wp_customize, 'internet_service_provider_pro_contact_page_form_ct_pallete',
  array(
      'label' => __('Form Typography ','internet-service-provider-pro'),
      'section' => 'internet_service_provider_pro_contact_page_section'
  )));

  
  $wp_customize->add_setting( 'internet_service_provider_pro_contact_page_form_heading_color_setting',
  array(
    'default' => '',
    'transport' => 'postMessage',
    'sanitize_callback' => 'internet_service_provider_pro_text_sanitization'
  ));
  $wp_customize->add_control( new VW_Themes_Seperator_custom_Control( $wp_customize, 'internet_service_provider_pro_contact_page_form_heading_color_setting',
  array(
    'label' => __('Form Main Heading Typography','internet-service-provider-pro'),
    'section' => 'internet_service_provider_pro_contact_page_section'
  ) ) );
  
  $wp_customize->add_setting( 'internet_service_provider_pro_contact_page_form_heading_color', array(
      'default' => '',
      'sanitize_callback' => 'sanitize_hex_color'
  ));
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'internet_service_provider_pro_contact_page_form_heading_color', array(
      'label' => __('Color', 'internet-service-provider-pro'),
      'section' => 'internet_service_provider_pro_contact_page_section',
      'settings' => 'internet_service_provider_pro_contact_page_form_heading_color',
  )));
  //This is Section Heading FontFamily picker setting
  $wp_customize->add_setting('internet_service_provider_pro_contact_page_form_heading_font_family',array(
    'default' => '',
    'capability' => 'edit_theme_options',
    'sanitize_callback' => 'internet_service_provider_pro_sanitize_choices'
  ));
  $wp_customize->add_control(
      'internet_service_provider_pro_contact_page_form_heading_font_family', array(
      'section'  => 'internet_service_provider_pro_contact_page_section',
      'label'    => __( 'Font Family','internet-service-provider-pro'),
      'type'     => 'select',
      'choices'  => $font_array,
  ));
  $wp_customize->add_setting('internet_service_provider_pro_contact_page_form_heading_font_size',array(
      'default'           => '',
      'sanitize_callback' => 'sanitize_text_field'
  ));
  $wp_customize->add_control('internet_service_provider_pro_contact_page_form_heading_font_size',array(
      'label'   => __('Font Size','internet-service-provider-pro'),
      'section' => 'internet_service_provider_pro_contact_page_section',
      'setting' => 'internet_service_provider_pro_contact_page_form_heading_font_size',
      'type'    => 'text'
  ));

  $wp_customize->add_setting( 'internet_service_provider_pro_contact_page_input_title_ct_pallete',
  array(
      'default' => '',
      'transport' => 'postMessage',
      'sanitize_callback' => 'internet_service_provider_pro_text_sanitization'
  ));
  $wp_customize->add_control( new VW_Themes_Seperator_custom_Control( $wp_customize, 'internet_service_provider_pro_contact_page_input_title_ct_pallete',
  array(
      'label' => __('Input Title Typography ','internet-service-provider-pro'),
      'section' => 'internet_service_provider_pro_contact_page_section'
  )));

  $wp_customize->add_setting( 'internet_service_provider_pro_contact_page_input_title_color', array(
      'default' => '',
      'sanitize_callback' => 'sanitize_hex_color'
  ));
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'internet_service_provider_pro_contact_page_input_title_color', array(
      'label' => __('Input Color', 'internet-service-provider-pro'),
      'section' => 'internet_service_provider_pro_contact_page_section',
      'settings' => 'internet_service_provider_pro_contact_page_input_title_color',
  )));
  $wp_customize->add_setting('internet_service_provider_pro_contact_page_input_title_font_family',array(
      'default' => '',
      'capability' => 'edit_theme_options',
      'sanitize_callback' => 'sanitize_text_field'
  ));
  $wp_customize->add_control(
      'internet_service_provider_pro_contact_page_input_title_font_family', array(
      'section'  => 'internet_service_provider_pro_contact_page_section',
      'label'    => __('Input Font Family','internet-service-provider-pro'),
      'type'     => 'select',
      'choices'  => $font_array,
  ));

  $wp_customize->add_setting('internet_service_provider_pro_contact_page_input_title_font_size',array(
      'default' => '',
      'sanitize_callback' => 'sanitize_text_field'
  ));
  $wp_customize->add_control('internet_service_provider_pro_contact_page_input_title_font_size',array(
      'label' => __('Font Size','internet-service-provider-pro'),
      'description' => __('Add font size in px','internet-service-provider-pro'),
      'section' => 'internet_service_provider_pro_contact_page_section',
      'setting' => 'internet_service_provider_pro_contact_page_input_title_font_size',
      'type'    => 'number'
  ));

  $wp_customize->add_setting( 'internet_service_provider_pro_contact_page_input_ct_pallete',
  array(
      'default' => '',
      'transport' => 'postMessage',
      'sanitize_callback' => 'internet_service_provider_pro_text_sanitization'
  ));
  $wp_customize->add_control( new VW_Themes_Seperator_custom_Control( $wp_customize, 'internet_service_provider_pro_contact_page_input_ct_pallete',
  array(
      'label' => __('Input Typography ','internet-service-provider-pro'),
      'section' => 'internet_service_provider_pro_contact_page_section'
  )));

  $wp_customize->add_setting( 'internet_service_provider_pro_contact_page_input_color', array(
      'default' => '',
      'sanitize_callback' => 'sanitize_hex_color'
  ));
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'internet_service_provider_pro_contact_page_input_color', array(
      'label' => __('Input Color', 'internet-service-provider-pro'),
      'section' => 'internet_service_provider_pro_contact_page_section',
      'settings' => 'internet_service_provider_pro_contact_page_input_color',
  )));
  $wp_customize->add_setting('internet_service_provider_pro_contact_page_input_font_family',array(
      'default' => '',
      'capability' => 'edit_theme_options',
      'sanitize_callback' => 'sanitize_text_field'
  ));
  $wp_customize->add_control(
      'internet_service_provider_pro_contact_page_input_font_family', array(
      'section'  => 'internet_service_provider_pro_contact_page_section',
      'label'    => __('Input Font Family','internet-service-provider-pro'),
      'type'     => 'select',
      'choices'  => $font_array,
  ));

  $wp_customize->add_setting('internet_service_provider_pro_contact_page_input_font_size',array(
      'default' => '',
      'sanitize_callback' => 'sanitize_text_field'
  ));
  $wp_customize->add_control('internet_service_provider_pro_contact_page_input_font_size',array(
      'label' => __('Font Size','internet-service-provider-pro'),
      'description' => __('Add font size in px','internet-service-provider-pro'),
      'section' => 'internet_service_provider_pro_contact_page_section',
      'setting' => 'internet_service_provider_pro_contact_page_input_font_size',
      'type'    => 'number'
  ));

  $wp_customize->add_setting( 'internet_service_provider_pro_contact_page_input_bgcolor', array(
      'default' => '',
      'sanitize_callback' => 'sanitize_hex_color'
  ));
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'internet_service_provider_pro_contact_page_input_bgcolor', array(
      'label' => __('Input Background Color', 'internet-service-provider-pro'),
      'section' => 'internet_service_provider_pro_contact_page_section',
      'settings' => 'internet_service_provider_pro_contact_page_input_bgcolor',
  )));

  $wp_customize->add_setting( 'internet_service_provider_pro_contact_page_input_border_color', array(
      'default' => '',
      'sanitize_callback' => 'sanitize_hex_color'
  ));
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'internet_service_provider_pro_contact_page_input_border_color', array(
      'label' => __('Input Border Color', 'internet-service-provider-pro'),
      'section' => 'internet_service_provider_pro_contact_page_section',
      'settings' => 'internet_service_provider_pro_contact_page_input_border_color',
  )));

  $wp_customize->add_setting( 'internet_service_provider_pro_contact_page_submit_button_ct_pallete',
  array(
      'default' => '',
      'transport' => 'postMessage',
      'sanitize_callback' => 'internet_service_provider_pro_text_sanitization'
  ));
  $wp_customize->add_control( new VW_Themes_Seperator_custom_Control( $wp_customize, 'internet_service_provider_pro_contact_page_submit_button_ct_pallete',
  array(
      'label' => __('Form Button Typography ','internet-service-provider-pro'),
      'section' => 'internet_service_provider_pro_contact_page_section'
  )));

  $wp_customize->add_setting( 'internet_service_provider_pro_contact_page_submit_button_color', array(
      'default' => '',
      'sanitize_callback' => 'sanitize_hex_color'
  ));
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'internet_service_provider_pro_contact_page_submit_button_color', array(
      'label' => __('Form Button Text Color', 'internet-service-provider-pro'),
      'section' => 'internet_service_provider_pro_contact_page_section',
      'settings' => 'internet_service_provider_pro_contact_page_submit_button_color',
  )));
  $wp_customize->add_setting('internet_service_provider_pro_contact_page_submit_button_font_family',array(
      'default' => '',
      'capability' => 'edit_theme_options',
      'sanitize_callback' => 'sanitize_text_field'
  ));
  $wp_customize->add_control(
      'internet_service_provider_pro_contact_page_submit_button_font_family', array(
      'section'  => 'internet_service_provider_pro_contact_page_section',
      'label'    => __('Form Button Text Font Family','internet-service-provider-pro'),
      'type'     => 'select',
      'choices'  => $font_array,
  ));

  $wp_customize->add_setting('internet_service_provider_pro_contact_page_submit_button_font_size',array(
      'default' => '',
      'sanitize_callback' => 'sanitize_text_field'
  ));
  $wp_customize->add_control('internet_service_provider_pro_contact_page_submit_button_font_size',array(
      'label' => __('Font Size','internet-service-provider-pro'),
      'description' => __('Add font size in px','internet-service-provider-pro'),
      'section' => 'internet_service_provider_pro_contact_page_section',
      'setting' => 'internet_service_provider_pro_contact_page_submit_button_font_size',
      'type'    => 'number'
  ));

  $wp_customize->add_setting( 'internet_service_provider_pro_contact_page_submit_button_bgcolor', array(
      'default' => '',
      'sanitize_callback' => 'sanitize_hex_color'
  ));
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'internet_service_provider_pro_contact_page_submit_button_bgcolor', array(
      'label' => __('Form Button Background Color', 'internet-service-provider-pro'),
      'section' => 'internet_service_provider_pro_contact_page_section',
      'settings' => 'internet_service_provider_pro_contact_page_submit_button_bgcolor',
  )));

  $wp_customize->add_setting( 'internet_service_provider_pro_contact_page_submit_button_hover_color', array(
      'default' => '',
      'sanitize_callback' => 'sanitize_hex_color'
  ));
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'internet_service_provider_pro_contact_page_submit_button_hover_color', array(
      'label' => __('Form Button Hover Color', 'internet-service-provider-pro'),
      'section' => 'internet_service_provider_pro_contact_page_section',
      'settings' => 'internet_service_provider_pro_contact_page_submit_button_hover_color',
  )));

  $wp_customize->add_setting( 'internet_service_provider_pro_contact_page_submit_button_hover_bgcolor', array(
      'default' => '',
      'sanitize_callback' => 'sanitize_hex_color'
  ));
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'internet_service_provider_pro_contact_page_submit_button_hover_bgcolor', array(
      'label' => __('Form Button Hover Background Color', 'internet-service-provider-pro'),
      'section' => 'internet_service_provider_pro_contact_page_section',
      'settings' => 'internet_service_provider_pro_contact_page_submit_button_hover_bgcolor',
  )));

  

  $wp_customize->add_setting( 'internet_service_provider_pro_contact_page_form_bgcolor', array(
      'default' => '',
      'sanitize_callback' => 'sanitize_hex_color'
  ));
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'internet_service_provider_pro_contact_page_form_bgcolor', array(
      'label' => __('Form Background Color', 'internet-service-provider-pro'),
      'section' => 'internet_service_provider_pro_contact_page_section',
      'settings' => 'internet_service_provider_pro_contact_page_form_bgcolor',
  )));

// ---------------------404 Page---------------------------
//404 Page Setting
 $wp_customize->add_section('internet_service_provider_pro_404_page',array(
   'title' => __('404 Page Settings','internet-service-provider-pro'),
   'panel' => 'internet_service_provider_pro_panel_id',
 ));
 $wp_customize->add_setting( 'internet_service_provider_pro_404_page_bgcolor', array(
   'default' => '',
   'sanitize_callback'	=> 'sanitize_hex_color'
 ));
 $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'internet_service_provider_pro_404_page_bgcolor',array(
   'label' => __('Background Color', 'internet-service-provider-pro'),
   'description' => __('Either add background color or background image, if you add both background color will be top most priority', 'internet-service-provider-pro'),
   'section' => 'internet_service_provider_pro_404_page',
   'settings' => 'internet_service_provider_pro_404_page_bgcolor',
 )));
 $wp_customize->add_setting('internet_service_provider_pro_404_page_bgimage',array(
     'default'   => '',
     'sanitize_callback' => 'esc_url_raw',
 ));
 $wp_customize->add_control(
     new WP_Customize_Image_Control($wp_customize,'internet_service_provider_pro_404_page_bgimage',
         array(
         'label' => __('Background image','internet-service-provider-pro'),
         'section' => 'internet_service_provider_pro_404_page',
         'settings' => 'internet_service_provider_pro_404_page_bgimage'
 )));
 $wp_customize->add_setting( 'internet_service_provider_pro_404_page_bg_attachment', array(
     'default'         => '',
     'sanitize_callback' => 'internet_service_provider_pro_sanitize_choices'
 ));
 $wp_customize->add_control('internet_service_provider_pro_404_page_bg_attachment', array(
     'type'      => 'radio',
     'label'     => __('Choose image option', 'internet-service-provider-pro'),
     'section'   => 'internet_service_provider_pro_404_page',
     'choices'   => array(
     'vw-fixed'      => __( 'Fixed', 'internet-service-provider-pro' ),
     'vw-scroll'      => __( 'Scroll', 'internet-service-provider-pro' ),
 )));
 $wp_customize->add_setting('internet_service_provider_pro_404_page_heading',array(
   'default'=> '',
   'sanitize_callback' => 'sanitize_text_field'
 ));

 $wp_customize->add_control('internet_service_provider_pro_404_page_heading',array(
   'label' => __('Add Title','internet-service-provider-pro'),
   'section'=> 'internet_service_provider_pro_404_page',
   'type'=> 'text'
 ));
 $wp_customize->add_setting('internet_service_provider_pro_404_page_content',array(
   'default'=> '',
   'sanitize_callback' => 'sanitize_text_field'
 ));

 $wp_customize->add_control('internet_service_provider_pro_404_page_content',array(
   'label' => __('Add Paragraph','internet-service-provider-pro'),
   'section'=> 'internet_service_provider_pro_404_page',
   'type'=> 'text'
 ));
 $wp_customize->add_setting('internet_service_provider_pro_404_page_button_text',array(
   'default'=> '',
   'sanitize_callback' => 'sanitize_text_field'
 ));
 $wp_customize->add_control('internet_service_provider_pro_404_page_button_text',array(
   'label' => __('Add Button Text','internet-service-provider-pro'),
   'input_attrs' => array(
           'placeholder' => __( 'Back to Home Page', 'internet-service-provider-pro' ),
       ),
   'section'=> 'internet_service_provider_pro_404_page',
   'type'=> 'text'
 ));
 $wp_customize->add_setting('internet_service_provider_pro_error_temp_bg_images',array(
     'default'   => '',
     'sanitize_callback' => 'esc_url_raw',
 ));
 $wp_customize->add_control(
     new WP_Customize_Image_Control($wp_customize,'internet_service_provider_pro_error_temp_bg_images',
         array(
         'label' => __('404 Image','internet-service-provider-pro'),
         'section' => 'internet_service_provider_pro_404_page',
         'settings' => 'internet_service_provider_pro_error_temp_bg_images'
 )));
 $wp_customize->add_setting( 'internet_service_provider_pro_404_page_color_settings',
 array(
   'default' => '',
   'transport' => 'postMessage',
   'sanitize_callback' => 'internet_service_provider_pro_text_sanitization'
 ));
 $wp_customize->add_control( new VW_Themes_Seperator_custom_Control( $wp_customize, 'internet_service_provider_pro_404_page_color_settings',
 array(
   'label' => __('Heading Typography','internet-service-provider-pro'),
   'section' => 'internet_service_provider_pro_404_page'
 )));
 $wp_customize->add_setting( 'internet_service_provider_pro_404_page_title_color', array(
 'default' => '',
 'sanitize_callback'	=> 'sanitize_hex_color'
 ));
 $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'internet_service_provider_pro_404_page_title_color',array(
 'label' => __('Heading Color', 'internet-service-provider-pro'),
 'section' => 'internet_service_provider_pro_404_page',
 'settings' => 'internet_service_provider_pro_404_page_title_color',
 )));
 $wp_customize->add_setting('internet_service_provider_pro_404_page_title_font_family',array(
 'default' => '',
 'capability' => 'edit_theme_options',
 'sanitize_callback' => 'internet_service_provider_pro_sanitize_choices'
 ));
 $wp_customize->add_control(
   'internet_service_provider_pro_404_page_title_font_family', array(
   'section'  => 'internet_service_provider_pro_404_page',
   'label'    => __( 'Heading Font Family','internet-service-provider-pro'),
   'type'     => 'select',
   'choices'  => $font_array
 ));
 $wp_customize->add_setting('internet_service_provider_pro_404_page_title_font_size',array(
 'default' => '',
 'sanitize_callback' => 'sanitize_text_field'
 ));
 $wp_customize->add_control('internet_service_provider_pro_404_page_title_font_size',array(
 'label' => __('Heading Font Size','internet-service-provider-pro'),
 'description' => __('Add font size in px','internet-service-provider-pro'),
 'section' => 'internet_service_provider_pro_404_page',
 'setting' => 'internet_service_provider_pro_404_page_title_font_size',
 'type'    => 'number'
 ));

 $wp_customize->add_setting( 'internet_service_provider_pro_404_page_content_color', array(
 'default' => '',
 'sanitize_callback'	=> 'sanitize_hex_color'
 ));
 $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'internet_service_provider_pro_404_page_content_color',array(
 'label' => __('Content Color', 'internet-service-provider-pro'),
 'section' => 'internet_service_provider_pro_404_page',
 'settings' => 'internet_service_provider_pro_404_page_content_color',
 )));

 $wp_customize->add_setting('internet_service_provider_pro_404_page_content_font_family',array(
 'default' => '',
 'capability' => 'edit_theme_options',
 'sanitize_callback' => 'internet_service_provider_pro_sanitize_choices'
 ));
 $wp_customize->add_control(
   'internet_service_provider_pro_404_page_content_font_family', array(
   'section'  => 'internet_service_provider_pro_404_page',
   'label'    => __( 'Content Font Family','internet-service-provider-pro'),
   'type'     => 'select',
   'choices'  => $font_array
 ));

 $wp_customize->add_setting('internet_service_provider_pro_404_page_content_font_size',array(
 'default' => '',
 'sanitize_callback' => 'sanitize_text_field'
 ));
 $wp_customize->add_control('internet_service_provider_pro_404_page_content_font_size',array(
 'label' => __('Content Font Size','internet-service-provider-pro'),
 'description' => __('Add font size in px','internet-service-provider-pro'),
 'section' => 'internet_service_provider_pro_404_page',
 'setting' => 'internet_service_provider_pro_404_page_content_font_size',
 'type'    => 'number'
 ));


 $wp_customize->add_setting( 'internet_service_provider_pro_404_page_button_settings',
 array(
   'default' => '',
   'transport' => 'postMessage',
   'sanitize_callback' => 'internet_service_provider_pro_text_sanitization'
 ));
 $wp_customize->add_control( new VW_Themes_Seperator_custom_Control( $wp_customize, 'internet_service_provider_pro_404_page_button_settings',
 array(
   'label' => __('Button Typography','internet-service-provider-pro'),
   'section' => 'internet_service_provider_pro_404_page'
 )));
 $wp_customize->add_setting( 'internet_service_provider_pro_404_page_button_color', array(
	'default' => '',
	'sanitize_callback'	=> 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'internet_service_provider_pro_404_page_button_color',array(
	'label' => __('Button Color', 'internet-service-provider-pro'),
	'section' => 'internet_service_provider_pro_404_page',
	'settings' => 'internet_service_provider_pro_404_page_button_color',
	)));
	
	$wp_customize->add_setting('internet_service_provider_pro_404_page_button_font_size',array(
	'default' => '',
	'sanitize_callback' => 'sanitize_text_field'
	));
	$wp_customize->add_control('internet_service_provider_pro_404_page_button_font_size',array(
	'label' => __(' Button Font Size','internet-service-provider-pro'),
	'description' => __('Add font size in px','internet-service-provider-pro'),
	'section' => 'internet_service_provider_pro_404_page',
	'setting' => 'internet_service_provider_pro_404_page_button_font_size',
	'type'    => 'number'
	));
	
	$wp_customize->add_setting('internet_service_provider_pro_404_page_button_font_family',array(
	'default' => '',
	'capability' => 'edit_theme_options',
	'sanitize_callback' => 'internet_service_provider_pro_sanitize_choices'
	));
	$wp_customize->add_control(
		'internet_service_provider_pro_404_page_button_font_family', array(
		'section'  => 'internet_service_provider_pro_404_page',
		'label'    => __( 'Button Font Family','internet-service-provider-pro'),
		'type'     => 'select',
		'choices'  => $font_array
	));
		
	$wp_customize->add_setting( 'internet_service_provider_pro_404_page_button_bg_color', array(
	'default' => '',
	'sanitize_callback'	=> 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'internet_service_provider_pro_404_page_button_bg_color',array(
	'label' => __('Button Background Color', 'internet-service-provider-pro'),
	'section' => 'internet_service_provider_pro_404_page',
	'settings' => 'internet_service_provider_pro_404_page_button_bg_color',
	)));
	$wp_customize->add_setting( 'internet_service_provider_pro_404_page_button_hover_bg_color', array(
	'default' => '',
	'sanitize_callback'	=> 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'internet_service_provider_pro_404_page_button_hover_bg_color',array(
	'label' => __('Button Hover Background Color', 'internet-service-provider-pro'),
	'section' => 'internet_service_provider_pro_404_page',
	'settings' => 'internet_service_provider_pro_404_page_button_hover_bg_color',
	)));
	$wp_customize->add_setting( 'internet_service_provider_pro_404_page_button_bee_bg_color', array(
	'default' => '',
	'sanitize_callback'	=> 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'internet_service_provider_pro_404_page_button_bee_bg_color',array(
	'label' => __('Button Icon Background Color', 'internet-service-provider-pro'),
	'section' => 'internet_service_provider_pro_404_page',
	'settings' => 'internet_service_provider_pro_404_page_button_bee_bg_color',
	)));
	$wp_customize->add_setting( 'internet_service_provider_pro_404_page_button_bee_color', array(
	'default' => '',
	'sanitize_callback'	=> 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'internet_service_provider_pro_404_page_button_bee_color',array(
	'label' => __('Button Icon Color', 'internet-service-provider-pro'),
	'section' => 'internet_service_provider_pro_404_page',
	'settings' => 'internet_service_provider_pro_404_page_button_bee_color',
	)));