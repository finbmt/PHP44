<?php
if (!defined('PATH_SYSTEM')) exit('No direct script access allowed');

class INET_Model
{
	private $db = null;

	public function load($model)
	{
		$file = PATH_ADMIN_MODEL .$model. '_Model.php';
		if (!file_exists($file)) {
			exit('model khong ton tai :' . $model);
		}
		include_once $file;
		
	}

	private function connect()
	{
		$this->db = mysqli_connect("localhost", "root", "mysql", "webshopping");
		// check ket noi toi csdl
		if(mysqli_connect_errno())
		{
			// nếu kết nối không thành công thì thông báo lỗi
			// và cho chết chương trình
			exit("Loi : " . mysqli_connect_error());
		}
	}

	private function close()
	{
		mysqli_close($this->db);
	}

	/*
	* thuc hien trong cac lenh them xoa sua
	* tra ve 1 neu thanh cong/ gia trị khac that bai
	*/
	public function execute($sql)
	{
		// mo ket noi
		$this->connect();
		// thực thi
		mysqli_query($this->db, $sql);
		// dong ket noi
		$this->close();
	}

	/*
	* thuc hien trong cac select lay du lieu
	* tra ve array neu thanh cong/ null neu that bai
	*/
	public function select($sql)
	{
		// mo ket noi
		$this->connect();
		// thực thi
		$result = mysqli_query($this->db, $sql);
		if($result)
		{
			$data = array();
			while($row = $result->fetch_array())
			{
				$data[] = $row;
			}
			return $data;
		}
		// dong ket noi
		$this->close();

		return null;
	}
}
?>