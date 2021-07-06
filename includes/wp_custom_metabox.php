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
    
    /* HOME */
    require_once('custom-metaboxes-home.php');

    /* GESPETFOOD */
    require_once('custom-metaboxes-gespetfood.php');

    /* BENEFICIOS */
    require_once('custom-metaboxes-beneficios.php');

    /* CONTACT US */
    require_once('custom-metaboxes-contact.php');

    /* BLOG */
    require_once('custom-metaboxes-blog.php');

    /* SHOP */
    require_once('custom-metaboxes-shop.php');
}
