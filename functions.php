<?php
/**
 * Functions and definitions
 *
 * @package Alternative
 */

/**
 * Sets up theme defaults and registers support for various WordPress features.
 */
function alternative_setup() {
	load_theme_textdomain( 'alternative' );
	add_theme_support( 'automatic-feed-links' );
	add_theme_support( 'title-tag' );
	add_theme_support( 'post-thumbnails' );

	register_nav_menus( [
		'primary' => __( 'Primary Menu', 'alternative' ),
		'footer'  => __( 'Footer Menu', 'alternative' ),
		'buttons' => __( 'Top Buttons', 'alternative' ),
	] );
}

add_action( 'after_setup_theme', 'alternative_setup' );


if ( function_exists( 'acf_add_options_page' ) ) {
	acf_add_options_page(array(
		'page_title'  => 'Options',
		'menu_title'  => 'Options',
		'menu_slug'   => 'options',
		'capability'  => 'edit_posts',
		'redirect'    => false,
	));
}

function themename_custom_logo_setup() {
	$defaults = array(
		'height'      => 49,
		'width'       => 154,
		'flex-height' => true,
		'flex-width'  => true,
		'header-text' => array( 'site-title', 'site-description' ),
	);
	add_theme_support( 'custom-logo', $defaults );
}
add_action( 'after_setup_theme', 'themename_custom_logo_setup' );

/**
 * Enqueues scripts and styles.
 *
 */
function alternative_scripts() {
	wp_enqueue_style( 'alternative-style', get_stylesheet_uri() );

	wp_enqueue_style( 'alternative-app', get_template_directory_uri() . '/dist/css/app.css', array(), '20161017' );

	wp_enqueue_style( 'alternative-grid', get_template_directory_uri() . '/dist/css/grid.css', array(), '20161017' );

	wp_enqueue_style( 'owl-carousel', get_template_directory_uri() . '/dist/css/owl/owl.carousel.min.css', array(), '20161017' );
	wp_enqueue_style( 'owl-carousel-theme', get_template_directory_uri() . '/dist/css/owl/owl.theme.default.css', array(), '20161017' );
	wp_enqueue_style( 'font-awesome', get_template_directory_uri() . '/dist/css/font-awesome.min.css', array(), '20161017' );

	wp_enqueue_script( 'owl-carousel', get_template_directory_uri() . '/assets/js/owl/owl.carousel.min.js', array( 'jquery' ), '20161017', true );
	wp_enqueue_script( 'cookie', get_template_directory_uri() . '/assets/js/cookiebanner.min.js', array( 'jquery' ), '20161017', true );
	wp_enqueue_script( 'alternative-app', get_template_directory_uri() . '/assets/js/app.js', array( 'jquery' ), '20161017', true );

	wp_localize_script( 'alternative-app', 'ajax_object', array( 'ajax_url' => admin_url( 'admin-ajax.php' ) ) );
}

add_action( 'wp_enqueue_scripts', 'alternative_scripts' );

show_admin_bar( false );

function add_in_footer() {
	?>
	<!-- Facebook Pixel Code -->
	<script>
	!function(f,b,e,v,n,t,s)
	{if(f.fbq)return;n=f.fbq=function(){n.callMethod?
	n.callMethod.apply(n,arguments):n.queue.push(arguments)};
	if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
	n.queue=[];t=b.createElement(e);t.async=!0;
	t.src=v;s=b.getElementsByTagName(e)[0];
	s.parentNode.insertBefore(t,s)}(window, document,'script',
	'https://connect.facebook.net/en_US/fbevents.js');
	fbq('init', '1915157372035136');
	fbq('track', 'PageView');
	</script>
	<noscript><img height="1" width="1" style="display:none" alt="Facebook script"
	src="https://www.facebook.com/tr?id=1915157372035136&ev=PageView&noscript=1"
	/></noscript>
	<!-- End Facebook Pixel Code -->
	<!-- Global site tag (gtag.js) - Google Analytics -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=UA-86942160-1"></script>
	<script>
	window.dataLayer = window.dataLayer || [];
	function gtag(){dataLayer.push(arguments);}
	gtag('js', new Date());

	gtag('config', 'UA-86942160-1');
	</script>
	<script type="text/javascript" id="cookiebanner"
	src="../src/cookiebanner.js"
	data-height="20px"
	data-close-text="OK"
	data-message="We use cookies to improve your browsing experience.">
	</script>
    <?php }
add_action( 'wp_footer', 'add_in_footer' );
