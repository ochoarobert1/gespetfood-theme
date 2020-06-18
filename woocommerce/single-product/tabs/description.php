<?php
/**
 * Description tab
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/single-product/tabs/description.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce/Templates
 * @version 2.0.0
 */

defined( 'ABSPATH' ) || exit;

global $post;

$heading = apply_filters( 'woocommerce_product_description_heading', __( 'Description', 'woocommerce' ) );

?>
<?php $shop_id = get_option( 'woocommerce_shop_page_id' );  ?>
<?php if ( $heading ) : ?>
<h2><?php echo esc_html( $heading ); ?></h2>
<?php endif; ?>

<?php the_content(); ?>

<div class="custom-description-content col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
    <div class="row">
        <div class="custom-description-content-info col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
            <?php echo apply_filters('the_content', get_post_meta(get_the_ID(), 'gpf_product_table1', true)); ?>
        </div>
        <div class="custom-description-content-info custom-ingredients col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
            <?php echo apply_filters('the_content', get_post_meta(get_the_ID(), 'gpf_product_table2', true)); ?>
            <section class="shop-logo-second col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                <?php $awards_group = get_post_meta($shop_id, 'gpf_shop_logo2_list', true); ?>
                <?php if ((!empty($awards_group)) || ($awards_group != '')) { ?>
                <?php foreach ( (array) $awards_group as $attachment_id => $attachment_url ) { ?>
                <?php $image = wp_get_attachment_image_src( $attachment_id, 'custom_logos' ); ?>
                <img itemprop="logo" content="<?php echo $image[0];?>" src="<?php echo $image[0];?>" title="<?php echo get_post_meta( $attachment_id, '_wp_attachment_image_alt', true ); ?>" alt="<?php echo get_post_meta( $attachment_id, '_wp_attachment_image_alt', true ); ?>" class="img-fluid" width="<?php echo $image[1]; ?>" height="<?php echo $image[2]; ?>" />
                <?php } ?>
                <?php } ?>
            </section>
        </div>
    </div>
</div>
