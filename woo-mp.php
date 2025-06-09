<?php

/**
 * Plugin Name: Manual Admin Card Orders
 * Description: Process payments from the WooCommerce Edit Order screen with enhanced order number tracking.
 * Version: 1.0.0
 * Author: Lingo Technologies
 * Author URI: https://lingoit.net/
 * Requires at least: 4.7
 * Tested up to: 6.8
 * Requires PHP: 5.6.0
 * WC requires at least: 3.3.0
 * WC tested up to: 9.8
 * Text Domain: woo-mp
 * Domain Path: /languages
 * License: GPL v2 or later
 * License URI: https://www.gnu.org/licenses/gpl-2.0.html
 * 
 * Originally based on WooCommerce Manual Payment plugin
 * Enhanced by Lingo Technologies with order number tracking
 */

defined( 'ABSPATH' ) || die;

$woo_mp_should_load = ( is_admin() && ! is_network_admin() ) || ( defined( 'DOING_CRON' ) && DOING_CRON );

/**
 * Filters whether the plugin should load.
 *
 * You will need to bind your callback before this plugin loads.
 *
 * Warning: This plugin is intended to be used in the WP Admin. It may not
 *          function correctly outside of it. Loading the plugin outside of
 *          the WP Admin may also impact the security of your site. Test each
 *          release before updating your production site.
 *
 * @param bool $should_load Whether the plugin should load.
 */
$woo_mp_should_load = apply_filters( 'woo_mp_should_load', $woo_mp_should_load );

if ( ! $woo_mp_should_load ) {
    return;
}

define( 'WOO_MP_VERSION', '2.8.6' );
define( 'WOO_MP_PRO_COMPAT_VERSION', 9 );
define( 'WOO_MP_PATH', dirname( __FILE__ ) );
define( 'WOO_MP_URL', plugins_url( '', __FILE__ ) );
define( 'WOO_MP_BASENAME', basename( dirname( __FILE__ ) ) . '/' . basename( __FILE__ ) );

require WOO_MP_PATH . '/includes/woo-mp-requirement-checks.php';

if ( ! Woo_MP_Requirement_Checks::run() ) {
    return;
}

require WOO_MP_PATH . '/includes/bootstrap.php';
