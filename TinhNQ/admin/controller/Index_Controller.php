<?php
if (!defined('PATH_SYSTEM')) exit('No direct script access allowed');

class Index_Controller extends INET_Controller
{
	function indexAction()
	{
		$data["message"] = "Xin chào ADMIN";
		$this->view->load("Index", $data);
		$this->view->show();
	}
}

?>