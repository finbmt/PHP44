	<html>
	<head>
		<title>Dang Ki</title>
	</head>
	<body>
		<?php
		$data = mysqli_connect("localhost","root","mysql","vinh");
		if (isset($_POST["btnDangKi"])) {
  			//lấy thông tin từ các form bằng phương thức POST
  			$username = $_POST["username"];
  			$password = $_POST["pass"];
 			 $name = $_POST["name"];
  			$email = $_POST["email"];
  			//Kiểm tra điều kiện bắt buộc đối với các field không được bỏ trống
			  if ($username == "" || $password == "" || $name == "" || $email == "") {
				   echo "bạn vui lòng nhập đầy đủ thông tin";
  			}
  			else
  				{
				   
    				$sql = "INSERT INTO `DangKi`(`HoTen`, `TenDangNhap`, `MatKhau`) VALUES ('$name','$username','$password')";				   
   					mysqli_query($data,$sql);
				   echo "chúc mừng bạn đã đăng ký thành công";
			 	}
	}
	?>
	<form action="database.php" method="post">
		<table>
			<tr>
				<td colspan="2">Form dang ky</td>
			</tr>	
			<tr>
				<td>Username :</td>
				<td><input type="text" id="username" name="username"></td>
			</tr>
			<tr>
				<td>Password :</td>
				<td><input type="password" id="pass" name="pass"></td>
			</tr>
			<tr>
				<td>Ho Ten :</td>
				<td><input type="text" id="name" name="name"></td>
			</tr>
			<tr>
				<td>Email :</td>
				<td><input type="text" id="email" name="email"></td>
			</tr>
			<tr>
				<td colspan="2" align="center"><input type="submit" name="btnDangKi" value="Dang ky"></td>
			</tr>
 
		</table>
 
	</form>
	</body>
	</html>