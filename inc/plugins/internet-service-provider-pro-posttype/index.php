<?php
/*
 Plugin Name:Internet Service Provider Pro Posttype
 lugin URI: https://www.vwthemes.com/
 Description: Creating new post type forInternet Service Provider Pro Theme.
 Author: VW Themes
 Version: 0.0.1
 Author URI: https://www.vwthemes.com/
*/

define( 'internet_service_provider_pro_POSTTYPE_VERSION', '1.1' );

add_action( 'init', 'internet_service_provider_pro_posttype_create_custom_post_type' );


function internet_service_provider_pro_posttype_create_custom_post_type() {

  register_post_type( 'testimonials',
    array(
  		'labels' => array(
  			'name' => __( 'Testimonials','internet-service-provider-pro-posttype' ),
  			'singular_name' => __( 'Testimonials','internet-service-provider-pro-posttype' )
  		),
  		'capability_type' => 'post',
  		'menu_icon'  => 'dashicons-businessman',
  		'public' => true,
  		'supports' => array(
  			'title',
  			'editor',
  			'thumbnail'
  		)
		)
	);

	register_post_type( 'kitchen',
    array(
  		'labels' => array(
  			'name' => __( 'Kitchen','internet-service-provider-pro-posttype' ),
  			'singular_name' => __( 'Kitchen','internet-service-provider-pro-posttype' )
  		),
  		'capability_type' => 'post',
  		'menu_icon'  => 'dashicons-businessman',
  		'public' => true,
      'show_in_rest' => true,
  		'supports' => array(
  			'title',
  			'editor',
  			'thumbnail'
  		)
		)
	);

	register_taxonomy( 'kitchen_category', 'kitchen', array(
		'labels' => array(
			'name' => __( 'Kitchen Categories' ),
			'singular_name' => __( 'Kitchen Category' )
		),
		'hierarchical' => true,
		'public' => true,
	));

	register_post_type( 'projects',
		array(
		'labels' => array(
		'name' => __( 'Projects','internet-service-provider-pro-posttype' ),
		'singular_name' => __( 'Projects','internet-service-provider-pro-posttype' )
		),
		'capability_type' =>  'post',
		'menu_icon'  => 'dashicons-admin-customizer',
		'public' => true,
		'show_in_rest' => true,
		'supports' => array(
		'title',
		'editor',
		'excerpt',
		'thumbnail',
		)
		)
	);

  register_post_type( 'team',
    array(
      'labels' => array(
        'name' => __( 'Team','internet-service-provider-pro-posttype' ),
        'singular_name' => __( 'team','internet-service-provider-pro-posttype' )
      ),
        'capability_type' => 'post',
        'menu_icon'  => 'dashicons-businessman',
        'public' => true,
        'show_in_rest' => true,
        'supports' => array( 
          'title',
          'editor',
          'thumbnail'
      )
    )
  );

   register_post_type( 'faq',
    array(
      'labels' => array(
        'name' => __( 'Faq','internet-service-provider-pro-posttype' ),
        'singular_name' => __( 'Faq','internet-service-provider-pro-posttype' )
      ),
        'capability_type' => 'post',
        'menu_icon'  => 'dashicons-businessman',
        'public' => true,
        'show_in_rest' => true,
        'supports' => array( 
          'title',
          'editor',
          'thumbnail'
      )
    )
  );

}

// Projects
function internet_service_provider_pro_posttype_bn_projects_meta_box() {
  add_meta_box( 'internet-service-provider-pro-posttype-projects-meta', __( 'Enter Details', 'internet-service-provider-pro-posttype' ), 'internet_service_provider_pro_posttype_bn_projects_meta_callback', 'projects', 'normal', 'high' );
}
// Hook things in for admin
if (is_admin()){
    add_action('admin_menu', 'internet_service_provider_pro_posttype_bn_projects_meta_box');
}

/* Adds a meta box for custom post */
function internet_service_provider_pro_posttype_bn_projects_meta_callback( $post ) {
  wp_nonce_field( basename( __FILE__ ), 'internet_service_provider_pro_posttype_projects_meta_nonce' );
  $bn_stored_meta = get_post_meta( $post->ID );
  $projects_style = get_post_meta( $post->ID, 'internet_service_provider_pro_posttype_projects_style', true );
  $projects_location = get_post_meta( $post->ID, 'internet_service_provider_pro_posttype_projects_location', true );
  $projects_video_url = get_post_meta( $post->ID, 'internet_service_provider_pro_posttype_projects_video_url', true );
  $projects_video_text = get_post_meta( $post->ID, 'internet_service_provider_pro_posttype_projects_video_text', true );
  ?>
  <div id="projects_custom_stuff">
    <table id="list">
      <tbody id="the-list" data-wp-lists="list:meta">
        <tr id="meta-1">
          <td class="left">
            <?php _e( 'Style', 'internet-service-provider-pro-posttype' )?>
          </td>
          <td class="left" >
            <input type="text" name="internet_service_provider_pro_posttype_projects_style" id="internet_service_provider_pro_posttype_projects_style" value="<?php echo esc_attr( $projects_style ); ?>" />
          </td>
        </tr>
        <tr id="meta-2">
          <td class="left">
            <?php _e( 'Location', 'internet-service-provider-pro-posttype' )?>
          </td>
          <td class="left" >
            <input type="text" name="internet_service_provider_pro_posttype_projects_location" id="internet_service_provider_pro_posttype_projects_location" value="<?php echo esc_attr( $projects_location ); ?>" />
          </td>
        </tr>
        <tr id="meta-2">
          <td class="left">
            <?php _e( 'Video Title', 'internet-service-provider-pro-posttype' )?>
          </td>
          <td class="left" >
            <input type="text" name="internet_service_provider_pro_posttype_projects_video_url" id="internet_service_provider_pro_posttype_projects_video_url" value="<?php echo esc_attr( $projects_video_url ); ?>" />
          </td>
        </tr>

		<tr id="meta-2">
          <td class="left">
            <?php _e( 'Video Text', 'internet-service-provider-pro-posttype' )?>
          </td>
          <td class="left" >
            <input type="text" name="internet_service_provider_pro_posttype_projects_video_text" id="internet_service_provider_pro_posttype_projects_video_text" value="<?php echo esc_attr( $projects_video_url ); ?>" />
          </td>
        </tr>
      </tbody>
    </table>
  </div>
  <?php
}

/* Saves the custom meta input */
function internet_service_provider_pro_posttype_bn_metadesig_save( $post_id ) {
  if (!isset($_POST['internet_service_provider_pro_posttype_projects_meta_nonce']) || !wp_verify_nonce($_POST['internet_service_provider_pro_posttype_projects_meta_nonce'], basename(__FILE__))) {
    return;
  }

  if (!current_user_can('edit_post', $post_id)) {
    return;
  }

  if (defined('DOING_AUTOSAVE') && DOING_AUTOSAVE) {
    return;
  }

  // Save desig.
  if( isset( $_POST[ 'internet_service_provider_pro_posttype_projects_style' ] ) ) {
    update_post_meta( $post_id, 'internet_service_provider_pro_posttype_projects_style', sanitize_text_field($_POST[ 'internet_service_provider_pro_posttype_projects_style']) );
  }

  if( isset( $_POST[ 'internet_service_provider_pro_posttype_projects_location' ] ) ) {
    update_post_meta( $post_id, 'internet_service_provider_pro_posttype_projects_location', sanitize_text_field($_POST[ 'internet_service_provider_pro_posttype_projects_location']) );
  }

  if( isset( $_POST[ 'internet_service_provider_pro_posttype_projects_video_url' ] ) ) {
    update_post_meta( $post_id, 'internet_service_provider_pro_posttype_projects_video_url', sanitize_text_field($_POST[ 'internet_service_provider_pro_posttype_projects_video_url']) );
  }

  if( isset( $_POST[ 'internet_service_provider_pro_posttype_projects_video_text' ] ) ) {
    update_post_meta( $post_id, 'internet_service_provider_pro_posttype_projects_video_text', sanitize_text_field($_POST[ 'internet_service_provider_pro_posttype_projects_video_text']) );
  }
}
add_action( 'save_post', 'internet_service_provider_pro_posttype_bn_metadesig_save' );

// Testimonial
function internet_service_provider_pro_posttype_bn_testimonial_meta_box() {
  add_meta_box( 'internet-service-provider-pro-posttype-testimonial-meta', __( 'Enter Details', 'internet-service-provider-pro-posttype' ), 'internet_service_provider_pro_posttype_bn_testimonial_meta_callback', 'testimonials', 'normal', 'high' );
}
// Hook things in for admin
if (is_admin()){
    add_action('admin_menu', 'internet_service_provider_pro_posttype_bn_testimonial_meta_box');
}

/* Adds a meta box for custom post */
function internet_service_provider_pro_posttype_bn_testimonial_meta_callback( $post ) {
  wp_nonce_field( basename( __FILE__ ), 'internet_service_provider_pro_posttype_testimonial_meta_nonce' );
  $bn_stored_meta = get_post_meta( $post->ID );
  $testimonial_location = get_post_meta( $post->ID, 'internet_service_provider_pro_posttype_testimonial_location', true );
  $internet_service_provider_pro_posttype_star_review = get_post_meta( $post->ID, 'internet_service_provider_pro_posttype_star_review', true );
  ?>
  <div id="testimonials_custom_stuff">
    <table id="list">
      <tbody id="the-list" data-wp-lists="list:meta">
        <tr id="meta-1">
          <td class="left">
            <?php _e( 'Star Review', 'internet-service-provider-pro-posttype' )?>
          </td>
          <td class="left" >
            <input type="text" name="internet_service_provider_pro_posttype_star_review" id="internet_service_provider_pro_posttype_star_review" value="<?php echo esc_attr( $internet_service_provider_pro_posttype_star_review ); ?>" />
          </td>
        </tr>

        <tr id="meta-1">
          <td class="left">
            <?php _e( 'Location', 'internet-service-provider-pro-posttype' )?>
          </td>
          <td class="left" >
            <input type="text" name="internet_service_provider_pro_posttype_testimonial_location" id="internet_service_provider_pro_posttype_testimonial_location" value="<?php echo esc_attr( $testimonial_location ); ?>" />
          </td>
        </tr>
        
      </tbody>
    </table>
  </div>
  <?php
}

/* Saves the custom meta input */
function internet_service_provider_pro_posttype_bn_testimomials_metadesig_save( $post_id ) {
  if (!isset($_POST['internet_service_provider_pro_posttype_testimonial_meta_nonce']) || !wp_verify_nonce($_POST['internet_service_provider_pro_posttype_testimonial_meta_nonce'], basename(__FILE__))) {
    return;
  }

  if (!current_user_can('edit_post', $post_id)) {
    return;
  }

  if (defined('DOING_AUTOSAVE') && DOING_AUTOSAVE) {
    return;
  }

  // Save ratings.
  if( isset( $_POST[ 'internet_service_provider_pro_posttype_star_review' ] ) ) {
    update_post_meta( $post_id, 'internet_service_provider_pro_posttype_star_review', sanitize_text_field($_POST[ 'internet_service_provider_pro_posttype_star_review']) );
  }

  // Save desig.
  if( isset( $_POST[ 'internet_service_provider_pro_posttype_testimonial_location' ] ) ) {
    update_post_meta( $post_id, 'internet_service_provider_pro_posttype_testimonial_location', sanitize_text_field($_POST[ 'internet_service_provider_pro_posttype_testimonial_location']) );
  }

}

add_action( 'save_post', 'internet_service_provider_pro_posttype_bn_testimomials_metadesig_save' );

/*-------------------------------------- team ------------------------------------------*/

/* Adds a meta box for Designation */
function business_accountant_pro_posttype_bn_case_studies_meta() {
    add_meta_box( 'business_accountant_pro_posttype_bn_meta', __( 'Enter Details','internet-service-provider-pro-posttype' ), 'business_accountant_pro_posttype_case_studies_meta_callback', 'case_studies', 'normal', 'high' );
}
// Hook things in for admin
if (is_admin()){
    add_action('admin_menu', 'business_accountant_pro_posttype_bn_case_studies_meta');
}
/* Adds a meta box for custom post */
function business_accountant_pro_posttype_case_studies_meta_callback( $post ) {
    wp_nonce_field( basename( __FILE__ ), 'business_accountant_pro_posttype_bn_nonce' );
    $bn_stored_meta = get_post_meta( $post->ID );
    $case_studies_subtitle = get_post_meta( $post->ID, 'meta-case_studies-subtitle', true );
    ?>
  
    <div id="case_studies_custom_stuff">
        <table id="list-table">         
            <tbody id="the-list" data-wp-lists="list:meta">
                <tr id="meta-1">
                  <td class="left">
                    <?php _e( 'Sub Title', 'internet-service-provider-pro-posttype' ); ?>
                  </td>
                  <td class="left" >
                    <input type="text" name="meta-case_studies-subtitle" id="meta-case_studies-subtitle" value="<?php echo esc_html($case_studies_subtitle); ?>" />
                  </td>
                </tr>
            </tbody>
        </table>
    </div>
    <?php
}
/* Saves the custom Designation meta input */
function business_accountant_pro_posttype_case_studies_meta_save( $post_id ) {
  if( isset( $_POST[ 'meta-case_studies-subtitle' ] ) ) {
      update_post_meta( $post_id, 'meta-case_studies-subtitle', esc_html($_POST[ 'meta-case_studies-subtitle' ]) );
  }
}
add_action( 'save_post', 'business_accountant_pro_posttype_case_studies_meta_save' );

/* Adds a meta box for Designation */
function business_accountant_pro_posttype_bn_team_meta() {
    add_meta_box( 'business_accountant_pro_posttype_bn_meta', __( 'Enter Details','internet-service-provider-pro-posttype' ), 'business_accountant_pro_posttype_ex_bn_meta_callback', 'team', 'normal', 'high' );
}
// Hook things in for admin
if (is_admin()){
    add_action('admin_menu', 'business_accountant_pro_posttype_bn_team_meta');
}
/* Adds a meta box for custom post */
function business_accountant_pro_posttype_ex_bn_meta_callback( $post ) {
    wp_nonce_field( basename( __FILE__ ), 'business_accountant_pro_posttype_bn_nonce' );
    $bn_stored_meta = get_post_meta( $post->ID );
    $team_email = get_post_meta( $post->ID, 'meta-team-email', true );
    $team_phone = get_post_meta( $post->ID, 'meta-team-phone', true );
    $team_facebook = get_post_meta( $post->ID, 'meta-team-facebookurl', true );
    $team_linkedin = get_post_meta( $post->ID, 'meta-team-linkdenurl', true );
    $team_twitter = get_post_meta( $post->ID, 'meta-team-twitterurl', true );
    $team_desig = get_post_meta( $post->ID, 'meta-team-designation', true );
    $team_instagram = get_post_meta( $post->ID, 'meta-team-tinstagram', true );
    $team_pinterest = get_post_meta( $post->ID, 'meta-team-pinterest', true );
    ?>
  
    <div id="agent_custom_stuff">
        <table id="list-table">         
            <tbody id="the-list" data-wp-lists="list:meta">
                <tr id="meta-9">
                  <td class="left">
                    <?php _e( 'Designation', 'internet-service-provider-pro-posttype' ); ?>
                  </td>
                  <td class="left" >
                    <input type="text" name="meta-team-designation" id="meta-team-designation" value="<?php echo esc_html($team_desig); ?>" />
                  </td>
                </tr>

                <tr id="meta-1">
                  <td class="left">
                      <?php _e( 'Email', 'internet-service-provider-pro-posttype' )?>
                  </td>
                  <td class="left" >
                      <input type="text" name="meta-team-email" id="meta-team-email" value="<?php echo esc_html($team_email); ?>" />
                  </td>
                </tr>
                <tr id="meta-1">
                  <td class="left">
                      <?php _e( 'Phone', 'internet-service-provider-pro-posttype' )?>
                  </td>
                  <td class="left" >
                      <input type="text" name="meta-team-phone" id="meta-team-phone" value="<?php echo esc_html($team_phone); ?>" />
                  </td>
                </tr>
                <tr id="meta-3">
                  <td class="left">
                    <?php _e( 'Facebook Url', 'internet-service-provider-pro-posttype' )?>
                  </td>
                  <td class="left" >
                    <input type="url" name="meta-team-facebookurl" id="meta-team-facebookurl" value="<?php echo esc_html($team_facebook); ?>" />
                  </td>
                </tr>
                <tr id="meta-4">
                  <td class="left">
                    <?php _e( 'Linkedin Url', 'internet-service-provider-pro-posttype' )?>
                  </td>
                  <td class="left" >
                    <input type="url" name="meta-team-linkdenurl" id="meta-team-linkdenurl" value="<?php echo esc_html($team_linkedin); ?>" />
                  </td>
                </tr>
                <tr id="meta-5">
                  <td class="left">
                    <?php _e( 'Twitter Url', 'internet-service-provider-pro-posttype' ); ?>
                  </td>
                  <td class="left" >
                    <input type="url" name="meta-team-twitterurl" id="meta-team-twitterurl" value="<?php echo esc_html($team_twitter); ?>" />
                  </td>
                </tr>
                
                <tr id="meta-7">
                  <td class="left">
                    <?php _e( 'Instagram Url', 'internet-service-provider-pro-posttype' ); ?>
                  </td>
                  <td class="left" >
                    <input type="url" name="meta-team-tinstagram" id="meta-team-tinstagram" value="<?php echo esc_html($team_instagram); ?>" />
                  </td>
                </tr>
                <tr id="meta-8">
                  <td class="left">
                    <?php _e( 'Pinterest Url', 'internet-service-provider-pro-posttype' ); ?>
                  </td>
                  <td class="left" >
                    <input type="url" name="meta-team-pinterest" id="meta-team-pinterest" value="<?php echo esc_html($team_pinterest); ?>" />
                  </td>
                </tr>
            </tbody>
        </table>
    </div>
    <?php
}
/* Saves the custom Designation meta input */
function business_accountant_pro_posttype_ex_bn_metadesig_save( $post_id ) {

    if( isset( $_POST[ 'meta-team-email' ] ) ) {
        update_post_meta( $post_id, 'meta-team-email', esc_html($_POST[ 'meta-team-email' ]) );
    }
    if( isset( $_POST[ 'meta-team-phone' ] ) ) {
        update_post_meta( $post_id, 'meta-team-phone', esc_html($_POST[ 'meta-team-phone' ]) );
    }
    
    // Save facebookurl
    if( isset( $_POST[ 'meta-team-facebookurl' ] ) ) {
        update_post_meta( $post_id, 'meta-team-facebookurl', esc_url($_POST[ 'meta-team-facebookurl' ]) );
    }
    // Save linkdenurl
    if( isset( $_POST[ 'meta-team-linkdenurl' ] ) ) {
        update_post_meta( $post_id, 'meta-team-linkdenurl', esc_url($_POST[ 'meta-team-linkdenurl' ]) );
    }
    if( isset( $_POST[ 'meta-team-twitterurl' ] ) ) {
        update_post_meta( $post_id, 'meta-team-twitterurl', esc_url($_POST[ 'meta-team-twitterurl' ]) );
    }
    // Save Instagram
    if( isset( $_POST[ 'meta-team-tinstagram' ] ) ) {
      update_post_meta( $post_id, 'meta-team-tinstagram', esc_url($_POST[ 'meta-team-tinstagram' ]) );
    }
    // Save Pinterest
    if( isset( $_POST[ 'meta-team-pinterest' ] ) ) {
      update_post_meta( $post_id, 'meta-team-pinterest', esc_url($_POST[ 'meta-team-pinterest' ]) );
    }
    // Save designation
    if( isset( $_POST[ 'meta-team-designation' ] ) ) {
      update_post_meta( $post_id, 'meta-team-designation', esc_html($_POST[ 'meta-team-designation' ]) );
    }
}
add_action( 'save_post', 'business_accountant_pro_posttype_ex_bn_metadesig_save' );