<?php defined('SYSPATH') or die('No direct script access.');

class Model_Api_Transit_Bus extends Model_Database
{ 	
    public function get_records($endpoint, $limit)
	{
		if ( $endpoint == 'bus' )
			return DB::select()
				->from('bus_stops')
				->limit($limit)
				->execute()
				->as_array();
	}
}