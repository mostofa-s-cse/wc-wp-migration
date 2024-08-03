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

class Wcwm_Export_Archive {

	public static function execute( $params ) {

		// Set progress
		Wcwm_Status::info( __( 'Creating an empty archive...', WCWM_PLUGIN_NAME ) );

		// Create empty archive file
		$archive = new Wcwm_Compressor( wcwm_archive_path( $params ) );
		$archive->close();

		// Set progress
		Wcwm_Status::info( __( 'Done creating an empty archive.', WCWM_PLUGIN_NAME ) );

		return $params;
	}
}
