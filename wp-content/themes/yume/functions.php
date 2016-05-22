<?php
/**
 * Yume functions and definitions
 *
 * @package Yume
 */
 
// Include Files 
if ( ! function_exists( 'yume_require_files' ) ) :
function yume_require_files() {
	require( get_template_directory() . '/functions/widgets.php' );
	require( get_template_directory() . '/functions/head-css.php' );
}	
endif; 
add_action( 'after_setup_theme', 'yume_require_files' );

// Load Options Framework 
if ( !function_exists( 'optionsframework_init' ) ) {
	define( 'OPTIONS_FRAMEWORK_DIRECTORY', esc_url(get_template_directory_uri() . '/inc/') );
	require( get_template_directory() . '/inc/options-framework.php' );
}

// Yume Setup 

if ( ! function_exists( 'yume_setup' ) ) :
function yume_setup() {
    global $content_width;
	if ( ! isset( $content_width ) ) { $content_width = 960; }
	register_nav_menu( 'primary', __( 'Top Menu', "yume" ) );
	register_nav_menu( 'footer1', __( 'Fotter Menu 1', "yume" ) );
	register_nav_menu( 'footer2', __( 'Fotter Menu 2', "yume" ) );
	register_nav_menu( 'footer3', __( 'Fotter Menu 3', "yume" ) );
	register_nav_menu( 'footer4', __( 'Fotter Menu 4', "yume" ) );
	register_nav_menu( 'footer5', __( 'Fotter Menu 5', "yume" ) );
	add_theme_support( 'automatic-feed-links' );
	add_theme_support( 'post-thumbnails' );	
	$custom_header_support = array(
		'default-text-color' => '000',
		'flex-height' => true,
	);
	set_post_thumbnail_size( 150, 150, true );
	add_image_size( 'large-feature', 600, 480, true );
	add_image_size( 'small-feature', 500, 300 );
	add_theme_support( 'custom-background');
	add_editor_style();
}
endif; 
add_action( 'after_setup_theme', 'yume_setup' );

// Loading Files Javascript  
if ( ! function_exists( 'yume_of_register_js' ) ) :
function yume_of_register_js() {
	wp_enqueue_script('main', get_template_directory_uri() . '/js/main.js', array('jquery'),'1.0', true);
	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
endif; 
add_action('wp_enqueue_scripts', 'yume_of_register_js');

function yume_wp_title( $title, $sep ) {
	global $paged, $page;

	if ( is_feed() ) {
		return $title;
	}
	
	$title .= get_bloginfo( 'name', 'display' );

	$site_description = get_bloginfo( 'description', 'display' );
	if ( $site_description && ( is_home() || is_front_page() ) ) {
		$title = "$title $sep $site_description";
	}

	if ( $paged >= 2 || $page >= 2 ) {
		$title = "$title $sep " . sprintf( __( 'Page %s', 'yume' ), max( $paged, $page ) );
	}

	return $title;
}
add_filter( 'wp_title', 'yume_wp_title', 10, 2 );

// Yume Credits Footer 
if ( ! function_exists( 'yume_credits' ) ) :
function yume_credits() {
	$text = 'Theme created by <a href="'.esc_url('http://www.pwtthemes.com/').'">PWT</a>. Powered by <a href="'.esc_url('http://wordpress.org/').'">WordPress.org</a>';
	echo apply_filters('yume_credits', $text);
}
endif; 
add_action( 'yume_display_credits', 'yume_credits' );


// Extracting List Posts 
if ( ! function_exists( 'yume_get_list_posts' ) ) :
function yume_get_list_posts() {   
    global $wp_query;
	$paged = (get_query_var('paged')) ? get_query_var('paged') : 1; 
    $args = array(
        'post_type' => 'post',
        'orderby' => 'date',
		'order' => 'DESC',
		'paged' => $paged
    );
	$wp_query->query( $args );
	return new WP_Query($args);
}
endif; 

// Extracting List Pages
if ( ! function_exists( 'yume_get_list_pages' ) ) :
function yume_get_list_pages() {
    global $wp_query;
    $args = array(
        'post_type' => 'page',
        'posts_per_page' => -1
    );
	$wp_query->query( $args );
    return new WP_Query( $args );
}
endif;

// Extracting Name Menu
if ( ! function_exists( 'yume_get_name_menu' ) ) :
function yume_get_name_menu($menu) {
	$yume_menu_locations = get_nav_menu_locations();
	$yume_menu_object = (isset($yume_menu_locations[$menu]) ? wp_get_nav_menu_object($yume_menu_locations[$menu]) : null);
	$yume_menu_name = (isset($yume_menu_object->name) ? $yume_menu_object->name : '');
	echo esc_html($yume_menu_name);
}
endif;

// Yume Position Sidebar 
if ( ! function_exists( 'yume_position_sidebar' ) ) :
function yume_position_sidebar() {
	if(of_get_option('default_layout')=='right') { 
	   $text = 'right_sidebar'; 
	} 
	if(of_get_option('default_layout')=='left') { 
	   $text = 'left_sidebar'; 
	} 
	if(of_get_option('default_layout')=='none') { 
	   $text = 'nosidebar'; 
	}
	echo apply_filters('yume_position_sidebar', $text);
}
endif; 
add_action( 'yume_display_ps', 'yume_position_sidebar' );
?>