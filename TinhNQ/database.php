<?php
	// database
	$db = mysqli_connect("localhost", "root", "mysql", "webshopping");

	// check ket noi toi csdl
	if(mysqli_connect_errno())
	{
		// nếu kết nối không thành công thì thông báo lỗi
		// và cho chết chương trình
		echo "Loi : " . mysqli_connect_error(); exit();
	}
	
	// thông báo kết nối thành công
	//echo "ket noi thanh cong";
	// xử lý
	
	// 1. thêm vào csdl
	//$sql = "INSERT INTO `NguoiDung`( `TenTruyCap`, `MatKhau`, `HoTen`) VALUES ('admin', '123456','TinhNQ')";
	// 2. Update csdl
	//$sql = "UPDATE `NguoiDung` SET `TenTruyCap`='tinhabc',`HoTen`='Tinh ABC' WHERE `MaNguoiDung` = '2'";
	// 3. Delete csdl
	//$sql = "DELETE FROM `NguoiDung` WHERE `MaNguoiDung` ='3'";
	
	// thực thi
	//mysqli_query($db, $sql);
	
	// đóng kết nối
	//mysqli_close($db);
?>