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

/**
 * Get storage absolute path
 *
 * @param  array  $params Request parameters
 * @return string
 */
function wcwm_storage_path( $params ) {
	if ( empty( $params['storage'] ) ) {
		throw new Wcwm_Storage_Exception( __( 'Unable to locate storage path. <a href="https://help.wc.com/knowledgebase/invalid-storage-path/" target="_blank">Technical details</a>', WCWM_PLUGIN_NAME ) );
	}

	// Get storage path
	$storage = WCWM_STORAGE_PATH . DIRECTORY_SEPARATOR . basename( $params['storage'] );
	if ( ! is_dir( $storage ) ) {
		mkdir( $storage );
	}

	return $storage;
}

/**
 * Get backup absolute path
 *
 * @param  array  $params Request parameters
 * @return string
 */
function wcwm_backup_path( $params ) {
	if ( empty( $params['archive'] ) ) {
		throw new Wcwm_Archive_Exception( __( 'Unable to locate archive path. <a href="https://help.wc.com/knowledgebase/invalid-archive-path/" target="_blank">Technical details</a>', WCWM_PLUGIN_NAME ) );
	}

	// Validate archive path
	if ( validate_file( $params['archive'] ) !== 0 ) {
		throw new Wcwm_Archive_Exception( __( 'Invalid archive path. <a href="https://help.wc.com/knowledgebase/invalid-archive-path/" target="_blank">Technical details</a>', WCWM_PLUGIN_NAME ) );
	}

	return WCWM_BACKUPS_PATH . DIRECTORY_SEPARATOR . $params['archive'];
}

/**
 * Get archive absolute path
 *
 * @param  array  $params Request parameters
 * @return string
 */
function wcwm_archive_path( $params ) {
	if ( empty( $params['archive'] ) ) {
		throw new Wcwm_Archive_Exception( __( 'Unable to locate archive path. <a href="https://help.wc.com/knowledgebase/invalid-archive-path/" target="_blank">Technical details</a>', WCWM_PLUGIN_NAME ) );
	}

	// Validate archive path
	if ( validate_file( $params['archive'] ) !== 0 ) {
		throw new Wcwm_Archive_Exception( __( 'Invalid archive path. <a href="https://help.wc.com/knowledgebase/invalid-archive-path/" target="_blank">Technical details</a>', WCWM_PLUGIN_NAME ) );
	}

	// Get archive path
	if ( empty( $params['wcwm_manual_restore'] ) ) {
		return wcwm_storage_path( $params ) . DIRECTORY_SEPARATOR . $params['archive'];
	}

	return wcwm_backup_path( $params );
}

/**
 * Get export log absolute path
 *
 * @param  array  $params Request parameters
 * @return string
 */
function wcwm_export_path( $params ) {
	return wcwm_storage_path( $params ) . DIRECTORY_SEPARATOR . WCWM_EXPORT_NAME;
}

/**
 * Get import log absolute path
 *
 * @param  array  $params Request parameters
 * @return string
 */
function wcwm_import_path( $params ) {
	return wcwm_storage_path( $params ) . DIRECTORY_SEPARATOR . WCWM_IMPORT_NAME;
}

/**
 * Get multipart.list absolute path
 *
 * @param  array  $params Request parameters
 * @return string
 */
function wcwm_multipart_path( $params ) {
	return wcwm_storage_path( $params ) . DIRECTORY_SEPARATOR . WCWM_MULTIPART_NAME;
}

/**
 * Get filemap.list absolute path
 *
 * @param  array  $params Request parameters
 * @return string
 */
function wcwm_filemap_path( $params ) {
	return wcwm_storage_path( $params ) . DIRECTORY_SEPARATOR . WCWM_FILEMAP_NAME;
}

/**
 * Get package.json absolute path
 *
 * @param  array  $params Request parameters
 * @return string
 */
function wcwm_package_path( $params ) {
	return wcwm_storage_path( $params ) . DIRECTORY_SEPARATOR . WCWM_PACKAGE_NAME;
}

/**
 * Get multisite.json absolute path
 *
 * @param  array  $params Request parameters
 * @return string
 */
function wcwm_multisite_path( $params ) {
	return wcwm_storage_path( $params ) . DIRECTORY_SEPARATOR . WCWM_MULTISITE_NAME;
}

/**
 * Get blogs.json absolute path
 *
 * @param  array  $params Request parameters
 * @return string
 */
function wcwm_blogs_path( $params ) {
	return wcwm_storage_path( $params ) . DIRECTORY_SEPARATOR . WCWM_BLOGS_NAME;
}

/**
 * Get settings.json absolute path
 *
 * @param  array  $params Request parameters
 * @return string
 */
function wcwm_settings_path( $params ) {
	return wcwm_storage_path( $params ) . DIRECTORY_SEPARATOR . WCWM_SETTINGS_NAME;
}

/**
 * Get database.sql absolute path
 *
 * @param  array  $params Request parameters
 * @return string
 */
function wcwm_database_path( $params ) {
	return wcwm_storage_path( $params ) . DIRECTORY_SEPARATOR . WCWM_DATABASE_NAME;
}

/**
 * Get error log absolute path
 *
 * @return string
 */
function wcwm_error_path() {
	return WCWM_STORAGE_PATH . DIRECTORY_SEPARATOR . WCWM_ERROR_NAME;
}

/**
 * Get WordPress content directory
 *
 * @param  string $path Relative path
 * @return string
 */
function wcwm_content_path( $path = null ) {
	if ( empty( $path ) ) {
		return WP_CONTENT_DIR;
	}

	return WP_CONTENT_DIR . DIRECTORY_SEPARATOR . $path;
}

/**
 * Get archive name
 *
 * @param  array  $params Request parameters
 * @return string
 */
function wcwm_archive_name( $params ) {
	return basename( $params['archive'] );
}

/**
 * Get backup URL address
 *
 * @param  array  $params Request parameters
 * @return string
 */
function wcwm_backup_url( $params ) {
	return WCWM_BACKUPS_URL . '/' . str_replace( DIRECTORY_SEPARATOR, '/', $params['archive'] );
}

/**
 * Get archive size in bytes
 *
 * @param  array   $params Request parameters
 * @return integer
 */
function wcwm_archive_bytes( $params ) {
	return filesize( wcwm_archive_path( $params ) );
}

/**
 * Get backup size in bytes
 *
 * @param  array   $params Request parameters
 * @return integer
 */
function wcwm_backup_bytes( $params ) {
	return filesize( wcwm_backup_path( $params ) );
}

/**
 * Get database size in bytes
 *
 * @param  array   $params Request parameters
 * @return integer
 */
function wcwm_database_bytes( $params ) {
	return filesize( wcwm_database_path( $params ) );
}

/**
 * Get package size in bytes
 *
 * @param  array   $params Request parameters
 * @return integer
 */
function wcwm_package_bytes( $params ) {
	return filesize( wcwm_package_path( $params ) );
}

/**
 * Get multisite size in bytes
 *
 * @param  array   $params Request parameters
 * @return integer
 */
function wcwm_multisite_bytes( $params ) {
	return filesize( wcwm_multisite_path( $params ) );
}

/**
 * Get archive size as text
 *
 * @param  array  $params Request parameters
 * @return string
 */
function wcwm_archive_size( $params ) {
	return size_format( filesize( wcwm_archive_path( $params ) ) );
}

/**
 * Get backup size as text
 *
 * @param  array  $params Request parameters
 * @return string
 */
function wcwm_backup_size( $params ) {
	return size_format( filesize( wcwm_backup_path( $params ) ) );
}

/**
 * Parse file size
 *
 * @param  string $size    File size
 * @param  string $default Default size
 * @return string
 */
function wcwm_parse_size( $size, $default = null ) {
	$suffixes = array(
		''  => 1,
		'k' => 1000,
		'm' => 1000000,
		'g' => 1000000000,
	);

	// Parse size format
	if ( preg_match( '/([0-9]+)\s*(k|m|g)?(b?(ytes?)?)/i', $size, $match ) ) {
		return $match[1] * $suffixes[ strtolower( $match[2] ) ];
	}

	return $default;
}

/**
 * Get current site name
 *
 * @param  integer $blog_id Blog ID
 * @return string
 */
function wcwm_site_name( $blog_id = null ) {
	return parse_url( get_site_url( $blog_id ), PHP_URL_HOST );
}

/**
 * Get archive file name
 *
 * @param  integer $blog_id Blog ID
 * @return string
 */
function wcwm_archive_file( $blog_id = null ) {
	$name = array();

	// Add domain
	$name[] = parse_url( get_site_url( $blog_id ), PHP_URL_HOST );

	// Add path
	if ( ( $path = explode( '/', parse_url( get_site_url( $blog_id ), PHP_URL_PATH ) ) ) ) {
		foreach ( $path as $directory ) {
			if ( $directory ) {
				$name[] = $directory;
			}
		}
	}

	// Add year, month and day
	$name[] = date( 'Ymd' );

	// Add hours, minutes and seconds
	$name[] = date( 'His' );

	// Add unique identifier
	$name[] = rand( 100, 999 );

	return sprintf( '%s.wpress', strtolower( implode( '-', $name ) ) );
}

/**
 * Get archive folder name
 *
 * @param  integer $blog_id Blog ID
 * @return string
 */
function wcwm_archive_folder( $blog_id = null ) {
	$name = array();

	// Add domain
	$name[] = parse_url( get_site_url( $blog_id ), PHP_URL_HOST );

	// Add path
	if ( ( $path = explode( '/', parse_url( get_site_url( $blog_id ), PHP_URL_PATH ) ) ) ) {
		foreach ( $path as $directory ) {
			if ( $directory ) {
				$name[] = $directory;
			}
		}
	}

	return strtolower( implode( '-', $name ) );
}

/**
 * Get archive bucket name
 *
 * @param  integer $blog_id Blog ID
 * @return string
 */
function wcwm_archive_bucket( $blog_id = null ) {
	$name = array();

	// Add domain
	if ( ( $domain = explode( '.', parse_url( get_site_url( $blog_id ), PHP_URL_HOST ) ) ) ) {
		foreach ( $domain as $subdomain ) {
			if ( $subdomain ) {
				$name[] = $subdomain;
			}
		}
	}

	// Add path
	if ( ( $path = explode( '/', parse_url( get_site_url( $blog_id ), PHP_URL_PATH ) ) ) ) {
		foreach ( $path as $directory ) {
			if ( $directory ) {
				$name[] = $directory;
			}
		}
	}

	return strtolower( implode( '-', $name ) );
}

/**
 * Get archive vault name
 *
 * @param  integer $blog_id Blog ID
 * @return string
 */
function wcwm_archive_vault( $blog_id = null ) {
	$name = array();

	// Add domain
	if ( ( $domain = explode( '.', parse_url( get_site_url( $blog_id ), PHP_URL_HOST ) ) ) ) {
		foreach ( $domain as $subdomain ) {
			if ( $subdomain ) {
				$name[] = $subdomain;
			}
		}
	}

	// Add path
	if ( ( $path = explode( '/', parse_url( get_site_url( $blog_id ), PHP_URL_PATH ) ) ) ) {
		foreach ( $path as $directory ) {
			if ( $directory ) {
				$name[] = $directory;
			}
		}
	}

	return strtolower( implode( '-', $name ) );
}

/**
 * Get archive project name
 *
 * @param  integer $blog_id Blog ID
 * @return string
 */
function wcwm_archive_project( $blog_id = null ) {
	$name = array();

	// Add domain
	if ( ( $domain = explode( '.', parse_url( get_site_url( $blog_id ), PHP_URL_HOST ) ) ) ) {
		foreach ( $domain as $subdomain ) {
			if ( $subdomain ) {
				$name[] = $subdomain;
			}
		}
	}

	// Add path
	if ( ( $path = explode( '/', parse_url( get_site_url( $blog_id ), PHP_URL_PATH ) ) ) ) {
		foreach ( $path as $directory ) {
			if ( $directory ) {
				$name[] = $directory;
			}
		}
	}

	return strtolower( implode( '-', $name ) );
}

/**
 * Get archive share name
 *
 * @param  integer $blog_id Blog ID
 * @return string
 */
function wcwm_archive_share( $blog_id = null ) {
	$name = array();

	// Add domain
	if ( ( $domain = explode( '.', parse_url( get_site_url( $blog_id ), PHP_URL_HOST ) ) ) ) {
		foreach ( $domain as $subdomain ) {
			if ( $subdomain ) {
				$name[] = $subdomain;
			}
		}
	}

	// Add path
	if ( ( $path = explode( '/', parse_url( get_site_url( $blog_id ), PHP_URL_PATH ) ) ) ) {
		foreach ( $path as $directory ) {
			if ( $directory ) {
				$name[] = $directory;
			}
		}
	}

	return strtolower( implode( '-', $name ) );
}

/**
 * Get storage folder name
 *
 * @return string
 */
function wcwm_storage_folder() {
	return uniqid();
}

/**
 * Check whether blog ID is main site
 *
 * @param  integer $blog_id Blog ID
 * @return boolean
 */
function wcwm_main_site( $blog_id = null ) {
	return $blog_id === null || $blog_id === 0 || $blog_id === 1;
}

/**
 * Get sites absolute path by blog ID
 *
 * @param  integer $blog_id Blog ID
 * @return string
 */
function wcwm_sites_path( $blog_id = null ) {
	if ( wcwm_main_site( $blog_id ) ) {
		return WCWM_UPLOADS_PATH;
	}

	return WCWM_SITES_PATH . DIRECTORY_SEPARATOR . $blog_id;
}

/**
 * Get files absolute path by blog ID
 *
 * @param  integer $blog_id Blog ID
 * @return string
 */
function wcwm_files_path( $blog_id = null ) {
	if ( wcwm_main_site( $blog_id ) ) {
		return WCWM_UPLOADS_PATH;
	}

	return WCWM_BLOGSDIR_PATH . DIRECTORY_SEPARATOR . $blog_id . DIRECTORY_SEPARATOR . 'files';
}

/**
 * Get blogs.dir absolute path by blog ID
 *
 * @param  integer $blog_id Blog ID
 * @return string
 */
function wcwm_blogsdir_path( $blog_id = null ) {
	if ( wcwm_main_site( $blog_id ) ) {
		return '/wp-content/uploads/';
	}

	return "/wp-content/blogs.dir/{$blog_id}/files/";
}

/**
 * Get blogs.dir URL by blog ID
 *
 * @param  integer $blog_id Blog ID
 * @return string
 */
function wcwm_blogsdir_url( $blog_id = null ) {
	if ( wcwm_main_site( $blog_id ) ) {
		return get_site_url( $blog_id, '/wp-content/uploads/' );
	}

	return get_site_url( $blog_id, "/wp-content/blogs.dir/{$blog_id}/files/" );
}

/**
 * Get uploads absolute path by blog ID
 *
 * @param  integer $blog_id Blog ID
 * @return string
 */
function wcwm_uploads_path( $blog_id = null ) {
	if ( wcwm_main_site( $blog_id ) ) {
		return '/wp-content/uploads/';
	}

	return "/wp-content/uploads/sites/{$blog_id}/";
}

/**
 * Get uploads URL by blog ID
 *
 * @param  integer $blog_id Blog ID
 * @return string
 */
function wcwm_uploads_url( $blog_id = null ) {
	if ( wcwm_main_site( $blog_id ) ) {
		return get_site_url( $blog_id, '/wp-content/uploads/' );
	}

	return get_site_url( $blog_id, "/wp-content/uploads/sites/{$blog_id}/" );
}

/**
 * Get WC table prefix by blog ID
 *
 * @param  integer $blog_id Blog ID
 * @return string
 */
function wcwm_servmask_prefix( $blog_id = null ) {
	// Set base table prefix
	if ( wcwm_main_site( $blog_id ) ) {
		return WCWM_TABLE_PREFIX;
	}

	return WCWM_TABLE_PREFIX . $blog_id . '_';
}

/**
 * Get WordPress table prefix by blog ID
 *
 * @param  integer $blog_id Blog ID
 * @return string
 */
function wcwm_table_prefix( $blog_id = null ) {
	global $wpdb;

	// Set base table prefix
	if ( wcwm_main_site( $blog_id ) ) {
		return $wpdb->base_prefix;
	}

	return $wpdb->base_prefix . $blog_id . '_';
}

/**
 * Get default content filters
 *
 * @param  array $filters List of files and directories
 * @return array
 */
function wcwm_content_filters( $filters = array() ) {
	return array_merge( $filters, array(
		WCWM_BACKUPS_NAME,
		WCWM_PACKAGE_NAME,
		WCWM_MULTISITE_NAME,
		WCWM_DATABASE_NAME,
	) );
}

/**
 * Get default plugin filters
 *
 * @param  array $filters List of plugins
 * @return array
 */
function wcwm_plugin_filters( $filters = array() ) {
	// WP Migration Plugin
	if ( defined( 'WCWM_PLUGIN_BASENAME' ) ) {
		$filters[] = 'plugins' . DIRECTORY_SEPARATOR . dirname( WCWM_PLUGIN_BASENAME );
	} else {
		$filters[] = 'plugins' . DIRECTORY_SEPARATOR . 'wc-wp-migration';
	}

	// Microsoft Azure Extension
	if ( defined( 'WCWMZE_PLUGIN_BASENAME' ) ) {
		$filters[] = 'plugins' . DIRECTORY_SEPARATOR . dirname( WCWMZE_PLUGIN_BASENAME );
	} else {
		$filters[] = 'plugins' . DIRECTORY_SEPARATOR . 'wc-wp-migration-azure-storage-extension';
	}

	// Backblaze B2 Extension
	if ( defined( 'WCWMAE_PLUGIN_BASENAME' ) ) {
		$filters[] = 'plugins' . DIRECTORY_SEPARATOR . dirname( WCWMAE_PLUGIN_BASENAME );
	} else {
		$filters[] = 'plugins' . DIRECTORY_SEPARATOR . 'wc-wp-migration-b2-extension';
	}

	// Box Extension
	if ( defined( 'WCWMBE_PLUGIN_BASENAME' ) ) {
		$filters[] = 'plugins' . DIRECTORY_SEPARATOR . dirname( WCWMBE_PLUGIN_BASENAME );
	} else {
		$filters[] = 'plugins' . DIRECTORY_SEPARATOR . 'wc-wp-migration-box-extension';
	}

	// DigitalOcean Extension
	if ( defined( 'WCWMIE_PLUGIN_BASENAME' ) ) {
		$filters[] = 'plugins' . DIRECTORY_SEPARATOR . dirname( WCWMIE_PLUGIN_BASENAME );
	} else {
		$filters[] = 'plugins' . DIRECTORY_SEPARATOR . 'wc-wp-migration-digitalocean-extension';
	}

	// Dropbox Extension
	if ( defined( 'WCWMDE_PLUGIN_BASENAME' ) ) {
		$filters[] = 'plugins' . DIRECTORY_SEPARATOR . dirname( WCWMDE_PLUGIN_BASENAME );
	} else {
		$filters[] = 'plugins' . DIRECTORY_SEPARATOR . 'wc-wp-migration-dropbox-extension';
	}

	// FTP Extension
	if ( defined( 'WCWMFE_PLUGIN_BASENAME' ) ) {
		$filters[] = 'plugins' . DIRECTORY_SEPARATOR . dirname( WCWMFE_PLUGIN_BASENAME );
	} else {
		$filters[] = 'plugins' . DIRECTORY_SEPARATOR . 'wc-wp-migration-ftp-extension';
	}

	// Google Cloud Storage Extension
	if ( defined( 'WCWMCE_PLUGIN_BASENAME' ) ) {
		$filters[] = 'plugins' . DIRECTORY_SEPARATOR . dirname( WCWMCE_PLUGIN_BASENAME );
	} else {
		$filters[] = 'plugins' . DIRECTORY_SEPARATOR . 'wc-wp-migration-gcloud-storage-extension';
	}

	// Google Drive Extension
	if ( defined( 'WCWMGE_PLUGIN_BASENAME' ) ) {
		$filters[] = 'plugins' . DIRECTORY_SEPARATOR . dirname( WCWMGE_PLUGIN_BASENAME );
	} else {
		$filters[] = 'plugins' . DIRECTORY_SEPARATOR . 'wc-wp-migration-gdrive-extension';
	}

	// Amazon Glacier Extension
	if ( defined( 'WCWMRE_PLUGIN_BASENAME' ) ) {
		$filters[] = 'plugins' . DIRECTORY_SEPARATOR . dirname( WCWMRE_PLUGIN_BASENAME );
	} else {
		$filters[] = 'plugins' . DIRECTORY_SEPARATOR . 'wc-wp-migration-glacier-extension';
	}

	// Mega Extension
	if ( defined( 'WCWMEE_PLUGIN_BASENAME' ) ) {
		$filters[] = 'plugins' . DIRECTORY_SEPARATOR . dirname( WCWMEE_PLUGIN_BASENAME );
	} else {
		$filters[] = 'plugins' . DIRECTORY_SEPARATOR . 'wc-wp-migration-mega-extension';
	}

	// Multisite Extension
	if ( defined( 'WCWMME_PLUGIN_BASENAME' ) ) {
		$filters[] = 'plugins' . DIRECTORY_SEPARATOR . dirname( WCWMME_PLUGIN_BASENAME );
	} else {
		$filters[] = 'plugins' . DIRECTORY_SEPARATOR . 'wc-wp-migration-multisite-extension';
	}

	// OneDrive Extension
	if ( defined( 'WCWMOE_PLUGIN_BASENAME' ) ) {
		$filters[] = 'plugins' . DIRECTORY_SEPARATOR . dirname( WCWMOE_PLUGIN_BASENAME );
	} else {
		$filters[] = 'plugins' . DIRECTORY_SEPARATOR . 'wc-wp-migration-onedrive-extension';
	}

	// pCloud Extension
	if ( defined( 'WCWMPE_PLUGIN_BASENAME' ) ) {
		$filters[] = 'plugins' . DIRECTORY_SEPARATOR . dirname( WCWMPE_PLUGIN_BASENAME );
	} else {
		$filters[] = 'plugins' . DIRECTORY_SEPARATOR . 'wc-wp-migration-pcloud-extension';
	}

	// Amazon S3 Extension
	if ( defined( 'WCWMSE_PLUGIN_BASENAME' ) ) {
		$filters[] = 'plugins' . DIRECTORY_SEPARATOR . dirname( WCWMSE_PLUGIN_BASENAME );
	} else {
		$filters[] = 'plugins' . DIRECTORY_SEPARATOR . 'wc-wp-migration-s3-extension';
	}

	// Unlimited Extension
	if ( defined( 'WCWMUE_PLUGIN_BASENAME' ) ) {
		$filters[] = 'plugins' . DIRECTORY_SEPARATOR . dirname( WCWMUE_PLUGIN_BASENAME );
	} else {
		$filters[] = 'plugins' . DIRECTORY_SEPARATOR . 'wc-wp-migration-unlimited-extension';
	}

	// URL Extension
	if ( defined( 'WCWMLE_PLUGIN_BASENAME' ) ) {
		$filters[] = 'plugins' . DIRECTORY_SEPARATOR . dirname( WCWMLE_PLUGIN_BASENAME );
	} else {
		$filters[] = 'plugins' . DIRECTORY_SEPARATOR . 'wc-wp-migration-url-extension';
	}

	return $filters;
}

/**
 * Get active WC plugins
 *
 * @return array
 */
function wcwm_active_servmask_plugins( $plugins = array() ) {
	// WP Migration Plugin
	if ( defined( 'WCWM_PLUGIN_BASENAME' ) ) {
		$plugins[] = WCWM_PLUGIN_BASENAME;
	}

	// Microsoft Azure Extension
	if ( defined( 'WCWMZE_PLUGIN_BASENAME' ) ) {
		$plugins[] = WCWMZE_PLUGIN_BASENAME;
	}

	// Backblaze B2 Extension
	if ( defined( 'WCWMAE_PLUGIN_BASENAME' ) ) {
		$plugins[] = WCWMAE_PLUGIN_BASENAME;
	}

	// Box Extension
	if ( defined( 'WCWMBE_PLUGIN_BASENAME' ) ) {
		$plugins[] = WCWMBE_PLUGIN_BASENAME;
	}

	// DigitalOcean Extension
	if ( defined( 'WCWMIE_PLUGIN_BASENAME' ) ) {
		$plugins[] = WCWMIE_PLUGIN_BASENAME;
	}

	// Dropbox Extension
	if ( defined( 'WCWMDE_PLUGIN_BASENAME' ) ) {
		$plugins[] = WCWMDE_PLUGIN_BASENAME;
	}

	// FTP Extension
	if ( defined( 'WCWMFE_PLUGIN_BASENAME' ) ) {
		$plugins[] = WCWMFE_PLUGIN_BASENAME;
	}

	// Google Cloud Storage Extension
	if ( defined( 'WCWMCE_PLUGIN_BASENAME' ) ) {
		$plugins[] = WCWMCE_PLUGIN_BASENAME;
	}

	// Google Drive Extension
	if ( defined( 'WCWMGE_PLUGIN_BASENAME' ) ) {
		$plugins[] = WCWMGE_PLUGIN_BASENAME;
	}

	// Amazon Glacier Extension
	if ( defined( 'WCWMRE_PLUGIN_BASENAME' ) ) {
		$plugins[] = WCWMRE_PLUGIN_BASENAME;
	}

	// Mega Extension
	if ( defined( 'WCWMEE_PLUGIN_BASENAME' ) ) {
		$plugins[] = WCWMEE_PLUGIN_BASENAME;
	}

	// Multisite Extension
	if ( defined( 'WCWMME_PLUGIN_BASENAME' ) ) {
		$plugins[] = WCWMME_PLUGIN_BASENAME;
	}

	// OneDrive Extension
	if ( defined( 'WCWMOE_PLUGIN_BASENAME' ) ) {
		$plugins[] = WCWMOE_PLUGIN_BASENAME;
	}

	// pCloud Extension
	if ( defined( 'WCWMPE_PLUGIN_BASENAME' ) ) {
		$plugins[] = WCWMPE_PLUGIN_BASENAME;
	}

	// Amazon S3 Extension
	if ( defined( 'WCWMSE_PLUGIN_BASENAME' ) ) {
		$plugins[] = WCWMSE_PLUGIN_BASENAME;
	}

	// Unlimited Extension
	if ( defined( 'WCWMUE_PLUGIN_BASENAME' ) ) {
		$plugins[] = WCWMUE_PLUGIN_BASENAME;
	}

	// URL Extension
	if ( defined( 'WCWMLE_PLUGIN_BASENAME' ) ) {
		$plugins[] = WCWMLE_PLUGIN_BASENAME;
	}

	return $plugins;
}

/**
 * Get active sitewide plugins
 *
 * @return array
 */
function wcwm_active_sitewide_plugins() {
	return array_keys( get_site_option( WCWM_ACTIVE_SITEWIDE_PLUGINS, array() ) );
}

/**
 * Get active plugins
 *
 * @return array
 */
function wcwm_active_plugins() {
	return array_values( get_option( WCWM_ACTIVE_PLUGINS, array() ) );
}

/**
 * Set active sitewide plugins (inspired by WordPress activate_plugins() function)
 *
 * @param  array   $plugins List of plugins
 * @return boolean
 */
function wcwm_activate_sitewide_plugins( $plugins ) {
	$current = get_site_option( WCWM_ACTIVE_SITEWIDE_PLUGINS, array() );

	// Add plugins
	foreach ( $plugins as $plugin ) {
		if ( ! isset( $current[ $plugin ] ) && ! is_wp_error( validate_plugin( $plugin ) ) ) {
			$current[ $plugin ] = time();
		}
	}

	return update_site_option( WCWM_ACTIVE_SITEWIDE_PLUGINS, $current );
}

/**
 * Set active plugins (inspired by WordPress activate_plugins() function)
 *
 * @param  array   $plugins List of plugins
 * @return boolean
 */
function wcwm_activate_plugins( $plugins ) {
	$current = get_option( WCWM_ACTIVE_PLUGINS, array() );

	// Add plugins
	foreach ( $plugins as $plugin ) {
		if ( ! in_array( $plugin, $current ) && ! is_wp_error( validate_plugin( $plugin ) ) ) {
			$current[] = $plugin;
		}
	}

	sort( $current );

	return update_option( WCWM_ACTIVE_PLUGINS, $current );
}

/**
 * Get active template
 *
 * @return string
 */
function wcwm_active_template() {
	return get_option( WCWM_ACTIVE_TEMPLATE );
}

/**
 * Get active stylesheet
 *
 * @return string
 */
function wcwm_active_stylesheet() {
	return get_option( WCWM_ACTIVE_STYLESHEET );
}

/**
 * Set active template
 *
 * @param  string  $template Template name
 * @return boolean
 */
function wcwm_activate_template( $template ) {
	return update_option( WCWM_ACTIVE_TEMPLATE, $template );
}

/**
 * Set active stylesheet
 *
 * @param  string  $stylesheet Stylesheet name
 * @return boolean
 */
function wcwm_activate_stylesheet( $stylesheet ) {
	return update_option( WCWM_ACTIVE_STYLESHEET, $stylesheet );
}

/**
 * Set inactive sitewide plugins (inspired by WordPress deactivate_plugins() function)
 *
 * @param  array   $plugins List of plugins
 * @return boolean
 */
function wcwm_deactivate_sitewide_plugins( $plugins ) {
	$current = get_site_option( WCWM_ACTIVE_SITEWIDE_PLUGINS, array() );

	// Add plugins
	foreach ( $plugins as $plugin ) {
		if ( isset( $current[ $plugin ] ) ) {
			unset( $current[ $plugin ] );
		}
	}

	return update_site_option( WCWM_ACTIVE_SITEWIDE_PLUGINS, $current );
}


/**
 * Set inactive plugins (inspired by WordPress deactivate_plugins() function)
 *
 * @param  array   $plugins List of plugins
 * @return boolean
 */
function wcwm_deactivate_plugins( $plugins ) {
	$current = get_option( WCWM_ACTIVE_PLUGINS, array() );

	// Remove plugins
	foreach ( $plugins as $plugin ) {
		if ( ( $key = array_search( $plugin, $current ) ) !== false ) {
			unset( $current[ $key ] );
		}
	}

	sort( $current );

	return update_option( WCWM_ACTIVE_PLUGINS, $current );
}

/**
 * Deactivate Jetpack modules
 *
 * @param  array   $modules List of modules
 * @return boolean
 */
function wcwm_deactivate_jetpack_modules( $modules ) {
	$current = get_option( WCWM_JETPACK_ACTIVE_MODULES, array() );

	// Remove modules
	foreach ( $modules as $module ) {
		if ( ( $key = array_search( $module, $current ) ) !== false ) {
			unset( $current[ $key ] );
		}
	}

	sort( $current );

	return update_option( WCWM_JETPACK_ACTIVE_MODULES, $current );
}

/**
 * Discover plugin basename
 *
 * @param  string $basename Plugin basename
 * @return string
 */
function wcwm_discover_plugin_basename( $basename ) {
	if ( ( $plugins = get_plugins() ) ) {
		foreach ( $plugins as $plugin => $info ) {
			if ( strpos( dirname( $plugin ), dirname( $basename ) ) !== false ) {
				if ( basename( $plugin ) === basename( $basename ) ) {
					return $plugin;
				}
			}
		}
	}

	return $basename;
}

/**
 * Validate plugin basename
 *
 * @param  string  $basename Plugin basename
 * @return boolean
 */
function wcwm_validate_plugin_basename( $basename ) {
	if ( ( $plugins = get_plugins() ) ) {
		foreach ( $plugins as $plugin => $info ) {
			if ( $plugin === $basename ) {
				return true;
			}
		}
	}

	return false;
}

/**
 * Validate theme basename
 *
 * @param  string  $basename Theme basename
 * @return boolean
 */
function wcwm_validate_theme_basename( $basename ) {
	if ( ( $themes = search_theme_directories() ) ) {
		foreach ( $themes as $theme => $info ) {
			if ( $info['theme_file'] === $basename ) {
				return true;
			}
		}
	}

	return false;
}

/**
 * Flush WP options cache
 *
 * @return void
 */
function wcwm_cache_flush() {
	// Initialize WP cache
	wp_cache_init();

	// Flush WP cache
	wp_cache_flush();

	// Set WP cache
	wp_cache_set( 'alloptions', array(), 'options' );
	wp_cache_set( 'notoptions', array(), 'options' );

	// Delete WP cache
	wp_cache_delete( 'alloptions', 'options' );
	wp_cache_delete( 'notoptions', 'options' );

	// Remove WP filters
	remove_all_filters( 'sanitize_option_siteurl' );
	remove_all_filters( 'sanitize_option_home' );
}

/**
 * Set URL scheme
 *
 * @param  string $url    URL value
 * @param  string $scheme URL scheme
 * @return string
 */
function wcwm_url_scheme( $url, $scheme = '' ) {
	if ( empty( $scheme ) ) {
		return preg_replace( '#^\w+://#', '//', $url );
	}

	return preg_replace( '#^\w+://#', $scheme . '://', $url );
}

/**
 * Opens a file in specified mode
 *
 * @param  string   $file Path to the file to open
 * @param  string   $mode Mode in which to open the file
 * @return resource
 * @throws Wcwm_Not_Accessible_Exception
 */
function wcwm_open( $file, $mode ) {
	$file_handle = @fopen( $file, $mode );
	if ( false === $file_handle ) {
		throw new Wcwm_Not_Accessible_Exception( sprintf( __( 'Unable to open %s with mode %s. <a href="https://help.wc.com/knowledgebase/invalid-file-permissions/" target="_blank">Technical details</a>', WCWM_PLUGIN_NAME ), $file, $mode ) );
	}

	return $file_handle;
}

/**
 * Write contents to a file
 *
 * @param  resource $handle  File handle to write to
 * @param  string   $content Contents to write to the file
 * @return integer
 * @throws Wcwm_Not_Writable_Exception
 * @throws Wcwm_Quota_Exceeded_Exception
 */
function wcwm_write( $handle, $content ) {
	$write_result = @fwrite( $handle, $content );
	if ( false === $write_result ) {
		if ( ( $meta = stream_get_meta_data( $handle ) ) ) {
			throw new Wcwm_Not_Writable_Exception( sprintf( __( 'Unable to write to: %s. <a href="https://help.wc.com/knowledgebase/invalid-file-permissions/" target="_blank">Technical details</a>', WCWM_PLUGIN_NAME ), $meta['uri'] ) );
		}
	} elseif ( strlen( $content ) !== $write_result ) {
		if ( ( $meta = stream_get_meta_data( $handle ) ) ) {
			throw new Wcwm_Quota_Exceeded_Exception( sprintf( __( 'Out of disk space. Unable to write to: %s. <a href="https://help.wc.com/knowledgebase/out-of-disk-space/" target="_blank">Technical details</a>', WCWM_PLUGIN_NAME ), $meta['uri'] ) );
		}
	}

	return $write_result;
}

/**
 * Read contents from a file
 *
 * @param  resource $handle   File handle to read from
 * @param  string   $filesize File size
 * @return integer
 * @throws Wcwm_Not_Readable_Exception
 */
function wcwm_read( $handle, $filesize ) {
	$read_result = @fread( $handle, $filesize );
	if ( false === $read_result ) {
		if ( ( $meta = stream_get_meta_data( $handle ) ) ) {
			throw new Wcwm_Not_Readable_Exception( sprintf( __( 'Unable to read file: %s. <a href="https://help.wc.com/knowledgebase/invalid-file-permissions/" target="_blank">Technical details</a>', WCWM_PLUGIN_NAME ), $meta['uri'] ) );
		}
	}

	return $read_result;
}

/**
 * Seeks on a file pointer
 *
 * @param  string  $handle File handle to seeks
 * @return integer
 */
function wcwm_seek( $handle, $offset, $mode = SEEK_SET ) {
	$seek_result = @fseek( $handle, $offset, $mode );
	if ( -1 === $seek_result ) {
		if ( ( $meta = stream_get_meta_data( $handle ) ) ) {
			throw new Wcwm_Not_Seekable_Exception( sprintf( __( 'Unable to seek to offset %d on %s. <a href="https://help.wc.com/knowledgebase/php-32bit/" target="_blank">Technical details</a>', WCWM_PLUGIN_NAME ), $offset, $meta['uri'] ) );
		}
	}

	return $seek_result;
}

/**
 * Tells on a file pointer
 *
 * @param  string  $handle File handle to tells
 * @return integer
 */
function wcwm_tell( $handle ) {
	$tell_result = @ftell( $handle );
	if ( false === $tell_result ) {
		if ( ( $meta = stream_get_meta_data( $handle ) ) ) {
			throw new Wcwm_Not_Tellable_Exception( sprintf( __( 'Unable to get current pointer position of %s. <a href="https://help.wc.com/knowledgebase/php-32bit/" target="_blank">Technical details</a>', WCWM_PLUGIN_NAME ), $meta['uri'] ) );
		}
	}

	return $tell_result;
}

/**
 * Closes a file handle
 *
 * @param  resource $handle File handle to close
 * @return boolean
 */
function wcwm_close( $handle ) {
	return @fclose( $handle );
}

/**
 * Deletes a file
 *
 * @param  string  $file Path to file to delete
 * @return boolean
 */
function wcwm_unlink( $file ) {
	return @unlink( $file );
}

/**
 * Sets modification time of a file
 *
 * @param  string  $file Path to file to change modification time
 * @param  integer $time File modification time
 * @return boolean
 */
function wcwm_touch( $file, $mtime ) {
	return @touch( $file, $mtime );
}

/**
 * Changes file mode
 *
 * @param  string  $file Path to file to change mode
 * @param  integer $time File mode
 * @return boolean
 */
function wcwm_chmod( $file, $mode ) {
	return @chmod( $file, $mode );
}

/**
 * Copies one file's contents to another
 *
 * @param  string $source_file      File to copy the contents from
 * @param  string $destination_file File to copy the contents to
 */
function wcwm_copy( $source_file, $destination_file ) {
	$source_handle      = wcwm_open( $source_file, 'rb' );
	$destination_handle = wcwm_open( $destination_file, 'ab' );
	while ( $buffer = wcwm_read( $source_handle, 4096 ) ) {
		wcwm_write( $destination_handle, $buffer );
	}
	wcwm_close( $source_handle );
	wcwm_close( $destination_handle );
}

/**
 * Get the size of file in bytes
 *
 * This method supports files > 2GB on PHP x86
 *
 * @param string  $file_path Path to the file
 * @param boolean $as_string Return the filesize as string instead of BigInteger
 *
 * @return mixed Math_BigInteger|string|null
 */
function wcwm_filesize( $file_path, $as_string = true ) {
	$chunk_size = 2000000; // 2MB
	$file_size  = new Math_BigInteger( 0 );

	try {
		$file_handle = wcwm_open( $file_path, 'rb' );

		while ( ! feof( $file_handle ) ) {
			$bytes     = wcwm_read( $file_handle, $chunk_size );
			$file_size = $file_size->add( new Math_BigInteger( strlen( $bytes ) ) );
		}

		wcwm_close( $file_handle );

		return $as_string ? $file_size->toString() : $file_size;
	} catch ( Exception $e ) {
		return null;
	}
}

/**
 * Return the smaller of two numbers
 *
 * @param Math_BigInteger $a First number
 * @param Math_BigInteger $b Second number
 *
 * @return Math_BigInteger
 */
function wcwm_find_smaller_number( Math_BigInteger $a, Math_BigInteger $b ) {
	if ( $a->compare( $b ) === -1 ) {
		return $a;
	}

	return $b;
}

/**
 * Check whether file size is supported by current PHP version
 *
 * @param  string  $file         Path to file
 * @param  integer $php_int_size Size of PHP integer
 * @return boolean $php_int_max  Max value of PHP integer
 */
function wcwm_is_filesize_supported( $file, $php_int_size = PHP_INT_SIZE, $php_int_max = PHP_INT_MAX ) {
	$size_result = true;

	// Check whether file size is less than 2GB in PHP 32bits
	if ( $php_int_size === 4 ) {
		if ( ( $file_handle = @fopen( $file, 'r' ) ) ) {
			if ( @fseek( $file_handle, $php_int_max, SEEK_SET ) !== -1 ) {
				if ( @fgetc( $file_handle ) !== false ) {
					$size_result = false;
				}
			}

			@fclose( $file_handle );
		}
	}

	return $size_result;
}

/**
 * Wrapper around fseek
 *
 * This function works with offsets that are > PHP_INT_MAX
 *
 * @param resource        $file_handle Handle to the file
 * @param Math_BigInteger $offset      Offset of the file
 */
function wcwm_fseek( $file_handle, Math_BigInteger $offset ) {
	$chunk_size = wcwm_find_smaller_number( new Math_BigInteger( 2000000 ), $offset );
	while ( ! feof( $file_handle ) && $offset->toString() != '0' ) {
		$bytes      = wcwm_read( $file_handle, $chunk_size->toInteger() );
		$offset     = $offset->subtract( new Math_BigInteger( strlen( $bytes ) ) );
		$chunk_size = wcwm_find_smaller_number( $chunk_size, $offset );
	}
}

/**
 * Verify secret key
 *
 * @param  string  $secret_key Secret key
 * @return boolean
 * @throws Wcwm_Not_Valid_Secret_Key_Exception
 */
function wcwm_verify_secret_key( $secret_key ) {
	if ( $secret_key !== get_option( WCWM_SECRET_KEY ) ) {
		throw new Wcwm_Not_Valid_Secret_Key_Exception( __( 'Unable to authenticate the secret key. <a href="https://help.wc.com/knowledgebase/invalid-secret-key/" target="_blank">Technical details</a>', WCWM_PLUGIN_NAME ) );
	}

	return true;
}

/**
 * Is scheduled backup?
 *
 * @return boolean
 */
function wcwm_is_scheduled_backup() {
	if ( isset( $_GET['wcwm_manual_export'] ) || isset( $_POST['wcwm_manual_export'] ) ) {
		return false;
	}

	if ( isset( $_GET['wcwm_manual_import'] ) || isset( $_POST['wcwm_manual_import'] ) ) {
		return false;
	}

	if ( isset( $_GET['wcwm_manual_restore'] ) || isset( $_POST['wcwm_manual_restore'] ) ) {
		return false;
	}

	return true;
}

/**
 * PHP setup environment
 *
 * @return void
 */
function wcwm_setup_environment() {
	// Set whether a client disconnect should abort script execution
	@ignore_user_abort( true );

	// Set maximum execution time
	@set_time_limit( 0 );

	// Set maximum time in seconds a script is allowed to parse input data
	@ini_set( 'max_input_time', '-1' );

	// Set maximum backtracking steps
	@ini_set( 'pcre.backtrack_limit', PHP_INT_MAX );

	// Set binary safe encoding
	if ( @function_exists( 'mb_internal_encoding' ) && ( @ini_get( 'mbstring.func_overload' ) & 2 ) ) {
		@mb_internal_encoding( 'ISO-8859-1' );
	}

	// Set error handler
	@set_error_handler( 'Wcwm_Handler::error' );

	// Set shutdown handler
	@register_shutdown_function( 'Wcwm_Handler::shutdown' );
}
