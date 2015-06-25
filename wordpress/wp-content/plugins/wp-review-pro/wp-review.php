<?php
/**
 * Plugin Name: WP Review Pro
 * Plugin URI: http://mythemeshop.com/plugins/wp-review-pro/
 * Description: Create reviews! Choose from Stars, Percentages, Circles or Points for review scores. Supports Retina Display, WPMU and Unlimited Color Schemes.
 * Version: 1.0.7
 * Author: MyThemesShop
 * Author URI: http://mythemeshop.com/
 *
 * @since     1.0
 * @copyright Copyright (c) 2013, MyThemesShop
 * @author    MyThemesShop
 * @license   http://www.gnu.org/licenses/old-licenses/gpl-2.0.html
 */

// Exit if accessed directly
if ( ! defined( 'ABSPATH' ) ) exit;

// Make it load WP Review first, as old version doesn't check if it has been loaded before
function wp_review_plugin_first() {
	$this_plugin = 'wp-review/wp-review.php';
	$active_plugins = get_option('active_plugins');
	$this_plugin_key = array_search($this_plugin, $active_plugins);
	if ($this_plugin_key) { // if it's 0 it's the first plugin already, no need to continue
		array_splice($active_plugins, $this_plugin_key, 1);
		array_unshift($active_plugins, $this_plugin);
		update_option('active_plugins', $active_plugins);
	}
}
add_action("activated_plugin", "wp_review_plugin_first");

// WP Review activated?
if (defined( 'MTS_WP_REVIEW_DB_TABLE' )) {
	add_action( 'admin_notices', 'wp_review_deactivate_plugin_notice' );

	function wp_review_deactivate_plugin_notice() {
	    ?>
	    <div class="error">
	        <p><?php _e( 'Please deactivate WP Review plugin first to use the Premium features!', 'wp-review' ); ?></p>
	    </div>
	    <?php
	}
} else {
	
	/* Plugin version */
	define( 'WP_REVIEW_PLUGIN_VERSION', '1.0.7' );
	
	/* Sets the custom db table name. */
	define( 'MTS_WP_REVIEW_DB_TABLE', 'mts_wp_reviews' );
		
	/* When plugin is activated */
	register_activation_hook( __FILE__, 'wp_review_activation' );

	/* Defines constants used by the plugin. */
	add_action( 'plugins_loaded', 'wp_review_constants', 1 );

	/* Internationalize the text strings used. */
	add_action( 'plugins_loaded', 'wp_review_i18n', 2 );

	/* Loads libraries. */
	add_action( 'plugins_loaded', 'wp_review_includes_libraries', 3 );

	/**
	 * Defines constants.
	 *
	 * @since 1.0
	 */
	function wp_review_constants() {

		/* Sets the path to the plugin directory. */
		define( 'WP_REVIEW_DIR', trailingslashit( plugin_dir_path( __FILE__ ) ) );

		/* Sets the path to the plugin directory URI. */
		define( 'WP_REVIEW_URI', trailingslashit( plugin_dir_url( __FILE__ ) ) );

		/* Sets the path to the `admin` directory. */
		define( 'WP_REVIEW_ADMIN', WP_REVIEW_DIR . trailingslashit( 'admin' ) );

		/* Sets the path to the `includes` directory. */
		define( 'WP_REVIEW_INCLUDES', WP_REVIEW_DIR . trailingslashit( 'includes' ) );

		/* Sets the path to the `assets` directory. */
		define( 'WP_REVIEW_ASSETS', WP_REVIEW_URI . trailingslashit( 'assets' ) );	

		/* Sets plugin base 'directory/file.php' */
		define( 'WP_REVIEW_PLUGIN_BASE', plugin_basename(__FILE__) );

	}

	/**
	 * Internationalize the text strings used.
	 *
	 * @since 1.0
	 */
	function wp_review_i18n() {
		load_plugin_textdomain( 'wp-review', false, dirname( plugin_basename( __FILE__ ) ) . '/languages/' );
	}

	/**
	 * Loads the initial files needed by the plugin.
	 *
	 * @since 1.0
	 */
	function wp_review_includes_libraries() {

		/* Loads the admin functions. */
		require_once( WP_REVIEW_ADMIN . 'admin.php' );

		/* Loads the meta boxes. */
		require_once( WP_REVIEW_ADMIN . 'metaboxes.php' );

		/* Loads the front-end functions. */	
		require_once( WP_REVIEW_INCLUDES . 'functions.php' );

		/* Loads the widget. */	
		require_once( WP_REVIEW_INCLUDES . 'widget.php' );

		/* Loads rate with comment functions. */	
		require_once( WP_REVIEW_INCLUDES . 'comments.php' );

		/* Loads the enqueue functions. */
		require_once( WP_REVIEW_INCLUDES . 'enqueue.php' );

		/* Loads the settings page. */
		require_once( WP_REVIEW_ADMIN . 'options.php' );

	}

	function wp_review_activation(){
	    /* Loads activation functions */
	    //require_once( plugin_dir_path( __FILE__ ) . '/includes/functions.php' );
		require_once( plugin_dir_path( __FILE__ ) . '/admin/activation.php' );
	}

}

?>