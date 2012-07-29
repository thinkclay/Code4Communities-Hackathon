<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Api_Docs extends Controller
{
	public function action_index()
	{
		$sidebar = View::factory('api/overview/sidebar');
		$main = View::factory('api/overview/main');
		
		echo View::factory('api/wrapper')
			->bind('sidebar', $sidebar)
			->bind('main', $main);
	}
	
	public function action_stats()
	{
		$sidebar = View::factory('api/stats/sidebar');
		$main = View::factory('api/stats/main');
		
		echo View::factory('api/wrapper')
			->bind('sidebar', $sidebar)
			->bind('main', $main); 
	}
}
	