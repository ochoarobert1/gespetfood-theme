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
                        <img src="<?php echo get_template_directory_uri(); ?>/images/ifs_food_Logo.png" alt="" class="img-fluid" />
                        <div class="w-100"></div>
                        <img src="<?php echo get_template_directory_uri(); ?>/images/sellos.png" alt="" class="img-fluid" />
                    </div>
                </div>
            </div>

        </section>
    </div>
</main>
<?php get_footer(); ?>
