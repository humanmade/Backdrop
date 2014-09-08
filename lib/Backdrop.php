<?php

namespace HM\Backdrop;

class Backdrop {
	public static function init() {
		\add_action( 'wp_ajax_nopriv_hm_backdrop_run', __NAMESPACE__ . '\\Server::spawn' );
	}
}
