<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Public_Test extends Controller_Public
{

	public function before()
	{
		parent::before();
		
		$this->db = new Model_Api_Stations();
	}
}
