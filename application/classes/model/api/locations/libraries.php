<?php defined('SYSPATH') or die('No direct script access.');

class Model_Api_Locations_Libraries extends Model_Database
{ 	
    public function get_records($endpoint, $limit)
	{
		return DB::select()
			->from('libraries')
			->limit($limit)
			->execute()
			->as_array();
	}
}