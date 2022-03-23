<?php
/**
* Template Name: Template - Pagina Gespetfood
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
        <?php $bg_banner_id = get_post_meta(get_the_ID(), 'gpf_gespetfood_about_img_id', true); ?>
        <?php $bg_banner = wp_get_attachment_image_src($bg_banner_id, 'full', false); ?>
        <section class="the-about col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12" style="background: url(<?php echo $bg_banner[0]; ?>);" data-aos="fade">
            <div class="container">
                <div class="row">
                    <div class="about-info col-xl-6 col-lg-6 col-md-7 col-sm-12 col-12">
                        <?php $about_content = get_post_meta(get_the_ID(), 'gpf_gespetfood_about_content', true); ?>
                        <?php echo apply_filters('the_content', $about_content); ?>
                    </div>
                    <div class="w-100"></div>
                </div>
            </div>
        </section>
        <section class="the-brochure col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12" data-aos="fade">
            <div class="container">
                <div class="row">
                    <div class="about-brochure col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                        <a href="<?php echo get_post_meta(get_the_ID(), 'gpf_gespetfood_about_brochure', true); ?>" target="_blank"><?php _e('Descargar catálogo de productos', 'gespetfood'); ?></a>
                    </div>
                </div>
            </div>
        </section>
        <section class="the-benefits col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="benefits-title col-12">
                        <h2><?php _e('GESPETFOOD asegura:', 'gespetfood'); ?></h2>
                    </div>
                    <div class="benefits-slider col-xl-8 col-lg-10 col-md-12 col-sm-12 col-12">
                        <div class="benefits-gallery-container swiper-container col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                            <?php $benefits_group = get_post_meta(get_the_ID(), 'gpf_benefits_group', true); ?>
                            <?php if (!empty($benefits_group)) { ?>
                            <div class="swiper-wrapper">

                                <?php foreach ($benefits_group as $benefits_item) { ?>
                                <div class="swiper-slide">
                                    <div class="benefits-item-wrapper">
                                        <?php $image = wp_get_attachment_image_src($benefits_item['icon_id'], 'full'); ?>
                                        <img itemprop="logo" content="<?php echo $image[0]; ?>" src="<?php echo $image[0]; ?>" title="<?php echo get_post_meta($benefits_item['icon_id'], '_wp_attachment_image_alt', true); ?>" alt="<?php echo get_post_meta($benefits_item['icon_id'], '_wp_attachment_image_alt', true); ?>" class="img-fluid" width="<?php echo $image[1]; ?>" height="<?php echo $image[2]; ?>" />
                                        <p><?php echo $benefits_item['desc']; ?></p>
                                    </div>
                                </div>
                                <?php } ?>
                            </div>
                            <?php } ?>

                            <div class="swiper-button-prev"></div>
                            <div class="swiper-button-next"></div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <?php $bg_banner_id = get_post_meta(get_the_ID(), 'gpf_gespetfood_team_img_id', true); ?>
        <?php $bg_banner = wp_get_attachment_image_src($bg_banner_id, 'full', false); ?>
        <section class="the-team col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12" style="background: url(<?php echo $bg_banner[0]; ?>);" data-aos="fade">
            <div class="container">
                <div class="row">
                    <div class="team-info col-xl-6 offset-xl-6 col-lg-7 offset-lg-5 col-md-7 offset-md-5 col-sm-12 col-12">
                        <h2><?php _e('Equipo', 'gespetfood'); ?></h2>
                        <?php $about_content = get_post_meta(get_the_ID(), 'gpf_gespetfood_team_content', true); ?>
                        <?php echo apply_filters('the_content', $about_content); ?>
                    </div>
                </div>
            </div>
        </section>
        <section class="the-logo-about col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
            <?php $awards_group = get_post_meta(get_the_ID(), 'gpf_gespetfood_logo_list', true); ?>
            <?php if ((!empty($awards_group)) || ($awards_group != '')) { ?>
            <?php foreach ($awards_group as $test_item) { ?>

            <img src="<?php echo $test_item['bg_image']; ?>" alt="" class="" s>
            <?php } ?>
            <?php } ?>
        </section>
        <section class="beneficios-text col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
            <div class="container">
                <div class="row align-items-center">
                    <div class="beneficios-text-title col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                        <?php echo apply_filters('the_content', get_post_meta(get_the_ID(), 'gpf_beneficios_text_title_2', true)); ?>
                    </div>
                    <div class="beneficios-content col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12 order-xl-1 order-lg-1 order-md-1 order-sm-12 order-12">
                        <div class="embed-responsive embed-responsive-21by9 mb-1">
                            <video class="embed-responsive-item" autoplay loop muted>
                                <source src="https://gespetfood.com/wp-content/uploads/2022/03/video.mp4" type="video/mp4">
                                <source src="https://gespetfood.com/wp-content/uploads/2022/03/video.webm" type="video/webm">
                                Your browser does not support the video tag.
                            </video>
                        </div>
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
    </div>
</main>
<?php get_footer(); ?>