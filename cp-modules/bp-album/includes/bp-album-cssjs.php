<?php

/**
 * NOTE: You should always use the wp_enqueue_script() and wp_enqueue_style() functions to include
 * Javascript and CSS files.
 */

/**
 * bp_album_add_js()
 *
 * This function will enqueue the components Javascript file, so that you can make
 * use of any Javascript you bundle with your component within your interface screens.
 */
function bp_album_add_js() {
	global $bp;

	if ( $bp->current_component == $bp->album->slug )
	// JLL_MOD - fixed file dir path (or whatever the modification was)
		wp_enqueue_script( 'bp-album-js', WP_PLUGIN_URL .'/communitypress/cp-modules/bp-album/includes/js/general.js' );
}
//add_action( 'template_redirect', 'bp_album_add_js', 1 );

function bp_album_add_css() {
	global $bp;

		// JLL_MOD - fixed file dir path 
		wp_enqueue_style( 'bp-album-css', WP_PLUGIN_URL .'/communitypress/cp-modules/bp-album/includes/css/general.css' );
		wp_print_styles();
		
}
add_action( 'wp_head', 'bp_album_add_css' );

?>