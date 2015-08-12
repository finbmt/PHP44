 <?php
if (!defined('PATH_SYSTEM')) exit('No direct script access allowed');

class Nhacungcap_Model extends INET_Model
{
	function get_list()
	{
		$sql="SElECT * FROM tbl_NhaCungCap";
		$data = $this->select($sql); 
		return($data);
	}
	 
	function get_by_id($MaNhaCungCap)
	{
		$sql="SElECT * FROM tbl_NhaCungCap WHERE `MaNhaCungCap` = '$MaNhaCungCap'";
		$data = $this->select($sql); 
		return $data[0];
	}

	function insert($data = array())
	{
		$sql = "INSERT INTO `tbl_NhaCungCap`(`TenNhaCungCap`, `DiaChi`, `DienThoai`, `Email`) 
		VALUES ('". $data['TenNhaCungCap'] ."','".$data['DiaChi']."','".$data['DienThoai']."','".$data['Email']."')";
		return $this->execute($sql);
	}

	function update($data = array())
	
	{
		$sql = "UPDATE `tbl_NhaCungCap` SET 
						`TenNhaCungCap`='". $data['TenNhaCungCap'] ."',
						`DiaChi`='". $data['DiaChi'] ."',
						`DienThoai`='". $data['DienThoai'] ."',
						`Email`='". $data['Email'] ."' 
						WHERE `MaNhaCungCap`='". $data['MaNhaCungCap'] ."'";
		return $this->execute($sql);
	}

	function delete($MaNhaCungCap)
	{
		$sql = "DELETE FROM `tbl_NhaCungCap` WHERE `MaNhaCungCap` = '$MaNhaCungCap'";
		return $this->execute($sql);
	}
}
?>