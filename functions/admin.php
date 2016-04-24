<?php 

/*
 * Customizações no painel
 *
 */

// Adiciona css custom
function custom_admin_styles() {
	// Estilos CSS
	wp_register_style('admin', get_template_directory_uri() . '/dist/style/admin.css', '0.1');
	wp_enqueue_style('admin');
}
add_action('admin_head', 'custom_admin_styles');

// Editor style
function custom_editor_style() {
    add_editor_style( get_template_directory_uri() . '/dist/style/admin.css' );
}
add_action('admin_init', 'custom_editor_style');


// Remove o post type padrão
add_action('admin_menu', create_function( null, "remove_menu_page('edit.php');" ));


// Remove as colunas na listagem de posts
function my_manage_columns( $columns ) {
  return $columns;
}

function my_column_init() {
  add_filter( 'manage_posts_columns' , 'my_manage_columns' );
}
add_action( 'admin_init' , 'my_column_init' );