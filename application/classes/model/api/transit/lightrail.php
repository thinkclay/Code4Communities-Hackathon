<?php defined('SYSPATH') or die('No direct script access.');

class Model_Api_Transit_Lightrail extends Model_Database
{ 	
    public function get_records($endpoint, $limit)
	{
		if ( $endpoint == 'lightrail' )
			return DB::select()
				->from('lightrail_stations')
				->limit($limit)
				->execute()
				->as_array();
	}
}