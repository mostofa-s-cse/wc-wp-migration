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

<div class="wcwm-report-problem">
	<button type="button" id="wcwm-report-problem-button" class="wcwm-button-red">
		<i class="wcwm-icon-notification"></i>
		<?php _e( 'Report issue', WCWM_PLUGIN_NAME ); ?>
	</button>
	<div class="wcwm-report-problem-dialog">
		<div class="wcwm-field">
			<input placeholder="<?php _e( 'Enter your email address..', WCWM_PLUGIN_NAME ); ?>" type="text" id="wcwm-report-email" class="wcwm-report-email" />
		</div>
		<div class="wcwm-field">
			<textarea rows="3" id="wcwm-report-message" class="wcwm-report-message" placeholder="<?php _e( 'Please describe your problem here..', WCWM_PLUGIN_NAME ); ?>"></textarea>
		</div>
		<div class="wcwm-field wcwm-report-terms-segment">
			<label for="wcwm-report-terms">
				<input type="checkbox" class="wcwm-report-terms" id="wcwm-report-terms" />
				<?php _e( 'I agree that by filling in the contact form with my data, I authorize WC WP Migration to use my <strong>email</strong> to reply to my requests for information. <a href="https://www.iubenda.com/privacy-policy/946881" target="_blank">Privacy policy</a>', WCWM_PLUGIN_NAME ); ?>
			</label>
		</div>
		<div class="wcwm-field">
			<div class="wcwm-buttons">
				<a href="#" id="wcwm-report-cancel" class="wcwm-report-cancel"><?php _e( 'Cancel', WCWM_PLUGIN_NAME ); ?></a>
				<button type="submit" id="wcwm-report-submit" class="wcwm-button-blue wcwm-form-submit">
					<i class="wcwm-icon-paperplane"></i>
					<?php _e( 'Send', WCWM_PLUGIN_NAME ); ?>
				</button>
				<span class="spinner"></span>
				<div class="wcwm-clear"></div>
			</div>
		</div>
	</div>
</div>
