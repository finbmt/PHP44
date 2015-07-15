<?php
	if($_POST["btnGiai"])
	{ 
		$a = $_POST["txtA"];
		$b = $_POST["txtB"];
		$c = $_POST["txtC"];
		
		//b2 tính delta:
		$delta = $b*$b - 4*$a*$c;
		
		//b3 tính kết quả 
		$ketqua = "";
			if ($delta <0)
			{
			// 3.1 nếu delta< 0
			$ketqua = "phương trình vô nghiệm";
			}
			elseif ($delta==0)
			{
			// 3.2 nếu delta= 0
			$x = (-$b)/(2*$a);
			$ketqua = "x1 = x2 = $x";
			}
			else 
			{
			// 3.3 nếu delta> 0
			$x1 = ((-$b)-sqrt ($delta)) / (2*$a);
			$x2 = ((-$b)+sqrt ($delta)) / (2*$a);
			$ketqua = "x1 = $x1 ; X2 = $x2";
			}
	}
	echo $a;
	echo $b;
	echo $c;
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
			
			
			<!-- nội dung-->
			<div class="col-md-9">
				<h1 class="#5cb85c">Giải Phương Trình Ax^2+Bx+C=0</h1>
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
					<label class="col-sm-2 control-label">Kết Quả =</label>
					<div class="col-sm-10">
					  <input type="text" class="form-control" value="<?php echo $ketqua; ?>">
					</div>
				  </div>
				  <hr>
				  <div class="form-group">
					<div class="col-sm-offset-2 col-sm-10">
						<input type="submit" class=" btn btn-success" name="btnGiai" value="Giải">
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
