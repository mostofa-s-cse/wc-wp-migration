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

// ================
// = Plugin Debug =
// ================
define( 'WCWM_DEBUG', false );

// ==================
// = Plugin Version =
// ==================
define( 'WCWM_VERSION', '1.0' );

// ===============
// = Plugin Name =
// ===============
define( 'WCWM_PLUGIN_NAME', 'wc-wp-migration' );

// ============================
// = Directory index.php File =
// ============================
define( 'WCWM_DIRECTORY_INDEX', 'index.php' );

// ================
// = Storage Path =
// ================
define( 'WCWM_STORAGE_PATH', WCWM_PATH . DIRECTORY_SEPARATOR . 'storage' );

// ==================
// = Error Log Path =
// ==================
define( 'WCWM_ERROR_FILE', WCWM_STORAGE_PATH . DIRECTORY_SEPARATOR . 'error.log' );

// ===============
// = Status Path =
// ===============
define( 'WCWM_STATUS_FILE', WCWM_STORAGE_PATH . DIRECTORY_SEPARATOR . 'status.js' );

// ============
// = Lib Path =
// ============
define( 'WCWM_LIB_PATH', WCWM_PATH . DIRECTORY_SEPARATOR . 'lib' );

// ===================
// = Controller Path =
// ===================
define( 'WCWM_CONTROLLER_PATH', WCWM_LIB_PATH . DIRECTORY_SEPARATOR . 'controller' );

// ==============
// = Model Path =
// ==============
define( 'WCWM_MODEL_PATH', WCWM_LIB_PATH . DIRECTORY_SEPARATOR . 'model' );

// ===============
// = Export Path =
// ===============
define( 'WCWM_EXPORT_PATH', WCWM_MODEL_PATH . DIRECTORY_SEPARATOR . 'export' );

// ===============
// = Import Path =
// ===============
define( 'WCWM_IMPORT_PATH', WCWM_MODEL_PATH . DIRECTORY_SEPARATOR . 'import' );

// =============
// = View Path =
// =============
define( 'WCWM_TEMPLATES_PATH', WCWM_LIB_PATH . DIRECTORY_SEPARATOR . 'view' );

// ===================
// = Set Bandar Path =
// ===================
define( 'BANDAR_TEMPLATES_PATH', WCWM_TEMPLATES_PATH );

// ===============
// = Vendor Path =
// ===============
define( 'WCWM_VENDOR_PATH', WCWM_LIB_PATH . DIRECTORY_SEPARATOR . 'vendor' );

// =========================
// = WC Feedback Url =
// =========================
define( 'WCWM_FEEDBACK_URL', 'https://wc.com/wcwm/feedback/create' );

// =======================
// = WC Report Url =
// =======================
define( 'WCWM_REPORT_URL', 'https://wc.com/wcwm/report/create' );

// ==============================
// = WC Archive Tools Url =
// ==============================
define( 'WCWM_ARCHIVE_TOOLS_URL', 'https://wc.com/archive/tools' );

// =========================
// = WC Table Prefix =
// =========================
define( 'WCWM_TABLE_PREFIX', 'SERVMASK_PREFIX_' );

// ========================
// = Archive Backups Name =
// ========================
define( 'WCWM_BACKUPS_NAME', 'wcwm-backups' );

// =========================
// = Archive Database Name =
// =========================
define( 'WCWM_DATABASE_NAME', 'database.sql' );

// ========================
// = Archive Package Name =
// ========================
define( 'WCWM_PACKAGE_NAME', 'package.json' );

// ==========================
// = Archive Multisite Name =
// ==========================
define( 'WCWM_MULTISITE_NAME', 'multisite.json' );

// ======================
// = Archive Blogs Name =
// ======================
define( 'WCWM_BLOGS_NAME', 'blogs.json' );

// =========================
// = Archive Settings Name =
// =========================
define( 'WCWM_SETTINGS_NAME', 'settings.json' );

// ==========================
// = Archive Multipart Name =
// ==========================
define( 'WCWM_MULTIPART_NAME', 'multipart.list' );

// ========================
// = Archive Filemap Name =
// ========================
define( 'WCWM_FILEMAP_NAME', 'filemap.list' );

// =================================
// = Archive Must-Use Plugins Name =
// =================================
define( 'WCWM_MUPLUGINS_NAME', 'mu-plugins' );

// =============================
// = Endurance Page Cache Name =
// =============================
define( 'WCWM_ENDURANCE_PAGE_CACHE_NAME', 'endurance-page-cache.php' );

// ===========================
// = Endurance PHP Edge Name =
// ===========================
define( 'WCWM_ENDURANCE_PHP_EDGE_NAME', 'endurance-php-edge.php' );

// ================================
// = Endurance Browser Cache Name =
// ================================
define( 'WCWM_ENDURANCE_BROWSER_CACHE_NAME', 'endurance-browser-cache.php' );

// =========================
// = GD System Plugin Name =
// =========================
define( 'WCWM_GD_SYSTEM_PLUGIN_NAME', 'gd-system-plugin.php' );

// ===================
// = Export Log Name =
// ===================
define( 'WCWM_EXPORT_NAME', 'export.log' );

// ===================
// = Import Log Name =
// ===================
define( 'WCWM_IMPORT_NAME', 'import.log' );

// ==================
// = Error Log Name =
// ==================
define( 'WCWM_ERROR_NAME', 'error.log' );

// ==============
// = Secret Key =
// ==============
define( 'WCWM_SECRET_KEY', 'wcwm_secret_key' );

// =============
// = Auth User =
// =============
define( 'WCWM_AUTH_USER', 'wcwm_auth_user' );

// =================
// = Auth Password =
// =================
define( 'WCWM_AUTH_PASSWORD', 'wcwm_auth_password' );

// ============
// = Site URL =
// ============
define( 'WCWM_SITE_URL', 'siteurl' );

// ============
// = Home URL =
// ============
define( 'WCWM_HOME_URL', 'home' );

// ==================
// = Active Plugins =
// ==================
define( 'WCWM_ACTIVE_PLUGINS', 'active_plugins' );

// ===========================
// = Active Sitewide Plugins =
// ===========================
define( 'WCWM_ACTIVE_SITEWIDE_PLUGINS', 'active_sitewide_plugins' );

// ==========================
// = Jetpack Active Modules =
// ==========================
define( 'WCWM_JETPACK_ACTIVE_MODULES', 'jetpack_active_modules' );

// ======================
// = MS Files Rewriting =
// ======================
define( 'WCWM_MS_FILES_REWRITING', 'ms_files_rewriting' );

// ===================
// = Active Template =
// ===================
define( 'WCWM_ACTIVE_TEMPLATE', 'template' );

// =====================
// = Active Stylesheet =
// =====================
define( 'WCWM_ACTIVE_STYLESHEET', 'stylesheet' );

// ============
// = Cron Key =
// ============
define( 'WCWM_CRON', 'cron' );

// ===============
// = Updater Key =
// ===============
define( 'WCWM_UPDATER', 'wcwm_updater' );

// ==============
// = Status Key =
// ==============
define( 'WCWM_STATUS', 'wcwm_status' );

// ================
// = Messages Key =
// ================
define( 'WCWM_MESSAGES', 'wcwm_messages' );

// =================
// = Support Email =
// =================
define( 'WCWM_SUPPORT_EMAIL', 'support@wc.com' );

// =================
// = Max File Size =
// =================
define( 'WCWM_MAX_FILE_SIZE', 2 << 40 );

// ==================
// = Max Chunk Size =
// ==================
define( 'WCWM_MAX_CHUNK_SIZE', 5 * 1024 * 1024 );

// =====================
// = Max Chunk Retries =
// =====================
define( 'WCWM_MAX_CHUNK_RETRIES', 10 );

// ===========================
// = WP_CONTENT_DIR Constant =
// ===========================
if ( ! defined( 'WP_CONTENT_DIR' ) ) {
	define( 'WP_CONTENT_DIR', ABSPATH . 'wp-content' );
}

// ================
// = Uploads Path =
// ================
define( 'WCWM_UPLOADS_PATH', 'uploads' );

// ==============
// = Blogs Path =
// ==============
define( 'WCWM_BLOGSDIR_PATH', 'blogs.dir' );

// ==============
// = Sites Path =
// ==============
define( 'WCWM_SITES_PATH', WCWM_UPLOADS_PATH . DIRECTORY_SEPARATOR . 'sites' );

// ================
// = Backups Path =
// ================
define( 'WCWM_BACKUPS_PATH', WP_CONTENT_DIR . DIRECTORY_SEPARATOR . 'wcwm-backups' );

// ==========================
// = Storage index.php File =
// ==========================
define( 'WCWM_STORAGE_INDEX', WCWM_STORAGE_PATH . DIRECTORY_SEPARATOR . 'index.php' );

// ==========================
// = Backups index.php File =
// ==========================
define( 'WCWM_BACKUPS_INDEX', WCWM_BACKUPS_PATH . DIRECTORY_SEPARATOR . 'index.php' );

// ==========================
// = Backups .htaccess File =
// ==========================
define( 'WCWM_BACKUPS_HTACCESS', WCWM_BACKUPS_PATH . DIRECTORY_SEPARATOR . '.htaccess' );

// ===========================
// = Backups web.config File =
// ===========================
define( 'WCWM_BACKUPS_WEBCONFIG', WCWM_BACKUPS_PATH . DIRECTORY_SEPARATOR . 'web.config' );

// ============================
// = WordPress .htaccess File =
// ============================
define( 'WCWM_WORDPRESS_HTACCESS', ABSPATH . DIRECTORY_SEPARATOR . '.htaccess' );

// ================================
// = WP Migration Plugin Base Dir =
// ================================
if ( defined( 'WCWM_PLUGIN_BASENAME' ) ) {
	define( 'WCWM_PLUGIN_BASEDIR', dirname( WCWM_PLUGIN_BASENAME ) );
} else {
	define( 'WCWM_PLUGIN_BASEDIR', 'wc-wp-migration' );
}

// ======================================
// = Microsoft Azure Extension Base Dir =
// ======================================
if ( defined( 'WCWMZE_PLUGIN_BASENAME' ) ) {
	define( 'WCWMZE_PLUGIN_BASEDIR', dirname( WCWMZE_PLUGIN_BASENAME ) );
} else {
	define( 'WCWMZE_PLUGIN_BASEDIR', 'wc-wp-migration-azure-storage-extension' );
}

// ===================================
// = Microsoft Azure Extension Title =
// ===================================
if ( ! defined( 'WCWMZE_PLUGIN_TITLE' ) ) {
	define( 'WCWMZE_PLUGIN_TITLE', 'Microsoft Azure Storage Extension' );
}

// ===================================
// = Microsoft Azure Extension About =
// ===================================
if ( ! defined( 'WCWMZE_PLUGIN_ABOUT' ) ) {
	define( 'WCWMZE_PLUGIN_ABOUT', 'https://wc.com/products/microsoft-azure-storage-extension/about' );
}

// =================================
// = Microsoft Azure Extension Key =
// =================================
if ( ! defined( 'WCWMZE_PLUGIN_KEY' ) ) {
	define( 'WCWMZE_PLUGIN_KEY', 'wcwmze_plugin_key' );
}

// ===================================
// = Microsoft Azure Extension Short =
// ===================================
if ( ! defined( 'WCWMZE_PLUGIN_SHORT' ) ) {
	define( 'WCWMZE_PLUGIN_SHORT', 'azure-storage' );
}

// ===================================
// = Backblaze B2 Extension Base Dir =
// ===================================
if ( defined( 'WCWMAE_PLUGIN_BASENAME' ) ) {
	define( 'WCWMAE_PLUGIN_BASEDIR', dirname( WCWMAE_PLUGIN_BASENAME ) );
} else {
	define( 'WCWMAE_PLUGIN_BASEDIR', 'wc-wp-migration-b2-extension' );
}

// ================================
// = Backblaze B2 Extension Title =
// ================================
if ( ! defined( 'WCWMAE_PLUGIN_TITLE' ) ) {
	define( 'WCWMAE_PLUGIN_TITLE', 'Backblaze B2 Extension' );
}

// ================================
// = Backblaze B2 Extension About =
// ================================
if ( ! defined( 'WCWMAE_PLUGIN_ABOUT' ) ) {
	define( 'WCWMAE_PLUGIN_ABOUT', 'https://wc.com/products/backblaze-b2-extension/about' );
}

// ==============================
// = Backblaze B2 Extension Key =
// ==============================
if ( ! defined( 'WCWMAE_PLUGIN_KEY' ) ) {
	define( 'WCWMAE_PLUGIN_KEY', 'wcwmae_plugin_key' );
}

// ================================
// = Backblaze B2 Extension Short =
// ================================
if ( ! defined( 'WCWMAE_PLUGIN_SHORT' ) ) {
	define( 'WCWMAE_PLUGIN_SHORT', 'b2' );
}

// ==========================
// = Box Extension Base Dir =
// ==========================
if ( defined( 'WCWMBE_PLUGIN_BASENAME' ) ) {
	define( 'WCWMBE_PLUGIN_BASEDIR', dirname( WCWMBE_PLUGIN_BASENAME ) );
} else {
	define( 'WCWMBE_PLUGIN_BASEDIR', 'wc-wp-migration-box-extension' );
}

// =======================
// = Box Extension Title =
// =======================
if ( ! defined( 'WCWMBE_PLUGIN_TITLE' ) ) {
	define( 'WCWMBE_PLUGIN_TITLE', 'Box Extension' );
}

// =======================
// = Box Extension About =
// =======================
if ( ! defined( 'WCWMBE_PLUGIN_ABOUT' ) ) {
	define( 'WCWMBE_PLUGIN_ABOUT', 'https://wc.com/products/box-extension/about' );
}

// =====================
// = Box Extension Key =
// =====================
if ( ! defined( 'WCWMBE_PLUGIN_KEY' ) ) {
	define( 'WCWMBE_PLUGIN_KEY', 'wcwmbe_plugin_key' );
}

// =======================
// = Box Extension Short =
// =======================
if ( ! defined( 'WCWMBE_PLUGIN_SHORT' ) ) {
	define( 'WCWMBE_PLUGIN_SHORT', 'box' );
}

// ===================================
// = DigitalOcean Extension Base Dir =
// ===================================
if ( defined( 'WCWMIE_PLUGIN_BASENAME' ) ) {
	define( 'WCWMIE_PLUGIN_BASEDIR', dirname( WCWMIE_PLUGIN_BASENAME ) );
} else {
	define( 'WCWMIE_PLUGIN_BASEDIR', 'wc-wp-migration-digitalocean-extension' );
}

// ================================
// = DigitalOcean Extension Title =
// ================================
if ( ! defined( 'WCWMIE_PLUGIN_TITLE' ) ) {
	define( 'WCWMIE_PLUGIN_TITLE', 'DigitalOcean Spaces Extension' );
}

// ================================
// = DigitalOcean Extension About =
// ================================
if ( ! defined( 'WCWMIE_PLUGIN_ABOUT' ) ) {
	define( 'WCWMIE_PLUGIN_ABOUT', 'https://wc.com/products/digitalocean-spaces-extension/about' );
}

// ==============================
// = DigitalOcean Extension Key =
// ==============================
if ( ! defined( 'WCWMIE_PLUGIN_KEY' ) ) {
	define( 'WCWMIE_PLUGIN_KEY', 'wcwmie_plugin_key' );
}

// ================================
// = DigitalOcean Extension Short =
// ================================
if ( ! defined( 'WCWMIE_PLUGIN_SHORT' ) ) {
	define( 'WCWMIE_PLUGIN_SHORT', 'digitalocean' );
}

// ==============================
// = Dropbox Extension Base Dir =
// ==============================
if ( defined( 'WCWMDE_PLUGIN_BASENAME' ) ) {
	define( 'WCWMDE_PLUGIN_BASEDIR', dirname( WCWMDE_PLUGIN_BASENAME ) );
} else {
	define( 'WCWMDE_PLUGIN_BASEDIR', 'wc-wp-migration-dropbox-extension' );
}

// ===========================
// = Dropbox Extension Title =
// ===========================
if ( ! defined( 'WCWMDE_PLUGIN_TITLE' ) ) {
	define( 'WCWMDE_PLUGIN_TITLE', 'Dropbox Extension' );
}

// ===========================
// = Dropbox Extension About =
// ===========================
if ( ! defined( 'WCWMDE_PLUGIN_ABOUT' ) ) {
	define( 'WCWMDE_PLUGIN_ABOUT', 'https://wc.com/products/dropbox-extension/about' );
}

// =========================
// = Dropbox Extension Key =
// =========================
if ( ! defined( 'WCWMDE_PLUGIN_KEY' ) ) {
	define( 'WCWMDE_PLUGIN_KEY', 'wcwmde_plugin_key' );
}

// ===========================
// = Dropbox Extension Short =
// ===========================
if ( ! defined( 'WCWMDE_PLUGIN_SHORT' ) ) {
	define( 'WCWMDE_PLUGIN_SHORT', 'dropbox' );
}

// ==========================
// = FTP Extension Base Dir =
// ==========================
if ( defined( 'WCWMFE_PLUGIN_BASENAME' ) ) {
	define( 'WCWMFE_PLUGIN_BASEDIR', dirname( WCWMFE_PLUGIN_BASENAME ) );
} else {
	define( 'WCWMFE_PLUGIN_BASEDIR', 'wc-wp-migration-ftp-extension' );
}

// =======================
// = FTP Extension Title =
// =======================
if ( ! defined( 'WCWMFE_PLUGIN_TITLE' ) ) {
	define( 'WCWMFE_PLUGIN_TITLE', 'FTP Extension' );
}

// =======================
// = FTP Extension About =
// =======================
if ( ! defined( 'WCWMFE_PLUGIN_ABOUT' ) ) {
	define( 'WCWMFE_PLUGIN_ABOUT', 'https://wc.com/products/ftp-extension/about' );
}

// =====================
// = FTP Extension Key =
// =====================
if ( ! defined( 'WCWMFE_PLUGIN_KEY' ) ) {
	define( 'WCWMFE_PLUGIN_KEY', 'wcwmfe_plugin_key' );
}

// =======================
// = FTP Extension Short =
// =======================
if ( ! defined( 'WCWMFE_PLUGIN_SHORT' ) ) {
	define( 'WCWMFE_PLUGIN_SHORT', 'ftp' );
}

// ===========================================
// = Google Cloud Storage Extension Base Dir =
// ===========================================
if ( defined( 'WCWMCE_PLUGIN_BASENAME' ) ) {
	define( 'WCWMCE_PLUGIN_BASEDIR', dirname( WCWMCE_PLUGIN_BASENAME ) );
} else {
	define( 'WCWMCE_PLUGIN_BASEDIR', 'wc-wp-migration-gcloud-storage-extension' );
}

// ========================================
// = Google Cloud Storage Extension Title =
// ========================================
if ( ! defined( 'WCWMCE_PLUGIN_TITLE' ) ) {
	define( 'WCWMCE_PLUGIN_TITLE', 'Google Cloud Storage Extension' );
}

// ========================================
// = Google Cloud Storage Extension About =
// ========================================
if ( ! defined( 'WCWMCE_PLUGIN_ABOUT' ) ) {
	define( 'WCWMCE_PLUGIN_ABOUT', 'https://wc.com/products/google-cloud-storage-extension/about' );
}

// ======================================
// = Google Cloud Storage Extension Key =
// ======================================
if ( ! defined( 'WCWMCE_PLUGIN_KEY' ) ) {
	define( 'WCWMCE_PLUGIN_KEY', 'wcwmce_plugin_key' );
}

// ========================================
// = Google Cloud Storage Extension Short =
// ========================================
if ( ! defined( 'WCWMCE_PLUGIN_SHORT' ) ) {
	define( 'WCWMCE_PLUGIN_SHORT', 'gcloud-storage' );
}

// ===================================
// = Google Drive Extension Base Dir =
// ===================================
if ( defined( 'WCWMGE_PLUGIN_BASENAME' ) ) {
	define( 'WCWMGE_PLUGIN_BASEDIR', dirname( WCWMGE_PLUGIN_BASENAME ) );
} else {
	define( 'WCWMGE_PLUGIN_BASEDIR', 'wc-wp-migration-gdrive-extension' );
}

// ================================
// = Google Drive Extension Title =
// ================================
if ( ! defined( 'WCWMGE_PLUGIN_TITLE' ) ) {
	define( 'WCWMGE_PLUGIN_TITLE', 'Google Drive Extension' );
}

// ================================
// = Google Drive Extension About =
// ================================
if ( ! defined( 'WCWMGE_PLUGIN_ABOUT' ) ) {
	define( 'WCWMGE_PLUGIN_ABOUT', 'https://wc.com/products/google-drive-extension/about' );
}

// ==============================
// = Google Drive Extension Key =
// ==============================
if ( ! defined( 'WCWMGE_PLUGIN_KEY' ) ) {
	define( 'WCWMGE_PLUGIN_KEY', 'wcwmge_plugin_key' );
}

// ================================
// = Google Drive Extension Short =
// ================================
if ( ! defined( 'WCWMGE_PLUGIN_SHORT' ) ) {
	define( 'WCWMGE_PLUGIN_SHORT', 'gdrive' );
}

// =====================================
// = Amazon Glacier Extension Base Dir =
// =====================================
if ( defined( 'WCWMRE_PLUGIN_BASENAME' ) ) {
	define( 'WCWMRE_PLUGIN_BASEDIR', dirname( WCWMRE_PLUGIN_BASENAME ) );
} else {
	define( 'WCWMRE_PLUGIN_BASEDIR', 'wc-wp-migration-glacier-extension' );
}

// ==================================
// = Amazon Glacier Extension Title =
// ==================================
if ( ! defined( 'WCWMRE_PLUGIN_TITLE' ) ) {
	define( 'WCWMRE_PLUGIN_TITLE', 'Amazon Glacier Extension' );
}

// ==================================
// = Amazon Glacier Extension About =
// ==================================
if ( ! defined( 'WCWMRE_PLUGIN_ABOUT' ) ) {
	define( 'WCWMRE_PLUGIN_ABOUT', 'https://wc.com/products/amazon-glacier-extension/about' );
}

// ================================
// = Amazon Glacier Extension Key =
// ================================
if ( ! defined( 'WCWMRE_PLUGIN_KEY' ) ) {
	define( 'WCWMRE_PLUGIN_KEY', 'wcwmre_plugin_key' );
}

// ==================================
// = Amazon Glacier Extension Short =
// ==================================
if ( ! defined( 'WCWMRE_PLUGIN_SHORT' ) ) {
	define( 'WCWMRE_PLUGIN_SHORT', 'glacier' );
}

// ===========================
// = Mega Extension Base Dir =
// ===========================
if ( defined( 'WCWMEE_PLUGIN_BASENAME' ) ) {
	define( 'WCWMEE_PLUGIN_BASEDIR', dirname( WCWMEE_PLUGIN_BASENAME ) );
} else {
	define( 'WCWMEE_PLUGIN_BASEDIR', 'wc-wp-migration-mega-extension' );
}

// ========================
// = Mega Extension Title =
// ========================
if ( ! defined( 'WCWMEE_PLUGIN_TITLE' ) ) {
	define( 'WCWMEE_PLUGIN_TITLE', 'Mega Extension' );
}

// ========================
// = Mega Extension About =
// ========================
if ( ! defined( 'WCWMEE_PLUGIN_ABOUT' ) ) {
	define( 'WCWMEE_PLUGIN_ABOUT', 'https://wc.com/products/mega-extension/about' );
}

// ======================
// = Mega Extension Key =
// ======================
if ( ! defined( 'WCWMEE_PLUGIN_KEY' ) ) {
	define( 'WCWMEE_PLUGIN_KEY', 'wcwmee_plugin_key' );
}

// ========================
// = Mega Extension Short =
// ========================
if ( ! defined( 'WCWMEE_PLUGIN_SHORT' ) ) {
	define( 'WCWMEE_PLUGIN_SHORT', 'mega' );
}

// ================================
// = Multisite Extension Base Dir =
// ================================
if ( defined( 'WCWMME_PLUGIN_BASENAME' ) ) {
	define( 'WCWMME_PLUGIN_BASEDIR', dirname( WCWMME_PLUGIN_BASENAME ) );
} else {
	define( 'WCWMME_PLUGIN_BASEDIR', 'wc-wp-migration-multisite-extension' );
}

// =============================
// = Multisite Extension Title =
// =============================
if ( ! defined( 'WCWMME_PLUGIN_TITLE' ) ) {
	define( 'WCWMME_PLUGIN_TITLE', 'Multisite Extension' );
}

// =============================
// = Multisite Extension About =
// =============================
if ( ! defined( 'WCWMME_PLUGIN_ABOUT' ) ) {
	define( 'WCWMME_PLUGIN_ABOUT', 'https://wc.com/products/multisite-extension/about' );
}

// ===========================
// = Multisite Extension Key =
// ===========================
if ( ! defined( 'WCWMME_PLUGIN_KEY' ) ) {
	define( 'WCWMME_PLUGIN_KEY', 'wcwmme_plugin_key' );
}

// =============================
// = Multisite Extension Short =
// =============================
if ( ! defined( 'WCWMME_PLUGIN_SHORT' ) ) {
	define( 'WCWMME_PLUGIN_SHORT', 'multisite' );
}

// ===============================
// = OneDrive Extension Base Dir =
// ===============================
if ( defined( 'WCWMOE_PLUGIN_BASENAME' ) ) {
	define( 'WCWMOE_PLUGIN_BASEDIR', dirname( WCWMOE_PLUGIN_BASENAME ) );
} else {
	define( 'WCWMOE_PLUGIN_BASEDIR', 'wc-wp-migration-onedrive-extension' );
}

// ============================
// = OneDrive Extension Title =
// ============================
if ( ! defined( 'WCWMOE_PLUGIN_TITLE' ) ) {
	define( 'WCWMOE_PLUGIN_TITLE', 'OneDrive Extension' );
}

// ============================
// = OneDrive Extension About =
// ============================
if ( ! defined( 'WCWMOE_PLUGIN_ABOUT' ) ) {
	define( 'WCWMOE_PLUGIN_ABOUT', 'https://wc.com/products/onedrive-extension/about' );
}

// ==========================
// = OneDrive Extension Key =
// ==========================
if ( ! defined( 'WCWMOE_PLUGIN_KEY' ) ) {
	define( 'WCWMOE_PLUGIN_KEY', 'wcwmoe_plugin_key' );
}

// ============================
// = OneDrive Extension Short =
// ============================
if ( ! defined( 'WCWMOE_PLUGIN_SHORT' ) ) {
	define( 'WCWMOE_PLUGIN_SHORT', 'onedrive' );
}

// =============================
// = pCloud Extension Base Dir =
// =============================
if ( defined( 'WCWMPE_PLUGIN_BASENAME' ) ) {
	define( 'WCWMPE_PLUGIN_BASEDIR', dirname( WCWMPE_PLUGIN_BASENAME ) );
} else {
	define( 'WCWMPE_PLUGIN_BASEDIR', 'wc-wp-migration-pcloud-extension' );
}

// ==========================
// = pCloud Extension Title =
// ==========================
if ( ! defined( 'WCWMPE_PLUGIN_TITLE' ) ) {
	define( 'WCWMPE_PLUGIN_TITLE', 'pCloud Extension' );
}

// ==========================
// = pCloud Extension About =
// ==========================
if ( ! defined( 'WCWMPE_PLUGIN_ABOUT' ) ) {
	define( 'WCWMPE_PLUGIN_ABOUT', 'https://wc.com/products/pcloud-extension/about' );
}

// ========================
// = pCloud Extension Key =
// ========================
if ( ! defined( 'WCWMPE_PLUGIN_KEY' ) ) {
	define( 'WCWMPE_PLUGIN_KEY', 'wcwmpe_plugin_key' );
}

// ==========================
// = pCloud Extension short =
// ==========================
if ( ! defined( 'WCWMPE_PLUGIN_SHORT' ) ) {
	define( 'WCWMPE_PLUGIN_SHORT', 'pcloud' );
}

// ================================
// = Amazon S3 Extension Base Dir =
// ================================
if ( defined( 'WCWMSE_PLUGIN_BASENAME' ) ) {
	define( 'WCWMSE_PLUGIN_BASEDIR', dirname( WCWMSE_PLUGIN_BASENAME ) );
} else {
	define( 'WCWMSE_PLUGIN_BASEDIR', 'wc-wp-migration-s3-extension' );
}

// =============================
// = Amazon S3 Extension Title =
// =============================
if ( ! defined( 'WCWMSE_PLUGIN_TITLE' ) ) {
	define( 'WCWMSE_PLUGIN_TITLE', 'Amazon S3 Extension' );
}

// =============================
// = Amazon S3 Extension About =
// =============================
if ( ! defined( 'WCWMSE_PLUGIN_ABOUT' ) ) {
	define( 'WCWMSE_PLUGIN_ABOUT', 'https://wc.com/products/amazon-s3-extension/about' );
}

// ===========================
// = Amazon S3 Extension Key =
// ===========================
if ( ! defined( 'WCWMSE_PLUGIN_KEY' ) ) {
	define( 'WCWMSE_PLUGIN_KEY', 'wcwmse_plugin_key' );
}

// =============================
// = Amazon S3 Extension Short =
// =============================
if ( ! defined( 'WCWMSE_PLUGIN_SHORT' ) ) {
	define( 'WCWMSE_PLUGIN_SHORT', 's3' );
}

// ================================
// = Unlimited Extension Base Dir =
// ================================
if ( defined( 'WCWMUE_PLUGIN_BASENAME' ) ) {
	define( 'WCWMUE_PLUGIN_BASEDIR', dirname( WCWMUE_PLUGIN_BASENAME ) );
} else {
	define( 'WCWMUE_PLUGIN_BASEDIR', 'wc-wp-migration-unlimited-extension' );
}

// =============================
// = Unlimited Extension Title =
// =============================
if ( ! defined( 'WCWMUE_PLUGIN_TITLE' ) ) {
	define( 'WCWMUE_PLUGIN_TITLE', 'Unlimited Extension' );
}

// =============================
// = Unlimited Extension About =
// =============================
if ( ! defined( 'WCWMUE_PLUGIN_ABOUT' ) ) {
	define( 'WCWMUE_PLUGIN_ABOUT', 'https://wc.com/products/unlimited-extension/about' );
}

// ===========================
// = Unlimited Extension Key =
// ===========================
if ( ! defined( 'WCWMUE_PLUGIN_KEY' ) ) {
	define( 'WCWMUE_PLUGIN_KEY', 'wcwmue_plugin_key' );
}

// =============================
// = Unlimited Extension Short =
// =============================
if ( ! defined( 'WCWMUE_PLUGIN_SHORT' ) ) {
	define( 'WCWMUE_PLUGIN_SHORT', 'unlimited' );
}

// ==========================
// = URL Extension Base Dir =
// ==========================
if ( defined( 'WCWMLE_PLUGIN_BASENAME' ) ) {
	define( 'WCWMLE_PLUGIN_BASEDIR', dirname( WCWMLE_PLUGIN_BASENAME ) );
} else {
	define( 'WCWMLE_PLUGIN_BASEDIR', 'wc-wp-migration-url-extension' );
}

// =======================
// = URL Extension Title =
// =======================
if ( ! defined( 'WCWMLE_PLUGIN_TITLE' ) ) {
	define( 'WCWMLE_PLUGIN_TITLE', 'URL Extension' );
}

// =======================
// = URL Extension About =
// =======================
if ( ! defined( 'WCWMLE_PLUGIN_ABOUT' ) ) {
	define( 'WCWMLE_PLUGIN_ABOUT', 'https://wc.com/products/url-extension/about' );
}

// =====================
// = URL Extension Key =
// =====================
if ( ! defined( 'WCWMLE_PLUGIN_KEY' ) ) {
	define( 'WCWMLE_PLUGIN_KEY', 'wcwmle_plugin_key' );
}

// =======================
// = URL Extension Short =
// =======================
if ( ! defined( 'WCWMLE_PLUGIN_SHORT' ) ) {
	define( 'WCWMLE_PLUGIN_SHORT', 'url' );
}
