<?php
/*
Plugin Name: Nature Boutique Post Types
Plugin URI:
Description: Plugin que habilita los distintos post types del sitio web como la posibilidad de agregar portainjertos, tipos de plantas o variedades y además algunos servicios.
Version: 0.1.0
Author: asomic
Author URI: https://asomic.com
Text Domain: nboutique
*/

// Portainjertos Post Type
function portainjertos_post_type() {

	$labels = array(
		'name'                  => _x( 'Portainjertos', 'Post Type General Name', 'nboutique' ),
		'singular_name'         => _x( 'Portainjerto', 'Post Type Singular Name', 'nboutique' ),
		'menu_name'             => __( 'Portainjertos', 'nboutique' ),
		'name_admin_bar'        => __( 'Portainjertos', 'nboutique' ),
		'archives'              => __( 'Archivo de Portainjertos', 'nboutique' ),
		'attributes'            => __( 'Atributos de Portainjertos', 'nboutique' ),
		'parent_item_colon'     => __( 'Portainjerto principal:', 'nboutique' ),
		'all_items'             => __( 'Todos los Portainjertos', 'nboutique' ),
		'add_new_item'          => __( 'Añadir Nuevo Portainjertos', 'nboutique' ),
		'add_new'               => __( 'Añadir Nuevo', 'nboutique' ),
		'new_item'              => __( 'Nuevo Portainjerto', 'nboutique' ),
		'edit_item'             => __( 'Editar Portainjerto', 'nboutique' ),
		'update_item'           => __( 'Actualizar Portainjertos', 'nboutique' ),
		'view_item'             => __( 'Ver Portainjerto', 'nboutique' ),
		'view_items'            => __( 'Ver Portainjertos', 'nboutique' ),
		'search_items'          => __( 'Buscar Portainjertos', 'nboutique' ),
		'not_found'             => __( 'No encontrado', 'nboutique' ),
		'not_found_in_trash'    => __( 'Nada encontrado en papelera', 'nboutique' ),
		'featured_image'        => __( 'Imagen destacada', 'nboutique' ),
		'set_featured_image'    => __( 'Establecer imagen destacada', 'nboutique' ),
		'remove_featured_image' => __( 'Eliminar imagen destacada', 'nboutique' ),
		'use_featured_image'    => __( 'Usar como imagen destacada', 'nboutique' ),
		'insert_into_item'      => __( 'Insertar dentro de Portainjerto', 'nboutique' ),
		'uploaded_to_this_item' => __( 'Subido a este Portainjerto', 'nboutique' ),
		'items_list'            => __( 'Lista de Portainjertos', 'nboutique' ),
		'items_list_navigation' => __( 'Navegación de Lista de Portainjerto', 'nboutique' ),
		'filter_items_list'     => __( 'Filtrar Portainjerto', 'nboutique' ),
	);
	$args = array(
		'label'                 => __( 'Portainjerto', 'nboutique' ),
		'description'           => __( 'Portainjertos disponibles para mostrar en el sitio web', 'nboutique' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'thumbnail', 'revisions' ),
		'taxonomies'            => array( 'category', 'post_tag' ),
		'hierarchical'          => true,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'menu_icon'             => 'dashicons-portainjerto',
		'show_in_admin_bar'     => false,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'page',
	);
	register_post_type( 'portainjerto', $args );

}
add_action( 'init', 'portainjertos_post_type', 0 );


// Tipos de Plantas Post Type
function plantas_post_type() {

	$labels = array(
		'name'                  => _x( 'Tipos de Plantas', 'Post Type General Name', 'nboutique' ),
		'singular_name'         => _x( 'Tipo de Planta', 'Post Type Singular Name', 'nboutique' ),
		'menu_name'             => __( 'Tipos de Plantas', 'nboutique' ),
		'name_admin_bar'        => __( 'Tipo de Planta', 'nboutique' ),
		'archives'              => __( 'Archivos de Plantas', 'nboutique' ),
		'attributes'            => __( 'Atributos de Plantas', 'nboutique' ),
		'parent_item_colon'     => __( 'Planta padre:', 'nboutique' ),
		'all_items'             => __( 'Todas las plantas', 'nboutique' ),
		'add_new_item'          => __( 'Añadir Nuevo Tipo de Planta', 'nboutique' ),
		'add_new'               => __( 'Añadir Nuevo', 'nboutique' ),
		'new_item'              => __( 'Nuevo Tipo de Planta', 'nboutique' ),
		'edit_item'             => __( 'Editar Tipo de Planta', 'nboutique' ),
		'update_item'           => __( 'Actualizar Tipo de Planta', 'nboutique' ),
		'view_item'             => __( 'Ver Tipo de Planta', 'nboutique' ),
		'view_items'            => __( 'Ver Tipos de Plantasq', 'nboutique' ),
		'search_items'          => __( 'Buscar Tipos de Plantas', 'nboutique' ),
		'not_found'             => __( 'No Encontrado', 'nboutique' ),
		'not_found_in_trash'    => __( 'Nada en papelera', 'nboutique' ),
		'featured_image'        => __( 'Imagen destacada', 'nboutique' ),
		'set_featured_image'    => __( 'Establecer imagen destacada', 'nboutique' ),
		'remove_featured_image' => __( 'Eliminar imagen destacada', 'nboutique' ),
		'use_featured_image'    => __( 'Usar como imagen destacada', 'nboutique' ),
		'insert_into_item'      => __( 'Insertar dentro de Tipo de Planta', 'nboutique' ),
		'uploaded_to_this_item' => __( 'Actualizar a este tipo de planta', 'nboutique' ),
		'items_list'            => __( 'Lista de Tipos de Plantasq', 'nboutique' ),
		'items_list_navigation' => __( 'Navegación de Tipos de Plantas', 'nboutique' ),
		'filter_items_list'     => __( 'Filtrar Tipo de Planta', 'nboutique' ),
	);
	$args = array(
		'label'                 => __( 'Tipo de Planta', 'nboutique' ),
		'description'           => __( 'Tipos de Plantas para mostrar en el sitio web', 'nboutique' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'thumbnail', 'revisions' ),
		'taxonomies'            => array( 'category', 'post_tag' ),
		'hierarchical'          => true,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'menu_icon'             => 'dashicons-planta',
		'show_in_admin_bar'     => false,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'page',
	);
	register_post_type( 'plantas', $args );

}
add_action( 'init', 'plantas_post_type', 0 );


// Variedades Post Type
function variedades_post_type() {

	$labels = array(
		'name'                  => _x( 'Variedades', 'Post Type General Name', 'nboutique' ),
		'singular_name'         => _x( 'Variedad', 'Post Type Singular Name', 'nboutique' ),
		'menu_name'             => __( 'Variedades', 'nboutique' ),
		'name_admin_bar'        => __( 'Variedad', 'nboutique' ),
		'archives'              => __( 'Archivo de Variedades', 'nboutique' ),
		'attributes'            => __( 'Atributos de Variedad', 'nboutique' ),
		'parent_item_colon'     => __( 'Variedad padre:', 'nboutique' ),
		'all_items'             => __( 'Todas las Variedades', 'nboutique' ),
		'add_new_item'          => __( 'Añadir Nueva Variedad', 'nboutique' ),
		'add_new'               => __( 'Añadir Nueva', 'nboutique' ),
		'new_item'              => __( 'Nueva Variedad', 'nboutique' ),
		'edit_item'             => __( 'Editar Variedad', 'nboutique' ),
		'update_item'           => __( 'Actualizar Variedad', 'nboutique' ),
		'view_item'             => __( 'Ver Variedad', 'nboutique' ),
		'view_items'            => __( 'Ver Variedades', 'nboutique' ),
		'search_items'          => __( 'Buscar Variedades', 'nboutique' ),
		'not_found'             => __( 'No encontrado', 'nboutique' ),
		'not_found_in_trash'    => __( 'Nada encontrado en papelera', 'nboutique' ),
		'featured_image'        => __( 'Imagen destacada', 'nboutique' ),
		'set_featured_image'    => __( 'Establecer imagen destacada', 'nboutique' ),
		'remove_featured_image' => __( 'Eliminar imagen destacada', 'nboutique' ),
		'use_featured_image'    => __( 'Usar como imagen destacada', 'nboutique' ),
		'insert_into_item'      => __( 'Insertar dentro de Variedad', 'nboutique' ),
		'uploaded_to_this_item' => __( 'Actualizar a esta Variedad', 'nboutique' ),
		'items_list'            => __( 'Lista de Variedades', 'nboutique' ),
		'items_list_navigation' => __( 'Navegación de Lista de Variedades', 'nboutique' ),
		'filter_items_list'     => __( 'Filtrar Variedades', 'nboutique' ),
	);
	$args = array(
		'label'                 => __( 'Variedad', 'nboutique' ),
		'description'           => __( 'Variedades para mostrar en el sitio web', 'nboutique' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'thumbnail', 'revisions' ),
		'taxonomies'            => array( 'category', 'post_tag' ),
		'hierarchical'          => true,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'menu_icon'             => 'dashicons-variedad',
		'show_in_admin_bar'     => false,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'page',
	);
	register_post_type( 'variedades', $args );

}
add_action( 'init', 'variedades_post_type', 0 );

// Servicios Post Type
// Register Custom Post Type
function servicios_post_type() {

	$labels = array(
		'name'                  => _x( 'Servicios', 'Post Type General Name', 'nboutique' ),
		'singular_name'         => _x( 'Servicio', 'Post Type Singular Name', 'nboutique' ),
		'menu_name'             => __( 'Servicios', 'nboutique' ),
		'name_admin_bar'        => __( 'Servicios', 'nboutique' ),
		'archives'              => __( 'Archivo de Servicios', 'nboutique' ),
		'attributes'            => __( 'Atributos de Servicios', 'nboutique' ),
		'parent_item_colon'     => __( 'Servicio padre:', 'nboutique' ),
		'all_items'             => __( 'Todos los Servicios', 'nboutique' ),
		'add_new_item'          => __( 'Añadir Nuevo Servicio', 'nboutique' ),
		'add_new'               => __( 'Añadir Nuevo', 'nboutique' ),
		'new_item'              => __( 'Nuevo Servicio', 'nboutique' ),
		'edit_item'             => __( 'Editar Servicio', 'nboutique' ),
		'update_item'           => __( 'Actualizar Servicio', 'nboutique' ),
		'view_item'             => __( 'Ver Servicio', 'nboutique' ),
		'view_items'            => __( 'Ver Servicios', 'nboutique' ),
		'search_items'          => __( 'Buscar Servicio', 'nboutique' ),
		'not_found'             => __( 'No encontrado', 'nboutique' ),
		'not_found_in_trash'    => __( 'Nada encontrado en papelera', 'nboutique' ),
		'featured_image'        => __( 'Imagen destacada', 'nboutique' ),
		'set_featured_image'    => __( 'Establecer imagen destacada', 'nboutique' ),
		'remove_featured_image' => __( 'Eliminar imagen destacada', 'nboutique' ),
		'use_featured_image'    => __( 'Usar como imagen destacada', 'nboutique' ),
		'insert_into_item'      => __( 'Insertar', 'nboutique' ),
		'uploaded_to_this_item' => __( 'Actualizar', 'nboutique' ),
		'items_list'            => __( 'Lista de Servicios', 'nboutique' ),
		'items_list_navigation' => __( 'NavegaciónLista de Servicios', 'nboutique' ),
		'filter_items_list'     => __( 'Filtrar Lista de Servicios', 'nboutique' ),
	);
	$args = array(
		'label'                 => __( 'Servicio', 'nboutique' ),
		'description'           => __( 'Servicios para mostar en el sitio web', 'nboutique' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor', 'thumbnail', 'revisions' ),
		'taxonomies'            => array( 'category', 'post_tag' ),
		'hierarchical'          => true,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'menu_icon'             => 'dashicons-servicios',
		'show_in_admin_bar'     => false,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'page',
	);
	register_post_type( 'servicios', $args );

}
add_action( 'init', 'servicios_post_type', 0 );


// Equipo Post Type
function equipo_post_type() {

	$labels = array(
		'name'                  => _x( 'Equipo', 'Post Type General Name', 'nboutique' ),
		'singular_name'         => _x( 'Miembro del Equipo', 'Post Type Singular Name', 'nboutique' ),
		'menu_name'             => __( 'Miembros del Equipo', 'nboutique' ),
		'name_admin_bar'        => __( 'Equipo', 'nboutique' ),
		'archives'              => __( 'Miembros del Equipo', 'nboutique' ),
		'attributes'            => __( 'Atributos', 'nboutique' ),
		'parent_item_colon'     => __( 'Miembro padre', 'nboutique' ),
		'all_items'             => __( 'Todos los Miembros', 'nboutique' ),
		'add_new_item'          => __( 'Añadir Nuevo Miembro', 'nboutique' ),
		'add_new'               => __( 'Añadir Nuevo', 'nboutique' ),
		'new_item'              => __( 'Nuevo Miembro', 'nboutique' ),
		'edit_item'             => __( 'Editar Miembro', 'nboutique' ),
		'update_item'           => __( 'Actualizar Miembro', 'nboutique' ),
		'view_item'             => __( 'Ver Miembro', 'nboutique' ),
		'view_items'            => __( 'Ver Miembros', 'nboutique' ),
		'search_items'          => __( 'Buscar Miembros', 'nboutique' ),
		'not_found'             => __( 'No encontrado', 'nboutique' ),
		'not_found_in_trash'    => __( 'Nada encontrado en papelera', 'nboutique' ),
		'featured_image'        => __( 'Imagen destacada', 'nboutique' ),
		'set_featured_image'    => __( 'Establecer imagen destacada', 'nboutique' ),
		'remove_featured_image' => __( 'Eliminar imagen destacada', 'nboutique' ),
		'use_featured_image'    => __( 'Usar como imagen destacada', 'nboutique' ),
		'insert_into_item'      => __( 'Insertar', 'nboutique' ),
		'uploaded_to_this_item' => __( 'Actualizar', 'nboutique' ),
		'items_list'            => __( 'Lista de Miembros', 'nboutique' ),
		'items_list_navigation' => __( 'Lista de miembros', 'nboutique' ),
		'filter_items_list'     => __( 'Filtrar', 'nboutique' ),
	);
	$args = array(
		'label'                 => __( 'Miembro del Equipo', 'nboutique' ),
		'description'           => __( 'Equipo de Viveros El Maitén para mostrar en el sitio web', 'nboutique' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor', 'thumbnail', 'custom-fields' ),
		'taxonomies'            => array( 'category', 'post_tag' ),
		'hierarchical'          => true,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'menu_icon'             => 'dashicons-equipo',
		'show_in_admin_bar'     => false,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,
		'exclude_from_search'   => true,
		'publicly_queryable'    => true,
		'capability_type'       => 'page',
	);
	register_post_type( 'equipo', $args );

}
add_action( 'init', 'equipo_post_type', 0 );
