<?php get_header(); ?>
<?php $blogpage_id = get_page_by_title('Blog'); ?>
<?php $shop_id = get_option('woocommerce_shop_page_id');  ?>
<?php the_post(); ?>
<main class="container-fluid p-0">
    <div class="row no-gutters">
        <section class="the-slider col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
            <?php $slider_alias = get_post_meta($blogpage_id->ID, 'gpf_slider_rev', true); ?>
            <?php add_revslider($slider_alias); ?>
        </section>
        <div class="single-main-container col-12" role="main" itemscope itemprop="mainContentOfPage" itemtype="http://schema.org/Blog">
            <div class="container p-0">
                <div class="row justify-content-center">
                    <?php /* GET THE POST FORMAT */ ?>
                    <?php /* POST FORMAT - DEFAULT */ ?>
                    <?php $defaultatts = array('class' => 'img-fluid', 'itemprop' => 'image'); ?>
                    <article id="post-<?php the_ID(); ?>" class="the-single col-xl-10 col-lg-10 col-md-11 col-sm-12 col-12 <?php echo join(' ', get_post_class()); ?>" itemscope itemtype="http://schema.org/Article">
                        <header>
                            <h1 itemprop="name"><?php the_title(); ?></h1>
                        </header>
                        <?php if ( has_post_thumbnail()) : ?>
                        <picture class="post-thumbnail">
                            <?php the_post_thumbnail('single_img', $defaultatts); ?>
                        </picture>
                        <?php endif; ?>
                        <div class="post-content" itemprop="articleBody">
                            <?php the_content() ?>
                        </div><!-- .post-content -->
                        <meta itemprop="datePublished" datetime="<?php echo get_the_time('Y-m-d') ?>" content="<?php echo get_the_date('i') ?>">
                        <meta itemprop="author" content="<?php echo esc_attr(get_the_author()) ?>">
                        <meta itemprop="url" content="<?php the_permalink() ?>">
                    </article> <?php // end article ?>

                </div>
            </div>
        </div>
    </div>
</main>
<?php get_footer(); ?>