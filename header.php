<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="UTF-8">
	<link rel="alternate" href="http://vicium.com.br" hreflang="pt-br" />
	<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1, user-scalable=0" />

	<title><?php if (function_exists('is_tag') && is_tag()) { echo 'Arquivos '.$tag.' - '; } elseif (is_archive()) { wp_title(''); echo ' Arquivos - '; } elseif (is_search()) { echo 'Resultado de busca '.esc_html($s).' - '; } elseif (!(is_404()) && (is_single()) || (is_page())) { wp_title(''); echo ' '; } elseif (is_404()) { echo 'P&aacute;gina n&aacute;o encontrada - '; } if (is_home()) { bloginfo('name'); echo ' - '; bloginfo('description'); } else { bloginfo('name'); echo ' - '; bloginfo('description'); } ?></title>

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

	<?php require_once( get_template_directory() . '/_ads.php' ); ?>
 
	<header class="header" role="banner">
		<div class="header__container container">

			<div class="header__logo">
				<a href="<?php echo bloginfo('url'); ?>">
					<svg width="171" height="32"><use xlink:href="<?php echo get_template_directory_uri(); ?>/dist/images/sprite.svg#header__logo" /></svg>
				</a>
			</div>

			<nav class="header__nav">
				<?php // wp_nav_menu( array( 'theme_location'  => 'header-menu' ) ); ?> 

				<ul>
					<li>
						<a href="#">Notícias</a>
						<ul>
							<li><a href="#">Novidades</a></li>
							<li><a href="#">Playstation</a></li> 
							<li><a href="#">Xbox</a></li> 
							<li><a href="#">PC</a></li>
							<li><a href="#">Nintendo</a></li>
						</ul>
					</li>
					<li><a href="#">Análises</a></li>
					<li><a href="#">Plataformas</a></li>
					<li><a href="#">Sobre</a></li>
				</ul>
			</nav>

			<form action="" class="header__search">
				<div class="header__search-container">
					<input class="header__search--input" type="text">
					<button class="header__search--submit"><svg width="18" height="18"><use xlink:href="<?php echo get_template_directory_uri(); ?>/dist/images/sprite.svg#header__search" /></svg></button>
				</div>
			</form>

			<ul class="header__social">
				<li class="header__social--item">
					<a class="header__social--link facebook" href="#">
						<svg width="16" height="16"><use xlink:href="<?php echo get_template_directory_uri(); ?>/dist/images/sprite.svg#social__facebook" /></svg>
					</a>
				</li>
				<li class="header__social--item">
					<a class="header__social--link twitter" href="#">
						<svg width="16" height="16"><use xlink:href="<?php echo get_template_directory_uri(); ?>/dist/images/sprite.svg#social__twitter" /></svg>
					</a>
				</li>
				<li class="header__social--item">
					<a class="header__social--link youtube" href="#">
						<svg width="16" height="16"><use xlink:href="<?php echo get_template_directory_uri(); ?>/dist/images/sprite.svg#social__youtube" /></svg>
					</a>
				</li>
			</ul>

		</div>
	</header>
