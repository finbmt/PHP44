<?php
if (!defined('PATH_SYSTEM')) exit('No direct script access allowed');

class Dmhang_Model extends INET_Model
{
	function get_list()
	{
		$sql = "SELECT hang.*, ncc.TenNhaCungCap, lh.TenLoaiHang
		 FROM `DMHang` as hang inner join nhacungcap as ncc 
		 on hang.MaNhaCungCap = ncc.MaNhaCungCap 
		 inner join loaihang as lh on hang.MaLoaiHang = lh.MaLoaiHang";
		$data = $this->select($sql);
		return $data;
	}

	function get_by_id($MaHang)
	{
		$sql = "SELECT * FROM DMHang WHERE `MaHang` = '$MaHang'";
		$data = $this->select($sql);
		return $data[0];
	}

	function insert($data = array())
	{
		$sql = "INSERT INTO `DMHang`(`TenHang`, `HinhAnh`, `DVT`, `DonGia`, `MaNhaCungCap`, `MaLoaiHang`, `MoTa`) 
		VALUES ('". $data['TenHang'] ."','". $data['HinhAnh'] ."','". $data['DVT'] ."','". $data['DonGia'] ."',
			'". $data['MaNhaCungCap'] ."','". $data['MaLoaiHang'] ."','". $data['MoTa'] ."')";

		return $this->execute($sql);
	}

	function update($data = array())
	{
		$sql = "UPDATE `DMHang` SET 
		`TenHang`='". $data['TenHang'] ."',
		`HinhAnh`='". $data['HinhAnh'] ."',
		`DVT`='". $data['DVT'] ."',
		`DonGia`='". $data['DonGia'] ."',
		`MaNhaCungCap`='". $data['MaNhaCungCap'] ."',
		`MaLoaiHang`='". $data['MaLoaiHang'] ."',
		`MoTa`='". $data['MoTa'] ."' WHERE `MaHang`='". $data['MaHang'] ."'";
		return $this->execute($sql);
	}

	function delete($MaHang)
	{
		$sql = "DELETE FROM `DMHang` WHERE `MaHang` = '$MaHang'";
		return $this->execute($sql);
	}
}
?>