<?php 

/*
 * Melhoria na performance do front-end
 * removendo scripts que são caregados pelo wordpress por padrão
 */

// remove os scripts padrões do wordpress
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

// remove os scripts que carregam com o wp_head
function disable_scripts() { 
	if ($GLOBALS['pagenow'] != 'wp-login.php' && !is_admin()) {
		wp_deregister_script('l10n');
		wp_deregister_script('jquery');
		wp_deregister_script('wp-embed');
	}
}
add_action('wp_enqueue_scripts', 'disable_scripts');


// remove barra de admin
add_filter( "show_admin_bar" , create_function('$a', "return null;") );