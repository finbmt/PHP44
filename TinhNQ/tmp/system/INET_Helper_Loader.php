<?php
if (!defined('PATH_SITE')) exit('No direct script access allowed');

class INET_Helper_Loader
{
	public function load($helper)
    {
        $helper = ucfirst($helper) . '_Helper';
        require_once(PATH_SITE . '/system/helper/' . $helper . '.php');
    }
}

?>