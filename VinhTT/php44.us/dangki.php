
<?php
	$data = mysqli_connect("localhost","root","mysql","vinh");	
	if (isset($_POST["DangKi"])) 
	{
		$email = $_POST ["Email"];
		$id = $_POST ["TenTruyCap"];
		$pass = $_POST ["MatKhau"];
		$name = $_POST ["HoTen"];
					   
    		$sql = "INSERT INTO `NguoiDung` (`Email`,`TenTruyCap`, `MatKhau`, `HoTen`) VALUES ('$email','$id','$pass','$name')";				   
   			mysqli_query($data,$sql);
			echo "chúc mừng bạn đã đăng ký thành công";
	


	}
?>





<!DOCTYPE html>
<html>
<head>
<title>Trang Chủ</title>
<meta charset ="utf-8">
<link rel= " stylesheet" href = " css/bootstrap.min.css " >
<link rel= " stylesheet" href = " css/main.css " >

</head>
 <body style="background: url(http://lienminh.garena.vn/images/banners/bg-ekko.jpg)">
<body>
	<div class="navbar navbar-default">	
		<div class="container-fluid">	
		<div class="navbar-header">	 		
		<a class="navbar-brand logo-navbar" href="#">			
		<img class = "logo" src=" https://encrypted-tbn2.gstatic.com/images?q=tbn:ANd9GcRshZv8WxFaHPcY58NEXKRMwrUZeUE8R7lbCoQKr5RFGO0XcZYX" style="font-size: 100%">
		</a>		
	</div>
		<ul class="nav navbar-nav">
		<li class="active"><a href="http://php44.us"><span class="glyphicon glyphicon-home" aria-hidden="true"> </span>	Trang Chủ</a></li>
		<li><a href="#"> <span class="glyphicon glyphicon-th" aria-hidden="true"></span> Sản Phẩm</a></li>
		<li class="divider-vertical"></li>
		<li><a href="#"><span class="glyphicon glyphicon-earphone" aria-hidden="true"></span> Liên Hệ</a></li>
		<li><button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal">
		<span class="glyphicon glyphicon-log-in" aria-hidden="true"></span> Đăng Nhập</button>

<!-- Modal -->
	<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
		<div class="modal-dialog" role="document">
		<div class="modal-content">
		<div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Nhập thông tin đăng nhập</h4>
    </div>
		<div class="modal-body">    
			<form class="form-signin">
			<h2 class="form-signin-heading">Please sign in</h2>
			<label for="inputEmail" class="sr-only">Email address</label>
			<input type="email" id="inputEmail" class="form-control" placeholder="Email address" required autofocus>
			<label for="inputPassword" class="sr-only">Password</label>
			<input type="password" id="inputPassword" class="form-control" placeholder="Password" required>
			<div class="checkbox">
			<label>
            <input type="checkbox" value="remember-me"> Remember me
			</label>
		</div>
		<button class="btn btn-lg btn-primary btn-success" type="submit">Sign in</button>
		</form>	
		</div>
      
		</div>
		</div>
		</div></li>
	  </ul>
	</div>	 
	  </div>
	
  <div class="col-md-9">	
  <table class="table table-bordered nen-table">
		<thead>
		<h1>Thêm mới người dùng</h1><br>
		<hr>
			<font color="green"><h4> Thêm người dùng </h4></font>
				<hr>
				<form class="form-horizontal" action = "dangki.php" method = "POST" >
				  <div class="form-group">
					<label for="inputEmail3" class="col-sm-0 control-label"></label>
					<div class="col-sm-12">
					  <input type="text" class="form-control" id="inputEmail3" name = "HoTen" placeholder="Họ và tên đầy đủ">
					</div>
				  </div>
				  <div class="form-group">
					<label for="inputEmail3" class="col-sm-0 control-label"></label>
					<div class="col-sm-12">
					  <input type="text" class="form-control" id="inputEmail3" name = "TenDangNhap" placeholder="Tên Đăng Nhập">
					</div>
				  </div>
				  <div class="form-group">
					<label for="inputPassword3" class="col-sm-0 control-label"></label>
					<div class="col-sm-12">
					  <input type="password" class="form-control" id="inputPassword3" name = "MatKhau" placeholder="Mật khẩu">
					</div>
				  </div>
				  <div class="form-group">
					<label for="inputEmail3" class="col-sm-0 control-label"></label>
					<div class="col-sm-12">
					  <input type="text" class="form-control" id="inputEmail3" name = "Email" placeholder="Email">
					</div>
				  </div>
				  <hr>
				  <div class="form-group">
					<div class="col-sm-offset-0 col-sm-12">
					  <input type="submit" class="btn btn-success" name="DangKi" value = "Đăng Kí "/>
					   <input type="submit" class="btn btn-success" name="DangKi" value = "Hủy"/>
					
	</tbody><br>
	</table>
	</div>
</div>
	  </div>	
	<script src="js/jquery.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
</body>
</html>
