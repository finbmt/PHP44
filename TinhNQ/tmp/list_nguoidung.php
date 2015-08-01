<?php
	include_once 'database.php';
	$sql = "SELECT * FROM NguoiDung";
	$result = mysqli_query($db, $sql);
	mysqli_close($db);
	
	$confirm = " return confirm('Bạn có chắc muốn xóa người dùng này không?');";
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
				<!-- Button trigger modal -->
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
				<h1>Quản lý người dùng</h1>
				<hr>
				<p class="text-right">
					<a href="form_nguoidung.php" class="btn btn-success ">
						<span class="glyphicon glyphicon-plus" aria-hidden="true"></span>
						Thêm mới
					</a>
				</p>
				<table class="table table-bordered">
					<thead>
						<th>Mã</th>
						<th>Tên Truy Cập</th>
						<th>Mật Khẩu</th>
						<th>Họ Tên</th>
						<th>#</th>
					</thead>
					<tbody>
						<?php
						while($row = $result->fetch_array())
						{
							echo '<tr>';
							echo '<td>'.$row['MaNguoiDung'].'</td>';
							echo '<td>'.$row['TenTruyCap'].'</td>';
							echo '<td>'.$row['MatKhau'].'</td>';
							echo '<td>'.$row['HoTen'].'</td>';
							echo '<td>';
							echo '<a href="update_nguoidung.php?MaNguoiDung='.$row['MaNguoiDung'].'" type="button" class="btn btn-warning" data-toggle="tooltip" data-placement="bottom" title="Sửa">
									<span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>
								</a> ';
							echo '<a href="delete_nguoidung.php?MaNguoiDung='.$row['MaNguoiDung'].'" type="button" class="btn btn-danger" data-toggle="tooltip" data-placement="bottom" title="Xóa" onclick="'.$confirm.'">
									<span class="glyphicon glyphicon-minus" aria-hidden="true"></span>
								</a>';
							echo '</td>';
							echo '</tr>';
						}
						?>
					</tbody>
				</table>
				<div class="btn-group" role="group" aria-label="...">
				  <button type="button" class="btn btn-default">1</button>
				  <button type="button" class="btn btn-default">2</button>
				  <button type="button" class="btn btn-default">3</button>
				</div>
				<div class="text-right">
					<a href="form_nguoidung.php" class="btn btn-success ">
						<span class="glyphicon glyphicon-plus" aria-hidden="true"></span>
						Thêm mới
					</a>
				</div>
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

<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script>
$(document).ready(function(){
    $('[data-toggle="tooltip"]').tooltip(); 
});
</script>
</body>
</html>
