<?php
  $wp_customize->add_section('internet_service_provider_pro_section_ordering_settings',array(
      'title' => __('Section Ordering','internet-service-provider-pro'),
      'description'=> __('Section Ordering.','internet-service-provider-pro'),
      'panel' => 'internet_service_provider_pro_panel_id',
  ));
  $wp_customize->add_setting( 'internet_service_provider_pro_section_ordering_settings_repeater',
      array(
        'default' => '',
        'transport' => 'refresh',
        'sanitize_callback' => 'sanitize_text_field'
  ));
  $wp_customize->add_control( new internet_service_provider_pro_Repeater_Custom_Control( $wp_customize, 'internet_service_provider_pro_section_ordering_settings_repeater',
      array(
        'label' => __( 'Section Reordering','internet-service-provider-pro' ),
        'section' => 'internet_service_provider_pro_section_ordering_settings',
        'button_labels' => array(
          'add' => __( 'Add Row','internet-service-provider-pro' ),
  ))));
 
  //General Color Pallete
  $wp_customize->add_section('internet_service_provider_pro_color_pallette',array(
      'title' => __('Typography / General settings','internet-service-provider-pro'),
      'description'=> __('Typography settings','internet-service-provider-pro'),
      'panel' => 'internet_service_provider_pro_panel_id',
  ));


  $wp_customize->add_setting( 'internet_service_provider_pro_theme_layout_section_ct_pallete',
    array(
      'default' => '',
      'transport' => 'postMessage',
      'sanitize_callback' => 'internet_service_provider_pro_text_sanitization'
  ));
  $wp_customize->add_control( new VW_Themes_Seperator_custom_Control( $wp_customize, 'internet_service_provider_pro_theme_layout_section_ct_pallete',
    array(
    'label' => __('Theme Layout ','internet-service-provider-pro'),
    'section' => 'internet_service_provider_pro_color_pallette'
  )));

  $wp_customize->add_setting('internet_service_provider_pro_radio_boxed_full_layout',
      array(
        'default' => 'full-Width',
        'sanitize_callback' => 'internet_service_provider_pro_sanitize_choices'
  ));
  $wp_customize->add_control('internet_service_provider_pro_radio_boxed_full_layout',
      array(
        'type' => 'radio',
        'label' => __('Choose Boxed or Full Width Layout', 'internet-service-provider-pro'),
        'section' => 'internet_service_provider_pro_color_pallette',
        'choices' => array(
        'full-Width' => __('Full Width', 'internet-service-provider-pro'),
        'boxed' => __('Boxed', 'internet-service-provider-pro')
      ),
  ));

  $wp_customize->add_setting('internet_service_provider_pro_radio_boxed_full_layout_value',array(
      'default' => '',
      'sanitize_callback' => 'sanitize_text_field'
    )
  );
  $wp_customize->add_control('internet_service_provider_pro_radio_boxed_full_layout_value',array(
      'label' => __('Add Boxed layout Width Here','internet-service-provider-pro'),
      'description' => __('Value should be less than 1140px','internet-service-provider-pro'),
      'section' => 'internet_service_provider_pro_color_pallette',
      'setting' => 'internet_service_provider_pro_radio_boxed_full_layout_value',
      'type'    => 'number'
    )
  );

  //This is Button Text FontFamily picker setting
  $wp_customize->add_setting( 'internet_service_provider_pro_body_section_ct_pallete',
    array(
      'default' => '',
      'transport' => 'postMessage',
      'sanitize_callback' => 'internet_service_provider_pro_text_sanitization'
  ));
  $wp_customize->add_control( new VW_Themes_Seperator_custom_Control( $wp_customize, 'internet_service_provider_pro_body_section_ct_pallete',
    array(
    'label' => __('Body Typography ','internet-service-provider-pro'),
    'section' => 'internet_service_provider_pro_color_pallette'
  )));

  $wp_customize->add_setting('internet_service_provider_pro_body_font_family',array(
    'default' => '',
    'capability' => 'edit_theme_options',
    'sanitize_callback' => 'sanitize_text_field'
  ));
  $wp_customize->add_control(
      'internet_service_provider_pro_body_font_family', array(
      'section'  => 'internet_service_provider_pro_color_pallette',
      'label'    => __( 'Font family','internet-service-provider-pro'),
      'type'     => 'select',
      'choices'  => $font_array,
  ));
  $wp_customize->add_setting('internet_service_provider_pro_body_font_size',array(
      'default' => '',
      'sanitize_callback' => 'sanitize_text_field'
    )
  );
  $wp_customize->add_control('internet_service_provider_pro_body_font_size',array(
      'label' => __('Font Size','internet-service-provider-pro'),
      'section' => 'internet_service_provider_pro_color_pallette',
      'setting' => 'internet_service_provider_pro_body_font_size',
      'type'    => 'number'
    )
  );
  $wp_customize->add_setting( 'internet_service_provider_pro_body_color', array(
    'default' => '',
    'sanitize_callback' => 'sanitize_hex_color'
  ));
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'internet_service_provider_pro_body_color', array(
    'label' => __('Color', 'internet-service-provider-pro'),
    'section' => 'internet_service_provider_pro_color_pallette',
    'settings' => 'internet_service_provider_pro_body_color',
  )));

  $wp_customize->add_setting( 'internet_service_provider_pro_h1_section_ct_pallete',
    array(
      'default' => '',
      'transport' => 'postMessage',
      'sanitize_callback' => 'internet_service_provider_pro_text_sanitization'
  ));
  $wp_customize->add_control( new VW_Themes_Seperator_custom_Control( $wp_customize, 'internet_service_provider_pro_h1_section_ct_pallete',
    array(
    'label' => __('H1 Typography ','internet-service-provider-pro'),
    'section' => 'internet_service_provider_pro_color_pallette'
  )));

  $wp_customize->add_setting('internet_service_provider_pro_h1_font_family',array(
    'default' => '',
    'capability' => 'edit_theme_options',
    'sanitize_callback' => 'sanitize_text_field'
  ));
  $wp_customize->add_control(
      'internet_service_provider_pro_h1_font_family', array(
      'section'  => 'internet_service_provider_pro_color_pallette',
      'label'    => __( 'Font Family','internet-service-provider-pro'),
      'type'     => 'select',
      'choices'  => $font_array,
  ));
  $wp_customize->add_setting('internet_service_provider_pro_h1_font_size',array(
      'default' => '',
      'sanitize_callback' => 'sanitize_text_field'
    )
  );
  $wp_customize->add_control('internet_service_provider_pro_h1_font_size',array(
      'label' => __('Font Size','internet-service-provider-pro'),
      'section' => 'internet_service_provider_pro_color_pallette',
      'setting' => 'internet_service_provider_pro_h1_font_size',
      'type'    => 'number'
    )
  );
  $wp_customize->add_setting( 'internet_service_provider_pro_h1_color', array(
    'default' => '',
    'sanitize_callback' => 'sanitize_hex_color'
  ));
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'internet_service_provider_pro_h1_color', array(
    'label' => __('Color', 'internet-service-provider-pro'),
    'section' => 'internet_service_provider_pro_color_pallette',
    'settings' => 'internet_service_provider_pro_h1_color',
  )));

  $wp_customize->add_setting( 'internet_service_provider_pro_h2_section_ct_pallete',
    array(
      'default' => '',
      'transport' => 'postMessage',
      'sanitize_callback' => 'internet_service_provider_pro_text_sanitization'
  ));
  $wp_customize->add_control( new VW_Themes_Seperator_custom_Control( $wp_customize, 'internet_service_provider_pro_h2_section_ct_pallete',
    array(
    'label' => __('H2 Typography ','internet-service-provider-pro'),
    'section' => 'internet_service_provider_pro_color_pallette'
  )));

  $wp_customize->add_setting('internet_service_provider_pro_h2_font_family',array(
    'default' => '',
    'capability' => 'edit_theme_options',
    'sanitize_callback' => 'sanitize_text_field'
  ));
  $wp_customize->add_control(
      'internet_service_provider_pro_h2_font_family', array(
      'section'  => 'internet_service_provider_pro_color_pallette',
      'label'    => __( 'Font Family','internet-service-provider-pro'),
      'type'     => 'select',
      'choices'  => $font_array,
  ));
  $wp_customize->add_setting('internet_service_provider_pro_h2_font_size',array(
      'default' => '',
      'sanitize_callback' => 'sanitize_text_field'
    )
  );
  $wp_customize->add_control('internet_service_provider_pro_h2_font_size',array(
      'label' => __('Font Size','internet-service-provider-pro'),
      'section' => 'internet_service_provider_pro_color_pallette',
      'setting' => 'internet_service_provider_pro_h2_font_size',
      'type'    => 'number'
    )
  );
  $wp_customize->add_setting( 'internet_service_provider_pro_h2_color', array(
    'default' => '',
    'sanitize_callback' => 'sanitize_hex_color'
  ));
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'internet_service_provider_pro_h2_color', array(
    'label' => __('Color', 'internet-service-provider-pro'),
    'section' => 'internet_service_provider_pro_color_pallette',
    'settings' => 'internet_service_provider_pro_h2_color',
  )));

  $wp_customize->add_setting( 'internet_service_provider_pro_h3_section_ct_pallete',
    array(
      'default' => '',
      'transport' => 'postMessage',
      'sanitize_callback' => 'internet_service_provider_pro_text_sanitization'
  ));
  $wp_customize->add_control( new VW_Themes_Seperator_custom_Control( $wp_customize, 'internet_service_provider_pro_h3_section_ct_pallete',
    array(
    'label' => __('H3 Typography ','internet-service-provider-pro'),
    'section' => 'internet_service_provider_pro_color_pallette'
  )));

  $wp_customize->add_setting('internet_service_provider_pro_h3_font_family',array(
    'default' => '',
    'capability' => 'edit_theme_options',
    'sanitize_callback' => 'sanitize_text_field'
  ));
  $wp_customize->add_control(
      'internet_service_provider_pro_h3_font_family', array(
      'section'  => 'internet_service_provider_pro_color_pallette',
      'label'    => __( 'Font Family','internet-service-provider-pro'),
      'type'     => 'select',
      'choices'  => $font_array,
  ));
  $wp_customize->add_setting('internet_service_provider_pro_h3_font_size',array(
      'default' => '',
      'sanitize_callback' => 'sanitize_text_field'
    )
  );
  $wp_customize->add_control('internet_service_provider_pro_h3_font_size',array(
      'label' => __('Font Size','internet-service-provider-pro'),
      'section' => 'internet_service_provider_pro_color_pallette',
      'setting' => 'internet_service_provider_pro_h3_font_size',
      'type'    => 'number'
    )
  );
  $wp_customize->add_setting( 'internet_service_provider_pro_h3_color', array(
    'default' => '',
    'sanitize_callback' => 'sanitize_hex_color'
  ));
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'internet_service_provider_pro_h3_color', array(
    'label' => __('Color', 'internet-service-provider-pro'),
    'section' => 'internet_service_provider_pro_color_pallette',
    'settings' => 'internet_service_provider_pro_h3_color',
  )));

  $wp_customize->add_setting( 'internet_service_provider_pro_h4_section_ct_pallete',
    array(
      'default' => '',
      'transport' => 'postMessage',
      'sanitize_callback' => 'internet_service_provider_pro_text_sanitization'
  ));
  $wp_customize->add_control( new VW_Themes_Seperator_custom_Control( $wp_customize, 'internet_service_provider_pro_h4_section_ct_pallete',
    array(
    'label' => __('H4 Typography ','internet-service-provider-pro'),
    'section' => 'internet_service_provider_pro_color_pallette'
  )));

  $wp_customize->add_setting('internet_service_provider_pro_h4_font_family',array(
    'default' => '',
    'capability' => 'edit_theme_options',
    'sanitize_callback' => 'sanitize_text_field'
  ));
  $wp_customize->add_control(
      'internet_service_provider_pro_h4_font_family', array(
      'section'  => 'internet_service_provider_pro_color_pallette',
      'label'    => __( 'Font Family','internet-service-provider-pro'),
      'type'     => 'select',
      'choices'  => $font_array,
  ));
  $wp_customize->add_setting('internet_service_provider_pro_h4_font_size',array(
      'default' => '',
      'sanitize_callback' => 'sanitize_text_field'
    )
  );
  $wp_customize->add_control('internet_service_provider_pro_h4_font_size',array(
      'label' => __('Font Size','internet-service-provider-pro'),
      'section' => 'internet_service_provider_pro_color_pallette',
      'setting' => 'internet_service_provider_pro_h4_font_size',
      'type'    => 'number'
    )
  );
  $wp_customize->add_setting( 'internet_service_provider_pro_h4_color', array(
    'default' => '',
    'sanitize_callback' => 'sanitize_hex_color'
  ));
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'internet_service_provider_pro_h4_color', array(
    'label' => __('Color', 'internet-service-provider-pro'),
    'section' => 'internet_service_provider_pro_color_pallette',
    'settings' => 'internet_service_provider_pro_h4_color',
  )));

  $wp_customize->add_setting( 'internet_service_provider_pro_h5_section_ct_pallete',
    array(
      'default' => '',
      'transport' => 'postMessage',
      'sanitize_callback' => 'internet_service_provider_pro_text_sanitization'
  ));
  $wp_customize->add_control( new VW_Themes_Seperator_custom_Control( $wp_customize, 'internet_service_provider_pro_h5_section_ct_pallete',
    array(
    'label' => __('H5 Typography ','internet-service-provider-pro'),
    'section' => 'internet_service_provider_pro_color_pallette'
  )));

  $wp_customize->add_setting('internet_service_provider_pro_h5_font_family',array(
    'default' => '',
    'capability' => 'edit_theme_options',
    'sanitize_callback' => 'sanitize_text_field'
  ));
  $wp_customize->add_control(
      'internet_service_provider_pro_h5_font_family', array(
      'section'  => 'internet_service_provider_pro_color_pallette',
      'label'    => __( 'Font Family','internet-service-provider-pro'),
      'type'     => 'select',
      'choices'  => $font_array,
  ));
  $wp_customize->add_setting('internet_service_provider_pro_h5_font_size',array(
      'default' => '',
      'sanitize_callback' => 'sanitize_text_field'
    )
  );
  $wp_customize->add_control('internet_service_provider_pro_h5_font_size',array(
      'label' => __('Font Size','internet-service-provider-pro'),
      'section' => 'internet_service_provider_pro_color_pallette',
      'setting' => 'internet_service_provider_pro_h5_font_size',
      'type'    => 'number'
    )
  );
  $wp_customize->add_setting( 'internet_service_provider_pro_h5_color', array(
    'default' => '',
    'sanitize_callback' => 'sanitize_hex_color'
  ));
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'internet_service_provider_pro_h5_color', array(
    'label' => __('Color', 'internet-service-provider-pro'),
    'section' => 'internet_service_provider_pro_color_pallette',
    'settings' => 'internet_service_provider_pro_h5_color',
  )));

  $wp_customize->add_setting( 'internet_service_provider_pro_h6_section_ct_pallete',
    array(
      'default' => '',
      'transport' => 'postMessage',
      'sanitize_callback' => 'internet_service_provider_pro_text_sanitization'
  ));
  $wp_customize->add_control( new VW_Themes_Seperator_custom_Control( $wp_customize, 'internet_service_provider_pro_h6_section_ct_pallete',
    array(
    'label' => __('H6 Typography ','internet-service-provider-pro'),
    'section' => 'internet_service_provider_pro_color_pallette'
  )));

  $wp_customize->add_setting('internet_service_provider_pro_h6_font_family',array(
    'default' => '',
    'capability' => 'edit_theme_options',
    'sanitize_callback' => 'sanitize_text_field'
  ));
  $wp_customize->add_control(
      'internet_service_provider_pro_h6_font_family', array(
      'section'  => 'internet_service_provider_pro_color_pallette',
      'label'    => __( 'Font Family','internet-service-provider-pro'),
      'type'     => 'select',
      'choices'  => $font_array,
  ));
  $wp_customize->add_setting('internet_service_provider_pro_h6_font_size',array(
      'default' => '',
      'sanitize_callback' => 'sanitize_text_field'
    )
  );
  $wp_customize->add_control('internet_service_provider_pro_h6_font_size',array(
      'label' => __('H6 Font Size','internet-service-provider-pro'),
      'section' => 'internet_service_provider_pro_color_pallette',
      'setting' => 'internet_service_provider_pro_h6_font_size',
      'type'    => 'number'
    )
  );
  $wp_customize->add_setting( 'internet_service_provider_pro_h6_color', array(
    'default' => '',
    'sanitize_callback' => 'sanitize_hex_color'
  ));
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'internet_service_provider_pro_h6_color', array(
    'label' => __('H6 color', 'internet-service-provider-pro'),
    'section' => 'internet_service_provider_pro_color_pallette',
    'settings' => 'internet_service_provider_pro_h6_color',
  )));

  $wp_customize->add_setting( 'internet_service_provider_pro_para_section_ct_pallete',
    array(
      'default' => '',
      'transport' => 'postMessage',
      'sanitize_callback' => 'internet_service_provider_pro_text_sanitization'
  ));
  $wp_customize->add_control( new VW_Themes_Seperator_custom_Control( $wp_customize, 'internet_service_provider_pro_para_section_ct_pallete',
    array(
    'label' => __('Paragraph Typography ','internet-service-provider-pro'),
    'section' => 'internet_service_provider_pro_color_pallette'
  )));

  //paragarph font family
  $wp_customize->add_setting('internet_service_provider_pro_paragarpah_font_family',array(
    'default' => '',
    'capability' => 'edit_theme_options',
    'sanitize_callback' => 'sanitize_text_field'
  ));
  $wp_customize->add_control(
      'internet_service_provider_pro_paragarpah_font_family', array(
      'section'  => 'internet_service_provider_pro_color_pallette',
      'label'    => __( 'Font Family','internet-service-provider-pro'),
      'type'     => 'select',
      'choices'  => $font_array,
  ));
  $wp_customize->add_setting('internet_service_provider_pro_para_font_size',array(
      'default' => '',
      'sanitize_callback' => 'sanitize_text_field'
    )
  );
  $wp_customize->add_control('internet_service_provider_pro_para_font_size',array(
      'label' => __('Font Size','internet-service-provider-pro'),
      'section' => 'internet_service_provider_pro_color_pallette',
      'setting' => 'internet_service_provider_pro_para_font_size',
      'type'    => 'number'
    )
  );
  $wp_customize->add_setting( 'internet_service_provider_pro_para_color', array(
    'default' => '',
    'sanitize_callback' => 'sanitize_hex_color'
  ));
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'internet_service_provider_pro_para_color', array(
      'label' => __('color', 'internet-service-provider-pro'),
      'section' => 'internet_service_provider_pro_color_pallette',
      'settings' => 'internet_service_provider_pro_para_color',
    )
  ));

  $wp_customize->add_setting( 'internet_service_provider_pro_global_section_ct_pallete',
    array(
      'default' => '',
      'transport' => 'postMessage',
      'sanitize_callback' => 'internet_service_provider_pro_text_sanitization'
  ));
  $wp_customize->add_control( new VW_Themes_Seperator_custom_Control( $wp_customize, 'internet_service_provider_pro_global_section_ct_pallete',
    array(
    'label' => __('Global Color ','internet-service-provider-pro'),
    'section' => 'internet_service_provider_pro_color_pallette'
  )));

  $wp_customize->add_setting( 'internet_service_provider_pro_hi_first_color', array(
    'default' => '#06B6D4',
    'sanitize_callback' => 'sanitize_hex_color'
  ));
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'internet_service_provider_pro_hi_first_color', array(
    'label' => __('Primary Color', 'internet-service-provider-pro'),
    'section' => 'internet_service_provider_pro_color_pallette',
    'settings' => 'internet_service_provider_pro_hi_first_color',
  )));