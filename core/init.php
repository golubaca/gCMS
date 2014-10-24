<?php

session_start();

$GLOBALS['config'] = array(
	'mysql' 	=> array(
		'host'		=> '127.0.0.1',
		'username'	=> 'root',
		'password'	=> '',
		'db'		=> 'gCMS'	
		),
	'remember' 	=> array(
		'cookie_name'	=> 'gCMS_hash',
		'cookie_expiry' => 604800
		),
	'session' 	=> array(
		'session_name'	=> 'gCMS_session'
		),
	'theme'		=> array(
		'default'			=> 'sample'
		)
	);


spl_autoload_register(function($class){
	require_once 'classes/' . $class . '.php';
});

require_once 'functions/sanitize.php';
require_once 'functions/SiteFunctions.php';