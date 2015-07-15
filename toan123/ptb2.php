<?php
if($_POST["btnGiai"])
{
	$a=$_POST["txtA"];
	$b=$_POST["txtB"];
	$c=$_POST["txtC"];
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
			<li class="active"><a href="#">Trang ch?</a></li>
			<li><a href="#">Sản Phẩm</a></li>
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
			<!-- tr�i side bar-->
			<div class="col-md-3">
				<div class="list-group">
					<a href="#" class="list-group-item active">
						<span class="glyphicon glyphicon-heart-empty"></span>
						Thời trang
					</a>
					<a href="#" class="list-group-item">
						<span class="glyphicon glyphicon-circle-arrow-right"></span>
						<span class="badge">14</span>
						Quần áo nam
					</a>
					<a href="#" class="list-group-item">
						<span class="glyphicon glyphicon-circle-arrow-right"></span>
						<span class="badge">14</span>
						Quần áo nữ
					</a>
					<a href="#" class="list-group-item">
						<span class="glyphicon glyphicon-circle-arrow-right"></span>
						<span class="badge">14</span>
						Ph? ki?n
					</a>
					<a href="#" class="list-group-item">
						<span class="glyphicon glyphicon-circle-arrow-right"></span>
						<span class="badge">14</span>
						Qu?n �o tr? em
					</a>
				</div>
			</div>
			
			<!-- n?i dung-->
			<div class="col-md-9">
				<h1>Giải phương trình bậc 2 </h1>
				<hr>
				<form class="form-horizontal" action="ptb2.php" method="post"> 
				  <div class="form-group">
					<label for="inputEmail3" class="col-sm-2 control-label">txtA</label>
					<div class="col-sm-10">
					  <input type="text" class="form-control" name="txtA" placeholder="A">
					</div>
				  </div>
				  <div class="form-group">
					<label for="inputPassword3" class="col-sm-2 control-label">txtB</label>
					<div class="col-sm-10">
					  <input type="text" class="form-control" name="txtB" placeholder="B">
					</div>
				  </div>
				  <div class="form-group">
					<label for="inputEmail3" class="col-sm-2 control-label">txtC</label>
					<div class="col-sm-10">
					  <input type="text" class="form-control" name="txtC" placeholder="C">
					</div>
				</div>	
					<div class="form-group">
					<label for="inputPassword3" class="col-sm-2 control-label">Kết Quả</label>
					<div class="col-sm-10">
					  <input type="text" class="form-control" value="<?php echo $ketqua;?>">
					</div>
				  </div>
				  <hr>
				  <div class="form-group">
					<div class="col-sm-offset-2 col-sm-10">
					  <input type="submit" class="btn btn-default" name="btnGiai" value="Gi?i">
					  <button type="submit" class="btn btn-default">H?y b?</button>
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
        <h4 class="modal-title" id="myModalLabel">��ng nh?p</h4>
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
		  <button type="submit" class="btn btn-success">��ng nh?p</button>
		  <button type="submit" class="btn btn-default">H?y b?</button>
		</form>
      </div>
    </div>
  </div>
</div>
<script>
</script>
<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
</body>
</html>
