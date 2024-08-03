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

class Wcwm_Extensions {

	/**
	 * Get active extensions
	 *
	 * @return array
	 */
	public static function get() {
		$extensions = array();

		// Add Microsoft Azure extension
		if ( defined( 'WCWMZE_PLUGIN_NAME' ) ) {
			$extensions[ WCWMZE_PLUGIN_NAME ] = array(
				'key'      => WCWMZE_PLUGIN_KEY,
				'title'    => WCWMZE_PLUGIN_TITLE,
				'about'    => WCWMZE_PLUGIN_ABOUT,
				'basename' => WCWMZE_PLUGIN_BASENAME,
				'version'  => WCWMZE_VERSION,
				'requires' => '1.1',
				'short'    => WCWMZE_PLUGIN_SHORT,
			);
		}

		// Add Backblaze B2 extension
		if ( defined( 'WCWMAE_PLUGIN_NAME' ) ) {
			$extensions[ WCWMAE_PLUGIN_NAME ] = array(
				'key'      => WCWMAE_PLUGIN_KEY,
				'title'    => WCWMAE_PLUGIN_TITLE,
				'about'    => WCWMAE_PLUGIN_ABOUT,
				'basename' => WCWMAE_PLUGIN_BASENAME,
				'version'  => WCWMAE_VERSION,
				'requires' => '1.3',
				'short'    => WCWMAE_PLUGIN_SHORT,
			);
		}

		// Add Box Extension
		if ( defined( 'WCWMBE_PLUGIN_NAME' ) ) {
			$extensions[ WCWMBE_PLUGIN_NAME ] = array(
				'key'      => WCWMBE_PLUGIN_KEY,
				'title'    => WCWMBE_PLUGIN_TITLE,
				'about'    => WCWMBE_PLUGIN_ABOUT,
				'basename' => WCWMBE_PLUGIN_BASENAME,
				'version'  => WCWMBE_VERSION,
				'requires' => '1.13',
				'short'    => WCWMBE_PLUGIN_SHORT,
			);
		}

		// Add DigitalOcean Extension
		if ( defined( 'WCWMIE_PLUGIN_NAME' ) ) {
			$extensions[ WCWMIE_PLUGIN_NAME ] = array(
				'key'      => WCWMIE_PLUGIN_KEY,
				'title'    => WCWMIE_PLUGIN_TITLE,
				'about'    => WCWMIE_PLUGIN_ABOUT,
				'basename' => WCWMIE_PLUGIN_BASENAME,
				'version'  => WCWMIE_VERSION,
				'requires' => '1.6',
				'short'    => WCWMIE_PLUGIN_SHORT,
			);
		}

		// Add Dropbox Extension
		if ( defined( 'WCWMDE_PLUGIN_NAME' ) ) {
			$extensions[ WCWMDE_PLUGIN_NAME ] = array(
				'key'      => WCWMDE_PLUGIN_KEY,
				'title'    => WCWMDE_PLUGIN_TITLE,
				'about'    => WCWMDE_PLUGIN_ABOUT,
				'basename' => WCWMDE_PLUGIN_BASENAME,
				'version'  => WCWMDE_VERSION,
				'requires' => '3.32',
				'short'    => WCWMDE_PLUGIN_SHORT,
			);
		}

		// Add FTP Extension
		if ( defined( 'WCWMFE_PLUGIN_NAME' ) ) {
			$extensions[ WCWMFE_PLUGIN_NAME ] = array(
				'key'      => WCWMFE_PLUGIN_KEY,
				'title'    => WCWMFE_PLUGIN_TITLE,
				'about'    => WCWMFE_PLUGIN_ABOUT,
				'basename' => WCWMFE_PLUGIN_BASENAME,
				'version'  => WCWMFE_VERSION,
				'requires' => '2.37',
				'short'    => WCWMFE_PLUGIN_SHORT,
			);
		}

		// Add Google Cloud Storage Extension
		if ( defined( 'WCWMCE_PLUGIN_NAME' ) ) {
			$extensions[ WCWMCE_PLUGIN_NAME ] = array(
				'key'      => WCWMCE_PLUGIN_KEY,
				'title'    => WCWMCE_PLUGIN_TITLE,
				'about'    => WCWMCE_PLUGIN_ABOUT,
				'basename' => WCWMCE_PLUGIN_BASENAME,
				'version'  => WCWMCE_VERSION,
				'requires' => '1.0',
				'short'    => WCWMCE_PLUGIN_SHORT,
			);
		}

		// Add Google Drive Extension
		if ( defined( 'WCWMGE_PLUGIN_NAME' ) ) {
			$extensions[ WCWMGE_PLUGIN_NAME ] = array(
				'key'      => WCWMGE_PLUGIN_KEY,
				'title'    => WCWMGE_PLUGIN_TITLE,
				'about'    => WCWMGE_PLUGIN_ABOUT,
				'basename' => WCWMGE_PLUGIN_BASENAME,
				'version'  => WCWMGE_VERSION,
				'requires' => '2.36',
				'short'    => WCWMGE_PLUGIN_SHORT,
			);
		}

		// Add Amazon Glacier extension
		if ( defined( 'WCWMRE_PLUGIN_NAME' ) ) {
			$extensions[ WCWMRE_PLUGIN_NAME ] = array(
				'key'      => WCWMRE_PLUGIN_KEY,
				'title'    => WCWMRE_PLUGIN_TITLE,
				'about'    => WCWMRE_PLUGIN_ABOUT,
				'basename' => WCWMRE_PLUGIN_BASENAME,
				'version'  => WCWMRE_VERSION,
				'requires' => '1.0',
				'short'    => WCWMRE_PLUGIN_SHORT,
			);
		}

		// Add Mega Extension
		if ( defined( 'WCWMEE_PLUGIN_NAME' ) ) {
			$extensions[ WCWMEE_PLUGIN_NAME ] = array(
				'key'      => WCWMEE_PLUGIN_KEY,
				'title'    => WCWMEE_PLUGIN_TITLE,
				'about'    => WCWMEE_PLUGIN_ABOUT,
				'basename' => WCWMEE_PLUGIN_BASENAME,
				'version'  => WCWMEE_VERSION,
				'requires' => '1.10',
				'short'    => WCWMEE_PLUGIN_SHORT,
			);
		}

		// Add Multisite Extension
		if ( defined( 'WCWMME_PLUGIN_NAME' ) ) {
			$extensions[ WCWMME_PLUGIN_NAME ] = array(
				'key'      => WCWMME_PLUGIN_KEY,
				'title'    => WCWMME_PLUGIN_TITLE,
				'about'    => WCWMME_PLUGIN_ABOUT,
				'basename' => WCWMME_PLUGIN_BASENAME,
				'version'  => WCWMME_VERSION,
				'requires' => '3.59',
				'short'    => WCWMME_PLUGIN_SHORT,
			);
		}

		// Add OneDrive Extension
		if ( defined( 'WCWMOE_PLUGIN_NAME' ) ) {
			$extensions[ WCWMOE_PLUGIN_NAME ] = array(
				'key'      => WCWMOE_PLUGIN_KEY,
				'title'    => WCWMOE_PLUGIN_TITLE,
				'about'    => WCWMOE_PLUGIN_ABOUT,
				'basename' => WCWMOE_PLUGIN_BASENAME,
				'version'  => WCWMOE_VERSION,
				'requires' => '1.23',
				'short'    => WCWMOE_PLUGIN_SHORT,
			);
		}

		// Add pCloud Extension
		if ( defined( 'WCWMPE_PLUGIN_NAME' ) ) {
			$extensions[ WCWMPE_PLUGIN_NAME ] = array(
				'key'      => WCWMPE_PLUGIN_KEY,
				'title'    => WCWMPE_PLUGIN_TITLE,
				'about'    => WCWMPE_PLUGIN_ABOUT,
				'basename' => WCWMPE_PLUGIN_BASENAME,
				'version'  => WCWMPE_VERSION,
				'requires' => '1.0',
				'short'    => WCWMPE_PLUGIN_SHORT,
			);
		}

		// Add Amazon S3 extension
		if ( defined( 'WCWMSE_PLUGIN_NAME' ) ) {
			$extensions[ WCWMSE_PLUGIN_NAME ] = array(
				'key'      => WCWMSE_PLUGIN_KEY,
				'title'    => WCWMSE_PLUGIN_TITLE,
				'about'    => WCWMSE_PLUGIN_ABOUT,
				'basename' => WCWMSE_PLUGIN_BASENAME,
				'version'  => WCWMSE_VERSION,
				'requires' => '3.27',
				'short'    => WCWMSE_PLUGIN_SHORT,
			);
		}

		// Add Unlimited Extension
		if ( defined( 'WCWMUE_PLUGIN_NAME' ) ) {
			$extensions[ WCWMUE_PLUGIN_NAME ] = array(
				'key'      => WCWMUE_PLUGIN_KEY,
				'title'    => WCWMUE_PLUGIN_TITLE,
				'about'    => WCWMUE_PLUGIN_ABOUT,
				'basename' => WCWMUE_PLUGIN_BASENAME,
				'version'  => WCWMUE_VERSION,
				'requires' => '2.18',
				'short'    => WCWMUE_PLUGIN_SHORT,
			);
		}

		// Add URL Extension
		if ( defined( 'WCWMLE_PLUGIN_NAME' ) ) {
			$extensions[ WCWMLE_PLUGIN_NAME ] = array(
				'key'      => WCWMLE_PLUGIN_KEY,
				'title'    => WCWMLE_PLUGIN_TITLE,
				'about'    => WCWMLE_PLUGIN_ABOUT,
				'basename' => WCWMLE_PLUGIN_BASENAME,
				'version'  => WCWMLE_VERSION,
				'requires' => '2.27',
				'short'    => WCWMLE_PLUGIN_SHORT,
			);
		}

		return $extensions;
	}
}
