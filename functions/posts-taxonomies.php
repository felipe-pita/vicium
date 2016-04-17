<?php 


	/*
	 * Notícias
	 *
	 */

	// Registra o post_type
	function set_post_noticias() {

		$labels = array(
			'name'                  => _x( 'Notícias', 'Post Type General Name', 'vicium' ),
			'singular_name'         => _x( 'Notícia', 'Post Type Singular Name', 'vicium' ),
			'menu_name'             => __( 'Notícias', 'vicium' ),
			'name_admin_bar'        => __( 'Notícias', 'vicium' ),
			'archives'              => __( 'Todas as notícias', 'vicium' ),
			'parent_item_colon'     => __( 'Notícia principal:', 'vicium' ),
			'all_items'             => __( 'Todos os Itens', 'vicium' ),
			'add_new_item'          => __( 'Adicionar novo item', 'vicium' ),
			'add_new'               => __( 'Adicionar novo', 'vicium' ),
			'new_item'              => __( 'Novo item', 'vicium' ),
			'edit_item'             => __( 'Editar Item', 'vicium' ),
			'update_item'           => __( 'atualizar Item', 'vicium' ),
			'view_item'             => __( 'Ver Item', 'vicium' ),
			'search_items'          => __( 'Produrar Item', 'vicium' ),
			'not_found'             => __( 'Não encontrado', 'vicium' ),
			'not_found_in_trash'    => __( 'Não encontrado na lixeira', 'vicium' ),
			'featured_image'        => __( 'Imagem de destaque', 'vicium' ),
			'set_featured_image'    => __( 'Definir imagem de destaque', 'vicium' ),
			'remove_featured_image' => __( 'remover imagem de destaque', 'vicium' ),
			'use_featured_image'    => __( 'Usar como imagem de destaque', 'vicium' ),
			'insert_into_item'      => __( 'Inserir no item', 'vicium' ),
			'uploaded_to_this_item' => __( 'Upload feito para este item', 'vicium' ),
			'items_list'            => __( 'Lista de itens', 'vicium' ),
			'items_list_navigation' => __( 'Lista de navegação', 'vicium' ),
			'filter_items_list'     => __( 'Lista de filtros', 'vicium' ),
		);
		$args = array(
			'label'                 => __( 'Notícias', 'vicium' ),
			'description'           => __( 'Cadastro de notícias', 'vicium' ),
			'labels'                => $labels,
			'supports'              => array( ),
			'taxonomies'            => array( 'tax_plataforma', 'tax_tags' ),
			'hierarchical'          => false,
			'public'                => true,
			'show_ui'               => true,
			'show_in_menu'          => true,
			'menu_position'         => 5,
			'menu_icon'             => 'dashicons-pressthis',
			'show_in_admin_bar'     => true,
			'show_in_nav_menus'     => true,
			'can_export'            => true,
			'has_archive'           => true,	
			'exclude_from_search'   => false,
			'publicly_queryable'    => true,
			'capability_type'       => 'post',
		);
		register_post_type( 'post_noticias', $args );

	}
	add_action( 'init', 'set_post_noticias', 0 );



	/*
	 * Análises
	 *
	 */

	// Registra o post_type
	function set_post_analise() {

		$labels = array(
			'name'                  => _x( 'Análises', 'Post Type General Name', 'vicium' ),
			'singular_name'         => _x( 'Análise', 'Post Type Singular Name', 'vicium' ),
			'menu_name'             => __( 'Post Types', 'vicium' ),
			'name_admin_bar'        => __( 'Post Type', 'vicium' ),
			'archives'              => __( 'Item Archives', 'vicium' ),
			'parent_item_colon'     => __( 'Parent Item:', 'vicium' ),
			'all_items'             => __( 'All Items', 'vicium' ),
			'add_new_item'          => __( 'Add New Item', 'vicium' ),
			'add_new'               => __( 'Add New', 'vicium' ),
			'new_item'              => __( 'New Item', 'vicium' ),
			'edit_item'             => __( 'Edit Item', 'vicium' ),
			'update_item'           => __( 'Update Item', 'vicium' ),
			'view_item'             => __( 'View Item', 'vicium' ),
			'search_items'          => __( 'Search Item', 'vicium' ),
			'not_found'             => __( 'Not found', 'vicium' ),
			'not_found_in_trash'    => __( 'Not found in Trash', 'vicium' ),
			'featured_image'        => __( 'Featured Image', 'vicium' ),
			'set_featured_image'    => __( 'Set featured image', 'vicium' ),
			'remove_featured_image' => __( 'Remove featured image', 'vicium' ),
			'use_featured_image'    => __( 'Use as featured image', 'vicium' ),
			'insert_into_item'      => __( 'Insert into item', 'vicium' ),
			'uploaded_to_this_item' => __( 'Uploaded to this item', 'vicium' ),
			'items_list'            => __( 'Items list', 'vicium' ),
			'items_list_navigation' => __( 'Items list navigation', 'vicium' ),
			'filter_items_list'     => __( 'Filter items list', 'vicium' ),
		);
		$args = array(
			'label'                 => __( 'Análise', 'vicium' ),
			'description'           => __( 'Análise de jogos', 'vicium' ),
			'labels'                => $labels,
			'supports'              => array( ),
			'taxonomies'            => array( 'tax_plataforma', 'tax_tags' ),
			'hierarchical'          => false,
			'public'                => true,
			'show_ui'               => true,
			'show_in_menu'          => true,
			'menu_position'         => 5,
			'show_in_admin_bar'     => true,
			'show_in_nav_menus'     => true,
			'can_export'            => true,
			'has_archive'           => true,		
			'exclude_from_search'   => false,
			'publicly_queryable'    => true,
			'capability_type'       => 'page',
		);
		register_post_type( 'post_analise', $args );

	}
	add_action( 'init', 'set_post_analise', 0 );



?>