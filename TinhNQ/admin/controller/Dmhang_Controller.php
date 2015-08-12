<?php
if (!defined('PATH_SYSTEM')) exit('No direct script access allowed');

class Dmhang_Controller extends INET_Controller
{
	// hàm hiển thi màn hình danh sách
	function indexAction($data = array())
	{
		// load model nguoi dung
		$this->model->load("Dmhang");
		$dmhang = new Dmhang_Model();
		
		$data['list_hang'] =  $dmhang->get_list();
		$this->view->load("DmHangList", $data);
		$this->view->show();
	}

	function formAction($data = array(), $isEdit = false)
	{
		if ($isEdit) {
			$data['text'] = 'Sửa';
			$data['type'] = 'update';
		}
		else
		{
			$data['text'] = 'Thêm mới';
		}

		$this->model->load("Nhacungcap");
		$ncc = new Nhacungcap_Model();
		$data['list_ncc'] = $ncc->get_list();

		$this->model->load("Loaihang");
		$loaiHang = new Loaihang_Model();
		$data['list_loaihang'] = $loaiHang->get_list();

		$data['message'] = "add";
		$this->view->load("DmHangForm", $data);
		$this->view->show();
	}

	function doSaveAction()
	{
		// kiem tra nguoi dung co click vao nut save hay k
		if ($_POST['btnSave']) {

			$hinhanh = $_POST['HinhAnh'];
			if ($_FILES['HinhUpload']['name']) {
				if ($_FILES['HinhUpload']['error'] != 0) {
					die("file update bi lỗi");
				}

				$hinhanh = $_FILES['HinhUpload']['name'];
				move_uploaded_file($_FILES['HinhUpload']['tmp_name'] , PATH_SYSTEM . "/public/img/" . $hinhanh);
			}

			$this->model->load("Dmhang");
			$Dmhang = new Dmhang_Model();

			$data['TenHang'] = $_POST['TenHang'];
			$data['DVT'] = $_POST['DVT'];
			$data['DonGia'] = $_POST['DonGia'];
			$data['MaNhaCungCap'] = $_POST['MaNhaCungCap'];
			$data['MaLoaiHang'] = $_POST['MaLoaiHang'];
			$data['HinhAnh'] = $hinhanh;
			$data['MoTa'] = $_POST['MoTa'];

			//$message = $this->check_empty($data);

			if ($_POST['type'] == 'update') {
				$data['MaHang'] = $_POST['MaHang'];
				$Dmhang->update($data);
				$data['message'] = "sửa hàng hóa thành công";
			}
			else
			{
				$Dmhang->insert($data);
				$data['message'] = "thêm mới hàng hóa thành công";
			}
			$this->indexAction($data);
		} 
		else
		{
			$this->redirect("c=dmhang");
		}
	}

	function editAction()
	{
		$this->model->load("Dmhang");
		$Dmhang = new Dmhang_Model();
		if($_GET["MaHang"])
		{
			$MaHang = $_GET["MaHang"];
			$data['item'] = $Dmhang->get_by_id($MaHang);
			$this->formAction($data, true);
		}
		else
		{
			$this->formAction();
		}
	}

	function deleteAction()
	{
		$data['message'] = "";
		$MaHang = $_GET['MaHang']; 

		if (isset($MaHang)) {

			$this->model->load("Dmhang");
			$Dmhang = new Dmhang_Model();
			$Dmhang->delete($MaHang);
			$data['message'] = "xóa hàng hóa thành công";
		}
		else
		{
			$data['message'] = "không tồn tại mã hàng";
		}

		$this->indexAction($data);
	}
}
?>