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

<div class="wcwm-feedback">
	<ul class="wcwm-feedback-types">
		<li>
			<input type="radio" class="wcwm-flat-radio-button wcwm-feedback-type" id="wcwm-feedback-type-1" name="wcwm_feedback_type" value="review" />
			<a id="wcwm-feedback-type-link-1" href="https://wordpress.org/support/view/plugin-reviews/wc-wp-migration?rate=5#postform" target="_blank">
				<i></i>
				<span><?php _e( 'I would like to review this plugin', WCWM_PLUGIN_NAME ); ?></span>
			</a>
		</li>
		<li>
			<input type="radio" class="wcwm-flat-radio-button wcwm-feedback-type" id="wcwm-feedback-type-2" name="wcwm_feedback_type" value="suggestions" />
			<a id="wcwm-feedback-type-link-2" href="https://feedback.wp-migration.com" target="_blank">
				<i></i>
				<span><?php _e( 'I have ideas to improve this plugin', WCWM_PLUGIN_NAME ); ?></span>
			</a>
		</li>
		<li>
			<input type="radio" class="wcwm-flat-radio-button wcwm-feedback-type" id="wcwm-feedback-type-3" name="wcwm_feedback_type" value="help-needed" />
			<label for="wcwm-feedback-type-3">
				<i></i>
				<span><?php _e( 'I need help with this plugin', WCWM_PLUGIN_NAME ); ?></span>
			</label>
		</li>
	</ul>

	<div class="wcwm-feedback-form">
		<div class="wcwm-field">
			<input placeholder="<?php _e( 'Enter your email address..', WCWM_PLUGIN_NAME ); ?>" type="text" id="wcwm-feedback-email" class="wcwm-feedback-email" />
		</div>
		<div class="wcwm-field">
			<textarea rows="3" id="wcwm-feedback-message" class="wcwm-feedback-message" placeholder="<?php _e( 'Leave plugin developers any feedback here..', WCWM_PLUGIN_NAME ); ?>"></textarea>
		</div>
		<div class="wcwm-field wcwm-feedback-terms-segment">
			<label for="wcwm-feedback-terms">
				<input type="checkbox" class="wcwm-feedback-terms" id="wcwm-feedback-terms" />
				<?php _e( 'I agree that by filling in the contact form with my data, I authorize WC WP Migration to use my <strong>email</strong> to reply to my requests for information. <a href="https://www.iubenda.com/privacy-policy/946881" target="_blank">Privacy policy</a>', WCWM_PLUGIN_NAME ); ?>
			</label>
		</div>
		<div class="wcwm-field">
			<div class="wcwm-buttons">
				<a class="wcwm-feedback-cancel" id="wcwm-feedback-cancel" href="#"><?php _e( 'Cancel', WCWM_PLUGIN_NAME ); ?></a>
				<button type="submit" id="wcwm-feedback-submit" class="wcwm-button-blue wcwm-form-submit">
					<i class="wcwm-icon-paperplane"></i>
					<?php _e( 'Send', WCWM_PLUGIN_NAME ); ?>
				</button>
				<span class="spinner"></span>
				<div class="wcwm-clear"></div>
			</div>
		</div>
	</div>
</div>
