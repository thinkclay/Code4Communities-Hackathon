<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Api extends Controller
{
	public function before()
	{
		if ( Api::factory($_GET) == 'empty' )
		{
			header(':', true, '403');
			die('you need to pass an API token');
		}
		
		if ( Api::factory($_GET) == 'invalid' )
		{
			header(':', true, '403');
			die('your API token is invalid');
		}
		
		if ( isset($_GET['limit']) )
		{
			if ( ! is_numeric( $_GET['limit'] ) )
			{
				header(':', true, '403');
				die('your limit parameter was not of type INT');
			}
			else 
			{
				$_GET['limit'] = (int) $_GET['limit'];
			}
		}
		else 
		{
			$_GET['limit'] = 25;
		}
	}
}