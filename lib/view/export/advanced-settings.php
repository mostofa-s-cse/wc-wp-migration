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

<div class="wcwm-field-set">
	<div class="wcwm-accordion wcwm-expandable">
		<h4>
			<i class="wcwm-icon-arrow-right"></i>
			<?php _e( 'Advanced options', WCWM_PLUGIN_NAME ); ?>
			<small><?php _e( '(click to expand)', WCWM_PLUGIN_NAME ); ?></small>
		</h4>
		<ul>
			<li>
				<label for="wcwm-no-spam-comments">
					<input type="checkbox" id="wcwm-no-spam-comments" name="options[no_spam_comments]" />
					<?php _e( 'Do <strong>not</strong> export spam comments', WCWM_PLUGIN_NAME ); ?>
				</label>
			</li>
			<li>
				<label for="wcwm-no-post-revisions">
					<input type="checkbox" id="wcwm-no-post-revisions" name="options[no_post_revisions]" />
					<?php _e( 'Do <strong>not</strong> export post revisions', WCWM_PLUGIN_NAME ); ?>
				</label>
			</li>
			<li>
				<label for="wcwm-no-media">
					<input type="checkbox" id="wcwm-no-media" name="options[no_media]" />
					<?php _e( 'Do <strong>not</strong> export media library (files)', WCWM_PLUGIN_NAME ); ?>
				</label>
			</li>
			<li>
				<label for="wcwm-no-themes">
					<input type="checkbox" id="wcwm-no-themes" name="options[no_themes]" />
					<?php _e( 'Do <strong>not</strong> export themes (files)', WCWM_PLUGIN_NAME ); ?>
				</label>
			</li>

			<?php if ( apply_filters( 'wcwm_max_file_size', WCWM_MAX_FILE_SIZE ) === 0 ) : ?>
				<li>
					<label for="wcwm-no-inactive-themes">
						<input type="checkbox" id="wcwm-no-inactive-themes" name="options[no_inactive_themes]" />
						<?php _e( 'Do <strong>not</strong> export inactive themes (files)', WCWM_PLUGIN_NAME ); ?>
						<small style="color: red;"><?php _e( 'new', WCWM_PLUGIN_NAME ); ?></small>
					</label>
				</li>
			<?php endif; ?>

			<li>
				<label for="wcwm-no-muplugins">
					<input type="checkbox" id="wcwm-no-muplugins" name="options[no_muplugins]" />
					<?php _e( 'Do <strong>not</strong> export must-use plugins (files)', WCWM_PLUGIN_NAME ); ?>
				</label>
			</li>

			<li>
				<label for="wcwm-no-plugins">
					<input type="checkbox" id="wcwm-no-plugins" name="options[no_plugins]" />
					<?php _e( 'Do <strong>not</strong> export plugins (files)', WCWM_PLUGIN_NAME ); ?>
				</label>
			</li>

			<?php if ( apply_filters( 'wcwm_max_file_size', WCWM_MAX_FILE_SIZE ) === 0 ) : ?>
				<li>
					<label for="wcwm-no-inactive-plugins">
						<input type="checkbox" id="wcwm-no-inactive-plugins" name="options[no_inactive_plugins]" />
						<?php _e( 'Do <strong>not</strong> export inactive plugins (files)', WCWM_PLUGIN_NAME ); ?>
						<small style="color: red;"><?php _e( 'new', WCWM_PLUGIN_NAME ); ?></small>
					</label>
				</li>
				<li>
					<label for="wcwm-no-cache">
						<input type="checkbox" id="wcwm-no-cache" name="options[no_cache]" />
						<?php _e( 'Do <strong>not</strong> export cache (files)', WCWM_PLUGIN_NAME ); ?>
						<small style="color: red;"><?php _e( 'new', WCWM_PLUGIN_NAME ); ?></small>
					</label>
				</li>
			<?php endif; ?>

			<li>
				<label for="wcwm-no-database">
					<input type="checkbox" id="wcwm-no-database" name="options[no_database]" />
					<?php _e( 'Do <strong>not</strong> export database (sql)', WCWM_PLUGIN_NAME ); ?>
				</label>
			</li>
			<li>
				<label for="wcwm-no-email-replace">
					<input type="checkbox" id="wcwm-no-email-replace" name="options[no_email_replace]" />
					<?php _e( 'Do <strong>not</strong> replace email domain (sql)', WCWM_PLUGIN_NAME ); ?>
				</label>
			</li>

			<?php do_action( 'wcwm_export_advanced_settings' ); ?>
		</ul>
	</div>
</div>
