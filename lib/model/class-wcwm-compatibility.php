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

class Wcwm_Compatibility {

	public static function get( $params ) {
		$extensions = Wcwm_Extensions::get();

		foreach ( $extensions as $extension_name => $extension_data ) {
			if ( ! isset( $params[ $extension_data['short'] ] ) ) {
				unset( $extensions[ $extension_name ] );
			}
		}

		// Get updater URL
		$updater_url = add_query_arg( array( 'wcwm_updater' => 1 ), network_admin_url( 'plugins.php' ) );

		// If no extension is used, update everything that is available
		if ( empty( $extensions ) ) {
			$extensions = Wcwm_Extensions::get();
		}

		$messages = array();
		foreach ( $extensions as $extension_name => $extension_data ) {
			if ( ! Wcwm_Compatibility::check( $extension_data ) ) {
				$messages[] = sprintf(
					__(
						'<strong>%s</strong> is not the latest version. ' .
						'You must <a href="%s">update the plugin</a> before you can use it. <br />',
						WCWM_PLUGIN_NAME
					),
					$extension_data['title'],
					$updater_url
				);
			}
		}

		return $messages;
	}

	public static function check( $extension ) {
		if ( $extension['version'] !== 'develop' ) {
			if ( version_compare( $extension['version'], $extension['requires'], '<' ) ) {
				return false;
			}
		}

		return true;
	}
}
