<?php
/**
* Template Name: Template - Pagina Mayoristas
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
        <?php // $bg_banner = wp_get_attachment_image_src($bg_banner_id, 'full', false);?>
        <?php $bg_banner = get_the_post_thumbnail_url(get_the_ID(), 'full'); ?>
        <section class="wholesale col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12" style="background: #191919 url(<?php echo $bg_banner;?>);" data-aos="fade">
            <div class="container container-wholesale">
                <div class="row no-gutters align-items-center">
                    <div class="wholesale-info col-xl-8 col-lg-12 col-md-12 col-sm-12 col-12">
                        <?php the_content(); ?>
                    </div>
                    <div class="w-100"></div>
                </div>
            </div>
        </section>
        <section class="wholesale-embed-form col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12" data-aos="fade">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="contact-form-content col-xl-10 col-lg-10 col-md-12 col-sm-12 col-12">
                        <div class="col-12">
                            <h2><?php _e('contáctanos', 'gespetfood'); ?></h2>
                        </div>
                        <?php echo get_template_part('templates/contact-form'); ?>
                    </div>
                </div>
            </div>
        </section>
        <section class="wholesale-catalog-container col-12">
            <h2><?php _e('¿Quieres más información?', 'gespetfood'); ?></h2>
            <a href="<?php echo get_post_meta(get_the_ID(), 'gpf_mayoristas_link_url', true); ?>" target="_blank" class="btn btn-md btn-wholesale"><?php _e('Descarga el catálogo', 'gespetfood'); ?></a>
        </section>
    </div>
</main>
<?php get_footer(); ?>