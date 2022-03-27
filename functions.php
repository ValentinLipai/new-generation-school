<?php
/**
 * new-generation functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package new-generation
 */

if ( ! defined( '_S_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( '_S_VERSION', '1.0.0' );
}

if ( ! function_exists( 'new_generation_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function new_generation_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on new-generation, use a find and replace
		 * to change 'new-generation' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'new-generation', get_template_directory() . '/languages' );

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
		register_nav_menus(
			array(
				'menu-1' => esc_html__( 'Primary', 'new-generation' ),
			)
		);

		/*
		 * Switch default core markup for search form, comment form, and comments
		 * to output valid HTML5.
		 */
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

		// Set up the WordPress core custom background feature.
		add_theme_support(
			'custom-background',
			apply_filters(
				'new_generation_custom_background_args',
				array(
					'default-color' => 'ffffff',
					'default-image' => '',
				)
			)
		);

		// Add theme support for selective refresh for widgets.
		add_theme_support( 'customize-selective-refresh-widgets' );

		/**
		 * Add support for core custom logo.
		 *
		 * @link https://codex.wordpress.org/Theme_Logo
		 */
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
endif;
add_action( 'after_setup_theme', 'new_generation_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function new_generation_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'new_generation_content_width', 640 );
}
add_action( 'after_setup_theme', 'new_generation_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function new_generation_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Sidebar', 'new-generation' ),
			'id'            => 'sidebar-1',
			'description'   => esc_html__( 'Add widgets here.', 'new-generation' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action( 'widgets_init', 'new_generation_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function new_generation_scripts() {
	wp_enqueue_style( 'new-generation-style', get_stylesheet_uri(), array(), _S_VERSION );
	wp_style_add_data( 'new-generation-style', 'rtl', 'replace' );

    wp_enqueue_script( 'new-generation-swiper', 'https://unpkg.com/swiper@7/swiper-bundle.min.js', array(), _S_VERSION, true );
	wp_enqueue_script( 'new-generation-main', get_template_directory_uri() . '/assets/app/js/app.min.js', array('jquery', 'new-generation-swiper'), _S_VERSION, true );
}
add_action( 'wp_enqueue_scripts', 'new_generation_scripts' );

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

function cc_mime_types($mimes) {
    $mimes['svg'] = 'image/svg+xml';
    return $mimes;
}
add_filter('upload_mimes', 'cc_mime_types');

if( function_exists('acf_add_options_page') ) {
    acf_add_options_page(array(
        'page_title' 	=> 'Theme General Settings',
        'menu_title'	=> 'Theme Settings',
        'menu_slug' 	=> 'theme-general-settings',
        'capability'	=> 'edit_posts',
        'redirect'		=> false
    ));
}

/*
* Creating a function to create our CPT
*/

function custom_post_type() {
    $args_faq = array(
        'label'               => 'faqs',
        'description'         => 'Вопросы и ответы',
        'labels'              => array(
            'name'                => 'FAQ',
            'singular_name'       => 'FAQ',
            'menu_name'           => 'FAQ',
            'all_items'           => 'Все',
            'view_item'           => 'Посмотреть',
            'add_new_item'        => 'Добавить',
            'add_new'             => 'Добавить',
            'edit_item'           => 'Изменить',
            'update_item'         => 'Обновить',
            'search_items'        => 'Искать',
            'not_found'           => 'Не найдено',
            'not_found_in_trash'  => 'Не найдено в корзине',
        ),
        // Features this CPT supports in Post Editor
        'supports'            => array( 'title', 'editor' ),
        // You can associate this CPT with a taxonomy or custom taxonomy.
        /* A hierarchical CPT is like Pages and can have
        * Parent and child items. A non-hierarchical CPT
        * is like Posts.
        */
        'hierarchical'        => false,
        'public'              => false,
        'show_ui'             => true,
        'show_in_menu'        => true,
        'show_in_nav_menus'   => true,
        'show_in_admin_bar'   => true,
        'menu_position'       => 5,
        'can_export'          => true,
        'has_archive'         => true,
        'exclude_from_search' => false,
        'publicly_queryable'  => true,
        'capability_type'     => 'post',
        'show_in_rest' => true,
    );

    $args_teachers = array(
        'label'               => 'teachers',
        'description'         => 'Преподаватели',
        'labels'              => array(
            'name'                => 'Преподаватели',
            'singular_name'       => 'Преподаватель',
            'menu_name'           => 'Преподаватели',
            'all_items'           => 'Все',
            'view_item'           => 'Посмотреть',
            'add_new_item'        => 'Добавить',
            'add_new'             => 'Добавить',
            'edit_item'           => 'Изменить',
            'update_item'         => 'Обновить',
            'search_items'        => 'Искать',
            'not_found'           => 'Не найдено',
            'not_found_in_trash'  => 'Не найдено в корзине',
        ),
        // Features this CPT supports in Post Editor
        'supports'            => array( 'title' ),
        // You can associate this CPT with a taxonomy or custom taxonomy.
        /* A hierarchical CPT is like Pages and can have
        * Parent and child items. A non-hierarchical CPT
        * is like Posts.
        */
        'hierarchical'        => false,
        'public'              => false,
        'show_ui'             => true,
        'show_in_menu'        => true,
        'show_in_nav_menus'   => true,
        'show_in_admin_bar'   => true,
        'menu_position'       => 5,
        'can_export'          => true,
        'has_archive'         => true,
        'exclude_from_search' => false,
        'publicly_queryable'  => true,
        'capability_type'     => 'post',
        'show_in_rest' => true,
    );

    $args_courses = array(
        'label'               => 'courses',
        'description'         => 'Курсы',
        'labels'              => array(
            'name'                => 'Курсы',
            'singular_name'       => 'Курс',
            'menu_name'           => 'Курсы',
            'all_items'           => 'Все',
            'view_item'           => 'Посмотреть',
            'add_new_item'        => 'Добавить',
            'add_new'             => 'Добавить',
            'edit_item'           => 'Изменить',
            'update_item'         => 'Обновить',
            'search_items'        => 'Искать',
            'not_found'           => 'Не найдено',
            'not_found_in_trash'  => 'Не найдено в корзине',
        ),
        // Features this CPT supports in Post Editor
        'supports'            => array( 'title', 'revisions', 'page-attributes' ),
        // You can associate this CPT with a taxonomy or custom taxonomy.
        /* A hierarchical CPT is like Pages and can have
        * Parent and child items. A non-hierarchical CPT
        * is like Posts.
        */
        'hierarchical'        => true,
        'public'              => true,
        'show_ui'             => true,
        'show_in_menu'        => true,
        'show_in_nav_menus'   => true,
        'show_in_admin_bar'   => true,
        'menu_position'       => 5,
        'can_export'          => true,
        'has_archive'         => true,
        'exclude_from_search' => false,
        'publicly_queryable'  => true,
        'capability_type'     => 'post',
        'show_in_rest' => true,
    );

    // Registering your Custom Post Type
    register_post_type( 'faqs', $args_faq );
    register_post_type( 'teachers', $args_teachers );
    register_post_type( 'courses', $args_courses );

}

/* Hook into the 'init' action so that the function
* Containing our post type registration is not
* unnecessarily executed.
*/

add_action( 'init', 'custom_post_type', 0 );

function gt_get_post_view($id = NULL) {
    $count = get_post_meta( is_null($id) ? get_the_ID() : $id, 'post_views_count', true );
    return $count === "" ? "0" : $count;
}
function gt_set_post_view() {
    $key = 'post_views_count';
    $post_id = get_the_ID();
    $count = (int) get_post_meta( $post_id, $key, true );
    $count++;
    update_post_meta( $post_id, $key, $count );
}
function gt_posts_column_views( $columns ) {
    $columns['post_views'] = 'Views';
    return $columns;
}
function gt_posts_custom_column_views( $column ) {
    if ( $column === 'post_views') {
        echo gt_get_post_view();
    }
}
add_filter( 'manage_posts_columns', 'gt_posts_column_views' );
add_action( 'manage_posts_custom_column', 'gt_posts_custom_column_views' );

function new_generation_load_more_scripts() {

    global $wp_query;

    // In most cases it is already included on the page and this line can be removed
//    wp_enqueue_script('jquery');

    // register our main script but do not enqueue it yet
    wp_register_script( 'loadmore', get_stylesheet_directory_uri() . '/js/loadmode.js', array('jquery') );

    // now the most interesting part
    // we have to pass parameters to myloadmore.js script but we can get the parameters values only in PHP
    // you can define variables directly in your HTML but I decided that the most proper way is wp_localize_script()
    wp_localize_script( 'loadmore', 'loadmore_params', array(
        'ajaxurl' => site_url() . '/wp-admin/admin-ajax.php', // WordPress AJAX
        'posts' => json_encode( $wp_query->query_vars ), // everything about your loop is here
        'current_page' => get_query_var( 'paged' ) ? get_query_var('paged') : 1,
        'max_page' => $wp_query->max_num_pages
    ) );

    wp_enqueue_script( 'loadmore' );
}

add_action( 'wp_enqueue_scripts', 'new_generation_load_more_scripts' );

function load_more_posts()
{
    $query_args = $_POST['query'];
    $query_args['posts_per_page'] = +$query_args['posts_per_page'];
    $query_args['paged'] = $_POST['current_page'] + 1;
    $query = new WP_Query($query_args);

    if ($query->have_posts()) :

        ob_start();

        while ($query->have_posts()) : $query->the_post();

            get_template_part( 'template-parts/category-post-card', get_post_format() );

        endwhile;

        wp_send_json_success(ob_get_clean());

    else :

        wp_send_json_error('No more posts!');

    endif;
}
add_action('wp_ajax_load_more_posts', 'load_more_posts');
add_action('wp_ajax_nopriv_load_more_posts', 'load_more_posts');

add_action('init', 'init_remove_support',100);
function init_remove_support(){
    $post_type = 'post';
    remove_post_type_support( $post_type, 'editor');
}

// Remove comment time
function wpb_remove_comment_time($date, $d, $comment) {
    if ( !is_admin() ) {
        return;
    } else {
        return $date;
    }
}
add_filter( 'get_comment_time', 'wpb_remove_comment_time', 10, 3);

add_filter( 'get_comment_date', 'wpse_comment_date_18350375' );
function wpse_comment_date_18350375( $date ) {
    $date = date("d.m H:i");
    return $date;
}

add_action('comment_form_top', 'add_comment_notice');
function add_comment_notice() {
    $commenter = wp_get_current_commenter();
    $link_asc = $link_desc = parse_url($_SERVER["REQUEST_URI"], PHP_URL_PATH);
    $query_asc = $query_desc = $_GET;

    $is_asc_active = isset($_GET['sort_comments']) && $_GET['sort_comments'] === "ASC";

    $query_asc['sort_comments'] = 'ASC';
    $query_desc['sort_comments'] = 'DESC';

    // rebuild url
    $link_asc .= '?' . http_build_query($query_asc) . '#comments-info';
    $link_desc .= '?' . http_build_query($query_desc) . '#comments-info';

    echo '<div id="comments-info" class="comments-info">
        <div class="comments-sort">
            <a href="' . $link_desc . '" class="comments-sort-btn comments-sort-btn__new-comments ' . ($is_asc_active ? "" : "active") . '" type="button">Новые</a>
            <a href="' . $link_asc .'" class="comments-sort-btn comments-sort-btn__older-comments ' . ($is_asc_active ? "active" : "") . '" type="button">Старые</a>
        </div>
        <div class="comments-counter">
            <i class="icon-comments"></i>
            <span id="comments-info-counter">' . get_comments_number() . '</span>
        </div>
    </div>';
}