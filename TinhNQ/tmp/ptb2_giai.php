<?php
	// xử lý giải phương trình bậc 1
	function giai_ptb1($b, $c)
	{
		$x = (-$c)/($b);
		$ketqua = "x = $x";
		
		return $ketqua;
	}
	
	// xử lý giải phương trình bậc 2
	function giai_ptb2($a, $b, $c)
	{
		//b2 tính delta :
		$delta = pow($b, 2) - 4*$a*$c;
		
		//b3 tính kết quả
		$ketqua = "";
		if($delta < 0)
		{
			// 3.1 nếu delta < 0
			$ketqua = "phương trình vô nghiệm";
		}
		elseif ($delta == 0)
		{
			// 3.2 nếu delta = 0
			$x = (-$b)/(2*$a);
			$ketqua = "x1 = x2 = $x";
		}
		else
		{
			// 3.3 nếu delta > 0
			$x1 = ((-$b) - sqrt($delta)) / (2*$a);
			$x2 = ((-$b) + sqrt($delta)) / (2*$a);
			$ketqua = "x1 = $x1 ; x2 = $x2";
		}
		
		return $ketqua;
	}
?>