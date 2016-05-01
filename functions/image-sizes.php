<?php 

/*
 * Tamanhos customizados de imagens
 *
 */

// Adiciona suporte as thumbnails
add_theme_support( 'post-thumbnails' ); 

// Adiciona suporte a thumbnails
add_image_size('thumbnail', 300,  300, array( 'center', 'center' ));
add_image_size('medium',    600,  600, array( 'center', 'center' ));
add_image_size('large',     800, 1080, false);

// Análises
add_image_size('single-full', 1980, 1080, array( 'center', 'top' ));
add_image_size('single-gallery-thumbnail', 160, 90, array( 'center', 'center' ));


// Adiciona os tamanhos customizados ao media uploader
function media_uploader_sizes($sizes) {
	$addsizes = array(
		"single-full" => __("Tela inteira"),
	);
	$newsizes = array_merge($sizes, $addsizes);
	return $newsizes;
}
add_filter('image_size_names_choose', 'media_uploader_sizes');