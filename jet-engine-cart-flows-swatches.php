<?php
/**
 * Plugin Name: Jet Engine + CartFlows Variations Swatches
 * Description: Allows to use CartFlows Variations Swatches inside JetEngine listing with Woo Data widget.
 * Version: 1.0
 * Author: Crocoblock
 * Author URI: https://crocoblock.com/
 * License: GPL2
 * License URI: https://www.gnu.org/licenses/gpl-2.0.html
 */
 class Jet_Engine_CF_Swatches_Compat {

	/**
	 * Register variations swatches template function.
	 */
	public function __construct() {
		add_action(
			'jet-engine/compatibility/woocommerce/data-render/template-functions',
			[ $this, 'add_function' ]
		);
	}

	/**
	 * Add variations swatches template function to the list of the allowed functions.
	 *
	 * @param array $functions Array of allowed template functions.
	 *
	 * @return array
	 */
	public function add_function( $functions = [] ) {
		$functions['jet_engine_cf_variation_swatches'] = 'CartFlows Variation Swatches';
		return $functions;
	}

	/**
	 * Process the swatches render.
	 * Will be used by separate function.
	 */
	public function render_swatches() {
		if ( ! class_exists( '\CFVSW\Inc\Swatches' ) ) {
			return;
		}
		add_action( 'cfvsw_requires_shop_settings', [ $this, 'swatches_on' ] );
		\CFVSW\Inc\Swatches::get_instance()->enqueue_scripts();
		\CFVSW\Inc\Swatches::get_instance()->variation_attribute_html_shop_page();
		remove_action( 'cfvsw_requires_shop_settings', [ $this, 'swatches_on' ] );
	}

	/**
	 * Let CartFlows Variations Swatches to know that swatches are enabled to render now.
	 *
	 * @return bool
	 */
	public function swatches_on() {
		return true;
	}
}

// Initialize the class.
global $jet_engine_cf_swatches_compat;
$jet_engine_cf_swatches_compat = new Jet_Engine_CF_Swatches_Compat();

/**
 * Render the CartFlows Variation Swatches function.
 * Required in the function format because Woo Data widget
 * from the JetEngine expects exactly function name.
 *
 * @return void
 */
function jet_engine_cf_variation_swatches() {
	global $jet_engine_cf_swatches_compat;
	$jet_engine_cf_swatches_compat->render_swatches();
}
