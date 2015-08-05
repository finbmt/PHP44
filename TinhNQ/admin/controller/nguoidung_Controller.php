<?php
if (!defined('PATH_SYSTEM')) exit('No direct script access allowed');

class Nguoidung_Controller extends INET_Controller
{
	function indexAction($data = array())
	{
		// load model nguoi dung
		$this->model->load("Nguoidung");
		$nguoidung = new Nguoidung_Model();
		
		$data['list_nguoidung'] =  $nguoidung->get_list();

		$this->view->load("NguoiDungList", $data);
		$this->view->show();
	}

	function addAction()
	{
		$data['message'] = "add";
		$this->view->load("NguoiDungAdd", $data);
		$this->view->show();
	}

	function doAddAction()
	{
		$this->model->load("Nguoidung");
		$nguoidung = new Nguoidung_Model();

		$data['TenTruyCap'] = $_POST['TenTruyCap'];
		$data['MatKhau'] = $_POST['MatKhau'];
		$data['HoTen'] = $_POST['HoTen'];
		$nguoidung->insert($data);

		$data['message'] = "them moi nguoi dung thanh cong";
		$this->indexAction($data);
	}

	function editAction()
	{
		$this->model->load("Nguoidung");
		$nguoidung = new Nguoidung_Model();

		$data['TenTruyCap'] = 'user';
		$data['MatKhau'] = 'user pass';
		$data['HoTen'] = 'ten user';
		$data['MaNguoiDung'] = '1';
		$nguoidung->update($data);
	}

	function deleteAction()
	{
		$data['message'] = "";
		$MaNguoiDung = $_GET['MaNguoiDung']; 

		echo $MaNguoiDung;
		if (isset($MaNguoiDung)) {

			$this->model->load("Nguoidung");
			$nguoidung = new Nguoidung_Model();
			$nguoidung->delete($MaNguoiDung);
			$data['message'] = "xóa thành công";
		}
		else
		{
			$data['message'] = "khong ton tai ma nguoi dung";
		}

		$this->indexAction($data);
	}
}
?>