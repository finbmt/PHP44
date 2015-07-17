<?php

	require_once "ptb2_giai.php";
	
	if($_POST["btnGiai"])
	{
		//b1 lấy giá trị
		$a = $_POST["txtA"];
		$b = $_POST["txtB"];
		$c = $_POST["txtC"];
		$ketqua = 0;
		if($a != 0)
		{
			$ketqua = giai_ptb2($a, $b, $c);
		}
		else
		{
			$ketqua = giai_ptb1($b, $c);
		}
	}
?>
			
	
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
			<nav class="navbar navbar-default">
	  <div class="container-fluid">
		<!-- Brand and toggle get grouped for better mobile display -->
		<div class="navbar-header">
		 
			 
			   <a class="navbar-brand logo-navbar" href="#">
				<img class ="logo" src="http://cachkiemtienonline.com/wp-content/uploads/quang-cao-rao-vat.jpg"/> 
				</a>
			  
		</div>

		<!-- Collect the nav links, forms, and other content for toggling -->
		<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
		  <ul class="nav navbar-nav">
			<li class="active"><a href="#">Hàng hóa  <span class="sr-only">(current)</span></a></li>
			<li><a href="#">Rao bán</a></li>
			<li class="dropdown">
			  <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Thêm <span class="caret"></span></a>
			  <ul class="dropdown-menu">
				<li><a href="#">Thông tin sản phẩm</a></li>
				<li><a href="#">Đánh giá</a></li>
				<li><a href="#">Tin tức </a></li>
				<li role="separator" class="divider"></li>
				<li><a href="#">Tên cửa hàng</a></li>
				<li role="separator" class="divider"></li>
				<li><a href="#">Thông tin khác</a></li>
			  </ul>
			</li>
		  </ul>
		  <form class="navbar-form navbar-left" role="search">
			<div class="form-group">
			  <input type="text" class="form-control" placeholder="Search">
			</div>
			<button type="submit" class="btn btn-default">Tìm kiếm</button>
		  </form>
		  <ul class="nav navbar-nav navbar-right">
					
			<!-- Button trigger modal -->
			<button type="button" class="btn btn-success navbar-btn" data-toggle="modal" data-target="#myModal">
			  Đăng Nhập
			</button>
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
									<input type="email" class="form-control" id="exampleInputEmail1" placeholder="Email">
								  </div>
								  <div class="form-group">
									<input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
								  </div>
									 <label>
										<input type="checkbox" values="remember-me " checked>Nhớ tài khoản
									 </label>
						</form>
					  </div>
					  <div class="modal-footer">
						<button type="button" class="btn btn-default" data-dismiss="modal">Hủy</button>
						<button type="button" class="btn btn-primary">Đăng nhập</button>
					  </div>
					</div>
				  </div>
				</div>
			
			
			
			
			
		  </ul>
		</div><!-- /.navbar-collapse -->
	  </div><!-- /.container-fluid -->
	</nav>
	<div class="container-fluid">
		 <div class="row">
				<div class="col-md-3">
					<div class="list-group">
					  <a href="#" class="list-group-item active">
					     <span class="glyphicon glyphicon-bookmark"></span>
						Danh mục
					  </a>
					  <a href="#" class="list-group-item">Laptop <span class="badge">9</span></a>
					  <a href="#" class="list-group-item">Máy tính bảng<span class="badge">8</span></a>
					  <a href="#" class="list-group-item">Điện thoại<span class="badge">14</span></a>
					  <a href="#" class="list-group-item">Đồ dùng sinh hoạt<span class="badge">20</span></a>
					</div>
				
				</div>
					
				<div class="col-md-9">
					<h1>Giải phương trình bậc 2 :Ax^2+Bx+C=0</h1> 
				<hr>
						<form class="form-horizontal" action="ptb2.php" method="POST">
						<div class="form-group">
								<label for="inputEmail3" class="col-sm-2 control-label">A</label>
									<div class="col-sm-10">
									  <input type="text" class="form-control" name="txtA" placeholder="A">
									</div>
						</div>
						<div class="form-group">
								<label for="inputEmail3" class="col-sm-2 control-label">B</label>
									<div class="col-sm-10">
									  <input type="text" class="form-control" name="txtB" placeholder="B">
									</div>
						</div>
						  
						<div class="form-group">
								<label for="inputEmail3" class="col-sm-2 control-label">C</label>
									<div class="col-sm-10">
									  <input type="text" class="form-control" name="txtC" placeholder="C">
									</div>
						</div>
						<div class="form-group">
								<label for="inputEmail3" class="col-sm-2 control-label">Kết quả</label>
									<div class="col-sm-10">
									  <input type="text" class="form-control" value="<?php echo $ketqua;?>">
									</div>
						</div>
						
						<div class="form-group">
									<div class="col-sm-offset-2 col-sm-10">
									  <input type="submit" class="btn btn-success" name="btnGiai" value="Giải">
									  <button type="submit" class="btn btn-default">Hủy bỏ</button>
									</div>
							  </div>
						</form>

						
					
							  
						
			</div>
		</div>
	</div>
</div>
		
		
</div>
	<script src="js/jquery.min.js"></script>
	<script src="js/bootstrap.min.js"></script>


</body>
</html>