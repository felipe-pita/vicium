<?php 

/*
 * Critérios de segurança
 *
 */

// Remove Pingback XMLRPC
function sar_block_xmlrpc_attacks( $methods ) {
   unset( $methods['pingback.ping'] );
   unset( $methods['pingback.extensions.getPingbacks'] );
   return $methods;
}
add_filter( 'xmlrpc_methods', 'sar_block_xmlrpc_attacks' );

function sar_remove_x_pingback_header( $headers ) {
   unset( $headers['X-Pingback'] );
   return $headers;
}
add_filter( 'wp_headers', 'sar_remove_x_pingback_header' );


// Remove as mensagens de erro de login
add_filter('login_errors', create_function('$a', "return null;") );