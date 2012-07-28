<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Offer extends Controller
{
	public function action_index()
	{
		require DOCROOT.'old/config.php';

		if ( ! empty($_POST) )
		{
			try
			{
				SR_Offer::add($_POST);
				echo 'success';
			}
			catch ( Exception $e )
			{
				echo $e->getMessage();
			}
		}
		else
		{
			echo 'invalid';
		}

	}

}
