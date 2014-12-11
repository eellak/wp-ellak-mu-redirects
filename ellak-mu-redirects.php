<?php

/*
Plugin Name: ELLAK Multisite redirections
Plugin URI:  https://bitbucket.com/eellak/ellak-multisite-redirect
Description: Redirects 'subscribers' users to the site they logged in, instead of wp-admin.
Version:     0.1
Author:      Manolis Tzanidakis
Author URI:  http://mtzanidakis.com/
License:     ISC
*/

function ellak_login_redirect( $redirect_to, $request_redirect_to, $user ) {
	// remove wp-admin from the redirect link
	$redirect_to = preg_replace( '/\/wp-admin\//', '', $redirect_to ); 

	return $redirect_to;
} 
add_filter( 'login_redirect', 'ellak_login_redirect', 100, 3 );

?>
