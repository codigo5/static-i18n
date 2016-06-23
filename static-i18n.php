<?php

/**
 * Plugin Name: Static i18n
 * Plugin URI: https://github.com/codigo5/static-i18n
 * Description: A tiny small plugin which allows use static wordpress translation inside dynamic content
 * Author: Dhyego Fernando
 * Version: 1.0.0
 * Author URI: https://github.com/dhyegofernando
 * License: MIT
 */

function t_shortcode( $atts ) {
  $translation = __( $atts['key'], $atts['domain'] );
  $args = explode( ',', $atts['args'] );
  array_unshift( $args, $translation );
  return call_user_func_array( 'sprintf', $args );
}
remove_shortcode( 't' );
add_shortcode( 't' , 't_shortcode' );
