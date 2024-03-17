<?php
/**
 * Digital Marketer Theme Customizer
 *
 * @package Digital Marketer
 */

function digital_marketer_customize_register( $wp_customize ) {
	$wp_customize->get_setting( 'blogname' )->transport         = 'postMessage';
	$wp_customize->get_setting( 'blogdescription' )->transport  = 'postMessage';
	$wp_customize->get_setting( 'header_textcolor' )->transport = 'postMessage';

	if ( isset( $wp_customize->selective_refresh ) ) {
		$wp_customize->selective_refresh->add_partial(
			'blogname',
			array(
				'selector'        => '.site-title a',
				'render_callback' => 'digital_marketer_customize_partial_blogname',
			)
		);
		$wp_customize->selective_refresh->add_partial(
			'blogdescription',
			array(
				'selector'        => '.site-description',
				'render_callback' => 'digital_marketer_customize_partial_blogdescription',
			)
		);
	}

	/*
    * Theme Options Panel
    */
	$wp_customize->add_panel('digital_marketer_panel', array(
		'priority' => 25,
		'capability' => 'edit_theme_options',
		'title' => __('Digital Marketer Theme Options', 'digital-marketer'),
	));

	/*
	* Customizer top header section
	*/

	$wp_customize->add_setting(
		'digital_marketer_site_title_text',
		array(
			'capability'        => 'edit_theme_options',
			'transport'         => 'refresh',
			'default'           => 1,
			'sanitize_callback' => 'digital_marketer_sanitize_checkbox',
		)
	);

	$wp_customize->add_control(
		'digital_marketer_site_title_text',
		array(
			'label'       => __('Enable Title', 'digital-marketer'),
			'description' => __('Enable or Disable Title from the site', 'digital-marketer'),
			'section'     => 'title_tagline',
			'type'        => 'checkbox',
		)
	);

	$wp_customize->add_setting(
		'digital_marketer_site_tagline_text',
		array(
			'capability'        => 'edit_theme_options',
			'transport'         => 'refresh',
			'default'           => 0,
			'sanitize_callback' => 'digital_marketer_sanitize_checkbox',
		)
	);

	$wp_customize->add_control(
		'digital_marketer_site_tagline_text',
		array(
			'label'       => __('Enable Tagline', 'digital-marketer'),
			'description' => __('Enable or Disable Tagline from the site', 'digital-marketer'),
			'section'     => 'title_tagline',
			'type'        => 'checkbox',
		)
	);
	
	/*Top Header Options*/
	$wp_customize->add_section('digital_marketer_header_section', array(
		'priority'       => 5,
		'capability'     => 'edit_theme_options',
		'theme_supports' => '',
		'title'          => __('Top Header Options', 'digital-marketer'),
		'panel'       => 'digital_marketer_panel',
	));

	/*Top header section enable*/
	$wp_customize->add_setting(
		'digital_marketer_enable_top_header',
		array(
			'capability'        => 'edit_theme_options',
			'transport'         => 'refresh',
			'default'           => 1,
			'sanitize_callback' => 'digital_marketer_sanitize_checkbox',
		)
	);

	$wp_customize->add_control(
		'digital_marketer_enable_top_header',
		array(
			'label'       => __('Enable Top Header', 'digital-marketer'),
			'description' => __('Checked to show the top header section.', 'digital-marketer'),
			'section'     => 'digital_marketer_header_section',
			'type'        => 'checkbox',
		)
	);

	/*Text 1*/
	$wp_customize->add_setting(
		'digital_marketer_header_text1_option',
		array(
			'capability'        => 'edit_theme_options',
			'transport'         => 'refresh',
			'default'           => '',
			'sanitize_callback' => 'sanitize_text_field',
		)
	);

	$wp_customize->add_control(
		'digital_marketer_header_text1_option',
		array(
			'label'       => __('Edit Topheader Text #1', 'digital-marketer'),
			'section'     => 'digital_marketer_header_section',
			'type'        => 'text',
		)
	);

	/*Link 1*/
	$wp_customize->add_setting(
		'digital_marketer_header_link1_option',
		array(
			'capability'        => 'edit_theme_options',
			'transport'         => 'refresh',
			'default'           => '',
			'sanitize_callback' => 'esc_url_raw',
		)
	);

	$wp_customize->add_control(
		'digital_marketer_header_link1_option',
		array(
			'label'       => __('Edit Topheader Link #1', 'digital-marketer'),
			'section'     => 'digital_marketer_header_section',
			'type'        => 'url',
		)
	);

	/*Text 2*/
	$wp_customize->add_setting(
		'digital_marketer_header_text2_option',
		array(
			'capability'        => 'edit_theme_options',
			'transport'         => 'refresh',
			'default'           => '',
			'sanitize_callback' => 'sanitize_text_field',
		)
	);

	$wp_customize->add_control(
		'digital_marketer_header_text2_option',
		array(
			'label'       => __('Edit Topheader Text #2', 'digital-marketer'),
			'section'     => 'digital_marketer_header_section',
			'type'        => 'text',
		)
	);

	/*Link 2*/
	$wp_customize->add_setting(
		'digital_marketer_header_link2_option',
		array(
			'capability'        => 'edit_theme_options',
			'transport'         => 'refresh',
			'default'           => '',
			'sanitize_callback' => 'esc_url_raw',
		)
	);

	$wp_customize->add_control(
		'digital_marketer_header_link2_option',
		array(
			'label'       => __('Edit Topheader Link #2', 'digital-marketer'),
			'section'     => 'digital_marketer_header_section',
			'type'        => 'url',
		)
	);

	/*Text 3*/
	$wp_customize->add_setting(
		'digital_marketer_header_text3_option',
		array(
			'capability'        => 'edit_theme_options',
			'transport'         => 'refresh',
			'default'           => '',
			'sanitize_callback' => 'sanitize_text_field',
		)
	);

	$wp_customize->add_control(
		'digital_marketer_header_text3_option',
		array(
			'label'       => __('Edit Topheader Text #3', 'digital-marketer'),
			'section'     => 'digital_marketer_header_section',
			'type'        => 'text',
		)
	);

	/*Link 3*/
	$wp_customize->add_setting(
		'digital_marketer_header_link3_option',
		array(
			'capability'        => 'edit_theme_options',
			'transport'         => 'refresh',
			'default'           => '',
			'sanitize_callback' => 'esc_url_raw',
		)
	);

	$wp_customize->add_control(
		'digital_marketer_header_link3_option',
		array(
			'label'       => __('Edit Topheader Link #3', 'digital-marketer'),
			'section'     => 'digital_marketer_header_section',
			'type'        => 'url',
		)
	);

	/*Location*/
	$wp_customize->add_setting(
		'digital_marketer_location_text_option',
		array(
			'capability'        => 'edit_theme_options',
			'transport'         => 'refresh',
			'default'           => '',
			'sanitize_callback' => 'sanitize_text_field',
		)
	);

	$wp_customize->add_control(
		'digital_marketer_location_text_option',
		array(
			'label'       => __('Edit Location Text', 'digital-marketer'),
			'section'     => 'digital_marketer_header_section',
			'type'        => 'text',
		)
	);

	/*Phone Number*/
	$wp_customize->add_setting(
		'digital_marketer_phone_text_option',
		array(
			'capability'        => 'edit_theme_options',
			'transport'         => 'refresh',
			'default'           => '',
			'sanitize_callback' => 'sanitize_text_field',
		)
	);

	$wp_customize->add_control(
		'digital_marketer_phone_text_option',
		array(
			'label'       => __('Edit Phone Number', 'digital-marketer'),
			'section'     => 'digital_marketer_header_section',
			'type'        => 'text',
		)
	);

	/*Email*/
	$wp_customize->add_setting(
		'digital_marketer_email_text_option',
		array(
			'capability'        => 'edit_theme_options',
			'transport'         => 'refresh',
			'default'           => '',
			'sanitize_callback' => 'sanitize_text_field',
		)
	);

	$wp_customize->add_control(
		'digital_marketer_email_text_option',
		array(
			'label'       => __('Edit Email Address', 'digital-marketer'),
			'section'     => 'digital_marketer_header_section',
			'type'        => 'text',
		)
	);

	/*Request Quote Link*/
	$wp_customize->add_setting(
		'digital_marketer_quote_link_option',
		array(
			'capability'        => 'edit_theme_options',
			'transport'         => 'refresh',
			'default'           => '',
			'sanitize_callback' => 'esc_url_raw',
		)
	);

	$wp_customize->add_control(
		'digital_marketer_quote_link_option',
		array(
			'label'       => __('Edit Request Quote Link', 'digital-marketer'),
			'section'     => 'digital_marketer_header_section',
			'type'        => 'url',
		)
	);

	/*
	* Customizer main slider section
	*/
	/*Main Slider Options*/
	$wp_customize->add_section('digital_marketer_slider_section', array(
		'priority'       => 5,
		'capability'     => 'edit_theme_options',
		'theme_supports' => '',
		'title'          => __('Main Slider Options', 'digital-marketer'),
		'panel'       => 'digital_marketer_panel',
	));

	/*Main Slider Enable Option*/
	$wp_customize->add_setting(
		'digital_marketer_enable_slider',
		array(
			'capability'        => 'edit_theme_options',
			'transport'         => 'refresh',
			'default'           => 1,
			'sanitize_callback' => 'digital_marketer_sanitize_checkbox',
		)
	);

	$wp_customize->add_control(
		'digital_marketer_enable_slider',
		array(
			'label'       => __('Enable Main Slider', 'digital-marketer'),
			'description' => __('Checked to show the main slider', 'digital-marketer'),
			'section'     => 'digital_marketer_slider_section',
			'type'        => 'checkbox',
		)
	);

	$wp_customize->add_setting(
		'digital_marketer_slide_number',
		array(
			'capability'        => 'edit_theme_options',
			'transport'         => 'refresh',
			'sanitize_callback' => 'sanitize_text_field',
		)
	);

	$wp_customize->add_control(
		'digital_marketer_slide_number',
		array(
			'label'       => __('Number of slide to show', 'digital-marketer'),
			'section'     => 'digital_marketer_slider_section',
			'type'        => 'number',
			'input_attrs' => array(
				'min' => 1,     
				'max' => 3,   
			)
		)
	);

	$slide_count = (int)get_theme_mod('digital_marketer_slide_number');

	for ($m=1; $m <= $slide_count; $m++) {

		/*Main Slider Image*/
		$wp_customize->add_setting(
			'digital_marketer_slider_image'.$m,
			array(
				'capability'    => 'edit_theme_options',
		        'default'       => '',
		        'transport'     => 'postMessage',
		        'sanitize_callback' => 'esc_url_raw',
	    	)
	    );

		$wp_customize->add_control( 
			new WP_Customize_Image_Control( $wp_customize, 
				'digital_marketer_slider_image'.$m, 
				array(
			        'label' => __('Edit Slider Image ', 'digital-marketer') .$m,
			        'description' => __('Edit the slider image.', 'digital-marketer'),
			        'section' => 'digital_marketer_slider_section',
				)
			)
		);

		/*Main Slider Heading*/
		$wp_customize->add_setting(
			'digital_marketer_slider_heading'.$m,
			array(
				'capability'        => 'edit_theme_options',
				'transport'         => 'refresh',
				'default'           => '',
				'sanitize_callback' => 'sanitize_text_field',
			)
		);

		$wp_customize->add_control(
			'digital_marketer_slider_heading'.$m,
			array(
				'label'       => __('Edit Heading Text ', 'digital-marketer') .$m,
				'description' => __('Edit the slider heading text.', 'digital-marketer'),
				'section'     => 'digital_marketer_slider_section',
				'type'        => 'text',
			)
		);

		/*Main Slider Content*/
		$wp_customize->add_setting(
			'digital_marketer_slider_text'.$m,
			array(
				'capability'        => 'edit_theme_options',
				'transport'         => 'refresh',
				'default'           => '',
				'sanitize_callback' => 'sanitize_text_field',
			)
		);

		$wp_customize->add_control(
			'digital_marketer_slider_text'.$m,
			array(
				'label'       => __('Edit Content Text ', 'digital-marketer') .$m,
				'description' => __('Edit the slider content text.', 'digital-marketer'),
				'section'     => 'digital_marketer_slider_section',
				'type'        => 'text',
			)
		);

		/*Main Slider Button1 Text*/
		$wp_customize->add_setting(
			'digital_marketer_slider_button1_text'.$m,
			array(
				'capability'        => 'edit_theme_options',
				'transport'         => 'refresh',
				'default'           => '',
				'sanitize_callback' => 'sanitize_text_field',
			)
		);

		$wp_customize->add_control(
			'digital_marketer_slider_button1_text'.$m,
			array(
				'label'       => __('Edit Button #1 Text ', 'digital-marketer') .$m,
				'description' => __('Edit the slider button text.', 'digital-marketer'),
				'section'     => 'digital_marketer_slider_section',
				'type'        => 'text',
			)
		);

		/*Main Slider Button1 URL*/
		$wp_customize->add_setting(
			'digital_marketer_slider_button1_link'.$m,
			array(
				'capability'        => 'edit_theme_options',
				'transport'         => 'refresh',
				'default'           => '',
				'sanitize_callback' => 'esc_url_raw',
			)
		);

		$wp_customize->add_control(
			'digital_marketer_slider_button1_link'.$m,
			array(
				'label'       => __('Edit Button #1 URL ', 'digital-marketer') .$m,
				'description' => __('Edit the slider button url.', 'digital-marketer'),
				'section'     => 'digital_marketer_slider_section',
				'type'        => 'url',
			)
		);
	}

	/*
	* Customizer Portfolio section
	*/
	/*Portfolio Options*/
	$wp_customize->add_section('digital_marketer_events_section', array(
		'priority'       => 5,
		'capability'     => 'edit_theme_options',
		'theme_supports' => '',
		'title'          => __('Portfolio Option', 'digital-marketer'),
		'panel'       => 'digital_marketer_panel',
	));

	/*Portfolio Enable Option*/
	$wp_customize->add_setting(
		'digital_marketer_enable_event',
		array(
			'capability'        => 'edit_theme_options',
			'transport'         => 'refresh',
			'default'           => 1,
			'sanitize_callback' => 'digital_marketer_sanitize_checkbox',
		)
	);

	$wp_customize->add_control(
		'digital_marketer_enable_event',
		array(
			'label'       => __('Enable Portfolio Section', 'digital-marketer'),
			'description' => __('Checked to show the category', 'digital-marketer'),
			'section'     => 'digital_marketer_events_section',
			'type'        => 'checkbox',
		)
	);

	/*Portfolio Heading*/
	$wp_customize->add_setting(
		'digital_marketer_event_heading',
		array(
			'capability'        => 'edit_theme_options',
			'transport'         => 'refresh',
			'default'           => '',
			'sanitize_callback' => 'sanitize_text_field',
		)
	);

	$wp_customize->add_control(
		'digital_marketer_event_heading',
		array(
			'label'       => __('Edit Section Heading', 'digital-marketer'),
			'description' => __('Edit event section heading', 'digital-marketer'),
			'section'     => 'digital_marketer_events_section',
			'type'        => 'text',
		)
	);

	/*Portfolio Text*/
	$wp_customize->add_setting(
		'digital_marketer_event_text',
		array(
			'capability'        => 'edit_theme_options',
			'transport'         => 'refresh',
			'default'           => '',
			'sanitize_callback' => 'sanitize_text_field',
		)
	);

	$wp_customize->add_control(
		'digital_marketer_event_text',
		array(
			'label'       => __('Edit Section Text', 'digital-marketer'),
			'description' => __('Edit portfolio section text', 'digital-marketer'),
			'section'     => 'digital_marketer_events_section',
			'type'        => 'text',
		)
	);

	for ($i=1; $i <= 6; $i++) { 

		/*Portfolio Image*/
		$wp_customize->add_setting(
			'digital_marketer_category_image'.$i,
			array(
				'capability'    => 'edit_theme_options',
		        'default'       => '',
		        'transport'     => 'postMessage',
		        'sanitize_callback' => 'esc_url_raw',
	    	)
	    );

		$wp_customize->add_control( 
			new WP_Customize_Image_Control( $wp_customize, 
				'digital_marketer_category_image'.$i, 
				array(
			        'label' => __('Edit Portfolio Image ', 'digital-marketer') .$i,
			        'description' => __('Edit the category image.', 'digital-marketer'),
			        'section' => 'digital_marketer_events_section',
				)
			)
		);

		/*Portfolio Heading*/
		$wp_customize->add_setting(
			'digital_marketer_category_heading'.$i,
			array(
				'capability'        => 'edit_theme_options',
				'transport'         => 'refresh',
				'default'           => '',
				'sanitize_callback' => 'sanitize_text_field',
			)
		);

		$wp_customize->add_control(
			'digital_marketer_category_heading'.$i,
			array(
				'label'       => __('Edit Heading', 'digital-marketer') .$i,
				'description' => __('Edit portfolio heading text.', 'digital-marketer'),
				'section'     => 'digital_marketer_events_section',
				'type'        => 'text',
			)
		);

		/*Portfolio Content*/
		$wp_customize->add_setting(
			'digital_marketer_category_text'.$i,
			array(
				'capability'        => 'edit_theme_options',
				'transport'         => 'refresh',
				'default'           => '',
				'sanitize_callback' => 'sanitize_text_field',
			)
		);

		$wp_customize->add_control(
			'digital_marketer_category_text'.$i,
			array(
				'label'       => __('Edit Content', 'digital-marketer') .$i,
				'description' => __('Edit portfolio content text.', 'digital-marketer'),
				'section'     => 'digital_marketer_events_section',
				'type'        => 'text',
			)
		);

		/*Portfolio Button*/
		$wp_customize->add_setting(
			'digital_marketer_category_button1_text'.$i,
			array(
				'capability'        => 'edit_theme_options',
				'transport'         => 'refresh',
				'default'           => '',
				'sanitize_callback' => 'sanitize_text_field',
			)
		);

		$wp_customize->add_control(
			'digital_marketer_category_button1_text'.$i,
			array(
				'label'       => __('Edit Button Text', 'digital-marketer') .$i,
				'description' => __('Edit portfolio button text.', 'digital-marketer'),
				'section'     => 'digital_marketer_events_section',
				'type'        => 'text',
			)
		);

		/*Portfolio Button Link*/
		$wp_customize->add_setting(
			'digital_marketer_category_button1_link'.$i,
			array(
				'capability'        => 'edit_theme_options',
				'transport'         => 'refresh',
				'default'           => '',
				'sanitize_callback' => 'esc_url_raw',
			)
		);

		$wp_customize->add_control(
			'digital_marketer_category_button1_link'.$i,
			array(
				'label'       => __('Edit Button Link ', 'digital-marketer') .$i,
				'description' => __('Edit portfolio button link.', 'digital-marketer'),
				'section'     => 'digital_marketer_events_section',
				'type'        => 'url',
			)
		);
	}

	/*
	* Customizer Footer Section
	*/
	/*Footer Options*/
	$wp_customize->add_section('digital_marketer_footer_section', array(
		'priority'       => 5,
		'capability'     => 'edit_theme_options',
		'theme_supports' => '',
		'title'          => __('Footer Options', 'digital-marketer'),
		'panel'       => 'digital_marketer_panel',
	));


	/*Footer Social Menu Option*/
	$wp_customize->add_setting(
		'digital_marketer_footer_social_menu',
		array(
			'capability'        => 'edit_theme_options',
			'transport'         => 'refresh',
			'default'           => 1,
			'sanitize_callback' => 'digital_marketer_sanitize_checkbox',
		)
	);

	$wp_customize->add_control(
		'digital_marketer_footer_social_menu',
		array(
			'label'       => __('Enable Footer Social Menu', 'digital-marketer'),
			'description' => __('Checked to show the footer social menu. Go to Dashboard >> Appearance >> Menus >> Create New Menu >> Add Custom Link >> Add Social Menu >> Checked Social Menu >> Save Menu.', 'digital-marketer'),
			'section'     => 'digital_marketer_footer_section',
			'type'        => 'checkbox',
		)
	);	

	/*Go To Top Option*/
	$wp_customize->add_setting(
		'digital_marketer_enable_go_to_top_option',
		array(
			'capability'        => 'edit_theme_options',
			'transport'         => 'refresh',
			'default'           => 1,
			'sanitize_callback' => 'digital_marketer_sanitize_checkbox',
		)
	);

	$wp_customize->add_control(
		'digital_marketer_enable_go_to_top_option',
		array(
			'label'       => __('Enable Go To Top', 'digital-marketer'),
			'description' => __('Checked to enable Go To Top option.', 'digital-marketer'),
			'section'     => 'digital_marketer_footer_section',
			'type'        => 'checkbox',
		)
	);

	/*Footer Copyright Text Enable*/
	$wp_customize->add_setting(
		'digital_marketer_copyright_option',
		array(
			'capability'        => 'edit_theme_options',
			'transport'         => 'refresh',
			'default'           => '',
			'sanitize_callback' => 'sanitize_text_field',
		)
	);

	$wp_customize->add_control(
		'digital_marketer_copyright_option',
		array(
			'label'       => __('Edit Copyright Text', 'digital-marketer'),
			'description' => __('Edit the Footer Copyright Section.', 'digital-marketer'),
			'section'     => 'digital_marketer_footer_section',
			'type'        => 'text',
		)
	);
}
add_action( 'customize_register', 'digital_marketer_customize_register' );

/**
 * Render the site title for the selective refresh partial.
 *
 * @return void
 */
function digital_marketer_customize_partial_blogname() {
	bloginfo( 'name' );
}

/**
 * Render the site tagline for the selective refresh partial.
 *
 * @return void
 */
function digital_marketer_customize_partial_blogdescription() {
	bloginfo( 'description' );
}

/**
 * Binds JS handlers to make Theme Customizer preview reload changes asynchronously.
 */
function digital_marketer_customize_preview_js() {
	wp_enqueue_script( 'digital-marketer-customizer', get_template_directory_uri() . '/js/customizer.js', array( 'customize-preview' ), DIGITAL_MARKETER_VERSION, true );
}
add_action( 'customize_preview_init', 'digital_marketer_customize_preview_js' );

/**
 * Singleton class for handling the theme's customizer integration.
 *
 * @since  1.0.0
 * @access public
 */
final class Digital_Marketer_Customize {

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
		load_template( trailingslashit( get_template_directory() ) . '/revolution/inc/section-pro.php' );

		// Register custom section types.
		$manager->register_section_type( 'Digital_Marketer_Customize_Section_Pro' );

		// Register sections.
		$manager->add_section( new Digital_Marketer_Customize_Section_Pro( $manager,'digital_marketer_go_pro', array(
			'priority'   => 1,
			'title'    => esc_html__( 'Digital Marketer', 'digital-marketer' ),
			'pro_text' => esc_html__( 'Buy Pro', 'digital-marketer' ),
			'pro_url'  => esc_url('https://www.revolutionwp.com/wp-themes/digital-marketing-wordpress-theme/'),
		) )	);
	}

	/**
	 * Loads theme customizer CSS.
	 *
	 * @since  1.0.0
	 * @access public
	 * @return void
	 */
	public function enqueue_control_scripts() {

		wp_enqueue_script( 'digital-marketer-customize-controls', trailingslashit( get_template_directory_uri() ) . '/revolution/assets/js/customize-controls.js', array( 'customize-controls' ) );

		wp_enqueue_style( 'digital-marketer-customize-controls', trailingslashit( get_template_directory_uri() ) . '/revolution/assets/css/customize-controls.css' );
	}
}

// Doing this customizer thang!
Digital_Marketer_Customize::get_instance();