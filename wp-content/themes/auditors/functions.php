<?php
/**
 * auditors functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package auditors
 */

if (!defined('_S_VERSION')) {
	// Replace the version number of the theme on each release.
	define('_S_VERSION', '1.0.0');
}

/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function auditors_setup()
{
	/*
	 * Make theme available for translation.
	 * Translations can be filed in the /languages/ directory.
	 * If you're building a theme based on auditors, use a find and replace
	 * to change 'auditors' to the name of your theme in all the template files.
	 */
	load_theme_textdomain('auditors', get_template_directory() . '/languages');

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
	register_nav_menus(
		array(
			'header_menu' => esc_html__('Меню в шапке', 'auditors'),
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
			'auditors_custom_background_args',
			array(
				'default-color' => 'ffffff',
				'default-image' => '',
			)
		)
	);

	// Add theme support for selective refresh for widgets.
	add_theme_support('customize-selective-refresh-widgets');

	/**
	 * Add support for core custom logo.
	 *
	 * @link https://codex.wordpress.org/Theme_Logo
	 */
	add_theme_support(
		'custom-logo',
		array(
			'height' => 250,
			'width' => 250,
			'flex-width' => true,
			'flex-height' => true,
		)
	);
}
add_action('after_setup_theme', 'auditors_setup');

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function auditors_content_width()
{
	$GLOBALS['content_width'] = apply_filters('auditors_content_width', 640);
}
add_action('after_setup_theme', 'auditors_content_width', 0);

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function auditors_widgets_init()
{
	register_sidebar(
		array(
			'name' => esc_html__('Sidebar', 'auditors'),
			'id' => 'sidebar-1',
			'description' => esc_html__('Add widgets here.', 'auditors'),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget' => '</section>',
			'before_title' => '<h2 class="widget-title">',
			'after_title' => '</h2>',
		)
	);
}
add_action('widgets_init', 'auditors_widgets_init');

/**
 * Enqueue scripts and styles.
 */
function auditors_scripts()
{
	wp_enqueue_style('auditors-style', get_stylesheet_uri(), array(), _S_VERSION);
	wp_enqueue_style('bootstrap-min-css', 'https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css', array(), _S_VERSION);
	wp_enqueue_style('main-css', get_template_directory_uri() . '/assets/css/main.css', array(), _S_VERSION);
	wp_enqueue_style('responsive-css', get_template_directory_uri() . '/assets/css/responsive.css', array(), _S_VERSION);
	wp_style_add_data('auditors-style', 'rtl', 'replace');

	wp_enqueue_script('auditors-navigation', get_template_directory_uri() . '/js/navigation.js', array(), _S_VERSION, true);
	wp_enqueue_script('bootstrap=bundle-min-js', 'https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js', array(), _S_VERSION, true);
	wp_enqueue_script('script-js', get_template_directory_uri() . '/assets/js/script.js', array(), _S_VERSION, true);

	if (is_singular() && comments_open() && get_option('thread_comments')) {
		wp_enqueue_script('comment-reply');
	}
}
add_action('wp_enqueue_scripts', 'auditors_scripts');

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
if (defined('JETPACK__VERSION')) {
	require get_template_directory() . '/inc/jetpack.php';
}

// ------------------------------------------------------------------------
function register_course_strings_for_polylang()
{
	if (function_exists('pll_register_string')) {
		pll_register_string('partners', 'Наши партнеры', 'partners');
		pll_register_string('news', 'Последние новости', 'news');
		pll_register_string('team', 'Все', 'all');
		pll_register_string('phone', 'Телефон', 'phone');
		pll_register_string('email', 'Эл.почта', 'email');
		pll_register_string('auditor-company', 'Аудиторские компании', 'auditor-company');
		pll_register_string('auditors', 'Аудиторы', 'auditors');
		pll_register_string('company-name', 'Название компании', 'company-name');
		pll_register_string('telephone', 'Телефон', 'telephone');
		pll_register_string('address', 'Адрес', 'address');
		pll_register_string('fullname', 'ФИО', 'fullname');
		pll_register_string('city', 'Город', 'city');
	}
}
add_action('init', 'register_course_strings_for_polylang');
// ------------------------------------------------------------------------
// Разрешить загрузку SVG
function allow_svg_upload($mimes)
{
	$mimes['svg'] = 'image/svg+xml';
	return $mimes;
}
add_filter('upload_mimes', 'allow_svg_upload');

// Фильтр для безопасности SVG
function fix_svg_mime_type($data, $file, $filename, $mimes)
{
	$ext = isset($data['ext']) ? $data['ext'] : '';
	if ('svg' === $ext) {
		$data['type'] = 'image/svg+xml';
	}
	return $data;
}
add_filter('wp_check_filetype_and_ext', 'fix_svg_mime_type', 10, 4);
// ------------------------------------------------------------------------
function add_menu_list_class($classes, $item, $args)
{
	if ($args->theme_location === 'header_menu') {
		$classes[] = 'navbar-menu-item';
	}
	return $classes;
}
add_filter('nav_menu_css_class', 'add_menu_list_class', 10, 3);
// ------------------------------------------------------------------------
function auditors_active_class($classes, $item)
{
	if (in_array('current-menu-item', $classes)) {
		$classes[] = 'active'; // добавляем свой класс
	}
	return $classes;
}
add_filter('nav_menu_css_class', 'auditors_active_class', 10, 2);
// ------------------------------------------------------------------------
if (function_exists('acf_add_options_page')) {
	acf_add_options_page(array(
		'page_title' => 'Партнеры',
		'menu_title' => 'Партнеры',
		'menu_slug' => 'partner-settings',
		'capability' => 'edit_posts',
		'redirect' => false,
	));
}
// ------------------------------------------------------------------------
// Раздел Развитие

function register_development_post_type()
{
	register_post_type('development', array(
		'labels' => array(
			'name' => 'Развитие',
			'singular_name' => 'Мероприятие',
			'add_new' => 'Добавить мероприятие',
			'add_new_item' => 'Добавить новое',
			'edit_item' => 'Редактировать',
			'new_item' => 'Новое мероприятие',
			'view_item' => 'Просмотр мероприятия',
			'search_items' => 'Поиск',
			'not_found' => 'Не найдено',
		),
		'public' => true,
		'menu_icon' => 'dashicons-welcome-learn-more',
		'supports' => array('title', 'editor', 'thumbnail', 'excerpt'),
		'has_archive' => true,
		'rewrite' => array('slug' => 'development'),
	));
}
add_action('init', 'register_development_post_type');
// ------------------------------------------------------------------------
// Раздел новостей
function register_news_post_type()
{
	register_post_type('news', [
		'labels' => [
			'name' => 'Новости',
			'singular_name' => 'Новость',
			'add_new' => 'Добавить новость',
			'add_new_item' => 'Добавить новую новость',
			'edit_item' => 'Редактировать новость',
			'new_item' => 'Новая новость',
			'view_item' => 'Посмотреть новости',
			'search_items' => 'Искать новости',
			'not_found' => 'Новостей не найдено',
		],
		'public' => true,
		'menu_icon' => 'dashicons-megaphone',
		'supports' => ['title', 'editor', 'thumbnail', 'excerpt', 'custom-fields'],
		'has_archive' => true,
		'rewrite' => ['slug' => 'news'],
	]);
}
add_action('init', 'register_news_post_type');
// ------------------------------------------------------------------------
// functions.php
function register_team_cpt()
{
	register_post_type('team', [
		'labels' => [
			'name' => 'Сотрудники',
			'singular_name' => 'Сотрудник',
			'add_new' => 'Добавить сотрудника',
			'add_new_item' => 'Добавить нового сотрудника',
			'edit_item' => 'Редактировать сотрудника',
			'new_item' => 'Новый сотрудник',
			'view_item' => 'Просмотр сотрудника',
			'search_items' => 'Найти сотрудника',
			'not_found' => 'Сотрудники не найдены',
			'menu_name' => 'Сотрудники',
		],
		'public' => true,
		'menu_icon' => 'dashicons-groups',
		'supports' => ['title', 'editor', 'thumbnail'],
		'has_archive' => false,
		'rewrite' => ['slug' => 'team'],
	]);

	// Таксономия (категории сотрудников: admin, management, committee)
	register_taxonomy('team_category', 'team', [
		'labels' => [
			'name' => 'Категории сотрудников',
			'singular_name' => 'Категория сотрудника',
		],
		'public' => true,
		'hierarchical' => true,
		'rewrite' => ['slug' => 'team-category'],
	]);
}
add_action('init', 'register_team_cpt');
// ------------------------------------------------------------------------
function register_audit_cpts() {
    // 🔹 CPT: Аудиторские компании
    register_post_type('audit_company', [
        'labels' => [
            'name' => 'Аудиторские компании',
            'singular_name' => 'Компания',
            'add_new' => 'Добавить компанию',
            'add_new_item' => 'Добавить новую компанию',
            'edit_item' => 'Редактировать компанию',
            'new_item' => 'Новая компания',
            'view_item' => 'Просмотреть компанию',
            'search_items' => 'Найти компанию',
            'not_found' => 'Не найдено',
        ],
        'public' => true,
        'menu_icon' => 'dashicons-building',
        'supports' => ['title'],
        'has_archive' => false,
    ]);

    // 🔹 CPT: Аудиторы
    register_post_type('auditor', [
        'labels' => [
            'name' => 'Аудиторы',
            'singular_name' => 'Аудитор',
            'add_new' => 'Добавить аудитора',
            'add_new_item' => 'Добавить нового аудитора',
            'edit_item' => 'Редактировать аудитора',
            'new_item' => 'Новый аудитор',
            'view_item' => 'Просмотреть аудитора',
            'search_items' => 'Найти аудитора',
            'not_found' => 'Не найдено',
        ],
        'public' => true,
        'menu_icon' => 'dashicons-groups',
        'supports' => ['title'],
        'has_archive' => false,
    ]);

    register_taxonomy('city', ['audit_company', 'auditor'], [
        'labels' => [
            'name' => 'Города',
            'singular_name' => 'Город',
        ],
        'public' => true,
        'hierarchical' => false,
    ]);
}
add_action('init', 'register_audit_cpts');

// ------------------------------------------------------------------------
if (function_exists('acf_add_options_page')) {
	acf_add_options_page(array(
		'page_title' => 'Настройка шапки',
		'menu_title' => 'Настройка шапки',
		'menu_slug' => 'header-settings',
		'capability' => 'edit_posts',
		'redirect' => false,
	));
}
// ------------------------------------------------------------------------
if (function_exists('acf_add_options_page')) {
	acf_add_options_page(array(
		'page_title' => 'Настройка подвала',
		'menu_title' => 'Настройка подвала',
		'menu_slug' => 'footer-settings',
		'capability' => 'edit_posts',
		'redirect' => false,
	));
}
// ------------------------------------------------------------------------
if (function_exists('acf_add_options_page')) {
	acf_add_options_page(array(
		'page_title' => 'Оставить заявку',
		'menu_title' => 'Оставить заявку',
		'menu_slug' => 'request-settings',
		'capability' => 'edit_posts',
		'redirect' => false,
		'icon_url' => 'dashicons-email'
	));
}
// ------------------------------------------------------------------------
if (function_exists('acf_add_options_page')) {
	acf_add_options_page(array(
		'page_title' => 'Модальная окна',
		'menu_title' => 'Модальная окна',
		'menu_slug' => 'modal-settings',
		'capability' => 'edit_posts',
		'redirect' => false,
		'icon_url' => 'dashicons-testimonial'
	));
}
// ------------------------------------------------------------------------

