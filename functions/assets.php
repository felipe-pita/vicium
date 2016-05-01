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

		// Fira sans
		wp_register_style('FiraSans', '//fonts.googleapis.com/css?family=Fira+Sans:400,300,300italic,400italic,500,500italic,700,700italic');
		wp_enqueue_style('FiraSans');

		// Noto Serif
		if ( is_singular() ) {
			wp_register_style('NotoSerif', '//fonts.googleapis.com/css?family=Noto+Serif:400,400italic,700,700italic');
			wp_enqueue_style('NotoSerif');
		}
	}
}
add_action('wp_enqueue_scripts', 'header_scripts');


function footer_scripts() {
	if ($GLOBALS['pagenow'] != 'wp-login.php' && !is_admin()) {
	
		// Javascript principal
		wp_register_script('main', get_template_directory_uri() . '/dist/script/main.js', array(), '1.0');
		wp_enqueue_script('main');

		if ( is_front_page() ) {
			// Javascript para definicao de plugins
			wp_register_script('trianglify', get_template_directory_uri() . '/dist/script/vendor/trianglify.min.js', array(), '0.4.0');
			wp_enqueue_script('trianglify');	
		}

		if ( is_singular() ) {
			// Slick slider
			wp_register_script('flickity', get_template_directory_uri() . '/dist/script/vendor/flickity.min.js', array(), '1.5.9');
			wp_enqueue_script('flickity');	
		}
	}
}
add_action('wp_footer', 'footer_scripts');