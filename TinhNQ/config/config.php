<?php
	//CONFIG DATABASE
	define("DB_SERVER_NAME", "localhost");
	define("DB_USER_NAME", "root");
	define("DB_PASSWORD", "mysql");
	define("DB_DATABASE", "webshopping");

	//CONFIG ĐƯỜNG DẪN
	define("MAIN_URL", "http://php43.com/TinhNQ/");

	define("CONTROLLER_DEFAULT", "Index");
	define("ACTION_DEFAULT", "Index");
	define("PATH_ADMIN_CONTROLLER", PATH_SYSTEM . "/admin/controller/");
	define("PATH_ADMIN_VIEW", PATH_SYSTEM . "/admin/view/");
	define("PATH_ADMIN_MODEL", PATH_SYSTEM . "/admin/model/");
	define("KEY_MD5", "123456");
	
	$host  = $_SERVER['HTTP_HOST'];
	$uri   = rtrim(dirname($_SERVER['PHP_SELF']), '/\\');
	define("URL_ADMIN_PAGE", "http://$host$uri/admin.php");
	
	// user
	define("PATH_USER_CONTROLLER", PATH_SYSTEM . "/user/controller/");
	define("PATH_USER_VIEW", PATH_SYSTEM . "/user/view/");
	define("PATH_USER_MODEL", PATH_SYSTEM . "/user/model/");
	define("URL_USER_PAGE", "http://$host$uri/index.php");
?>