<?php
/**
 * Plugin Name: WC WP Migration
 * Plugin URI: https://wc.com/
 * Description: Migration tool for all your blog data. Import or Export your blog content with a single click.
 * Author: WC
 * Author URI: https://wc.com/
 * Version: 1.0
 * Text Domain: wc-wp-migration
 * Domain Path: /languages
 * Network: True
 *
 * Copyright (C) 2024-2028 WC Inc.
 *
 * This program is free software: you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with this program.  If not, see <http://www.gnu.org/licenses/>.
 *
 */

// Check SSL Mode
if ( isset( $_SERVER['HTTP_X_FORWARDED_PROTO'] ) && ( $_SERVER['HTTP_X_FORWARDED_PROTO'] === 'https' ) ) {
	$_SERVER['HTTPS'] = 'on';
}

// Plugin Basename
define( 'WCWM_PLUGIN_BASENAME', basename( dirname( __FILE__ ) ) . '/' . basename( __FILE__ ) );

// Plugin Path
define( 'WCWM_PATH', dirname( __FILE__ ) );

// Plugin Url
define( 'WCWM_URL', plugins_url( '', WCWM_PLUGIN_BASENAME ) );

// Plugin Storage Url
define( 'WCWM_STORAGE_URL', plugins_url( 'storage', WCWM_PLUGIN_BASENAME ) );

// Plugin Backups Url
define( 'WCWM_BACKUPS_URL', content_url( 'wcwm-backups', WCWM_PLUGIN_BASENAME ) );

// Themes Absolute Path
define( 'WCWM_THEMES_PATH', get_theme_root() );

// Include constants
require_once dirname( __FILE__ ) . DIRECTORY_SEPARATOR . 'constants.php';

// Include deprecated
require_once dirname( __FILE__ ) . DIRECTORY_SEPARATOR . 'deprecated.php';

// Include functions
require_once dirname( __FILE__ ) . DIRECTORY_SEPARATOR . 'functions.php';

// Include exceptions
require_once dirname( __FILE__ ) . DIRECTORY_SEPARATOR . 'exceptions.php';

// Include loader
require_once dirname( __FILE__ ) . DIRECTORY_SEPARATOR . 'loader.php';

// =========================================================================
// = All app initialization is done in Wcwm_Main_Controller __constructor =
// =========================================================================
$main_controller = new Wcwm_Main_Controller();
