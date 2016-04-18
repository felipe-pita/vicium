<?php 

/*
 * Arquivos css e js
 *
 */

function header_scripts() {
	if ($GLOBALS['pagenow'] != 'wp-login.php' && !is_admin()) {

		// Estilos CSS
		wp_register_style('style', get_template_directory_uri() . '/dist/style/main.css', '0.1');
		wp_enqueue_style('style');

		// Google Fonts
		wp_register_style('FiraSans', '//fonts.googleapis.com/css?family=Fira+Sans:400,300,300italic,400italic,500,500italic,700,700italic');
		wp_enqueue_style('FiraSans');

	}
}
add_action('wp_enqueue_scripts', 'header_scripts');


function footer_scripts() {
	if ($GLOBALS['pagenow'] != 'wp-login.php' && !is_admin()) {
	
		// Javascript principal
		wp_register_script('main', get_template_directory_uri() . '/dist/script/main.js', array(), '1.0');
		wp_enqueue_script('main');

		// Javascript para definicao de plugins
		wp_register_script('plugins', get_template_directory_uri() . '/dist/script/plugins.js', array(), '1.0');
		wp_enqueue_script('plugins');

		if ( is_front_page() ) {
			// Javascript para definicao de plugins
			wp_register_script('trianglify', get_template_directory_uri() . '/dist/script/vendor/trianglify.min.js', array(), '0.4.0');
			wp_enqueue_script('trianglify');	
		}

	}
}
add_action('wp_footer', 'footer_scripts');