<div class="left-sidebar">
	<h2>Loại hàng</h2>
	<div class="panel-group category-products" id="accordian"><!--category-productsr-->
		<?php if($list_loaihang) {
		foreach ($list_loaihang as $value) :?>
			<td><?=$value['TenHang']?></td>
			<div class="panel panel-default">
				<div class="panel-heading">
					<h4 class="panel-title"><a href="index.php?c=index&a=list&MaLoaiHang=<?=$value['MaLoaiHang']?>"><?=$value['TenLoaiHang']?></a></h4>
				</div>
			</div>
		<?php endforeach ?>
		<?php } ?>
	</div><!--/category-products-->

	<div class="brands_products"><!--brands_products-->
		<h2>Nhà Cung cấp</h2>
		<div class="brands-name">
			<ul class="nav nav-pills nav-stacked">
				<?php if($list_nhacungcap) {
				foreach ($list_nhacungcap as $value) :?>
					<li><a href="index.php?c=index&a=list&MaNhaCungCap=<?=$value['MaNhaCungCap']?>">
					<span class="pull-right">(<?=$value['count']?>)</span><?=$value['TenNhaCungCap']?></a>
					</li>
				<?php endforeach ?>
				<?php } ?>
			</ul>
		</div>
	</div><!--/brands_products-->
	
	<div class="shipping text-center"><!--shipping-->
		<img src="public/img/home/shipping.jpg" alt="" />
	</div><!--/shipping-->

</div>
				