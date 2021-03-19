<?php 
/* BENEFICIOS SLIDER */
$cmb_beneficios_slider = new_cmb2_box( array(
    'id'            => $prefix . 'beneficios_slider',
    'title'         => esc_html__( 'beneficios: Slider Revolution', 'gespetfood' ),
    'object_types'  => array( 'page' ), // Post type
    'show_on'      => array( 'key' => 'page-template', 'value' => 'templates/templates-beneficios.php' ),
    'context'    => 'normal',
    'priority'   => 'high',
    'show_names' => true, // Show field names on the left
    'closed'     => false, // true to keep the metabox closed by default
) );

$cmb_beneficios_slider->add_field( array(
    'id'         => $prefix . 'slider_rev',
    'name'       => esc_html__( 'Slider Revolution', 'gespetfood' ),
    'desc'       => esc_html__( 'Seleccione el Slider a usar en el beneficios', 'gespetfood' ),
    'type'             => 'select',
    'show_option_none' => true,
    'default'          => '',
    'options'          => $array_sliders
) );

/* PRIMER TEXTO */ 
$cmb_beneficios_about = new_cmb2_box( array(
    'id'            => $prefix . 'beneficios_text1_metabox',
    'title'         => esc_html__( 'Beneficios: Texto 1', 'gespetfood' ),
    'object_types'  => array( 'page' ), // Post type
    'show_on'      => array( 'key' => 'page-template', 'value' => 'templates/templates-beneficios.php' ),
    'context'    => 'normal',
    'priority'   => 'high',
    'show_names' => true, // Show field names on the left
    'closed'     => false, // true to keep the metabox closed by default
) );

$cmb_beneficios_about->add_field( array(
    'id'      => $prefix . 'beneficios_text_content_1',
    'name'      => esc_html__( 'Texto principal', 'gespetfood' ),
    'desc'      => esc_html__( 'Ingrese aquí el texto del Descanso', 'gespetfood' ),
    'type'    => 'wysiwyg',
    'options' => array(
        'textarea_rows' => get_option('default_post_edit_rows', 4),
        'teeny' => false
    )
) );

$cmb_beneficios_about->add_field( array(
    'id'      => $prefix . 'beneficios_image_content_1',
    'name'      => esc_html__( 'Imagen de Sección', 'gespetfood' ),
    'desc'      => esc_html__( 'Ingrese una Imagen apropiada para la sección', 'gespetfood' ),
    'type'    => 'file',
    'options' => array(
        'url' => false
    ),
    'text'    => array(
        'add_upload_file_text' => esc_html__( 'Cargar Imagen de Sección', 'gespetfood' ),
    ),
    'query_args' => array(
        'type' => array(
            'image/gif',
            'image/jpeg',
            'image/png'
        )
    ),
    'preview_size' => 'medium'
) );

/* SEGUNDO TEXTO */ 
$cmb_beneficios_about2 = new_cmb2_box( array(
    'id'            => $prefix . 'beneficios_text2_metabox',
    'title'         => esc_html__( 'Beneficios: Texto 2', 'gespetfood' ),
    'object_types'  => array( 'page' ), // Post type
    'show_on'      => array( 'key' => 'page-template', 'value' => 'templates/templates-beneficios.php' ),
    'context'    => 'normal',
    'priority'   => 'high',
    'show_names' => true, // Show field names on the left
    'closed'     => false, // true to keep the metabox closed by default
) );

$cmb_beneficios_about2->add_field( array(
    'id'      => $prefix . 'beneficios_text_content_2',
    'name'      => esc_html__( 'Texto principal', 'gespetfood' ),
    'desc'      => esc_html__( 'Ingrese aquí el texto del Descanso', 'gespetfood' ),
    'type'    => 'wysiwyg',
    'options' => array(
        'textarea_rows' => get_option('default_post_edit_rows', 4),
        'teeny' => false
    )
) );

$cmb_beneficios_about2->add_field( array(
    'id'      => $prefix . 'beneficios_image_content_2',
    'name'      => esc_html__( 'Imagen de Sección', 'gespetfood' ),
    'desc'      => esc_html__( 'Ingrese una Imagen apropiada para la sección', 'gespetfood' ),
    'type'    => 'file',
    'options' => array(
        'url' => false
    ),
    'text'    => array(
        'add_upload_file_text' => esc_html__( 'Cargar Imagen de Sección', 'gespetfood' ),
    ),
    'query_args' => array(
        'type' => array(
            'image/gif',
            'image/jpeg',
            'image/png'
        )
    ),
    'preview_size' => 'medium'
) );

/* TERCER TEXTO */ 
$cmb_beneficios_about3 = new_cmb2_box( array(
    'id'            => $prefix . 'beneficios_text3_metabox',
    'title'         => esc_html__( 'Beneficios: Texto 3', 'gespetfood' ),
    'object_types'  => array( 'page' ), // Post type
    'show_on'      => array( 'key' => 'page-template', 'value' => 'templates/templates-beneficios.php' ),
    'context'    => 'normal',
    'priority'   => 'high',
    'show_names' => true, // Show field names on the left
    'closed'     => false, // true to keep the metabox closed by default
) );

$cmb_beneficios_about3->add_field( array(
    'id'      => $prefix . 'beneficios_text_content_3',
    'name'      => esc_html__( 'Texto principal', 'gespetfood' ),
    'desc'      => esc_html__( 'Ingrese aquí el texto del Descanso', 'gespetfood' ),
    'type'    => 'wysiwyg',
    'options' => array(
        'textarea_rows' => get_option('default_post_edit_rows', 4),
        'teeny' => false
    )
) );

$cmb_beneficios_about3->add_field( array(
    'id'      => $prefix . 'beneficios_image_content_3',
    'name'      => esc_html__( 'Imagen de Sección', 'gespetfood' ),
    'desc'      => esc_html__( 'Ingrese una Imagen apropiada para la sección', 'gespetfood' ),
    'type'    => 'file',
    'options' => array(
        'url' => false
    ),
    'text'    => array(
        'add_upload_file_text' => esc_html__( 'Cargar Imagen de Sección', 'gespetfood' ),
    ),
    'query_args' => array(
        'type' => array(
            'image/gif',
            'image/jpeg',
            'image/png'
        )
    ),
    'preview_size' => 'medium'
) );
