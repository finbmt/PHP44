<?php include_once PATH_SYSTEM. '/public/admin_header.php';?>

<h1><?= $text;?> Hàng Hóa</h1>
<hr>
<form class="form-horizontal" action="admin.php?c=dmhang&a=doSave" method="POST" enctype="multipart/form-data">
	<?php if (isset($type)) { ?>
	<div class="form-group">
		<label class="col-sm-2 control-label">Mã Hàng hóa</label>
		<div class="col-sm-10">
		  <input type="text" class="form-control" name="Ma"
		   value="<?= $item['MaHang'];?>" placeholder="Mã Hàng hóa">
		   <input type="hidden" class="form-control" name="MaHang"
		   value="<?= $item['MaHang'];?>" >
		   <input type="hidden" class="form-control" name="type"
		   value="<?= $type;?>" >
		</div>
	</div>
  <?php } ?>
  <div class="form-group">
	<label class="col-sm-2 control-label">Tên hàng hóa</label>
	<div class="col-sm-10">
	  <input type="text" class="form-control" required name="TenHang"
	   value="<?= $item['TenHang'];?>" placeholder="Tên hàng hóa">
	</div>
  </div>
  <div class="form-group">
	<label class="col-sm-2 control-label">DVT</label>
	<div class="col-sm-10">
	  <input type="text" class="form-control" required name="DVT"
	   value="<?= $item['DVT'];?>" placeholder="DVT">
	</div>
  </div>
  <div class="form-group">
	<label class="col-sm-2 control-label">Đơn giá</label>
	<div class="col-sm-10">
	  <input type="text" class="form-control" name="DonGia" required placeholder="Đơn giá"
	   value="<?= $item['DonGia'];?>" >
	</div>
  </div>
  <div class="form-group">
	<label class="col-sm-2 control-label">Nhà cung cấp</label>
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
	<label class="col-sm-2 control-label">Loại Hàng</label>
	<div class="col-sm-10">
	   <select class="form-control" name="MaLoaiHang" required>
			<option value="">Chọn...</option>
			<?php if($list_loaihang) {
			foreach ($list_loaihang as $value) :?>
				<?php
					$selected = "";
					if ($value['MaLoaiHang'] == $item['MaLoaiHang']) {
						$selected = "selected";
					}
				?>
				<option value="<?=$value['MaLoaiHang']?>" <?=$selected?>><?=$value['TenLoaiHang']?></option>
			<?php endforeach?>
			<?php }?>
	   </select>
	</div>
  </div>
  <div class="form-group">
	<label class="col-sm-2 control-label">Hình Ảnh</label>
	<div class="col-sm-10">
	   <input type="file" id="HinhUpload" class="form-control" name="HinhUpload">
	   <br>
	   <img id="imgTag" src=""/>
	   <input type="hidden" class="form-control" name="HinhAnh" value="<?= $item['HinhAnh'];?>" >
	</div>
  </div>
   <div class="form-group">
	<label class="col-sm-2 control-label">Mô tả</label>
	<div class="col-sm-10">
		<textarea class="form-control" name="MoTa" row=30 col="40"><?= $item['MoTa'];?></textarea>
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