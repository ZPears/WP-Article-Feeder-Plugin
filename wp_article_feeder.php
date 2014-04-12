<?php

/*
   Plugin Name: WP Article Feeder
   Plugin URI: https://github.com/ZPears/WP-Article-Feeder-Plugin.git
   Description: A plugin that takes article links and styles them for the user.
   Version: 1.0
   Author: Zachary Pearson
   Author URI: nul
   License: GPL2
   */

/*
* Assign global variables
*
*/

$plugin_url = WP_PLUGIN_URL . '/wp_article_feeder';

function wp_article_feeder_menu() {

	/*
	 * Use the add_options_page function
	 * add_options_page ( $page_title, $menu_title, $capability, $menu_slug, $function )
	 * 
	 */

	add_options_page(
		'WP Article Feeder Plugin',
		'WP Article Feeder Options',
		'edit_pages',
		'wp_article_plugin',
		'wp_article_feeder_options_page'
	);

}

add_action( 'admin_menu', 'wp_article_feeder_menu' );

function wp_article_feeder_options_page() {

        global $plugin_url;

        if ( isset( $_POST['wp_article_feeder_form_submitted'] ) ) {

          $hidden_field = esc_html( $_POST['wp_article_feeder_form_submitted'] );

          if ( $hidden_field == "Y" ) {

              $

}

	require( 'inc/options-page-wrapper.php');

}


?>