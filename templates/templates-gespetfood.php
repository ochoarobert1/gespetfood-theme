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
                        <img src="<?php echo get_template_directory_uri(); ?>/images/cat-sprite.png" alt="brochure" class="img-fluid" />
                        <a href="<?php echo get_post_meta(get_the_ID(), 'gpf_gespetfood_about_brochure', true); ?>"><?php _e('Descargar catálogo de productos', 'gespetfood'); ?></a>
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
                        <div class="benefits-gallery-container swiper-container">
                            <?php $benefits_group = get_post_meta(get_the_ID(), 'gpf_benefits_group', true); ?>
                            <?php if (!empty($benefits_group)) { ?>
                            <div class="swiper-wrapper">

                                <?php foreach ($benefits_group as $benefits_item) { ?>
                                <div class="swiper-slide">
                                    <div class="benefits-item-wrapper">
                                        <img src="<?php echo $benefits_item['icon']; ?>" alt="Brands" class="img-fluid" />
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
    </div>
</main>
<?php get_footer(); ?>
