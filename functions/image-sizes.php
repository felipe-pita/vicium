<?php 

/*
 * Tamanhos customizados de imagens
 *
 */

// Adiciona suporte a thumbnails
if ( function_exists('add_theme_support') ) {

	add_image_size('thumbnail', 300,  300,  array( 'center', 'center' ));
	add_image_size('medium',    600,  600,  array( 'center', 'center' ));
	add_image_size('large',     1200, 1980, true);

}