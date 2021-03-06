<?php
/**
* Template Name: Template - Promociones
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
        <section class="the-ifs col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
            <div class="container">
                <div class="row">
                    <div class="ifs-contact-container col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                        <?php get_template_part('templates/contact-form'); ?>
                    </div>
                    <div class="ifs-contact-container col-xl-3 col-lg-3 col-md-3 col-sm-6 col-12">
                        <?php the_content(); ?>
                    </div>
                    <div class="ifs-contact-container col-xl-3 col-lg-3 col-md-3 col-sm-6 col-12">
                        <?php $logo_content = get_post_meta(get_the_ID(), 'gpf_home_logos_content', true); ?>
                        <?php echo apply_filters('the_content', $logo_content); ?>
                    </div>
                </div>
            </div>

        </section>
    </div>
</main>
<?php get_footer(); ?>