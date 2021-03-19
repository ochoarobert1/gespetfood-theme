<!DOCTYPE html>
<html <?php language_attributes() ?>>

<head>
    <?php /* MAIN STUFF */ ?>
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta http-equiv="Content-Type" content="text/html; charset=<?php bloginfo('charset') ?>" />
    <meta name="robots" content="NOODP, INDEX, FOLLOW" />
    <meta name="HandheldFriendly" content="True" />
    <meta name="MobileOptimized" content="320" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="pingback" href="<?php echo esc_url(get_bloginfo('pingback_url')); ?>" />
    <link rel="profile" href="http://gmpg.org/xfn/11" />
    <link rel="dns-prefetch" href="//connect.facebook.net" />
    <link rel="dns-prefetch" href="//facebook.com" />
    <link rel="dns-prefetch" href="//googleads.g.doubleclick.net" />
    <link rel="dns-prefetch" href="//pagead2.googlesyndication.com" />
    <link rel="dns-prefetch" href="//google-analytics.com" />
    <?php /* FAVICONS */ ?>
    <link rel="apple-touch-icon" href="<?php echo get_template_directory_uri(); ?>/images/apple-touch-icon.png" />
    <?php /* THEME NAVBAR COLOR */ ?>
    <meta name="msapplication-TileColor" content="#E59E36" />
    <meta name="msapplication-TileImage" content="<?php echo get_template_directory_uri(); ?>/images/win8-tile-icon.png" />
    <meta name="theme-color" content="#E59E36" />
    <?php /* AUTHOR INFORMATION */ ?>
    <meta name="language" content="<?php echo get_bloginfo('language'); ?>" />
    <meta name="author" content="Gespetfood" />
    <meta name="copyright" content="https://gespetfood.com" />
    <meta name="geo.position" content="40.267636,-3.811355" />
    <meta name="ICBM" content="40.267636,-3.811355" />
    <meta name="geo.region" content="ES" />
    <meta name="geo.placename" content="Sauce #2, 28970 Humanes de Madrid (Madrid), España" />
    <meta name="keywords" content="Perro, Comida mascota, Premio perro, Hueso, Hueso de jamón, Tienda de mascotas, Mascotas, Perro amazon, dog snacks, dog shop, Snacks shop, Dog food, Dog store, Ham bone, dog store" />
    <meta name="DC.title" content="<?php if (is_home()) {
                                        echo get_bloginfo('name') . ' | ' . get_bloginfo('description');
                                    } else {
                                        echo get_the_title() . ' | ' . get_bloginfo('name');
                                    } ?>" />
    <?php /* MAIN TITLE - CALL HEADER MAIN FUNCTIONS */ ?>
    <?php wp_title('|', false, 'right'); ?>
    <?php wp_head() ?>
    <?php /* OPEN GRAPHS INFO - COMMENTS SCRIPTS */ ?>
    <?php if (is_singular() && get_option('thread_comments')) wp_enqueue_script('comment-reply'); ?>
    <?php /* IE COMPATIBILITIES */ ?>
    <!--[if lt IE 7]><html <?php language_attributes(); ?> class="no-js lt-ie9 lt-ie8 lt-ie7" /><![endif]-->
    <!--[if (IE 7)&!(IEMobile)]><html <?php language_attributes(); ?> class="no-js lt-ie9 lt-ie8" /><![endif]-->
    <!--[if (IE 8)&!(IEMobile)]><html <?php language_attributes(); ?> class="no-js lt-ie9" /><![endif]-->
    <!--[if gt IE 8]><!-->
    <html <?php language_attributes(); ?> class="no-js" />
    <!--<![endif]-->
    <!--[if IE]> <script type="text/javascript" src="https://cdn.jsdelivr.net/html5shiv/3.7.2/html5shiv.min.js"></script> <![endif]-->
    <!--[if IE]> <script type="text/javascript" src="https://cdn.jsdelivr.net/respond/1.4.2/respond.min.js"></script> <![endif]-->
    <!--[if IE]> <link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/favicon.ico" /> <![endif]-->
</head>

<body class="the-main-body <?php echo join(' ', get_body_class()); ?>" itemscope itemtype="http://schema.org/WebPage">
    <div id="fb-root"></div>
    <?php $header_options = get_option('gpf_header_settings'); ?>
    <?php $social_options = get_option('gpf_social_settings'); ?>
    <?php $network_url = network_home_url(); ?>
    <header class="container-fluid p-0" role="banner" itemscope itemtype="http://schema.org/WPHeader">
        <div class="row no-gutters">
            <div class="top-header col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 d-xl-block d-lg-block d-md-block d-sm-none d-none">
                <div class="container">
                    <div class="row align-items-center justify-content-between">
                        <div class="top-header-left col-6">
                            <a href="mailto:<?php echo $header_options['email_address']; ?>" title="<?php _e('Haz clic aquí para dejar tu mensaje en nuestro correo electrónico', 'gespetfood'); ?>"><?php echo $header_options['email_address']; ?></a>
                            <a href="<?php echo $header_options['formatted_phone_number']; ?>" title="<?php _e('Haz clic aquí para llamar directamente a nuestro Master', 'gespetfood'); ?>"><?php echo $header_options['phone_number']; ?></a>
                            <a href="<?php echo $social_options['facebook']; ?>" title="<?php _e('Haz clic aquí para visitar nuestro perfil', 'gespetfood'); ?>" target="_blank"><i class="fa fa-facebook"></i></a>
                            <a href="<?php echo $social_options['twitter']; ?>" title="<?php _e('Haz clic aquí para visitar nuestro perfil', 'gespetfood'); ?>" target="_blank"><i class="fa fa-twitter"></i></a>
                            <a href="<?php echo $social_options['instagram']; ?>" title="<?php _e('Haz clic aquí para visitar nuestro perfil', 'gespetfood'); ?>" target="_blank"><i class="fa fa-instagram"></i></a>
                            <a href="<?php echo $social_options['linkedin']; ?>" title="<?php _e('Haz clic aquí para visitar nuestro perfil', 'gespetfood'); ?>" target="_blank"><i class="fa fa-linkedin"></i></a>
                        </div>
                        <div class="top-header-right col-6">
                            <?php $myaccount_page_id = get_option('woocommerce_myaccount_page_id'); ?>
                            <?php if ($myaccount_page_id) {
                                $myaccount_page_url = get_permalink($myaccount_page_id);
                            } ?>
                            <a href="<?php echo $myaccount_page_url; ?>" title="<?php _e('Ingresar a su cuenta', 'gespetood'); ?>"><i class="fa fa-user-o"></i> <?php _e('Iniciar Sesión', 'gespetfood'); ?></a>
                            <?php global $woocommerce; ?>

                            <?php $cart_url = wc_get_cart_url(); ?>
                            <?php $amount = $woocommerce->cart->get_cart_total(); ?>
                            <a href="<?php echo $cart_url; ?>" title="<?php _e('Ver Carrito de Compras', 'gespetfood'); ?>"><i class="fa fa-shopping-cart"></i> <?php echo $amount; ?></a>
                            <div class="lang-container">
                                <a href="<?php echo $network_url . 'en'; ?>" title="<?php _e('Ir al sitio en Inglés', 'gespetfood'); ?>">ENG</a><span>/</span><a href="<?php echo $network_url; ?>" title="<?php _e('Ir al sitio en Español', 'gespetfood'); ?>">ESP</a>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <div class="the-header col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 d-xl-block d-lg-block d-md-block d-sm-none d-none">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="header-left search-box col-xl-4 col-lg-5 col-md-5 col-sm-5 col-5">
                            <?php echo get_search_form(); ?>
                        </div>
                        <div class="header-center col-xl-4 col-lg-2 col-md-2 col-2">
                            <a href="<?php echo home_url('/'); ?>" title="<?php echo get_bloginfo('name'); ?>" title="<?php _e('Volver al Inicio', 'gespetfood'); ?>">
                                <?php $custom_logo_id = get_theme_mod('custom_logo'); ?>
                                <?php $image = wp_get_attachment_image_src($custom_logo_id, 'logo'); ?>
                                <?php if (!empty($image)) { ?>
                                <img src="<?php echo $image[0]; ?>" alt="<?php _e('Volver al Inicio', 'gespetfood'); ?>" class="img-fluid img-logo" />
                                <?php } ?>
                            </a>
                        </div>
                        <div class="header-right col-xl-4 col-lg-5 col-md-5 col-sm-5 col-5">
                            <?php /* <a href=" https://www.amazon.es/s?k=GesPetFood&i=pets&rh=p_6%3AAGU4JNL7MI9BE&s=date-desc-rank&dc&qid=1589916349&rnid=831275031&ref=sr_nr_p_6_1" target="_blank" title="<?php _e('Visita nuestra tienda en Amazon.com', 'gespetfood'); ?>" title="<?php _e('Volver al Inicio', 'gespetfood'); ?>"><img src="<?php echo get_template_directory_uri(); ?>/images/amazon.png" alt="amazon" class="img-fluid" /></a> */ ?>
                            <img src="<?php echo get_template_directory_uri(); ?>/images/new-fda-logo.png" alt="FDA" class="img-fluid" />
                        </div>
                    </div>
                </div>
            </div>
            <div class="the-navbar col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 d-xl-block d-lg-block d-md-block d-sm-none d-none">
                <nav class="navbar navbar-expand-md navbar-light" role="navigation">
                    <!-- Brand and toggle get grouped for better mobile display -->
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-controls="bs-example-navbar-collapse-1" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <?php
                    wp_nav_menu(array(
                        'theme_location'    => 'header_menu',
                        'depth'             => 1, // 1 = with dropdowns, 0 = no dropdowns.
                        'container'         => 'div',
                        'container_class'   => 'collapse navbar-collapse',
                        'container_id'      => 'bs-example-navbar-collapse-1',
                        'menu_class'        => 'navbar-nav mr-auto ml-auto',
                        'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
                        'walker'            => new WP_Bootstrap_Navwalker()
                    ));
                    ?>
                </nav>
            </div>
            <div id="stickerMobile" class="navbar-mobile col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 d-xl-none d-lg-none d-md-none d-sm-block d-block">
                <div class="container">
                    <div class="row">
                        <div class="navbar-logo col-3">
                            <a href="<?php echo home_url('/'); ?>" title="<?php echo get_bloginfo('name'); ?>">
                                <?php $custom_logo_id = get_theme_mod('custom_logo'); ?>
                                <?php $image = wp_get_attachment_image_src($custom_logo_id, 'logo'); ?>
                                <?php if (!empty($image)) { ?>
                                <img src="<?php echo $image[0]; ?>" alt="<?php echo get_bloginfo('name'); ?>" class="img-fluid img-logo" />
                                <?php } ?>
                            </a>
                        </div>
                        <div class="navbar-elements col-9">
                            <div class="row">
                                <div class="navbar-mobile-info navbar-mobile-first-info col-12 d-xl-block d-lg-block d-md-block d-sm-none d-none">
                                    <a href="mailto:<?php echo $header_options['email_address']; ?>" title="<?php _e('Haz clic aquí para dejar tu mensaje en nuestro correo electrónico', 'gespetfood'); ?>"><?php echo $header_options['email_address']; ?></a>
                                    <a href="<?php echo $header_options['formatted_phone_number']; ?>" title="<?php _e('Haz clic aquí para llamar directamente a nuestro Master', 'gespetfood'); ?>"><?php echo $header_options['phone_number']; ?></a>
                                    <a href="<?php echo $social_options['facebook']; ?>" title="<?php _e('Haz clic aquí para visitar nuestro perfil', 'gespetfood'); ?>" target="_blank"><i class="fa fa-facebook"></i></a>
                                    <a href="<?php echo $social_options['twitter']; ?>" title="<?php _e('Haz clic aquí para visitar nuestro perfil', 'gespetfood'); ?>" target="_blank"><i class="fa fa-twitter"></i></a>
                                    <a href="<?php echo $social_options['instagram']; ?>" title="<?php _e('Haz clic aquí para visitar nuestro perfil', 'gespetfood'); ?>" target="_blank"><i class="fa fa-instagram"></i></a>
                                    <a href="<?php echo $social_options['linkedin']; ?>" title="<?php _e('Haz clic aquí para visitar nuestro perfil', 'gespetfood'); ?>" target="_blank"><i class="fa fa-linkedin"></i></a>
                                </div>
                                <div class="navbar-mobile-info navbar-additional-elements col-12">
                                    <div class="row">
                                        <div class="navbar-mobile-elements col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 d-xl-block d-lg-block d-md-block d-sm-none d-none">
                                            <a href=" https://www.amazon.es/s?k=GesPetFood&i=pets&rh=p_6%3AAGU4JNL7MI9BE&s=date-desc-rank&dc&qid=1589916349&rnid=831275031&ref=sr_nr_p_6_1" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/images/amazon.png" alt="amazon" class="img-fluid" /></a>
                                            <a href=""><i class="fa fa-shopping-cart"></i></a>
                                            <div class="lang-container">
                                                <a href="<?php echo $network_url . 'en'; ?>" title="<?php _e('Ir al sitio en Inglés', 'gespetfood'); ?>">ENG</a><span>/</span><a href="<?php echo $network_url; ?>" title="<?php _e('Ir al sitio en Español', 'gespetfood'); ?>">ESP</a>
                                            </div>
                                        </div>
                                        <div class="account-box col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">

                                            <?php $myaccount_page_id = get_option('woocommerce_myaccount_page_id'); ?>
                                            <?php $cart_url = wc_get_cart_url(); ?>
                                            <a href="<?php echo $cart_url; ?>"><i class="fa fa-shopping-cart"></i></a>

                                            <?php $myaccount_page_id = get_option('woocommerce_myaccount_page_id'); ?>
                                            <?php if ($myaccount_page_id) {
                                                $myaccount_page_url = get_permalink($myaccount_page_id);
                                            } ?>
                                            <a href="<?php echo $myaccount_page_url; ?>"><i class="fa fa-user-o"></i></a>
                                        </div>
                                    </div>
                                    <div class="menu-btn">
                                        <span></span>
                                        <span></span>
                                        <span></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="navbar-mobile-content navbar-hidden col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 d-xl-none d-lg-none d-md-none d-sm-block d-block">
                    <?php
                    wp_nav_menu(array(
                        'theme_location'    => 'header_menu',
                        'depth'             => 1, // 1 = with dropdowns, 0 = no dropdowns.
                        'container'         => 'div',
                        'menu_class'        => 'navbar-nav'
                    ));
                    ?>

                    <div class="search-cart-elements">
                        <?php get_search_form(); ?>
                    </div>

                    <div class="mobile-amazon-link">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/new-fda-logo.png" alt="FDA" class="img-fluid" />
                    </div>

                    <div class="mobile-catalog-container">
                        <a href="<?php echo get_post_meta(get_the_ID(), 'gpf_gespetfood_about_brochure', true); ?>"><?php _e('Descargar catálogo de productos', 'gespetfood'); ?></a>
                    </div>

                    <div class="lang-container">
                        <a href="<?php echo $network_url . 'en'; ?>" title="<?php _e('Ir al sitio en Inglés', 'gespetfood'); ?>">ENG</a><span>/</span><a href="<?php echo $network_url; ?>" title="<?php _e('Ir al sitio en Español', 'gespetfood'); ?>">ESP</a>
                    </div>


                </div>
            </div>

        </div>
    </header>