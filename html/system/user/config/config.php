<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

$config['site_license_key'] = '';
// ExpressionEngine Config Items
// Find more configs and overrides at
// https://docs.expressionengine.com/latest/general/system-configuration-overrides.html

$config['app_version'] = '7.2.6';
$config['encryption_key'] = '745148f6cde8414b6cd4d262719d09f4c595cbe5';
$config['session_crypt_key'] = 'cd51755e929081c9dd5f359338c5aa2dcd377154';
$config['database'] = array(
	'expressionengine' => array(
		'hostname' => 'mysql',
		'database' => 'agency',
		'username' => 'root',
		'password' => '123password123',
		'dbprefix' => 'exp_',
		'char_set' => 'utf8mb4',
		'dbcollat' => 'utf8mb4_unicode_ci',
		'port'     => ''
	),
);
$config['show_ee_news'] = 'y';

// EOF