 <?php
if (!defined('PATH_SYSTEM')) exit('No direct script access allowed');

class Loaihang_Model extends INET_Model
{
	function get_list()
	{
		$sql="SElECT * FROM tbl_LoaiHang";
		$data = $this->select($sql); 
		return($data);
	}
	 
	function get_by_id($MaLoaiHang)
	{
		$sql="SElECT * FROM tbl_LoaiHang WHERE `MaLoaiHang` = '$MaLoaiHang'";
		$data = $this->select($sql); 
		return $data[0];
	}

	function insert($data = array())
	{
		$sql = "INSERT INTO `tbl_LoaiHang`(`TenLoaiHang`) 
		VALUES ('". $data['TenLoaiHang'] ."')";
		return $this->execute($sql);
	}

	function update($data = array())
	
	{
		$sql = "UPDATE `tbl_LoaiHang` SET 
						`TenLoaiHang`='". $data['TenLoaiHang'] ."'
						WHERE `MaLoaiHang`='". $data['MaLoaiHang'] ."'";
		return $this->execute($sql);
	}

	function delete($MaLoaiHang)
	{
		$sql = "DELETE FROM `tbl_LoaiHang` WHERE `MaLoaiHang` = '$MaLoaiHang'";
		return $this->execute($sql);
	}
}
?>