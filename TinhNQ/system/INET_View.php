<?php
if (!defined('PATH_SYSTEM')) exit('No direct script access allowed');

class INET_View
{
	private $_content = array();

	public function load($view, $data = array())
	{
		$file = PATH_ADMIN_VIEW . $view. '_View.php';
		if (!file_exists($file)) {
			exit('view khong ton tai :' . $view);
		}

		extract($data);

		ob_start();
		include_once $file;
		$content = ob_get_contents();
		ob_end_clean();

		$this->_content[] = $content;
	}

	public function show()
	{
		foreach ($this->_content as $html) {
			echo $html;
		}
	}
}
?>