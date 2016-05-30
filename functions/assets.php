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

		global $hasGalleySlider;
		if ( isset($hasGalleySlider) && $hasGalleySlider ) {
			// flickity
			wp_register_script('flickity', get_template_directory_uri() . '/dist/script/vendor/flickity.min.js', array(), '1.5.9');
			wp_enqueue_script('flickity');
		}

		$analytics = "(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){ (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o), m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m) })(window,document,'script','https://www.google-analytics.com/analytics.js','ga'); 
			ga('create', 'UA-77181797-1', 'none');
			ga('send', 'pageview');";

		wp_add_inline_script('main', $analytics);

	}
}
add_action('wp_footer', 'footer_scripts');