<?php
function sum($a,$b,$c=null){
    if($c==null){
        return $a+$b;
    }
    else{
        return $a+$b+$c;
    }
}

$two=sum(1,2);
$three=sum(1,3,4);

echo "Sum of two number = $two<br>";
echo "Sum of three number = $three";
?>