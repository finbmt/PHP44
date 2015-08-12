<?php include_once PATH_SYSTEM . '/public/admin_header.php';?>

<h1>Quản lý người dùng</h1> 
					<hr>
					<p>
						<?php
							if($message){
							echo "<span class ='label label-warning'>" . $message . "</span>";
							}
						?>
					</p>
				<p class="text-right">
					<a href="admin.php?c=nguoidung&a=form"  class="btn btn-success" >
						<span class="glyphicon glyphicon-plus" aria-hidden="true"></span>
						Thêm mới
					</a>
				</p>
				<table class="table table-striped">
					  <thead>
						<th>Mã người dùng</th>
						<th>Tên truy cập</th>
						<th>Mật khẩu</th>
						<th>Họ tên</th>
						<th>Ghi chú</th>
					  </thead>
					  <tbody>
					<?php
						if($list_nguoidung) {
						foreach($list_nguoidung as $value) :?>
							<tr>
								<td><?=$value['MaNguoiDung']?></td>
								<td><?=$value['TenTruyCap']?></td>
								<td><?=$value['MatKhau']?></td>
								<td><?=$value['HoTen']?></td>
								<td>
									<a href="admin.php?c=nguoidung&a=edit&MaNguoiDung=<?=$value['MaNguoiDung']?>"type="button" class="btn btn-info" data-toggle="tooltip" data-placement="bottom" title="Sửa"  >
										<span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>
									</a>
									<a href="admin.php?c=nguoidung&a=delete&MaNguoiDung=<?=$value['MaNguoiDung']?>"type="button" class="btn btn-danger" data-toggle="tooltip" data-placement="bottom" title="Xóa" onclick="'.$confirm.'">
										<span class="glyphicon glyphicon-minus" aria-hidden="true"></span>
									</a>
								</td>
							</tr>
							
						<?php endforeach ?>
						<?php }
								else
								{
									echo "khong co data";
								}
						?>
					  </tbody>
					  		 
				</table>
				
			
				
			
	
<?php include_once PATH_SYSTEM . '/public/admin_footer.php';?> 
