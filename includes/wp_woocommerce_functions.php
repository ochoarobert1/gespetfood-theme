<?php
/* WOOCOMMERCE CUSTOM COMMANDS */

/* WOOCOMMERCE - DECLARE THEME SUPPORT - BEGIN */
add_action('after_setup_theme', 'woocommerce_support');
function woocommerce_support()
{
    add_theme_support('woocommerce');
    add_theme_support('wc-product-gallery-zoom');
    add_theme_support('wc-product-gallery-lightbox');
    add_theme_support('wc-product-gallery-slider');
}
/* WOOCOMMERCE - DECLARE THEME SUPPORT - END */

/* WOOCOMMERCE - CUSTOM WRAPPER - BEGIN */
remove_action('woocommerce_before_main_content', 'woocommerce_output_content_wrapper', 10);
remove_action('woocommerce_after_main_content', 'woocommerce_output_content_wrapper_end', 10);

add_action('woocommerce_before_main_content', 'my_theme_wrapper_start', 10);
add_action('woocommerce_after_main_content', 'my_theme_wrapper_end', 10);

function my_theme_wrapper_start()
{
    echo '<section id="main" class="container-fluid"><div class="row"><div class="woocustom-main-container col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">';
}

function my_theme_wrapper_end()
{
    echo '</div></div></section>';
}
/* WOOCOMMERCE - CUSTOM WRAPPER - END */

remove_action('woocommerce_before_main_content', 'woocommerce_breadcrumb', 20);

remove_action('woocommerce_after_shop_loop_item', 'woocommerce_template_loop_add_to_cart', 10);

remove_action('woocommerce_after_shop_loop_item_title', 'woocommerce_template_loop_rating', 5);

add_action('woocommerce_shop_loop_item_title', 'woocommerce_custom_rating_handler', 5);

add_filter('manage_product_posts_columns', 'set_custom_edit_product_columns');
function set_custom_edit_product_columns($columns)
{
    $columns['gpf_product_extra_info_quantity'] = __('Presentación', 'gespetfood');
    return $columns;
}

// Add the data to the custom columns for the product post type:
add_action('manage_product_posts_custom_column', 'custom_product_column', 10, 2);
function custom_product_column($column, $post_id)
{
    switch ($column) {
        case 'gpf_product_extra_info_quantity':
            echo get_post_meta($post_id, 'gpf_product_extra_info_quantity', true);
            break;
    }
}

add_filter('loop_shop_per_page', 'bbloomer_redefine_products_per_page', 9999);
 
function bbloomer_redefine_products_per_page($per_page)
{
    $per_page = 150;
    return $per_page;
}

function woocommerce_custom_rating_handler()
{
    ob_start(); ?>
    <div class="custom-star-container">
        <i class="fa fa-star"></i>
        <i class="fa fa-star"></i>
        <i class="fa fa-star"></i>
        <i class="fa fa-star"></i>
        <i class="fa fa-star"></i>
    </div>
    <?php
    $content = ob_get_clean();
    echo $content;
}

remove_action('woocommerce_single_product_summary', 'woocommerce_template_single_meta', 40);
remove_action('woocommerce_single_product_summary', 'woocommerce_template_single_excerpt', 20);
remove_action('woocommerce_single_product_summary', 'woocommerce_template_single_rating', 10);
add_action('woocommerce_single_product_summary', 'woocommerce_custom_rating_handler', 10);

add_action('woocommerce_single_product_summary', 'woocommerce_template_single_extra_title', 7);
add_action('woocommerce_after_shop_loop_item_title', 'woocommerce_template_single_extra_title', 1);



function woocommerce_template_single_extra_title()
{
    $quantity = get_post_meta(get_the_ID(), 'gpf_product_extra_info_quantity', true);
    if ($quantity != '') {
        ?>
        <h3 class="title-extra-info"><?php echo $quantity; ?></h3>
    <?php
    } else { ?>
        <h3 class="title-extra-info"><?php _e('pack 1 unidad', 'gespetfood'); ?></h3>
    <?php }
}

add_filter('woocommerce_get_price_html', 'custom_suffix_text_after_price');

function custom_suffix_text_after_price($price)
{
    if (!is_admin()) {
        return $price . '<span class="price-suffix">' . __('(IVA incluido)', 'gespetfood') . '</span>' ;
    } else {
        return $price;
    }
}




add_action('woocommerce_single_product_summary', 'woocommerce_custom_shipping_button', 40);

function woocommerce_custom_shipping_button()
{
    global $woocommerce;
    $checkout_url = wc_get_checkout_url();
    $shop_id = get_option('woocommerce_shop_page_id'); ?>
    <a href="<?php echo $checkout_url; ?>" class="btn btn-md btn-back-shop"><?php _e('Finalizar Compra', 'gespetfood'); ?></a>
    <a href="<?php echo get_permalink($shop_id); ?>" class="btn btn-md btn-back-shop"><?php _e('Volver a Tienda', 'gespetfood'); ?></a>
<?php
}

add_action('woocommerce_cart_coupon', 'themeprefix_back_to_store');

function themeprefix_back_to_store()
{ ?>
    <a class="button wc-backward" href="<?php echo esc_url(wc_get_page_permalink('shop')); ?>"> <?php _e('Return to shop', 'woocommerce') ?> </a>
<?php
}

add_action('woocommerce_after_single_product_summary', 'custom_woocommerce_single_info', 18);

function custom_woocommerce_single_info()
{
    $shop_id = get_option('woocommerce_shop_page_id'); ?>

    <section class="shop-logo-first col-xl-10 offset-xl-1 col-lg-12 col-md-12 col-sm-12 col-12">
        <?php $awards_group = get_post_meta($shop_id, 'gpf_shop_logo1_list', true); ?>
        <?php if ((!empty($awards_group)) || ($awards_group != '')) { ?>
            <?php foreach ($awards_group as $test_item) { ?>
                <?php $image = wp_get_attachment_image_src($test_item['bg_image_id'], 'logo_size'); ?>
                <img itemprop="logo" content="<?php echo $image[0]; ?>" src="<?php echo $image[0]; ?>" title="<?php echo get_post_meta($test_item['bg_image_id'], '_wp_attachment_image_alt', true); ?>" alt="<?php echo get_post_meta($test_item['bg_image_id'], '_wp_attachment_image_alt', true); ?>" class="img-fluid" width="<?php echo $image[1]; ?>" height="<?php echo $image[2]; ?>" />
            <?php } ?>
        <?php } ?>
    </section>
    <div class="shop-ifs-container col-12">
        <?php $shop_info = get_post_meta($shop_id, 'gpf_shop_ind_info', true); ?>
        <?php echo apply_filters('the_content', $shop_info); ?>
    </div>
<?php
}

/**
 * Set a minimum order amount for checkout
 */

add_action('woocommerce_checkout_process', 'wc_minimum_order_amount');
add_action('woocommerce_before_cart', 'wc_minimum_order_amount');

function wc_minimum_order_amount()
{
    // Set this variable to specify a minimum order value
    $minimum = 0;

    if (WC()->cart->total < $minimum) {
        if (is_cart()) {
            wc_print_notice(
                sprintf(
                    'El total de tu orden actual es %s — debes tener una orden con un mínimo de %s para poder procesar tu compra ',
                    wc_price(WC()->cart->total),
                    wc_price($minimum)
                ),
                'error'
            );
        } else {
            wc_add_notice(
                sprintf(
                    'El total de tu orden actual es %s — debes tener una orden con un mínimo de %s para poder procesar tu compra ',
                    wc_price(WC()->cart->total),
                    wc_price($minimum)
                ),
                'error'
            );
        }
    }
}

//add_action('woocommerce_before_shop_loop', 'custom_category_circle_links', 12);

function custom_category_circle_links()
{
    $arr_categories = get_terms(array('taxonomy' => 'product_cat', 'hide_empty' => true, 'order' => 'asc', 'orderby' => 'menu_order')); ?>
    <div class="category-menu-container">
        <?php
        foreach ($arr_categories as $term) {
            $thumbnail_id = get_term_meta($term->term_id, 'thumbnail_id', true);
            $image = wp_get_attachment_image_src($thumbnail_id, 'avatar', false); ?>
            <a href="<?php echo get_term_link($term); ?>" title="<?php _e('Haga click para ver esta categoría', 'gespetfood'); ?>">
                <img src="<?php echo $image[0]; ?>" alt="<?php echo $term->name; ?>" class="img-fluid" />
            </a>
        <?php
        } ?>
    </div>
<?php
}

// Just used for testing
function return_custom($id)
{
    return __(' para perros', 'gespetfood');
}

// Customizing cart item name in cart, checkout, orders and email notifications
add_action('woocommerce_before_calculate_totals', 'set_custom_cart_item_name', 10, 1);
function set_custom_cart_item_name($cart)
{
    if (is_admin() && ! defined('DOING_AJAX')) {
        return;
    }

    // Required since Woocommerce version 3.2 for cart items properties changes
    if (did_action('woocommerce_before_calculate_totals') >= 2) {
        return;
    }

    // Loop through cart items
    foreach ($cart->get_cart() as $cart_item) {
        // Get the product name and the product ID
        $product_name = $cart_item['data']->get_name();
        $product_id   = $cart_item['data']->get_id();

        // Set the new product name
        $cart_item['data']->set_name($product_name . return_custom($product_id));
    }
}

function update_title($title, $id = null)
{
    $prod=get_post($id);

    if (empty($prod->ID) || strcmp($prod->post_type, 'product')!=0) {
        return $title;
    }

    return $title.return_custom($prod->ID);
}

function update_product_title($title, $product)
{
    $product_id = $product->get_id();

    return $title.return_custom($product_id);
}

add_filter('woocommerce_product_title', 'update_product_title', 9999, 2);

add_filter('the_title', 'update_title', 10, 2);
