<?php
declare(strict_types=1);

/**
 * @package           WP_Plugin_Boilerplate
 * @author            Your Name
 * @copyright         20XX Your Name or Company Name
 * @link              http://example.com/
 * @since             1.0.0
 *
 * @wordpress-plugin
 * Plugin Name:       WordPress Plugin Boilerplate
 * Plugin URI:        https://github.com/jjpeleato/wp-plugin-boilerplate
 * Description:       Description of the plugin.
 * Version:           1.0.0
 * Requires at least: 5.2
 * Requires PHP:      7.2
 * Author:            Your Name or Your Company
 * Author URI:        http://example.com/
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       wp-plugin-boilerplate
 * Domain Path:       /lang
 *
 * More information:
 *
 * https://developer.wordpress.org/plugins/
 * https://codex.wordpress.org/Plugin_API
 */

/**
 * If this file is called directly, then abort execution.
 */
if ( ! defined( 'WPINC' ) ) {
	die;
}

define( 'WP_PLUGIN_BOILERPLATE_URL', untrailingslashit( plugins_url( '', __FILE__ ) ) );
define( 'WP_PLUGIN_BOILERPLATE_PATH', dirname(__FILE__) );
define( 'WP_PLUGIN_BOILERPLATE_VERSION', '1.0.0' );
define( 'WP_PLUGIN_BOILERPLATE__MINIMUM_WP_VERSION', '5.4' );
