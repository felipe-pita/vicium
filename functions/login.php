<?php 

/*
 * Página de login customizada
 *
 */

function custom_login_logo() {
	echo '<style> .login h1 a { background-image: url("' . get_bloginfo('template_directory') . '/dist/images/login.png") } </style>';
}
add_action('login_head', 'custom_login_logo');
