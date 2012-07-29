<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Api_Locations extends Controller_Api
{
	public function before()
	{
		parent::before();
		
		$this->auto_render = FALSE;
		$this->response->headers('Content-Type', 'application/json');
	}
	
	/**
	 * Get data from the Libraries table
	 */
	public function action_libraries()
	{
		try
		{
			$db = new Model_Api_Locations_Libraries();
			echo json_encode($db->get_records('libraries', $_GET['limit']));		
		}
		catch ( Database_Exception $e )
		{
			echo $e->getMessage();
		}
	}
	
	/**
	 * Get data from the Points of Interest table
	 */
	public function action_interests()
	{
		try
		{
			$db = new Model_Api_Locations_Interests();
			echo json_encode($db->get_records('interests', $_GET['limit']));		
		}
		catch ( Database_Exception $e )
		{
			echo $e->getMessage();
		}
	}
	
	/**
	 * Get data from the Stations table
	 */
	public function action_stations()
	{
		$endpoint = $this->request->param('endpoint');
		
		switch ($endpoint)
		{
			case 'police' :
				try
				{
					$db = new Model_Api_Locations_Stations();
					echo json_encode($db->get_records('police', $_GET['limit']));		
				}
				catch ( Database_Exception $e )
				{
					echo $e->getMessage();
				}
				
				break;
			
			case 'fire' :
				try
				{
					$db = new Model_Api_Locations_Stations();
					echo json_encode($db->get_records('fire', $_GET['limit']));		
				}
				catch ( Database_Exception $e )
				{
					echo $e->getMessage();
				}
				
				break;
			
			default :
				echo 'nothing here, try police or fire as an endpoint';
				break;
		}
	}
	
	/**
	 * Get data from the Parks table
	 */
	public function action_recreation()
	{
		$endpoint = $this->request->param('endpoint');
		
		switch ($endpoint)
		{
			case 'parks' :
				try
				{
					$db = new Model_Api_Locations_Recreation();
					echo json_encode($db->get_records('parks', $_GET['limit']));		
				}
				catch ( Database_Exception $e )
				{
					echo $e->getMessage();
				}
				
				break;
			
			default :
				echo 'nothing here, try parks as an endpoint';
				break;
		}
	}
	
	
}	