<?php
if (!defined('PATH_SYSTEM')) exit('No direct script access allowed');

class Loaihang_Model extends INET_Model
{
	function get_list()
	{
		$sql = "SELECT * from LoaiHang";
		$data = $this->select($sql);
		return $data;
	}

	
}
?>