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

class Wcwm_Import_Compatibility {

	public static function execute( $params ) {

		// Set progress
		Wcwm_Status::info( __( 'Checking extensions compatibility...', WCWM_PLUGIN_NAME ) );

		// Get messages
		$messages = Wcwm_Compatibility::get( $params );

		// Set messages
		if ( empty( $messages ) ) {
			return $params;
		}

		// Enable notifications
		add_filter( 'wcwm_notification_error_toggle', '__return_true', 20 );

		// Error message
		throw new Wcwm_Compatibility_Exception( implode( $messages ) );
	}
}
