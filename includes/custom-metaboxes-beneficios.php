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

/* BENEFICIOS */
$cmb_beneficios_list = new_cmb2_box( array(
    'id'            => $prefix . 'beneficios_list_metabox',
    'title'         => esc_html__( 'Beneficios: Botones de Beneficios', 'gespetfood' ),
    'object_types'  => array( 'page' ), // Post type
    'show_on'      => array( 'key' => 'page-template', 'value' => 'templates/templates-beneficios.php' ),
    'context'    => 'normal',
    'priority'   => 'high',
    'show_names' => true, // Show field names on the left
    'closed'     => false, // true to keep the metabox closed by default
) );

$group_field_id = $cmb_beneficios_list->add_field( array(
    'id'          => $prefix . 'benefits_group',
    'type'        => 'group',
    'description' => __( 'Lista de Beneficios', 'autols' ),
    'options'     => array(
        'group_title'       => __( 'Beneficio {#}', 'autols' ),
        'add_button'        => __( 'Agregar Beneficio', 'autols' ),
        'remove_button'     => __( 'Remover Beneficio', 'autols' ),
        'sortable'          => true,
        'closed'         => true,
        'remove_confirm' => esc_html__( '¿Estas seguro de eliminar este Beneficio?', 'autols' )
    )
) );

$cmb_beneficios_list->add_group_field( $group_field_id, array(
    'id'   => 'title',
    'name'      => esc_html__( 'Título del Beneficio', 'gespetfood' ),
    'desc'      => esc_html__( 'Ingrese aquí un texto que describa el Beneficio', 'gespetfood' ),
    'type'    => 'text',
) );

$cmb_beneficios_list->add_group_field( $group_field_id, array(
    'id'   => 'desc',
    'name'      => esc_html__( 'Descripción del Beneficio', 'gespetfood' ),
    'desc'      => esc_html__( 'Ingrese aquí un texto que describa el Beneficio', 'gespetfood' ),
    'type'    => 'wysiwyg',
    'options' => array(
        'textarea_rows' => get_option('default_post_edit_rows', 4),
        'teeny' => false
    )
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
    'id'      => $prefix . 'beneficios_text_title_2',
    'name'      => esc_html__( 'Título principal', 'gespetfood' ),
    'desc'      => esc_html__( 'Ingrese aquí el Título del Descanso', 'gespetfood' ),
    'type'    => 'wysiwyg',
    'options' => array(
        'textarea_rows' => get_option('default_post_edit_rows', 4),
        'teeny' => false
    )
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
