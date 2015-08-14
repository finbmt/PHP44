 <?php
if (!defined('PATH_SYSTEM')) exit('No direct script access allowed');

class Nguoidung_Model extends INET_Model
{
	function get_list()
	{
		$sql="SElECT * FROM tbl_NguoiDung";
		$data = $this->select($sql); 
		return($data);
	}
	 
	function get_by_id($MaNguoiDung)
	{
		$sql="SElECT * FROM tbl_NguoiDung WHERE `MaNguoiDung` = '$MaNguoiDung'";
		$data = $this->select($sql); 
		return $data[0];
	}

	function insert($data = array())
	{
		$sql = "INSERT INTO `tbl_NguoiDung`(`TenTruyCap`, `MatKhau`, `HoTen`) 
		VALUES ('". $data['TenTruyCap'] ."','".$data['MatKhau']."','".$data['HoTen']."')";
		return $this->execute($sql);
	}

	function update($data = array())
	
	{
		$sql = "UPDATE `tbl_NguoiDung` SET 
						`TenTruyCap`='". $data['TenTruyCap'] ."',
						`MatKhau`='". $data['MatKhau'] ."',
						`HoTen`='". $data['HoTen'] ."' 
						WHERE `MaNguoiDung`='". $data['MaNguoiDung'] ."'";
		return $this->execute($sql);
	}

	function delete($MaNguoiDung)
	{
		$sql = "DELETE FROM `tbl_NguoiDung` WHERE `MaNguoiDung` = '$MaNguoiDung'";
		return $this->execute($sql);
	}
}
?>