<?php
/**
* Template Name: Template - Pagina Inicio
*
* @package gespetfood
* @subpackage gespetfood-mk01-theme
* @since Mk. 1.0
*/
?>
<?php get_header(); ?>
<?php the_post(); ?>
<main class="container-fluid p-0" role="main" itemscope itemprop="mainContentOfPage" itemtype="http://schema.org/Blog">
    <div class="row no-gutters">
        <section class="the-slider col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
            <?php $slider_alias = get_post_meta(get_the_ID(), 'gpf_slider_rev', true); ?>
            <?php add_revslider($slider_alias); ?>
        </section>
        <section class="ads-banner-container col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
            <div class="container">
                <div class="row">
                    <div class="ads-banner-content col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                        <?php $bg_banner_id = get_post_meta(get_the_ID(), 'gpf_home_ads_banner_id', true); ?>
                        <?php if ($bg_banner_id != '') { ?>
                        <?php $bg_banner = wp_get_attachment_image_src($bg_banner_id, 'full', false); ?>
                        <img itemprop="image" content="<?php echo $bg_banner[0]; ?>" src="<?php echo $bg_banner[0]; ?>" title="<?php echo get_post_meta($bg_banner_id, '_wp_attachment_image_alt', true); ?>" alt="<?php echo get_post_meta($bg_banner_id, '_wp_attachment_image_alt', true); ?>" class="img-fluid" width="<?php echo $bg_banner[1]; ?>" height="<?php echo $bg_banner[2]; ?>" />
                        <?php } ?>
                    </div>
                </div>
            </div>
        </section>
        <section class="main-home-container col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
            <div class="container">
                <div class="row">
                    <div class="main-home-content col-xl-7 col-lg-7 col-md-6 col-sm-12 col-12">
                        <?php the_content(); ?>
                    </div>
                    <div class="main-home-picture col-xl-7 col-lg-7 col-md-6 col-sm-12 col-12">
                        <?php the_post_thumbnail('full', array('class' => 'img-fluid img-main-home')); ?>
                    </div>
                </div>
            </div>
        </section>
        <section class="main-home-categories col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
            <div class="container">
                <div class="row">
                    <div class="main-home-categories-content col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                        <h2><?php _e('¿Cuál es el premio favorito de tu perro?', 'gespetfood'); ?></h2>
                        <?php custom_category_circle_links(); ?>
                    </div>
                </div>
            </div>
        </section>
        <section class="main-home-shop col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
            <div class="container">
                <div class="row">
                    <div class="main-home-shop-content woocommerce">
                        <ul class="products columns-4">
                            <?php $arr_products = new WP_Query(array('post_type' => 'product', 'posts_per_page' => -1, 'order' => 'DESC', 'orderby' => 'date')); ?>
                            <?php if ($arr_products->have_posts()) : ?>
                            <?php while ($arr_products->have_posts()) : $arr_products->the_post(); ?>

                            <?php do_action('woocommerce_shop_loop'); ?>
                            <?php wc_get_template_part('content', 'product'); ?>

                            <?php endwhile; ?>
                            <?php endif; ?>
                            <?php wp_reset_query(); ?>
                        </ul>
                    </div>
                </div>
            </div>
        </section>
        <div class="main-home-testimonials col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
            <div class="container">
                <div class="row">
                    <div class="main-home-testimonials-content col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                        <h2><?php _e('Clientes Felices', 'gespetfood'); ?></h2>

                    </div>
                </div>
            </div>
        </div>
        <section class="additional-info-container col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
            <div class="container">
                <div class="row">
                    <?php $shop_id = get_option('woocommerce_shop_page_id');  ?>
                    <div class="shop-ifs-container col-12">
                        <?php $shop_info = get_post_meta($shop_id, 'gpf_shop_info', true); ?>
                        <?php echo apply_filters('the_content', $shop_info); ?>
                    </div>
                    <section class="shop-logo-first col-xl-10 offset-xl-1 col-lg-12 col-md-12 col-sm-12 col-12">
                        <?php $awards_group = get_post_meta($shop_id, 'gpf_shop_logo1_list', true); ?>
                        <?php if ((!empty($awards_group)) || ($awards_group != '')) { ?>
                        <?php foreach ($awards_group as $test_item) { ?>
                        <?php $image = wp_get_attachment_image_src($test_item['bg_image_id'], 'logo_size'); ?>
                        <img itemprop="logo" content="<?php echo $image[0]; ?>" src="<?php echo $image[0]; ?>" title="<?php echo get_post_meta($test_item['bg_image_id'], '_wp_attachment_image_alt', true); ?>" alt="<?php echo get_post_meta($test_item['bg_image_id'], '_wp_attachment_image_alt', true); ?>" class="img-fluid" width="<?php echo $image[1]; ?>" height="<?php echo $image[2]; ?>" />
                        <?php } ?>
                        <?php } ?>
                    </section>
                    <section class="shop-logo-second col-xl-8 offset-xl-2 col-lg-8 offset-lg-2 col-md-12 col-sm-12 col-12">
                        <?php $awards_group = get_post_meta($shop_id, 'gpf_shop_logo2_list', true); ?>
                        <?php if ((!empty($awards_group)) || ($awards_group != '')) { ?>
                        <?php foreach ((array) $awards_group as $attachment_id => $attachment_url) { ?>
                        <?php $image = wp_get_attachment_image_src($attachment_id, 'custom_logos'); ?>
                        <img itemprop="logo" content="<?php echo $image[0]; ?>" src="<?php echo $image[0]; ?>" title="<?php echo get_post_meta($attachment_id, '_wp_attachment_image_alt', true); ?>" alt="<?php echo get_post_meta($attachment_id, '_wp_attachment_image_alt', true); ?>" class="img-fluid" width="<?php echo $image[1]; ?>" height="<?php echo $image[2]; ?>" />
                        <?php } ?>
                        <?php } ?>
                    </section>
                </div>
            </div>
        </section>

    </div>
</main>
<?php get_footer(); ?>