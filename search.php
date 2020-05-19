<?php get_header(); ?>
<main class="container-fluid p-0" role="main" itemscope itemprop="mainContentOfPage" itemtype="http://schema.org/Blog">
    <div class="row no-gutters">
        <section class="the-slider col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
            <?php $shop_id = get_option( 'woocommerce_shop_page_id' );  ?>
            <?php $slider_alias = get_post_meta($shop_id, 'gpf_slider_rev', true); ?>
            <?php add_revslider($slider_alias); ?>
        </section>
    </div>
    <div class="row no-gutters">
        <div class="main-shop-container col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
            <div class="container">
                <div class="row">
                    <div class="shop-ifs-container col-12">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/ifs_food_Logo.png" alt="" class="img-fluid">
                        <?php $shop_info = get_post_meta($shop_id, 'gpf_shop_info', true); ?>
                        <?php echo apply_filters('the_content', $shop_info); ?>
                    </div>
                    <div class="main-shop-content col-12">
                        <?php if (have_posts()) : ?>
                        <div class="row">
                            <?php $defaultatts = array('class' => 'img-fluid', 'itemprop' => 'image'); ?>
                            <?php while (have_posts()) : the_post(); ?>

                            <article id="post-<?php the_ID(); ?>" class="archive-item col-xl-4 col-lg-4 col-md-6 col-sm-6 col-12 <?php echo join(' ', get_post_class()); ?>" role="article">
                                <div class="archive-item-wrapper">
                                    <div class="container p-0">
                                        <div class="row">
                                            <picture class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                                <?php if ( has_post_thumbnail()) : ?>
                                                <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
                                                    <?php the_post_thumbnail('full', $defaultatts); ?>
                                                </a>
                                                <?php else : ?>
                                                <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
                                                    <img itemprop="image" src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/no-img.jpg" alt="No img" class="img-fluid" />
                                                </a>
                                                <?php endif; ?>
                                            </picture>
                                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                                <header>
                                                    <div class="custom-star-container">
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                    </div>
                                                    <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
                                                        <h2 rel="bookmark" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></h2>
                                                    </a>
                                                    <?php $post_type_loop =  get_post_type( get_the_ID() ); ?>
                                                    <?php if ($post_type_loop == 'product') { ?>
                                                    <?php $product = new WC_Product( get_the_ID() ); ?>
                                                    <hr>
                                                    <span class="price"><?php echo $product->get_price_html(); ?></span>
                                                    <?php } ?>


                                                </header>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </article>
                            <?php endwhile; ?>
                            <div class="pagination col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                <?php if(function_exists('wp_paginate')) { wp_paginate(); } else { posts_nav_link(); wp_link_pages(); } ?>
                            </div>
                        </div>
                        <?php else: ?>
                        <section class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                            <h2><?php _e('Disculpe, su busqueda no arrojo ningun resultado', 'PROYECTO'); ?></h2>
                            <h3><?php _e('Dirígete nuevamente al', 'PROYECTO'); ?> <a href="<?php echo home_url('/'); ?>" title="<?php _e('Volver al Inicio', 'PROYECTO'); ?>"><?php _e('inicio', 'PROYECTO'); ?></a>.</h3>
                        </section>
                        <?php endif; ?>

                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
<?php get_footer(); ?>
