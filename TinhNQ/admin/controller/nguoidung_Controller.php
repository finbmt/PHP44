<?php
if (!defined('PATH_SYSTEM')) exit('No direct script access allowed');

class Nguoidung_Controller extends INET_Controller
{
	function indexAction()
	{
		$this->helper->load("String");

		$data = array();
		$data['title'] = viet_hoa("day la title");
		$data['content'] = "day la content";

		$this->view->load("NguoiDungList", $data);
		$this->view->show();
	}

	function addAction()
	{
		$this->helper->load("String");
		echo viet_hoa("toi la tinh nq");
	}

	function editAction()
	{
		
	}

	function deleteAction()
	{
		
	}
}
?>