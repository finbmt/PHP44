	<html>
	<head>
		<title>Giai PTB2</title>
	</head>
	<body>
		<?php
		$data = mysqli_connect("localhost","root","mysql","vinh");
		if (isset($_POST["btnGiai"])) 
		{
  		
  			$a = $_POST["txtA"];
  			$b = $_POST["txtb"];
 			$c = $_POST["txtC"];
  			
		 if ($a == "" || $b == "" || $c  == "" ) {
				   echo "bạn vui lòng nhập đầy đủ thông tin";
  		}
  			else
  				{
				   
    				$sql = "INSERT INTO `PTB2`(`GetA`, `GetB`, `GetC`) VALUES ('$a','$b','$c')";				   
   					mysqli_query($data,$sql);
				   echo "chúc mừng bạn đã đăng ký thành công";
			 	}

	if (a!=o)
	{
		$ketqua = giaiptb2 ($a, $b, $c);
	}

	else
	{
	 	 $ketqua = giaiptb1 ($b, $c);
	}


	}
	?>



<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Bậc 2</title>
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="css/main.css" rel="stylesheet">
</head>
<body>
		
			<!-- nội dung-->
			<div class="col-md-9">
		<h1 style="text-align:center;color:#5cb85c;">Giải Phương Trình Ax<sup>2</sup>+Bx+c=0 </h1>
				<hr>
				<form action ="gptb2.php" method="POST">

					<div class="form-group">
					<label for="inputEmail3" class="col-sm-2 control-label">Nhập A </label>
					<div class="col-sm-10">
					<input type="text" class="form-control" name="txtA" placeholder="">
					</div>
				  </div>
				  <div class="form-group">
					<label for="inputEmail3" class="col-sm-2 control-label">Nhập B</label>
					<div class="col-sm-10">
					  <input type="text" class="form-control" name="txtB" placeholder="">
					</div>
				  </div>
				  <div class="form-group">
					<label for="inputPassword3" class="col-sm-2 control-label">Nhập C</label>
					<div class="col-sm-10">
					  <input type="text" class="form-control" name="txtC" placeholder="">
					</div>
				  
				  <hr>
				  <div class="form-group">
					<div class="col-sm-offset-2 col-sm-10">
					  <input type="submit" class="btn btn-success" name="btnGiai" value="Giải" />				

					  <input type="reset" class="btn btn-danger" name="btnGiai" value="Hủy bỏ"/><hr>

					   <div class="form-group">
					<h3><label style="color:#d9534f" class="col-sm-2 control-label">Kết Quả  =</label></h3>					
					<div class="col-sm-10">
					  <input type="text" class="form-control" value="<?php echo $ketqua ; ?>">
					</div>

				  </div>
					
					
					</div>
				  </div>
				</form>
			</div>
		</div>
	</div>
</div>


<!-- Modal -->
<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
</body>
</html>





