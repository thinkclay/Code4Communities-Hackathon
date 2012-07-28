<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Public extends Controller {

	public function action_index()
	{
		require DOCROOT.'old/index.php';
	}
}
