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

class Wcwm_Feedback {

	/**
	 * Submit customer feedback to wc.com
	 *
	 * @param  string  $type    Feedback type
	 * @param  string  $email   User e-mail
	 * @param  string  $message User message
	 * @param  integer $terms   User accept terms
	 *
	 * @return array
	 */
	public function add( $type, $email, $message, $terms ) {
		$errors = array();

		// Submit feedback to WC
		if ( empty( $type ) ) {
			$errors[] = __( 'Feedback type is not valid.', WCWM_PLUGIN_NAME );
		} elseif ( ! filter_var( $email, FILTER_VALIDATE_EMAIL ) ) {
			$errors[] = __( 'Your email is not valid.', WCWM_PLUGIN_NAME );
		} elseif ( empty( $message ) ) {
			$errors[] = __( 'Please enter comments in the text area.', WCWM_PLUGIN_NAME );
		} elseif ( empty( $terms ) ) {
			$errors[] = __( 'Please accept feedback term conditions.', WCWM_PLUGIN_NAME );
		} else {
			$response = wp_remote_post(
				WCWM_FEEDBACK_URL,
				array(
					'timeout' => 15,
					'body'    => array(
						'type'    => $type,
						'email'   => $email,
						'message' => $message,
					),
				)
			);

			if ( is_wp_error( $response ) ) {
				$errors[] = sprintf( __( 'Something went wrong: %s', WCWM_PLUGIN_NAME ), $response->get_error_message() );
			}
		}

		return $errors;
	}
}
