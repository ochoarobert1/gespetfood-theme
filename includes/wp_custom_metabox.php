<?php
function ed_metabox_include_front_page( $display, $meta_box ) {
    if ( ! isset( $meta_box['show_on']['key'] ) ) {
        return $display;
    }

    if ( 'front-page' !== $meta_box['show_on']['key'] ) {
        return $display;
    }

    $post_id = 0;

    // If we're showing it based on ID, get the current ID
    if ( isset( $_GET['post'] ) ) {
        $post_id = $_GET['post'];
    } elseif ( isset( $_POST['post_ID'] ) ) {
        $post_id = $_POST['post_ID'];
    }

    if ( ! $post_id ) {
        return false;
    }

    // Get ID of page set as front page, 0 if there isn't one
    $front_page = get_option( 'page_on_front' );

    // there is a front page set and we're on it!
    return $post_id == $front_page;
}
add_filter( 'cmb2_show_on', 'ed_metabox_include_front_page', 10, 2 );

function be_metabox_show_on_slug( $display, $meta_box ) {
    if ( ! isset( $meta_box['show_on']['key'], $meta_box['show_on']['value'] ) ) {
        return $display;
    }

    if ( 'slug' !== $meta_box['show_on']['key'] ) {
        return $display;
    }

    $post_id = 0;

    // If we're showing it based on ID, get the current ID
    if ( isset( $_GET['post'] ) ) {
        $post_id = $_GET['post'];
    } elseif ( isset( $_POST['post_ID'] ) ) {
        $post_id = $_POST['post_ID'];
    }

    if ( ! $post_id ) {
        return $display;
    }

    $slug = get_post( $post_id )->post_name;

    // See if there's a match
    return in_array( $slug, (array) $meta_box['show_on']['value']);
}
add_filter( 'cmb2_show_on', 'be_metabox_show_on_slug', 10, 2 );

add_action( 'cmb2_admin_init', 'gespetfood_register_custom_metabox' );
function gespetfood_register_custom_metabox() {
    $prefix = 'gpf_';

    $array_sliders = array();
    /* SLIDER REVOLUTION */
    if (class_exists('RevSlider')) {
        $slider = new RevSlider();
        $objSliders = $slider->get_sliders();
        if (!empty($objSliders)) {
            foreach( $objSliders as $slider ){
                $array_sliders[$slider->alias] = $slider->title;
            }
        }
    }
    /* SLIDER REVOLUTION */

    /* HOME SLIDER */
    $cmb_home_slider = new_cmb2_box( array(
        'id'            => $prefix . 'home_slider',
        'title'         => esc_html__( 'Home: Slider Revolution', 'gespetfood' ),
        'object_types'  => array( 'page' ), // Post type
        'show_on'      => array( 'key' => 'page-template', 'value' => 'templates/templates-promociones.php' ),
        'context'    => 'normal',
        'priority'   => 'high',
        'show_names' => true, // Show field names on the left
        'closed'     => false, // true to keep the metabox closed by default
    ) );

    $cmb_home_slider->add_field( array(
        'id'         => $prefix . 'slider_rev',
        'name'       => esc_html__( 'Slider Revolution', 'gespetfood' ),
        'desc'       => esc_html__( 'Seleccione el Slider a usar en el Home', 'gespetfood' ),
        'type'             => 'select',
        'show_option_none' => true,
        'default'          => '',
        'options'          => $array_sliders
    ) );

    /* HOME: LOGOS */
    $cmb_home_logos = new_cmb2_box( array(
        'id'            => $prefix . 'home_logos',
        'title'         => esc_html__( 'Home: Logos del Home', 'gespetfood' ),
        'object_types'  => array( 'page' ), // Post type
        'show_on'      => array( 'key' => 'page-template', 'value' => 'templates/templates-promociones.php' ),
        'context'    => 'normal',
        'priority'   => 'high',
        'show_names' => true, // Show field names on the left
        'closed'     => false, // true to keep the metabox closed by default
    ) );

    $cmb_home_logos->add_field( array(
        'id'         => $prefix . 'home_logos_content',
        'name'       => esc_html__( 'Home: Contenido para Logos', 'gespetfood' ),
        'desc'       => esc_html__( 'Ingrese los logos que deben estar en el inicio', 'gespetfood' ),
        'type'    => 'wysiwyg',
        'options' => array(
            'textarea_rows' => get_option('default_post_edit_rows', 4),
            'teeny' => false
        )
    ) );

    /* GESPETFOOD */
    require_once('custom-metaboxes-gespetfood.php');

    /* CONTACT US */
    require_once('custom-metaboxes-contact.php');

    /* SHOP SLIDER */
    $cmb_product_slider = new_cmb2_box( array(
        'id'            => $prefix . 'product_slider',
        'title'         => esc_html__( 'Tienda: Slider Revolution', 'gespetfood' ),
        'object_types'  => array( 'page' ), // Post type
        'show_on'      => array( 'key' => 'slug', 'value' => array( 'shop', 'tienda', 'products', 'productos' ) ),
        'context'    => 'normal',
        'priority'   => 'high',
        'show_names' => true, // Show field names on the left
        'closed'     => false, // true to keep the metabox closed by default
    ) );

    $cmb_product_slider->add_field( array(
        'id'         => $prefix . 'slider_rev',
        'name'       => esc_html__( 'Slider Revolution', 'gespetfood' ),
        'desc'       => esc_html__( 'Seleccione el Slider a usar en el Home', 'gespetfood' ),
        'type'             => 'select',
        'show_option_none' => true,
        'default'          => '',
        'options'          => $array_sliders
    ) );

    $cmb_product_slider->add_field( array(
        'id'   => $prefix . 'shop_shipping',
        'name'      => esc_html__( 'Brochure de Precios de Transporte del Producto', 'gespetfood' ),
        'desc'      => esc_html__( 'Este pdf saldra en todos los productos', 'gespetfood' ),
        'type'    => 'text_url',
    ) );

    $cmb_product_slider->add_field( array(
        'id'         => $prefix . 'shop_info',
        'name'       => esc_html__( 'Tienda: Información Adicional', 'gespetfood' ),
        'desc'       => esc_html__( 'Ingrese aqui la información que va justo arriba de la tienda', 'gespetfood' ),
        'type'    => 'wysiwyg',
        'options' => array(
            'textarea_rows' => get_option('default_post_edit_rows', 4),
            'teeny' => false
        )
    ) );

       $cmb_product_slider->add_field( array(
        'id'         => $prefix . 'shop_ind_info',
        'name'       => esc_html__( 'Tienda: Información Adicional', 'gespetfood' ),
        'desc'       => esc_html__( 'Ingrese aqui la información que va justo arriba de la tienda', 'gespetfood' ),
        'type'    => 'wysiwyg',
        'options' => array(
            'textarea_rows' => get_option('default_post_edit_rows', 4),
            'teeny' => false
        )
    ) );

    $group_field_id = $cmb_product_slider->add_field( array(
        'id'          => $prefix . 'shop_logo1_list',
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

    $cmb_product_slider->add_group_field( $group_field_id, array(
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

    $cmb_product_slider->add_group_field( $group_field_id, array(
        'id'   => 'url',
        'name'      => esc_html__( 'Logo URL', 'maxicon' ),
        'desc'      => esc_html__( 'Enter a descriptive title for all slides', 'maxicon' ),
        'type' => 'text_url'
    ) );

    $cmb_product_slider->add_field( array(
        'id'      => $prefix . 'shop_logo2_list',
        'name'      => esc_html__( 'Segunda Fila de logos', 'gespetfood' ),
        'desc'      => esc_html__( 'Inserte los logos para la sección', 'gespetfood' ),
        'type'    => 'file_list',
        'preview_size' => array( 100, 100 ), // Default: array( 50, 50 )
        'query_args' => array( 'type' => 'image' ), // Only images attachment
        'text' => array(
            'add_upload_files_text' => 'Replacement', // default: "Add or Upload Files"
            'remove_image_text' => 'Replacement', // default: "Remove Image"
            'file_text' => 'Replacement', // default: "File:"
            'file_download_text' => 'Replacement', // default: "Download"
            'remove_text' => 'Replacement', // default: "Remove"
        ),
    ) );


    /* SHOP SLIDER */
    $cmb_product_info = new_cmb2_box( array(
        'id'            => $prefix . 'product_info_metabox',
        'title'         => esc_html__( 'Producto: Tabla nutricional', 'gespetfood' ),
        'object_types'  => array( 'product' ), // Post type
        'context'    => 'normal',
        'priority'   => 'high',
        'show_names' => true, // Show field names on the left
        'closed'     => false, // true to keep the metabox closed by default
    ) );

    $cmb_product_info->add_field( array(
        'id'         => $prefix . 'product_table1',
        'name'       => esc_html__( 'Producto: Tabla nutricional', 'gespetfood' ),
        'desc'       => esc_html__( 'Ingrese aqui la tabla nutricional del producto', 'gespetfood' ),
        'type'    => 'wysiwyg',
        'options' => array(
            'textarea_rows' => get_option('default_post_edit_rows', 4),
            'teeny' => false
        )
    ) );

    $cmb_product_info->add_field( array(
        'id'         => $prefix . 'product_table2',
        'name'       => esc_html__( 'Producto: Ingredientes', 'gespetfood' ),
        'desc'       => esc_html__( 'Ingrese aqui los ingredientes y datos adicionales del producto', 'gespetfood' ),
        'type'    => 'wysiwyg',
        'options' => array(
            'textarea_rows' => get_option('default_post_edit_rows', 4),
            'teeny' => false
        )
    ) );
}
