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
?>

<div class="wcwm-container">
			<div class="wcwm-holder">
				<h1>
					<i class="wcwm-icon-publish"></i>
					<?php _e( 'Import Site', WCWM_PLUGIN_NAME ); ?>
				</h1>

				<?php include WCWM_TEMPLATES_PATH . '/common/report-problem.php'; ?>

				<form action="" method="post" id="wcwm-import-form" class="wcwm-clear" enctype="multipart/form-data">

					<p>
						<?php _e( 'Use the box below to upload a wpress file.', WCWM_PLUGIN_NAME ); ?><br />
					</p>

					<?php do_action( 'wcwm_import_left_options' ); ?>

					<?php include WCWM_TEMPLATES_PATH . '/import/import-buttons.php'; ?>

					<input type="hidden" name="wcwm_manual_import" value="1" />

				</form>

				<?php do_action( 'wcwm_import_left_end' ); ?>

			</div>
		</div>

