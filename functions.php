<?php
/* --------------------------------------------------------------
    ENQUEUE AND REGISTER CSS
-------------------------------------------------------------- */

require_once('includes/wp_enqueue_styles.php');

/* --------------------------------------------------------------
    ENQUEUE AND REGISTER JS
-------------------------------------------------------------- */

if (!is_admin()) {
    add_action('wp_enqueue_scripts', 'my_jquery_enqueue');
}
function my_jquery_enqueue()
{
    if (!is_page('finalizar-compra')) {
        wp_deregister_script('jquery');
        wp_deregister_script('jquery-migrate');

        if ($_SERVER['REMOTE_ADDR'] == '::1') {
            /*- JQUERY ON LOCAL  -*/
            wp_register_script('jquery', get_template_directory_uri() . '/js/jquery.min.js', false, '3.4.1', false);
            /*- JQUERY MIGRATE ON LOCAL  -*/
            wp_register_script('jquery-migrate', get_template_directory_uri() . '/js/jquery-migrate.min.js', array('jquery'), '3.0.1', false);
        } else {
            /*- JQUERY ON WEB  -*/
            wp_register_script('jquery', 'https://code.jquery.com/jquery-3.4.1.min.js', false, '3.4.1', false);
            /*- JQUERY MIGRATE ON WEB  -*/
            wp_register_script('jquery-migrate', 'https://code.jquery.com/jquery-migrate-3.0.1.min.js', array('jquery'), '3.0.1', true);
        }
        wp_enqueue_script('jquery');
        wp_enqueue_script('jquery-migrate');
    }
}

/* NOW ALL THE JS FILES */
require_once('includes/wp_enqueue_scripts.php');

/* --------------------------------------------------------------
    ADD CUSTOM WALKER BOOTSTRAP
-------------------------------------------------------------- */

// WALKER COMPLETO TOMADO DESDE EL NAVBAR COLLAPSE
require_once('includes/class-wp-bootstrap-navwalker.php');

/* --------------------------------------------------------------
    ADD CUSTOM WORDPRESS FUNCTIONS
-------------------------------------------------------------- */

require_once('includes/wp_custom_functions.php');

/* --------------------------------------------------------------
    ADD REQUIRED WORDPRESS PLUGINS
-------------------------------------------------------------- */

require_once('includes/class-tgm-plugin-activation.php');
require_once('includes/class-required-plugins.php');

/* --------------------------------------------------------------
    ADD CUSTOM WOOCOMMERCE OVERRIDES
-------------------------------------------------------------- */
if (class_exists('WooCommerce')) {
    require_once('includes/wp_woocommerce_functions.php');
}

/* --------------------------------------------------------------
    ADD JETPACK COMPATIBILITY
-------------------------------------------------------------- */
if (defined('JETPACK__VERSION')) {
    require_once('includes/wp_jetpack_functions.php');
}

/* --------------------------------------------------------------
    ADD THEME SUPPORT
-------------------------------------------------------------- */

load_theme_textdomain('gespetfood', get_template_directory() . '/languages');
add_theme_support('post-formats', array( 'aside', 'gallery', 'link', 'image', 'quote', 'status', 'video', 'audio' ));
add_theme_support('post-thumbnails');
add_theme_support('automatic-feed-links');
add_theme_support('title-tag');
add_theme_support('menus');
add_theme_support('customize-selective-refresh-widgets');
add_theme_support(
    'custom-background',
    array(
        'default-image' => '',    // background image default
        'default-color' => 'ffffff',    // background color default (dont add the #)
        'wp-head-callback' => '_custom_background_cb',
        'admin-head-callback' => '',
        'admin-preview-callback' => ''
    )
);
add_theme_support('custom-logo', array(
    'height'      => 250,
    'width'       => 250,
    'flex-width'  => true,
    'flex-height' => true,
));


add_theme_support('html5', array(
    'search-form',
    'comment-form',
    'comment-list',
    'gallery',
    'caption',
));

/* --------------------------------------------------------------
    ADD NAV MENUS LOCATIONS
-------------------------------------------------------------- */

register_nav_menus(array(
    'header_menu' => __('Menu Header - Principal', 'gespetfood'),
    'footer_menu' => __('Menu Footer - Principal', 'gespetfood'),
));

/* --------------------------------------------------------------
    ADD DYNAMIC SIDEBAR SUPPORT
-------------------------------------------------------------- */

add_action('widgets_init', 'gespetfood_widgets_init');
function gespetfood_widgets_init()
{
    register_sidebar(array(
        'name' => __('Sidebar Principal', 'gespetfood'),
        'id' => 'main_sidebar',
        'description' => __('Estos widgets seran vistos en las entradas y páginas del sitio', 'gespetfood'),
        'before_widget' => '<li id="%1$s" class="widget %2$s">',
        'after_widget'  => '</li>',
        'before_title'  => '<h2 class="widgettitle">',
        'after_title'   => '</h2>',
    ));

    register_sidebars(4, array(
        'name'          => __('Footer Section %d', 'gespetfood'),
        'id'            => 'sidebar_footer',
        'description'   => __('Footer Section', 'gespetfood'),
        'before_widget' => '<li id="%1$s" class="widget %2$s">',
        'after_widget'  => '</li>',
        'before_title'  => '<h2 class="widgettitle">',
        'after_title'   => '</h2>'
    ));
}

/* --------------------------------------------------------------
    CUSTOM ADMIN LOGIN
-------------------------------------------------------------- */

function custom_admin_styles()
{
    $version_remove = null;
    wp_register_style('wp-admin-style', get_template_directory_uri() . '/css/custom-wordpress-admin-style.css', false, $version_remove, 'all');
    wp_enqueue_style('wp-admin-style');
}
add_action('login_head', 'custom_admin_styles');
add_action('admin_init', 'custom_admin_styles');


function dashboard_footer()
{
    echo '<span id="footer-thankyou">';
    _e('Gracias por crear con ', 'gespetfood');
    echo '<a href="http://wordpress.org/" target="_blank">WordPress.</a> - ';
    _e('Tema desarrollado por ', 'gespetfood');
    echo '<a href="http://robertochoa.com.ve/?utm_source=footer_admin&utm_medium=link&utm_content=gespetfood" target="_blank">Robert Ochoa</a></span>';
}
add_filter('admin_footer_text', 'dashboard_footer');

/* --------------------------------------------------------------
    ADD CUSTOM METABOX
-------------------------------------------------------------- */

require_once('includes/wp_custom_metabox.php');

/* --------------------------------------------------------------
    ADD CUSTOM POST TYPE
-------------------------------------------------------------- */

//require_once('includes/wp_custom_post_type.php');

/* --------------------------------------------------------------
    ADD CUSTOM THEME CONTROLS
-------------------------------------------------------------- */

require_once('includes/wp_custom_theme_control.php');

/* --------------------------------------------------------------
    ADD CUSTOM IMAGE SIZE
-------------------------------------------------------------- */
if (function_exists('add_theme_support')) {
    add_theme_support('post-thumbnails');
    set_post_thumbnail_size(9999, 400, true);
}
if (function_exists('add_image_size')) {
    add_image_size('avatar', 100, 100, true);
    add_image_size('logo_size', 9999, 100, false);
    add_image_size('custom_logos', 130, 130, true);
    add_image_size('blog_img', 300, 470, array('center', 'center'));
    add_image_size('single_img', 1300, 763, array('center', 'center'));
    add_image_size('testimonials', 500, 400, true);
}

add_filter('big_image_size_threshold', '__return_false');

/*
add_action('woocommerce_proceed_to_checkout', 'custom_cart_message', 15);
add_action('woocommerce_review_order_before_submit', 'custom_cart_message', 10);
add_action('woocommerce_thankyou_cod', 'custom_cart_message', 15);
add_action('woocommerce_email_after_order_table', 'custom_cart_message', 10);

function custom_cart_message() {
    $message = esc_html__('Entrega de pedidos a partir del 02 de enero', 'gespetfood');
    echo '<div class="custom-cart-message">' . $message . '</div>';
}
*/

function show_category_posts($query)
{
    if (!is_admin()) {
        if ($query->is_home() && $query->is_main_query()) {
            $query->set('order', 'DESC');
            $query->set('orderby', 'date');
        }
    }
}
add_action('pre_get_posts', 'show_category_posts');

add_action('wp_ajax_custom_contact_form', 'custom_contact_form_handler');
add_action('wp_ajax_nopriv_custom_contact_form', 'custom_contact_form_handler');

/**
 * Method custom_contact_form_handler
 *
 * @return void
 */
function custom_contact_form_handler()
{
    if (defined('WP_DEBUG') && WP_DEBUG) {
        error_reporting(E_ALL);
        ini_set('display_errors', 1);
    }

    parse_str($_POST['info'], $info);
    $logo = get_template_directory_uri() . '/images/logo.png';
    ob_start();
    require_once get_theme_file_path('/includes/contact-email.php');
    $body = ob_get_clean();
    $body = str_replace([
            '{firstname}',
            '{lastname}',
            '{email}',
            '{country}',
            '{message}',
            '{logo}'
        ], [
            $info['firstname'],
            $info['lastname'],
            $info['email'],
            $info['country'],
            $info['message'],
            $logo
        ], $body);

    $to = 'info@gespetfood.com';

    $emailsCC = array();
    $emailsBCC = array();

    $headers[] = 'Content-Type: text/html; charset=UTF-8';
    $headers[] = 'From: ' . esc_html(get_bloginfo('name')) . ' <noreply@' . strtolower($_SERVER['SERVER_NAME']) . '>';
    $headers[] = 'Cc: ' . join(',', $emailsCC);
    $headers[] = 'Bcc: ' . join(',', $emailsBCC);

    $subject = esc_html__('Gespetfood: Nuevo mensaje de contacto', 'gespetfood');

    $sent = wp_mail($to, $subject, $body, $headers);

    if ($sent == false) {
        wp_send_json_success(esc_html__('Su mensaje no pudo ser enviado, por favor intente más tarde.', 'gespetfood'), 200);
    } else {
        wp_send_json_success(esc_html__("Gracias por su mensaje, nos pondremos en contacto con ud. a la brevedad.", 'gespetfood'), 200);
    }

    wp_die();
}

add_action('wp_ajax_custom_mayorista_form', 'custom_mayorista_form_handler');
add_action('wp_ajax_nopriv_custom_mayorista_form', 'custom_mayorista_form_handler');
/**
 * Method custom_mayorista_form_handler
 *
 * @return void
 */
function custom_mayorista_form_handler()
{
    if (defined('WP_DEBUG') && WP_DEBUG) {
        error_reporting(E_ALL);
        ini_set('display_errors', 1);
    }

    parse_str($_POST['info'], $info);
    $logo = get_template_directory_uri() . '/images/logo.png';
    ob_start();
    require_once get_theme_file_path('/includes/mayorista-email.php');
    $body = ob_get_clean();
    $body = str_replace([
            '{firstname}',
            '{lastname}',
            '{email}',
            '{company}',
            '{country}',
            '{message}',
            '{logo}'
        ], [
            $info['firstname'],
            $info['lastname'],
            $info['email'],
            $info['company'],
            $info['country'],
            $info['message'],
            $logo
        ], $body);

    $to = 'info@gespetfood.com';

    $emailsCC = array();
    $emailsBCC = array();

    $headers[] = 'Content-Type: text/html; charset=UTF-8';
    $headers[] = 'From: ' . esc_html(get_bloginfo('name')) . ' <noreply@' . strtolower($_SERVER['SERVER_NAME']) . '>';
    $headers[] = 'Cc: ' . join(',', $emailsCC);
    $headers[] = 'Bcc: ' . join(',', $emailsBCC);

    $subject = esc_html__('Gespetfood: Nuevo mensaje de mayorista', 'gespetfood');

    $sent = wp_mail($to, $subject, $body, $headers);

    if ($sent == false) {
        wp_send_json_success(esc_html__('Su mensaje no pudo ser enviado, por favor intente más tarde.', 'gespetfood'), 200);
    } else {
        wp_send_json_success(esc_html__("Gracias por su mensaje, nos pondremos en contacto con ud. a la brevedad.", 'gespetfood'), 200);
    }

    wp_die();
}
