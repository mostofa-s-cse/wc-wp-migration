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

<div class="error">
	<p>
		<?php
		_e(
			'WordPress Multisite is supported via our All in One WP Migration Multisite Extension. ' .
			'You can get a copy of it here',
			WCWM_PLUGIN_NAME
		);
		?>
		<a href="https://wc.com/products/multisite-extension" target="_blank" class="wcwm-label">
			<i class="wcwm-icon-notification"></i>
			<?php _e( 'Get multisite', WCWM_PLUGIN_NAME ); ?>
		</a>
	</p>
</div>
