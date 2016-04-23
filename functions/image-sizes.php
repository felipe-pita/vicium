<?php 

/*
 * Tamanhos customizados de imagens
 *
 */


// Adiciona suporte as thumbnails
add_theme_support( 'post-thumbnails' ); 

// Adiciona suporte a thumbnails
add_image_size('thumbnail', 300,   300, array( 'center', 'center' ));
add_image_size('medium',    600,   600, array( 'center', 'center' ));
add_image_size('large',     1980, 1080, true);

/* Análises */
add_image_size('single-analises__thumbnail',     1980, 700, true);
