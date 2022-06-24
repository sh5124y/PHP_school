<?php
$arr=array();
$arr[0]="apple";
$arr[1]="melon";
$arr[2]="banana";

// for ($i=0; $i < 3; $i++) { 
//     echo $arr[$i]."    ";
// }

foreach ($arr as $element) {    // 배열 as 변수
    echo $element." ";
}

echo "<br>";

$arr2 = array("mango","grape","peach");

for ($i=0; $i < 3; $i++) { 
    echo $arr2[$i]."    ";
}

echo "<br>";

// 연관 배열
$array=array("apple"=>1000, "mango"=>2000, "grape"=>3000);
foreach ($array as $key=>$value) {    // 배열 as 변수
    echo $key, $value;
}

echo "<br>";

// 1. 리턴타입 X 매개변수 X
function add1()
{
    echo "3 + 5 = ".(3+5);
}
add1();
echo "<br>";

// 2. 리턴타입 X 매개변수 O
function add2($i, $j)
{
    echo $i." + ".$j." = ".$i + $j;
}
add2(3, 5);
echo "<br>";

// 3. 리턴타입 O 매개변수 X
function add3()
{
    return (3+5);
}
echo "3 + 5 = ".add3();
echo "<br>";

// 4. 리턴타입 O 매개변수 O
function add4($i, $j)
{
    return $i." + ".$j." = ".($i+$j);
}
echo add4(3, 5);
echo "<br>";

?>
