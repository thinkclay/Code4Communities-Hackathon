<?php defined('SYSPATH') or die('No direct script access.');

class Model_Api_Transit_Carpool extends Model_Database
{ 	
    public function get_records($endpoint, $limit)
	{
		if ( $endpoint == 'carpool' )
			return DB::select()
				->from('park_n_ride')
				->limit($limit)
				->execute()
				->as_array();
	}
}