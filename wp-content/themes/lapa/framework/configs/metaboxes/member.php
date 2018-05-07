<?php

// Do not allow directly accessing this file.
if ( ! defined( 'ABSPATH' ) ) {
    exit( 'Direct script access denied.' );
}


/**
 * MetaBox
 *
 * @param array $sections An array of our sections.
 * @return array
 */
function lapa_metaboxes_section_member( $sections )
{
    $sections['member'] = array(
        'name'      => 'member',
        'title'     => esc_html_x('Member Information', 'admin-view', 'lapa'),
        'icon'      => 'laicon-file',
        'fields'    => array(
            array(
                'id'    => 'role',
                'type'  => 'text',
                'title' => esc_html_x('Role', 'admin-view', 'lapa'),
            ),
            array(
                'id'    => 'phone',
                'type'  => 'text',
                'title' => esc_html_x('Phone Number', 'admin-view', 'lapa'),
            ),
            array(
                'id'    => 'facebook',
                'type'  => 'text',
                'title' => esc_html_x('Facebook URL', 'admin-view', 'lapa'),
            ),
            array(
                'id'    => 'twitter',
                'type'  => 'text',
                'title' => esc_html_x('Twitter URL', 'admin-view', 'lapa'),
            ),
            array(
                'id'    => 'pinterest',
                'type'  => 'text',
                'title' => esc_html_x('Pinterest URL', 'admin-view', 'lapa'),
            ),
            array(
                'id'    => 'linkedin',
                'type'  => 'text',
                'title' => esc_html_x('LinkedIn URL', 'admin-view', 'lapa'),
            ),
            array(
                'id'    => 'dribbble',
                'type'  => 'text',
                'title' => esc_html_x('Dribbble URL', 'admin-view', 'lapa'),
            ),
            array(
                'id'    => 'google_plus',
                'type'  => 'text',
                'title' => esc_html_x('Google Plus URL', 'admin-view', 'lapa'),
            ),
            array(
                'id'    => 'youtube',
                'type'  => 'text',
                'title' => esc_html_x('Youtube URL', 'admin-view', 'lapa'),
            ),
            array(
                'id'    => 'email',
                'type'  => 'text',
                'title' => esc_html_x('Email Address', 'admin-view', 'lapa'),
            )
        )
    );
    return $sections;
}