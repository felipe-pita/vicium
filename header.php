<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="UTF-8">
	<link rel="alternate" href="http://vicium.com.br" hreflang="pt-br" />
	<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1, user-scalable=0" />

	<title><?php title(); ?></title>

	<link rel="apple-touch-icon" sizes="57x57" href="<?php echo get_template_directory_uri(); ?>/dist/images/favicon/apple-touch-icon-57x57.png">
	<link rel="apple-touch-icon" sizes="60x60" href="<?php echo get_template_directory_uri(); ?>/dist/images/favicon/apple-touch-icon-60x60.png">
	<link rel="apple-touch-icon" sizes="72x72" href="<?php echo get_template_directory_uri(); ?>/dist/images/favicon/apple-touch-icon-72x72.png">
	<link rel="apple-touch-icon" sizes="76x76" href="<?php echo get_template_directory_uri(); ?>/dist/images/favicon/apple-touch-icon-76x76.png">
	<link rel="apple-touch-icon" sizes="114x114" href="<?php echo get_template_directory_uri(); ?>/dist/images/favicon/apple-touch-icon-114x114.png">
	<link rel="apple-touch-icon" sizes="120x120" href="<?php echo get_template_directory_uri(); ?>/dist/images/favicon/apple-touch-icon-120x120.png">
	<link rel="apple-touch-icon" sizes="144x144" href="<?php echo get_template_directory_uri(); ?>/dist/images/favicon/apple-touch-icon-144x144.png">
	<link rel="apple-touch-icon" sizes="152x152" href="<?php echo get_template_directory_uri(); ?>/dist/images/favicon/apple-touch-icon-152x152.png">
	<link rel="apple-touch-icon" sizes="180x180" href="<?php echo get_template_directory_uri(); ?>/dist/images/favicon/apple-touch-icon-180x180.png">
	<link rel="icon" type="image/png" href="<?php echo get_template_directory_uri(); ?>/dist/images/favicon/favicon-32x32.png" sizes="32x32">
	<link rel="icon" type="image/png" href="<?php echo get_template_directory_uri(); ?>/dist/images/favicon/favicon-194x194.png" sizes="194x194">
	<link rel="icon" type="image/png" href="<?php echo get_template_directory_uri(); ?>/dist/images/favicon/favicon-96x96.png" sizes="96x96">
	<link rel="icon" type="image/png" href="<?php echo get_template_directory_uri(); ?>/dist/images/favicon/android-chrome-192x192.png" sizes="192x192">
	<link rel="icon" type="image/png" href="<?php echo get_template_directory_uri(); ?>/dist/images/favicon/favicon-16x16.png" sizes="16x16">
	<link rel="manifest" href="<?php echo get_template_directory_uri(); ?>/dist/images/favicon/manifest.json">
	<link rel="mask-icon" href="<?php echo get_template_directory_uri(); ?>/dist/images/favicon/safari-pinned-tab.svg" color="#161c23">
	<link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/dist/images/favicon/favicon.ico">
	<meta name="apple-mobile-web-app-title" content="Vicium">
	<meta name="application-name" content="Vicium">
	<meta name="msapplication-TileColor" content="#161c23">
	<meta name="msapplication-TileImage" content="<?php echo get_template_directory_uri(); ?>/dist/images/favicon/mstile-144x144.png">
	<meta name="msapplication-config" content="<?php echo get_template_directory_uri(); ?>/dist/images/favicon/browserconfig.xml">
	<meta name="theme-color" content="#161c23">

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
