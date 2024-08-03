<?php
/**
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

class Wcwm_Updater_Controller {

	public static function plugins_api( $result, $action = null, $args = null ) {
		return Wcwm_Updater::plugins_api( $result, $action, $args );
	}

	public static function pre_update_plugins( $transient ) {
		if ( empty( $transient->checked ) ) {
			return $transient;
		}

		// Check for updates
		Wcwm_Updater::check_for_updates();

		return $transient;
	}

	public static function update_plugins( $transient ) {
		return Wcwm_Updater::update_plugins( $transient );
	}

	public static function check_for_updates() {
		return Wcwm_Updater::check_for_updates();
	}

	public static function plugin_row_meta( $links, $file ) {
		return Wcwm_Updater::plugin_row_meta( $links, $file );
	}

	public static function updater( $params = array() ) {
		wcwm_setup_environment();

		// Set params
		if ( empty( $params ) ) {
			$params = stripslashes_deep( $_POST );
		}

		// Set uuid
		$uuid = null;
		if ( isset( $params['wcwm_uuid'] ) ) {
			$uuid = trim( $params['wcwm_uuid'] );
		}

		// Set extension
		$extension = null;
		if ( isset( $params['wcwm_extension'] ) ) {
			$extension = trim( $params['wcwm_extension'] );
		}

		$extensions = Wcwm_Extensions::get();

		// Verify whether extension exists
		if ( isset( $extensions[ $extension ] ) ) {
			update_option( $extensions[ $extension ]['key'], $uuid );
		}
	}
}
