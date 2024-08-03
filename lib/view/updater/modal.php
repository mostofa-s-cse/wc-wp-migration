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

<div id="wcwm-modal-dialog-<?php echo esc_attr( $modal ); ?>" class="wcwm-modal-dialog">
	<div class="wcwm-modal-container">
		<h2><?php _e( 'Enter your Purchase ID', WCWM_PLUGIN_NAME ); ?></h2>
		<p><?php _e( 'To update your plugin/extension to the latest version, please fill your Purchase ID below.', WCWM_PLUGIN_NAME ); ?></p>
		<p class="wcwm-modal-error"></p>
		<p>
			<input type="text" class="wcwm-purchase-id" placeholder="<?php _e( 'Purchase ID', WCWM_PLUGIN_NAME ); ?>" />
			<input type="hidden" class="wcwm-update-link" value="<?php echo esc_url( $url ); ?>" />
		</p>
		<p>
			<?php _e( "Don't have a Purchase ID? You can find your Purchase ID", WCWM_PLUGIN_NAME ); ?>
			<a href="https://wc.com/lost-purchase" target="_blank" class="wcwm-help-link"><?php _e( 'here', WCWM_PLUGIN_NAME ); ?></a>
		</p>
		<p class="wcwm-modal-buttons submitbox">
			<button type="button" class="wcwm-purchase-add wcwm-button-green">
				<?php _e( 'Save', WCWM_PLUGIN_NAME ); ?>
			</button>
			<a href="#" class="submitdelete wcwm-purchase-discard"><?php _e( 'Discard', WCWM_PLUGIN_NAME ); ?></a>
		</p>
	</div>
</div>

<span id="wcwm-update-section-<?php echo esc_attr( $modal ); ?>">
	<i class="wcwm-icon-update"></i>
	<?php _e( 'There is an update available. To update, you must enter your', WCWM_PLUGIN_NAME ); ?>
	<a href="#wcwm-modal-dialog-<?php echo esc_attr( $modal ); ?>"><?php _e( 'Purchase ID', WCWM_PLUGIN_NAME ); ?></a>.
</span>
