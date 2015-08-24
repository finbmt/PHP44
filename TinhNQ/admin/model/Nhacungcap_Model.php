<?php
if (!defined('PATH_SYSTEM')) exit('No direct script access allowed');

class Nhacungcap_Model extends INET_Model
{
	function get_list()
	{
		$sql = "SELECT * from NhaCungCap";
		$data = $this->select($sql);
		return $data;
	}

	function get_list_total()
	{
		$sql = "SELECT ncc.*, count(dh.MaHang) as count from NhaCungCap ncc 
		inner join dmhang dh on ncc.MaNhaCungCap = dh.MaNhaCungCap
		group by ncc.MaNhaCungCap";
		$data = $this->select($sql);
		return $data;
	}
}
?>