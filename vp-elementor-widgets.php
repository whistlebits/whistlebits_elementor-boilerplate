<?php
/**
 * Plugin Name: Whistlebits' Elementor Plugin Boilerplate
 * Description: Custom designed widgets for use with Elementor.
 * Version:     1.0.0
 * Author:      Victor Paredes
 * Author URI:  https://victorpared.es
 * Text Domain: whistlebits-elementor-boilerplate
 */

function register_wb_elementor_widgets( $widgets_manager ) {

	require_once( __DIR__ . '/includes/widgets/widget.php' );

	$widgets_manager->register( new \Widget() );

}
add_action( 'elementor/widgets/register', 'register_wb_elementor_widgets' );