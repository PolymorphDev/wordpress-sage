<?php

/**
 * Fired during plugin activation.
 * This class defines all code necessary to run during the plugin's activation.
 * @class Cortex_Activator
 * @since 0.1.0
 */
class Cortex_Activator {

	//--------------------------------------------------------------------------
	// Methods
	//--------------------------------------------------------------------------

	/**
	 * Plugin activation callback.
	 * @since 0.1.0
	 * @hidden
	 */
	public static function activate() {
		add_option('cortex_enqueue_style_admin', true);
		add_option('cortex_enqueue_script_admin', true);
		add_option('cortex_environment', 'dev');
	}
}
