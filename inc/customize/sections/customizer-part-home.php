<?php

// ------------- Main Banner -------------
  $wp_customize->add_section('internet_service_provider_pro_main_banner',array(
    'title' => __('Main Banner','internet-service-provider-pro'),
    'panel' => 'internet_service_provider_pro_panel_id',
  ));
  $wp_customize->add_setting('internet_service_provider_pro_main_banner_enable',
      array(
    'default' => 'Enable',
    'sanitize_callback' => 'internet_service_provider_pro_sanitize_choices'
  ));
  $wp_customize->add_control('internet_service_provider_pro_main_banner_enable',
    array(
    'type' => 'radio',
    'label' => __('Do you want this section', 'internet-service-provider-pro'),
    'section' => 'internet_service_provider_pro_main_banner',
    'choices' => array(
    'Enable' => __('Enable', 'internet-service-provider-pro'),
    'Disable' => __('Disable', 'internet-service-provider-pro')
  )));
  $wp_customize->selective_refresh->add_partial( 'internet_service_provider_pro_main_banner_enable', array(
    'selector' => '#about-us h3',
    'render_callback' => 'internet_service_provider_pro_customize_partial_internet_service_provider_pro_main_banner_enable',
  ));
  $wp_customize->add_setting( 'internet_service_provider_pro_main_banner_settings',
    array(
    'default' => '',
    'transport' => 'postMessage',
    'sanitize_callback' => 'internet_service_provider_pro_text_sanitization'
  ));
  $wp_customize->add_control( new VW_Themes_Seperator_custom_Control( $wp_customize, 'internet_service_provider_pro_main_banner_settings',
    array(
    'label' => __('Section Background Settings','internet-service-provider-pro'),
    'section' => 'internet_service_provider_pro_main_banner'
  )));
  $wp_customize->add_setting( 'internet_service_provider_pro_main_banner_bgcolor', array(
    'default' => '',
    'sanitize_callback' => 'sanitize_hex_color'
  ));
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'internet_service_provider_pro_main_banner_bgcolor', array(
    'label' => __('Section Background Color', 'internet-service-provider-pro'),
    'description'   => __('Either add background color or background image, if you add both background color will be top most priority','internet-service-provider-pro'),
    'section' => 'internet_service_provider_pro_main_banner',
    'settings' => 'internet_service_provider_pro_main_banner_bgcolor',
  )));
  $wp_customize->add_setting('internet_service_provider_pro_main_banner_bgimage',array(
    'default' => '',
    'sanitize_callback' => 'esc_url_raw',
  ));
  $wp_customize->add_control(
    new WP_Customize_Image_Control( $wp_customize,'internet_service_provider_pro_main_banner_bgimage',array(
    'label' => __('Section Background Image','internet-service-provider-pro'),
    'description' => __('Dimension 1600px * 430px','internet-service-provider-pro'),
    'section' => 'internet_service_provider_pro_main_banner',
    'settings' => 'internet_service_provider_pro_main_banner_bgimage'
  )));

  $wp_customize->add_setting( 'internet_service_provider_pro_main_banner_content_settings',
    array(
    'default' => '',
    'transport' => 'postMessage',
    'sanitize_callback' => 'internet_service_provider_pro_text_sanitization'
  ));
  $wp_customize->add_control( new VW_Themes_Seperator_custom_Control( $wp_customize, 'internet_service_provider_pro_main_banner_content_settings',
    array(
    'label' => __('Section Content Settings','internet-service-provider-pro'),
    'section' => 'internet_service_provider_pro_main_banner'
  )));

  $wp_customize->add_setting('internet_service_provider_pro_main_banner_tagline',array(
    'default' => '',
    'sanitize_callback' => 'sanitize_text_field'
  ));
  $wp_customize->add_control('internet_service_provider_pro_main_banner_tagline',array(
    'label' => __('Section Tagline','internet-service-provider-pro'),
    'section' => 'internet_service_provider_pro_main_banner',
    'setting' => 'internet_service_provider_pro_main_banner_tagline',
    'type'    => 'text'
  ));

  $wp_customize->add_setting('internet_service_provider_pro_main_banner_main_heading',array(
    'default' => '',
    'sanitize_callback' => 'sanitize_text_field'
  ));
  $wp_customize->add_control('internet_service_provider_pro_main_banner_main_heading',array(
    'label' => __('Section Main Heading','internet-service-provider-pro'),
    'section' => 'internet_service_provider_pro_main_banner',
    'setting' => 'internet_service_provider_pro_main_banner_main_heading',
    'type'    => 'text'
  ));
  $wp_customize->add_setting('internet_service_provider_pro_main_banner_main_heading2',array(
    'default' => '',
    'sanitize_callback' => 'sanitize_text_field'
  ));
  $wp_customize->add_control('internet_service_provider_pro_main_banner_main_heading2',array(
    'label' => '',
    'section' => 'internet_service_provider_pro_main_banner',
    'setting' => 'internet_service_provider_pro_main_banner_main_heading2',
    'type'    => 'text'
  ));

  $wp_customize->add_setting('internet_service_provider_pro_main_banner_text',array(
    'default' => '',
    'sanitize_callback' => 'sanitize_textarea_field'
  ));
  $wp_customize->add_control('internet_service_provider_pro_main_banner_text',array(
    'label' => __('Section Text','internet-service-provider-pro'),
    'section' => 'internet_service_provider_pro_main_banner',
    'setting' => 'internet_service_provider_pro_main_banner_text',
    'type'    => 'textarea'
  ));

  $wp_customize->add_setting( 'internet_service_provider_pro_main_banner_section_button',
    array(
    'default' => '',
    'transport' => 'postMessage',
    'sanitize_callback' => 'internet_service_provider_pro_text_sanitization'
  ));
  $wp_customize->add_control( new VW_Themes_Seperator_custom_Control( $wp_customize, 'internet_service_provider_pro_main_banner_section_button',
    array(
    'label' => __('Section Button','internet-service-provider-pro'),
    'section' => 'internet_service_provider_pro_main_banner'
  )));

  $wp_customize->add_setting('internet_service_provider_pro_main_banner_button_title',array(
    'default' => '',
    'sanitize_callback' => 'sanitize_text_field'
  ));
  $wp_customize->add_control('internet_service_provider_pro_main_banner_button_title',array(
    'label' => __('Section Button Title','internet-service-provider-pro'),
    'section' => 'internet_service_provider_pro_main_banner',
    'setting' => 'internet_service_provider_pro_main_banner_button_title',
    'type'    => 'text'
  ));

  
  $wp_customize->add_setting('internet_service_provider_pro_main_banner_button_url',array(
    'default' => '',
    'sanitize_callback' => 'sanitize_text_field'
  ));
  $wp_customize->add_control('internet_service_provider_pro_main_banner_button_url',array(
    'label' => __('Section Button Url','internet-service-provider-pro'),
    'section' => 'internet_service_provider_pro_main_banner',
    'setting' => 'internet_service_provider_pro_main_banner_button_url',
    'type'    => 'text'
  ));

  $wp_customize->add_setting( 'internet_service_provider_pro_main_banner_link',
    array(
    'default' => '',
    'transport' => 'postMessage',
    'sanitize_callback' => 'internet_service_provider_pro_text_sanitization'
  ));
  $wp_customize->add_control( new VW_Themes_Seperator_custom_Control( $wp_customize, 'internet_service_provider_pro_main_banner_link',
    array(
    'label' => __('Banner Link','internet-service-provider-pro'),
    'section' => 'internet_service_provider_pro_main_banner'
  )));

  $wp_customize->add_setting('internet_service_provider_pro_main_banner_link_text',array(
    'default' => '',
    'sanitize_callback' => 'sanitize_text_field'
  ));
  $wp_customize->add_control('internet_service_provider_pro_main_banner_link_text',array(
    'label' => __('Add Title','internet-service-provider-pro'),
    'section' => 'internet_service_provider_pro_main_banner',
    'setting' => 'internet_service_provider_pro_main_banner_link_text',
    'type'    => 'text'
  ));

  
  $wp_customize->add_setting('internet_service_provider_pro_main_banner_link_url',array(
    'default' => '',
    'sanitize_callback' => 'sanitize_text_field'
  ));
  $wp_customize->add_control('internet_service_provider_pro_main_banner_link_url',array(
    'label' => __('Add Url','internet-service-provider-pro'),
    'section' => 'internet_service_provider_pro_main_banner',
    'setting' => 'internet_service_provider_pro_main_banner_link_url',
    'type'    => 'text'
  ));

  $wp_customize->add_setting('internet_service_provider_pro_main_banner_rating_text',array(
    'default' => '',
    'sanitize_callback' => 'sanitize_text_field'
  ));
  $wp_customize->add_control('internet_service_provider_pro_main_banner_rating_text',array(
    'label' => __('Rating Title','internet-service-provider-pro'),
    'section' => 'internet_service_provider_pro_main_banner',
    'setting' => 'internet_service_provider_pro_main_banner_rating_text',
    'type'    => 'text'
  ));

  $wp_customize->add_setting( 'internet_service_provider_pro_main_banner_icon_box',
    array(
    'default' => '',
    'transport' => 'postMessage',
    'sanitize_callback' => 'internet_service_provider_pro_text_sanitization'
  ));
  $wp_customize->add_control( new VW_Themes_Seperator_custom_Control( $wp_customize, 'internet_service_provider_pro_main_banner_icon_box',
    array(
    'label' => __('Image Box','internet-service-provider-pro'),
    'section' => 'internet_service_provider_pro_main_banner'
  )));

  for($i=1;$i<=4;$i++)
  {

    $wp_customize->add_setting('internet_service_provider_pro_main_banner_customer_image'.$i,array(
      'default' => '',
      'sanitize_callback' => 'esc_url_raw',
    ));
    $wp_customize->add_control(
      new WP_Customize_Image_Control( $wp_customize,'internet_service_provider_pro_main_banner_customer_image'.$i,array(
      'label' => __('Customer Image','internet-service-provider-pro'),
      'section' => 'internet_service_provider_pro_main_banner',
      'settings' => 'internet_service_provider_pro_main_banner_customer_image'.$i
    )));
  }

  $wp_customize->add_setting('internet_service_provider_pro_main_banner_customer_number',array(
    'default' => '',
    'sanitize_callback' => 'sanitize_text_field'
  ));
  $wp_customize->add_control('internet_service_provider_pro_main_banner_customer_number',array(
    'label' => __('Add Number','internet-service-provider-pro'),
    'section' => 'internet_service_provider_pro_main_banner',
    'setting' => 'internet_service_provider_pro_main_banner_customer_number',
    'type'    => 'text'
  ));
  $wp_customize->add_setting('internet_service_provider_pro_main_banner_customer_text',array(
    'default' => '',
    'sanitize_callback' => 'sanitize_text_field'
  ));
  $wp_customize->add_control('internet_service_provider_pro_main_banner_customer_text',array(
    'label' => __('Add Text','internet-service-provider-pro'),
    'section' => 'internet_service_provider_pro_main_banner',
    'setting' => 'internet_service_provider_pro_main_banner_customer_text',
    'type'    => 'text'
  ));

  $wp_customize->add_setting('internet_service_provider_pro_main_banner_column_image',array(
    'default' => '',
    'sanitize_callback' => 'esc_url_raw',
  ));
  $wp_customize->add_control(
    new WP_Customize_Image_Control( $wp_customize,'internet_service_provider_pro_main_banner_column_image',array(
    'label' => __('Column Image','internet-service-provider-pro'),
    'section' => 'internet_service_provider_pro_main_banner',
    'settings' => 'internet_service_provider_pro_main_banner_column_image'
  )));

  $wp_customize->add_setting('internet_service_provider_pro_main_banner_column_image_pricing_text',array(
    'default' => '',
    'sanitize_callback' => 'sanitize_text_field'
  ));
  $wp_customize->add_control('internet_service_provider_pro_main_banner_column_image_pricing_text',array(
    'label' => __('Pricing','internet-service-provider-pro'),
    'section' => 'internet_service_provider_pro_main_banner',
    'setting' => 'internet_service_provider_pro_main_banner_column_image_pricing_text',
    'type'    => 'text'
  ));

  $wp_customize->add_setting('internet_service_provider_pro_main_banner_column_image_pricing_text2',array(
    'default' => '',
    'sanitize_callback' => 'sanitize_text_field'
  ));
  $wp_customize->add_control('internet_service_provider_pro_main_banner_column_image_pricing_text2',array(
    'label' => __('Pricing Text','internet-service-provider-pro'),
    'section' => 'internet_service_provider_pro_main_banner',
    'setting' => 'internet_service_provider_pro_main_banner_column_image_pricing_text2',
    'type'    => 'text'
  ));

  $wp_customize->add_setting('internet_service_provider_pro_main_banner_column_image_pricing_link',array(
    'default' => '',
    'sanitize_callback' => 'sanitize_text_field'
  ));
  $wp_customize->add_control('internet_service_provider_pro_main_banner_column_image_pricing_link',array(
    'label' => __('Add Link','internet-service-provider-pro'),
    'section' => 'internet_service_provider_pro_main_banner',
    'setting' => 'internet_service_provider_pro_main_banner_column_image_pricing_link',
    'type'    => 'text'
  ));

   $wp_customize->add_setting( 'internet_service_provider_pro_main_banner_icon_last_column',
    array(
    'default' => '',
    'transport' => 'postMessage',
    'sanitize_callback' => 'internet_service_provider_pro_text_sanitization'
  ));
  $wp_customize->add_control( new VW_Themes_Seperator_custom_Control( $wp_customize, 'internet_service_provider_pro_main_banner_icon_last_column',
    array(
    'label' => __('Last Column','internet-service-provider-pro'),
    'section' => 'internet_service_provider_pro_main_banner'
  )));

  $wp_customize->add_setting('internet_service_provider_pro_main_banner_last_column_text',array(
    'default' => '',
    'sanitize_callback' => 'sanitize_text_field'
  ));
  $wp_customize->add_control('internet_service_provider_pro_main_banner_last_column_text',array(
    'label' => __('Last Column','internet-service-provider-pro'),
    'section' => 'internet_service_provider_pro_main_banner',
    'setting' => 'internet_service_provider_pro_main_banner_last_column_text',
    'type'    => 'text'
  ));

  $wp_customize->add_setting('internet_service_provider_pro_main_banner_column_image2',array(
    'default' => '',
    'sanitize_callback' => 'esc_url_raw',
  ));
  $wp_customize->add_control(
    new WP_Customize_Image_Control( $wp_customize,'internet_service_provider_pro_main_banner_column_image2',array(
    'label' => __('Column Image','internet-service-provider-pro'),
    'section' => 'internet_service_provider_pro_main_banner',
    'settings' => 'internet_service_provider_pro_main_banner_column_image2'
  )));

  $wp_customize->add_setting('internet_service_provider_pro_main_banner_last_column_text2',array(
    'default' => '',
    'sanitize_callback' => 'sanitize_text_field'
  ));
  $wp_customize->add_control('internet_service_provider_pro_main_banner_last_column_text2',array(
    'label' => __('Last Column','internet-service-provider-pro'),
    'section' => 'internet_service_provider_pro_main_banner',
    'setting' => 'internet_service_provider_pro_main_banner_last_column_text2',
    'type'    => 'text'
  ));

  $wp_customize->add_setting('internet_service_provider_pro_main_banner_vector_image',array(
    'default' => '',
    'sanitize_callback' => 'esc_url_raw',
  ));
  $wp_customize->add_control(
    new WP_Customize_Image_Control( $wp_customize,'internet_service_provider_pro_main_banner_vector_image',array(
    'label' => __('Vector Image','internet-service-provider-pro'),
    'section' => 'internet_service_provider_pro_main_banner',
    'settings' => 'internet_service_provider_pro_main_banner_vector_image'
  )));

    
  $wp_customize->add_setting( 'internet_service_provider_pro_main_banner_color_settings',
    array(
    'default' => '',
    'transport' => 'postMessage',
    'sanitize_callback' => 'internet_service_provider_pro_text_sanitization'
  ));
  $wp_customize->add_control( new VW_Themes_Seperator_custom_Control( $wp_customize, 'internet_service_provider_pro_main_banner_color_settings',
  array(
    'label' => __('Section Color & Typography','internet-service-provider-pro'),
    'section' => 'internet_service_provider_pro_main_banner'
  )));

  $wp_customize->add_setting( 'internet_service_provider_pro_main_banner_tagline_ct_pallete',
    array(
      'default' => '',
      'transport' => 'postMessage',
      'sanitize_callback' => 'internet_service_provider_pro_text_sanitization'
  ));
  $wp_customize->add_control( new VW_Themes_Seperator_custom_Control( $wp_customize, 'internet_service_provider_pro_main_banner_tagline_ct_pallete',
    array(
    'label' => __('Tagline Typography ','internet-service-provider-pro'),
    'section' => 'internet_service_provider_pro_main_banner'
  )));

  $wp_customize->add_setting( 'internet_service_provider_pro_main_banner_tagline_color', array(
    'default' => '',
    'sanitize_callback' => 'sanitize_hex_color'
  ));
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'internet_service_provider_pro_main_banner_tagline_color', array(
    'label' => __('Color', 'internet-service-provider-pro'),
    'section' => 'internet_service_provider_pro_main_banner',
    'settings' => 'internet_service_provider_pro_main_banner_tagline_color',
  )));

  $wp_customize->add_setting('internet_service_provider_pro_main_banner_tagline_font_family',array(
    'default' => '',
    'capability' => 'edit_theme_options',
    'sanitize_callback' => 'sanitize_text_field'
  ));
  $wp_customize->add_control(
    'internet_service_provider_pro_main_banner_tagline_font_family', array(
    'section'  => 'internet_service_provider_pro_main_banner',
    'label'    => __('Font Family','internet-service-provider-pro'),
    'type'     => 'select',
    'choices'  => $font_array,
  ));

  $wp_customize->add_setting('internet_service_provider_pro_main_banner_tagline_font_size',array(
    'default' => '',
    'sanitize_callback' => 'sanitize_text_field'
  ));
  $wp_customize->add_control('internet_service_provider_pro_main_banner_tagline_font_size',array(
    'label' => __('Font Size','internet-service-provider-pro'),
    
    'section' => 'internet_service_provider_pro_main_banner',
    'setting' => 'internet_service_provider_pro_main_banner_tagline_font_size',
    'type'    => 'number'
  ));

  $wp_customize->add_setting( 'internet_service_provider_pro_main_banner_main_heading_ct_pallete',
    array(
      'default' => '',
      'transport' => 'postMessage',
      'sanitize_callback' => 'internet_service_provider_pro_text_sanitization'
  ));
  $wp_customize->add_control( new VW_Themes_Seperator_custom_Control( $wp_customize, 'internet_service_provider_pro_main_banner_main_heading_ct_pallete',
    array(
    'label' => __('Main Heading Typography ','internet-service-provider-pro'),
    'section' => 'internet_service_provider_pro_main_banner'
  )));

  $wp_customize->add_setting( 'internet_service_provider_pro_main_banner_main_heading_color', array(
    'default' => '',
    'sanitize_callback' => 'sanitize_hex_color'
  ));
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'internet_service_provider_pro_main_banner_main_heading_color', array(
    'label' => __('Color', 'internet-service-provider-pro'),
    'section' => 'internet_service_provider_pro_main_banner',
    'settings' => 'internet_service_provider_pro_main_banner_main_heading_color',
  )));
  $wp_customize->add_setting( 'internet_service_provider_pro_main_banner_main_heading_color2', array(
    'default' => '',
    'sanitize_callback' => 'sanitize_hex_color'
  ));
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'internet_service_provider_pro_main_banner_main_heading_color2', array(
    'label' => '',
    'section' => 'internet_service_provider_pro_main_banner',
    'settings' => 'internet_service_provider_pro_main_banner_main_heading_color2',
  )));

  $wp_customize->add_setting('internet_service_provider_pro_main_banner_main_heading_font_family',array(
    'default' => '',
    'capability' => 'edit_theme_options',
    'sanitize_callback' => 'sanitize_text_field'
  ));
  $wp_customize->add_control(
    'internet_service_provider_pro_main_banner_main_heading_font_family', array(
    'section'  => 'internet_service_provider_pro_main_banner',
    'label'    => __('Font Family','internet-service-provider-pro'),
    'type'     => 'select',
    'choices'  => $font_array,
  ));

  $wp_customize->add_setting('internet_service_provider_pro_main_banner_main_heading_font_size',array(
    'default' => '',
    'sanitize_callback' => 'sanitize_text_field'
  ));
  $wp_customize->add_control('internet_service_provider_pro_main_banner_main_heading_font_size',array(
    'label' => __('Font Size','internet-service-provider-pro'),
    
    'section' => 'internet_service_provider_pro_main_banner',
    'setting' => 'internet_service_provider_pro_main_banner_main_heading_font_size',
    'type'    => 'number'
  ));

  $wp_customize->add_setting( 'internet_service_provider_pro_main_banner_text_ct_pallete',
    array(
      'default' => '',
      'transport' => 'postMessage',
      'sanitize_callback' => 'internet_service_provider_pro_text_sanitization'
  ));
  $wp_customize->add_control( new VW_Themes_Seperator_custom_Control( $wp_customize, 'internet_service_provider_pro_main_banner_text_ct_pallete',
    array(
    'label' => __('Section Text Typography ','internet-service-provider-pro'),
    'section' => 'internet_service_provider_pro_main_banner'
  )));

  $wp_customize->add_setting( 'internet_service_provider_pro_main_banner_text_color', array(
    'default' => '',
    'sanitize_callback' => 'sanitize_hex_color'
  ));
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'internet_service_provider_pro_main_banner_text_color', array(
    'label' => __('Color', 'internet-service-provider-pro'),
    'section' => 'internet_service_provider_pro_main_banner',
    'settings' => 'internet_service_provider_pro_main_banner_text_color',
  )));
  $wp_customize->add_setting('internet_service_provider_pro_main_banner_text_font_family',array(
    'default' => '',
    'capability' => 'edit_theme_options',
    'sanitize_callback' => 'sanitize_text_field'
  ));
  $wp_customize->add_control(
    'internet_service_provider_pro_main_banner_text_font_family', array(
    'section'  => 'internet_service_provider_pro_main_banner',
    'label'    => __('Font Family','internet-service-provider-pro'),
    'type'     => 'select',
    'choices'  => $font_array,
  ));

  $wp_customize->add_setting('internet_service_provider_pro_main_banner_text_font_size',array(
    'default' => '',
    'sanitize_callback' => 'sanitize_text_field'
  ));
  $wp_customize->add_control('internet_service_provider_pro_main_banner_text_font_size',array(
    'label' => __('Font Size','internet-service-provider-pro'),
    
    'section' => 'internet_service_provider_pro_main_banner',
    'setting' => 'internet_service_provider_pro_main_banner_text_font_size',
    'type'    => 'number'
  ));

  $wp_customize->add_setting( 'internet_service_provider_pro_main_banner_button_ct_pallete',
  array(
    'default' => '',
    'transport' => 'postMessage',
    'sanitize_callback' => 'internet_service_provider_pro_text_sanitization'
  ));
  $wp_customize->add_control( new VW_Themes_Seperator_custom_Control( $wp_customize, 'internet_service_provider_pro_main_banner_button_ct_pallete',
      array(
      'label' => __('Section Button Typography ','internet-service-provider-pro'),
      'section' => 'internet_service_provider_pro_main_banner'
  )));

  $wp_customize->add_setting( 'internet_service_provider_pro_main_banner_button_color', array(
      'default' => '',
      'sanitize_callback' => 'sanitize_hex_color'
  ));
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'internet_service_provider_pro_main_banner_button_color', array(
      'label' => __('Color', 'internet-service-provider-pro'),
      'section' => 'internet_service_provider_pro_main_banner',
      'settings' => 'internet_service_provider_pro_main_banner_button_color',
  )));
  $wp_customize->add_setting('internet_service_provider_pro_main_banner_button_font_family',array(
      'default' => '',
      'capability' => 'edit_theme_options',
      'sanitize_callback' => 'sanitize_text_field'
  ));
  $wp_customize->add_control(
      'internet_service_provider_pro_main_banner_button_font_family', array(
      'section'  => 'internet_service_provider_pro_main_banner',
      'label'    => __('Font Family','internet-service-provider-pro'),
      'type'     => 'select',
      'choices'  => $font_array,
  ));

  $wp_customize->add_setting('internet_service_provider_pro_main_banner_button_font_size',array(
      'default' => '',
      'sanitize_callback' => 'sanitize_text_field'
  ));
  $wp_customize->add_control('internet_service_provider_pro_main_banner_button_font_size',array(
      'label' => __('Font Size','internet-service-provider-pro'),
      
      'section' => 'internet_service_provider_pro_main_banner',
      'setting' => 'internet_service_provider_pro_main_banner_button_font_size',
      'type'    => 'number'
  ));

  $wp_customize->add_setting( 'internet_service_provider_pro_main_banner_button_icon_color', array(
      'default' => '',
      'sanitize_callback' => 'sanitize_hex_color'
  ));
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'internet_service_provider_pro_main_banner_button_icon_color', array(
      'label' => __('Icon Color', 'internet-service-provider-pro'),
      'section' => 'internet_service_provider_pro_main_banner',
      'settings' => 'internet_service_provider_pro_main_banner_button_icon_color',
  )));

  $wp_customize->add_setting( 'internet_service_provider_pro_main_banner_button_icon_bgcolor', array(
      'default' => '',
      'sanitize_callback' => 'sanitize_hex_color'
  ));
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'internet_service_provider_pro_main_banner_button_icon_bgcolor', array(
      'label' => __('Icon Border Color', 'internet-service-provider-pro'),
      'section' => 'internet_service_provider_pro_main_banner',
      'settings' => 'internet_service_provider_pro_main_banner_button_icon_bgcolor',
  )));

  $wp_customize->add_setting( 'internet_service_provider_pro_main_banner_button_icon_hover_color', array(
      'default' => '',
      'sanitize_callback' => 'sanitize_hex_color'
  ));
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'internet_service_provider_pro_main_banner_button_icon_hover_color', array(
      'label' => __('Icon Hover Color', 'internet-service-provider-pro'),
      'section' => 'internet_service_provider_pro_main_banner',
      'settings' => 'internet_service_provider_pro_main_banner_button_icon_hover_color',
  )));

  $wp_customize->add_setting( 'internet_service_provider_pro_main_banner_button_icon_hover_bgcolor', array(
      'default' => '',
      'sanitize_callback' => 'sanitize_hex_color'
  ));
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'internet_service_provider_pro_main_banner_button_icon_hover_bgcolor', array(
      'label' => __('Icon Hover Background Color', 'internet-service-provider-pro'),
      'section' => 'internet_service_provider_pro_main_banner',
      'settings' => 'internet_service_provider_pro_main_banner_button_icon_hover_bgcolor',
  )));

  $wp_customize->add_setting( 'internet_service_provider_pro_main_banner_button_text_color_hover', array(
      'default' => '',
      'sanitize_callback' => 'sanitize_hex_color'
  ));
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'internet_service_provider_pro_main_banner_button_text_color_hover', array(
      'label' => __('Hover Text Color', 'internet-service-provider-pro'),
      'section' => 'internet_service_provider_pro_main_banner',
      'settings' => 'internet_service_provider_pro_main_banner_button_text_color_hover',
  )));

  $wp_customize->add_setting( 'internet_service_provider_pro_main_banner_link_bgcolor', array(
      'default' => '',
      'sanitize_callback' => 'sanitize_hex_color'
  ));
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'internet_service_provider_pro_main_banner_link_bgcolor', array(
      'label' => __('Background Color', 'internet-service-provider-pro'),
      'section' => 'internet_service_provider_pro_main_banner',
      'settings' => 'internet_service_provider_pro_main_banner_link_bgcolor',
  )));

  $wp_customize->add_setting( 'internet_service_provider_pro_main_banner_box_bgcolor', array(
      'default' => '',
      'sanitize_callback' => 'sanitize_hex_color'
  ));
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'internet_service_provider_pro_main_banner_box_bgcolor', array(
      'label' => __('Content Box Background Color', 'internet-service-provider-pro'),
      'section' => 'internet_service_provider_pro_main_banner',
      'settings' => 'internet_service_provider_pro_main_banner_box_bgcolor',
  )));


  $wp_customize->add_setting('internet_service_provider_pro_main_banner_spacing_left_desktop', array(
    'sanitize_callback' => 'internet_service_provider_pro_sanitize_number_blank',
  ));

  $wp_customize->add_setting('internet_service_provider_pro_main_banner_spacing_top_desktop', array(
    'sanitize_callback' => 'internet_service_provider_pro_sanitize_number_blank',
  ));

  $wp_customize->add_setting('internet_service_provider_pro_main_banner_spacing_bottom_desktop', array(
    'sanitize_callback' => 'internet_service_provider_pro_sanitize_number_blank',
  ));

  $wp_customize->add_setting('internet_service_provider_pro_main_banner_spacing_right_desktop', array(
    'sanitize_callback' => 'internet_service_provider_pro_sanitize_number_blank',
  ));

  $wp_customize->add_control(new VW_Dimensions_Control($wp_customize, 'internet_service_provider_pro_main_banner_spacing', array(
    'section' => 'internet_service_provider_pro_main_banner',
    'label' => esc_html__('Section Spacing(px)', 'internet-service-provider-pro'),
    'settings' => array(
        'desktop_left' => 'internet_service_provider_pro_main_banner_spacing_left_desktop',
        'desktop_top' => 'internet_service_provider_pro_main_banner_spacing_top_desktop',
        'desktop_bottom' => 'internet_service_provider_pro_main_banner_spacing_bottom_desktop',
      'desktop_right' => 'internet_service_provider_pro_main_banner_spacing_right_desktop'
  ),
    'input_attrs' => array(
        'min' => 0,
        'max' => 100,
        'step' => 1,
    ),
    'responsive' => false
  )));

  // ----------- Partners --------------
  $wp_customize->add_section('internet_service_provider_pro_partner',array(
    'title' => __('Partner','internet-service-provider-pro'),
    'panel' => 'internet_service_provider_pro_panel_id',
  ));

  $wp_customize->add_setting('internet_service_provider_pro_partner_enable',
      array(
    'default' => 'Enable',
    'sanitize_callback' => 'internet_service_provider_pro_sanitize_choices'
  ));
  $wp_customize->add_control('internet_service_provider_pro_partner_enable',
    array(
    'type' => 'radio',
    'label' => __('Do you want this section', 'internet-service-provider-pro'),
    'section' => 'internet_service_provider_pro_partner',
    'choices' => array(
    'Enable' => __('Enable', 'internet-service-provider-pro'),
    'Disable' => __('Disable', 'internet-service-provider-pro')
  )));
  $wp_customize->selective_refresh->add_partial( 'internet_service_provider_pro_partner_enable', array(
    'selector' => '#our-partner .container',
    'render_callback' => 'internet_service_provider_pro_customize_partial_internet_service_provider_pro_partner_enable',
  ));

  $wp_customize->add_setting( 'internet_service_provider_pro_partner_content_settings',
    array(
    'default' => '',
    'transport' => 'postMessage',
    'sanitize_callback' => 'internet_service_provider_pro_text_sanitization'
  ));
  $wp_customize->add_control( new internet_service_provider_pro_Seperator_custom_Control( $wp_customize, 'internet_service_provider_pro_partner_content_settings',
    array(
    'label' => __('Content Settings','internet-service-provider-pro'),
    'section' => 'internet_service_provider_pro_partner'
  )));

  $wp_customize->add_setting('internet_service_provider_pro_partner_heading',array(
    'default' => '',
    'sanitize_callback' => 'sanitize_text_field'
  ));
  $wp_customize->add_control('internet_service_provider_pro_partner_heading',array(
    'label' => __('Heading','internet-service-provider-pro'),
    'section' => 'internet_service_provider_pro_partner',
    'setting' => 'internet_service_provider_pro_partner_heading',
    'type'    => 'text'
  ));

  $wp_customize->add_setting('internet_service_provider_pro_partner_number',array(
    'default' => '',
    'sanitize_callback' => 'sanitize_text_field'
  ));
  $wp_customize->add_control('internet_service_provider_pro_partner_number',array(
    'label' => __('No of partner to show','internet-service-provider-pro'),
    'section' => 'internet_service_provider_pro_partner',
    'setting' => 'internet_service_provider_pro_partner_number',
    'type'    => 'number'
  ));

  $brand_no=get_theme_mod('internet_service_provider_pro_partner_number');
  for($i=1;$i<=$brand_no;$i++)
  {
    $wp_customize->add_setting( 'internet_service_provider_pro_partner_box_settings'.$i,
      array(
      'default' => '',
      'transport' => 'postMessage',
      'sanitize_callback' => 'internet_service_provider_pro_text_sanitization'
    ));
    $wp_customize->add_control( new internet_service_provider_pro_Seperator_custom_Control( $wp_customize, 'internet_service_provider_pro_partner_box_settings'.$i,
      array(
      'label' => __('partner ','internet-service-provider-pro') .$i,
      'section' => 'internet_service_provider_pro_partner'
    )));

    $wp_customize->add_setting('internet_service_provider_pro_partner_image'.$i,array(
      'default' => '',
      'sanitize_callback' => 'esc_url_raw',
    ));
    $wp_customize->add_control(
      new WP_Customize_Image_Control( $wp_customize,'internet_service_provider_pro_partner_image'.$i,array(
      'label' => __('Image ','internet-service-provider-pro'),
      'section' => 'internet_service_provider_pro_partner',
      'settings' => 'internet_service_provider_pro_partner_image'.$i
    )));

    // $wp_customize->add_setting('internet_service_provider_pro_partner_hover_image'.$i,array(
    //   'default' => '',
    //   'sanitize_callback' => 'esc_url_raw',
    // ));
    // $wp_customize->add_control(
    //   new WP_Customize_Image_Control( $wp_customize,'internet_service_provider_pro_partner_hover_image'.$i,array(
    //   'label' => __('Hover Image ','internet-service-provider-pro'),
    //   'section' => 'internet_service_provider_pro_partner',
    //   'settings' => 'internet_service_provider_pro_partner_hover_image'.$i
    // )));

    $wp_customize->add_setting('internet_service_provider_pro_partner_url'. $i, array(
        'default' => '',
        'sanitize_callback' => 'esc_url_raw'
    ));
    $wp_customize->add_control('internet_service_provider_pro_partner_url'. $i, array(
        'label' => __('Link', 'internet-service-provider-pro'),
        'section' => 'internet_service_provider_pro_partner',
        'type' => 'url'
    ));
  }

  $wp_customize->add_setting( 'internet_service_provider_pro_partner_carousel_loop',
   array(
      'default' => 1,
      'transport' => 'refresh',
      'sanitize_callback' => 'internet_service_provider_pro_switch_sanitization'
  )); 
  $wp_customize->add_control( new internet_service_provider_pro_Toggle_Switch_Custom_control( $wp_customize, 'internet_service_provider_pro_partner_carousel_loop',
     array(
        'label' => esc_html__( 'Carousel Loop', 'internet-service-provider-pro' ),
        'section' => 'internet_service_provider_pro_partner'
  )));

  $wp_customize->add_setting('internet_service_provider_pro_partner_carousel_speed',array(
    'default' => '',
    'sanitize_callback' => 'sanitize_text_field'
  ));
  $wp_customize->add_control('internet_service_provider_pro_partner_carousel_speed',array(
    'label' => __('Carousel Speed','internet-service-provider-pro'),
    'description'=>__('Ex. 1000 for One second','internet-service-provider-pro'),
    'section' => 'internet_service_provider_pro_partner',
    'setting' => 'internet_service_provider_pro_partner_carousel_speed',
    'type'    => 'number'
  ));

  $wp_customize->add_setting( 'internet_service_provider_pro_partner_color_settings',
    array(
    'default' => '',
    'transport' => 'postMessage',
    'sanitize_callback' => 'internet_service_provider_pro_text_sanitization'
  ));
  $wp_customize->add_control( new internet_service_provider_pro_Seperator_custom_Control( $wp_customize, 'internet_service_provider_pro_partner_color_settings',
  array(
    'label' => __('Section Color & Typography','internet-service-provider-pro'),
    'section' => 'internet_service_provider_pro_partner'
  )));

  $wp_customize->add_setting( 'internet_service_provider_pro_partner_tagline_ct_pallete',
    array(
      'default' => '',
      'transport' => 'postMessage',
      'sanitize_callback' => 'internet_service_provider_pro_text_sanitization'
  ));
  $wp_customize->add_control( new internet_service_provider_pro_Seperator_custom_Control( $wp_customize, 'internet_service_provider_pro_partner_tagline_ct_pallete',
    array(
    'label' => __('Tagline Typography ','internet-service-provider-pro'),
    'section' => 'internet_service_provider_pro_partner'
  )));

  $wp_customize->add_setting( 'internet_service_provider_pro_partner_tagline_color', array(
    'default' => '',
    'sanitize_callback' => 'sanitize_hex_color'
  ));
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'internet_service_provider_pro_partner_tagline_color', array(
    'label' => __('Color', 'internet-service-provider-pro'),
    'section' => 'internet_service_provider_pro_partner',
    'settings' => 'internet_service_provider_pro_partner_tagline_color',
  )));
  $wp_customize->add_setting('internet_service_provider_pro_partner_tagline_font_family',array(
    'default' => '',
    'capability' => 'edit_theme_options',
    'sanitize_callback' => 'sanitize_text_field'
  ));
  $wp_customize->add_control(
    'internet_service_provider_pro_partner_tagline_font_family', array(
    'section'  => 'internet_service_provider_pro_partner',
    'label'    => __('Font Family','internet-service-provider-pro'),
    'type'     => 'select',
    'choices'  => $font_array,
  ));

  $wp_customize->add_setting('internet_service_provider_pro_partner_tagline_font_size',array(
    'default' => '',
    'sanitize_callback' => 'sanitize_text_field'
  ));
  $wp_customize->add_control('internet_service_provider_pro_partner_tagline_font_size',array(
    'label' => __('Font Size','internet-service-provider-pro'),
    
    'section' => 'internet_service_provider_pro_partner',
    'setting' => 'internet_service_provider_pro_partner_tagline_font_size',
    'type'    => 'number'
  ));

  $wp_customize->add_setting( 'internet_service_provider_pro_partner_main_heading_ct_pallete',
    array(
      'default' => '',
      'transport' => 'postMessage',
      'sanitize_callback' => 'internet_service_provider_pro_text_sanitization'
  ));
  $wp_customize->add_control( new internet_service_provider_pro_Seperator_custom_Control( $wp_customize, 'internet_service_provider_pro_partner_main_heading_ct_pallete',
    array(
    'label' => __('Main Heading Typography ','internet-service-provider-pro'),
    'section' => 'internet_service_provider_pro_partner'
  )));

  $wp_customize->add_setting( 'internet_service_provider_pro_partner_main_heading_color', array(
    'default' => '',
    'sanitize_callback' => 'sanitize_hex_color'
  ));
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'internet_service_provider_pro_partner_main_heading_color', array(
    'label' => __('Color', 'internet-service-provider-pro'),
    'section' => 'internet_service_provider_pro_partner',
    'settings' => 'internet_service_provider_pro_partner_main_heading_color',
  )));
  $wp_customize->add_setting('internet_service_provider_pro_partner_main_heading_font_family',array(
    'default' => '',
    'capability' => 'edit_theme_options',
    'sanitize_callback' => 'sanitize_text_field'
  ));
  $wp_customize->add_control(
    'internet_service_provider_pro_partner_main_heading_font_family', array(
    'section'  => 'internet_service_provider_pro_partner',
    'label'    => __('Font Family','internet-service-provider-pro'),
    'type'     => 'select',
    'choices'  => $font_array,
  ));

  $wp_customize->add_setting('internet_service_provider_pro_partner_main_heading_font_size',array(
    'default' => '',
    'sanitize_callback' => 'sanitize_text_field'
  ));
  $wp_customize->add_control('internet_service_provider_pro_partner_main_heading_font_size',array(
    'label' => __('Font Size','internet-service-provider-pro'),
    
    'section' => 'internet_service_provider_pro_partner',
    'setting' => 'internet_service_provider_pro_partner_main_heading_font_size',
    'type'    => 'number'
  ));

  $wp_customize->add_setting( 'internet_service_provider_pro_partner_main_heading_box_bgcolor', array(
    'default' => '',
    'sanitize_callback' => 'sanitize_hex_color'
  ));
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'internet_service_provider_pro_partner_main_heading_box_bgcolor', array(
    'label' => __('Box Background Color', 'internet-service-provider-pro'),
    'section' => 'internet_service_provider_pro_partner',
    'settings' => 'internet_service_provider_pro_partner_main_heading_box_bgcolor',
  )));

  $wp_customize->add_setting( 'internet_service_provider_pro_partner_main_heading_box_border_color', array(
    'default' => '',
    'sanitize_callback' => 'sanitize_hex_color'
  ));
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'internet_service_provider_pro_partner_main_heading_box_border_color', array(
    'label' => __('Border Color', 'internet-service-provider-pro'),
    'section' => 'internet_service_provider_pro_partner',
    'settings' => 'internet_service_provider_pro_partner_main_heading_box_border_color',
  )));
  $wp_customize->add_setting( 'internet_service_provider_pro_partner_main_heading_box_hover_bgcolor', array(
    'default' => '',
    'sanitize_callback' => 'sanitize_hex_color'
  ));
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'internet_service_provider_pro_partner_main_heading_box_hover_bgcolor', array(
    'label' => __('Box Hover Background Color', 'internet-service-provider-pro'),
    'section' => 'internet_service_provider_pro_partner',
    'settings' => 'internet_service_provider_pro_partner_main_heading_box_hover_bgcolor',
  )));

  $wp_customize->add_setting('internet_service_provider_pro_partner_spacing_left_desktop', array(
      'sanitize_callback' => 'internet_service_provider_pro_sanitize_number_blank',
  ));

  $wp_customize->add_setting('internet_service_provider_pro_partner_spacing_top_desktop', array(
      'sanitize_callback' => 'internet_service_provider_pro_sanitize_number_blank',
  ));

  $wp_customize->add_setting('internet_service_provider_pro_partner_spacing_bottom_desktop', array(
      'sanitize_callback' => 'internet_service_provider_pro_sanitize_number_blank',
  ));

  $wp_customize->add_setting('internet_service_provider_pro_partner_spacing_right_desktop', array(
      'sanitize_callback' => 'internet_service_provider_pro_sanitize_number_blank',
  ));

  $wp_customize->add_control(new VW_Dimensions_Control($wp_customize, 'internet_service_provider_pro_partner_spacing', array(
      'section' => 'internet_service_provider_pro_partner',
      'label' => esc_html__('Section Spacing(px)', 'internet-service-provider-pro'),
      'settings' => array(
          'desktop_left' => 'internet_service_provider_pro_partner_spacing_left_desktop',
          'desktop_top' => 'internet_service_provider_pro_partner_spacing_top_desktop',
          'desktop_bottom' => 'internet_service_provider_pro_partner_spacing_bottom_desktop',
          'desktop_right' => 'internet_service_provider_pro_partner_spacing_right_desktop'
      ),
      'input_attrs' => array(
          'min' => 0,
          'max' => 100,
          'step' => 1,
      ),
      'responsive' => false
  )));

  // ------------- About Us -------------
  $wp_customize->add_section('internet_service_provider_pro_about_us',array(
    'title' => __('About Us','internet-service-provider-pro'),
    'panel' => 'internet_service_provider_pro_panel_id',
  ));
  $wp_customize->add_setting('internet_service_provider_pro_about_us_enable',
      array(
    'default' => 'Enable',
    'sanitize_callback' => 'internet_service_provider_pro_sanitize_choices'
  ));
  $wp_customize->add_control('internet_service_provider_pro_about_us_enable',
    array(
    'type' => 'radio',
    'label' => __('Do you want this section', 'internet-service-provider-pro'),
    'section' => 'internet_service_provider_pro_about_us',
    'choices' => array(
    'Enable' => __('Enable', 'internet-service-provider-pro'),
    'Disable' => __('Disable', 'internet-service-provider-pro')
  )));
  $wp_customize->selective_refresh->add_partial( 'internet_service_provider_pro_about_us_enable', array(
    'selector' => '#about-us h3',
    'render_callback' => 'internet_service_provider_pro_customize_partial_internet_service_provider_pro_about_us_enable',
  ));
  $wp_customize->add_setting( 'internet_service_provider_pro_about_us_settings',
    array(
    'default' => '',
    'transport' => 'postMessage',
    'sanitize_callback' => 'internet_service_provider_pro_text_sanitization'
  ));
  $wp_customize->add_control( new VW_Themes_Seperator_custom_Control( $wp_customize, 'internet_service_provider_pro_about_us_settings',
    array(
    'label' => __('Section Background Settings','internet-service-provider-pro'),
    'section' => 'internet_service_provider_pro_about_us'
  )));
  $wp_customize->add_setting( 'internet_service_provider_pro_about_us_bgcolor', array(
    'default' => '',
    'sanitize_callback' => 'sanitize_hex_color'
  ));
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'internet_service_provider_pro_about_us_bgcolor', array(
    'label' => __('Section Background Color', 'internet-service-provider-pro'),
    'description'   => __('Either add background color or background image, if you add both background color will be top most priority','internet-service-provider-pro'),
    'section' => 'internet_service_provider_pro_about_us',
    'settings' => 'internet_service_provider_pro_about_us_bgcolor',
  )));
  $wp_customize->add_setting('internet_service_provider_pro_about_us_bgimage',array(
    'default' => '',
    'sanitize_callback' => 'esc_url_raw',
  ));
  $wp_customize->add_control(
    new WP_Customize_Image_Control( $wp_customize,'internet_service_provider_pro_about_us_bgimage',array(
    'label' => __('Section Background Image','internet-service-provider-pro'),
    'description' => __('Dimension 1600px * 430px','internet-service-provider-pro'),
    'section' => 'internet_service_provider_pro_about_us',
    'settings' => 'internet_service_provider_pro_about_us_bgimage'
  )));

  $wp_customize->add_setting( 'internet_service_provider_pro_about_us_bgimage_setting', array(
      'default'         => '',
      'sanitize_callback' => 'internet_service_provider_pro_sanitize_choices'
  ));
  $wp_customize->add_control('internet_service_provider_pro_about_us_bgimage_setting', array(
      'type'      => 'radio',
      'label'     => __('Choose image option', 'internet-service-provider-pro'),
      'section'   => 'internet_service_provider_pro_about_us',
      'choices'   => array(
        'bg-fixed'      => __( 'Fixed', 'internet-service-provider-pro' ),
        'bg-scroll'      => __( 'Scroll', 'internet-service-provider-pro' ),                    
  )));

  $wp_customize->add_setting( 'internet_service_provider_pro_about_us_content_settings',
    array(
    'default' => '',
    'transport' => 'postMessage',
    'sanitize_callback' => 'internet_service_provider_pro_text_sanitization'
  ));
  $wp_customize->add_control( new VW_Themes_Seperator_custom_Control( $wp_customize, 'internet_service_provider_pro_about_us_content_settings',
    array(
    'label' => __('Section Content Settings','internet-service-provider-pro'),
    'section' => 'internet_service_provider_pro_about_us'
  )));

  $wp_customize->add_setting('internet_service_provider_pro_about_us_tagline',array(
    'default' => '',
    'sanitize_callback' => 'sanitize_text_field'
  ));
  $wp_customize->add_control('internet_service_provider_pro_about_us_tagline',array(
    'label' => __('Section Tagline','internet-service-provider-pro'),
    'section' => 'internet_service_provider_pro_about_us',
    'setting' => 'internet_service_provider_pro_about_us_tagline',
    'type'    => 'text'
  ));

  $wp_customize->add_setting('internet_service_provider_pro_about_us_main_heading',array(
    'default' => '',
    'sanitize_callback' => 'sanitize_text_field'
  ));
  $wp_customize->add_control('internet_service_provider_pro_about_us_main_heading',array(
    'label' => __('Section Main Heading','internet-service-provider-pro'),
    'section' => 'internet_service_provider_pro_about_us',
    'setting' => 'internet_service_provider_pro_about_us_main_heading',
    'type'    => 'text'
  ));

  $wp_customize->add_setting('internet_service_provider_pro_about_us_text',array(
    'default' => '',
    'sanitize_callback' => 'sanitize_textarea_field'
  ));
  $wp_customize->add_control('internet_service_provider_pro_about_us_text',array(
    'label' => __('Section Text','internet-service-provider-pro'),
    'section' => 'internet_service_provider_pro_about_us',
    'setting' => 'internet_service_provider_pro_about_us_text',
    'type'    => 'textarea'
  ));

  $wp_customize->add_setting( 'internet_service_provider_pro_about_us_section_button',
    array(
    'default' => '',
    'transport' => 'postMessage',
    'sanitize_callback' => 'internet_service_provider_pro_text_sanitization'
  ));
  $wp_customize->add_control( new VW_Themes_Seperator_custom_Control( $wp_customize, 'internet_service_provider_pro_about_us_section_button',
    array(
    'label' => __('Section Button','internet-service-provider-pro'),
    'section' => 'internet_service_provider_pro_about_us'
  )));

  $wp_customize->add_setting('internet_service_provider_pro_about_us_button_title',array(
    'default' => '',
    'sanitize_callback' => 'sanitize_text_field'
  ));
  $wp_customize->add_control('internet_service_provider_pro_about_us_button_title',array(
    'label' => __('Section Button Title','internet-service-provider-pro'),
    'section' => 'internet_service_provider_pro_about_us',
    'setting' => 'internet_service_provider_pro_about_us_button_title',
    'type'    => 'text'
  ));

 
  $wp_customize->add_setting('internet_service_provider_pro_about_us_button_url',array(
    'default' => '',
    'sanitize_callback' => 'sanitize_text_field'
  ));
  $wp_customize->add_control('internet_service_provider_pro_about_us_button_url',array(
    'label' => __('Section Button Url','internet-service-provider-pro'),
    'section' => 'internet_service_provider_pro_about_us',
    'setting' => 'internet_service_provider_pro_about_us_button_url',
    'type'    => 'text'
  ));

  $wp_customize->add_setting( 'internet_service_provider_pro_about_us_secion_image_settings',
    array(
    'default' => '',
    'transport' => 'postMessage',
    'sanitize_callback' => 'internet_service_provider_pro_text_sanitization'
  ));
  $wp_customize->add_control( new VW_Themes_Seperator_custom_Control( $wp_customize, 'internet_service_provider_pro_about_us_secion_image_settings',
    array(
    'label' => __('Section Image Settings','internet-service-provider-pro'),
    'section' => 'internet_service_provider_pro_about_us'
  )));

  $wp_customize->add_setting('internet_service_provider_pro_about_us_column_image1',array(
    'default' => '',
    'sanitize_callback' => 'esc_url_raw',
  ));
  $wp_customize->add_control(
    new WP_Customize_Image_Control( $wp_customize,'internet_service_provider_pro_about_us_column_image1',array(
    'label' => __('Add Image','internet-service-provider-pro'),
    'description' => __('Dimension 500px * 600px','internet-service-provider-pro'),
    'section' => 'internet_service_provider_pro_about_us',
    'settings' => 'internet_service_provider_pro_about_us_column_image1'
  )));
  $wp_customize->add_setting('internet_service_provider_pro_about_us_column_image2',array(
    'default' => '',
    'sanitize_callback' => 'esc_url_raw',
  ));
  $wp_customize->add_control(
    new WP_Customize_Image_Control( $wp_customize,'internet_service_provider_pro_about_us_column_image2',array(
    'label' => __('Add Image','internet-service-provider-pro'),
    'description' => __('Dimension 500px * 600px','internet-service-provider-pro'),
    'section' => 'internet_service_provider_pro_about_us',
    'settings' => 'internet_service_provider_pro_about_us_column_image2'
  )));

  $wp_customize->add_setting( 'internet_service_provider_pro_about_us_color_settings',
    array(
    'default' => '',
    'transport' => 'postMessage',
    'sanitize_callback' => 'internet_service_provider_pro_text_sanitization'
  ));
  $wp_customize->add_control( new VW_Themes_Seperator_custom_Control( $wp_customize, 'internet_service_provider_pro_about_us_color_settings',
  array(
    'label' => __('Section Color & Typography','internet-service-provider-pro'),
    'section' => 'internet_service_provider_pro_about_us'
  )));

  $wp_customize->add_setting( 'internet_service_provider_pro_about_us_tagline_ct_pallete',
    array(
      'default' => '',
      'transport' => 'postMessage',
      'sanitize_callback' => 'internet_service_provider_pro_text_sanitization'
  ));
  $wp_customize->add_control( new VW_Themes_Seperator_custom_Control( $wp_customize, 'internet_service_provider_pro_about_us_tagline_ct_pallete',
    array(
    'label' => __('Tagline Typography ','internet-service-provider-pro'),
    'section' => 'internet_service_provider_pro_about_us'
  )));

  $wp_customize->add_setting( 'internet_service_provider_pro_about_us_tagline_color', array(
    'default' => '',
    'sanitize_callback' => 'sanitize_hex_color'
  ));
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'internet_service_provider_pro_about_us_tagline_color', array(
    'label' => __('Color', 'internet-service-provider-pro'),
    'section' => 'internet_service_provider_pro_about_us',
    'settings' => 'internet_service_provider_pro_about_us_tagline_color',
  )));

  $wp_customize->add_setting('internet_service_provider_pro_about_us_tagline_font_family',array(
    'default' => '',
    'capability' => 'edit_theme_options',
    'sanitize_callback' => 'sanitize_text_field'
  ));
  $wp_customize->add_control(
    'internet_service_provider_pro_about_us_tagline_font_family', array(
    'section'  => 'internet_service_provider_pro_about_us',
    'label'    => __('Font Family','internet-service-provider-pro'),
    'type'     => 'select',
    'choices'  => $font_array,
  ));

  $wp_customize->add_setting('internet_service_provider_pro_about_us_tagline_font_size',array(
    'default' => '',
    'sanitize_callback' => 'sanitize_text_field'
  ));
  $wp_customize->add_control('internet_service_provider_pro_about_us_tagline_font_size',array(
    'label' => __('Font Size','internet-service-provider-pro'),
    
    'section' => 'internet_service_provider_pro_about_us',
    'setting' => 'internet_service_provider_pro_about_us_tagline_font_size',
    'type'    => 'number'
  ));

  $wp_customize->add_setting( 'internet_service_provider_pro_about_us_main_heading_ct_pallete',
    array(
      'default' => '',
      'transport' => 'postMessage',
      'sanitize_callback' => 'internet_service_provider_pro_text_sanitization'
  ));
  $wp_customize->add_control( new VW_Themes_Seperator_custom_Control( $wp_customize, 'internet_service_provider_pro_about_us_main_heading_ct_pallete',
    array(
    'label' => __('Main Heading Typography ','internet-service-provider-pro'),
    'section' => 'internet_service_provider_pro_about_us'
  )));

  $wp_customize->add_setting( 'internet_service_provider_pro_about_us_main_heading_color', array(
    'default' => '',
    'sanitize_callback' => 'sanitize_hex_color'
  ));
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'internet_service_provider_pro_about_us_main_heading_color', array(
    'label' => __('Color', 'internet-service-provider-pro'),
    'section' => 'internet_service_provider_pro_about_us',
    'settings' => 'internet_service_provider_pro_about_us_main_heading_color',
  )));

  $wp_customize->add_setting('internet_service_provider_pro_about_us_main_heading_font_family',array(
    'default' => '',
    'capability' => 'edit_theme_options',
    'sanitize_callback' => 'sanitize_text_field'
  ));
  $wp_customize->add_control(
    'internet_service_provider_pro_about_us_main_heading_font_family', array(
    'section'  => 'internet_service_provider_pro_about_us',
    'label'    => __('Font Family','internet-service-provider-pro'),
    'type'     => 'select',
    'choices'  => $font_array,
  ));

  $wp_customize->add_setting('internet_service_provider_pro_about_us_main_heading_font_size',array(
    'default' => '',
    'sanitize_callback' => 'sanitize_text_field'
  ));
  $wp_customize->add_control('internet_service_provider_pro_about_us_main_heading_font_size',array(
    'label' => __('Font Size','internet-service-provider-pro'),
    
    'section' => 'internet_service_provider_pro_about_us',
    'setting' => 'internet_service_provider_pro_about_us_main_heading_font_size',
    'type'    => 'number'
  ));

  $wp_customize->add_setting( 'internet_service_provider_pro_about_us_text_ct_pallete',
    array(
      'default' => '',
      'transport' => 'postMessage',
      'sanitize_callback' => 'internet_service_provider_pro_text_sanitization'
  ));
  $wp_customize->add_control( new VW_Themes_Seperator_custom_Control( $wp_customize, 'internet_service_provider_pro_about_us_text_ct_pallete',
    array(
    'label' => __('Section Text Typography ','internet-service-provider-pro'),
    'section' => 'internet_service_provider_pro_about_us'
  )));

  $wp_customize->add_setting( 'internet_service_provider_pro_about_us_text_color', array(
    'default' => '',
    'sanitize_callback' => 'sanitize_hex_color'
  ));
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'internet_service_provider_pro_about_us_text_color', array(
    'label' => __('Color', 'internet-service-provider-pro'),
    'section' => 'internet_service_provider_pro_about_us',
    'settings' => 'internet_service_provider_pro_about_us_text_color',
  )));
  $wp_customize->add_setting('internet_service_provider_pro_about_us_text_font_family',array(
    'default' => '',
    'capability' => 'edit_theme_options',
    'sanitize_callback' => 'sanitize_text_field'
  ));
  $wp_customize->add_control(
    'internet_service_provider_pro_about_us_text_font_family', array(
    'section'  => 'internet_service_provider_pro_about_us',
    'label'    => __('Font Family','internet-service-provider-pro'),
    'type'     => 'select',
    'choices'  => $font_array,
  ));

  $wp_customize->add_setting('internet_service_provider_pro_about_us_text_font_size',array(
    'default' => '',
    'sanitize_callback' => 'sanitize_text_field'
  ));
  $wp_customize->add_control('internet_service_provider_pro_about_us_text_font_size',array(
    'label' => __('Font Size','internet-service-provider-pro'),
    
    'section' => 'internet_service_provider_pro_about_us',
    'setting' => 'internet_service_provider_pro_about_us_text_font_size',
    'type'    => 'number'
  ));

  $wp_customize->add_setting( 'internet_service_provider_pro_about_us_button_ct_pallete',
  array(
    'default' => '',
    'transport' => 'postMessage',
    'sanitize_callback' => 'internet_service_provider_pro_text_sanitization'
  ));
  $wp_customize->add_control( new VW_Themes_Seperator_custom_Control( $wp_customize, 'internet_service_provider_pro_about_us_button_ct_pallete',
      array(
      'label' => __('Section Button Typography ','internet-service-provider-pro'),
      'section' => 'internet_service_provider_pro_about_us'
  )));

  $wp_customize->add_setting( 'internet_service_provider_pro_about_us_button_color', array(
      'default' => '',
      'sanitize_callback' => 'sanitize_hex_color'
  ));
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'internet_service_provider_pro_about_us_button_color', array(
      'label' => __('Color', 'internet-service-provider-pro'),
      'section' => 'internet_service_provider_pro_about_us',
      'settings' => 'internet_service_provider_pro_about_us_button_color',
  )));
  $wp_customize->add_setting('internet_service_provider_pro_about_us_button_font_family',array(
      'default' => '',
      'capability' => 'edit_theme_options',
      'sanitize_callback' => 'sanitize_text_field'
  ));
  $wp_customize->add_control(
      'internet_service_provider_pro_about_us_button_font_family', array(
      'section'  => 'internet_service_provider_pro_about_us',
      'label'    => __('Font Family','internet-service-provider-pro'),
      'type'     => 'select',
      'choices'  => $font_array,
  ));

  $wp_customize->add_setting('internet_service_provider_pro_about_us_button_font_size',array(
      'default' => '',
      'sanitize_callback' => 'sanitize_text_field'
  ));
  $wp_customize->add_control('internet_service_provider_pro_about_us_button_font_size',array(
      'label' => __('Font Size','internet-service-provider-pro'),
      
      'section' => 'internet_service_provider_pro_about_us',
      'setting' => 'internet_service_provider_pro_about_us_button_font_size',
      'type'    => 'number'
  ));

  $wp_customize->add_setting( 'internet_service_provider_pro_about_us_button_bgcolor', array(
      'default' => '',
      'sanitize_callback' => 'sanitize_hex_color'
  ));
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'internet_service_provider_pro_about_us_button_bgcolor', array(
      'label' => __('Background Color', 'internet-service-provider-pro'),
      'section' => 'internet_service_provider_pro_about_us',
      'settings' => 'internet_service_provider_pro_about_us_button_bgcolor',
  )));

  $wp_customize->add_setting( 'internet_service_provider_pro_about_us_button_icon_color', array(
      'default' => '',
      'sanitize_callback' => 'sanitize_hex_color'
  ));
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'internet_service_provider_pro_about_us_button_icon_color', array(
      'label' => __('Icon Color', 'internet-service-provider-pro'),
      'section' => 'internet_service_provider_pro_about_us',
      'settings' => 'internet_service_provider_pro_about_us_button_icon_color',
  )));

  $wp_customize->add_setting( 'internet_service_provider_pro_about_us_button_icon_bgcolor', array(
      'default' => '',
      'sanitize_callback' => 'sanitize_hex_color'
  ));
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'internet_service_provider_pro_about_us_button_icon_bgcolor', array(
      'label' => __('Icon Background Color', 'internet-service-provider-pro'),
      'section' => 'internet_service_provider_pro_about_us',
      'settings' => 'internet_service_provider_pro_about_us_button_icon_bgcolor',
  )));

  $wp_customize->add_setting( 'internet_service_provider_pro_about_us_button_icon_hover_color', array(
      'default' => '',
      'sanitize_callback' => 'sanitize_hex_color'
  ));
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'internet_service_provider_pro_about_us_button_icon_hover_color', array(
      'label' => __('Icon Hover Color', 'internet-service-provider-pro'),
      'section' => 'internet_service_provider_pro_about_us',
      'settings' => 'internet_service_provider_pro_about_us_button_icon_hover_color',
  )));

  $wp_customize->add_setting( 'internet_service_provider_pro_about_us_button_icon_hover_bgcolor', array(
      'default' => '',
      'sanitize_callback' => 'sanitize_hex_color'
  ));
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'internet_service_provider_pro_about_us_button_icon_hover_bgcolor', array(
      'label' => __('Icon Hover Background Color', 'internet-service-provider-pro'),
      'section' => 'internet_service_provider_pro_about_us',
      'settings' => 'internet_service_provider_pro_about_us_button_icon_hover_bgcolor',
  )));

  $wp_customize->add_setting( 'internet_service_provider_pro_about_us_button_hover_bgcolor', array(
      'default' => '',
      'sanitize_callback' => 'sanitize_hex_color'
  ));
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'internet_service_provider_pro_about_us_button_hover_bgcolor', array(
      'label' => __('Hover Background Color', 'internet-service-provider-pro'),
      'section' => 'internet_service_provider_pro_about_us',
      'settings' => 'internet_service_provider_pro_about_us_button_hover_bgcolor',
  )));

  $wp_customize->add_setting( 'internet_service_provider_pro_about_us_button_text_color_hover', array(
      'default' => '',
      'sanitize_callback' => 'sanitize_hex_color'
  ));
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'internet_service_provider_pro_about_us_button_text_color_hover', array(
      'label' => __('Hover Text Color', 'internet-service-provider-pro'),
      'section' => 'internet_service_provider_pro_about_us',
      'settings' => 'internet_service_provider_pro_about_us_button_text_color_hover',
  )));
  
  $wp_customize->add_setting('internet_service_provider_pro_about_us_spacing_left_desktop', array(
    'sanitize_callback' => 'internet_service_provider_pro_sanitize_number_blank',
  ));

  $wp_customize->add_setting('internet_service_provider_pro_about_us_spacing_top_desktop', array(
    'sanitize_callback' => 'internet_service_provider_pro_sanitize_number_blank',
  ));

  $wp_customize->add_setting('internet_service_provider_pro_about_us_spacing_bottom_desktop', array(
    'sanitize_callback' => 'internet_service_provider_pro_sanitize_number_blank',
  ));

  $wp_customize->add_setting('internet_service_provider_pro_about_us_spacing_right_desktop', array(
    'sanitize_callback' => 'internet_service_provider_pro_sanitize_number_blank',
  ));

  $wp_customize->add_control(new VW_Dimensions_Control($wp_customize, 'internet_service_provider_pro_about_us_spacing', array(
    'section' => 'internet_service_provider_pro_about_us',
    'label' => esc_html__('Section Spacing(px)', 'internet-service-provider-pro'),
    'settings' => array(
        'desktop_left' => 'internet_service_provider_pro_about_us_spacing_left_desktop',
        'desktop_top' => 'internet_service_provider_pro_about_us_spacing_top_desktop',
        'desktop_bottom' => 'internet_service_provider_pro_about_us_spacing_bottom_desktop',
      'desktop_right' => 'internet_service_provider_pro_about_us_spacing_right_desktop'
  ),
    'input_attrs' => array(
        'min' => 0,
        'max' => 100,
        'step' => 1,
    ),
    'responsive' => false
  )));

  // ------------- Records --------------
  $wp_customize->add_section('internet_service_provider_pro_records',array(
    'title' => __('Records','internet-service-provider-pro'),
    'panel' => 'internet_service_provider_pro_panel_id',
  ));
  $wp_customize->add_setting('internet_service_provider_pro_records_enable',
      array(
    'default' => 'Enable',
    'sanitize_callback' => 'internet_service_provider_pro_sanitize_choices'
  ));
  $wp_customize->add_control('internet_service_provider_pro_records_enable',
    array(
    'type' => 'radio',
    'label' => __('Do you want this section', 'internet-service-provider-pro'),
    'section' => 'internet_service_provider_pro_records',
    'choices' => array(
    'Enable' => __('Enable', 'internet-service-provider-pro'),
    'Disable' => __('Disable', 'internet-service-provider-pro')
  )));
  $wp_customize->selective_refresh->add_partial( 'internet_service_provider_pro_records_enable', array(
    'selector' => '#records .container',
    'render_callback' => 'internet_service_provider_pro_customize_partial_internet_service_provider_pro_records_enable',
  ));

  $wp_customize->add_setting( 'internet_service_provider_pro_records_content_settings',
    array(
    'default' => '',
    'transport' => 'postMessage',
    'sanitize_callback' => 'internet_service_provider_pro_text_sanitization'
  ));
  $wp_customize->add_control( new internet_service_provider_pro_Seperator_custom_Control( $wp_customize, 'internet_service_provider_pro_records_content_settings',
    array(
    'label' => __('Section Content Settings','internet-service-provider-pro'),
    'section' => 'internet_service_provider_pro_records'
  )));

  $wp_customize->add_setting('internet_service_provider_pro_records_image',array(
    'default' => '',
    'sanitize_callback' => 'esc_url_raw',
  ));
  $wp_customize->add_control(
    new WP_Customize_Image_Control( $wp_customize,'internet_service_provider_pro_records_image',array(
    'label' => __('Add Image','internet-service-provider-pro'),
    'description' => __('Dimension 549px * 212px','internet-service-provider-pro'),
    'section' => 'internet_service_provider_pro_records',
    'settings' => 'internet_service_provider_pro_records_image'
  )));

  $wp_customize->add_setting('internet_service_provider_pro_records_number',array(
    'default' => '',
    'sanitize_callback' => 'sanitize_text_field'
  ));
  $wp_customize->add_control('internet_service_provider_pro_records_number',array(
    'label' => __('Number of records to show ','internet-service-provider-pro'),
    'section' => 'internet_service_provider_pro_records',
    'setting' => 'internet_service_provider_pro_records_number',
    'type'    => 'number'
  ));

  $record_no = get_theme_mod('internet_service_provider_pro_records_number');

  for($i=1; $i<=$record_no; $i++)
  {
    $wp_customize->add_setting( 'internet_service_provider_pro_records_box_settings'.$i,
    array(
      'default' => '',
      'transport' => 'postMessage',
      'sanitize_callback' => 'internet_service_provider_pro_text_sanitization'
    ));
    $wp_customize->add_control( new internet_service_provider_pro_Seperator_custom_Control( $wp_customize, 'internet_service_provider_pro_records_box_settings'.$i,
      array(
      'label' => __('Record ','internet-service-provider-pro').$i,
      'section' => 'internet_service_provider_pro_records'
    )));

    $wp_customize->add_setting('internet_service_provider_pro_records_no'.$i,array(
      'default' => '',
      'sanitize_callback' => 'sanitize_text_field'
    ));
    $wp_customize->add_control('internet_service_provider_pro_records_no'.$i,array(
      'label' => __('Record No ','internet-service-provider-pro'),
      'section' => 'internet_service_provider_pro_records',
      'setting' => 'internet_service_provider_pro_records_no'.$i,
      'type'    => 'text'
    ));

    $wp_customize->add_setting('internet_service_provider_pro_records_sign'.$i,array(
      'default' => '',
      'sanitize_callback' => 'sanitize_text_field'
    ));
    $wp_customize->add_control('internet_service_provider_pro_records_sign'.$i,array(
      'label' => __('Record Sign ','internet-service-provider-pro'),
      'section' => 'internet_service_provider_pro_records',
      'setting' => 'internet_service_provider_pro_records_sign'.$i,
      'type'    => 'text'
    ));

    $wp_customize->add_setting('internet_service_provider_pro_records_title'.$i,array(
      'default' => '',
      'sanitize_callback' => 'sanitize_text_field'
    ));
    $wp_customize->add_control('internet_service_provider_pro_records_title'.$i,array(
      'label' => __('Record Title ','internet-service-provider-pro'),
      'section' => 'internet_service_provider_pro_records',
      'setting' => 'internet_service_provider_pro_records_title'.$i,
      'type'    => 'text'
    ));

    $wp_customize->add_setting('internet_service_provider_pro_records_url'.$i,array(
      'default' => '',
      'sanitize_callback' => 'esc_url_raw'
    ));
    $wp_customize->add_control('internet_service_provider_pro_records_url'.$i,array(
      'label' => __('Custom URL','internet-service-provider-pro'),
      'section' => 'internet_service_provider_pro_records',
      'setting' => 'internet_service_provider_pro_records_url'.$i,
      'type'    => 'text'
    ));
  }
  
  $wp_customize->add_setting( 'internet_service_provider_pro_records_carousel_loop',
   array(
      'default' => 1,
      'transport' => 'refresh',
      'sanitize_callback' => 'internet_service_provider_pro_switch_sanitization'
  )); 
  $wp_customize->add_control( new internet_service_provider_pro_Toggle_Switch_Custom_control( $wp_customize, 'internet_service_provider_pro_records_carousel_loop',
     array(
        'label' => esc_html__( 'Carousel Loop', 'internet-service-provider-pro' ),
        'section' => 'internet_service_provider_pro_records'
  )));

  $wp_customize->add_setting('internet_service_provider_pro_records_carousel_speed',array(
    'default' => '',
    'sanitize_callback' => 'sanitize_text_field'
  ));
  $wp_customize->add_control('internet_service_provider_pro_records_carousel_speed',array(
    'label' => __('Carousel Speed','internet-service-provider-pro'),
    'description'=>__('Ex. 1000 for One second','internet-service-provider-pro'),
    'section' => 'internet_service_provider_pro_records',
    'setting' => 'internet_service_provider_pro_records_carousel_speed',
    'type'    => 'number'
  ));

  $wp_customize->add_setting( 'internet_service_provider_pro_records_color_settings',
    array(
    'default' => '',
    'transport' => 'postMessage',
    'sanitize_callback' => 'internet_service_provider_pro_text_sanitization'
  ));
  $wp_customize->add_control( new internet_service_provider_pro_Seperator_custom_Control( $wp_customize, 'internet_service_provider_pro_records_color_settings',
  array(
    'label' => __('Section Color & Typography','internet-service-provider-pro'),
    'section' => 'internet_service_provider_pro_records'
  )));

  $wp_customize->add_setting( 'internet_service_provider_pro_records_tagline_ct_pallete',
    array(
    'default' => '',
    'transport' => 'postMessage',
    'sanitize_callback' => 'internet_service_provider_pro_text_sanitization'
  ));
  $wp_customize->add_control( new internet_service_provider_pro_Seperator_custom_Control( $wp_customize, 'internet_service_provider_pro_records_tagline_ct_pallete',
  array(
    'label' => __('Tagline Typography','internet-service-provider-pro'),
    'section' => 'internet_service_provider_pro_records'
  )));

  $wp_customize->add_setting( 'internet_service_provider_pro_records_tagline_color', array(
    'default' => '',
    'sanitize_callback' => 'sanitize_hex_color'
  ));
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'internet_service_provider_pro_records_tagline_color', array(
    'label' => __('Color', 'internet-service-provider-pro'),
    'section' => 'internet_service_provider_pro_records',
    'settings' => 'internet_service_provider_pro_records_tagline_color',
  )));

  $wp_customize->add_setting('internet_service_provider_pro_records_tagline_font_family',array(
    'default' => '',
    'capability' => 'edit_theme_options',
    'sanitize_callback' => 'sanitize_text_field'
  ));
  $wp_customize->add_control(
    'internet_service_provider_pro_records_tagline_font_family', array(
    'section'  => 'internet_service_provider_pro_records',
    'label'    => __('Font Family','internet-service-provider-pro'),
    'type'     => 'select',
    'choices'  => $font_array,
  ));

  $wp_customize->add_setting('internet_service_provider_pro_records_tagline_font_size',array(
    'default' => '',
    'sanitize_callback' => 'sanitize_text_field'
  ));
  $wp_customize->add_control('internet_service_provider_pro_records_tagline_font_size',array(
    'label' => __('Font Size','internet-service-provider-pro'),
    'section' => 'internet_service_provider_pro_records',
    'setting' => 'internet_service_provider_pro_records_tagline_font_size',
    'type'    => 'number'
  ));


  $wp_customize->add_setting( 'internet_service_provider_pro_records_main_heading_ct_pallete',
    array(
    'default' => '',
    'transport' => 'postMessage',
    'sanitize_callback' => 'internet_service_provider_pro_text_sanitization'
  ));
  $wp_customize->add_control( new internet_service_provider_pro_Seperator_custom_Control( $wp_customize, 'internet_service_provider_pro_records_main_heading_ct_pallete',
  array(
    'label' => __('Main Heading Typography','internet-service-provider-pro'),
    'section' => 'internet_service_provider_pro_records'
  )));

  $wp_customize->add_setting( 'internet_service_provider_pro_records_main_heading_color', array(
    'default' => '',
    'sanitize_callback' => 'sanitize_hex_color'
  ));
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'internet_service_provider_pro_records_main_heading_color', array(
    'label' => __('Color', 'internet-service-provider-pro'),
    'section' => 'internet_service_provider_pro_records',
    'settings' => 'internet_service_provider_pro_records_main_heading_color',
  )));

  $wp_customize->add_setting('internet_service_provider_pro_records_main_heading_font_family',array(
    'default' => '',
    'capability' => 'edit_theme_options',
    'sanitize_callback' => 'sanitize_text_field'
  ));
  $wp_customize->add_control(
    'internet_service_provider_pro_records_main_heading_font_family', array(
    'section'  => 'internet_service_provider_pro_records',
    'label'    => __('Font Family','internet-service-provider-pro'),
    'type'     => 'select',
    'choices'  => $font_array,
  ));

  $wp_customize->add_setting('internet_service_provider_pro_records_main_heading_font_size',array(
    'default' => '',
    'sanitize_callback' => 'sanitize_text_field'
  ));
  $wp_customize->add_control('internet_service_provider_pro_records_main_heading_font_size',array(
    'label' => __('Font Size','internet-service-provider-pro'),
    'description' => __('Add font size in px','internet-service-provider-pro'),
    'section' => 'internet_service_provider_pro_records',
    'setting' => 'internet_service_provider_pro_records_main_heading_font_size',
    'type'    => 'number'
  ));

  $wp_customize->add_setting( 'internet_service_provider_pro_records_box_image_ct_pallete',
    array(
      'default' => '',
      'transport' => 'postMessage',
      'sanitize_callback' => 'internet_service_provider_pro_text_sanitization'
  ));
  $wp_customize->add_control( new internet_service_provider_pro_Seperator_custom_Control( $wp_customize, 'internet_service_provider_pro_records_box_image_ct_pallete',
    array(
    'label' => __('Box Image Typography ','internet-service-provider-pro'),
    'section' => 'internet_service_provider_pro_records'
  )));

  $wp_customize->add_setting( 'internet_service_provider_pro_records_box_image_bgcolor', array(
    'default' => '',
    'sanitize_callback' => 'sanitize_hex_color'
  ));
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'internet_service_provider_pro_records_box_image_bgcolor', array(
    'label' => __('Image Background Color', 'internet-service-provider-pro'),
    'section' => 'internet_service_provider_pro_records',
    'settings' => 'internet_service_provider_pro_records_box_image_bgcolor',
  )));

  $wp_customize->add_setting( 'internet_service_provider_pro_records_box_number_ct_pallete',
    array(
      'default' => '',
      'transport' => 'postMessage',
      'sanitize_callback' => 'internet_service_provider_pro_text_sanitization'
  ));
  $wp_customize->add_control( new internet_service_provider_pro_Seperator_custom_Control( $wp_customize, 'internet_service_provider_pro_records_box_number_ct_pallete',
    array(
    'label' => __('Box Number Typography ','internet-service-provider-pro'),
    'section' => 'internet_service_provider_pro_records'
  )));

  $wp_customize->add_setting( 'internet_service_provider_pro_records_box_number_color', array(
    'default' => '',
    'sanitize_callback' => 'sanitize_hex_color'
  ));
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'internet_service_provider_pro_records_box_number_color', array(
    'label' => __('Color', 'internet-service-provider-pro'),
    'section' => 'internet_service_provider_pro_records',
    'settings' => 'internet_service_provider_pro_records_box_number_color',
  )));
  $wp_customize->add_setting('internet_service_provider_pro_records_box_number_font_family',array(
    'default' => '',
    'capability' => 'edit_theme_options',
    'sanitize_callback' => 'sanitize_text_field'
  ));
  $wp_customize->add_control(
    'internet_service_provider_pro_records_box_number_font_family', array(
    'section'  => 'internet_service_provider_pro_records',
    'label'    => __('Font Family','internet-service-provider-pro'),
    'type'     => 'select',
    'choices'  => $font_array,
  ));

  $wp_customize->add_setting('internet_service_provider_pro_records_box_number_font_size',array(
    'default' => '',
    'sanitize_callback' => 'sanitize_text_field'
  ));
  $wp_customize->add_control('internet_service_provider_pro_records_box_number_font_size',array(
    'label' => __('Font Size','internet-service-provider-pro'),
    
    'section' => 'internet_service_provider_pro_records',
    'setting' => 'internet_service_provider_pro_records_box_number_font_size',
    'type'    => 'number'
  ));

  $wp_customize->add_setting( 'internet_service_provider_pro_records_box_text_ct_pallete',
    array(
      'default' => '',
      'transport' => 'postMessage',
      'sanitize_callback' => 'internet_service_provider_pro_text_sanitization'
  ));
  $wp_customize->add_control( new internet_service_provider_pro_Seperator_custom_Control( $wp_customize, 'internet_service_provider_pro_records_box_text_ct_pallete',
    array(
    'label' => __('Box Text Typography ','internet-service-provider-pro'),
    'section' => 'internet_service_provider_pro_records'
  )));

  $wp_customize->add_setting( 'internet_service_provider_pro_records_box_text_color', array(
    'default' => '',
    'sanitize_callback' => 'sanitize_hex_color'
  ));
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'internet_service_provider_pro_records_box_text_color', array(
    'label' => __('Color', 'internet-service-provider-pro'),
    'section' => 'internet_service_provider_pro_records',
    'settings' => 'internet_service_provider_pro_records_box_text_color',
  )));
  $wp_customize->add_setting('internet_service_provider_pro_records_box_text_font_family',array(
    'default' => '',
    'capability' => 'edit_theme_options',
    'sanitize_callback' => 'sanitize_text_field'
  ));
  $wp_customize->add_control(
    'internet_service_provider_pro_records_box_text_font_family', array(
    'section'  => 'internet_service_provider_pro_records',
    'label'    => __('Font Family','internet-service-provider-pro'),
    'type'     => 'select',
    'choices'  => $font_array,
  ));

  $wp_customize->add_setting('internet_service_provider_pro_records_box_text_font_size',array(
    'default' => '',
    'sanitize_callback' => 'sanitize_text_field'
  ));
  $wp_customize->add_control('internet_service_provider_pro_records_box_text_font_size',array(
    'label' => __('Font Size','internet-service-provider-pro'),
    'section' => 'internet_service_provider_pro_records',
    'setting' => 'internet_service_provider_pro_records_box_text_font_size',
    'type'    => 'number'
  ));

  // ------------- Services -------------
  $wp_customize->add_section('internet_service_provider_pro_services',array(
    'title' => __('Why Choose Us','internet-service-provider-pro'),
    'panel' => 'internet_service_provider_pro_panel_id',
  ));
  $wp_customize->add_setting('internet_service_provider_pro_services_enable',
      array(
    'default' => 'Enable',
    'sanitize_callback' => 'internet_service_provider_pro_sanitize_choices'
  ));
  $wp_customize->add_control('internet_service_provider_pro_services_enable',
    array(
    'type' => 'radio',
    'label' => __('Do you want this section', 'internet-service-provider-pro'),
    'section' => 'internet_service_provider_pro_services',
    'choices' => array(
    'Enable' => __('Enable', 'internet-service-provider-pro'),
    'Disable' => __('Disable', 'internet-service-provider-pro')
  )));
  $wp_customize->selective_refresh->add_partial( 'internet_service_provider_pro_services_enable', array(
    'selector' => '#about-us h3',
    'render_callback' => 'internet_service_provider_pro_customize_partial_internet_service_provider_pro_services_enable',
  ));
  $wp_customize->add_setting( 'internet_service_provider_pro_services_settings',
    array(
    'default' => '',
    'transport' => 'postMessage',
    'sanitize_callback' => 'internet_service_provider_pro_text_sanitization'
  ));
  $wp_customize->add_control( new VW_Themes_Seperator_custom_Control( $wp_customize, 'internet_service_provider_pro_services_settings',
    array(
    'label' => __('Section Background Settings','internet-service-provider-pro'),
    'section' => 'internet_service_provider_pro_services'
  )));
  $wp_customize->add_setting( 'internet_service_provider_pro_services_bgcolor', array(
    'default' => '',
    'sanitize_callback' => 'sanitize_hex_color'
  ));
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'internet_service_provider_pro_services_bgcolor', array(
    'label' => __('Section Background Color', 'internet-service-provider-pro'),
    'description'   => __('Either add background color or background image, if you add both background color will be top most priority','internet-service-provider-pro'),
    'section' => 'internet_service_provider_pro_services',
    'settings' => 'internet_service_provider_pro_services_bgcolor',
  )));
  $wp_customize->add_setting('internet_service_provider_pro_services_bgimage',array(
    'default' => '',
    'sanitize_callback' => 'esc_url_raw',
  ));
  $wp_customize->add_control(
    new WP_Customize_Image_Control( $wp_customize,'internet_service_provider_pro_services_bgimage',array(
    'label' => __('Section Background Image','internet-service-provider-pro'),
    'description' => __('Dimension 1600px * 430px','internet-service-provider-pro'),
    'section' => 'internet_service_provider_pro_services',
    'settings' => 'internet_service_provider_pro_services_bgimage'
  )));

  $wp_customize->add_setting( 'internet_service_provider_pro_services_bgimage_setting', array(
      'default'         => '',
      'sanitize_callback' => 'internet_service_provider_pro_sanitize_choices'
  ));
  $wp_customize->add_control('internet_service_provider_pro_services_bgimage_setting', array(
      'type'      => 'radio',
      'label'     => __('Choose image option', 'internet-service-provider-pro'),
      'section'   => 'internet_service_provider_pro_services',
      'choices'   => array(
        'bg-fixed'      => __( 'Fixed', 'internet-service-provider-pro' ),
        'bg-scroll'      => __( 'Scroll', 'internet-service-provider-pro' ),                    
  )));

  $wp_customize->add_setting( 'internet_service_provider_pro_services_content_settings',
    array(
    'default' => '',
    'transport' => 'postMessage',
    'sanitize_callback' => 'internet_service_provider_pro_text_sanitization'
  ));
  $wp_customize->add_control( new VW_Themes_Seperator_custom_Control( $wp_customize, 'internet_service_provider_pro_services_content_settings',
    array(
    'label' => __('Section Content Settings','internet-service-provider-pro'),
    'section' => 'internet_service_provider_pro_services'
  )));

  $wp_customize->add_setting('internet_service_provider_pro_services_tagline',array(
    'default' => '',
    'sanitize_callback' => 'sanitize_text_field'
  ));
  $wp_customize->add_control('internet_service_provider_pro_services_tagline',array(
    'label' => __('Section Tagline','internet-service-provider-pro'),
    'section' => 'internet_service_provider_pro_services',
    'setting' => 'internet_service_provider_pro_services_tagline',
    'type'    => 'text'
  ));

  $wp_customize->add_setting('internet_service_provider_pro_services_main_heading',array(
    'default' => '',
    'sanitize_callback' => 'sanitize_text_field'
  ));
  $wp_customize->add_control('internet_service_provider_pro_services_main_heading',array(
    'label' => __('Section Main Heading','internet-service-provider-pro'),
    'section' => 'internet_service_provider_pro_services',
    'setting' => 'internet_service_provider_pro_services_main_heading',
    'type'    => 'text'
  ));

  $wp_customize->add_setting('internet_service_provider_pro_services_text',array(
    'default' => '',
    'sanitize_callback' => 'sanitize_textarea_field'
  ));
  $wp_customize->add_control('internet_service_provider_pro_services_text',array(
    'label' => __('Section Text','internet-service-provider-pro'),
    'section' => 'internet_service_provider_pro_services',
    'setting' => 'internet_service_provider_pro_services_text',
    'type'    => 'textarea'
  ));

  $wp_customize->add_setting( 'internet_service_provider_pro_services_box',
    array(
    'default' => '',
    'transport' => 'postMessage',
    'sanitize_callback' => 'internet_service_provider_pro_text_sanitization'
  ));
  $wp_customize->add_control( new VW_Themes_Seperator_custom_Control( $wp_customize, 'internet_service_provider_pro_services_box',
    array(
    'label' => __('Boxes','internet-service-provider-pro'),
    'section' => 'internet_service_provider_pro_services'
  )));

  $wp_customize->add_setting('internet_service_provider_pro_services_box_number',array(
    'default' => '',
    'sanitize_callback' => 'sanitize_text_field'
  ));
  $wp_customize->add_control('internet_service_provider_pro_services_box_number',array(
    'label' => __('Number of Boxes to show','internet-service-provider-pro'),
    'section' => 'internet_service_provider_pro_services',
    'setting' => 'internet_service_provider_pro_services_box_number',
    'type'    => 'text'
  ));

  $why_choose_us_icon_box = get_theme_mod('internet_service_provider_pro_services_box_number');

  for($i=1;$i<=$why_choose_us_icon_box;$i++)
  {
    $wp_customize->add_setting( 'internet_service_provider_pro_services_box_settings'.$i,
    array(
      'default' => '',
      'transport' => 'postMessage',
      'sanitize_callback' => 'internet_service_provider_pro_text_sanitization'
    ));
    $wp_customize->add_control( new VW_Themes_Seperator_custom_Control( $wp_customize, 'internet_service_provider_pro_services_box_settings'.$i,
      array(
      'label' => __('Box ','internet-service-provider-pro').$i,
      'section' => 'internet_service_provider_pro_services'
    )));

    $wp_customize->add_setting('internet_service_provider_pro_services_box_image'.$i,array(
      'default' => '',
      'sanitize_callback' => 'esc_url_raw',
    ));
    $wp_customize->add_control(
      new WP_Customize_Image_Control( $wp_customize,'internet_service_provider_pro_services_box_image'.$i,array(
      'label' => __('Image','internet-service-provider-pro'),
      'section' => 'internet_service_provider_pro_services',
      'settings' => 'internet_service_provider_pro_services_box_image'.$i
    )));

	  $wp_customize->add_setting('internet_service_provider_pro_services_box_title'.$i,array(
      'default' => '',
      'sanitize_callback' => 'sanitize_text_field'
    ));
    $wp_customize->add_control('internet_service_provider_pro_services_box_title'.$i,array(
      'label' => __('Title ','internet-service-provider-pro'),
      'section' => 'internet_service_provider_pro_services',
      'setting' => 'internet_service_provider_pro_services_box_title'.$i,
      'type'    => 'text'
    ));

    $wp_customize->add_setting('internet_service_provider_pro_services_box_text'.$i,array(
      'default' => '',
      'sanitize_callback' => 'sanitize_text_field'
    ));
    $wp_customize->add_control('internet_service_provider_pro_services_box_text'.$i,array(
      'label' => __('Title ','internet-service-provider-pro'),
      'section' => 'internet_service_provider_pro_services',
      'setting' => 'internet_service_provider_pro_services_box_text'.$i,
      'type'    => 'text'
    ));

    $wp_customize->add_setting('internet_service_provider_pro_services_box_start_now'.$i,array(
      'default' => '',
      'sanitize_callback' => 'sanitize_text_field'
    ));
    $wp_customize->add_control('internet_service_provider_pro_services_box_start_now'.$i,array(
      'label' => __('Start Now ','internet-service-provider-pro'),
      'section' => 'internet_service_provider_pro_services',
      'setting' => 'internet_service_provider_pro_services_box_start_now'.$i,
      'type'    => 'text'
    ));

    $wp_customize->add_setting('internet_service_provider_pro_services_box_start_now_pricing'.$i,array(
      'default' => '',
      'sanitize_callback' => 'sanitize_text_field'
    ));
    $wp_customize->add_control('internet_service_provider_pro_services_box_start_now_pricing'.$i,array(
      'label' => __('Pricing','internet-service-provider-pro'),
      'section' => 'internet_service_provider_pro_services',
      'setting' => 'internet_service_provider_pro_services_box_start_now_pricing'.$i,
      'type'    => 'text'
    ));

    for($j=1;$j<=3;$j++)
    {
      $wp_customize->add_setting('internet_service_provider_pro_services_box_customer_image'.$i.$j,array(
        'default' => '',
        'sanitize_callback' => 'esc_url_raw',
      ));
      $wp_customize->add_control(
        new WP_Customize_Image_Control( $wp_customize,'internet_service_provider_pro_services_box_customer_image'.$i.$j,array(
        'label' => __('Add Image','internet-service-provider-pro'),
        'section' => 'internet_service_provider_pro_services',
        'settings' => 'internet_service_provider_pro_services_box_customer_image'.$i.$j
      )));
    } 

    $wp_customize->add_setting(
      'internet_service_provider_pro_services_box_link_icon'.$i,
      array(
        'default'     => '',
        'sanitize_callback' => 'sanitize_text_field'
      )
    );
    $wp_customize->add_control(
      new internet_service_provider_pro_Fontawesome_Icon_Chooser(
        $wp_customize,
        'internet_service_provider_pro_services_box_link_icon'.$i,
        array(
        'settings'    => 'internet_service_provider_pro_services_box_link_icon'.$i,
        'section'   => 'internet_service_provider_pro_services',
        'type'      => 'icon',
        'label'     => esc_html__( 'Choose  Icon', 'internet-service-provider-pro' ),
        )
      )
    );

    $wp_customize->add_setting('internet_service_provider_pro_services_box_link_icon_url'.$i,array(
      'default' => '',
      'sanitize_callback' => 'esc_url_raw'
    ));
    $wp_customize->add_control('internet_service_provider_pro_services_box_link_icon_url'.$i,array(
      'label' => __('Url ','internet-service-provider-pro'),
      'section' => 'internet_service_provider_pro_services',
      'setting' => 'internet_service_provider_pro_services_box_link_icon_url'.$i,
      'type'    => 'url'
    ));
    
  }

  $wp_customize->add_setting( 'internet_service_provider_pro_services_color_settings',
    array(
    'default' => '',
    'transport' => 'postMessage',
    'sanitize_callback' => 'internet_service_provider_pro_text_sanitization'
  ));
  $wp_customize->add_control( new VW_Themes_Seperator_custom_Control( $wp_customize, 'internet_service_provider_pro_services_color_settings',
  array(
    'label' => __('Section Color & Typography','internet-service-provider-pro'),
    'section' => 'internet_service_provider_pro_services'
  )));

  $wp_customize->add_setting( 'internet_service_provider_pro_services_tagline_ct_pallete',
    array(
      'default' => '',
      'transport' => 'postMessage',
      'sanitize_callback' => 'internet_service_provider_pro_text_sanitization'
  ));
  $wp_customize->add_control( new VW_Themes_Seperator_custom_Control( $wp_customize, 'internet_service_provider_pro_services_tagline_ct_pallete',
    array(
    'label' => __('Tagline Typography ','internet-service-provider-pro'),
    'section' => 'internet_service_provider_pro_services'
  )));

  $wp_customize->add_setting( 'internet_service_provider_pro_services_tagline_color', array(
    'default' => '',
    'sanitize_callback' => 'sanitize_hex_color'
  ));
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'internet_service_provider_pro_services_tagline_color', array(
    'label' => __('Color', 'internet-service-provider-pro'),
    'section' => 'internet_service_provider_pro_services',
    'settings' => 'internet_service_provider_pro_services_tagline_color',
  )));

  $wp_customize->add_setting('internet_service_provider_pro_services_tagline_font_family',array(
    'default' => '',
    'capability' => 'edit_theme_options',
    'sanitize_callback' => 'sanitize_text_field'
  ));
  $wp_customize->add_control(
    'internet_service_provider_pro_services_tagline_font_family', array(
    'section'  => 'internet_service_provider_pro_services',
    'label'    => __('Font Family','internet-service-provider-pro'),
    'type'     => 'select',
    'choices'  => $font_array,
  ));

  $wp_customize->add_setting('internet_service_provider_pro_services_tagline_font_size',array(
    'default' => '',
    'sanitize_callback' => 'sanitize_text_field'
  ));
  $wp_customize->add_control('internet_service_provider_pro_services_tagline_font_size',array(
    'label' => __('Font Size','internet-service-provider-pro'),
    
    'section' => 'internet_service_provider_pro_services',
    'setting' => 'internet_service_provider_pro_services_tagline_font_size',
    'type'    => 'number'
  ));

  $wp_customize->add_setting( 'internet_service_provider_pro_services_main_heading_ct_pallete',
    array(
      'default' => '',
      'transport' => 'postMessage',
      'sanitize_callback' => 'internet_service_provider_pro_text_sanitization'
  ));
  $wp_customize->add_control( new VW_Themes_Seperator_custom_Control( $wp_customize, 'internet_service_provider_pro_services_main_heading_ct_pallete',
    array(
    'label' => __('Main Heading Typography ','internet-service-provider-pro'),
    'section' => 'internet_service_provider_pro_services'
  )));

  $wp_customize->add_setting( 'internet_service_provider_pro_services_main_heading_color', array(
    'default' => '',
    'sanitize_callback' => 'sanitize_hex_color'
  ));
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'internet_service_provider_pro_services_main_heading_color', array(
    'label' => __('Color', 'internet-service-provider-pro'),
    'section' => 'internet_service_provider_pro_services',
    'settings' => 'internet_service_provider_pro_services_main_heading_color',
  )));

  $wp_customize->add_setting('internet_service_provider_pro_services_main_heading_font_family',array(
    'default' => '',
    'capability' => 'edit_theme_options',
    'sanitize_callback' => 'sanitize_text_field'
  ));
  $wp_customize->add_control(
    'internet_service_provider_pro_services_main_heading_font_family', array(
    'section'  => 'internet_service_provider_pro_services',
    'label'    => __('Font Family','internet-service-provider-pro'),
    'type'     => 'select',
    'choices'  => $font_array,
  ));

  $wp_customize->add_setting('internet_service_provider_pro_services_main_heading_font_size',array(
    'default' => '',
    'sanitize_callback' => 'sanitize_text_field'
  ));
  $wp_customize->add_control('internet_service_provider_pro_services_main_heading_font_size',array(
    'label' => __('Font Size','internet-service-provider-pro'),
    'section' => 'internet_service_provider_pro_services',
    'setting' => 'internet_service_provider_pro_services_main_heading_font_size',
    'type'    => 'number'
  ));

  $wp_customize->add_setting( 'internet_service_provider_pro_services_box_title_ct_pallete',
    array(
      'default' => '',
      'transport' => 'postMessage',
      'sanitize_callback' => 'internet_service_provider_pro_text_sanitization'
  ));
  $wp_customize->add_control( new VW_Themes_Seperator_custom_Control( $wp_customize, 'internet_service_provider_pro_services_box_title_ct_pallete',
    array(
    'label' => __('Box Title Typography ','internet-service-provider-pro'),
    'section' => 'internet_service_provider_pro_services'
  )));

  $wp_customize->add_setting( 'internet_service_provider_pro_services_box_title_color', array(
    'default' => '',
    'sanitize_callback' => 'sanitize_hex_color'
  ));
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'internet_service_provider_pro_services_box_title_color', array(
    'label' => __(' Color', 'internet-service-provider-pro'),
    'section' => 'internet_service_provider_pro_services',
    'settings' => 'internet_service_provider_pro_services_box_title_color',
  )));
  $wp_customize->add_setting('internet_service_provider_pro_services_box_title_font_family',array(
    'default' => '',
    'capability' => 'edit_theme_options',
    'sanitize_callback' => 'sanitize_text_field'
  ));
  $wp_customize->add_control(
    'internet_service_provider_pro_services_box_title_font_family', array(
    'section'  => 'internet_service_provider_pro_services',
    'label'    => __('Font Family','internet-service-provider-pro'),
    'type'     => 'select',
    'choices'  => $font_array,
  ));

  $wp_customize->add_setting('internet_service_provider_pro_services_box_title_font_size',array(
    'default' => '',
    'sanitize_callback' => 'sanitize_text_field'
  ));
  $wp_customize->add_control('internet_service_provider_pro_services_box_title_font_size',array(
    'label' => __('Font Size','internet-service-provider-pro'),
    'section' => 'internet_service_provider_pro_services',
    'setting' => 'internet_service_provider_pro_services_box_title_font_size',
    'type'    => 'number'
  ));

  $wp_customize->add_setting( 'internet_service_provider_pro_services_box_text_ct_pallete',
    array(
      'default' => '',
      'transport' => 'postMessage',
      'sanitize_callback' => 'internet_service_provider_pro_text_sanitization'
  ));
  $wp_customize->add_control( new VW_Themes_Seperator_custom_Control( $wp_customize, 'internet_service_provider_pro_services_box_text_ct_pallete',
    array(
    'label' => __('Box Text Typography ','internet-service-provider-pro'),
    'section' => 'internet_service_provider_pro_services'
  )));

  $wp_customize->add_setting( 'internet_service_provider_pro_services_box_text_color', array(
    'default' => '',
    'sanitize_callback' => 'sanitize_hex_color'
  ));
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'internet_service_provider_pro_services_box_text_color', array(
    'label' => __(' Color', 'internet-service-provider-pro'),
    'section' => 'internet_service_provider_pro_services',
    'settings' => 'internet_service_provider_pro_services_box_text_color',
  )));
  $wp_customize->add_setting('internet_service_provider_pro_services_box_text_font_family',array(
    'default' => '',
    'capability' => 'edit_theme_options',
    'sanitize_callback' => 'sanitize_text_field'
  ));
  $wp_customize->add_control(
    'internet_service_provider_pro_services_box_text_font_family', array(
    'section'  => 'internet_service_provider_pro_services',
    'label'    => __('Font Family','internet-service-provider-pro'),
    'type'     => 'select',
    'choices'  => $font_array,
  ));

  $wp_customize->add_setting('internet_service_provider_pro_services_box_text_font_size',array(
    'default' => '',
    'sanitize_callback' => 'sanitize_text_field'
  ));
  $wp_customize->add_control('internet_service_provider_pro_services_box_text_font_size',array(
    'label' => __('Font Size','internet-service-provider-pro'),
    'section' => 'internet_service_provider_pro_services',
    'setting' => 'internet_service_provider_pro_services_box_text_font_size',
    'type'    => 'number'
  ));

  $wp_customize->add_setting( 'internet_service_provider_pro_services_box_icon_ct_pallete',
    array(
      'default' => '',
      'transport' => 'postMessage',
      'sanitize_callback' => 'internet_service_provider_pro_text_sanitization'
  ));
  $wp_customize->add_control( new VW_Themes_Seperator_custom_Control( $wp_customize, 'internet_service_provider_pro_services_box_icon_ct_pallete',
    array(
    'label' => __('Box Icon Typography ','internet-service-provider-pro'),
    'section' => 'internet_service_provider_pro_services'
  )));

  $wp_customize->add_setting( 'internet_service_provider_pro_services_box_icon_color', array(
    'default' => '',
    'sanitize_callback' => 'sanitize_hex_color'
  ));
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'internet_service_provider_pro_services_box_icon_color', array(
    'label' => __(' Color', 'internet-service-provider-pro'),
    'section' => 'internet_service_provider_pro_services',
    'settings' => 'internet_service_provider_pro_services_box_icon_color',
  )));

  $wp_customize->add_setting( 'internet_service_provider_pro_services_box_icon_bgcolor', array(
    'default' => '',
    'sanitize_callback' => 'sanitize_hex_color'
  ));
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'internet_service_provider_pro_services_box_icon_bgcolor', array(
    'label' => __('Icon Background Color', 'internet-service-provider-pro'),
    'section' => 'internet_service_provider_pro_services',
    'settings' => 'internet_service_provider_pro_services_box_icon_bgcolor',
  )));

  $wp_customize->add_setting( 'internet_service_provider_pro_services_box_icon_hover_color', array(
    'default' => '',
    'sanitize_callback' => 'sanitize_hex_color'
  ));
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'internet_service_provider_pro_services_box_icon_hover_color', array(
    'label' => __('Icon Hover Color', 'internet-service-provider-pro'),
    'section' => 'internet_service_provider_pro_services',
    'settings' => 'internet_service_provider_pro_services_box_icon_hover_color',
  )));

  $wp_customize->add_setting( 'internet_service_provider_pro_services_box_icon_hover_bgcolor', array(
    'default' => '',
    'sanitize_callback' => 'sanitize_hex_color'
  ));
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'internet_service_provider_pro_services_box_icon_hover_bgcolor', array(
    'label' => __('Icon Hover Background Color', 'internet-service-provider-pro'),
    'section' => 'internet_service_provider_pro_services',
    'settings' => 'internet_service_provider_pro_services_box_icon_hover_bgcolor',
  )));

  $wp_customize->add_setting( 'internet_service_provider_pro_services_box_hover_text_color', array(
    'default' => '',
    'sanitize_callback' => 'sanitize_hex_color'
  ));
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'internet_service_provider_pro_services_box_hover_text_color', array(
    'label' => __('Box Hover Text Color', 'internet-service-provider-pro'),
    'section' => 'internet_service_provider_pro_services',
    'settings' => 'internet_service_provider_pro_services_box_hover_text_color',
  )));

  $wp_customize->add_setting('internet_service_provider_pro_services_spacing_left_desktop', array(
    'sanitize_callback' => 'internet_service_provider_pro_sanitize_number_blank',
  ));

  $wp_customize->add_setting('internet_service_provider_pro_services_spacing_top_desktop', array(
    'sanitize_callback' => 'internet_service_provider_pro_sanitize_number_blank',
  ));

  $wp_customize->add_setting('internet_service_provider_pro_services_spacing_bottom_desktop', array(
    'sanitize_callback' => 'internet_service_provider_pro_sanitize_number_blank',
  ));

  $wp_customize->add_setting('internet_service_provider_pro_services_spacing_right_desktop', array(
    'sanitize_callback' => 'internet_service_provider_pro_sanitize_number_blank',
  ));

  $wp_customize->add_control(new VW_Dimensions_Control($wp_customize, 'internet_service_provider_pro_services_spacing', array(
    'section' => 'internet_service_provider_pro_services',
    'label' => esc_html__('Section Spacing(px)', 'internet-service-provider-pro'),
    'settings' => array(
        'desktop_left' => 'internet_service_provider_pro_services_spacing_left_desktop',
        'desktop_top' => 'internet_service_provider_pro_services_spacing_top_desktop',
        'desktop_bottom' => 'internet_service_provider_pro_services_spacing_bottom_desktop',
      'desktop_right' => 'internet_service_provider_pro_services_spacing_right_desktop'
  ),
    'input_attrs' => array(
        'min' => 0,
        'max' => 100,
        'step' => 1,
    ),
    'responsive' => false
  )));

// ------------- Why Choose Us -------------
  $wp_customize->add_section('internet_service_provider_pro_why_choose_us',array(
    'title' => __('Why Choose Us','internet-service-provider-pro'),
    'panel' => 'internet_service_provider_pro_panel_id',
  ));
  $wp_customize->add_setting('internet_service_provider_pro_why_choose_us_enable',
      array(
    'default' => 'Enable',
    'sanitize_callback' => 'internet_service_provider_pro_sanitize_choices'
  ));
  $wp_customize->add_control('internet_service_provider_pro_why_choose_us_enable',
    array(
    'type' => 'radio',
    'label' => __('Do you want this section', 'internet-service-provider-pro'),
    'section' => 'internet_service_provider_pro_why_choose_us',
    'choices' => array(
    'Enable' => __('Enable', 'internet-service-provider-pro'),
    'Disable' => __('Disable', 'internet-service-provider-pro')
  )));
  $wp_customize->selective_refresh->add_partial( 'internet_service_provider_pro_why_choose_us_enable', array(
    'selector' => '#about-us h3',
    'render_callback' => 'internet_service_provider_pro_customize_partial_internet_service_provider_pro_why_choose_us_enable',
  ));
  $wp_customize->add_setting( 'internet_service_provider_pro_why_choose_us_settings',
    array(
    'default' => '',
    'transport' => 'postMessage',
    'sanitize_callback' => 'internet_service_provider_pro_text_sanitization'
  ));
  $wp_customize->add_control( new VW_Themes_Seperator_custom_Control( $wp_customize, 'internet_service_provider_pro_why_choose_us_settings',
    array(
    'label' => __('Section Background Settings','internet-service-provider-pro'),
    'section' => 'internet_service_provider_pro_why_choose_us'
  )));
  $wp_customize->add_setting( 'internet_service_provider_pro_why_choose_us_bgcolor', array(
    'default' => '',
    'sanitize_callback' => 'sanitize_hex_color'
  ));
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'internet_service_provider_pro_why_choose_us_bgcolor', array(
    'label' => __('Section Background Color', 'internet-service-provider-pro'),
    'description'   => __('Either add background color or background image, if you add both background color will be top most priority','internet-service-provider-pro'),
    'section' => 'internet_service_provider_pro_why_choose_us',
    'settings' => 'internet_service_provider_pro_why_choose_us_bgcolor',
  )));
  $wp_customize->add_setting('internet_service_provider_pro_why_choose_us_bgimage',array(
    'default' => '',
    'sanitize_callback' => 'esc_url_raw',
  ));
  $wp_customize->add_control(
    new WP_Customize_Image_Control( $wp_customize,'internet_service_provider_pro_why_choose_us_bgimage',array(
    'label' => __('Section Background Image','internet-service-provider-pro'),
    'description' => __('Dimension 1600px * 430px','internet-service-provider-pro'),
    'section' => 'internet_service_provider_pro_why_choose_us',
    'settings' => 'internet_service_provider_pro_why_choose_us_bgimage'
  )));

  $wp_customize->add_setting( 'internet_service_provider_pro_why_choose_us_bgimage_setting', array(
      'default'         => '',
      'sanitize_callback' => 'internet_service_provider_pro_sanitize_choices'
  ));
  $wp_customize->add_control('internet_service_provider_pro_why_choose_us_bgimage_setting', array(
      'type'      => 'radio',
      'label'     => __('Choose image option', 'internet-service-provider-pro'),
      'section'   => 'internet_service_provider_pro_why_choose_us',
      'choices'   => array(
        'bg-fixed'      => __( 'Fixed', 'internet-service-provider-pro' ),
        'bg-scroll'      => __( 'Scroll', 'internet-service-provider-pro' ),                    
  )));

  $wp_customize->add_setting( 'internet_service_provider_pro_why_choose_us_content_settings',
    array(
    'default' => '',
    'transport' => 'postMessage',
    'sanitize_callback' => 'internet_service_provider_pro_text_sanitization'
  ));
  $wp_customize->add_control( new VW_Themes_Seperator_custom_Control( $wp_customize, 'internet_service_provider_pro_why_choose_us_content_settings',
    array(
    'label' => __('Section Content Settings','internet-service-provider-pro'),
    'section' => 'internet_service_provider_pro_why_choose_us'
  )));

  $wp_customize->add_setting('internet_service_provider_pro_why_choose_us_tagline',array(
    'default' => '',
    'sanitize_callback' => 'sanitize_text_field'
  ));
  $wp_customize->add_control('internet_service_provider_pro_why_choose_us_tagline',array(
    'label' => __('Section Tagline','internet-service-provider-pro'),
    'section' => 'internet_service_provider_pro_why_choose_us',
    'setting' => 'internet_service_provider_pro_why_choose_us_tagline',
    'type'    => 'text'
  ));

  $wp_customize->add_setting('internet_service_provider_pro_why_choose_us_main_heading',array(
    'default' => '',
    'sanitize_callback' => 'sanitize_text_field'
  ));
  $wp_customize->add_control('internet_service_provider_pro_why_choose_us_main_heading',array(
    'label' => __('Section Main Heading','internet-service-provider-pro'),
    'section' => 'internet_service_provider_pro_why_choose_us',
    'setting' => 'internet_service_provider_pro_why_choose_us_main_heading',
    'type'    => 'text'
  ));

  $wp_customize->add_setting('internet_service_provider_pro_why_choose_us_column_image',array(
    'default' => '',
    'sanitize_callback' => 'esc_url_raw',
  ));
  $wp_customize->add_control(
    new WP_Customize_Image_Control( $wp_customize,'internet_service_provider_pro_why_choose_us_column_image',array(
    'label' => __('Column Image','internet-service-provider-pro'),
    'section' => 'internet_service_provider_pro_why_choose_us',
    'settings' => 'internet_service_provider_pro_why_choose_us_column_image'
  )));

  $wp_customize->add_setting('internet_service_provider_pro_why_choose_us_column_image_title',array(
    'default' => '',
    'sanitize_callback' => 'sanitize_text_field'
  ));
  $wp_customize->add_control('internet_service_provider_pro_why_choose_us_column_image_title',array(
    'label' => __('Image Title','internet-service-provider-pro'),
    'section' => 'internet_service_provider_pro_why_choose_us',
    'setting' => 'internet_service_provider_pro_why_choose_us_column_image_title',
    'type'    => 'text'
  ));

  $wp_customize->add_setting('internet_service_provider_pro_why_choose_us_column_image_title_image',array(
    'default' => '',
    'sanitize_callback' => 'esc_url_raw',
  ));
  $wp_customize->add_control(
    new WP_Customize_Image_Control( $wp_customize,'internet_service_provider_pro_why_choose_us_column_image_title_image',array(
    'label' => __('Title Image','internet-service-provider-pro'),
    'section' => 'internet_service_provider_pro_why_choose_us',
    'settings' => 'internet_service_provider_pro_why_choose_us_column_image_title_image'
  )));

  $wp_customize->add_setting(
		'internet_service_provider_pro_why_choose_us_column_image_link_icon',
		array(
			'default'     => '',
			'sanitize_callback' => 'sanitize_text_field'
		)
	);
	$wp_customize->add_control(
		new internet_service_provider_pro_Fontawesome_Icon_Chooser(
			$wp_customize,
			'internet_service_provider_pro_why_choose_us_column_image_link_icon',
			array(
			'settings'    => 'internet_service_provider_pro_why_choose_us_column_image_link_icon',
			'section'   => 'internet_service_provider_pro_why_choose_us',
			'type'      => 'icon',
			'label'     => esc_html__( 'Choose  Icon', 'internet-service-provider-pro' ),
			)
		)
	);

  $wp_customize->add_setting('internet_service_provider_pro_why_choose_us_column_image_link',array(
    'default' => '',
    'sanitize_callback' => 'sanitize_text_field'
  ));
  $wp_customize->add_control('internet_service_provider_pro_why_choose_us_column_image_link',array(
    'label' => __('Add Link','internet-service-provider-pro'),
    'section' => 'internet_service_provider_pro_why_choose_us',
    'setting' => 'internet_service_provider_pro_why_choose_us_column_image_link',
    'type'    => 'text'
  ));

  $wp_customize->add_setting( 'internet_service_provider_pro_why_choose_us_icon_box',
    array(
    'default' => '',
    'transport' => 'postMessage',
    'sanitize_callback' => 'internet_service_provider_pro_text_sanitization'
  ));
  $wp_customize->add_control( new VW_Themes_Seperator_custom_Control( $wp_customize, 'internet_service_provider_pro_why_choose_us_icon_box',
    array(
    'label' => __('Image Box','internet-service-provider-pro'),
    'section' => 'internet_service_provider_pro_why_choose_us'
  )));

  $wp_customize->add_setting('internet_service_provider_pro_why_choose_us_icon_box_number',array(
    'default' => '',
    'sanitize_callback' => 'sanitize_text_field'
  ));
  $wp_customize->add_control('internet_service_provider_pro_why_choose_us_icon_box_number',array(
    'label' => __('Number of Boxes to show','internet-service-provider-pro'),
    'section' => 'internet_service_provider_pro_why_choose_us',
    'setting' => 'internet_service_provider_pro_why_choose_us_icon_box_number',
    'type'    => 'text'
  ));

  $why_choose_us_icon_box = get_theme_mod('internet_service_provider_pro_why_choose_us_icon_box_number');

  for($i=1;$i<=$why_choose_us_icon_box;$i++)
  {
    $wp_customize->add_setting( 'internet_service_provider_pro_why_choose_us_icon_box_settings'.$i,
    array(
      'default' => '',
      'transport' => 'postMessage',
      'sanitize_callback' => 'internet_service_provider_pro_text_sanitization'
    ));
    $wp_customize->add_control( new VW_Themes_Seperator_custom_Control( $wp_customize, 'internet_service_provider_pro_why_choose_us_icon_box_settings'.$i,
      array(
      'label' => __('Box ','internet-service-provider-pro').$i,
      'section' => 'internet_service_provider_pro_why_choose_us'
    )));

    $wp_customize->add_setting('internet_service_provider_pro_why_choose_us_icon_box_step'.$i,array(
      'default' => '',
      'sanitize_callback' => 'sanitize_text_field'
    ));
    $wp_customize->add_control('internet_service_provider_pro_why_choose_us_icon_box_step'.$i,array(
      'label' => __('Add Step ','internet-service-provider-pro'),
      'section' => 'internet_service_provider_pro_why_choose_us',
      'setting' => 'internet_service_provider_pro_why_choose_us_icon_box_step'.$i,
      'type'    => 'text'
    ));

	  $wp_customize->add_setting('internet_service_provider_pro_why_choose_us_icon_box_title'.$i,array(
      'default' => '',
      'sanitize_callback' => 'sanitize_text_field'
    ));
    $wp_customize->add_control('internet_service_provider_pro_why_choose_us_icon_box_title'.$i,array(
      'label' => __('Title ','internet-service-provider-pro'),
      'section' => 'internet_service_provider_pro_why_choose_us',
      'setting' => 'internet_service_provider_pro_why_choose_us_icon_box_title'.$i,
      'type'    => 'text'
    ));
    
    $wp_customize->add_setting('internet_service_provider_pro_why_choose_us_icon_box_text'.$i,array(
      'default' => '',
      'sanitize_callback' => 'sanitize_text_field'
    ));
    $wp_customize->add_control('internet_service_provider_pro_why_choose_us_icon_box_text'.$i,array(
      'label' => __('Title ','internet-service-provider-pro'),
      'section' => 'internet_service_provider_pro_why_choose_us',
      'setting' => 'internet_service_provider_pro_why_choose_us_icon_box_text'.$i,
      'type'    => 'text'
    ));

  }

  $wp_customize->add_setting( 'internet_service_provider_pro_why_choose_us_bottom_content_settings',
    array(
    'default' => '',
    'transport' => 'postMessage',
    'sanitize_callback' => 'internet_service_provider_pro_text_sanitization'
  ));
  $wp_customize->add_control( new VW_Themes_Seperator_custom_Control( $wp_customize, 'internet_service_provider_pro_why_choose_us_bottom_content_settings',
    array(
    'label' => __('Bottom Content Settings','internet-service-provider-pro'),
    'section' => 'internet_service_provider_pro_why_choose_us'
  )));

  $wp_customize->add_setting('internet_service_provider_pro_why_choose_us_bottom_block_text',array(
    'default' => '',
    'sanitize_callback' => 'sanitize_text_field'
  ));
  $wp_customize->add_control('internet_service_provider_pro_why_choose_us_bottom_block_text',array(
    'label' => __('Add Text','internet-service-provider-pro'),
    'section' => 'internet_service_provider_pro_why_choose_us',
    'setting' => 'internet_service_provider_pro_why_choose_us_bottom_block_text',
    'type'    => 'text'
  ));

  $wp_customize->add_setting('internet_service_provider_pro_why_choose_us_bottom_block_tagline',array(
    'default' => '',
    'sanitize_callback' => 'sanitize_text_field'
  ));
  $wp_customize->add_control('internet_service_provider_pro_why_choose_us_bottom_block_tagline',array(
    'label' => __('Add Tagline','internet-service-provider-pro'),
    'section' => 'internet_service_provider_pro_why_choose_us',
    'setting' => 'internet_service_provider_pro_why_choose_us_bottom_block_tagline',
    'type'    => 'text'
  ));

  $wp_customize->add_setting('internet_service_provider_pro_why_choose_us_bottom_block_speed_text',array(
    'default' => '',
    'sanitize_callback' => 'sanitize_text_field'
  ));
  $wp_customize->add_control('internet_service_provider_pro_why_choose_us_bottom_block_speed_text',array(
    'label' => __('Speed Text','internet-service-provider-pro'),
    'section' => 'internet_service_provider_pro_why_choose_us',
    'setting' => 'internet_service_provider_pro_why_choose_us_bottom_block_speed_text',
    'type'    => 'text'
  ));

  $wp_customize->add_setting('internet_service_provider_pro_why_choose_us_bottom_block_speed',array(
    'default' => '',
    'sanitize_callback' => 'sanitize_text_field'
  ));
  $wp_customize->add_control('internet_service_provider_pro_why_choose_us_bottom_block_speed',array(
    'label' => __('Add Speed','internet-service-provider-pro'),
    'section' => 'internet_service_provider_pro_why_choose_us',
    'setting' => 'internet_service_provider_pro_why_choose_us_bottom_block_speed',
    'type'    => 'text'
  ));

  $wp_customize->add_setting( 'internet_service_provider_pro_why_choose_us_color_settings',
    array(
    'default' => '',
    'transport' => 'postMessage',
    'sanitize_callback' => 'internet_service_provider_pro_text_sanitization'
  ));
  $wp_customize->add_control( new VW_Themes_Seperator_custom_Control( $wp_customize, 'internet_service_provider_pro_why_choose_us_color_settings',
  array(
    'label' => __('Section Color & Typography','internet-service-provider-pro'),
    'section' => 'internet_service_provider_pro_why_choose_us'
  )));

  $wp_customize->add_setting( 'internet_service_provider_pro_why_choose_us_tagline_ct_pallete',
    array(
      'default' => '',
      'transport' => 'postMessage',
      'sanitize_callback' => 'internet_service_provider_pro_text_sanitization'
  ));
  $wp_customize->add_control( new VW_Themes_Seperator_custom_Control( $wp_customize, 'internet_service_provider_pro_why_choose_us_tagline_ct_pallete',
    array(
    'label' => __('Tagline Typography ','internet-service-provider-pro'),
    'section' => 'internet_service_provider_pro_why_choose_us'
  )));

  $wp_customize->add_setting( 'internet_service_provider_pro_why_choose_us_tagline_color', array(
    'default' => '',
    'sanitize_callback' => 'sanitize_hex_color'
  ));
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'internet_service_provider_pro_why_choose_us_tagline_color', array(
    'label' => __('Color', 'internet-service-provider-pro'),
    'section' => 'internet_service_provider_pro_why_choose_us',
    'settings' => 'internet_service_provider_pro_why_choose_us_tagline_color',
  )));

  $wp_customize->add_setting('internet_service_provider_pro_why_choose_us_tagline_font_family',array(
    'default' => '',
    'capability' => 'edit_theme_options',
    'sanitize_callback' => 'sanitize_text_field'
  ));
  $wp_customize->add_control(
    'internet_service_provider_pro_why_choose_us_tagline_font_family', array(
    'section'  => 'internet_service_provider_pro_why_choose_us',
    'label'    => __('Font Family','internet-service-provider-pro'),
    'type'     => 'select',
    'choices'  => $font_array,
  ));

  $wp_customize->add_setting('internet_service_provider_pro_why_choose_us_tagline_font_size',array(
    'default' => '',
    'sanitize_callback' => 'sanitize_text_field'
  ));
  $wp_customize->add_control('internet_service_provider_pro_why_choose_us_tagline_font_size',array(
    'label' => __('Font Size','internet-service-provider-pro'),
    
    'section' => 'internet_service_provider_pro_why_choose_us',
    'setting' => 'internet_service_provider_pro_why_choose_us_tagline_font_size',
    'type'    => 'number'
  ));

  $wp_customize->add_setting( 'internet_service_provider_pro_why_choose_us_main_heading_ct_pallete',
    array(
      'default' => '',
      'transport' => 'postMessage',
      'sanitize_callback' => 'internet_service_provider_pro_text_sanitization'
  ));
  $wp_customize->add_control( new VW_Themes_Seperator_custom_Control( $wp_customize, 'internet_service_provider_pro_why_choose_us_main_heading_ct_pallete',
    array(
    'label' => __('Main Heading Typography ','internet-service-provider-pro'),
    'section' => 'internet_service_provider_pro_why_choose_us'
  )));

  $wp_customize->add_setting( 'internet_service_provider_pro_why_choose_us_main_heading_color', array(
    'default' => '',
    'sanitize_callback' => 'sanitize_hex_color'
  ));
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'internet_service_provider_pro_why_choose_us_main_heading_color', array(
    'label' => __('Color', 'internet-service-provider-pro'),
    'section' => 'internet_service_provider_pro_why_choose_us',
    'settings' => 'internet_service_provider_pro_why_choose_us_main_heading_color',
  )));

  $wp_customize->add_setting('internet_service_provider_pro_why_choose_us_main_heading_font_family',array(
    'default' => '',
    'capability' => 'edit_theme_options',
    'sanitize_callback' => 'sanitize_text_field'
  ));
  $wp_customize->add_control(
    'internet_service_provider_pro_why_choose_us_main_heading_font_family', array(
    'section'  => 'internet_service_provider_pro_why_choose_us',
    'label'    => __('Font Family','internet-service-provider-pro'),
    'type'     => 'select',
    'choices'  => $font_array,
  ));

  $wp_customize->add_setting('internet_service_provider_pro_why_choose_us_main_heading_font_size',array(
    'default' => '',
    'sanitize_callback' => 'sanitize_text_field'
  ));
  $wp_customize->add_control('internet_service_provider_pro_why_choose_us_main_heading_font_size',array(
    'label' => __('Font Size','internet-service-provider-pro'),
    'section' => 'internet_service_provider_pro_why_choose_us',
    'setting' => 'internet_service_provider_pro_why_choose_us_main_heading_font_size',
    'type'    => 'number'
  ));

  $wp_customize->add_setting( 'internet_service_provider_pro_why_choose_us_box_title_ct_pallete',
    array(
      'default' => '',
      'transport' => 'postMessage',
      'sanitize_callback' => 'internet_service_provider_pro_text_sanitization'
  ));
  $wp_customize->add_control( new VW_Themes_Seperator_custom_Control( $wp_customize, 'internet_service_provider_pro_why_choose_us_box_title_ct_pallete',
    array(
    'label' => __('Box Title Typography ','internet-service-provider-pro'),
    'section' => 'internet_service_provider_pro_why_choose_us'
  )));

  $wp_customize->add_setting( 'internet_service_provider_pro_why_choose_us_box_title_color', array(
    'default' => '',
    'sanitize_callback' => 'sanitize_hex_color'
  ));
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'internet_service_provider_pro_why_choose_us_box_title_color', array(
    'label' => __(' Color', 'internet-service-provider-pro'),
    'section' => 'internet_service_provider_pro_why_choose_us',
    'settings' => 'internet_service_provider_pro_why_choose_us_box_title_color',
  )));
  $wp_customize->add_setting('internet_service_provider_pro_why_choose_us_box_title_font_family',array(
    'default' => '',
    'capability' => 'edit_theme_options',
    'sanitize_callback' => 'sanitize_text_field'
  ));
  $wp_customize->add_control(
    'internet_service_provider_pro_why_choose_us_box_title_font_family', array(
    'section'  => 'internet_service_provider_pro_why_choose_us',
    'label'    => __('Font Family','internet-service-provider-pro'),
    'type'     => 'select',
    'choices'  => $font_array,
  ));

  $wp_customize->add_setting('internet_service_provider_pro_why_choose_us_box_title_font_size',array(
    'default' => '',
    'sanitize_callback' => 'sanitize_text_field'
  ));
  $wp_customize->add_control('internet_service_provider_pro_why_choose_us_box_title_font_size',array(
    'label' => __('Font Size','internet-service-provider-pro'),
    'section' => 'internet_service_provider_pro_why_choose_us',
    'setting' => 'internet_service_provider_pro_why_choose_us_box_title_font_size',
    'type'    => 'number'
  ));

  $wp_customize->add_setting( 'internet_service_provider_pro_why_choose_us_box_text_ct_pallete',
    array(
      'default' => '',
      'transport' => 'postMessage',
      'sanitize_callback' => 'internet_service_provider_pro_text_sanitization'
  ));
  $wp_customize->add_control( new VW_Themes_Seperator_custom_Control( $wp_customize, 'internet_service_provider_pro_why_choose_us_box_text_ct_pallete',
    array(
    'label' => __('Box Text Typography ','internet-service-provider-pro'),
    'section' => 'internet_service_provider_pro_why_choose_us'
  )));

  $wp_customize->add_setting( 'internet_service_provider_pro_why_choose_us_box_text_color', array(
    'default' => '',
    'sanitize_callback' => 'sanitize_hex_color'
  ));
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'internet_service_provider_pro_why_choose_us_box_text_color', array(
    'label' => __(' Color', 'internet-service-provider-pro'),
    'section' => 'internet_service_provider_pro_why_choose_us',
    'settings' => 'internet_service_provider_pro_why_choose_us_box_text_color',
  )));
  $wp_customize->add_setting('internet_service_provider_pro_why_choose_us_box_text_font_family',array(
    'default' => '',
    'capability' => 'edit_theme_options',
    'sanitize_callback' => 'sanitize_text_field'
  ));
  $wp_customize->add_control(
    'internet_service_provider_pro_why_choose_us_box_text_font_family', array(
    'section'  => 'internet_service_provider_pro_why_choose_us',
    'label'    => __('Font Family','internet-service-provider-pro'),
    'type'     => 'select',
    'choices'  => $font_array,
  ));

  $wp_customize->add_setting('internet_service_provider_pro_why_choose_us_box_text_font_size',array(
    'default' => '',
    'sanitize_callback' => 'sanitize_text_field'
  ));
  $wp_customize->add_control('internet_service_provider_pro_why_choose_us_box_text_font_size',array(
    'label' => __('Font Size','internet-service-provider-pro'),
    'section' => 'internet_service_provider_pro_why_choose_us',
    'setting' => 'internet_service_provider_pro_why_choose_us_box_text_font_size',
    'type'    => 'number'
  ));

  $wp_customize->add_setting( 'internet_service_provider_pro_why_choose_us_box_icon_ct_pallete',
    array(
      'default' => '',
      'transport' => 'postMessage',
      'sanitize_callback' => 'internet_service_provider_pro_text_sanitization'
  ));
  $wp_customize->add_control( new VW_Themes_Seperator_custom_Control( $wp_customize, 'internet_service_provider_pro_why_choose_us_box_icon_ct_pallete',
    array(
    'label' => __('Box Icon Typography ','internet-service-provider-pro'),
    'section' => 'internet_service_provider_pro_why_choose_us'
  )));

  $wp_customize->add_setting( 'internet_service_provider_pro_why_choose_us_box_icon_color', array(
    'default' => '',
    'sanitize_callback' => 'sanitize_hex_color'
  ));
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'internet_service_provider_pro_why_choose_us_box_icon_color', array(
    'label' => __(' Color', 'internet-service-provider-pro'),
    'section' => 'internet_service_provider_pro_why_choose_us',
    'settings' => 'internet_service_provider_pro_why_choose_us_box_icon_color',
  )));

  $wp_customize->add_setting( 'internet_service_provider_pro_why_choose_us_box_icon_bgcolor', array(
    'default' => '',
    'sanitize_callback' => 'sanitize_hex_color'
  ));
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'internet_service_provider_pro_why_choose_us_box_icon_bgcolor', array(
    'label' => __('Icon Background Color', 'internet-service-provider-pro'),
    'section' => 'internet_service_provider_pro_why_choose_us',
    'settings' => 'internet_service_provider_pro_why_choose_us_box_icon_bgcolor',
  )));

  $wp_customize->add_setting( 'internet_service_provider_pro_why_choose_us_box_icon_hover_color', array(
    'default' => '',
    'sanitize_callback' => 'sanitize_hex_color'
  ));
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'internet_service_provider_pro_why_choose_us_box_icon_hover_color', array(
    'label' => __('Icon Hover Color', 'internet-service-provider-pro'),
    'section' => 'internet_service_provider_pro_why_choose_us',
    'settings' => 'internet_service_provider_pro_why_choose_us_box_icon_hover_color',
  )));

  $wp_customize->add_setting( 'internet_service_provider_pro_why_choose_us_box_icon_hover_bgcolor', array(
    'default' => '',
    'sanitize_callback' => 'sanitize_hex_color'
  ));
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'internet_service_provider_pro_why_choose_us_box_icon_hover_bgcolor', array(
    'label' => __('Icon Hover Background Color', 'internet-service-provider-pro'),
    'section' => 'internet_service_provider_pro_why_choose_us',
    'settings' => 'internet_service_provider_pro_why_choose_us_box_icon_hover_bgcolor',
  )));

  $wp_customize->add_setting( 'internet_service_provider_pro_why_choose_us_box_hover_text_color', array(
    'default' => '',
    'sanitize_callback' => 'sanitize_hex_color'
  ));
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'internet_service_provider_pro_why_choose_us_box_hover_text_color', array(
    'label' => __('Box Hover Text Color', 'internet-service-provider-pro'),
    'section' => 'internet_service_provider_pro_why_choose_us',
    'settings' => 'internet_service_provider_pro_why_choose_us_box_hover_text_color',
  )));

  $wp_customize->add_setting('internet_service_provider_pro_why_choose_us_spacing_left_desktop', array(
    'sanitize_callback' => 'internet_service_provider_pro_sanitize_number_blank',
  ));

  $wp_customize->add_setting('internet_service_provider_pro_why_choose_us_spacing_top_desktop', array(
    'sanitize_callback' => 'internet_service_provider_pro_sanitize_number_blank',
  ));

  $wp_customize->add_setting('internet_service_provider_pro_why_choose_us_spacing_bottom_desktop', array(
    'sanitize_callback' => 'internet_service_provider_pro_sanitize_number_blank',
  ));

  $wp_customize->add_setting('internet_service_provider_pro_why_choose_us_spacing_right_desktop', array(
    'sanitize_callback' => 'internet_service_provider_pro_sanitize_number_blank',
  ));

  $wp_customize->add_control(new VW_Dimensions_Control($wp_customize, 'internet_service_provider_pro_why_choose_us_spacing', array(
    'section' => 'internet_service_provider_pro_why_choose_us',
    'label' => esc_html__('Section Spacing(px)', 'internet-service-provider-pro'),
    'settings' => array(
        'desktop_left' => 'internet_service_provider_pro_why_choose_us_spacing_left_desktop',
        'desktop_top' => 'internet_service_provider_pro_why_choose_us_spacing_top_desktop',
        'desktop_bottom' => 'internet_service_provider_pro_why_choose_us_spacing_bottom_desktop',
      'desktop_right' => 'internet_service_provider_pro_why_choose_us_spacing_right_desktop'
  ),
    'input_attrs' => array(
        'min' => 0,
        'max' => 100,
        'step' => 1,
    ),
    'responsive' => false
  )));

  // ------------- Exclusive Offers -------------
  $wp_customize->add_section('internet_service_provider_pro_exclusive_offers',array(
    'title' => __('Exclusive Offers','internet-service-provider-pro'),
    'panel' => 'internet_service_provider_pro_panel_id',
  ));
  $wp_customize->add_setting('internet_service_provider_pro_exclusive_offers_enable',
      array(
    'default' => 'Enable',
    'sanitize_callback' => 'internet_service_provider_pro_sanitize_choices'
  ));
  $wp_customize->add_control('internet_service_provider_pro_exclusive_offers_enable',
    array(
    'type' => 'radio',
    'label' => __('Do you want this section', 'internet-service-provider-pro'),
    'section' => 'internet_service_provider_pro_exclusive_offers',
    'choices' => array(
    'Enable' => __('Enable', 'internet-service-provider-pro'),
    'Disable' => __('Disable', 'internet-service-provider-pro')
  )));
  $wp_customize->selective_refresh->add_partial( 'internet_service_provider_pro_exclusive_offers_enable', array(
    'selector' => '#about-us h3',
    'render_callback' => 'internet_service_provider_pro_customize_partial_internet_service_provider_pro_exclusive_offers_enable',
  ));
  $wp_customize->add_setting( 'internet_service_provider_pro_exclusive_offers_settings',
    array(
    'default' => '',
    'transport' => 'postMessage',
    'sanitize_callback' => 'internet_service_provider_pro_text_sanitization'
  ));
  $wp_customize->add_control( new VW_Themes_Seperator_custom_Control( $wp_customize, 'internet_service_provider_pro_exclusive_offers_settings',
    array(
    'label' => __('Section Background Settings','internet-service-provider-pro'),
    'section' => 'internet_service_provider_pro_exclusive_offers'
  )));
  $wp_customize->add_setting( 'internet_service_provider_pro_exclusive_offers_bgcolor', array(
    'default' => '',
    'sanitize_callback' => 'sanitize_hex_color'
  ));
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'internet_service_provider_pro_exclusive_offers_bgcolor', array(
    'label' => __('Section Background Color', 'internet-service-provider-pro'),
    'description'   => __('Either add background color or background image, if you add both background color will be top most priority','internet-service-provider-pro'),
    'section' => 'internet_service_provider_pro_exclusive_offers',
    'settings' => 'internet_service_provider_pro_exclusive_offers_bgcolor',
  )));
  $wp_customize->add_setting('internet_service_provider_pro_exclusive_offers_bgimage',array(
    'default' => '',
    'sanitize_callback' => 'esc_url_raw',
  ));
  $wp_customize->add_control(
    new WP_Customize_Image_Control( $wp_customize,'internet_service_provider_pro_exclusive_offers_bgimage',array(
    'label' => __('Section Background Image','internet-service-provider-pro'),
    'description' => __('Dimension 1600px * 430px','internet-service-provider-pro'),
    'section' => 'internet_service_provider_pro_exclusive_offers',
    'settings' => 'internet_service_provider_pro_exclusive_offers_bgimage'
  )));

  $wp_customize->add_setting( 'internet_service_provider_pro_exclusive_offers_bgimage_setting', array(
      'default'         => '',
      'sanitize_callback' => 'internet_service_provider_pro_sanitize_choices'
  ));
  $wp_customize->add_control('internet_service_provider_pro_exclusive_offers_bgimage_setting', array(
      'type'      => 'radio',
      'label'     => __('Choose image option', 'internet-service-provider-pro'),
      'section'   => 'internet_service_provider_pro_exclusive_offers',
      'choices'   => array(
        'bg-fixed'      => __( 'Fixed', 'internet-service-provider-pro' ),
        'bg-scroll'      => __( 'Scroll', 'internet-service-provider-pro' ),                    
  )));

  $wp_customize->add_setting( 'internet_service_provider_pro_exclusive_offers_content_settings',
    array(
    'default' => '',
    'transport' => 'postMessage',
    'sanitize_callback' => 'internet_service_provider_pro_text_sanitization'
  ));
  $wp_customize->add_control( new VW_Themes_Seperator_custom_Control( $wp_customize, 'internet_service_provider_pro_exclusive_offers_content_settings',
    array(
    'label' => __('Section Content Settings','internet-service-provider-pro'),
    'section' => 'internet_service_provider_pro_exclusive_offers'
  )));

  $wp_customize->add_setting('internet_service_provider_pro_exclusive_offers_tagline',array(
    'default' => '',
    'sanitize_callback' => 'sanitize_text_field'
  ));
  $wp_customize->add_control('internet_service_provider_pro_exclusive_offers_tagline',array(
    'label' => __('Section Tagline','internet-service-provider-pro'),
    'section' => 'internet_service_provider_pro_exclusive_offers',
    'setting' => 'internet_service_provider_pro_exclusive_offers_tagline',
    'type'    => 'text'
  ));

  $wp_customize->add_setting('internet_service_provider_pro_exclusive_offers_main_heading',array(
    'default' => '',
    'sanitize_callback' => 'sanitize_text_field'
  ));
  $wp_customize->add_control('internet_service_provider_pro_exclusive_offers_main_heading',array(
    'label' => __('Section Main Heading','internet-service-provider-pro'),
    'section' => 'internet_service_provider_pro_exclusive_offers',
    'setting' => 'internet_service_provider_pro_exclusive_offers_main_heading',
    'type'    => 'text'
  ));

  $wp_customize->add_setting('internet_service_provider_pro_exclusive_offers_text',array(
    'default' => '',
    'sanitize_callback' => 'sanitize_text_field'
  ));
  $wp_customize->add_control('internet_service_provider_pro_exclusive_offers_text',array(
    'label' => __('Section Text','internet-service-provider-pro'),
    'section' => 'internet_service_provider_pro_exclusive_offers',
    'setting' => 'internet_service_provider_pro_exclusive_offers_text',
    'type'    => 'text'
  ));

  $wp_customize->add_setting( 'internet_service_provider_pro_exclusive_offers_listing_box',
    array(
    'default' => '',
    'transport' => 'postMessage',
    'sanitize_callback' => 'internet_service_provider_pro_text_sanitization'
  ));
  $wp_customize->add_control( new VW_Themes_Seperator_custom_Control( $wp_customize, 'internet_service_provider_pro_exclusive_offers_listing_box',
    array(
    'label' => __('Image Box','internet-service-provider-pro'),
    'section' => 'internet_service_provider_pro_exclusive_offers'
  )));

  $wp_customize->add_setting('internet_service_provider_pro_exclusive_offers_listing_number',array(
    'default' => '',
    'sanitize_callback' => 'sanitize_text_field'
  ));
  $wp_customize->add_control('internet_service_provider_pro_exclusive_offers_listing_number',array(
    'label' => __('Number of Boxes to show','internet-service-provider-pro'),
    'section' => 'internet_service_provider_pro_exclusive_offers',
    'setting' => 'internet_service_provider_pro_exclusive_offers_listing_number',
    'type'    => 'text'
  ));

  $exclusive-offers_icon_box = get_theme_mod('internet_service_provider_pro_exclusive_offers_listing_number');

  for($i=1;$i<=$exclusive-offers_icon_box;$i++)
  {

    $wp_customize->add_setting('internet_service_provider_pro_exclusive_offers_listing'.$i,array(
      'default' => '',
      'sanitize_callback' => 'sanitize_text_field'
    ));
    $wp_customize->add_control('internet_service_provider_pro_exclusive_offers_listing'.$i,array(
      'label' => __('Add Text ','internet-service-provider-pro'),
      'section' => 'internet_service_provider_pro_exclusive_offers',
      'setting' => 'internet_service_provider_pro_exclusive_offers_listing'.$i,
      'type'    => 'text'
    ));
  }

  $wp_customize->add_setting( 'internet_service_provider_pro_exclusive_offers_icon_box',
    array(
    'default' => '',
    'transport' => 'postMessage',
    'sanitize_callback' => 'internet_service_provider_pro_text_sanitization'
  ));
  $wp_customize->add_control( new VW_Themes_Seperator_custom_Control( $wp_customize, 'internet_service_provider_pro_exclusive_offers_icon_box',
    array(
    'label' => __('Offer Box','internet-service-provider-pro'),
    'section' => 'internet_service_provider_pro_exclusive_offers'
  )));

  $wp_customize->add_setting('internet_service_provider_pro_exclusive_offers_icon_box_number',array(
    'default' => '',
    'sanitize_callback' => 'sanitize_text_field'
  ));
  $wp_customize->add_control('internet_service_provider_pro_exclusive_offers_icon_box_number',array(
    'label' => __('Number of Boxes to show','internet-service-provider-pro'),
    'section' => 'internet_service_provider_pro_exclusive_offers',
    'setting' => 'internet_service_provider_pro_exclusive_offers_icon_box_number',
    'type'    => 'text'
  ));

  $exclusive-offers_icon_box = get_theme_mod('internet_service_provider_pro_exclusive_offers_icon_box_number');

  for($i=1;$i<=$exclusive-offers_icon_box;$i++)
  {
    $wp_customize->add_setting( 'internet_service_provider_pro_exclusive_offers_icon_box_settings'.$i,
    array(
      'default' => '',
      'transport' => 'postMessage',
      'sanitize_callback' => 'internet_service_provider_pro_text_sanitization'
    ));
    $wp_customize->add_control( new VW_Themes_Seperator_custom_Control( $wp_customize, 'internet_service_provider_pro_exclusive_offers_icon_box_settings'.$i,
      array(
      'label' => __('Box ','internet-service-provider-pro').$i,
      'section' => 'internet_service_provider_pro_exclusive_offers'
    )));

	  $wp_customize->add_setting('internet_service_provider_pro_exclusive_offers_icon_box_title'.$i,array(
      'default' => '',
      'sanitize_callback' => 'sanitize_text_field'
    ));
    $wp_customize->add_control('internet_service_provider_pro_exclusive_offers_icon_box_title'.$i,array(
      'label' => __('Title ','internet-service-provider-pro'),
      'section' => 'internet_service_provider_pro_exclusive_offers',
      'setting' => 'internet_service_provider_pro_exclusive_offers_icon_box_title'.$i,
      'type'    => 'text'
    ));
    
    $wp_customize->add_setting('internet_service_provider_pro_exclusive_offers_icon_box_speed'.$i,array(
      'default' => '',
      'sanitize_callback' => 'sanitize_text_field'
    ));
    $wp_customize->add_control('internet_service_provider_pro_exclusive_offers_icon_box_speed'.$i,array(
      'label' => __('Speed ','internet-service-provider-pro'),
      'section' => 'internet_service_provider_pro_exclusive_offers',
      'setting' => 'internet_service_provider_pro_exclusive_offers_icon_box_speed'.$i,
      'type'    => 'text'
    ));


    $wp_customize->add_setting('internet_service_provider_pro_exclusive_offers_icon_box_package'.$i,array(
      'default' => '',
      'sanitize_callback' => 'sanitize_text_field'
    ));
    $wp_customize->add_control('internet_service_provider_pro_exclusive_offers_icon_box_package'.$i,array(
      'label' => __('Package','internet-service-provider-pro'),
      'section' => 'internet_service_provider_pro_exclusive_offers',
      'setting' => 'internet_service_provider_pro_exclusive_offers_icon_box_package'.$i,
      'type'    => 'text'
    ));

    $wp_customize->add_setting('internet_service_provider_pro_exclusive_offers_icon_box_url'.$i,array(
      'default' => '',
      'sanitize_callback' => 'sanitize_text_field'
    ));
    $wp_customize->add_control('internet_service_provider_pro_exclusive_offers_icon_box_url'.$i,array(
      'label' => __('Add url','internet-service-provider-pro'),
      'section' => 'internet_service_provider_pro_exclusive_offers',
      'setting' => 'internet_service_provider_pro_exclusive_offers_icon_box_url'.$i,
      'type'    => 'text'
    ));
  }

  $wp_customize->add_setting( 'internet_service_provider_pro_exclusive_offers_bottom_content_settings',
    array(
    'default' => '',
    'transport' => 'postMessage',
    'sanitize_callback' => 'internet_service_provider_pro_text_sanitization'
  ));
  $wp_customize->add_control( new VW_Themes_Seperator_custom_Control( $wp_customize, 'internet_service_provider_pro_exclusive_offers_bottom_content_settings',
    array(
    'label' => __('Bottom Content Settings','internet-service-provider-pro'),
    'section' => 'internet_service_provider_pro_exclusive_offers'
  )));

  $wp_customize->add_setting('internet_service_provider_pro_exclusive_offers_bottom_block_text',array(
    'default' => '',
    'sanitize_callback' => 'sanitize_text_field'
  ));
  $wp_customize->add_control('internet_service_provider_pro_exclusive_offers_bottom_block_text',array(
    'label' => __('Add Text','internet-service-provider-pro'),
    'section' => 'internet_service_provider_pro_exclusive_offers',
    'setting' => 'internet_service_provider_pro_exclusive_offers_bottom_block_text',
    'type'    => 'text'
  ));

  $wp_customize->add_setting('internet_service_provider_pro_exclusive_offers_bottom_block_tagline',array(
    'default' => '',
    'sanitize_callback' => 'sanitize_text_field'
  ));
  $wp_customize->add_control('internet_service_provider_pro_exclusive_offers_bottom_block_tagline',array(
    'label' => __('Add Tagline','internet-service-provider-pro'),
    'section' => 'internet_service_provider_pro_exclusive_offers',
    'setting' => 'internet_service_provider_pro_exclusive_offers_bottom_block_tagline',
    'type'    => 'text'
  ));

  $wp_customize->add_setting('internet_service_provider_pro_exclusive_offers_bottom_block_speed_text',array(
    'default' => '',
    'sanitize_callback' => 'sanitize_text_field'
  ));
  $wp_customize->add_control('internet_service_provider_pro_exclusive_offers_bottom_block_speed_text',array(
    'label' => __('Speed Text','internet-service-provider-pro'),
    'section' => 'internet_service_provider_pro_exclusive_offers',
    'setting' => 'internet_service_provider_pro_exclusive_offers_bottom_block_speed_text',
    'type'    => 'text'
  ));

  $wp_customize->add_setting('internet_service_provider_pro_exclusive_offers_bottom_block_speed',array(
    'default' => '',
    'sanitize_callback' => 'sanitize_text_field'
  ));
  $wp_customize->add_control('internet_service_provider_pro_exclusive_offers_bottom_block_speed',array(
    'label' => __('Add Speed','internet-service-provider-pro'),
    'section' => 'internet_service_provider_pro_exclusive_offers',
    'setting' => 'internet_service_provider_pro_exclusive_offers_bottom_block_speed',
    'type'    => 'text'
  ));

  $wp_customize->add_setting( 'internet_service_provider_pro_exclusive_offers_color_settings',
    array(
    'default' => '',
    'transport' => 'postMessage',
    'sanitize_callback' => 'internet_service_provider_pro_text_sanitization'
  ));
  $wp_customize->add_control( new VW_Themes_Seperator_custom_Control( $wp_customize, 'internet_service_provider_pro_exclusive_offers_color_settings',
  array(
    'label' => __('Section Color & Typography','internet-service-provider-pro'),
    'section' => 'internet_service_provider_pro_exclusive_offers'
  )));

  $wp_customize->add_setting( 'internet_service_provider_pro_exclusive_offers_tagline_ct_pallete',
    array(
      'default' => '',
      'transport' => 'postMessage',
      'sanitize_callback' => 'internet_service_provider_pro_text_sanitization'
  ));
  $wp_customize->add_control( new VW_Themes_Seperator_custom_Control( $wp_customize, 'internet_service_provider_pro_exclusive_offers_tagline_ct_pallete',
    array(
    'label' => __('Tagline Typography ','internet-service-provider-pro'),
    'section' => 'internet_service_provider_pro_exclusive_offers'
  )));

  $wp_customize->add_setting( 'internet_service_provider_pro_exclusive_offers_tagline_color', array(
    'default' => '',
    'sanitize_callback' => 'sanitize_hex_color'
  ));
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'internet_service_provider_pro_exclusive_offers_tagline_color', array(
    'label' => __('Color', 'internet-service-provider-pro'),
    'section' => 'internet_service_provider_pro_exclusive_offers',
    'settings' => 'internet_service_provider_pro_exclusive_offers_tagline_color',
  )));

  $wp_customize->add_setting('internet_service_provider_pro_exclusive_offers_tagline_font_family',array(
    'default' => '',
    'capability' => 'edit_theme_options',
    'sanitize_callback' => 'sanitize_text_field'
  ));
  $wp_customize->add_control(
    'internet_service_provider_pro_exclusive_offers_tagline_font_family', array(
    'section'  => 'internet_service_provider_pro_exclusive_offers',
    'label'    => __('Font Family','internet-service-provider-pro'),
    'type'     => 'select',
    'choices'  => $font_array,
  ));

  $wp_customize->add_setting('internet_service_provider_pro_exclusive_offers_tagline_font_size',array(
    'default' => '',
    'sanitize_callback' => 'sanitize_text_field'
  ));
  $wp_customize->add_control('internet_service_provider_pro_exclusive_offers_tagline_font_size',array(
    'label' => __('Font Size','internet-service-provider-pro'),
    
    'section' => 'internet_service_provider_pro_exclusive_offers',
    'setting' => 'internet_service_provider_pro_exclusive_offers_tagline_font_size',
    'type'    => 'number'
  ));

  $wp_customize->add_setting( 'internet_service_provider_pro_exclusive_offers_main_heading_ct_pallete',
    array(
      'default' => '',
      'transport' => 'postMessage',
      'sanitize_callback' => 'internet_service_provider_pro_text_sanitization'
  ));
  $wp_customize->add_control( new VW_Themes_Seperator_custom_Control( $wp_customize, 'internet_service_provider_pro_exclusive_offers_main_heading_ct_pallete',
    array(
    'label' => __('Main Heading Typography ','internet-service-provider-pro'),
    'section' => 'internet_service_provider_pro_exclusive_offers'
  )));

  $wp_customize->add_setting( 'internet_service_provider_pro_exclusive_offers_main_heading_color', array(
    'default' => '',
    'sanitize_callback' => 'sanitize_hex_color'
  ));
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'internet_service_provider_pro_exclusive_offers_main_heading_color', array(
    'label' => __('Color', 'internet-service-provider-pro'),
    'section' => 'internet_service_provider_pro_exclusive_offers',
    'settings' => 'internet_service_provider_pro_exclusive_offers_main_heading_color',
  )));

  $wp_customize->add_setting('internet_service_provider_pro_exclusive_offers_main_heading_font_family',array(
    'default' => '',
    'capability' => 'edit_theme_options',
    'sanitize_callback' => 'sanitize_text_field'
  ));
  $wp_customize->add_control(
    'internet_service_provider_pro_exclusive_offers_main_heading_font_family', array(
    'section'  => 'internet_service_provider_pro_exclusive_offers',
    'label'    => __('Font Family','internet-service-provider-pro'),
    'type'     => 'select',
    'choices'  => $font_array,
  ));

  $wp_customize->add_setting('internet_service_provider_pro_exclusive_offers_main_heading_font_size',array(
    'default' => '',
    'sanitize_callback' => 'sanitize_text_field'
  ));
  $wp_customize->add_control('internet_service_provider_pro_exclusive_offers_main_heading_font_size',array(
    'label' => __('Font Size','internet-service-provider-pro'),
    'section' => 'internet_service_provider_pro_exclusive_offers',
    'setting' => 'internet_service_provider_pro_exclusive_offers_main_heading_font_size',
    'type'    => 'number'
  ));

  $wp_customize->add_setting( 'internet_service_provider_pro_exclusive_offers_box_title_ct_pallete',
    array(
      'default' => '',
      'transport' => 'postMessage',
      'sanitize_callback' => 'internet_service_provider_pro_text_sanitization'
  ));
  $wp_customize->add_control( new VW_Themes_Seperator_custom_Control( $wp_customize, 'internet_service_provider_pro_exclusive_offers_box_title_ct_pallete',
    array(
    'label' => __('Box Title Typography ','internet-service-provider-pro'),
    'section' => 'internet_service_provider_pro_exclusive_offers'
  )));

  $wp_customize->add_setting( 'internet_service_provider_pro_exclusive_offers_box_title_color', array(
    'default' => '',
    'sanitize_callback' => 'sanitize_hex_color'
  ));
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'internet_service_provider_pro_exclusive_offers_box_title_color', array(
    'label' => __(' Color', 'internet-service-provider-pro'),
    'section' => 'internet_service_provider_pro_exclusive_offers',
    'settings' => 'internet_service_provider_pro_exclusive_offers_box_title_color',
  )));
  $wp_customize->add_setting('internet_service_provider_pro_exclusive_offers_box_title_font_family',array(
    'default' => '',
    'capability' => 'edit_theme_options',
    'sanitize_callback' => 'sanitize_text_field'
  ));
  $wp_customize->add_control(
    'internet_service_provider_pro_exclusive_offers_box_title_font_family', array(
    'section'  => 'internet_service_provider_pro_exclusive_offers',
    'label'    => __('Font Family','internet-service-provider-pro'),
    'type'     => 'select',
    'choices'  => $font_array,
  ));

  $wp_customize->add_setting('internet_service_provider_pro_exclusive_offers_box_title_font_size',array(
    'default' => '',
    'sanitize_callback' => 'sanitize_text_field'
  ));
  $wp_customize->add_control('internet_service_provider_pro_exclusive_offers_box_title_font_size',array(
    'label' => __('Font Size','internet-service-provider-pro'),
    'section' => 'internet_service_provider_pro_exclusive_offers',
    'setting' => 'internet_service_provider_pro_exclusive_offers_box_title_font_size',
    'type'    => 'number'
  ));

  $wp_customize->add_setting( 'internet_service_provider_pro_exclusive_offers_box_text_ct_pallete',
    array(
      'default' => '',
      'transport' => 'postMessage',
      'sanitize_callback' => 'internet_service_provider_pro_text_sanitization'
  ));
  $wp_customize->add_control( new VW_Themes_Seperator_custom_Control( $wp_customize, 'internet_service_provider_pro_exclusive_offers_box_text_ct_pallete',
    array(
    'label' => __('Box Text Typography ','internet-service-provider-pro'),
    'section' => 'internet_service_provider_pro_exclusive_offers'
  )));

  $wp_customize->add_setting( 'internet_service_provider_pro_exclusive_offers_box_text_color', array(
    'default' => '',
    'sanitize_callback' => 'sanitize_hex_color'
  ));
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'internet_service_provider_pro_exclusive_offers_box_text_color', array(
    'label' => __(' Color', 'internet-service-provider-pro'),
    'section' => 'internet_service_provider_pro_exclusive_offers',
    'settings' => 'internet_service_provider_pro_exclusive_offers_box_text_color',
  )));
  $wp_customize->add_setting('internet_service_provider_pro_exclusive_offers_box_text_font_family',array(
    'default' => '',
    'capability' => 'edit_theme_options',
    'sanitize_callback' => 'sanitize_text_field'
  ));
  $wp_customize->add_control(
    'internet_service_provider_pro_exclusive_offers_box_text_font_family', array(
    'section'  => 'internet_service_provider_pro_exclusive_offers',
    'label'    => __('Font Family','internet-service-provider-pro'),
    'type'     => 'select',
    'choices'  => $font_array,
  ));

  $wp_customize->add_setting('internet_service_provider_pro_exclusive_offers_box_text_font_size',array(
    'default' => '',
    'sanitize_callback' => 'sanitize_text_field'
  ));
  $wp_customize->add_control('internet_service_provider_pro_exclusive_offers_box_text_font_size',array(
    'label' => __('Font Size','internet-service-provider-pro'),
    'section' => 'internet_service_provider_pro_exclusive_offers',
    'setting' => 'internet_service_provider_pro_exclusive_offers_box_text_font_size',
    'type'    => 'number'
  ));

  $wp_customize->add_setting( 'internet_service_provider_pro_exclusive_offers_box_icon_ct_pallete',
    array(
      'default' => '',
      'transport' => 'postMessage',
      'sanitize_callback' => 'internet_service_provider_pro_text_sanitization'
  ));
  $wp_customize->add_control( new VW_Themes_Seperator_custom_Control( $wp_customize, 'internet_service_provider_pro_exclusive_offers_box_icon_ct_pallete',
    array(
    'label' => __('Box Icon Typography ','internet-service-provider-pro'),
    'section' => 'internet_service_provider_pro_exclusive_offers'
  )));

  $wp_customize->add_setting( 'internet_service_provider_pro_exclusive_offers_box_icon_color', array(
    'default' => '',
    'sanitize_callback' => 'sanitize_hex_color'
  ));
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'internet_service_provider_pro_exclusive_offers_box_icon_color', array(
    'label' => __(' Color', 'internet-service-provider-pro'),
    'section' => 'internet_service_provider_pro_exclusive_offers',
    'settings' => 'internet_service_provider_pro_exclusive_offers_box_icon_color',
  )));

  $wp_customize->add_setting( 'internet_service_provider_pro_exclusive_offers_box_icon_bgcolor', array(
    'default' => '',
    'sanitize_callback' => 'sanitize_hex_color'
  ));
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'internet_service_provider_pro_exclusive_offers_box_icon_bgcolor', array(
    'label' => __('Icon Background Color', 'internet-service-provider-pro'),
    'section' => 'internet_service_provider_pro_exclusive_offers',
    'settings' => 'internet_service_provider_pro_exclusive_offers_box_icon_bgcolor',
  )));

  $wp_customize->add_setting( 'internet_service_provider_pro_exclusive_offers_box_icon_hover_color', array(
    'default' => '',
    'sanitize_callback' => 'sanitize_hex_color'
  ));
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'internet_service_provider_pro_exclusive_offers_box_icon_hover_color', array(
    'label' => __('Icon Hover Color', 'internet-service-provider-pro'),
    'section' => 'internet_service_provider_pro_exclusive_offers',
    'settings' => 'internet_service_provider_pro_exclusive_offers_box_icon_hover_color',
  )));

  $wp_customize->add_setting( 'internet_service_provider_pro_exclusive_offers_box_icon_hover_bgcolor', array(
    'default' => '',
    'sanitize_callback' => 'sanitize_hex_color'
  ));
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'internet_service_provider_pro_exclusive_offers_box_icon_hover_bgcolor', array(
    'label' => __('Icon Hover Background Color', 'internet-service-provider-pro'),
    'section' => 'internet_service_provider_pro_exclusive_offers',
    'settings' => 'internet_service_provider_pro_exclusive_offers_box_icon_hover_bgcolor',
  )));

  $wp_customize->add_setting( 'internet_service_provider_pro_exclusive_offers_box_hover_text_color', array(
    'default' => '',
    'sanitize_callback' => 'sanitize_hex_color'
  ));
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'internet_service_provider_pro_exclusive_offers_box_hover_text_color', array(
    'label' => __('Box Hover Text Color', 'internet-service-provider-pro'),
    'section' => 'internet_service_provider_pro_exclusive_offers',
    'settings' => 'internet_service_provider_pro_exclusive_offers_box_hover_text_color',
  )));

  $wp_customize->add_setting('internet_service_provider_pro_exclusive_offers_spacing_left_desktop', array(
    'sanitize_callback' => 'internet_service_provider_pro_sanitize_number_blank',
  ));

  $wp_customize->add_setting('internet_service_provider_pro_exclusive_offers_spacing_top_desktop', array(
    'sanitize_callback' => 'internet_service_provider_pro_sanitize_number_blank',
  ));

  $wp_customize->add_setting('internet_service_provider_pro_exclusive_offers_spacing_bottom_desktop', array(
    'sanitize_callback' => 'internet_service_provider_pro_sanitize_number_blank',
  ));

  $wp_customize->add_setting('internet_service_provider_pro_exclusive_offers_spacing_right_desktop', array(
    'sanitize_callback' => 'internet_service_provider_pro_sanitize_number_blank',
  ));

  $wp_customize->add_control(new VW_Dimensions_Control($wp_customize, 'internet_service_provider_pro_exclusive_offers_spacing', array(
    'section' => 'internet_service_provider_pro_exclusive_offers',
    'label' => esc_html__('Section Spacing(px)', 'internet-service-provider-pro'),
    'settings' => array(
        'desktop_left' => 'internet_service_provider_pro_exclusive_offers_spacing_left_desktop',
        'desktop_top' => 'internet_service_provider_pro_exclusive_offers_spacing_top_desktop',
        'desktop_bottom' => 'internet_service_provider_pro_exclusive_offers_spacing_bottom_desktop',
      'desktop_right' => 'internet_service_provider_pro_exclusive_offers_spacing_right_desktop'
  ),
    'input_attrs' => array(
        'min' => 0,
        'max' => 100,
        'step' => 1,
    ),
    'responsive' => false
  )));

  // ------------- Map Area -------------
  $wp_customize->add_section('internet_service_provider_pro_map_area',array(
    'title' => __('Map Area','internet-service-provider-pro'),
    'panel' => 'internet_service_provider_pro_panel_id',
  ));
  $wp_customize->add_setting('internet_service_provider_pro_map_area_enable',
      array(
    'default' => 'Enable',
    'sanitize_callback' => 'internet_service_provider_pro_sanitize_choices'
  ));
  $wp_customize->add_control('internet_service_provider_pro_map_area_enable',
    array(
    'type' => 'radio',
    'label' => __('Do you want this section', 'internet-service-provider-pro'),
    'section' => 'internet_service_provider_pro_map_area',
    'choices' => array(
    'Enable' => __('Enable', 'internet-service-provider-pro'),
    'Disable' => __('Disable', 'internet-service-provider-pro')
  )));
  $wp_customize->selective_refresh->add_partial( 'internet_service_provider_pro_map_area_enable', array(
    'selector' => '#about-us h3',
    'render_callback' => 'internet_service_provider_pro_customize_partial_internet_service_provider_pro_map_area_enable',
  ));
  $wp_customize->add_setting( 'internet_service_provider_pro_map_area_settings',
    array(
    'default' => '',
    'transport' => 'postMessage',
    'sanitize_callback' => 'internet_service_provider_pro_text_sanitization'
  ));
  $wp_customize->add_control( new VW_Themes_Seperator_custom_Control( $wp_customize, 'internet_service_provider_pro_map_area_settings',
    array(
    'label' => __('Section Background Settings','internet-service-provider-pro'),
    'section' => 'internet_service_provider_pro_map_area'
  )));
  $wp_customize->add_setting( 'internet_service_provider_pro_map_area_bgcolor', array(
    'default' => '',
    'sanitize_callback' => 'sanitize_hex_color'
  ));
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'internet_service_provider_pro_map_area_bgcolor', array(
    'label' => __('Section Background Color', 'internet-service-provider-pro'),
    'description'   => __('Either add background color or background image, if you add both background color will be top most priority','internet-service-provider-pro'),
    'section' => 'internet_service_provider_pro_map_area',
    'settings' => 'internet_service_provider_pro_map_area_bgcolor',
  )));
  $wp_customize->add_setting('internet_service_provider_pro_map_area_bgimage',array(
    'default' => '',
    'sanitize_callback' => 'esc_url_raw',
  ));
  $wp_customize->add_control(
    new WP_Customize_Image_Control( $wp_customize,'internet_service_provider_pro_map_area_bgimage',array(
    'label' => __('Section Background Image','internet-service-provider-pro'),
    'description' => __('Dimension 1600px * 430px','internet-service-provider-pro'),
    'section' => 'internet_service_provider_pro_map_area',
    'settings' => 'internet_service_provider_pro_map_area_bgimage'
  )));

  $wp_customize->add_setting( 'internet_service_provider_pro_map_area_bgimage_setting', array(
      'default'         => '',
      'sanitize_callback' => 'internet_service_provider_pro_sanitize_choices'
  ));
  $wp_customize->add_control('internet_service_provider_pro_map_area_bgimage_setting', array(
      'type'      => 'radio',
      'label'     => __('Choose image option', 'internet-service-provider-pro'),
      'section'   => 'internet_service_provider_pro_map_area',
      'choices'   => array(
        'bg-fixed'      => __( 'Fixed', 'internet-service-provider-pro' ),
        'bg-scroll'      => __( 'Scroll', 'internet-service-provider-pro' ),                    
  )));

  $wp_customize->add_setting( 'internet_service_provider_pro_map_area_content_settings',
    array(
    'default' => '',
    'transport' => 'postMessage',
    'sanitize_callback' => 'internet_service_provider_pro_text_sanitization'
  ));
  $wp_customize->add_control( new VW_Themes_Seperator_custom_Control( $wp_customize, 'internet_service_provider_pro_map_area_content_settings',
    array(
    'label' => __('Section Content Settings','internet-service-provider-pro'),
    'section' => 'internet_service_provider_pro_map_area'
  )));

  $wp_customize->add_setting('internet_service_provider_pro_map_area_tagline',array(
    'default' => '',
    'sanitize_callback' => 'sanitize_text_field'
  ));
  $wp_customize->add_control('internet_service_provider_pro_map_area_tagline',array(
    'label' => __('Section Tagline','internet-service-provider-pro'),
    'section' => 'internet_service_provider_pro_map_area',
    'setting' => 'internet_service_provider_pro_map_area_tagline',
    'type'    => 'text'
  ));

  $wp_customize->add_setting('internet_service_provider_pro_map_area_main_heading',array(
    'default' => '',
    'sanitize_callback' => 'sanitize_text_field'
  ));
  $wp_customize->add_control('internet_service_provider_pro_map_area_main_heading',array(
    'label' => __('Section Main Heading','internet-service-provider-pro'),
    'section' => 'internet_service_provider_pro_map_area',
    'setting' => 'internet_service_provider_pro_map_area_main_heading',
    'type'    => 'text'
  ));

  $wp_customize->add_setting('internet_service_provider_pro_map_area_text',array(
    'default' => '',
    'sanitize_callback' => 'sanitize_textarea_field'
  ));
  $wp_customize->add_control('internet_service_provider_pro_map_area_text',array(
    'label' => __('Section Text','internet-service-provider-pro'),
    'section' => 'internet_service_provider_pro_map_area',
    'setting' => 'internet_service_provider_pro_map_area_text',
    'type'    => 'textarea'
  ));

  $wp_customize->add_setting( 'internet_service_provider_pro_map_area_listing_box',
    array(
    'default' => '',
    'transport' => 'postMessage',
    'sanitize_callback' => 'internet_service_provider_pro_text_sanitization'
  ));
  $wp_customize->add_control( new VW_Themes_Seperator_custom_Control( $wp_customize, 'internet_service_provider_pro_map_area_listing_box',
    array(
    'label' => __('Areas','internet-service-provider-pro'),
    'section' => 'internet_service_provider_pro_map_area'
  )));

  $wp_customize->add_setting('internet_service_provider_pro_map_area_areas_number',array(
    'default' => '',
    'sanitize_callback' => 'sanitize_text_field'
  ));
  $wp_customize->add_control('internet_service_provider_pro_map_area_areas_number',array(
    'label' => __('Number of Areas to show','internet-service-provider-pro'),
    'section' => 'internet_service_provider_pro_map_area',
    'setting' => 'internet_service_provider_pro_map_area_areas_number',
    'type'    => 'text'
  ));

  $exclusive-offers_icon_box = get_theme_mod('internet_service_provider_pro_map_area_areas_number');

  for($i=1;$i<=$exclusive-offers_icon_box;$i++)
  {

    $wp_customize->add_setting('internet_service_provider_pro_map_area_name'.$i,array(
      'default' => '',
      'sanitize_callback' => 'sanitize_text_field'
    ));
    $wp_customize->add_control('internet_service_provider_pro_map_area_name'.$i,array(
      'label' => __('Area Name ','internet-service-provider-pro'),
      'section' => 'internet_service_provider_pro_map_area',
      'setting' => 'internet_service_provider_pro_map_area_name'.$i,
      'type'    => 'text'
    ));
  }

  $wp_customize->add_setting('internet_service_provider_pro_map_area_map_image',array(
    'default' => '',
    'sanitize_callback' => 'esc_url_raw',
  ));
  $wp_customize->add_control(
    new WP_Customize_Image_Control( $wp_customize,'internet_service_provider_pro_map_area_map_image',array(
    'label' => __('Map Image','internet-service-provider-pro'),
    'description' => __('Dimension 1924px * 793px','internet-service-provider-pro'),
    'section' => 'internet_service_provider_pro_map_area',
    'settings' => 'internet_service_provider_pro_map_area_map_image'
  )));

  $wp_customize->add_setting( 'internet_service_provider_pro_map_area_bottom_content_settings',
    array(
    'default' => '',
    'transport' => 'postMessage',
    'sanitize_callback' => 'internet_service_provider_pro_text_sanitization'
  ));
  $wp_customize->add_control( new VW_Themes_Seperator_custom_Control( $wp_customize, 'internet_service_provider_pro_map_area_bottom_content_settings',
    array(
    'label' => __('Bottom Content Settings','internet-service-provider-pro'),
    'section' => 'internet_service_provider_pro_map_area'
  )));

  $wp_customize->add_setting('internet_service_provider_pro_map_area_bottom_block_text',array(
    'default' => '',
    'sanitize_callback' => 'sanitize_text_field'
  ));
  $wp_customize->add_control('internet_service_provider_pro_map_area_bottom_block_text',array(
    'label' => __('Add Text','internet-service-provider-pro'),
    'section' => 'internet_service_provider_pro_map_area',
    'setting' => 'internet_service_provider_pro_map_area_bottom_block_text',
    'type'    => 'text'
  ));

  $wp_customize->add_setting('internet_service_provider_pro_map_area_bottom_block_tagline',array(
    'default' => '',
    'sanitize_callback' => 'sanitize_text_field'
  ));
  $wp_customize->add_control('internet_service_provider_pro_map_area_bottom_block_tagline',array(
    'label' => __('Add Tagline','internet-service-provider-pro'),
    'section' => 'internet_service_provider_pro_map_area',
    'setting' => 'internet_service_provider_pro_map_area_bottom_block_tagline',
    'type'    => 'text'
  ));

  $wp_customize->add_setting('internet_service_provider_pro_map_area_bottom_block_speed_text',array(
    'default' => '',
    'sanitize_callback' => 'sanitize_text_field'
  ));
  $wp_customize->add_control('internet_service_provider_pro_map_area_bottom_block_speed_text',array(
    'label' => __('Speed Text','internet-service-provider-pro'),
    'section' => 'internet_service_provider_pro_map_area',
    'setting' => 'internet_service_provider_pro_map_area_bottom_block_speed_text',
    'type'    => 'text'
  ));

  $wp_customize->add_setting('internet_service_provider_pro_map_area_bottom_block_speed',array(
    'default' => '',
    'sanitize_callback' => 'sanitize_text_field'
  ));
  $wp_customize->add_control('internet_service_provider_pro_map_area_bottom_block_speed',array(
    'label' => __('Add Speed','internet-service-provider-pro'),
    'section' => 'internet_service_provider_pro_map_area',
    'setting' => 'internet_service_provider_pro_map_area_bottom_block_speed',
    'type'    => 'text'
  ));

  $wp_customize->add_setting( 'internet_service_provider_pro_map_area_color_settings',
    array(
    'default' => '',
    'transport' => 'postMessage',
    'sanitize_callback' => 'internet_service_provider_pro_text_sanitization'
  ));
  $wp_customize->add_control( new VW_Themes_Seperator_custom_Control( $wp_customize, 'internet_service_provider_pro_map_area_color_settings',
  array(
    'label' => __('Section Color & Typography','internet-service-provider-pro'),
    'section' => 'internet_service_provider_pro_map_area'
  )));

  $wp_customize->add_setting( 'internet_service_provider_pro_map_area_tagline_ct_pallete',
    array(
      'default' => '',
      'transport' => 'postMessage',
      'sanitize_callback' => 'internet_service_provider_pro_text_sanitization'
  ));
  $wp_customize->add_control( new VW_Themes_Seperator_custom_Control( $wp_customize, 'internet_service_provider_pro_map_area_tagline_ct_pallete',
    array(
    'label' => __('Tagline Typography ','internet-service-provider-pro'),
    'section' => 'internet_service_provider_pro_map_area'
  )));

  $wp_customize->add_setting( 'internet_service_provider_pro_map_area_tagline_color', array(
    'default' => '',
    'sanitize_callback' => 'sanitize_hex_color'
  ));
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'internet_service_provider_pro_map_area_tagline_color', array(
    'label' => __('Color', 'internet-service-provider-pro'),
    'section' => 'internet_service_provider_pro_map_area',
    'settings' => 'internet_service_provider_pro_map_area_tagline_color',
  )));

  $wp_customize->add_setting('internet_service_provider_pro_map_area_tagline_font_family',array(
    'default' => '',
    'capability' => 'edit_theme_options',
    'sanitize_callback' => 'sanitize_text_field'
  ));
  $wp_customize->add_control(
    'internet_service_provider_pro_map_area_tagline_font_family', array(
    'section'  => 'internet_service_provider_pro_map_area',
    'label'    => __('Font Family','internet-service-provider-pro'),
    'type'     => 'select',
    'choices'  => $font_array,
  ));

  $wp_customize->add_setting('internet_service_provider_pro_map_area_tagline_font_size',array(
    'default' => '',
    'sanitize_callback' => 'sanitize_text_field'
  ));
  $wp_customize->add_control('internet_service_provider_pro_map_area_tagline_font_size',array(
    'label' => __('Font Size','internet-service-provider-pro'),
    
    'section' => 'internet_service_provider_pro_map_area',
    'setting' => 'internet_service_provider_pro_map_area_tagline_font_size',
    'type'    => 'number'
  ));

  $wp_customize->add_setting( 'internet_service_provider_pro_map_area_main_heading_ct_pallete',
    array(
      'default' => '',
      'transport' => 'postMessage',
      'sanitize_callback' => 'internet_service_provider_pro_text_sanitization'
  ));
  $wp_customize->add_control( new VW_Themes_Seperator_custom_Control( $wp_customize, 'internet_service_provider_pro_map_area_main_heading_ct_pallete',
    array(
    'label' => __('Main Heading Typography ','internet-service-provider-pro'),
    'section' => 'internet_service_provider_pro_map_area'
  )));

  $wp_customize->add_setting( 'internet_service_provider_pro_map_area_main_heading_color', array(
    'default' => '',
    'sanitize_callback' => 'sanitize_hex_color'
  ));
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'internet_service_provider_pro_map_area_main_heading_color', array(
    'label' => __('Color', 'internet-service-provider-pro'),
    'section' => 'internet_service_provider_pro_map_area',
    'settings' => 'internet_service_provider_pro_map_area_main_heading_color',
  )));

  $wp_customize->add_setting('internet_service_provider_pro_map_area_main_heading_font_family',array(
    'default' => '',
    'capability' => 'edit_theme_options',
    'sanitize_callback' => 'sanitize_text_field'
  ));
  $wp_customize->add_control(
    'internet_service_provider_pro_map_area_main_heading_font_family', array(
    'section'  => 'internet_service_provider_pro_map_area',
    'label'    => __('Font Family','internet-service-provider-pro'),
    'type'     => 'select',
    'choices'  => $font_array,
  ));

  $wp_customize->add_setting('internet_service_provider_pro_map_area_main_heading_font_size',array(
    'default' => '',
    'sanitize_callback' => 'sanitize_text_field'
  ));
  $wp_customize->add_control('internet_service_provider_pro_map_area_main_heading_font_size',array(
    'label' => __('Font Size','internet-service-provider-pro'),
    'section' => 'internet_service_provider_pro_map_area',
    'setting' => 'internet_service_provider_pro_map_area_main_heading_font_size',
    'type'    => 'number'
  ));

  $wp_customize->add_setting( 'internet_service_provider_pro_map_area_box_title_ct_pallete',
    array(
      'default' => '',
      'transport' => 'postMessage',
      'sanitize_callback' => 'internet_service_provider_pro_text_sanitization'
  ));
  $wp_customize->add_control( new VW_Themes_Seperator_custom_Control( $wp_customize, 'internet_service_provider_pro_map_area_box_title_ct_pallete',
    array(
    'label' => __('Box Title Typography ','internet-service-provider-pro'),
    'section' => 'internet_service_provider_pro_map_area'
  )));

  $wp_customize->add_setting( 'internet_service_provider_pro_map_area_box_title_color', array(
    'default' => '',
    'sanitize_callback' => 'sanitize_hex_color'
  ));
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'internet_service_provider_pro_map_area_box_title_color', array(
    'label' => __(' Color', 'internet-service-provider-pro'),
    'section' => 'internet_service_provider_pro_map_area',
    'settings' => 'internet_service_provider_pro_map_area_box_title_color',
  )));
  $wp_customize->add_setting('internet_service_provider_pro_map_area_box_title_font_family',array(
    'default' => '',
    'capability' => 'edit_theme_options',
    'sanitize_callback' => 'sanitize_text_field'
  ));
  $wp_customize->add_control(
    'internet_service_provider_pro_map_area_box_title_font_family', array(
    'section'  => 'internet_service_provider_pro_map_area',
    'label'    => __('Font Family','internet-service-provider-pro'),
    'type'     => 'select',
    'choices'  => $font_array,
  ));

  $wp_customize->add_setting('internet_service_provider_pro_map_area_box_title_font_size',array(
    'default' => '',
    'sanitize_callback' => 'sanitize_text_field'
  ));
  $wp_customize->add_control('internet_service_provider_pro_map_area_box_title_font_size',array(
    'label' => __('Font Size','internet-service-provider-pro'),
    'section' => 'internet_service_provider_pro_map_area',
    'setting' => 'internet_service_provider_pro_map_area_box_title_font_size',
    'type'    => 'number'
  ));

  $wp_customize->add_setting( 'internet_service_provider_pro_map_area_box_text_ct_pallete',
    array(
      'default' => '',
      'transport' => 'postMessage',
      'sanitize_callback' => 'internet_service_provider_pro_text_sanitization'
  ));
  $wp_customize->add_control( new VW_Themes_Seperator_custom_Control( $wp_customize, 'internet_service_provider_pro_map_area_box_text_ct_pallete',
    array(
    'label' => __('Box Text Typography ','internet-service-provider-pro'),
    'section' => 'internet_service_provider_pro_map_area'
  )));

  $wp_customize->add_setting( 'internet_service_provider_pro_map_area_box_text_color', array(
    'default' => '',
    'sanitize_callback' => 'sanitize_hex_color'
  ));
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'internet_service_provider_pro_map_area_box_text_color', array(
    'label' => __(' Color', 'internet-service-provider-pro'),
    'section' => 'internet_service_provider_pro_map_area',
    'settings' => 'internet_service_provider_pro_map_area_box_text_color',
  )));
  $wp_customize->add_setting('internet_service_provider_pro_map_area_box_text_font_family',array(
    'default' => '',
    'capability' => 'edit_theme_options',
    'sanitize_callback' => 'sanitize_text_field'
  ));
  $wp_customize->add_control(
    'internet_service_provider_pro_map_area_box_text_font_family', array(
    'section'  => 'internet_service_provider_pro_map_area',
    'label'    => __('Font Family','internet-service-provider-pro'),
    'type'     => 'select',
    'choices'  => $font_array,
  ));

  $wp_customize->add_setting('internet_service_provider_pro_map_area_box_text_font_size',array(
    'default' => '',
    'sanitize_callback' => 'sanitize_text_field'
  ));
  $wp_customize->add_control('internet_service_provider_pro_map_area_box_text_font_size',array(
    'label' => __('Font Size','internet-service-provider-pro'),
    'section' => 'internet_service_provider_pro_map_area',
    'setting' => 'internet_service_provider_pro_map_area_box_text_font_size',
    'type'    => 'number'
  ));

  $wp_customize->add_setting( 'internet_service_provider_pro_map_area_box_icon_ct_pallete',
    array(
      'default' => '',
      'transport' => 'postMessage',
      'sanitize_callback' => 'internet_service_provider_pro_text_sanitization'
  ));
  $wp_customize->add_control( new VW_Themes_Seperator_custom_Control( $wp_customize, 'internet_service_provider_pro_map_area_box_icon_ct_pallete',
    array(
    'label' => __('Box Icon Typography ','internet-service-provider-pro'),
    'section' => 'internet_service_provider_pro_map_area'
  )));

  $wp_customize->add_setting( 'internet_service_provider_pro_map_area_box_icon_color', array(
    'default' => '',
    'sanitize_callback' => 'sanitize_hex_color'
  ));
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'internet_service_provider_pro_map_area_box_icon_color', array(
    'label' => __(' Color', 'internet-service-provider-pro'),
    'section' => 'internet_service_provider_pro_map_area',
    'settings' => 'internet_service_provider_pro_map_area_box_icon_color',
  )));

  $wp_customize->add_setting( 'internet_service_provider_pro_map_area_box_icon_bgcolor', array(
    'default' => '',
    'sanitize_callback' => 'sanitize_hex_color'
  ));
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'internet_service_provider_pro_map_area_box_icon_bgcolor', array(
    'label' => __('Icon Background Color', 'internet-service-provider-pro'),
    'section' => 'internet_service_provider_pro_map_area',
    'settings' => 'internet_service_provider_pro_map_area_box_icon_bgcolor',
  )));

  $wp_customize->add_setting( 'internet_service_provider_pro_map_area_box_icon_hover_color', array(
    'default' => '',
    'sanitize_callback' => 'sanitize_hex_color'
  ));
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'internet_service_provider_pro_map_area_box_icon_hover_color', array(
    'label' => __('Icon Hover Color', 'internet-service-provider-pro'),
    'section' => 'internet_service_provider_pro_map_area',
    'settings' => 'internet_service_provider_pro_map_area_box_icon_hover_color',
  )));

  $wp_customize->add_setting( 'internet_service_provider_pro_map_area_box_icon_hover_bgcolor', array(
    'default' => '',
    'sanitize_callback' => 'sanitize_hex_color'
  ));
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'internet_service_provider_pro_map_area_box_icon_hover_bgcolor', array(
    'label' => __('Icon Hover Background Color', 'internet-service-provider-pro'),
    'section' => 'internet_service_provider_pro_map_area',
    'settings' => 'internet_service_provider_pro_map_area_box_icon_hover_bgcolor',
  )));

  $wp_customize->add_setting( 'internet_service_provider_pro_map_area_box_hover_text_color', array(
    'default' => '',
    'sanitize_callback' => 'sanitize_hex_color'
  ));
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'internet_service_provider_pro_map_area_box_hover_text_color', array(
    'label' => __('Box Hover Text Color', 'internet-service-provider-pro'),
    'section' => 'internet_service_provider_pro_map_area',
    'settings' => 'internet_service_provider_pro_map_area_box_hover_text_color',
  )));

  $wp_customize->add_setting('internet_service_provider_pro_map_area_spacing_left_desktop', array(
    'sanitize_callback' => 'internet_service_provider_pro_sanitize_number_blank',
  ));

  $wp_customize->add_setting('internet_service_provider_pro_map_area_spacing_top_desktop', array(
    'sanitize_callback' => 'internet_service_provider_pro_sanitize_number_blank',
  ));

  $wp_customize->add_setting('internet_service_provider_pro_map_area_spacing_bottom_desktop', array(
    'sanitize_callback' => 'internet_service_provider_pro_sanitize_number_blank',
  ));

  $wp_customize->add_setting('internet_service_provider_pro_map_area_spacing_right_desktop', array(
    'sanitize_callback' => 'internet_service_provider_pro_sanitize_number_blank',
  ));

  $wp_customize->add_control(new VW_Dimensions_Control($wp_customize, 'internet_service_provider_pro_map_area_spacing', array(
    'section' => 'internet_service_provider_pro_map_area',
    'label' => esc_html__('Section Spacing(px)', 'internet-service-provider-pro'),
    'settings' => array(
        'desktop_left' => 'internet_service_provider_pro_map_area_spacing_left_desktop',
        'desktop_top' => 'internet_service_provider_pro_map_area_spacing_top_desktop',
        'desktop_bottom' => 'internet_service_provider_pro_map_area_spacing_bottom_desktop',
      'desktop_right' => 'internet_service_provider_pro_map_area_spacing_right_desktop'
  ),
    'input_attrs' => array(
        'min' => 0,
        'max' => 100,
        'step' => 1,
    ),
    'responsive' => false
  )));


  // ------------- Design Philosophy -------------
  $wp_customize->add_section('internet_service_provider_pro_design_philosophy',array(
    'title' => __('Design Philosophy','internet-service-provider-pro'),
    'panel' => 'internet_service_provider_pro_panel_id',
  ));
  $wp_customize->add_setting('internet_service_provider_pro_design_philosophy_enable',
      array(
    'default' => 'Enable',
    'sanitize_callback' => 'internet_service_provider_pro_sanitize_choices'
  ));
  $wp_customize->add_control('internet_service_provider_pro_design_philosophy_enable',
    array(
    'type' => 'radio',
    'label' => __('Do you want this section', 'internet-service-provider-pro'),
    'section' => 'internet_service_provider_pro_design_philosophy',
    'choices' => array(
    'Enable' => __('Enable', 'internet-service-provider-pro'),
    'Disable' => __('Disable', 'internet-service-provider-pro')
  )));
  $wp_customize->selective_refresh->add_partial( 'internet_service_provider_pro_design_philosophy_enable', array(
    'selector' => '#about-us h3',
    'render_callback' => 'internet_service_provider_pro_customize_partial_internet_service_provider_pro_design_philosophy_enable',
  ));
  $wp_customize->add_setting( 'internet_service_provider_pro_design_philosophy_settings',
    array(
    'default' => '',
    'transport' => 'postMessage',
    'sanitize_callback' => 'internet_service_provider_pro_text_sanitization'
  ));
  $wp_customize->add_control( new VW_Themes_Seperator_custom_Control( $wp_customize, 'internet_service_provider_pro_design_philosophy_settings',
    array(
    'label' => __('Section Background Settings','internet-service-provider-pro'),
    'section' => 'internet_service_provider_pro_design_philosophy'
  )));
  $wp_customize->add_setting( 'internet_service_provider_pro_design_philosophy_bgcolor', array(
    'default' => '',
    'sanitize_callback' => 'sanitize_hex_color'
  ));
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'internet_service_provider_pro_design_philosophy_bgcolor', array(
    'label' => __('Section Background Color', 'internet-service-provider-pro'),
    'description'   => __('Either add background color or background image, if you add both background color will be top most priority','internet-service-provider-pro'),
    'section' => 'internet_service_provider_pro_design_philosophy',
    'settings' => 'internet_service_provider_pro_design_philosophy_bgcolor',
  )));
  $wp_customize->add_setting('internet_service_provider_pro_design_philosophy_bgimage',array(
    'default' => '',
    'sanitize_callback' => 'esc_url_raw',
  ));
  $wp_customize->add_control(
    new WP_Customize_Image_Control( $wp_customize,'internet_service_provider_pro_design_philosophy_bgimage',array(
    'label' => __('Section Background Image','internet-service-provider-pro'),
    'description' => __('Dimension 1600px * 430px','internet-service-provider-pro'),
    'section' => 'internet_service_provider_pro_design_philosophy',
    'settings' => 'internet_service_provider_pro_design_philosophy_bgimage'
  )));

  $wp_customize->add_setting( 'internet_service_provider_pro_design_philosophy_bgimage_setting', array(
      'default'         => '',
      'sanitize_callback' => 'internet_service_provider_pro_sanitize_choices'
  ));
  $wp_customize->add_control('internet_service_provider_pro_design_philosophy_bgimage_setting', array(
      'type'      => 'radio',
      'label'     => __('Choose image option', 'internet-service-provider-pro'),
      'section'   => 'internet_service_provider_pro_design_philosophy',
      'choices'   => array(
        'bg-fixed'      => __( 'Fixed', 'internet-service-provider-pro' ),
        'bg-scroll'      => __( 'Scroll', 'internet-service-provider-pro' ),                    
  )));

  $wp_customize->add_setting( 'internet_service_provider_pro_design_philosophy_content_settings',
    array(
    'default' => '',
    'transport' => 'postMessage',
    'sanitize_callback' => 'internet_service_provider_pro_text_sanitization'
  ));
  $wp_customize->add_control( new VW_Themes_Seperator_custom_Control( $wp_customize, 'internet_service_provider_pro_design_philosophy_content_settings',
    array(
    'label' => __('Section Content Settings','internet-service-provider-pro'),
    'section' => 'internet_service_provider_pro_design_philosophy'
  )));

  $wp_customize->add_setting('internet_service_provider_pro_design_philosophy_tagline',array(
    'default' => '',
    'sanitize_callback' => 'sanitize_text_field'
  ));
  $wp_customize->add_control('internet_service_provider_pro_design_philosophy_tagline',array(
    'label' => __('Section Tagline','internet-service-provider-pro'),
    'section' => 'internet_service_provider_pro_design_philosophy',
    'setting' => 'internet_service_provider_pro_design_philosophy_tagline',
    'type'    => 'text'
  ));

  $wp_customize->add_setting('internet_service_provider_pro_design_philosophy_main_heading',array(
    'default' => '',
    'sanitize_callback' => 'sanitize_text_field'
  ));
  $wp_customize->add_control('internet_service_provider_pro_design_philosophy_main_heading',array(
    'label' => __('Section Main Heading','internet-service-provider-pro'),
    'section' => 'internet_service_provider_pro_design_philosophy',
    'setting' => 'internet_service_provider_pro_design_philosophy_main_heading',
    'type'    => 'text'
  ));

  $wp_customize->add_setting( 'internet_service_provider_pro_design_philosophy_box',
    array(
    'default' => '',
    'transport' => 'postMessage',
    'sanitize_callback' => 'internet_service_provider_pro_text_sanitization'
  ));
  $wp_customize->add_control( new VW_Themes_Seperator_custom_Control( $wp_customize, 'internet_service_provider_pro_design_philosophy_box',
    array(
    'label' => __('Boxes','internet-service-provider-pro'),
    'section' => 'internet_service_provider_pro_design_philosophy'
  )));

  $wp_customize->add_setting('internet_service_provider_pro_design_philosophy_box_number',array(
    'default' => '',
    'sanitize_callback' => 'sanitize_text_field'
  ));
  $wp_customize->add_control('internet_service_provider_pro_design_philosophy_box_number',array(
    'label' => __('Number of Boxes to show','internet-service-provider-pro'),
    'section' => 'internet_service_provider_pro_design_philosophy',
    'setting' => 'internet_service_provider_pro_design_philosophy_box_number',
    'type'    => 'text'
  ));

  $design_philosophy_box = get_theme_mod('internet_service_provider_pro_design_philosophy_box_number');

  for($i=1;$i<=$design_philosophy_box;$i++)
  {
    $wp_customize->add_setting( 'internet_service_provider_pro_design_philosophy_box_settings'.$i,
    array(
      'default' => '',
      'transport' => 'postMessage',
      'sanitize_callback' => 'internet_service_provider_pro_text_sanitization'
    ));
    $wp_customize->add_control( new VW_Themes_Seperator_custom_Control( $wp_customize, 'internet_service_provider_pro_design_philosophy_box_settings'.$i,
      array(
      'label' => __('Box ','internet-service-provider-pro').$i,
      'section' => 'internet_service_provider_pro_design_philosophy'
    )));

    $wp_customize->add_setting('internet_service_provider_pro_design_philosophy_box_image'.$i,array(
      'default' => '',
      'sanitize_callback' => 'esc_url_raw',
    ));
    $wp_customize->add_control(
      new WP_Customize_Image_Control( $wp_customize,'internet_service_provider_pro_design_philosophy_box_image'.$i,array(
      'label' => __('Image','internet-service-provider-pro'),
      'section' => 'internet_service_provider_pro_design_philosophy',
      'settings' => 'internet_service_provider_pro_design_philosophy_box_image'.$i
    )));

	$wp_customize->add_setting('internet_service_provider_pro_design_philosophy_box_title'.$i,array(
      'default' => '',
      'sanitize_callback' => 'sanitize_text_field'
    ));
    $wp_customize->add_control('internet_service_provider_pro_design_philosophy_box_title'.$i,array(
      'label' => __('Title ','internet-service-provider-pro'),
      'section' => 'internet_service_provider_pro_design_philosophy',
      'setting' => 'internet_service_provider_pro_design_philosophy_box_title'.$i,
      'type'    => 'text'
    ));
    
    $wp_customize->add_setting('internet_service_provider_pro_design_philosophy_box_text'.$i,array(
      'default' => '',
      'sanitize_callback' => 'sanitize_text_field'
    ));
    $wp_customize->add_control('internet_service_provider_pro_design_philosophy_box_text'.$i,array(
      'label' => __('Title ','internet-service-provider-pro'),
      'section' => 'internet_service_provider_pro_design_philosophy',
      'setting' => 'internet_service_provider_pro_design_philosophy_box_text'.$i,
      'type'    => 'text'
    ));

  }

  $wp_customize->add_setting( 'internet_service_provider_pro_design_philosophy_color_settings',
    array(
    'default' => '',
    'transport' => 'postMessage',
    'sanitize_callback' => 'internet_service_provider_pro_text_sanitization'
  ));
  $wp_customize->add_control( new VW_Themes_Seperator_custom_Control( $wp_customize, 'internet_service_provider_pro_design_philosophy_color_settings',
  array(
    'label' => __('Section Color & Typography','internet-service-provider-pro'),
    'section' => 'internet_service_provider_pro_design_philosophy'
  )));

  $wp_customize->add_setting( 'internet_service_provider_pro_design_philosophy_tagline_ct_pallete',
    array(
      'default' => '',
      'transport' => 'postMessage',
      'sanitize_callback' => 'internet_service_provider_pro_text_sanitization'
  ));
  $wp_customize->add_control( new VW_Themes_Seperator_custom_Control( $wp_customize, 'internet_service_provider_pro_design_philosophy_tagline_ct_pallete',
    array(
    'label' => __('Tagline Typography ','internet-service-provider-pro'),
    'section' => 'internet_service_provider_pro_design_philosophy'
  )));

  $wp_customize->add_setting( 'internet_service_provider_pro_design_philosophy_tagline_color', array(
    'default' => '',
    'sanitize_callback' => 'sanitize_hex_color'
  ));
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'internet_service_provider_pro_design_philosophy_tagline_color', array(
    'label' => __('Color', 'internet-service-provider-pro'),
    'section' => 'internet_service_provider_pro_design_philosophy',
    'settings' => 'internet_service_provider_pro_design_philosophy_tagline_color',
  )));

  $wp_customize->add_setting('internet_service_provider_pro_design_philosophy_tagline_font_family',array(
    'default' => '',
    'capability' => 'edit_theme_options',
    'sanitize_callback' => 'sanitize_text_field'
  ));
  $wp_customize->add_control(
    'internet_service_provider_pro_design_philosophy_tagline_font_family', array(
    'section'  => 'internet_service_provider_pro_design_philosophy',
    'label'    => __('Font Family','internet-service-provider-pro'),
    'type'     => 'select',
    'choices'  => $font_array,
  ));

  $wp_customize->add_setting('internet_service_provider_pro_design_philosophy_tagline_font_size',array(
    'default' => '',
    'sanitize_callback' => 'sanitize_text_field'
  ));
  $wp_customize->add_control('internet_service_provider_pro_design_philosophy_tagline_font_size',array(
    'label' => __('Font Size','internet-service-provider-pro'),
    
    'section' => 'internet_service_provider_pro_design_philosophy',
    'setting' => 'internet_service_provider_pro_design_philosophy_tagline_font_size',
    'type'    => 'number'
  ));

  $wp_customize->add_setting( 'internet_service_provider_pro_design_philosophy_main_heading_ct_pallete',
    array(
      'default' => '',
      'transport' => 'postMessage',
      'sanitize_callback' => 'internet_service_provider_pro_text_sanitization'
  ));
  $wp_customize->add_control( new VW_Themes_Seperator_custom_Control( $wp_customize, 'internet_service_provider_pro_design_philosophy_main_heading_ct_pallete',
    array(
    'label' => __('Main Heading Typography ','internet-service-provider-pro'),
    'section' => 'internet_service_provider_pro_design_philosophy'
  )));

  $wp_customize->add_setting( 'internet_service_provider_pro_design_philosophy_main_heading_color', array(
    'default' => '',
    'sanitize_callback' => 'sanitize_hex_color'
  ));
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'internet_service_provider_pro_design_philosophy_main_heading_color', array(
    'label' => __('Color', 'internet-service-provider-pro'),
    'section' => 'internet_service_provider_pro_design_philosophy',
    'settings' => 'internet_service_provider_pro_design_philosophy_main_heading_color',
  )));

  $wp_customize->add_setting('internet_service_provider_pro_design_philosophy_main_heading_font_family',array(
    'default' => '',
    'capability' => 'edit_theme_options',
    'sanitize_callback' => 'sanitize_text_field'
  ));
  $wp_customize->add_control(
    'internet_service_provider_pro_design_philosophy_main_heading_font_family', array(
    'section'  => 'internet_service_provider_pro_design_philosophy',
    'label'    => __('Font Family','internet-service-provider-pro'),
    'type'     => 'select',
    'choices'  => $font_array,
  ));

  $wp_customize->add_setting('internet_service_provider_pro_design_philosophy_main_heading_font_size',array(
    'default' => '',
    'sanitize_callback' => 'sanitize_text_field'
  ));
  $wp_customize->add_control('internet_service_provider_pro_design_philosophy_main_heading_font_size',array(
    'label' => __('Font Size','internet-service-provider-pro'),
    
    'section' => 'internet_service_provider_pro_design_philosophy',
    'setting' => 'internet_service_provider_pro_design_philosophy_main_heading_font_size',
    'type'    => 'number'
  ));

  $wp_customize->add_setting( 'internet_service_provider_pro_design_philosophy_box_title_ct_pallete',
    array(
      'default' => '',
      'transport' => 'postMessage',
      'sanitize_callback' => 'internet_service_provider_pro_text_sanitization'
  ));
  $wp_customize->add_control( new VW_Themes_Seperator_custom_Control( $wp_customize, 'internet_service_provider_pro_design_philosophy_box_title_ct_pallete',
    array(
    'label' => __('Box Title Typography ','internet-service-provider-pro'),
    'section' => 'internet_service_provider_pro_design_philosophy'
  )));

  $wp_customize->add_setting( 'internet_service_provider_pro_design_philosophy_box_title_color', array(
    'default' => '',
    'sanitize_callback' => 'sanitize_hex_color'
  ));
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'internet_service_provider_pro_design_philosophy_box_title_color', array(
    'label' => __('Color', 'internet-service-provider-pro'),
    'section' => 'internet_service_provider_pro_design_philosophy',
    'settings' => 'internet_service_provider_pro_design_philosophy_box_title_color',
  )));
  $wp_customize->add_setting('internet_service_provider_pro_design_philosophy_box_title_font_family',array(
    'default' => '',
    'capability' => 'edit_theme_options',
    'sanitize_callback' => 'sanitize_text_field'
  ));
  $wp_customize->add_control(
    'internet_service_provider_pro_design_philosophy_box_title_font_family', array(
    'section'  => 'internet_service_provider_pro_design_philosophy',
    'label'    => __('Font Family','internet-service-provider-pro'),
    'type'     => 'select',
    'choices'  => $font_array,
  ));

  $wp_customize->add_setting('internet_service_provider_pro_design_philosophy_box_title_font_size',array(
    'default' => '',
    'sanitize_callback' => 'sanitize_text_field'
  ));
  $wp_customize->add_control('internet_service_provider_pro_design_philosophy_box_title_font_size',array(
    'label' => __('Font Size','internet-service-provider-pro'),
    
    'section' => 'internet_service_provider_pro_design_philosophy',
    'setting' => 'internet_service_provider_pro_design_philosophy_box_title_font_size',
    'type'    => 'number'
  ));

  $wp_customize->add_setting( 'internet_service_provider_pro_design_philosophy_box_text_ct_pallete',
    array(
      'default' => '',
      'transport' => 'postMessage',
      'sanitize_callback' => 'internet_service_provider_pro_text_sanitization'
  ));
  $wp_customize->add_control( new VW_Themes_Seperator_custom_Control( $wp_customize, 'internet_service_provider_pro_design_philosophy_box_text_ct_pallete',
    array(
    'label' => __('Box Text Typography ','internet-service-provider-pro'),
    'section' => 'internet_service_provider_pro_design_philosophy'
  )));

  $wp_customize->add_setting( 'internet_service_provider_pro_design_philosophy_box_text_color', array(
    'default' => '',
    'sanitize_callback' => 'sanitize_hex_color'
  ));
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'internet_service_provider_pro_design_philosophy_box_text_color', array(
    'label' => __(' Color', 'internet-service-provider-pro'),
    'section' => 'internet_service_provider_pro_design_philosophy',
    'settings' => 'internet_service_provider_pro_design_philosophy_box_text_color',
  )));
  $wp_customize->add_setting('internet_service_provider_pro_design_philosophy_box_text_font_family',array(
    'default' => '',
    'capability' => 'edit_theme_options',
    'sanitize_callback' => 'sanitize_text_field'
  ));
  $wp_customize->add_control(
    'internet_service_provider_pro_design_philosophy_box_text_font_family', array(
    'section'  => 'internet_service_provider_pro_design_philosophy',
    'label'    => __('Font Family','internet-service-provider-pro'),
    'type'     => 'select',
    'choices'  => $font_array,
  ));

  $wp_customize->add_setting('internet_service_provider_pro_design_philosophy_box_text_font_size',array(
    'default' => '',
    'sanitize_callback' => 'sanitize_text_field'
  ));
  $wp_customize->add_control('internet_service_provider_pro_design_philosophy_box_text_font_size',array(
    'label' => __('Font Size','internet-service-provider-pro'),
    'section' => 'internet_service_provider_pro_design_philosophy',
    'setting' => 'internet_service_provider_pro_design_philosophy_box_text_font_size',
    'type'    => 'number'
  ));


  $wp_customize->add_setting( 'internet_service_provider_pro_design_philosophy_box_border_color', array(
    'default' => '',
    'sanitize_callback' => 'sanitize_hex_color'
  ));
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'internet_service_provider_pro_design_philosophy_box_border_color', array(
    'label' => __('Box Border Color', 'internet-service-provider-pro'),
    'section' => 'internet_service_provider_pro_design_philosophy',
    'settings' => 'internet_service_provider_pro_design_philosophy_box_border_color',
  )));

  $wp_customize->add_setting( 'internet_service_provider_pro_design_philosophy_box_hover_text_color', array(
    'default' => '',
    'sanitize_callback' => 'sanitize_hex_color'
  ));
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'internet_service_provider_pro_design_philosophy_box_hover_text_color', array(
    'label' => __('Box Hover Text Color', 'internet-service-provider-pro'),
    'section' => 'internet_service_provider_pro_design_philosophy',
    'settings' => 'internet_service_provider_pro_design_philosophy_box_hover_text_color',
  )));

  $wp_customize->add_setting('internet_service_provider_pro_design_philosophy_spacing_left_desktop', array(
    'sanitize_callback' => 'internet_service_provider_pro_sanitize_number_blank',
  ));

  $wp_customize->add_setting('internet_service_provider_pro_design_philosophy_spacing_top_desktop', array(
    'sanitize_callback' => 'internet_service_provider_pro_sanitize_number_blank',
  ));

  $wp_customize->add_setting('internet_service_provider_pro_design_philosophy_spacing_bottom_desktop', array(
    'sanitize_callback' => 'internet_service_provider_pro_sanitize_number_blank',
  ));

  $wp_customize->add_setting('internet_service_provider_pro_design_philosophy_spacing_right_desktop', array(
    'sanitize_callback' => 'internet_service_provider_pro_sanitize_number_blank',
  ));

  $wp_customize->add_control(new VW_Dimensions_Control($wp_customize, 'internet_service_provider_pro_design_philosophy_spacing', array(
    'section' => 'internet_service_provider_pro_design_philosophy',
    'label' => esc_html__('Section Spacing(px)', 'internet-service-provider-pro'),
    'settings' => array(
        'desktop_left' => 'internet_service_provider_pro_design_philosophy_spacing_left_desktop',
        'desktop_top' => 'internet_service_provider_pro_design_philosophy_spacing_top_desktop',
        'desktop_bottom' => 'internet_service_provider_pro_design_philosophy_spacing_bottom_desktop',
      'desktop_right' => 'internet_service_provider_pro_design_philosophy_spacing_right_desktop'
  ),
    'input_attrs' => array(
        'min' => 0,
        'max' => 100,
        'step' => 1,
    ),
    'responsive' => false
  )));

// ------------- Kitchen Style -------------
  $wp_customize->add_section('internet_service_provider_pro_kitchen_style',array(
    'title' => __('Design Philosophy','internet-service-provider-pro'),
    'panel' => 'internet_service_provider_pro_panel_id',
  ));
  $wp_customize->add_setting('internet_service_provider_pro_kitchen_style_enable',
      array(
    'default' => 'Enable',
    'sanitize_callback' => 'internet_service_provider_pro_sanitize_choices'
  ));
  $wp_customize->add_control('internet_service_provider_pro_kitchen_style_enable',
    array(
    'type' => 'radio',
    'label' => __('Do you want this section', 'internet-service-provider-pro'),
    'section' => 'internet_service_provider_pro_kitchen_style',
    'choices' => array(
    'Enable' => __('Enable', 'internet-service-provider-pro'),
    'Disable' => __('Disable', 'internet-service-provider-pro')
  )));
  $wp_customize->selective_refresh->add_partial( 'internet_service_provider_pro_kitchen_style_enable', array(
    'selector' => '#about-us h3',
    'render_callback' => 'internet_service_provider_pro_customize_partial_internet_service_provider_pro_kitchen_style_enable',
  ));
  $wp_customize->add_setting( 'internet_service_provider_pro_kitchen_style_settings',
    array(
    'default' => '',
    'transport' => 'postMessage',
    'sanitize_callback' => 'internet_service_provider_pro_text_sanitization'
  ));
  $wp_customize->add_control( new VW_Themes_Seperator_custom_Control( $wp_customize, 'internet_service_provider_pro_kitchen_style_settings',
    array(
    'label' => __('Section Background Settings','internet-service-provider-pro'),
    'section' => 'internet_service_provider_pro_kitchen_style'
  )));
  $wp_customize->add_setting( 'internet_service_provider_pro_kitchen_style_bgcolor', array(
    'default' => '',
    'sanitize_callback' => 'sanitize_hex_color'
  ));
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'internet_service_provider_pro_kitchen_style_bgcolor', array(
    'label' => __('Section Background Color', 'internet-service-provider-pro'),
    'description'   => __('Either add background color or background image, if you add both background color will be top most priority','internet-service-provider-pro'),
    'section' => 'internet_service_provider_pro_kitchen_style',
    'settings' => 'internet_service_provider_pro_kitchen_style_bgcolor',
  )));
  $wp_customize->add_setting('internet_service_provider_pro_kitchen_style_bgimage',array(
    'default' => '',
    'sanitize_callback' => 'esc_url_raw',
  ));
  $wp_customize->add_control(
    new WP_Customize_Image_Control( $wp_customize,'internet_service_provider_pro_kitchen_style_bgimage',array(
    'label' => __('Section Background Image','internet-service-provider-pro'),
    'description' => __('Dimension 1600px * 430px','internet-service-provider-pro'),
    'section' => 'internet_service_provider_pro_kitchen_style',
    'settings' => 'internet_service_provider_pro_kitchen_style_bgimage'
  )));

  $wp_customize->add_setting( 'internet_service_provider_pro_kitchen_style_bgimage_setting', array(
      'default'         => '',
      'sanitize_callback' => 'internet_service_provider_pro_sanitize_choices'
  ));
  $wp_customize->add_control('internet_service_provider_pro_kitchen_style_bgimage_setting', array(
      'type'      => 'radio',
      'label'     => __('Choose image option', 'internet-service-provider-pro'),
      'section'   => 'internet_service_provider_pro_kitchen_style',
      'choices'   => array(
        'bg-fixed'      => __( 'Fixed', 'internet-service-provider-pro' ),
        'bg-scroll'      => __( 'Scroll', 'internet-service-provider-pro' ),                    
  )));

  $wp_customize->add_setting( 'internet_service_provider_pro_kitchen_style_content_settings',
    array(
    'default' => '',
    'transport' => 'postMessage',
    'sanitize_callback' => 'internet_service_provider_pro_text_sanitization'
  ));
  $wp_customize->add_control( new VW_Themes_Seperator_custom_Control( $wp_customize, 'internet_service_provider_pro_kitchen_style_content_settings',
    array(
    'label' => __('Section Content Settings','internet-service-provider-pro'),
    'section' => 'internet_service_provider_pro_kitchen_style'
  )));

  $wp_customize->add_setting('internet_service_provider_pro_kitchen_style_tagline',array(
    'default' => '',
    'sanitize_callback' => 'sanitize_text_field'
  ));
  $wp_customize->add_control('internet_service_provider_pro_kitchen_style_tagline',array(
    'label' => __('Section Tagline','internet-service-provider-pro'),
    'section' => 'internet_service_provider_pro_kitchen_style',
    'setting' => 'internet_service_provider_pro_kitchen_style_tagline',
    'type'    => 'text'
  ));

  $wp_customize->add_setting('internet_service_provider_pro_kitchen_style_main_heading',array(
    'default' => '',
    'sanitize_callback' => 'sanitize_text_field'
  ));
  $wp_customize->add_control('internet_service_provider_pro_kitchen_style_main_heading',array(
    'label' => __('Section Main Heading','internet-service-provider-pro'),
    'section' => 'internet_service_provider_pro_kitchen_style',
    'setting' => 'internet_service_provider_pro_kitchen_style_main_heading',
    'type'    => 'text'
  ));

  $wp_customize->add_setting('internet_service_provider_pro_kitchen_style_number',array(
    'default' => '',
    'sanitize_callback' => 'sanitize_text_field'
  ));
  $wp_customize->add_control('internet_service_provider_pro_kitchen_style_number',array(
    'label' => __('Number of post to show','internet-service-provider-pro'),
    'section' => 'internet_service_provider_pro_kitchen_style',
    'setting' => 'internet_service_provider_pro_kitchen_style_number',
    'type'    => 'text'
  ));

  $wp_customize->add_setting(
		'internet_service_provider_pro_kitchen_style_box_link_icon',
		array(
			'default'     => '',
			'sanitize_callback' => 'sanitize_text_field'
		)
	);
	$wp_customize->add_control(
		new internet_service_provider_pro_Fontawesome_Icon_Chooser(
			$wp_customize,
			'internet_service_provider_pro_kitchen_style_box_link_icon',
			array(
			'settings'    => 'internet_service_provider_pro_kitchen_style_box_link_icon',
			'section'   => 'internet_service_provider_pro_kitchen_style',
			'type'      => 'icon',
			'label'     => esc_html__( 'Choose  Icon', 'internet-service-provider-pro' ),
			)
		)
	);

	$args = array(
    'type'                     => 'kitchen',
    'child_of'                 => 0,
    'parent'                   => '',
    'orderby'                  => 'term_group',
    'order'                    => 'ASC',
    'hide_empty'               => false,
    'hierarchical'             => 1,
    'number'                   => '',
    'taxonomy'                 => 'kitchen_category',
    'pad_counts'               => false
  );
  $categories = get_categories( $args );
  $cats = array();
  $i = 0;
  foreach($categories as $category){
      if($i==0){
          $default = $category->slug;
          $i++;
      }
      $cats[$category->slug] = $category->name;
  }

  $wp_customize->add_setting('internet_service_provider_pro_kitchen_style_category',array(
      'sanitize_callback' => 'sanitize_text_field',
  ));
  $wp_customize->add_control('internet_service_provider_pro_kitchen_style_category',array(
      'type'    => 'select',
      'choices' => $cats,
      'label' => __('Select category','internet-service-provider-pro'),
      'section' => 'internet_service_provider_pro_kitchen_style',
  ));
  
	$wp_customize->add_setting( 'internet_service_provider_pro_kitchen_style_section_button',
    array(
    'default' => '',
    'transport' => 'postMessage',
    'sanitize_callback' => 'internet_service_provider_pro_text_sanitization'
  ));
  $wp_customize->add_control( new VW_Themes_Seperator_custom_Control( $wp_customize, 'internet_service_provider_pro_kitchen_style_section_button',
    array(
    'label' => __('Section Button','internet-service-provider-pro'),
    'section' => 'internet_service_provider_pro_kitchen_style'
  )));

  $wp_customize->add_setting('internet_service_provider_pro_kitchen_style_section_button_title',array(
    'default' => '',
    'sanitize_callback' => 'sanitize_text_field'
  ));
  $wp_customize->add_control('internet_service_provider_pro_kitchen_style_section_button_title',array(
    'label' => __('Section Button Title','internet-service-provider-pro'),
    'section' => 'internet_service_provider_pro_kitchen_style',
    'setting' => 'internet_service_provider_pro_kitchen_style_section_button_title',
    'type'    => 'text'
  ));
	
	$wp_customize->add_setting(
		'internet_service_provider_pro_kitchen_style_section_button_icon',
		array(
			'default'     => '',
			'sanitize_callback' => 'sanitize_text_field'
		)
	);
	$wp_customize->add_control(
		new internet_service_provider_pro_Fontawesome_Icon_Chooser(
			$wp_customize,
			'internet_service_provider_pro_kitchen_style_section_button_icon',
			array(
			'settings'    => 'internet_service_provider_pro_kitchen_style_section_button_icon',
			'section'   => 'internet_service_provider_pro_kitchen_style',
			'type'      => 'icon',
			'label'     => esc_html__( 'Choose  Icon', 'internet-service-provider-pro' ),
			)
		)
	);

  $wp_customize->add_setting('internet_service_provider_pro_tekitchen_style_section_button_url',array(
    'default' => '',
    'sanitize_callback' => 'sanitize_text_field'
  ));
  $wp_customize->add_control('internet_service_provider_pro_tekitchen_style_section_button_url',array(
    'label' => __('Section Button Url','internet-service-provider-pro'),
    'section' => 'internet_service_provider_pro_tekitchen_style',
    'setting' => 'internet_service_provider_pro_tekitchen_style_section_button_url',
    'type'    => 'text'
  ));

  $wp_customize->add_setting( 'internet_service_provider_pro_kitchen_style_color_settings',
    array(
    'default' => '',
    'transport' => 'postMessage',
    'sanitize_callback' => 'internet_service_provider_pro_text_sanitization'
  ));
  $wp_customize->add_control( new VW_Themes_Seperator_custom_Control( $wp_customize, 'internet_service_provider_pro_kitchen_style_color_settings',
  array(
    'label' => __('Section Color & Typography','internet-service-provider-pro'),
    'section' => 'internet_service_provider_pro_kitchen_style'
  )));

  $wp_customize->add_setting( 'internet_service_provider_pro_kitchen_style_tagline_ct_pallete',
    array(
      'default' => '',
      'transport' => 'postMessage',
      'sanitize_callback' => 'internet_service_provider_pro_text_sanitization'
  ));
  $wp_customize->add_control( new VW_Themes_Seperator_custom_Control( $wp_customize, 'internet_service_provider_pro_kitchen_style_tagline_ct_pallete',
    array(
    'label' => __('Tagline Typography ','internet-service-provider-pro'),
    'section' => 'internet_service_provider_pro_kitchen_style'
  )));

  $wp_customize->add_setting( 'internet_service_provider_pro_kitchen_style_tagline_color', array(
    'default' => '',
    'sanitize_callback' => 'sanitize_hex_color'
  ));
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'internet_service_provider_pro_kitchen_style_tagline_color', array(
    'label' => __('Color', 'internet-service-provider-pro'),
    'section' => 'internet_service_provider_pro_kitchen_style',
    'settings' => 'internet_service_provider_pro_kitchen_style_tagline_color',
  )));

  $wp_customize->add_setting('internet_service_provider_pro_kitchen_style_tagline_font_family',array(
    'default' => '',
    'capability' => 'edit_theme_options',
    'sanitize_callback' => 'sanitize_text_field'
  ));
  $wp_customize->add_control(
    'internet_service_provider_pro_kitchen_style_tagline_font_family', array(
    'section'  => 'internet_service_provider_pro_kitchen_style',
    'label'    => __('Font Family','internet-service-provider-pro'),
    'type'     => 'select',
    'choices'  => $font_array,
  ));

  $wp_customize->add_setting('internet_service_provider_pro_kitchen_style_tagline_font_size',array(
    'default' => '',
    'sanitize_callback' => 'sanitize_text_field'
  ));
  $wp_customize->add_control('internet_service_provider_pro_kitchen_style_tagline_font_size',array(
    'label' => __('Font Size','internet-service-provider-pro'),
    
    'section' => 'internet_service_provider_pro_kitchen_style',
    'setting' => 'internet_service_provider_pro_kitchen_style_tagline_font_size',
    'type'    => 'number'
  ));
  
  $wp_customize->add_setting( 'internet_service_provider_pro_kitchen_style_main_heading_ct_pallete',
    array(
      'default' => '',
      'transport' => 'postMessage',
      'sanitize_callback' => 'internet_service_provider_pro_text_sanitization'
  ));
  $wp_customize->add_control( new VW_Themes_Seperator_custom_Control( $wp_customize, 'internet_service_provider_pro_kitchen_style_main_heading_ct_pallete',
    array(
    'label' => __('Main Heading Typography ','internet-service-provider-pro'),
    'section' => 'internet_service_provider_pro_kitchen_style'
  )));

  $wp_customize->add_setting( 'internet_service_provider_pro_kitchen_style_main_heading_color', array(
    'default' => '',
    'sanitize_callback' => 'sanitize_hex_color'
  ));
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'internet_service_provider_pro_kitchen_style_main_heading_color', array(
    'label' => __('Color', 'internet-service-provider-pro'),
    'section' => 'internet_service_provider_pro_kitchen_style',
    'settings' => 'internet_service_provider_pro_kitchen_style_main_heading_color',
  )));

  $wp_customize->add_setting('internet_service_provider_pro_kitchen_style_main_heading_font_family',array(
    'default' => '',
    'capability' => 'edit_theme_options',
    'sanitize_callback' => 'sanitize_text_field'
  ));
  $wp_customize->add_control(
    'internet_service_provider_pro_kitchen_style_main_heading_font_family', array(
    'section'  => 'internet_service_provider_pro_kitchen_style',
    'label'    => __('Font Family','internet-service-provider-pro'),
    'type'     => 'select',
    'choices'  => $font_array,
  ));

  $wp_customize->add_setting('internet_service_provider_pro_kitchen_style_main_heading_font_size',array(
    'default' => '',
    'sanitize_callback' => 'sanitize_text_field'
  ));
  $wp_customize->add_control('internet_service_provider_pro_kitchen_style_main_heading_font_size',array(
    'label' => __('Font Size','internet-service-provider-pro'),
    
    'section' => 'internet_service_provider_pro_kitchen_style',
    'setting' => 'internet_service_provider_pro_kitchen_style_main_heading_font_size',
    'type'    => 'number'
  ));

  $wp_customize->add_setting( 'internet_service_provider_pro_kitchen_style_box_title_ct_pallete',
    array(
      'default' => '',
      'transport' => 'postMessage',
      'sanitize_callback' => 'internet_service_provider_pro_text_sanitization'
  ));
  $wp_customize->add_control( new VW_Themes_Seperator_custom_Control( $wp_customize, 'internet_service_provider_pro_kitchen_style_box_title_ct_pallete',
    array(
    'label' => __('Box Title Typography ','internet-service-provider-pro'),
    'section' => 'internet_service_provider_pro_kitchen_style'
  )));

  $wp_customize->add_setting( 'internet_service_provider_pro_kitchen_style_box_title_color', array(
    'default' => '',
    'sanitize_callback' => 'sanitize_hex_color'
  ));
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'internet_service_provider_pro_kitchen_style_box_title_color', array(
    'label' => __('Color', 'internet-service-provider-pro'),
    'section' => 'internet_service_provider_pro_kitchen_style',
    'settings' => 'internet_service_provider_pro_kitchen_style_box_title_color',
  )));
  $wp_customize->add_setting('internet_service_provider_pro_kitchen_style_box_title_font_family',array(
    'default' => '',
    'capability' => 'edit_theme_options',
    'sanitize_callback' => 'sanitize_text_field'
  ));
  $wp_customize->add_control(
    'internet_service_provider_pro_kitchen_style_box_title_font_family', array(
    'section'  => 'internet_service_provider_pro_kitchen_style',
    'label'    => __('Font Family','internet-service-provider-pro'),
    'type'     => 'select',
    'choices'  => $font_array,
  ));

  $wp_customize->add_setting('internet_service_provider_pro_kitchen_style_box_title_font_size',array(
    'default' => '',
    'sanitize_callback' => 'sanitize_text_field'
  ));
  $wp_customize->add_control('internet_service_provider_pro_kitchen_style_box_title_font_size',array(
    'label' => __('Font Size','internet-service-provider-pro'),
    
    'section' => 'internet_service_provider_pro_kitchen_style',
    'setting' => 'internet_service_provider_pro_kitchen_style_box_title_font_size',
    'type'    => 'number'
  ));

  $wp_customize->add_setting( 'internet_service_provider_pro_kitchen_style_box_text_ct_pallete',
    array(
      'default' => '',
      'transport' => 'postMessage',
      'sanitize_callback' => 'internet_service_provider_pro_text_sanitization'
  ));
  $wp_customize->add_control( new VW_Themes_Seperator_custom_Control( $wp_customize, 'internet_service_provider_pro_kitchen_style_box_text_ct_pallete',
    array(
    'label' => __('Box Text Typography ','internet-service-provider-pro'),
    'section' => 'internet_service_provider_pro_kitchen_style'
  )));

  $wp_customize->add_setting( 'internet_service_provider_pro_kitchen_style_box_text_color', array(
    'default' => '',
    'sanitize_callback' => 'sanitize_hex_color'
  ));
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'internet_service_provider_pro_kitchen_style_box_text_color', array(
    'label' => __(' Color', 'internet-service-provider-pro'),
    'section' => 'internet_service_provider_pro_kitchen_style',
    'settings' => 'internet_service_provider_pro_kitchen_style_box_text_color',
  )));
  $wp_customize->add_setting('internet_service_provider_pro_kitchen_style_box_text_font_family',array(
    'default' => '',
    'capability' => 'edit_theme_options',
    'sanitize_callback' => 'sanitize_text_field'
  ));
  $wp_customize->add_control(
    'internet_service_provider_pro_kitchen_style_box_text_font_family', array(
    'section'  => 'internet_service_provider_pro_kitchen_style',
    'label'    => __('Font Family','internet-service-provider-pro'),
    'type'     => 'select',
    'choices'  => $font_array,
  ));

  $wp_customize->add_setting('internet_service_provider_pro_kitchen_style_box_text_font_size',array(
    'default' => '',
    'sanitize_callback' => 'sanitize_text_field'
  ));
  $wp_customize->add_control('internet_service_provider_pro_kitchen_style_box_text_font_size',array(
    'label' => __('Font Size','internet-service-provider-pro'),
    'section' => 'internet_service_provider_pro_kitchen_style',
    'setting' => 'internet_service_provider_pro_kitchen_style_box_text_font_size',
    'type'    => 'number'
  ));

  $wp_customize->add_setting( 'internet_service_provider_pro_kitchen_style_box_link_icon_ct_pallete',
    array(
      'default' => '',
      'transport' => 'postMessage',
      'sanitize_callback' => 'internet_service_provider_pro_text_sanitization'
  ));
  $wp_customize->add_control( new VW_Themes_Seperator_custom_Control( $wp_customize, 'internet_service_provider_pro_kitchen_style_box_link_icon_ct_pallete',
    array(
    'label' => __('Box Link Icon Typography ','internet-service-provider-pro'),
    'section' => 'internet_service_provider_pro_kitchen_style'
  )));

  $wp_customize->add_setting( 'internet_service_provider_pro_kitchen_style_box_link_icon_color', array(
    'default' => '',
    'sanitize_callback' => 'sanitize_hex_color'
  ));
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'internet_service_provider_pro_kitchen_style_box_link_icon_color', array(
    'label' => __('Icon Color', 'internet-service-provider-pro'),
    'section' => 'internet_service_provider_pro_kitchen_style',
    'settings' => 'internet_service_provider_pro_kitchen_style_box_link_icon_color',
  )));

  $wp_customize->add_setting( 'internet_service_provider_pro_kitchen_style_box_link_icon_bgcolor', array(
    'default' => '',
    'sanitize_callback' => 'sanitize_hex_color'
  ));
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'internet_service_provider_pro_kitchen_style_box_link_icon_bgcolor', array(
    'label' => __('Icon Background Color', 'internet-service-provider-pro'),
    'section' => 'internet_service_provider_pro_kitchen_style',
    'settings' => 'internet_service_provider_pro_kitchen_style_box_link_icon_bgcolor',
  )));


  $wp_customize->add_setting( 'internet_service_provider_pro_kitchen_style_box_link_icon_hover_color', array(
    'default' => '',
    'sanitize_callback' => 'sanitize_hex_color'
  ));
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'internet_service_provider_pro_kitchen_style_box_link_icon_hover_color', array(
    'label' => __('Icon Hover Color', 'internet-service-provider-pro'),
    'section' => 'internet_service_provider_pro_kitchen_style',
    'settings' => 'internet_service_provider_pro_kitchen_style_box_link_icon_hover_color',
  )));

  
  $wp_customize->add_setting( 'internet_service_provider_pro_kitchen_style_box_link_icon_hover_bgcolor', array(
    'default' => '',
    'sanitize_callback' => 'sanitize_hex_color'
  ));
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'internet_service_provider_pro_kitchen_style_box_link_icon_hover_bgcolor', array(
    'label' => __('Icon Hover Background Color', 'internet-service-provider-pro'),
    'section' => 'internet_service_provider_pro_kitchen_style',
    'settings' => 'internet_service_provider_pro_kitchen_style_box_link_icon_hover_bgcolor',
  )));

  $wp_customize->add_setting( 'internet_service_provider_pro_kitchen_style_box_bgcolor', array(
    'default' => '',
    'sanitize_callback' => 'sanitize_hex_color'
  ));
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'internet_service_provider_pro_kitchen_style_box_bgcolor', array(
    'label' => __('Box Background Color', 'internet-service-provider-pro'),
    'section' => 'internet_service_provider_pro_kitchen_style',
    'settings' => 'internet_service_provider_pro_kitchen_style_box_bgcolor',
  )));

  $wp_customize->add_setting( 'internet_service_provider_pro_kitchen_style_box_hover_bgcolor', array(
    'default' => '',
    'sanitize_callback' => 'sanitize_hex_color'
  ));
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'internet_service_provider_pro_kitchen_style_box_hover_bgcolor', array(
    'label' => __('Box Hover Background Color', 'internet-service-provider-pro'),
    'section' => 'internet_service_provider_pro_kitchen_style',
    'settings' => 'internet_service_provider_pro_kitchen_style_box_hover_bgcolor',
  )));

  $wp_customize->add_setting( 'internet_service_provider_pro_kitchen_style_box_hover_content_color', array(
    'default' => '',
    'sanitize_callback' => 'sanitize_hex_color'
  ));
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'internet_service_provider_pro_kitchen_style_box_hover_content_color', array(
    'label' => __('Box Hover Content Color', 'internet-service-provider-pro'),
    'section' => 'internet_service_provider_pro_kitchen_style',
    'settings' => 'internet_service_provider_pro_kitchen_style_box_hover_content_color',
  )));

  $wp_customize->add_setting( 'internet_service_provider_pro_kitchen_style_button_ct_pallete',
  array(
    'default' => '',
    'transport' => 'postMessage',
    'sanitize_callback' => 'internet_service_provider_pro_text_sanitization'
  ));
  $wp_customize->add_control( new VW_Themes_Seperator_custom_Control( $wp_customize, 'internet_service_provider_pro_kitchen_style_button_ct_pallete',
      array(
      'label' => __('Section Button Typography ','internet-service-provider-pro'),
      'section' => 'internet_service_provider_pro_kitchen_style'
  )));

  $wp_customize->add_setting( 'internet_service_provider_pro_kitchen_style_button_color', array(
      'default' => '',
      'sanitize_callback' => 'sanitize_hex_color'
  ));
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'internet_service_provider_pro_kitchen_style_button_color', array(
      'label' => __('Color', 'internet-service-provider-pro'),
      'section' => 'internet_service_provider_pro_kitchen_style',
      'settings' => 'internet_service_provider_pro_kitchen_style_button_color',
  )));
  $wp_customize->add_setting('internet_service_provider_pro_kitchen_style_button_font_family',array(
      'default' => '',
      'capability' => 'edit_theme_options',
      'sanitize_callback' => 'sanitize_text_field'
  ));
  $wp_customize->add_control(
      'internet_service_provider_pro_kitchen_style_button_font_family', array(
      'section'  => 'internet_service_provider_pro_kitchen_style',
      'label'    => __('Font Family','internet-service-provider-pro'),
      'type'     => 'select',
      'choices'  => $font_array,
  ));

  $wp_customize->add_setting('internet_service_provider_pro_kitchen_style_button_font_size',array(
      'default' => '',
      'sanitize_callback' => 'sanitize_text_field'
  ));
  $wp_customize->add_control('internet_service_provider_pro_kitchen_style_button_font_size',array(
      'label' => __('Font Size','internet-service-provider-pro'),
      
      'section' => 'internet_service_provider_pro_kitchen_style',
      'setting' => 'internet_service_provider_pro_kitchen_style_button_font_size',
      'type'    => 'number'
  ));

  $wp_customize->add_setting( 'internet_service_provider_pro_kitchen_style_button_bgcolor', array(
      'default' => '',
      'sanitize_callback' => 'sanitize_hex_color'
  ));
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'internet_service_provider_pro_kitchen_style_button_bgcolor', array(
      'label' => __('Background Color', 'internet-service-provider-pro'),
      'section' => 'internet_service_provider_pro_kitchen_style',
      'settings' => 'internet_service_provider_pro_kitchen_style_button_bgcolor',
  )));

  $wp_customize->add_setting( 'internet_service_provider_pro_kitchen_style_button_icon_color', array(
      'default' => '',
      'sanitize_callback' => 'sanitize_hex_color'
  ));
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'internet_service_provider_pro_kitchen_style_button_icon_color', array(
      'label' => __('Icon Color', 'internet-service-provider-pro'),
      'section' => 'internet_service_provider_pro_kitchen_style',
      'settings' => 'internet_service_provider_pro_kitchen_style_button_icon_color',
  )));

  $wp_customize->add_setting( 'internet_service_provider_pro_kitchen_style_button_icon_bgcolor', array(
      'default' => '',
      'sanitize_callback' => 'sanitize_hex_color'
  ));
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'internet_service_provider_pro_kitchen_style_button_icon_bgcolor', array(
      'label' => __('Icon Background Color', 'internet-service-provider-pro'),
      'section' => 'internet_service_provider_pro_kitchen_style',
      'settings' => 'internet_service_provider_pro_kitchen_style_button_icon_bgcolor',
  )));

  $wp_customize->add_setting( 'internet_service_provider_pro_kitchen_style_button_icon_hover_color', array(
      'default' => '',
      'sanitize_callback' => 'sanitize_hex_color'
  ));
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'internet_service_provider_pro_kitchen_style_button_icon_hover_color', array(
      'label' => __('Icon Hover Color', 'internet-service-provider-pro'),
      'section' => 'internet_service_provider_pro_kitchen_style',
      'settings' => 'internet_service_provider_pro_kitchen_style_button_icon_hover_color',
  )));

  $wp_customize->add_setting( 'internet_service_provider_pro_kitchen_style_button_icon_hover_bgcolor', array(
      'default' => '',
      'sanitize_callback' => 'sanitize_hex_color'
  ));
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'internet_service_provider_pro_kitchen_style_button_icon_hover_bgcolor', array(
      'label' => __('Icon Hover Background Color', 'internet-service-provider-pro'),
      'section' => 'internet_service_provider_pro_kitchen_style',
      'settings' => 'internet_service_provider_pro_kitchen_style_button_icon_hover_bgcolor',
  )));

  $wp_customize->add_setting( 'internet_service_provider_pro_kitchen_style_button_hover_bgcolor', array(
      'default' => '',
      'sanitize_callback' => 'sanitize_hex_color'
  ));
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'internet_service_provider_pro_kitchen_style_button_hover_bgcolor', array(
      'label' => __('Hover Background Color', 'internet-service-provider-pro'),
      'section' => 'internet_service_provider_pro_kitchen_style',
      'settings' => 'internet_service_provider_pro_kitchen_style_button_hover_bgcolor',
  )));

  $wp_customize->add_setting( 'internet_service_provider_pro_kitchen_style_button_text_color_hover', array(
      'default' => '',
      'sanitize_callback' => 'sanitize_hex_color'
  ));
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'internet_service_provider_pro_kitchen_style_button_text_color_hover', array(
      'label' => __('Hover Text Color', 'internet-service-provider-pro'),
      'section' => 'internet_service_provider_pro_kitchen_style',
      'settings' => 'internet_service_provider_pro_kitchen_style_button_text_color_hover',
  )));

  $wp_customize->add_setting( 'internet_service_provider_pro_kitchen_style_overlay_color', array(
      'default' => '',
      'sanitize_callback' => 'sanitize_hex_color'
  ));
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'internet_service_provider_pro_kitchen_style_overlay_color', array(
      'label' => __('Overlay Color', 'internet-service-provider-pro'),
      'section' => 'internet_service_provider_pro_kitchen_style',
      'settings' => 'internet_service_provider_pro_kitchen_style_overlay_color',
  )));
  
  $wp_customize->add_setting('internet_service_provider_pro_kitchen_style_spacing_left_desktop', array(
    'sanitize_callback' => 'internet_service_provider_pro_sanitize_number_blank',
  ));

  $wp_customize->add_setting('internet_service_provider_pro_kitchen_style_spacing_top_desktop', array(
    'sanitize_callback' => 'internet_service_provider_pro_sanitize_number_blank',
  ));

  $wp_customize->add_setting('internet_service_provider_pro_kitchen_style_spacing_bottom_desktop', array(
    'sanitize_callback' => 'internet_service_provider_pro_sanitize_number_blank',
  ));

  $wp_customize->add_setting('internet_service_provider_pro_kitchen_style_spacing_right_desktop', array(
    'sanitize_callback' => 'internet_service_provider_pro_sanitize_number_blank',
  ));

  $wp_customize->add_control(new VW_Dimensions_Control($wp_customize, 'internet_service_provider_pro_kitchen_style_spacing', array(
    'section' => 'internet_service_provider_pro_kitchen_style',
    'label' => esc_html__('Section Spacing(px)', 'internet-service-provider-pro'),
    'settings' => array(
        'desktop_left' => 'internet_service_provider_pro_kitchen_style_spacing_left_desktop',
        'desktop_top' => 'internet_service_provider_pro_kitchen_style_spacing_top_desktop',
        'desktop_bottom' => 'internet_service_provider_pro_kitchen_style_spacing_bottom_desktop',
      'desktop_right' => 'internet_service_provider_pro_kitchen_style_spacing_right_desktop'
  ),
    'input_attrs' => array(
        'min' => 0,
        'max' => 100,
        'step' => 1,
    ),
    'responsive' => false
  )));

  /*------------------ Kitchen Tab -------------------*/

  $wp_customize->add_section('internet_service_provider_pro_kitchen_tab',array(
    'title' => __('Kitchen Material Tab','internet-service-provider-pro'),
    'panel' => 'internet_service_provider_pro_panel_id',
  ));
  $wp_customize->add_setting('internet_service_provider_pro_radio_kitchen_tab_enable',
      array(
          'default' => 'Enable',
          'sanitize_callback' => 'internet_service_provider_pro_sanitize_choices'
  ));
  $wp_customize->add_control('internet_service_provider_pro_radio_kitchen_tab_enable',
      array(
          'type' => 'radio',
          'label' => __('Do you want this section', 'internet-service-provider-pro'),
          'section' => 'internet_service_provider_pro_kitchen_tab',
          'choices' => array(
          'Enable' => __('Enable', 'internet-service-provider-pro'),
          'Disable' => __('Disable', 'internet-service-provider-pro')
      ),
  ));

  $wp_customize->selective_refresh->add_partial( 'internet_service_provider_pro_radio_kitchen_tab_enable', array(
      'selector' => '#our_kitchen_tab h3',
      'render_callback' => 'internet_service_provider_pro_customize_partial_internet_service_provider_pro_radio_kitchen_tab_enable',
  ));

  $wp_customize->add_setting( 'internet_service_provider_pro_kitchen_tab_bgcolor', array(
    'default' => '',
    'sanitize_callback' => 'sanitize_hex_color'
  ));
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'internet_service_provider_pro_kitchen_tab_bgcolor', array(
    'label' => __('Background Color', 'internet-service-provider-pro'),
    'description'   => __('Either add background color or background image, if you add both background color will be top most priority','internet-service-provider-pro'),
    'section' => 'internet_service_provider_pro_kitchen_tab',
    'settings' => 'internet_service_provider_pro_kitchen_tab_bgcolor',
  )));

  $wp_customize->add_setting('internet_service_provider_pro_kitchen_tab_bgimage',array(
    'default' => '',
    'sanitize_callback' => 'esc_url_raw',
  ));
  $wp_customize->add_control(
  new WP_Customize_Image_Control( $wp_customize,'internet_service_provider_pro_kitchen_tab_bgimage',array(
    'label' => __('Section Background Image','internet-service-provider-pro'),
    'description' => __('Dimension 1600px * 900px','internet-service-provider-pro'),
    'section' => 'internet_service_provider_pro_kitchen_tab',
    'settings' => 'internet_service_provider_pro_kitchen_tab_bgimage'
  )));
          
  $wp_customize->add_setting( 'internet_service_provider_pro_kitchen_tab_bgimage_attachment', array(
    'default'         => 'bwt-scroll',
    'sanitize_callback' => 'internet_service_provider_pro_sanitize_choices'
  ));
  $wp_customize->add_control('internet_service_provider_pro_kitchen_tab_bgimage_attachment', array(
    'type'      => 'radio',
    'label'     => __('Choose image option', 'internet-service-provider-pro'),
    'section'   => 'internet_service_provider_pro_kitchen_tab',
    'choices'   => array(
    'bwt-scroll'      => __( 'Scroll', 'internet-service-provider-pro' ),  
    'bg-fixed'      => __( 'Fixed', 'internet-service-provider-pro' ),                  
  ),));

  $wp_customize->add_setting('internet_service_provider_pro_kitchen_tab_bgimage_size', array(
    'default' => '',
    'sanitize_callback' => 'internet_service_provider_pro_sanitize_choices'
  ));
  $wp_customize->add_control('internet_service_provider_pro_kitchen_tab_bgimage_size', array(
    'type' => 'radio',
    'label' => __('Background Image Size', 'internet-service-provider-pro'),
    'section' => 'internet_service_provider_pro_kitchen_tab',
    'choices' => array(
        'bg-auto' => __('Auto', 'internet-service-provider-pro'),
        'bg-cover' => __('Cover', 'internet-service-provider-pro'),
        'bg-contain' => __('Contain', 'internet-service-provider-pro'),
        'bg-xy' => __('Cover X & Y', 'internet-service-provider-pro'),
        'bg-x' => __('Cover X', 'internet-service-provider-pro'),
    )
  ));

  $wp_customize->add_setting( 'internet_service_provider_pro_kitchen_tab_content_settings',
  array(
    'default' => '',
    'transport' => 'postMessage',
    'sanitize_callback' => 'internet_service_provider_pro_text_sanitization'
  ));
  $wp_customize->add_control( new VW_Themes_Seperator_custom_Control( $wp_customize, 'internet_service_provider_pro_kitchen_tab_content_settings',
    array(
    'label' => __('Section Content Settings','internet-service-provider-pro'),
    'section' => 'internet_service_provider_pro_kitchen_tab'
  )));

  $wp_customize->add_setting('internet_service_provider_pro_kitchen_tab_tagline',array(
    'default' => '',
    'sanitize_callback' => 'sanitize_text_field'
  ));
  $wp_customize->add_control('internet_service_provider_pro_kitchen_tab_tagline',array(
    'label' => __('Section Tagline','internet-service-provider-pro'),
    'section' => 'internet_service_provider_pro_kitchen_tab',
    'setting' => 'internet_service_provider_pro_kitchen_tab_tagline',
    'type'    => 'text'
  ));

  $wp_customize->add_setting('internet_service_provider_pro_kitchen_tab_main_heading',array(
    'default' => '',
    'sanitize_callback' => 'sanitize_text_field'
  ));
  $wp_customize->add_control('internet_service_provider_pro_kitchen_tab_main_heading',array(
    'label' => __('Section Main Heading','internet-service-provider-pro'),
    'section' => 'internet_service_provider_pro_kitchen_tab',
    'setting' => 'internet_service_provider_pro_kitchen_tab_main_heading',
    'type'    => 'text'
  ));

  //choose category
  $wp_customize->add_setting('internet_service_provider_pro_kitchen_tab_number',array(
    'default'   => '',
    'sanitize_callback' => 'sanitize_text_field',
  ));

  $wp_customize->add_control('internet_service_provider_pro_kitchen_tab_number',array(
    'label' => __('Number of Tabs to show','internet-service-provider-pro'),
    'section'   => 'internet_service_provider_pro_kitchen_tab',
    'type'      => 'number'
  ));
  $count =  get_theme_mod('internet_service_provider_pro_kitchen_tab_number');

  $args = array(
       'type'                     => 'kitchen',
        'child_of'                 => 0,
        'parent'                   => '',
        'orderby'                  => 'term_group',
        'order'                    => 'ASC',
        'hide_empty'               => false,
        'hierarchical'             => 1,
        'number'                   => '',
        'taxonomy'                 => 'kitchen_category',
        'pad_counts'               => false
    );
    $categories = get_categories( $args );
    $cats = array();
    $i = 0;
    foreach($categories as $category){
        if($i==0){
            $default = $category->slug;
            $i++;
        } 
        $cats[$category->slug] = $category->name;
    }

    for($i=1;$i<=$count;$i++) {

        $wp_customize->add_setting( 'internet_service_provider_pro_kitchen_tab_tab_settings'.$i,
        array(
          'default' => '',
          'transport' => 'postMessage',
          'sanitize_callback' => 'internet_service_provider_pro_text_sanitization'
        ));
        $wp_customize->add_control( new VW_Themes_Seperator_custom_Control( $wp_customize, 'internet_service_provider_pro_kitchen_tab_tab_settings'.$i,
          array(
          'label' => __('Tab ','internet-service-provider-pro').$i,
          'section' => 'internet_service_provider_pro_kitchen_tab'
        )));

        $wp_customize->add_setting('internet_service_provider_pro_kitchen_tab_tab_title'.$i,array(
            'default'=> __('','internet-service-provider-pro'),
            'sanitize_callback' => 'sanitize_text_field'
        ));
        $wp_customize->add_control('internet_service_provider_pro_kitchen_tab_tab_title'.$i,array(
            'label' => __('Tab Title','internet-service-provider-pro'),
            'section'=> 'internet_service_provider_pro_kitchen_tab',
            'setting'=> 'internet_service_provider_pro_kitchen_tab_tab_title'.$i,
            'type'=> 'text'
        ));
        $wp_customize->add_setting('internet_service_provider_pro_kitchen_tab_category'.$i,array(
            'sanitize_callback' => 'sanitize_text_field',
        ));
        $wp_customize->add_control('internet_service_provider_pro_kitchen_tab_category'.$i,array(
            'type'    => 'select',
            'choices' => $cats,
            'label' => __('Select category','internet-service-provider-pro').$i,
            'section' => 'internet_service_provider_pro_kitchen_tab',
        ));
        $wp_customize->add_setting('internet_service_provider_pro_kitchen_tab_limit'.$i,array(
          'default'   => '',
          'sanitize_callback' => 'sanitize_text_field',
        ));

        $wp_customize->add_control('internet_service_provider_pro_kitchen_tab_limit'.$i,array(
          'label' => __('Number of Product to show in this category','internet-service-provider-pro').$i,
          'section'   => 'internet_service_provider_pro_kitchen_tab',
          'type'      => 'number'
        ));
    }

  $wp_customize->add_setting( 'internet_service_provider_pro_kitchen_tab_carousel_loop',
   array(
      'default' => 1,
      'transport' => 'refresh',
      'sanitize_callback' => 'internet_service_provider_pro_switch_sanitization'
  )); 
  $wp_customize->add_control( new internet_service_provider_pro_Toggle_Switch_Custom_control( $wp_customize, 'internet_service_provider_pro_kitchen_tab_carousel_loop',
     array(
        'label' => esc_html__( 'Carousel Loop', 'internet-service-provider-pro' ),
        'section' => 'internet_service_provider_pro_kitchen_tab'
  )));

  $wp_customize->add_setting('internet_service_provider_pro_kitchen_tab_carousel_speed',array(
    'default' => '',
    'sanitize_callback' => 'sanitize_text_field'
  ));
  $wp_customize->add_control('internet_service_provider_pro_kitchen_tab_carousel_speed',array(
    'label' => __('Carousel Speed','internet-service-provider-pro'),
    'description'=>__('Ex. 1000 for One second','internet-service-provider-pro'),
    'section' => 'internet_service_provider_pro_kitchen_tab',
    'setting' => 'internet_service_provider_pro_kitchen_tab_carousel_speed',
    'type'    => 'number'
  ));

  $wp_customize->add_setting('internet_service_provider_pro_kitchen_tab_carousel_nav', array(
      'default' => 1,
      'transport' => 'refresh',
      'sanitize_callback' => 'internet_service_provider_pro_switch_sanitization'
  ));
  $wp_customize->add_control(new internet_service_provider_pro_Toggle_Switch_Custom_control($wp_customize, 'internet_service_provider_pro_kitchen_tab_carousel_nav', array(
      'label' => esc_html__('Carousel Nav', 'internet-service-provider-pro'),
      'section' => 'internet_service_provider_pro_kitchen_tab'
  )));

  $wp_customize->add_setting('internet_service_provider_pro_kitchen_tab_carousel_dots', array(
      'default' => 1,
      'transport' => 'refresh',
      'sanitize_callback' => 'internet_service_provider_pro_switch_sanitization'
  ));
  $wp_customize->add_control(new internet_service_provider_pro_Toggle_Switch_Custom_control($wp_customize, 'internet_service_provider_pro_kitchen_tab_carousel_dots', array(
      'label' => esc_html__('Carousel Dots', 'internet-service-provider-pro'),
      'section' => 'internet_service_provider_pro_kitchen_tab'
  )));

  $wp_customize->add_setting(
		'internet_service_provider_pro_kitchen_tab_box_link_icon',
		array(
			'default'     => '',
			'sanitize_callback' => 'sanitize_text_field'
		)
	);
	$wp_customize->add_control(
		new internet_service_provider_pro_Fontawesome_Icon_Chooser(
			$wp_customize,
			'internet_service_provider_pro_kitchen_tab_box_link_icon',
			array(
			'settings'    => 'internet_service_provider_pro_kitchen_tab_box_link_icon',
			'section'   => 'internet_service_provider_pro_kitchen_tab',
			'type'      => 'icon',
			'label'     => esc_html__( 'Link Icon', 'internet-service-provider-pro' ),
			)
		)
	);

  $wp_customize->add_setting( 'internet_service_provider_pro_kitchen_tab_content_color_settings',
    array(
    'default' => '',
    'transport' => 'postMessage',
    'sanitize_callback' => 'internet_service_provider_pro_text_sanitization'
  ));
  $wp_customize->add_control( new VW_Themes_Seperator_custom_Control( $wp_customize, 'internet_service_provider_pro_kitchen_tab_content_color_settings',
    array(
    'label' => __('Section Color & Typography','internet-service-provider-pro'),
  'section' => 'internet_service_provider_pro_kitchen_tab'
  )));

  $wp_customize->add_setting( 'internet_service_provider_pro_kitchen_tab_tagline_ct_pallete',
    array(
      'default' => '',
      'transport' => 'postMessage',
      'sanitize_callback' => 'internet_service_provider_pro_text_sanitization'
  ));
  $wp_customize->add_control( new VW_Themes_Seperator_custom_Control( $wp_customize, 'internet_service_provider_pro_kitchen_tab_tagline_ct_pallete',
    array(
    'label' => __('Tagline Typography ','internet-service-provider-pro'),
    'section' => 'internet_service_provider_pro_kitchen_tab'
  )));

  $wp_customize->add_setting( 'internet_service_provider_pro_kitchen_tab_tagline_color', array(
    'default' => '',
    'sanitize_callback' => 'sanitize_hex_color'
  ));
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'internet_service_provider_pro_kitchen_tab_tagline_color', array(
    'label' => __('Color', 'internet-service-provider-pro'),
    'section' => 'internet_service_provider_pro_kitchen_tab',
    'settings' => 'internet_service_provider_pro_kitchen_tab_tagline_color',
  )));

  $wp_customize->add_setting('internet_service_provider_pro_kitchen_tab_tagline_font_family',array(
    'default' => '',
    'capability' => 'edit_theme_options',
    'sanitize_callback' => 'sanitize_text_field'
  ));
  $wp_customize->add_control(
    'internet_service_provider_pro_kitchen_tab_tagline_font_family', array(
    'section'  => 'internet_service_provider_pro_kitchen_tab',
    'label'    => __('Font Family','internet-service-provider-pro'),
    'type'     => 'select',
    'choices'  => $font_array,
  ));

  $wp_customize->add_setting('internet_service_provider_pro_kitchen_tab_tagline_font_size',array(
    'default' => '',
    'sanitize_callback' => 'sanitize_text_field'
  ));
  $wp_customize->add_control('internet_service_provider_pro_kitchen_tab_tagline_font_size',array(
    'label' => __('Font Size','internet-service-provider-pro'),
    'description' => __('Add font size in px','internet-service-provider-pro'),
    'section' => 'internet_service_provider_pro_kitchen_tab',
    'setting' => 'internet_service_provider_pro_kitchen_tab_tagline_font_size',
    'type'    => 'number'
  ));

  $wp_customize->add_setting( 'internet_service_provider_pro_kitchen_tab_main_heading_ct_pallete',
    array(
      'default' => '',
      'transport' => 'postMessage',
      'sanitize_callback' => 'internet_service_provider_pro_text_sanitization'
  ));
  $wp_customize->add_control( new VW_Themes_Seperator_custom_Control( $wp_customize, 'internet_service_provider_pro_kitchen_tab_main_heading_ct_pallete',
    array(
    'label' => __('Main Heading Typography ','internet-service-provider-pro'),
    'section' => 'internet_service_provider_pro_kitchen_tab'
  )));

  $wp_customize->add_setting( 'internet_service_provider_pro_kitchen_tab_main_heading_color', array(
    'default' => '',
    'sanitize_callback' => 'sanitize_hex_color'
  ));
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'internet_service_provider_pro_kitchen_tab_main_heading_color', array(
    'label' => __('Color', 'internet-service-provider-pro'),
    'section' => 'internet_service_provider_pro_kitchen_tab',
    'settings' => 'internet_service_provider_pro_kitchen_tab_main_heading_color',
  )));

  $wp_customize->add_setting('internet_service_provider_pro_kitchen_tab_main_heading_font_family',array(
    'default' => '',
    'capability' => 'edit_theme_options',
    'sanitize_callback' => 'sanitize_text_field'
  ));
  $wp_customize->add_control(
    'internet_service_provider_pro_kitchen_tab_main_heading_font_family', array(
    'section'  => 'internet_service_provider_pro_kitchen_tab',
    'label'    => __('Font Family','internet-service-provider-pro'),
    'type'     => 'select',
    'choices'  => $font_array,
  ));

  $wp_customize->add_setting('internet_service_provider_pro_kitchen_tab_main_heading_font_size',array(
    'default' => '',
    'sanitize_callback' => 'sanitize_text_field'
  ));
  $wp_customize->add_control('internet_service_provider_pro_kitchen_tab_main_heading_font_size',array(
    'label' => __('Font Size','internet-service-provider-pro'),
    'description' => __('Add font size in px','internet-service-provider-pro'),
    'section' => 'internet_service_provider_pro_kitchen_tab',
    'setting' => 'internet_service_provider_pro_kitchen_tab_main_heading_font_size',
    'type'    => 'number'
  ));

  $wp_customize->add_setting( 'internet_service_provider_pro_kitchen_tab_title_ct_pallete',
    array(
      'default' => '',
      'transport' => 'postMessage',
      'sanitize_callback' => 'internet_service_provider_pro_text_sanitization'
  ));
  $wp_customize->add_control( new VW_Themes_Seperator_custom_Control( $wp_customize, 'internet_service_provider_pro_kitchen_tab_title_ct_pallete',
    array(
    'label' => __('Tab Title Typography ','internet-service-provider-pro'),
    'section' => 'internet_service_provider_pro_kitchen_tab'
  )));

  $wp_customize->add_setting( 'internet_service_provider_pro_kitchen_tab_title_color', array(
    'default' => '',
    'sanitize_callback' => 'sanitize_hex_color'
  ));
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'internet_service_provider_pro_kitchen_tab_title_color', array(
    'label' => __('Color', 'internet-service-provider-pro'),
    'section' => 'internet_service_provider_pro_kitchen_tab',
    'settings' => 'internet_service_provider_pro_kitchen_tab_title_color',
  )));

  $wp_customize->add_setting('internet_service_provider_pro_kitchen_tab_title_font_family',array(
    'default' => '',
    'capability' => 'edit_theme_options',
    'sanitize_callback' => 'sanitize_text_field'
  ));
  $wp_customize->add_control(
    'internet_service_provider_pro_kitchen_tab_title_font_family', array(
    'section'  => 'internet_service_provider_pro_kitchen_tab',
    'label'    => __('Font Family','internet-service-provider-pro'),
    'type'     => 'select',
    'choices'  => $font_array,
  ));

  $wp_customize->add_setting('internet_service_provider_pro_kitchen_tab_title_font_size',array(
    'default' => '',
    'sanitize_callback' => 'sanitize_text_field'
  ));
  $wp_customize->add_control('internet_service_provider_pro_kitchen_tab_title_font_size',array(
    'label' => __('Font Size','internet-service-provider-pro'),
    'description' => __('Add font size in px','internet-service-provider-pro'),
    'section' => 'internet_service_provider_pro_kitchen_tab',
    'setting' => 'internet_service_provider_pro_kitchen_tab_title_font_size',
    'type'    => 'number'
  ));

  $wp_customize->add_setting( 'internet_service_provider_pro_kitchen_tab_title_bgcolor', array(
    'default' => '',
    'sanitize_callback' => 'sanitize_hex_color'
  ));
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'internet_service_provider_pro_kitchen_tab_title_bgcolor', array(
    'label' => __('Background Color', 'internet-service-provider-pro'),
    'section' => 'internet_service_provider_pro_kitchen_tab',
    'settings' => 'internet_service_provider_pro_kitchen_tab_title_bgcolor',
  )));

  $wp_customize->add_setting( 'internet_service_provider_pro_kitchen_tab_active_bgcolor', array(
    'default' => '',
    'sanitize_callback' => 'sanitize_hex_color'
  ));
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'internet_service_provider_pro_kitchen_tab_active_bgcolor', array(
    'label' => __('Active Tab Background Color', 'internet-service-provider-pro'),
    'section' => 'internet_service_provider_pro_kitchen_tab',
    'settings' => 'internet_service_provider_pro_kitchen_tab_active_bgcolor',
  )));

  $wp_customize->add_setting( 'internet_service_provider_pro_kitchen_tab_active_title_color', array(
    'default' => '',
    'sanitize_callback' => 'sanitize_hex_color'
  ));
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'internet_service_provider_pro_kitchen_tab_active_title_color', array(
    'label' => __('Active Tab Title Color', 'internet-service-provider-pro'),
    'section' => 'internet_service_provider_pro_kitchen_tab',
    'settings' => 'internet_service_provider_pro_kitchen_tab_active_title_color',
  )));

    $wp_customize->add_setting( 'internet_service_provider_pro_kitchen_tab_box_title_ct_pallete',
    array(
      'default' => '',
      'transport' => 'postMessage',
      'sanitize_callback' => 'internet_service_provider_pro_text_sanitization'
    ));
    $wp_customize->add_control( new VW_Themes_Seperator_custom_Control( $wp_customize, 'internet_service_provider_pro_kitchen_tab_box_title_ct_pallete',
    array(
      'label' => __('Box Title Typography ','internet-service-provider-pro'),
      'section' => 'internet_service_provider_pro_kitchen_tab'
    )));

    $wp_customize->add_setting( 'internet_service_provider_pro_kitchen_tab_box_title_color', array(
      'default' => '',
      'sanitize_callback' => 'sanitize_hex_color'
    ));
    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'internet_service_provider_pro_kitchen_tab_box_title_color', array(
      'label'    => __( 'Color','internet-service-provider-pro'),
      'section' => 'internet_service_provider_pro_kitchen_tab',
      'settings' => 'internet_service_provider_pro_kitchen_tab_box_title_color',
    )));

    $wp_customize->add_setting('internet_service_provider_pro_kitchen_tab_box_title_font_family',array(
      'default' => '',
      'capability' => 'edit_theme_options',
      'sanitize_callback' => 'internet_service_provider_pro_sanitize_choices'
     ));
    $wp_customize->add_control(
        'internet_service_provider_pro_kitchen_tab_box_title_font_family', array(
        'section'  => 'internet_service_provider_pro_kitchen_tab',
        'label'    => __( 'Font Family','internet-service-provider-pro'),
        'type'     => 'select',
        'choices'  => $font_array,
    ));

    $wp_customize->add_setting('internet_service_provider_pro_kitchen_tab_box_title_font_size', array(
        'default' => '',
        'sanitize_callback' => 'sanitize_text_field'
    ));
    $wp_customize->add_control('internet_service_provider_pro_kitchen_tab_box_title_font_size', array(
        'label' => __('Font Size', 'internet-service-provider-pro'),
        'section' => 'internet_service_provider_pro_kitchen_tab',
        'setting' => 'internet_service_provider_pro_kitchen_tab_box_title_font_size',
        'type' => 'number'
    ));

    $wp_customize->add_setting( 'internet_service_provider_pro_kitchen_tab_box_link_icon_ct_pallete',
    array(
      'default' => '',
      'transport' => 'postMessage',
      'sanitize_callback' => 'internet_service_provider_pro_text_sanitization'
    ));
    $wp_customize->add_control( new VW_Themes_Seperator_custom_Control( $wp_customize, 'internet_service_provider_pro_kitchen_tab_box_link_icon_ct_pallete',
    array(
      'label' => __('Link Icon Typography ','internet-service-provider-pro'),
      'section' => 'internet_service_provider_pro_kitchen_tab'
    )));

    $wp_customize->add_setting( 'internet_service_provider_pro_kitchen_tab_box_link_icon_color', array(
      'default' => '',
      'sanitize_callback' => 'sanitize_hex_color'
    ));
    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'internet_service_provider_pro_kitchen_tab_box_link_icon_color', array(
      'label'    => __( 'Icon Color','internet-service-provider-pro'),
      'section' => 'internet_service_provider_pro_kitchen_tab',
      'settings' => 'internet_service_provider_pro_kitchen_tab_box_link_icon_color',
    )));

    $wp_customize->add_setting( 'internet_service_provider_pro_kitchen_tab_box_link_icon_bgcolor', array(
      'default' => '',
      'sanitize_callback' => 'sanitize_hex_color'
    ));
    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'internet_service_provider_pro_kitchen_tab_box_link_icon_bgcolor', array(
      'label'    => __( 'Icon Background Color','internet-service-provider-pro'),
      'section' => 'internet_service_provider_pro_kitchen_tab',
      'settings' => 'internet_service_provider_pro_kitchen_tab_box_link_icon_bgcolor',
    )));

    $wp_customize->add_setting( 'internet_service_provider_pro_kitchen_tab_box_link_icon_hover_color', array(
      'default' => '',
      'sanitize_callback' => 'sanitize_hex_color'
    ));
    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'internet_service_provider_pro_kitchen_tab_box_link_icon_hover_color', array(
      'label'    => __( 'Icon Hover Color','internet-service-provider-pro'),
      'section' => 'internet_service_provider_pro_kitchen_tab',
      'settings' => 'internet_service_provider_pro_kitchen_tab_box_link_icon_hover_color',
    )));

    $wp_customize->add_setting( 'internet_service_provider_pro_kitchen_tab_box_link_icon_hover_bgcolor', array(
      'default' => '',
      'sanitize_callback' => 'sanitize_hex_color'
    ));
    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'internet_service_provider_pro_kitchen_tab_box_link_icon_hover_bgcolor', array(
      'label'    => __( 'Icon Hover Background Color','internet-service-provider-pro'),
      'section' => 'internet_service_provider_pro_kitchen_tab',
      'settings' => 'internet_service_provider_pro_kitchen_tab_box_link_icon_hover_bgcolor',
    )));

    $wp_customize->add_setting( 'internet_service_provider_pro_kitchen_tab_box_bgcolor', array(
      'default' => '',
      'sanitize_callback' => 'sanitize_hex_color'
    ));
    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'internet_service_provider_pro_kitchen_tab_box_bgcolor', array(
      'label'    => __( 'Box Background Color','internet-service-provider-pro'),
      'section' => 'internet_service_provider_pro_kitchen_tab',
      'settings' => 'internet_service_provider_pro_kitchen_tab_box_bgcolor',
    )));

    $wp_customize->add_setting( 'internet_service_provider_pro_kitchen_tab_box_hover_bgcolor', array(
      'default' => '',
      'sanitize_callback' => 'sanitize_hex_color'
    ));
    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'internet_service_provider_pro_kitchen_tab_box_hover_bgcolor', array(
      'label'    => __( 'Box Hover Background Color','internet-service-provider-pro'),
      'section' => 'internet_service_provider_pro_kitchen_tab',
      'settings' => 'internet_service_provider_pro_kitchen_tab_box_hover_bgcolor',
    )));

    $wp_customize->add_setting( 'internet_service_provider_pro_kitchen_tab_box_nav_icon_ct_pallete',
    array(
      'default' => '',
      'transport' => 'postMessage',
      'sanitize_callback' => 'internet_service_provider_pro_text_sanitization'
    ));
    $wp_customize->add_control( new VW_Themes_Seperator_custom_Control( $wp_customize, 'internet_service_provider_pro_kitchen_tab_box_nav_icon_ct_pallete',
    array(
      'label' => __('Nav Icon Typography ','internet-service-provider-pro'),
      'section' => 'internet_service_provider_pro_kitchen_tab'
    )));

    $wp_customize->add_setting( 'internet_service_provider_pro_kitchen_tab_box_nav_icon_color', array(
      'default' => '',
      'sanitize_callback' => 'sanitize_hex_color'
    ));
    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'internet_service_provider_pro_kitchen_tab_box_nav_icon_color', array(
      'label'    => __( 'Icon Color','internet-service-provider-pro'),
      'section' => 'internet_service_provider_pro_kitchen_tab',
      'settings' => 'internet_service_provider_pro_kitchen_tab_box_nav_icon_color',
    )));

    $wp_customize->add_setting( 'internet_service_provider_pro_kitchen_tab_box_nav_icon_bgcolor', array(
      'default' => '',
      'sanitize_callback' => 'sanitize_hex_color'
    ));
    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'internet_service_provider_pro_kitchen_tab_box_nav_icon_bgcolor', array(
      'label'    => __( 'Icon Background Color','internet-service-provider-pro'),
      'section' => 'internet_service_provider_pro_kitchen_tab',
      'settings' => 'internet_service_provider_pro_kitchen_tab_box_nav_icon_bgcolor',
    )));

    $wp_customize->add_setting( 'internet_service_provider_pro_kitchen_tab_box_nav_icon_hover_color', array(
      'default' => '',
      'sanitize_callback' => 'sanitize_hex_color'
    ));
    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'internet_service_provider_pro_kitchen_tab_box_nav_icon_hover_color', array(
      'label'    => __( 'Icon Hover Color','internet-service-provider-pro'),
      'section' => 'internet_service_provider_pro_kitchen_tab',
      'settings' => 'internet_service_provider_pro_kitchen_tab_box_nav_icon_hover_color',
    )));

    $wp_customize->add_setting( 'internet_service_provider_pro_kitchen_tab_box_nav_icon_hover_bgcolor', array(
      'default' => '',
      'sanitize_callback' => 'sanitize_hex_color'
    ));
    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'internet_service_provider_pro_kitchen_tab_box_nav_icon_hover_bgcolor', array(
      'label'    => __( 'Icon Hover Background Color','internet-service-provider-pro'),
      'section' => 'internet_service_provider_pro_kitchen_tab',
      'settings' => 'internet_service_provider_pro_kitchen_tab_box_nav_icon_hover_bgcolor',
    )));

  $wp_customize->add_setting( 'internet_service_provider_pro_kitchen_tab_dots_ct_pallete',
  array(
    'default' => '',
    'transport' => 'postMessage',
    'sanitize_callback' => 'internet_service_provider_pro_text_sanitization'
  ));
  $wp_customize->add_control( new VW_Themes_Seperator_custom_Control( $wp_customize, 'internet_service_provider_pro_kitchen_tab_dots_ct_pallete',
  array(
    'label' => __('Dots Typography ','internet-service-provider-pro'),
    'section' => 'internet_service_provider_pro_kitchen_tab'
  )));

  $wp_customize->add_setting( 'internet_service_provider_pro_kitchen_tab_dots_color', array(
    'default' => '',
    'sanitize_callback' => 'sanitize_hex_color'
  ));
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'internet_service_provider_pro_kitchen_tab_dots_color', array(
    'label'    => __( 'Dots Color','internet-service-provider-pro'),
    'section' => 'internet_service_provider_pro_kitchen_tab',
    'settings' => 'internet_service_provider_pro_kitchen_tab_dots_color',
  )));

  $wp_customize->add_setting( 'internet_service_provider_pro_kitchen_tab_active_dots_color', array(
    'default' => '',
    'sanitize_callback' => 'sanitize_hex_color'
  ));
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'internet_service_provider_pro_kitchen_tab_active_dots_color', array(
    'label'    => __( 'Active Dots Color','internet-service-provider-pro'),
    'section' => 'internet_service_provider_pro_kitchen_tab',
    'settings' => 'internet_service_provider_pro_kitchen_tab_active_dots_color',
  )));

  $wp_customize->add_setting('internet_service_provider_pro_kitchen_tab_spacing_left_desktop', array(
    'sanitize_callback' => 'internet_service_provider_pro_sanitize_number_blank',
  ));

  $wp_customize->add_setting('internet_service_provider_pro_kitchen_tab_spacing_top_desktop', array(
    'sanitize_callback' => 'internet_service_provider_pro_sanitize_number_blank',
  ));

  $wp_customize->add_setting('internet_service_provider_pro_kitchen_tab_spacing_bottom_desktop', array(
    'sanitize_callback' => 'internet_service_provider_pro_sanitize_number_blank',
  ));

  $wp_customize->add_setting('internet_service_provider_pro_kitchen_tab_spacing_right_desktop', array(
    'sanitize_callback' => 'internet_service_provider_pro_sanitize_number_blank',
  ));

    $wp_customize->add_control(new VW_Dimensions_Control($wp_customize, 'internet_service_provider_pro_kitchen_tab_spacing', array(
      'section' => 'internet_service_provider_pro_kitchen_tab',
      'label' => esc_html__('Section Spacing(px)', 'internet-service-provider-pro'),
      'settings' => array(
        'desktop_left' => 'internet_service_provider_pro_kitchen_tab_spacing_left_desktop',
        'desktop_top' => 'internet_service_provider_pro_kitchen_tab_spacing_top_desktop',
        'desktop_bottom' => 'internet_service_provider_pro_kitchen_tab_spacing_bottom_desktop',
        'desktop_right' => 'internet_service_provider_pro_kitchen_tab_spacing_right_desktop'
    ),
    'input_attrs' => array(
        'min' => 0,
        'max' => 100,
        'step' => 1,
    ),
    'responsive' => false
  )));

    
  // ------------- Process -------------
  $wp_customize->add_section('internet_service_provider_pro_process',array(
    'title' => __('Process','internet-service-provider-pro'),
    'panel' => 'internet_service_provider_pro_panel_id',
  ));
  $wp_customize->add_setting('internet_service_provider_pro_process_enable',
      array(
    'default' => 'Enable',
    'sanitize_callback' => 'internet_service_provider_pro_sanitize_choices'
  ));
  $wp_customize->add_control('internet_service_provider_pro_process_enable',
    array(
    'type' => 'radio',
    'label' => __('Do you want this section', 'internet-service-provider-pro'),
    'section' => 'internet_service_provider_pro_process',
    'choices' => array(
    'Enable' => __('Enable', 'internet-service-provider-pro'),
    'Disable' => __('Disable', 'internet-service-provider-pro')
  )));
  $wp_customize->selective_refresh->add_partial( 'internet_service_provider_pro_process_enable', array(
    'selector' => '#about-us h3',
    'render_callback' => 'internet_service_provider_pro_customize_partial_internet_service_provider_pro_process_enable',
  ));
  $wp_customize->add_setting( 'internet_service_provider_pro_process_settings',
    array(
    'default' => '',
    'transport' => 'postMessage',
    'sanitize_callback' => 'internet_service_provider_pro_text_sanitization'
  ));
  $wp_customize->add_control( new VW_Themes_Seperator_custom_Control( $wp_customize, 'internet_service_provider_pro_process_settings',
    array(
    'label' => __('Section Background Settings','internet-service-provider-pro'),
    'section' => 'internet_service_provider_pro_process'
  )));
  $wp_customize->add_setting( 'internet_service_provider_pro_process_bgcolor', array(
    'default' => '',
    'sanitize_callback' => 'sanitize_hex_color'
  ));
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'internet_service_provider_pro_process_bgcolor', array(
    'label' => __('Section Background Color', 'internet-service-provider-pro'),
    'description'   => __('Either add background color or background image, if you add both background color will be top most priority','internet-service-provider-pro'),
    'section' => 'internet_service_provider_pro_process',
    'settings' => 'internet_service_provider_pro_process_bgcolor',
  )));
  $wp_customize->add_setting('internet_service_provider_pro_process_bgimage',array(
    'default' => '',
    'sanitize_callback' => 'esc_url_raw',
  ));
  $wp_customize->add_control(
    new WP_Customize_Image_Control( $wp_customize,'internet_service_provider_pro_process_bgimage',array(
    'label' => __('Section Background Image','internet-service-provider-pro'),
    'description' => __('Dimension 1600px * 430px','internet-service-provider-pro'),
    'section' => 'internet_service_provider_pro_process',
    'settings' => 'internet_service_provider_pro_process_bgimage'
  )));

  $wp_customize->add_setting( 'internet_service_provider_pro_process_bgimage_setting', array(
      'default'         => '',
      'sanitize_callback' => 'internet_service_provider_pro_sanitize_choices'
  ));
  $wp_customize->add_control('internet_service_provider_pro_process_bgimage_setting', array(
      'type'      => 'radio',
      'label'     => __('Choose image option', 'internet-service-provider-pro'),
      'section'   => 'internet_service_provider_pro_process',
      'choices'   => array(
        'bg-fixed'      => __( 'Fixed', 'internet-service-provider-pro' ),
        'bg-scroll'      => __( 'Scroll', 'internet-service-provider-pro' ),                    
  )));

  $wp_customize->add_setting( 'internet_service_provider_pro_process_content_settings',
    array(
    'default' => '',
    'transport' => 'postMessage',
    'sanitize_callback' => 'internet_service_provider_pro_text_sanitization'
  ));
  $wp_customize->add_control( new VW_Themes_Seperator_custom_Control( $wp_customize, 'internet_service_provider_pro_process_content_settings',
    array(
    'label' => __('Section Content Settings','internet-service-provider-pro'),
    'section' => 'internet_service_provider_pro_process'
  )));

  $wp_customize->add_setting('internet_service_provider_pro_process_tagline',array(
    'default' => '',
    'sanitize_callback' => 'sanitize_text_field'
  ));
  $wp_customize->add_control('internet_service_provider_pro_process_tagline',array(
    'label' => __('Section Tagline','internet-service-provider-pro'),
    'section' => 'internet_service_provider_pro_process',
    'setting' => 'internet_service_provider_pro_process_tagline',
    'type'    => 'text'
  ));

  $wp_customize->add_setting('internet_service_provider_pro_process_main_heading',array(
    'default' => '',
    'sanitize_callback' => 'sanitize_text_field'
  ));
  $wp_customize->add_control('internet_service_provider_pro_process_main_heading',array(
    'label' => __('Section Main Heading','internet-service-provider-pro'),
    'section' => 'internet_service_provider_pro_process',
    'setting' => 'internet_service_provider_pro_process_main_heading',
    'type'    => 'text'
  ));


  $wp_customize->add_setting( 'internet_service_provider_pro_process_icon_box',
    array(
    'default' => '',
    'transport' => 'postMessage',
    'sanitize_callback' => 'internet_service_provider_pro_text_sanitization'
  ));
  $wp_customize->add_control( new VW_Themes_Seperator_custom_Control( $wp_customize, 'internet_service_provider_pro_process_icon_box',
    array(
    'label' => __('Image Box','internet-service-provider-pro'),
    'section' => 'internet_service_provider_pro_process'
  )));

  $wp_customize->add_setting('internet_service_provider_pro_process_icon_box_number',array(
    'default' => '',
    'sanitize_callback' => 'sanitize_text_field'
  ));
  $wp_customize->add_control('internet_service_provider_pro_process_icon_box_number',array(
    'label' => __('Number of Boxes to show','internet-service-provider-pro'),
    'section' => 'internet_service_provider_pro_process',
    'setting' => 'internet_service_provider_pro_process_icon_box_number',
    'type'    => 'text'
  ));

  $process_icon_box = get_theme_mod('internet_service_provider_pro_process_icon_box_number');

  for($i=1;$i<=$process_icon_box;$i++)
  {
    $wp_customize->add_setting( 'internet_service_provider_pro_process_icon_box_settings'.$i,
    array(
      'default' => '',
      'transport' => 'postMessage',
      'sanitize_callback' => 'internet_service_provider_pro_text_sanitization'
    ));
    $wp_customize->add_control( new VW_Themes_Seperator_custom_Control( $wp_customize, 'internet_service_provider_pro_process_icon_box_settings'.$i,
      array(
      'label' => __('Box ','internet-service-provider-pro').$i,
      'section' => 'internet_service_provider_pro_process'
    )));

    $wp_customize->add_setting('internet_service_provider_pro_process_icon_box_image'.$i,array(
      'default' => '',
      'sanitize_callback' => 'esc_url_raw',
    ));
    $wp_customize->add_control(
      new WP_Customize_Image_Control( $wp_customize,'internet_service_provider_pro_process_icon_box_image'.$i,array(
      'label' => __('Image','internet-service-provider-pro'),
      'section' => 'internet_service_provider_pro_process',
      'settings' => 'internet_service_provider_pro_process_icon_box_image'.$i
    )));
    $wp_customize->add_setting('internet_service_provider_pro_process_icon_box_hover_image'.$i,array(
      'default' => '',
      'sanitize_callback' => 'esc_url_raw',
    ));
    $wp_customize->add_control(
      new WP_Customize_Image_Control( $wp_customize,'internet_service_provider_pro_process_icon_box_hover_image'.$i,array(
      'label' => __('Hover Image','internet-service-provider-pro'),
      'section' => 'internet_service_provider_pro_process',
      'settings' => 'internet_service_provider_pro_process_icon_box_hover_image'.$i
    )));

	$wp_customize->add_setting('internet_service_provider_pro_process_icon_box_title'.$i,array(
      'default' => '',
      'sanitize_callback' => 'sanitize_text_field'
    ));
    $wp_customize->add_control('internet_service_provider_pro_process_icon_box_title'.$i,array(
      'label' => __('Title ','internet-service-provider-pro'),
      'section' => 'internet_service_provider_pro_process',
      'setting' => 'internet_service_provider_pro_process_icon_box_title'.$i,
      'type'    => 'text'
    ));
    
    $wp_customize->add_setting('internet_service_provider_pro_process_icon_box_text'.$i,array(
      'default' => '',
      'sanitize_callback' => 'sanitize_text_field'
    ));
    $wp_customize->add_control('internet_service_provider_pro_process_icon_box_text'.$i,array(
      'label' => __('Title ','internet-service-provider-pro'),
      'section' => 'internet_service_provider_pro_process',
      'setting' => 'internet_service_provider_pro_process_icon_box_text'.$i,
      'type'    => 'text'
    ));

    $wp_customize->add_setting('internet_service_provider_pro_process_icon_box_link_icon_url'.$i,array(
      'default' => '',
      'sanitize_callback' => 'esc_url_raw'
    ));
    $wp_customize->add_control('internet_service_provider_pro_process_icon_box_link_icon_url'.$i,array(
      'label' => __('Url ','internet-service-provider-pro'),
      'section' => 'internet_service_provider_pro_process',
      'setting' => 'internet_service_provider_pro_process_icon_box_link_icon_url'.$i,
      'type'    => 'url'
    ));
  }

  $wp_customize->add_setting( 'internet_service_provider_pro_process_color_settings',
    array(
    'default' => '',
    'transport' => 'postMessage',
    'sanitize_callback' => 'internet_service_provider_pro_text_sanitization'
  ));
  $wp_customize->add_control( new VW_Themes_Seperator_custom_Control( $wp_customize, 'internet_service_provider_pro_process_color_settings',
  array(
    'label' => __('Section Color & Typography','internet-service-provider-pro'),
    'section' => 'internet_service_provider_pro_process'
  )));

  $wp_customize->add_setting( 'internet_service_provider_pro_process_tagline_ct_pallete',
    array(
      'default' => '',
      'transport' => 'postMessage',
      'sanitize_callback' => 'internet_service_provider_pro_text_sanitization'
  ));
  $wp_customize->add_control( new VW_Themes_Seperator_custom_Control( $wp_customize, 'internet_service_provider_pro_process_tagline_ct_pallete',
    array(
    'label' => __('Tagline Typography ','internet-service-provider-pro'),
    'section' => 'internet_service_provider_pro_process'
  )));

  $wp_customize->add_setting( 'internet_service_provider_pro_process_tagline_color', array(
    'default' => '',
    'sanitize_callback' => 'sanitize_hex_color'
  ));
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'internet_service_provider_pro_process_tagline_color', array(
    'label' => __('Color', 'internet-service-provider-pro'),
    'section' => 'internet_service_provider_pro_process',
    'settings' => 'internet_service_provider_pro_process_tagline_color',
  )));

  $wp_customize->add_setting('internet_service_provider_pro_process_tagline_font_family',array(
    'default' => '',
    'capability' => 'edit_theme_options',
    'sanitize_callback' => 'sanitize_text_field'
  ));
  $wp_customize->add_control(
    'internet_service_provider_pro_process_tagline_font_family', array(
    'section'  => 'internet_service_provider_pro_process',
    'label'    => __('Font Family','internet-service-provider-pro'),
    'type'     => 'select',
    'choices'  => $font_array,
  ));

  $wp_customize->add_setting('internet_service_provider_pro_process_tagline_font_size',array(
    'default' => '',
    'sanitize_callback' => 'sanitize_text_field'
  ));
  $wp_customize->add_control('internet_service_provider_pro_process_tagline_font_size',array(
    'label' => __('Font Size','internet-service-provider-pro'),
    
    'section' => 'internet_service_provider_pro_process',
    'setting' => 'internet_service_provider_pro_process_tagline_font_size',
    'type'    => 'number'
  ));
  
  $wp_customize->add_setting( 'internet_service_provider_pro_process_main_heading_ct_pallete',
    array(
      'default' => '',
      'transport' => 'postMessage',
      'sanitize_callback' => 'internet_service_provider_pro_text_sanitization'
  ));
  $wp_customize->add_control( new VW_Themes_Seperator_custom_Control( $wp_customize, 'internet_service_provider_pro_process_main_heading_ct_pallete',
    array(
    'label' => __('Main Heading Typography ','internet-service-provider-pro'),
    'section' => 'internet_service_provider_pro_process'
  )));

  $wp_customize->add_setting( 'internet_service_provider_pro_process_main_heading_color', array(
    'default' => '',
    'sanitize_callback' => 'sanitize_hex_color'
  ));
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'internet_service_provider_pro_process_main_heading_color', array(
    'label' => __('Color', 'internet-service-provider-pro'),
    'section' => 'internet_service_provider_pro_process',
    'settings' => 'internet_service_provider_pro_process_main_heading_color',
  )));

  $wp_customize->add_setting('internet_service_provider_pro_process_main_heading_font_family',array(
    'default' => '',
    'capability' => 'edit_theme_options',
    'sanitize_callback' => 'sanitize_text_field'
  ));
  $wp_customize->add_control(
    'internet_service_provider_pro_process_main_heading_font_family', array(
    'section'  => 'internet_service_provider_pro_process',
    'label'    => __('Font Family','internet-service-provider-pro'),
    'type'     => 'select',
    'choices'  => $font_array,
  ));

  $wp_customize->add_setting('internet_service_provider_pro_process_main_heading_font_size',array(
    'default' => '',
    'sanitize_callback' => 'sanitize_text_field'
  ));
  $wp_customize->add_control('internet_service_provider_pro_process_main_heading_font_size',array(
    'label' => __('Font Size','internet-service-provider-pro'),
    
    'section' => 'internet_service_provider_pro_process',
    'setting' => 'internet_service_provider_pro_process_main_heading_font_size',
    'type'    => 'number'
  ));

  $wp_customize->add_setting( 'internet_service_provider_pro_process_box_title_ct_pallete',
    array(
      'default' => '',
      'transport' => 'postMessage',
      'sanitize_callback' => 'internet_service_provider_pro_text_sanitization'
  ));
  $wp_customize->add_control( new VW_Themes_Seperator_custom_Control( $wp_customize, 'internet_service_provider_pro_process_box_title_ct_pallete',
    array(
    'label' => __('Box Title Typography ','internet-service-provider-pro'),
    'section' => 'internet_service_provider_pro_process'
  )));

  $wp_customize->add_setting( 'internet_service_provider_pro_process_box_title_color', array(
    'default' => '',
    'sanitize_callback' => 'sanitize_hex_color'
  ));
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'internet_service_provider_pro_process_box_title_color', array(
    'label' => __('Color', 'internet-service-provider-pro'),
    'section' => 'internet_service_provider_pro_process',
    'settings' => 'internet_service_provider_pro_process_box_title_color',
  )));
  $wp_customize->add_setting('internet_service_provider_pro_process_box_title_font_family',array(
    'default' => '',
    'capability' => 'edit_theme_options',
    'sanitize_callback' => 'sanitize_text_field'
  ));
  $wp_customize->add_control(
    'internet_service_provider_pro_process_box_title_font_family', array(
    'section'  => 'internet_service_provider_pro_process',
    'label'    => __('Font Family','internet-service-provider-pro'),
    'type'     => 'select',
    'choices'  => $font_array,
  ));

  $wp_customize->add_setting('internet_service_provider_pro_process_box_title_font_size',array(
    'default' => '',
    'sanitize_callback' => 'sanitize_text_field'
  ));
  $wp_customize->add_control('internet_service_provider_pro_process_box_title_font_size',array(
    'label' => __('Font Size','internet-service-provider-pro'),
    
    'section' => 'internet_service_provider_pro_process',
    'setting' => 'internet_service_provider_pro_process_box_title_font_size',
    'type'    => 'number'
  ));

  $wp_customize->add_setting( 'internet_service_provider_pro_process_box_text_ct_pallete',
    array(
      'default' => '',
      'transport' => 'postMessage',
      'sanitize_callback' => 'internet_service_provider_pro_text_sanitization'
  ));
  $wp_customize->add_control( new VW_Themes_Seperator_custom_Control( $wp_customize, 'internet_service_provider_pro_process_box_text_ct_pallete',
    array(
    'label' => __('Box Text Typography ','internet-service-provider-pro'),
    'section' => 'internet_service_provider_pro_process'
  )));

  $wp_customize->add_setting( 'internet_service_provider_pro_process_box_text_color', array(
    'default' => '',
    'sanitize_callback' => 'sanitize_hex_color'
  ));
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'internet_service_provider_pro_process_box_text_color', array(
    'label' => __(' Color', 'internet-service-provider-pro'),
    'section' => 'internet_service_provider_pro_process',
    'settings' => 'internet_service_provider_pro_process_box_text_color',
  )));
  $wp_customize->add_setting('internet_service_provider_pro_process_box_text_font_family',array(
    'default' => '',
    'capability' => 'edit_theme_options',
    'sanitize_callback' => 'sanitize_text_field'
  ));
  $wp_customize->add_control(
    'internet_service_provider_pro_process_box_text_font_family', array(
    'section'  => 'internet_service_provider_pro_process',
    'label'    => __('Font Family','internet-service-provider-pro'),
    'type'     => 'select',
    'choices'  => $font_array,
  ));

  $wp_customize->add_setting('internet_service_provider_pro_process_box_text_font_size',array(
    'default' => '',
    'sanitize_callback' => 'sanitize_text_field'
  ));
  $wp_customize->add_control('internet_service_provider_pro_process_box_text_font_size',array(
    'label' => __('Font Size','internet-service-provider-pro'),
    'section' => 'internet_service_provider_pro_process',
    'setting' => 'internet_service_provider_pro_process_box_text_font_size',
    'type'    => 'number'
  ));

  $wp_customize->add_setting( 'internet_service_provider_pro_process_box_bgcolor', array(
    'default' => '',
    'sanitize_callback' => 'sanitize_hex_color'
  ));
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'internet_service_provider_pro_process_box_bgcolor', array(
    'label' => __('Box Background Color', 'internet-service-provider-pro'),
    'section' => 'internet_service_provider_pro_process',
    'settings' => 'internet_service_provider_pro_process_box_bgcolor',
  )));

  $wp_customize->add_setting( 'internet_service_provider_pro_process_box_hover_bgcolor', array(
    'default' => '',
    'sanitize_callback' => 'sanitize_hex_color'
  ));
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'internet_service_provider_pro_process_box_hover_bgcolor', array(
    'label' => __('Box Hover Background Color', 'internet-service-provider-pro'),
    'section' => 'internet_service_provider_pro_process',
    'settings' => 'internet_service_provider_pro_process_box_hover_bgcolor',
  )));

  $wp_customize->add_setting( 'internet_service_provider_pro_process_box_hover_content_color', array(
    'default' => '',
    'sanitize_callback' => 'sanitize_hex_color'
  ));
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'internet_service_provider_pro_process_box_hover_content_color', array(
    'label' => __('Box Hover Content Color', 'internet-service-provider-pro'),
    'section' => 'internet_service_provider_pro_process',
    'settings' => 'internet_service_provider_pro_process_box_hover_content_color',
  )));

  $wp_customize->add_setting('internet_service_provider_pro_process_spacing_left_desktop', array(
    'sanitize_callback' => 'internet_service_provider_pro_sanitize_number_blank',
  ));

  $wp_customize->add_setting('internet_service_provider_pro_process_spacing_top_desktop', array(
    'sanitize_callback' => 'internet_service_provider_pro_sanitize_number_blank',
  ));

  $wp_customize->add_setting('internet_service_provider_pro_process_spacing_bottom_desktop', array(
    'sanitize_callback' => 'internet_service_provider_pro_sanitize_number_blank',
  ));

  $wp_customize->add_setting('internet_service_provider_pro_process_spacing_right_desktop', array(
    'sanitize_callback' => 'internet_service_provider_pro_sanitize_number_blank',
  ));

  $wp_customize->add_control(new VW_Dimensions_Control($wp_customize, 'internet_service_provider_pro_process_spacing', array(
    'section' => 'internet_service_provider_pro_process',
    'label' => esc_html__('Section Spacing(px)', 'internet-service-provider-pro'),
    'settings' => array(
        'desktop_left' => 'internet_service_provider_pro_process_spacing_left_desktop',
        'desktop_top' => 'internet_service_provider_pro_process_spacing_top_desktop',
        'desktop_bottom' => 'internet_service_provider_pro_process_spacing_bottom_desktop',
      'desktop_right' => 'internet_service_provider_pro_process_spacing_right_desktop'
  ),
    'input_attrs' => array(
        'min' => 0,
        'max' => 100,
        'step' => 1,
    ),
    'responsive' => false
  )));

  // ------------- Smart Storage -------------
  $wp_customize->add_section('internet_service_provider_pro_smart_storage',array(
    'title' => __('Smart Storage','internet-service-provider-pro'),
    'panel' => 'internet_service_provider_pro_panel_id',
  ));
  $wp_customize->add_setting('internet_service_provider_pro_smart_storage_enable',
      array(
    'default' => 'Enable',
    'sanitize_callback' => 'internet_service_provider_pro_sanitize_choices'
  ));
  $wp_customize->add_control('internet_service_provider_pro_smart_storage_enable',
    array(
    'type' => 'radio',
    'label' => __('Do you want this section', 'internet-service-provider-pro'),
    'section' => 'internet_service_provider_pro_smart_storage',
    'choices' => array(
    'Enable' => __('Enable', 'internet-service-provider-pro'),
    'Disable' => __('Disable', 'internet-service-provider-pro')
  )));
  $wp_customize->selective_refresh->add_partial( 'internet_service_provider_pro_smart_storage_enable', array(
    'selector' => '#about-us h3',
    'render_callback' => 'internet_service_provider_pro_customize_partial_internet_service_provider_pro_smart_storage_enable',
  ));
  $wp_customize->add_setting( 'internet_service_provider_pro_smart_storage_settings',
    array(
    'default' => '',
    'transport' => 'postMessage',
    'sanitize_callback' => 'internet_service_provider_pro_text_sanitization'
  ));
  $wp_customize->add_control( new VW_Themes_Seperator_custom_Control( $wp_customize, 'internet_service_provider_pro_smart_storage_settings',
    array(
    'label' => __('Section Background Settings','internet-service-provider-pro'),
    'section' => 'internet_service_provider_pro_smart_storage'
  )));
  $wp_customize->add_setting( 'internet_service_provider_pro_smart_storage_bgcolor', array(
    'default' => '',
    'sanitize_callback' => 'sanitize_hex_color'
  ));
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'internet_service_provider_pro_smart_storage_bgcolor', array(
    'label' => __('Section Background Color', 'internet-service-provider-pro'),
    'description'   => __('Either add background color or background image, if you add both background color will be top most priority','internet-service-provider-pro'),
    'section' => 'internet_service_provider_pro_smart_storage',
    'settings' => 'internet_service_provider_pro_smart_storage_bgcolor',
  )));
  $wp_customize->add_setting('internet_service_provider_pro_smart_storage_bgimage',array(
    'default' => '',
    'sanitize_callback' => 'esc_url_raw',
  ));
  $wp_customize->add_control(
    new WP_Customize_Image_Control( $wp_customize,'internet_service_provider_pro_smart_storage_bgimage',array(
    'label' => __('Section Background Image','internet-service-provider-pro'),
    'description' => __('Dimension 1600px * 430px','internet-service-provider-pro'),
    'section' => 'internet_service_provider_pro_smart_storage',
    'settings' => 'internet_service_provider_pro_smart_storage_bgimage'
  )));

  $wp_customize->add_setting( 'internet_service_provider_pro_smart_storage_bgimage_setting', array(
      'default'         => '',
      'sanitize_callback' => 'internet_service_provider_pro_sanitize_choices'
  ));
  $wp_customize->add_control('internet_service_provider_pro_smart_storage_bgimage_setting', array(
      'type'      => 'radio',
      'label'     => __('Choose image option', 'internet-service-provider-pro'),
      'section'   => 'internet_service_provider_pro_smart_storage',
      'choices'   => array(
        'bg-fixed'      => __( 'Fixed', 'internet-service-provider-pro' ),
        'bg-scroll'      => __( 'Scroll', 'internet-service-provider-pro' ),                    
  )));

  $wp_customize->add_setting( 'internet_service_provider_pro_smart_storage_content_settings',
    array(
    'default' => '',
    'transport' => 'postMessage',
    'sanitize_callback' => 'internet_service_provider_pro_text_sanitization'
  ));
  $wp_customize->add_control( new VW_Themes_Seperator_custom_Control( $wp_customize, 'internet_service_provider_pro_smart_storage_content_settings',
    array(
    'label' => __('Section Content Settings','internet-service-provider-pro'),
    'section' => 'internet_service_provider_pro_smart_storage'
  )));

  $wp_customize->add_setting('internet_service_provider_pro_smart_storage_tagline',array(
    'default' => '',
    'sanitize_callback' => 'sanitize_text_field'
  ));
  $wp_customize->add_control('internet_service_provider_pro_smart_storage_tagline',array(
    'label' => __('Section Tagline','internet-service-provider-pro'),
    'section' => 'internet_service_provider_pro_smart_storage',
    'setting' => 'internet_service_provider_pro_smart_storage_tagline',
    'type'    => 'text'
  ));

  $wp_customize->add_setting('internet_service_provider_pro_smart_storage_main_heading',array(
    'default' => '',
    'sanitize_callback' => 'sanitize_text_field'
  ));
  $wp_customize->add_control('internet_service_provider_pro_smart_storage_main_heading',array(
    'label' => __('Section Main Heading','internet-service-provider-pro'),
    'section' => 'internet_service_provider_pro_smart_storage',
    'setting' => 'internet_service_provider_pro_smart_storage_main_heading',
    'type'    => 'text'
  ));

  $wp_customize->add_setting( 'internet_service_provider_pro_smart_storage_icon_box',
    array(
    'default' => '',
    'transport' => 'postMessage',
    'sanitize_callback' => 'internet_service_provider_pro_text_sanitization'
  ));
  $wp_customize->add_control( new VW_Themes_Seperator_custom_Control( $wp_customize, 'internet_service_provider_pro_smart_storage_icon_box',
    array(
    'label' => __('Image Box','internet-service-provider-pro'),
    'section' => 'internet_service_provider_pro_smart_storage'
  )));

  $wp_customize->add_setting('internet_service_provider_pro_smart_storage_icon_box_number',array(
    'default' => '',
    'sanitize_callback' => 'sanitize_text_field'
  ));
  $wp_customize->add_control('internet_service_provider_pro_smart_storage_icon_box_number',array(
    'label' => __('Number of Boxes to show','internet-service-provider-pro'),
    'section' => 'internet_service_provider_pro_smart_storage',
    'setting' => 'internet_service_provider_pro_smart_storage_icon_box_number',
    'type'    => 'text'
  ));

  $smart_storage_icon_box = get_theme_mod('internet_service_provider_pro_smart_storage_icon_box_number');

  for($i=1;$i<=$smart_storage_icon_box;$i++)
  {
    $wp_customize->add_setting( 'internet_service_provider_pro_smart_storage_icon_box_settings'.$i,
    array(
      'default' => '',
      'transport' => 'postMessage',
      'sanitize_callback' => 'internet_service_provider_pro_text_sanitization'
    ));
    $wp_customize->add_control( new VW_Themes_Seperator_custom_Control( $wp_customize, 'internet_service_provider_pro_smart_storage_icon_box_settings'.$i,
      array(
      'label' => __('Box ','internet-service-provider-pro').$i,
      'section' => 'internet_service_provider_pro_smart_storage'
    )));

    $wp_customize->add_setting('internet_service_provider_pro_smart_storage_icon_box_main_image'.$i,array(
      'default' => '',
      'sanitize_callback' => 'esc_url_raw',
    ));
    $wp_customize->add_control(
      new WP_Customize_Image_Control( $wp_customize,'internet_service_provider_pro_smart_storage_icon_box_main_image'.$i,array(
      'label' => __('Main Image','internet-service-provider-pro'),
      'section' => 'internet_service_provider_pro_smart_storage',
      'settings' => 'internet_service_provider_pro_smart_storage_icon_box_main_image'.$i
    )));

    $wp_customize->add_setting('internet_service_provider_pro_smart_storage_icon_box_image'.$i,array(
      'default' => '',
      'sanitize_callback' => 'esc_url_raw',
    ));
    $wp_customize->add_control(
      new WP_Customize_Image_Control( $wp_customize,'internet_service_provider_pro_smart_storage_icon_box_image'.$i,array(
      'label' => __('Image','internet-service-provider-pro'),
      'section' => 'internet_service_provider_pro_smart_storage',
      'settings' => 'internet_service_provider_pro_smart_storage_icon_box_image'.$i
    )));

	  $wp_customize->add_setting('internet_service_provider_pro_smart_storage_icon_box_title'.$i,array(
      'default' => '',
      'sanitize_callback' => 'sanitize_text_field'
    ));
    $wp_customize->add_control('internet_service_provider_pro_smart_storage_icon_box_title'.$i,array(
      'label' => __('Title ','internet-service-provider-pro'),
      'section' => 'internet_service_provider_pro_smart_storage',
      'setting' => 'internet_service_provider_pro_smart_storage_icon_box_title'.$i,
      'type'    => 'text'
    ));
    
    $wp_customize->add_setting('internet_service_provider_pro_smart_storage_icon_box_text'.$i,array(
      'default' => '',
      'sanitize_callback' => 'sanitize_text_field'
    ));
    $wp_customize->add_control('internet_service_provider_pro_smart_storage_icon_box_text'.$i,array(
      'label' => __('Title ','internet-service-provider-pro'),
      'section' => 'internet_service_provider_pro_smart_storage',
      'setting' => 'internet_service_provider_pro_smart_storage_icon_box_text'.$i,
      'type'    => 'text'
    ));

    $wp_customize->add_setting('internet_service_provider_pro_smart_storage_icon_box_link_icon_url'.$i,array(
      'default' => '',
      'sanitize_callback' => 'esc_url_raw'
    ));
    $wp_customize->add_control('internet_service_provider_pro_smart_storage_icon_box_link_icon_url'.$i,array(
      'label' => __('Url ','internet-service-provider-pro'),
      'section' => 'internet_service_provider_pro_smart_storage',
      'setting' => 'internet_service_provider_pro_smart_storage_icon_box_link_icon_url'.$i,
      'type'    => 'url'
    ));
  }

  $wp_customize->add_setting( 'internet_service_provider_pro_smart_storage_color_settings',
    array(
    'default' => '',
    'transport' => 'postMessage',
    'sanitize_callback' => 'internet_service_provider_pro_text_sanitization'
  ));
  $wp_customize->add_control( new VW_Themes_Seperator_custom_Control( $wp_customize, 'internet_service_provider_pro_smart_storage_color_settings',
  array(
    'label' => __('Section Color & Typography','internet-service-provider-pro'),
    'section' => 'internet_service_provider_pro_smart_storage'
  )));

  $wp_customize->add_setting( 'internet_service_provider_pro_smart_storage_tagline_ct_pallete',
    array(
      'default' => '',
      'transport' => 'postMessage',
      'sanitize_callback' => 'internet_service_provider_pro_text_sanitization'
  ));
  $wp_customize->add_control( new VW_Themes_Seperator_custom_Control( $wp_customize, 'internet_service_provider_pro_smart_storage_tagline_ct_pallete',
    array(
    'label' => __('Tagline Typography ','internet-service-provider-pro'),
    'section' => 'internet_service_provider_pro_smart_storage'
  )));

  $wp_customize->add_setting( 'internet_service_provider_pro_smart_storage_tagline_color', array(
    'default' => '',
    'sanitize_callback' => 'sanitize_hex_color'
  ));
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'internet_service_provider_pro_smart_storage_tagline_color', array(
    'label' => __('Color', 'internet-service-provider-pro'),
    'section' => 'internet_service_provider_pro_smart_storage',
    'settings' => 'internet_service_provider_pro_smart_storage_tagline_color',
  )));

  $wp_customize->add_setting('internet_service_provider_pro_smart_storage_tagline_font_family',array(
    'default' => '',
    'capability' => 'edit_theme_options',
    'sanitize_callback' => 'sanitize_text_field'
  ));
  $wp_customize->add_control(
    'internet_service_provider_pro_smart_storage_tagline_font_family', array(
    'section'  => 'internet_service_provider_pro_smart_storage',
    'label'    => __('Font Family','internet-service-provider-pro'),
    'type'     => 'select',
    'choices'  => $font_array,
  ));

  $wp_customize->add_setting('internet_service_provider_pro_smart_storage_tagline_font_size',array(
    'default' => '',
    'sanitize_callback' => 'sanitize_text_field'
  ));
  $wp_customize->add_control('internet_service_provider_pro_smart_storage_tagline_font_size',array(
    'label' => __('Font Size','internet-service-provider-pro'),
    
    'section' => 'internet_service_provider_pro_smart_storage',
    'setting' => 'internet_service_provider_pro_smart_storage_tagline_font_size',
    'type'    => 'number'
  ));

  $wp_customize->add_setting( 'internet_service_provider_pro_smart_storage_main_heading_ct_pallete',
    array(
      'default' => '',
      'transport' => 'postMessage',
      'sanitize_callback' => 'internet_service_provider_pro_text_sanitization'
  ));
  $wp_customize->add_control( new VW_Themes_Seperator_custom_Control( $wp_customize, 'internet_service_provider_pro_smart_storage_main_heading_ct_pallete',
    array(
    'label' => __('Main Heading Typography ','internet-service-provider-pro'),
    'section' => 'internet_service_provider_pro_smart_storage'
  )));

  $wp_customize->add_setting( 'internet_service_provider_pro_smart_storage_main_heading_color', array(
    'default' => '',
    'sanitize_callback' => 'sanitize_hex_color'
  ));
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'internet_service_provider_pro_smart_storage_main_heading_color', array(
    'label' => __('Color', 'internet-service-provider-pro'),
    'section' => 'internet_service_provider_pro_smart_storage',
    'settings' => 'internet_service_provider_pro_smart_storage_main_heading_color',
  )));

  $wp_customize->add_setting('internet_service_provider_pro_smart_storage_main_heading_font_family',array(
    'default' => '',
    'capability' => 'edit_theme_options',
    'sanitize_callback' => 'sanitize_text_field'
  ));
  $wp_customize->add_control(
    'internet_service_provider_pro_smart_storage_main_heading_font_family', array(
    'section'  => 'internet_service_provider_pro_smart_storage',
    'label'    => __('Font Family','internet-service-provider-pro'),
    'type'     => 'select',
    'choices'  => $font_array,
  ));

  $wp_customize->add_setting('internet_service_provider_pro_smart_storage_main_heading_font_size',array(
    'default' => '',
    'sanitize_callback' => 'sanitize_text_field'
  ));
  $wp_customize->add_control('internet_service_provider_pro_smart_storage_main_heading_font_size',array(
    'label' => __('Font Size','internet-service-provider-pro'),
    
    'section' => 'internet_service_provider_pro_smart_storage',
    'setting' => 'internet_service_provider_pro_smart_storage_main_heading_font_size',
    'type'    => 'number'
  ));

  $wp_customize->add_setting( 'internet_service_provider_pro_smart_storage_box_title_ct_pallete',
    array(
      'default' => '',
      'transport' => 'postMessage',
      'sanitize_callback' => 'internet_service_provider_pro_text_sanitization'
  ));
  $wp_customize->add_control( new VW_Themes_Seperator_custom_Control( $wp_customize, 'internet_service_provider_pro_smart_storage_box_title_ct_pallete',
    array(
    'label' => __('Box Title Typography ','internet-service-provider-pro'),
    'section' => 'internet_service_provider_pro_smart_storage'
  )));

  $wp_customize->add_setting( 'internet_service_provider_pro_smart_storage_box_title_color', array(
    'default' => '',
    'sanitize_callback' => 'sanitize_hex_color'
  ));
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'internet_service_provider_pro_smart_storage_box_title_color', array(
    'label' => __('Color', 'internet-service-provider-pro'),
    'section' => 'internet_service_provider_pro_smart_storage',
    'settings' => 'internet_service_provider_pro_smart_storage_box_title_color',
  )));
  $wp_customize->add_setting('internet_service_provider_pro_smart_storage_box_title_font_family',array(
    'default' => '',
    'capability' => 'edit_theme_options',
    'sanitize_callback' => 'sanitize_text_field'
  ));
  $wp_customize->add_control(
    'internet_service_provider_pro_smart_storage_box_title_font_family', array(
    'section'  => 'internet_service_provider_pro_smart_storage',
    'label'    => __('Font Family','internet-service-provider-pro'),
    'type'     => 'select',
    'choices'  => $font_array,
  ));

  $wp_customize->add_setting('internet_service_provider_pro_smart_storage_box_title_font_size',array(
    'default' => '',
    'sanitize_callback' => 'sanitize_text_field'
  ));
  $wp_customize->add_control('internet_service_provider_pro_smart_storage_box_title_font_size',array(
    'label' => __('Font Size','internet-service-provider-pro'),
    
    'section' => 'internet_service_provider_pro_smart_storage',
    'setting' => 'internet_service_provider_pro_smart_storage_box_title_font_size',
    'type'    => 'number'
  ));

  $wp_customize->add_setting( 'internet_service_provider_pro_smart_storage_box_text_ct_pallete',
    array(
      'default' => '',
      'transport' => 'postMessage',
      'sanitize_callback' => 'internet_service_provider_pro_text_sanitization'
  ));
  $wp_customize->add_control( new VW_Themes_Seperator_custom_Control( $wp_customize, 'internet_service_provider_pro_smart_storage_box_text_ct_pallete',
    array(
    'label' => __('Box Text Typography ','internet-service-provider-pro'),
    'section' => 'internet_service_provider_pro_smart_storage'
  )));

  $wp_customize->add_setting( 'internet_service_provider_pro_smart_storage_box_text_color', array(
    'default' => '',
    'sanitize_callback' => 'sanitize_hex_color'
  ));
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'internet_service_provider_pro_smart_storage_box_text_color', array(
    'label' => __(' Color', 'internet-service-provider-pro'),
    'section' => 'internet_service_provider_pro_smart_storage',
    'settings' => 'internet_service_provider_pro_smart_storage_box_text_color',
  )));
  $wp_customize->add_setting('internet_service_provider_pro_smart_storage_box_text_font_family',array(
    'default' => '',
    'capability' => 'edit_theme_options',
    'sanitize_callback' => 'sanitize_text_field'
  ));
  $wp_customize->add_control(
    'internet_service_provider_pro_smart_storage_box_text_font_family', array(
    'section'  => 'internet_service_provider_pro_smart_storage',
    'label'    => __('Font Family','internet-service-provider-pro'),
    'type'     => 'select',
    'choices'  => $font_array,
  ));

  $wp_customize->add_setting('internet_service_provider_pro_smart_storage_box_text_font_size',array(
    'default' => '',
    'sanitize_callback' => 'sanitize_text_field'
  ));
  $wp_customize->add_control('internet_service_provider_pro_smart_storage_box_text_font_size',array(
    'label' => __('Font Size','internet-service-provider-pro'),
    'section' => 'internet_service_provider_pro_smart_storage',
    'setting' => 'internet_service_provider_pro_smart_storage_box_text_font_size',
    'type'    => 'number'
  ));

  $wp_customize->add_setting( 'internet_service_provider_pro_smart_storage_box_image_bgcolor', array(
    'default' => '',
    'sanitize_callback' => 'sanitize_hex_color'
  ));
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'internet_service_provider_pro_smart_storage_box_image_bgcolor', array(
    'label' => __('Box Image Background Color', 'internet-service-provider-pro'),
    'section' => 'internet_service_provider_pro_smart_storage',
    'settings' => 'internet_service_provider_pro_smart_storage_box_image_bgcolor',
  )));

  $wp_customize->add_setting( 'internet_service_provider_pro_smart_storage_box_image_border_color', array(
    'default' => '',
    'sanitize_callback' => 'sanitize_hex_color'
  ));
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'internet_service_provider_pro_smart_storage_box_image_border_color', array(
    'label' => __('Box Image Border Color', 'internet-service-provider-pro'),
    'section' => 'internet_service_provider_pro_smart_storage',
    'settings' => 'internet_service_provider_pro_smart_storage_box_image_border_color',
  )));

  $wp_customize->add_setting( 'internet_service_provider_pro_smart_storage_box_image_hover_bgcolor', array(
    'default' => '',
    'sanitize_callback' => 'sanitize_hex_color'
  ));
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'internet_service_provider_pro_smart_storage_box_image_hover_bgcolor', array(
    'label' => __('Box Image Hover Background Color', 'internet-service-provider-pro'),
    'section' => 'internet_service_provider_pro_smart_storage',
    'settings' => 'internet_service_provider_pro_smart_storage_box_image_hover_bgcolor',
  )));

  $wp_customize->add_setting( 'internet_service_provider_pro_smart_storage_box_hover_content_color', array(
    'default' => '',
    'sanitize_callback' => 'sanitize_hex_color'
  ));
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'internet_service_provider_pro_smart_storage_box_hover_content_color', array(
    'label' => __('Box Hover Content Color', 'internet-service-provider-pro'),
    'section' => 'internet_service_provider_pro_smart_storage',
    'settings' => 'internet_service_provider_pro_smart_storage_box_hover_content_color',
  )));

  $wp_customize->add_setting('internet_service_provider_pro_smart_storage_spacing_left_desktop', array(
    'sanitize_callback' => 'internet_service_provider_pro_sanitize_number_blank',
  ));

  $wp_customize->add_setting('internet_service_provider_pro_smart_storage_spacing_top_desktop', array(
    'sanitize_callback' => 'internet_service_provider_pro_sanitize_number_blank',
  ));

  $wp_customize->add_setting('internet_service_provider_pro_smart_storage_spacing_bottom_desktop', array(
    'sanitize_callback' => 'internet_service_provider_pro_sanitize_number_blank',
  ));

  $wp_customize->add_setting('internet_service_provider_pro_smart_storage_spacing_right_desktop', array(
    'sanitize_callback' => 'internet_service_provider_pro_sanitize_number_blank',
  ));

  $wp_customize->add_control(new VW_Dimensions_Control($wp_customize, 'internet_service_provider_pro_smart_storage_spacing', array(
    'section' => 'internet_service_provider_pro_smart_storage',
    'label' => esc_html__('Section Spacing(px)', 'internet-service-provider-pro'),
    'settings' => array(
        'desktop_left' => 'internet_service_provider_pro_smart_storage_spacing_left_desktop',
        'desktop_top' => 'internet_service_provider_pro_smart_storage_spacing_top_desktop',
        'desktop_bottom' => 'internet_service_provider_pro_smart_storage_spacing_bottom_desktop',
      'desktop_right' => 'internet_service_provider_pro_smart_storage_spacing_right_desktop'
  ),
    'input_attrs' => array(
        'min' => 0,
        'max' => 100,
        'step' => 1,
    ),
    'responsive' => false
  )));

  // --------------- Projects  --------------
  $wp_customize->add_section('internet_service_provider_pro_projects',array(
    'title' => __('Projects','internet-service-provider-pro'),
    'panel' => 'internet_service_provider_pro_panel_id',
  ));
  $wp_customize->add_setting('internet_service_provider_pro_projects_enable',
      array(
    'default' => 'Enable',
    'sanitize_callback' => 'internet_service_provider_pro_sanitize_choices'
  ));
  $wp_customize->add_control('internet_service_provider_pro_projects_enable',
    array(
    'type' => 'radio',
    'label' => __('Do you want this section', 'internet-service-provider-pro'),
    'section' => 'internet_service_provider_pro_projects',
    'choices' => array(
    'Enable' => __('Enable', 'internet-service-provider-pro'),
    'Disable' => __('Disable', 'internet-service-provider-pro')
  )));
  $wp_customize->selective_refresh->add_partial( 'internet_service_provider_pro_projects_enable', array(
    'selector' => '#projects h3',
    'render_callback' => 'internet_service_provider_pro_customize_partial_internet_service_provider_pro_projects_enable',
  ));
  $wp_customize->add_setting( 'internet_service_provider_pro_projects_settings',
    array(
    'default' => '',
    'transport' => 'postMessage',
    'sanitize_callback' => 'internet_service_provider_pro_text_sanitization'
  ));
  $wp_customize->add_control( new VW_Themes_Seperator_custom_Control( $wp_customize, 'internet_service_provider_pro_projects_settings',
    array(
    'label' => __('Section Background Settings','internet-service-provider-pro'),
    'section' => 'internet_service_provider_pro_projects'
  )));
  $wp_customize->add_setting( 'internet_service_provider_pro_projects_bgcolor', array(
    'default' => '',
    'sanitize_callback' => 'sanitize_hex_color'
  ));
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'internet_service_provider_pro_projects_bgcolor', array(
    'label' => __('Section Background Color', 'internet-service-provider-pro'),
    'description'   => __('Either add background color or background image, if you add both background color will be top most priority','internet-service-provider-pro'),
    'section' => 'internet_service_provider_pro_projects',
    'settings' => 'internet_service_provider_pro_projects_bgcolor',
  )));
  $wp_customize->add_setting('internet_service_provider_pro_projects_bgimage',array(
    'default' => '',
    'sanitize_callback' => 'esc_url_raw',
  ));
  $wp_customize->add_control(
    new WP_Customize_Image_Control( $wp_customize,'internet_service_provider_pro_projects_bgimage',array(
    'label' => __('Section Background Image','internet-service-provider-pro'),
    'description' => __('Dimension 1600px * 420px','internet-service-provider-pro'),
    'section' => 'internet_service_provider_pro_projects',
    'settings' => 'internet_service_provider_pro_projects_bgimage'
  )));
  //Work Column Layout
  $wp_customize->add_setting( 'internet_service_provider_pro_projects_bgimage_setting', array(
      'default'         => '',
      'sanitize_callback' => 'internet_service_provider_pro_sanitize_choices'
  ));
  $wp_customize->add_control('internet_service_provider_pro_projects_bgimage_setting', array(
      'type'      => 'radio',
      'label'     => __('Choose image option', 'internet-service-provider-pro'),
      'section'   => 'internet_service_provider_pro_projects',
      'choices'   => array(
        'bg-fixed'      => __( 'Fixed', 'internet-service-provider-pro' ),
        'bg-scroll'      => __( 'Scroll', 'internet-service-provider-pro' ),                    
  )));

  $wp_customize->add_setting('internet_service_provider_pro_projects_bgimage_size', array(
      'default' => '',
      'sanitize_callback' => 'internet_service_provider_pro_sanitize_choices'
  ));
  $wp_customize->add_control('internet_service_provider_pro_projects_bgimage_size', array(
      'type' => 'radio',
      'label' => __('Background Image Size', 'internet-service-provider-pro'),
      'section' => 'internet_service_provider_pro_projects',
      'choices' => array(
          'bg-auto' => __('Auto', 'internet-service-provider-pro'),
          'bg-cover' => __('Cover', 'internet-service-provider-pro'),
          'bg-contain' => __('Contain', 'internet-service-provider-pro'),
          'bg-xy' => __('Cover X & Y', 'internet-service-provider-pro'),
          'bg-x' => __('Cover X', 'internet-service-provider-pro'),
      )
  ));

  $wp_customize->add_setting( 'internet_service_provider_pro_projects_content_settings',
    array(
    'default' => '',
    'transport' => 'postMessage',
    'sanitize_callback' => 'internet_service_provider_pro_text_sanitization'
  ));
  $wp_customize->add_control( new VW_Themes_Seperator_custom_Control( $wp_customize, 'internet_service_provider_pro_projects_content_settings',
    array(
    'label' => __('Section Content Settings','internet-service-provider-pro'),
    'section' => 'internet_service_provider_pro_projects'
  )));

  $wp_customize->add_setting('internet_service_provider_pro_projects_tagline',array(
    'default' => '',
    'sanitize_callback' => 'sanitize_text_field'
  ));
  $wp_customize->add_control('internet_service_provider_pro_projects_tagline',array(
    'label' => __('Tagline','internet-service-provider-pro'),
    'section' => 'internet_service_provider_pro_projects',
    'setting' => 'internet_service_provider_pro_projects_tagline',
    'type'    => 'text'
  ));

  $wp_customize->add_setting('internet_service_provider_pro_projects_main_heading',array(
    'default' => '',
    'sanitize_callback' => 'sanitize_text_field'
  ));
  $wp_customize->add_control('internet_service_provider_pro_projects_main_heading',array(
    'label' => __('Main Heading 1','internet-service-provider-pro'),
    'section' => 'internet_service_provider_pro_projects',
    'setting' => 'internet_service_provider_pro_projects_main_heading',
    'type'    => 'text'
  ));

  $wp_customize->add_setting('internet_service_provider_pro_projects_number',array(
    'default' => '',
    'sanitize_callback' => 'sanitize_text_field'
  ));
  $wp_customize->add_control('internet_service_provider_pro_projects_number',array(
    'label' => __('Number of projects to show','internet-service-provider-pro'),
    'section' => 'internet_service_provider_pro_projects',
    'setting' => 'internet_service_provider_pro_projects_number',
    'type'    => 'text'
  ));

  $wp_customize->add_setting('internet_service_provider_pro_projects_project_name',array(
    'default' => '',
    'sanitize_callback' => 'sanitize_text_field'
  ));
  $wp_customize->add_control('internet_service_provider_pro_projects_project_name',array(
    'label' => __('Project Name Text','internet-service-provider-pro'),
    'section' => 'internet_service_provider_pro_projects',
    'setting' => 'internet_service_provider_pro_projects_project_name',
    'type'    => 'text'
  ));

  $wp_customize->add_setting('internet_service_provider_pro_projects_project_name_image',array(
    'default' => '',
    'sanitize_callback' => 'esc_url_raw',
  ));
  $wp_customize->add_control(
    new WP_Customize_Image_Control( $wp_customize,'internet_service_provider_pro_projects_project_name_image',array(
    'label' => __('Add Image','internet-service-provider-pro'),
    'section' => 'internet_service_provider_pro_projects',
    'settings' => 'internet_service_provider_pro_projects_project_name_image'
  )));

  $wp_customize->add_setting('internet_service_provider_pro_projects_location',array(
    'default' => '',
    'sanitize_callback' => 'sanitize_text_field'
  ));
  $wp_customize->add_control('internet_service_provider_pro_projects_location',array(
    'label' => __('Location Text','internet-service-provider-pro'),
    'section' => 'internet_service_provider_pro_projects',
    'setting' => 'internet_service_provider_pro_projects_location',
    'type'    => 'text'
  ));

  $wp_customize->add_setting('internet_service_provider_pro_projects_location_image',array(
    'default' => '',
    'sanitize_callback' => 'esc_url_raw',
  ));
  $wp_customize->add_control(
    new WP_Customize_Image_Control( $wp_customize,'internet_service_provider_pro_projects_location_image',array(
    'label' => __('Add Image','internet-service-provider-pro'),
    'section' => 'internet_service_provider_pro_projects',
    'settings' => 'internet_service_provider_pro_projects_location_image'
  )));

  $wp_customize->add_setting('internet_service_provider_pro_projects_style',array(
    'default' => '',
    'sanitize_callback' => 'sanitize_text_field'
  ));
  $wp_customize->add_control('internet_service_provider_pro_projects_style',array(
    'label' => __('Style Text','internet-service-provider-pro'),
    'section' => 'internet_service_provider_pro_projects',
    'setting' => 'internet_service_provider_pro_projects_style',
    'type'    => 'text'
  ));

  $wp_customize->add_setting('internet_service_provider_pro_projects_style_image',array(
    'default' => '',
    'sanitize_callback' => 'esc_url_raw',
  ));
  $wp_customize->add_control(
    new WP_Customize_Image_Control( $wp_customize,'internet_service_provider_pro_projects_style_image',array(
    'label' => __('Add Image','internet-service-provider-pro'),
    'section' => 'internet_service_provider_pro_projects',
    'settings' => 'internet_service_provider_pro_projects_style_image'
  )));

  $wp_customize->add_setting( 'internet_service_provider_pro_projects_section_button',
		array(
		'default' => '',
		'transport' => 'postMessage',
		'sanitize_callback' => 'internet_service_provider_pro_text_sanitization'
	));
	$wp_customize->add_control( new VW_Themes_Seperator_custom_Control( $wp_customize, 'internet_service_provider_pro_projects_section_button',
		array(
		'label' => __('Section Button','internet-service-provider-pro'),
		'section' => 'internet_service_provider_pro_projects'
	)));

	$wp_customize->add_setting('internet_service_provider_pro_projects_button_title',array(
		'default' => '',
		'sanitize_callback' => 'sanitize_text_field'
	));
	$wp_customize->add_control('internet_service_provider_pro_projects_button_title',array(
		'label' => __('Section Button Title','internet-service-provider-pro'),
		'section' => 'internet_service_provider_pro_projects',
		'setting' => 'internet_service_provider_pro_projects_button_title',
		'type'    => 'text'
	));

	$wp_customize->add_setting(
		'internet_service_provider_pro_projects_button_icon',
		array(
			'default'     => '',
			'sanitize_callback' => 'sanitize_text_field'
		)
	);
	$wp_customize->add_control(
		new internet_service_provider_pro_Fontawesome_Icon_Chooser(
			$wp_customize,
			'internet_service_provider_pro_projects_button_icon',
			array(
			'settings'    => 'internet_service_provider_pro_projects_button_icon',
			'section'   => 'internet_service_provider_pro_projects',
			'type'      => 'icon',
			'label'     => esc_html__( 'Choose  Icon', 'internet-service-provider-pro' ),
			)
		)
	);
	
	$wp_customize->add_setting('internet_service_provider_pro_projects_button_url',array(
		'default' => '',
		'sanitize_callback' => 'sanitize_text_field'
	));
	$wp_customize->add_control('internet_service_provider_pro_projects_button_url',array(
		'label' => __('Section Button Url','internet-service-provider-pro'),
		'section' => 'internet_service_provider_pro_projects',
		'setting' => 'internet_service_provider_pro_projects_button_url',
		'type'    => 'text'
	));
  
  $wp_customize->add_setting( 'internet_service_provider_pro_projects_color_settings',
    array(
    'default' => '',
    'transport' => 'postMessage',
    'sanitize_callback' => 'internet_service_provider_pro_text_sanitization'
  ));
  $wp_customize->add_control( new VW_Themes_Seperator_custom_Control( $wp_customize, 'internet_service_provider_pro_projects_color_settings',
  array(
    'label' => __('Section Color & Typography','internet-service-provider-pro'),
    'section' => 'internet_service_provider_pro_projects'
  )));

  $wp_customize->add_setting( 'internet_service_provider_pro_projects_tagline_ct_pallete',
    array(
      'default' => '',
      'transport' => 'postMessage',
      'sanitize_callback' => 'internet_service_provider_pro_text_sanitization'
  ));
  $wp_customize->add_control( new VW_Themes_Seperator_custom_Control( $wp_customize, 'internet_service_provider_pro_projects_tagline_ct_pallete',
    array(
    'label' => __('Tagline Typography ','internet-service-provider-pro'),
    'section' => 'internet_service_provider_pro_projects'
  )));

  $wp_customize->add_setting( 'internet_service_provider_pro_projects_tagline_color', array(
    'default' => '',
    'sanitize_callback' => 'sanitize_hex_color'
  ));
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'internet_service_provider_pro_projects_tagline_color', array(
    'label' => __('Color', 'internet-service-provider-pro'),
    'section' => 'internet_service_provider_pro_projects',
    'settings' => 'internet_service_provider_pro_projects_tagline_color',
  )));

  $wp_customize->add_setting('internet_service_provider_pro_projects_tagline_font_family',array(
    'default' => '',
    'capability' => 'edit_theme_options',
    'sanitize_callback' => 'sanitize_text_field'
  ));
  $wp_customize->add_control(
    'internet_service_provider_pro_projects_tagline_font_family', array(
    'section'  => 'internet_service_provider_pro_projects',
    'label'    => __('Font Family','internet-service-provider-pro'),
    'type'     => 'select',
    'choices'  => $font_array,
  ));

  $wp_customize->add_setting('internet_service_provider_pro_projects_tagline_font_size',array(
    'default' => '',
    'sanitize_callback' => 'sanitize_text_field'
  ));
  $wp_customize->add_control('internet_service_provider_pro_projects_tagline_font_size',array(
    'label' => __('Font Size','internet-service-provider-pro'),
    'section' => 'internet_service_provider_pro_projects',
    'setting' => 'internet_service_provider_pro_projects_tagline_font_size',
    'type'    => 'number'
  ));

  $wp_customize->add_setting( 'internet_service_provider_pro_projects_main_heading_ct_pallete',
    array(
      'default' => '',
      'transport' => 'postMessage',
      'sanitize_callback' => 'internet_service_provider_pro_text_sanitization'
  ));
  $wp_customize->add_control( new VW_Themes_Seperator_custom_Control( $wp_customize, 'internet_service_provider_pro_projects_main_heading_ct_pallete',
    array(
    'label' => __('Main Heading Typography ','internet-service-provider-pro'),
    'section' => 'internet_service_provider_pro_projects'
  )));

  $wp_customize->add_setting( 'internet_service_provider_pro_projects_main_heading_color', array(
    'default' => '',
    'sanitize_callback' => 'sanitize_hex_color'
  ));
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'internet_service_provider_pro_projects_main_heading_color', array(
    'label' => __('Color', 'internet-service-provider-pro'),
    'section' => 'internet_service_provider_pro_projects',
    'settings' => 'internet_service_provider_pro_projects_main_heading_color',
  )));

  $wp_customize->add_setting('internet_service_provider_pro_projects_main_heading_font_family',array(
    'default' => '',
    'capability' => 'edit_theme_options',
    'sanitize_callback' => 'sanitize_text_field'
  ));
  $wp_customize->add_control(
    'internet_service_provider_pro_projects_main_heading_font_family', array(
    'section'  => 'internet_service_provider_pro_projects',
    'label'    => __('Font Family','internet-service-provider-pro'),
    'type'     => 'select',
    'choices'  => $font_array,
  ));

  $wp_customize->add_setting('internet_service_provider_pro_projects_main_heading_font_size',array(
    'default' => '',
    'sanitize_callback' => 'sanitize_text_field'
  ));
  $wp_customize->add_control('internet_service_provider_pro_projects_main_heading_font_size',array(
    'label' => __('Font Size','internet-service-provider-pro'),
    'description' => __('Add font size in px','internet-service-provider-pro'),
    'section' => 'internet_service_provider_pro_projects',
    'setting' => 'internet_service_provider_pro_projects_main_heading_font_size',
    'type'    => 'number'
  ));

  $wp_customize->add_setting( 'internet_service_provider_pro_projects_box_meta_details_title_ct_pallete',
    array(
      'default' => '',
      'transport' => 'postMessage',
      'sanitize_callback' => 'internet_service_provider_pro_text_sanitization'
  ));
  $wp_customize->add_control( new VW_Themes_Seperator_custom_Control( $wp_customize, 'internet_service_provider_pro_projects_box_meta_details_title_ct_pallete',
    array(
    'label' => __('Meta Details Title Typography ','internet-service-provider-pro'),
    'section' => 'internet_service_provider_pro_projects'
  )));

  $wp_customize->add_setting( 'internet_service_provider_pro_projects_box_meta_details_title_color', array(
    'default' => '',
    'sanitize_callback' => 'sanitize_hex_color'
  ));
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'internet_service_provider_pro_projects_box_meta_details_title_color', array(
    'label' => __('Color', 'internet-service-provider-pro'),
    'section' => 'internet_service_provider_pro_projects',
    'settings' => 'internet_service_provider_pro_projects_box_meta_details_title_color',
  )));
  $wp_customize->add_setting('internet_service_provider_pro_projects_box_meta_details_title_font_family',array(
    'default' => '',
    'capability' => 'edit_theme_options',
    'sanitize_callback' => 'sanitize_text_field'
  ));
  $wp_customize->add_control(
    'internet_service_provider_pro_projects_box_meta_details_title_font_family', array(
    'section'  => 'internet_service_provider_pro_projects',
    'label'    => __('Font Family','internet-service-provider-pro'),
    'type'     => 'select',
    'choices'  => $font_array,
  ));

  $wp_customize->add_setting('internet_service_provider_pro_projects_box_meta_details_title_font_size',array(
    'default' => '',
    'sanitize_callback' => 'sanitize_text_field'
  ));
  $wp_customize->add_control('internet_service_provider_pro_projects_box_meta_details_title_font_size',array(
    'label' => __('Font Size','internet-service-provider-pro'),
    'description' => __('Add font size in px','internet-service-provider-pro'),
    'section' => 'internet_service_provider_pro_projects',
    'setting' => 'internet_service_provider_pro_projects_box_meta_details_title_font_size',
    'type'    => 'number'
  ));

  $wp_customize->add_setting( 'internet_service_provider_pro_projects_box_meta_details_text_ct_pallete',
    array(
      'default' => '',
      'transport' => 'postMessage',
      'sanitize_callback' => 'internet_service_provider_pro_text_sanitization'
  ));
  $wp_customize->add_control( new VW_Themes_Seperator_custom_Control( $wp_customize, 'internet_service_provider_pro_projects_box_meta_details_text_ct_pallete',
    array(
    'label' => __('Meta Details Text Typography ','internet-service-provider-pro'),
    'section' => 'internet_service_provider_pro_projects'
  )));

  $wp_customize->add_setting( 'internet_service_provider_pro_projects_box_meta_details_text_color', array(
    'default' => '',
    'sanitize_callback' => 'sanitize_hex_color'
  ));
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'internet_service_provider_pro_projects_box_meta_details_text_color', array(
    'label' => __('Color', 'internet-service-provider-pro'),
    'section' => 'internet_service_provider_pro_projects',
    'settings' => 'internet_service_provider_pro_projects_box_meta_details_text_color',
  )));
  $wp_customize->add_setting('internet_service_provider_pro_projects_box_meta_details_text_font_family',array(
    'default' => '',
    'capability' => 'edit_theme_options',
    'sanitize_callback' => 'sanitize_text_field'
  ));
  $wp_customize->add_control(
    'internet_service_provider_pro_projects_box_meta_details_text_font_family', array(
    'section'  => 'internet_service_provider_pro_projects',
    'label'    => __('Font Family','internet-service-provider-pro'),
    'type'     => 'select',
    'choices'  => $font_array,
  ));

  $wp_customize->add_setting('internet_service_provider_pro_projects_box_meta_details_text_font_size',array(
    'default' => '',
    'sanitize_callback' => 'sanitize_text_field'
  ));
  $wp_customize->add_control('internet_service_provider_pro_projects_box_meta_details_text_font_size',array(
    'label' => __('Font Size','internet-service-provider-pro'),
    'description' => __('Add font size in px','internet-service-provider-pro'),
    'section' => 'internet_service_provider_pro_projects',
    'setting' => 'internet_service_provider_pro_projects_box_meta_details_text_font_size',
    'type'    => 'number'
  ));

  $wp_customize->add_setting( 'internet_service_provider_pro_projects_box_bgcolor', array(
    'default' => '',
    'sanitize_callback' => 'sanitize_hex_color'
  ));
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'internet_service_provider_pro_projects_box_bgcolor', array(
    'label' => __('Box Background Color', 'internet-service-provider-pro'),
    'section' => 'internet_service_provider_pro_projects',
    'settings' => 'internet_service_provider_pro_projects_box_bgcolor',
  )));

  $wp_customize->add_setting( 'internet_service_provider_pro_projects_box_video_title_ct_pallete',
    array(
      'default' => '',
      'transport' => 'postMessage',
      'sanitize_callback' => 'internet_service_provider_pro_text_sanitization'
  ));
  $wp_customize->add_control( new VW_Themes_Seperator_custom_Control( $wp_customize, 'internet_service_provider_pro_projects_box_video_title_ct_pallete',
    array(
    'label' => __('Video Title Typography ','internet-service-provider-pro'),
    'section' => 'internet_service_provider_pro_projects'
  )));

  $wp_customize->add_setting( 'internet_service_provider_pro_projects_box_video_title_color', array(
    'default' => '',
    'sanitize_callback' => 'sanitize_hex_color'
  ));
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'internet_service_provider_pro_projects_box_video_title_color', array(
    'label' => __('Color', 'internet-service-provider-pro'),
    'section' => 'internet_service_provider_pro_projects',
    'settings' => 'internet_service_provider_pro_projects_box_video_title_color',
  )));
  $wp_customize->add_setting('internet_service_provider_pro_projects_box_video_title_font_family',array(
    'default' => '',
    'capability' => 'edit_theme_options',
    'sanitize_callback' => 'sanitize_text_field'
  ));
  $wp_customize->add_control(
    'internet_service_provider_pro_projects_box_video_title_font_family', array(
    'section'  => 'internet_service_provider_pro_projects',
    'label'    => __('Font Family','internet-service-provider-pro'),
    'type'     => 'select',
    'choices'  => $font_array,
  ));

  $wp_customize->add_setting('internet_service_provider_pro_projects_box_video_title_font_size',array(
    'default' => '',
    'sanitize_callback' => 'sanitize_text_field'
  ));
  $wp_customize->add_control('internet_service_provider_pro_projects_box_video_title_font_size',array(
    'label' => __('Font Size','internet-service-provider-pro'),
    'description' => __('Add font size in px','internet-service-provider-pro'),
    'section' => 'internet_service_provider_pro_projects',
    'setting' => 'internet_service_provider_pro_projects_box_video_title_font_size',
    'type'    => 'number'
  ));

  $wp_customize->add_setting( 'internet_service_provider_pro_projects_box_video_icon_ct_pallete',
    array(
      'default' => '',
      'transport' => 'postMessage',
      'sanitize_callback' => 'internet_service_provider_pro_text_sanitization'
  ));
  $wp_customize->add_control( new VW_Themes_Seperator_custom_Control( $wp_customize, 'internet_service_provider_pro_projects_box_video_icon_ct_pallete',
    array(
    'label' => __('Video Icon Typography ','internet-service-provider-pro'),
    'section' => 'internet_service_provider_pro_projects'
  )));

  $wp_customize->add_setting( 'internet_service_provider_pro_projects_box_video_icon_color', array(
    'default' => '',
    'sanitize_callback' => 'sanitize_hex_color'
  ));
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'internet_service_provider_pro_projects_box_video_icon_color', array(
    'label' => __('Color', 'internet-service-provider-pro'),
    'section' => 'internet_service_provider_pro_projects',
    'settings' => 'internet_service_provider_pro_projects_box_video_icon_color',
  )));

  $wp_customize->add_setting( 'internet_service_provider_pro_projects_box_video_icon_border_color', array(
    'default' => '',
    'sanitize_callback' => 'sanitize_hex_color'
  ));
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'internet_service_provider_pro_projects_box_video_icon_border_color', array(
    'label' => __('Border Color', 'internet-service-provider-pro'),
    'section' => 'internet_service_provider_pro_projects',
    'settings' => 'internet_service_provider_pro_projects_box_video_icon_border_color',
  )));

  $wp_customize->add_setting( 'internet_service_provider_pro_projects_box_video_icon_hover_color', array(
    'default' => '',
    'sanitize_callback' => 'sanitize_hex_color'
  ));
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'internet_service_provider_pro_projects_box_video_icon_hover_color', array(
    'label' => __('Icon Hover Color', 'internet-service-provider-pro'),
    'section' => 'internet_service_provider_pro_projects',
    'settings' => 'internet_service_provider_pro_projects_box_video_icon_hover_color',
  )));

  $wp_customize->add_setting( 'internet_service_provider_pro_projects_box_video_icon_hover_bgcolor', array(
    'default' => '',
    'sanitize_callback' => 'sanitize_hex_color'
  ));
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'internet_service_provider_pro_projects_box_video_icon_hover_bgcolor', array(
    'label' => __('Icon Hover background Color', 'internet-service-provider-pro'),
    'section' => 'internet_service_provider_pro_projects',
    'settings' => 'internet_service_provider_pro_projects_box_video_icon_hover_bgcolor',
  )));

  $wp_customize->add_setting( 'internet_service_provider_pro_projects_button_ct_pallete',
  array(
    'default' => '',
    'transport' => 'postMessage',
    'sanitize_callback' => 'internet_service_provider_pro_text_sanitization'
  ));
  $wp_customize->add_control( new VW_Themes_Seperator_custom_Control( $wp_customize, 'internet_service_provider_pro_projects_button_ct_pallete',
      array(
      'label' => __('Section Button Typography ','internet-service-provider-pro'),
      'section' => 'internet_service_provider_pro_projects'
  )));

  $wp_customize->add_setting( 'internet_service_provider_pro_projects_button_color', array(
      'default' => '',
      'sanitize_callback' => 'sanitize_hex_color'
  ));
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'internet_service_provider_pro_projects_button_color', array(
      'label' => __('Color', 'internet-service-provider-pro'),
      'section' => 'internet_service_provider_pro_projects',
      'settings' => 'internet_service_provider_pro_projects_button_color',
  )));
  $wp_customize->add_setting('internet_service_provider_pro_projects_button_font_family',array(
      'default' => '',
      'capability' => 'edit_theme_options',
      'sanitize_callback' => 'sanitize_text_field'
  ));
  $wp_customize->add_control(
      'internet_service_provider_pro_projects_button_font_family', array(
      'section'  => 'internet_service_provider_pro_projects',
      'label'    => __('Font Family','internet-service-provider-pro'),
      'type'     => 'select',
      'choices'  => $font_array,
  ));

  $wp_customize->add_setting('internet_service_provider_pro_projects_button_font_size',array(
      'default' => '',
      'sanitize_callback' => 'sanitize_text_field'
  ));
  $wp_customize->add_control('internet_service_provider_pro_projects_button_font_size',array(
      'label' => __('Font Size','internet-service-provider-pro'),
      
      'section' => 'internet_service_provider_pro_projects',
      'setting' => 'internet_service_provider_pro_projects_button_font_size',
      'type'    => 'number'
  ));

  $wp_customize->add_setting( 'internet_service_provider_pro_projects_button_bgcolor', array(
      'default' => '',
      'sanitize_callback' => 'sanitize_hex_color'
  ));
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'internet_service_provider_pro_projects_button_bgcolor', array(
      'label' => __('Background Color', 'internet-service-provider-pro'),
      'section' => 'internet_service_provider_pro_projects',
      'settings' => 'internet_service_provider_pro_projects_button_bgcolor',
  )));

  $wp_customize->add_setting( 'internet_service_provider_pro_projects_button_icon_color', array(
      'default' => '',
      'sanitize_callback' => 'sanitize_hex_color'
  ));
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'internet_service_provider_pro_projects_button_icon_color', array(
      'label' => __('Icon Color', 'internet-service-provider-pro'),
      'section' => 'internet_service_provider_pro_projects',
      'settings' => 'internet_service_provider_pro_projects_button_icon_color',
  )));

  $wp_customize->add_setting( 'internet_service_provider_pro_projects_button_icon_bgcolor', array(
      'default' => '',
      'sanitize_callback' => 'sanitize_hex_color'
  ));
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'internet_service_provider_pro_projects_button_icon_bgcolor', array(
      'label' => __('Icon Background Color', 'internet-service-provider-pro'),
      'section' => 'internet_service_provider_pro_projects',
      'settings' => 'internet_service_provider_pro_projects_button_icon_bgcolor',
  )));

  $wp_customize->add_setting( 'internet_service_provider_pro_projects_button_icon_hover_color', array(
      'default' => '',
      'sanitize_callback' => 'sanitize_hex_color'
  ));
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'internet_service_provider_pro_projects_button_icon_hover_color', array(
      'label' => __('Icon Hover Color', 'internet-service-provider-pro'),
      'section' => 'internet_service_provider_pro_projects',
      'settings' => 'internet_service_provider_pro_projects_button_icon_hover_color',
  )));

  $wp_customize->add_setting( 'internet_service_provider_pro_projects_button_icon_hover_bgcolor', array(
      'default' => '',
      'sanitize_callback' => 'sanitize_hex_color'
  ));
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'internet_service_provider_pro_projects_button_icon_hover_bgcolor', array(
      'label' => __('Icon Hover Background Color', 'internet-service-provider-pro'),
      'section' => 'internet_service_provider_pro_projects',
      'settings' => 'internet_service_provider_pro_projects_button_icon_hover_bgcolor',
  )));

  $wp_customize->add_setting( 'internet_service_provider_pro_projects_button_hover_bgcolor', array(
      'default' => '',
      'sanitize_callback' => 'sanitize_hex_color'
  ));
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'internet_service_provider_pro_projects_button_hover_bgcolor', array(
      'label' => __('Hover Background Color', 'internet-service-provider-pro'),
      'section' => 'internet_service_provider_pro_projects',
      'settings' => 'internet_service_provider_pro_projects_button_hover_bgcolor',
  )));

  $wp_customize->add_setting( 'internet_service_provider_pro_projects_button_text_color_hover', array(
      'default' => '',
      'sanitize_callback' => 'sanitize_hex_color'
  ));
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'internet_service_provider_pro_projects_button_text_color_hover', array(
      'label' => __('Hover Text Color', 'internet-service-provider-pro'),
      'section' => 'internet_service_provider_pro_projects',
      'settings' => 'internet_service_provider_pro_projects_button_text_color_hover',
  )));

  $wp_customize->add_setting('internet_service_provider_pro_projects_spacing_left_desktop', array(
    'sanitize_callback' => 'internet_service_provider_pro_sanitize_number_blank',
  ));

  $wp_customize->add_setting('internet_service_provider_pro_projects_spacing_top_desktop', array(
    'sanitize_callback' => 'internet_service_provider_pro_sanitize_number_blank',
  ));

  $wp_customize->add_setting('internet_service_provider_pro_projects_spacing_bottom_desktop', array(
    'sanitize_callback' => 'internet_service_provider_pro_sanitize_number_blank',
  ));

  $wp_customize->add_setting('internet_service_provider_pro_projects_spacing_right_desktop', array(
    'sanitize_callback' => 'internet_service_provider_pro_sanitize_number_blank',
  ));

  $wp_customize->add_control(new VW_Dimensions_Control($wp_customize, 'internet_service_provider_pro_projects_spacing', array(
    'section' => 'internet_service_provider_pro_projects',
    'label' => esc_html__('Section Spacing(px)', 'internet-service-provider-pro'),
    'settings' => array(
        'desktop_left' => 'internet_service_provider_pro_projects_spacing_left_desktop',
        'desktop_top' => 'internet_service_provider_pro_projects_spacing_top_desktop',
        'desktop_bottom' => 'internet_service_provider_pro_projects_spacing_bottom_desktop',
        'desktop_right' => 'internet_service_provider_pro_projects_spacing_right_desktop'
    ),
    'input_attrs' => array(
        'min' => 0,
        'max' => 100,
        'step' => 1,
    ),
    'responsive' => false
  )));

  // -------------- Testimonials --------------
  $wp_customize->add_section('internet_service_provider_pro_testimonials',array(
    'title' => __('Testimonials','internet-service-provider-pro'),
    'panel' => 'internet_service_provider_pro_panel_id',
  ));

  $wp_customize->add_setting('internet_service_provider_pro_testimonials_enable',
      array(
    'default' => 'Enable',
    'sanitize_callback' => 'internet_service_provider_pro_sanitize_choices'
  ));
  $wp_customize->add_control('internet_service_provider_pro_testimonials_enable',
    array(
    'type' => 'radio',
    'label' => __('Do you want this section', 'internet-service-provider-pro'),
    'section' => 'internet_service_provider_pro_testimonials',
    'choices' => array(
    'Enable' => __('Enable', 'internet-service-provider-pro'),
    'Disable' => __('Disable', 'internet-service-provider-pro')
  )));

  $wp_customize->selective_refresh->add_partial( 'internet_service_provider_pro_testimonials_enable', array(
    'selector' => '#testimonials h3 ',
    'render_callback' => 'internet_service_provider_pro_customize_partial_internet_service_provider_pro_testimonials_enable',
  ));
 
  $wp_customize->add_setting( 'internet_service_provider_pro_testimonials_bg_settings',
  array(
    'default' => '',
    'transport' => 'postMessage',
    'sanitize_callback' => 'internet_service_provider_pro_text_sanitization'
  ));
  $wp_customize->add_control( new VW_Themes_Seperator_custom_Control( $wp_customize, 'internet_service_provider_pro_testimonials_bg_settings',
    array(
    'label' => __('Background Settings','internet-service-provider-pro'),
    'section' => 'internet_service_provider_pro_testimonials'
  )));

  $wp_customize->add_setting( 'internet_service_provider_pro_testimonials_bgcolor', array(
    'default' => '',
    'sanitize_callback' => 'sanitize_hex_color'
  ));
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'internet_service_provider_pro_testimonials_bgcolor',array(
    'label' => __('Background Color', 'internet-service-provider-pro'),
    'description' => __('Either add background color or background image, if you add both background color will be top most priority', 'internet-service-provider-pro'),
    'section' => 'internet_service_provider_pro_testimonials',
    'settings' => 'internet_service_provider_pro_testimonials_bgcolor',
  )));
  $wp_customize->add_setting('internet_service_provider_pro_testimonials_bgimage',array(
        'default' => '',
      'sanitize_callback' => 'esc_url_raw',
  ));
  $wp_customize->add_control(
     new WP_Customize_Image_Control($wp_customize,'internet_service_provider_pro_testimonials_bgimage',
      array(
      'label' => __('Background Image','internet-service-provider-pro'),
      'description' => __('Dimension 1600px * 750px','internet-service-provider-pro'),
      'section' => 'internet_service_provider_pro_testimonials',
      'settings' => 'internet_service_provider_pro_testimonials_bgimage',
  )));

  $wp_customize->add_setting( 'internet_service_provider_pro_testimonial_content_settings',
    array(
    'default' => '',
    'transport' => 'postMessage',
    'sanitize_callback' => 'internet_service_provider_pro_text_sanitization'
  ));
  $wp_customize->add_control( new VW_Themes_Seperator_custom_Control( $wp_customize, 'internet_service_provider_pro_testimonial_content_settings',
    array(
    'label' => __('Testimonials Settings','internet-service-provider-pro'),
    'section' => 'internet_service_provider_pro_testimonials'
  )));

  $wp_customize->add_setting('internet_service_provider_pro_testimonials_tagline',array(
    'default' => '',
    'sanitize_callback' => 'sanitize_text_field'
  ));
  $wp_customize->add_control('internet_service_provider_pro_testimonials_tagline',array(
    'label' => __('Section Tagline','internet-service-provider-pro'),
    'section' => 'internet_service_provider_pro_testimonials',
    'setting' => 'internet_service_provider_pro_testimonials_tagline',
    'type'    => 'text'
  ));

  $wp_customize->add_setting('internet_service_provider_pro_testimonials_main_heading',array(
    'default' => '',
    'sanitize_callback' => 'sanitize_text_field'
  ));
  $wp_customize->add_control('internet_service_provider_pro_testimonials_main_heading',array(
    'label' => __('Section Main Heading','internet-service-provider-pro'),
    'section' => 'internet_service_provider_pro_testimonials',
    'setting' => 'internet_service_provider_pro_testimonials_main_heading',
    'type'    => 'text'
  ));

  $wp_customize->add_setting('internet_service_provider_pro_testimonials_number',array(
    'default' => '',
    'sanitize_callback' => 'sanitize_text_field'
  ));
  $wp_customize->add_control('internet_service_provider_pro_testimonials_number',array(
    'label' => __('No of Testimonials To Show','internet-service-provider-pro'),
    'section' => 'internet_service_provider_pro_testimonials',
    'setting' => 'internet_service_provider_pro_testimonials_number',
    'type'    => 'number'
  ));

  $wp_customize->add_setting('internet_service_provider_pro_testimonials_image',array(
        'default' => '',
      'sanitize_callback' => 'esc_url_raw',
  ));
  $wp_customize->add_control(
     new WP_Customize_Image_Control($wp_customize,'internet_service_provider_pro_testimonials_image',
      array(
      'label' => __('Add Image','internet-service-provider-pro'),
      'description' => __('Dimension 820px * 820px','internet-service-provider-pro'),
      'section' => 'internet_service_provider_pro_testimonials',
      'settings' => 'internet_service_provider_pro_testimonials_image',
  )));

  $wp_customize->add_setting( 'internet_service_provider_pro_testimonials_carousel_loop',
  array(
      'default' => 1,
      'transport' => 'refresh',
      'sanitize_callback' => 'internet_service_provider_pro_switch_sanitization'
  )); 
  $wp_customize->add_control( new internet_service_provider_pro_Toggle_Switch_Custom_control( $wp_customize, 'internet_service_provider_pro_testimonials_carousel_loop',
    array(
        'label' => esc_html__( 'Carousel Loop', 'internet-service-provider-pro' ),
        'section' => 'internet_service_provider_pro_testimonials'
  )));

  $wp_customize->add_setting('internet_service_provider_pro_testimonials_carousel_speed',array(
    'default' => '',
    'sanitize_callback' => 'sanitize_text_field'
  ));
  $wp_customize->add_control('internet_service_provider_pro_testimonials_carousel_speed',array(
    'label' => __('Carousel Speed','internet-service-provider-pro'),
    'description'=>__('Ex. 1000 for One second','internet-service-provider-pro'),
    'section' => 'internet_service_provider_pro_testimonials',
    'setting' => 'internet_service_provider_pro_testimonials_carousel_speed',
    'type'    => 'number'
  ));

  $wp_customize->add_setting('internet_service_provider_pro_testimonials_carousel_dots', array(
      'default' => 1,
      'transport' => 'refresh',
      'sanitize_callback' => 'internet_service_provider_pro_switch_sanitization'
  ));
  $wp_customize->add_control(new internet_service_provider_pro_Toggle_Switch_Custom_control($wp_customize, 'internet_service_provider_pro_testimonials_carousel_dots', array(
      'label' => esc_html__('Carousel Dots', 'internet-service-provider-pro'),
      'section' => 'internet_service_provider_pro_testimonials'
  )));

  $wp_customize->add_setting( 'internet_service_provider_pro_testimonials_color_settings',
    array(
    'default' => '',
    'transport' => 'postMessage',
    'sanitize_callback' => 'internet_service_provider_pro_text_sanitization'
  ));
  $wp_customize->add_control( new VW_Themes_Seperator_custom_Control( $wp_customize, 'internet_service_provider_pro_testimonials_color_settings',
  array(
    'label' => __('Section Color & Typography','internet-service-provider-pro'),
    'section' => 'internet_service_provider_pro_testimonials'
  )));

   $wp_customize->add_setting( 'internet_service_provider_pro_testimonials_tagline_ct_pallete',
    array(
      'default' => '',
      'transport' => 'postMessage',
      'sanitize_callback' => 'internet_service_provider_pro_text_sanitization'
  ));
  $wp_customize->add_control( new VW_Themes_Seperator_custom_Control( $wp_customize, 'internet_service_provider_pro_testimonials_tagline_ct_pallete',
    array(
    'label' => __('Tagline Typography ','internet-service-provider-pro'),
    'section' => 'internet_service_provider_pro_testimonials'
  )));

  $wp_customize->add_setting( 'internet_service_provider_pro_testimonials_tagline_color', array(
    'default' => '',
    'sanitize_callback' => 'sanitize_hex_color'
  ));
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'internet_service_provider_pro_testimonials_tagline_color', array(
    'label' => __('Color', 'internet-service-provider-pro'),
    'section' => 'internet_service_provider_pro_testimonials',
    'settings' => 'internet_service_provider_pro_testimonials_tagline_color',
  )));

  $wp_customize->add_setting('internet_service_provider_pro_testimonials_tagline_font_family',array(
    'default' => '',
    'capability' => 'edit_theme_options',
    'sanitize_callback' => 'sanitize_text_field'
  ));
  $wp_customize->add_control(
    'internet_service_provider_pro_testimonials_tagline_font_family', array(
    'section'  => 'internet_service_provider_pro_testimonials',
    'label'    => __('Font Family','internet-service-provider-pro'),
    'type'     => 'select',
    'choices'  => $font_array,
  ));

  $wp_customize->add_setting('internet_service_provider_pro_testimonials_tagline_font_size',array(
    'default' => '',
    'sanitize_callback' => 'sanitize_text_field'
  ));
  $wp_customize->add_control('internet_service_provider_pro_testimonials_tagline_font_size',array(
    'label' => __('Font Size','internet-service-provider-pro'),
    
    'section' => 'internet_service_provider_pro_testimonials',
    'setting' => 'internet_service_provider_pro_testimonials_tagline_font_size',
    'type'    => 'number'
  ));

  $wp_customize->add_setting( 'internet_service_provider_pro_testimonials_main_heading_ct_pallete',
    array(
      'default' => '',
      'transport' => 'postMessage',
      'sanitize_callback' => 'internet_service_provider_pro_text_sanitization'
  ));
  $wp_customize->add_control( new VW_Themes_Seperator_custom_Control( $wp_customize, 'internet_service_provider_pro_testimonials_main_heading_ct_pallete',
    array(
    'label' => __('Main Heading Typography ','internet-service-provider-pro'),
    'section' => 'internet_service_provider_pro_testimonials'
  )));

  $wp_customize->add_setting( 'internet_service_provider_pro_testimonials_main_heading_color', array(
    'default' => '',
    'sanitize_callback' => 'sanitize_hex_color'
  ));
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'internet_service_provider_pro_testimonials_main_heading_color', array(
    'label' => __('Color', 'internet-service-provider-pro'),
    'section' => 'internet_service_provider_pro_testimonials',
    'settings' => 'internet_service_provider_pro_testimonials_main_heading_color',
  )));

  $wp_customize->add_setting('internet_service_provider_pro_testimonials_main_heading_font_family',array(
    'default' => '',
    'capability' => 'edit_theme_options',
    'sanitize_callback' => 'sanitize_text_field'
  ));
  $wp_customize->add_control(
    'internet_service_provider_pro_testimonials_main_heading_font_family', array(
    'section'  => 'internet_service_provider_pro_testimonials',
    'label'    => __('Font Family','internet-service-provider-pro'),
    'type'     => 'select',
    'choices'  => $font_array,
  ));

  $wp_customize->add_setting('internet_service_provider_pro_testimonials_main_heading_font_size',array(
    'default' => '',
    'sanitize_callback' => 'sanitize_text_field'
  ));
  $wp_customize->add_control('internet_service_provider_pro_testimonials_main_heading_font_size',array(
    'label' => __('Font Size','internet-service-provider-pro'),
    'section' => 'internet_service_provider_pro_testimonials',
    'setting' => 'internet_service_provider_pro_testimonials_main_heading_font_size',
    'type'    => 'number'
  ));

   $wp_customize->add_setting( 'internet_service_provider_pro_testimonials_content_ct_pallete',
    array(
      'default' => '',
      'transport' => 'postMessage',
      'sanitize_callback' => 'internet_service_provider_pro_text_sanitization'
  ));
  $wp_customize->add_control( new VW_Themes_Seperator_custom_Control( $wp_customize, 'internet_service_provider_pro_testimonials_content_ct_pallete',
    array(
    'label' => __('Testimonial Content Typography ','internet-service-provider-pro'),
    'section' => 'internet_service_provider_pro_testimonials'
  )));

  $wp_customize->add_setting( 'internet_service_provider_pro_testimonials_content_color', array(
    'default' => '',
    'sanitize_callback' => 'sanitize_hex_color'
  ));
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'internet_service_provider_pro_testimonials_content_color', array(
    'label' => __('Color', 'internet-service-provider-pro'),
    'section' => 'internet_service_provider_pro_testimonials',
    'settings' => 'internet_service_provider_pro_testimonials_content_color',
  )));
  $wp_customize->add_setting('internet_service_provider_pro_testimonials_content_font_family',array(
    'default' => '',
    'capability' => 'edit_theme_options',
    'sanitize_callback' => 'sanitize_text_field'
  ));
  $wp_customize->add_control(
    'internet_service_provider_pro_testimonials_content_font_family', array(
    'section'  => 'internet_service_provider_pro_testimonials',
    'label'    => __('Font Family','internet-service-provider-pro'),
    'type'     => 'select',
    'choices'  => $font_array,
  ));

  $wp_customize->add_setting('internet_service_provider_pro_testimonials_content_font_size',array(
    'default' => '',
    'sanitize_callback' => 'sanitize_text_field'
  ));
  $wp_customize->add_control('internet_service_provider_pro_testimonials_content_font_size',array(
    'label' => __('Font Size','internet-service-provider-pro'),
    
    'section' => 'internet_service_provider_pro_testimonials',
    'setting' => 'internet_service_provider_pro_testimonials_content_font_size',
    'type'    => 'number'
  ));

  $wp_customize->add_setting( 'internet_service_provider_pro_testimonials_name_ct_pallete',
    array(
      'default' => '',
      'transport' => 'postMessage',
      'sanitize_callback' => 'internet_service_provider_pro_text_sanitization'
  ));
  $wp_customize->add_control( new VW_Themes_Seperator_custom_Control( $wp_customize, 'internet_service_provider_pro_testimonials_name_ct_pallete',
    array(
    'label' => __('Testimonial Name Typography ','internet-service-provider-pro'),
    'section' => 'internet_service_provider_pro_testimonials'
  )));

  $wp_customize->add_setting( 'internet_service_provider_pro_testimonials_name_color', array(
    'default' => '',
    'sanitize_callback' => 'sanitize_hex_color'
  ));
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'internet_service_provider_pro_testimonials_name_color', array(
    'label' => __('Color', 'internet-service-provider-pro'),
    'section' => 'internet_service_provider_pro_testimonials',
    'settings' => 'internet_service_provider_pro_testimonials_name_color',
  )));
  $wp_customize->add_setting('internet_service_provider_pro_testimonials_name_font_family',array(
    'default' => '',
    'capability' => 'edit_theme_options',
    'sanitize_callback' => 'sanitize_text_field'
  ));
  $wp_customize->add_control(
    'internet_service_provider_pro_testimonials_name_font_family', array(
    'section'  => 'internet_service_provider_pro_testimonials',
    'label'    => __('Font Family','internet-service-provider-pro'),
    'type'     => 'select',
    'choices'  => $font_array,
  ));

  $wp_customize->add_setting('internet_service_provider_pro_testimonials_name_font_size',array(
    'default' => '',
    'sanitize_callback' => 'sanitize_text_field'
  ));
  $wp_customize->add_control('internet_service_provider_pro_testimonials_name_font_size',array(
    'label' => __('Font Size','internet-service-provider-pro'),
    
    'section' => 'internet_service_provider_pro_testimonials',
    'setting' => 'internet_service_provider_pro_testimonials_name_font_size',
    'type'    => 'number'
  ));

  $wp_customize->add_setting( 'internet_service_provider_pro_testimonials_name_hover_color', array(
    'default' => '',
    'sanitize_callback' => 'sanitize_hex_color'
  ));
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'internet_service_provider_pro_testimonials_name_hover_color', array(
    'label' => __('Hover Color', 'internet-service-provider-pro'),
    'section' => 'internet_service_provider_pro_testimonials',
    'settings' => 'internet_service_provider_pro_testimonials_name_hover_color',
  )));

  $wp_customize->add_setting( 'internet_service_provider_pro_testimonials_desig_ct_pallete',
    array(
      'default' => '',
      'transport' => 'postMessage',
      'sanitize_callback' => 'internet_service_provider_pro_text_sanitization'
  ));
  $wp_customize->add_control( new VW_Themes_Seperator_custom_Control( $wp_customize, 'internet_service_provider_pro_testimonials_desig_ct_pallete',
    array(
    'label' => __('Testimonial Designation Typography ','internet-service-provider-pro'),
    'section' => 'internet_service_provider_pro_testimonials'
  )));

  $wp_customize->add_setting( 'internet_service_provider_pro_testimonials_desig_color', array(
    'default' => '',
    'sanitize_callback' => 'sanitize_hex_color'
  ));
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'internet_service_provider_pro_testimonials_desig_color', array(
    'label' => __('Color', 'internet-service-provider-pro'),
    'section' => 'internet_service_provider_pro_testimonials',
    'settings' => 'internet_service_provider_pro_testimonials_desig_color',
  )));
  $wp_customize->add_setting('internet_service_provider_pro_testimonials_desig_font_family',array(
    'default' => '',
    'capability' => 'edit_theme_options',
    'sanitize_callback' => 'sanitize_text_field'
  ));
  $wp_customize->add_control(
    'internet_service_provider_pro_testimonials_desig_font_family', array(
    'section'  => 'internet_service_provider_pro_testimonials',
    'label'    => __('Font Family','internet-service-provider-pro'),
    'type'     => 'select',
    'choices'  => $font_array,
  ));

  $wp_customize->add_setting('internet_service_provider_pro_testimonials_desig_font_size',array(
    'default' => '',
    'sanitize_callback' => 'sanitize_text_field'
  ));
  $wp_customize->add_control('internet_service_provider_pro_testimonials_desig_font_size',array(
    'label' => __('Font Size','internet-service-provider-pro'),
    
    'section' => 'internet_service_provider_pro_testimonials',
    'setting' => 'internet_service_provider_pro_testimonials_desig_font_size',
    'type'    => 'number'
  ));

   $wp_customize->add_setting( 'internet_service_provider_pro_testimonials_reviews_ct_pallete',
    array(
      'default' => '',
      'transport' => 'postMessage',
      'sanitize_callback' => 'internet_service_provider_pro_text_sanitization'
  ));
  $wp_customize->add_control( new VW_Themes_Seperator_custom_Control( $wp_customize, 'internet_service_provider_pro_testimonials_reviews_ct_pallete',
    array(
    'label' => __('Testimonial Reviews Typography ','internet-service-provider-pro'),
    'section' => 'internet_service_provider_pro_testimonials'
  )));

  $wp_customize->add_setting( 'internet_service_provider_pro_testimonials_star_color1', array(
    'default' => '',
    'sanitize_callback' => 'sanitize_hex_color'
  ));
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'internet_service_provider_pro_testimonials_star_color1', array(
    'label' => __('Star Color 1', 'internet-service-provider-pro'),
    'section' => 'internet_service_provider_pro_testimonials',
    'settings' => 'internet_service_provider_pro_testimonials_star_color1',
  )));

  $wp_customize->add_setting( 'internet_service_provider_pro_testimonials_star_color2', array(
    'default' => '',
    'sanitize_callback' => 'sanitize_hex_color'
  ));
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'internet_service_provider_pro_testimonials_star_color2', array(
    'label' => __('Star Color 2', 'internet-service-provider-pro'),
    'section' => 'internet_service_provider_pro_testimonials',
    'settings' => 'internet_service_provider_pro_testimonials_star_color2',
  )));

  $wp_customize->add_setting( 'internet_service_provider_pro_testimonials_box_bgcolor', array(
    'default' => '',
    'sanitize_callback' => 'sanitize_hex_color'
  ));
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'internet_service_provider_pro_testimonials_box_bgcolor', array(
    'label' => __('Box Background Color', 'internet-service-provider-pro'),
    'section' => 'internet_service_provider_pro_testimonials',
    'settings' => 'internet_service_provider_pro_testimonials_box_bgcolor',
  )));

  $wp_customize->add_setting( 'internet_service_provider_pro_testimonials_dots_ct_pallete',
    array(
      'default' => '',
      'transport' => 'postMessage',
      'sanitize_callback' => 'internet_service_provider_pro_text_sanitization'
  ));
  $wp_customize->add_control( new VW_Themes_Seperator_custom_Control( $wp_customize, 'internet_service_provider_pro_testimonials_dots_ct_pallete',
    array(
    'label' => __('Dots Typography ','internet-service-provider-pro'),
    'section' => 'internet_service_provider_pro_testimonials'
  )));

  $wp_customize->add_setting( 'internet_service_provider_pro_testimonials_dots_color', array(
    'default' => '',
    'sanitize_callback' => 'sanitize_hex_color'
  ));
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'internet_service_provider_pro_testimonials_dots_color', array(
    'label' => __('Color', 'internet-service-provider-pro'),
    'section' => 'internet_service_provider_pro_testimonials',
    'settings' => 'internet_service_provider_pro_testimonials_dots_color',
  )));

  $wp_customize->add_setting( 'internet_service_provider_pro_testimonials_active_dots_color', array(
    'default' => '',
    'sanitize_callback' => 'sanitize_hex_color'
  ));
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'internet_service_provider_pro_testimonials_active_dots_color', array(
    'label' => __('Active Dots Color', 'internet-service-provider-pro'),
    'section' => 'internet_service_provider_pro_testimonials',
    'settings' => 'internet_service_provider_pro_testimonials_active_dots_color',
  )));

  $wp_customize->add_setting('internet_service_provider_pro_testimonial_spacing_left_desktop', array(
      'sanitize_callback' => 'internet_service_provider_pro_sanitize_number_blank',
  ));

  $wp_customize->add_setting('internet_service_provider_pro_testimonial_spacing_top_desktop', array(
      'sanitize_callback' => 'internet_service_provider_pro_sanitize_number_blank',
  ));

  $wp_customize->add_setting('internet_service_provider_pro_testimonial_spacing_bottom_desktop', array(
      'sanitize_callback' => 'internet_service_provider_pro_sanitize_number_blank',
  ));

  $wp_customize->add_setting('internet_service_provider_pro_testimonial_spacing_right_desktop', array(
      'sanitize_callback' => 'internet_service_provider_pro_sanitize_number_blank',
  ));

  $wp_customize->add_control(new VW_Dimensions_Control($wp_customize, 'internet_service_provider_pro_testimonial_spacing', array(
      'section' => 'internet_service_provider_pro_testimonials',
      'label' => esc_html__('Section Spacing(px)', 'internet-service-provider-pro'),
      'settings' => array(
          'desktop_left' => 'internet_service_provider_pro_testimonial_spacing_left_desktop',
          'desktop_top' => 'internet_service_provider_pro_testimonial_spacing_top_desktop',
          'desktop_bottom' => 'internet_service_provider_pro_testimonial_spacing_bottom_desktop',
          'desktop_right' => 'internet_service_provider_pro_testimonial_spacing_right_desktop'
      ),
      'input_attrs' => array(
          'min' => 0,
          'max' => 100,
          'step' => 1,
      ),
      'responsive' => false
  )));

  // -------------- Latest News --------------
  $wp_customize->add_section('internet_service_provider_pro_latest_news',array(
    'title' => __('Latest News','internet-service-provider-pro'),
    'panel' => 'internet_service_provider_pro_panel_id',
  ));
  
  $wp_customize->add_setting('internet_service_provider_pro_latest_news_enable',
      array(
    'default' => 'Enable',
    'sanitize_callback' => 'internet_service_provider_pro_sanitize_choices'
  ));
  $wp_customize->add_control('internet_service_provider_pro_latest_news_enable',
    array(
    'type' => 'radio',
    'label' => __('Do you want this section', 'internet-service-provider-pro'),
    'section' => 'internet_service_provider_pro_latest_news',
    'choices' => array(
    'Enable' => __('Enable', 'internet-service-provider-pro'),
    'Disable' => __('Disable', 'internet-service-provider-pro')
  )));
  $wp_customize->selective_refresh->add_partial( 'internet_service_provider_pro_latest_news_enable', array(
    'selector' => '#latest-news h3',
    'render_callback' => 'internet_service_provider_pro_customize_partial_internet_service_provider_pro_latest_news_enable',
  ));
  $wp_customize->add_setting( 'internet_service_provider_pro_latest_news_settings',
    array(
    'default' => '',
    'transport' => 'postMessage',
    'sanitize_callback' => 'internet_service_provider_pro_text_sanitization'
  ));
  $wp_customize->add_control( new VW_Themes_Seperator_custom_Control( $wp_customize, 'internet_service_provider_pro_latest_news_settings',
    array(
    'label' => __('Section Background Settings','internet-service-provider-pro'),
    'section' => 'internet_service_provider_pro_latest_news'
  )));
  $wp_customize->add_setting( 'internet_service_provider_pro_latest_news_bgcolor', array(
    'default' => '',
    'sanitize_callback' => 'sanitize_hex_color'
  ));
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'internet_service_provider_pro_latest_news_bgcolor', array(
    'label' => __('Section Background Color', 'internet-service-provider-pro'),
    'description'   => __('Either add background color or background image, if you add both background color will be top most priority','internet-service-provider-pro'),
    'section' => 'internet_service_provider_pro_latest_news',
    'settings' => 'internet_service_provider_pro_latest_news_bgcolor',
  )));
  $wp_customize->add_setting('internet_service_provider_pro_latest_news_bgimage',array(
    'default' => '',
    'sanitize_callback' => 'esc_url_raw',
  ));
  $wp_customize->add_control(
    new WP_Customize_Image_Control( $wp_customize,'internet_service_provider_pro_latest_news_bgimage',array(
    'label' => __('Section Background Image','internet-service-provider-pro'),
    'description' => __('Dimension 1600px * 865px','internet-service-provider-pro'),
    'section' => 'internet_service_provider_pro_latest_news',
    'settings' => 'internet_service_provider_pro_latest_news_bgimage'
  )));
  //Work Column Layout
  $wp_customize->add_setting( 'internet_service_provider_pro_latest_news_bgimage_setting', array(
      'default'         => '',
      'sanitize_callback' => 'internet_service_provider_pro_sanitize_choices'
  ));
  $wp_customize->add_control('internet_service_provider_pro_latest_news_bgimage_setting', array(
      'type'      => 'radio',
      'label'     => __('Choose image option', 'internet-service-provider-pro'),
      'section'   => 'internet_service_provider_pro_latest_news',
      'choices'   => array(
        'bg-fixed'      => __( 'Fixed', 'internet-service-provider-pro' ),
        'bg-scroll'      => __( 'Scroll', 'internet-service-provider-pro' ),                    
  )));

  $wp_customize->add_setting( 'internet_service_provider_pro_latest_news_content_settings',
    array(
    'default' => '',
    'transport' => 'postMessage',
    'sanitize_callback' => 'internet_service_provider_pro_text_sanitization'
  ));
  $wp_customize->add_control( new VW_Themes_Seperator_custom_Control( $wp_customize, 'internet_service_provider_pro_latest_news_content_settings',
    array(
    'label' => __('Section Content Settings','internet-service-provider-pro'),
    'section' => 'internet_service_provider_pro_latest_news'
  )));

  $wp_customize->add_setting('internet_service_provider_pro_latest_news_tagline',array(
    'default' => '',
    'sanitize_callback' => 'sanitize_text_field',
  ));
  $wp_customize->add_control('internet_service_provider_pro_latest_news_tagline',array(
    'label' => __('Section Tagline','internet-service-provider-pro'),
    'section' => 'internet_service_provider_pro_latest_news',
    'setting' => 'internet_service_provider_pro_latest_news_tagline',
    'type'  => 'text'
  ));

  $wp_customize->add_setting('internet_service_provider_pro_latest_news_main_heading',array(
    'default' => '',
    'sanitize_callback' => 'sanitize_text_field',
  ));
  $wp_customize->add_control('internet_service_provider_pro_latest_news_main_heading',array(
    'label' => __('Section Main Heading','internet-service-provider-pro'),
    'section' => 'internet_service_provider_pro_latest_news',
    'setting' => 'internet_service_provider_pro_latest_news_main_heading',
    'type'  => 'text'
  ));

  $categories = get_categories();
  $cats = array();
  $i = 0;
  foreach($categories as $category){
  if($i==0){
    $default = $category->slug;
    $i++;
  }
  $cats[$category->slug] = $category->name;
  }


  $wp_customize->add_setting('internet_service_provider_pro_latest_news_category_setting',array(
  'sanitize_callback' => 'sanitize_text_field',
  ));
  $wp_customize->add_control('internet_service_provider_pro_latest_news_category_setting',array(
      'type'    => 'select',
      'choices' => $cats,
      'label' => __('Select Category','internet-service-provider-pro'),
      'section' => 'internet_service_provider_pro_latest_news',
  ));

  $wp_customize->add_setting('internet_service_provider_pro_latest_news_number',array(
    'default' => '',
    'sanitize_callback' => 'sanitize_text_field'
  ));
  $wp_customize->add_control('internet_service_provider_pro_latest_news_number',array(
    'label' => __('No Of News To Show','internet-service-provider-pro'),
    'section' => 'internet_service_provider_pro_latest_news',
    'setting' => 'internet_service_provider_pro_latest_news_number',
    'type'    => 'number'
  ));

  $wp_customize->add_setting( 'internet_service_provider_pro_latest_news_carousel_loop',
   array(
      'default' => 1,
      'transport' => 'refresh',
      'sanitize_callback' => 'internet_service_provider_pro_switch_sanitization'
  )); 
  $wp_customize->add_control( new internet_service_provider_pro_Toggle_Switch_Custom_control( $wp_customize, 'internet_service_provider_pro_latest_news_carousel_loop',
     array(
        'label' => esc_html__( 'Carousel Loop', 'internet-service-provider-pro' ),
        'section' => 'internet_service_provider_pro_latest_news'
  )));

  $wp_customize->add_setting('internet_service_provider_pro_latest_news_carousel_speed',array(
    'default' => '',
    'sanitize_callback' => 'sanitize_text_field'
  ));
  $wp_customize->add_control('internet_service_provider_pro_latest_news_carousel_speed',array(
    'label' => __('Carousel Speed','internet-service-provider-pro'),
    'description'=>__('Ex. 1000 for One second','internet-service-provider-pro'),
    'section' => 'internet_service_provider_pro_latest_news',
    'setting' => 'internet_service_provider_pro_latest_news_carousel_speed',
    'type'    => 'number'
  ));

  $wp_customize->add_setting('internet_service_provider_pro_latest_news_carousel_dots', array(
      'default' => 0,
      'transport' => 'refresh',
      'sanitize_callback' => 'internet_service_provider_pro_switch_sanitization'
  ));
  $wp_customize->add_control(new internet_service_provider_pro_Toggle_Switch_Custom_control($wp_customize, 'internet_service_provider_pro_latest_news_carousel_dots', array(
      'label' => esc_html__('Carousel Dots', 'internet-service-provider-pro'),
      'section' => 'internet_service_provider_pro_latest_news'
  )));

  $wp_customize->add_setting('internet_service_provider_pro_latest_news_carousel_nav', array(
      'default' => 0,
      'transport' => 'refresh',
      'sanitize_callback' => 'internet_service_provider_pro_switch_sanitization'
  ));
  $wp_customize->add_control(new internet_service_provider_pro_Toggle_Switch_Custom_control($wp_customize, 'internet_service_provider_pro_latest_news_carousel_nav', array(
      'label' => esc_html__('Carousel Nav', 'internet-service-provider-pro'),
      'section' => 'internet_service_provider_pro_latest_news'
  )));

  $wp_customize->add_setting( 'internet_service_provider_pro_latest_news_color_settings',
    array(
    'default' => '',
    'transport' => 'postMessage',
    'sanitize_callback' => 'internet_service_provider_pro_text_sanitization'
  ));
  $wp_customize->add_control( new VW_Themes_Seperator_custom_Control( $wp_customize, 'internet_service_provider_pro_latest_news_color_settings',
  array(
    'label' => __('Section Color & Typography','internet-service-provider-pro'),
    'section' => 'internet_service_provider_pro_latest_news'
  )));

  $wp_customize->add_setting( 'internet_service_provider_pro_latest_news_tagline_ct_pallete',
    array(
      'default' => '',
      'transport' => 'postMessage',
      'sanitize_callback' => 'internet_service_provider_pro_text_sanitization'
  ));
  $wp_customize->add_control( new VW_Themes_Seperator_custom_Control( $wp_customize, 'internet_service_provider_pro_latest_news_tagline_ct_pallete',
    array(
    'label' => __('Tagline Typography ','internet-service-provider-pro'),
    'section' => 'internet_service_provider_pro_latest_news'
  )));

  $wp_customize->add_setting( 'internet_service_provider_pro_latest_news_tagline_color', array(
    'default' => '',
    'sanitize_callback' => 'sanitize_hex_color'
  ));
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'internet_service_provider_pro_latest_news_tagline_color', array(
    'label' => __('Color', 'internet-service-provider-pro'),
    'section' => 'internet_service_provider_pro_latest_news',
    'settings' => 'internet_service_provider_pro_latest_news_tagline_color',
  )));
  $wp_customize->add_setting('internet_service_provider_pro_latest_news_tagline_font_family',array(
    'default' => '',
    'capability' => 'edit_theme_options',
    'sanitize_callback' => 'sanitize_text_field'
  ));
  $wp_customize->add_control(
    'internet_service_provider_pro_latest_news_tagline_font_family', array(
    'section'  => 'internet_service_provider_pro_latest_news',
    'label'    => __('Font Family','internet-service-provider-pro'),
    'type'     => 'select',
    'choices'  => $font_array,
  ));

  $wp_customize->add_setting('internet_service_provider_pro_latest_news_tagline_font_size',array(
    'default' => '',
    'sanitize_callback' => 'sanitize_text_field'
  ));
  $wp_customize->add_control('internet_service_provider_pro_latest_news_tagline_font_size',array(
    'label' => __('Font Size','internet-service-provider-pro'),
    'section' => 'internet_service_provider_pro_latest_news',
    'setting' => 'internet_service_provider_pro_latest_news_tagline_font_size',
    'type'    => 'number'
  ));

  $wp_customize->add_setting( 'internet_service_provider_pro_latest_news_main_heading_ct_pallete',
    array(
      'default' => '',
      'transport' => 'postMessage',
      'sanitize_callback' => 'internet_service_provider_pro_text_sanitization'
  ));
  $wp_customize->add_control( new VW_Themes_Seperator_custom_Control( $wp_customize, 'internet_service_provider_pro_latest_news_main_heading_ct_pallete',
    array(
    'label' => __('Main Heading Typography ','internet-service-provider-pro'),
    'section' => 'internet_service_provider_pro_latest_news'
  )));

  $wp_customize->add_setting( 'internet_service_provider_pro_latest_news_main_heading_color', array(
    'default' => '',
    'sanitize_callback' => 'sanitize_hex_color'
  ));
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'internet_service_provider_pro_latest_news_main_heading_color', array(
    'label' => __('Color', 'internet-service-provider-pro'),
    'section' => 'internet_service_provider_pro_latest_news',
    'settings' => 'internet_service_provider_pro_latest_news_main_heading_color',
  )));
  $wp_customize->add_setting('internet_service_provider_pro_latest_news_main_heading_font_family',array(
    'default' => '',
    'capability' => 'edit_theme_options',
    'sanitize_callback' => 'sanitize_text_field'
  ));
  $wp_customize->add_control(
    'internet_service_provider_pro_latest_news_main_heading_font_family', array(
    'section'  => 'internet_service_provider_pro_latest_news',
    'label'    => __('Font Family','internet-service-provider-pro'),
    'type'     => 'select',
    'choices'  => $font_array,
  ));

  $wp_customize->add_setting('internet_service_provider_pro_latest_news_main_heading_font_size',array(
    'default' => '',
    'sanitize_callback' => 'sanitize_text_field'
  ));
  $wp_customize->add_control('internet_service_provider_pro_latest_news_main_heading_font_size',array(
    'label' => __('Font Size','internet-service-provider-pro'),
    
    'section' => 'internet_service_provider_pro_latest_news',
    'setting' => 'internet_service_provider_pro_latest_news_main_heading_font_size',
    'type'    => 'number'
  ));

  $wp_customize->add_setting( 'internet_service_provider_pro_latest_news_title_ct_pallete',
    array(
      'default' => '',
      'transport' => 'postMessage',
      'sanitize_callback' => 'internet_service_provider_pro_text_sanitization'
  ));
  $wp_customize->add_control( new VW_Themes_Seperator_custom_Control( $wp_customize, 'internet_service_provider_pro_latest_news_title_ct_pallete',
    array(
    'label' => __('News Title Typography ','internet-service-provider-pro'),
    'section' => 'internet_service_provider_pro_latest_news'
  )));

  $wp_customize->add_setting( 'internet_service_provider_pro_latest_news_title_color', array(
    'default' => '',
    'sanitize_callback' => 'sanitize_hex_color'
  ));
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'internet_service_provider_pro_latest_news_title_color', array(
    'label' => __('Color', 'internet-service-provider-pro'),
    'section' => 'internet_service_provider_pro_latest_news',
    'settings' => 'internet_service_provider_pro_latest_news_title_color',
  )));
  $wp_customize->add_setting('internet_service_provider_pro_latest_news_title_font_family',array(
    'default' => '',
    'capability' => 'edit_theme_options',
    'sanitize_callback' => 'sanitize_text_field'
  ));
  $wp_customize->add_control(
    'internet_service_provider_pro_latest_news_title_font_family', array(
    'section'  => 'internet_service_provider_pro_latest_news',
    'label'    => __('Font Family','internet-service-provider-pro'),
    'type'     => 'select',
    'choices'  => $font_array,
  ));

  $wp_customize->add_setting('internet_service_provider_pro_latest_news_title_font_size',array(
    'default' => '',
    'sanitize_callback' => 'sanitize_text_field'
  ));
  $wp_customize->add_control('internet_service_provider_pro_latest_news_title_font_size',array(
    'label' => __('Font Size','internet-service-provider-pro'),
    
    'section' => 'internet_service_provider_pro_latest_news',
    'setting' => 'internet_service_provider_pro_latest_news_title_font_size',
    'type'    => 'number'
  ));

  $wp_customize->add_setting( 'internet_service_provider_pro_latest_news_text_ct_pallete',
    array(
      'default' => '',
      'transport' => 'postMessage',
      'sanitize_callback' => 'internet_service_provider_pro_text_sanitization'
  ));
  $wp_customize->add_control( new VW_Themes_Seperator_custom_Control( $wp_customize, 'internet_service_provider_pro_latest_news_text_ct_pallete',
    array(
    'label' => __('Text Typography ','internet-service-provider-pro'),
    'section' => 'internet_service_provider_pro_latest_news'
  )));

  $wp_customize->add_setting( 'internet_service_provider_pro_latest_news_text_color', array(
    'default' => '',
    'sanitize_callback' => 'sanitize_hex_color'
  ));
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'internet_service_provider_pro_latest_news_text_color', array(
    'label' => __('Color', 'internet-service-provider-pro'),
    'section' => 'internet_service_provider_pro_latest_news',
    'settings' => 'internet_service_provider_pro_latest_news_text_color',
  )));
  $wp_customize->add_setting('internet_service_provider_pro_latest_news_text_font_family',array(
    'default' => '',
    'capability' => 'edit_theme_options',
    'sanitize_callback' => 'sanitize_text_field'
  ));
  $wp_customize->add_control(
    'internet_service_provider_pro_latest_news_text_font_family', array(
    'section'  => 'internet_service_provider_pro_latest_news',
    'label'    => __('Font Family','internet-service-provider-pro'),
    'type'     => 'select',
    'choices'  => $font_array,
  ));

  $wp_customize->add_setting('internet_service_provider_pro_latest_news_text_font_size',array(
    'default' => '',
    'sanitize_callback' => 'sanitize_text_field'
  ));
  $wp_customize->add_control('internet_service_provider_pro_latest_news_text_font_size',array(
    'label' => __('Font Size','internet-service-provider-pro'),
    
    'section' => 'internet_service_provider_pro_latest_news',
    'setting' => 'internet_service_provider_pro_latest_news_text_font_size',
    'type'    => 'number'
  ));

  $wp_customize->add_setting( 'internet_service_provider_pro_latest_news_link_icon_ct_pallete',
    array(
      'default' => '',
      'transport' => 'postMessage',
      'sanitize_callback' => 'internet_service_provider_pro_text_sanitization'
  ));
  $wp_customize->add_control( new VW_Themes_Seperator_custom_Control( $wp_customize, 'internet_service_provider_pro_latest_news_link_icon_ct_pallete',
    array(
    'label' => __('Link Typography ','internet-service-provider-pro'),
    'section' => 'internet_service_provider_pro_latest_news'
  )));

  $wp_customize->add_setting( 'internet_service_provider_pro_latest_news_link_icon_color', array(
    'default' => '',
    'sanitize_callback' => 'sanitize_hex_color'
  ));
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'internet_service_provider_pro_latest_news_link_icon_color', array(
    'label' => __('Color', 'internet-service-provider-pro'),
    'section' => 'internet_service_provider_pro_latest_news',
    'settings' => 'internet_service_provider_pro_latest_news_link_icon_color',
  )));
  $wp_customize->add_setting( 'internet_service_provider_pro_latest_news_link_icon_border_color', array(
    'default' => '',
    'sanitize_callback' => 'sanitize_hex_color'
  ));
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'internet_service_provider_pro_latest_news_link_icon_border_color', array(
    'label' => __('Icon Background Color', 'internet-service-provider-pro'),
    'section' => 'internet_service_provider_pro_latest_news',
    'settings' => 'internet_service_provider_pro_latest_news_link_icon_border_color',
  )));

  $wp_customize->add_setting( 'internet_service_provider_pro_latest_news_link_icon_hover_color', array(
    'default' => '',
    'sanitize_callback' => 'sanitize_hex_color'
  ));
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'internet_service_provider_pro_latest_news_link_icon_hover_color', array(
    'label' => __('Hover Color', 'internet-service-provider-pro'),
    'section' => 'internet_service_provider_pro_latest_news',
    'settings' => 'internet_service_provider_pro_latest_news_link_icon_hover_color',
  )));

  $wp_customize->add_setting( 'internet_service_provider_pro_latest_news_link_icon_hover_bgcolor', array(
    'default' => '',
    'sanitize_callback' => 'sanitize_hex_color'
  ));
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'internet_service_provider_pro_latest_news_link_icon_hover_bgcolor', array(
    'label' => __('Hover Border Color', 'internet-service-provider-pro'),
    'section' => 'internet_service_provider_pro_latest_news',
    'settings' => 'internet_service_provider_pro_latest_news_link_icon_hover_bgcolor',
  )));

  $wp_customize->add_setting( 'internet_service_provider_pro_latest_news_box_bgcolor', array(
    'default' => '',
    'sanitize_callback' => 'sanitize_hex_color'
  ));
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'internet_service_provider_pro_latest_news_box_bgcolor', array(
    'label' => __('Box Background Color', 'internet-service-provider-pro'),
    'section' => 'internet_service_provider_pro_latest_news',
    'settings' => 'internet_service_provider_pro_latest_news_box_bgcolor',
  )));

  $wp_customize->add_setting( 'internet_service_provider_pro_latest_news_box_border_color', array(
    'default' => '',
    'sanitize_callback' => 'sanitize_hex_color'
  ));
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'internet_service_provider_pro_latest_news_box_border_color', array(
    'label' => __('Box Border Color', 'internet-service-provider-pro'),
    'section' => 'internet_service_provider_pro_latest_news',
    'settings' => 'internet_service_provider_pro_latest_news_box_border_color',
  )));

  $wp_customize->add_setting( 'internet_service_provider_pro_latest_news_box_hover_bgcolor', array(
    'default' => '',
    'sanitize_callback' => 'sanitize_hex_color'
  ));
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'internet_service_provider_pro_latest_news_box_hover_bgcolor', array(
    'label' => __('Box Hover Background Color', 'internet-service-provider-pro'),
    'section' => 'internet_service_provider_pro_latest_news',
    'settings' => 'internet_service_provider_pro_latest_news_box_hover_bgcolor',
  )));

  $wp_customize->add_setting( 'internet_service_provider_pro_latest_news_box_nav_icon_ct_pallete',
    array(
      'default' => '',
      'transport' => 'postMessage',
      'sanitize_callback' => 'internet_service_provider_pro_text_sanitization'
    ));
    $wp_customize->add_control( new VW_Themes_Seperator_custom_Control( $wp_customize, 'internet_service_provider_pro_latest_news_box_nav_icon_ct_pallete',
    array(
      'label' => __('Nav Icon Typography ','internet-service-provider-pro'),
      'section' => 'internet_service_provider_pro_latest_news'
    )));

    $wp_customize->add_setting( 'internet_service_provider_pro_latest_news_box_nav_icon_color', array(
      'default' => '',
      'sanitize_callback' => 'sanitize_hex_color'
    ));
    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'internet_service_provider_pro_latest_news_box_nav_icon_color', array(
      'label'    => __( 'Icon Color','internet-service-provider-pro'),
      'section' => 'internet_service_provider_pro_latest_news',
      'settings' => 'internet_service_provider_pro_latest_news_box_nav_icon_color',
    )));

    $wp_customize->add_setting( 'internet_service_provider_pro_latest_news_box_nav_icon_bgcolor', array(
      'default' => '',
      'sanitize_callback' => 'sanitize_hex_color'
    ));
    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'internet_service_provider_pro_latest_news_box_nav_icon_bgcolor', array(
      'label'    => __( 'Icon Background Color','internet-service-provider-pro'),
      'section' => 'internet_service_provider_pro_latest_news',
      'settings' => 'internet_service_provider_pro_latest_news_box_nav_icon_bgcolor',
    )));

    $wp_customize->add_setting( 'internet_service_provider_pro_latest_news_box_nav_icon_hover_color', array(
      'default' => '',
      'sanitize_callback' => 'sanitize_hex_color'
    ));
    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'internet_service_provider_pro_latest_news_box_nav_icon_hover_color', array(
      'label'    => __( 'Icon Hover Color','internet-service-provider-pro'),
      'section' => 'internet_service_provider_pro_latest_news',
      'settings' => 'internet_service_provider_pro_latest_news_box_nav_icon_hover_color',
    )));

    $wp_customize->add_setting( 'internet_service_provider_pro_latest_news_box_nav_icon_hover_bgcolor', array(
      'default' => '',
      'sanitize_callback' => 'sanitize_hex_color'
    ));
    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'internet_service_provider_pro_latest_news_box_nav_icon_hover_bgcolor', array(
      'label'    => __( 'Icon Hover Background Color','internet-service-provider-pro'),
      'section' => 'internet_service_provider_pro_latest_news',
      'settings' => 'internet_service_provider_pro_latest_news_box_nav_icon_hover_bgcolor',
    )));

  $wp_customize->add_setting( 'internet_service_provider_pro_latest_news_dots_ct_pallete',
  array(
    'default' => '',
    'transport' => 'postMessage',
    'sanitize_callback' => 'internet_service_provider_pro_text_sanitization'
  ));
  $wp_customize->add_control( new VW_Themes_Seperator_custom_Control( $wp_customize, 'internet_service_provider_pro_latest_news_dots_ct_pallete',
  array(
    'label' => __('Dots Typography ','internet-service-provider-pro'),
    'section' => 'internet_service_provider_pro_latest_news'
  )));

  $wp_customize->add_setting( 'internet_service_provider_pro_latest_news_dots_color', array(
    'default' => '',
    'sanitize_callback' => 'sanitize_hex_color'
  ));
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'internet_service_provider_pro_latest_news_dots_color', array(
    'label'    => __( 'Dots Color','internet-service-provider-pro'),
    'section' => 'internet_service_provider_pro_latest_news',
    'settings' => 'internet_service_provider_pro_latest_news_dots_color',
  )));

  $wp_customize->add_setting( 'internet_service_provider_pro_latest_news_active_dots_color', array(
    'default' => '',
    'sanitize_callback' => 'sanitize_hex_color'
  ));
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'internet_service_provider_pro_latest_news_active_dots_color', array(
    'label'    => __( 'Active Dots Color','internet-service-provider-pro'),
    'section' => 'internet_service_provider_pro_latest_news',
    'settings' => 'internet_service_provider_pro_latest_news_active_dots_color',
  )));

  $wp_customize->add_setting('internet_service_provider_pro_latest_news_spacing_left_desktop', array(
      'sanitize_callback' => 'internet_service_provider_pro_sanitize_number_blank',
  ));

  $wp_customize->add_setting('internet_service_provider_pro_latest_news_spacing_top_desktop', array(
      'sanitize_callback' => 'internet_service_provider_pro_sanitize_number_blank',
  ));

  $wp_customize->add_setting('internet_service_provider_pro_latest_news_spacing_bottom_desktop', array(
      'sanitize_callback' => 'internet_service_provider_pro_sanitize_number_blank',
  ));

  $wp_customize->add_setting('internet_service_provider_pro_latest_news_spacing_right_desktop', array(
      'sanitize_callback' => 'internet_service_provider_pro_sanitize_number_blank',
  ));

  $wp_customize->add_control(new VW_Dimensions_Control($wp_customize, 'internet_service_provider_pro_latest_news_spacing', array(
    'section' => 'internet_service_provider_pro_latest_news',
    'label' => esc_html__('Section Spacing(px)', 'internet-service-provider-pro'),
    'settings' => array(
        'desktop_left' => 'internet_service_provider_pro_latest_news_spacing_left_desktop',
        'desktop_top' => 'internet_service_provider_pro_latest_news_spacing_top_desktop',
        'desktop_bottom' => 'internet_service_provider_pro_latest_news_spacing_bottom_desktop',
        'desktop_right' => 'internet_service_provider_pro_latest_news_spacing_right_desktop'
    ),
    'input_attrs' => array(
        'min' => 0,
        'max' => 100,
        'step' => 1,
    ),
    'responsive' => false
  )));

  // ------------- Sustainability Commitment -------------
  $wp_customize->add_section('internet_service_provider_pro_sustainability_commitment',array(
    'title' => __('Sustainability Commitment','internet-service-provider-pro'),
    'panel' => 'internet_service_provider_pro_panel_id',
  ));
  $wp_customize->add_setting('internet_service_provider_pro_sustainability_commitment_enable',
      array(
    'default' => 'Enable',
    'sanitize_callback' => 'internet_service_provider_pro_sanitize_choices'
  ));
  $wp_customize->add_control('internet_service_provider_pro_sustainability_commitment_enable',
    array(
    'type' => 'radio',
    'label' => __('Do you want this section', 'internet-service-provider-pro'),
    'section' => 'internet_service_provider_pro_sustainability_commitment',
    'choices' => array(
    'Enable' => __('Enable', 'internet-service-provider-pro'),
    'Disable' => __('Disable', 'internet-service-provider-pro')
  )));
  $wp_customize->selective_refresh->add_partial( 'internet_service_provider_pro_sustainability_commitment_enable', array(
    'selector' => '#about-us h3',
    'render_callback' => 'internet_service_provider_pro_customize_partial_internet_service_provider_pro_sustainability_commitment_enable',
  ));
  $wp_customize->add_setting( 'internet_service_provider_pro_sustainability_commitment_settings',
    array(
    'default' => '',
    'transport' => 'postMessage',
    'sanitize_callback' => 'internet_service_provider_pro_text_sanitization'
  ));
  $wp_customize->add_control( new VW_Themes_Seperator_custom_Control( $wp_customize, 'internet_service_provider_pro_sustainability_commitment_settings',
    array(
    'label' => __('Section Background Settings','internet-service-provider-pro'),
    'section' => 'internet_service_provider_pro_sustainability_commitment'
  )));
  $wp_customize->add_setting( 'internet_service_provider_pro_sustainability_commitment_bgcolor', array(
    'default' => '',
    'sanitize_callback' => 'sanitize_hex_color'
  ));
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'internet_service_provider_pro_sustainability_commitment_bgcolor', array(
    'label' => __('Section Background Color', 'internet-service-provider-pro'),
    'description'   => __('Either add background color or background image, if you add both background color will be top most priority','internet-service-provider-pro'),
    'section' => 'internet_service_provider_pro_sustainability_commitment',
    'settings' => 'internet_service_provider_pro_sustainability_commitment_bgcolor',
  )));
  $wp_customize->add_setting('internet_service_provider_pro_sustainability_commitment_bgimage',array(
    'default' => '',
    'sanitize_callback' => 'esc_url_raw',
  ));
  $wp_customize->add_control(
    new WP_Customize_Image_Control( $wp_customize,'internet_service_provider_pro_sustainability_commitment_bgimage',array(
    'label' => __('Section Background Image','internet-service-provider-pro'),
    'description' => __('Dimension 1600px * 430px','internet-service-provider-pro'),
    'section' => 'internet_service_provider_pro_sustainability_commitment',
    'settings' => 'internet_service_provider_pro_sustainability_commitment_bgimage'
  )));

  $wp_customize->add_setting( 'internet_service_provider_pro_sustainability_commitment_bgimage_setting', array(
      'default'         => '',
      'sanitize_callback' => 'internet_service_provider_pro_sanitize_choices'
  ));
  $wp_customize->add_control('internet_service_provider_pro_sustainability_commitment_bgimage_setting', array(
      'type'      => 'radio',
      'label'     => __('Choose image option', 'internet-service-provider-pro'),
      'section'   => 'internet_service_provider_pro_sustainability_commitment',
      'choices'   => array(
        'bg-fixed'      => __( 'Fixed', 'internet-service-provider-pro' ),
        'bg-scroll'      => __( 'Scroll', 'internet-service-provider-pro' ),                    
  )));

  $wp_customize->add_setting('internet_service_provider_pro_sustainability_commitment_bgimage_size', array(
      'default' => '',
      'sanitize_callback' => 'internet_service_provider_pro_sanitize_choices'
  ));
  $wp_customize->add_control('internet_service_provider_pro_sustainability_commitment_bgimage_size', array(
      'type' => 'radio',
      'label' => __('Background Image Size', 'internet-service-provider-pro'),
      'section' => 'internet_service_provider_pro_sustainability_commitment',
      'choices' => array(
          'bg-auto' => __('Auto', 'internet-service-provider-pro'),
          'bg-cover' => __('Cover', 'internet-service-provider-pro'),
          'bg-contain' => __('Contain', 'internet-service-provider-pro'),
          'bg-xy' => __('Cover X & Y', 'internet-service-provider-pro'),
          'bg-x' => __('Cover X', 'internet-service-provider-pro'),
      )
  ));

  $wp_customize->add_setting( 'internet_service_provider_pro_sustainability_commitment_content_settings',
    array(
    'default' => '',
    'transport' => 'postMessage',
    'sanitize_callback' => 'internet_service_provider_pro_text_sanitization'
  ));
  $wp_customize->add_control( new VW_Themes_Seperator_custom_Control( $wp_customize, 'internet_service_provider_pro_sustainability_commitment_content_settings',
    array(
    'label' => __('Section Content Settings','internet-service-provider-pro'),
    'section' => 'internet_service_provider_pro_sustainability_commitment'
  )));

  $wp_customize->add_setting('internet_service_provider_pro_sustainability_commitment_tagline',array(
    'default' => '',
    'sanitize_callback' => 'sanitize_text_field'
  ));
  $wp_customize->add_control('internet_service_provider_pro_sustainability_commitment_tagline',array(
    'label' => __('Section Tagline','internet-service-provider-pro'),
    'section' => 'internet_service_provider_pro_sustainability_commitment',
    'setting' => 'internet_service_provider_pro_sustainability_commitment_tagline',
    'type'    => 'text'
  ));

  $wp_customize->add_setting('internet_service_provider_pro_sustainability_commitment_main_heading',array(
    'default' => '',
    'sanitize_callback' => 'sanitize_text_field'
  ));
  $wp_customize->add_control('internet_service_provider_pro_sustainability_commitment_main_heading',array(
    'label' => __('Section Main Heading','internet-service-provider-pro'),
    'section' => 'internet_service_provider_pro_sustainability_commitment',
    'setting' => 'internet_service_provider_pro_sustainability_commitment_main_heading',
    'type'    => 'text'
  ));


  $wp_customize->add_setting( 'internet_service_provider_pro_sustainability_commitment_icon_box',
    array(
    'default' => '',
    'transport' => 'postMessage',
    'sanitize_callback' => 'internet_service_provider_pro_text_sanitization'
  ));
  $wp_customize->add_control( new VW_Themes_Seperator_custom_Control( $wp_customize, 'internet_service_provider_pro_sustainability_commitment_icon_box',
    array(
    'label' => __('Image Box','internet-service-provider-pro'),
    'section' => 'internet_service_provider_pro_sustainability_commitment'
  )));

  $wp_customize->add_setting('internet_service_provider_pro_sustainability_commitment_icon_box_number',array(
    'default' => '',
    'sanitize_callback' => 'sanitize_text_field'
  ));
  $wp_customize->add_control('internet_service_provider_pro_sustainability_commitment_icon_box_number',array(
    'label' => __('Number of Boxes to show','internet-service-provider-pro'),
    'section' => 'internet_service_provider_pro_sustainability_commitment',
    'setting' => 'internet_service_provider_pro_sustainability_commitment_icon_box_number',
    'type'    => 'text'
  ));

  $sustainability_commitment_icon_box = get_theme_mod('internet_service_provider_pro_sustainability_commitment_icon_box_number');

  for($i=1;$i<=$sustainability_commitment_icon_box;$i++)
  {
    $wp_customize->add_setting( 'internet_service_provider_pro_sustainability_commitment_icon_box_settings'.$i,
    array(
      'default' => '',
      'transport' => 'postMessage',
      'sanitize_callback' => 'internet_service_provider_pro_text_sanitization'
    ));
    $wp_customize->add_control( new VW_Themes_Seperator_custom_Control( $wp_customize, 'internet_service_provider_pro_sustainability_commitment_icon_box_settings'.$i,
      array(
      'label' => __('Box ','internet-service-provider-pro').$i,
      'section' => 'internet_service_provider_pro_sustainability_commitment'
    )));

    $wp_customize->add_setting('internet_service_provider_pro_sustainability_commitment_icon_box_image'.$i,array(
      'default' => '',
      'sanitize_callback' => 'esc_url_raw',
    ));
    $wp_customize->add_control(
      new WP_Customize_Image_Control( $wp_customize,'internet_service_provider_pro_sustainability_commitment_icon_box_image'.$i,array(
      'label' => __('Image','internet-service-provider-pro'),
      'section' => 'internet_service_provider_pro_sustainability_commitment',
      'settings' => 'internet_service_provider_pro_sustainability_commitment_icon_box_image'.$i
    )));

	  $wp_customize->add_setting('internet_service_provider_pro_sustainability_commitment_icon_box_title'.$i,array(
      'default' => '',
      'sanitize_callback' => 'sanitize_text_field'
    ));
    $wp_customize->add_control('internet_service_provider_pro_sustainability_commitment_icon_box_title'.$i,array(
      'label' => __('Title ','internet-service-provider-pro'),
      'section' => 'internet_service_provider_pro_sustainability_commitment',
      'setting' => 'internet_service_provider_pro_sustainability_commitment_icon_box_title'.$i,
      'type'    => 'text'
    ));

    $wp_customize->add_setting('internet_service_provider_pro_sustainability_commitment_icon_box_percentage'.$i,array(
      'default' => '',
      'sanitize_callback' => 'sanitize_text_field'
    ));
    $wp_customize->add_control('internet_service_provider_pro_sustainability_commitment_icon_box_percentage'.$i,array(
      'label' => __('Percentage ','internet-service-provider-pro'),
      'section' => 'internet_service_provider_pro_sustainability_commitment',
      'setting' => 'internet_service_provider_pro_sustainability_commitment_icon_box_percentage'.$i,
      'type'    => 'text'
    ));
    
    $wp_customize->add_setting('internet_service_provider_pro_sustainability_commitment_icon_box_text'.$i,array(
      'default' => '',
      'sanitize_callback' => 'sanitize_text_field'
    ));
    $wp_customize->add_control('internet_service_provider_pro_sustainability_commitment_icon_box_text'.$i,array(
      'label' => __('Title ','internet-service-provider-pro'),
      'section' => 'internet_service_provider_pro_sustainability_commitment',
      'setting' => 'internet_service_provider_pro_sustainability_commitment_icon_box_text'.$i,
      'type'    => 'text'
    ));

    $wp_customize->add_setting('internet_service_provider_pro_sustainability_commitment_icon_box_link_icon_url'.$i,array(
      'default' => '',
      'sanitize_callback' => 'esc_url_raw'
    ));
    $wp_customize->add_control('internet_service_provider_pro_sustainability_commitment_icon_box_link_icon_url'.$i,array(
      'label' => __('Url ','internet-service-provider-pro'),
      'section' => 'internet_service_provider_pro_sustainability_commitment',
      'setting' => 'internet_service_provider_pro_sustainability_commitment_icon_box_link_icon_url'.$i,
      'type'    => 'url'
    ));
  }

   $wp_customize->add_setting('internet_service_provider_pro_sustainability_commitment_column_image',array(
      'default' => '',
      'sanitize_callback' => 'esc_url_raw',
    ));
    $wp_customize->add_control(
      new WP_Customize_Image_Control( $wp_customize,'internet_service_provider_pro_sustainability_commitment_column_image',array(
      'label' => __('Column Image','internet-service-provider-pro'),
      'section' => 'internet_service_provider_pro_sustainability_commitment',
      'settings' => 'internet_service_provider_pro_sustainability_commitment_column_image'
    )));

  $wp_customize->add_setting( 'internet_service_provider_pro_sustainability_commitment_color_settings',
    array(
    'default' => '',
    'transport' => 'postMessage',
    'sanitize_callback' => 'internet_service_provider_pro_text_sanitization'
  ));
  $wp_customize->add_control( new VW_Themes_Seperator_custom_Control( $wp_customize, 'internet_service_provider_pro_sustainability_commitment_color_settings',
  array(
    'label' => __('Section Color & Typography','internet-service-provider-pro'),
    'section' => 'internet_service_provider_pro_sustainability_commitment'
  )));

  $wp_customize->add_setting( 'internet_service_provider_pro_sustainability_commitment_tagline_ct_pallete',
    array(
      'default' => '',
      'transport' => 'postMessage',
      'sanitize_callback' => 'internet_service_provider_pro_text_sanitization'
  ));
  $wp_customize->add_control( new VW_Themes_Seperator_custom_Control( $wp_customize, 'internet_service_provider_pro_sustainability_commitment_tagline_ct_pallete',
    array(
    'label' => __('Tagline Typography ','internet-service-provider-pro'),
    'section' => 'internet_service_provider_pro_sustainability_commitment'
  )));

  $wp_customize->add_setting( 'internet_service_provider_pro_sustainability_commitment_tagline_color', array(
    'default' => '',
    'sanitize_callback' => 'sanitize_hex_color'
  ));
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'internet_service_provider_pro_sustainability_commitment_tagline_color', array(
    'label' => __('Color', 'internet-service-provider-pro'),
    'section' => 'internet_service_provider_pro_sustainability_commitment',
    'settings' => 'internet_service_provider_pro_sustainability_commitment_tagline_color',
  )));

  $wp_customize->add_setting('internet_service_provider_pro_sustainability_commitment_tagline_font_family',array(
    'default' => '',
    'capability' => 'edit_theme_options',
    'sanitize_callback' => 'sanitize_text_field'
  ));
  $wp_customize->add_control(
    'internet_service_provider_pro_sustainability_commitment_tagline_font_family', array(
    'section'  => 'internet_service_provider_pro_sustainability_commitment',
    'label'    => __('Font Family','internet-service-provider-pro'),
    'type'     => 'select',
    'choices'  => $font_array,
  ));

  $wp_customize->add_setting('internet_service_provider_pro_sustainability_commitment_tagline_font_size',array(
    'default' => '',
    'sanitize_callback' => 'sanitize_text_field'
  ));
  $wp_customize->add_control('internet_service_provider_pro_sustainability_commitment_tagline_font_size',array(
    'label' => __('Font Size','internet-service-provider-pro'),
    
    'section' => 'internet_service_provider_pro_sustainability_commitment',
    'setting' => 'internet_service_provider_pro_sustainability_commitment_tagline_font_size',
    'type'    => 'number'
  ));

  $wp_customize->add_setting( 'internet_service_provider_pro_sustainability_commitment_main_heading_ct_pallete',
    array(
      'default' => '',
      'transport' => 'postMessage',
      'sanitize_callback' => 'internet_service_provider_pro_text_sanitization'
  ));
  $wp_customize->add_control( new VW_Themes_Seperator_custom_Control( $wp_customize, 'internet_service_provider_pro_sustainability_commitment_main_heading_ct_pallete',
    array(
    'label' => __('Main Heading Typography ','internet-service-provider-pro'),
    'section' => 'internet_service_provider_pro_sustainability_commitment'
  )));

  $wp_customize->add_setting( 'internet_service_provider_pro_sustainability_commitment_main_heading_color', array(
    'default' => '',
    'sanitize_callback' => 'sanitize_hex_color'
  ));
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'internet_service_provider_pro_sustainability_commitment_main_heading_color', array(
    'label' => __('Color', 'internet-service-provider-pro'),
    'section' => 'internet_service_provider_pro_sustainability_commitment',
    'settings' => 'internet_service_provider_pro_sustainability_commitment_main_heading_color',
  )));

  $wp_customize->add_setting('internet_service_provider_pro_sustainability_commitment_main_heading_font_family',array(
    'default' => '',
    'capability' => 'edit_theme_options',
    'sanitize_callback' => 'sanitize_text_field'
  ));
  $wp_customize->add_control(
    'internet_service_provider_pro_sustainability_commitment_main_heading_font_family', array(
    'section'  => 'internet_service_provider_pro_sustainability_commitment',
    'label'    => __('Font Family','internet-service-provider-pro'),
    'type'     => 'select',
    'choices'  => $font_array,
  ));

  $wp_customize->add_setting('internet_service_provider_pro_sustainability_commitment_main_heading_font_size',array(
    'default' => '',
    'sanitize_callback' => 'sanitize_text_field'
  ));
  $wp_customize->add_control('internet_service_provider_pro_sustainability_commitment_main_heading_font_size',array(
    'label' => __('Font Size','internet-service-provider-pro'),
    
    'section' => 'internet_service_provider_pro_sustainability_commitment',
    'setting' => 'internet_service_provider_pro_sustainability_commitment_main_heading_font_size',
    'type'    => 'number'
  ));

  $wp_customize->add_setting( 'internet_service_provider_pro_sustainability_commitment_box_title_ct_pallete',
    array(
      'default' => '',
      'transport' => 'postMessage',
      'sanitize_callback' => 'internet_service_provider_pro_text_sanitization'
  ));
  $wp_customize->add_control( new VW_Themes_Seperator_custom_Control( $wp_customize, 'internet_service_provider_pro_sustainability_commitment_box_title_ct_pallete',
    array(
    'label' => __('Box Title Typography ','internet-service-provider-pro'),
    'section' => 'internet_service_provider_pro_sustainability_commitment'
  )));

  $wp_customize->add_setting( 'internet_service_provider_pro_sustainability_commitment_box_title_color', array(
    'default' => '',
    'sanitize_callback' => 'sanitize_hex_color'
  ));
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'internet_service_provider_pro_sustainability_commitment_box_title_color', array(
    'label' => __('Color', 'internet-service-provider-pro'),
    'section' => 'internet_service_provider_pro_sustainability_commitment',
    'settings' => 'internet_service_provider_pro_sustainability_commitment_box_title_color',
  )));
  $wp_customize->add_setting('internet_service_provider_pro_sustainability_commitment_box_title_font_family',array(
    'default' => '',
    'capability' => 'edit_theme_options',
    'sanitize_callback' => 'sanitize_text_field'
  ));
  $wp_customize->add_control(
    'internet_service_provider_pro_sustainability_commitment_box_title_font_family', array(
    'section'  => 'internet_service_provider_pro_sustainability_commitment',
    'label'    => __('Font Family','internet-service-provider-pro'),
    'type'     => 'select',
    'choices'  => $font_array,
  ));

  $wp_customize->add_setting('internet_service_provider_pro_sustainability_commitment_box_title_font_size',array(
    'default' => '',
    'sanitize_callback' => 'sanitize_text_field'
  ));
  $wp_customize->add_control('internet_service_provider_pro_sustainability_commitment_box_title_font_size',array(
    'label' => __('Font Size','internet-service-provider-pro'),
    
    'section' => 'internet_service_provider_pro_sustainability_commitment',
    'setting' => 'internet_service_provider_pro_sustainability_commitment_box_title_font_size',
    'type'    => 'number'
  ));

  $wp_customize->add_setting( 'internet_service_provider_pro_sustainability_commitment_box_text_ct_pallete',
    array(
      'default' => '',
      'transport' => 'postMessage',
      'sanitize_callback' => 'internet_service_provider_pro_text_sanitization'
  ));
  $wp_customize->add_control( new VW_Themes_Seperator_custom_Control( $wp_customize, 'internet_service_provider_pro_sustainability_commitment_box_text_ct_pallete',
    array(
    'label' => __('Box Text Typography ','internet-service-provider-pro'),
    'section' => 'internet_service_provider_pro_sustainability_commitment'
  )));

  $wp_customize->add_setting( 'internet_service_provider_pro_sustainability_commitment_box_text_color', array(
    'default' => '',
    'sanitize_callback' => 'sanitize_hex_color'
  ));
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'internet_service_provider_pro_sustainability_commitment_box_text_color', array(
    'label' => __(' Color', 'internet-service-provider-pro'),
    'section' => 'internet_service_provider_pro_sustainability_commitment',
    'settings' => 'internet_service_provider_pro_sustainability_commitment_box_text_color',
  )));
  $wp_customize->add_setting('internet_service_provider_pro_sustainability_commitment_box_text_font_family',array(
    'default' => '',
    'capability' => 'edit_theme_options',
    'sanitize_callback' => 'sanitize_text_field'
  ));
  $wp_customize->add_control(
    'internet_service_provider_pro_sustainability_commitment_box_text_font_family', array(
    'section'  => 'internet_service_provider_pro_sustainability_commitment',
    'label'    => __('Font Family','internet-service-provider-pro'),
    'type'     => 'select',
    'choices'  => $font_array,
  ));

  $wp_customize->add_setting('internet_service_provider_pro_sustainability_commitment_box_text_font_size',array(
    'default' => '',
    'sanitize_callback' => 'sanitize_text_field'
  ));
  $wp_customize->add_control('internet_service_provider_pro_sustainability_commitment_box_text_font_size',array(
    'label' => __('Font Size','internet-service-provider-pro'),
    'section' => 'internet_service_provider_pro_sustainability_commitment',
    'setting' => 'internet_service_provider_pro_sustainability_commitment_box_text_font_size',
    'type'    => 'number'
  ));

  $wp_customize->add_setting( 'internet_service_provider_pro_sustainability_commitment_box_percentage_ct_pallete',
    array(
      'default' => '',
      'transport' => 'postMessage',
      'sanitize_callback' => 'internet_service_provider_pro_text_sanitization'
  ));
  $wp_customize->add_control( new VW_Themes_Seperator_custom_Control( $wp_customize, 'internet_service_provider_pro_sustainability_commitment_box_percentage_ct_pallete',
    array(
    'label' => __('Box Percentage Typography ','internet-service-provider-pro'),
    'section' => 'internet_service_provider_pro_sustainability_commitment'
  )));

  $wp_customize->add_setting( 'internet_service_provider_pro_sustainability_commitment_box_percentage_color', array(
    'default' => '',
    'sanitize_callback' => 'sanitize_hex_color'
  ));
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'internet_service_provider_pro_sustainability_commitment_box_percentage_color', array(
    'label' => __(' Color', 'internet-service-provider-pro'),
    'section' => 'internet_service_provider_pro_sustainability_commitment',
    'settings' => 'internet_service_provider_pro_sustainability_commitment_box_percentage_color',
  )));
  $wp_customize->add_setting('internet_service_provider_pro_sustainability_commitment_box_percentage_font_family',array(
    'default' => '',
    'capability' => 'edit_theme_options',
    'sanitize_callback' => 'sanitize_text_field'
  ));
  $wp_customize->add_control(
    'internet_service_provider_pro_sustainability_commitment_box_percentage_font_family', array(
    'section'  => 'internet_service_provider_pro_sustainability_commitment',
    'label'    => __('Font Family','internet-service-provider-pro'),
    'type'     => 'select',
    'choices'  => $font_array,
  ));

  $wp_customize->add_setting('internet_service_provider_pro_sustainability_commitment_box_percentage_font_size',array(
    'default' => '',
    'sanitize_callback' => 'sanitize_text_field'
  ));
  $wp_customize->add_control('internet_service_provider_pro_sustainability_commitment_box_percentage_font_size',array(
    'label' => __('Font Size','internet-service-provider-pro'),
    'section' => 'internet_service_provider_pro_sustainability_commitment',
    'setting' => 'internet_service_provider_pro_sustainability_commitment_box_percentage_font_size',
    'type'    => 'number'
  ));


  $wp_customize->add_setting( 'internet_service_provider_pro_sustainability_commitment_box_bgcolor', array(
    'default' => '',
    'sanitize_callback' => 'sanitize_hex_color'
  ));
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'internet_service_provider_pro_sustainability_commitment_box_bgcolor', array(
    'label' => __('Box Background Color', 'internet-service-provider-pro'),
    'section' => 'internet_service_provider_pro_sustainability_commitment',
    'settings' => 'internet_service_provider_pro_sustainability_commitment_box_bgcolor',
  )));

  $wp_customize->add_setting( 'internet_service_provider_pro_sustainability_commitment_box_hover_bgcolor', array(
    'default' => '',
    'sanitize_callback' => 'sanitize_hex_color'
  ));
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'internet_service_provider_pro_sustainability_commitment_box_hover_bgcolor', array(
    'label' => __('Box Hover Background Color', 'internet-service-provider-pro'),
    'section' => 'internet_service_provider_pro_sustainability_commitment',
    'settings' => 'internet_service_provider_pro_sustainability_commitment_box_hover_bgcolor',
  )));

  $wp_customize->add_setting( 'internet_service_provider_pro_sustainability_commitment_box_image_bgcolor', array(
    'default' => '',
    'sanitize_callback' => 'sanitize_hex_color'
  ));
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'internet_service_provider_pro_sustainability_commitment_box_image_bgcolor', array(
    'label' => __('Box Image Background Color', 'internet-service-provider-pro'),
    'section' => 'internet_service_provider_pro_sustainability_commitment',
    'settings' => 'internet_service_provider_pro_sustainability_commitment_box_image_bgcolor',
  )));

  $wp_customize->add_setting( 'internet_service_provider_pro_sustainability_commitment_box_hover_image_bgcolor', array(
    'default' => '',
    'sanitize_callback' => 'sanitize_hex_color'
  ));
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'internet_service_provider_pro_sustainability_commitment_box_hover_image_bgcolor', array(
    'label' => __('Box Hover Image Background Color', 'internet-service-provider-pro'),
    'section' => 'internet_service_provider_pro_sustainability_commitment',
    'settings' => 'internet_service_provider_pro_sustainability_commitment_box_hover_image_bgcolor',
  )));

  $wp_customize->add_setting('internet_service_provider_pro_sustainability_commitment_spacing_left_desktop', array(
    'sanitize_callback' => 'internet_service_provider_pro_sanitize_number_blank',
  ));

  $wp_customize->add_setting('internet_service_provider_pro_sustainability_commitment_spacing_top_desktop', array(
    'sanitize_callback' => 'internet_service_provider_pro_sanitize_number_blank',
  ));

  $wp_customize->add_setting('internet_service_provider_pro_sustainability_commitment_spacing_bottom_desktop', array(
    'sanitize_callback' => 'internet_service_provider_pro_sanitize_number_blank',
  ));

  $wp_customize->add_setting('internet_service_provider_pro_sustainability_commitment_spacing_right_desktop', array(
    'sanitize_callback' => 'internet_service_provider_pro_sanitize_number_blank',
  ));

  $wp_customize->add_control(new VW_Dimensions_Control($wp_customize, 'internet_service_provider_pro_sustainability_commitment_spacing', array(
    'section' => 'internet_service_provider_pro_sustainability_commitment',
    'label' => esc_html__('Section Spacing(px)', 'internet-service-provider-pro'),
    'settings' => array(
        'desktop_left' => 'internet_service_provider_pro_sustainability_commitment_spacing_left_desktop',
        'desktop_top' => 'internet_service_provider_pro_sustainability_commitment_spacing_top_desktop',
        'desktop_bottom' => 'internet_service_provider_pro_sustainability_commitment_spacing_bottom_desktop',
      'desktop_right' => 'internet_service_provider_pro_sustainability_commitment_spacing_right_desktop'
  ),
    'input_attrs' => array(
        'min' => 0,
        'max' => 100,
        'step' => 1,
    ),
    'responsive' => false
  )));

  // ------------- Promotional Banner -------------
  $wp_customize->add_section('internet_service_provider_pro_pormotional_banner',array(
    'title' => __('Promotional Banner','internet-service-provider-pro'),
    'panel' => 'internet_service_provider_pro_panel_id',
  ));
  $wp_customize->add_setting('internet_service_provider_pro_pormotional_banner_enable',
      array(
    'default' => 'Enable',
    'sanitize_callback' => 'internet_service_provider_pro_sanitize_choices'
  ));
  $wp_customize->add_control('internet_service_provider_pro_pormotional_banner_enable',
    array(
    'type' => 'radio',
    'label' => __('Do you want this section', 'internet-service-provider-pro'),
    'section' => 'internet_service_provider_pro_pormotional_banner',
    'choices' => array(
    'Enable' => __('Enable', 'internet-service-provider-pro'),
    'Disable' => __('Disable', 'internet-service-provider-pro')
  )));
  $wp_customize->selective_refresh->add_partial( 'internet_service_provider_pro_pormotional_banner_enable', array(
    'selector' => '#about-us h3',
    'render_callback' => 'internet_service_provider_pro_customize_partial_internet_service_provider_pro_pormotional_banner_enable',
  ));
  $wp_customize->add_setting( 'internet_service_provider_pro_pormotional_banner_settings',
    array(
    'default' => '',
    'transport' => 'postMessage',
    'sanitize_callback' => 'internet_service_provider_pro_text_sanitization'
  ));
  $wp_customize->add_control( new VW_Themes_Seperator_custom_Control( $wp_customize, 'internet_service_provider_pro_pormotional_banner_settings',
    array(
    'label' => __('Section Background Settings','internet-service-provider-pro'),
    'section' => 'internet_service_provider_pro_pormotional_banner'
  )));
  $wp_customize->add_setting( 'internet_service_provider_pro_pormotional_banner_bgcolor', array(
    'default' => '',
    'sanitize_callback' => 'sanitize_hex_color'
  ));
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'internet_service_provider_pro_pormotional_banner_bgcolor', array(
    'label' => __('Section Background Color', 'internet-service-provider-pro'),
    'description'   => __('Either add background color or background image, if you add both background color will be top most priority','internet-service-provider-pro'),
    'section' => 'internet_service_provider_pro_pormotional_banner',
    'settings' => 'internet_service_provider_pro_pormotional_banner_bgcolor',
  )));
  $wp_customize->add_setting('internet_service_provider_pro_pormotional_banner_bgimage',array(
    'default' => '',
    'sanitize_callback' => 'esc_url_raw',
  ));
  $wp_customize->add_control(
    new WP_Customize_Image_Control( $wp_customize,'internet_service_provider_pro_pormotional_banner_bgimage',array(
    'label' => __('Section Background Image','internet-service-provider-pro'),
    'description' => __('Dimension 1600px * 430px','internet-service-provider-pro'),
    'section' => 'internet_service_provider_pro_pormotional_banner',
    'settings' => 'internet_service_provider_pro_pormotional_banner_bgimage'
  )));

  $wp_customize->add_setting( 'internet_service_provider_pro_pormotional_banner_bgimage_setting', array(
      'default'         => '',
      'sanitize_callback' => 'internet_service_provider_pro_sanitize_choices'
  ));
  $wp_customize->add_control('internet_service_provider_pro_pormotional_banner_bgimage_setting', array(
      'type'      => 'radio',
      'label'     => __('Choose image option', 'internet-service-provider-pro'),
      'section'   => 'internet_service_provider_pro_pormotional_banner',
      'choices'   => array(
        'bg-fixed'      => __( 'Fixed', 'internet-service-provider-pro' ),
        'bg-scroll'      => __( 'Scroll', 'internet-service-provider-pro' ),                    
  )));


  $wp_customize->add_setting( 'internet_service_provider_pro_pormotional_banner_content_settings',
    array(
    'default' => '',
    'transport' => 'postMessage',
    'sanitize_callback' => 'internet_service_provider_pro_text_sanitization'
  ));
  $wp_customize->add_control( new VW_Themes_Seperator_custom_Control( $wp_customize, 'internet_service_provider_pro_pormotional_banner_content_settings',
    array(
    'label' => __('Section Content Settings','internet-service-provider-pro'),
    'section' => 'internet_service_provider_pro_pormotional_banner'
  )));

  $wp_customize->add_setting('internet_service_provider_pro_pormotional_banner_tagline',array(
    'default' => '',
    'sanitize_callback' => 'sanitize_text_field'
  ));
  $wp_customize->add_control('internet_service_provider_pro_pormotional_banner_tagline',array(
    'label' => __('Section Tagline','internet-service-provider-pro'),
    'section' => 'internet_service_provider_pro_pormotional_banner',
    'setting' => 'internet_service_provider_pro_pormotional_banner_tagline',
    'type'    => 'text'
  ));

  $wp_customize->add_setting('internet_service_provider_pro_pormotional_banner_main_heading',array(
    'default' => '',
    'sanitize_callback' => 'sanitize_text_field'
  ));
  $wp_customize->add_control('internet_service_provider_pro_pormotional_banner_main_heading',array(
    'label' => __('Section Main Heading','internet-service-provider-pro'),
    'section' => 'internet_service_provider_pro_pormotional_banner',
    'setting' => 'internet_service_provider_pro_pormotional_banner_main_heading',
    'type'    => 'text'
  ));

	$wp_customize->add_setting( 'internet_service_provider_pro_pormotional_banner_section_button',
    array(
    'default' => '',
    'transport' => 'postMessage',
    'sanitize_callback' => 'internet_service_provider_pro_text_sanitization'
  ));
  $wp_customize->add_control( new VW_Themes_Seperator_custom_Control( $wp_customize, 'internet_service_provider_pro_pormotional_banner_section_button',
    array(
    'label' => __('Section Button','internet-service-provider-pro'),
    'section' => 'internet_service_provider_pro_pormotional_banner'
  )));

  $wp_customize->add_setting('internet_service_provider_pro_pormotional_banner_section_button_title',array(
    'default' => '',
    'sanitize_callback' => 'sanitize_text_field'
  ));
  $wp_customize->add_control('internet_service_provider_pro_pormotional_banner_section_button_title',array(
    'label' => __('Section Button Title','internet-service-provider-pro'),
    'section' => 'internet_service_provider_pro_pormotional_banner',
    'setting' => 'internet_service_provider_pro_pormotional_banner_section_button_title',
    'type'    => 'text'
  ));
	
	$wp_customize->add_setting(
		'internet_service_provider_pro_pormotional_banner_section_button_icon',
		array(
			'default'     => '',
			'sanitize_callback' => 'sanitize_text_field'
		)
	);
	$wp_customize->add_control(
		new internet_service_provider_pro_Fontawesome_Icon_Chooser(
			$wp_customize,
			'internet_service_provider_pro_pormotional_banner_section_button_icon',
			array(
			'settings'    => 'internet_service_provider_pro_pormotional_banner_section_button_icon',
			'section'   => 'internet_service_provider_pro_pormotional_banner',
			'type'      => 'icon',
			'label'     => esc_html__( 'Choose  Icon', 'internet-service-provider-pro' ),
			)
		)
	);

  $wp_customize->add_setting('internet_service_provider_pro_tepormotional_banner_section_button_url',array(
    'default' => '',
    'sanitize_callback' => 'sanitize_text_field'
  ));
  $wp_customize->add_control('internet_service_provider_pro_tepormotional_banner_section_button_url',array(
    'label' => __('Section Button Url','internet-service-provider-pro'),
    'section' => 'internet_service_provider_pro_tepormotional_banner',
    'setting' => 'internet_service_provider_pro_tepormotional_banner_section_button_url',
    'type'    => 'text'
  ));

  $wp_customize->add_setting( 'internet_service_provider_pro_pormotional_banner_color_settings',
    array(
    'default' => '',
    'transport' => 'postMessage',
    'sanitize_callback' => 'internet_service_provider_pro_text_sanitization'
  ));
  $wp_customize->add_control( new VW_Themes_Seperator_custom_Control( $wp_customize, 'internet_service_provider_pro_pormotional_banner_color_settings',
  array(
    'label' => __('Section Color & Typography','internet-service-provider-pro'),
    'section' => 'internet_service_provider_pro_pormotional_banner'
  )));

  $wp_customize->add_setting( 'internet_service_provider_pro_pormotional_banner_tagline_ct_pallete',
    array(
      'default' => '',
      'transport' => 'postMessage',
      'sanitize_callback' => 'internet_service_provider_pro_text_sanitization'
  ));
  $wp_customize->add_control( new VW_Themes_Seperator_custom_Control( $wp_customize, 'internet_service_provider_pro_pormotional_banner_tagline_ct_pallete',
    array(
    'label' => __('Tagline Typography ','internet-service-provider-pro'),
    'section' => 'internet_service_provider_pro_pormotional_banner'
  )));

  $wp_customize->add_setting( 'internet_service_provider_pro_pormotional_banner_tagline_color', array(
    'default' => '',
    'sanitize_callback' => 'sanitize_hex_color'
  ));
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'internet_service_provider_pro_pormotional_banner_tagline_color', array(
    'label' => __('Color', 'internet-service-provider-pro'),
    'section' => 'internet_service_provider_pro_pormotional_banner',
    'settings' => 'internet_service_provider_pro_pormotional_banner_tagline_color',
  )));

  $wp_customize->add_setting('internet_service_provider_pro_pormotional_banner_tagline_font_family',array(
    'default' => '',
    'capability' => 'edit_theme_options',
    'sanitize_callback' => 'sanitize_text_field'
  ));
  $wp_customize->add_control(
    'internet_service_provider_pro_pormotional_banner_tagline_font_family', array(
    'section'  => 'internet_service_provider_pro_pormotional_banner',
    'label'    => __('Font Family','internet-service-provider-pro'),
    'type'     => 'select',
    'choices'  => $font_array,
  ));

  $wp_customize->add_setting('internet_service_provider_pro_pormotional_banner_tagline_font_size',array(
    'default' => '',
    'sanitize_callback' => 'sanitize_text_field'
  ));
  $wp_customize->add_control('internet_service_provider_pro_pormotional_banner_tagline_font_size',array(
    'label' => __('Font Size','internet-service-provider-pro'),
    
    'section' => 'internet_service_provider_pro_pormotional_banner',
    'setting' => 'internet_service_provider_pro_pormotional_banner_tagline_font_size',
    'type'    => 'number'
  ));

  $wp_customize->add_setting( 'internet_service_provider_pro_pormotional_banner_main_heading_ct_pallete',
    array(
      'default' => '',
      'transport' => 'postMessage',
      'sanitize_callback' => 'internet_service_provider_pro_text_sanitization'
  ));
  $wp_customize->add_control( new VW_Themes_Seperator_custom_Control( $wp_customize, 'internet_service_provider_pro_pormotional_banner_main_heading_ct_pallete',
    array(
    'label' => __('Main Heading Typography ','internet-service-provider-pro'),
    'section' => 'internet_service_provider_pro_pormotional_banner'
  )));

  $wp_customize->add_setting( 'internet_service_provider_pro_pormotional_banner_main_heading_color', array(
    'default' => '',
    'sanitize_callback' => 'sanitize_hex_color'
  ));
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'internet_service_provider_pro_pormotional_banner_main_heading_color', array(
    'label' => __('Color', 'internet-service-provider-pro'),
    'section' => 'internet_service_provider_pro_pormotional_banner',
    'settings' => 'internet_service_provider_pro_pormotional_banner_main_heading_color',
  )));

  $wp_customize->add_setting('internet_service_provider_pro_pormotional_banner_main_heading_font_family',array(
    'default' => '',
    'capability' => 'edit_theme_options',
    'sanitize_callback' => 'sanitize_text_field'
  ));
  $wp_customize->add_control(
    'internet_service_provider_pro_pormotional_banner_main_heading_font_family', array(
    'section'  => 'internet_service_provider_pro_pormotional_banner',
    'label'    => __('Font Family','internet-service-provider-pro'),
    'type'     => 'select',
    'choices'  => $font_array,
  ));

  $wp_customize->add_setting('internet_service_provider_pro_pormotional_banner_main_heading_font_size',array(
    'default' => '',
    'sanitize_callback' => 'sanitize_text_field'
  ));
  $wp_customize->add_control('internet_service_provider_pro_pormotional_banner_main_heading_font_size',array(
    'label' => __('Font Size','internet-service-provider-pro'),
    
    'section' => 'internet_service_provider_pro_pormotional_banner',
    'setting' => 'internet_service_provider_pro_pormotional_banner_main_heading_font_size',
    'type'    => 'number'
  ));

  $wp_customize->add_setting( 'internet_service_provider_pro_pormotional_banner_button_ct_pallete',
  array(
    'default' => '',
    'transport' => 'postMessage',
    'sanitize_callback' => 'internet_service_provider_pro_text_sanitization'
  ));
  $wp_customize->add_control( new VW_Themes_Seperator_custom_Control( $wp_customize, 'internet_service_provider_pro_pormotional_banner_button_ct_pallete',
      array(
      'label' => __('Section Button Typography ','internet-service-provider-pro'),
      'section' => 'internet_service_provider_pro_pormotional_banner'
  )));

  $wp_customize->add_setting( 'internet_service_provider_pro_pormotional_banner_button_color', array(
      'default' => '',
      'sanitize_callback' => 'sanitize_hex_color'
  ));
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'internet_service_provider_pro_pormotional_banner_button_color', array(
      'label' => __('Color', 'internet-service-provider-pro'),
      'section' => 'internet_service_provider_pro_pormotional_banner',
      'settings' => 'internet_service_provider_pro_pormotional_banner_button_color',
  )));
  $wp_customize->add_setting('internet_service_provider_pro_pormotional_banner_button_font_family',array(
      'default' => '',
      'capability' => 'edit_theme_options',
      'sanitize_callback' => 'sanitize_text_field'
  ));
  $wp_customize->add_control(
      'internet_service_provider_pro_pormotional_banner_button_font_family', array(
      'section'  => 'internet_service_provider_pro_pormotional_banner',
      'label'    => __('Font Family','internet-service-provider-pro'),
      'type'     => 'select',
      'choices'  => $font_array,
  ));

  $wp_customize->add_setting('internet_service_provider_pro_pormotional_banner_button_font_size',array(
      'default' => '',
      'sanitize_callback' => 'sanitize_text_field'
  ));
  $wp_customize->add_control('internet_service_provider_pro_pormotional_banner_button_font_size',array(
      'label' => __('Font Size','internet-service-provider-pro'),
      
      'section' => 'internet_service_provider_pro_pormotional_banner',
      'setting' => 'internet_service_provider_pro_pormotional_banner_button_font_size',
      'type'    => 'number'
  ));

  $wp_customize->add_setting( 'internet_service_provider_pro_pormotional_banner_button_bgcolor', array(
      'default' => '',
      'sanitize_callback' => 'sanitize_hex_color'
  ));
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'internet_service_provider_pro_pormotional_banner_button_bgcolor', array(
      'label' => __('Background Color', 'internet-service-provider-pro'),
      'section' => 'internet_service_provider_pro_pormotional_banner',
      'settings' => 'internet_service_provider_pro_pormotional_banner_button_bgcolor',
  )));

  $wp_customize->add_setting( 'internet_service_provider_pro_pormotional_banner_button_icon_color', array(
      'default' => '',
      'sanitize_callback' => 'sanitize_hex_color'
  ));
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'internet_service_provider_pro_pormotional_banner_button_icon_color', array(
      'label' => __('Icon Color', 'internet-service-provider-pro'),
      'section' => 'internet_service_provider_pro_pormotional_banner',
      'settings' => 'internet_service_provider_pro_pormotional_banner_button_icon_color',
  )));

  $wp_customize->add_setting( 'internet_service_provider_pro_pormotional_banner_button_icon_bgcolor', array(
      'default' => '',
      'sanitize_callback' => 'sanitize_hex_color'
  ));
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'internet_service_provider_pro_pormotional_banner_button_icon_bgcolor', array(
      'label' => __('Icon Background Color', 'internet-service-provider-pro'),
      'section' => 'internet_service_provider_pro_pormotional_banner',
      'settings' => 'internet_service_provider_pro_pormotional_banner_button_icon_bgcolor',
  )));

  $wp_customize->add_setting( 'internet_service_provider_pro_pormotional_banner_button_icon_hover_color', array(
      'default' => '',
      'sanitize_callback' => 'sanitize_hex_color'
  ));
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'internet_service_provider_pro_pormotional_banner_button_icon_hover_color', array(
      'label' => __('Icon Hover Color', 'internet-service-provider-pro'),
      'section' => 'internet_service_provider_pro_pormotional_banner',
      'settings' => 'internet_service_provider_pro_pormotional_banner_button_icon_hover_color',
  )));

  $wp_customize->add_setting( 'internet_service_provider_pro_pormotional_banner_button_icon_hover_bgcolor', array(
      'default' => '',
      'sanitize_callback' => 'sanitize_hex_color'
  ));
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'internet_service_provider_pro_pormotional_banner_button_icon_hover_bgcolor', array(
      'label' => __('Icon Hover Background Color', 'internet-service-provider-pro'),
      'section' => 'internet_service_provider_pro_pormotional_banner',
      'settings' => 'internet_service_provider_pro_pormotional_banner_button_icon_hover_bgcolor',
  )));

  $wp_customize->add_setting( 'internet_service_provider_pro_pormotional_banner_button_hover_bgcolor', array(
      'default' => '',
      'sanitize_callback' => 'sanitize_hex_color'
  ));
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'internet_service_provider_pro_pormotional_banner_button_hover_bgcolor', array(
      'label' => __('Hover Background Color', 'internet-service-provider-pro'),
      'section' => 'internet_service_provider_pro_pormotional_banner',
      'settings' => 'internet_service_provider_pro_pormotional_banner_button_hover_bgcolor',
  )));

  $wp_customize->add_setting( 'internet_service_provider_pro_pormotional_banner_button_text_color_hover', array(
      'default' => '',
      'sanitize_callback' => 'sanitize_hex_color'
  ));
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'internet_service_provider_pro_pormotional_banner_button_text_color_hover', array(
      'label' => __('Hover Text Color', 'internet-service-provider-pro'),
      'section' => 'internet_service_provider_pro_pormotional_banner',
      'settings' => 'internet_service_provider_pro_pormotional_banner_button_text_color_hover',
  )));


  $wp_customize->add_setting('internet_service_provider_pro_pormotional_banner_spacing_left_desktop', array(
    'sanitize_callback' => 'internet_service_provider_pro_sanitize_number_blank',
  ));

  $wp_customize->add_setting('internet_service_provider_pro_pormotional_banner_spacing_top_desktop', array(
    'sanitize_callback' => 'internet_service_provider_pro_sanitize_number_blank',
  ));

  $wp_customize->add_setting('internet_service_provider_pro_pormotional_banner_spacing_bottom_desktop', array(
    'sanitize_callback' => 'internet_service_provider_pro_sanitize_number_blank',
  ));

  $wp_customize->add_setting('internet_service_provider_pro_pormotional_banner_spacing_right_desktop', array(
    'sanitize_callback' => 'internet_service_provider_pro_sanitize_number_blank',
  ));

  $wp_customize->add_control(new VW_Dimensions_Control($wp_customize, 'internet_service_provider_pro_pormotional_banner_spacing', array(
    'section' => 'internet_service_provider_pro_pormotional_banner',
    'label' => esc_html__('Section Spacing(px)', 'internet-service-provider-pro'),
    'settings' => array(
        'desktop_left' => 'internet_service_provider_pro_pormotional_banner_spacing_left_desktop',
        'desktop_top' => 'internet_service_provider_pro_pormotional_banner_spacing_top_desktop',
        'desktop_bottom' => 'internet_service_provider_pro_pormotional_banner_spacing_bottom_desktop',
      'desktop_right' => 'internet_service_provider_pro_pormotional_banner_spacing_right_desktop'
  ),
    'input_attrs' => array(
        'min' => 0,
        'max' => 100,
        'step' => 1,
    ),
    'responsive' => false
  )));

  /*--------------------Team Section------------------------------*/
  $wp_customize->add_section('internet_service_provider_pro_team',array(
      'title'         => __('Team','internet-service-provider-pro'),
      'panel'         => 'internet_service_provider_pro_panel_id',
  ));
  
  $wp_customize->add_setting( 'internet_service_provider_pro_team_option',
  array(
      'default' => '',
      'transport' => 'postMessage',
      'sanitize_callback' => 'internet_service_provider_pro_text_sanitization'
  )
  );
  $wp_customize->add_control( new VW_Themes_Seperator_custom_Control( $wp_customize, 'internet_service_provider_pro_team_option',
  array(
      'label' => __('team Option','internet-service-provider-pro'),
      'section' => 'internet_service_provider_pro_team'
  )
  ) );
  $wp_customize->add_setting('internet_service_provider_pro_radio_team_enable',array(
      'default'           => 'Enable',
      'sanitize_callback' => 'internet_service_provider_pro_sanitize_choices'
  ));
  $wp_customize->add_control('internet_service_provider_pro_radio_team_enable', array(
      'type'        => 'radio',
      'label'       => 'Do you want this section',
      'section'     => 'internet_service_provider_pro_team',
      'choices'     => array(
          'Enable'  => 'Enable',
          'Disable' => 'Disable'
      ),
  ));  
  $wp_customize->selective_refresh->add_partial( 'internet_service_provider_pro_radio_team_enable', array(
    'selector' => '#our-team h3',
    'render_callback' => 'internet_service_provider_pro_customize_partial_internet_service_provider_pro_radio_team_enable',
  ) ); 
  $wp_customize->add_setting( 'internet_service_provider_pro_team_back_option',
    array(
        'default' => '',
        'transport' => 'postMessage',
        'sanitize_callback' => 'internet_service_provider_pro_text_sanitization'
  )
  );
  $wp_customize->add_control( new VW_Themes_Seperator_custom_Control( $wp_customize, 'internet_service_provider_pro_team_back_option',
    array(
        'label' => __('Section Background Option','internet-service-provider-pro'),
        'section' => 'internet_service_provider_pro_team'
    )
  ) );  
  $wp_customize->add_setting( 'internet_service_provider_pro_team_bgcolor', array(
    'default' => '',
    'sanitize_callback' => 'sanitize_hex_color'
  ));
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'internet_service_provider_pro_team_bgcolor', array(
        'label' => __('Background Color', 'internet-service-provider-pro'),
        'description'   => __('Either add background color or background image, if you add both background color will be top most priority','internet-service-provider-pro'),
        'section' => 'internet_service_provider_pro_team',
        'settings' => 'internet_service_provider_pro_team_bgcolor',
  )));
  $wp_customize->add_setting('internet_service_provider_pro_team_bgimage',array(
      'default' =>'',
      'sanitize_callback' => 'esc_url_raw',
  ));
  $wp_customize->add_control(
      new WP_Customize_Image_Control(
          $wp_customize,
          'internet_service_provider_pro_team_bgimage',
          array(
              'label' => __('Background image','internet-service-provider-pro'),
              'description' => __('Dimension 1600px * 900px','internet-service-provider-pro'),
              'section' => 'internet_service_provider_pro_team',
              'settings' => 'internet_service_provider_pro_team_bgimage'
  )));

  $wp_customize->add_setting('internet_service_provider_pro_team_bgimage_attachment', array(
      'default' => '',
      'sanitize_callback' => 'internet_service_provider_pro_sanitize_choices'
  ));
  $wp_customize->add_control('internet_service_provider_pro_team_bgimage_attachment', array(
      'type' => 'radio',
      'label' => __('Choose image option', 'internet-service-provider-pro'),
      'section' => 'internet_service_provider_pro_team',
      'choices' => array(
          'bg-fixed' => __('Fixed', 'internet-service-provider-pro'),
          'bg-scroll' => __('Scroll', 'internet-service-provider-pro')
      )
  ));

  $wp_customize->add_setting('internet_service_provider_pro_team_bgimage_size', array(
      'default' => '',
      'sanitize_callback' => 'internet_service_provider_pro_sanitize_choices'
  ));
  $wp_customize->add_control('internet_service_provider_pro_team_bgimage_size', array(
      'type' => 'radio',
      'label' => __('Background Image Size', 'internet-service-provider-pro'),
      'section' => 'internet_service_provider_pro_team',
      'choices' => array(
          'bg-auto' => __('Auto', 'internet-service-provider-pro'),
          'bg-cover' => __('Cover', 'internet-service-provider-pro'),
          'bg-contain' => __('Contain', 'internet-service-provider-pro'),
          'bg-xy' => __('Cover X & Y', 'internet-service-provider-pro'),
          'bg-x' => __('Cover X', 'internet-service-provider-pro'),
      )
  ));

  $wp_customize->add_setting( 'internet_service_provider_pro_team_content_option',
    array(
        'default' => '',
        'transport' => 'postMessage',
        'sanitize_callback' => 'internet_service_provider_pro_text_sanitization'
  )
  );
  $wp_customize->add_control( new VW_Themes_Seperator_custom_Control( $wp_customize, 'internet_service_provider_pro_team_content_option',
    array(
        'label' => __('Section Content Option','internet-service-provider-pro'),
        'section' => 'internet_service_provider_pro_team'
    )
  ) );

  $wp_customize->add_setting('internet_service_provider_pro_team_tagline',array(
    'default' => '',
    'sanitize_callback' => 'sanitize_text_field',
  ));
  $wp_customize->add_control('internet_service_provider_pro_team_tagline',array(
    'label' => __('Tagline','internet-service-provider-pro'),
    'section' => 'internet_service_provider_pro_team',
    'setting' => 'internet_service_provider_pro_team_tagline',
    'type'  => 'text'
  ));

  $wp_customize->add_setting('internet_service_provider_pro_team_main_heading',array(
    'default' => '',
    'sanitize_callback' => 'sanitize_text_field',
  ));
  $wp_customize->add_control('internet_service_provider_pro_team_main_heading',array(
    'label' => __('Main Heading 1','internet-service-provider-pro'),
    'section' => 'internet_service_provider_pro_team',
    'setting' => 'internet_service_provider_pro_team_main_heading',
    'type'  => 'text'
  ));

  $wp_customize->add_setting('internet_service_provider_pro_team_number',array(
    'default' => '',
    'sanitize_callback' => 'sanitize_text_field'
  ));
  $wp_customize->add_control('internet_service_provider_pro_team_number',array(
    'label' => __('No of team to show','internet-service-provider-pro'),
    'section' => 'internet_service_provider_pro_team',
    'setting' => 'internet_service_provider_pro_team_number',
    'type'    => 'number'
  ));


  $wp_customize->add_setting( 'internet_service_provider_pro_team_content_color_settings',
    array(
    'default' => '',
    'transport' => 'postMessage',
    'sanitize_callback' => 'internet_service_provider_pro_text_sanitization'
  ));
  $wp_customize->add_control( new VW_Themes_Seperator_custom_Control( $wp_customize, 'internet_service_provider_pro_team_content_color_settings',
    array(
    'label' => __('Section Color & Typography','internet-service-provider-pro'),
  'section' => 'internet_service_provider_pro_team'
  )));

  $wp_customize->add_setting( 'internet_service_provider_pro_team_tagline_ct_pallete',
    array(
      'default' => '',
      'transport' => 'postMessage',
      'sanitize_callback' => 'internet_service_provider_pro_text_sanitization'
  ));
  $wp_customize->add_control( new VW_Themes_Seperator_custom_Control( $wp_customize, 'internet_service_provider_pro_team_tagline_ct_pallete',
    array(
    'label' => __('Tagline Typography ','internet-service-provider-pro'),
    'section' => 'internet_service_provider_pro_team'
  )));

  $wp_customize->add_setting( 'internet_service_provider_pro_team_tagline_color', array(
    'default' => '',
    'sanitize_callback' => 'sanitize_hex_color'
  ));
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'internet_service_provider_pro_team_tagline_color', array(
    'label' => __('Color', 'internet-service-provider-pro'),
    'section' => 'internet_service_provider_pro_team',
    'settings' => 'internet_service_provider_pro_team_tagline_color',
  )));

  $wp_customize->add_setting('internet_service_provider_pro_team_tagline_font_family',array(
    'default' => '',
    'capability' => 'edit_theme_options',
    'sanitize_callback' => 'sanitize_text_field'
  ));
  $wp_customize->add_control(
    'internet_service_provider_pro_team_tagline_font_family', array(
    'section'  => 'internet_service_provider_pro_team',
    'label'    => __('Font Family','internet-service-provider-pro'),
    'type'     => 'select',
    'choices'  => $font_array,
  ));

  $wp_customize->add_setting('internet_service_provider_pro_team_tagline_font_size',array(
    'default' => '',
    'sanitize_callback' => 'sanitize_text_field'
  ));
  $wp_customize->add_control('internet_service_provider_pro_team_tagline_font_size',array(
    'label' => __('Font Size','internet-service-provider-pro'),
    'section' => 'internet_service_provider_pro_team',
    'setting' => 'internet_service_provider_pro_team_tagline_font_size',
    'type'    => 'number'
  ));

  $wp_customize->add_setting( 'internet_service_provider_pro_team_main_heading_ct_pallete',
    array(
      'default' => '',
      'transport' => 'postMessage',
      'sanitize_callback' => 'internet_service_provider_pro_text_sanitization'
  ));
  $wp_customize->add_control( new VW_Themes_Seperator_custom_Control( $wp_customize, 'internet_service_provider_pro_team_main_heading_ct_pallete',
    array(
    'label' => __('Main Heading Typography ','internet-service-provider-pro'),
    'section' => 'internet_service_provider_pro_team'
  )));

  $wp_customize->add_setting( 'internet_service_provider_pro_team_main_heading_color', array(
    'default' => '',
    'sanitize_callback' => 'sanitize_hex_color'
  ));
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'internet_service_provider_pro_team_main_heading_color', array(
    'label' => __('Color', 'internet-service-provider-pro'),
    'section' => 'internet_service_provider_pro_team',
    'settings' => 'internet_service_provider_pro_team_main_heading_color',
  )));

  $wp_customize->add_setting('internet_service_provider_pro_team_main_heading_font_family',array(
    'default' => '',
    'capability' => 'edit_theme_options',
    'sanitize_callback' => 'sanitize_text_field'
  ));
  $wp_customize->add_control(
    'internet_service_provider_pro_team_main_heading_font_family', array(
    'section'  => 'internet_service_provider_pro_team',
    'label'    => __('Font Family','internet-service-provider-pro'),
    'type'     => 'select',
    'choices'  => $font_array,
  ));

  $wp_customize->add_setting('internet_service_provider_pro_team_main_heading_font_size',array(
    'default' => '',
    'sanitize_callback' => 'sanitize_text_field'
  ));
  $wp_customize->add_control('internet_service_provider_pro_team_main_heading_font_size',array(
    'label' => __('Font Size','internet-service-provider-pro'),
    
    'section' => 'internet_service_provider_pro_team',
    'setting' => 'internet_service_provider_pro_team_main_heading_font_size',
    'type'    => 'number'
  ));

  $wp_customize->add_setting( 'internet_service_provider_pro_team_name_ct_pallete',
  array(
    'default' => '',
    'transport' => 'postMessage',
    'sanitize_callback' => 'internet_service_provider_pro_text_sanitization'
  ));
  $wp_customize->add_control( new VW_Themes_Seperator_custom_Control( $wp_customize, 'internet_service_provider_pro_team_name_ct_pallete',
  array(
    'label' => __('Team Name Typography ','internet-service-provider-pro'),
    'section' => 'internet_service_provider_pro_team'
  )));

  $wp_customize->add_setting( 'internet_service_provider_pro_team_name_color', array(
    'default' => '',
    'sanitize_callback' => 'sanitize_hex_color'
  ));
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'internet_service_provider_pro_team_name_color', array(
    'label'    => __( 'Color','internet-service-provider-pro'),
    'section' => 'internet_service_provider_pro_team',
    'settings' => 'internet_service_provider_pro_team_name_color',
  )));

  $wp_customize->add_setting('internet_service_provider_pro_team_name_font_family',array(
    'default' => '',
    'capability' => 'edit_theme_options',
    'sanitize_callback' => 'internet_service_provider_pro_sanitize_choices'
   ));
  $wp_customize->add_control(
      'internet_service_provider_pro_team_name_font_family', array(
      'section'  => 'internet_service_provider_pro_team',
      'label'    => __( 'Font Family','internet-service-provider-pro'),
      'type'     => 'select',
      'choices'  => $font_array,
  ));

  $wp_customize->add_setting('internet_service_provider_pro_team_name_font_size', array(
      'default' => '',
      'sanitize_callback' => 'sanitize_text_field'
  ));
  $wp_customize->add_control('internet_service_provider_pro_team_name_font_size', array(
      'label' => __('Font Size', 'internet-service-provider-pro'),
      'section' => 'internet_service_provider_pro_team',
      'setting' => 'internet_service_provider_pro_team_name_font_size',
      'type' => 'number'
  ));


  $wp_customize->add_setting( 'internet_service_provider_pro_team_desig_ct_pallete',
  array(
    'default' => '',
    'transport' => 'postMessage',
    'sanitize_callback' => 'internet_service_provider_pro_text_sanitization'
  ));
  $wp_customize->add_control( new VW_Themes_Seperator_custom_Control( $wp_customize, 'internet_service_provider_pro_team_desig_ct_pallete',
  array(
    'label' => __('Desgination Typography ','internet-service-provider-pro'),
    'section' => 'internet_service_provider_pro_team'
  )));

  $wp_customize->add_setting( 'internet_service_provider_pro_team_desig_color', array(
    'default' => '',
    'sanitize_callback' => 'sanitize_hex_color'
  ));
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'internet_service_provider_pro_team_desig_color', array(
    'label'    => __( 'Color','internet-service-provider-pro'),
    'section' => 'internet_service_provider_pro_team',
    'settings' => 'internet_service_provider_pro_team_desig_color',
  )));

  $wp_customize->add_setting('internet_service_provider_pro_team_desig_font_family',array(
    'default' => '',
    'capability' => 'edit_theme_options',
    'sanitize_callback' => 'internet_service_provider_pro_sanitize_choices'
   ));
  $wp_customize->add_control(
      'internet_service_provider_pro_team_desig_font_family', array(
      'section'  => 'internet_service_provider_pro_team',
      'label'    => __( 'Font Family','internet-service-provider-pro'),
      'type'     => 'select',
      'choices'  => $font_array,
  ));

  $wp_customize->add_setting('internet_service_provider_pro_team_desig_font_size', array(
      'default' => '',
      'sanitize_callback' => 'sanitize_text_field'
  ));
  $wp_customize->add_control('internet_service_provider_pro_team_desig_font_size', array(
      'label' => __('Font Size', 'internet-service-provider-pro'),
      'section' => 'internet_service_provider_pro_team',
      'setting' => 'internet_service_provider_pro_team_desig_font_size',
      'type' => 'number'
  ));

  $wp_customize->add_setting( 'internet_service_provider_pro_team_social_profile_ct_pallete',
  array(
    'default' => '',
    'transport' => 'postMessage',
    'sanitize_callback' => 'internet_service_provider_pro_text_sanitization'
  ));
  $wp_customize->add_control( new VW_Themes_Seperator_custom_Control( $wp_customize, 'internet_service_provider_pro_team_social_profile_ct_pallete',
  array(
    'label' => __('Social Profile Typography ','internet-service-provider-pro'),
    'section' => 'internet_service_provider_pro_team'
  )));

  $wp_customize->add_setting( 'internet_service_provider_pro_team_social_profile_icon_color', array(
    'default' => '',
    'sanitize_callback' => 'sanitize_hex_color'
  ));
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'internet_service_provider_pro_team_social_profile_icon_color', array(
    'label'    => __( 'Icon Color','internet-service-provider-pro'),
    'section' => 'internet_service_provider_pro_team',
    'settings' => 'internet_service_provider_pro_team_social_profile_icon_color',
  )));

  $wp_customize->add_setting('internet_service_provider_pro_team_social_profile_icon_font_size', array(
      'default' => '',
      'sanitize_callback' => 'sanitize_text_field'
  ));
  $wp_customize->add_control('internet_service_provider_pro_team_social_profile_icon_font_size', array(
      'label' => __('Icon Font Size', 'internet-service-provider-pro'),
      'section' => 'internet_service_provider_pro_team',
      'setting' => 'internet_service_provider_pro_team_social_profile_icon_font_size',
      'type' => 'number'
  ));

  $wp_customize->add_setting( 'internet_service_provider_pro_team_social_profile_box_bgcolor', array(
    'default' => '',
    'sanitize_callback' => 'sanitize_hex_color'
  ));
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'internet_service_provider_pro_team_social_profile_box_bgcolor', array(
    'label'    => __( 'Box Background Color','internet-service-provider-pro'),
    'section' => 'internet_service_provider_pro_team',
    'settings' => 'internet_service_provider_pro_team_social_profile_box_bgcolor',
  )));
  $wp_customize->add_setting( 'internet_service_provider_pro_team_social_profile_box_hover_bgcolor', array(
    'default' => '',
    'sanitize_callback' => 'sanitize_hex_color'
  ));
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'internet_service_provider_pro_team_social_profile_box_hover_bgcolor', array(
    'label'    => __( 'Box Hover Background Color','internet-service-provider-pro'),
    'section' => 'internet_service_provider_pro_team',
    'settings' => 'internet_service_provider_pro_team_social_profile_box_hover_bgcolor',
  )));

  $wp_customize->add_setting('internet_service_provider_pro_team_spacing_left_desktop', array(
    'sanitize_callback' => 'internet_service_provider_pro_sanitize_number_blank',
  ));

  $wp_customize->add_setting('internet_service_provider_pro_team_spacing_top_desktop', array(
    'sanitize_callback' => 'internet_service_provider_pro_sanitize_number_blank',
  ));

  $wp_customize->add_setting('internet_service_provider_pro_team_spacing_bottom_desktop', array(
    'sanitize_callback' => 'internet_service_provider_pro_sanitize_number_blank',
  ));

  $wp_customize->add_setting('internet_service_provider_pro_team_spacing_right_desktop', array(
    'sanitize_callback' => 'internet_service_provider_pro_sanitize_number_blank',
  ));

  $wp_customize->add_control(new VW_Dimensions_Control($wp_customize, 'internet_service_provider_pro_team_spacing', array(
    'section' => 'internet_service_provider_pro_team',
    'label' => esc_html__('Section Spacing(px)', 'internet-service-provider-pro'),
    'settings' => array(
        'desktop_left' => 'internet_service_provider_pro_team_spacing_left_desktop',
        'desktop_top' => 'internet_service_provider_pro_team_spacing_top_desktop',
        'desktop_bottom' => 'internet_service_provider_pro_team_spacing_bottom_desktop',
        'desktop_right' => 'internet_service_provider_pro_team_spacing_right_desktop'
    ),
    'input_attrs' => array(
        'min' => 0,
        'max' => 100,
        'step' => 1,
    ),
    'responsive' => false
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