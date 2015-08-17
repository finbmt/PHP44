<?php
if (!defined('PATH_SYSTEM')) exit('No direct script access allowed');

class INET_Controller
{
	protected $helper = null;
	protected $model = null;
	protected $view = null;

	//paging
	protected $number_record_page = 5;
	protected $current_page = 0;
	protected $limit = "";
	protected $paging_link = "";

	protected $user = array();

	public function __construct()
	{
		include_once PATH_SYSTEM . '/system/INET_Helper.php';
		$this->helper = new INET_Helper();

		include_once PATH_SYSTEM . '/system/INET_Model.php';
		$this->model = new INET_Model();

		include_once PATH_SYSTEM . '/system/INET_View.php';
		$this->view = new INET_View();
	}

	public function needLogin($need_login = true)
	{
		if ($need_login) {
			if (!isset($_SESSION['user_login'])) {
				$_SESSION['user_login'] = null; 
				$this->redirect("c=index&a=login");
			}
			else
			{
				$this->user = $_SESSION['user_login'];
			}
		}
		
	}
	public function redirect($extra)
	{
		// di chuyen ve man hinh list
		$host  = $_SERVER['HTTP_HOST'];
		$uri   = rtrim(dirname($_SERVER['PHP_SELF']), '/\\');
		header("Location: http://$host$uri/admin.php?$extra");
	}

	// kiểm tra giá trị có tồn tại hay không
	public function check_empty($items)
	{
		$messages = array();
		foreach ($items as $key => $value) {
			if (empty($value)) {
				$messages[] = $key; 
			}
		}

		return $messages;
	}

	protected function paging($total, $url)
	{
		$text_a_tag = "<a class='btn btn-default' href='admin.php?". $url . "&p=";
		$number_page = 1;
		if ($this->current_page < 0) {
			$this->current_page = 1;
		}
		if ($total > $this->number_record_page && $this->number_record_page > 0) {
			$number_page = ceil($total/$this->number_record_page);

			if ($this->current_page > $number_page) {
				$this->current_page = $number_page;
			}

			$prev = "";
			$next = "";
			if ($this->current_page == 1) {
				// hien thi next
				// khong hien prev
				$next = $this->current_page + 1;
				$next = "$text_a_tag$next'>Next</a> ";
			} elseif ($this->current_page == $number_page) {
				// khong hien next
				// hien thi prev
				$prev = $this->current_page - 1;
				$prev = "$text_a_tag$prev'>Prev</a> ";
			} else {
				// hien thi ca 2
				$next = $this->current_page + 1;
				$next = "$text_a_tag$next'>Next</a> ";
				$prev = $this->current_page - 1;
				$prev = "$text_a_tag$prev'>Prev</a> ";

			}

			$this->paging_link = $prev . $this->paging_link;
			for ($i=1; $i <= $number_page; $i++) {
				if ($this->current_page == $i) {
					$this->paging_link .= "<span class='btn btn-warning'>$i </span>";
				}
				else
				{
					$this->paging_link .= "$text_a_tag$i'>$i</a> ";
				}
			}

			$this->paging_link =  $this->paging_link . $next;

			$start = ($this->current_page - 1) * $this->number_record_page;
			$this->limit = " limit $start, $this->number_record_page";
		}
	}
}
?>