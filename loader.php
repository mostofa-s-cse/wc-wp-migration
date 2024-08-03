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

// Include all the files that you want to load in here
require_once WCWM_VENDOR_PATH .
			DIRECTORY_SEPARATOR .
			'bandar' .
			DIRECTORY_SEPARATOR .
			'bandar' .
			DIRECTORY_SEPARATOR .
			'lib' .
			DIRECTORY_SEPARATOR .
			'Bandar.php';


if ( class_exists( 'WP_CLI' ) ) {
	require_once WCWM_VENDOR_PATH .
				DIRECTORY_SEPARATOR .
				'wc' .
				DIRECTORY_SEPARATOR .
				'command' .
				DIRECTORY_SEPARATOR .
				'class-wcwm-wp-cli-command.php';
}

require_once WCWM_VENDOR_PATH .
			DIRECTORY_SEPARATOR .
			'wc' .
			DIRECTORY_SEPARATOR .
			'filesystem' .
			DIRECTORY_SEPARATOR .
			'class-wcwm-directory.php';

require_once WCWM_VENDOR_PATH .
			DIRECTORY_SEPARATOR .
			'wc' .
			DIRECTORY_SEPARATOR .
			'filesystem' .
			DIRECTORY_SEPARATOR .
			'class-wcwm-file.php';

require_once WCWM_VENDOR_PATH .
			DIRECTORY_SEPARATOR .
			'wc' .
			DIRECTORY_SEPARATOR .
			'filesystem' .
			DIRECTORY_SEPARATOR .
			'class-wcwm-file-index.php';

require_once WCWM_VENDOR_PATH .
			DIRECTORY_SEPARATOR .
			'wc' .
			DIRECTORY_SEPARATOR .
			'filesystem' .
			DIRECTORY_SEPARATOR .
			'class-wcwm-file-htaccess.php';

require_once WCWM_VENDOR_PATH .
			DIRECTORY_SEPARATOR .
			'wc' .
			DIRECTORY_SEPARATOR .
			'filesystem' .
			DIRECTORY_SEPARATOR .
			'class-wcwm-file-webconfig.php';

require_once WCWM_VENDOR_PATH .
			DIRECTORY_SEPARATOR .
			'wc' .
			DIRECTORY_SEPARATOR .
			'cron' .
			DIRECTORY_SEPARATOR .
			'class-wcwm-cron.php';

require_once WCWM_VENDOR_PATH .
			DIRECTORY_SEPARATOR .
			'wc' .
			DIRECTORY_SEPARATOR .
			'iterator' .
			DIRECTORY_SEPARATOR .
			'class-wcwm-recursive-directory-iterator.php';

require_once WCWM_VENDOR_PATH .
			DIRECTORY_SEPARATOR .
			'wc' .
			DIRECTORY_SEPARATOR .
			'iterator' .
			DIRECTORY_SEPARATOR .
			'class-wcwm-recursive-iterator-iterator.php';

require_once WCWM_VENDOR_PATH .
			DIRECTORY_SEPARATOR .
			'wc' .
			DIRECTORY_SEPARATOR .
			'filter' .
			DIRECTORY_SEPARATOR .
			'class-wcwm-recursive-extension-filter.php';

require_once WCWM_VENDOR_PATH .
			DIRECTORY_SEPARATOR .
			'wc' .
			DIRECTORY_SEPARATOR .
			'filter' .
			DIRECTORY_SEPARATOR .
			'class-wcwm-recursive-exclude-filter.php';

require_once WCWM_VENDOR_PATH .
			DIRECTORY_SEPARATOR .
			'wc' .
			DIRECTORY_SEPARATOR .
			'filter' .
			DIRECTORY_SEPARATOR .
			'class-wcwm-recursive-newline-filter.php';

require_once WCWM_VENDOR_PATH .
			DIRECTORY_SEPARATOR .
			'wc' .
			DIRECTORY_SEPARATOR .
			'archiver' .
			DIRECTORY_SEPARATOR .
			'class-wcwm-archiver.php';

require_once WCWM_VENDOR_PATH .
			DIRECTORY_SEPARATOR .
			'wc' .
			DIRECTORY_SEPARATOR .
			'archiver' .
			DIRECTORY_SEPARATOR .
			'class-wcwm-compressor.php';

require_once WCWM_VENDOR_PATH .
			DIRECTORY_SEPARATOR .
			'wc' .
			DIRECTORY_SEPARATOR .
			'archiver' .
			DIRECTORY_SEPARATOR .
			'class-wcwm-extractor.php';

require_once WCWM_VENDOR_PATH .
			DIRECTORY_SEPARATOR .
			'wc' .
			DIRECTORY_SEPARATOR .
			'database' .
			DIRECTORY_SEPARATOR .
			'class-wcwm-database.php';

require_once WCWM_VENDOR_PATH .
			DIRECTORY_SEPARATOR .
			'wc' .
			DIRECTORY_SEPARATOR .
			'database' .
			DIRECTORY_SEPARATOR .
			'class-wcwm-database-mysql.php';

require_once WCWM_VENDOR_PATH .
			DIRECTORY_SEPARATOR .
			'wc' .
			DIRECTORY_SEPARATOR .
			'database' .
			DIRECTORY_SEPARATOR .
			'class-wcwm-database-mysqli.php';

require_once WCWM_VENDOR_PATH .
			DIRECTORY_SEPARATOR .
			'wc' .
			DIRECTORY_SEPARATOR .
			'database' .
			DIRECTORY_SEPARATOR .
			'class-wcwm-database-utility.php';

require_once WCWM_VENDOR_PATH .
			DIRECTORY_SEPARATOR .
			'math' .
			DIRECTORY_SEPARATOR .
			'BigInteger.php';

require_once WCWM_CONTROLLER_PATH .
			DIRECTORY_SEPARATOR .
			'class-wcwm-main-controller.php';

require_once WCWM_CONTROLLER_PATH .
			DIRECTORY_SEPARATOR .
			'class-wcwm-export-controller.php';

require_once WCWM_CONTROLLER_PATH .
			DIRECTORY_SEPARATOR .
			'class-wcwm-import-controller.php';

require_once WCWM_CONTROLLER_PATH .
			DIRECTORY_SEPARATOR .
			'class-wcwm-status-controller.php';

require_once WCWM_CONTROLLER_PATH .
			DIRECTORY_SEPARATOR .
			'class-wcwm-backups-controller.php';

require_once WCWM_CONTROLLER_PATH .
			DIRECTORY_SEPARATOR .
			'class-wcwm-updater-controller.php';

require_once WCWM_CONTROLLER_PATH .
			DIRECTORY_SEPARATOR .
			'class-wcwm-feedback-controller.php';

require_once WCWM_CONTROLLER_PATH .
			DIRECTORY_SEPARATOR .
			'class-wcwm-report-controller.php';

require_once WCWM_EXPORT_PATH .
			DIRECTORY_SEPARATOR .
			'class-wcwm-export-init.php';

require_once WCWM_EXPORT_PATH .
			DIRECTORY_SEPARATOR .
			'class-wcwm-export-compatibility.php';

require_once WCWM_EXPORT_PATH .
			DIRECTORY_SEPARATOR .
			'class-wcwm-export-archive.php';

require_once WCWM_EXPORT_PATH .
			DIRECTORY_SEPARATOR .
			'class-wcwm-export-config.php';

require_once WCWM_EXPORT_PATH .
			DIRECTORY_SEPARATOR .
			'class-wcwm-export-config-file.php';

require_once WCWM_EXPORT_PATH .
			DIRECTORY_SEPARATOR .
			'class-wcwm-export-enumerate.php';

require_once WCWM_EXPORT_PATH .
			DIRECTORY_SEPARATOR .
			'class-wcwm-export-content.php';

require_once WCWM_EXPORT_PATH .
			DIRECTORY_SEPARATOR .
			'class-wcwm-export-database.php';

require_once WCWM_EXPORT_PATH .
			DIRECTORY_SEPARATOR .
			'class-wcwm-export-database-file.php';

require_once WCWM_EXPORT_PATH .
			DIRECTORY_SEPARATOR .
			'class-wcwm-export-download.php';

require_once WCWM_EXPORT_PATH .
			DIRECTORY_SEPARATOR .
			'class-wcwm-export-clean.php';

require_once WCWM_IMPORT_PATH .
			DIRECTORY_SEPARATOR .
			'class-wcwm-import-compatibility.php';

require_once WCWM_IMPORT_PATH .
			DIRECTORY_SEPARATOR .
			'class-wcwm-import-upload.php';

require_once WCWM_IMPORT_PATH .
			DIRECTORY_SEPARATOR .
			'class-wcwm-import-validate.php';

require_once WCWM_IMPORT_PATH .
			DIRECTORY_SEPARATOR .
			'class-wcwm-import-blogs.php';

require_once WCWM_IMPORT_PATH .
			DIRECTORY_SEPARATOR .
			'class-wcwm-import-confirm.php';

require_once WCWM_IMPORT_PATH .
			DIRECTORY_SEPARATOR .
			'class-wcwm-import-enumerate.php';

require_once WCWM_IMPORT_PATH .
			DIRECTORY_SEPARATOR .
			'class-wcwm-import-content.php';

require_once WCWM_IMPORT_PATH .
			DIRECTORY_SEPARATOR .
			'class-wcwm-import-mu-plugins.php';

require_once WCWM_IMPORT_PATH .
			DIRECTORY_SEPARATOR .
			'class-wcwm-import-database.php';

require_once WCWM_IMPORT_PATH .
			DIRECTORY_SEPARATOR .
			'class-wcwm-import-done.php';

require_once WCWM_IMPORT_PATH .
			DIRECTORY_SEPARATOR .
			'class-wcwm-import-clean.php';

require_once WCWM_MODEL_PATH .
			DIRECTORY_SEPARATOR .
			'class-wcwm-deprecated.php';

require_once WCWM_MODEL_PATH .
			DIRECTORY_SEPARATOR .
			'class-wcwm-extensions.php';

require_once WCWM_MODEL_PATH .
			DIRECTORY_SEPARATOR .
			'class-wcwm-compatibility.php';

require_once WCWM_MODEL_PATH .
			DIRECTORY_SEPARATOR .
			'class-wcwm-backups.php';

require_once WCWM_MODEL_PATH .
			DIRECTORY_SEPARATOR .
			'class-wcwm-updater.php';

require_once WCWM_MODEL_PATH .
			DIRECTORY_SEPARATOR .
			'class-wcwm-feedback.php';

require_once WCWM_MODEL_PATH .
			DIRECTORY_SEPARATOR .
			'class-wcwm-report.php';

require_once WCWM_MODEL_PATH .
			DIRECTORY_SEPARATOR .
			'class-wcwm-template.php';

require_once WCWM_MODEL_PATH .
			DIRECTORY_SEPARATOR .
			'class-wcwm-status.php';

require_once WCWM_MODEL_PATH .
			DIRECTORY_SEPARATOR .
			'class-wcwm-log.php';

require_once WCWM_MODEL_PATH .
			DIRECTORY_SEPARATOR .
			'class-wcwm-message.php';

require_once WCWM_MODEL_PATH .
			DIRECTORY_SEPARATOR .
			'class-wcwm-notification.php';

require_once WCWM_MODEL_PATH .
			DIRECTORY_SEPARATOR .
			'class-wcwm-handler.php';
