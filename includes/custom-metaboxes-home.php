<?php 
/* HOME SLIDER */
$cmb_home_slider = new_cmb2_box( array(
    'id'            => $prefix . 'main_home_slider',
    'title'         => esc_html__( 'Inicio: Slider Revolution', 'gespetfood' ),
    'object_types'  => array( 'page' ), // Post type
    'show_on'      => array( 'key' => 'page-template', 'value' => 'templates/page-home.php' ),
    'context'    => 'normal',
    'priority'   => 'high',
    'show_names' => true, // Show field names on the left
    'closed'     => false, // true to keep the metabox closed by default
) );

$cmb_home_slider->add_field( array(
    'id'         => $prefix . 'slider_rev',
    'name'       => esc_html__( 'Slider Revolution', 'gespetfood' ),
    'desc'       => esc_html__( 'Seleccione el Slider a usar en el gespetfood', 'gespetfood' ),
    'type'             => 'select',
    'show_option_none' => true,
    'default'          => '',
    'options'          => $array_sliders
) );

/* HOME ADS BANNER */
$cmb_home_ads_banner = new_cmb2_box( array(
    'id'            => $prefix . 'main_home_ads_banner',
    'title'         => esc_html__( 'Inicio: Banners de Publicidad', 'gespetfood' ),
    'object_types'  => array( 'page' ), // Post type
    'show_on'      => array( 'key' => 'page-template', 'value' => 'templates/page-home.php' ),
    'context'    => 'normal',
    'priority'   => 'high',
    'show_names' => true, // Show field names on the left
    'closed'     => false, // true to keep the metabox closed by default
) );

$cmb_home_ads_banner->add_field( array(
    'id'   => $prefix . 'home_ads_banner',
    'name'      => esc_html__( 'Banner Image', 'gespetfood' ),
    'desc'      => esc_html__( 'Upload a Banner', 'gespetfood' ),
    'type'    => 'file',

    'options' => array(
        'url' => false
    ),
    'text'    => array(
        'add_upload_file_text' => esc_html__( 'Upload Banner', 'gespetfood' ),
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