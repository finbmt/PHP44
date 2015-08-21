<?php
if (!defined('PATH_SYSTEM')) exit('No direct script access allowed');

class Nguoidung_Controller extends INET_Controller
{

	// hàm hiển thi màn hình danh sách
	function indexAction($data = array())
	{
		$this->needLogin();

		// load model nguoi dung
		$this->model->load("Nguoidung");
		$nguoidung = new Nguoidung_Model();
		
		$data['list_nguoidung'] =  $nguoidung->get_list();

		$this->view->load("NguoiDungList", $data);
		$this->view->show();
	}

	function formAction($data = array(), $isEdit = false)
	{
		$this->needLogin();

		if ($isEdit) {
			$data['text'] = 'Sửa';
			$data['type'] = 'update';
		}
		else
		{
			$data['text'] = 'Thêm mới';
		}

		$data['message'] = "add";
		$this->view->load("NguoiDungForm", $data);
		$this->view->show();
	}

	function doSaveAction()
	{
		$this->needLogin();

		// kiem tra nguoi co click vao nut save hay k
		if ($_POST['btnSave']) {
			$this->model->load("Nguoidung");
			$nguoidung = new Nguoidung_Model();
			$data['TenTruyCap'] = $_POST['TenTruyCap'];
			$data['HoTen'] = $_POST['HoTen'];
			// ma hoa mat khau
			$data['MatKhau'] = $this->encryptIt($_POST['MatKhau']);
			
			//$message = $this->check_empty($data);

			if ($_POST['type'] == 'update') {
				$data['MaNguoiDung'] = $_POST['MaNguoiDung'];
				$nguoidung->update($data);
				$data['message'] = "sửa người dùng thành công";
			}
			else
			{
				$nguoidung->insert($data);
				$data['message'] = "thêm mới người dùng thành công";
			}
			$this->indexAction($data);
		} 
		else
		{
			$this->redirect("c=nguoidung");
		}
	}

	function editAction()
	{
		$this->needLogin();

		$this->model->load("Nguoidung");
		$nguoidung = new Nguoidung_Model();
		if($_GET["MaNguoiDung"])
		{
			$MaNguoiDung = $_GET["MaNguoiDung"];
			$data['item'] = $nguoidung->get_by_id($MaNguoiDung);
			$this->formAction($data, true);
		}
		else
		{
			$this->formAction();
		}
	}

	function deleteAction()
	{
		$this->needLogin();
		
		$data['message'] = "";
		$MaNguoiDung = $_GET['MaNguoiDung']; 

		echo $MaNguoiDung;
		if (isset($MaNguoiDung)) {

			$this->model->load("Nguoidung");
			$nguoidung = new Nguoidung_Model();
			$nguoidung->delete($MaNguoiDung);
			$data['message'] = "xóa người dùng thành công";
		}
		else
		{
			$data['message'] = "không tồn tại người dùng";
		}

		$this->indexAction($data);
	}
}
?>