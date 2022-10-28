<?php
// Exit if accessed directly
if ( !defined( 'ABSPATH' ) ) exit;

// BEGIN ENQUEUE PARENT ACTION
// AUTO GENERATED - Do not modify or remove comment markers above or below:

if ( !function_exists( 'chld_thm_cfg_locale_css' ) ):
    function chld_thm_cfg_locale_css( $uri ){
        if ( empty( $uri ) && is_rtl() && file_exists( get_template_directory() . '/rtl.css' ) )
            $uri = get_template_directory_uri() . '/rtl.css';
        return $uri;
    }
endif;
add_filter( 'locale_stylesheet_uri', 'chld_thm_cfg_locale_css' );

// END ENQUEUE PARENT ACTION

function load_bootstrap()
{
    wp_enqueue_style("bootstrap", "https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css");
    wp_enqueue_script("bootstrap", "https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js", null, null, true);
}
add_action("wp_enqueue_scripts", "load_bootstrap");


function add_storefront_header_searchfield()
{
    add_action('storefront_header', 'storefront_product_search', 55);
}
add_action('init', 'add_storefront_header_searchfield');

function my_stylized_header_before()
{
    if (!is_page('')) :
        echo '<div class="banner col-12 "> <p class="banner"> During the HELLOWEEN we have a special offer to give you special spray againsts drty spots if your order is up to 1500 DKK </p> </div>';
    endif;
}
add_action('storefront_before_header', 'my_stylized_header_before', 5);