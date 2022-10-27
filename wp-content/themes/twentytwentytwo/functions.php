<?php
/**
 * Twenty Twenty-Two functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_Two
 * @since Twenty Twenty-Two 1.0
 */


if ( ! function_exists( 'twentytwentytwo_support' ) ) :

	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * @since Twenty Twenty-Two 1.0
	 *
	 * @return void
	 */
	function twentytwentytwo_support() {

		// Add support for block styles.
		add_theme_support( 'wp-block-styles' );

		// Enqueue editor styles.
		add_editor_style( 'style.css' );

	}

endif;

add_action( 'after_setup_theme', 'twentytwentytwo_support' );

if ( ! function_exists( 'twentytwentytwo_styles' ) ) :

	/**
	 * Enqueue styles.
	 *
	 * @since Twenty Twenty-Two 1.0
	 *
	 * @return void
	 */
	function twentytwentytwo_styles() {
		// Register theme stylesheet.
		$theme_version = wp_get_theme()->get( 'Version' );

		$version_string = is_string( $theme_version ) ? $theme_version : false;
		wp_register_style(
			'twentytwentytwo-style',
			get_template_directory_uri() . '/style.css',
			array(),
			$version_string
		);

		// Enqueue theme stylesheet.
		wp_enqueue_style( 'twentytwentytwo-style' );

	}

endif;

add_action( 'wp_enqueue_scripts', 'twentytwentytwo_styles' );

// Add block patterns
require get_template_directory() . '/inc/block-patterns.php';


// Register Custom Post Type
function post_menu() {

	$labels = array(
		'name'                  => _x( 'Menu motos', 'Post Type General Name', 'text_domain' ),
		'singular_name'         => _x( 'Menu', 'Post Type Singular Name', 'text_domain' ),
		'menu_name'             => __( 'Menu motos', 'text_domain' ),
		'name_admin_bar'        => __( 'Menu motos', 'text_domain' ),
		'archives'              => __( 'Listado de menus', 'text_domain' ),
		'attributes'            => __( 'Atributo de menu', 'text_domain' ),
		'parent_item_colon'     => __( 'Menu superior', 'text_domain' ),
		'all_items'             => __( 'Todos los menus', 'text_domain' ),
		'add_new_item'          => __( 'Añadir nuevo menu', 'text_domain' ),
		'add_new'               => __( 'Añadir nuevo', 'text_domain' ),
		'new_item'              => __( 'Nuevo menu', 'text_domain' ),
		'edit_item'             => __( 'Editar menu', 'text_domain' ),
		'update_item'           => __( 'Actualizar menu', 'text_domain' ),
		'view_item'             => __( 'Ver menu', 'text_domain' ),
		'view_items'            => __( 'Ver menus', 'text_domain' ),
		'search_items'          => __( 'Buscar menu', 'text_domain' ),
		'not_found'             => __( 'No hay menus', 'text_domain' ),
		'not_found_in_trash'    => __( 'No hay menus en la papelera', 'text_domain' ),
		'featured_image'        => __( 'Portada del menu', 'text_domain' ),
		'set_featured_image'    => __( 'Establecer portada', 'text_domain' ),
		'remove_featured_image' => __( 'Eliminar portada', 'text_domain' ),
		'use_featured_image'    => __( 'Usar imagen de portada', 'text_domain' ),
		'insert_into_item'      => __( 'insertar en el menu', 'text_domain' ),
		'uploaded_to_this_item' => __( 'Subido a este menu', 'text_domain' ),
		'items_list'            => __( 'Lista de menus', 'text_domain' ),
		'items_list_navigation' => __( 'Navegacion de la lista de menus', 'text_domain' ),
		'filter_items_list'     => __( 'Filtrar lista de menus', 'text_domain' ),
	);
	$args = array(
		'label'                 => __( 'Menu', 'text_domain' ),
		'description'           => __( 'Post Type Description', 'text_domain' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor' ),
		'taxonomies'            => array( 'category', 'post_tag' ),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'menu_icon'             => 'dashicons-welcome-widgets-menus',
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,
		'exclude_from_search'   => true,
		'publicly_queryable'    => true,
		'capability_type'       => 'page',
	);
	register_post_type( 'post_type_menu', $args );

}
add_action( 'init', 'post_menu', 0 );

// Register Custom Post Type
function custom_post_type() {

	$labels = array(
		'name'                  => _x( 'ListaMotos', 'Post Type General Name', 'blog.auteco.com' ),
		'singular_name'         => _x( 'ListaMotos', 'Post Type Singular Name', 'blog.auteco.com' ),
		'menu_name'             => __( 'ListaMotos', 'blog.auteco.com' ),
		'name_admin_bar'        => __( 'ListaMotos', 'blog.auteco.com' ),
		'archives'              => __( 'Archivos', 'blog.auteco.com' ),
		'attributes'            => __( 'Atributos', 'blog.auteco.com' ),
		'parent_item_colon'     => __( 'Parientes', 'blog.auteco.com' ),
		'all_items'             => __( 'ListaMotos', 'blog.auteco.com' ),
		'add_new_item'          => __( 'Agregar nueva lista', 'blog.auteco.com' ),
		'add_new'               => __( 'Agregar nuevo', 'blog.auteco.com' ),
		'new_item'              => __( 'Nueva lista', 'blog.auteco.com' ),
		'edit_item'             => __( 'Editar lista', 'blog.auteco.com' ),
		'update_item'           => __( 'Actualizar lista', 'blog.auteco.com' ),
		'view_item'             => __( 'Ver lista', 'blog.auteco.com' ),
		'view_items'            => __( 'Ver lista', 'blog.auteco.com' ),
		'search_items'          => __( 'Buscar lista', 'blog.auteco.com' ),
		'not_found'             => __( 'No encontrado', 'blog.auteco.com' ),
		'not_found_in_trash'    => __( 'No encontrado en papelera', 'blog.auteco.com' ),
		'featured_image'        => __( 'Imagen Destacada', 'blog.auteco.com' ),
		'set_featured_image'    => __( 'Seleccionar imagen destacada', 'blog.auteco.com' ),
		'remove_featured_image' => __( 'Eliminar Imagen destacada', 'blog.auteco.com' ),
		'use_featured_image'    => __( 'Usar imagen destacada', 'blog.auteco.com' ),
		'insert_into_item'      => __( 'Insertar en la lista', 'blog.auteco.com' ),
		'uploaded_to_this_item' => __( 'Insertar en la lista', 'blog.auteco.com' ),
		'items_list'            => __( 'Lista de listas', 'blog.auteco.com' ),
		'items_list_navigation' => __( 'Navegar lista', 'blog.auteco.com' ),
		'filter_items_list'     => __( 'Filtrar lista', 'blog.auteco.com' ),
	);
	$args = array(
		'label'                 => __( 'ListaMotos', 'blog.auteco.com' ),
		'description'           => __( 'Lista con todas las motos de auteco', 'blog.auteco.com' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor', 'thumbnail', 'comments', 'trackbacks', 'revisions', 'custom-fields', 'page-attributes', 'post-formats' ),
		'taxonomies'            => array( 'category'/*, 'post_tag' */),
		'hierarchical'          => true,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 10,
		'menu_icon'             => 'dashicons-admin-page',
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,
		'exclude_from_search'   => true,
		'publicly_queryable'    => true,
		'capability_type'       => 'page',
	);
	register_post_type( 'ListaMotos', $args );

}
add_action( 'init', 'custom_post_type', 0 );