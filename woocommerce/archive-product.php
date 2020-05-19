<?php
/**
 * The Template for displaying product archives, including the main shop page which is a post type archive
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/archive-product.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce/Templates
 * @version 3.4.0
 */

defined( 'ABSPATH' ) || exit;

get_header( 'shop' );
?>
<main class="container-fluid p-0" role="main" itemscope itemprop="mainContentOfPage" itemtype="http://schema.org/Blog">
    <div class="row no-gutters">
        <section class="the-slider col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
            <?php $shop_id = get_option( 'woocommerce_shop_page_id' );  ?>
            <?php $slider_alias = get_post_meta($shop_id, 'gpf_slider_rev', true); ?>
            <?php add_revslider($slider_alias); ?>
        </section>
    </div>
    <div class="row no-gutters">
        <div class="main-shop-container col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
            <div class="container">
                <div class="row">

                    <div class="main-shop-content col-12">
                        <?php 
                        /**
 * Hook: woocommerce_before_main_content.
 *
 * @hooked woocommerce_output_content_wrapper - 10 (outputs opening divs for the content)
 * @hooked woocommerce_breadcrumb - 20
 * @hooked WC_Structured_Data::generate_website_data() - 30
 */
                        do_action( 'woocommerce_before_main_content' );
                        /*
                        ?>

                        <header class="woocommerce-products-header col-12">
                            <?php if ( apply_filters( 'woocommerce_show_page_title', true ) ) : ?>
                            <h1 class="woocommerce-products-header__title page-title"><?php woocommerce_page_title(); ?></h1>
                            <?php endif; ?>

                            <?php

            do_action( 'woocommerce_archive_description' );

                        ?>
                        </header>
                        <?php */ ?>
                        <div class="woocommerce-custom-shop-container col-12">
                            <?php

                            if ( woocommerce_product_loop() ) {

                                /**
	 * Hook: woocommerce_before_shop_loop.
	 *
	 * @hooked woocommerce_output_all_notices - 10
	 * @hooked woocommerce_result_count - 20
	 * @hooked woocommerce_catalog_ordering - 30
	 */
                                do_action( 'woocommerce_before_shop_loop' );

                                woocommerce_product_loop_start();

                                if ( wc_get_loop_prop( 'total' ) ) {
                                    while ( have_posts() ) {
                                        the_post();

                                        /**
			 * Hook: woocommerce_shop_loop.
			 */
                                        do_action( 'woocommerce_shop_loop' );

                                        wc_get_template_part( 'content', 'product' );
                                    }
                                }

                                woocommerce_product_loop_end();

                                /**
	 * Hook: woocommerce_after_shop_loop.
	 *
	 * @hooked woocommerce_pagination - 10
	 */
                                do_action( 'woocommerce_after_shop_loop' );
                            } else {
                                /**
	 * Hook: woocommerce_no_products_found.
	 *
	 * @hooked wc_no_products_found - 10
	 */
                                do_action( 'woocommerce_no_products_found' );
                            }

                            /**
 * Hook: woocommerce_after_main_content.
 *
 * @hooked woocommerce_output_content_wrapper_end - 10 (outputs closing divs for the content)
 */
                            do_action( 'woocommerce_after_main_content' );
                            ?>
                        </div>
                    </div>
                    <div class="shop-ifs-container col-12">
                        <?php $shop_info = get_post_meta($shop_id, 'gpf_shop_info', true); ?>
                        <?php echo apply_filters('the_content', $shop_info); ?>
                    </div>
                    <section class="shop-logo-first col-xl-10 offset-xl-1 col-lg-12 col-md-12 col-sm-12 col-12">
                        <?php $awards_group = get_post_meta($shop_id, 'gpf_shop_logo1_list', true); ?>
                        <?php if ((!empty($awards_group)) || ($awards_group != '')) { ?>
                        <?php foreach ( $awards_group as $test_item ) { ?>
                        <?php $url = $test_item['url']; ?>
                        <a <?php if ($url != '') { ?> href="<?php echo $test_item['url']; ?>" target="_blank" <?php } ?>><img src="<?php echo $test_item['bg_image']; ?>" alt=""></a>
                        <?php } ?>
                        <?php } ?>
                    </section>
                    <section class="shop-logo-second col-xl-10 offset-xl-1 col-lg-12 col-md-12 col-sm-12 col-12">
                        <?php $awards_group = get_post_meta($shop_id, 'gpf_shop_logo2_list', true); ?>
                        <?php if ((!empty($awards_group)) || ($awards_group != '')) { ?>
                        <?php foreach ( (array) $awards_group as $attachment_id => $attachment_url ) { ?>
                        <?php echo wp_get_attachment_image( $attachment_id, 'medium', array('class' => 'img-fluid') ); ?>
                        <?php } ?>
                        <?php } ?>
                    </section>
                </div>
            </div>
        </div>
    </div>
</main>
<?php
get_footer( 'shop' );
