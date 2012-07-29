<?php defined('SYSPATH') or die('No direct script access.');

class Model_Api_Stats_Census extends Model_Database
{ 	
    public function get_records($endpoint, $limit)
	{
		return DB::select()
			->from('census_demographics')
			->limit($limit)
			->execute()
			->as_array();
	}
}