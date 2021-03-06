<?php
if (!defined('PATH_SYSTEM')) exit('No direct script access allowed');

class Nguoidung_Model extends INET_Model
{
	function get_list()
	{
		$sql = "SELECT * FROM NguoiDung";
		$data = $this->select($sql);
		return $data;
	}

	function get_by_id($MaNguoiDung)
	{
		$sql = "SELECT * FROM NguoiDung WHERE `MaNguoiDung` = '$MaNguoiDung'";
		$data = $this->select($sql);
		return $data[0];
	}

	function insert($data = array())
	{
		$sql = "INSERT INTO `NguoiDung`(`TenTruyCap`, `MatKhau`, `HoTen`) 
		VALUES ('". $data['TenTruyCap'] ."','".$data['MatKhau']."','".$data['HoTen']."')";
		return $this->execute($sql);
	}

	function update($data = array())
	{
		$sql = "UPDATE `NguoiDung` SET 
						`TenTruyCap`='". $data['TenTruyCap'] ."',
						`MatKhau`='". $data['MatKhau'] ."',
						`HoTen`='". $data['HoTen'] ."' 
						WHERE `MaNguoiDung`='". $data['MaNguoiDung'] ."'";
		return $this->execute($sql);
	}

	function delete($MaNguoiDung)
	{
		$sql = "DELETE FROM `NguoiDung` WHERE `MaNguoiDung` = '$MaNguoiDung'";
		return $this->execute($sql);
	}

	function login($TenTruyCap, $MatKhau)
	{
		$sql = "SELECT * FROM NguoiDung WHERE `TenTruyCap` = '$TenTruyCap' AND MatKhau = '$MatKhau'";
		$data = $this->select($sql);
		return $data[0];
	}
}
?>