<?php
/* PRODUCT METABOXES */
$cmb_product_info = new_cmb2_box(array(
    'id'            => $prefix . 'product_info_metabox',
    'title'         => esc_html__('Producto: Tabla nutricional', 'gespetfood'),
    'object_types'  => array( 'product' ), // Post type
    'context'    => 'normal',
    'priority'   => 'high',
    'show_names' => true, // Show field names on the left
    'closed'     => false, // true to keep the metabox closed by default
));

$cmb_product_info->add_field(array(
    'id'         => $prefix . 'product_video',
    'name'       => esc_html__('Producto: Video', 'gespetfood'),
    'desc'       => esc_html__('Seleccione el video a mostrar en el producto', 'gespetfood'),
    'type'    => 'file',
    
    'options' => array(
        'url' => false
    ),
    'text'    => array(
        'add_upload_file_text' => esc_html__('Cargar Video', 'gespetfood'),
    ),
    'query_args' => array(
        'type' => array(
            'video/mp4',
            'video/ogv',
            'video/webm'
        )
    ),
    'preview_size' => 'medium'
));

$cmb_product_info->add_field(array(
    'id'         => $prefix . 'product_extra_info_quantity',
    'name'       => esc_html__('Producto: Cantidad para comprar', 'gespetfood'),
    'desc'       => esc_html__('Ingrese aqui la cantidad mínima que puede comprarse por producto', 'gespetfood'),
    'type'    => 'text'
));

$cmb_product_info->add_field(array(
    'id'         => $prefix . 'product_table1',
    'name'       => esc_html__('Producto: Tabla nutricional', 'gespetfood'),
    'desc'       => esc_html__('Ingrese aqui la tabla nutricional del producto', 'gespetfood'),
    'type'    => 'wysiwyg',
    'options' => array(
        'textarea_rows' => get_option('default_post_edit_rows', 4),
        'teeny' => false
    )
));

$cmb_product_info->add_field(array(
    'id'         => $prefix . 'product_table2',
    'name'       => esc_html__('Producto: Ingredientes', 'gespetfood'),
    'desc'       => esc_html__('Ingrese aqui los ingredientes y datos adicionales del producto', 'gespetfood'),
    'type'    => 'wysiwyg',
    'options' => array(
        'textarea_rows' => get_option('default_post_edit_rows', 4),
        'teeny' => false
    )
));


/* SHOP METABOXES */
$cmb_shop_metaboxes = new_cmb2_box(array(
    'id'            => $prefix . 'product_slider',
    'title'         => esc_html__('Tienda: Slider Revolution', 'gespetfood'),
    'object_types'  => array( 'page' ), // Post type
    'show_on'      => array( 'key' => 'slug', 'value' => array( 'shop', 'tienda', 'tienda-perro', 'products', 'productos' ) ),
    'context'    => 'normal',
    'priority'   => 'high',
    'show_names' => true, // Show field names on the left
    'closed'     => false, // true to keep the metabox closed by default
));

$cmb_shop_metaboxes->add_field(array(
    'id'         => $prefix . 'slider_rev',
    'name'       => esc_html__('Slider Revolution', 'gespetfood'),
    'desc'       => esc_html__('Seleccione el Slider a usar en el Home', 'gespetfood'),
    'type'             => 'select',
    'show_option_none' => true,
    'default'          => '',
    'options'          => $array_sliders
));

$cmb_shop_metaboxes->add_field(array(
    'id'   => $prefix . 'shop_banner',
    'name'      => esc_html__('Banner Image', 'gespetfood'),
    'desc'      => esc_html__('Upload a Banner', 'gespetfood'),
    'type'    => 'file',

    'options' => array(
        'url' => false
    ),
    'text'    => array(
        'add_upload_file_text' => esc_html__('Upload Banner', 'gespetfood'),
    ),
    'query_args' => array(
        'type' => array(
            'image/gif',
            'image/jpeg',
            'image/png'
        )
    ),
    'preview_size' => 'medium'
));

$cmb_shop_metaboxes->add_field(array(
    'id'   => $prefix . 'shop_shipping',
    'name'      => esc_html__('Brochure de Precios de Transporte del Producto', 'gespetfood'),
    'desc'      => esc_html__('Este pdf saldra en todos los productos', 'gespetfood'),
    'type'    => 'text_url',
));

$cmb_shop_metaboxes->add_field(array(
    'id'   => $prefix . 'shop_featured_image',
    'name'      => esc_html__('Featured Image', 'gespetfood'),
    'desc'      => esc_html__('Upload a Featured Image', 'gespetfood'),
    'type'    => 'file',

    'options' => array(
        'url' => false
    ),
    'text'    => array(
        'add_upload_file_text' => esc_html__('Upload Featured Image', 'gespetfood'),
    ),
    'query_args' => array(
        'type' => array(
            'image/gif',
            'image/jpeg',
            'image/png'
        )
    ),
    'preview_size' => 'medium'
));

$cmb_shop_metaboxes->add_field(array(
    'id'         => $prefix . 'shop_info',
    'name'       => esc_html__('Tienda: Información Adicional', 'gespetfood'),
    'desc'       => esc_html__('Ingrese aqui la información que va justo arriba de la tienda', 'gespetfood'),
    'type'    => 'wysiwyg',
    'options' => array(
        'textarea_rows' => get_option('default_post_edit_rows', 4),
        'teeny' => false
    )
));

$cmb_shop_metaboxes->add_field(array(
    'id'         => $prefix . 'shop_ind_info',
    'name'       => esc_html__('Tienda: Información Adicional', 'gespetfood'),
    'desc'       => esc_html__('Ingrese aqui la información que va justo arriba de la tienda', 'gespetfood'),
    'type'    => 'wysiwyg',
    'options' => array(
        'textarea_rows' => get_option('default_post_edit_rows', 4),
        'teeny' => false
    )
));

$group_field_id = $cmb_shop_metaboxes->add_field(array(
    'id'          => $prefix . 'shop_logo1_list',
    'type'        => 'group',
    'description' => __('Slides inside this Slider', 'gespetfood'),
    'options'     => array(
        'group_title'       => __('Logo {#}', 'gespetfood'),
        'add_button'        => __('Add other Logo', 'gespetfood'),
        'remove_button'     => __('Remove Logo', 'gespetfood'),
        'sortable'          => true,
        'closed'         => true,
        'remove_confirm' => esc_html__('Are you sure to remove this slide?', 'gespetfood')
    )
));

$cmb_shop_metaboxes->add_group_field($group_field_id, array(
    'id'   => 'bg_image',
    'name'      => esc_html__('Logo Image', 'gespetfood'),
    'desc'      => esc_html__('Upload a Logo', 'gespetfood'),
    'type'    => 'file',

    'options' => array(
        'url' => false
    ),
    'text'    => array(
        'add_upload_file_text' => esc_html__('Upload Background', 'gespetfood'),
    ),
    'query_args' => array(
        'type' => array(
            'image/gif',
            'image/jpeg',
            'image/png'
        )
    ),
    'preview_size' => 'medium'
));

$cmb_shop_metaboxes->add_group_field($group_field_id, array(
    'id'   => 'url',
    'name'      => esc_html__('Logo URL', 'gespetfood'),
    'desc'      => esc_html__('Enter a descriptive title for all slides', 'gespetfood'),
    'type' => 'text_url'
));

$cmb_shop_metaboxes->add_field(array(
    'id'      => $prefix . 'shop_logo2_list',
    'name'      => esc_html__('Segunda Fila de logos', 'gespetfood'),
    'desc'      => esc_html__('Inserte los logos para la sección', 'gespetfood'),
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
));

$cmb_shop_testimonials = new_cmb2_box(array(
    'id'            => $prefix . 'shop_testimonials',
    'title'         => esc_html__('Tienda: Testimonios', 'gespetfood'),
    'object_types'  => array( 'page' ), // Post type
    'show_on'      => array( 'key' => 'slug', 'value' => array( 'shop', 'tienda', 'tienda-perro', 'products', 'productos' ) ),
    'context'    => 'normal',
    'priority'   => 'high',
    'show_names' => true, // Show field names on the left
    'closed'     => false, // true to keep the metabox closed by default
));

$group_field_id = $cmb_shop_testimonials->add_field(array(
    'id'          => $prefix . 'shop_testimonials_list',
    'type'        => 'group',
    'description' => __('Testimonials inside this page', 'gespetfood'),
    'options'     => array(
        'group_title'       => __('Testimonial Block {#}', 'gespetfood'),
        'add_button'        => __('Add other Testimonial Block', 'gespetfood'),
        'remove_button'     => __('Remove Testimonial Block', 'gespetfood'),
        'sortable'          => true,
        'closed'         => true,
        'remove_confirm' => esc_html__('Are you sure to remove this testimonial?', 'gespetfood')
    )
));

$cmb_shop_testimonials->add_group_field($group_field_id, array(
    'id'   => 'main_image',
    'name'      => esc_html__('Imagen Principal', 'gespetfood'),
    'desc'      => esc_html__('Upload an Image', 'gespetfood'),
    'type'    => 'file',

    'options' => array(
        'url' => false
    ),
    'text'    => array(
        'add_upload_file_text' => esc_html__('Upload Image', 'gespetfood'),
    ),
    'query_args' => array(
        'type' => array(
            'image/gif',
            'image/jpeg',
            'image/png'
        )
    ),
    'preview_size' => 'medium'
));

$cmb_shop_testimonials->add_group_field($group_field_id, array(
    'id'        => 'text1',
    'name'      => esc_html__('Testimonio Grande', 'gespetfood'),
    'desc'      => esc_html__('Ingrese aqui el testimonio mas grande del bloque', 'gespetfood'),
    'type'      => 'wysiwyg',
    'options'   => array(
        'textarea_rows' => get_option('default_post_edit_rows', 4),
        'teeny'         => false
    )
));

$cmb_shop_testimonials->add_group_field($group_field_id, array(
    'id'        => 'text2',
    'name'      => esc_html__('Testimonio Pequeño 1', 'gespetfood'),
    'desc'      => esc_html__('Ingrese aqui el testimonio pequeño número 1', 'gespetfood'),
    'type'      => 'wysiwyg',
    'options'   => array(
        'textarea_rows' => get_option('default_post_edit_rows', 4),
        'teeny'         => false
    )
));

$cmb_shop_testimonials->add_group_field($group_field_id, array(
    'id'        => 'text3',
    'name'      => esc_html__('Testimonio Pequeño 2', 'gespetfood'),
    'desc'      => esc_html__('Ingrese aqui el testimonio pequeño número 2', 'gespetfood'),
    'type'      => 'wysiwyg',
    'options'   => array(
        'textarea_rows' => get_option('default_post_edit_rows', 4),
        'teeny'         => false
    )
));
