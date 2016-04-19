<?php 

/*
 * Customizações no painel
 *
 */

// Remove o post type padrão
add_action('admin_menu', create_function( "$a", "remove_menu_page('edit.php');" ));