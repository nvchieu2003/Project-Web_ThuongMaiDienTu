<?php
// Add custom Theme Functions here
function my_custom_translations( $strings ) {
	$text = array('Quick View' => 'Xem nhanh');
	$strings = str_ireplace( array_keys( $text ), $text, $strings );
	return $strings;
}
add_filter( 'gettext', 'my_custom_translations', 20 );
	
add_filter( 'woocommerce_should_load_paypal_standard', '__return_true' );