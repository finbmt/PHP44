<?php
// database

$data = mysqli_connect("localhost","root","mysql","webshopping");

if (mysqli_connect_errno())//check ket noi
    {
      echo " Loi : " . mysqli_connect_error(); exit();
    }
    echo "Ket noi thanh cong";
 //Them csdl//
 //$sql=" INSERT INTO `tbl_NguoiDung`(`TenTruyCap`, `MatKhau`, `HoTen`) VALUES ('admin','admin','vinhtt')";
// mysqli_query($data,$sql);
//Them csdl //
 //$sql=" UPDATE `tbl_NguoiDung` SET `MatKhau`='123456'  WHERE `MaNguoiDung`='3'";
 //mysqli_query($data,$sql);
$sql=" DELETE FROM `tbl_NguoiDung` WHERE `MaNguoiDung`='4'";
mysqli_query($data,$sql);

mysqli_close($data);
?>
