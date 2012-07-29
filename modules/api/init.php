<?php defined('SYSPATH') or die('No direct script access.');

Route::set('api', 'api(/<controller>(/<action>(/<endpoint>)))')
	->defaults(array(
		'directory'  => 'api',
		'controller' => 'docs',
		'action'     => 'index',
	));
