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

class Wcwm_Import_Controller {

	public static function index() {
		Wcwm_Template::render( 'import/index' );
	}

	public static function import( $params = array() ) {
		global $wp_filter;

		wcwm_setup_environment();

		// Set params
		if ( empty( $params ) ) {
			$params = stripslashes_deep( array_merge( $_GET, $_POST ) );
		}

		// Set priority
		$priority = 10;
		if ( isset( $params['priority'] ) ) {
			$priority = (int) $params['priority'];
		}

		// Set secret key
		$secret_key = null;
		if ( isset( $params['secret_key'] ) ) {
			$secret_key = trim( $params['secret_key'] );
		}

		try {
			// Ensure that unauthorized people cannot access import action
			wcwm_verify_secret_key( $secret_key );
		} catch ( Wcwm_Not_Valid_Secret_Key_Exception $e ) {
			exit;
		}

		// Get hook
		if ( isset( $wp_filter['wcwm_import'] ) && ( $filters = $wp_filter['wcwm_import'] ) ) {
			// WordPress 4.7 introduces new class for working with filters/actions called WP_Hook
			// which adds another level of abstraction and we need to address it.
			if ( isset( $filters->callbacks ) ) {
				$filters = $filters->callbacks;
			}

			ksort( $filters );

			// Loop over filters
			while ( $hooks = current( $filters ) ) {
				if ( $priority === key( $filters ) ) {
					foreach ( $hooks as $hook ) {
						try {

							// Run function hook
							$params = call_user_func_array( $hook['function'], array( $params ) );

							// Log request
							Wcwm_Log::import( $params );

						} catch ( Wcwm_Import_Retry_Exception $e ) {
							status_header( $e->getCode() );
							echo json_encode( array( 'errors' => array( array( 'code' => $e->getCode(), 'message' => $e->getMessage() ) ) ) );
							exit;
						} catch ( Exception $e ) {
							Wcwm_Status::error( __( 'Unable to import', WCWM_PLUGIN_NAME ), $e->getMessage() );
							Wcwm_Notification::error( __( 'Unable to import', WCWM_PLUGIN_NAME ), $e->getMessage() );
							Wcwm_Directory::delete( wcwm_storage_path( $params ) );
							exit;
						}
					}

					// Set completed
					$completed = true;
					if ( isset( $params['completed'] ) ) {
						$completed = (bool) $params['completed'];
					}

					// Do request
					if ( $completed === false || ( $next = next( $filters ) ) && ( $params['priority'] = key( $filters ) ) ) {
						if ( isset( $params['wcwm_manual_import'] ) || isset( $params['wcwm_manual_restore'] ) ) {
							echo json_encode( $params );
							exit;
						}

						wp_remote_post( apply_filters( 'wcwm_http_import_url', admin_url( 'admin-ajax.php?action=wcwm_import' ) ), array(
							'timeout'   => apply_filters( 'wcwm_http_import_timeout', 5 ),
							'blocking'  => apply_filters( 'wcwm_http_import_blocking', false ),
							'sslverify' => apply_filters( 'wcwm_http_import_sslverify', false ),
							'headers'   => apply_filters( 'wcwm_http_import_headers', array() ),
							'body'      => apply_filters( 'wcwm_http_import_body', $params ),
						) );
						exit;
					}
				}

				next( $filters );
			}
		}
	}

	public static function buttons() {
		return array(
			apply_filters( 'wcwm_import_file', Wcwm_Template::get_content( 'import/button-file' ) ),
			apply_filters( 'wcwm_import_url', Wcwm_Template::get_content( 'import/button-url' ) ),
			apply_filters( 'wcwm_import_ftp', Wcwm_Template::get_content( 'import/button-ftp' ) ),
			apply_filters( 'wcwm_import_dropbox', Wcwm_Template::get_content( 'import/button-dropbox' ) ),
			apply_filters( 'wcwm_import_gdrive', Wcwm_Template::get_content( 'import/button-gdrive' ) ),
			apply_filters( 'wcwm_import_s3', Wcwm_Template::get_content( 'import/button-s3' ) ),
			apply_filters( 'wcwm_import_b2', Wcwm_Template::get_content( 'import/button-b2' ) ),
			apply_filters( 'wcwm_import_onedrive', Wcwm_Template::get_content( 'import/button-onedrive' ) ),
			apply_filters( 'wcwm_import_box', Wcwm_Template::get_content( 'import/button-box' ) ),
			apply_filters( 'wcwm_import_mega', Wcwm_Template::get_content( 'import/button-mega' ) ),
			apply_filters( 'wcwm_import_digitalocean', Wcwm_Template::get_content( 'import/button-digitalocean' ) ),
			apply_filters( 'wcwm_import_gcloud_storage', Wcwm_Template::get_content( 'import/button-gcloud-storage' ) ),
			apply_filters( 'wcwm_import_azure_storage', Wcwm_Template::get_content( 'import/button-azure-storage' ) ),
			apply_filters( 'wcwm_import_glacier', Wcwm_Template::get_content( 'import/button-glacier' ) ),
			apply_filters( 'wcwm_import_pcloud', Wcwm_Template::get_content( 'import/button-pcloud' ) ),
		);
	}

	public static function http_import_headers( $headers = array() ) {
		if ( ( $user = get_option( WCWM_AUTH_USER ) ) && ( $password = get_option( WCWM_AUTH_PASSWORD ) ) ) {
			if ( ( $hash = base64_encode( sprintf( '%s:%s', $user, $password ) ) ) ) {
				$headers['Authorization'] = sprintf( 'Basic %s', $hash );
			}
		}

		return $headers;
	}

	public static function max_chunk_size() {
		return min(
			wcwm_parse_size( ini_get( 'post_max_size' ), WCWM_MAX_CHUNK_SIZE ),
			wcwm_parse_size( ini_get( 'upload_max_filesize' ), WCWM_MAX_CHUNK_SIZE ),
			wcwm_parse_size( WCWM_MAX_CHUNK_SIZE )
		);
	}
}
