<?php
	if (!defined('PATH_SYSTEM')) exit('No direct script access allowed');
	
	class NhaCungCap_Controller extends INET_Controller
{
	function indexAction($data=array())
	{
		$this->model->load("Nhacungcap");
		$nhacungcap = new Nhacungcap_Model();
		$data['list_nhacungcap']= $nhacungcap->get_list();
		/*
		$this->helper->load("String");
		$data=array();
		$data['title'] =viet_hoa("day la title");
		$data['content'] ="day la content";*/
		$this->view->load("NhacungcapList",$data);
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
		$data['message'] = "add";
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
		
		$this->view->load("NhacungcapForm",$data);
		$this->view->show(); 
		//$this->indexAction($data);
	}

	function doSaveAction()
	{
		if($_POST['btnSave'])
		{      
				$this->model->load("Nhacungcap");
				$nhacungcap = new Nhacungcap_Model();
				
				$data['TenNhaCungCap'] =  $_POST['TenNhaCungCap'];
				$data['DiaChi'] = $_POST['DiaChi'];
				$data['DienThoai'] = $_POST['DienThoai'];
				$data['Email'] = $_POST['Email'];
				$message=$this->check_empty($data);
				if($_POST['type'] == 'update')
				{
					$data['MaNhaCungCap'] = $_POST['MaNhaCungCap'];
					$nhacungcap->update($data);
					$data['message'] = "sửa nhà cung cấp thành công";
				}
				else
				{

					$nhacungcap->insert($data);

					$data['message'] = "thêm mới nhà cung cấp thành công";
					
				}
				$this->indexAction($data);
		} 
		else
		{
			$this->redirect("c=nhacungcap");
		}
	}
	function editAction()
	{
		$this->model->load("Nhacungcap");
		$nhacungcap = new Nhacungcap_Model();
		/*$data['TenTruyCap'] = 'user';
		$data['MatKhau'] = 'user pass';
		$data['HoTen'] = 'ten user';
		$data['MaNguoiDung'] = '1';
		$nguoidung->update($data);*/
		
			if($_GET["MaNhaCungCap"])
			{
				$MaNhaCungCap=$_GET["MaNhaCungCap"];
				$data['item']=$nhacungcap->get_by_id($MaNhaCungCap);
				$this->formAction($data , true);
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
		$MaNhaCungCap = $_GET['MaNhaCungCap']; 

		//echo $MaNguoiDung;
		if (isset($MaNhaCungCap)) {

			$this->model->load("Nhacungcap");
			$nhacungcap = new Nhacungcap_Model();
			$nhacungcap->delete($MaNhaCungCap);
			$data['message'] = "xóa nhà cung cấp thành công";
		}
		else
		{
			$data['message'] = "không tồn tại mã nhà cung cấp";
		}

		$this->indexAction($data);
		
	}
}
	
?>