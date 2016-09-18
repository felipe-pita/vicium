<?php 

/*
 * Página de login customizada
 *
 */

function custom_login_logo() {
	echo 
	'<style> 
		body, html { background-color: #151c24; }

		.login #login_error {
			border-top: 5px solid #dc3232;
			border-left: 0;
			padding: 0;
		}

		.login form { margin-top: 0; }

		.login h1 a {
			background-image: url("' . get_bloginfo('template_directory') . '/dist/images/login__logo.svg");
			background-repeat: no-repeat;
			width: 100%;
			background-size: 70%;
			background-position: center;
		}
	</style>';
}
add_action('login_head', 'custom_login_logo');
