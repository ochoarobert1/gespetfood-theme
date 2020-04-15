<?php
/* --------------------------------------------------------------
WP CUSTOMIZE SECTION - CUSTOM SETTINGS
-------------------------------------------------------------- */

add_action( 'customize_register', 'gespetfood_customize_register' );

function gespetfood_customize_register( $wp_customize ) {
    /* HEADER */
    $wp_customize->add_section('gpf_header_settings', array(
        'title'    => __('Cabecera', 'gespetfood'),
        'description' => __('Opciones para los elementos de la cabecera', 'gespetfood'),
        'priority' => 30
    ));

    $wp_customize->add_setting('gpf_header_settings[phone_number]', array(
        'default'           => '',
        'sanitize_callback' => 'sanitize_text_field',
        'capability'        => 'edit_theme_options',
        'type'           => 'option'
    ));

    $wp_customize->add_control( 'phone_number', array(
        'type' => 'text',
        'label'    => __('Número Telefónico', 'gespetfood'),
        'description' => __( 'Agregar número telefonico con formato para el link', 'gespetfood' ),
        'section'  => 'gpf_header_settings',
        'settings' => 'gpf_header_settings[phone_number]'
    ));

    $wp_customize->add_setting('gpf_header_settings[formatted_phone_number]', array(
        'default'           => '',
        'sanitize_callback' => 'sanitize_text_field',
        'capability'        => 'edit_theme_options',
        'type'           => 'option'
    ));

    $wp_customize->add_control( 'formatted_phone_number', array(
        'type' => 'text',
        'label'    => __('Número Telefónico [Visible]', 'gespetfood'),
        'description' => __( 'Agregar número telefónico en un formato visible para el público', 'gespetfood' ),
        'section'  => 'gpf_header_settings',
        'settings' => 'gpf_header_settings[formatted_phone_number]'
    ));

    $wp_customize->add_setting('gpf_header_settings[email_address]', array(
        'default'           => '',
        'sanitize_callback' => 'sanitize_text_field',
        'capability'        => 'edit_theme_options',
        'type'           => 'option'

    ));

    $wp_customize->add_control( 'email_address', array(
        'type' => 'text',
        'label'    => __('Correo Electrónico', 'gespetfood'),
        'description' => __( 'Agregar direccion de Correo Electrónico', 'gespetfood' ),
        'section'  => 'gpf_header_settings',
        'settings' => 'gpf_header_settings[email_address]'
    ));

    /* SOCIAL */
    $wp_customize->add_section('gpf_social_settings', array(
        'title'    => __('Redes Sociales', 'gespetfood'),
        'description' => __('Agregue aqui las redes sociales de la página, serán usadas globalmente', 'gespetfood'),
        'priority' => 175,
    ));

    $wp_customize->add_setting('gpf_social_settings[facebook]', array(
        'default'           => '',
        'sanitize_callback' => 'gespetfood_sanitize_url',
        'capability'        => 'edit_theme_options',
        'type'           => 'option',

    ));

    $wp_customize->add_control( 'facebook', array(
        'type' => 'url',
        'section' => 'gpf_social_settings',
        'settings' => 'gpf_social_settings[facebook]',
        'label' => __( 'Facebook', 'gespetfood' ),
    ) );

    $wp_customize->add_setting('gpf_social_settings[twitter]', array(
        'default'           => '',
        'sanitize_callback' => 'gespetfood_sanitize_url',
        'capability'        => 'edit_theme_options',
        'type'           => 'option',

    ));

    $wp_customize->add_control( 'twitter', array(
        'type' => 'url',
        'section' => 'gpf_social_settings',
        'settings' => 'gpf_social_settings[twitter]',
        'label' => __( 'Twitter', 'gespetfood' ),
    ) );

    $wp_customize->add_setting('gpf_social_settings[instagram]', array(
        'default'           => '',
        'sanitize_callback' => 'gespetfood_sanitize_url',
        'capability'        => 'edit_theme_options',
        'type'           => 'option',

    ));

    $wp_customize->add_control( 'instagram', array(
        'type' => 'url',
        'section' => 'gpf_social_settings',
        'settings' => 'gpf_social_settings[instagram]',
        'label' => __( 'Instagram', 'gespetfood' ),
    ) );

    $wp_customize->add_setting('gpf_social_settings[linkedin]', array(
        'default'           => '',
        'sanitize_callback' => 'gespetfood_sanitize_url',
        'capability'        => 'edit_theme_options',
        'type'           => 'option',

    ));

    $wp_customize->add_control( 'linkedin', array(
        'type' => 'url',
        'section' => 'gpf_social_settings',
        'settings' => 'gpf_social_settings[linkedin]',
        'label' => __( 'LinkedIn', 'gespetfood' ),
    ) );

    $wp_customize->add_setting('gpf_social_settings[youtube]', array(
        'default'           => '',
        'sanitize_callback' => 'gespetfood_sanitize_url',
        'capability'        => 'edit_theme_options',
        'type'           => 'option',

    ));

    $wp_customize->add_control( 'youtube', array(
        'type' => 'url',
        'section' => 'gpf_social_settings',
        'settings' => 'gpf_social_settings[youtube]',
        'label' => __( 'YouTube', 'gespetfood' ),
    ) );

    $wp_customize->add_setting('gpf_social_settings[yelp]', array(
        'default'           => '',
        'sanitize_callback' => 'gespetfood_sanitize_url',
        'capability'        => 'edit_theme_options',
        'type'           => 'option',

    ));

    $wp_customize->add_control( 'yelp', array(
        'type' => 'url',
        'section' => 'gpf_social_settings',
        'settings' => 'gpf_social_settings[yelp]',
        'label' => __( 'Yelp', 'gespetfood' ),
    ) );


    $wp_customize->add_section('gpf_cookie_settings', array(
        'title'    => __('Cookies', 'gespetfood'),
        'description' => __('Opciones de Cookies', 'gespetfood'),
        'priority' => 176,
    ));

    $wp_customize->add_setting('gpf_cookie_settings[cookie_text]', array(
        'default'           => '',
        'sanitize_callback' => 'sanitize_text_field',
        'capability'        => 'edit_theme_options',
        'type'           => 'option'

    ));

    $wp_customize->add_control( 'cookie_text', array(
        'type' => 'textarea',
        'label'    => __('Cookie consent', 'gespetfood'),
        'description' => __( 'Texto del Cookie consent.' ),
        'section'  => 'gpf_cookie_settings',
        'settings' => 'gpf_cookie_settings[cookie_text]'
    ));

    $wp_customize->add_setting('gpf_cookie_settings[cookie_link]', array(
        'default'           => '',
        'sanitize_callback' => 'absint',
        'capability'        => 'edit_theme_options',
        'type'           => 'option',

    ));

    $wp_customize->add_control( 'cookie_link', array(
        'type'     => 'dropdown-pages',
        'section' => 'gpf_cookie_settings',
        'settings' => 'gpf_cookie_settings[cookie_link]',
        'label' => __( 'Link de Cookies', 'gespetfood' ),
    ) );

}

function gespetfood_sanitize_url( $url ) {
    return esc_url_raw( $url );
}

/* --------------------------------------------------------------
CUSTOM CONTROL PANEL
-------------------------------------------------------------- */
/*
function register_gespetfood_settings() {
    register_setting( 'gespetfood-settings-group', 'monday_start' );
    register_setting( 'gespetfood-settings-group', 'monday_end' );
    register_setting( 'gespetfood-settings-group', 'monday_all' );
}

add_action('admin_menu', 'gespetfood_custom_panel_control');

function gespetfood_custom_panel_control() {
    add_menu_page(
        __( 'Panel de Control', 'gespetfood' ),
        __( 'Panel de Control','gespetfood' ),
        'manage_options',
        'gespetfood-control-panel',
        'gespetfood_control_panel_callback',
        'dashicons-admin-generic',
        120
    );
    add_action( 'admin_init', 'register_gespetfood_settings' );
}

function gespetfood_control_panel_callback() {
    ob_start();
?>
<div class="gespetfood-admin-header-container">
    <img src="<?php echo get_template_directory_uri(); ?>/images/logo.png" alt="gespetfood" />
    <h1><?php echo esc_html( get_admin_page_title() ); ?></h1>
</div>
<form method="post" action="options.php" class="gespetfood-admin-content-container">
    <?php settings_fields( 'gespetfood-settings-group' ); ?>
    <?php do_settings_sections( 'gespetfood-settings-group' ); ?>
    <div class="gespetfood-admin-content-item">
        <table class="form-table">
            <tr valign="center">
                <th scope="row"><?php _e('Monday', 'gespetfood'); ?></th>
                <td>
                    <label for="monday_start">Starting Hour: <input type="time" name="monday_start" value="<?php echo esc_attr( get_option('monday_start') ); ?>"></label>
                    <label for="monday_end">Ending Hour: <input type="time" name="monday_end" value="<?php echo esc_attr( get_option('monday_end') ); ?>"></label>
                    <label for="monday_all">All Day: <input type="checkbox" name="monday_all" value="1" <?php checked( get_option('monday_all'), 1 ); ?>></label>
                </td>
            </tr>
        </table>
    </div>
    <div class="gespetfood-admin-content-submit">
        <?php submit_button(); ?>
    </div>
</form>
<?php 
    $content = ob_get_clean();
    echo $content;
}
*/