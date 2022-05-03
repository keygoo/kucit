<?php

if (file_exists(dirname( __FILE__, 2).'/vendor/autoload.php')) {
	require_once dirname( __FILE__, 2 ).'/vendor/autoload.php';
}

if (file_exists(dirname( __FILE__, 2 ).'/inc/Core.php')) {
	require dirname( __FILE__, 2 ).'/inc/Core.php';
}

Flight::start();