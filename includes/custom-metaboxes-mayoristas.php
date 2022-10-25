<?php

/* MAYORISTAS SLIDER */
$cmb_mayoristas_slider = new_cmb2_box(array(
    'id'            => $prefix . 'mayoristas_slider',
    'title'         => esc_html__('beneficios: Slider Revolution', 'gespetfood'),
    'object_types'  => array( 'page' ), // Post type
    'show_on'      => array( 'key' => 'page-template', 'value' => 'templates/templates-mayoristas.php' ),
    'context'    => 'normal',
    'priority'   => 'high',
    'show_names' => true, // Show field names on the left
    'closed'     => false, // true to keep the metabox closed by default
));

$cmb_mayoristas_slider->add_field(array(
    'id'         => $prefix . 'slider_rev',
    'name'       => esc_html__('Slider Revolution', 'gespetfood'),
    'desc'       => esc_html__('Seleccione el Slider a usar en el beneficios', 'gespetfood'),
    'type'             => 'select',
    'show_option_none' => true,
    'default'          => '',
    'options'          => $array_sliders
));

/* MAYORISTAS BROCHURE */
$cmb_mayoristas_link = new_cmb2_box(array(
    'id'            => $prefix . 'mayoristas_link',
    'title'         => esc_html__('Informacion de Archivo', 'gespetfood'),
    'object_types'  => array( 'page' ), // Post type
    'show_on'      => array( 'key' => 'page-template', 'value' => 'templates/templates-mayoristas.php' ),
    'context'    => 'normal',
    'priority'   => 'high',
    'show_names' => true, // Show field names on the left
    'closed'     => false, // true to keep the metabox closed by default
));

$cmb_mayoristas_link->add_field(array(
    'id'      => $prefix . 'mayoristas_link_url',
    'name'      => esc_html__('PDF descarga', 'gespetfood'),
    'desc'      => esc_html__('Ingrese una PDF apropiado para la sección', 'gespetfood'),
    'type'    => 'file',
    'options' => array(
        'url' => false
    ),
    'text'    => array(
        'add_upload_file_text' => esc_html__('Cargar PDF de Sección', 'gespetfood'),
    ),
    'preview_size' => 'medium'
));
