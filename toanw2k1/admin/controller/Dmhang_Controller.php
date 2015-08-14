<?php
	if (!defined('PATH_SYSTEM')) exit('No direct script access allowed');
	
	class Dmhang_Controller extends INET_Controller
{
	function indexAction($data=array())
	{
		$this->model->load("Dmhang");
		$dmhang = new Dmhang_Model();
		$data['list_hang']= $dmhang->get_list();//var_dump($data['list_hang']);
		/*
		$this->helper->load("String");
		$data=array();
		$data['title'] =viet_hoa("day la title");
		$data['content'] ="day la content";*/
		$this->view->load("DmHangList",$data);
		$this->view->show();   
		//echo "day la NguoiDung_Controller indexAction";
	}

	function formAction($data = array(),$isEdit = false)
	{
		if($isEdit)
		{
			$data['text'] = 'Sửa';
			$data['type'] = 'update';
			
		} else 
		{
			$data['text'] = 'Thêm mới';
		}
		//$data['message'] = "add";
		
		$this->model->load("Nhacungcap");
		$ncc = new Nhacungcap_Model();
		$data['list_ncc'] = $ncc->get_list();

		$data['message'] = "add";
		$this->view->load("DmHangForm", $data);
		$this->view->show();
	}
		//print_r($this);
		//echo "day la NguoiDung_Controller addAction";
		//$this->model->load("Nguoidung");
		//$nguoidung = new Nguoidung_Model();
		//$data['TenTruyCap'] = 'user';
		//$data['MatKhau'] = 'user pass';
		//$data['HoTen'] = 'ten user';
		//$nguoidung->insert($data);
		
		//$this->helper->load("String");
		//echo viet_hoa("toi la huyen ptm");
		
		//$this->view->load("NguoidungForm",$data);
		//$this->view->show(); 
		//$this->indexAction($data);
	

	function doSaveAction()
	{
		if ($_POST['btnSave']) {
			$this->model->load("Dmhang");
			$dmhang = new Dmhang_Model();

			$data['TenHang'] = $_POST['TenHang'];
			$data['DVT'] = $_POST['DVT'];
			$data['DonGia'] = $_POST['DonGia'];
			$data['MaNhaCungCap'] = $_POST['MaNhaCungCap'];
			$data['MaLoaiHang'] = $_POST['MaLoaiHang'];
			$data['HinhAnh'] = $_POST['HinhAnh'];
			$data['MoTa'] = $_POST['MoTa'];

			//$message = $this->check_empty($data);

			if ($_POST['type'] == 'update') {
				$data['MaHang'] = $_POST['MaHang'];
				$dmhang->update($data);
				$data['message'] = "sửa hàng hóa thành công";
			}
			else
			{
				$dmhang->insert($data);
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
		$dmhang = new Dmhang_Model();
		/*$data['TenTruyCap'] = 'user';
		$data['MatKhau'] = 'user pass';
		$data['HoTen'] = 'ten user';
		$data['MaNguoiDung'] = '1';
		$nguoidung->update($data);*/
		
			if($_GET["MaHang"])
				{
					$MaHang = $_GET["MaHang"];
					$data['item'] = $dmhang->get_by_id($MaHang);
					$this->formAction($data, true);
				}
				else
				{
					$this->formAction();
				}
		
	
	}

	function deleteAction()
	{
		/*$this->model->load("Nguoidung");
		$nguoidung = new Nguoidung_Model();
		$MaNguoiDung = 1;
		
		$nguoidung->delete($MaNguoiDung);*/
		$data['message'] = "";
		$MaHang = $_GET['MaHang']; 

		//echo $MaNguoiDung;
		if (isset($MaHang)) {

			$this->model->load("Dmhang");
			$dmhang = new Dmhang_Model();
			$dmhang->delete($MaHang);
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