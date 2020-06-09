<?php
declare(strict_types=1);

/**
 * If this file is called directly, then abort execution.
 */
if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

/**
 * Class WP_Plugin_Boilerplate_Functions
 *
 * The functions class.
 *
 * @package     WP_Plugin_Boilerplate
 * @subpackage  WP_Plugin_Boilerplate/includes
 * @author      Your Name <jjpeleato@example.com>
 * @link        http://example.com/
 * @copyright   2XXX Your Name or Company Name
 * @since       0.1.0
 */
class WP_Plugin_Boilerplate_Functions
{
    /**
     * WP_Plugin_Boilerplate_Functions constructor.
     *
     * A dummy constructor to ensure WP_Plugin_Boilerplate_Functions is only initialized once
     *
     * @since 0.1.0
     */
    public function __construct()
    {
        /* Do nothing here */
    }

    /**
     * Generate random alphanumeric string
     *
     * @param int $strength
     *
     * @return string
     */
    public static function generate_hash($strength = 16) {
        $permitted_chars = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $input_length = strlen($permitted_chars);
        $random_string = '';
        for($i = 0; $i < $strength; $i++) {
            $random_character = $permitted_chars[mt_rand(0, $input_length - 1)];
            $random_string .= $random_character;
        }

        return $random_string;
    }

	/**
	 * Write a history and error log if WP_DEBUG is active.
	 * You can call the function anywhere.
	 *
	 * @param $log
	 * @param string $type
	 *
	 * @since 0.1.0
	 */
    public static function write_log($log, $type = '')
    {
        if (WP_DEBUG !== true) {
            return;
        }

        $datetime = date("Y/m/d H:i:s");
        error_log(
            $datetime . ' ' . $log . PHP_EOL,
            3,
	        WP_PLUGIN_BOILERPLATE_PATH . '/log/' . ($type === 'error' ? 'error' : 'history') . '.txt'
        );
    }
}
