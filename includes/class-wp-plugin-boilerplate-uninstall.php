<?php
declare(strict_types=1);

/**
 * If this file is called directly, then abort execution.
 */
if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

/**
 * Class WP_Plugin_Boilerplate_Uninstall
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
class WP_Plugin_Boilerplate_Uninstall
{
    /**
     * WP_Plugin_Boilerplate_Uninstall constructor.
     *
     * A dummy constructor to ensure WP_Plugin_Boilerplate_Uninstall is only initialized once
     *
     * @since 0.1.0
     */
    public function __construct()
    {
        /* Do nothing here */
    }

	/**
	 * Short Description. (use period)
	 *
	 * Long Description.
	 *
	 * @since    1.0.0
	 */
	public static function deactivate()
	{
		delete_option(WP_PLUGIN_BOILERPLATE_MACHINE_NAME);

		WP_Plugin_Boilerplate_Functions::write_log(
			WP_PLUGIN_BOILERPLATE_MACHINE_NAME . '::WP_Plugin_Boilerplate_Uninstall::deactivate',
			'history'
		);
	}
}
