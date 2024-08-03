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

<ul id="wcwm-queries">
	<li class="wcwm-query wcwm-expandable">
		<p>
			<span>
				<strong><?php _e( 'Find', WCWM_PLUGIN_NAME ); ?></strong>
				<small class="wcwm-query-find-text wcwm-tooltip" title="Search the database for this text"><?php echo esc_html( __( '<text>', WCWM_PLUGIN_NAME ) ); ?></small>
				<strong><?php _e( 'Replace with', WCWM_PLUGIN_NAME ); ?></strong>
				<small class="wcwm-query-replace-text wcwm-tooltip" title="Replace the database with this text"><?php echo esc_html( __( '<another-text>', WCWM_PLUGIN_NAME ) ); ?></small>
				<strong><?php _e( 'in the database', WCWM_PLUGIN_NAME ); ?></strong>
			</span>
			<span class="wcwm-query-arrow wcwm-icon-chevron-right"></span>
		</p>
		<div>
			<input class="wcwm-query-find-input" type="text" placeholder="<?php _e( 'Find', WCWM_PLUGIN_NAME ); ?>" name="options[replace][old_value][]" />
			<input class="wcwm-query-replace-input" type="text" placeholder="<?php _e( 'Replace with', WCWM_PLUGIN_NAME ); ?>" name="options[replace][new_value][]" />
		</div>
	</li>
</ul>

<button type="button" class="wcwm-button-gray" id="wcwm-add-new-replace-button">
	<i class="wcwm-icon-plus2"></i>
	<?php _e( 'Add', WCWM_PLUGIN_NAME ); ?>
</button>
