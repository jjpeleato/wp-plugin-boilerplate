<?php
declare(strict_types=1);

/**
 * @package           WP_Plugin_Boilerplate
 * @author            Your Name
 * @copyright         20XX Your Name or Company Name
 * @link              http://example.com/
 * @since             1.0.0
 *
 * Fired when the plugin is uninstalled.
 *
 * More information:
 *
 * https://developer.wordpress.org/plugins/plugin-basics/uninstall-methods/#method-2-uninstall-php
 */

// If uninstall not called from WordPress, then exit.
if ( ! defined( 'WP_UNINSTALL_PLUGIN' ) ) {
	exit;
}
