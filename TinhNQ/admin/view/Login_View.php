<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Page Title</title>
	<link href="public/css/bootstrap.min.css" rel="stylesheet">
	<link href="public/css/main.css" rel="stylesheet">
</head>
<body>

<div class="container">
	<form class="form-signin" action="admin.php?a=doLogin" method="POST">
		<h2 class="form-signin-heading">Đăng nhập</h2>
		<label for="inputEmail" class="sr-only">Tên truy cập</label>
		<input type="text" name="TenTruyCap" id="inputEmail" class="form-control" placeholder="Tên truy cập" required="" autofocus="">
		<label for="inputPassword" class="sr-only">Mật khẩu</label>
		<input type="password" name="MatKhau" id="inputPassword" class="form-control" placeholder="Mật khẩu" required="">
		<p>
			<?php 
			if ($message) {
				echo "<span class='label label-warning'>". $message . "</span>";
			}
			?>
		</p>
		<button class="btn btn-lg btn-primary btn-block" type="submit">Đăng nhập</button>
	</form>
</div>
</body>
</html>