<?php
/**
 * Plugin Name
 *
 * @package     *PACKAGENAME*
 * @author      *AUTHORNAME*
 * @copyright   *YEAR*
 * @license     *PLUGINNAME*
 *
 * @wordpress-plugin
 * Plugin Name: *PLUGINNAME*
 * Plugin URI:  *PLUGINURI*
 * Description: *DESCRIPTION*
 * Version:     *VERSION*
 * Author:      *AUTHOR*
 * Author URI:  *AUTHORURI*
 * Text Domain: *PLUGINNAME*
 * License:     *LICENSE*
 * License URI: *LICENSEURI*
 */

function wallets_multiadapter_coins_filter1( $coins ) {
	$coins['tCRW'] = array( // replace XYZ with the coin's ticker symbol in this line

		// Coin symbol (again)
		'symbol' => 'tCRW',

		// Coin name
		'name' => 'tCrown',

		// Default withdrawal fee (coin adapter settings override this)
		'wd fee' => '0.005',

		// Default internal transaction fee (coin adapter settings override this)
		'move fee' => '0.0005',

		// Default min confirmation count required for deposits (coin adapter settings override this)
		'confirms' => 1,

		// Default RPC port (coin adapter settings override this)
		'port number' => 19341,

		// Whether the wallet supports -walletnotify
		'tx notify' => 1,

		// Whether the wallet supports -blocknotify
		'block notify' => 1,

		// Whether the wallet supports -alertnotify (some wallets have deprecated this)
		'alert notify' => 0,

		// Comma separated list of hex bytes, needed for frontend validation of withdraw addresses. Leave blank for no validation.
		'versions' => '',

		// An sprintf() pattern for deposit address QR Code URI. If unsure, set to '%s'.
		'qr pattern' => '%s',

		// An sprintf() pattern for displaying amounts. If unsure, leave to '%01.8f'.
		'amount pattern' => '%01.8f',

		// Default sprintf() pattern for URI to block explorer transaction page. Can be overriden with WordPress filter.
		'explorer tx uri' => 'EXPLORERURI',

		// Default sprintf() pattern for URI to block explorer address page. Can be overriden with WordPress filter.
		'explorer address uri' => 'EXPLORERADDRESS',

		// URL to an 64x64 icon for the coin. Or leave empty to pull the icon from 'assets/sprites/SYMBOL.png'.
		'icon url' => '',
	);

	return $coins;
 }

add_filter( 'wallets_multiadapter_coins', 'wallets_multiadapter_coins_filter1' );