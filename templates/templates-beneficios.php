<?php

/**
 * Template Name: Template - Pagina Beneficios
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
        <section class="beneficios-text beneficios-text1 col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
            <div class="container">
                <div class="row align-items-center">
                    <picture class="beneficios-picture col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                        <?php $bg_banner_id = get_post_meta(get_the_ID(), 'gpf_beneficios_image_content_1_id', true); ?>
                        <?php $bg_banner = wp_get_attachment_image_src($bg_banner_id, 'full', false); ?>
                        <img itemprop="image" content="<?php echo $bg_banner[0]; ?>" src="<?php echo $bg_banner[0]; ?>" title="<?php echo get_post_meta($bg_banner_id, '_wp_attachment_image_alt', true); ?>" alt="<?php echo get_post_meta($bg_banner_id, '_wp_attachment_image_alt', true); ?>" class="img-fluid" width="<?php echo $bg_banner[1]; ?>" height="<?php echo $bg_banner[2]; ?>" />
                    </picture>
                    <div class="beneficios-content col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                        <?php echo apply_filters('the_content', get_post_meta(get_the_ID(), 'gpf_beneficios_text_content_1', true)); ?>
                    </div>
                </div>
            </div>
        </section>
        <section class="beneficios-text beneficios-text2 col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
            <img src="<?php echo get_template_directory_uri(); ?>/images/yellow-spot.png" alt="Yellow spot" class="img-fluid img-floated">
            <div class="container">
                <div class="row align-items-center">
                    <div class="beneficios-content col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12 order-xl-1 order-lg-1 order-md-1 order-sm-12 order-12">
                        <?php echo apply_filters('the_content', get_post_meta(get_the_ID(), 'gpf_beneficios_text_content_2', true)); ?>
                    </div>
                    <picture class="beneficios-picture col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12 order-xl-12 order-lg-12 order-md-12 order-sm-1 order-1">
                        <?php $bg_banner_id = get_post_meta(get_the_ID(), 'gpf_beneficios_image_content_2_id', true); ?>
                        <?php $bg_banner = wp_get_attachment_image_src($bg_banner_id, 'full', false); ?>
                        <img itemprop="image" content="<?php echo $bg_banner[0]; ?>" src="<?php echo $bg_banner[0]; ?>" title="<?php echo get_post_meta($bg_banner_id, '_wp_attachment_image_alt', true); ?>" alt="<?php echo get_post_meta($bg_banner_id, '_wp_attachment_image_alt', true); ?>" class="img-fluid" width="<?php echo $bg_banner[1]; ?>" height="<?php echo $bg_banner[2]; ?>" />
                    </picture>
                </div>
            </div>
        </section>
        <section class="beneficios-text beneficios-text3 col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
        <img src="<?php echo get_template_directory_uri(); ?>/images/yellow-spot2.png" alt="Yellow spot" class="img-fluid img-floated">
        <img src="<?php echo get_template_directory_uri(); ?>/images/black-spot.png" alt="Yellow spot" class="img-fluid img-floated2">
        <img src="<?php echo get_template_directory_uri(); ?>/images/black-spot2.png" alt="Yellow spot" class="img-fluid img-floated3">
            <div class="container">
                <div class="row align-items-center">
                    <picture class="beneficios-picture col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                        <?php $bg_banner_id = get_post_meta(get_the_ID(), 'gpf_beneficios_image_content_3_id', true); ?>
                        <?php $bg_banner = wp_get_attachment_image_src($bg_banner_id, 'full', false); ?>
                        <img itemprop="image" content="<?php echo $bg_banner[0]; ?>" src="<?php echo $bg_banner[0]; ?>" title="<?php echo get_post_meta($bg_banner_id, '_wp_attachment_image_alt', true); ?>" alt="<?php echo get_post_meta($bg_banner_id, '_wp_attachment_image_alt', true); ?>" class="img-fluid" width="<?php echo $bg_banner[1]; ?>" height="<?php echo $bg_banner[2]; ?>" />
                    </picture>
                    <div class="beneficios-content col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                        <?php echo apply_filters('the_content', get_post_meta(get_the_ID(), 'gpf_beneficios_text_content_3', true)); ?>
                    </div>
                </div>
            </div>
        </section>
    </div>
</main>
<?php get_footer(); ?>