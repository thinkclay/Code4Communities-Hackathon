<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Api_Stats extends Controller_Api
{
	public function before()
	{
		parent::before();
		
		$this->auto_render = FALSE;
		$this->response->headers('Content-Type', 'application/json');
	}
	
	/**
	 * Get data from the Crime table
	 */
	public function action_crime()
	{
		try
		{
			$db = new Model_Api_Stats_Crime();
			echo json_encode($db->get_records('offender', $_GET['limit']));		
		}
		catch ( Database_Exception $e )
		{
			echo $e->getMessage();
		}
	}
	
	
	public function action_census()
	{
		$endpoint = $this->request->param('endpoint');
		
		switch ($endpoint)
		{
			case 'demographics' :
				try
				{
					$db = new Model_Api_Stats_Census();
					echo json_encode($db->get_records($endpoint, $_GET['limit']));		
				}
				catch ( Database_Exception $e )
				{
					echo $e->getMessage();
				}
				
				break;
		}
		
	}
}	