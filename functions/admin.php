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
function my_manage_columns( $columns ) { return $columns; }
function my_column_init() { add_filter( 'manage_posts_columns' , 'my_manage_columns' ); }
add_action( 'admin_init' , 'my_column_init' );


// Adiciona opções a galeria
add_action('print_media_templates', function(){
?>
<script type="text/html" id="tmpl-custom-gallery-setting">
	<label class="setting">
		<span>Layout</span>
		<select data-setting="layout">
			<option value=""></option>
			<option value="slider">Slider</option>
			<option value="tiles">Quadros</option>
		</select>
	</label>
</script>
<script>
	jQuery(document).ready(function(){
		
		// add your shortcode attribute and its default value to the
		// gallery settings list; $.extend should work as well...
		_.extend(wp.media.gallery.defaults, {
			layout: ''
		});

		wp.media.view.Settings.Gallery = wp.media.view.Settings.Gallery.extend({
		template: function(view){
			return wp.media.template('gallery-settings')(view)
				+ wp.media.template('custom-gallery-setting')(view);
		}
		});
	});
</script>
<?php

});