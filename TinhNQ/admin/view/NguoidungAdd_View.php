<?php include_once PATH_SYSTEM. '/public/admin_header.php';?>

<h1>Thêm người dùng</h1>
<hr>
<form class="form-horizontal" action="admin.php?c=nguoidung&a=doAdd" method="POST">
  <div class="form-group">
	<label class="col-sm-2 control-label">Mã Người dùng</label>
	<div class="col-sm-10">
	  <input type="text" class="form-control" name="MaNguoiDung" placeholder="Mã Người Dùng">
	</div>
  </div>
  <div class="form-group">
	<label class="col-sm-2 control-label">Tên Truy Cập</label>
	<div class="col-sm-10">
	  <input type="text" class="form-control" name="TenTruyCap" placeholder="Tên Truy Cập">
	</div>
  </div>
  <div class="form-group">
	<label for="inputPassword3" class="col-sm-2 control-label">Mật khẩu</label>
	<div class="col-sm-10">
	  <input type="password" class="form-control" name="MatKhau" id="inputPassword3" placeholder="Mật khẩu">
	</div>
  </div>
  <div class="form-group">
	<label class="col-sm-2 control-label">Họ Tên</label>
	<div class="col-sm-10">
	  <input type="text" class="form-control" name="HoTen" placeholder="Họ Tên">
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