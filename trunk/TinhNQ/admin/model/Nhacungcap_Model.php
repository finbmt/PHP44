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

	
}
?>