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

<?php if ( is_readable( WCWM_STORAGE_PATH ) && is_writable( WCWM_STORAGE_PATH ) ) : ?>
	<div class="wcwm-import-messages"></div>

	<div class="wcwm-import-form">
		<div class="hide-if-no-js">
			<div class="wcwm-drag-drop-area" id="wcwm-drag-drop-area">
				<div id="wcwm-import-init">
					<p>
						<i class="wcwm-icon-cloud-upload"></i><br />
						<?php _e( 'Drag & Drop to upload', WCWM_PLUGIN_NAME ); ?>
					</p>
                    <a href="#" class="wcwm-button-green" id="wcwm-import-file" style="pointer-events: all">
                        <i class="wcwm-icon-publish"></i>
                        <?php _e( 'Import Site', WCWM_PLUGIN_NAME ); ?>
                        <input type="file" id="wcwm-select-file" />
                    </a>
				</div>
			</div>
		</div>
	</div>

	<p>
		<?php _e( 'Maximum upload file size:' ); ?>
		<?php if ( ( $max_file_size = apply_filters( 'wcwm_max_file_size', WCWM_MAX_FILE_SIZE ) ) ) : ?>
			<span class="wcwm-max-upload-size"><?php echo size_format( $max_file_size ); ?></span>
		<?php else : ?>
			<span class="wcwm-max-upload-size"><?php _e( 'Unlimited', WCWM_PLUGIN_NAME ); ?></span>
		<?php endif; ?>
	</p>
<?php else : ?>
	<div class="wcwm-message wcwm-red-message">
		<?php
		printf(
			__(
				'<h3>Site could not be imported!</h3>' .
				'<p>Please make sure that storage directory <strong>%s</strong> has read and write permissions.</p>',
				WCWM_PLUGIN_NAME
			),
			WCWM_STORAGE_PATH
		);
		?>
	</div>
<?php endif; ?>
