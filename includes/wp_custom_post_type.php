<?php

function portafolio() {

    $labels = array(
        'name'                  => _x( 'Portafolios', 'Post Type General Name', 'gespetfood' ),
        'singular_name'         => _x( 'Portafolio', 'Post Type Singular Name', 'gespetfood' ),
        'menu_name'             => __( 'Portafolio', 'gespetfood' ),
        'name_admin_bar'        => __( 'Portafolio', 'gespetfood' ),
        'archives'              => __( 'Archivo de Portafolio', 'gespetfood' ),
        'attributes'            => __( 'Atributos de Portafolio', 'gespetfood' ),
        'parent_item_colon'     => __( 'Portafolio Padre:', 'gespetfood' ),
        'all_items'             => __( 'Todos los Items', 'gespetfood' ),
        'add_new_item'          => __( 'Agregar Nuevo Item', 'gespetfood' ),
        'add_new'               => __( 'Agregar Nuevo', 'gespetfood' ),
        'new_item'              => __( 'Nuevo Item', 'gespetfood' ),
        'edit_item'             => __( 'Editar Item', 'gespetfood' ),
        'update_item'           => __( 'Actualizar Item', 'gespetfood' ),
        'view_item'             => __( 'Ver Item', 'gespetfood' ),
        'view_items'            => __( 'Ver Portafolio', 'gespetfood' ),
        'search_items'          => __( 'Buscar en Portafolio', 'gespetfood' ),
        'not_found'             => __( 'No hay Resultados', 'gespetfood' ),
        'not_found_in_trash'    => __( 'No hay Resultados en la Papelera', 'gespetfood' ),
        'featured_image'        => __( 'Imagen Destacada', 'gespetfood' ),
        'set_featured_image'    => __( 'Colocar Imagen Destacada', 'gespetfood' ),
        'remove_featured_image' => __( 'Remover Imagen Destacada', 'gespetfood' ),
        'use_featured_image'    => __( 'Usar como Imagen Destacada', 'gespetfood' ),
        'insert_into_item'      => __( 'Insertar dentro de Item', 'gespetfood' ),
        'uploaded_to_this_item' => __( 'Cargado a este item', 'gespetfood' ),
        'items_list'            => __( 'Listado del Portafolio', 'gespetfood' ),
        'items_list_navigation' => __( 'Navegación de Listado del Portafolio', 'gespetfood' ),
        'filter_items_list'     => __( 'Filtro de Listado del Portafolio', 'gespetfood' ),
    );
    $args = array(
        'label'                 => __( 'Portafolio', 'gespetfood' ),
        'description'           => __( 'Portafolio de Desarrollos', 'gespetfood' ),
        'labels'                => $labels,
        'supports'              => array( 'title', 'editor', 'excerpt', 'thumbnail', 'comments', 'trackbacks', 'custom-fields', ),
        'taxonomies'            => array( 'custom_portafolio' ),
        'hierarchical'          => false,
        'public'                => true,
        'show_ui'               => true,
        'show_in_menu'          => true,
        'menu_position'         => 5,
        'menu_icon'             => 'dashicons-testimonial',
        'show_in_admin_bar'     => true,
        'show_in_nav_menus'     => true,
        'can_export'            => true,
        'has_archive'           => true,
        'exclude_from_search'   => false,
        'publicly_queryable'    => true,
        'capability_type'       => 'post',
        'show_in_rest'          => true,
    );
    register_post_type( 'portafolio', $args );

}
add_action( 'init', 'portafolio', 0 );
