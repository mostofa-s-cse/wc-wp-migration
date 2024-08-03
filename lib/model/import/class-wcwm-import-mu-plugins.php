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

class Wcwm_Import_Mu_Plugins {

	public static function execute( $params ) {

		// Set progress
		Wcwm_Status::info( __( 'Activating mu-plugins...', WCWM_PLUGIN_NAME ) );

		$exclude_files = array(
			WCWM_MUPLUGINS_NAME . DIRECTORY_SEPARATOR . WCWM_ENDURANCE_PAGE_CACHE_NAME,
			WCWM_MUPLUGINS_NAME . DIRECTORY_SEPARATOR . WCWM_ENDURANCE_PHP_EDGE_NAME,
			WCWM_MUPLUGINS_NAME . DIRECTORY_SEPARATOR . WCWM_ENDURANCE_BROWSER_CACHE_NAME,
			WCWM_MUPLUGINS_NAME . DIRECTORY_SEPARATOR . WCWM_GD_SYSTEM_PLUGIN_NAME,
		);

		// Open the archive file for reading
		$archive = new Wcwm_Extractor( wcwm_archive_path( $params ) );

		// Unpack mu-plugins files
		$archive->extract_by_files_array( WP_CONTENT_DIR, array( WCWM_MUPLUGINS_NAME ), $exclude_files );

		// Close the archive file
		$archive->close();

		// Set progress
		Wcwm_Status::info( __( 'Done activating mu-plugins.', WCWM_PLUGIN_NAME ) );

		return $params;
	}
}
