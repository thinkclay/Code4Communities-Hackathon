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
	
	public function action_locations()
	{
		$sidebar = View::factory('api/locations/sidebar');
		$main = View::factory('api/locations/main');
		
		echo View::factory('api/wrapper')
			->bind('sidebar', $sidebar)
			->bind('main', $main); 
	}
	
	public function action_property()
	{
		$sidebar = View::factory('api/property/sidebar');
		$main = View::factory('api/property/main');
		
		echo View::factory('api/wrapper')
			->bind('sidebar', $sidebar)
			->bind('main', $main); 
	}

	public function action_transit()
	{
		$sidebar = View::factory('api/transit/sidebar');
		$main = View::factory('api/transit/main');
		
		echo View::factory('api/wrapper')
			->bind('sidebar', $sidebar)
			->bind('main', $main); 
	}
}
	