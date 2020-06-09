<?php
declare(strict_types=1);

/**
 * If this file is called directly, then abort execution.
 */
if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

/**
 * This is a WP-CLI command, so bail if it's not available.
 */
if ( ! defined( 'WP_CLI' ) ) {
    return;
}

/**
 * Class WP_Plugin_Boilerplate_Cli
 *
 * WP-CLI commands for WordPress Plugin Boilerplate.
 *
 * @package     WP_Plugin_Boilerplate
 * @subpackage  WP_Plugin_Boilerplate_Cli/includes
 * @author      Your Name <jjpeleato@example.com>
 * @link        http://example.com/
 * @copyright   2XXX Your Name or Company Name
 * @since       0.1.0
 */
class WP_Plugin_Boilerplate_Cli extends \WP_CLI_Command
{
    /**
     * WP_Plugin_Boilerplate_Cli constructor.
     *
     * A dummy constructor to ensure WP_Plugin_Boilerplate_Cli is only initialized once
     *
     * @since 0.1.0
     */
    public function __construct()
    {
        /* Do nothing here */
    }

    /**
     * Synchronize.
     *
     * @subcommand synchronize
     *
     * @since 0.1.0
     *
     * @param array $args Args.
     * @param array $args_assoc Associative args.
     *
     * @return void
     */
    public function synchronize($args, $args_assoc)
    {
	    /**
	     * Example normal line
	     */
    	$this->message('Hello World!', 'history-cli');

	    /**
	     * Example success line and end process
	     */
    	$this->message('End process successfully','success');
    }

    /**
     * Write on CLI and debug log
     *
     * @param string $str
     * @param string $type
     *
     * @since 0.1.0
     */
    private function message($str, $type = '') {
        $message = esc_html__($str,WP_PLUGIN_BOILERPLATE_DOMAIN);

        if ($type === 'success') {
            WP_CLI::success($message);
        } else if ($type === 'error') {
            WP_CLI::error($message);
        } else {
            WP_CLI::line($message);
        }

	    WP_Plugin_Boilerplate_Functions::write_log($message, $type);
    }
}

WP_CLI::add_command('wp-plugin-boilerplate', 'WP_Plugin_Boilerplate_Cli');
