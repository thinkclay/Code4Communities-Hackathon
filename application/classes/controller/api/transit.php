<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Api_Transit extends Controller_Api
{
	public function before()
	{
		parent::before();
		
		$this->auto_render = FALSE;
		$this->response->headers('Content-Type', 'application/json');
	}
	
	/**
	 * Get data from the Bus Stops table
	 */
	public function action_bus()
	{
		try
		{
			$db = new Model_Api_Transit_Bus();
			echo json_encode($db->get_records('bus', $_GET['limit']));		
		}
		catch ( Database_Exception $e )
		{
			echo $e->getMessage();
		}
	}
	
	/**
	 * Get data from the Lightrail table
	 */
	public function action_lightrail()
	{
		try
		{
			$db = new Model_Api_Transit_Lightrail();
			echo json_encode($db->get_records('lightrail', $_GET['limit']));		
		}
		catch ( Database_Exception $e )
		{
			echo $e->getMessage();
		}
	}
	
	/**
	 * Get data from the Carpool table
	 */
	public function action_carpool()
	{
		try
		{
			$db = new Model_Api_Transit_Carpool();
			echo json_encode($db->get_records('carpool', $_GET['limit']));		
		}
		catch ( Database_Exception $e )
		{
			echo $e->getMessage();
		}
	}
	
	
}	