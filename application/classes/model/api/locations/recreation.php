<?php defined('SYSPATH') or die('No direct script access.');

class Model_Api_Locations_Recreation extends Model_Database
{ 	
    public function get_records($endpoint, $limit)
	{
		if ( $endpoint == 'parks' )
			return DB::select()
				->from('parks')
				->limit($limit)
				->execute()
				->as_array();
	}
}