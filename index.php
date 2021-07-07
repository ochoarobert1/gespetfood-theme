<?php get_header(); ?>
<?php $shop_id = get_option('woocommerce_shop_page_id');  ?>
<?php $blogpage_id = get_page_by_title('Blog'); ?>
<main class="container-fluid blog-container p-0" role="main" itemscope itemprop="mainContentOfPage" itemtype="http://schema.org/Blog">
    <div class="row no-gutters">
        <section class="the-slider col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
            <?php $slider_alias = get_post_meta($blogpage_id->ID, 'gpf_slider_rev', true); ?>
            <?php add_revslider($slider_alias); ?>
        </section>
        <section class="blog-intro-content col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
            <img src="<?php echo get_template_directory_uri(); ?>/images/black-spot.png" alt="Black spot" class="img-fluid img-blog-1" />
            <img src="<?php echo get_template_directory_uri(); ?>/images/black-spot2.png" alt="Black spot" class="img-fluid img-blog-2" />
            <img src="<?php echo get_template_directory_uri(); ?>/images/bg_shop3.png" alt="Black spot" class="img-fluid img-blog-3" />
            <img src="<?php echo get_template_directory_uri(); ?>/images/bg_shop5.png" alt="Black spot" class="img-fluid img-blog-4" />
            <div class="container">
                <div class="row align-items-center">
                    <picture class="beneficios-picture col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                        <?php $bg_banner_id = get_post_thumbnail_id($blogpage_id->ID); ?>
                        <?php $bg_banner = wp_get_attachment_image_src($bg_banner_id, 'full', false); ?>
                        <img itemprop="image" content="<?php echo $bg_banner[0]; ?>" src="<?php echo $bg_banner[0]; ?>" title="<?php echo get_post_meta($bg_banner_id, '_wp_attachment_image_alt', true); ?>" alt="<?php echo get_post_meta($bg_banner_id, '_wp_attachment_image_alt', true); ?>" class="img-fluid" width="<?php echo $bg_banner[1]; ?>" height="<?php echo $bg_banner[2]; ?>" />
                    </picture>
                    <div class="beneficios-content col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                        <?php echo apply_filters('the_content', get_post_meta($blogpage_id->ID, 'gpf_blog_content', true)); ?>
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
        <section class="blog-inner-container col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
            <div class="container">
                <div class="row">
                    <?php if (have_posts()) : ?>

                    <?php while (have_posts()) : the_post(); ?>
                    <div class="blog-item col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                        <div class="container">
                            <div class="row align-items-center">
                                <div class="blog-item-image col-xl-3 col-lg-3 col-md-4 col-sm-12 col-12">
                                    <a href="<?php the_permalink(); ?>" title="<?php _e('Leer Más', 'gespetfood'); ?>">
                                        <?php the_post_thumbnail( 'blog_img', array('class' => 'img-fluid d-xl-block d-lg-block d-md-block d-sm-none d-none') )?>
                                        <?php the_post_thumbnail( 'large', array('class' => 'img-fluid img-blog-item d-xl-none d-lg-none d-md-none d-sm-block d-block') )?>
                                    </a>
                                </div>
                                <div class="blog-item-content col-xl-9 col-lg-9 col-md-8 col-sm-12 col-12">
                                    <h2><?php the_title(); ?></h2>
                                    <?php the_excerpt(); ?>
                                    <div class="blog-item-link">
                                        <a href="<?php the_permalink(); ?>" title="<?php _e('Leer Más', 'gespetfood'); ?>"><?php _e('Leer Más', 'gespetfood'); ?></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php endwhile; ?>

                    <?php endif; ?>
                    <?php wp_reset_query(); ?>
                </div>
            </div>
        </section>
        <?php echo get_template_part('templates/template-part-testimonials'); ?>
    </div>
</main>
<?php get_footer(); ?>