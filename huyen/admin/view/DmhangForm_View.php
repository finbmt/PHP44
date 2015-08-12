<?php include_once PATH_SYSTEM . '/public/admin_header.php';?>

<h1><?= $text;?> hàng hóa</h1> 
				<hr>
						<form class="form-horizontal" action="admin.php?c=dmhang&a=doSave" method="POST">
						<?php if (isset($type)) { ?>
						  <div class="form-group">
							<label for="inputEmail3" class="col-sm-2 control-label">Mã Hàng Hóa</label>
								<div class="col-sm-10">
								  <input type="text" class="form-control" name="MaHang"
								   value="<?= $item['MaHang'];?>" placeholder="Mã Hàng Hóa">
								   <input type="hidden" class="form-control" name="MaHang"
								   value="<?= $item['MaHang'];?>" >
								   <input type="hidden" class="form-control" name="type"
									value="<?= $type;?>" >
								</div>
						  </div> 
						  <?php } ?>
						  <div class="form-group">
								<label for="inputEmail3" class="col-sm-2 control-label">Tên hàng hóa</label>
									<div class="col-sm-10">
									  <input type="text" class="form-control"  required id="inputEmail3" name="TenHang" 
									  value="<?=$item['TenHang'];?>" placeholder="Tên hàng hóa">
									</div>
						  </div>
						  <div class="form-group">
								<label for="inputEmail3" class="col-sm-2 control-label">DVT</label>
									<div class="col-sm-10">
									  <input type="text" class="form-control" required id="inputEmail3" name="DVT"
									  value="<?= $item['DVT'];?>" placeholder="DVT">
									</div>
						  </div>
						  <div class="form-group">
								<label for="inputEmail3" class="col-sm-2 control-label">Đơn giá</label>
									<div class="col-sm-10">
									  <input type="text" class="form-control" required id="inputEmail3" name="DonGia"
									  value="<?= $item['DonGia'];?>" placeholder="Đơn giá">
									</div>
						  </div>
						  <div class="form-group">
								<label for="inputEmail3" class="col-sm-2 control-label">Nhà cung cấp</label>
									<div class="col-sm-10">
									  <select class="form-control" name="MaNhaCungCap" required data-placeholder="Nhà cung cấp">
										<option value="">Chọn...</option>
										<?php if($list_ncc) {
										foreach ($list_ncc as $value) :?>
											<?php
												$selected = "";
												if ($value['MaNhaCungCap'] == $item['MaNhaCungCap']) {
													$selected = "selected";
												}
											?>
											<option value="<?=$value['MaNhaCungCap']?>" <?=$selected?>><?=$value['TenNhaCungCap']?></option>
										<?php endforeach?>
										<?php }?>
								   </select>
									</div>
						  </div>
						  <div class="form-group">
								<label for="inputEmail3" class="col-sm-2 control-label">Loại Hàng</label>
									<div class="col-sm-10">
									  <input type="text" class="form-control" required id="inputEmail3" name="MaLoaiHang"
									  value="<?= $item['MaLoaiHang'];?>" placeholder="Loại Hàng">
									</div>
						  </div>
						  <div class="form-group">
								<label for="inputEmail3" class="col-sm-2 control-label">Hình Ảnh</label>
									<div class="col-sm-10">
									  <input type="text" class="form-control" required id="inputEmail3" name="HinhAnh"
									  value="<?= $item['HinhAnh'];?>" placeholder="Hình Ảnh">
									</div>
						  </div>
						  <div class="form-group">
								<label for="inputEmail3" class="col-sm-2 control-label">Mô tả</label>
									<div class="col-sm-10">
									  <input type="text" class="form-control"  id="inputEmail3" name="MoTa"
									  value="<?= $item['MoTa'];?>" placeholder="Mô tả">
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
