<?php include_once PATH_SYSTEM. '/public/admin_header.php';?>

<h1><?= $text;?> người dùng</h1>
<hr>
<form class="form-horizontal" action="admin.php?c=nguoidung&a=doSave" method="POST">
	<?php if (isset($type)) { ?>
	<div class="form-group">
		<label class="col-sm-2 control-label">Mã Người dùng</label>
		<div class="col-sm-10">
		  <input type="text" class="form-control" name="Ma"
		   value="<?= $item['MaNguoiDung'];?>" placeholder="Mã Người Dùng">
		   <input type="hidden" class="form-control" name="MaNguoiDung"
		   value="<?= $item['MaNguoiDung'];?>" >
		   <input type="hidden" class="form-control" name="type"
		   value="<?= $type;?>" >
		</div>
	</div>
  <?php } ?>
  <div class="form-group">
	<label class="col-sm-2 control-label">Tên Truy Cập</label>
	<div class="col-sm-10">
	  <input type="text" class="form-control" name="TenTruyCap"
	   value="<?= $item['TenTruyCap'];?>" placeholder="Tên Truy Cập">
	</div>
  </div>
  <div class="form-group">
	<label for="inputPassword3" class="col-sm-2 control-label">Mật khẩu</label>
	<div class="col-sm-10">
	  <input type="password" class="form-control" name="MatKhau" id="inputPassword3"
	   value="<?= $item['MatKhau'];?>" placeholder="Mật khẩu">
	</div>
  </div>
  <div class="form-group">
	<label class="col-sm-2 control-label">Họ Tên</label>
	<div class="col-sm-10">
	  <input type="text" class="form-control" name="HoTen" required placeholder="Họ Tên"
	   value="<?= $item['HoTen'];?>" >
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

<?php include_once PATH_SYSTEM. '/public/admin_footer.php';?>