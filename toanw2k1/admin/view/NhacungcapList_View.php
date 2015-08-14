<?php include_once PATH_SYSTEM . '/public/admin_header.php';?>

<h1>Quản Lý Nhà Cung Cấp</h1> 
					<hr>
					<p>
						<?php
							if($message){
							echo "<span class ='label label-warning'>" . $message . "</span>";
							}
						?>
					</p>
				<p class="text-right">
					<a href="admin.php?c=nhacungcap&a=form"  class="btn btn-success" >
						<span class="glyphicon glyphicon-plus" aria-hidden="true"></span>
						Thêm mới
					</a>
				</p>
				<table class="table table-striped">
					  <thead>
						<th>Mã nhà cung cấp</th>
						<th>Tên nhà cung cấp</th>
						<th>Địa chỉ</th>
						<th>Điện thoại</th>
						<th>Email</th>
						<th>Ghi chú</th>
					  </thead>
					  <tbody>
					<?php
						if($list_nhacungcap) {
						foreach($list_nhacungcap as $value) :?>
							<tr>
								<td><?=$value['MaNhaCungCap']?></td>
								<td><?=$value['TenNhaCungCap']?></td>
								<td><?=$value['DiaChi']?></td>
								<td><?=$value['DienThoai']?></td>
								<td><?=$value['Email']?></td>
								<td>
									<a href="admin.php?c=nhacungcap&a=edit&MaNhaCungCap=<?=$value['MaNhaCungCap']?>"type="button" class="btn btn-info" data-toggle="tooltip" data-placement="bottom" title="Sửa"  >
										<span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>
									</a>
									<a href="admin.php?c=nhacungcap&a=delete&MaNhaCungCap=<?=$value['MaNhaCungCap']?>"type="button" class="btn btn-danger" data-toggle="tooltip" data-placement="bottom" title="Xóa" onclick="'.$confirm.'">
										<span class="glyphicon glyphicon-minus" aria-hidden="true"></span>
									</a>
								</td>
							</tr>
							
						<?php endforeach ?>
						<?php }
								else
								{
									echo "không có data";
								}
						?>
					  </tbody>
					  		 
				</table>
				
			
				
			
	
<?php include_once PATH_SYSTEM . '/public/admin_footer.php';?> 
