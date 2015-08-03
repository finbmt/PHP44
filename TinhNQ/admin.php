<?php
	define('PATH_SYSTEM',  dirname(__FILE__));
	define("CONTROLLER_DEFAULT", "Index");
	define("ACTION_DEFAULT", "Index");
	define("PATH_ADMIN_CONTROLLER", PATH_SYSTEM . "/admin/controller/");
	define("PATH_ADMIN_VIEW", PATH_SYSTEM . "/admin/view/");

	include_once PATH_SYSTEM . "/config/config.php";

	$controller = isset($_GET['c']) ? $_GET['c'] : CONTROLLER_DEFAULT;
	$action = isset($_GET['a']) ? $_GET['a'] : ACTION_DEFAULT;

	// chuỗi tên class : Nguoidung_Controller
	$controller_class = ucfirst($controller) . "_Controller";
	// chuỗi file controller
	$file = PATH_ADMIN_CONTROLLER . $controller_class . ".php";

	// kiểm tra file tồn tại
	if (!file_exists($file))
	{
		exit("file controller khong ton tai");
	}

	include_once PATH_SYSTEM . '/system/INET_Controller.php';
	include_once $file;
	// kiểm tra class tồn tại
	if (!class_exists($controller_class)) {
		exit("class controller khong ton tai");
	}
	// khởi tạo đối tượng mới
	$objController = new $controller_class();

	// tạo chuỗi tên phương thúc : addAction
	$action_method = strtolower($action) . "Action";
	// kiểm tra hàm có tồn tại trong class không ?
	if (!method_exists($objController, $action_method)) {
		exit("phuong thuc nay khong ton tai");
	}

	// thực thi
	$objController->{$action_method}();

?>