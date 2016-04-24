<?php 

/*
 * Funções para auxiliar o desenvolvimento
 *
 */


// Gerar Título
function title() {
	if ( function_exists('is_tag') && is_tag() ) { 
		echo 'Arquivos ' . $tag . ' - '; 
	} elseif ( is_archive() ) { 
		wp_title(''); 
		echo ' Todos - '; 
	} elseif ( is_search() ) {
		echo 'Resultado de busca ' . esc_html($s) . ' - '; 
	} elseif ( !(is_404() ) && ( is_single() ) || ( is_page()) ) { 
		wp_title(''); 
		echo ' - '; 
	} elseif (is_404()) { 
		echo 'P&aacute;gina n&aacute;o encontrada - '; 
	} if (is_home()) { 
		bloginfo('name'); 
		echo ' - ';
		bloginfo('description'); 
	} else { 
		bloginfo('name'); 
		echo ' - '; 
		bloginfo('description'); 
	}
}


// Transformar termos em (termo, termo e termo)
function gramaticator( $terms ) {
	$count = 0;
	$output = '';

	foreach ($terms as $term) {
		$count++;
		$output .= '<a class="term-' . $term->slug . '" href="' . get_term_link( $term->term_id ) . '">';

		if ( count( $terms ) > 1 ) {
			if ( ($count + 1) != count( $terms ) and ($count) != count( $terms ) ) {
				$output .= $term->name . '</a>' . '<span>, </span>';
			} elseif ( ($count + 1) == count( $terms ) ) {
				$output .= $term->name . '</a>' . '<span> e </span>';
			} else {
				$output .= $term->name . '</a>';
			}
		} else {
			$output .= $term->name . '</a>';
		}
	}

	return $output;
}


// imagem que ocupa a tela toda no conteúdo;
function shortcode_telaInteira( $atts, $content = null ) {
	return '<div class="single__content--full-screen">' . $content . '</div>';
}
add_shortcode( 'tela-inteira', 'shortcode_telaInteira' );