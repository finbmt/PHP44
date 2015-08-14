<?php include_once PATH_SYSTEM . '/public/admin_header.php';?>

<h1><?= $text;?> nhà cung cấp</h1> 
				<hr>
						<form class="form-horizontal" action="admin.php?c=nhacungcap&a=doSave" method="POST">
						<?php if (isset($type)) { ?>
						  <div class="form-group">
							<label for="inputEmail3" class="col-sm-2 control-label">Mã nhà cung cấp</label>
								<div class="col-sm-10">
								  <input type="text" class="form-control" name="MaNhaCungCap"
								   value="<?= $item['MaNhaCungCap'];?>" placeholder="Mã nhà cung cấp">
								   <input type="hidden" class="form-control" name="MaNhaCungCap"
								   value="<?= $item['MaNhaCungCap'];?>" >
								   <input type="hidden" class="form-control" name="type"
									value="<?= $type;?>" >
								</div>
						  </div> 
						  <?php } ?>
						  <div class="form-group">
								<label for="inputEmail3" class="col-sm-2 control-label">Tên nhà cung cấp</label>
									<div class="col-sm-10">
									  <input type="text" class="form-control" required  id="inputEmail3" name="TenNhaCungCap" 
									  value="<?=$item['TenNhaCungCap'];?>" placeholder="Tên nhà cung cấp">
									</div>
						  </div>
						  <div class="form-group">
								<label for="inputEmail3" class="col-sm-2 control-label">Địa chỉ</label>
									<div class="col-sm-10">
									  <input type="text" class="form-control"  id="inputEmail3" name="DiaChi" 
									  value="<?=$item['DiaChi'];?>" placeholder="Địa chỉ">
									</div>
						  </div>
						  <div class="form-group">
								<label for="inputEmail3" class="col-sm-2 control-label">Điện thoại</label>
									<div class="col-sm-10">
									  <input type="text" class="form-control"  id="inputEmail3" name="DienThoai"
									  value="<?= $item['DienThoai'];?>" placeholder="Điện thoại">
									</div>
						  </div>
						  <div class="form-group">
								<label for="inputEmail3" class="col-sm-2 control-label">Email</label>
									<div class="col-sm-10">
									  <input type="text" class="form-control"  id="inputEmail3" name="Email"
									  value="<?= $item['Email'];?>" placeholder="Email">
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
