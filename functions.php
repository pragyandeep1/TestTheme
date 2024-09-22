<?php
// require_once get_template_directory() . '/class-wp-bootstrap-navwalker.php';

function testtheme_customize_register( $wp_customize ) {
    // Hero Section Title
    $wp_customize->add_setting( 'hero_title', array(
        'default'           => __( 'We offer modern solutions for growing your business', 'testtheme' ),
        'sanitize_callback' => 'sanitize_text_field',
    ));
    $wp_customize->add_control( 'hero_title', array(
        'label'    => __( 'Hero Title', 'testtheme' ),
        'section'  => 'testtheme_hero_section',
        'type'     => 'text',
    ));

    // Hero Section Subtitle
    $wp_customize->add_setting( 'hero_subtitle', array(
        'default'           => __( 'We are team of talented designers making websites with Bootstrap', 'testtheme' ),
        'sanitize_callback' => 'sanitize_text_field',
    ));
    $wp_customize->add_control( 'hero_subtitle', array(
        'label'    => __( 'Hero Subtitle', 'testtheme' ),
        'section'  => 'testtheme_hero_section',
        'type'     => 'textarea',
    ));

    // Hero Video Link
    $wp_customize->add_setting( 'hero_video_link', array(
        'default'           => 'https://www.youtube.com/watch?v=Y7f98aduVJ8',
        'sanitize_callback' => 'esc_url_raw',
    ));
    $wp_customize->add_control( 'hero_video_link', array(
        'label'    => __( 'Hero Video Link', 'testtheme' ),
        'section'  => 'testtheme_hero_section',
        'type'     => 'url',
    ));

    // Hero Image
    $wp_customize->add_setting( 'hero_image', array(
        'default'           => get_template_directory_uri() . '/assets/img/hero-img.png',
        'sanitize_callback' => 'esc_url_raw',
    ));
    $wp_customize->add_control(
        new WP_Customize_Image_Control( $wp_customize, 'hero_image', array(
            'label'    => __( 'Hero Image', 'testtheme' ),
            'section'  => 'testtheme_hero_section',
            'settings' => 'hero_image',
        ) )
    );
}
add_action( 'customize_register', 'testtheme_customize_register' );