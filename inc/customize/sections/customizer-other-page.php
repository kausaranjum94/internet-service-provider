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

  $wp_customize->add_setting( 'internet_service_provider_pro_contact_page_box_border_color', array(
      'default' => '',
      'sanitize_callback' => 'sanitize_hex_color'
  ));
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'internet_service_provider_pro_contact_page_box_border_color', array(
      'label' => __('Box Border Color', 'internet-service-provider-pro'),
      'section' => 'internet_service_provider_pro_contact_page_section',
      'settings' => 'internet_service_provider_pro_contact_page_box_border_color',
  )));

  $wp_customize->add_setting( 'internet_service_provider_pro_contact_page_box_hover_bgcolor', array(
      'default' => '',
      'sanitize_callback' => 'sanitize_hex_color'
  ));
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'internet_service_provider_pro_contact_page_box_hover_bgcolor', array(
      'label' => __('Box Hover Background Color', 'internet-service-provider-pro'),
      'section' => 'internet_service_provider_pro_contact_page_section',
      'settings' => 'internet_service_provider_pro_contact_page_box_hover_bgcolor',
  )));

  $wp_customize->add_setting( 'internet_service_provider_pro_contact_page_box_hover_text_color', array(
      'default' => '',
      'sanitize_callback' => 'sanitize_hex_color'
  ));
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'internet_service_provider_pro_contact_page_box_hover_text_color', array(
      'label' => __('Box Hover Text Color', 'internet-service-provider-pro'),
      'section' => 'internet_service_provider_pro_contact_page_section',
      'settings' => 'internet_service_provider_pro_contact_page_box_hover_text_color',
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
    // --------------- Post General Settings ---------------
  $wp_customize->add_section('internet_service_provider_pro_post_general_settings',array(
    'title' => __('Blog Page Settings','internet-service-provider-pro'),
    'description'   => __('See section settings below and do check documentation too.','internet-service-provider-pro'),
    'priority'  => null,
    'panel' => 'internet_service_provider_pro_panel_id',
  ));
  $wp_customize->add_setting( 'internet_service_provider_pro_post_general_settings_post_date',
   array(
      'default' => 1,
      'transport' => 'refresh',
      'sanitize_callback' => 'internet_service_provider_pro_switch_sanitization'
  ));
  $wp_customize->add_control( new internet_service_provider_pro_Toggle_Switch_Custom_control( $wp_customize, 'internet_service_provider_pro_post_general_settings_post_date',
     array(
        'label' => esc_html__( 'Show or Hide Post Date', 'internet-service-provider-pro' ),
        'section' => 'internet_service_provider_pro_post_general_settings'
  )));
  $wp_customize->add_setting( 'internet_service_provider_pro_post_general_settings_post_comments',
   array(
      'default' => 1,
      'transport' => 'refresh',
      'sanitize_callback' => 'internet_service_provider_pro_switch_sanitization'
  ));
  $wp_customize->add_control( new internet_service_provider_pro_Toggle_Switch_Custom_control( $wp_customize, 'internet_service_provider_pro_post_general_settings_post_comments',
     array(
        'label' => esc_html__( 'Show or Hide Comments', 'internet-service-provider-pro' ),
        'section' => 'internet_service_provider_pro_post_general_settings'
     )
  ));
  $wp_customize->add_setting( 'internet_service_provider_pro_post_general_settings_category_setting',
   array(
      'default' => 1,
      'transport' => 'refresh',
      'sanitize_callback' => 'internet_service_provider_pro_switch_sanitization'
  ));
  $wp_customize->add_control( new internet_service_provider_pro_Toggle_Switch_Custom_control( $wp_customize, 'internet_service_provider_pro_post_general_settings_category_setting',
     array(
        'label' => esc_html__( 'Show or Hide Category', 'internet-service-provider-pro' ),
        'section' => 'internet_service_provider_pro_post_general_settings'
     )
  ));
  $wp_customize->add_setting( 'internet_service_provider_pro_post_general_settings_post_author',
   array(
      'default' => 1,
      'transport' => 'refresh',
      'sanitize_callback' => 'internet_service_provider_pro_switch_sanitization'
   )
  );
  $wp_customize->add_control( new internet_service_provider_pro_Toggle_Switch_Custom_control( $wp_customize, 'internet_service_provider_pro_post_general_settings_post_author',
     array(
        'label' => esc_html__( 'Show or Hide Author', 'internet-service-provider-pro' ),
        'section' => 'internet_service_provider_pro_post_general_settings'
     )
  ));
  $wp_customize->add_setting( 'internet_service_provider_pro_post_general_settings_post_share',
   array(
      'default' => 1,
      'transport' => 'refresh',
      'sanitize_callback' => 'internet_service_provider_pro_switch_sanitization'
   )
  );
  $wp_customize->add_control( new internet_service_provider_pro_Toggle_Switch_Custom_control( $wp_customize, 'internet_service_provider_pro_post_general_settings_post_share',
     array(
        'label' => esc_html__( 'Show or Hide Share Icons', 'internet-service-provider-pro' ),
        'section' => 'internet_service_provider_pro_post_general_settings'
     )
  ));
  $wp_customize->add_setting( 'internet_service_provider_pro_post_general_settings_post_share_facebook',
   array(
      'default' => 1,
      'transport' => 'refresh',
      'sanitize_callback' => 'internet_service_provider_pro_switch_sanitization'
   )
  );
  $wp_customize->add_control( new internet_service_provider_pro_Toggle_Switch_Custom_control( $wp_customize, 'internet_service_provider_pro_post_general_settings_post_share_facebook',
     array(
        'label' => esc_html__( 'Post Share Facebook', 'internet-service-provider-pro' ),
        'section' => 'internet_service_provider_pro_post_general_settings'
     )
  ));
  $wp_customize->add_setting( 'internet_service_provider_pro_post_general_settings_post_share_linkedin',
   array(
      'default' => 1,
      'transport' => 'refresh',
      'sanitize_callback' => 'internet_service_provider_pro_switch_sanitization'
   )
  );
  $wp_customize->add_control( new internet_service_provider_pro_Toggle_Switch_Custom_control( $wp_customize, 'internet_service_provider_pro_post_general_settings_post_share_linkedin',
     array(
        'label' => esc_html__( 'Post Share Linkedin', 'internet-service-provider-pro' ),
        'section' => 'internet_service_provider_pro_post_general_settings'
     )
  ));
  $wp_customize->add_setting( 'internet_service_provider_pro_post_general_settings_post_share_twitter',
   array(
      'default' => 1,
      'transport' => 'refresh',
      'sanitize_callback' => 'internet_service_provider_pro_switch_sanitization'
   )
  );
  $wp_customize->add_control( new internet_service_provider_pro_Toggle_Switch_Custom_control( $wp_customize, 'internet_service_provider_pro_post_general_settings_post_share_twitter',
     array(
        'label' => esc_html__( 'Post Share Twitter', 'internet-service-provider-pro' ),
        'section' => 'internet_service_provider_pro_post_general_settings'
     )
  ));

  $wp_customize->add_setting('internet_service_provider_pro_single_post_page_related_post_heading',array(
    'default' => '',
    'sanitize_callback' => 'sanitize_text_field'
  ));
  $wp_customize->add_control('internet_service_provider_pro_single_post_page_related_post_heading',array(
    'label' => __('Add Heading','internet-service-provider-pro'),
    'section' => 'internet_service_provider_pro_main_banner',
    'setting' => 'internet_service_provider_pro_single_post_page_related_post_heading',
    'type'    => 'text'
  ));

  // Page Title layout

  $wp_customize->add_section('internet_service_provider_pro_post_product_general_settings',array(
    'title' => __('General Settings','internet-service-provider-pro'),
    'description'   => __('See section settings below and do check documentation too.','internet-service-provider-pro'),
    'priority'  => null,
    'panel' => 'internet_service_provider_pro_panel_id',
  ));

   $wp_customize->add_setting( 'internet_service_provider_pro_products_spinner_settings',
    array(
    'default' => '',
    'transport' => 'postMessage',
    'sanitize_callback' => 'internet_service_provider_pro_text_sanitization'
  ));
  $wp_customize->add_control( new VW_Themes_Seperator_custom_Control( $wp_customize, 'internet_service_provider_pro_products_spinner_settings',
    array(
    'label' => __('Spinner Settings','internet-service-provider-pro'),
    'section' => 'internet_service_provider_pro_post_product_general_settings'
  )));
  $wp_customize->add_setting( 'internet_service_provider_pro_products_spinner_enable',
   array(
      'default' => 1,
      'transport' => 'refresh',
      'sanitize_callback' => 'internet_service_provider_pro_switch_sanitization'
  ));
  $wp_customize->add_control( new internet_service_provider_pro_Toggle_Switch_Custom_control( $wp_customize, 'internet_service_provider_pro_products_spinner_enable',
     array(
        'label' => esc_html__( 'Spinner Enable/Disable', 'internet-service-provider-pro' ),
        'section' => 'internet_service_provider_pro_post_product_general_settings'
  )));
  $wp_customize->add_setting( 'internet_service_provider_pro_products_spinner_bgcolor', array(
    'default' => '',
    'sanitize_callback' => 'sanitize_hex_color'
  ));
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'internet_service_provider_pro_products_spinner_bgcolor', array(
    'label' => __('Spinner Background Color', 'internet-service-provider-pro'),
    'section' => 'internet_service_provider_pro_post_product_general_settings',
    'settings' => 'internet_service_provider_pro_products_spinner_bgcolor',
  )));
  $wp_customize->add_setting( 'internet_service_provider_pro_products_spinner_color_one', array(
    'default' => '',
    'sanitize_callback' => 'sanitize_hex_color'
  ));
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'internet_service_provider_pro_products_spinner_color_one', array(
    'label' => __('Spinner Color', 'internet-service-provider-pro'),
    'section' => 'internet_service_provider_pro_post_product_general_settings',
    'settings' => 'internet_service_provider_pro_products_spinner_color_one',
  )));

   /* --------- Spinner Opacity  ----------- */

  $wp_customize->add_setting('internet_service_provider_pro_spinner_opacity_color',array(
      'default'              => '1',
      'sanitize_callback' => 'internet_service_provider_pro_sanitize_choices'
  ));

  $wp_customize->add_control( 'internet_service_provider_pro_spinner_opacity_color', array(
    'label'       => esc_html__( 'Spinner Loader Opacity','internet-service-provider-pro' ),
    'section'     => 'internet_service_provider_pro_post_product_general_settings',
    'type'        => 'select',
    'settings'    => 'internet_service_provider_pro_spinner_opacity_color',
    'choices' => array(
        '0' =>  esc_attr('0','internet-service-provider-pro'),
        '0.1' =>  esc_attr('0.1','internet-service-provider-pro'),
        '0.2' =>  esc_attr('0.2','internet-service-provider-pro'),
        '0.3' =>  esc_attr('0.3','internet-service-provider-pro'),
        '0.4' =>  esc_attr('0.4','internet-service-provider-pro'),
        '0.5' =>  esc_attr('0.5','internet-service-provider-pro'),
        '0.6' =>  esc_attr('0.6','internet-service-provider-pro'),
        '0.7' =>  esc_attr('0.7','internet-service-provider-pro'),
        '0.8' =>  esc_attr('0.8','internet-service-provider-pro'),
        '0.9' =>  esc_attr('0.9','internet-service-provider-pro'),
        '1' =>  esc_attr('1','internet-service-provider-pro')
    ),
  ));

 $wp_customize->add_setting( 'internet_service_provider_pro_general_settings_scroll_top',
    array(
    'default' => '',
    'transport' => 'postMessage',
    'sanitize_callback' => 'internet_service_provider_pro_text_sanitization'
  ));
  $wp_customize->add_control( new VW_Themes_Seperator_custom_Control( $wp_customize, 'internet_service_provider_pro_general_settings_scroll_top',
    array(
    'label' => __('Scroll Top Settings','internet-service-provider-pro'),
    'section' => 'internet_service_provider_pro_post_product_general_settings'
  )));

   $wp_customize->add_setting( 'internet_service_provider_pro_genral_section_show_scroll_top',
   array(
      'default' => 1,
      'transport' => 'refresh',
      'sanitize_callback' => 'internet_service_provider_pro_switch_sanitization'
    ));
    $wp_customize->add_control( new internet_service_provider_pro_Toggle_Switch_Custom_control( $wp_customize, 'internet_service_provider_pro_genral_section_show_scroll_top',
         array(
            'label' => esc_html__( 'Show or Hide Scroll Top', 'internet-service-provider-pro' ),
            'section' => 'internet_service_provider_pro_post_product_general_settings'
    )));

    $wp_customize->add_setting(
      'internet_service_provider_pro_genral_section_show_scroll_top_icon',
      array(
        'default'     => '',
        'sanitize_callback' => 'sanitize_text_field'
      )
    );
    $wp_customize->add_control(
      new internet_service_provider_pro_Fontawesome_Icon_Chooser(
        $wp_customize,
        'internet_service_provider_pro_genral_section_show_scroll_top_icon',
        array(
          'settings'    => 'internet_service_provider_pro_genral_section_show_scroll_top_icon',
          'section'   => 'internet_service_provider_pro_post_product_general_settings',
          'type'      => 'icon',
          'label'     => esc_html__( 'Choose Scroll Top Icon', 'internet-service-provider-pro' ),
        )
      )
    );

  $wp_customize->add_setting( 'internet_service_provider_pro_general_scroll_top_icon_color', array(
    'default' => '',
    'sanitize_callback' => 'sanitize_hex_color'
  ));
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'internet_service_provider_pro_general_scroll_top_icon_color', array(
    'label' => __('Scroll Top Icon Color', 'internet-service-provider-pro'),
    'section' => 'internet_service_provider_pro_post_product_general_settings',
    'settings' => 'internet_service_provider_pro_general_scroll_top_icon_color',
  )));

  $wp_customize->add_setting( 'internet_service_provider_pro_general_scroll_top_bgcolor', array(
    'default' => '',
    'sanitize_callback' => 'sanitize_hex_color'
  ));
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'internet_service_provider_pro_general_scroll_top_bgcolor', array(
    'label' => __('Scroll Top Background Color', 'internet-service-provider-pro'),
    'section' => 'internet_service_provider_pro_post_product_general_settings',
    'settings' => 'internet_service_provider_pro_general_scroll_top_bgcolor',
  )));

  $wp_customize->add_setting( 'internet_service_provider_pro_general_scroll_top_border_color', array(
    'default' => '',
    'sanitize_callback' => 'sanitize_hex_color'
  ));
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'internet_service_provider_pro_general_scroll_top_border_color', array(
    'label' => __('Scroll Top Border Color', 'internet-service-provider-pro'),
    'section' => 'internet_service_provider_pro_post_product_general_settings',
    'settings' => 'internet_service_provider_pro_general_scroll_top_border_color',
  )));
  $wp_customize->add_setting( 'internet_service_provider_pro_general_scroll_top_hover_bgcolor', array(
    'default' => '',
    'sanitize_callback' => 'sanitize_hex_color'
  ));
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'internet_service_provider_pro_general_scroll_top_hover_bgcolor', array(
    'label' => __('Scroll Top Hover Background Color', 'internet-service-provider-pro'),
    'section' => 'internet_service_provider_pro_post_product_general_settings',
    'settings' => 'internet_service_provider_pro_general_scroll_top_hover_bgcolor',
  )));

   $wp_customize->add_setting('internet_service_provider_pro_scroll_top_layout',array(
        'default' => __('Right','internet-service-provider-pro'),
        'sanitize_callback' => 'sanitize_text_field'
  ));
  $wp_customize->add_control(new internet_service_provider_pro_Image_Radio_Control($wp_customize, 'internet_service_provider_pro_scroll_top_layout', array(
        'type' => 'select',
        'label' => __('Scroll Top Layouts','internet-service-provider-pro'),
        'section' => 'internet_service_provider_pro_post_product_general_settings',
        'choices' => array(
            'Left' => get_template_directory_uri().'/assets/images/layout1.png',
            'Center' => get_template_directory_uri().'/assets/images/layout2.png',
            'Right' => get_template_directory_uri().'/assets/images/layout3.png',
    ))));

//     $wp_customize->add_setting('internet_service_provider_pro_scroll_border_radius',array(
//       'default'   => '',
//       'sanitize_callback' => 'sanitize_textarea_field',
//   ));
//   $wp_customize->add_control('internet_service_provider_pro_scroll_border_radius',array(
//       'label' => __('Scroll To Top Border Radius','internet-service-provider-pro'),
//       'section'   => 'internet_service_provider_pro_post_product_general_settings',
//       'type'      => 'number'
//   ));
  $wp_customize->add_setting('internet_service_provider_pro_scroll_width',array(
      'default'   => '',
      'sanitize_callback' => 'sanitize_textarea_field',
  ));
  $wp_customize->add_control('internet_service_provider_pro_scroll_width',array(
      'label' => __('Scroll To Top Width','internet-service-provider-pro'),
      'section'   => 'internet_service_provider_pro_post_product_general_settings',
      'type'      => 'number'
  ));
  $wp_customize->add_setting('internet_service_provider_pro_scroll_height',array(
      'default'   => '',
      'sanitize_callback' => 'sanitize_textarea_field',
  ));
  $wp_customize->add_control('internet_service_provider_pro_scroll_height',array(
      'label' => __('Scroll To Top Height','internet-service-provider-pro'),
      'section'   => 'internet_service_provider_pro_post_product_general_settings',
      'type'      => 'number'
  ));
  $wp_customize->add_setting( 'internet_service_provider_pro_site_frame_settings',
    array(
    'default' => '',
    'transport' => 'postMessage',
    'sanitize_callback' => 'internet_service_provider_pro_text_sanitization'
  ));