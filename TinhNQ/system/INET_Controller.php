<?php
if (!defined('PATH_SYSTEM')) exit('No direct script access allowed');

class INET_Controller
{
	protected $helper = null;
	protected $model = null;
	protected $view = null;

	public function __construct()
	{
		include_once PATH_SYSTEM . '/system/INET_Helper.php';
		$this->helper = new INET_Helper();

		include_once PATH_SYSTEM . '/system/INET_Model.php';
		$this->model = new INET_Model();

		include_once PATH_SYSTEM . '/system/INET_View.php';
		$this->view = new INET_View();
	}

	public function redirect($extra)
	{
		// di chuyen ve man hinh list
		$host  = $_SERVER['HTTP_HOST'];
		$uri   = rtrim(dirname($_SERVER['PHP_SELF']), '/\\');
		header("Location: http://$host$uri/admin.php?$extra");
	}

	// kiểm tra giá trị có tồn tại hay không
	public function check_empty($items)
	{
		$messages = array();
		foreach ($items as $key => $value) {
			if (empty($value)) {
				$messages[] = $key; 
			}
		}

		return $messages;
	}
}
?>