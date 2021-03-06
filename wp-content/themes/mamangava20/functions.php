<?php

/**
 * mamangava20 functions and definitions.
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package mamangava20
 */
if (!function_exists('mamangava20_setup')) :

    /**
     * Sets up theme defaults and registers support for various WordPress features.
     *
     * Note that this function is hooked into the after_setup_theme hook, which
     * runs before the init hook. The init hook is too late for some features, such
     * as indicating support for post thumbnails.
     */
    function mamangava20_setup() {
        /*
         * Make theme available for translation.
         * Translations can be filed in the /languages/ directory.
         * If you're building a theme based on mamangava20, use a find and replace
         * to change 'mamangava20' to the name of your theme in all the template files.
         */
        load_theme_textdomain('mamangava20', get_template_directory() . '/languages');

        // Add default posts and comments RSS feed links to head.
        add_theme_support('automatic-feed-links');

        /*
         * Let WordPress manage the document title.
         * By adding theme support, we declare that this theme does not use a
         * hard-coded <title> tag in the document head, and expect WordPress to
         * provide it for us.
         */
        add_theme_support('title-tag');

        /*
         * Enable support for Post Thumbnails on posts and pages.
         *
         * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
         */
        add_theme_support('post-thumbnails');

        // This theme uses wp_nav_menu() in one location.
        register_nav_menus(array(
            'primary' => esc_html__('Geral', 'mamangava20'),
            'single' => esc_html__('Página Single', 'mamangava20'),
        ));

        /*
         * Switch default core markup for search form, comment form, and comments
         * to output valid HTML5.
         */
        add_theme_support('html5', array(
            'search-form',
            'comment-form',
            'comment-list',
            'gallery',
            'caption',
        ));

        // Set up the WordPress core custom background feature.
        add_theme_support('custom-background', apply_filters('mamangava20_custom_background_args', array(
            'default-color' => 'ffffff',
            'default-image' => '',
        )));
    }

endif;
add_action('after_setup_theme', 'mamangava20_setup');

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function mamangava20_content_width() {
    $GLOBALS['content_width'] = apply_filters('mamangava20_content_width', 640);
}

add_action('after_setup_theme', 'mamangava20_content_width', 0);

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function mamangava20_widgets_init() {
    register_sidebar(array(
        'name' => esc_html__('Sidebar', 'mamangava20'),
        'id' => 'sidebar-1',
        'description' => esc_html__('Add widgets here.', 'mamangava20'),
        'before_widget' => '<section id="%1$s" class="widget %2$s">',
        'after_widget' => '</section>',
        'before_title' => '<h2 class="widget-title">',
        'after_title' => '</h2>',
    ));
}

add_action('widgets_init', 'mamangava20_widgets_init');

/**
 * Enqueue scripts and styles.
 */
function mamangava20_scripts() {
    wp_enqueue_style('mamangava20-style', get_stylesheet_uri());

    //CSS
    wp_enqueue_style('font-awesome', '//maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css');
    wp_enqueue_style('mamangava-style-under', get_template_directory_uri() . '/style-under.css');
    wp_enqueue_style('mamangava-style', get_stylesheet_uri());
    
    
    //JS - footer
    wp_enqueue_script('jquery', get_template_directory_uri() . '/bower_components/jquery/dist/jquery.min.js', array(), '', true);
    wp_enqueue_script('bootstrap-js', get_template_directory_uri() . '/bower_components/bootstrap/dist/js/bootstrap.min.js', array('jquery'), '', true);

    wp_enqueue_script('scroll-home', get_template_directory_uri() . '/js/scroll.js', array('jquery'), '20160802', true);
    
}

add_action('wp_enqueue_scripts', 'mamangava20_scripts');

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Custom functions that act independently of the theme templates.
 */
require get_template_directory() . '/inc/extras.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
require get_template_directory() . '/inc/jetpack.php';

require get_template_directory() . '/wp_bootstrap_navwalker.php';

require get_template_directory() . '/functions/functions-mmgv.php';

require get_template_directory() . '/functions/functions-custom-post-type.php';
