<?php 
	include_once 'database.php';
	if($_GET["MaNguoiDung"])
	{
		$MaNguoiDung = $_GET["MaNguoiDung"];
		$sql = "DELETE FROM `NguoiDung` WHERE `MaNguoiDung` = '$MaNguoiDung'";
		$result = mysqli_query($db, $sql);
		mysqli_close($db);

		// di chuyen ve man hinh list
		$host  = $_SERVER['HTTP_HOST'];
		$uri   = rtrim(dirname($_SERVER['PHP_SELF']), '/\\');
		$extra = 'list_nguoidung.php';
		header("Location: http://$host$uri/$extra");
	}
?>