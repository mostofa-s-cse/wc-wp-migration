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
					<i class="wcwm-icon-export"></i>
					<?php _e( 'Export Site', WCWM_PLUGIN_NAME ); ?>
				</h1>

				<?php include WCWM_TEMPLATES_PATH . '/common/report-problem.php'; ?>

				<form action="" method="post" id="wcwm-export-form" class="wcwm-clear">

					<?php include WCWM_TEMPLATES_PATH . '/export/find-replace.php'; ?>

					<?php do_action( 'wcwm_export_left_options' ); ?>

					<?php include WCWM_TEMPLATES_PATH . '/export/advanced-settings.php'; ?>

					<?php include WCWM_TEMPLATES_PATH . '/export/export-buttons.php'; ?>

					<input type="hidden" name="wcwm_manual_export" value="1" />

				</form>

				<?php do_action( 'wcwm_export_left_end' ); ?>

			</div>
</div>
