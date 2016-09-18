<?php 

/*
 * Registra os menus
 *
 */

function register_menu() {
	register_nav_menu('header-menu', ('Header Menu') );
}
add_action( 'init', 'register_menu' );