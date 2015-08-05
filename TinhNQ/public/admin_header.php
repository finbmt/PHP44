<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Page Title</title>
	<link href="public/css/bootstrap.min.css" rel="stylesheet">
	<link href="public/css/main.css" rel="stylesheet">
</head>
<body>
<div class="container">
	<div class="navbar navbar-default">
		<div class="navbar-header">
			<a class="navbar-brand logo-navbar" href="#">
				<img class="logo" src="http://www.norabrowndesign.com/portfolio/logos/sds/sleeping-dog-logo-2.gif"/>
			</a>
			
		</div>
		<ul class="nav navbar-nav">
			<li class="active"><a href="#">Trang chủ</a></li>
			<li><a href="#">Sản phẩm</a></li>
			<li><a href="#">Liên hệ</a></li>
		</ul>
		<ul class="nav navbar-nav navbar-right">
			<li>
				<!-- Button trigger modal -->
				<button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal">
				  Đăng nhập
				</button>
			</li>
		</ul>
	</div>
	<div class="container-fluid">
		<div class="row">
			<!-- trái side bar-->
			<div class="col-md-3">
				<?php
					include_once "menu_left.php";
				?>
			</div>
			
			<!-- nội dung-->
			<div class="col-md-9">
				