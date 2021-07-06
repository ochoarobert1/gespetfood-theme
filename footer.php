<footer class="container-fluid p-0" role="contentinfo" itemscope itemtype="http://schema.org/WPFooter">
    <div class="row no-gutters">
        <div class="the-footer col-12">
            <div class="container">
                <div class="row align-items-start">
                    <?php if ( is_active_sidebar( 'sidebar_footer' ) ) : ?>
                    <div class="footer-item col-xl col-lg col-md-6 col-sm-12 col-12">
                        <ul id="sidebar-footer1" class="footer-sidebar">
                            <?php dynamic_sidebar( 'sidebar_footer' ); ?>
                        </ul>
                    </div>
                    <?php endif; ?>
                    <?php if ( is_active_sidebar( 'sidebar_footer-2' ) ) : ?>
                    <div class="footer-item col-xl col-lg col-md-6 col-sm-12 col-12">
                        <ul id="sidebar-footer2" class="footer-sidebar">
                            <?php dynamic_sidebar( 'sidebar_footer-2' ); ?>
                        </ul>
                    </div>
                    <?php endif; ?>
                    <?php if ( is_active_sidebar( 'sidebar_footer-3' ) ) : ?>
                    <div class="footer-item col-xl col-lg col-md-6 col-sm-12 col-12">
                        <ul id="sidebar-footer3" class="footer-sidebar">
                            <?php dynamic_sidebar( 'sidebar_footer-3' ); ?>
                        </ul>
                    </div>
                    <?php endif; ?>
                    <?php if ( is_active_sidebar( 'sidebar_footer-4' ) ) : ?>
                    <div class="footer-item col-xl col-lg col-md-6 col-sm-12 col-12">
                        <ul id="sidebar-footer4" class="footer-sidebar">
                            <?php dynamic_sidebar( 'sidebar_footer-4' ); ?>
                        </ul>
                    </div>
                    <?php endif; ?>
                    <div class="w-100"></div>
                </div>
            </div>
        </div>
        <div class="footer-copy col-12">
            <div class="container">
                <div class="row">
                    <div class="footer-copy-wrapper col-12">
                        <h5>Copyright &copy; 2020 GESPETFOOD, <?php _e('Todos los derechos reservados', 'gespetfood'); ?> <a href="mailto:info@gespetfood.com" title="<?php _e('Haz clic aquí para dejar tu mensaje en nuestro correo electrónico', 'gespetfood'); ?>">info@gespetfood.com</a> <a href="tel:034914006294" title="<?php _e('Haz clic aquí para llamar directamente a nuestro Master', 'gespetfood'); ?>">+34 914 006 294</a></h5>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
<?php $cookies_options = get_option('gpf_cookie_settings'); ?>
<div class="gpf-privacy-policy-accept hidden-policy" id="gpf-privacy-policy-accept">
    <p class="text-center small"><?php echo $cookies_options['cookie_text']; ?> <a href="<?php echo get_permalink($cookies_options['cookie_link']); ?>" class="font-weight-bold"><?php _e( "aquí", 'gespetfood' ) ?></a>.</p>
    <div class="button-container">
        <a class="btn btn-sm btn-outline-elephant btn-privacy" id="privacy-policy-accept-btn"><?php _e( "Acepto", 'gespetfood' ) ?></a>
    </div>
</div>
<?php wp_footer() ?>
</body>

</html>
