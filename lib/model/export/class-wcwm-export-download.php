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

class Wcwm_Export_Download {

	public static function execute( $params ) {

		// Set progress
		Wcwm_Status::info( __( 'Renaming exported file...', WCWM_PLUGIN_NAME ) );

		// Open the archive file for writing
		$archive = new Wcwm_Compressor( wcwm_archive_path( $params ) );

		// Append EOF block
		$archive->close( true );

		// Rename archive file
		if ( rename( wcwm_archive_path( $params ), wcwm_backup_path( $params ) ) ) {

			$blog_id = null;

			// Get subsite Blog ID
			if ( isset( $params['options']['sites'] ) && ( $sites = $params['options']['sites'] ) ) {
				if ( count( $sites ) === 1 ) {
					$blog_id = array_shift( $sites );
				}
			}

			// Set archive details
			$link = wcwm_backup_url( $params );
			$size = wcwm_backup_size( $params );
			$name = wcwm_site_name( $blog_id );

			// Set progress
			Wcwm_Status::download(
				sprintf(
					__(
						'<a href="%s" class="wcwm-button-green wcwm-emphasize">' .
						'<span>Download %s</span>' .
						'<em>Size: %s</em>' .
						'</a>',
						WCWM_PLUGIN_NAME
					),
					$link,
					$name,
					$size
				)
			);
		}

		return $params;
	}
}
