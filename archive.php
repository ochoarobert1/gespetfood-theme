<?php get_header(); ?>
<?php $shop_id = get_option('woocommerce_shop_page_id');  ?>
<?php $blogpage_id = get_page_by_title( 'Blog' ); ?>
<main class="container-fluid p-0" role="main" itemscope itemprop="mainContentOfPage" itemtype="http://schema.org/Blog">
    <div class="row no-gutters">
        <section class="the-slider col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
            <?php $slider_alias = get_post_meta($blogpage_id->post_id, 'gpf_slider_rev', true); ?>
            <?php add_revslider($slider_alias); ?>
        </section>
        <section class="blog-content col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
            <div class="container">
                <div class="row align-items-center">
                    <picture class="beneficios-picture col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                        <?php $bg_banner_id = get_post_meta($blogpage_id->post_id;, 'gpf_beneficios_image_content_1_id', true); ?>
                        <?php $bg_banner = wp_get_attachment_image_src($bg_banner_id, 'full', false); ?>
                        <img itemprop="image" content="<?php echo $bg_banner[0]; ?>" src="<?php echo $bg_banner[0]; ?>" title="<?php echo get_post_meta($bg_banner_id, '_wp_attachment_image_alt', true); ?>" alt="<?php echo get_post_meta($bg_banner_id, '_wp_attachment_image_alt', true); ?>" class="img-fluid" width="<?php echo $bg_banner[1]; ?>" height="<?php echo $bg_banner[2]; ?>" />
                    </picture>
                    <div class="beneficios-content col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                        <?php echo apply_filters('the_content', get_post_meta($blogpage_id->post_id;, 'gpf_beneficios_text_content_1', true)); ?>
                    </div>
                </div>
            </div>
        </section>
        <?php $bg_banner_id = get_post_meta($shop_id, 'gpf_shop_banner_id', true); ?>
        <?php if ($bg_banner_id != '') { ?>
        <section class="product-banner col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
            <?php $bg_banner = wp_get_attachment_image_src($bg_banner_id, 'full', false); ?>
            <img itemprop="image" content="<?php echo $bg_banner[0]; ?>" src="<?php echo $bg_banner[0]; ?>" title="<?php echo get_post_meta($bg_banner_id, '_wp_attachment_image_alt', true); ?>" alt="<?php echo get_post_meta($bg_banner_id, '_wp_attachment_image_alt', true); ?>" class="img-fluid" width="<?php echo $bg_banner[1]; ?>" height="<?php echo $bg_banner[2]; ?>" />
        </section>
        <?php } ?>

    </div>
</main>
<?php get_footer(); ?>