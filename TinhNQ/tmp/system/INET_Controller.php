<?php
if (!defined('PATH_SITE')) exit('No direct script access allowed');

class INET_Controller 
{
	protected $view = null;
	protected $helper = null;
	protected $model = null;
	//private $path_system = PATH_SITE . '/system/';

	public function load()
	{
		include_once PATH_SITE . '/system/' . "INET_Helper_Loader.php";
		$this->helper = new INET_Helper_Loader();
		$this->helper->load("String");

		include_once PATH_SITE . '/system/' . "INET_View.php";
		$this->view = new INET_View();
	}
}

?>