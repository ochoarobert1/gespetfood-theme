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
      
        <section class="contact-embed-form col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12" data-aos="fade">
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
    </div>
</main>
<?php get_footer(); ?>