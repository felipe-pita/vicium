<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="UTF-8">
	<link rel="alternate" href="http://vicium.com.br" hreflang="<?php echo get_locale(); ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1, user-scalable=0" />

	<!-- favicons -->
	<?php favicons(); ?>
	<!-- /favicons -->

	<!-- inject -->
	<?php wp_head(); ?>
	<!-- /inject -->

	<!-- critical CSS -->
	<style>
		<?php require_once( get_template_directory() . '/dist/style/essential.css' ); ?>

	</style>
	<!-- /critical CSS -->
</head>

<body <?php body_class(); ?>>

	<!-- ads handle -->
	<?php require_once( get_template_directory() . '/_ads.php' ); ?>
	<!-- /ads handle -->
 
	<header class="header" role="banner">
		<div class="header__container container">

			<div class="header__logo">
				<a href="<?php echo bloginfo('url'); ?>">
					<svg width="171" height="32"><use xlink:href="<?php echo get_template_directory_uri(); ?>/dist/images/sprite.svg#header__logo" /></svg>
				</a>
			</div>

			<nav class="header__nav">
				<?php 
					wp_nav_menu( 
						array( 
							'theme_location' => 'header-menu',
							'items_wrap'     => '<ul>%3$s</ul>',
							'container'      => '',
						) 
					); ?> 
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
