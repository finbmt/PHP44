<?php
	//Statistic variables
	global $age=30;
	function prinarr(){
		static $age;
		$age=$age + 1;
		echo $age;
		echo "<br/>";
	}
	echo $age;
	echo "<br/>";
	prinarr();
	prinarr();
	//Array of arrays
	$Product= array(
		array(1,2,3),array(4,5,6),array(7,8,9),array(10,11,12)
	);
	for($row=0;$row<4;$row++){
		for($col=0;$col<3;$col++){
			echo $Product[$row][$col]."--";
		}
		echo "<br/>";
	}
	
	//Bien tham so tham tri
	$a=2;
	function hi(&$a){
		$a+=5;
		echo $a;
	}
	
	echo hi($a);
	echo "<br/>";
	echo $a;
	echo "<br/>";
	echo hi($a);
	echo "<br/>";
	
	//Lap mang
	$name= array("Kenny", "Jiro", "Calvin", "Gillian");
	foreach ($name as $test){
		echo "$test<br>"; 
		}
	echo "<br/>";

	$person= 
	array(name=>"Kenny",
	job=>"Teacher",
	email=>"whiletionvn@gmail.com",
	age=>"38");
	foreach($person as $key=>$test)
	{
	echo "Key: $key. Gia Tri: $test<br>";
	}
	echo "<br/>";
	//Thay doi kieu ky tu
	echo "array_change_key_case"; 
	$input_array = array("FirSt" => 1,
						"SecOnd" => 4);
	print_r(array_change_key_case($input_array, CASE_UPPER));
	echo "<br/>";
	
	// ham chia nho mang 
	echo "array_chunk ";
	$cars=array("Volvo","BMW","Toyota","Honda","Mercedes","Opel");
	print_r(array_chunk($cars,3));
	echo "<br/>";
	
	//Ket hop cac mang 
	echo "<br/>";
	$a = array('green', 'red', 'yellow');
	$b = array('avocado', 'apple', 'banana');
	$c = array_combine($a, $b);
	print_r($c);
	echo "<br/>";
	
	//Dem gia tri mang
	echo "<br/>";
	$array = array(1, "hello", 1, "world", "hello");
	print_r(array_count_values($array));
	echo "<br/>";
	//array_diff_ukey 
	echo "array_diff_ukey ()"."<br/>";
	function key_compare_func($key1, $key2){
    if ($key1 == $key2)
        return 0;
    else if ($key1 > $key2)
        return 1;
    else
        return -1;
	}

	$array1 = array('blue'  => 1, 'red'  => 2, 'green'  => 3, 'purple' => 4);
	$array2 = array('green' => 5, 'blue' => 6, 'yellow' => 7, 'cyan'   => 8);

	var_dump(array_diff_ukey($array1, $array2, 'key_compare_func'));
	echo "<br/>";
	
	//Làm day cho gia tri cua tu khoa 
	echo "<br/>";
	echo "array_fill_keys()";
	echo "<br/>";
	$keys = array('foo', 5, 10, 'bar');
	$a = array_fill_keys($keys, 'banana');
	print_r($a);
	
	//Loc mang 
	echo "<br/>";
	echo "array_filter()";
	echo "<br/>";
	function odd($var){
    return($var & 1);
	}
	function even($var){
    return(!($var & 1));
	}
	$array1 = array("a"=>1, "b"=>2, "c"=>3, "d"=>4, "e"=>5);
	$array2 = array(6, 7, 8, 9, 10, 11, 12);
	echo "Odd :\n";
	print_r(array_filter($array1, "odd"));
	echo "Even:\n";
	print_r(array_filter($array2, "even"));
	
	//array_flip 
	echo "<br/>";
	echo "array_flip ()";
	echo "<br/>";
	$input = array("oranges", "apples", "pears");
	$flipped = array_flip($input);
	print_r($flipped);
	
	//array_intersect_assoc($array1, $array2) 
	echo "<br/>";
	echo "array_intersect_assoc($array1, $array2)";
	echo "<br/>";
	$array1 = array("a" => "green", "b" => "brown", "c" => "blue", "red");
	$array2 = array("a" => "green", "b" => "yellow", "blue", "red");
	$result_array = array_intersect_assoc($array1, $array2);
	print_r($result_array);

	
	echo "<br/>";
	echo "<br/>";
	//--------------------------------------------------------------------------
	echo "Bài Tập Về Nhà";
	echo "<br/>";
	echo "Cho mảng $number = array(1,2,3,4,5,6,7,8,9,10).<br/>";
	//------------------------------
	echo "a.Tổng của mảng: <br/>";
	$number=array(1,2,3,4,5,6,7,8,9,10);
	$Tong=0;
		for($i=0;$i<10;$i++){
			$Tong+=$number[$i];
		}
	echo $Tong."<br/>";
	//------------------------------
    $smallest = $number[0];
    $largetst = $number[0];
	for($i=0; $i<10; $i++){
		if($number[$i] >$largetst) {
			$largetst = $number[$i];        
			}
		else if ($number[$i] < $smallest) {
			$smallest = $number[$i];
			}
	}
	echo "b.Xác định phần tử nhỏ nhất trong mảng:<br/>";
	echo $smallest."<br/>";
	echo "c.Xác định phần tử lớn nhất trong mảng:<br/>";
	echo $largetst."<br/>";
	
	//------------------------------
	echo "d.Loại bỏ phần tử cuối cùng của mảng trên<br/>";
	for($i=0;$i<count($number)-1;$i++){
			echo $number[$i]." ";
	}
	echo "<br/>";
	//------------------------------
	echo "e. Loại bỏ phần tử đầu tiên của mảng trên <br/> (dùng lệnh var_dump để kiểm tra dữ liệu sau khi loại bỏ)
	<br/>";
	array_splice($number,0,1);
	for($i=0;$i<count($number);$i++){
			var_dump($number[$i]);
	}
	echo '</br>';
	
?>
