<?php

function giaiptb2($a, $b, $c)
{
    //b2: tính delta
    $delta  = $b * $b - 4 * $a * $c;
    //b3: tính kết quả
    //3.1 ..Nếu delta <0 thì in vô nghiệm
    $ketqua = "";
    if ($delta < 0)
    {
        $ketqua = "Phương trình vô nghiệm ";
    }
    //3.2...Nếu delta =0
    elseif ($delta == 0) {
        $x      = (-$b) / (2 * $a);
        $ketqua = "X1=X2=$x";
    }
    //3.3...Nếu delta >0
    else
    {
        $x1     = ((-$b) - sqrt($delta)) / (2 * $a);
        $x2     = ((-$b) + sqrt($delta)) / (2 * $a);
        $ketqua = "X1= $x1  ;  X2= $x2";
    }
    
    return $ketqua;
}

function giaiptb1($b, $c)
{
    $x      = (-$c) / $b;
    $ketqua = "X=$x";
    return $ketqua;
}

?>