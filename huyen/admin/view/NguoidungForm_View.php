<?php include_once PATH_SYSTEM . '/public/admin_header.php';?>

<h1><?= $text;?> người dùng</h1> 
				<hr>
						<form class="form-horizontal" action="admin.php?c=nguoidung&a=doSave" method="POST">
						<?php if (isset($type)) { ?>
						  <div class="form-group">
							<label for="inputEmail3" class="col-sm-2 control-label">Mã Người dùng</label>
								<div class="col-sm-10">
								  <input type="text" class="form-control" name="MaNguoiDung"
								   value="<?= $item['MaNguoiDung'];?>" placeholder="Mã Người Dùng">
								   <input type="hidden" class="form-control" name="MaNguoiDung"
								   value="<?= $item['MaNguoiDung'];?>" >
								   <input type="hidden" class="form-control" name="type"
									value="<?= $type;?>" >
								</div>
						  </div> 
						  <?php } ?>
						  <div class="form-group">
								<label for="inputEmail3" class="col-sm-2 control-label">Tên Truy Cập</label>
									<div class="col-sm-10">
									  <input type="text" class="form-control"   id="inputEmail3" name="TenTruyCap" 
									  value="<?=$item['TenTruyCap'];?>" placeholder="Tên Truy Cập">
									</div>
						  </div>
						  <div class="form-group">
								<label for="inputPassword3" class="col-sm-2 control-label">Mật khẩu</label>
									<div class="col-sm-10">
									  <input type="password" class="form-control"  id="inputPassword3" name="MatKhau" 
									  value="<?=$item['MatKhau'];?>" placeholder="Mật khẩu">
									</div>
						  </div>
						  <div class="form-group">
								<label for="inputEmail3" class="col-sm-2 control-label">Họ Tên</label>
									<div class="col-sm-10">
									  <input type="text" class="form-control" required id="inputEmail3" name="HoTen"
									  value="<?= $item['HoTen'];?>" placeholder="Họ Tên">
									</div>
						  </div>
						  <hr>
							  <div class="form-group">
									<div class="col-sm-offset-2 col-sm-10">
									  <input type="submit" class="btn btn-success" name="btnSave" value="Lưu"/>
									  <button type="submit" class="btn btn-default">Hủy bỏ</button>
									</div>
							  </div>
						</form>
			
				
			
	
<?php include_once PATH_SYSTEM . '/public/admin_footer.php';?> 
