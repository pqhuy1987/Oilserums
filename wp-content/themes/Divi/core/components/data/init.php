<?php

if ( ! function_exists( 'et_core_data_init' ) ):
function et_core_data_init() {}
endif;


if ( ! function_exists( 'et_html5_data_attr' ) ):
/**
 * Generates a properly escaped HTML5 data attribute string.
 *
 * @param string $name         The attribute name.
 * @param string $value        The attribute value.
 * @param bool   $space_before Whether or not the result should start with a space. Default is `true`.
 *
 * @return string
 */
function et_html5_data_attr( $name, $value, $space_before = true ) {
	$result = ' data-' . esc_attr( $name ) . '="' . esc_attr( $value ) . '"';

	return $space_before ? $result : trim( $result );
}
endif;


if ( ! function_exists( 'et_sanitized_previously' ) ):
/**
 * Semantical previously sanitized acknowledgement
 *
 * @param mixed $value The value being passed-through
 *
 * @return mixed
 */
function et_sanitized_previously( $value ) {
	return $value;
}
endif;
