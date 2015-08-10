<?php include_once PATH_SYSTEM. '/public/admin_header.php';?>

<h1>Quản lý hàng hóa</h1>
<hr>
<p>

	<?php 
		if ($message) {
			echo "<span class='label label-warning'>". $message . "</span>";
		}
	?>
</p>
<p class="text-right">
	<a href="admin.php?c=dmhang&a=form" class="btn btn-success ">
		<span class="glyphicon glyphicon-plus" aria-hidden="true"></span>
		Thêm mới
	</a>
</p>
<table class="table table-bordered">
	<thead>
		<th>Hình ảnh</th>
		<th>Tên hàng</th>
		<th>DVT</th>
		<th>Nhà Cung cấp</th>
		<th>Loại Hàng</th>
		<th>#</th>
	</thead>
	<tbody>
		<?php if($list_hang) {
		foreach ($list_hang as $value) :?>
			<tr>
				<td>
					<img class="img" src="public/img/<?=$value['HinhAnh']?>">
				</td>
				<td><?=$value['TenHang']?></td>
				<td><?=$value['DVT']?></td>
				<td><?=$value['TenNhaCungCap']?></td>
				<td><?=$value['TenLoaiHang']?></td>
				<td>
					<a href="admin.php?c=dmhang&a=edit&MaHang=<?=$value['MaHang']?>" type="button" class="btn btn-warning" data-toggle="tooltip" data-placement="bottom" title="Sửa">
						<span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>
					</a>
					<a href="admin.php?c=dmhang&a=delete&MaHang=<?=$value['MaHang']?>" type="button" class="btn btn-danger" data-toggle="tooltip" data-placement="bottom" title="Xóa" onclick="'.$confirm.'">
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
<div class="btn-group" role="group" aria-label="...">
  <button type="button" class="btn btn-default">1</button>
  <button type="button" class="btn btn-default">2</button>
  <button type="button" class="btn btn-default">3</button>
</div>
<div class="text-right">
	<a href="admin.php?c=dmhang&a=form" class="btn btn-success ">
		<span class="glyphicon glyphicon-plus" aria-hidden="true"></span>
		Thêm mới
	</a>
</div>

<?php include_once PATH_SYSTEM. '/public/admin_footer.php';?>