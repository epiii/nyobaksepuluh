<?php
// Do not allow directly accessing this file.
if ( ! defined( 'ABSPATH' ) ) {
    exit( 'Direct script access denied.' );
}


$shortcode_params = array(
    array(
        'type' => 'attach_image',
        'heading' => __('Upload the banner image', 'lastudio'),
        'param_name' => 'banner_id'
    ),
    array(
        'type' => 'dropdown',
        'heading' => __('Design','lastudio'),
        'param_name' => 'style',
        'value' => array(
            __('Default','lastudio') => '1',
            __('Style 02','lastudio') => '2',
        ),
        'std' => '1'
    ),

    array(
        'type' => 'vc_link',
        'heading' => __('Banner Link', 'lastudio'),
        'param_name' => 'banner_link',
        'description' => __('Add link / select existing page to link to this banner', 'lastudio')
    ),


    array(
        'type' => 'textfield',
        'heading' => __( 'Title', 'lastudio' ),
        'param_name' => 'title',
        'admin_label' => true,
        'dependency'    => array(
            'element' => 'style',
            'value'   => array('1')
        )
    ),

    array(
        'type' => 'textarea',
        'heading' => __( 'Content', 'lastudio' ),
        'param_name' => 'content',
        'admin_label' => true
    ),

    LaStudio_Shortcodes_Helper::fieldElementID(array(
        'param_name' 	=> 'el_id'
    )),
    LaStudio_Shortcodes_Helper::fieldExtraClass(),
    LaStudio_Shortcodes_Helper::fieldExtraClass(array(
        'heading' 		=> __('Extra class name for title', 'lastudio'),
        'param_name' 	=> 'el_class1',
        'dependency'    => array(
            'element' => 'style',
            'value'   => array('1')
        )
    )),
    LaStudio_Shortcodes_Helper::fieldExtraClass(array(
        'heading' 		=> __('Extra class name for content', 'lastudio'),
        'param_name' 	=> 'el_class2'
    )),

    array(
        'type' 			=> 'colorpicker',
        'param_name' 	=> 'bg_color',
        'heading' 		=> __('Background Color', 'lastudio'),
        'group' 		=> __('Design', 'lastudio'),
        'dependency'    => array (
            'element' => 'style',
            'value'   => array('1')
        )
    )
);

$param_fonts_title1 = LaStudio_Shortcodes_Helper::fieldTitleGFont('title', __('Title', 'lastudio'), array(
    'element' => 'style',
    'value'   => array('1')
));
$param_fonts_title2 = LaStudio_Shortcodes_Helper::fieldTitleGFont('content', __('Content', 'lastudio'));


$shortcode_params = array_merge( $shortcode_params, $param_fonts_title1, $param_fonts_title2);

return apply_filters(
    'LaStudio/shortcodes/configs',
    array(
        'name'			=> __('Spa Service', 'lastudio'),
        'base'			=> 'la_spa_service',
        'icon'          => 'la-wpb-icon la_spa_service',
        'category'  	=> __('La Studio', 'lastudio'),
        'description'   => __('Displays the banner image with information', 'lastudio'),
        'params' 		=> $shortcode_params
    ),
    'la_spa_service'
);