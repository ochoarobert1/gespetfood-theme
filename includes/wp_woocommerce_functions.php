<?php
/* WOOCOMMERCE CUSTOM COMMANDS */

/* WOOCOMMERCE - DECLARE THEME SUPPORT - BEGIN */
add_action( 'after_setup_theme', 'woocommerce_support' );
function woocommerce_support() {
    add_theme_support( 'woocommerce' );
    add_theme_support( 'wc-product-gallery-zoom' );
    add_theme_support( 'wc-product-gallery-lightbox' );
    add_theme_support( 'wc-product-gallery-slider' );
}
/* WOOCOMMERCE - DECLARE THEME SUPPORT - END */

/* WOOCOMMERCE - CUSTOM WRAPPER - BEGIN */
remove_action( 'woocommerce_before_main_content', 'woocommerce_output_content_wrapper', 10);
remove_action( 'woocommerce_after_main_content', 'woocommerce_output_content_wrapper_end', 10);

add_action('woocommerce_before_main_content', 'my_theme_wrapper_start', 10);
add_action('woocommerce_after_main_content', 'my_theme_wrapper_end', 10);

function my_theme_wrapper_start() {
    echo '<section id="main" class="container-fluid"><div class="row"><div class="woocustom-main-container col-12">';
}

function my_theme_wrapper_end() {
    echo '</div></div></section>';
}
/* WOOCOMMERCE - CUSTOM WRAPPER - END */

remove_action('woocommerce_before_main_content', 'woocommerce_breadcrumb', 20);

remove_action('woocommerce_after_shop_loop_item', 'woocommerce_template_loop_add_to_cart', 10);

remove_action('woocommerce_after_shop_loop_item_title', 'woocommerce_template_loop_rating', 5);

add_action('woocommerce_shop_loop_item_title', 'woocommerce_custom_rating_handler', 5);

function woocommerce_custom_rating_handler() {
    ob_start();
?>
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


add_action('woocommerce_single_product_summary', 'woocommerce_custom_shipping_button', 40);

function woocommerce_custom_shipping_button() {
    global $woocommerce;
    $checkout_url = $woocommerce->cart->get_checkout_url();
    $shop_id = get_option( 'woocommerce_shop_page_id' );
?>
<a href="<?php echo $checkout_url; ?>" class="btn btn-md btn-back-shop"><?php _e('Finalizar Compra', 'gespetfood'); ?></a>
<a href="<?php echo get_permalink($shop_id); ?>" class="btn btn-md btn-back-shop"><?php _e('Volver a Tienda', 'gespetfood'); ?></a>
<?php 
}

add_action('woocommerce_cart_coupon', 'themeprefix_back_to_store');

function themeprefix_back_to_store() { ?>
<a class="button wc-backward" href="<?php echo esc_url( wc_get_page_permalink( 'shop' ) ); ?>"> <?php _e( 'Return to shop', 'woocommerce' ) ?> </a>
<?php
                                     }

add_action('woocommerce_after_single_product_summary', 'custom_woocommerce_single_info', 18);

function custom_woocommerce_single_info() {
    $shop_id = get_option( 'woocommerce_shop_page_id' );
?>

<section class="shop-logo-first col-xl-10 offset-xl-1 col-lg-12 col-md-12 col-sm-12 col-12">
    <?php $awards_group = get_post_meta($shop_id, 'gpf_shop_logo1_list', true); ?>
    <?php if ((!empty($awards_group)) || ($awards_group != '')) { ?>
    <?php foreach ( $awards_group as $test_item ) { ?>
    <img src="<?php echo $test_item['bg_image']; ?>" alt="" class="">
    <?php } ?>
    <?php } ?>
</section>
<div class="shop-ifs-container col-12">
    <?php $shop_info = get_post_meta($shop_id, 'gpf_shop_ind_info', true); ?>
    <?php echo apply_filters('the_content', $shop_info); ?>
</div>
<?php 
}
