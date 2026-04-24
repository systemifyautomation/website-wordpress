<?php
/**
 * Systemify Automation Theme Functions
 *
 * @package systemify
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

define( 'SYSTEMIFY_VERSION', '1.0.0' );
define( 'SYSTEMIFY_DIR', get_template_directory() );
define( 'SYSTEMIFY_URI', get_template_directory_uri() );

/* ----------------------------------------------------------------
   Theme setup
   ---------------------------------------------------------------- */
function systemify_setup() {
	load_theme_textdomain( 'systemify', SYSTEMIFY_DIR . '/languages' );

	add_theme_support( 'title-tag' );
	add_theme_support( 'post-thumbnails' );
	add_theme_support( 'automatic-feed-links' );
	add_theme_support( 'html5', [
		'search-form', 'comment-form', 'comment-list', 'gallery', 'caption', 'style', 'script',
	] );
	add_theme_support( 'custom-logo', [
		'height'      => 60,
		'width'       => 200,
		'flex-height' => true,
		'flex-width'  => true,
	] );
	add_theme_support( 'customize-selective-refresh-widgets' );

	// Navigation menus.
	register_nav_menus( [
		'primary'   => __( 'Primary Navigation', 'systemify' ),
		'footer_1'  => __( 'Footer — Company', 'systemify' ),
		'footer_2'  => __( 'Footer — Services', 'systemify' ),
		'footer_3'  => __( 'Footer — Legal', 'systemify' ),
	] );

	// Image sizes.
	add_image_size( 'systemify-card', 640, 400, true );
}
add_action( 'after_setup_theme', 'systemify_setup' );

/* ----------------------------------------------------------------
   Content width
   ---------------------------------------------------------------- */
function systemify_content_width() {
	$GLOBALS['content_width'] = 1200;
}
add_action( 'after_setup_theme', 'systemify_content_width', 0 );

/* ----------------------------------------------------------------
   Enqueue styles & scripts
   ---------------------------------------------------------------- */
function systemify_enqueue_assets() {
	// Google Fonts — Inter.
	wp_enqueue_style(
		'systemify-fonts',
		'https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&family=Fira+Code:wght@400;600&display=swap',
		[],
		null
	);

	// Main stylesheet.
	wp_enqueue_style(
		'systemify-style',
		get_stylesheet_uri(),
		[ 'systemify-fonts' ],
		SYSTEMIFY_VERSION
	);

	// Main JS.
	wp_enqueue_script(
		'systemify-main',
		SYSTEMIFY_URI . '/assets/js/main.js',
		[],
		SYSTEMIFY_VERSION,
		true
	);

	// Pass data to JS.
	wp_localize_script( 'systemify-main', 'systemifyData', [
		'ajaxUrl' => admin_url( 'admin-ajax.php' ),
		'nonce'   => wp_create_nonce( 'systemify_nonce' ),
		'homeUrl' => esc_url( home_url( '/' ) ),
	] );

	// Comments JS.
	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'systemify_enqueue_assets' );

/* ----------------------------------------------------------------
   Widget areas
   ---------------------------------------------------------------- */
function systemify_widgets_init() {
	register_sidebar( [
		'name'          => __( 'Blog Sidebar', 'systemify' ),
		'id'            => 'sidebar-1',
		'description'   => __( 'Widgets displayed on the blog sidebar.', 'systemify' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	] );
	register_sidebar( [
		'name'          => __( 'Footer Widget Area', 'systemify' ),
		'id'            => 'footer-widgets',
		'description'   => __( 'Widgets displayed in the footer.', 'systemify' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h4 class="widget-title">',
		'after_title'   => '</h4>',
	] );
}
add_action( 'widgets_init', 'systemify_widgets_init' );

/* ----------------------------------------------------------------
   Custom excerpt length
   ---------------------------------------------------------------- */
function systemify_excerpt_length( $length ) {
	return 20;
}
add_filter( 'excerpt_length', 'systemify_excerpt_length' );

function systemify_excerpt_more( $more ) {
	return '&hellip;';
}
add_filter( 'excerpt_more', 'systemify_excerpt_more' );

/* ----------------------------------------------------------------
   Contact form AJAX handler
   ---------------------------------------------------------------- */
function systemify_handle_contact() {
	check_ajax_referer( 'systemify_nonce', 'nonce' );

	$name    = sanitize_text_field( wp_unslash( $_POST['name'] ?? '' ) );
	$email   = sanitize_email( wp_unslash( $_POST['email'] ?? '' ) );
	$service = sanitize_text_field( wp_unslash( $_POST['service'] ?? '' ) );
	$message = sanitize_textarea_field( wp_unslash( $_POST['message'] ?? '' ) );

	if ( empty( $name ) || empty( $email ) || empty( $message ) ) {
		wp_send_json_error( [ 'message' => __( 'Please fill in all required fields.', 'systemify' ) ] );
	}

	if ( ! is_email( $email ) ) {
		wp_send_json_error( [ 'message' => __( 'Please enter a valid email address.', 'systemify' ) ] );
	}

	$to      = get_option( 'admin_email' );
	$subject = sprintf(
		/* translators: %s: sender name */
		__( '[Systemify] New enquiry from %s', 'systemify' ),
		$name
	);
	$body    = sprintf(
		"Name: %s\nEmail: %s\nService: %s\n\nMessage:\n%s",
		$name,
		$email,
		$service,
		$message
	);
	$headers = [ 'Content-Type: text/plain; charset=UTF-8', "Reply-To: {$name} <{$email}>" ];

	$sent = wp_mail( $to, $subject, $body, $headers );

	if ( $sent ) {
		wp_send_json_success( [ 'message' => __( 'Thank you! We will be in touch shortly.', 'systemify' ) ] );
	} else {
		wp_send_json_error( [ 'message' => __( 'Sorry, your message could not be sent. Please try again.', 'systemify' ) ] );
	}
}
add_action( 'wp_ajax_systemify_contact',        'systemify_handle_contact' );
add_action( 'wp_ajax_nopriv_systemify_contact', 'systemify_handle_contact' );

/* ----------------------------------------------------------------
   Fallback navigation when no menu is assigned
   ---------------------------------------------------------------- */
function systemify_fallback_nav() {
	echo '<ul class="nav-links">';
	echo '<li><a href="' . esc_url( home_url( '/#services' ) ) . '">' . esc_html__( 'Services', 'systemify' ) . '</a></li>';
	echo '<li><a href="' . esc_url( home_url( '/#how-it-works' ) ) . '">' . esc_html__( 'How It Works', 'systemify' ) . '</a></li>';
	echo '<li><a href="' . esc_url( home_url( '/#results' ) ) . '">' . esc_html__( 'Results', 'systemify' ) . '</a></li>';
	echo '<li><a href="' . esc_url( home_url( '/#about' ) ) . '">' . esc_html__( 'About', 'systemify' ) . '</a></li>';
	echo '<li><a href="' . esc_url( home_url( '/#contact' ) ) . '">' . esc_html__( 'Contact', 'systemify' ) . '</a></li>';
	echo '</ul>';
}

/* ----------------------------------------------------------------
   Custom page title for front-page
   ---------------------------------------------------------------- */
function systemify_document_title_parts( $title ) {
	if ( is_front_page() ) {
		$title['title']   = get_bloginfo( 'name' );
		$title['tagline'] = get_bloginfo( 'description' );
	}
	return $title;
}
add_filter( 'document_title_parts', 'systemify_document_title_parts' );

/* ----------------------------------------------------------------
   Admin: helpful notices
   ---------------------------------------------------------------- */
function systemify_admin_notice() {
	$screen = get_current_screen();
	if ( $screen && 'themes' === $screen->id ) {
		echo '<div class="notice notice-info is-dismissible"><p>';
		echo '<strong>Systemify Automation theme active.</strong> ';
		echo esc_html__( 'Set your front page under Settings → Reading → A static page and select the "Home" page.', 'systemify' );
		echo '</p></div>';
	}
}
add_action( 'admin_notices', 'systemify_admin_notice' );
