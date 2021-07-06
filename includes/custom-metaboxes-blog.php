<?php 
/* BLOG AND POSTS SLIDER */
$cmb_blog_slider = new_cmb2_box( array(
    'id'            => $prefix . 'blog_slider',
    'title'         => esc_html__( 'Blog: Slider Revolution', 'gespetfood' ),
    'object_types'  => array( 'page' ), // Post type
    'show_on'      => array( 'key' => 'slug', 'value' => array( 'blog' ) ),
    'context'    => 'normal',
    'priority'   => 'high',
    'show_names' => true, // Show field names on the left
    'closed'     => false, // true to keep the metabox closed by default
) );

$cmb_blog_slider->add_field( array(
    'id'         => $prefix . 'slider_rev',
    'name'       => esc_html__( 'Slider Revolution', 'gespetfood' ),
    'desc'       => esc_html__( 'Seleccione el Slider a usar en el gespetfood', 'gespetfood' ),
    'type'             => 'select',
    'show_option_none' => true,
    'default'          => '',
    'options'          => $array_sliders
));

/* BLOG CONTENT */
$cmb_blog_content = new_cmb2_box( array(
    'id'            => $prefix . 'blog_content_metabox',
    'title'         => esc_html__( 'Blog: Texto de Introducción', 'gespetfood' ),
    'object_types'  => array( 'page' ), // Post type
    'show_on'      => array( 'key' => 'slug', 'value' => array( 'blog' ) ),
    'context'    => 'normal',
    'priority'   => 'high',
    'show_names' => true, // Show field names on the left
    'closed'     => false, // true to keep the metabox closed by default
) );

$cmb_blog_content->add_field( array(
    'id'      => $prefix . 'blog_content',
    'name'      => esc_html__( 'Contenido principal', 'gespetfood' ),
    'desc'      => esc_html__( 'Ingrese aquí el Título del Descanso', 'gespetfood' ),
    'type'    => 'wysiwyg',
    'options' => array(
        'textarea_rows' => get_option('default_post_edit_rows', 6),
        'teeny' => false
    )
) );