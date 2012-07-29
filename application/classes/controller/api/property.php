<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Api_Property extends Controller_Api
{
	public function before()
	{
		parent::before();
		
		$this->auto_render = FALSE;
		$this->response->headers('Content-Type', 'application/json');
	}
	
	/**
	 * Get data from the Stations table
	 */
	public function action_lending()
	{
		$endpoint = $this->request->param('endpoint');
		
		switch ($endpoint)
		{
			case 'assistance' :
				try
				{
					$db = new Model_Api_Property_Lending();
					echo json_encode($db->get_records('assistance', $_GET['limit']));		
				}
				catch ( Database_Exception $e )
				{
					echo $e->getMessage();
				}
				
				break;
			
			default :
				echo 'nothing here, try assistance as an endpoint';
				break;
		}
	}
	
}	