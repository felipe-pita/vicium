<?php
/* --------------------------------------------------
   Funções de otimização
   -------------------------------------------------- */

// Remove Barra Admin no Front-End
function my_function_admin_bar() { return false; }
add_filter( "show_admin_bar" , "my_function_admin_bar");


// Registra Menus
function register_menu() {
	register_nav_menu('header-menu', ('Header Menu') );
}
add_action( 'init', 'register_menu' );


// Remove 'sujeira' do header
remove_action('wp_head', 'rsd_link');
remove_action('wp_head', 'wp_generator');
remove_action('wp_head', 'feed_links', 2);
remove_action('wp_head', 'index_rel_link');
remove_action('wp_head', 'wlwmanifest_link');
remove_action('wp_head', 'feed_links_extra', 3);
remove_action('wp_head', 'start_post_rel_link', 10, 0);
remove_action('wp_head', 'parent_post_rel_link', 10, 0);
remove_action('wp_head', 'adjacent_posts_rel_link', 10, 0);
remove_action('wp_head', 'wp_shortlink_wp_head', 10, 0 );
remove_action('wp_head', 'adjacent_posts_rel_link_wp_head', 10, 0);
remove_action('wp_head', 'print_emoji_detection_script', 7);
remove_action('wp_head', 'rest_output_link_wp_head', 10);
remove_action('wp_head', 'wp_oembed_add_discovery_links', 10);
remove_action('admin_print_scripts', 'print_emoji_detection_script');
remove_action('wp_print_styles'    , 'print_emoji_styles');
remove_action('admin_print_styles' , 'print_emoji_styles');


// Remove Pingback XMLRPC
// Se for usar comentarios ou alguma aplicacao externa para este site, tem que remover esta função
add_filter( 'xmlrpc_methods', 'sar_block_xmlrpc_attacks' );

function sar_block_xmlrpc_attacks( $methods ) {
   unset( $methods['pingback.ping'] );
   unset( $methods['pingback.extensions.getPingbacks'] );
   return $methods;
}

add_filter( 'wp_headers', 'sar_remove_x_pingback_header' );

function sar_remove_x_pingback_header( $headers ) {
   unset( $headers['X-Pingback'] );
   return $headers;
}


// Adiciona os slugs no body
// function add_slug_to_body_class($classes) {
// 	global $post;
// 	if (is_home()) {
// 		$key = array_search('blog', $classes);
// 		if ($key > -1) {
// 			unset($classes[$key]);
// 		}
// 	} elseif (is_page()) {
// 		$classes[] = sanitize_html_class($post->post_name);
// 	} elseif (is_singular()) {
// 		$classes[] = sanitize_html_class($post->post_name);
// 	}

// 	return $classes;
// }
// add_filter('body_class', 'add_slug_to_body_class');


// Troca o as pecto da tela de login
function custom_login_logo() {
	echo '
		<style type="text/css">
			.login h1 a {
				background: url("'.get_bloginfo('template_directory').'/dist/images/wp-admin-logo.png") 50% 50% no-repeat;
				width: 100%;
			}
		</style>';
}
add_action('login_head', 'custom_login_logo');


// Adiciona suporte a thumbnails
if (function_exists('add_theme_support')) {
	add_theme_support('post-thumbnails');
	
	add_image_size('thumbnail', 300, 170, array( 'center', 'center' ));
	add_image_size('medium', 635, 510, array( 'center', 'center' ));
	add_image_size('large', 970, 9999, true);
	

	/* RSS feed */
	add_theme_support('automatic-feed-links');
}

