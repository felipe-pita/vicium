<?php 

// Gerar Título
add_theme_support('title-tag');


/*
 * Header
 *
 */

// Favicons
function favicons(){
	echo '
	<link rel="apple-touch-icon" sizes="57x57" href="' . get_template_directory_uri() . '/dist/images/favicon/apple-touch-icon-57x57.png">
	<link rel="apple-touch-icon" sizes="60x60" href="' . get_template_directory_uri() . '/dist/images/favicon/apple-touch-icon-60x60.png">
	<link rel="apple-touch-icon" sizes="72x72" href="' . get_template_directory_uri() . '/dist/images/favicon/apple-touch-icon-72x72.png">
	<link rel="apple-touch-icon" sizes="76x76" href="' . get_template_directory_uri() . '/dist/images/favicon/apple-touch-icon-76x76.png">
	<link rel="apple-touch-icon" sizes="114x114" href="' . get_template_directory_uri() . '/dist/images/favicon/apple-touch-icon-114x114.png">
	<link rel="apple-touch-icon" sizes="120x120" href="' . get_template_directory_uri() . '/dist/images/favicon/apple-touch-icon-120x120.png">
	<link rel="apple-touch-icon" sizes="144x144" href="' . get_template_directory_uri() . '/dist/images/favicon/apple-touch-icon-144x144.png">
	<link rel="apple-touch-icon" sizes="152x152" href="' . get_template_directory_uri() . '/dist/images/favicon/apple-touch-icon-152x152.png">
	<link rel="apple-touch-icon" sizes="180x180" href="' . get_template_directory_uri() . '/dist/images/favicon/apple-touch-icon-180x180.png">
	<link rel="icon" type="image/png" href="' . get_template_directory_uri() . '/dist/images/favicon/favicon-32x32.png" sizes="32x32">
	<link rel="icon" type="image/png" href="' . get_template_directory_uri() . '/dist/images/favicon/favicon-194x194.png" sizes="194x194">
	<link rel="icon" type="image/png" href="' . get_template_directory_uri() . '/dist/images/favicon/favicon-96x96.png" sizes="96x96">
	<link rel="icon" type="image/png" href="' . get_template_directory_uri() . '/dist/images/favicon/android-chrome-192x192.png" sizes="192x192">
	<link rel="icon" type="image/png" href="' . get_template_directory_uri() . '/dist/images/favicon/favicon-16x16.png" sizes="16x16">
	<link rel="manifest" href="' . get_template_directory_uri() . '/dist/images/favicon/manifest.json">
	<link rel="mask-icon" href="' . get_template_directory_uri() . '/dist/images/favicon/safari-pinned-tab.svg" color="#161c23">
	<link rel="shortcut icon" href="' . get_template_directory_uri() . '/dist/images/favicon/favicon.ico">
	<meta name="apple-mobile-web-app-title" content="Vicium">
	<meta name="application-name" content="Vicium">
	<meta name="msapplication-TileColor" content="#161c23">
	<meta name="msapplication-TileImage" content="' . get_template_directory_uri() . '/dist/images/favicon/mstile-144x144.png">
	<meta name="msapplication-config" content="' . get_template_directory_uri() . '/dist/images/favicon/browserconfig.xml">
	<meta name="theme-color" content="#161c23">';
}


/*
 * Taxonomies
 *
 */

// Transformar termos em (termo, termo e termo)
function terms_gramaticator( $terms ) {
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



/*
 * Content
 *
 */


// Captura o tamanho da midia
function content_getMediaSize($content) {

	$media = array();

	// Remove os parágrafos
	$media['content'] = str_replace( array('<p>', '</p>'), '', $content);

	// Captura os tamanhos da midia
	preg_match("/width=\"([^\"]*)\"/", $content, $width);
	preg_match("/height=\"([^\"]*)\"/", $content, $height);

	$media['width'] = ( !empty($width[1]) ) ? $width[1] : 1920;
	$media['height'] = ( !empty($height[1]) ) ? $height[1] : 1080;

	return $media;
}


// Imagem que ocupa a tela toda no conteúdo
function content_fullscreen( $atts, $content = null ) {
	$media = content_getMediaSize($content);
	return '<div class="single__content--full-screen" data-media-width="' . $media['width'] . '" data-media-height="' . $media['height'] . '">' . $media['content'] . '</div>';
}
add_shortcode( 'tela-inteira', 'content_fullscreen' );



// Video Responsivo
function content_embed($data) {
	$media = content_getMediaSize($data);
	return '<div class="single__content--embed" data-media-width="' . $media['width'] . '" data-media-height="' . $media['height'] . '">' . $media['content'] . '</div>';
}
add_filter('oembed_result', 'content_embed', 10, 3);



// Galeria de imagem customizada
function gallery( $output, $attr ) {
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

		global $hasGalleySlider;
		$hasGalleySlider = true;

		$sliderOptions = array(
			'cellAlign'      => 'left',
			'contain'        => true, 
			'setGallerySize' => false,
			'pageDots'       => false,
			'lazyLoad'       => 1,
			'arrowShape'     => array ('x0' => 20, 'x1' => 60, 'y1' => 50, 'x2' => 70, 'y2' => 40, 'x3' => 40),
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

		!(count($attachments) % 2) ? $hasMain = false : $hasMain = true;

		$loopIndex = 0;

		foreach ( $attachments as $id => $attachment ) {
			$loopIndex++;

			if ( $hasMain && $loopIndex == 1) {
				$file = wp_get_attachment_image($id, 'large');
				$output .= "<{$itemtag} class=\"gallery__tiles--item gallery__tiles--main\">$file";
			} else {
				$file = wp_get_attachment_image($id, 'single-gallery-medium');
				$output .= "<{$itemtag} class=\"gallery__tiles--item\">$file";
			}

			$output .= "</{$itemtag}>";		
		}
	}

	$output .= "</div>";

	return $output;
}
add_filter( 'post_gallery', 'gallery', 10, 2 );


// Fontes
function content_fontes() {

	if ( have_rows('fontes') ) {
		$count = 0;
		$output = '<p class="single__fontes">';
		$links = get_field('fontes');

		foreach ($links as $link) {
			$count++;
			$output .= '<a class="single__fontes--link" href="' . $link['fontes__link'] . '" target="_blank">' . $link['fontes__nome'];

			if ( count( $links ) > 1 ) {
				if ( ($count + 1) != count( $links ) and ($count) != count( $links ) ) {
					$output .= '<span>, </span>';
				} elseif ( ($count + 1) == count( $links ) ) {
					$output .= '<span> e </span>';
				}
			}
		}

		$output .= '</p>';
		return $output;
	}
}