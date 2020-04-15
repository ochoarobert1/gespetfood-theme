<?php 
/* CONTACT SLIDER */
$cmb_contact_slider = new_cmb2_box( array(
    'id'            => $prefix . 'contact_slider',
    'title'         => esc_html__( 'Contact: Slider Revolution', 'gespetfood' ),
    'object_types'  => array( 'page' ), // Post type
    'show_on'      => array( 'key' => 'page-template', 'value' => 'templates/templates-contact.php' ),
    'context'    => 'normal',
    'priority'   => 'high',
    'show_names' => true, // Show field names on the left
    'closed'     => false, // true to keep the metabox closed by default
) );

$cmb_contact_slider->add_field( array(
    'id'         => $prefix . 'slider_rev',
    'name'       => esc_html__( 'Slider Revolution', 'gespetfood' ),
    'desc'       => esc_html__( 'Seleccione el Slider a usar en el Contacto', 'gespetfood' ),
    'type'             => 'select',
    'show_option_none' => true,
    'default'          => '',
    'options'          => $array_sliders
) );

/* EXTRA INFO */
$cmb_contact_info = new_cmb2_box( array(
    'id'            => $prefix . 'contact_info',
    'title'         => esc_html__( 'Contact: Info Extra', 'gespetfood' ),
    'object_types'  => array( 'page' ), // Post type
    'show_on'      => array( 'key' => 'page-template', 'value' => 'templates/templates-contact.php' ),
    'context'    => 'normal',
    'priority'   => 'high',
    'show_names' => true, // Show field names on the left
    'closed'     => false, // true to keep the metabox closed by default
) );

$cmb_contact_info->add_field( array(
    'id'      => $prefix . 'contact_info_content',
    'name'      => esc_html__( 'Texto principal', 'gespetfood' ),
    'desc'      => esc_html__( 'Ingrese aquí el texto del Descanso', 'gespetfood' ),
    'type'    => 'wysiwyg',
    'options' => array(
        'textarea_rows' => get_option('default_post_edit_rows', 4),
        'teeny' => false
    )
) );

/* EMBED MAP */
$cmb_contact_embed = new_cmb2_box( array(
    'id'            => $prefix . 'contact_embed',
    'title'         => esc_html__( 'Contact: Embed Map', 'gespetfood' ),
    'object_types'  => array( 'page' ), // Post type
    'show_on'      => array( 'key' => 'page-template', 'value' => 'templates/templates-contact.php' ),
    'context'       => 'normal',
    'priority'   => 'high',
    'show_names' => true, // Show field names on the left
    'closed'     => false, // true to keep the metabox closed by default
) );

$cmb_contact_embed->add_field( array(
    'id'        => $prefix . 'contact_embed_map',
    'name'      => esc_html__( 'Embed de Google Maps', 'gespetfood' ),
    'desc'      => esc_html__( 'Ingrese aquí el texto del Descanso', 'gespetfood' ),
    'type'      => 'textarea_code'
) );