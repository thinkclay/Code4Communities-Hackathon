<?php defined('SYSPATH') or die('No direct script access.');

class Model_Api_Property_Lending extends Model_Database
{ 	
    public function get_records($endpoint, $limit)
	{
		if ( $endpoint == 'assistance' )
			return DB::select()
				->from('mortgage_assistance')
				->limit($limit)
				->execute()
				->as_array();
	}
}