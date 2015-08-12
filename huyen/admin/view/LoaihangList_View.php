<?php include_once PATH_SYSTEM . '/public/admin_header.php';?>

<h1>Quản lý loại hàng</h1> 
					<hr>
					<p>
						<?php
							if($message){
							echo "<span class ='label label-warning'>" . $message . "</span>";
							}
						?>
					</p>
				<p class="text-right">
					<a href="admin.php?c=loaihang&a=form"  class="btn btn-success" >
						<span class="glyphicon glyphicon-plus" aria-hidden="true"></span>
						Thêm mới
					</a>
				</p>
				<table class="table table-striped">
					  <thead>
						<th>Mã loại hàng</th>
						<th>Tên loại hàng</th>
						<th>Ghi chú</th>
					  </thead>
					  <tbody>
					<?php
						if($list_loaihang) {
						foreach($list_loaihang as $value) :?>
							<tr>
								<td><?=$value['MaLoaiHang']?></td>
								<td><?=$value['TenLoaiHang']?></td>
								<td>
									<a href="admin.php?c=loaihang&a=edit&MaLoaiHang=<?=$value['MaLoaiHang']?>"type="button" class="btn btn-info" data-toggle="tooltip" data-placement="bottom" title="Sửa"  >
										<span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>
									</a>
									<a href="admin.php?c=loaihang&a=delete&MaLoaiHang=<?=$value['MaLoaiHang']?>"type="button" class="btn btn-danger" data-toggle="tooltip" data-placement="bottom" title="Xóa" onclick="'.$confirm.'">
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
