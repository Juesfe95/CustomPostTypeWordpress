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

// Lo enganchamos en la acción init y llamamos a la función create_menu_taxonomies() cuando arranque
add_action( 'init', 'create_menu_taxonomies', 0 );  


function create_menu_taxonomies() {
  /* Configuramos las etiquetas que mostraremos en el escritorio de WordPress */
  $labels = array(
    'name'             => _x( 'Tipos', 'taxonomy general name' ),
    'singular_name'    => _x( 'Tipo', 'taxonomy singular name' ),
    'search_items'     =>  __( 'Buscar por Tipo' ),
    'all_items'        => __( 'Todos los Tipos' ),
    'parent_item'      => __( 'Tipo padre' ),
    'parent_item_colon'=> __( 'Tipo padre:' ),
    'edit_item'        => __( 'Editar Tipo' ),
    'update_item'      => __( 'Actualizar Tipo' ),
    'add_new_item'     => __( 'Añadir nuevo Tipo' ),
    'new_item_name'    => __( 'Nombre del nuevo Tipo' ),
  );
  
  /* Registramos la taxonomía y la configuramos como jerárquica (al estilo de las categorías) */
  register_taxonomy( 'tipo', array( 'post_type_menu' ), array(
    'hierarchical'       => true,
    'labels'             => $labels,
    'show_ui'            => true,
    'query_var'          => true,
    'rewrite'            => array( 'slug' => 'tipo' ),
  ));
  
  /* Si quieres añadir la siguiente taxonomía del ejemplo, sustituye esta línea por la del código correspondiente */
  
}
add_action( 'init', 'post_menu', 0 );