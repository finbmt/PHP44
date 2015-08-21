<?php
if (!defined('PATH_SYSTEM')) exit('No direct script access allowed');

class Dmhang_Controller extends INET_Controller
{
	// hàm hiển thi màn hình danh sách
	function indexAction($data = array())
	{
		$this->needLogin();

		// kiem tra gia tri trang hien tai
		if (isset($_GET['p'])) {
			$this->current_page = $_GET['p'];
		}
		else
		{
			$this->current_page = 1;
		}
		
		// load model nguoi dung
		$this->model->load("Dmhang");
		$dmhang = new Dmhang_Model();

		// tong so record trong csdl
		$total = $dmhang->get_total();
		// call hàm xử lý paging
		$this->paging($total, "c=dmhang");

		// get danh sach du lieu
		$data['paging_link'] = $this->paging_link;
		$data['total_hang'] = $total;

		$data['list_hang'] = $dmhang->get_list($this->limit);


		$this->view->load("DmHangList", $data);
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

		if (!$data['item']['HinhAnh']) {
			$data['item']['HinhAnh'] = "default.png";
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
		$this->needLogin();

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
		$this->needLogin();

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
		$this->needLogin();
		
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