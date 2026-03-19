<?php
/**
 * Custom Widgets
 */

// Creating About widget 
class wpb_widget extends WP_Widget {
	function __construct() {
		parent::__construct(
		// Base ID of your widget
			'wpb_widget', 
			// Widget name will appear in UI
			__('Contact Us', 'air-condition-repair-pro'), 
			// Widget description
			array( 'description' => __( 'Widget for Contact Us section', 'air-condition-repair-pro' ), ) 
		);
	}
// Creating widget front-end
// This is where the action happens
	public function widget( $args, $instance ) {
		?>
	<div class="contact_widget">
		<?php
        
		//creating main title
		$custom_title = apply_filters( 'widget_custom_title', esc_html($instance['custom_title']) );
		// before and after widget arguments are defined by themes
		echo $args['before_widget'];
		if ($custom_title !='' ){?>	
			<h3 class="top_title">
				<?php echo esc_html($custom_title); ?>
			</h3>		
		<?php }
		//creating content
		$custom_content = apply_filters( 'widget_custom_content', esc_html($instance['custom_content']) );
		// before and after widget arguments are defined by themes

		if($custom_content != ''){?>
			<p class="message">
				<?php echo esc_textarea($custom_content);?>
			</p>
		<?php }

		

		//creating Phone
		$phone = apply_filters( 'widget_phone', esc_html($instance['phone'] ));
		$phone_head = apply_filters( 'widget_phone_head', esc_html($instance['phone_head'] ));
		// before and after widget arguments are defined by themes

		if($phone != '' || $phone_head != ''){ ?>
			<div class="phone media mb-3">
				<span class="contact_widget_icon"><i class="fas fa-phone"></i></span>
				<div class="media-body">
					<span class="contact_widget_head"><?php echo esc_textarea($phone_head); ?></span>
					<span class="contact-text"><a href="tel:<?php echo esc_html($phone); ?>"><?php echo esc_html($phone); ?></a></span>
				</div>
			</div>
		<?php }

		//creating Email
		$email = apply_filters( 'widget_email', esc_html($instance['email'] ));
		$email_head = apply_filters( 'widget_email_head', esc_html($instance['email_head'] ));
		// before and after widget arguments are defined by themes
		
		if($email != '' || $email_head != ''){ ?>
			<div class="email media mb-3">
				
				<span class="contact_widget_icon"><i class="fas fa-envelope"></i></span>
				<div class="media-body">
					<span class="contact_widget_head"><?php echo esc_textarea($email_head); ?></span>
					<span class="contact-text"><a href="mailto:<?php echo esc_html($email); ?>"><?php echo esc_html($email); ?></a></span>
				</div>
			</div>
		<?php }

		//creating Location
		$location_head = apply_filters( 'widget_location_head', esc_html($instance['location_head'] ));
		$location = apply_filters( 'widget_location', esc_html($instance['location'] ));
		// before and after widget arguments are defined by themes
		
		if($location != '' || $location_head != ''){ ?>
			<div class="location media mb-3">
				<span class="contact_widget_icon"><i class="fas fa-map-marker-alt"></i></span>
				<div class="media-body">
					<span class="contact_widget_head"><?php echo esc_textarea($location_head); ?></span>
					<span class="contact-text"><a href="http://maps.google.com/?q=1200 <?php echo esc_textarea($location); ?>" target="_blank"><?php echo esc_textarea($location); ?></a></span>
				</div>
			</div>
		<?php } 

		

		//creating Email
		$time = apply_filters( 'widget_time', esc_html($instance['time'] ));
		$time_head = apply_filters( 'widget_time_head', esc_html($instance['time_head'] ));
		// before and after widget arguments are defined by themes

		 if($time != '' || $time_head != ''){ ?>
			<div class="time media mb-3">
				<span class="contact_widget_icon"><i class="fas fa-history"></i></span>
				<div class="media-body">
					<span class="contact_widget_head"><?php echo esc_textarea($time_head); ?></span>
					<span class="contact-text"><?php echo esc_html($time); ?></span>
				</div>
			</div>
		<?php } ?>		
		
		<?php
			echo $args['after_widget'];
		 ?>
	</div>

	<?php }
		
	// Widget Backend 
	public function form( $instance ) {
		//Main title
		if ( isset( $instance[ 'custom_title' ] ) ) {
			esc_html($custom_title = $instance[ 'custom_title' ]);
		}
		else {
			esc_html($custom_title = __( 'New title', 'air-condition-repair-pro' ));
		}		
		//custom_content
		if ( isset( $instance[ 'custom_content' ] ) ) {
			esc_html($custom_content = $instance[ 'custom_content' ]);
		}
		else {
			esc_html($custom_content = __( 'Custom Content', 'air-condition-repair-pro' ));
		}
		//Location
		if ( isset( $instance[ 'location' ] ) ) {
			esc_html($location = $instance[ 'location' ]);
		}
		else {
			esc_html($location = __( 'Location', 'air-condition-repair-pro' ));
		}

		if ( isset( $instance[ 'location_head' ] ) ) {
			esc_html($location_head = $instance[ 'location_head' ]);
		}
		else {
			esc_html($location_head = __( '', 'air-condition-repair-pro' ));
		}

		//Phone
		if ( isset( $instance[ 'phone' ] ) ) {
			esc_html($phone = $instance[ 'phone' ]);
		}
		else {
			esc_html($phone = __( 'Phone', 'air-condition-repair-pro' ));
		}

		if ( isset( $instance[ 'phone_head' ] ) ) {
			esc_html($phone_head = $instance[ 'phone_head' ]);
		}
		else {
			esc_html($phone_head = __( '', 'air-condition-repair-pro' ));
		}

		//Email
		if ( isset( $instance[ 'email' ] ) ) {
			esc_html($email = $instance[ 'email' ]);
		}
		else {
			esc_html($email = __( 'Email', 'air-condition-repair-pro' ));
		}

		if ( isset( $instance[ 'email_head' ] ) ) {
			esc_html($email_head = $instance[ 'email_head' ]);
		}

		else {
			esc_html($email_head = __( '', 'air-condition-repair-pro' ));
		}	

		// Time

		if ( isset( $instance[ 'time' ] ) ) {
			esc_html($time = $instance[ 'time' ]);
		}
		else {
			esc_html($time = __( 'Time', 'air-condition-repair-pro' ));
		}	

		if ( isset( $instance[ 'time_head' ] ) ) {
			esc_html($time_head = $instance[ 'time_head' ]);
		}
		else {
			esc_html($time_head = __( '', 'air-condition-repair-pro' ));
		}		

		?>
			<!--Main title field -->
			<p>
				<label for="<?php echo esc_attr($this->get_field_id( 'custom_title' )); ?>"><?php esc_html_e( 'Title:', 'air-condition-repair-pro' ); ?></label> 
				<input class="widefat" id="<?php echo esc_attr($this->get_field_id( 'custom_title' )); ?>" name="<?php echo esc_attr($this->get_field_name( 'custom_title' )); ?>" type="text" value="<?php echo esc_attr( $custom_title ); ?>" />
			</p>			
			<!--Message field -->
			<p>
				<label for="<?php echo esc_attr($this->get_field_id( 'custom_content' )); ?>"><?php esc_html_e( 'Content:','air-condition-repair-pro' ); ?></label> 
				<textarea class="widefat" id="<?php echo esc_attr($this->get_field_id( 'custom_content' )); ?>" name="<?php echo esc_attr($this->get_field_name( 'custom_content' )); ?>" type="text"  value="<?php echo esc_attr( $custom_content ); ?>" ><?php if (!empty($custom_content))  { echo esc_html($custom_content); } ?></textarea>
			</p>
			<!--Location field-->
			<p>
				<label for="<?php echo esc_attr($this->get_field_id( 'location' )); ?>"><?php esc_html_e( 'Location:', 'air-condition-repair-pro'); ?></label>
				<input class="widefat" id="<?php echo esc_attr($this->get_field_id( 'location_head' )); ?>" name="<?php echo esc_attr($this->get_field_name( 'location_head' )); ?>" type="text" value="<?php echo esc_attr( $location_head ); ?>" />
				<textarea class="widefat" id="<?php echo esc_attr($this->get_field_id( 'location' )); ?>" name="<?php echo esc_attr($this->get_field_name( 'location' )); ?>" type="text" value="<?php echo esc_attr( $location ); ?>" ><?php if (!empty($location)){ echo esc_html($location); } ?></textarea>

			</p>
			<!--Phone field-->
			<p>
				<label for="<?php echo esc_attr($this->get_field_id( 'phone' )); ?>"><?php esc_html_e( 'Phone:', 'air-condition-repair-pro'); ?></label>
				<input class="widefat" id="<?php echo esc_attr($this->get_field_id( 'phone_head' )); ?>" name="<?php echo esc_attr($this->get_field_name( 'phone_head' )); ?>" type="text" value="<?php echo esc_attr( $phone_head ); ?>" />
				<input class="widefat" id="<?php echo esc_attr($this->get_field_id( 'phone' )); ?>" name="<?php echo esc_attr($this->get_field_name( 'phone' )); ?>" type="text" value="<?php echo esc_attr( $phone ); ?>" />
			</p>
			<!--Email field -->
			<p>
				<label for="<?php echo esc_attr($this->get_field_id( 'email' )); ?>"><?php esc_html_e( 'Email:', 'air-condition-repair-pro'); ?></label>
				<input class="widefat" id="<?php echo esc_attr($this->get_field_id( 'email_head' )); ?>" name="<?php echo esc_attr($this->get_field_name( 'email_head' )); ?>" type="text" value="<?php echo esc_attr( $email_head ); ?>" />
				<input class="widefat" id="<?php echo esc_attr($this->get_field_id( 'email' )); ?>" name="<?php echo esc_attr($this->get_field_name( 'email' )); ?>" type="text" value="<?php echo esc_attr( $email ); ?>" />
			</p>
			<!-- Time  -->
			<p>
				<label for="<?php echo esc_attr($this->get_field_id( 'time' )); ?>"><?php esc_html_e( 'Time:', 'air-condition-repair-pro'); ?></label> 
				<input class="widefat" id="<?php echo esc_attr($this->get_field_id( 'time_head' )); ?>" name="<?php echo esc_attr($this->get_field_name( 'time_head' )); ?>" type="text" value="<?php echo esc_attr( $time_head ); ?>" />
				<input class="widefat" id="<?php echo esc_attr($this->get_field_id( 'time' )); ?>" name="<?php echo esc_attr($this->get_field_name( 'time' )); ?>" type="text" value="<?php echo esc_attr( $time ); ?>" />
			</p>	 
		<?php 
	}
	
	// Updating widget replacing old instances with new
	public function update( $new_instance, $old_instance ) {
		$instance = array();
		//title instance
		$instance['custom_title'] = (!empty( $new_instance['custom_title']))? strip_tags( $new_instance['custom_title'] ) : '';
		//location instance
		$instance['location'] = (! empty( $new_instance['location']))? strip_tags( $new_instance['location'] ) : '';
		$instance['location_head'] = (! empty( $new_instance['location_head']))? strip_tags( $new_instance['location_head'] ) : '';
		//content instance
		$instance['custom_content'] = ( ! empty( $new_instance['custom_content']))? strip_tags( $new_instance['custom_content'] ) : '';
		//phone instance
		$instance['phone'] = (! empty( $new_instance['phone']))? strip_tags( $new_instance['phone'] ) : '';
		$instance['phone_head'] = (! empty( $new_instance['phone_head']))? strip_tags( $new_instance['phone_head'] ) : '';
		//email instance
		$instance['email'] = (! empty( $new_instance['email']))? strip_tags( $new_instance['email'] ) : '';
		$instance['email_head'] = (! empty( $new_instance['email_head']))? strip_tags( $new_instance['email_head'] ) : '';

		//email instance
		$instance['time'] = (! empty( $new_instance['time']))? strip_tags( $new_instance['time'] ) : '';
		$instance['time_head'] = (! empty( $new_instance['time_head']))? strip_tags( $new_instance['time_head'] ) : '';
		return $instance;
	}
} // Class wpb_widget ends here
	// Register and load the widget
	function wpb_load_widget() {
		register_widget( 'wpb_widget' );
	}
add_action( 'widgets_init', 'wpb_load_widget' );