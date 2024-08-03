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
					<?php _e( 'Backups', WCWM_PLUGIN_NAME ); ?>
				</h1>

				<?php include WCWM_TEMPLATES_PATH . '/common/report-problem.php'; ?>

				<form action="" method="post" id="wcwm-backups-form" class="wcwm-clear">

					<?php if ( is_readable( WCWM_BACKUPS_PATH ) && is_writable( WCWM_BACKUPS_PATH ) ) : ?>
						<?php if ( $backups ) : ?>
							<table class="wcwm-backups">
								<thead>
									<tr>
										<th class="wcwm-column-name"><?php _e( 'Name', WCWM_PLUGIN_NAME ); ?></th>
										<th class="wcwm-column-date"><?php _e( 'Date', WCWM_PLUGIN_NAME ); ?></th>
										<th class="wcwm-column-size"><?php _e( 'Size', WCWM_PLUGIN_NAME ); ?></th>
										<th class="wcwm-column-actions"></th>
									</tr>
								</thead>
								<tbody>
									<?php foreach ( $backups as $backup ) : ?>
									<tr>
										<td class="wcwm-column-name">
											<?php if ( $backup['path'] ) : ?>
												<i class="wcwm-icon-folder"></i>
												<?php echo esc_html( $backup['path'] ); ?>
												<br />
											<?php endif; ?>
											<i class="wcwm-icon-file-zip"></i>
											<?php echo esc_html( basename( $backup['filename'] ) ); ?>
										</td>
										<td class="wcwm-column-date">
											<?php echo esc_html( sprintf( __( '%s ago', WCWM_PLUGIN_NAME ), human_time_diff( $backup['mtime'] ) ) ); ?>
										</td>
										<td class="wcwm-column-size">
											<?php if ( is_null( $backup['size'] ) ) : ?>
												<?php _e( '2GB+', WCWM_PLUGIN_NAME ); ?>
											<?php else : ?>
												<?php echo size_format( $backup['size'], 2 ); ?>
											<?php endif; ?>
										</td>
										<td class="wcwm-column-actions wcwm-backup-actions">
											<a href="<?php echo wcwm_backup_url( array( 'archive' => esc_attr( $backup['filename'] ) ) ); ?>" class="wcwm-button-green wcwm-backup-download">
												<i class="wcwm-icon-arrow-down"></i>
												<span><?php _e( 'Download', WCWM_PLUGIN_NAME ); ?></span>
											</a>
											<a href="#" data-archive="<?php echo esc_attr( $backup['filename'] ); ?>" class="wcwm-button-gray wcwm-backup-restore">
												<i class="wcwm-icon-cloud-upload"></i>
												<span><?php _e( 'Restore', WCWM_PLUGIN_NAME ); ?></span>
											</a>
											<a href="#" data-archive="<?php echo esc_attr( $backup['filename'] ); ?>" class="wcwm-button-red wcwm-backup-delete">
												<i class="wcwm-icon-close"></i>
												<span><?php _e( 'Delete', WCWM_PLUGIN_NAME ); ?></span>
											</a>
										</td>
									</tr>
									<?php endforeach; ?>
								</tbody>
							</table>
						<?php endif; ?>
						<div class="wcwm-backups-create">
							<p class="wcwm-backups-empty <?php echo $backups ? 'wcwm-hide' : null; ?>">
								<?php _e( 'There are no backups available at this time, why not create a new one?', WCWM_PLUGIN_NAME ); ?>
							</p>
							<p>
								<a href="<?php echo esc_url( network_admin_url( 'admin.php?page=wcwm_export' ) ); ?>" class="wcwm-button-green">
									<i class="wcwm-icon-export"></i>
									<?php _e( 'Create backup', WCWM_PLUGIN_NAME ); ?>
								</a>
							</p>
						</div>
					<?php else : ?>
						<div class="wcwm-clear wcwm-message wcwm-red-message">
							<?php
							printf(
								__(
									'<h3>Site could not create backups!</h3>' .
									'<p>Please make sure that storage directory <strong>%s</strong> has read and write permissions.</p>',
									WCWM_PLUGIN_NAME
								),
								WCWM_STORAGE_PATH
							);
							?>
						</div>
					<?php endif; ?>

					<?php do_action( 'wcwm_backups_left_end' ); ?>

					<input type="hidden" name="wcwm_manual_restore" value="1" />

				</form>
			</div>
</div>
