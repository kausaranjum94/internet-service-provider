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

  $wp_customize->add_setting('internet_service_provider_pro_main_banner_heading_image',array(
    'default' => '',
    'sanitize_callback' => 'esc_url_raw',
  ));
  $wp_customize->add_control(
    new WP_Customize_Image_Control( $wp_customize,'internet_service_provider_pro_main_banner_heading_image',array(
    'label' => __('Heading Image','internet-service-provider-pro'),
    'description' => __('Dimension 33px * 52px','internet-service-provider-pro'),
    'section' => 'internet_service_provider_pro_main_banner',
    'settings' => 'internet_service_provider_pro_main_banner_heading_image'
  )));

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
  $wp_customize->add_control( new VW_Themes_Seperator_custom_Control( $wp_customize, 'internet_service_provider_pro_partner_content_settings',
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
    $wp_customize->add_control( new VW_Themes_Seperator_custom_Control( $wp_customize, 'internet_service_provider_pro_partner_box_settings'.$i,
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
  $wp_customize->add_control( new VW_Themes_Seperator_custom_Control( $wp_customize, 'internet_service_provider_pro_partner_color_settings',
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
  $wp_customize->add_control( new VW_Themes_Seperator_custom_Control( $wp_customize, 'internet_service_provider_pro_partner_tagline_ct_pallete',
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
  $wp_customize->add_control( new VW_Themes_Seperator_custom_Control( $wp_customize, 'internet_service_provider_pro_partner_main_heading_ct_pallete',
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
  $wp_customize->add_control( new VW_Themes_Seperator_custom_Control( $wp_customize, 'internet_service_provider_pro_records_content_settings',
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
    $wp_customize->add_control( new VW_Themes_Seperator_custom_Control( $wp_customize, 'internet_service_provider_pro_records_box_settings'.$i,
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
  $wp_customize->add_control( new VW_Themes_Seperator_custom_Control( $wp_customize, 'internet_service_provider_pro_records_color_settings',
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
  $wp_customize->add_control( new VW_Themes_Seperator_custom_Control( $wp_customize, 'internet_service_provider_pro_records_tagline_ct_pallete',
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
  $wp_customize->add_control( new VW_Themes_Seperator_custom_Control( $wp_customize, 'internet_service_provider_pro_records_main_heading_ct_pallete',
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
  $wp_customize->add_control( new VW_Themes_Seperator_custom_Control( $wp_customize, 'internet_service_provider_pro_records_box_image_ct_pallete',
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
  $wp_customize->add_control( new VW_Themes_Seperator_custom_Control( $wp_customize, 'internet_service_provider_pro_records_box_number_ct_pallete',
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
  $wp_customize->add_control( new VW_Themes_Seperator_custom_Control( $wp_customize, 'internet_service_provider_pro_records_box_text_ct_pallete',
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

  $exclusive_offers_icon_box = get_theme_mod('internet_service_provider_pro_exclusive_offers_listing_number');

  for($i=1;$i<=$exclusive_offers_icon_box;$i++)
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

  $exclusive_offers_icon_box = get_theme_mod('internet_service_provider_pro_exclusive_offers_icon_box_number');

  for($i=1;$i<=$exclusive_offers_icon_box;$i++)
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

  $exclusive_offers_icon_box = get_theme_mod('internet_service_provider_pro_map_area_areas_number');

  for($i=1;$i<=$exclusive_offers_icon_box;$i++)
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

  // -------------- Pricing Plan --------------
  $wp_customize->add_section('internet_service_provider_pro_pricing_plan',array(
    'title' => __('Pricing Plan','internet-service-provider-pro'),
    'panel' => 'internet_service_provider_pro_panel_id',
  ));

  $wp_customize->add_setting('internet_service_provider_pro_pricing_plan_enable',
      array(
    'default' => 'Enable',
    'sanitize_callback' => 'internet_service_provider_pro_sanitize_choices'
  ));
  $wp_customize->add_control('internet_service_provider_pro_pricing_plan_enable',
    array(
    'type' => 'radio',
    'label' => __('Do you want this section', 'internet-service-provider-pro'),
    'section' => 'internet_service_provider_pro_pricing_plan',
    'choices' => array(
    'Enable' => __('Enable', 'internet-service-provider-pro'),
    'Disable' => __('Disable', 'internet-service-provider-pro')
  )));
  $wp_customize->selective_refresh->add_partial( 'internet_service_provider_pro_pricing_plan_enable', array(
    'selector' => '#pricing-plan h3',
    'render_callback' => 'internet_service_provider_pro_customize_partial_internet_service_provider_pro_pricing_plan_enable',
  ));
  $wp_customize->add_setting( 'internet_service_provider_pro_pricing_plan_settings',
    array(
    'default' => '',
    'transport' => 'postMessage',
    'sanitize_callback' => 'internet_service_provider_pro_text_sanitization'
  ));
  $wp_customize->add_control( new VW_Themes_Seperator_custom_Control( $wp_customize, 'internet_service_provider_pro_pricing_plan_settings',
    array(
    'label' => __('Section Background Settings','internet-service-provider-pro'),
    'section' => 'internet_service_provider_pro_pricing_plan'
  )));
  $wp_customize->add_setting( 'internet_service_provider_pro_pricing_plan_bgcolor', array(
    'default' => '',
    'sanitize_callback' => 'sanitize_hex_color'
  ));
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'internet_service_provider_pro_pricing_plan_bgcolor', array(
    'label' => __('Section Background Color', 'internet-service-provider-pro'),
    'description'   => __('Either add background color or background image, if you add both background color will be top most priority','internet-service-provider-pro'),
    'section' => 'internet_service_provider_pro_pricing_plan',
    'settings' => 'internet_service_provider_pro_pricing_plan_bgcolor',
  )));
  $wp_customize->add_setting('internet_service_provider_pro_pricing_plan_bgimage',array(
    'default' => '',
    'sanitize_callback' => 'esc_url_raw',
  ));
  $wp_customize->add_control(
    new WP_Customize_Image_Control( $wp_customize,'internet_service_provider_pro_pricing_plan_bgimage',array(
    'label' => __('Section Background Image','internet-service-provider-pro'),
    'description' => __('Dimension 1600px * 830px','internet-service-provider-pro'),
    'section' => 'internet_service_provider_pro_pricing_plan',
    'settings' => 'internet_service_provider_pro_pricing_plan_bgimage'
  )));
  //Work Column Layout
  $wp_customize->add_setting( 'internet_service_provider_pro_pricing_plan_bgimage_setting', array(
      'default'         => '',
      'sanitize_callback' => 'internet_service_provider_pro_sanitize_choices'
  ));
  $wp_customize->add_control('internet_service_provider_pro_pricing_plan_bgimage_setting', array(
      'type'      => 'radio',
      'label'     => __('Choose image option', 'internet-service-provider-pro'),
      'section'   => 'internet_service_provider_pro_pricing_plan',
      'choices'   => array(
        'bg-fixed'      => __( 'Fixed', 'internet-service-provider-pro' ),
        'bg-scroll'      => __( 'Scroll', 'internet-service-provider-pro' ),                    
  )));

  $wp_customize->add_setting('internet_service_provider_pro_pricing_plan_bgimage_size', array(
      'default' => '',
      'sanitize_callback' => 'internet_service_provider_pro_sanitize_choices'
  ));
  $wp_customize->add_control('internet_service_provider_pro_pricing_plan_bgimage_size', array(
      'type' => 'radio',
      'label' => __('Background Image Size', 'internet-service-provider-pro'),
      'section' => 'internet_service_provider_pro_pricing_plan',
      'choices' => array(
          'bg-auto' => __('Auto', 'internet-service-provider-pro'),
          'bg-cover' => __('Cover', 'internet-service-provider-pro'),
          'bg-contain' => __('Contain', 'internet-service-provider-pro'),
          'bg-xy' => __('Cover X & Y', 'internet-service-provider-pro'),
          'bg-x' => __('Cover X', 'internet-service-provider-pro'),
      )
  ));

  $wp_customize->add_setting( 'internet_service_provider_pro_pricing_plan_content_settings',
    array(
    'default' => '',
    'transport' => 'postMessage',
    'sanitize_callback' => 'internet_service_provider_pro_text_sanitization'
  ));
  $wp_customize->add_control( new VW_Themes_Seperator_custom_Control( $wp_customize, 'internet_service_provider_pro_pricing_plan_content_settings',
    array(
    'label' => __('Section Content Settings','internet-service-provider-pro'),
    'section' => 'internet_service_provider_pro_pricing_plan'
  )));

  $wp_customize->add_setting('internet_service_provider_pro_pricing_plan_tagline',array(
    'default' => '',
    'sanitize_callback' => 'sanitize_text_field'
  ));
  $wp_customize->add_control('internet_service_provider_pro_pricing_plan_tagline',array(
    'label' => __('Section Tagline','internet-service-provider-pro'),
    'section' => 'internet_service_provider_pro_pricing_plan',
    'setting' => 'internet_service_provider_pro_pricing_plan_tagline',
    'type'    => 'text'
  ));

  $wp_customize->add_setting('internet_service_provider_pro_pricing_plan_main_heading',array(
    'default' => '',
    'sanitize_callback' => 'sanitize_text_field'
  ));
  $wp_customize->add_control('internet_service_provider_pro_pricing_plan_main_heading',array(
    'label' => __('Section Main Heading','internet-service-provider-pro'),
    'section' => 'internet_service_provider_pro_pricing_plan',
    'setting' => 'internet_service_provider_pro_pricing_plan_main_heading',
    'type'    => 'text'
  ));
  
  $wp_customize->add_setting('internet_service_provider_pro_pricing_plan_number',array(
    'default' => '',
    'sanitize_callback' => 'sanitize_text_field'
  ));
  $wp_customize->add_control('internet_service_provider_pro_pricing_plan_number',array(
    'label' => __('No Of Plans To Show','internet-service-provider-pro'),
    'section' => 'internet_service_provider_pro_pricing_plan',
    'setting' => 'internet_service_provider_pro_pricing_plan_number',
    'type'    => 'number'
  ));
  $plan_no=get_theme_mod('internet_service_provider_pro_pricing_plan_number');
  for($i=1;$i<=$plan_no;$i++)
  {
    $wp_customize->add_setting( 'internet_service_provider_pro_pricing_plan_box_settings'.$i,
    array(
      'default' => '',
      'transport' => 'postMessage',
      'sanitize_callback' => 'internet_service_provider_pro_text_sanitization'
    ));
    $wp_customize->add_control( new VW_Themes_Seperator_custom_Control( $wp_customize, 'internet_service_provider_pro_pricing_plan_box_settings'.$i,
      array(
      'label' => __('Plan ','internet-service-provider-pro').$i,
      'section' => 'internet_service_provider_pro_pricing_plan'
    )));

    $wp_customize->add_setting('internet_service_provider_pro_pricing_plan_image'.$i,array(
      'default' => '',
      'sanitize_callback' => 'esc_url_raw',
    ));
    $wp_customize->add_control(
      new WP_Customize_Image_Control( $wp_customize,'internet_service_provider_pro_pricing_plan_image'.$i,array(
      'label' => __('Add Image','internet-service-provider-pro'),
      'description' => __('Dimension 21px * 21px','internet-service-provider-pro'),
      'section' => 'internet_service_provider_pro_pricing_plan',
      'settings' => 'internet_service_provider_pro_pricing_plan_image'.$i
    )));

    $wp_customize->add_setting('internet_service_provider_pro_pricing_plan_hover_image'.$i,array(
      'default' => '',
      'sanitize_callback' => 'esc_url_raw',
    ));
    $wp_customize->add_control(
      new WP_Customize_Image_Control( $wp_customize,'internet_service_provider_pro_pricing_plan_hover_image'.$i,array(
      'label' => __('Add Hover Image','internet-service-provider-pro'),
      'description' => __('Dimension 21px * 21px','internet-service-provider-pro'),
      'section' => 'internet_service_provider_pro_pricing_plan',
      'settings' => 'internet_service_provider_pro_pricing_plan_hover_image'.$i
    )));

    $wp_customize->add_setting('internet_service_provider_pro_pricing_plan_title'.$i,array(
      'default' => '',
      'sanitize_callback' => 'sanitize_text_field'
    ));
    $wp_customize->add_control('internet_service_provider_pro_pricing_plan_title'.$i,array(
      'label' => __('Plan Title ','internet-service-provider-pro'),
      'section' => 'internet_service_provider_pro_pricing_plan',
      'setting' => 'internet_service_provider_pro_pricing_plan_title'.$i,
      'type'    => 'text'
    ));

    $wp_customize->add_setting('internet_service_provider_pro_pricing_plan_text'.$i,array(
      'default' => '',
      'sanitize_callback' => 'sanitize_text_field'
    ));
    $wp_customize->add_control('internet_service_provider_pro_pricing_plan_text'.$i,array(
      'label' => __('Plan Text ','internet-service-provider-pro'),
      'section' => 'internet_service_provider_pro_pricing_plan',
      'setting' => 'internet_service_provider_pro_pricing_plan_text'.$i,
      'type'    => 'text'
    ));

    $wp_customize->add_setting('internet_service_provider_pro_pricing_plan_price'.$i,array(
      'default' => '',
      'sanitize_callback' => 'sanitize_text_field'
    ));
    $wp_customize->add_control('internet_service_provider_pro_pricing_plan_price'.$i,array(
      'label' => __('Plan Price ','internet-service-provider-pro'),
      'section' => 'internet_service_provider_pro_pricing_plan',
      'setting' => 'internet_service_provider_pro_pricing_plan_price'.$i,
      'type'    => 'text'
    ));

    $wp_customize->add_setting('internet_service_provider_pro_pricing_plan_price_cur'.$i,array(
      'default' => '',
      'sanitize_callback' => 'sanitize_text_field'
    ));
    $wp_customize->add_control('internet_service_provider_pro_pricing_plan_price_cur'.$i,array(
      'label' => __('Plan Price Currency ','internet-service-provider-pro'),
      'section' => 'internet_service_provider_pro_pricing_plan',
      'setting' => 'internet_service_provider_pro_pricing_plan_price_cur'.$i,
      'type'    => 'text'
    ));
    $wp_customize->add_setting('internet_service_provider_pro_pricing_plan_duration'.$i,array(
      'default' => '',
      'sanitize_callback' => 'sanitize_text_field'
    ));
    $wp_customize->add_control('internet_service_provider_pro_pricing_plan_duration'.$i,array(
      'label' => __('Plan Package ','internet-service-provider-pro'),
      'section' => 'internet_service_provider_pro_pricing_plan',
      'setting' => 'internet_service_provider_pro_pricing_plan_duration'.$i,
      'type'    => 'text'
    ));

    $wp_customize->add_setting('internet_service_provider_pro_pricing_plan_short_text'.$i,array(
      'default' => '',
      'sanitize_callback' => 'sanitize_text_field'
    ));
    $wp_customize->add_control('internet_service_provider_pro_pricing_plan_short_text'.$i,array(
      'label' => __('Short Text ','internet-service-provider-pro'),
      'section' => 'internet_service_provider_pro_pricing_plan',
      'setting' => 'internet_service_provider_pro_pricing_plan_short_text'.$i,
      'type'    => 'text'
    ));

    $wp_customize->add_setting('internet_service_provider_pro_pricing_plan_starter_features_heading'.$i,array(
      'default' => '',
      'sanitize_callback' => 'sanitize_text_field'
    ));
    $wp_customize->add_control('internet_service_provider_pro_pricing_plan_starter_features_heading'.$i,array(
      'label' => __('Feature Heading ','internet-service-provider-pro'),
      'section' => 'internet_service_provider_pro_pricing_plan',
      'setting' => 'internet_service_provider_pro_pricing_plan_starter_features_heading'.$i,
      'type'    => 'text'
    ));

    $wp_customize->add_setting('internet_service_provider_pro_pricing_plan_feature_no'.$i,array(
      'default' => '',
      'sanitize_callback' => 'sanitize_text_field'
    ));
    $wp_customize->add_control('internet_service_provider_pro_pricing_plan_feature_no'.$i,array(
      'label' => __('No Of Features To Show ','internet-service-provider-pro'),
      'section' => 'internet_service_provider_pro_pricing_plan',
      'setting' => 'internet_service_provider_pro_pricing_plan_feature_no'.$i,
      'type'    => 'number'
    ));

    $plan_feature=get_theme_mod('internet_service_provider_pro_pricing_plan_feature_no'.$i);
    for($j=1;$j<=$plan_feature;$j++)
    { 
      $wp_customize->add_setting('internet_service_provider_pro_pricing_plan_feature_title'.$i.$j,array(
        'default' => '',
        'sanitize_callback' => 'sanitize_text_field'
      ));
      $wp_customize->add_control('internet_service_provider_pro_pricing_plan_feature_title'.$i.$j,array(
        'label' => __('Feature ','internet-service-provider-pro').$j,
        'section' => 'internet_service_provider_pro_pricing_plan',
        'setting' => 'internet_service_provider_pro_pricing_plan_feature_title'.$i.$j,
        'type'    => 'text'
      ));

    }
    $wp_customize->add_setting('internet_service_provider_pro_pricing_plan_button_title'.$i,array(
      'default' => '',
      'sanitize_callback' => 'sanitize_text_field'
    ));
    $wp_customize->add_control('internet_service_provider_pro_pricing_plan_button_title'.$i,array(
      'label' => __('Plan Button Title ','internet-service-provider-pro'),
      'section' => 'internet_service_provider_pro_pricing_plan',
      'setting' => 'internet_service_provider_pro_pricing_plan_button_title'.$i,
      'type'    => 'text'
    ));

    $wp_customize->add_setting('internet_service_provider_pro_pricing_plan_button_url'.$i,array(
      'default' => '',
      'sanitize_callback' => 'sanitize_text_field'
    ));
    $wp_customize->add_control('internet_service_provider_pro_pricing_plan_button_url'.$i,array(
      'label' => __('Plan Button Url ','internet-service-provider-pro'),
      'section' => 'internet_service_provider_pro_pricing_plan',
      'setting' => 'internet_service_provider_pro_pricing_plan_button_url'.$i,
      'type'    => 'text'
    ));

    $wp_customize->add_setting( 'internet_service_provider_pro_pricing_plan_recommended'.$i, array(
      'default' => 1,
      'transport' => 'refresh',
      'sanitize_callback' => 'internet_service_provider_pro_switch_sanitization'
    ));
    $wp_customize->add_control( new internet_service_provider_pro_Toggle_Switch_Custom_control( $wp_customize, 'internet_service_provider_pro_pricing_plan_recommended'.$i,
      array(
          'label' => __( 'Recommended','internet-service-provider-pro' ),
          'section' => 'internet_service_provider_pro_pricing_plan'
      )
    ) );

  }

  $wp_customize->add_setting( 'internet_service_provider_pro_pricing_plan_carousel_loop',
   array(
      'default' => 1,
      'transport' => 'refresh',
      'sanitize_callback' => 'internet_service_provider_pro_switch_sanitization'
  )); 
  $wp_customize->add_control( new internet_service_provider_pro_Toggle_Switch_Custom_control( $wp_customize, 'internet_service_provider_pro_pricing_plan_carousel_loop',
     array(
        'label' => esc_html__( 'Carousel Loop', 'internet-service-provider-pro' ),
        'section' => 'internet_service_provider_pro_pricing_plan'
  )));

  $wp_customize->add_setting('internet_service_provider_pro_pricing_plan_carousel_speed',array(
    'default' => '',
    'sanitize_callback' => 'sanitize_text_field'
  ));
  $wp_customize->add_control('internet_service_provider_pro_pricing_plan_carousel_speed',array(
    'label' => __('Carousel Speed','internet-service-provider-pro'),
    'description'=>__('Ex. 1000 for One second','internet-service-provider-pro'),
    'section' => 'internet_service_provider_pro_pricing_plan',
    'setting' => 'internet_service_provider_pro_pricing_plan_carousel_speed',
    'type'    => 'number'
  ));


  $wp_customize->add_setting( 'internet_service_provider_pro_pricing_plan_color_settings',
    array(
    'default' => '',
    'transport' => 'postMessage',
    'sanitize_callback' => 'internet_service_provider_pro_text_sanitization'
  ));
  $wp_customize->add_control( new VW_Themes_Seperator_custom_Control( $wp_customize, 'internet_service_provider_pro_pricing_plan_color_settings',
  array(
    'label' => __('Section Color & Typography','internet-service-provider-pro'),
    'section' => 'internet_service_provider_pro_pricing_plan'
  )));

  $wp_customize->add_setting( 'internet_service_provider_pro_pricing_plan_tagline_ct_pallete',
    array(
      'default' => '',
      'transport' => 'postMessage',
      'sanitize_callback' => 'internet_service_provider_pro_text_sanitization'
  ));
  $wp_customize->add_control( new VW_Themes_Seperator_custom_Control( $wp_customize, 'internet_service_provider_pro_pricing_plan_tagline_ct_pallete',
    array(
    'label' => __('Tagline Typography ','internet-service-provider-pro'),
    'section' => 'internet_service_provider_pro_pricing_plan'
  )));

  $wp_customize->add_setting( 'internet_service_provider_pro_pricing_plan_tagline_color', array(
    'default' => '',
    'sanitize_callback' => 'sanitize_hex_color'
  ));
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'internet_service_provider_pro_pricing_plan_tagline_color', array(
    'label' => __('Color', 'internet-service-provider-pro'),
    'section' => 'internet_service_provider_pro_pricing_plan',
    'settings' => 'internet_service_provider_pro_pricing_plan_tagline_color',
  )));
  $wp_customize->add_setting('internet_service_provider_pro_pricing_plan_tagline_font_family',array(
    'default' => '',
    'capability' => 'edit_theme_options',
    'sanitize_callback' => 'sanitize_text_field'
  ));
  $wp_customize->add_control(
    'internet_service_provider_pro_pricing_plan_tagline_font_family', array(
    'section'  => 'internet_service_provider_pro_pricing_plan',
    'label'    => __('Font Family','internet-service-provider-pro'),
    'type'     => 'select',
    'choices'  => $font_array,
  ));

  $wp_customize->add_setting('internet_service_provider_pro_pricing_plan_tagline_font_size',array(
    'default' => '',
    'sanitize_callback' => 'sanitize_text_field'
  ));
  $wp_customize->add_control('internet_service_provider_pro_pricing_plan_tagline_font_size',array(
    'label' => __('Font Size','internet-service-provider-pro'),
    'description' => __('Add font size in px','internet-service-provider-pro'),
    'section' => 'internet_service_provider_pro_pricing_plan',
    'setting' => 'internet_service_provider_pro_pricing_plan_tagline_font_size',
    'type'    => 'number'
  ));

  $wp_customize->add_setting( 'internet_service_provider_pro_pricing_plan_main_heading_ct_pallete',
    array(
      'default' => '',
      'transport' => 'postMessage',
      'sanitize_callback' => 'internet_service_provider_pro_text_sanitization'
  ));
  $wp_customize->add_control( new VW_Themes_Seperator_custom_Control( $wp_customize, 'internet_service_provider_pro_pricing_plan_main_heading_ct_pallete',
    array(
    'label' => __('Main Heading Typography ','internet-service-provider-pro'),
    'section' => 'internet_service_provider_pro_pricing_plan'
  )));

  $wp_customize->add_setting( 'internet_service_provider_pro_pricing_plan_main_heading_color', array(
    'default' => '',
    'sanitize_callback' => 'sanitize_hex_color'
  ));
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'internet_service_provider_pro_pricing_plan_main_heading_color', array(
    'label' => __('Color', 'internet-service-provider-pro'),
    'section' => 'internet_service_provider_pro_pricing_plan',
    'settings' => 'internet_service_provider_pro_pricing_plan_main_heading_color',
  )));
  $wp_customize->add_setting('internet_service_provider_pro_pricing_plan_main_heading_font_family',array(
    'default' => '',
    'capability' => 'edit_theme_options',
    'sanitize_callback' => 'sanitize_text_field'
  ));
  $wp_customize->add_control(
    'internet_service_provider_pro_pricing_plan_main_heading_font_family', array(
    'section'  => 'internet_service_provider_pro_pricing_plan',
    'label'    => __('Font Family','internet-service-provider-pro'),
    'type'     => 'select',
    'choices'  => $font_array,
  ));

  $wp_customize->add_setting('internet_service_provider_pro_pricing_plan_main_heading_font_size',array(
    'default' => '',
    'sanitize_callback' => 'sanitize_text_field'
  ));
  $wp_customize->add_control('internet_service_provider_pro_pricing_plan_main_heading_font_size',array(
    'label' => __('Font Size','internet-service-provider-pro'),
    'description' => __('Add font size in px','internet-service-provider-pro'),
    'section' => 'internet_service_provider_pro_pricing_plan',
    'setting' => 'internet_service_provider_pro_pricing_plan_main_heading_font_size',
    'type'    => 'number'
  ));

  $wp_customize->add_setting( 'internet_service_provider_pro_pricing_plan_section_button_ct_pallete',
    array(
      'default' => '',
      'transport' => 'postMessage',
      'sanitize_callback' => 'internet_service_provider_pro_text_sanitization'
  ));
  $wp_customize->add_control( new VW_Themes_Seperator_custom_Control( $wp_customize, 'internet_service_provider_pro_pricing_plan_section_button_ct_pallete',
    array(
    'label' => __('Section Button Typography ','internet-service-provider-pro'),
    'section' => 'internet_service_provider_pro_pricing_plan'
  )));

  $wp_customize->add_setting( 'internet_service_provider_pro_pricing_plan_section_button_color', array(
    'default' => '',
    'sanitize_callback' => 'sanitize_hex_color'
  ));
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'internet_service_provider_pro_pricing_plan_section_button_color', array(
    'label' => __('Color', 'internet-service-provider-pro'),
    'section' => 'internet_service_provider_pro_pricing_plan',
    'settings' => 'internet_service_provider_pro_pricing_plan_section_button_color',
  )));
  $wp_customize->add_setting('internet_service_provider_pro_pricing_plan_section_button_font_family',array(
    'default' => '',
    'capability' => 'edit_theme_options',
    'sanitize_callback' => 'sanitize_text_field'
  ));
  $wp_customize->add_control(
    'internet_service_provider_pro_pricing_plan_section_button_font_family', array(
    'section'  => 'internet_service_provider_pro_pricing_plan',
    'label'    => __('Font Family','internet-service-provider-pro'),
    'type'     => 'select',
    'choices'  => $font_array,
  ));

  $wp_customize->add_setting('internet_service_provider_pro_pricing_plan_section_button_font_size',array(
    'default' => '',
    'sanitize_callback' => 'sanitize_text_field'
  ));
  $wp_customize->add_control('internet_service_provider_pro_pricing_plan_section_button_font_size',array(
    'label' => __('Font Size','internet-service-provider-pro'),
    'description' => __('Add font size in px','internet-service-provider-pro'),
    'section' => 'internet_service_provider_pro_pricing_plan',
    'setting' => 'internet_service_provider_pro_pricing_plan_section_button_font_size',
    'type'    => 'number'
  ));

  $wp_customize->add_setting( 'internet_service_provider_pro_pricing_plan_section_button_bgcolor', array(
    'default' => '',
    'sanitize_callback' => 'sanitize_hex_color'
  ));
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'internet_service_provider_pro_pricing_plan_section_button_bgcolor', array(
    'label' => __('Background Color', 'internet-service-provider-pro'),
    'section' => 'internet_service_provider_pro_pricing_plan',
    'settings' => 'internet_service_provider_pro_pricing_plan_section_button_bgcolor',
  )));

  $wp_customize->add_setting( 'internet_service_provider_pro_pricing_plan_section_button_hover_bgcolor', array(
    'default' => '',
    'sanitize_callback' => 'sanitize_hex_color'
  ));
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'internet_service_provider_pro_pricing_plan_section_button_hover_bgcolor', array(
    'label' => __('Hover Background Color', 'internet-service-provider-pro'),
    'section' => 'internet_service_provider_pro_pricing_plan',
    'settings' => 'internet_service_provider_pro_pricing_plan_section_button_hover_bgcolor',
  )));

  $wp_customize->add_setting( 'internet_service_provider_pro_pricing_plan_section_button_text_color_hover', array(
    'default' => '',
    'sanitize_callback' => 'sanitize_hex_color'
  ));
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'internet_service_provider_pro_pricing_plan_section_button_text_color_hover', array(
    'label' => __('Hover Text Color', 'internet-service-provider-pro'),
    'section' => 'internet_service_provider_pro_pricing_plan',
    'settings' => 'internet_service_provider_pro_pricing_plan_section_button_text_color_hover',
  )));

  $wp_customize->add_setting( 'internet_service_provider_pro_pricing_plan_title_ct_pallete',
    array(
      'default' => '',
      'transport' => 'postMessage',
      'sanitize_callback' => 'internet_service_provider_pro_text_sanitization'
  ));
  $wp_customize->add_control( new VW_Themes_Seperator_custom_Control( $wp_customize, 'internet_service_provider_pro_pricing_plan_title_ct_pallete',
    array(
    'label' => __('Plan Title Typography ','internet-service-provider-pro'),
    'section' => 'internet_service_provider_pro_pricing_plan'
  )));

  $wp_customize->add_setting( 'internet_service_provider_pro_pricing_plan_title_color', array(
    'default' => '',
    'sanitize_callback' => 'sanitize_hex_color'
  ));
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'internet_service_provider_pro_pricing_plan_title_color', array(
    'label' => __('Color', 'internet-service-provider-pro'),
    'section' => 'internet_service_provider_pro_pricing_plan',
    'settings' => 'internet_service_provider_pro_pricing_plan_title_color',
  )));
  $wp_customize->add_setting('internet_service_provider_pro_pricing_plan_title_font_family',array(
    'default' => '',
    'capability' => 'edit_theme_options',
    'sanitize_callback' => 'sanitize_text_field'
  ));
  $wp_customize->add_control(
    'internet_service_provider_pro_pricing_plan_title_font_family', array(
    'section'  => 'internet_service_provider_pro_pricing_plan',
    'label'    => __('Font Family','internet-service-provider-pro'),
    'type'     => 'select',
    'choices'  => $font_array,
  ));

  $wp_customize->add_setting('internet_service_provider_pro_pricing_plan_title_font_size',array(
    'default' => '',
    'sanitize_callback' => 'sanitize_text_field'
  ));
  $wp_customize->add_control('internet_service_provider_pro_pricing_plan_title_font_size',array(
    'label' => __('Font Size','internet-service-provider-pro'),
    'description' => __('Add font size in px','internet-service-provider-pro'),
    'section' => 'internet_service_provider_pro_pricing_plan',
    'setting' => 'internet_service_provider_pro_pricing_plan_title_font_size',
    'type'    => 'number'
  ));

  $wp_customize->add_setting( 'internet_service_provider_pro_pricing_plan_text_ct_pallete',
    array(
      'default' => '',
      'transport' => 'postMessage',
      'sanitize_callback' => 'internet_service_provider_pro_text_sanitization'
  ));
  $wp_customize->add_control( new VW_Themes_Seperator_custom_Control( $wp_customize, 'internet_service_provider_pro_pricing_plan_text_ct_pallete',
    array(
    'label' => __('Plan Text Typography ','internet-service-provider-pro'),
    'section' => 'internet_service_provider_pro_pricing_plan'
  )));

  $wp_customize->add_setting( 'internet_service_provider_pro_pricing_plan_text_color', array(
    'default' => '',
    'sanitize_callback' => 'sanitize_hex_color'
  ));
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'internet_service_provider_pro_pricing_plan_text_color', array(
    'label' => __('Color', 'internet-service-provider-pro'),
    'section' => 'internet_service_provider_pro_pricing_plan',
    'settings' => 'internet_service_provider_pro_pricing_plan_text_color',
  )));
  $wp_customize->add_setting('internet_service_provider_pro_pricing_plan_text_font_family',array(
    'default' => '',
    'capability' => 'edit_theme_options',
    'sanitize_callback' => 'sanitize_text_field'
  ));
  $wp_customize->add_control(
    'internet_service_provider_pro_pricing_plan_text_font_family', array(
    'section'  => 'internet_service_provider_pro_pricing_plan',
    'label'    => __('Font Family','internet-service-provider-pro'),
    'type'     => 'select',
    'choices'  => $font_array,
  ));

  $wp_customize->add_setting('internet_service_provider_pro_pricing_plan_text_font_size',array(
    'default' => '',
    'sanitize_callback' => 'sanitize_text_field'
  ));
  $wp_customize->add_control('internet_service_provider_pro_pricing_plan_text_font_size',array(
    'label' => __('Font Size','internet-service-provider-pro'),
    'description' => __('Add font size in px','internet-service-provider-pro'),
    'section' => 'internet_service_provider_pro_pricing_plan',
    'setting' => 'internet_service_provider_pro_pricing_plan_text_font_size',
    'type'    => 'number'
  ));


  $wp_customize->add_setting( 'internet_service_provider_pro_pricing_plan_price_ct_pallete',
    array(
      'default' => '',
      'transport' => 'postMessage',
      'sanitize_callback' => 'internet_service_provider_pro_text_sanitization'
  ));
  $wp_customize->add_control( new VW_Themes_Seperator_custom_Control( $wp_customize, 'internet_service_provider_pro_pricing_plan_price_ct_pallete',
    array(
    'label' => __('Plan Price Typography ','internet-service-provider-pro'),
    'section' => 'internet_service_provider_pro_pricing_plan'
  )));

  $wp_customize->add_setting( 'internet_service_provider_pro_pricing_plan_price_color', array(
    'default' => '',
    'sanitize_callback' => 'sanitize_hex_color'
  ));
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'internet_service_provider_pro_pricing_plan_price_color', array(
    'label' => __('Color', 'internet-service-provider-pro'),
    'section' => 'internet_service_provider_pro_pricing_plan',
    'settings' => 'internet_service_provider_pro_pricing_plan_price_color',
  )));
  $wp_customize->add_setting('internet_service_provider_pro_pricing_plan_price_font_family',array(
    'default' => '',
    'capability' => 'edit_theme_options',
    'sanitize_callback' => 'sanitize_text_field'
  ));
  $wp_customize->add_control(
    'internet_service_provider_pro_pricing_plan_price_font_family', array(
    'section'  => 'internet_service_provider_pro_pricing_plan',
    'label'    => __('Font Family','internet-service-provider-pro'),
    'type'     => 'select',
    'choices'  => $font_array,
  ));

  $wp_customize->add_setting('internet_service_provider_pro_pricing_plan_price_font_size',array(
    'default' => '',
    'sanitize_callback' => 'sanitize_text_field'
  ));
  $wp_customize->add_control('internet_service_provider_pro_pricing_plan_price_font_size',array(
    'label' => __('Font Size','internet-service-provider-pro'),
    'description' => __('Add font size in px','internet-service-provider-pro'),
    'section' => 'internet_service_provider_pro_pricing_plan',
    'setting' => 'internet_service_provider_pro_pricing_plan_price_font_size',
    'type'    => 'number'
  ));

  $wp_customize->add_setting( 'internet_service_provider_pro_pricing_plan_package_ct_pallete',
    array(
      'default' => '',
      'transport' => 'postMessage',
      'sanitize_callback' => 'internet_service_provider_pro_text_sanitization'
  ));
  $wp_customize->add_control( new VW_Themes_Seperator_custom_Control( $wp_customize, 'internet_service_provider_pro_pricing_plan_package_ct_pallete',
    array(
    'label' => __('Plan Package Typography ','internet-service-provider-pro'),
    'section' => 'internet_service_provider_pro_pricing_plan'
  )));

  $wp_customize->add_setting( 'internet_service_provider_pro_pricing_plan_package_color', array(
    'default' => '',
    'sanitize_callback' => 'sanitize_hex_color'
  ));
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'internet_service_provider_pro_pricing_plan_package_color', array(
    'label' => __('Color', 'internet-service-provider-pro'),
    'section' => 'internet_service_provider_pro_pricing_plan',
    'settings' => 'internet_service_provider_pro_pricing_plan_package_color',
  )));
  $wp_customize->add_setting('internet_service_provider_pro_pricing_plan_package_font_family',array(
    'default' => '',
    'capability' => 'edit_theme_options',
    'sanitize_callback' => 'sanitize_text_field'
  ));
  $wp_customize->add_control(
    'internet_service_provider_pro_pricing_plan_package_font_family', array(
    'section'  => 'internet_service_provider_pro_pricing_plan',
    'label'    => __('Font Family','internet-service-provider-pro'),
    'type'     => 'select',
    'choices'  => $font_array,
  ));

  $wp_customize->add_setting('internet_service_provider_pro_pricing_plan_package_font_size',array(
    'default' => '',
    'sanitize_callback' => 'sanitize_text_field'
  ));
  $wp_customize->add_control('internet_service_provider_pro_pricing_plan_package_font_size',array(
    'label' => __('Font Size','internet-service-provider-pro'),
    'description' => __('Add font size in px','internet-service-provider-pro'),
    'section' => 'internet_service_provider_pro_pricing_plan',
    'setting' => 'internet_service_provider_pro_pricing_plan_package_font_size',
    'type'    => 'number'
  ));

  $wp_customize->add_setting( 'internet_service_provider_pro_pricing_plan_feature_heading_ct_pallete',
    array(
      'default' => '',
      'transport' => 'postMessage',
      'sanitize_callback' => 'internet_service_provider_pro_text_sanitization'
  ));
  $wp_customize->add_control( new VW_Themes_Seperator_custom_Control( $wp_customize, 'internet_service_provider_pro_pricing_plan_feature_heading_ct_pallete',
    array(
    'label' => __('Feature Heading Typography ','internet-service-provider-pro'),
    'section' => 'internet_service_provider_pro_pricing_plan'
  )));

  $wp_customize->add_setting( 'internet_service_provider_pro_pricing_plan_feature_heading_color', array(
    'default' => '',
    'sanitize_callback' => 'sanitize_hex_color'
  ));
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'internet_service_provider_pro_pricing_plan_feature_heading_color', array(
    'label' => __('Color', 'internet-service-provider-pro'),
    'section' => 'internet_service_provider_pro_pricing_plan',
    'settings' => 'internet_service_provider_pro_pricing_plan_feature_heading_color',
  )));
  $wp_customize->add_setting('internet_service_provider_pro_pricing_plan_feature_heading_font_family',array(
    'default' => '',
    'capability' => 'edit_theme_options',
    'sanitize_callback' => 'sanitize_text_field'
  ));
  $wp_customize->add_control(
    'internet_service_provider_pro_pricing_plan_feature_heading_font_family', array(
    'section'  => 'internet_service_provider_pro_pricing_plan',
    'label'    => __('Font Family','internet-service-provider-pro'),
    'type'     => 'select',
    'choices'  => $font_array,
  ));

  $wp_customize->add_setting('internet_service_provider_pro_pricing_plan_feature_heading_font_size',array(
    'default' => '',
    'sanitize_callback' => 'sanitize_text_field'
  ));
  $wp_customize->add_control('internet_service_provider_pro_pricing_plan_feature_heading_font_size',array(
    'label' => __('Font Size','internet-service-provider-pro'),
    'description' => __('Add font size in px','internet-service-provider-pro'),
    'section' => 'internet_service_provider_pro_pricing_plan',
    'setting' => 'internet_service_provider_pro_pricing_plan_feature_heading_font_size',
    'type'    => 'number'
  ));

  $wp_customize->add_setting( 'internet_service_provider_pro_pricing_plan_feature_heading_icon_color', array(
    'default' => '',
    'sanitize_callback' => 'sanitize_hex_color'
  ));
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'internet_service_provider_pro_pricing_plan_feature_heading_icon_color', array(
    'label' => __('Icon Color', 'internet-service-provider-pro'),
    'section' => 'internet_service_provider_pro_pricing_plan',
    'settings' => 'internet_service_provider_pro_pricing_plan_feature_heading_icon_color',
  )));

  $wp_customize->add_setting( 'internet_service_provider_pro_pricing_plan_feature_ct_pallete',
    array(
      'default' => '',
      'transport' => 'postMessage',
      'sanitize_callback' => 'internet_service_provider_pro_text_sanitization'
  ));
  $wp_customize->add_control( new VW_Themes_Seperator_custom_Control( $wp_customize, 'internet_service_provider_pro_pricing_plan_feature_ct_pallete',
    array(
    'label' => __('Plan Feature Typography ','internet-service-provider-pro'),
    'section' => 'internet_service_provider_pro_pricing_plan'
  )));

  $wp_customize->add_setting( 'internet_service_provider_pro_pricing_plan_feature_color', array(
    'default' => '',
    'sanitize_callback' => 'sanitize_hex_color'
  ));
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'internet_service_provider_pro_pricing_plan_feature_color', array(
    'label' => __('Color', 'internet-service-provider-pro'),
    'section' => 'internet_service_provider_pro_pricing_plan',
    'settings' => 'internet_service_provider_pro_pricing_plan_feature_color',
  )));
  $wp_customize->add_setting('internet_service_provider_pro_pricing_plan_feature_font_family',array(
    'default' => '',
    'capability' => 'edit_theme_options',
    'sanitize_callback' => 'sanitize_text_field'
  ));
  $wp_customize->add_control(
    'internet_service_provider_pro_pricing_plan_feature_font_family', array(
    'section'  => 'internet_service_provider_pro_pricing_plan',
    'label'    => __('Font Family','internet-service-provider-pro'),
    'type'     => 'select',
    'choices'  => $font_array,
  ));

  $wp_customize->add_setting('internet_service_provider_pro_pricing_plan_feature_font_size',array(
    'default' => '',
    'sanitize_callback' => 'sanitize_text_field'
  ));
  $wp_customize->add_control('internet_service_provider_pro_pricing_plan_feature_font_size',array(
    'label' => __('Font Size','internet-service-provider-pro'),
    'description' => __('Add font size in px','internet-service-provider-pro'),
    'section' => 'internet_service_provider_pro_pricing_plan',
    'setting' => 'internet_service_provider_pro_pricing_plan_feature_font_size',
    'type'    => 'number'
  ));

  $wp_customize->add_setting( 'internet_service_provider_pro_pricing_plan_feature_icon_color', array(
    'default' => '',
    'sanitize_callback' => 'sanitize_hex_color'
  ));
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'internet_service_provider_pro_pricing_plan_feature_icon_color', array(
    'label' => __('Features Icon Color', 'internet-service-provider-pro'),
    'section' => 'internet_service_provider_pro_pricing_plan',
    'settings' => 'internet_service_provider_pro_pricing_plan_feature_icon_color',
  )));

  $wp_customize->add_setting( 'internet_service_provider_pro_pricing_plan_feature_icon_color2', array(
    'default' => '',
    'sanitize_callback' => 'sanitize_hex_color'
  ));
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'internet_service_provider_pro_pricing_plan_feature_icon_color2', array(
    'label' => '',
    'section' => 'internet_service_provider_pro_pricing_plan',
    'settings' => 'internet_service_provider_pro_pricing_plan_feature_icon_color2',
  )));

  $wp_customize->add_setting( 'internet_service_provider_pro_pricing_plan_feature_button_ct_pallete',
    array(
      'default' => '',
      'transport' => 'postMessage',
      'sanitize_callback' => 'internet_service_provider_pro_text_sanitization'
  ));
  $wp_customize->add_control( new VW_Themes_Seperator_custom_Control( $wp_customize, 'internet_service_provider_pro_pricing_plan_feature_button_ct_pallete',
    array(
    'label' => __('Plan Button Typography ','internet-service-provider-pro'),
    'section' => 'internet_service_provider_pro_pricing_plan'
  )));

  $wp_customize->add_setting( 'internet_service_provider_pro_pricing_plan_button_color', array(
    'default' => '',
    'sanitize_callback' => 'sanitize_hex_color'
  ));
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'internet_service_provider_pro_pricing_plan_button_color', array(
    'label' => __('Color', 'internet-service-provider-pro'),
    'section' => 'internet_service_provider_pro_pricing_plan',
    'settings' => 'internet_service_provider_pro_pricing_plan_button_color',
  )));
  $wp_customize->add_setting('internet_service_provider_pro_pricing_plan_button_font_family',array(
    'default' => '',
    'capability' => 'edit_theme_options',
    'sanitize_callback' => 'sanitize_text_field'
  ));
  $wp_customize->add_control(
    'internet_service_provider_pro_pricing_plan_button_font_family', array(
    'section'  => 'internet_service_provider_pro_pricing_plan',
    'label'    => __('Font Family','internet-service-provider-pro'),
    'type'     => 'select',
    'choices'  => $font_array,
  ));

  $wp_customize->add_setting('internet_service_provider_pro_pricing_plan_button_font_size',array(
    'default' => '',
    'sanitize_callback' => 'sanitize_text_field'
  ));
  $wp_customize->add_control('internet_service_provider_pro_pricing_plan_button_font_size',array(
    'label' => __('Font Size','internet-service-provider-pro'),
    'description' => __('Add font size in px','internet-service-provider-pro'),
    'section' => 'internet_service_provider_pro_pricing_plan',
    'setting' => 'internet_service_provider_pro_pricing_plan_button_font_size',
    'type'    => 'number'
  ));

  $wp_customize->add_setting( 'internet_service_provider_pro_pricing_plan_button_bgcolor', array(
    'default' => '',
    'sanitize_callback' => 'sanitize_hex_color'
  ));
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'internet_service_provider_pro_pricing_plan_button_bgcolor', array(
    'label' => __('Background Color', 'internet-service-provider-pro'),
    'section' => 'internet_service_provider_pro_pricing_plan',
    'settings' => 'internet_service_provider_pro_pricing_plan_button_bgcolor',
  )));

  $wp_customize->add_setting( 'internet_service_provider_pro_pricing_plan_button_bgcolor_hover', array(
    'default' => '',
    'sanitize_callback' => 'sanitize_hex_color'
  ));
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'internet_service_provider_pro_pricing_plan_button_bgcolor_hover', array(
    'label' => __('Hover Background Color', 'internet-service-provider-pro'),
    'section' => 'internet_service_provider_pro_pricing_plan',
    'settings' => 'internet_service_provider_pro_pricing_plan_button_bgcolor_hover',
  )));

  $wp_customize->add_setting( 'internet_service_provider_pro_pricing_plan_button_color_hover', array(
    'default' => '',
    'sanitize_callback' => 'sanitize_hex_color'
  ));
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'internet_service_provider_pro_pricing_plan_button_color_hover', array(
    'label' => __('Hover Color', 'internet-service-provider-pro'),
    'section' => 'internet_service_provider_pro_pricing_plan',
    'settings' => 'internet_service_provider_pro_pricing_plan_button_color_hover',
  )));

  $wp_customize->add_setting( 'internet_service_provider_pro_pricing_plan_box_bgcolor', array(
    'default' => '',
    'sanitize_callback' => 'sanitize_hex_color'
  ));
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'internet_service_provider_pro_pricing_plan_box_bgcolor', array(
    'label' => __('Box Background Color', 'internet-service-provider-pro'),
    'section' => 'internet_service_provider_pro_pricing_plan',
    'settings' => 'internet_service_provider_pro_pricing_plan_box_bgcolor',
  )));

  $wp_customize->add_setting( 'internet_service_provider_pro_pricing_plan_recommended_ct_pallete',
    array(
      'default' => '',
      'transport' => 'postMessage',
      'sanitize_callback' => 'internet_service_provider_pro_text_sanitization'
  ));
  $wp_customize->add_control( new VW_Themes_Seperator_custom_Control( $wp_customize, 'internet_service_provider_pro_pricing_plan_recommended_ct_pallete',
    array(
    'label' => __('Recommended Plan Typography ','internet-service-provider-pro'),
    'section' => 'internet_service_provider_pro_pricing_plan'
  )));

   $wp_customize->add_setting( 'internet_service_provider_pro_pricing_plan_recommended_title_ct_pallete',
    array(
      'default' => '',
      'transport' => 'postMessage',
      'sanitize_callback' => 'internet_service_provider_pro_text_sanitization'
  ));
  $wp_customize->add_control( new VW_Themes_Seperator_custom_Control( $wp_customize, 'internet_service_provider_pro_pricing_plan_recommended_title_ct_pallete',
    array(
    'label' => __('Recommended Title Typography ','internet-service-provider-pro'),
    'section' => 'internet_service_provider_pro_pricing_plan'
  )));

  $wp_customize->add_setting( 'internet_service_provider_pro_pricing_plan_recommended_title_color', array(
    'default' => '',
    'sanitize_callback' => 'sanitize_hex_color'
  ));
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'internet_service_provider_pro_pricing_plan_recommended_title_color', array(
    'label' => __('Color', 'internet-service-provider-pro'),
    'section' => 'internet_service_provider_pro_pricing_plan',
    'settings' => 'internet_service_provider_pro_pricing_plan_recommended_title_color',
  )));
  $wp_customize->add_setting('internet_service_provider_pro_pricing_plan_recommended_title_font_family',array(
    'default' => '',
    'capability' => 'edit_theme_options',
    'sanitize_callback' => 'sanitize_text_field'
  ));
  $wp_customize->add_control(
    'internet_service_provider_pro_pricing_plan_recommended_title_font_family', array(
    'section'  => 'internet_service_provider_pro_pricing_plan',
    'label'    => __('Font Family','internet-service-provider-pro'),
    'type'     => 'select',
    'choices'  => $font_array,
  ));

  $wp_customize->add_setting('internet_service_provider_pro_pricing_plan_recommended_title_font_size',array(
    'default' => '',
    'sanitize_callback' => 'sanitize_text_field'
  ));
  $wp_customize->add_control('internet_service_provider_pro_pricing_plan_recommended_title_font_size',array(
    'label' => __('Font Size','internet-service-provider-pro'),
    'description' => __('Add font size in px','internet-service-provider-pro'),
    'section' => 'internet_service_provider_pro_pricing_plan',
    'setting' => 'internet_service_provider_pro_pricing_plan_recommended_title_font_size',
    'type'    => 'number'
  ));

  $wp_customize->add_setting( 'internet_service_provider_pro_pricing_plan_recommended_or_text_ct_pallete',
    array(
      'default' => '',
      'transport' => 'postMessage',
      'sanitize_callback' => 'internet_service_provider_pro_text_sanitization'
  ));
  $wp_customize->add_control( new VW_Themes_Seperator_custom_Control( $wp_customize, 'internet_service_provider_pro_pricing_plan_recommended_or_text_ct_pallete',
    array(
    'label' => __('Recommended Or Typography ','internet-service-provider-pro'),
    'section' => 'internet_service_provider_pro_pricing_plan'
  )));

  $wp_customize->add_setting( 'internet_service_provider_pro_pricing_plan_recommended_or_text_color', array(
    'default' => '',
    'sanitize_callback' => 'sanitize_hex_color'
  ));
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'internet_service_provider_pro_pricing_plan_recommended_or_text_color', array(
    'label' => __('Color', 'internet-service-provider-pro'),
    'section' => 'internet_service_provider_pro_pricing_plan',
    'settings' => 'internet_service_provider_pro_pricing_plan_recommended_or_text_color',
  )));
  $wp_customize->add_setting('internet_service_provider_pro_pricing_plan_recommended_or_text_font_family',array(
    'default' => '',
    'capability' => 'edit_theme_options',
    'sanitize_callback' => 'sanitize_text_field'
  ));
  $wp_customize->add_control(
    'internet_service_provider_pro_pricing_plan_recommended_or_text_font_family', array(
    'section'  => 'internet_service_provider_pro_pricing_plan',
    'label'    => __('Font Family','internet-service-provider-pro'),
    'type'     => 'select',
    'choices'  => $font_array,
  ));

  $wp_customize->add_setting('internet_service_provider_pro_pricing_plan_recommended_or_text_font_size',array(
    'default' => '',
    'sanitize_callback' => 'sanitize_text_field'
  ));
  $wp_customize->add_control('internet_service_provider_pro_pricing_plan_recommended_or_text_font_size',array(
    'label' => __('Font Size','internet-service-provider-pro'),
    'description' => __('Add font size in px','internet-service-provider-pro'),
    'section' => 'internet_service_provider_pro_pricing_plan',
    'setting' => 'internet_service_provider_pro_pricing_plan_recommended_or_text_font_size',
    'type'    => 'number'
  ));

  $wp_customize->add_setting( 'internet_service_provider_pro_pricing_plan_recommended_link_ct_pallete',
    array(
      'default' => '',
      'transport' => 'postMessage',
      'sanitize_callback' => 'internet_service_provider_pro_text_sanitization'
  ));
  $wp_customize->add_control( new VW_Themes_Seperator_custom_Control( $wp_customize, 'internet_service_provider_pro_pricing_plan_recommended_link_ct_pallete',
    array(
    'label' => __('Recommended Link Typography ','internet-service-provider-pro'),
    'section' => 'internet_service_provider_pro_pricing_plan'
  )));

  $wp_customize->add_setting( 'internet_service_provider_pro_pricing_plan_recommended_link_color', array(
    'default' => '',
    'sanitize_callback' => 'sanitize_hex_color'
  ));
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'internet_service_provider_pro_pricing_plan_recommended_link_color', array(
    'label' => __('Color', 'internet-service-provider-pro'),
    'section' => 'internet_service_provider_pro_pricing_plan',
    'settings' => 'internet_service_provider_pro_pricing_plan_recommended_link_color',
  )));
  $wp_customize->add_setting('internet_service_provider_pro_pricing_plan_recommended_link_font_family',array(
    'default' => '',
    'capability' => 'edit_theme_options',
    'sanitize_callback' => 'sanitize_text_field'
  ));
  $wp_customize->add_control(
    'internet_service_provider_pro_pricing_plan_recommended_link_font_family', array(
    'section'  => 'internet_service_provider_pro_pricing_plan',
    'label'    => __('Font Family','internet-service-provider-pro'),
    'type'     => 'select',
    'choices'  => $font_array,
  ));

  $wp_customize->add_setting('internet_service_provider_pro_pricing_plan_recommended_link_font_size',array(
    'default' => '',
    'sanitize_callback' => 'sanitize_text_field'
  ));
  $wp_customize->add_control('internet_service_provider_pro_pricing_plan_recommended_link_font_size',array(
    'label' => __('Font Size','internet-service-provider-pro'),
    'description' => __('Add font size in px','internet-service-provider-pro'),
    'section' => 'internet_service_provider_pro_pricing_plan',
    'setting' => 'internet_service_provider_pro_pricing_plan_recommended_link_font_size',
    'type'    => 'number'
  ));

  $wp_customize->add_setting( 'internet_service_provider_pro_pricing_plan_recommended_box_color', array(
    'default' => '',
    'sanitize_callback' => 'sanitize_hex_color'
  ));
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'internet_service_provider_pro_pricing_plan_recommended_box_color', array(
    'label' => __('Recommended Box Background Color', 'internet-service-provider-pro'),
    'section' => 'internet_service_provider_pro_pricing_plan',
    'settings' => 'internet_service_provider_pro_pricing_plan_recommended_box_color',
  )));

  $wp_customize->add_setting('internet_service_provider_pro_pricing_plan_spacing_left_desktop', array(
      'sanitize_callback' => 'internet_service_provider_pro_sanitize_number_blank',
  ));

  $wp_customize->add_setting('internet_service_provider_pro_pricing_plan_spacing_top_desktop', array(
      'sanitize_callback' => 'internet_service_provider_pro_sanitize_number_blank',
  ));

  $wp_customize->add_setting('internet_service_provider_pro_pricing_plan_spacing_bottom_desktop', array(
      'sanitize_callback' => 'internet_service_provider_pro_sanitize_number_blank',
  ));

  $wp_customize->add_setting('internet_service_provider_pro_pricing_plan_spacing_right_desktop', array(
      'sanitize_callback' => 'internet_service_provider_pro_sanitize_number_blank',
  ));

  $wp_customize->add_control(new VW_Dimensions_Control($wp_customize, 'internet_service_provider_pro_pricing_plan_spacing', array(
      'section' => 'internet_service_provider_pro_pricing_plan',
      'label' => esc_html__('Section Spacing(px)', 'internet-service-provider-pro'),
      'settings' => array(
          'desktop_left' => 'internet_service_provider_pro_pricing_plan_spacing_left_desktop',
          'desktop_top' => 'internet_service_provider_pro_pricing_plan_spacing_top_desktop',
          'desktop_bottom' => 'internet_service_provider_pro_pricing_plan_spacing_bottom_desktop',
          'desktop_right' => 'internet_service_provider_pro_pricing_plan_spacing_right_desktop'
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

  $wp_customize->add_setting('internet_service_provider_pro_testimonials_text',array(
    'default' => '',
    'sanitize_callback' => 'sanitize_textarea_field'
  ));
  $wp_customize->add_control('internet_service_provider_pro_testimonials_text',array(
    'label' => __('Section Text','internet-service-provider-pro'),
    'section' => 'internet_service_provider_pro_testimonials',
    'setting' => 'internet_service_provider_pro_testimonials_text',
    'type'    => 'textarea'
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