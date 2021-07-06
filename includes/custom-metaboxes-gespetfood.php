<?php 
/* gespetfood SLIDER */
$cmb_gespetfood_slider = new_cmb2_box( array(
    'id'            => $prefix . 'gespetfood_slider',
    'title'         => esc_html__( 'gespetfood: Slider Revolution', 'gespetfood' ),
    'object_types'  => array( 'page' ), // Post type
    'show_on'      => array( 'key' => 'page-template', 'value' => 'templates/templates-gespetfood.php' ),
    'context'    => 'normal',
    'priority'   => 'high',
    'show_names' => true, // Show field names on the left
    'closed'     => false, // true to keep the metabox closed by default
) );

$cmb_gespetfood_slider->add_field( array(
    'id'         => $prefix . 'slider_rev',
    'name'       => esc_html__( 'Slider Revolution', 'gespetfood' ),
    'desc'       => esc_html__( 'Seleccione el Slider a usar en el gespetfood', 'gespetfood' ),
    'type'             => 'select',
    'show_option_none' => true,
    'default'          => '',
    'options'          => $array_sliders
) );

/* ABOUT */ 
$cmb_gespetfood_about = new_cmb2_box( array(
    'id'            => $prefix . 'gespetfood_about',
    'title'         => esc_html__( 'gespetfood: About', 'gespetfood' ),
    'object_types'  => array( 'page' ), // Post type
    'show_on'      => array( 'key' => 'page-template', 'value' => 'templates/templates-gespetfood.php' ),
    'context'    => 'normal',
    'priority'   => 'high',
    'show_names' => true, // Show field names on the left
    'closed'     => false, // true to keep the metabox closed by default
) );


$cmb_gespetfood_about->add_field( array(
    'id'      => $prefix . 'gespetfood_about_content',
    'name'      => esc_html__( 'Texto principal', 'gespetfood' ),
    'desc'      => esc_html__( 'Ingrese aquí el texto del Descanso', 'gespetfood' ),
    'type'    => 'wysiwyg',
    'options' => array(
        'textarea_rows' => get_option('default_post_edit_rows', 4),
        'teeny' => false
    )
) );

$cmb_gespetfood_about->add_field( array(
    'id'      => $prefix . 'gespetfood_about_img',
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

$cmb_gespetfood_about->add_field( array(
    'id'      => $prefix . 'gespetfood_about_brochure',
    'name'      => esc_html__( 'URL del Brochure de productos', 'gespetfood' ),
    'desc'      => esc_html__( 'Ingrese aquí el link URL del Brochure de productos', 'gespetfood' ),
    'type'    => 'text_url',
) );

/* BENEFITS */
$cmb_gespetfood_benefits = new_cmb2_box( array(
    'id'            => $prefix . 'gespetfood_benefits',
    'title'         => esc_html__( 'gespetfood: Beneficios', 'gespetfood' ),
    'object_types'  => array( 'page' ), // Post type
    'show_on'      => array( 'key' => 'page-template', 'value' => 'templates/templates-gespetfood.php' ),
    'context'    => 'normal',
    'priority'   => 'high',
    'show_names' => true, // Show field names on the left
    'closed'     => false, // true to keep the metabox closed by default
) );

$group_field_id = $cmb_gespetfood_benefits->add_field( array(
    'id'          => $prefix . 'benefits_group',
    'type'        => 'group',
    'description' => __( 'Beneficios', 'autols' ),
    'options'     => array(
        'group_title'       => __( 'Beneficio {#}', 'autols' ),
        'add_button'        => __( 'Agregar Beneficio', 'autols' ),
        'remove_button'     => __( 'Remover Beneficio', 'autols' ),
        'sortable'          => true,
        'closed'         => true,
        'remove_confirm' => esc_html__( '¿Estas seguro de eliminar este Beneficio?', 'autols' )
    )
) );

$cmb_gespetfood_benefits->add_group_field( $group_field_id, array(
    'id'   => 'icon',
    'name'      => esc_html__( 'Ícono', 'autols' ),
    'desc'      => esc_html__( 'Agregue un icono para este Beneficio', 'autols' ),
    'type'    => 'file',
    'options' => array(
        'url' => false
    ),
    'text'    => array(
        'add_upload_file_text' => esc_html__( 'Cargar Icono', 'autols' ),
    ),
    'query_args' => array(
        'type' => array(
            'image/gif',
            'image/jpeg',
            'image/png'
        )
    ),
    'preview_size' => 'avatar'
) );

$cmb_gespetfood_benefits->add_group_field( $group_field_id, array(
    'id'   => 'desc',
    'name'      => esc_html__( 'Descripción del Beneficio', 'gespetfood' ),
    'desc'      => esc_html__( 'Ingrese aquí un texto que describa el Beneficio', 'gespetfood' ),
    'type'    => 'text',
) );

/* TEAM */ 
$cmb_gespetfood_team = new_cmb2_box( array(
    'id'            => $prefix . 'gespetfood_team',
    'title'         => esc_html__( 'gespetfood: Equipo', 'gespetfood' ),
    'object_types'  => array( 'page' ), // Post type
    'show_on'      => array( 'key' => 'page-template', 'value' => 'templates/templates-gespetfood.php' ),
    'context'    => 'normal',
    'priority'   => 'high',
    'show_names' => true, // Show field names on the left
    'closed'     => false, // true to keep the metabox closed by default
) );


$cmb_gespetfood_team->add_field( array(
    'id'      => $prefix . 'gespetfood_team_content',
    'name'      => esc_html__( 'Texto principal', 'gespetfood' ),
    'desc'      => esc_html__( 'Ingrese aquí el texto del Descanso', 'gespetfood' ),
    'type'    => 'wysiwyg',
    'options' => array(
        'textarea_rows' => get_option('default_post_edit_rows', 4),
        'teeny' => false
    )
) );



$cmb_gespetfood_team->add_field( array(
    'id'      => $prefix . 'gespetfood_team_img',
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

$group_field_id = $cmb_gespetfood_team->add_field( array(
    'id'          => $prefix . 'gespetfood_logo_list',
    'type'        => 'group',
    'description' => __( 'Slides inside this Slider', 'maxicon' ),
    'options'     => array(
        'group_title'       => __( 'Logo {#}', 'maxicon' ),
        'add_button'        => __( 'Add other Logo', 'maxicon' ),
        'remove_button'     => __( 'Remove Logo', 'maxicon' ),
        'sortable'          => true,
        'closed'         => true,
        'remove_confirm' => esc_html__( 'Are you sure to remove this slide?', 'maxicon' )
    )
) );

$cmb_gespetfood_team->add_group_field( $group_field_id, array(
    'id'   => 'bg_image',
    'name'      => esc_html__( 'Logo Image', 'maxicon' ),
    'desc'      => esc_html__( 'Upload a Logo', 'maxicon' ),
    'type'    => 'file',

    'options' => array(
        'url' => false
    ),
    'text'    => array(
        'add_upload_file_text' => esc_html__( 'Upload Background', 'maxicon' ),
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

$cmb_gespetfood_team->add_group_field( $group_field_id, array(
    'id'   => 'url',
    'name'      => esc_html__( 'Logo URL', 'maxicon' ),
    'desc'      => esc_html__( 'Enter a descriptive title for all slides', 'maxicon' ),
    'type' => 'text_url'
) );

/* SEGUNDO TEXTO */ 
$cmb_beneficios_about2 = new_cmb2_box( array(
    'id'            => $prefix . 'gespetfood_beneficios_text2_metabox',
    'title'         => esc_html__( 'Beneficios: Texto 2', 'gespetfood' ),
    'object_types'  => array( 'page' ), // Post type
    'show_on'      => array( 'key' => 'page-template', 'value' => 'templates/templates-gespetfood.php' ),
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