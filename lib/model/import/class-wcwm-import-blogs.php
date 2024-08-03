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

class Wcwm_Import_Blogs {

	public static function execute( $params ) {

		// Set progress
		Wcwm_Status::info( __( 'Preparing blogs...', WCWM_PLUGIN_NAME ) );

		$blogs = array();

		// Check multisite.json file
		if ( true === is_file( wcwm_multisite_path( $params ) ) ) {

			// Read multisite.json file
			$handle = wcwm_open( wcwm_multisite_path( $params ), 'r' );

			// Parse multisite.json file
			$multisite = wcwm_read( $handle, filesize( wcwm_multisite_path( $params ) ) );
			$multisite = json_decode( $multisite, true );

			// Close handle
			wcwm_close( $handle );

			// Validate
			if ( empty( $multisite['Network'] ) ) {
				if ( isset( $multisite['Sites'] ) && ( $sites = $multisite['Sites'] ) ) {
					if ( count( $sites ) === 1 && ( $subsite = current( $sites ) ) ) {

						// Set internal Site URL (backward compatibility)
						if ( empty( $subsite['InternalSiteURL'] ) ) {
							$subsite['InternalSiteURL'] = null;
						}

						// Set internal Home URL (backward compatibility)
						if ( empty( $subsite['InternalHomeURL'] ) ) {
							$subsite['InternalHomeURL'] = null;
						}

						// Set active plugins (backward compatibility)
						if ( empty( $subsite['Plugins'] ) ) {
							$subsite['Plugins'] = array();
						}

						// Set active template (backward compatibility)
						if ( empty( $subsite['Template'] ) ) {
							$subsite['Template'] = null;
						}

						// Set active stylesheet (backward compatibility)
						if ( empty( $subsite['Stylesheet'] ) ) {
							$subsite['Stylesheet'] = null;
						}

						// Set blog items
						$blogs[] = array(
							'Old' => array(
								'BlogID'          => $subsite['BlogID'],
								'SiteURL'         => $subsite['SiteURL'],
								'HomeURL'         => $subsite['HomeURL'],
								'InternalSiteURL' => $subsite['InternalSiteURL'],
								'InternalHomeURL' => $subsite['InternalHomeURL'],
								'Plugins'         => $subsite['Plugins'],
								'Template'        => $subsite['Template'],
								'Stylesheet'      => $subsite['Stylesheet'],
							),
							'New' => array(
								'BlogID'          => null,
								'SiteURL'         => site_url(),
								'HomeURL'         => home_url(),
								'InternalSiteURL' => site_url(),
								'InternalHomeURL' => home_url(),
								'Plugins'         => $subsite['Plugins'],
								'Template'        => $subsite['Template'],
								'Stylesheet'      => $subsite['Stylesheet'],
							),
						);
					} else {
						throw new Wcwm_Import_Exception(
							__( 'The archive should contain <strong>Single WordPress</strong> site! Please revisit your export settings.', WCWM_PLUGIN_NAME )
						);
					}
				} else {
					throw new Wcwm_Import_Exception(
						__( 'At least <strong>one WordPress</strong> site should be presented in the archive.', WCWM_PLUGIN_NAME )
					);
				}
			} else {
				throw new Wcwm_Import_Exception(
					__( 'Unable to import <strong>WordPress Network</strong> into WordPress <strong>Single</strong> site.', WCWM_PLUGIN_NAME )
				);
			}
		}

		// Write blogs.json file
		$handle = wcwm_open( wcwm_blogs_path( $params ), 'w' );
		wcwm_write( $handle, json_encode( $blogs ) );
		wcwm_close( $handle );

		// Set progress
		Wcwm_Status::info( __( 'Done preparing blogs.', WCWM_PLUGIN_NAME ) );

		return $params;
	}
}
