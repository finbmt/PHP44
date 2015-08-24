<?php
if (!defined('PATH_SYSTEM')) exit('No direct script access allowed');

class Index_Controller extends INET_Controller
{
	function indexAction()
	{
		$data["message"] = "";
		// lay du lieu loai hang -> truyền lên view
		$this->model->load("Loaihang");
		$loaihang = new Loaihang_Model();
		$list_loaihang = $loaihang->get_list();
		$data["list_loaihang"] = $list_loaihang;
		
		// lay du lieu nha cung cap -> truyền lên view
		$this->model->load("Nhacungcap");
		$nhacungcap = new Nhacungcap_Model();
		$list_nhacungcap = $nhacungcap->get_list_total();
		$data["list_nhacungcap"] = $list_nhacungcap;
		
		// lay du lieu hang hoa mới nhất (6 record)
		$this->model->load("DmHang");
		$dmHang = new DmHang_Model();
		$list_dmHang_new = $dmHang->get_list_new();
		$data["list_dmHang_new"] = $list_dmHang_new;
		
		$this->view->load_user("Home", $data);
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
			
			//ma hoa 
			$MatKhau = $this->encryptIt($MatKhau);
			
			$user =  $nguoidung->login($TenTruyCap, $MatKhau);
			if ($user) {
				$_SESSION['user_login'] = $user;

				var_dump($_SESSION['user_login']);
				// login đúng
				$this->redirect("c=index&a=index");
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

	function doLogoutAction()
	{
		$this->needLogin();
		
		if (isset($_SESSION['user_login']))
		{
			$_SESSION['user_login'] = null;
			$this->redirect("a=login");
		}
	}
}

?>