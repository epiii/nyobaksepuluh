<?php

// Do not allow directly accessing this file.
if ( ! defined( 'ABSPATH' ) ) {
    exit( 'Direct script access denied.' );
}


/**
 * Fonts settings
 *
 * @param array $sections An array of our sections.
 * @return array
 */
function lapa_options_section_fonts( $sections )
{
    $sections['fonts'] = array(
        'name'          => 'fonts_panel',
        'title'         => esc_html_x('Typography', 'admin-view', 'lapa'),
        'icon'          => 'fa fa-font',
        'fields'        => array(
            array(
                'id'        => 'body_font_size',
                'type'      => 'slider',
                'default'    => 16,
                'title'     => esc_html_x( 'Body Font Size', 'admin-view', 'lapa' ),
                'options'   => array(
                    'step'    => 1,
                    'min'     => 10,
                    'max'     => 20,
                    'unit'    => 'px'
                )
            ),
            array(
                'id'        => 'font_source',
                'type'      => 'radio',
                'default'   => '1',
                'title'     => esc_html_x('Font Sources', 'admin-view', 'lapa'),
                'options'   => array(
                    '1' => esc_html_x('Standard + Google Webfonts', 'admin-view', 'lapa'),
                    '2' => esc_html_x('Google Custom', 'admin-view', 'lapa'),
                    '3' => esc_html_x('Adobe Typekit', 'admin-view', 'lapa'),
                )
            ),
            array(
                'id'        => 'main_font',
                'type'      => 'typography',
                'default'   => array(
                    'family' => esc_html_x('Roboto Condensed', 'admin-view', 'lapa'),
                    'font' => 'google',
                ),
                'title' => esc_html_x('Body Font', 'admin-view', 'lapa'),
                'dependency' => array('font_source_1', '==', 'true'),
                'variant' => 'multi'
                //'variant' => 'multi'
            ),
            array(
                'id'        => 'secondary_font',
                'type'      => 'typography',
                'default'   => array(
                    'family' => esc_html_x('Roboto Condensed', 'admin-view', 'lapa'),
                    'font' => 'google',
                ),
                'title' => esc_html_x('Heading Font', 'admin-view', 'lapa'),
                'dependency' => array('font_source_1', '==', 'true'),
                'variant' => 'multi'
            ),
            array(
                'id'        => 'highlight_font',
                'type'      => 'typography',
                'default'   => array(
                    'family' => esc_html_x('Playfair Display', 'admin-view', 'lapa'),
                    'font' => 'google',
                ),
                'title' => esc_html_x('Three Font', 'admin-view', 'lapa'),
                'dependency' => array('font_source_1', '==', 'true'),
                'variant' => 'multi'
            ),
            array(
                'id'            => 'font_google_code',
                'type'          => 'text',
                'title'         => esc_html_x('Font Google code', 'admin-view', 'lapa'),
                'dependency'    => array('font_source_2', '==', 'true')
            ),
            array(
                'id'            => 'main_google_font_face',
                'type'          => 'text',
                'title'         => esc_html_x('Body Google Font Face', 'admin-view', 'lapa'),
                'after'         => 'e.g : open sans',
                'desc'          => esc_html_x('Enter your Google Font Name for the theme\'s Body Typography', 'admin-view', 'lapa'),
                'dependency'    => array('font_source_2', '==', 'true')
            ),
            array(
                'id'            => 'secondary_google_font_face',
                'type'          => 'text',
                'title'         => esc_html_x('Heading Google Font Face', 'admin-view', 'lapa'),
                'after'         => 'e.g : open sans',
                'desc'          => esc_html_x('Enter your Google Font Name for the theme\'s Heading Typography', 'admin-view', 'lapa'),
                'dependency'    => array('font_source_2', '==', 'true')
            ),
            array(
                'id'            => 'highlight_google_font_face',
                'type'          => 'text',
                'title'         => esc_html_x('Three Google Font Face', 'admin-view', 'lapa'),
                'after'         => 'e.g : open sans',
                'desc'          => esc_html_x('Enter your Google Font Name for the theme\'s Three Typography', 'admin-view', 'lapa'),
                'dependency'    => array('font_source_2', '==', 'true')
            ),
            array(
                'id'            => 'font_typekit_kit_id',
                'type'          => 'text',
                'title'         => esc_html_x('Typekit ID', 'admin-view', 'lapa'),
                'dependency'    => array('font_source_3', '==', 'true')
            ),
            array(
                'id'            => 'main_typekit_font_face',
                'type'          => 'text',
                'title'         => esc_html_x('Body Typekit Font Face', 'admin-view', 'lapa'),
                'after'         => 'e.g : futura-pt',
                'desc'          => esc_html_x('Enter your Typekit Font Name for the theme\'s Body Typography', 'admin-view', 'lapa'),
                'dependency'    => array('font_source_3', '==', 'true')
            ),
            array(
                'id'            => 'secondary_typekit_font_face',
                'type'          => 'text',
                'title'         => esc_html_x('Heading Typekit Font Face', 'admin-view', 'lapa'),
                'after'         => 'e.g : futura-pt',
                'desc'          => esc_html_x('Enter your Typekit Font Name for the theme\'s Heading Typography', 'admin-view', 'lapa'),
                'dependency'    => array('font_source_3', '==', 'true')
            ),
            array(
                'id'            => 'highlight_typekit_font_face',
                'type'          => 'text',
                'title'         => esc_html_x('Three Typekit Font Face', 'admin-view', 'lapa'),
                'after'         => 'e.g : futura-pt',
                'desc'          => esc_html_x('Enter your Typekit Font Name for the theme\'s Three Typography', 'admin-view', 'lapa'),
                'dependency'    => array('font_source_3', '==', 'true')
            )
        )
    );
    return $sections;
}