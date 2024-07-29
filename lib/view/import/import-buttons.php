<?php
/**
 * Copyright (C) 2014-2018 ServMask Inc.
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
 * ███████╗███████╗██████╗ ██╗   ██╗███╗   ███╗ █████╗ ███████╗██╗  ██╗
 * ██╔════╝██╔════╝██╔══██╗██║   ██║████╗ ████║██╔══██╗██╔════╝██║ ██╔╝
 * ███████╗█████╗  ██████╔╝██║   ██║██╔████╔██║███████║███████╗█████╔╝
 * ╚════██║██╔══╝  ██╔══██╗╚██╗ ██╔╝██║╚██╔╝██║██╔══██║╚════██║██╔═██╗
 * ███████║███████╗██║  ██║ ╚████╔╝ ██║ ╚═╝ ██║██║  ██║███████║██║  ██╗
 * ╚══════╝╚══════╝╚═╝  ╚═╝  ╚═══╝  ╚═╝     ╚═╝╚═╝  ╚═╝╚══════╝╚═╝  ╚═╝
 */
?>

<?php if ( is_readable( AI1WM_STORAGE_PATH ) && is_writable( AI1WM_STORAGE_PATH ) ) : ?>
	<div class="ai1wm-import-messages"></div>

	<div class="ai1wm-import-form">
		<div class="hide-if-no-js">
			<div class="ai1wm-drag-drop-area" id="ai1wm-drag-drop-area">
				<div id="ai1wm-import-init">
					<p>
						<i class="ai1wm-icon-cloud-upload"></i><br />
						<?php _e( 'Drag & Drop to upload', AI1WM_PLUGIN_NAME ); ?>
					</p>
                    <a href="#" class="ai1wm-button-green" id="ai1wm-import-file" style="pointer-events: all">
                        <i class="ai1wm-icon-publish"></i>
                        <?php _e( 'Import Site', AI1WM_PLUGIN_NAME ); ?>
                        <input type="file" id="ai1wm-select-file" />
                    </a>
				</div>
			</div>
		</div>
	</div>

	<p>
		<?php _e( 'Maximum upload file size:' ); ?>
		<?php if ( ( $max_file_size = apply_filters( 'ai1wm_max_file_size', AI1WM_MAX_FILE_SIZE ) ) ) : ?>
			<span class="ai1wm-max-upload-size"><?php echo size_format( $max_file_size ); ?></span>
		<?php else : ?>
			<span class="ai1wm-max-upload-size"><?php _e( 'Unlimited', AI1WM_PLUGIN_NAME ); ?></span>
		<?php endif; ?>
	</p>
<?php else : ?>
	<div class="ai1wm-message ai1wm-red-message">
		<?php
		printf(
			__(
				'<h3>Site could not be imported!</h3>' .
				'<p>Please make sure that storage directory <strong>%s</strong> has read and write permissions.</p>',
				AI1WM_PLUGIN_NAME
			),
			AI1WM_STORAGE_PATH
		);
		?>
	</div>
<?php endif; ?>
