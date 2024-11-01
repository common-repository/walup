<?php

/**
 * Plugin Name:       Wallet Up Checkout for WPForms
 * Plugin URI:        https://walletup.app
 * Description:       This plugin helps you load Wallet Up P2P payments methods directly into WPForms Templates. Wallet Up and WPForms plugins are REQUIRED to be activated. WPForms premium version may be required for some functionalities.
 * Version:           1.0.5
 * Author:            Wallet Up
 * Author URI:        https://walletup.app/the-developer-corner/
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       walup
 * Domain Path:       /languages
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

define( 'WALUP_VERSION', '1.0.5' );
define( 'WALUP_PATH', plugin_dir_path( __FILE__ ) );
define( 'WALUP_FILE', __FILE__ );

// Check if WPForms or Wallet Up are activated.
if ( ! is_plugin_active( 'wpforms-lite/wpforms.php' ) && ! is_plugin_active( 'wpforms/wpforms.php' ) ) {
    add_action( 'admin_notices', 'walup_plugin_notice_wpforms' );
    return;
}

if ( ! is_plugin_active( 'wallet-up/wallet-up.php' ) ) {
    add_action( 'admin_notices', 'walup_plugin_notice_wallet_up' );
    return;
}

function walup_plugin_notice_wpforms() {
    echo '<div class="error"><p>' . esc_html__( 'Wallet Up Checkout requires WPForms (either lite or premium version) to be activated.', 'walup' ) . '</p></div>';
}

function walup_plugin_notice_wallet_up() {
    echo '<div class="error"><p>' . esc_html__( 'Wallet Up Checkout requires Wallet Up to be activated.', 'walup' ) . '</p></div>';
}

// The code that runs during plugin activation.
function activate_walup() {
    require_once WALUP_PATH . 'includes/class-walup-activator.php';
    Walup_Activator::activate();
}

// The code that runs during plugin deactivation.
function deactivate_walup() {
    require_once WALUP_PATH . 'includes/class-walup-deactivator.php';
    Walup_Deactivator::deactivate();
}

register_activation_hook( WALUP_FILE, 'activate_walup' );
register_deactivation_hook( WALUP_FILE, 'deactivate_walup' );

// The core plugin class that is used to define internationalization,
// admin-specific hooks, and public-facing site hooks.
require_once WALUP_PATH . 'includes/class-walup.php';
require_once WALUP_PATH . 'templates/wpforms/walup-checkout-template.php';
require_once WALUP_PATH . 'walup-code-snippets-json/walup-submit-condition.code-snippets.php';
require_once WALUP_PATH . 'templates/pages/walup_wpf_insert.php';

/**
 * Begins execution of the plugin.
 * @since    1.0.0
 */
function run_walup() {
    $plugin = new Walup();
    $plugin->run();
}
run_walup();
