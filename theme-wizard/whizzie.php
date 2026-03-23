<?php
// error_reporting(E_ALL);
// ini_set('display_errors', '1');
/**
 * Wizard
 *
 * @package Whizzie
 * @author Catapult Themes
 * @since 1.0.0
 */


class ThemeWhizzie {

	public static $is_valid_key = 'false';
	public static $theme_key 		= '';

	protected $version = '1.1.0';

	/** @var string Current theme name, used as namespace in actions. */
	protected $theme_name = '';
	protected $theme_title = '';

	/** @var string Wizard page slug and title. */
	protected $page_slug = '';
	protected $page_title = '';
	protected $plugin_path = '';
	protected $parent_slug = '';

	/** @var array Wizard steps set by user. */
	protected $config_steps = array();

	/**
	 * Relative plugin url for this plugin folder
	 * @since 1.0.0
	 * @var string
	 */
	protected $plugin_url = '';

	/**
	 * TGMPA instance storage
	 *
	 * @var object
	 */
	protected $tgmpa_instance;

	/**
	 * TGMPA Menu slug
	 *
	 * @var string
	 */
	protected $tgmpa_menu_slug = 'tgmpa-install-plugins';

	/**
	 * TGMPA Menu url
	 *
	 * @var string
	 */
	protected $tgmpa_url = 'themes.php?page=tgmpa-install-plugins';

	// Where to find the widget.wie file
	protected $widget_file_url = '';

	/**
	 * Constructor
	 *
	 * @param $internet_service_provider_pro_config	Our config parameters
	 */
	public function __construct( $internet_service_provider_pro_config ) {
		$this->set_vars( $internet_service_provider_pro_config );
		$this->init();

		include_once( ABSPATH . 'wp-admin/includes/plugin.php' );
	}

	public static function get_the_validation_status() {
		return get_option('internet_service_provider_pro_theme_validation_status');
	}

	public static function set_the_validation_status($is_valid) {
		update_option('internet_service_provider_pro_theme_validation_status', $is_valid);
	}

	public static function get_the_suspension_status() {
		return get_option( 'internet_service_provider_pro_theme_suspension_status' );
	}

	public static function set_the_suspension_status( $is_suspended ) {
		update_option( 'internet_service_provider_pro_theme_suspension_status' , $is_suspended );
	}

	public static function set_the_theme_key($the_key) {
		update_option('vw_pro_theme_key', $the_key);
	}

	public static function remove_the_theme_key() {
		delete_option('vw_pro_theme_key');
	}

	public static function get_the_theme_key() {
		return get_option('vw_pro_theme_key');
	}

	/**
	 * Set some settings
	 * @since 1.0.0
	 * @param $internet_service_provider_pro_config	Our config parameters
	 */
	public function set_vars( $internet_service_provider_pro_config ) {

		require_once trailingslashit( WHIZZIE_DIR ) . 'tgm/tgm.php';
		require_once trailingslashit( WHIZZIE_DIR ) . 'widgets/class-vw-widget-importer.php';

		if( isset( $internet_service_provider_pro_config['page_slug'] ) ) {
			$this->page_slug = esc_attr( $internet_service_provider_pro_config['page_slug'] );
		}
		if( isset( $internet_service_provider_pro_config['page_title'] ) ) {
			$this->page_title = esc_attr( $internet_service_provider_pro_config['page_title'] );
		}
		if( isset( $internet_service_provider_pro_config['steps'] ) ) {
			$this->config_steps = $internet_service_provider_pro_config['steps'];
		}

		$this->plugin_path = trailingslashit( dirname( __FILE__ ) );
		$relative_url = str_replace( get_template_directory(), '', $this->plugin_path );
		$this->plugin_url = trailingslashit( get_template_directory_uri() . $relative_url );
		$current_theme = wp_get_theme();
		$this->theme_title = $current_theme->get( 'Name' );
		$this->theme_name = strtolower( preg_replace( '#[^a-zA-Z]#', '', $current_theme->get( 'Name' ) ) );
		$this->page_slug = apply_filters( $this->theme_name . '_theme_setup_wizard_page_slug', $this->theme_name . '-wizard' );
		$this->parent_slug = apply_filters( $this->theme_name . '_theme_setup_wizard_parent_slug', '' );

		$this->widget_file_url = trailingslashit( WHIZZIE_DIR ) . 'widgets/internet-service-provider-pro-widgets.wie';

	}

	/**
	 * Hooks and filters
	 * @since 1.0.0
	 */
	public function init() {

		if ( class_exists( 'TGM_Plugin_Activation' ) && isset( $GLOBALS['tgmpa'] ) ) {
			add_action( 'init', array( $this, 'get_tgmpa_instance' ), 30 );
			add_action( 'init', array( $this, 'set_tgmpa_url' ), 40 );
		}

		add_action( 'after_switch_theme', array( $this, 'redirect_to_wizard' ) );
		add_action( 'admin_enqueue_scripts', array( $this, 'enqueue_scripts' ) );
		add_action( 'admin_menu', array( $this, 'menu_page' ) );
		add_action( 'admin_init', array( $this, 'get_plugins' ), 30 );
		add_filter( 'tgmpa_load', array( $this, 'tgmpa_load' ), 10, 1 );
		add_action( 'wp_ajax_setup_plugins', array( $this, 'setup_plugins' ) );
		add_action( 'wp_ajax_setup_widgets', array( $this, 'setup_widgets' ) );

		add_action( 'wp_ajax_setup_builder', array( $this, 'setup_builder' ) );
		add_action( 'wp_ajax_wz_install_activate_ibtana', array( $this, 'wz_install_activate_ibtana' ) );

		add_action( 'wp_ajax_wz_activate_internet_service_provider_pro', array( $this, 'wz_activate_internet_service_provider_pro' ) );

		add_action('admin_enqueue_scripts',  array( $this, 'internet_service_provider_pro_admin_theme_style' ) );


	}

	public function redirect_to_wizard() {
		global $pagenow;
		if( is_admin() && 'themes.php' == $pagenow && isset( $_GET['activated'] ) && current_user_can( 'manage_options' ) ) {
			wp_redirect( admin_url( 'themes.php?page=' . esc_attr( $this->page_slug ) ) );
		}
	}

	public function enqueue_scripts() {
		wp_enqueue_style( 'theme-wizard-style', get_template_directory_uri() . '/theme-wizard/assets/css/theme-wizard-style.css');
		wp_register_script( 'theme-wizard-script', get_template_directory_uri() . '/theme-wizard/assets/js/theme-wizard-script.js', array( 'jquery' ), time() );
		wp_localize_script(
			'theme-wizard-script',
			'internet_service_provider_pro_whizzie_params',
			array(
				'ajaxurl' 		=> admin_url( 'admin-ajax.php' ),
				'wpnonce' 		=> wp_create_nonce( 'whizzie_nonce' ),
				'verify_text'	=> esc_html( 'verifying', 'internet-service-provider-pro' ),
				'IBTANA_THEME_LICENCE_ENDPOINT' => IBTANA_THEME_LICENCE_ENDPOINT
			)
		);
		wp_enqueue_script( 'theme-wizard-script' );
		wp_enqueue_script('tabs', get_template_directory_uri() . '/theme-wizard/getstarted/js/tab.js');
		wp_enqueue_script( 'vw-notify-popup', get_template_directory_uri() . '/assets/js/notify.min.js');
	}

	public static function get_instance() {
		if ( ! self::$instance ) {
			self::$instance = new self;
		}
		return self::$instance;
	}

	public function tgmpa_load( $status ) {
		return is_admin() || current_user_can( 'install_themes' );
	}

	/**
	 * Get configured TGMPA instance
	 *
	 * @access public
	 * @since 1.1.2
	 */
	public function get_tgmpa_instance() {
		$this->tgmpa_instance = call_user_func( array( get_class( $GLOBALS['tgmpa'] ), 'get_instance' ) );
	}

	/**
	 * Update $tgmpa_menu_slug and $tgmpa_parent_slug from TGMPA instance
	 *
	 * @access public
	 * @since 1.1.2
	 */
	public function set_tgmpa_url() {
		$this->tgmpa_menu_slug = ( property_exists( $this->tgmpa_instance, 'menu' ) ) ? $this->tgmpa_instance->menu : $this->tgmpa_menu_slug;
		$this->tgmpa_menu_slug = apply_filters( $this->theme_name . '_theme_setup_wizard_tgmpa_menu_slug', $this->tgmpa_menu_slug );
		$tgmpa_parent_slug = ( property_exists( $this->tgmpa_instance, 'parent_slug' ) && $this->tgmpa_instance->parent_slug !== 'themes.php' ) ? 'admin.php' : 'themes.php';
		$this->tgmpa_url = apply_filters( $this->theme_name . '_theme_setup_wizard_tgmpa_url', $tgmpa_parent_slug . '?page=' . $this->tgmpa_menu_slug );
	}

	/**
	 * Make a modal screen for the wizard
	 */
	public function menu_page() {
		add_menu_page( esc_html( $this->page_title ), esc_html( $this->page_title ), 'manage_options', $this->page_slug, array( $this, 'internet_service_provider_pro_mostrar_guide' ) ,get_template_directory_uri().'/theme-wizard/assets/images/admin-menu.svg',40);
	}

	public function activation_page() {
		$theme_key 						= ThemeWhizzie::get_the_theme_key();
		$validation_status 		= ThemeWhizzie::get_the_validation_status();
		?>
<div class="wrap">
    <label><?php esc_html_e('Enter Your Theme License Key:','internet-service-provider-pro'); ?></label>
    <form id="internet_service_provider_pro_license_form">
        <input type="text" name="internet_service_provider_pro_license_key" value="<?php echo $theme_key ?>"
            <?php if($validation_status === 'true') { echo "disabled"; } ?> required placeholder="License Key" />
        <div class="licence-key-button-wrap">
            <button class="button" type="submit" name="button"
                <?php if($validation_status === 'true') { echo "disabled"; } ?>>
                <?php if ($validation_status === 'true') {
						?>
                Activated
                <?php
						} else { ?>
                Activate
                <?php
						}
						?>
            </button>

            <?php if ($validation_status === 'true') { ?>
            <button id="change--key" class="button" type="button" name="button">
                Change Key
            </button>
            <div class="next-button">
                <button id="start-now-next" class="button" type="button" name="button"
                    onclick="openCity(event, 'demo_offer')">
                    Next
                </button>
            </div>
            <?php } ?>
        </div>
    </form>
</div>
<?php
	}

	/**
	 * Make an interface for the wizard
	 */
	public function wizard_page() {

		tgmpa_load_bulk_installer();

		// install plugins with TGM.
		if ( ! class_exists( 'TGM_Plugin_Activation' ) || ! isset( $GLOBALS['tgmpa'] ) ) {
			die( 'Failed to find TGM' );
		}
		$url = wp_nonce_url( add_query_arg( array( 'plugins' => 'go' ) ), 'whizzie-setup' );

		// copied from TGM
		$method = ''; // Leave blank so WP_Filesystem can populate it as necessary.
		$fields = array_keys( $_POST ); // Extra fields to pass to WP_Filesystem.
		if ( false === ( $creds = request_filesystem_credentials( esc_url_raw( $url ), $method, false, false, $fields ) ) ) {
			return true; // Stop the normal page form from displaying, credential request form will be shown.
		}
		// Now we have some credentials, setup WP_Filesystem.
		if ( ! WP_Filesystem( $creds ) ) {
			// Our credentials were no good, ask the user for them again.
			request_filesystem_credentials( esc_url_raw( $url ), $method, true, false, $fields );
			return true;
		}


		/* If we arrive here, we have the filesystem */ ?>
<div class="wrap">
    <div class="wizard-logo-wrap">
        <img src="<?php echo esc_url(get_template_directory_uri().'/theme-wizard/assets/images/adminIcon.png'); ?>">
        <span class="wizard-main-title">
            <?php esc_html_e('Welcome to ','internet-service-provider-pro'); echo $this->theme_title; ?>
        </span>
    </div>
    <?php echo '<div class="card whizzie-wrap">';
				// The wizard is a list with only one item visible at a time
				$steps = $this->get_steps();
				echo '<ul class="whizzie-menu vw-wizard-menu-page">';
				foreach( $steps as $step ) {
					$class = 'step step-' . esc_attr( $step['id'] );
					echo '<li data-step="' . esc_attr( $step['id'] ) . '" class="' . esc_attr( $class ) . '" >';
						printf( '<span class="wizard-main-title">%s</span>',
							esc_html( $step['title'] )
							);
						// $content is split into summary and detail
						$content = call_user_func( array( $this, $step['view'] ) );
						if( isset( $content['summary'] ) ) {
							printf(
								'<div class="summary">%s</div>',
								wp_kses_post( $content['summary'] )
							);
						}
						if( isset( $content['detail'] ) ) {
							// Add a link to see more detail
							printf( '<div class="wz-require-plugins">');
							printf(
								'<div class="detail">%s</div>',
								$content['detail'] // Need to escape this
							);
							printf('</div>');
						}

						printf('<div class="wizard-button-wrapper">');
						  if (ThemeWhizzie::get_the_validation_status() === 'true') {
							// The next button
							if( isset( $step['button_text'] ) && $step['button_text'] ) {
								printf(
									'<div class="button-wrap"><a href="#" class="button button-primary do-it" data-callback="%s" data-step="%s">%s</a></div>',
									esc_attr( $step['callback'] ),
									esc_attr( $step['id'] ),
									esc_html( $step['button_text'] )
								);
							}

							if( isset( $step['button_text_one'] )) {
								printf(
									'<div class="button-wrap button-wrap-one">
										<a href="#" class="button button-primary do-it" data-callback="install_widgets" data-step="widgets"><img src="'.get_template_directory_uri().'/theme-wizard/assets/images/Customize-Icon.png"></a>
										<p class="demo-type-text">%s</p>
									</div>',
									esc_html( $step['button_text_one'] )
								);
							}
							if( isset( $step['button_text_two'] )) {
								printf(
									'<div class="button-wrap button-wrap-two">
										<a href="#" class="button button-primary do-it" data-step="widgets" data-callback="page_builder" id="ibtana_button"><img src="'.get_template_directory_uri().'/theme-wizard/assets/images/Gutenberg-Icon.png"></a>
										<p class="demo-type-text">%s</p>
									</div>',
									esc_html( $step['button_text_two'] )
								);
							}

						} else {
							printf(
								'<div class="button-wrap"><a href="#" class="button button-primary key-activation-tab-click">%s</a></div>',
								esc_html( __( 'Activate Your License', 'internet-service-provider-pro' ) )
							);
						}
						printf('</div>');

					echo '</li>';
				}
				echo '</ul>';
				echo '<ul class="whizzie-nav wizard-icon-nav">';
					$stepI=1;
					foreach( $steps as $step ) {
						$stepAct=($stepI ==1)? 1 : 0;
						if( isset( $step['icon_url'] ) && $step['icon_url'] ) {
							echo '<li class="nav-step-' . esc_attr( $step['id'] ) . '" wizard-steps="step-'.esc_attr( $step['id'] ).'" data-enable="'.$stepAct.'">
							<img src="'.esc_attr( $step['icon_url'] ).'">
							</li>';
						}
					$stepI++;}
				echo '</ul>';
				?>
    <div class="step-loading"><span class="spinner">
            <img
                src="<?php echo esc_url(get_template_directory_uri().'/theme-wizard/assets/images/Spinner-Animaion.gif'); ?>">
        </span></div>
    <?php echo '</div>';?>

</div>
<?php }
	/**
	 * Set options for the steps
	 * Incorporate any options set by the theme dev
	 * Return the array for the steps
	 * @return Array
	 */
	public function get_steps() {
		$dev_steps = $this->config_steps;
		$steps = array(
			'intro' => array(
				'id'			=> 'intro',
				'title'			=> __( '', 'internet-service-provider-pro' ),
				'icon'			=> 'dashboard',
				'view'			=> 'get_step_intro', // Callback for content
				'callback'		=> 'do_next_step', // Callback for JS
				'button_text'	=> __( 'Start Now', 'internet-service-provider-pro' ),
				'can_skip'		=> false, // Show a skip button?
				'icon_url'      => get_template_directory_uri().'/theme-wizard/assets/images/Icons-01.svg'
			),
			'plugins' => array(
				'id'			=> 'plugins',
				'title'			=> __( 'Plugins', 'internet-service-provider-pro' ),
				'icon'			=> 'admin-plugins',
				'view'			=> 'get_step_plugins',
				'callback'		=> 'install_plugins',
				'button_text'	=> __( 'Install Plugins', 'internet-service-provider-pro' ),
				'can_skip'		=> true,
				'icon_url'      => get_template_directory_uri().'/theme-wizard/assets/images/Icons-02.svg'
			),
			'widgets' => array(
				'id'			=> 'widgets',
				'title'			=> __( 'Customizer', 'internet-service-provider-pro' ),
				'icon'			=> 'welcome-widgets-menus',
				'view'			=> 'get_step_widgets',
				'callback'		=> 'install_widgets',
				'button_text_one'	=> __( 'Click On The Image To Import Customizer Demo', 'internet-service-provider-pro' ),
				'button_text_two'	=> __( 'Click On The Image To Import Gutenberg Block Demo', 'internet-service-provider-pro' ),
				'can_skip'		=> true,
				'icon_url'      => get_template_directory_uri().'/theme-wizard/assets/images/Icons-03.svg'
			),

			'done' => array(
				'id'			=> 'done',
				'title'			=> __( 'All Done', 'internet-service-provider-pro' ),
				'icon'			=> 'yes',
				'view'			=> 'get_step_done',
				'callback'		=> '',
				'icon_url'      => get_template_directory_uri().'/theme-wizard/assets/images/Icons-04.svg'
			)
		);

		// Iterate through each step and replace with dev config values
		if( $dev_steps ) {
			// Configurable elements - these are the only ones the dev can update from config.php
			$can_config = array( 'title', 'icon', 'button_text', 'can_skip','button_text_two' );
			foreach( $dev_steps as $dev_step ) {
				// We can only proceed if an ID exists and matches one of our IDs
				if( isset( $dev_step['id'] ) ) {
					$id = $dev_step['id'];
					if( isset( $steps[$id] ) ) {
						foreach( $can_config as $element ) {
							if( isset( $dev_step[$element] ) ) {
								$steps[$id][$element] = $dev_step[$element];
							}
						}
					}
				}
			}
		}
		return $steps;
	}

	/**
	 * Print the content for the intro step
	 */
	public function get_step_intro() { ?>
<div class="summary">
    <p>
        <?php esc_html_e('Thank you for choosing this '.$this->theme_title.' Theme. Using this quick setup wizard, you will be able to configure your new website and get it running in just a few minutes. Just follow these simple steps mentioned in the wizard and get started with your website.','internet-service-provider-pro'); ?>
    </p>
    <p>
        <?php esc_html_e('You may even skip the steps and get back to the dashboard if you have no time at the present moment. You can come back any time if you change your mind.','internet-service-provider-pro'); ?>
    </p>
</div>
<?php }

	public function get_step_importer() { ?>
<div class="summary">
    <p>
        <?php esc_html_e('Thank you for choosing this '.$this->theme_title.' Theme. Using this quick setup wizard, you will be able to configure your new website and get it running in just a few minutes. Just follow these simple steps mentioned in the wizard and get started with your website.','internet-service-provider-pro'); ?>
    </p>
</div>
<?php }


function moveArrayPosition(&$array, $key, $new_position) {
	if (!array_key_exists($key, $array)) {
		return $array;
	}
	$item = $array[$key];
	unset($array[$key]);
	$result = [];
	$position_added = false;

	foreach ($array as $current_key => $current_value) {
		if (!$position_added && $new_position === count($result)) {
			$result[$key] = $item;
			$position_added = true;
		}
		$result[$current_key] = $current_value;
	}
	if (!$position_added) {
		$result[$key] = $item;
	}
	$array = $result;
	return $array;
}
	/**
	 * Get the content for the plugins step
	 * @return $content Array
	 */
	public function get_step_plugins() {
		$plugins = $this->get_plugins();
		$content = array(); ?>
<div class="summary">
    <p>
        <?php esc_html_e('Additional plugins always make your website exceptional. Install these plugins by clicking the install button. You may also deactivate them from the dashboard.','internet-service-provider-pro') ?>
    </p>
</div>
<?php // The detail element is initially hidden from the user
		$content['detail'] = '<span class="wizard-plugin-count">'.count($plugins['all']).'</span><ul class="whizzie-do-plugins">';

		$plugins['all'] = $this->moveArrayPosition($plugins['all'], 'woocommerce', 0);

		// Add each plugin into a list
		foreach( $plugins['all'] as $slug=>$plugin ) {
			$content['detail'] .= '<li data-slug="' . esc_attr( $slug ) . '">' . esc_html( $plugin['name'] ) . '<div class="wizard-plugin-title">';

			$content['detail'] .= '<span class="wizard-plugin-status">Installation Required</span><i class="spinner"></i></div></li>';

		}
		$content['detail'] .= '</ul>';

		return $content;
	}


	/**
	 * Print the content for the widgets step
	 * @since 1.1.0
	 */
	public function get_step_widgets() { ?>
<div class="summary">
    <p>
        <?php esc_html_e('This theme supports importing the demo content and adding widgets. Get them installed with the below button. Using the Customizer, it is possible to update or even deactivate them','internet-service-provider-pro'); ?>
    </p>
</div>
<?php }


	/**
	 * Print the content for the Design choices for the user
	 */

	public function get_step_design() { ?>

<div class="ibtana-design-product-row">
</div>
<div class="wizard-design-button-wrapper">
    <a href="#" class="button button-primary do-it" data-step="design" id="IbtanaImportButton"
        data-callback="inner_page_builder">Import</a>
</div>

<?php }
	/**
	 * Print the content for the final step
	 */
	public function get_step_done() {

	 ?>

<div class="vw-setup-finish">
    <p>
        <?php echo esc_html('Your demo content has been imported successfully . Click on the finish button for more information.'); ?>
    </p>
    <div class="finish-buttons">
        <a href="<?php echo esc_url(admin_url('/customize.php')); ?>" class="wz-btn-customizer"
            target="_blank"><?php esc_html_e('Customize Your Demo','internet-service-provider-pro') ?></a>
        <a href="" class="wz-btn-builder"
            target="_blank"><?php esc_html_e('Customize Your Demo','internet-service-provider-pro'); ?></a>
        <a href="<?php echo esc_url(site_url()); ?>" class="wz-btn-visit-site"
            target="_blank"><?php esc_html_e('Visit Your Site','internet-service-provider-pro'); ?></a>
    </div>
    <div class="vw-finish-btn">
        <a href="javascript:void(0);" class="button button-primary" onclick="openCity(event, 'theme_info')"
            data-tab="theme_info">Finish</a>
    </div>
</div>

<?php }

	// function moveArrayPosition(&$array, $a, $b) {
	// 		$p1 = array_splice($array, $a, 1);
	// 		$p2 = array_splice($array, 0, $b);
	// 		$array = array_merge($p2,$p1,$array);
	// 		return $array;
	// 	}

	/**
	 * Get the plugins registered with TGMPA
	 */
	public function get_plugins() {

		$instance = call_user_func( array( get_class( $GLOBALS['tgmpa'] ), 'get_instance' ) );
		$plugins = array(
			'all' 		=> array(),
			'install'	=> array(),
			'update'	=> array(),
			'activate'	=> array()
		);
		foreach( $instance->plugins as $slug=>$plugin ) {
			if( $instance->is_plugin_active( $slug ) && false === $instance->does_plugin_have_update( $slug ) ) {
				// Plugin is installed and up to date
				continue;
			} else {
				$plugins['all'][$slug] = $plugin;
				if( ! $instance->is_plugin_installed( $slug ) ) {
					$plugins['install'][$slug] = $plugin;
				} else {
					if( false !== $instance->does_plugin_have_update( $slug ) ) {
						$plugins['update'][$slug] = $plugin;
					}
					if( $instance->can_plugin_activate( $slug ) ) {
						$plugins['activate'][$slug] = $plugin;
					}
				}
			}
		}
		return $plugins;
	}

	public function setup_plugins() {

		if ( ! check_ajax_referer( 'whizzie_nonce', 'wpnonce' ) || empty( $_POST['slug'] ) ) {
			wp_send_json_error( array( 'error' => 1, 'message' => esc_html__( 'No Slug Found','internet-service-provider-pro' ) ) );
		}
		$json = array();
		// send back some json we use to hit up TGM
		$plugins = $this->get_plugins();

		// what are we doing with this plugin?
		foreach ( $plugins['activate'] as $slug => $plugin ) {
			if ( $_POST['slug'] == $slug ) {
				$json = array(
					'url'           => admin_url( $this->tgmpa_url ),
					'plugin'        => array( $slug ),
					'tgmpa-page'    => $this->tgmpa_menu_slug,
					'plugin_status' => 'all',
					'_wpnonce'      => wp_create_nonce( 'bulk-plugins' ),
					'action'        => 'tgmpa-bulk-activate',
					'action2'       => - 1,
					'message'       => esc_html__( 'Activating Plugin','internet-service-provider-pro' ),
				);
				break;
			}
		}
		foreach ( $plugins['update'] as $slug => $plugin ) {
			if ( $_POST['slug'] == $slug ) {
				$json = array(
					'url'           => admin_url( $this->tgmpa_url ),
					'plugin'        => array( $slug ),
					'tgmpa-page'    => $this->tgmpa_menu_slug,
					'plugin_status' => 'all',
					'_wpnonce'      => wp_create_nonce( 'bulk-plugins' ),
					'action'        => 'tgmpa-bulk-update',
					'action2'       => - 1,
					'message'       => esc_html__( 'Updating Plugin','internet-service-provider-pro' ),
				);
				break;
			}
		}
		foreach ( $plugins['install'] as $slug => $plugin ) {
			if ( $_POST['slug'] == $slug ) {
				$json = array(
					'url'           => admin_url( $this->tgmpa_url ),
					'plugin'        => array( $slug ),
					'tgmpa-page'    => $this->tgmpa_menu_slug,
					'plugin_status' => 'all',
					'_wpnonce'      => wp_create_nonce( 'bulk-plugins' ),
					'action'        => 'tgmpa-bulk-install',
					'action2'       => - 1,
					'message'       => esc_html__( 'Installing Plugin','internet-service-provider-pro' ),
				);
				break;
			}
		}
		if ( $json ) {
			$json['hash'] = md5( serialize( $json ) ); // used for checking if duplicates happen, move to next plugin
			wp_send_json( $json );
		} else {
			wp_send_json( array( 'done' => 1, 'message' => esc_html__( 'Success','internet-service-provider-pro' ) ) );
		}
		exit;
	}

	public static function get_page_id_by_title($pagename){
		$args = array(
			'post_type' => 'page',
			'posts_per_page' => 1,
			'title' => $pagename
		);
		$query = new WP_Query( $args );

		$page_id = '1';
		if (isset($query->post->ID)) {
			$page_id = $query->post->ID;
		}

		return $page_id;
	}

	public function theme_create_customizer_nav_menu_gutenberg(){
		$menuname = 'Primary Menu';
		$bpmenulocation = 'primary';
		$menu_exists = wp_get_nav_menu_object( $menuname );

		if( !$menu_exists){
				$menu_id = wp_create_nav_menu($menuname);
				wp_update_nav_menu_item($menu_id, 0, array(
					'menu-item-title' =>  __('Home'),
					'menu-item-classes' => 'home',
					'menu-item-url' => home_url( '/' ),
					'menu-item-status' => 'publish'));


					if( !has_nav_menu( $bpmenulocation ) ){
			        $locations = get_theme_mod('nav_menu_locations');
			        $locations[$bpmenulocation] = $menu_id;
			        set_theme_mod( 'nav_menu_locations', $locations );
			    }
			}
	}

	// ------- Create Nav Menu --------
		public function theme_create_customizer_nav_menu(){
			$menuname = 'Primary Menu';
			$bpmenulocation = 'primary';
			$menu_exists = wp_get_nav_menu_object( $menuname );

			if( !$menu_exists){
			    $menu_id = wp_create_nav_menu($menuname);
			    wp_update_nav_menu_item($menu_id, 0, array(
		        'menu-item-title' =>  __('Home'),
		        'menu-item-classes' => 'home',
		        'menu-item-url' => home_url( '/' ),
		        'menu-item-status' => 'publish'));

				wp_update_nav_menu_item($menu_id, 0, array(
					'menu-item-title' =>  __('Services','internet-service-provider-pro'),
					'menu-item-classes' => 'about',
					'menu-item-url' => get_permalink(ThemeWhizzie::get_page_id_by_title('Services')),
					'menu-item-type' => 'custom',
					'menu-item-status' => 'publish'
				));
				$blog_page_item = wp_update_nav_menu_item($menu_id, 0, array(
					'menu-item-title' => __('Tools','internet-service-provider-pro'),
					'menu-item-classes' => '',
					'menu-item-url' => get_permalink(ThemeWhizzie::get_page_id_by_title('Tools')),
					'menu-item-status' => 'publish',
				));

				  wp_update_nav_menu_item($menu_id, 0, array(
					'menu-item-title' => __('Feature','internet-service-provider-pro'),
					'menu-item-classes' => '',
					'menu-item-url' => get_permalink(ThemeWhizzie::get_page_id_by_title('Feature')),
					'menu-item-status' => 'publish',
				));
				
				wp_update_nav_menu_item($menu_id, 0, array(
					'menu-item-title' => __('Blog With No Sidebar','internet-service-provider-pro'),
					'menu-item-classes' => 'blog-left-sidebar',
					'menu-item-url' => get_permalink(ThemeWhizzie::get_page_id_by_title('Blog')),
					'menu-item-status' => 'publish',
					'menu-item-parent-id' => $blog_page_item
				));
				 wp_update_nav_menu_item($menu_id, 0, array(
					 'menu-item-title' => __('Blog Left Sidebar','internet-service-provider-pro'),
					 'menu-item-classes' => 'blog-left-sidebar',
					 'menu-item-url' => get_permalink(ThemeWhizzie::get_page_id_by_title('Blog Left Sidebar')),
					 'menu-item-status' => 'publish',
					 'menu-item-parent-id' => $blog_page_item
				 ));
				 wp_update_nav_menu_item($menu_id, 0, array(
					 'menu-item-title' => __('Blog Right Sidebar','internet-service-provider-pro'),
					 'menu-item-classes' => 'blog-right-sidebar',
					 'menu-item-url' => get_permalink(ThemeWhizzie::get_page_id_by_title('Blog Right Sidebar')),
					 'menu-item-status' => 'publish',
					 'menu-item-parent-id' => $blog_page_item
				 ));

				 wp_update_nav_menu_item($menu_id, 0, array(
					'menu-item-title' =>  __('404','internet-service-provider-pro'),
					'menu-item-classes' => 'error',
					'menu-item-url' => get_permalink(ThemeWhizzie::get_page_id_by_title('404')),
					'menu-item-status' => 'publish',
					'menu-item-parent-id' => $blog_page_item
				));

				 wp_update_nav_menu_item($menu_id, 0, array(
					'menu-item-title' =>  __('Contact','internet-service-provider-pro'),
					'menu-item-classes' => 'contact',
					'menu-item-url' => get_permalink(ThemeWhizzie::get_page_id_by_title('Contact Us')),
					'menu-item-status' => 'publish',
					'menu-item-parent-id' => $parent_page_item
				));
			    if( !has_nav_menu( $bpmenulocation ) ){
			        $locations = get_theme_mod('nav_menu_locations');
			        $locations[$bpmenulocation] = $menu_id;
			        set_theme_mod( 'nav_menu_locations', $locations );
			    }
			}
		}
		// ------- Create Footer Menu --------
		public function theme_create_customizer_footer_quick_links() {
			$menuname = 'Quick Links';
			$bpmenulocation = 'footer1';
			$menu_exists = wp_get_nav_menu_object( $menuname );

			if( !$menu_exists){
				$menu_id = wp_create_nav_menu($menuname);

				// echo $menu_id . '  Quick Menu';echo "<br>";

				wp_update_nav_menu_item($menu_id, 0, array(
					'menu-item-title' =>  __('Home','internet-service-provider-pro'),
					'menu-item-classes' => '',
					'menu-item-url' => home_url( '/' ),
					'menu-item-type' => 'custom',
					'menu-item-status' => 'publish'
				));

				wp_update_nav_menu_item($menu_id, 0, array(
					'menu-item-title' =>  __('About Us','internet-service-provider-pro'),
					'menu-item-classes' => '',
					'menu-item-url' => get_permalink(ThemeWhizzie::get_page_id_by_title('About Us')),
					'menu-item-type' => 'custom',
					'menu-item-status' => 'publish'
				));

				wp_update_nav_menu_item($menu_id, 0, array(
					'menu-item-title' =>  __('Services','internet-service-provider-pro'),
					'menu-item-url' => get_permalink(ThemeWhizzie::get_page_id_by_title('Services')),
					'menu-item-type' => 'custom',
					'menu-item-status' => 'publish'
				));

				wp_update_nav_menu_item($menu_id, 0, array(
					'menu-item-title' =>  __('Pricing Plans','internet-service-provider-pro'),
					'menu-item-url' => get_permalink(ThemeWhizzie::get_page_id_by_title('Pricing Plans')),
					'menu-item-type' => 'custom',
					'menu-item-status' => 'publish'
				));
				
				wp_update_nav_menu_item($menu_id, 0, array(
					'menu-item-title' =>  __('Coverage Area','internet-service-provider-pro'),
					'menu-item-classes' => 'page',
					'menu-item-url' => get_permalink(ThemeWhizzie::get_page_id_by_title('Coverage Area')),
					'menu-item-status' => 'publish'
				));
				
				if( !has_nav_menu( $bpmenulocation ) ){
					$locations = get_theme_mod('nav_menu_locations');
					$locations[$bpmenulocation] = $menu_id;
					set_theme_mod( 'nav_menu_locations', $locations );
				}
			}
		}

	
	/**
	 * Imports the Demo Content
	 * @since 1.1.0
	 */
	 public function setup_widgets() {

		$woosq_settings = get_option('woosq_settings', []);
		if (!is_array($woosq_settings)) {
			$woosq_settings = [];
		}
		$woosq_settings['button_icon'] = 'only';
		update_option('woosq_settings', $woosq_settings);

		update_option('yith_wcwl_rendering_method', 'php-templates');
		
		ini_set( 'upload_max_filesize', '300M' );
		ini_set( 'max_execution_time', '3000' );

		$page = ThemeWhizzie::get_page_id_by_title('Wishlist');
		if ($page == '1') {
			$wishlist_page = array(
				'post_title'    => 'Wishlist',
				'post_content'  => '[yith_wcwl_wishlist]',
				'post_status'   => 'publish',
				'post_type'     => 'page',
			);
			$wishlist_page_id = wp_insert_post($wishlist_page);
			if ($wishlist_page_id) {
				update_option('yith_wcwl_wishlist_page_id', $wishlist_page_id);
			}
		}


		 // $this->custom_posttype_option();

		 set_theme_mod('internet_service_provider_pro_inner_page_banner_bgimage', get_template_directory_uri().'/assets/images/title-banner.png');


	 	// vw_title_banner_image_wp_custom_attachment START
		 $image_url 	= get_template_directory_uri().'/assets/images/title-banner.png';
		 $upload_dir = wp_upload_dir();
		 $image_data = file_get_contents( $image_url );
		 $filename = basename( $image_url );
		 if ( wp_mkdir_p( $upload_dir['path'] ) ) {
			 $file = $upload_dir['path'] . '/' . $filename;
		 } else {
			 $file = $upload_dir['basedir'] . '/' . $filename;
		 }
		 file_put_contents( $file, $image_data );
		 $wp_filetype = wp_check_filetype( $filename, null );
		 $attachment = array(
			 'post_mime_type'	=> $wp_filetype['type'],
			 'post_title' 			=> sanitize_file_name( $filename ),
			 'post_content' 		=> '',
			 'post_status' 		=> 'inherit'
		 );
		 $attach_id = wp_insert_attachment( $attachment, $file );
		 require_once( ABSPATH . 'wp-admin/includes/image.php' );
		 $attach_data = wp_generate_attachment_metadata( $attach_id, $file );
		 wp_update_attachment_metadata( $attach_id, $attach_data );
		 $banner_attachment_url = wp_get_attachment_url( $attach_id );
		 // vw_title_banner_image_wp_custom_attachment END

		 //POST and update the customizer and other related data of VW Video Vlog Pro
		 $home_id=''; $vw_blog_id=''; $page_id=''; $contact_id='';
		 // Create a front page and assigned the template
		 $home_title = 'Home';
		 $home_check = get_page_by_title($home_title);
		 $home = array(
			 'post_type' => 'page',
 		   'post_title' => $home_title,
 		   'post_status' => 'publish',
 		   'post_author' => 1,
 		   'post_slug' => 'home'
		 );
		 $home_id = wp_insert_post($home);
		 //Set the home page template
		 add_post_meta( $home_id, '_wp_page_template', 'page-template/home-page.php' );

		 //Set the static front page
		$home = get_page_by_title( 'Home' );
		update_option( 'page_on_front', $home->ID );
		update_option( 'show_on_front', 'page' );

		//  assign the banner image to the shop page
		$shop_page = get_page_by_title('Shop');
		add_post_meta( $shop_page->ID, 'vw_title_banner_image_wp_custom_attachment', $banner_attachment_url );


		// Create a blog Blog and assigned the template
		$blog_title = 'Blog';
		$blog_check = get_page_by_title($blog_title);
		$blog = array(
			'post_type' => 'page',
			'post_title' => $blog_title,
			'post_status' => 'publish',
			'post_author' => 1,
			'post_slug' => 'blog'
		);
		$blog_id = wp_insert_post($blog);

		//Set the blog page template
		add_post_meta( $blog_id, '_wp_page_template', 'page-template/blog-fullwidth-extend.php' );
		add_post_meta( $blog_id, 'vw_title_banner_image_wp_custom_attachment', $banner_attachment_url );
		// add_post_meta( $blog_id, '
		// ', $attachment_url );



		$blog_title = 'Blog Left Sidebar';
		$blog = array(
			'post_type' 	=> 'page',
			'post_title' 	=> $blog_title,
			'post_status' => 'publish',
			'post_author' => 1,
			'post_slug' 	=> 'blog-left-sidebar'
		);
		$blog_id = wp_insert_post($blog);

		//Set the blog page template
		add_post_meta( $blog_id, '_wp_page_template', 'page-template/blog-with-left-sidebar.php' );
		add_post_meta( $blog_id, 'vw_title_banner_image_wp_custom_attachment', $banner_attachment_url );

		$blog_title = 'Blog Right Sidebar';
		$blog = array(
			'post_type' 	=> 'page',
			'post_title' 	=> $blog_title,
			'post_status' => 'publish',
			'post_author' => 1,
			'post_slug' 	=> 'blog-right-sidebar'
		);
		$blog_id = wp_insert_post($blog);

		//Set the blog page template
		add_post_meta( $blog_id, '_wp_page_template', 'page-template/blog-with-right-sidebar.php' );
		add_post_meta( $blog_id, 'vw_title_banner_image_wp_custom_attachment', $banner_attachment_url );

		// Create a Page
		if( get_page_by_title( 'Page' ) == NULL ) {
			$page_title = 'Page ';
			$content = 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est. laborum.ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.';

			$page_check = get_page_by_title($page_title);
			$page = array(
				'post_type' => 'page',
				'post_title' => $page_title,
				'post_content'  => $content,
				'post_status' => 'publish',
				'post_author' => 1,
				'post_slug' => 'page'
			);
			$page_id = wp_insert_post($page);
			add_post_meta( $page_id , 'vw_title_banner_image_wp_custom_attachment', $banner_attachment_url );
			$page_title = 'Page Left Sidebar';
			$content = 'Te obtinuit ut adepto satis somno. Aliisque institoribus iter deliciae vivet vita. Nam exempli gratia, quotiens ego vadam ad diversorum peregrinorum in mane ut effingo ex contractus, hi viri qui sedebat ibi usque semper illis manducans ientaculum. Solum cum bulla ut debui; EGO youd adepto a macula proiciendi. Sed quis scit si forte quod esset optima res pro me. sicut ea quae sentio. Qui vellem cadunt off ius desk ejus! Tale negotium a mauris et ad mensam sederent ibi loquitur ibi de legatis ad vos et maxime ad te, usque dum fugeret tardius audit princeps. Bene tamen fiduciam Ego got off semelTe obtinuit ut adepto satis somno. Aliisque institoribus iter deliciae vivet vita. Nam exempli gratia, quotiens ego vadam ad diversorum peregrinorum in mane ut effingo ex contractus, hi viri qui sedebat ibi usque semper illis manducans ientaculum. Solum cum bulla ut debui; EGO youd adepto a macula proiciendi. Sed quis scit si forte quod esset optima res pro me. sicut ea quae sentio. Qui vellem cadunt off ius desk ejus! Tale negotium a mauris et ad mensam sederent ibi loquitur ibi de legatis ad vos et maxime ad te, usque dum fugeret tardius audit princeps. Bene tamen fiduciam Ego got off semel.';

			$page_check = get_page_by_title($page_title);
			$vw_page = array(
				'post_type' 		=> 'page',
				'post_title' 		=> $page_title,
				'post_content'	=> $content,
				'post_status' 	=> 'publish',
				'post_author' 	=> 1,
				'post_slug' 		=> 'page-left'
			);
			$page_id = wp_insert_post($vw_page);

			//Set the blog page template
			add_post_meta( $page_id, '_wp_page_template', 'page-template/page-with-left-sidebar.php' );
			add_post_meta( $page_id, 'vw_title_banner_image_wp_custom_attachment', $banner_attachment_url );

			$page_title = 'Page Right Sidebar';
			$content = 'Te obtinuit ut adepto satis somno. Aliisque institoribus iter deliciae vivet vita. Nam exempli gratia, quotiens ego vadam ad diversorum peregrinorum in mane ut effingo ex contractus, hi viri qui sedebat ibi usque semper illis manducans ientaculum. Solum cum bulla ut debui; EGO youd adepto a macula proiciendi. Sed quis scit si forte quod esset optima res pro me. sicut ea quae sentio. Qui vellem cadunt off ius desk ejus! Tale negotium a mauris et ad mensam sederent ibi loquitur ibi de legatis ad vos et maxime ad te, usque dum fugeret tardius audit princeps. Bene tamen fiduciam Ego got off semelTe obtinuit ut adepto satis somno. Aliisque institoribus iter deliciae vivet vita. Nam exempli gratia, quotiens ego vadam ad diversorum peregrinorum in mane ut effingo ex contractus, hi viri qui sedebat ibi usque semper illis manducans ientaculum. Solum cum bulla ut debui; EGO youd adepto a macula proiciendi. Sed quis scit si forte quod esset optima res pro me. sicut ea quae sentio. Qui vellem cadunt off ius desk ejus! Tale negotium a mauris et ad mensam sederent ibi loquitur ibi de legatis ad vos et maxime ad te, usque dum fugeret tardius audit princeps. Bene tamen fiduciam Ego got off semel.';

			$page_check = get_page_by_title($page_title);
			$vw_page = array(
				'post_type' 		=> 'page',
				'post_title' 		=> $page_title,
				'post_content'	=> $content,
				'post_status' 	=> 'publish',
				'post_author' 	=> 1,
				'post_slug' 		=> 'page-right'
			);
			$page_id = wp_insert_post($vw_page);

			//Set the blog page template
			add_post_meta( $page_id, '_wp_page_template', 'page-template/page-with-right-sidebar.php' );
			add_post_meta( $page_id, 'vw_title_banner_image_wp_custom_attachment', $banner_attachment_url );
		}
		// Create a contact page and assigned the template
		$contact_title = 'Contact Us';
		$contact_check = get_page_by_title($contact_title);
		$contact = array(
			'post_type' => 'page',
			'post_title' => $contact_title,
			'post_status' => 'publish',
			'post_author' => 1,
			'post_slug' => 'contact'
		);
		$contact_id = wp_insert_post($contact);

		//Set the blog with right sidebar template
		add_post_meta( $contact_id, '_wp_page_template', 'page-template/contact.php' );
		add_post_meta( $contact_id, 'vw_title_banner_image_wp_custom_attachment', $banner_attachment_url );


		//-----Gallery-------
		$services_title = 'Services';
		$services_check = get_page_by_title($services_title);
		$services = array(
			'post_type' => 'page',
			'post_title' => $services_title,
			'post_content' => '[internet-service-provider-pro-services]',
			'post_status' => 'publish',
			'post_author' => 1,
			'post_slug' => 'service'
		);
		$services_id = wp_insert_post($services);

		add_post_meta( $services_id, 'vw_title_banner_image_wp_custom_attachment', $banner_attachment_url );

		/* Tools Page */

		$tools_content = '
			<!-- wp:group {"layout":{"type":"constrained"}} -->
			<div class="wp-block-group"><!-- wp:columns -->
			<div class="wp-block-columns"><!-- wp:column {"className":" py-5 px-5 mb-3 ive-internet-service-provider-pro-border-radius-30","backgroundColor":"black"} -->
			<div class="wp-block-column  py-5 px-5 mb-3 ive-internet-service-provider-pro-border-radius-30 has-black-background-color has-background"><!-- wp:heading {"level":6,"className":"d-inline-block px-5 py-3 ive-internet-service-provider-pro-border-radius-10","style":{"elements":{"link":{"color":{"text":"var:preset|color|white"}}},"color":{"background":"#06b6d4"}},"textColor":"white"} -->
			<h6 class="wp-block-heading d-inline-block px-5 py-3 ive-internet-service-provider-pro-border-radius-10 has-white-color has-text-color has-background has-link-color" style="background-color:#06b6d4"><em>Check</em></h6>
			<!-- /wp:heading -->

			<!-- wp:spacer -->
			<div style="height:100px" aria-hidden="true" class="wp-block-spacer"></div>
			<!-- /wp:spacer -->

			<!-- wp:heading {"level":4,"className":"mb-3","style":{"elements":{"link":{"color":{"text":"var:preset|color|white"}}},"typography":{"fontStyle":"normal","fontWeight":"600","fontSize":"30px"}},"textColor":"white"} -->
			<h4 class="wp-block-heading mb-3 has-white-color has-text-color has-link-color" style="font-size:30px;font-style:normal;font-weight:600">Speed Test</h4>
			<!-- /wp:heading -->

			<!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"#bababa"}}},"color":{"text":"#bababa"}}} -->
			<p class="has-text-color has-link-color" style="color:#bababa">Let users check their internet speed directly on your site</p>
			<!-- /wp:paragraph --></div>
			<!-- /wp:column -->

			<!-- wp:column {"className":" py-5 px-5 mb-3 ive-internet-service-provider-pro-border-radius-30","backgroundColor":"black"} -->
			<div class="wp-block-column  py-5 px-5 mb-3 ive-internet-service-provider-pro-border-radius-30 has-black-background-color has-background"><!-- wp:heading {"level":6,"className":"d-inline-block px-5 py-3 ive-internet-service-provider-pro-border-radius-10","style":{"elements":{"link":{"color":{"text":"var:preset|color|white"}}},"color":{"background":"#06b6d4"}},"textColor":"white"} -->
			<h6 class="wp-block-heading d-inline-block px-5 py-3 ive-internet-service-provider-pro-border-radius-10 has-white-color has-text-color has-background has-link-color" style="background-color:#06b6d4"><em><em>Locate</em></em></h6>
			<!-- /wp:heading -->

			<!-- wp:spacer -->
			<div style="height:100px" aria-hidden="true" class="wp-block-spacer"></div>
			<!-- /wp:spacer -->

			<!-- wp:heading {"level":4,"className":"mb-3","style":{"elements":{"link":{"color":{"text":"var:preset|color|white"}}},"typography":{"fontStyle":"normal","fontWeight":"600","fontSize":"30px"}},"textColor":"white"} -->
			<h4 class="wp-block-heading mb-3 has-white-color has-text-color has-link-color" style="font-size:30px;font-style:normal;font-weight:600">Coverage Map</h4>
			<!-- /wp:heading -->

			<!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"#bababa"}}},"color":{"text":"#bababa"}}} -->
			<p class="has-text-color has-link-color" style="color:#bababa">Interactive map showing service availability by city/region.</p>
			<!-- /wp:paragraph --></div>
			<!-- /wp:column -->

			<!-- wp:column {"className":" py-5 px-5 mb-3 ive-internet-service-provider-pro-border-radius-30","backgroundColor":"black"} -->
			<div class="wp-block-column  py-5 px-5 mb-3 ive-internet-service-provider-pro-border-radius-30 has-black-background-color has-background"><!-- wp:heading {"level":6,"className":"d-inline-block px-5 py-3 ive-internet-service-provider-pro-border-radius-10","style":{"elements":{"link":{"color":{"text":"var:preset|color|white"}}},"color":{"background":"#06b6d4"}},"textColor":"white"} -->
			<h6 class="wp-block-heading d-inline-block px-5 py-3 ive-internet-service-provider-pro-border-radius-10 has-white-color has-text-color has-background has-link-color" style="background-color:#06b6d4"><em><em>Choose</em></em></h6>
			<!-- /wp:heading -->

			<!-- wp:spacer -->
			<div style="height:100px" aria-hidden="true" class="wp-block-spacer"></div>
			<!-- /wp:spacer -->

			<!-- wp:heading {"level":4,"className":"mb-3","style":{"elements":{"link":{"color":{"text":"var:preset|color|white"}}},"typography":{"fontStyle":"normal","fontWeight":"600","fontSize":"30px"}},"textColor":"white"} -->
			<h4 class="wp-block-heading mb-3 has-white-color has-text-color has-link-color" style="font-size:30px;font-style:normal;font-weight:600">Plan Comparison</h4>
			<!-- /wp:heading -->

			<!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"#bababa"}}},"color":{"text":"#bababa"}}} -->
			<p class="has-text-color has-link-color" style="color:#bababa">Side‑by‑side comparison of different ISP packages.</p>
			<!-- /wp:paragraph --></div>
			<!-- /wp:column --></div>
			<!-- /wp:columns -->

			<!-- wp:columns -->
			<div class="wp-block-columns"><!-- wp:column {"className":" py-5 px-5 mb-3 ive-internet-service-provider-pro-border-radius-30","backgroundColor":"black"} -->
			<div class="wp-block-column  py-5 px-5 mb-3 ive-internet-service-provider-pro-border-radius-30 has-black-background-color has-background"><!-- wp:heading {"level":6,"className":"d-inline-block px-5 py-3 ive-internet-service-provider-pro-border-radius-10","style":{"elements":{"link":{"color":{"text":"var:preset|color|white"}}},"color":{"background":"#06b6d4"}},"textColor":"white"} -->
			<h6 class="wp-block-heading d-inline-block px-5 py-3 ive-internet-service-provider-pro-border-radius-10 has-white-color has-text-color has-background has-link-color" style="background-color:#06b6d4"><em><em>Estimate</em></em></h6>
			<!-- /wp:heading -->

			<!-- wp:spacer -->
			<div style="height:100px" aria-hidden="true" class="wp-block-spacer"></div>
			<!-- /wp:spacer -->

			<!-- wp:heading {"level":4,"className":"mb-3","style":{"elements":{"link":{"color":{"text":"var:preset|color|white"}}},"typography":{"fontStyle":"normal","fontWeight":"600","fontSize":"30px"}},"textColor":"white"} -->
			<h4 class="wp-block-heading mb-3 has-white-color has-text-color has-link-color" style="font-size:30px;font-style:normal;font-weight:600">Bill Calculator</h4>
			<!-- /wp:heading -->

			<!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"#bababa"}}},"color":{"text":"#bababa"}}} -->
			<p class="has-text-color has-link-color" style="color:#bababa">Estimate monthly costs based on selected plan and add‑ons.</p>
			<!-- /wp:paragraph --></div>
			<!-- /wp:column -->

			<!-- wp:column {"className":" py-5 px-5 mb-3 ive-internet-service-provider-pro-border-radius-30","backgroundColor":"black"} -->
			<div class="wp-block-column  py-5 px-5 mb-3 ive-internet-service-provider-pro-border-radius-30 has-black-background-color has-background"><!-- wp:heading {"level":6,"className":"d-inline-block px-5 py-3 ive-internet-service-provider-pro-border-radius-10","style":{"elements":{"link":{"color":{"text":"var:preset|color|white"}}},"color":{"background":"#06b6d4"}},"textColor":"white"} -->
			<h6 class="wp-block-heading d-inline-block px-5 py-3 ive-internet-service-provider-pro-border-radius-10 has-white-color has-text-color has-background has-link-color" style="background-color:#06b6d4"><em><em>Help</em></em></h6>
			<!-- /wp:heading -->

			<!-- wp:spacer -->
			<div style="height:100px" aria-hidden="true" class="wp-block-spacer"></div>
			<!-- /wp:spacer -->

			<!-- wp:heading {"level":4,"className":"mb-3","style":{"elements":{"link":{"color":{"text":"var:preset|color|white"}}},"typography":{"fontStyle":"normal","fontWeight":"600","fontSize":"30px"}},"textColor":"white"} -->
			<h4 class="wp-block-heading mb-3 has-white-color has-text-color has-link-color" style="font-size:30px;font-style:normal;font-weight:600">Support Center</h4>
			<!-- /wp:heading -->

			<!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"#bababa"}}},"color":{"text":"#bababa"}}} -->
			<p class="has-text-color has-link-color" style="color:#bababa">Quick links to FAQs, troubleshooting guides, or live chat.</p>
			<!-- /wp:paragraph --></div>
			<!-- /wp:column -->

			<!-- wp:column {"className":" py-5 px-5 mb-3 ive-internet-service-provider-pro-border-radius-30","backgroundColor":"black"} -->
			<div class="wp-block-column  py-5 px-5 mb-3 ive-internet-service-provider-pro-border-radius-30 has-black-background-color has-background"><!-- wp:heading {"level":6,"className":"d-inline-block px-5 py-3 ive-internet-service-provider-pro-border-radius-10","style":{"elements":{"link":{"color":{"text":"var:preset|color|white"}}},"color":{"background":"#06b6d4"}},"textColor":"white"} -->
			<h6 class="wp-block-heading d-inline-block px-5 py-3 ive-internet-service-provider-pro-border-radius-10 has-white-color has-text-color has-background has-link-color" style="background-color:#06b6d4"><em><em>Access</em></em></h6>
			<!-- /wp:heading -->

			<!-- wp:spacer -->
			<div style="height:100px" aria-hidden="true" class="wp-block-spacer"></div>
			<!-- /wp:spacer -->

			<!-- wp:heading {"level":4,"className":"mb-3","style":{"elements":{"link":{"color":{"text":"var:preset|color|white"}}},"typography":{"fontStyle":"normal","fontWeight":"600","fontSize":"30px"}},"textColor":"white"} -->
			<h4 class="wp-block-heading mb-3 has-white-color has-text-color has-link-color" style="font-size:30px;font-style:normal;font-weight:600">Download Center</h4>
			<!-- /wp:heading -->

			<!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"#bababa"}}},"color":{"text":"#bababa"}}} -->
			<p class="has-text-color has-link-color" style="color:#bababa">User manuals, router setup guides, or app links.</p>
			<!-- /wp:paragraph --></div>
			<!-- /wp:column --></div>
			<!-- /wp:columns --></div>
			<!-- /wp:group -->

			<!-- wp:paragraph -->
			<p></p>
			<!-- /wp:paragraph -->
		';

		$tools_title = 'Tools';
		$tools_check = get_page_by_title($tools_title);
		$tools = array(
			'post_type' => 'page',
			'post_title' => $tools_title,
			'post_content' => $tools_content,
			'post_status' => 'publish',
			'post_author' => 1,
			'post_slug' => 'tools'
		);
		$tools_id = wp_insert_post($tools);

		add_post_meta( $tools_id, 'vw_title_banner_image_wp_custom_attachment', $banner_attachment_url );
		
		//-----Portfolio-------
		$feature_title = 'Feature';
		$feature_check = get_page_by_title($feature_title);
		$feature = array(
			'post_type' => 'page',
			'post_title' => $feature_title,
			'post_content' => "[internet-service-provider-pro-why-choose-us]",
			'post_status' => 'publish',
			'post_author' => 1,
			'post_slug' => 'feature'
		);
		$feature_id = wp_insert_post($feature);

		add_post_meta( $feature_id, '_wp_page_template', 'page-template/fullwidth-template.php' );

		add_post_meta( $feature_id, 'vw_title_banner_image_wp_custom_attachment', $banner_attachment_url );

		//-----Pricing Plans-------
		$plan_title = 'Pricing Plans';
		$plan_check = get_page_by_title($plan_title);
		$plan = array(
			'post_type' => 'page',
			'post_title' => $plan_title,
			'post_content' => "[internet-service-provider-pro-pricing-plan]",
			'post_status' => 'publish',
			'post_author' => 1,
			'post_slug' => 'plan'
		);
		$plan_id = wp_insert_post($plan);

		add_post_meta( $plan_id, '_wp_page_template', 'page-template/fullwidth-template.php' );

		add_post_meta( $plan_id, 'vw_title_banner_image_wp_custom_attachment', $banner_attachment_url );

		//-----Pricing Plans-------
		$plan_title = 'Coverage Area';
		$plan_check = get_page_by_title($plan_title);
		$plan = array(
			'post_type' => 'page',
			'post_title' => $plan_title,
			'post_content' => "[internet-service-provider-pro-map-area]",
			'post_status' => 'publish',
			'post_author' => 1,
			'post_slug' => 'plan'
		);
		$plan_id = wp_insert_post($plan);

		add_post_meta( $plan_id, '_wp_page_template', 'page-template/fullwidth-template.php' );

		add_post_meta( $plan_id, 'vw_title_banner_image_wp_custom_attachment', $banner_attachment_url );

		//---------------FAQ-------------

		$faq_title = 'FAQs';
		$faq_check = get_page_by_title($faq_title);
		$faq = array(
			'post_type' => 'page',
			'post_title' => $faq_title,
			'post_status' => 'publish',
			'post_author' => 1,
			'post_slug' => 'faq'
		);
		$faq_id = wp_insert_post($faq);

		add_post_meta( $faq_id, '_wp_page_template', 'page-template/faq.php' );
		add_post_meta( $faq_id, 'vw_title_banner_image_wp_custom_attachment', $banner_attachment_url );


		// $menu_title = '2 Columns';
		// $content = '[products  columns="2" orderby="date" order="DESC" visibility="visible"]';
		// $menu = array(
		// 	'post_type' 	=> 'page',
		// 	'post_title' 	=> $menu_title,
		// 	'post_content'  => $content,
		// 	'post_status' => 'publish',
		// 	'post_author' => 1,
		// 	'post_slug' 	=> 'page'
		// );
		// $menu_id = wp_insert_post($menu);

		// //Set the blog with right sidebar template
		// add_post_meta( $menu_id, '_wp_page_template', 'page-template/2-columns.php' );
		// add_post_meta( $menu_id, 'vw_title_banner_image_wp_custom_attachment', $banner_attachment_url );

		// // Create a contact page and assigned the template
		// $menu_title = '3 Columns';
		// $content = '[products  columns="3" orderby="date" order="DESC" visibility="visible"]';
		// $menu = array(
		// 	'post_type' 	=> 'page',
		// 	'post_title' 	=> $menu_title,
		// 	'post_content'  => $content,
		// 	'post_status' => 'publish',
		// 	'post_author' => 1,
		// 	'post_slug' 	=> 'page'
		// );
		// $menu_id = wp_insert_post($menu);

		// //Set the blog with right sidebar template
		// add_post_meta( $menu_id, '_wp_page_template', 'page-template/3-columns.php' );
		// add_post_meta( $menu_id, 'vw_title_banner_image_wp_custom_attachment', $banner_attachment_url);

		// Create a  page and assigned the template
		// $menu_title = '4 Columns';
		// $content = '[products  columns="4" orderby="date" order="DESC" visibility="visible"]';
		// $menu = array(
		// 	'post_type' 	=> 'page',
		// 	'post_title' 	=> $menu_title,
		// 	'post_content'  => $content,
		// 	'post_status' => 'publish',
		// 	'post_author' => 1,
		// 	'post_slug' 	=> 'page'
		// );
		// $menu_id = wp_insert_post($menu);

		$content = '
		<!-- wp:shortcode -->
		[internet-service-provider-pro-about-us]
		<!-- /wp:shortcode -->
		<!-- wp:shortcode -->
		[internet-service-provider-pro-testimonials]
		<!-- /wp:shortcode -->

		<!-- wp:paragraph -->
		<p></p>
		<!-- /wp:paragraph -->';


		$aboutus_title = 'About Us';
	  	$aboutus= array(
			'post_type' 	=> 'page',
			'post_title' 	=> $aboutus_title,
			'post_content' 	=> $content,
			'post_status' => 'publish',
			'post_author' => 1,
			'post_slug' 	=> 'aboutus'
		);
		$aboutus_id = wp_insert_post($aboutus);
		add_post_meta( $aboutus_id, '_wp_page_template', 'fullwidth-template.php' );
		add_post_meta( $aboutus_id, 'vw_title_banner_image_wp_custom_attachment', $banner_attachment_url );

		$error_title = '404';
	  	$error = array(
			'post_type' 	=> 'page',
			'post_title' 	=> $error_title,
			'post_status' => 'publish',
			'post_author' => 1,
			'post_slug' 	=> 'error-us'
		);
		$error_id = wp_insert_post($error);

		//Set the single testimonial with right sidebar template
		add_post_meta( $error_id, '_wp_page_template', '404.php' );
		add_post_meta( $error_id, 'vw_title_banner_image_wp_custom_attachment', $banner_attachment_url );

		// $login_title = 'Login';
		// $login_check = get_page_by_title($login_title);
		// $login = array(
		// 	'post_type' => 'page',
		// 	'post_title' => $login_title,
		// 	'post_status' => 'publish',
		// 	'post_author' => 1,
		// 	'post_slug' => 'login'
		// );
		// $login_id = wp_insert_post($login);

		// add_post_meta( $login_id, '_wp_page_template', 'page-template/login.php' );
		// add_post_meta( $login_id, 'vw_title_banner_image_wp_custom_attachment', $banner_attachment_url );
		

		// -------------- Section Ordering ---------------
		set_theme_mod( 'internet_service_provider_pro_section_ordering_settings_repeater', 'main-banner,about-us,services,why-choose-us,exclusive-offers,map-area,pricing-plan,testimonials,content-area');

		// topbar

		$topbar_social_icons = array(
			'vwsmp_facebook' 	=> 'https://www.facebook.com/',
			'vwsmp_admin_check_facebook' 	=> '1',
			'vwsmp_twitter'  	=> 'https://www.twitter.com/',
			'vwsmp_admin_check_twitter' 	=> '1',
			'vwsmp_instagram'  	=> 'https://www.instagram.com/',
			'vwsmp_admin_check_instagram' 	=> '1',
			'vwsmp_pinterest' => 'https://www.pinterest.com/',
			'vwsmp_admin_check_pinterest' 	=> '1',
		);

	 	update_option('vwsmp_options', $topbar_social_icons);
	 
		update_option('woocommerce_price_num_decimals', 2);

		//Scroll Top
		set_theme_mod( 'internet_service_provider_pro_genral_section_show_scroll_top_icon', 'fas fa-angle-double-up' );

		// ------------topbar -----------------

		 /*customizer-part-social-icons.php*/

		set_theme_mod( 'internet_service_provider_pro_headertwitter', 'https://twitter.com/' ); 
		set_theme_mod( 'internet_service_provider_pro_headertwitter_icon', 'fa-brands fa-square-x-twitter' ); 

		set_theme_mod( 'internet_service_provider_pro_headerfacebook', 'https://www.facebook.com/' ); 
		set_theme_mod( 'internet_service_provider_pro_headerfacebook_icon', 'fa-brands fa-facebook ' ); 

		set_theme_mod( 'internet_service_provider_pro_headeryoutube', 'https://www.youtube.com/' );
		set_theme_mod( 'internet_service_provider_pro_headeryoutube_icon', 'fa-brands fa-square-youtube' );

		set_theme_mod( 'internet_service_provider_pro_headerinstagram', 'https://www.instagram.com/' );
		set_theme_mod( 'internet_service_provider_pro_headerinstagram_icon', 'fa-brands fa-square-instagram' );

		set_theme_mod( 'internet_service_provider_pro_headerpinterest', 'https://www.instagram.com/' );
		set_theme_mod( 'internet_service_provider_pro_headerpinterest_icon', 'fa-brands fa-pinterest' );
			
		set_theme_mod( 'internet_service_provider_pro_header_button_title', 'Login' );
		set_theme_mod( 'internet_service_provider_pro_header_button_url', home_url('/?action=login') );

		set_theme_mod( 'internet_service_provider_pro_header_serach_input_placeholder_text', 'Search Here');

		set_theme_mod( 'internet_service_provider_pro_single_post_page_related_post_heading', 'Related Post');

		// ------------  Main Banner  ------------

			set_theme_mod( 'internet_service_provider_pro_main_banner_bgimage', '');

	        set_theme_mod( 'internet_service_provider_pro_main_banner_vector_image', get_template_directory_uri().'/assets/images/curve.png');

	        set_theme_mod( 'internet_service_provider_pro_main_banner_tagline', 'Superfast Internet Provider' );
	        set_theme_mod( 'internet_service_provider_pro_main_banner_main_heading', 'Internet Speed ' );
			set_theme_mod( 'internet_service_provider_pro_main_banner_main_heading2', ' You Can Trust.' );
	        set_theme_mod( 'internet_service_provider_pro_main_banner_text', 'Experience seamless browsing, streaming, and gaming with our ultra-fast and stable internet connection.' );

			set_theme_mod( 'internet_service_provider_pro_main_banner_heading_image', get_template_directory_uri().'/assets/images/banner-icon.png');

			set_theme_mod( 'internet_service_provider_pro_main_banner_button_title', 'Start Now' );
			set_theme_mod( 'internet_service_provider_pro_main_banner_button_url', home_url('/contact') );

			set_theme_mod( 'internet_service_provider_pro_main_banner_link_text', 'Check Availability' );
			set_theme_mod( 'internet_service_provider_pro_main_banner_link_url', home_url('/contact') );

			set_theme_mod( 'internet_service_provider_pro_main_banner_rating_text', 'Rating' );

			for($i=1; $i<=4; $i++)
			{	
				set_theme_mod( 'internet_service_provider_pro_main_banner_customer_image'.$i, get_template_directory_uri().'/assets/images/main-banner/customer'.$i.'.png');
			} 

			set_theme_mod( 'internet_service_provider_pro_main_banner_customer_number', '150K+' );
			set_theme_mod( 'internet_service_provider_pro_main_banner_customer_text', 'Happy Customers' );

			set_theme_mod( 'internet_service_provider_pro_main_banner_column_image', get_template_directory_uri().'/assets/images/main-banner/main-banner-column.png');

			set_theme_mod( 'internet_service_provider_pro_main_banner_column_image_pricing_text', '$59/month' );
			set_theme_mod( 'internet_service_provider_pro_main_banner_column_image_pricing_text2', '350 Mbps' );

			set_theme_mod( 'internet_service_provider_pro_main_banner_column_image_pricing_link', '#' );

			set_theme_mod( 'internet_service_provider_pro_main_banner_last_column_text', 'Work, stream & play without limits Feature Text' );

			set_theme_mod( 'internet_service_provider_pro_main_banner_column_image2', get_template_directory_uri().'/assets/images/main-banner/main-banner-column2.png');

			set_theme_mod( 'internet_service_provider_pro_main_banner_last_column_text2', 'Consistent speed with dependable uptime' );

		// ------------  Our partner  ------------

			set_theme_mod( 'internet_service_provider_pro_partner_heading', 'Trusted by thousands companies.' );

			set_theme_mod( 'internet_service_provider_pro_partner_number', '6' );

			for($i=1; $i<=6; $i++) {
				set_theme_mod('internet_service_provider_pro_partner_image'.$i, get_template_directory_uri() . '/assets/images/partner/partner'.$i.'.png');
				// set_theme_mod('internet_service_provider_pro_partner_hover_image'.$i, get_template_directory_uri() . '/assets/images/partner/partner-hover'.$i.'.png');
			}

		// ------------- About Us -------------

			set_theme_mod( 'internet_service_provider_pro_about_us_tagline', 'Who we are' );
			set_theme_mod( 'internet_service_provider_pro_about_us_main_heading', 'The faces behind your fastest connection.' );

			set_theme_mod( 'internet_service_provider_pro_about_us_text', 'At DataNest, we believe internet speed is essential. Our mission is to provide ultra-fast, reliable internet to homes and businesses.' );

			set_theme_mod( 'internet_service_provider_pro_about_us_column_image', get_template_directory_uri().'/assets/images/about-us/about1.png');

			set_theme_mod( 'internet_service_provider_pro_about_us_button_title', 'Learn More' );  
			set_theme_mod( 'internet_service_provider_pro_about_us_button_url', home_url('/about') );
			
		/* --------------------- Records ---------------------*/

			set_theme_mod( 'internet_service_provider_pro_records_image', get_template_directory_uri().'/assets/images/about-us/about2.png');

			set_theme_mod( 'internet_service_provider_pro_records_number', '3' );

			$record_number = array('500','99.9','250');
			$record_sign = array('+ Mbps','%','K+');
			$record_title = array('Avg Download Speed','Uptime Guarantee','Customers Served');

			for($i=1; $i<=3; $i++)
			{	
				set_theme_mod( 'internet_service_provider_pro_records_no'.$i, $record_number[$i-1] );
				set_theme_mod( 'internet_service_provider_pro_records_sign'.$i, $record_sign[$i-1] );
				set_theme_mod( 'internet_service_provider_pro_records_title'.$i, $record_title[$i-1] );
			}

		// ------------- Services -------------

		set_theme_mod( 'internet_service_provider_pro_services_tagline', 'Service' );
        set_theme_mod( 'internet_service_provider_pro_services_main_heading', 'Internet Services Built for Your Digital Life' );
		set_theme_mod( 'internet_service_provider_pro_services_text', 'Because Fast Isn’t Enough You Need Internet You Can Trust.' );

			// Define demo data
			$services_title = array(
				'High-Speed Fiber Internet',
				'Business Connectivity',
				'GamerX Package'
			);

			$services_text = array(
				'Reliable internet solutions for home and business.',
				'High-speed bandwidth and static IPs for modern businesses.',
				'Ultra-low latency internet for serious gamers. No lag. Just play.'
			);

			$services_price = array(
				'$29/month',
				'$49/month',
				'$79/month'
			);

			$services_price_text = array(
				'Start on',
				'Start on',
				'Start on'
			);

			// Demo images (from theme assets)
			$service_images = array(
				get_template_directory_uri().'/assets/images/services/service1.png',
				get_template_directory_uri().'/assets/images/services/service2.png',
				get_template_directory_uri().'/assets/images/services/service3.png'
			);

			$customer_images = array(
				get_template_directory_uri().'/assets/images/services/customer1.png',
				get_template_directory_uri().'/assets/images/services/customer2.png',
				get_template_directory_uri().'/assets/images/services/customer3.png'
			);

			// Loop through demo services
			for($i=0; $i<3; $i++) {
				$post_id = wp_insert_post(array(
					'post_title'   => wp_strip_all_tags($services_title[$i]),
					'post_content' => '',
					'post_type'    => 'services',
					'post_status'  => 'publish',
				));

				if($post_id) {
					// Add meta fields
					update_post_meta($post_id, '_price_text', sanitize_text_field($services_price_text[$i]));
					update_post_meta($post_id, '_price', sanitize_text_field($services_price[$i]));
					update_post_meta($post_id, '_short_description', sanitize_textarea_field($services_text[$i]));
					update_post_meta($post_id, '_background_style', ($i==0 ? 'dark' : 'light'));

					// Import featured image
					require_once(ABSPATH . 'wp-admin/includes/image.php');
					require_once(ABSPATH . 'wp-admin/includes/file.php');
					require_once(ABSPATH . 'wp-admin/includes/media.php');

					$image_url = $service_images[$i];
					$tmp = download_url($image_url);
					if(!is_wp_error($tmp)){
						$file_array = array(
							'name'     => basename($image_url),
							'tmp_name' => $tmp
						);
						$image_id = media_handle_sideload($file_array, $post_id);
						if(!is_wp_error($image_id)){
							set_post_thumbnail($post_id, $image_id);
						} else {
							@unlink($file_array['tmp_name']);
						}
					}

					// Import customer images
					$customer_ids = array();
					foreach($customer_images as $url){
						$tmp = download_url($url);
						if(!is_wp_error($tmp)){
							$file_array = array(
								'name'     => basename($url),
								'tmp_name' => $tmp
							);
							$cid = media_handle_sideload($file_array, $post_id);
							if(!is_wp_error($cid)){
								$customer_ids[] = $cid;
							} else {
								@unlink($file_array['tmp_name']);
							}
						}
					}
					if(!empty($customer_ids)){
						update_post_meta($post_id, '_customer_images', implode(',', $customer_ids));
					}

					// Optional: link icon meta
					// update_post_meta($post_id, '_link_icon_class', 'fa-solid fa-arrow-right');
					// update_post_meta($post_id, '_link_icon_url', home_url('/contact'));
				}
			}


		// set_theme_mod( 'internet_service_provider_pro_services_box_number', '3');

        // $services_title = array('High-Speed Fiber Internet','Business Connectivity','GamerX Package');
		// $services_text = array('Reliable internet solutions for home and business.','High-speed bandwidth and static IPs for modern businesses.','Ultra-low latency internet for serious gamers. No lag. Just play.');
		// $services_price = array('$29/month','$49/month','$79/month');

        // for($i=1; $i<=3; $i++)
        // {	
		// 	set_theme_mod( 'internet_service_provider_pro_services_box_image'.$i, get_template_directory_uri().'/assets/images/services/service'.$i.'.png');
        // 	set_theme_mod( 'internet_service_provider_pro_services_box_title'.$i, $services_title[$i-1] );
		// 	set_theme_mod( 'internet_service_provider_pro_services_box_text'.$i, $services_text[$i-1] );
		// 	set_theme_mod( 'internet_service_provider_pro_services_box_start_now'.$i, 'Start on' );
		// 	set_theme_mod( 'internet_service_provider_pro_services_box_start_now_pricing'.$i, $services_price[$i-1] );
		// 	for($j=1; $j<=3; $j++)
        // 	{
		// 		set_theme_mod( 'internet_service_provider_pro_services_box_customer_image'.$i.$j, get_template_directory_uri().'/assets/images/services/customer'.$j.'.png');
		// 	}
		// 	set_theme_mod( 'internet_service_provider_pro_services_box_link_icon'.$i, 'fa-solid fa-arrow-right' );
		// 	set_theme_mod( 'internet_service_provider_pro_services_box_link_icon_url'.$i, home_url('/contact') );
		// } 

		// ------------- Why Choose Us -------------

		set_theme_mod( 'internet_service_provider_pro_why_choose_us_tagline', 'Why choose us' );
        set_theme_mod( 'internet_service_provider_pro_why_choose_us_main_heading', 'Why DataNest Is the Preferred Internet Provider' );

		set_theme_mod( 'internet_service_provider_pro_why_choose_us_column_image', get_template_directory_uri().'/assets/images/why-choose-us/why-choose-us-column-image.png');

		set_theme_mod( 'internet_service_provider_pro_why_choose_us_column_image_title', 'Join the 250k+ DataNest users' );
		set_theme_mod( 'internet_service_provider_pro_why_choose_us_column_image_title_image', get_template_directory_uri().'/assets/images/why-choose-us/icon.png');
		set_theme_mod( 'internet_service_provider_pro_why_choose_us_column_image_link_icon', 'fa-solid fa-arrow-right' );
		set_theme_mod( 'internet_service_provider_pro_why_choose_us_column_image_link', home_url('/contact') );

		set_theme_mod( 'internet_service_provider_pro_why_choose_us_icon_box_number', '3');

        $why_choose_box_title = array('Speed You Can Rely On','Smart Infrastructure','Secure & Private');
		$why_choose_box_text = array('Fast connection at peak hours for streaming, gaming, or work.','Powered by fiber optics and real-time optimization.','Advanced network protection keeps your data safe from threats.');
		$why_choose_box_step = array('01','02','03');

        for($i=1; $i<=3; $i++)
        {	
        	set_theme_mod( 'internet_service_provider_pro_why_choose_us_icon_box_title'.$i, $why_choose_box_title[$i-1] );
			set_theme_mod( 'internet_service_provider_pro_why_choose_us_icon_box_text'.$i, $why_choose_box_text[$i-1] );
			set_theme_mod( 'internet_service_provider_pro_why_choose_us_icon_box_step'.$i, $why_choose_box_step[$i-1] );
		} 

		set_theme_mod( 'internet_service_provider_pro_why_choose_us_bottom_block_text', 'Smooth streaming, gaming, and downloading at all times');

		set_theme_mod( 'internet_service_provider_pro_why_choose_us_bottom_block_tagline', 'Guaranteed');
		set_theme_mod( 'internet_service_provider_pro_why_choose_us_bottom_block_tagline_icon', 'Guaranteed');

		set_theme_mod( 'internet_service_provider_pro_why_choose_us_bottom_block_speed_text', 'Speed up to');

		set_theme_mod( 'internet_service_provider_pro_why_choose_us_bottom_block_speed', '350 Mbps');

		// ------------- _Exclusive offer -------------

		set_theme_mod( 'internet_service_provider_pro_exclusive_offers_bgimage', get_template_directory_uri().'/assets/images/exclusive-offers-bg.png');

		set_theme_mod( 'internet_service_provider_pro_exclusive_offers_tagline', 'Exclusive Offers' );
        set_theme_mod( 'internet_service_provider_pro_exclusive_offers_main_heading', 'DataNest Exclusive Internet Plans' );

		set_theme_mod( 'internet_service_provider_pro_exclusive_offers_text', 'This Month’s Exclusive Deals Because You Deserve More Than Just Internet' );

		set_theme_mod( 'internet_service_provider_pro_exclusive_offers_listing_number', '3' );

		$exclusive_offers_list = array('Free Installation','30-Day Risk-Free Trial','GamerX Bonus Plan');

		for($i=1; $i<=3; $i++)
        {	
        	set_theme_mod( 'internet_service_provider_pro_exclusive_offers_listing'.$i, $exclusive_offers_list[$i-1] );
		} 

		set_theme_mod( 'internet_service_provider_pro_exclusive_offers_icon_box_number', '2');

        $why_choose_box_title = array('GamerX Boost Plan','Pro Arena Bundle','Secure & Private');
		$why_choose_box_speed = array('350 Mbps','500 Mbps');
		$why_choose_box_package = array('$59/month','$109/month');

        for($i=1; $i<=2; $i++)
        {	
        	set_theme_mod( 'internet_service_provider_pro_exclusive_offers_icon_box_title'.$i, $why_choose_box_title[$i-1] );
			set_theme_mod( 'internet_service_provider_pro_exclusive_offers_icon_box_speed'.$i, $why_choose_box_speed[$i-1] );
			set_theme_mod( 'internet_service_provider_pro_exclusive_offers_icon_box_package'.$i, $why_choose_box_package[$i-1] );
		} 

		// ------------- Map Area -------------
		
		set_theme_mod( 'internet_service_provider_pro_map_area_tagline', 'Map Area' );
        set_theme_mod( 'internet_service_provider_pro_map_area_main_heading', 'Enjoy Blazing-Fast Connectivity Everywhere' );

		set_theme_mod( 'internet_service_provider_pro_map_area_text', 'Orbitix is expanding nationwide, providing reliable high-speed internet to more homes and cities daily.' );

		set_theme_mod( 'internet_service_provider_pro_map_area_areas_number', '20' );

		$orbitix_coverage_areas = [
			"Jakarta",
			"Surabaya",
			"Makasar",
			"Semarang",
			"Yogyakarta",
			"Medan",
			"Lampung",
			"Metro",
			"Palembang",
			"Bandung",
			"Madiun",
			"Bali",
			"Tangerang",
			"Bekasi",
			"Depok",
			"Bogor",
			"Batam",
			"Pontianak",
			"Balikpapan",
			"Manado"
		];



		for($i=1; $i<=20; $i++)
        {	
        	set_theme_mod( 'internet_service_provider_pro_map_area_name'.$i, $orbitix_coverage_areas[$i-1] );
		} 

		set_theme_mod( 'internet_service_provider_pro_map_area_map_image', get_template_directory_uri().'/assets/images/map-image.png');


		// -------------- Pricing Plans -----------------

		set_theme_mod( 'internet_service_provider_pro_pricing_plan_tagline', 'Pricing & Plans');
        set_theme_mod( 'internet_service_provider_pro_pricing_plan_main_heading', 'Flexible Internet Plans for Every User');
		
        set_theme_mod( 'internet_service_provider_pro_pricing_plan_number', '3');

        $plan_price = array('29.99','99.99','399.99');


		$plan_feature1 = array(
			'100 Mbps Download Speed',
			'Unlimited Data Usage',
			'Free Wi-Fi Router',
			'24/7 Technical Support',
		);

		$plan_feature2 = array(
			'500 Mbps Download Speed',
			'Unlimited Data with SLA',
			'Business-Class Wi-Fi Router',
			'Dedicated Customer Portal',
		);

		$plan_feature3 = array(
			'1 Gbps+ Dedicated Bandwidth',
			'Multi-Location Connectivity',
			'Redundant Backup Connection',
			'Customizable Security Suite',
		);

        $plan_title = array('Home','Business ','Enterprise');
		$plan_text = array('Homes & Casual Users','Small & Medium Businesses','Large Enterprises & ISPs');

		$plan_short_text = array('*Paid annually at $360/year','*Paid annually at $1.199/year','*Paid annually at $4,799/year');

		$plan_btn_title = array('Get Started','Get Started','Get Started');

        for($i=1;$i<=3;$i++)
        {	
			set_theme_mod( 'internet_service_provider_pro_pricing_plan_image'.$i, get_template_directory_uri().'/assets/images/pricing-plan/plan-icon'.$i.'.png');
			set_theme_mod( 'internet_service_provider_pro_pricing_plan_hover_image'.$i, get_template_directory_uri().'/assets/images/pricing-plan/plan-icon-hover'.$i.'.png');
        	set_theme_mod( 'internet_service_provider_pro_pricing_plan_title'.$i, $plan_title[$i-1] );
        	set_theme_mod( 'internet_service_provider_pro_pricing_plan_price'.$i, $plan_price[$i-1] );
			set_theme_mod( 'internet_service_provider_pro_pricing_plan_price_cur'.$i, '$');

			set_theme_mod( 'internet_service_provider_pro_pricing_plan_text'.$i, $plan_text[$i-1]);

			set_theme_mod( 'internet_service_provider_pro_pricing_plan_short_text'.$i, $plan_short_text[$i-1]);

			set_theme_mod( 'internet_service_provider_pro_pricing_plan_starter_features_heading'.$i, 'What included?');

			set_theme_mod( 'internet_service_provider_pro_pricing_plan_duration'.$i, '/month*' );

    		set_theme_mod( 'internet_service_provider_pro_pricing_plan_feature_no'.$i, '4');

    		for($j=1;$j<=4;$j++)
        	{
				if($i == 1){
					set_theme_mod( 'internet_service_provider_pro_pricing_plan_feature_title'.$i.$j, $plan_feature1[$j-1]); 
				}else if($i == 2){
					set_theme_mod( 'internet_service_provider_pro_pricing_plan_feature_title'.$i.$j, $plan_feature2[$j-1]);  
				}else if($i == 3){
					set_theme_mod( 'internet_service_provider_pro_pricing_plan_feature_title'.$i.$j, $plan_feature3[$j-1]);  
				}
        	}

			set_theme_mod( 'internet_service_provider_pro_pricing_plan_button_title'.$i, $plan_btn_title[$i-1] ); 
			set_theme_mod( 'internet_service_provider_pro_pricing_plan_button_url'.$i, home_url('/contact') ); 

			if($i == 2){
				set_theme_mod( 'internet_service_provider_pro_pricing_plan_recommended'.$i, '1' ); 
			}
        }

		// ------------ Testimonial  ------------

		set_theme_mod('internet_service_provider_pro_testimonials_tagline', 'Testimonials');
		set_theme_mod('internet_service_provider_pro_testimonials_main_heading', 'Customer Experiences with DataNest');
		set_theme_mod('internet_service_provider_pro_testimonials_text', 'Here’s how DataNest is changing the way people experience the internet across Indonesia.');

		set_theme_mod('internet_service_provider_pro_testimonials_number', '2');

		$testimonials_title = array(
			'Michael S.',
			'Sarah L.',
			'Sofia L.',
			'Samuel C',
		);

		$testimonials_location = array(
			'London, UK',
			'Toronto, Canada',
			'Sydney, Australia',
			'London, UK',
			'Toronto, Canada',
			'Sydney, Australia',
		);

		$testimonials_quote = array(
			'I used to struggle with video calls dropping. With DataNest, my meetings run smooth, even during heavy rain.',
			'From the first consultation to the final handover, everything was seamless. The attention to detail is incredible — I finally enjoy cooking and hosting in my new kitchen!',
			'I used to struggle with video calls dropping. With DataNest, my meetings run smooth, even during heavy rain.',
			'From the first consultation to the final handover, everything was seamless. The attention to detail is incredible — I finally enjoy cooking and hosting in my new kitchen!',
		);

		for ($i = 1; $i <= 4; $i++) {
			$ts_title = $testimonials_title[$i - 1];

			// Create post object
			$my_post = array(
				'post_title' => wp_strip_all_tags($ts_title),
				'post_content' => $testimonials_quote[$i - 1],
				'post_status' => 'publish',
				'post_type' => 'testimonials',
			);

			// Insert the post into the database
			$theme_post_id = wp_insert_post($my_post);

			add_post_meta( $theme_post_id, 'vw_title_banner_image_wp_custom_attachment', $banner_attachment_url );

			add_post_meta( $theme_post_id, 'internet_service_provider_pro_posttype_testimonial_video_url', 'https://www.youtube.com/watch?v=l6MLY0Kqsk0' );

			$Second_image_url = get_template_directory_uri() . '/assets/images/testimonials/testimonialimg-video' . $i . '.png';
			
			add_post_meta( $theme_post_id, 'internet_service_provider_pro_posttype_testimonial_image_2', $Second_image_url );

			$image_url = get_template_directory_uri() . '/assets/images/testimonials/testimonialimg' . $i . '.png';
			$image_name = 'testimonialimg' . $i . '.png';
			$upload_dir = wp_upload_dir();
			// Set upload folder
			$image_data = file_get_contents($image_url);
			// Get image data
			$unique_file_name = wp_unique_filename($upload_dir['path'], $image_name);
			// Generate unique name
			$filename = basename($unique_file_name);
			// Create image file name
			// Check folder permission and define file location
			if (wp_mkdir_p($upload_dir['path'])) {
				$file = $upload_dir['path'] . '/' . $filename;
			} else {
				$file = $upload_dir['basedir'] . '/' . $filename;
			}
			// Create the image  file on the server
			file_put_contents($file, $image_data);
			// Check image file type
			$wp_filetype = wp_check_filetype($filename, null);
			// Set attachment data
			$attachment = array(
				'post_mime_type' => $wp_filetype['type'],
				'post_title' => sanitize_file_name($filename),
				'post_content' => '',
				'post_type' => 'testimonials',
				'post_status' => 'inherit'
			);

			// Create the attachment
			$attach_id = wp_insert_attachment($attachment, $file, $theme_post_id);
			// Include image.php
			require_once(ABSPATH . 'wp-admin/includes/image.php');
			// Define attachment metadata
			$attach_data = wp_generate_attachment_metadata($attach_id, $file);
			// Assign metadata to attachment
			wp_update_attachment_metadata($attach_id, $attach_data);
			// And finally assign featured image to post
			set_post_thumbnail($theme_post_id, $attach_id);
		}

	// -------------- Latest News -----------------


		$posttitle = [
			"Top Internet Plans for Modern Homes",
			"Space-Saving Router Placement Ideas",
			"Best Equipment for Reliable Broadband",
			"Stylish Wi-Fi Devices to Elevate Your Setup",
			"Lighting-Fast Tips to Boost Your Connection",
			"Smart Data Solutions for a Clutter-Free Network",
			"Latest Internet Service Trends in 2026",
			"Budget-Friendly Broadband Upgrade Ideas",
			"How to Maintain Your Internet Speed",
			"Eco-Friendly ISP Solutions for Sustainable Living"
		];


     	for($i=1;$i<=10;$i++){

			$content = '
			<h3>Introduction</h3>
			<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. It has been the industry\'s standard dummy text ever since the 1500s.</p>

			<h4>Design Inspiration</h4>
			<p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters.</p>
			<p>Lorem Ipsum passages are often used to demonstrate visual form without relying on meaningful content.</p>

			<p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in classical Latin literature from 45 BC. Regular cleaning and proper care ensure longevity and durability of any design element.</p>

			<p>Our support team is always ready to assist. Lorem Ipsum helps to focus on design rather than content during development stages. Feedback and queries are answered within 24 hours, ensuring customer satisfaction.</p>

			<p>Lorem Ipsum is dummy text, but it plays a crucial role in design mockups and layouts. It allows designers to visualize structure without distraction.</p>
			';

			$excerpt = 'Discover this year’s hottest internet trends — from lightning‑fast speeds to eco‑friendly solutions that redefine modern connectivity.';

            // Create post object
            $my_post = array(
               'post_title'    => $posttitle[$i-1],
               'post_content'  => $content,
			   'post_excerpt'  => $excerpt,
               'post_status'   => 'publish',
               'post_type'     => 'post',
               'post_category' => ''
            );
             // Insert the post into the database
            $tcpost_id = wp_insert_post( $my_post );

			add_post_meta( $tcpost_id, 'vw_title_banner_image_wp_custom_attachment', $banner_attachment_url );

            $image_url = get_template_directory_uri().'/assets/images/blog/blog'.$i.'.webp';

            $image_name= 'blog'.$i.'.webp';
            $upload_dir       = wp_upload_dir();
            // Set upload folder
            $image_data       = file_get_contents($image_url);
            // Get image data
            $unique_file_name = wp_unique_filename( $upload_dir['path'], $image_name );
            // Generate unique name
            $filename= basename( $unique_file_name );
            // Create image file name
            // Check folder permission and define file location
            if( wp_mkdir_p( $upload_dir['path'] ) ) {
               $file = $upload_dir['path'] . '/' . $filename;
            } else {
               $file = $upload_dir['basedir'] . '/' . $filename;
            }
            // Create the image  file on the server
            file_put_contents( $file, $image_data );
            // Check image file type
            $wp_filetype = wp_check_filetype( $filename, null );
            // Set attachment data
            $attachment = array(
               'post_mime_type' => $wp_filetype['type'],
               'post_title'     => sanitize_file_name( $filename ),
               'post_content'   => '',
			   'post_excerpt'  => $excerpt,
               'post_type'     => 'post',
               'post_status'    => 'inherit'
            );

            // Create the attachment
            $attach_id = wp_insert_attachment( $attachment, $file, $tcpost_id );
            // Include image.php
            require_once(ABSPATH . 'wp-admin/includes/image.php');
            // Define attachment metadata
            $attach_data = wp_generate_attachment_metadata( $attach_id, $file );
            // Assign metadata to attachment
             wp_update_attachment_metadata( $attach_id, $attach_data );
            // And finally assign featured image to post
            set_post_thumbnail( $tcpost_id, $attach_id );
        }

        //Insert Image for Hello World

		// Insert the post into the database
		$theme_post_id = 1;

		$image_url = get_template_directory_uri().'/assets/images/blog/default.png';

		$image_name       = 'default.png';
		$upload_dir       = wp_upload_dir(); // Set upload folder
		$image_data       = file_get_contents($image_url); // Get image data
		$unique_file_name = wp_unique_filename( $upload_dir['path'], $image_name ); // Generate unique name
		$filename         = basename( $unique_file_name ); // Create image file name

		// Check folder permission and define file location
		if( wp_mkdir_p( $upload_dir['path'] ) ) {
			$file = $upload_dir['path'] . '/' . $filename;
		} else {
			$file = $upload_dir['basedir'] . '/' . $filename;
		}

		// Create the image  file on the server
		file_put_contents( $file, $image_data );

		// Check image file type
		$wp_filetype = wp_check_filetype( $filename, null );

		// Set attachment data
		$attachment = array(
			'post_mime_type' => $wp_filetype['type'],
			'post_title'     => sanitize_file_name( $filename ),
			'post_content'   => $content,
			'post_type'     => 'post',
			'post_status'    => 'inherit'
		);

		// Create the attachment
		$attach_id = wp_insert_attachment( $attachment, $file, $theme_post_id );

		// Include image.php
		require_once(ABSPATH . 'wp-admin/includes/image.php');

		// Define attachment metadata
		$attach_data = wp_generate_attachment_metadata( $attach_id, $file );

		// Assign metadata to attachment
		wp_update_attachment_metadata( $attach_id, $attach_data );

		// And finally assign featured image to post
		set_post_thumbnail( $theme_post_id, $attach_id );

		/*----------------- Newsletter -----------------*/

        set_theme_mod( 'internet_service_provider_pro_newsletter_main_heading', 'Subscribe for the latest news, exclusive deals, and network updates.' );

		set_theme_mod( 'internet_service_provider_pro_newsletter_social_icons_title', 'Follow Us : ' );

        // contact form shortcode
		 $cf7title = "Newsletter";
		 $cf7content = '
		 [email* your-email placeholder="Enter your email here"][submit "Start Now!"]

		 [_site_title] "[your-subject]"
		 [_site_title] <themespride@gmail.com>
		 From: [your-name] <[your-email]>
		 Subject: [your-subject]

		 Message Body:
		 [your-message]

		 --
		 This e-mail was sent from a contact form on [_site_title] ([_site_url])
		 [_site_admin_email]
		 Reply-To: [your-email]

		 0
		 0

		 [_site_title] "[your-subject]"
		 [_site_title] <themespride@gmail.com>
		 Message Body:
		 [your-message]

		 --
		 This e-mail was sent from a contact form on [_site_title] ([_site_url])
		 [your-email]
		 Reply-To: [_site_admin_email]

		 0
		 0
		 Thank you for your message. It has been sent.
		 There was an error trying to send your message. Please try again later.
		 One or more fields have an error. Please check and try again.
		 There was an error trying to send your message. Please try again later.
		 You must accept the terms and conditions before sending your message.
		 The field is required.
		 The field is too long.
		 The field is too short.
		 There was an unknown error uploading the file.
		 You are not allowed to upload files of this type.
		 The file is too big.
		 There was an error uploading the file.';

		 $cf7_post = array(
		 'post_title'    => wp_strip_all_tags( $cf7title ),
		 'post_content'  => $cf7content,
		 'post_status'   => 'publish',
		 'post_type'     => 'wpcf7_contact_form',
		 );
		 // Insert the post into the database
		 $cf7post_id = wp_insert_post( $cf7_post );

		 add_post_meta($cf7post_id, "_form", '
		[email* your-email placeholder="Enter your email here"][submit "Start Now!"]');

		 $cf7mail_data  = array('subject' => '[_site_title] "[your-subject]"',
				 'sender' => '[_site_title] <themespride@gmail.com>',
				 'body' => 'From: [your-name] <[your-email]>
		 Subject: [your-subject]

		 Message Body:
		 [your-message]

		 --
		 This e-mail was sent from a contact form on [_site_title] ([_site_url])',
				 'recipient' => '[_site_admin_email]',
				 'additional_headers' => 'Reply-To: [your-email]',
				 'attachments' => '',
				 'use_html' => 0,
				 'exclude_blank' => 0 );

		add_post_meta($cf7post_id, "_mail", $cf7mail_data);
							 // Gets term object from Tree in the database.

		$cf7shortcode = '[contact-form-7 id="'.$cf7post_id.'" title="'.$cf7title.'"]';

		set_theme_mod( 'internet_service_provider_pro_newsletter_form_shortcode', $cf7shortcode );

		//Contact Page

		// contact form shortcode
		$cf7title = "Contact Page";
		$cf7content = '
		<div class="cf7-styled-form">
			<div class="cf7-row">
				<div class="cf7-col">
					<label>Full Name</label>
					[text* full-name class:cf7-input placeholder "Jane Doe"]
				</div>
				<div class="cf7-col">
					<label>Email Address</label>
					[email* email class:cf7-input placeholder "you@example.com"]
				</div>
			</div>

			<div class="cf7-row">
				<div class="cf7-col">
					<label>Phone Number</label>
					[tel* phone class:cf7-input placeholder "+91 9876543210"]
				</div>
				<div class="cf7-col">
					<label>Preferred Installation Date</label>
					[date install-date class:cf7-input]
				</div>
			</div>

			<div class="cf7-row">
				<div class="cf7-col">
					<label>Service Address</label>
					[text* service-address class:cf7-input placeholder "Street, City, ZIP"]
				</div>
				<div class="cf7-col">
					<label>Plan Selection</label>
					[select* plan class:cf7-input "Basic Broadband" "High-Speed Fiber" "Business Package" "Unlimited Data"]
				</div>
			</div>

			<div class="cf7-row">
				<div class="cf7-col">
					<label>Additional Services</label>
					[checkbox services class:cf7-checkbox "Wi-Fi Router Setup" "Static IP" "VoIP Connection" "Network Security"]
				</div>
				<div class="cf7-col">
					<label>Preferred Contact Time</label>
					[select contact-time class:cf7-input "Morning" "Afternoon" "Evening"]
				</div>
			</div>

			<div class="cf7-row">
				<div class="cf7-col-full">
					<label>Tell Us About Your Internet Needs</label>
					[textarea requirements class:cf7-textarea placeholder "Share your usage needs, devices, or special requests..."]
				</div>
			</div>

			<div class="cf7-row">
				<div class="cf7-col-full">
					[submit "Submit Request"]
				</div>
			</div>
		</div>


		 [_site_title] "[your-subject]"
		 [_site_title] <themespride@gmail.com>
		 From: [your-name] <[your-email]>
		 Subject: [your-subject]

		 Message Body:
		 [your-message]

		 --
		 This e-mail was sent from a contact form on [_site_title] ([_site_url])
		 [_site_admin_email]
		 Reply-To: [your-email]

		 0
		 0

		 [_site_title] "[your-subject]"
		 [_site_title] <themespride@gmail.com>
		 Message Body:
		 [your-message]

		 --
		 This e-mail was sent from a contact form on [_site_title] ([_site_url])
		 [your-email]
		 Reply-To: [_site_admin_email]

		 0
		 0
		 Thank you for your message. It has been sent.
		 There was an error trying to send your message. Please try again later.
		 One or more fields have an error. Please check and try again.
		 There was an error trying to send your message. Please try again later.
		 You must accept the terms and conditions before sending your message.
		 The field is required.
		 The field is too long.
		 The field is too short.
		 There was an unknown error uploading the file.
		 You are not allowed to upload files of this type.
		 The file is too big.
		 There was an error uploading the file.';

		$cf7_post = array(
			'post_title' => wp_strip_all_tags($cf7title),
			'post_content' => $cf7content,
			'post_status' => 'publish',
			'post_type' => 'wpcf7_contact_form',
		);
		// Insert the post into the database
		$cf7post_id = wp_insert_post($cf7_post);

		add_post_meta($cf7post_id, "_form", '
		<div class="cf7-styled-form">
			<div class="cf7-row">
				<div class="cf7-col">
					<label>Full Name</label>
					[text* full-name class:cf7-input placeholder "Jane Doe"]
				</div>
				<div class="cf7-col">
					<label>Email Address</label>
					[email* email class:cf7-input placeholder "you@example.com"]
				</div>
			</div>

			<div class="cf7-row">
				<div class="cf7-col">
					<label>Phone Number</label>
					[tel* phone class:cf7-input placeholder "+91 9876543210"]
				</div>
				<div class="cf7-col">
					<label>Preferred Installation Date</label>
					[date install-date class:cf7-input]
				</div>
			</div>

			<div class="cf7-row">
				<div class="cf7-col">
					<label>Service Address</label>
					[text* service-address class:cf7-input placeholder "Street, City, ZIP"]
				</div>
				<div class="cf7-col">
					<label>Plan Selection</label>
					[select* plan class:cf7-input "Basic Broadband" "High-Speed Fiber" "Business Package" "Unlimited Data"]
				</div>
			</div>

			<div class="cf7-row">
				<div class="cf7-col">
					<label>Additional Services</label>
					[checkbox services class:cf7-checkbox "Wi-Fi Router Setup" "Static IP" "VoIP Connection" "Network Security"]
				</div>
				<div class="cf7-col">
					<label>Preferred Contact Time</label>
					[select contact-time class:cf7-input "Morning" "Afternoon" "Evening"]
				</div>
			</div>

			<div class="cf7-row">
				<div class="cf7-col-full">
					<label>Tell Us About Your Internet Needs</label>
					[textarea requirements class:cf7-textarea placeholder "Share your usage needs, devices, or special requests..."]
				</div>
			</div>

			<div class="cf7-row">
				<div class="cf7-col-full">
					[submit "Submit Request"]
				</div>
			</div>
		</div>
		');

		$cf7mail_data = array(
			'subject' => '[_site_title] "[your-subject]"',
			'sender' => '[_site_title] <themespride@gmail.com>',
			'body' => 'From: [your-name] <[your-email]>
		 Subject: [your-subject]

		 Message Body:
		 [your-message]

		 --
		 This e-mail was sent from a contact form on [_site_title] ([_site_url])',
			'recipient' => '[_site_admin_email]',
			'additional_headers' => 'Reply-To: [your-email]',
			'attachments' => '',
			'use_html' => 0,
			'exclude_blank' => 0
		);

		add_post_meta($cf7post_id, "_mail", $cf7mail_data);
		// Gets term object from Tree in the database.

		$cf7shortcode = '[contact-form-7 id="' . $cf7post_id . '" title="' . $cf7title . '"]';

		set_theme_mod('internet_service_provider_pro_contact_form_code', $cf7shortcode);

		set_theme_mod('internet_service_provider_pro_contact_page_image', get_template_directory_uri() . '/assets/images/contact-image.png');

		set_theme_mod('internet_service_provider_pro_contactpage_form_title', 'Leave Message');

		//Longitude
		set_theme_mod('internet_service_provider_pro_address_longitude', '-80.053361');
		//Latitude
		set_theme_mod('internet_service_provider_pro_address_latitude', '26.704241');

		set_theme_mod('internet_service_provider_pro_contact_page_contact_details_heading', 'Contact Us');

		set_theme_mod('internet_service_provider_pro_contact_page_contact_details_text', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.');
		//Email Title text
		set_theme_mod('internet_service_provider_pro_contactpage_email_title', 'Email Address');
		set_theme_mod('internet_service_provider_pro_contactpage_email', 'themexyz@gmail.com');
		//Address Title text
		set_theme_mod('internet_service_provider_pro_address_title', 'Our Location');
		set_theme_mod('internet_service_provider_pro_address', 'R77 Franklin st, San Francisco');
		//Phone Title text
		set_theme_mod('internet_service_provider_pro_contactpage_phone_title', 'Call Us');
		set_theme_mod('internet_service_provider_pro_contactpage_phone', '+123 4567 891');

		// ------------ FAq ------------

		$faq_questions = [
			"What is a modular kitchen?",
			"How do I choose the right layout?",
			"Which materials are best for cabinets?",
			"How do I maintain my modular kitchen?",
			"Can modular kitchens be customized?",
			"What is the average installation time?",
			"Are modular kitchens budget-friendly?",
			"How do I clean different countertop surfaces?",
			"Can appliances be integrated seamlessly?",
			"What warranty do Internet Service Provider Products come with?"
		];

		$faq_title = array();

		set_theme_mod('internet_service_provider_pro_faq_number', '10');

		for ($i = 1; $i <= 10; $i++) {
			$ts_title = $faq_questions[$i - 1];
			$content = 'Lorem ipsum dolor sit amet, consectetur adipiscing. sapien et lacus viverra luctus. Pellentesque habitant morbi tristique senectus et netus. In tincidunt nibh.';

			// Create post object
			$my_post = array(
				'post_title' => wp_strip_all_tags($ts_title),
				'post_content' => $content,
				'post_status' => 'publish',
				'post_type' => 'faq',
			);

			// Insert the post into the database
			$theme_post_id = wp_insert_post($my_post);
		}
		
		/*---------------__Blog Page----------------------*/

		// /footer\
		set_theme_mod( 'internet_service_provider_pro_footer_copyright_text', 'Copyright 2026' );
		set_theme_mod( 'internet_service_provider_pro_footer_copyright_para', 'All Rights Reserved.' );

		set_theme_mod('internet_service_provider_pro_header_skip_link', 'Skip to main content');
		

	/*---------------__Blog Page----------------------*/

		set_theme_mod('internet_service_provider_pro_blog_category_prev_title', 'Previous');
		set_theme_mod('internet_service_provider_pro_blog_category_next_title','Next');
		 

		set_theme_mod( 'internet_service_provider_pro_404_page_heading', 'Page Not Found' );
		set_theme_mod( 'internet_service_provider_pro_404_page_content', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.' );
		set_theme_mod( 'internet_service_provider_pro_404_page_button_text', 'Back to Home' );
		set_theme_mod( 'internet_service_provider_pro_res_open_menu_icon', 'fas fa-bars' );

		$this->theme_create_customizer_nav_menu();
		$this->theme_create_customizer_footer_quick_links();
		
		$VW_Widget_Importer = new VW_Widget_Importer;
		$VW_Widget_Importer->import_widgets( $this->widget_file_url );

		// echo "string";
		exit;
		}


	public function wz_activate_internet_service_provider_pro() {
		$internet_service_provider_pro_license_key = $_POST['internet_service_provider_pro_license_key'];

		$endpoint = SHOPIFY_THEME_LICENCE_ENDPOINT.'verifyTheme';

		$body = [
			'theme_license_key'  => $internet_service_provider_pro_license_key,
			'site_url'					 => site_url(),
			'theme_text_domain'	 => wp_get_theme()->get( 'TextDomain' )
		];
		$body = wp_json_encode( $body );
		$options = [
			'body'        => $body,
			'headers'     => [
				'Content-Type' => 'application/json',
			]
		];
		$response = wp_remote_post( $endpoint, $options );
		if ( is_wp_error( $response ) ) {
			ThemeWhizzie::remove_the_theme_key();
			ThemeWhizzie::set_the_validation_status('false');
			$response = array('status' => false, 'msg' => 'Something Went Wrong!');
			wp_send_json($response);
			exit;
		} else {
			$response_body = wp_remote_retrieve_body( $response );
			$response_body = json_decode($response_body);

			if ( $response_body->is_suspended == 1 ) {
				ThemeWhizzie::set_the_suspension_status( 'true' );
			} else {
				ThemeWhizzie::set_the_suspension_status( 'false' );
			}

			if ($response_body->status === false) {
				ThemeWhizzie::remove_the_theme_key();
				ThemeWhizzie::set_the_validation_status('false');
				$response = array('status' => false, 'msg' => $response_body->msg);
				wp_send_json($response);
				exit;
			} else {
				ThemeWhizzie::set_the_validation_status('true');
				ThemeWhizzie::set_the_theme_key($internet_service_provider_pro_license_key);
				$response = array('status' => true, 'msg' => 'Theme Activated Successfully!');
				wp_send_json($response);
				exit;
			}
		}
	}



	/**
	 * Imports Ibtana Builder Demo Content
	 * @since 1.1.0
	 */
	public function setup_builder() {
		$buildercontent = '';
		$resp_slug = '';
		$json_theme = array('base_theme_text_domain' => 'cosmetics-shop');
	    $json_args = array(
	        'method' => 'POST',
	        'headers'     => array(
	            'Content-Type'  => 'application/json'
	        ),
	        'body' => json_encode($json_theme),
	    );

	    $request_data = wp_remote_post( IBTANA_THEME_LICENCE_ENDPOINT.'get_client_ibtana_premium_theme_json_with_inner_pages',$json_args);
	    $response_json = json_decode(wp_remote_retrieve_body( $request_data));

	    // echo '<pre>'; print_r($response_json->data); echo '</pre>';


	    foreach($response_json->data as $resp_json) {
		    if($resp_json->page_type == 'template'){
		    	$resp_slug = $resp_json->slug ;
		    }
	    }


			// demo content start

			$cf7title = "Contact Us";
		$cf7content = '
		<div class="row mt-4">
				<div class="col-lg-12 col-md-12 col-sm-12">[text* Name placeholder "Name"]</div>
				<div class="col-lg-12 col-md-12 col-sm-12">[email* Email placeholder akismet:author_email "Email"]</div>
				<div class="col-lg-12 col-md-12 col-sm-12">[text* Address placeholder "Address"]</div>
	                    <div class="col-lg-6 col-md-6 col-sm-12">[tel tel-323 autocomplete:tel placeholder "Phone"]</div>
				<div class="col-lg-6 col-md-6 col-sm-12">[text* Name placeholder "country"]</div>
								 
				<div class="col-lg-12 col-md-12 col-sm-12"><div class="btn-wrap">
                                      <div class="theme-btn">[submit "Submit"]</div>
                               <svg width="22" height="23" viewBox="0 0 22 23" fill="none" xmlns="http://www.w3.org/2000/svg">
<g clip-path="url(#clip0_428_10)">
<path d="M17.9433 7.17651H14.8806V7.17385C14.8806 5.73985 14.0988 4.48517 12.939 3.81335V2.64331C12.939 2.28495 13.2305 1.99341 13.5889 1.99341V0.704346C12.5197 0.704346 11.6499 1.57416 11.6499 2.64331V3.34791C11.4385 3.31212 11.2214 3.29321 11 3.29321C10.7786 3.29321 10.5615 3.31212 10.3501 3.34791V2.64331C10.3501 1.57416 9.48028 0.704346 8.41113 0.704346V1.99341C8.76949 1.99341 9.06104 2.28495 9.06104 2.64331V3.81335C7.90127 4.48512 7.11936 5.73985 7.11936 7.17381V7.17647H4.05672C1.81986 7.17651 0 8.99633 0 11.2332C0 12.9052 0.959578 14.3413 2.50426 14.9811C4.12436 15.6693 5.9437 15.2117 7.11936 13.9076V17.4677C7.11936 18.4273 7.75345 19.3728 9.00402 20.2781C10.1181 21.0519 10.5747 21.2081 11 21.41C11.4495 21.1981 11.857 21.0629 12.996 20.2781C14.2465 19.3729 14.8806 18.4273 14.8806 17.4677V13.9076C16.0524 15.2204 17.8757 15.6595 19.4957 14.9811C21.0404 14.3413 22 12.9051 22 11.2332C22 8.99633 20.1801 7.17651 17.9433 7.17651ZM8.40843 7.17381C8.40843 5.74484 9.57099 4.58228 11 4.58228C12.429 4.58228 13.5915 5.74484 13.5915 7.17381V7.17647H8.40843V7.17381ZM8.40843 16.8231V15.5233H13.5915V16.8231H8.40843ZM8.40843 14.2342V12.9344H13.5915V14.2342H8.40843ZM9.38158 11.6453L11 10.027L12.6184 11.6454H9.38158V11.6453ZM6.01373 13.1902C5.0496 14.1544 3.82353 14.1323 2.99759 13.7902C2.17164 13.4481 1.28906 12.5967 1.28906 11.2332C1.28906 9.70712 2.53064 8.46553 4.05672 8.46553H10.7384L6.01373 13.1902ZM12.256 19.2222C11.7768 19.571 11.2894 19.8389 11 19.9868C10.7106 19.8388 10.2232 19.571 9.74402 19.2222C9.22204 18.8423 8.84245 18.4638 8.62422 18.1122H13.3758C13.1575 18.4638 12.778 18.8423 12.256 19.2222ZM19.0024 13.7902C18.1765 14.1323 16.9504 14.1543 15.9863 13.1902L11.2616 8.46558H17.9433C19.4694 8.46558 20.7109 9.70716 20.7109 11.2332C20.7109 12.5967 19.8284 13.4481 19.0024 13.7902Z" fill="#7B5948"/>
</g>
<defs>
<clipPath id="clip0_428_10">
<rect width="22" height="22" fill="white" transform="translate(0 0.0571289)"/>
</clipPath>
</defs>
</svg>


</div>
		</div>
		[_site_title] "[your-subject]"
		[_site_title] <abc@gmail.com>
		From: [your-name] <[your-email]>
		Subject: [your-subject]

		Message Body:
		[your-message]

		--
		This e-mail was sent from a contact form on [_site_title] ([_site_url])
		[_site_admin_email]
		Reply-To: [your-email]

		0
		0

		[_site_title] "[your-subject]"
		[_site_title] <abc@gmail.com>
		Message Body:
		[your-message]

		--
		This e-mail was sent from a contact form on [_site_title] ([_site_url])
		[your-email]
		Reply-To: [_site_admin_email]

		0
		0
		Thank you for your message. It has been sent.
		There was an error trying to send your message. Please try again later.
		One or more fields have an error. Please check and try again.
		There was an error trying to send your message. Please try again later.
		You must accept the terms and conditions before sending your message.
		The field is required.
		The field is too long.
		The field is too short.
		There was an unknown error uploading the file.
		You are not allowed to upload files of this type.
		The file is too big.
		There was an error uploading the file.';

		$cf7_post = array(
		'post_title'    => wp_strip_all_tags( $cf7title ),
		'post_content'  => $cf7content,
		'post_status'   => 'publish',
		'post_type'     => 'wpcf7_contact_form',
		);
		// Insert the post into the database
		$cf7post_id = wp_insert_post( $cf7_post );

		add_post_meta($cf7post_id, "_form", '<div class="row mt-4">
				<div class="col-lg-12 col-md-12 col-sm-12">[text* Name placeholder "Name"]</div>
				<div class="col-lg-12 col-md-12 col-sm-12">[email* Email placeholder akismet:author_email "Email"]</div>
				<div class="col-lg-12 col-md-12 col-sm-12">[text* Address placeholder "Address"]</div>
	                    <div class="col-lg-6 col-md-6 col-sm-12">[tel tel-323 autocomplete:tel placeholder "Phone"]</div>
				<div class="col-lg-6 col-md-6 col-sm-12">[text* Name placeholder "country"]</div>
								 
				<div class="col-lg-12 col-md-12 col-sm-12"><div class="btn-wrap">
                                      <div class="theme-btn">[submit "Submit"]</div>
                               <svg width="22" height="23" viewBox="0 0 22 23" fill="none" xmlns="http://www.w3.org/2000/svg">
					<g clip-path="url(#clip0_428_10)">
					<path d="M17.9433 7.17651H14.8806V7.17385C14.8806 5.73985 14.0988 4.48517 12.939 3.81335V2.64331C12.939 2.28495 13.2305 1.99341 13.5889 1.99341V0.704346C12.5197 0.704346 11.6499 1.57416 11.6499 2.64331V3.34791C11.4385 3.31212 11.2214 3.29321 11 3.29321C10.7786 3.29321 10.5615 3.31212 10.3501 3.34791V2.64331C10.3501 1.57416 9.48028 0.704346 8.41113 0.704346V1.99341C8.76949 1.99341 9.06104 2.28495 9.06104 2.64331V3.81335C7.90127 4.48512 7.11936 5.73985 7.11936 7.17381V7.17647H4.05672C1.81986 7.17651 0 8.99633 0 11.2332C0 12.9052 0.959578 14.3413 2.50426 14.9811C4.12436 15.6693 5.9437 15.2117 7.11936 13.9076V17.4677C7.11936 18.4273 7.75345 19.3728 9.00402 20.2781C10.1181 21.0519 10.5747 21.2081 11 21.41C11.4495 21.1981 11.857 21.0629 12.996 20.2781C14.2465 19.3729 14.8806 18.4273 14.8806 17.4677V13.9076C16.0524 15.2204 17.8757 15.6595 19.4957 14.9811C21.0404 14.3413 22 12.9051 22 11.2332C22 8.99633 20.1801 7.17651 17.9433 7.17651ZM8.40843 7.17381C8.40843 5.74484 9.57099 4.58228 11 4.58228C12.429 4.58228 13.5915 5.74484 13.5915 7.17381V7.17647H8.40843V7.17381ZM8.40843 16.8231V15.5233H13.5915V16.8231H8.40843ZM8.40843 14.2342V12.9344H13.5915V14.2342H8.40843ZM9.38158 11.6453L11 10.027L12.6184 11.6454H9.38158V11.6453ZM6.01373 13.1902C5.0496 14.1544 3.82353 14.1323 2.99759 13.7902C2.17164 13.4481 1.28906 12.5967 1.28906 11.2332C1.28906 9.70712 2.53064 8.46553 4.05672 8.46553H10.7384L6.01373 13.1902ZM12.256 19.2222C11.7768 19.571 11.2894 19.8389 11 19.9868C10.7106 19.8388 10.2232 19.571 9.74402 19.2222C9.22204 18.8423 8.84245 18.4638 8.62422 18.1122H13.3758C13.1575 18.4638 12.778 18.8423 12.256 19.2222ZM19.0024 13.7902C18.1765 14.1323 16.9504 14.1543 15.9863 13.1902L11.2616 8.46558H17.9433C19.4694 8.46558 20.7109 9.70716 20.7109 11.2332C20.7109 12.5967 19.8284 13.4481 19.0024 13.7902Z" fill="#7B5948"/>
					</g>
					<defs>
					<clipPath id="clip0_428_10">
					<rect width="22" height="22" fill="white" transform="translate(0 0.0571289)"/>
					</clipPath>
					</defs>
					</svg>


					</div>
							</div>');

							$cf7mail_data  = array('subject' => '[_site_title] "[your-subject]"',
									'sender' => '[_site_title] <abc@gmail.com>',
									'body' => 'From: [your-name] <[your-email]>
							Subject: [your-subject]

							Message Body:
							[your-message]

							--
							This e-mail was sent from a contact form on [_site_title] ([_site_url])',
									'recipient' => '[_site_admin_email]',
									'additional_headers' => 'Reply-To: [your-email]',
									'attachments' => '',
									'use_html' => 0,
									'exclude_blank' => 0 );

							add_post_meta($cf7post_id, "_mail", $cf7mail_data);
												// Gets term object from Tree in the database.

		$cf7shortcode = '[contact-form-7 id="'.$cf7post_id.'" title="'.$cf7title.'"]';


		$json_theme1 = array('premium_template_slug' => $resp_slug);
	    $json_args1 = array(
	        'method' => 'POST',
	        'headers'     => array(
	            'Content-Type'  => 'application/json'
	        ),
	        'body' => json_encode($json_theme1),
	    );

	    $request_data1 = wp_remote_post( IBTANA_THEME_LICENCE_ENDPOINT.'get_client_ibtana_premium_theme_json',$json_args1);
	    $response_json1 = json_decode(wp_remote_retrieve_body( $request_data1));
/*	    print_r($response_json1->data);
*/
       	$buildercontent = $response_json1->data;

		$home_id;

		$page_title = 'Home Page';
		$page_slug = 'home-page';

       	$page_check = get_page_by_title($page_title);
       	$vw_page = array(
       		'post_type' => 'page',
       		'post_title' => $page_title,
       		'post_content'  => $buildercontent,
       		'post_status' => 'publish',
       		'post_author' => 1,
       		'post_slug' => $page_slug
       	);
       	$home_id = wp_insert_post(wp_slash($vw_page));
       	add_post_meta( $home_id, '_wp_page_template', 'page-template/ibtana-template.php' );

       	update_option( 'page_on_front', $home_id );
       	update_option( 'show_on_front', 'page' );

				$this->theme_create_customizer_nav_menu_gutenberg();


       	$VW_Widget_Importer = new VW_Widget_Importer;
		// $VW_Widget_Importer->import_widgets( $this->widget_file_url );
		$this->widget_file_url = trailingslashit( WHIZZIE_DIR ) . 'widgets/internet-service-provider-pro-widgets.wie';

		if(isset($home_id)){
			echo json_encode(['home_page_id'=>$home_id,'home_page_url'=>get_edit_post_link( $home_id, '' )]);
		}
		exit;

	}


	// ------------ Ibtana Activation Close -----------
	//guidline for about theme
	public function internet_service_provider_pro_mostrar_guide() {

		$display_string = '';

		// Check the validation Start
		$internet_service_provider_pro_license_key = ThemeWhizzie::get_the_theme_key();
			$endpoint = SHOPIFY_THEME_LICENCE_ENDPOINT.'status';
		$body = [
			'theme_license_key'  => $internet_service_provider_pro_license_key,
			'site_url'					 => site_url(),
			'theme_text_domain'	 => wp_get_theme()->get( 'TextDomain' )
		];
		$body = wp_json_encode( $body );
		$options = [
			'body'        => $body,
			'headers'     => [
				'Content-Type' => 'application/json',
			]
		];
		$response = wp_remote_post( $endpoint, $options );
		if ( is_wp_error( $response ) ) {
			// ThemeWhizzie::set_the_validation_status('false');
		} else {
			$response_body = wp_remote_retrieve_body( $response );
			$response_body = json_decode($response_body);

			if ( $response_body->is_suspended == 1 ) {
				ThemeWhizzie::set_the_suspension_status( 'true' );
			} else {
				ThemeWhizzie::set_the_suspension_status( 'false' );
			}

			$display_string = isset($response_body->display_string) ? $response_body->display_string : '';

			if ($display_string != '') {
				if (strpos($display_string, '[THEME_NAME]') !== false) {
					$display_string = str_replace("[THEME_NAME]", "Internet Service Provider Pro", $display_string);
				}
				if (strpos($display_string, '[THEME_PERMALINK]') !== false) {
					$display_string = str_replace("[THEME_PERMALINK]", "https://www.vwthemes.com/themes/lens-wordpress-theme/", $display_string);
				}
				echo '<div class="notice is-dismissible error thb_admin_notices">' . $display_string . '</div>';
			}



			if ($response_body->status === false) {
				ThemeWhizzie::set_the_validation_status('false');
			} else {
				ThemeWhizzie::set_the_validation_status('true');
			}
		}
		// Check the validation END

		$theme_validation_status = ThemeWhizzie::get_the_validation_status();

		//custom function about theme customizer
		$return = add_query_arg( array()) ;
		$theme = wp_get_theme( 'internet-service-provider-pro' );

		?>

<div class="wrapper-info get-stared-page-wrap">

    <div class="wrapper-info-content">
        <h2><?php _e( 'Welcome to Internet Service Provider Pro', 'internet-service-provider-pro' ); ?> <span class="version">Version:
                <?php echo esc_html($theme['Version']);?></span></h2>
        <p><?php _e('All our WordPress themes are modern, minimalist, 100% responsive, seo-friendly,feature-rich, block based and multipurpose that best suit designers, bloggers and other professionals who are working in the creative fields.','internet-service-provider-pro'); ?>
        </p>
    </div>
    <div class="tab-sec theme-option-tab">
        <div class="tab">
            <button class="tablinks active" onclick="openCity(event, 'theme_activation')"
                data-tab="theme_activation"><?php _e( 'Key Activation', 'internet-service-provider-pro' ); ?></button>
            <button class="tablinks wizard-tab" onclick="openCity(event, 'demo_offer')"
                data-tab="demo_offer"><?php _e( 'Setup Wizard', 'internet-service-provider-pro' ); ?></button>
            <button class="tablinks" onclick="openCity(event, 'theme_info')"
                data-tab="theme_info"><?php _e( 'Support', 'internet-service-provider-pro' ); ?></button>
            <button class="tablinks" onclick="openCity(event, 'plugins')"
                data-tab="plugins"><?php _e( 'Plugins', 'internet-service-provider-pro' ); ?></button>
            <button class="tablinks other-product-tab"
                onclick="openCity(event, 'others_theme')"><?php esc_html_e( 'All Themes', 'internet-service-provider-pro' ); ?></button>
        </div>

        <!-- Tab content -->
        <div id="theme_activation" class="tabcontent open">

            <div class="theme_activation-wrapper">
                <div class="theme_activation_spinner">
                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                        style="margin:auto;background:#fff;display:block;" width="200px" height="200px"
                        viewBox="0 0 100 100" preserveAspectRatio="xMidYMid">
                        <g transform="translate(50,50)">
                            <g transform="scale(0.7)">
                                <circle cx="0" cy="0" r="50" fill="#0f81d0"></circle>
                                <circle cx="0" cy="-28" r="15" fill="#cfd7dd">
                                    <animateTransform attributeName="transform" type="rotate" dur="1s"
                                        repeatCount="indefinite" keyTimes="0;1" values="0 0 0;360 0 0">
                                    </animateTransform>
                                </circle>
                            </g>
                        </g>
                    </svg>
                </div>
                <div class="theme-wizard-key-status">
                    <?php
								if ( $theme_validation_status === 'false' ) {
									esc_html_e('Theme License Key is not activated!','internet-service-provider-pro');
								} else {
									esc_html_e('Theme License is Activated!','internet-service-provider-pro');
								}
							?>
                </div>
                <?php $this->activation_page(); ?>
            </div>
        </div>
        <div id="demo_offer" class="tabcontent">
            <?php $this->wizard_page(); ?>
        </div>
        <div id="theme_info" class="tabcontent">
            <div class="col-left-inner">
                <h3><?php _e( 'Internet Service Provider Pro Information', 'internet-service-provider-pro' ); ?></h3>
                <hr class="h3hr">
                <h4><?php _e( 'Theme Documentation', 'internet-service-provider-pro' ); ?></h4>
                <p><?php _e( 'If you need any assistance regarding setting up and configuring the Theme, our documentation is there.', 'internet-service-provider-pro' ); ?>
                </p>
                <div class="info-link">
                    <a href="<?php echo esc_url( internet_service_provider_pro_THEME_DOC ); ?>" target="_blank">
                        <?php _e( 'Documentation', 'internet-service-provider-pro' ); ?></a>
                </div>
                <hr>
                <h4><?php _e('Having Trouble, Need Support?', 'internet-service-provider-pro'); ?></h4>
                <p> <?php _e('Our dedicated team is well prepared to help you out in case of queries and doubts regarding our theme.', 'internet-service-provider-pro'); ?>
                </p>
                <div class="info-link">
                    <a href="<?php echo esc_url( internet_service_provider_pro_SUPPORT ); ?>"
                        target="_blank"><?php _e('Support Forum', 'internet-service-provider-pro'); ?></a>
                </div>
                <hr>
                <h4><?php _e('Reviews & Testimonials', 'internet-service-provider-pro'); ?></h4>
                <p> <?php _e('All the features and aspects of this WordPress Theme are phenomenal. I\'d recommend this theme to all.', 'internet-service-provider-pro'); ?>
                </p>
                <div class="info-link">
                    <a href="<?php echo esc_url( internet_service_provider_pro_REVIEW ); ?>"
                        target="_blank"><?php _e('Reviews', 'internet-service-provider-pro'); ?></a>
                </div>
            </div>
            <div class="col-right-inner">
                <div id="vw-demo-setup-guid">
                    <h3><?php esc_html_e('Checkout our setup videos','internet-service-provider-pro'); ?></h3>
                    <hr />
                    <ul>
                        <li>
                            <a href="javascript:void(0);"
                                doc-video-url="https://www.youtube.com/embed/nLB9E6BBBv0"><span
                                    class="dashicons dashicons-welcome-widgets-menus"></span>Setup Menu</a>
                        </li>
                        <li>
                            <a href="javascript:void(0);"
                                doc-video-url="https://www.youtube.com/embed/gjccwcAK47o"><span
                                    class="dashicons dashicons-email-alt"></span>Setup Contact Page</a>
                        </li>
                        <li>
                            <a href="javascript:void(0);"
                                doc-video-url="https://www.youtube.com/embed/7BvTpLh-RB8"><span
                                    class="dashicons dashicons-editor-table"></span>Setup Widgets</a>
                        </li>
                        <li>
                            <a href="javascript:void(0);"
                                doc-video-url="https://www.youtube.com/embed/Mox298rk0Qo"><span
                                    class="dashicons dashicons-share"></span>Setup Social Icon</a>
                        </li>
                        <li>
                            <a href="javascript:void(0);"
                                doc-video-url="https://www.youtube.com/embed/hLtS4sztAX4"><span
                                    class="dashicons dashicons-wordpress-alt"></span>Install WordPress Theme</a>
                        </li>
                        <li>
                            <a href="javascript:void(0);"
                                doc-video-url="https://www.youtube.com/embed/8UxkXkix-ic"><span
                                    class="dashicons dashicons-admin-users"></span>Create WordPress User</a>
                        </li>
                        <li>
                            <a href="javascript:void(0);"
                                doc-video-url="https://www.youtube.com/embed/1xGlbWOzQBg"><span
                                    class="dashicons dashicons-image-flip-horizontal"></span>Setup Slider</a>
                        </li>
                        <li>
                            <a href="javascript:void(0);"
                                doc-video-url="https://www.youtube.com/embed/pJFF_wjdvcA"><span
                                    class="dashicons dashicons-database"></span>WordPress Backup</a>
                        </li>
                        <li>
                            <a href="javascript:void(0);"
                                doc-video-url="https://www.youtube.com/embed/xXdnUTPG_6A"><span
                                    class="dashicons dashicons-instagram"></span>Connect Instagram</a>
                        </li>
                        <li>
                            <a href="javascript:void(0);"
                                doc-video-url="https://www.youtube.com/embed/leLBzmbvdQQ"><span
                                    class="dashicons dashicons-table-col-delete"></span>Fix 404 Error</a>
                        </li>
                        <li>
                            <a href="javascript:void(0);"
                                doc-video-url="https://www.youtube.com/embed/OPBONJBtO6g"><span
                                    class="dashicons dashicons-admin-page"></span>Setup Template Pages</a>
                        </li>
                        <li>
                            <a href="javascript:void(0);"
                                doc-video-url="https://www.youtube.com/embed/j7veMuhcXYA"><span
                                    class="dashicons dashicons-video-alt3"></span>Create a New Post</a>
                        </li>
                        <li>
                            <a href="javascript:void(0);"
                                doc-video-url="https://www.youtube.com/embed/ovcok3FPRto"><span
                                    class="dashicons dashicons-welcome-add-page"></span>Setup Shortcode Pages</a>
                        </li>
                        <li>
                            <a href="javascript:void(0);"
                                doc-video-url="https://www.youtube.com/embed/O6elK2kSHQw"><span
                                    class="dashicons dashicons-images-alt2"></span>Setup Gallery Plugin</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="wz-video-model">
        <span class="dashicons dashicons-no"></span>
        <iframe width="100%" src="" frameborder="0"
            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
            allowfullscreen></iframe>
    </div>
    <div id="plugins" class="tabcontent">
        <div class="wizard-plugin-wrapper">
            <div class="o-product-row">
                <div class="plugin-col ibtana-plugin-col">
                    <img
                        src="<?php echo esc_url(get_template_directory_uri().'/theme-wizard/assets/images/banner-772x250.png'); ?>">
                    <h3><?php echo esc_html('Ibtana - WordPress Website Builder Plugin'); ?></h3>
                    <p><?php echo esc_html('Ibtana Gutenberg Editor has ready made eye catching responsive templates build with custom blocks and options to extend Gutenberg’s default capabilities. You can easily import demo content for the block or templates with a single click'); ?>
                    </p>
                    <?php
					$plugin_ins = Vw_Premium_Theme_Plugin_Activation_Settings::get_instance();
					$vw_theme_actions = $plugin_ins->recommended_actions;

					if ($vw_theme_actions): foreach ($vw_theme_actions as $key => $vw_theme_actionValue):
					?>
                    <div class="ibtana-activation-btn">
                        <?php echo wp_kses_post($vw_theme_actionValue['link']); ?>
                    </div>
                    <?php endforeach;
				        		endif; ?>
                </div>
                <div class="plugin-col">
                    <img
                        src="<?php echo esc_url(get_template_directory_uri().'/theme-wizard/assets/images/Ibtana-ecommerce-banner.png'); ?>">

                    <h3><?php echo esc_html('Ibtana – Woocommerce Product Addons'); ?></h3>
                    <p><?php echo esc_html('Ibtana – Ecommerce Product Addons is excellent for designing a highly customized product page that shows your products in a more prominent and interesting way. With these product add ons, creating unique product pages is now possible.'); ?>
                    </p>
                    <a href="<?php echo esc_url('https://www.vwthemes.com/plugins/woocommerce-product-add-ons/'); ?>"
                        target="_blank"><?php echo esc_html('Buy Now'); ?></a>
                </div>
                <div class="plugin-col">
                    <img
                        src="<?php echo esc_url(get_template_directory_uri().'/theme-wizard/assets/images/mega-menu.png'); ?>">

                    <h3><?php echo esc_html('Ibtana- Mega Menu Addon'); ?></h3>
                    <p><?php echo esc_html('View our mega menu demos or start the setup wizard which will guide you through all the steps to set up your menus.'); ?>
                    </p>
                    <a href="<?php echo esc_url('https://www.vwthemes.com/plugins/woocommerce-product-add-ons/'); ?>"
                        target="_blank"><?php echo esc_html('Buy Now'); ?></a>
                </div>
                <div class="plugin-col">
                    <img
                        src="<?php echo esc_url(get_template_directory_uri().'/theme-wizard/assets/images/VWThemes_banner_plugin.png'); ?>">
                    <h3><?php echo esc_html('Title Banner Image Plugin'); ?></h3>
                    <p><?php echo esc_html('If you are interested in adding the banner images, you check VW Title Banner Plugin. Its main speciality is that it permits user the addition of banner image on post, custom post or any page. '); ?>
                    </p>
                    <a href="<?php echo esc_url('https://www.vwthemes.com/premium-plugin/vw-title-banner-plugin/'); ?>"
                        target="_blank"><?php echo esc_html('Buy Now'); ?></a>
                </div>

                <div class="plugin-col">
                    <img
                        src="<?php echo esc_url(get_template_directory_uri().'/theme-wizard/assets/images/gallery_plugin_banner.png'); ?>">

                    <h3><?php echo esc_html('VW Gallery Images Plugin'); ?></h3>
                    <p><?php echo esc_html('The VW Gallery Plugin is an amazing WordPress gallery plugin. It helps you in creating the elegant gallery within few minutes. The VW Gallery plugin offers the advantage of displaying multiple galleries on a single page or post.'); ?>
                    </p>
                    <a href="<?php echo esc_url('https://www.vwthemes.com/premium-plugin/vw-gallery-plugin/'); ?>"
                        target="_blank"><?php echo esc_html('Buy Now'); ?></a>
                </div>

            </div>
        </div>
    </div>
    <div id="others_theme" class="tabcontent">
        <script>
        var data_post = {
            "para": "1"
        };

        jQuery.ajax({
            method: "POST",
            url: "https://www.vwthemes.com/wp-json/ibtana-licence/v2/get_modal_contents",
            data: JSON.stringify(data_post),
            dataType: 'json',
            contentType: 'application/json',
        }).done(function(data) {
            /*console.log(data);*/
            var premium_data = data.data.products;
            for (var i = 0; i < premium_data.length; i++) {
                var premium_product = premium_data[i];
                var card_content = `<div class="o-products-col" data-id="` + premium_product.id + `">
						          	<div class="o-products-image">
						          		<img src="` + premium_product.image + `">
						          	</div>
						          	<h3>` + premium_product.title + `</h3>
						          	<a href="` + premium_product.permalink + `" target="_blank">Buy Now</a>
						          	<a href="` + premium_product.demo_url + `" target="_blank">View Demo</a>
						          </div>`;
                jQuery('.wz-spinner-wrap').css('display', 'none');
                jQuery('#other-products .o-product-row').append(card_content);
            }

            var premium_category = data.data.sub;
            var active_class = ""
            /*console.log(premium_category.length);*/
            for (let i = 0; i < premium_category.length; i++) {
                if (i == 0) {
                    active_class = "active";
                } else {
                    active_class = "";
                }
                let premium_product = premium_category[i];
                let card_content = `<li data-ids="` + premium_product.product_ids +
                    `" onclick="other_products(this);" class="` + active_class + `">
					          		` + premium_product.name + `<span class="badge badge-info">` + premium_product.product_ids.length + `</span>
					          	</li>`;
                jQuery('.o-product-col-1 ul').append(card_content);
            }
        });

        function other_products(content) {

            jQuery('.o-product-col-1 ul li').attr('class', '');
            content.classList.add("active");
            var data_ids = jQuery(content).attr('data-ids');

            var id_arr = data_ids.split(',');
            jQuery('.o-product-row .o-products-col[data-id]').hide();
            for (var i = 0; i < id_arr.length; i++) {
                var single_id = id_arr[i];
                jQuery('.o-product-row .o-products-col[data-id="' + single_id + '"]').show();
            }

        }
        </script>
        <div id="other-products">
            <div class="wz-spinner-wrap">
                <div class="lds-dual-ring"></div>
            </div>
            <div class="o-product-main-row">
                <div class="o-product-col-1">
                    <ul>

                    </ul>
                </div>
                <div class="o-product-col-2">
                    <div class="social-theme-search">
                        <input class="themesearchinput" type="text" placeholder="Search Theme Here">
                    </div>
                    <div class="o-product-row" style="clear: both;">

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>

<?php }


	// Add a Custom CSS file to WP Admin Area
	public function internet_service_provider_pro_admin_theme_style() {
		wp_enqueue_style( 'internet-service-provider-pro-font', $this->internet_service_provider_pro_admin_font_url(), array() );
		wp_enqueue_style('custom-admin-style', get_template_directory_uri() . '/theme-wizard/getstarted/getstart.css');
		//( 'tab', get_template_directory_uri() . '/theme-wizard/getstarted/js/tab.js' );
	}

	// Theme Font URL
	public function internet_service_provider_pro_admin_font_url() {
		$font_url = '';
		$font_family = array();
		$font_family[] = 'Muli:300,400,600,700,800,900';

		$query_args = array(
			'family'	=> urlencode(implode('|',$font_family)),
		);
		$font_url = add_query_arg($query_args,'//fonts.googleapis.com/css');
		return $font_url;
	}
}