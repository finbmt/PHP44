<?php
	include_once 'database.php';
	if($_GET["MaNguoiDung"])
	{
		$MaNguoiDung = $_GET["MaNguoiDung"];
		$sql = "SELECT * FROM `NguoiDung` WHERE `MaNguoiDung` = '$MaNguoiDung'";
		$result = mysqli_query($db, $sql);
		$row = $result->fetch_array();
		mysqli_close($db);
	}

	if($_POST["btnSave"])
	{
		//b1 lấy giá trị
		$MaNguoiDung = $_POST["MaNguoiDung"];
		$TenTruyCap = $_POST["TenTruyCap"];
		$MatKhau = $_POST["MatKhau"];
		$HoTen = $_POST["HoTen"];

		$sql = "UPDATE `NguoiDung` SET 
						`TenTruyCap`='$TenTruyCap',
						`MatKhau`='$MatKhau',
						`HoTen`='$HoTen' 
						WHERE `MaNguoiDung`='$MaNguoiDung'";
		$result = mysqli_query($db, $sql);
		mysqli_close($db);

		// di chuyen ve man hinh list
		$host  = $_SERVER['HTTP_HOST'];
		$uri   = rtrim(dirname($_SERVER['PHP_SELF']), '/\\');
		$extra = 'list_nguoidung.php';
		header("Location: http://$host$uri/$extra");
	}
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Page Title</title>
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="css/main.css" rel="stylesheet">
</head>
<body>
<div class="container">
	<div class="navbar navbar-default">
		<div class="navbar-header">
			<a class="navbar-brand logo-navbar" href="#">
				<img class="logo" src="http://www.norabrowndesign.com/portfolio/logos/sds/sleeping-dog-logo-2.gif"/>
			</a>
		</div>
		<ul class="nav navbar-nav">
			<li class="active"><a href="#">Trang chủ</a></li>
			<li><a href="#">Sản phẩm</a></li>
			<li><a href="#">Liên hệ</a></li>
		</ul>
		<ul class="nav navbar-nav navbar-right">
			<li>
				<button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal">
				  Đăng nhập
				</button>
			</li>
		</ul>
	</div>
	<div class="container-fluid">
		<div class="row">
			<!-- trái side bar-->
			<div class="col-md-3">
				<?php
					include_once "menu_left.php";
				?>
			</div>
			
			<!-- nội dung-->
			<div class="col-md-9">
				<h1>Sửa người dùng</h1>
				<hr>
				<form class="form-horizontal" action="update_nguoidung.php" method="POST">
				  <div class="form-group">
					<label class="col-sm-2 control-label">Mã Người dùng</label>
					<div class="col-sm-10">
					  <input type="text" class="form-control"
					   value="<?php echo $row['MaNguoiDung'];?>" placeholder="Mã Người Dùng">
					   <input type="hidden"
					   class="form-control" name="MaNguoiDung"
					   value="<?php echo $row['MaNguoiDung'];?>" placeholder="Mã Người Dùng">
					</div>
				  </div>
				  <div class="form-group">
					<label class="col-sm-2 control-label">Tên Truy Cập</label>
					<div class="col-sm-10">
					  <input type="text" class="form-control" name="TenTruyCap"
					   value="<?php echo $row['TenTruyCap'];?>" placeholder="Tên Truy Cập">
					</div>
				  </div>
				  <div class="form-group">
					<label for="inputPassword3" class="col-sm-2 control-label">Mật khẩu</label>
					<div class="col-sm-10">
					  <input type="password" class="form-control" name="MatKhau" 
					   value="<?php echo $row['MatKhau'];?>" placeholder="Mật khẩu">
					</div>
				  </div>
				  <div class="form-group">
					<label class="col-sm-2 control-label">Họ Tên</label>
					<div class="col-sm-10">
					  <input type="text" class="form-control" name="HoTen"
					   value="<?php echo $row['HoTen'];?>" placeholder="Họ Tên">
					</div>
				  </div>
				  <hr>
				  <div class="form-group">
					<div class="col-sm-offset-2 col-sm-10">
						<input type="submit" class="btn btn-info" name="btnSave" value="Lưu Lại">
					  	<button type="submit" class="btn btn-default">Hủy bỏ</button>
					</div>
				  </div>
				</form>
			</div>
		</div>
	</div>
</div>


<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Đăng nhập</h4>
      </div>
      <div class="modal-body">
        <form>
		  <div class="form-group">
			<label for="exampleInputEmail1">Email address</label>
			<input type="email" class="form-control" id="exampleInputEmail1" placeholder="Email">
		  </div>
		  <div class="form-group">
			<label for="exampleInputPassword1">Password</label>
			<input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
		  </div>
		  <button type="submit" class="btn btn-success">Đăng nhập</button>
		  <button type="submit" class="btn btn-default">Hủy bỏ</button>
		</form>
      </div>
    </div>
  </div>
</div>
<script>
$(document).ready(function(){
    $('[data-toggle="tooltip"]').tooltip(); 
});
</script>
<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
</body>
</html>
