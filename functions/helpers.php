<?php 

/*
 * Funções para auxiliar o desenvolvimento
 *
 */


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