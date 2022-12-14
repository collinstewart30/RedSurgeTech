<?php
/**
 * Uninstall WPCode.
 *
 * Remove:
 * - custom capabilities.
 *
 * @package WPCode
 */

// Exit if accessed directly.
if ( ! defined( 'WP_UNINSTALL_PLUGIN' ) ) {
	exit;
}

require_once 'ihaf.php';

if ( class_exists( 'WPCode_Capabilities' ) ) {
	// Remove custom capabilities on uninstall.
	WPCode_Capabilities::uninstall();
}

if ( class_exists( 'WPCode_Notifications' ) ) {
	WPCode_Notifications::delete_notifications_data();
}
