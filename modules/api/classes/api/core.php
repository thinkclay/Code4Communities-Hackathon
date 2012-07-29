<?php defined('SYSPATH') or die('No direct script access.');

/**
 * Api
 * 
 * @package	Api
 * @author	Clay McIlrath
 */
class Api_Core
{	
	/**
	 * Multi-dimentional data array that gets sent to the view
	 *
	 * @var array
	 */
	public $args;
	
	/**
	 * The user id used throughout this class
	 *
	 * @var string
	 */
	protected $_token;
	
	/** 
	 * Constructor - set the variables for object scope
	 */
	public function __construct($token)
	{
		$this->_token = $token;
	}
	
	/**
	 * Factory - Returns a new Filedrop Object
	 * 
	 * @static
	 * @param	mixed	$uid	user id
	 * @return	obj		Filedrop
	 */
	public static function factory($params = null)
    {
    	if ( isset($params['token']) )
		{
			if ( strtolower($params['token']) !== '287475de3e36adb61c1a3efc124e906ab0abae153a0daa157fa538cdb1cd90ca' )
			{
				return 'invalid';	
			}			
			else 
			{
	        	return new Api($params['token']);
			}
		}
		else
		{ 
			return 'empty';
		}
    }
	
	/**
	 * Create a new folder in the user object as well as a physical folder
	 *
	 * @param	str		$dir	absolute server path
	 * @param	str		$name	file name
	 * @return	bool
	 */
	public function create_folder($name = null, $path = null)
	{
		$path = ($path == null) ? $this->_path : realpath($path);
		$name = ($name == null) ? 'untitled' : trim($name);
		$id = (string) new MongoId();
		$folder = $path.'/'.$id;
		
		$mango_file = Mango::factory('mango_file', array(
			'directory'	=> $path,
			'hash'		=> $id,
			'name'		=> $name,
			'time'		=> time()
		)); 
		
		try
		{
			$mango_file->check(); // check that the message conforms to the mango model
		}
		catch (Mango_Validation_Exception $e)
		{
			$this->errors = $e->array->errors('file');
			return $this;
		}
		
		$the_user = Mango::factory('mango_user', array('_id' => $this->_uid))->load();
		$the_user->mango_filedrop[$id] = $mango_file; // set a new folder in the user's object
		$the_user->update();
		
		if ( ! is_dir($folder))
		{
			try
			{
				// Create the directory
				mkdir($folder, 0755, TRUE);

				// Set permissions (must be manually set to fix umask issues)
				chmod($folder, 0755);
			}
			catch (Exception $e)
			{
				throw new Filedrop_Exception('Could not create directory :folder',
					array(':folder' => Debug::path($folder)));
			}
		}
		
		if ( ! is_writable($folder))
		{
			throw new Filedrop_Exception('Directory :folder is not writable',
				array(':folder' => Debug::path($folder)));
		}
		
		return true;
	}

	/**
	 * Get Folders that the current user has access to
	 *
	 * @param	str		$folder_id	folder id 
	 * @param	bool	$as_array
	 * @return	obj		Filedrop
	 */
	public function get_folders($folder_id = false)
	{		
		if ($folder_id)
		{
			$this->data = Mango::factory('mango_user', array('_id' => $this->_uid))
				->load(1, null, null, array('mango_filedrop.'.$folder_id => 1), array())
				->as_array(true);
				
			$this->get_files($folder_id);
		}
		// otherwise, we're probably looking for a list of all folders
		else 
		{
			$the_folders = Mango::factory('mango_user', array('_id' => $this->_uid))->load();
			$this->data = $the_folders->mango_filedrop;	
		}
		return $this;
	}
	
	/**
	 * Get Files that the current user has access to from a directory
	 *
	 * @param	str		$folder_id	folder id 
	 * @param	bool	$as_array
	 * @return	obj		Filedrop
	 */
	public function get_files($folder_id)
	{	
		$folder = Mango::factory('mango_user', array('_id' => $this->_uid))
			->load(1, null, null, array('mango_filedrop.'.$folder_id => 1), array())
			->as_array(true);
		
		$dir = $folder['mango_filedrop'][$folder_id]['directory'].'/';
		$file = $folder['mango_filedrop'][$folder_id]['hash'];
		$path = $dir.$file;
		
		if (file_exists($path) AND is_dir($path))
		{
			// get array of dir, strip files starting with '.', and reset the keys for easy json parsing
			$this->data = $this->_build_array($path, true);
		}
		else 
		{
			error_log('file did not exist');
			// Put logic to create strays
		}
				
		return $this;
	}
	
	/**
	 * Delete Folder 
	 *
	 * @return void
	 * @param string of the folder ID that you want to delete
	 */
	public function delete_folder($folder_id)
	{
		$user = Mango::factory('mango_user', array('_id' => $this->_uid))->load(); 
		unset($user->mango_filedrop[$folder_id]);
		$user->update();
		
		$this->data = array('status' => 'success');
		
		return $this;
	}
	
	/**
	 * Upload File
	 */
	public function upload_file()
	{
		$files = Validation::factory($_FILES);
		$files->rule('files', array('Upload', 'not_empty'));
		$files->rule('files', array('Upload', 'valid'));
		
		if ($files->check())
		{
			error_log(var_export($_POST, true));
			error_log(var_export($_FILES, true));
			
			// If you want to ignore the uploaded files, set $demo_mode to true;
			$dir = urldecode($_POST['directory']).'/'.$_POST['hash'].'/';
			
			error_log($dir);
			
			if ($_FILES['files']['error'] == 0 ){
			
				$pic = $_FILES['files'];
			
				// Move the uploaded file from the temporary
				// directory to the uploads folder:
				if (move_uploaded_file($pic['tmp_name'], $dir.$pic['name'])){
					error_log('File was uploaded successfuly!');
				}
				else 
				{
					error_log('could not move file');
				}
			}
			else 
			{
				error_log('Something went wrong with your upload!');			
			}

		}

		$this->data = $_FILES;
		
		return $this;
	}
	
	/**
	 * Render Views for quick HMVC style templating
	 *
	 * @param	str		a string of the name of the view that you would like to render
	 * @return	obj		view object
	 */
	public function render($view)
	{
		$this->_view = $view;
		return View::factory('filedrop/'.$this->_view)->bind('data', $this->data);
	}
	
	public function upload($data)
	{
		return print_r($data);
	}
}