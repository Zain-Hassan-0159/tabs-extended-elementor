<?php

/**
 * Plugin Name:       Tabs Extended Elementor
 * Description:       Tabs Extended Elementor is created by Zain Hassan.
 * Version:           1.0.0
 * Requires at least: 5.2
 * Requires PHP:      7.2
 * Author:            Zain Hassan
 * Author URI:        https://hassanzain.com
 * License:           GPL v2 or later
 * License URI:       https://www.gnu.org/licenses/gpl-2.0.html
 * Text Domain:       elementor
*/

if(!defined('ABSPATH')){
exit;
}


add_action( 'elementor/widgets/register', 'register_tabsExtended_elementor_widgets' );


function register_tabsExtended_elementor_widgets( $widgets_manager ) {
	require_once( __DIR__ . '/inc/tabs.php' );
	$widgets_manager->register( new \tabsExtended_widget_elementor );
	require_once( __DIR__ . '/inc/text-editor.php' );
	$widgets_manager->register( new \Widget_Text_Editor_extended );
}
