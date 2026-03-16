<?php
/**
 * internet-service-provider-pro Theme Customizer
 *
 * @package internet-service-provider-pro
 */
/**
 * Loads custom control for layout settings
 */
function internet_service_provider_pro_custom_controls() {
    require_once get_template_directory() . '/inc/customize/controls/admin/customize-texteditor-control.php';
     require_once get_template_directory() . '/inc/customize/controls/custom-controls.php';
     require_once get_template_directory() . '/inc/customize/controls/button-controls.php';
     require get_template_directory() . '/inc/customize/controls/custom-multiselect.php';

     // Inlcude the Alpha Color Picker control file.
     require_once get_template_directory() . '/inc/customize/controls/alpha-color-picker.php';
     get_stylesheet_directory_uri() . '/assets/js/alpha-color-picker.js';
     get_stylesheet_directory_uri() . '/assets/css/alpha-color-picker.css';

}
add_action( 'customize_register', 'internet_service_provider_pro_custom_controls' );
/**
 * Add postMessage support for site title and description for the Theme Customizer.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */
function internet_service_provider_pro_customize_register( $wp_customize ) {
    $wp_customize->get_setting( 'blogname' )->transport         = 'postMessage';
    $wp_customize->get_setting( 'blogdescription' )->transport  = 'postMessage';

    $wp_customize->selective_refresh->add_partial( 'blogname', array(
        'selector' => '.logo a',
        'render_callback' => 'twentyfifteen_customize_partial_blogname',
    ) );
    $wp_customize->selective_refresh->add_partial( 'blogdescription', array(
        'selector' => '.site-description',
        'render_callback' => 'twentyfifteen_customize_partial_blogdescription',
    ) );

    $wp_customize->add_setting('internet_service_provider_pro_display_title',array(
        'default' => 'false',
        'sanitize_callback' => 'sanitize_text_field'
    ));
    $wp_customize->add_control('internet_service_provider_pro_display_title',array(
        'type' => 'checkbox',
        'label' => __('Show Title','internet-service-provider-pro'),
        'section' => 'title_tagline',
    ));
    $wp_customize->add_setting('internet_service_provider_pro_display_tagline',array(
        'default' => 'false',
        'sanitize_callback' => 'sanitize_text_field'
    ));
    $wp_customize->add_control('internet_service_provider_pro_display_tagline',array(
        'type' => 'checkbox',
        'label' => __('Show Tagline','internet-service-provider-pro'),
        'section' => 'title_tagline',
    ));
    //add home page setting pannel
    $wp_customize->add_panel( 'internet_service_provider_pro_panel_id', array(
        'priority' => 10,
        'capability' => 'edit_theme_options',
        'theme_supports' => '',
        'title' => __( 'Theme Settings', 'internet-service-provider-pro' ),
        'description' => __( 'Description of what this panel does.', 'internet-service-provider-pro' ),
    ) );
    $font_array = array(
        '' => __( 'No Fonts', 'internet-service-provider-pro' ),
        'Abril Fatface' => __( 'Abril Fatface', 'internet-service-provider-pro' ),
        'Acme' => __( 'Acme', 'internet-service-provider-pro' ),
        'Anton' => __( 'Anton', 'internet-service-provider-pro' ),
        'Architects Daughter' => __( 'Architects Daughter', 'internet-service-provider-pro' ),
        'Arimo' => __( 'Arimo', 'internet-service-provider-pro' ),
        'Arsenal' => __( 'Arsenal', 'internet-service-provider-pro' ),
        'Arvo' => __( 'Arvo', 'internet-service-provider-pro' ),
        'Alegreya' => __( 'Alegreya', 'internet-service-provider-pro' ),
        'Alfa Slab One' => __( 'Alfa Slab One', 'internet-service-provider-pro' ),
        'Averia Serif Libre' => __( 'Averia Serif Libre', 'internet-service-provider-pro' ),
        'Bangers' => __( 'Bangers', 'internet-service-provider-pro' ),
        'Boogaloo' => __( 'Boogaloo', 'internet-service-provider-pro' ),
        'Bad Script' => __( 'Bad Script', 'internet-service-provider-pro' ),
        'Bitter' => __( 'Bitter', 'internet-service-provider-pro' ),
        'Bree Serif' => __( 'Bree Serif', 'internet-service-provider-pro' ),
        'BenchNine' => __( 'BenchNine', 'internet-service-provider-pro' ),
        'Cabin' => __( 'Cabin', 'internet-service-provider-pro' ),
        'Cardo' => __( 'Cardo', 'internet-service-provider-pro' ),
        'Courgette' => __( 'Courgette', 'internet-service-provider-pro' ),
        'Cherry Swash' => __( 'Cherry Swash', 'internet-service-provider-pro' ),
        'Cormorant Garamond' => __( 'Cormorant Garamond', 'internet-service-provider-pro' ),
        'Crimson Text' => __( 'Crimson Text', 'internet-service-provider-pro' ),
        'Cuprum' => __( 'Cuprum', 'internet-service-provider-pro' ),
        'Cookie' => __( 'Cookie', 'internet-service-provider-pro' ),
        'Chewy' => __( 'Chewy', 'internet-service-provider-pro' ),
        'Days One' => __( 'Days One', 'internet-service-provider-pro' ),
        'Dosis' => __( 'Dosis', 'internet-service-provider-pro' ),
        'Economica' => __( 'Economica', 'internet-service-provider-pro' ),
        'Fredoka One' => __( 'Fredoka One', 'internet-service-provider-pro' ),
        'Fjalla One' => __( 'Fjalla One', 'internet-service-provider-pro' ),
        'Francois One' => __( 'Francois One', 'internet-service-provider-pro' ),
        'Frank Ruhl Libre' => __( 'Frank Ruhl Libre', 'internet-service-provider-pro' ),
        'Gloria Hallelujah' => __( 'Gloria Hallelujah', 'internet-service-provider-pro' ),
        'Great Vibes' => __( 'Great Vibes', 'internet-service-provider-pro' ),
        'Handlee' => __( 'Handlee', 'internet-service-provider-pro' ),
        'Hammersmith One' => __( 'Hammersmith One', 'internet-service-provider-pro' ),
        'Inconsolata' => __( 'Inconsolata', 'internet-service-provider-pro' ),
        'Indie Flower' => __( 'Indie Flower', 'internet-service-provider-pro' ),
        'IM Fell English SC' => __( 'IM Fell English SC', 'internet-service-provider-pro' ),
        'Julius Sans One' => __( 'Julius Sans One', 'internet-service-provider-pro' ),
        'Josefin Slab' => __( 'Josefin Slab', 'internet-service-provider-pro' ),
        'Josefin Sans' => __( 'Josefin Sans', 'internet-service-provider-pro' ),
        'Kanit' => __( 'Kanit', 'internet-service-provider-pro' ),
        'Lobster' => __( 'Lobster', 'internet-service-provider-pro' ),
        'Lato' => __( 'Lato', 'internet-service-provider-pro' ),
        'Lora' => __( 'Lora', 'internet-service-provider-pro' ),
        'Libre Baskerville' => __( 'Libre Baskerville', 'internet-service-provider-pro' ),
        'Lobster Two' => __( 'Lobster Two', 'internet-service-provider-pro' ),
        'Merriweather' => __( 'Merriweather', 'internet-service-provider-pro' ),
        'Monda' => __( 'Monda', 'internet-service-provider-pro' ),
        'Montserrat' => __( 'Montserrat', 'internet-service-provider-pro' ),
        'Muli' => __( 'Muli', 'internet-service-provider-pro' ),
        'Marck Script' => __( 'Marck Script', 'internet-service-provider-pro' ),
        'Noto Serif' => __( 'Noto Serif', 'internet-service-provider-pro' ),
        'Open Sans' => __( 'Open Sans', 'internet-service-provider-pro' ),
        'Overpass' => __( 'Overpass', 'internet-service-provider-pro' ),
        'Overpass Mono' => __( 'Overpass Mono', 'internet-service-provider-pro' ),
        'Oxygen' => __( 'Oxygen', 'internet-service-provider-pro' ),
        'Orbitron' => __( 'Orbitron', 'internet-service-provider-pro' ),
        'Patua One' => __( 'Patua One', 'internet-service-provider-pro' ),
        'Pacifico' => __( 'Pacifico', 'internet-service-provider-pro' ),
        'Padauk' => __( 'Padauk', 'internet-service-provider-pro' ),
        'Playball' => __( 'Playball', 'internet-service-provider-pro' ),
        'Playfair Display' => __( 'Playfair Display', 'internet-service-provider-pro' ),
        'PT Sans' => __( 'PT Sans', 'internet-service-provider-pro' ),
        'Philosopher' => __( 'Philosopher', 'internet-service-provider-pro' ),
        'Permanent Marker' => __( 'Permanent Marker', 'internet-service-provider-pro' ),
        'Poiret One' => __( 'Poiret One', 'internet-service-provider-pro' ),
        'var(--primary-font)' => __( 'var(--primary-font)', 'internet-service-provider-pro' ),
        'Quattrocento Sans' => __( 'Quattrocento Sans', 'internet-service-provider-pro' ),
        'Raleway' => __( 'Raleway', 'internet-service-provider-pro' ),
        'Rubik' => __( 'Rubik', 'internet-service-provider-pro' ),
        'Rokkitt' => __( 'Rokkitt', 'internet-service-provider-pro' ),
        'Russo One' => __( 'Russo One', 'internet-service-provider-pro' ),
        'Righteous' => __( 'Righteous', 'internet-service-provider-pro' ),
        'Slabo' => __( 'Slabo', 'internet-service-provider-pro' ),
        'Source Sans Pro' => __( 'Source Sans Pro', 'internet-service-provider-pro' ),
        'Shadows Into Light Two' => __( 'Shadows Into Light Two', 'internet-service-provider-pro'),
        'Shadows Into Light' => __( 'Shadows Into Light', 'internet-service-provider-pro' ),
        'Sacramento' => __( 'Sacramento', 'internet-service-provider-pro' ),
        'Shrikhand' => __( 'Shrikhand', 'internet-service-provider-pro' ),
        'Tangerine' => __( 'Tangerine', 'internet-service-provider-pro' ),
        'Ubuntu' => __( 'Ubuntu', 'internet-service-provider-pro' ),
        'VT323' => __( 'VT323', 'internet-service-provider-pro' ),
        'Varela Round' => __( 'Varela Round', 'internet-service-provider-pro' ),
        'Vampiro One' => __( 'Vampiro One', 'internet-service-provider-pro' ),
        'Vollkorn' => __( 'Vollkorn', 'internet-service-provider-pro' ),
        'Volkhov' => __( 'Volkhov', 'internet-service-provider-pro' ),
        'Yanone Kaffeesatz' => __( 'Yanone Kaffeesatz', 'internet-service-provider-pro' )
    );
    require_once get_template_directory() . '/inc/customize/controls/slider-line-control/slider-line-control.php';
    require_once get_template_directory() . '/inc/customize/controls/social-icons/social-icon-picker.php';

    require_once get_template_directory() . '/inc/customize/controls/customizer-text-radio-button/class/customizer-text-radio-button.php';
    require_once get_template_directory() . '/inc/customize/controls/customizer-seperator/class/customizer-seperator.php';
     require_once get_template_directory() . '/inc/customize/controls/customizer-notice/class/customizer-notice.php';

    require_once get_template_directory() . '/inc/customize/controls/customize-repeater/customize-repeater.php';

    require_once get_template_directory() . '/inc/customize/controls/dimensions-control/dimensions-control.php';

   if ( (ThemeWhizzie::get_the_validation_status() === 'true') && (ThemeWhizzie::get_the_suspension_status() == 'false') ) {
    require_once get_template_directory() . '/inc/customize/sections/customizer-custom-variables.php';
    require_once get_template_directory() . '/inc/customize/sections/customizer-part-header.php';
    require_once get_template_directory() . '/inc/customize/sections/customizer-part-home.php';
    require_once get_template_directory() . '/inc/customize/sections/customizer-part-footer.php';
    require get_template_directory() . '/inc/customize/sections/customizer-part-social-icons.php';
    require_once get_template_directory() . '/inc/customize/sections/customizer-other-page.php';

    $wp_customize->register_control_type('VW_Dimensions_Control');

  }
}
add_action( 'customize_register', 'internet_service_provider_pro_customize_register' );
//Integer
function internet_service_provider_pro_sanitize_integer( $input ) {
    if( is_numeric( $input ) ) {
        return intval( $input );
    }
}

/* Logo Resizer */
load_template( trailingslashit( get_template_directory() ) . '/inc/logo/logo-resizer.php' );

/**
 * Singleton class for handling the theme's customizer integration.
 *
 * @since  1.0.0
 * @access public
 */
final class internet_service_provider_pro_customize {
    /**
     * Returns the instance.
     *
     * @since  1.0.0
     * @access public
     * @return object
     */
    public static function get_instance() {
        static $instance = null;
        if ( is_null( $instance ) ) {
            $instance = new self;
            $instance->setup_actions();
        }
        return $instance;
    }
    /**
     * Constructor method.
     *
     * @since  1.0.0
     * @access private
     * @return void
     */
    private function __construct() {}
    /**
     * Sets up initial actions.
     *
     * @since  1.0.0
     * @access private
     * @return void
     */
    private function setup_actions() {
        // Register panels, sections, settings, controls, and partials.
        add_action( 'customize_register', array( $this, 'sections' ) );
         add_action( 'customize_register', array( $this, 'bundle' ) );
        // Register scripts and styles for the controls.
        add_action( 'customize_controls_enqueue_scripts', array( $this, 'enqueue_control_scripts' ), 0 );
    }
    /**
     * Sets up the customizer sections.
     *
     * @since  1.0.0
     * @access public
     * @param  object  $manager
     * @return void
     */
    public function sections( $manager ) {
        // Load custom sections.
        load_template( trailingslashit( get_template_directory() ) . '/inc/review-section.php' );
        // Register custom section types.
        $manager->register_section_type( 'internet_service_provider_pro_customize_reviews_and_testimonials' );
        // Register sections.
        $manager->add_section(
            new internet_service_provider_pro_customize_reviews_and_testimonials(
                $manager,
                'example_1',
                array(
                    'title'    => esc_html__( 'Review & Testimonial', 'internet-service-provider-pro' ),
                    'reviews_and_testimonials_text' => esc_html__( 'Rate Us', 'internet-service-provider-pro' ),
                    'reviews_and_testimonials_url'  => 'https://www.vwthemes.com/topic/reviews-and-testimonials/',
                    'priority' =>1,
                )
            )
        );
    }

     public function bundle( $manager ) {
        // Load custom sections.
        load_template( trailingslashit( get_template_directory() ) . '/inc/review-section.php' );
        // Register custom section types.
        $manager->register_section_type( 'internet_service_provider_pro_customize_reviews_and_testimonials' );
        // Register sections.
        $manager->add_section(
            new internet_service_provider_pro_customize_reviews_and_testimonials(
                $manager,
                'example_2',
                array(
                    'title'    => esc_html__( 'Theme Bundle', 'internet-service-provider-pro' ),
                    'reviews_and_testimonials_text' => esc_html__( 'Buy Now', 'internet-service-provider-pro' ),
                    'reviews_and_testimonials_url'  => 'https://www.vwthemes.com/premium/theme-bundle/',
                    'priority' =>2,
                )
            )
        );
    }
    /**
     * Loads theme customizer CSS.
     *
     * @since  1.0.0
     * @access public
     * @return void
     */
    public function enqueue_control_scripts() {
        wp_enqueue_script( 'internet-service-provider-pro-customize-controls', trailingslashit( get_template_directory_uri() ) . '/assets/js/customize-controls.js', array( 'customize-controls' ) );
        wp_enqueue_style( 'internet-service-provider-pro-customize-controls', trailingslashit( get_template_directory_uri() ) . '/assets/css/customize-controls.css' );
    }
}
// Doing this customizer thang!
internet_service_provider_pro_customize::get_instance();