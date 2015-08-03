<?php
if (!defined('PATH_SYSTEM')) exit('No direct script access allowed');

class INET_Helper
{
	public function load($helper)
	{
		$file = PATH_SYSTEM . '/system/helper/'.$helper. '_Helper.php';
		if (!file_exists($file)) {
			exit('helper khong ton tai :' . $helper);
		}
		include_once $file ; 
	}
}
?>