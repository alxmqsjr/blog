<?php
/**
 * Tema Boostrap convertido para Wordpress por Alexandre Marques (alexandre-marques@live.com)
 */

if ( ! defined( '_S_VERSION' ) ) {
	define( '_S_VERSION', '1.0.0' );
}

if ( ! function_exists( 'bb_setup' ) ) :

	function bb_setup() {
		add_theme_support( 'automatic-feed-links' );
		add_theme_support( 'title-tag' );
		add_theme_support( 'post-thumbnails' );
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
				'bb_custom_background_args',
				array(
					'default-color' => 'ffffff',	
				)
			)
		);
		add_theme_support(
			'custom-logo',
			array(
				'flex-width'  => true,
				'flex-height' => true,
			)
		);
		add_theme_support( 'customize-selective-refresh-widgets' );
	}
endif;
add_action( 'after_setup_theme', 'bb_setup' );

function bb_menus() {
	register_nav_menus(
		array(
			'menu-1' => esc_html__( 'Topo', 'bb' ),
		)
	);
}
add_action( 'init', 'bb_menus' );

function bb_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Sidebar', 'bb' ),
			'id'            => 'bb-sidebar',
			'description'   => esc_html__( 'Lateral do Site', 'bb' ),
			'before_widget' => '<div id="%1$s" class="card my-4 bb-widget %2$s">',
			'after_widget'  => '</div>',
			'before_title'  => '<h5 class="card-header">',
			'after_title'   => '</h5>',
		)
	);
}
add_action( 'widgets_init', 'bb_widgets_init' );


function bb_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'bb_content_width', 640 );
}
add_action( 'after_setup_theme', 'bb_content_width', 0 );


function bb_excerpt( $length ) {
    return 25;
}
add_filter( 'excerpt_length', 'bb_excerpt', 999 );

function aplicacoes_digitais_more ( $more ) {
    return ' [...]';
}
add_filter( 'excerpt_more', 'aplicacoes_digitais_more' );

// Definindo class para os links da paginação
// function wpdocs_add_post_link( $html ){
//     $html = str_replace( '<a ', '<a class="page-link" ', $html );
//     return $html;
// }
// add_filter( 'next_post_link', 'wpdocs_add_post_link' );
// add_filter( 'previous_post_link', 'wpdocs_add_post_link' );


function bb_scripts() {
	wp_enqueue_style( 'bb-style', get_stylesheet_uri(), array(), _S_VERSION );
	wp_style_add_data( 'bb-style', 'rtl', 'replace' );
    wp_enqueue_style( 'bb-bootstrap', get_template_directory_uri().'/assets/css/bootstrap/bootstrap.min.css', array());
	wp_enqueue_script( 'bb-jq-script', get_template_directory_uri().'/assets/js/jquery/jquery.min.js', array(), null, true );
	wp_enqueue_script( 'bb-js-bootstrap', get_template_directory_uri().'/assets/js/bootstrap/bootstrap.bundle.min.js', array('jquery'), null, true );
}
add_action( 'wp_enqueue_scripts', 'bb_scripts' );


if (! function_exists( 'fa_custom_setup_kit' ) ) {
	function fa_custom_setup_kit( $kit_url = ''  ) {
		foreach ( [ 'wp_enqueue_scripts', 'admin_enqueue_scripts', 'login_enqueue_scripts' ] as $action ) {
			add_action(
			$action,
			function () use ( $kit_url ) {
				wp_enqueue_script( 'font-awesome-kit', $kit_url, [], null );
			}
			);
		}
	}
}
fa_custom_setup_kit( 'https://kit.fontawesome.com/cb2e2c711d.js' );


require get_template_directory() . '/inc/customizer.php';