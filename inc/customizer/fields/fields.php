<?php 
/**
 * @Packge     : Security
 * @Version    : 1.0
 * @Author     : Colorlib
 * @Author URI : http://colorlib.com/wp/
 *
 */

// Block direct access
if( ! defined( 'ABSPATH' ) ) {
    exit( 'Direct script access denied.' );
}

/***********************************
 * General Section Fields
 ***********************************/


// Theme Main Color Picker
Epsilon_Customizer::add_field(
    'security_themecolor',
    array(
        'type'        => 'epsilon-color-picker',
        'label'       => esc_html__( 'Theme Main Color.', 'security' ),
        'sanitize_callback' => 'sanitize_text_field',
        'section'     => 'security_general_options_section',
        'default'     => '#fab700',
    )
);
// Google map api key field
$url = 'https://developers.google.com/maps/documentation/geocoding/get-api-key';

Epsilon_Customizer::add_field(
    'security_map_apikey',
    array(
        'type'              => 'text',
        'label'             => esc_html__( 'Google map api key', 'security' ),
        'description'       => sprintf( __( 'Set google map api key. To get api key %s click here %s.', 'security' ), '<a target="_blank" href="'.esc_url( $url  ).'">', '</a>' ),
        'section'           => 'security_general_options_section',
        'sanitize_callback' => 'sanitize_text_field',
        'default'           => '',
        
    )
);
/***********************************
 * Header Section Fields
 ***********************************/

// Header social switch field
Epsilon_Customizer::add_field(
    'security-headersocial-toggle-settings',
    array(
        'type'        => 'epsilon-toggle',
        'label'       => esc_html__( 'Toggle header social icon', 'security' ),
        'description' => esc_html__( 'Make sure you are create social menu from appearance -> menus', 'security' ),
        'section'     => 'security_headertop_options_section',
        'sanitize_callback' => 'sanitize_text_field'
    )
);

// Header button #1 text
Epsilon_Customizer::add_field(
    'security_headtop_btn1_text',
    array(
        'type'        => 'text',
        'label'       => esc_html__( 'Header Top Button #1 Text', 'security' ),
        'section'     => 'security_headertop_options_section',
        'sanitize_callback' => 'sanitize_text_field'
    )
);

// Header button #1 url
Epsilon_Customizer::add_field(
    'security_headtop_btn1_url',
    array(
        'type'        => 'text',
        'label'       => esc_html__( 'Header Top Button #1 Url', 'security' ),
        'section'     => 'security_headertop_options_section',
        'sanitize_callback' => 'sanitize_text_field'
    )
);
// Header button #2 text
Epsilon_Customizer::add_field(
    'security_headtop_btn2_text',
    array(
        'type'        => 'text',
        'label'       => esc_html__( 'Header Top Button #2 Text', 'security' ),
        'section'     => 'security_headertop_options_section',
        'sanitize_callback' => 'sanitize_text_field'
    )
);
// Header button #2 url
Epsilon_Customizer::add_field(
    'security_headtop_btn2_url',
    array(
        'type'        => 'text',
        'label'       => esc_html__( 'Header Top Button #2 Url', 'security' ),
        'section'     => 'security_headertop_options_section',
        'sanitize_callback' => 'sanitize_text_field'
    )
);
// Phone Number
Epsilon_Customizer::add_field(
    'security_headtop_number',
    array(
        'type'        => 'text',
        'label'       => esc_html__( 'Mobile Number', 'security' ),
        'section'     => 'security_headertop_options_section',
        'sanitize_callback' => 'sanitize_text_field'
    )
);
// Header Nav Bar Background Color Picker
Epsilon_Customizer::add_field(
    'security_header_navbar_bgColor',
    array(
        'type'        => 'epsilon-color-picker',
        'label'       => esc_html__( 'Header Nav Bar Background Color', 'security' ),
        'sanitize_callback' => 'sanitize_text_field',
        'section'     => 'security_headertop_options_section',
        'default'     => '',
    )
);
// Header Sticky  Nav Bar Background Color Picker
Epsilon_Customizer::add_field(
    'security_header_navbarsticky_bgColor',
    array(
        'type'        => 'epsilon-color-picker',
        'label'       => esc_html__( 'Header Sticky Nav Bar Background Color', 'security' ),
        'sanitize_callback' => 'sanitize_text_field',
        'section'     => 'security_headertop_options_section',
        'default'     => '',
    )
);
// Header Nav Bar Menu Color Picker
Epsilon_Customizer::add_field(
    'security_header_navbar_menuColor',
    array(
        'type'        => 'epsilon-color-picker',
        'label'       => esc_html__( 'Header Nav Bar Menu Color', 'security' ),
        'sanitize_callback' => 'sanitize_text_field',
        'section'     => 'security_headertop_options_section',
        'default'     => '#fff',
    )
);
// Header Nav Bar Menu Hover Color Picker
Epsilon_Customizer::add_field(
    'security_header_navbar_menuHovColor',
    array(
        'type'        => 'epsilon-color-picker',
        'label'       => esc_html__( 'Header Nav Bar Menu Hover Color', 'security' ),
        'sanitize_callback' => 'sanitize_text_field',
        'section'     => 'security_headertop_options_section',
        'default'     => '#4a7aec',
    )
);
// Header sticky nav bar menu color picker
Epsilon_Customizer::add_field(
    'security_header_sticky_navbar_menuColor',
    array(
        'type'        => 'epsilon-color-picker',
        'label'       => esc_html__( 'Sticky Header Nav Bar Menu Color', 'security' ),
        'sanitize_callback' => 'sanitize_text_field',
        'section'     => 'security_headertop_options_section',
        'default'     => '#fff',
    )
);
// Header sticky nav bar menu hover color picker
Epsilon_Customizer::add_field(
    'security_header_sticky_navbar_menuHovColor',
    array(
        'type'        => 'epsilon-color-picker',
        'label'       => esc_html__( 'Sticky Header Nav Bar Menu Hover Color', 'security' ),
        'sanitize_callback' => 'sanitize_text_field',
        'section'     => 'security_headertop_options_section',
        'default'     => '#4a7aec',
    )
);
// Page Header Background Color Picker
Epsilon_Customizer::add_field(
    'security_headerbgcolor',
    array(
        'type'        => 'epsilon-color-picker',
        'label'       => esc_html__( 'Header Background Color', 'security' ),
        'sanitize_callback' => 'sanitize_text_field',
        'section'     => 'colors',
        'default'     => '#999',
    )
);
// Page Header text Color Picker
Epsilon_Customizer::add_field(
    'security_headertextcolor',
    array(
        'type'        => 'epsilon-color-picker',
        'label'       => esc_html__( 'Header Text Color', 'security' ),
        'sanitize_callback' => 'sanitize_text_field',
        'section'     => 'colors',
        'default'     => '#fff',
    )
);
// Header overlay switch field
Epsilon_Customizer::add_field(
    'security-headeroverlay-toggle-settings',
    array(
        'type'        => 'epsilon-toggle',
        'label'       => esc_html__( 'Toggle header overlay', 'security' ),
        'section'     => 'colors',
        'sanitize_callback' => 'sanitize_text_field'
    )
);
// Header overlay color
Epsilon_Customizer::add_field(
    'security_headeroverlaycolor',
    array(
        'type'        => 'epsilon-color-picker',
        'label'       => esc_html__( 'Header Overlay Color', 'security' ),
        'sanitize_callback' => 'sanitize_text_field',
        'section'     => 'colors',
        'default'     => 'rgba(0, 0, 0, 0.7)',
    )
);

/***********************************
 * Blog Section Fields
 ***********************************/


// Post excerpt length field
Epsilon_Customizer::add_field(
    'security_post_excerpt',
    array(
        'type'        => 'text',
        'label'       => esc_html__( 'Post Excerpt', 'security' ),
        'description' => esc_html__( 'Set post excerpt length.', 'security' ),
        'section'     => 'security_blog_options_section',
        'sanitize_callback' => 'sanitize_text_field',
        'default'     => '30',
    )
);
// Blog sidebar layout field
Epsilon_Customizer::add_field(
    'security-blog-sidebar-settings',
    array(
        'type'     => 'epsilon-layouts',
        'label'    => esc_html__( 'Blog Layout', 'security' ),
        'section'  => 'security_blog_options_section',
        'description' => esc_html__( 'Select the option to set blog page sidebar position.', 'security' ),
        'layouts'  => array(
            '1' => get_template_directory_uri() . '/inc/libraries/epsilon-framework/assets/img/one-column.png',
            '2' => get_template_directory_uri() . '/inc/libraries/epsilon-framework/assets/img/epsilon-section-titleright.jpg',
            '3' => get_template_directory_uri() . '/inc/libraries/epsilon-framework/assets/img/epsilon-section-titleleft.jpg',
        ),
        'default'  => array(
            'columnsCount' => 1,
            'columns'      => array(
                1 => array(
                    'index' => 1,
                ),
                2 => array(
                    'index' => 2,
                ),
                3 => array(
                    'index' => 3,
                ),
            ),
        ),
        'min_span' => 4,
        'fixed'    => true
    )
);
if( defined( 'SECURITY_COMPANION_VERSION' ) ) {
// Header social switch field
Epsilon_Customizer::add_field(
    'security-blog-social-share-toggle',
    array(
        'type'        => 'epsilon-toggle',
        'label'       => esc_html__( 'Blog Social Share Show/Hide', 'security' ),
        'section'     => 'security_blog_options_section',
        'sanitize_callback' => 'sanitize_text_field'
    )
);

// Header social switch field
Epsilon_Customizer::add_field(
    'security-blog-like-toggle',
    array(
        'type'        => 'epsilon-toggle',
        'label'       => esc_html__( 'Blog Like Button Show/Hide', 'security' ),
        'section'     => 'security_blog_options_section',
        'sanitize_callback' => 'sanitize_text_field'
    )
);
}
/***********************************
 * 404 Page Section Fields
 ***********************************/

// 404 text #1 field
Epsilon_Customizer::add_field(
    'security_fof_text_one',
    array(
        'type'              => 'text',
        'label'             => esc_html__( '404 Text #1', 'security' ),
        'section'           => 'security_fof_options_section',
        'sanitize_callback' => 'sanitize_text_field',
        'default'           => 'Ooops 404 Error !'
    )
);
// 404 text #2 field
Epsilon_Customizer::add_field(
    'security_fof_text_two',
    array(
        'type'              => 'text',
        'label'             => esc_html__( '404 Text #2', 'security' ),
        'section'           => 'security_fof_options_section',
        'sanitize_callback' => 'sanitize_text_field',
        'default'           => 'Either something went wrong or the page dosen\'t exist anymore.'
    )
);
// 404 text #1 color field
Epsilon_Customizer::add_field(
    'security_fof_textonecolor_settings',
    array(
        'type'        => 'epsilon-color-picker',
        'label'       => esc_html__( '404 Text #1 Color', 'security' ),
        'sanitize_callback' => 'sanitize_text_field',
        'section'     => 'security_fof_options_section',
        'default'     => '#404551', 
    )
);
// 404 text #2 color field
Epsilon_Customizer::add_field(
    'security_fof_texttwocolor_settings',
    array(
        'type'        => 'epsilon-color-picker',
        'label'       => esc_html__( '404 Text #2 Color', 'security' ),
        'sanitize_callback' => 'sanitize_text_field',
        'section'     => 'security_fof_options_section',
        'default'     => '#abadbe',
    )
);
// 404 background color field
Epsilon_Customizer::add_field(
    'security_fof_bgcolor_settings',
    array(
        'type'        => 'epsilon-color-picker',
        'label'       => esc_html__( '404 Page Background Color', 'security' ),
        'sanitize_callback' => 'sanitize_text_field',
        'section'     => 'security_fof_options_section',
        'default'     => '#fff',
    )
);

/***********************************
 * Footer Section Fields
 ***********************************/

// Footer widget toggle field
Epsilon_Customizer::add_field(
    'security-widget-toggle-settings',
    array(
        'type'        => 'epsilon-toggle',
        'label'       => esc_html__( 'Footer widget show/hide', 'security' ),
        'description' => esc_html__( 'Toggle to display footer widgets.', 'security' ),
        'section'     => 'security_footer_options_section',
        'default'     => false,
    )
);

// Footer copy right text add settings

// Copy right text
$url = 'https://colorlib.com/';
$copyText = sprintf( __( 'Theme by %s colorlib %s. Copyright &copy; %s  |  All rights reserved', 'security' ), '<a target="_blank" href="' . esc_url( $url ) . '">', '</a>', date( 'Y' ) );

Epsilon_Customizer::add_field(
    'security-copyright-text-settings',
    array(
        'type'        => 'epsilon-text-editor',
        'label'       => esc_html__( 'Footer copyright text', 'security' ),
        'section'     => 'security_footer_options_section',
        'default'     => wp_kses_post( $copyText ),
    )
);
// Footer widget background color field
Epsilon_Customizer::add_field(
    'security_footer_bgColor_settings',
    array(
        'type'        => 'epsilon-color-picker',
        'label'       => esc_html__( 'Footer Background Color', 'security' ),
        'sanitize_callback' => 'sanitize_text_field',
        'section'     => 'security_footer_options_section',
        'default'     => '#04091e',
    )
);
// Footer widget text color field
Epsilon_Customizer::add_field(
    'security_footer_color_settings',
    array(
        'type'        => 'epsilon-color-picker',
        'label'       => esc_html__( 'Footer Text Color', 'security' ),
        'sanitize_callback' => 'sanitize_text_field',
        'section'     => 'security_footer_options_section',
        'default'     => '#777777',
    )
);
// Footer widget title color field
Epsilon_Customizer::add_field(
    'security_footer_widgettitlecolor_settings',
    array(
        'type'        => 'epsilon-color-picker',
        'label'       => esc_html__( 'Footer Widgets Title Color', 'security' ),
        'sanitize_callback' => 'sanitize_text_field',
        'section'     => 'security_footer_options_section',
        'default'     => '#ffffff',
    )
);
// Footer widget anchor color field
Epsilon_Customizer::add_field(
    'security_footer_anchorcolor_settings',
    array(
        'type'        => 'epsilon-color-picker',
        'label'       => esc_html__( 'Footer Anchor Color', 'security' ),
        'sanitize_callback' => 'sanitize_text_field',
        'section'     => 'security_footer_options_section',
        'default'     => '#777',
    )
);
// Footer widget anchor hover Color 
Epsilon_Customizer::add_field(
    'security_footer_anchorhovcolor_settings',
    array(
        'type'        => 'epsilon-color-picker',
        'label'       => esc_html__( 'Footer Anchor Hover Color', 'security' ),
        'sanitize_callback' => 'sanitize_text_field',
        'section'     => 'security_footer_options_section',
        'default'     => '#fab700',
    )
);
