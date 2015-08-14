<?php
	if (!defined('PATH_SYSTEM')) exit('No direct script access allowed');
	
	class NguoiDung_Controller extends INET_Controller
{
	function indexAction($data=array())
	{
		$this->model->load("Nguoidung");
		$nguoidung = new Nguoidung_Model();
		$data['list_nguoidung']= $nguoidung->get_list();
		/*
		$this->helper->load("String");
		$data=array();
		$data['title'] =viet_hoa("day la title");
		$data['content'] ="day la content";*/
		$this->view->load("NguoidungList",$data);
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
		
		$this->view->load("NguoidungForm",$data);
		$this->view->show(); 
		//$this->indexAction($data);
	}

	function doSaveAction()
	{
		if($_POST['btnSave'])
		{      
				$this->model->load("Nguoidung");
				$nguoidung = new Nguoidung_Model();
				$data['TenTruyCap'] = $_POST['TenTruyCap'];
				$data['MatKhau'] =  $_POST['MatKhau'];
				$data['HoTen'] = $_POST['HoTen'];
				$message=$this->check_empty($data);
				if($_POST['type'] == 'update')
				{
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
		$this->model->load("Nguoidung");
		$nguoidung = new Nguoidung_Model();
		/*$data['TenTruyCap'] = 'user';
		$data['MatKhau'] = 'user pass';
		$data['HoTen'] = 'ten user';
		$data['MaNguoiDung'] = '1';
		$nguoidung->update($data);*/
		
			if($_GET["MaNguoiDung"])
			{
				$MaNguoiDung=$_GET["MaNguoiDung"];
				$data['item']=$nguoidung->get_by_id($MaNguoiDung);
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
		$MaNguoiDung = $_GET['MaNguoiDung']; 

		//echo $MaNguoiDung;
		if (isset($MaNguoiDung)) {

			$this->model->load("Nguoidung");
			$nguoidung = new Nguoidung_Model();
			$nguoidung->delete($MaNguoiDung);
			$data['message'] = "xóa người dùng thành công";
		}
		else
		{
			$data['message'] = "không tồn tại mã người dùng";
		}

		$this->indexAction($data);
		
	}
}
	
?>