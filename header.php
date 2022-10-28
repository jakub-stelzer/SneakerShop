<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package storefront
 */

?><!doctype html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<?php wp_body_open(); ?>

<?php do_action( 'storefront_before_site' ); ?>

<div id="page" class="hfeed site">
	<?php do_action( 'storefront_before_header' ); ?>

<header>
    
    <div class="col-12 nejvic">
        <div class="col-2 logo">    
             <a href="http://sneakers-shop.local"><img src="wp-content/uploads/2022/10/360_F_136554899_bI9RjRJeAdCUoAgyIcNdMz8UvorxxohP.jpg" height="100px" width="100px" alt=""></a>
        </div>
        <div class="col-6 linky">
            <div>
                <a href="shop/">SHOP</a>
                <a href="privacy-policy/">PRIVACY POLICY</a>
                <a href="refund_returns/">REFUND LINK PAGE</a>
            </div>
        </div>
        <div class="col-3 vyhledavac">
             <?php get_search_form( ) ?>
        </div>
		<div class="col-1 cart d-flex align-content-center">
			<a href="cart/"><img src="wp-content/uploads/2022/10/shopping-cart.png" height="35px" width="35px" alt=""></a>
        </div>
    </div>

</header>
	<?php
	/**
	 * Functions hooked in to storefront_before_content
	 *
	 * @hooked storefront_header_widget_region - 10
	 * @hooked woocommerce_breadcrumb - 10
	 */
	add_action( 'shoptimizer_before_content', 'shoptimizer_sticky_header_display', 5 );
	do_action( 'storefront_before_content' );
	?>

	<div id="content" class="site-content" tabindex="-1">
		<div class="col-full">

		<?php
		do_action( 'storefront_content_top' );
