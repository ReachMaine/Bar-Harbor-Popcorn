<?php
	$cwk_thumbimg = array(200, 999); // size of featured image in archive/category blog
	$cwk_postimg = array(200, 999); // size of featured image on single post.
	add_image_size( 'cwk-slider', 1420, 447, true ); // Slider

	/***** change admin favicon *****/
	/* add favicons for admin */
	add_action('login_head', 'add_favicon');
	add_action('admin_head', 'add_favicon');

	function add_favicon() {
		$favicon_url = get_stylesheet_directory_uri() . '/images/admin-favicon.ico';
		echo '<link rel="shortcut icon" href="' . $favicon_url . '" />';
	}
	/***** end admin favicon *****/

		/*****  change the login screen logo ****/
	function my_login_logo() { ?>
		<style type="text/css">
			body.login div#login h1 a {
				background-image: url(<?php echo get_stylesheet_directory_uri(); ?>/images/bhp.jpg);
				padding-bottom: 30px;
				background-size: cover;
				margin-left: 0px;
				margin-bottom: 0px;
				margin-right: 0px;
				height: 150px;
				width: 100%;
			}
		</style>
	<?php }
	add_action( 'login_enqueue_scripts', 'my_login_logo' );
	/*****  end custom login screen logo ****/

// woocommerce
	// remove sku
	add_filter( 'wc_product_sku_enabled', '__return_false' );

	/* change text */
	if ( !function_exists('zig_woo_text') ){
		function zig_woo_text( $translated_text, $text, $domain ) {
			$theme_text_domain = 'woocommerce';
		    switch ( $translated_text ) {
	            case 'Out of stock' :
	                $translated_text = __( 'Product Unavailable - Popping again in Spring.', $theme_text_domain);
	                break;
	        }

	    	return $translated_text;
		}
		add_filter( 'gettext', 'zig_woo_text', 20, 3 );
	}

	/* this removes everything including our "Popping again in spring" text (Out of Stock) text
	remove_action( 'woocommerce_after_shop_loop_item', 'woocommerce_template_loop_add_to_cart' );
	remove_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_add_to_cart', 30 ); */


		// remove add to cart Button  - by making products unpurchasable.
	//	add_filter( 'woocommerce_is_purchasable', false );
?>
