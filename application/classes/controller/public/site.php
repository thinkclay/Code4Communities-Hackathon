<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Public_Site extends Controller_Public
{

	public function action_index()
	{
		$this->template->id = 'home';
		
		$this->template->scripts[] = 'http://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js';
		$this->template->scripts[] = 'https://ajax.googleapis.com/ajax/libs/jqueryui/1.8.21/jquery-ui.min.js';
		$this->template->scripts[] = 'http://maps.googleapis.com/maps/api/js?key=AIzaSyCgDq58XR1uUISSdIwoWKjZqNnxUGrIJO0&libraries=geometry&sensor=true';
		$this->template->scripts[] = 'media/js/gmap3.js';
		$this->template->scripts[] = 'media/js/libs/modernizr-2.5.3.min.js';
		$this->template->scripts[] = 'media/js/libs/jquery.form.js';
		$this->template->scripts[] = 'media/js/libs/jquery.reveal.js';
		$this->template->scripts[] = 'media/js/plugins.js';
		$this->template->scripts[] = 'media/js/script.js';
		$this->template->scripts[] = 'media/js/data.js';
		
		$this->template->less[] = 'media/css/reveal.less';
		$this->template->less[] = 'media/css/stylesheet.less';
		
		$this->template->less[] = 'media/css/map.less';
		
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
