<?php
/**
 * Digital Marketer functions and definitions
 *
 * @package Digital Marketer
 */

if ( ! defined( 'DIGITAL_MARKETER_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( 'DIGITAL_MARKETER_VERSION', '1.0.0' );
}

function digital_marketer_setup() {

	load_theme_textdomain( 'digital-marketer' );
	add_theme_support( 'automatic-feed-links' );
	add_theme_support( 'title-tag' );
	add_theme_support( 'post-thumbnails' );
	add_theme_support( 'woocommerce' );

	register_nav_menus(
		array(
			'menu-1' => esc_html__( 'Primary', 'digital-marketer' ),
			'social-menu' => esc_html__('Social Menu', 'digital-marketer'),
		)
	);

	add_theme_support(
		'html5',
		array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
			'style',
			'script',
		)
	);

	add_theme_support(
		'custom-background',
		apply_filters(
			'digital_marketer_custom_background_args',
			array(
				'default-color' => '#fafafa',
				'default-image' => '',
			)
		)
	);

	add_theme_support( 'customize-selective-refresh-widgets' );

	add_theme_support(
		'custom-logo',
		array(
			'height'      => 250,
			'width'       => 250,
			'flex-width'  => true,
			'flex-height' => true,
		)
	);
	
}
add_action( 'after_setup_theme', 'digital_marketer_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function digital_marketer_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'digital_marketer_content_width', 640 );
}
add_action( 'after_setup_theme', 'digital_marketer_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function digital_marketer_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Sidebar', 'digital-marketer' ),
			'id'            => 'sidebar-1',
			'description'   => esc_html__( 'Add widgets here.', 'digital-marketer' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);

	register_sidebar(
		array(
			'name'          => esc_html__( 'Footer 1', 'digital-marketer' ),
			'id'            => 'footer-1',
			'description'   => esc_html__( 'Add widgets here.', 'digital-marketer' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);

	register_sidebar(
		array(
			'name'          => esc_html__( 'Footer 2', 'digital-marketer' ),
			'id'            => 'footer-2',
			'description'   => esc_html__( 'Add widgets here.', 'digital-marketer' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);

	register_sidebar(
		array(
			'name'          => esc_html__( 'Footer 3', 'digital-marketer' ),
			'id'            => 'footer-3',
			'description'   => esc_html__( 'Add widgets here.', 'digital-marketer' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action( 'widgets_init', 'digital_marketer_widgets_init' );


function digital_marketer_social_menu()
    {
        if (has_nav_menu('social-menu')) :
            wp_nav_menu(array(
                'theme_location' => 'social-menu',
                'container' => 'ul',
                'menu_class' => 'social-menu menu',
                'menu_id'  => 'menu-social',
            ));
        endif;
    }

/**
 * Enqueue scripts and styles.
 */
function digital_marketer_scripts() {

	// Load fonts locally
	require_once get_theme_file_path('revolution/inc/wptt-webfont-loader.php');

	$font_families = array(
		'Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900',
	);
	
	$fonts_url = add_query_arg( array(
		'family' => implode( '&family=', $font_families ),
		'display' => 'swap',
	), 'https://fonts.googleapis.com/css2' );

	wp_enqueue_style('digital-marketer-google-fonts', wptt_get_webfont_url(esc_url_raw($fonts_url)), array(), '1.0.0');
	
	// Font Awesome CSS
	wp_enqueue_style('font-awesome-5', get_template_directory_uri() . '/revolution/assets/vendors/font-awesome-5/css/all.min.css', array());

	wp_enqueue_style('owl.carousel.style', get_template_directory_uri() . '/revolution/assets/css/owl.carousel.css', array());
	
	wp_enqueue_style( 'digital-marketer-style', get_stylesheet_uri(), array(), DIGITAL_MARKETER_VERSION );

	wp_style_add_data('digital-marketer-style', 'rtl', 'replace');

	wp_enqueue_script( 'digital-marketer-navigation', get_template_directory_uri() . '/js/navigation.js', array(), DIGITAL_MARKETER_VERSION, true );

	wp_enqueue_script( 'owl.carousel.jquery', get_template_directory_uri() . '/revolution/assets/js/owl.carousel.js', array(), DIGITAL_MARKETER_VERSION, true );

	wp_enqueue_script( 'digital-marketer-custom-js', get_template_directory_uri() . '/revolution/assets/js/custom.js', array('jquery'), DIGITAL_MARKETER_VERSION, true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'digital_marketer_scripts' );

if (!function_exists('digital_marketer_related_post')) :
    /**
     * Display related posts from same category
     *
     */
    function digital_marketer_related_post($post_id){        
        $categories = get_the_category($post_id);
        if ($categories) {
            $category_ids = array();
            $category = get_category($category_ids);
            $categories = get_the_category($post_id);
            foreach ($categories as $category) {
                $category_ids[] = $category->term_id;
            }
            $count = $category->category_count;
            if ($count > 1) { ?>
                <div class="related-post">
                    
                    <h2 class="post-title"><?php esc_html_e('Related Posts','digital-marketer'); ?></h2>
                    <?php
                    $digital_marketer_cat_post_args = array(
                        'category__in' => $category_ids,
                        'post__not_in' => array($post_id),
                        'post_type' => 'post',
                        'posts_per_page' => 3,
                        'post_status' => 'publish',
                        'ignore_sticky_posts' => true
                    );
                    $digital_marketer_featured_query = new WP_Query($digital_marketer_cat_post_args);
                    ?>
                    <div class="rel-post-wrap">
                        <?php
                        if ($digital_marketer_featured_query->have_posts()) :

                        while ($digital_marketer_featured_query->have_posts()) : $digital_marketer_featured_query->the_post();
                            ?>

							<div class="card-item rel-card-item">
								<div class="card-content">
									<div class="entry-title">
										<h3>
											<a href="<?php the_permalink() ?>">
												<?php the_title(); ?>
											</a>
										</h3>
									</div>
									<div class="entry-meta">
										<?php digital_marketer_posted_on(); ?>
									</div>
								</div>
							</div>
                        <?php
                        endwhile;
                        ?>
                <?php
                endif;
                wp_reset_postdata();
                ?>
                </div>
                <?php
            }
        }
    }
endif;
add_action('digital_marketer_related_posts', 'digital_marketer_related_post', 10, 1);

/**
 * Checkbox sanitization callback example.
 *
 * Sanitization callback for 'checkbox' type controls. This callback sanitizes `$checked`
 * as a boolean value, either TRUE or FALSE.
 */
function digital_marketer_sanitize_checkbox($checked)
{
    // Boolean check.
    return ((isset($checked) && true == $checked) ? true : false);
}

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/revolution/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/revolution/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/revolution/inc/template-functions.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/revolution/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/revolution/inc/jetpack.php';

}

function digital_marketer_remove_customize_register() {
    global $wp_customize;

    $wp_customize->remove_setting( 'display_header_text' );
    $wp_customize->remove_control( 'display_header_text' );

}

add_action( 'customize_register', 'digital_marketer_remove_customize_register', 11 );

/**
 * Load getstart.
 */
require get_template_directory() . '/getstarted/getstarted.php';

define('DIGITAL_MARKETER_FREE_SUPPORT',__('https://wordpress.org/support/theme/digital-marketer/','digital-marketer'));
define('DIGITAL_MARKETER_PRO_SUPPORT',__('https://www.revolutionwp.com/support/revolution-wp/','digital-marketer'));
define('DIGITAL_MARKETER_REVIEW',__('https://wordpress.org/support/theme/digital-marketer/reviews/#new-post','digital-marketer'));
define('DIGITAL_MARKETER_BUY_NOW',__('https://www.revolutionwp.com/wp-themes/digital-marketing-wordpress-theme/','digital-marketer'));
define('DIGITAL_MARKETER_LIVE_DEMO',__('https://www.revolutionwp.com/wpdemo/digital-marketer-pro/','digital-marketer'));
define('DIGITAL_MARKETER_PRO_DOC',__('https://www.revolutionwp.com/wpdocs/digital-marketer-pro/','digital-marketer'));
define('DIGITAL_MARKETER_LITE_DOC',__('https://www.revolutionwp.com/wpdocs/digital-marketer-free','digital-marketer'));