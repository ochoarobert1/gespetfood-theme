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
