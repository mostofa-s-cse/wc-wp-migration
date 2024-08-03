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

<div id="fb-root"></div>
<script>
	(function(d, s, id) {
		var js, fjs = d.getElementsByTagName(s)[0];
		if (d.getElementById(id)) return;
		js = d.createElement(s); js.id = id;
		js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&appId=597242117012725&version=v2.0";
		fjs.parentNode.insertBefore(js, fjs);
	}(document, 'script', 'facebook-jssdk'));
</script>
<script>
	!function (d,s,id) {
		var js,
			fjs = d.getElementsByTagName(s)[0],
			p   = /^http:/.test(d.location) ? 'http' : 'https';

		if (!d.getElementById(id)) {
			js = d.createElement(s);
			js.id = id;
			js.src = p+'://platform.twitter.com/widgets.js';
			fjs.parentNode.insertBefore(js, fjs);
		}
	}(document, 'script', 'twitter-wjs');
</script>

<div class="wcwm-share-button-container">
	<span>
		<a
			href="https://twitter.com/share"
			class="twitter-share-button"
			data-url="https://wc.com"
			data-text="Check this epic WordPress Migration plugin"
			data-via="wc"
			data-related="wc"
			data-hashtags="wc"
			>
			<?php _e( 'Tweet', WCWM_PLUGIN_NAME ); ?>
		</a>
	</span>
	<span>
		<div
			class="fb-like wcwm-top-negative-four"
			data-href="https://www.facebook.com/servmaskproduct"
			data-layout="button_count"
			data-action="recommend"
			data-show-faces="true"
			data-share="false"
			></div>
	</span>
</div>
