<?php include_once PATH_SYSTEM . '/public/admin_header.php';?>

<h1><?= $text;?> loại hàng</h1> 
				<hr>
						<form class="form-horizontal" action="admin.php?c=loaihang&a=doSave" method="POST">
						<?php if (isset($type)) { ?>
						  <div class="form-group">
							<label for="inputEmail3" class="col-sm-2 control-label">Mã Loại Hàng</label>
								<div class="col-sm-10">
								  <input type="text" class="form-control" name="MaLoaiHang"
								   value="<?= $item['MaLoaiHang'];?>" placeholder="Mã Loại Hàng">
								   <input type="hidden" class="form-control" name="MaLoaiHang"
								   value="<?= $item['MaLoaiHang'];?>" >
								   <input type="hidden" class="form-control" name="type"
									value="<?= $type;?>" >
								</div>
						  </div> 
						  <?php } ?>
						  <div class="form-group">
								<label for="inputEmail3" class="col-sm-2 control-label">Tên Loại Hàng</label>
									<div class="col-sm-10">
									  <input type="text" class="form-control"   id="inputEmail3" name="TenLoaiHang" 
									  value="<?=$item['TenLoaiHang'];?>" placeholder="Tên Loại Hàng">
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
