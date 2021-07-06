<section class="testimonials-container col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
    <div class="container">
        <div class="row">
            <div class="testimonials-title col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                <h2><?php _e('¡Clientes Felices!', 'gespetfood'); ?></h2>
            </div>
            <?php $shop_id = get_option('woocommerce_shop_page_id');  ?>
            <?php $slider_content = get_post_meta($shop_id, 'gpf_shop_testimonials_list', true); ?>
            <?php if (!empty($slider_content)) { ?>
            <div class="testimonials-content col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                <div class="testimonials-slider swiper-container">
                    <div class="swiper-wrapper">
                        <?php foreach ($slider_content as $item) { ?>
                        <div class="swiper-slide">
                            <div class="container">
                                <div class="row">
                                    <div class="testimonial-block testimonial-big col-xl-4 col-lg-4 col-md-8 col-sm-6 col-12">
                                        <div class="testimonial-wrapper">
                                            <div class="star-container">
                                                <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i>
                                            </div>
                                            <?php echo apply_filters('the_content', $item['text1']); ?>
                                        </div>
                                    </div>
                                    <div class="testimonial-block testimonial-image col-xl-4 col-lg-4 col-md-4 col-sm-6 col-12">
                                        <div class="testimonial-image-wrapper">
                                            <?php $image = wp_get_attachment_image_src($item['main_image_id'], 'full'); ?>
                                            <img itemprop="logo" content="<?php echo $image[0]; ?>" src="<?php echo $image[0]; ?>" title="<?php echo get_post_meta($test_item['bg_image_id'], '_wp_attachment_image_alt', true); ?>" alt="<?php echo get_post_meta($test_item['bg_image_id'], '_wp_attachment_image_alt', true); ?>" class="img-fluid" width="<?php echo $image[1]; ?>" height="<?php echo $image[2]; ?>" />
                                        </div>
                                    </div>
                                    <div class="testimonial-block testimonial-small col-xl-4 col-lg-4 col-md-12 col-sm-12 col-12">
                                        <div class="row">
                                            <div class="testimonial-small-content col-xl-12 col-lg-12 col-md-6 col-sm-6 col-12">
                                                <div class="testimonial-wrapper">
                                                    <div class="star-container">
                                                        <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i>
                                                    </div>
                                                    <?php echo apply_filters('the_content', $item['text2']); ?>
                                                </div>
                                            </div>
                                            <div class="testimonial-small-content col-xl-12 col-lg-12 col-md-6 col-sm-6 col-12">
                                                <div class="testimonial-wrapper">
                                                    <div class="star-container">
                                                        <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i>
                                                    </div>
                                                    <?php echo apply_filters('the_content', $item['text3']); ?>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php } ?>
                    </div>
                    <div class="swiper-button-prev"></div>
                    <div class="swiper-button-next"></div>
                </div>
            </div>
            <?php } ?>
        </div>
    </div>
</section>