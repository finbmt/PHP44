<?php
	if (!defined('PATH_SYSTEM')) exit('No direct script access allowed');
	
	class Loaihang_Controller extends INET_Controller
{
	function indexAction($data=array())
	{
		$this->model->load("Loaihang");
		$loaihang = new Loaihang_Model();
		$data['list_loaihang']= $loaihang->get_list();
		/*
		$this->helper->load("String");
		$data=array();
		$data['title'] =viet_hoa("day la title");
		$data['content'] ="day la content";*/
		$this->view->load("LoaihangList",$data);
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
		
		$this->view->load("LoaihangForm",$data);
		$this->view->show(); 
		//$this->indexAction($data);
	}

	function doSaveAction()
	{
		if($_POST['btnSave'])
		{      
				$this->model->load("Loaihang");
				$loaihang = new Loaihang_Model();
				$data['TenLoaiHang'] = $_POST['TenLoaiHang'];
				$message=$this->check_empty($data);
				if($_POST['type'] == 'update')
				{
					$data['MaLoaiHang'] = $_POST['MaLoaiHang'];
					$loaihang->update($data);
					$data['message'] = "sửa loại hàng thành công";
				}
				else
				{

					$loaihang->insert($data);

					$data['message'] = "thêm mới loại hàng thành công";
					
				}
				$this->indexAction($data);
		} 
		else
		{
			$this->redirect("c=loaihang");
		}
	}
	function editAction()
	{
		$this->model->load("Loaihang");
		$loaihang = new Loaihang_Model();
		/*$data['TenTruyCap'] = 'user';
		$data['MatKhau'] = 'user pass';
		$data['HoTen'] = 'ten user';
		$data['MaNguoiDung'] = '1';
		$nguoidung->update($data);*/
		
			if($_GET["MaLoaiHang"])
			{
				$MaLoaiHang=$_GET["MaLoaiHang"];
				$data['item']=$loaihang->get_by_id($MaLoaiHang);
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
		$MaLoaiHang = $_GET['MaLoaiHang']; 

		//echo $MaNguoiDung;
		if (isset($MaLoaiHang)) {

			$this->model->load("Loaihang");
			$loaihang = new Loaihang_Model();
			$loaihang->delete($MaLoaiHang);
			$data['message'] = "xóa loại hàng thành công";
		}
		else
		{
			$data['message'] = "không tồn tại mã loại hàng";
		}

		$this->indexAction($data);
		
	}
}
	
?>