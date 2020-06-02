<?php
/**
* Template Name: Template - Pagina de Contacto
*
* @package gespetfood
* @subpackage gespetfood-mk01-theme
* @since Mk. 1.0
*/
?>
<?php get_header(); ?>
<?php the_post(); ?>
<?php $header_options = get_option('gpf_header_settings'); ?>
<?php $social_options = get_option('gpf_social_settings'); ?>
<main class="container-fluid p-0" role="main" itemscope itemprop="mainContentOfPage" itemtype="http://schema.org/Blog">
    <div class="row no-gutters">
        <section class="the-slider col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
            <?php $slider_alias = get_post_meta(get_the_ID(), 'gpf_slider_rev', true); ?>
            <?php add_revslider($slider_alias); ?>
        </section>
        <section class="contact-main-dir col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12" data-aos="fade">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="contact-main-dir-content col-xl-10 col-lg-10 col-md-12 col-sm-12 col-12">
                        <?php the_content(); ?>
                    </div>
                </div>
            </div>
        </section>
        <section class="contact-extra-info col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12" data-aos="fade">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="contact-extra-info-content col-xl-10 col-lg-10 col-md-12 col-sm-12 col-12">
                        <?php echo apply_filters('the_content', get_post_meta(get_the_ID(), 'gpf_contact_info_content', true)); ?>
                    </div>
                </div>
            </div>
        </section>
        <section class="contact-extra-info col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12" data-aos="fade">
            <div class="container">
                <div class="row align-items-center justify-content-center">
                    <div class="contact-extra-info-content col-xl-10 col-lg-10 col-md-12 col-sm-12 col-12">
                        <div class="row align-items-center justify-content-center">
                            <div class="contact-extra-info-item contact-extra-social-info col-xl-4 col-lg-4 col-md-4 col-sm-12 col-12">
                                <a href="<?php echo $social_options['instagram']; ?>" title="<?php _e('Haz clic aquí para visitar nuestro perfil', 'gespetfood'); ?>" target="_blank"><i class="fa fa-instagram"></i></a>
                                <a href="<?php echo $social_options['linkedin']; ?>" title="<?php _e('Haz clic aquí para visitar nuestro perfil', 'gespetfood'); ?>" target="_blank"><i class="fa fa-linkedin"></i></a>
                            </div>
                            <div class="contact-extra-info-item contact-extra-mail-info col-xl-4 col-lg-4 col-md-4 col-sm-12 col-12">
                                <a href="mailto:<?php echo $header_options['email_address']; ?>" title="<?php _e('Haz clic aquí para dejar tu mensaje en nuestro correo electrónico', 'gespetfood'); ?>"><?php echo $header_options['email_address']; ?></a>
                                <a href="<?php echo $header_options['formatted_phone_number']; ?>" title="<?php _e('Haz clic aquí para llamar directamente a nuestro Master', 'gespetfood'); ?>"><?php echo $header_options['phone_number']; ?></a>
                            </div>
                            <div class="contact-extra-info-item col-xl-4 col-lg-4 col-md-4 col-sm-12 col-12">
                                 <a href=" https://www.amazon.es/s?k=GesPetFood&i=pets&rh=p_6%3AAGU4JNL7MI9BE&s=date-desc-rank&dc&qid=1589916349&rnid=831275031&ref=sr_nr_p_6_1" target="_blank" title="<?php _e('Visita nuestra tienda en Amazon.com', 'gespetfood'); ?>"><img src="<?php echo get_template_directory_uri(); ?>/images/amazon.png" alt="amazon" class="img-fluid" /></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="contact-embed-map col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12" data-aos="fade">
            <div class="container">
                <div class="row align-items-center justify-content-center">
                    <div class="contact-embed-map-content col-xl-8 col-lg-8 col-md-10 col-sm-12 col-12">
                        <div class="embed-responsive embed-responsive-16by9">
                            <?php echo get_post_meta(get_the_ID(), 'gpf_contact_embed_map', true); ?>
                        </div>
                    </div>
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
