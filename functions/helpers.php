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
	return '<div class="single__content--full-screen">' . $content . '</div><span class="single__content--full-screen-placeholder"></span>';
}
add_shortcode( 'tela-inteira', 'shortcode_telaInteira' );



// Galeria de imagem customizada
function my_post_gallery( $output, $attr ) {
	global $post, $wp_locale;

	static $instance = 0;
	$instance++;

	if ( isset( $attr['orderby'] ) ) {
		$attr['orderby'] = sanitize_sql_orderby( $attr['orderby'] );
		if ( !$attr['orderby'] )
			unset( $attr['orderby'] );
	}

	extract(shortcode_atts(array(
		'order'      => 'ASC',
		'orderby'    => 'menu_order ID',
		'id'         => $post->ID,
		'itemtag'    => 'div',
		'icontag'    => 'div',
		'captiontag' => 'div',
		'columns'    => 3,
		'size'       => 'thumbnail',
		'include'    => '',
		'exclude'    => '',
		'layout'     => 'tiles'
	), $attr));

	$id = intval($id);
	if ( 'RAND' == $order )
		$orderby = 'none';

	if ( !empty($include) ) {
		$include = preg_replace( '/[^0-9,]+/', '', $include );
		$_attachments = get_posts( array('include' => $include, 'post_status' => 'inherit', 'post_type' => 'attachment', 'post_mime_type' => 'image', 'order' => $order, 'orderby' => $orderby) );

		$attachments = array();
		foreach ( $_attachments as $key => $val ) {
			$attachments[$val->ID] = $_attachments[$key];
		}
	} elseif ( !empty($exclude) ) {
		$exclude = preg_replace( '/[^0-9,]+/', '', $exclude );
		$attachments = get_children( array('post_parent' => $id, 'exclude' => $exclude, 'post_status' => 'inherit', 'post_type' => 'attachment', 'post_mime_type' => 'image', 'order' => $order, 'orderby' => $orderby) );
	} else {
		$attachments = get_children( array('post_parent' => $id, 'post_status' => 'inherit', 'post_type' => 'attachment', 'post_mime_type' => 'image', 'order' => $order, 'orderby' => $orderby) );
	}

	if ( empty($attachments) )
		return '';

	if ( is_feed() ) {
		$output = "\n";
		foreach ( $attachments as $att_id => $attachment )
			$output .= wp_get_attachment_link($att_id, $size, true) . "\n";
		return $output;
	}

	$itemtag = tag_escape($itemtag);
	$captiontag = tag_escape($captiontag);
	$columns = intval($columns);
	$itemwidth = $columns > 0 ? floor(100/$columns) : 100;
	$float = is_rtl() ? 'right' : 'left';

	$output = apply_filters('gallery_style', "<div class=\"gallery gallery__$layout\">");

	$i = 0;

	if ($layout == 'slider') {

		$sliderOptions = array(
			'cellAlign'      => 'left',
			'contain'        => true, 
			'setGallerySize' => false,
			'pageDots'       => false,
			'lazyLoad'       => 1,
			'asNavFor'       => "#gallery-$instance.gallery__slider--thumbs"
		);

		$thumbOptions = array(
			'cellAlign'       => 'center',
			'contain'         => false, 
			'setGallerySize'  => false,
			'pageDots'        => false,
			'prevNextButtons' => false,
			'contain'         => true,
			'asNavFor'        => "#gallery-$instance.gallery__slider--preview"
		);

		$output .= "<div id=\"gallery-$instance\" class=\"gallery__slider--preview js-flickity\" data-flickity-options='" . json_encode($sliderOptions) . "'>";

			foreach ( $attachments as $id => $attachment ) {
				$file = wp_get_attachment_image_src($id, 'large');

				$output .= "<{$itemtag} class=\"gallery__slider--preview-item\"><img data-flickity-lazyload=\"$file[0]\" />";

				if ( $captiontag && trim($attachment->post_excerpt) ) {
					$output .= "<{$captiontag} class=\"gallery__slider--preview-caption\"> wptexturize($attachment->post_excerpt); </{$captiontag}>";
				}

				$output .= "</{$itemtag}>";		
			}

		$output .= "</div>";

		$output .= "<div class=\"gallery__slider--thumbs js-flickity\" data-flickity-options='" . json_encode($thumbOptions) . "'>";

			foreach ( $attachments as $id => $attachment ) {
				$file = wp_get_attachment_image($id, 'single-gallery-thumbnail');
				$output .= "<{$itemtag} class=\"gallery__slider--thumbs-item\">$file</{$itemtag}>";
			}

		$output .= "</div>";

	} else {

		foreach ( $attachments as $id => $attachment ) {
			$file = wp_get_attachment_image($id, 'large');

			$output .= "<{$itemtag} class=\"gallery__tiles--item\">$file";

			if ( $captiontag && trim($attachment->post_excerpt) ) {
				$output .= "<{$captiontag} class=\"gallery__tiles--caption\"> wptexturize($attachment->post_excerpt); </{$captiontag}>";
			}

			$output .= "</{$itemtag}>";		
		}
	}

	$output .= "</div>";

	return $output;
}
add_filter( 'post_gallery', 'my_post_gallery', 10, 2 );