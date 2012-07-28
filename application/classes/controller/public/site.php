<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Public_Site extends Controller_Public
{

	public function action_index()
	{
		$this->template->id = 'home';
		$this->template->main->content = 'main content';
		$this->template->footer->content = 'footer content';
		
		//require DOCROOT.'old/index.php';
		
		/*
		$this->template->scripts[] = 'http://maps.googleapis.com/maps/api/js?libraries=geometry&sensor=false';
		$this->template->scripts[] = 'resources/scripts/jquery/gmap3.styles.js';
		$this->template->scripts[] = 'resources/scripts/jquery/gmap3.js';
		$this->template->scripts[] = 'resources/scripts/jquery/gmap3.custom.js';
		$this->template->id = 'home';
		$this->template->main->content = View::factory('public/site/home');
		$this->template->footer->content = View::factory('public/site/home-footer');
		*/
	}
	
	/**
	 * Control which registration to send the user to
	 *
	 * @param	string	$role	accepts a a role type	
	 * @return 	void
	 */
    public function action_login()
    {
    	Request::factory()->redirect('/account/login');
    }	
	
	/**
	 * Control which registraion to send the user to
	 *
	 * @param	string	$role	accepts a a role type	
	 * @return 	void
	 */
    public function action_register($role)
    {
    	Request::factory()->redirect('/account/register/'.$role);
	}
	

}
