<?php defined('SYSPATH') or die('No direct script access.');

class Model_Api_Locations_Stations extends Model_Database
{ 	
    public function get_records($endpoint, $limit)
	{
		if ( $endpoint == 'police' )
			return DB::select()
				->from('police_stations')
				->limit($limit)
				->execute()
				->as_array();
		
		if ( $endpoint == 'fire' )
			return DB::select()
				->from('fire_stations')
				->limit($limit)
				->execute()
				->as_array();
	}
}