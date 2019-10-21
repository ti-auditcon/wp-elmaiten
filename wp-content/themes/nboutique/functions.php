<?php
/**
 * Nature Boutique functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Nature_Boutique
 */

if ( ! function_exists( 'nboutique_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function nboutique_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on Nature Boutique, use a find and replace
		 * to change 'nboutique' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'nboutique', get_template_directory() . '/languages' );

		// Add default posts and comments RSS feed links to head.
		add_theme_support( 'automatic-feed-links' );

		/*
		 * Let WordPress manage the document title.
		 * By adding theme support, we declare that this theme does not use a
		 * hard-coded <title> tag in the document head, and expect WordPress to
		 * provide it for us.
		 */
		add_theme_support( 'title-tag' );

		/*
		 * Enable support for Post Thumbnails on posts and pages.
		 *
		 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		 */
		add_theme_support( 'post-thumbnails' );

		// This theme uses wp_nav_menu() in one location.
		register_nav_menus( array(
			'menu-header' => esc_html__( 'Cabecera', 'nboutique' ),
		) );

		/*
		 * Switch default core markup for search form, comment form, and comments
		 * to output valid HTML5.
		 */
		add_theme_support( 'html5', array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
		) );

		// Set up the WordPress core custom background feature.
		add_theme_support( 'custom-background', apply_filters( 'nboutique_custom_background_args', array(
			'default-color' => 'ffffff',
			'default-image' => '',
		) ) );

		// Add theme support for selective refresh for widgets.
		add_theme_support( 'customize-selective-refresh-widgets' );

		/**
		 * Add support for core custom logo.
		 *
		 * @link https://codex.wordpress.org/Theme_Logo
		 */
		add_theme_support( 'custom-logo', array(
			'height'      => 250,
			'width'       => 250,
			'flex-width'  => true,
			'flex-height' => true,
		) );
	}
endif;
add_action( 'after_setup_theme', 'nboutique_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function nboutique_content_width() {
	// This variable is intended to be overruled from themes.
	// Open WPCS issue: {@link https://github.com/WordPress-Coding-Standards/WordPress-Coding-Standards/issues/1043}.
	// phpcs:ignore WordPress.NamingConventions.PrefixAllGlobals.NonPrefixedVariableFound
	$GLOBALS['content_width'] = apply_filters( 'nboutique_content_width', 640 );
}
add_action( 'after_setup_theme', 'nboutique_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function nboutique_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'nboutique' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'nboutique' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'nboutique_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function nboutique_scripts() {

	wp_enqueue_style( 'nboutique-style', get_stylesheet_uri() );
	wp_enqueue_style( 'gfonts', 'https://fonts.googleapis.com/css?family=Lato:300,400,700|Playfair+Display:700,700i&display=swap', false );
	wp_enqueue_style( 'hamburgers', get_template_directory_uri() . '/css/hamburgers.css', false );
	wp_enqueue_script( 'jquery' );
	wp_enqueue_script( 'nboutique-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20151215', true );
	wp_enqueue_script( 'nboutique-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20151215', true );
	wp_enqueue_script( 'nboutique-js', get_template_directory_uri() . '/js/script.js', array('jquery'), '1.0', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'nboutique_scripts' );

// https://file.myfontastic.com/2qoQR6jg74BZgsqErRXqC/icons.css

/**
 * Enqueue Admin Scripts and Styles.
 */
function load_custom_admin_styles() {
	wp_enqueue_style( 'custom_dashicons', get_template_directory_uri() . '/dashicons/styles.css', false );
  wp_enqueue_style( 'custom_dashicons' );
}
add_action( 'admin_enqueue_scripts', 'load_custom_admin_styles' );

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';
}


// Eliminar Página Posts desde admin
function admin_section_remove () {
   remove_menu_page('edit.php');
   remove_menu_page('edit-comments.php');
}
add_action('admin_menu', 'admin_section_remove');

// Reordenar Menu
function wpse_custom_menu_order( $menu_ord ) {
    if ( !$menu_ord ) return true;

    return array(
        'index.php', // Dashboard
				'edit.php', // Posts
        'separator1', // separator

        'edit.php?post_type=portainjerto', // Portainjerto
        'edit.php?post_type=plantas', // Plantas
        'edit.php?post_type=variedades', // Variedades
        'edit.php?post_type=servicios', // Servicios
        'edit.php?post_type=equipo', // Equipo
				'separator1', // separator

				'edit.php?post_type=page', // Pages
				'separator2', // separator

				'upload.php', // Media
				'edit-comments.php', // Comments
        'themes.php', // Appearance
        'plugins.php', // Plugins
        'users.php', // Users
				'separator-last', // Last separator

        'tools.php', // Tools
        'options-general.php', // Settings
    );
}
add_filter( 'custom_menu_order', 'wpse_custom_menu_order', 10, 1 );
add_filter( 'menu_order', 'wpse_custom_menu_order', 10, 1 );
