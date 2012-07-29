<?php defined('SYSPATH') or die('No direct script access.'); 

/**
 * Public - wrapper for the public pseudo namespace
 *
 * @package		Annex
 * @category	Public
 * @author		Clay McIlrath
 */
abstract class Controller_Public extends Controller_Template
{
	public $template = '../themes/default/views/wrapper';
	
	public static $user = false;
		
	public function before()
	{
	    parent::before();
		
	    static::$user = A2::instance()->get_user();
        
		if ($this->auto_render)
		{
			// $dir = Request::$current->directory();
			// $controller = Request::$current->controller();
			// $action = Request::$current->action();
// 			
			// $this->template->classes = array($dir, $controller, $action);
// 			
			// $this->template->less = array();
			// $this->template->styles =  array();
			$this->template->scripts = array();
			
			// Load our default wrappers to the view, but do it on before so that the controller->action can override
			$this->template->bind_global('user', self::$user);
			$this->template->header = Theme::view('default/views/container/header');
			$this->template->main = Theme::view('default/views/container/main');
			$this->template->footer = Theme::view('default/views/container/footer');
		}
	}
	
	public function after()
	{
		parent::after();
	}
}