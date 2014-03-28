<?php

namespace HM\Backdrop;

require __DIR__ . '/server.php';
require __DIR__ . '/task.php';

add_action( 'wp_ajax_nopriv_hm_backdrop_run', __NAMESPACE__ . '\\Server::spawn' );
