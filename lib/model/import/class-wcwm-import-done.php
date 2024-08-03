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

class Wcwm_Import_Done {

	public static function execute( $params ) {

		// Check multisite.json file
		if ( true === is_file( wcwm_multisite_path( $params ) ) ) {
			// Read multisite.json file
			$handle = wcwm_open( wcwm_multisite_path( $params ), 'r' );

			// Parse multisite.json file
			$multisite = wcwm_read( $handle, filesize( wcwm_multisite_path( $params ) ) );
			$multisite = json_decode( $multisite, true );

			// Close handle
			wcwm_close( $handle );

			// Activate WordPress plugins
			if ( isset( $multisite['Plugins'] ) && ( $plugins = $multisite['Plugins'] ) ) {
				wcwm_activate_plugins( $plugins );
			}

			// Deactivate WordPress SSL plugins
			if ( ! is_ssl() ) {
				wcwm_deactivate_plugins( array(
					wcwm_discover_plugin_basename( 'really-simple-ssl/rlrsssl-really-simple-ssl.php' ),
					wcwm_discover_plugin_basename( 'wordpress-https/wordpress-https.php' ),
					wcwm_discover_plugin_basename( 'wp-force-ssl/wp-force-ssl.php' ),
				) );
			}

			// Deactivate WordPress plugins
			wcwm_deactivate_plugins( array(
				wcwm_discover_plugin_basename( 'invisible-recaptcha/invisible-recaptcha.php' ),
				wcwm_discover_plugin_basename( 'wps-hide-login/wps-hide-login.php' ),
				wcwm_discover_plugin_basename( 'hide-my-wp/index.php' ),
				wcwm_discover_plugin_basename( 'hide-my-wordpress/index.php' ),
				wcwm_discover_plugin_basename( 'mycustomwidget/my_custom_widget.php' ),
				wcwm_discover_plugin_basename( 'lockdown-wp-admin/lockdown-wp-admin.php' ),
				wcwm_discover_plugin_basename( 'rename-wp-login/rename-wp-login.php' ),
			) );

			// Deactivate Jetpack modules
			wcwm_deactivate_jetpack_modules( array(
				'photon',
				'sso',
			) );

		} else {

			// Check package.json file
			if ( true === is_file( wcwm_package_path( $params ) ) ) {

				// Read package.json file
				$handle = wcwm_open( wcwm_package_path( $params ), 'r' );

				// Parse package.json file
				$package = wcwm_read( $handle, filesize( wcwm_package_path( $params ) ) );
				$package = json_decode( $package, true );

				// Close handle
				wcwm_close( $handle );

				// Activate WordPress plugins
				if ( isset( $package['Plugins'] ) && ( $plugins = $package['Plugins'] ) ) {
					wcwm_activate_plugins( $plugins );
				}

				// Activate WordPress template
				if ( isset( $package['Template'] ) && ( $template = $package['Template'] ) ) {
					wcwm_activate_template( $template );
				}

				// Activate WordPress stylesheet
				if ( isset( $package['Stylesheet'] ) && ( $stylesheet = $package['Stylesheet'] ) ) {
					wcwm_activate_stylesheet( $stylesheet );
				}

				// Deactivate WordPress SSL plugins
				if ( ! is_ssl() ) {
					wcwm_deactivate_plugins( array(
						wcwm_discover_plugin_basename( 'really-simple-ssl/rlrsssl-really-simple-ssl.php' ),
						wcwm_discover_plugin_basename( 'wordpress-https/wordpress-https.php' ),
						wcwm_discover_plugin_basename( 'wp-force-ssl/wp-force-ssl.php' ),
					) );
				}

				// Deactivate WordPress plugins
				wcwm_deactivate_plugins( array(
					wcwm_discover_plugin_basename( 'invisible-recaptcha/invisible-recaptcha.php' ),
					wcwm_discover_plugin_basename( 'wps-hide-login/wps-hide-login.php' ),
					wcwm_discover_plugin_basename( 'hide-my-wp/index.php' ),
					wcwm_discover_plugin_basename( 'hide-my-wordpress/index.php' ),
					wcwm_discover_plugin_basename( 'mycustomwidget/my_custom_widget.php' ),
					wcwm_discover_plugin_basename( 'lockdown-wp-admin/lockdown-wp-admin.php' ),
					wcwm_discover_plugin_basename( 'rename-wp-login/rename-wp-login.php' ),
				) );

				// Deactivate Jetpack modules
				wcwm_deactivate_jetpack_modules( array(
					'photon',
					'sso',
				) );
			}
		}

		// Check blogs.json file
		if ( true === is_file( wcwm_blogs_path( $params ) ) ) {
			// Read blogs.json file
			$handle = wcwm_open( wcwm_blogs_path( $params ), 'r' );

			// Parse blogs.json file
			$blogs = wcwm_read( $handle, filesize( wcwm_blogs_path( $params ) ) );
			$blogs = json_decode( $blogs, true );

			// Close handle
			wcwm_close( $handle );

			// Loop over blogs
			foreach ( $blogs as $blog ) {

				// Activate WordPress plugins
				if ( isset( $blog['New']['Plugins'] ) && ( $plugins = $blog['New']['Plugins'] ) ) {
					wcwm_activate_plugins( $plugins );
				}

				// Activate WordPress template
				if ( isset( $blog['New']['Template'] ) && ( $template = $blog['New']['Template'] ) ) {
					wcwm_activate_template( $template );
				}

				// Activate WordPress stylesheet
				if ( isset( $blog['New']['Stylesheet'] ) && ( $stylesheet = $blog['New']['Stylesheet'] ) ) {
					wcwm_activate_stylesheet( $stylesheet );
				}

				// Deactivate WordPress SSL plugins
				if ( ! is_ssl() ) {
					wcwm_deactivate_plugins( array(
						wcwm_discover_plugin_basename( 'really-simple-ssl/rlrsssl-really-simple-ssl.php' ),
						wcwm_discover_plugin_basename( 'wordpress-https/wordpress-https.php' ),
						wcwm_discover_plugin_basename( 'wp-force-ssl/wp-force-ssl.php' ),
					) );
				}

				// Deactivate WordPress plugins
				wcwm_deactivate_plugins( array(
					wcwm_discover_plugin_basename( 'invisible-recaptcha/invisible-recaptcha.php' ),
					wcwm_discover_plugin_basename( 'wps-hide-login/wps-hide-login.php' ),
					wcwm_discover_plugin_basename( 'hide-my-wp/index.php' ),
					wcwm_discover_plugin_basename( 'hide-my-wordpress/index.php' ),
					wcwm_discover_plugin_basename( 'mycustomwidget/my_custom_widget.php' ),
					wcwm_discover_plugin_basename( 'lockdown-wp-admin/lockdown-wp-admin.php' ),
					wcwm_discover_plugin_basename( 'rename-wp-login/rename-wp-login.php' ),
				) );

				// Deactivate Jetpack modules
				wcwm_deactivate_jetpack_modules( array(
					'photon',
					'sso',
				) );
			}
		}

		// Set progress
		Wcwm_Status::done(
			__(
				'Your data has been imported successfully!',
				WCWM_PLUGIN_NAME
			),
			sprintf(
				__(
					'You need to perform two more steps:<br />' .
					'<strong>1. You must save your permalinks structure twice. <a class="wcwm-no-underline" href="%s" target="_blank">Permalinks Settings</a></strong> <small>(opens a new window)</small><br />' .
					'<strong>2. <a class="wcwm-no-underline" href="https://wordpress.org/support/view/plugin-reviews/wc-wp-migration?rate=5#postform" target="_blank">Optionally, review the plugin</a>.</strong> <small>(opens a new window)</small>',
					WCWM_PLUGIN_NAME
				),
				admin_url( 'options-permalink.php#submit' )
			)
		);

		return $params;
	}
}
