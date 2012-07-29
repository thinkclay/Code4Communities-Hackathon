<?php defined('SYSPATH') or die('No direct script access.');

class Model_Api_Stats_Crime extends Model_Database
{ 	
    public function get_records($endpoint, $limit)
	{
		return DB::select()
			->from('crime')
			->limit($limit)
			->execute()
			->as_array();
	}
}