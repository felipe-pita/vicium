<?php 


	/*
	 * Post types
	 *
	 */

	// Notícias
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
			'taxonomies'            => array( 'tax_plataforma', 'tax_tags', 'tax_genero' ),
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


	// Análises
	function set_post_analises() {

		$labels = array(
			'name'                  => _x( 'Análises', 'Post Type General Name', 'vicium' ),
			'singular_name'         => _x( 'Análise', 'Post Type Singular Name', 'vicium' ),
			'menu_name'             => __( 'Análises', 'vicium' ),
			'name_admin_bar'        => __( 'Análises', 'vicium' ),
			'archives'              => __( 'Todas as análise', 'vicium' ),
			'parent_item_colon'     => __( 'análise principal:', 'vicium' ),
			'all_items'             => __( 'Todos os Itens', 'vicium' ),
			'add_new_item'          => __( 'Adicionar novo item', 'vicium' ),
			'add_new'               => __( 'Adicionar novo', 'vicium' ),
			'new_item'              => __( 'Novo item', 'vicium' ),
			'edit_item'             => __( 'Editar Item', 'vicium' ),
			'update_item'           => __( 'Atualizar Item', 'vicium' ),
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
			'label'                 => __( 'Análise', 'vicium' ),
			'description'           => __( 'Análise de jogos', 'vicium' ),
			'labels'                => $labels,
			'supports'              => array( ),
			'taxonomies'            => array( 'tax_plataforma', 'tax_tags', 'tax_genero' ),
			'hierarchical'          => false,
			'public'                => true,
			'show_ui'               => true,
			'show_in_menu'          => true,
			'menu_position'         => 5,
			'menu_icon'             => 'dashicons-star-half',
			'show_in_admin_bar'     => false,
			'show_in_nav_menus'     => true,
			'can_export'            => true,
			'has_archive'           => true,		
			'exclude_from_search'   => false,
			'publicly_queryable'    => true,
			'capability_type'       => 'post',
		);
		register_post_type( 'post_analises', $args );

	}
	add_action( 'init', 'set_post_analises', 0 );



	/*
	 * Taxonomies
	 *
	 */

	// Plataforma
	function set_taxonomy_plataformas() {

		$labels = array(
			'name'                       => _x( 'Plataformas', 'Taxonomy General Name', 'vicium' ),
			'singular_name'              => _x( 'Plataforma', 'Taxonomy Singular Name', 'vicium' ),
			'menu_name'                  => __( 'Plataforma', 'vicium' ),
			'all_items'                  => __( 'Todos os plataformas', 'vicium' ),
			'parent_item'                => __( 'Item pai', 'vicium' ),
			'parent_item_colon'          => __( 'Item pai:', 'vicium' ),
			'new_item_name'              => __( 'Novo nome', 'vicium' ),
			'add_new_item'               => __( 'Adicionar', 'vicium' ),
			'edit_item'                  => __( 'Editar', 'vicium' ),
			'update_item'                => __( 'Atualizar', 'vicium' ),
			'view_item'                  => __( 'Ver', 'vicium' ),
			'separate_items_with_commas' => __( 'Separe-os com vírgula', 'vicium' ),
			'add_or_remove_items'        => __( 'Adicionar/remover', 'vicium' ),
			'choose_from_most_used'      => __( 'Mais usados', 'vicium' ),
			'popular_items'              => __( 'Populares', 'vicium' ),
			'search_items'               => __( 'Procurar', 'vicium' ),
			'not_found'                  => __( 'Não encontrado', 'vicium' ),
			'no_terms'                   => __( 'Nenhum item', 'vicium' ),
			'items_list'                 => __( 'Lista de itens', 'vicium' ),
			'items_list_navigation'      => __( 'Itens', 'vicium' ),
		);
		$rewrite = array(
			'slug'                       => 'plataforma',
			'with_front'                 => true,
			'hierarchical'               => false,
		);
		$args = array(
			'labels'                     => $labels,
			'hierarchical'               => true,
			'public'                     => true,
			'show_ui'                    => true,
			'show_admin_column'          => true,
			'show_in_nav_menus'          => true,
			'show_tagcloud'              => false,
			'rewrite'                    => $rewrite,
		);
		register_taxonomy( 'tax_plataformas', array( 'post_noticias', 'post_analises' ), $args );

	}
	add_action( 'init', 'set_taxonomy_plataformas', 0 );


	// Gêneros
	function set_taxonomy_generos() {

		$labels = array(
			'name'                       => _x( 'Gêneros', 'Taxonomy General Name', 'vicium' ),
			'singular_name'              => _x( 'Gênero', 'Taxonomy Singular Name', 'vicium' ),
			'menu_name'                  => __( 'Gênero', 'vicium' ),
			'all_items'                  => __( 'Todos os gêneros', 'vicium' ),
			'parent_item'                => __( 'Item pai', 'vicium' ),
			'parent_item_colon'          => __( 'Item pai:', 'vicium' ),
			'new_item_name'              => __( 'Novo nome', 'vicium' ),
			'add_new_item'               => __( 'Adicionar', 'vicium' ),
			'edit_item'                  => __( 'Editar', 'vicium' ),
			'update_item'                => __( 'Atualizar', 'vicium' ),
			'view_item'                  => __( 'Ver', 'vicium' ),
			'separate_items_with_commas' => __( 'Separe-os com vírgula', 'vicium' ),
			'add_or_remove_items'        => __( 'Adicionar/remover', 'vicium' ),
			'choose_from_most_used'      => __( 'Mais usados', 'vicium' ),
			'popular_items'              => __( 'Populares', 'vicium' ),
			'search_items'               => __( 'Procurar', 'vicium' ),
			'not_found'                  => __( 'Não encontrado', 'vicium' ),
			'no_terms'                   => __( 'Nenhum item', 'vicium' ),
			'items_list'                 => __( 'Lista de itens', 'vicium' ),
			'items_list_navigation'      => __( 'Itens', 'vicium' ),
		);
		$rewrite = array(
			'slug'                       => 'genero',
			'with_front'                 => true,
			'hierarchical'               => false,
		);
		$args = array(
			'labels'                     => $labels,
			'hierarchical'               => true,
			'public'                     => true,
			'show_ui'                    => true,
			'show_admin_column'          => true,
			'show_in_nav_menus'          => true,
			'show_tagcloud'              => false,
			'rewrite'                    => $rewrite,
		);
		register_taxonomy( 'tax_generos', array( 'post_analises' ), $args );

	}
	add_action( 'init', 'set_taxonomy_generos', 0 );


	// Gêneros
	function set_taxonomy_distribuidores() {

		$labels = array(
			'name'                       => _x( 'Distribuidores', 'Taxonomy General Name', 'vicium' ),
			'singular_name'              => _x( 'Distribuidor', 'Taxonomy Singular Name', 'vicium' ),
			'menu_name'                  => __( 'Distribuidor', 'vicium' ),
			'all_items'                  => __( 'Todos os distribuidores', 'vicium' ),
			'parent_item'                => __( 'Item pai', 'vicium' ),
			'parent_item_colon'          => __( 'Item pai:', 'vicium' ),
			'new_item_name'              => __( 'Novo nome', 'vicium' ),
			'add_new_item'               => __( 'Adicionar', 'vicium' ),
			'edit_item'                  => __( 'Editar', 'vicium' ),
			'update_item'                => __( 'Atualizar', 'vicium' ),
			'view_item'                  => __( 'Ver', 'vicium' ),
			'separate_items_with_commas' => __( 'Separe-os com vírgula', 'vicium' ),
			'add_or_remove_items'        => __( 'Adicionar/remover', 'vicium' ),
			'choose_from_most_used'      => __( 'Mais usados', 'vicium' ),
			'popular_items'              => __( 'Populares', 'vicium' ),
			'search_items'               => __( 'Procurar', 'vicium' ),
			'not_found'                  => __( 'Não encontrado', 'vicium' ),
			'no_terms'                   => __( 'Nenhum item', 'vicium' ),
			'items_list'                 => __( 'Lista de itens', 'vicium' ),
			'items_list_navigation'      => __( 'Itens', 'vicium' ),
		);
		$rewrite = array(
			'slug'                       => 'distribuidor',
			'with_front'                 => true,
			'hierarchical'               => false,
		);
		$args = array(
			'labels'                     => $labels,
			'hierarchical'               => false,
			'public'                     => true,
			'show_ui'                    => true,
			'show_admin_column'          => true,
			'show_in_nav_menus'          => true,
			'show_tagcloud'              => false,
			'rewrite'                    => $rewrite,
		);
		register_taxonomy( 'tax_distribuidores', array( 'post_analises' ), $args );

	}
	add_action( 'init', 'set_taxonomy_distribuidores', 0 );


	// Gêneros
	function set_taxonomy_desenvolvedores() {

		$labels = array(
			'name'                       => _x( 'Desenvolvedores', 'Taxonomy General Name', 'vicium' ),
			'singular_name'              => _x( 'Desenvolvedor', 'Taxonomy Singular Name', 'vicium' ),
			'menu_name'                  => __( 'Desenvolvedor', 'vicium' ),
			'all_items'                  => __( 'Todos os desenvolvedores', 'vicium' ),
			'parent_item'                => __( 'Item pai', 'vicium' ),
			'parent_item_colon'          => __( 'Item pai:', 'vicium' ),
			'new_item_name'              => __( 'Novo nome', 'vicium' ),
			'add_new_item'               => __( 'Adicionar', 'vicium' ),
			'edit_item'                  => __( 'Editar', 'vicium' ),
			'update_item'                => __( 'Atualizar', 'vicium' ),
			'view_item'                  => __( 'Ver', 'vicium' ),
			'separate_items_with_commas' => __( 'Separe-os com vírgula', 'vicium' ),
			'add_or_remove_items'        => __( 'Adicionar/remover', 'vicium' ),
			'choose_from_most_used'      => __( 'Mais usados', 'vicium' ),
			'popular_items'              => __( 'Populares', 'vicium' ),
			'search_items'               => __( 'Procurar', 'vicium' ),
			'not_found'                  => __( 'Não encontrado', 'vicium' ),
			'no_terms'                   => __( 'Nenhum item', 'vicium' ),
			'items_list'                 => __( 'Lista de itens', 'vicium' ),
			'items_list_navigation'      => __( 'Itens', 'vicium' ),
		);
		$rewrite = array(
			'slug'                       => 'desenvolvedor',
			'with_front'                 => true,
			'hierarchical'               => false,
		);
		$args = array(
			'labels'                     => $labels,
			'hierarchical'               => false,
			'public'                     => true,
			'show_ui'                    => true,
			'show_admin_column'          => true,
			'show_in_nav_menus'          => true,
			'show_tagcloud'              => false,
			'rewrite'                    => $rewrite,
		);
		register_taxonomy( 'tax_desenvolvedores', array( 'post_analises' ), $args );

	}
	add_action( 'init', 'set_taxonomy_desenvolvedores', 0 );


	// Plataforma
	function set_taxonomy_jogadores() {

		$labels = array(
			'name'                       => _x( 'Número de jogadores', 'Taxonomy General Name', 'vicium' ),
			'singular_name'              => _x( 'Número de jogadores', 'Taxonomy Singular Name', 'vicium' ),
			'menu_name'                  => __( 'Número de jogadores', 'vicium' ),
			'all_items'                  => __( 'Todos os plataformas', 'vicium' ),
			'parent_item'                => __( 'Item pai', 'vicium' ),
			'parent_item_colon'          => __( 'Item pai:', 'vicium' ),
			'new_item_name'              => __( 'Novo nome', 'vicium' ),
			'add_new_item'               => __( 'Adicionar', 'vicium' ),
			'edit_item'                  => __( 'Editar', 'vicium' ),
			'update_item'                => __( 'Atualizar', 'vicium' ),
			'view_item'                  => __( 'Ver', 'vicium' ),
			'separate_items_with_commas' => __( 'Separe-os com vírgula', 'vicium' ),
			'add_or_remove_items'        => __( 'Adicionar/remover', 'vicium' ),
			'choose_from_most_used'      => __( 'Mais usados', 'vicium' ),
			'popular_items'              => __( 'Populares', 'vicium' ),
			'search_items'               => __( 'Procurar', 'vicium' ),
			'not_found'                  => __( 'Não encontrado', 'vicium' ),
			'no_terms'                   => __( 'Nenhum item', 'vicium' ),
			'items_list'                 => __( 'Lista de itens', 'vicium' ),
			'items_list_navigation'      => __( 'Itens', 'vicium' ),
		);
		$rewrite = array(
			'slug'                       => 'numero-de-jogadores',
			'with_front'                 => true,
			'hierarchical'               => false,
		);
		$args = array(
			'labels'                     => $labels,
			'hierarchical'               => true,
			'public'                     => true,
			'show_ui'                    => true,
			'show_admin_column'          => true,
			'show_in_nav_menus'          => true,
			'show_tagcloud'              => false,
			'rewrite'                    => $rewrite,
		);
		register_taxonomy( 'tax_jogadores', array( 'post_analises' ), $args );

	}
	add_action( 'init', 'set_taxonomy_jogadores', 0 );




	// Register Custom Taxonomy
	function set_taxonomy_genero() {

		$labels = array(
			'name'                       => _x( 'Gêneros', 'Taxonomy General Name', 'vicium' ),
			'singular_name'              => _x( 'Gênero', 'Taxonomy Singular Name', 'vicium' ),
			'menu_name'                  => __( 'Gênero', 'vicium' ),
			'all_items'                  => __( 'Todos os gêneros', 'vicium' ),
			'parent_item'                => __( 'Gênero principal', 'vicium' ),
			'parent_item_colon'          => __( 'Gênero pai:', 'vicium' ),
			'new_item_name'              => __( 'Novo nome', 'vicium' ),
			'add_new_item'               => __( 'Adicionar novo', 'vicium' ),
			'edit_item'                  => __( 'Editar item', 'vicium' ),
			'update_item'                => __( 'Atualizar item', 'vicium' ),
			'view_item'                  => __( 'Ver item', 'vicium' ),
			'separate_items_with_commas' => __( 'Separe-os com vírgula', 'vicium' ),
			'add_or_remove_items'        => __( 'Adicionar ou remover item', 'vicium' ),
			'choose_from_most_used'      => __( 'Mais usados', 'vicium' ),
			'popular_items'              => __( 'Populares', 'vicium' ),
			'search_items'               => __( 'Procurar itens', 'vicium' ),
			'not_found'                  => __( 'Não encontrado', 'vicium' ),
			'no_terms'                   => __( 'Nenhum item', 'vicium' ),
			'items_list'                 => __( 'Lista de itens', 'vicium' ),
			'items_list_navigation'      => __( 'Lista de navegação de itens', 'vicium' ),
		);
		$rewrite = array(
			'slug'                       => 'genero',
			'with_front'                 => true,
			'hierarchical'               => true,
		);
		$args = array(
			'labels'                     => $labels,
			'hierarchical'               => true,
			'public'                     => true,
			'show_ui'                    => true,
			'show_admin_column'          => true,
			'show_in_nav_menus'          => true,
			'show_tagcloud'              => false,
			'rewrite'                    => $rewrite,
		);
		register_taxonomy( 'tax_genero', array( 'post_analises', 'post_noticias' ), $args );

	}
	add_action( 'init', 'set_taxonomy_genero', 0 );

?>