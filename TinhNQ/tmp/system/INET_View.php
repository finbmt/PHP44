<?php
if (!defined('PATH_SITE')) exit('No direct script access allowed');

class INET_View
{
	//protected $table = null;
	public function load($view, $data = array())
    {
        // Chuyển mảng dữ liệu thành từng biến
        extract($data);
         
        // Chuyển nội dung view thành biến thay vì in ra bằng cách dùng ab_start()
        ob_start();
        require_once PATH_SITE . '/admin/view/' . $view . '.php';
        $content = ob_get_contents();
        ob_end_clean();
         
        // Gán nội dung vào danh sách view đã load
        $this->__content[] = $content;
    }
     
    /**
     * Show view
     *
     * @desc    Hàm hiển thị toàn bộ view đã load, được dùng ở controller
     */
    public function show()
    {
        foreach ($this->__content as $html){
            echo $html;
        }
    }
}

?>