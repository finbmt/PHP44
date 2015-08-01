<?php
	include_once dirname(__FILE__)."/config/config.php";

	$controller = $_GET['c'];
	$action = $_GET['a'];
	$path_controller = "";

	// kiểm tra giá trị controller
	if ($controller) {
		$path_controller = PATH_SITE . "/admin/controller/". $controller. "_Controller.php";
		if (file_exists($path_controller))
		{
			echo "ton tai file";
		}
		else
		{
			$controller = "error";
			$path_controller = PATH_SITE . "/admin/controller/". $controller. "_Controller.php";
			$action = ACTION_DEFAULT;
			echo "site loi 404";
		}
	}
	else
	{
		$controller = CONTROLLER_DEFAULT;
		$action = ACTION_DEFAULT;
	}

	//$path_controller 
	//var_dump($controller, $action);
?>