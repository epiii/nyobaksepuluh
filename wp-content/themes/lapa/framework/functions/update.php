<?php

/**
 * This function allow get property of `woocommerce_loop` inside the loop
 * @since 1.0.1
 * @param string $prop Prop to get.
 * @param string $default Default if the prop does not exist.
 * @return mixed
 */

if(!function_exists('lapa_get_wc_loop_prop')){
    function lapa_get_wc_loop_prop( $prop, $default = ''){
        return isset( $GLOBALS['woocommerce_loop'], $GLOBALS['woocommerce_loop'][ $prop ] ) ? $GLOBALS['woocommerce_loop'][ $prop ] : $default;
    }
}

/**
 * This function allow set property of `woocommerce_loop`
 * @since 1.0.1
 * @param string $prop Prop to set.
 * @param string $value Value to set.
 */

if(!function_exists('lapa_set_wc_loop_prop')){
    function lapa_set_wc_loop_prop( $prop, $value = ''){
        if(isset($GLOBALS['woocommerce_loop'])){
            $GLOBALS['woocommerce_loop'][ $prop ] = $value;
        }
    }
}

/**
 * This function allow get property of `lapa_loop` inside the loop
 * @since 1.0.1
 * @param string $prop Prop to get.
 * @param string $default Default if the prop does not exist.
 * @return mixed
 */

if(!function_exists('lapa_get_theme_loop_prop')){
    function lapa_get_theme_loop_prop( $prop, $default = ''){
        return isset( $GLOBALS['lapa_loop'], $GLOBALS['lapa_loop'][ $prop ] ) ? $GLOBALS['lapa_loop'][ $prop ] : $default;
    }
}

remove_filter( 'woocommerce_product_loop_start', 'woocommerce_maybe_show_product_subcategories' );

if(!function_exists('lapa_override_yikes_mailchimp_page_data')){
    function lapa_override_yikes_mailchimp_page_data($page_data, $form_id){
        $new_data = new stdClass();
        if(isset($page_data->ID)){
            $new_data->ID = $page_data->ID;
        }
        return $new_data;
    }
    add_filter('yikes-mailchimp-page-data', 'lapa_override_yikes_mailchimp_page_data', 10, 2);
}
