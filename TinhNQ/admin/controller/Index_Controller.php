<?php
if (!defined('PATH_SYSTEM')) exit('No direct script access allowed');

class Index_Controller extends INET_Controller
{
	function indexAction()
	{
		$this->needLogin();

		$data["message"] = "Xin chào " . $this->user['HoTen'];
		$this->view->load("Index", $data);
		$this->view->show();
	}

	function loginAction($data = array())
	{
		$this->needLogin(false);

		$data["status"] = true;
		$this->view->load("Login", $data);
		$this->view->show();
	}

	function doLoginAction()
	{
		$this->needLogin(false);

		if ($_POST['TenTruyCap'] && $_POST['MatKhau']) {
			$TenTruyCap = $_POST['TenTruyCap'];
			$MatKhau = $_POST['MatKhau'];

			$this->model->load("Nguoidung");
			$nguoidung = new Nguoidung_Model();
		
			$user =  $nguoidung->login($TenTruyCap, $MatKhau);
			if ($user) {
				$_SESSION['user_login'] = $user;

				var_dump($_SESSION['user_login']);
				// login đúng
				//$this->redirect("c=index&a=index");
			}
			else
			{
				// login sai
				$data["message"] = "Tên truy và mật khẩu không tồn tại !";
				$this->loginAction($data);
			}
			
		}
		else
		{
			$data["message"] = "vui lòng nhập cả tên truy và mật khẩu !";
			$this->loginAction($data);
		}
		
	}
}

?>