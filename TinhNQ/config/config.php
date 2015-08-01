<?php
	//CONFIG DATABASE
	define("DB_SERVER_NAME", "localhost");
	define("DB_USER_NAME", "root");
	define("DB_PASSWORD", "mysql");
	define("DB_DATABASE", "webshopping");

	//CONFIG ĐƯỜNG DẪN VÀ URL
	$path = dirname(dirname(__FILE__));
	define("PATH_SITE", $path);
	define("MAIN_URL", "http://php43.com/TinhNQ/");

	define("CONTROLLER_DEFAULT", "index");
	define("ACTION_DEFAULT", "index");
?>