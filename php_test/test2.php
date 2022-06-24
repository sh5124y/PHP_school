<!-- strlen(문자열): 문자열의 길이 -->

<?php
    $str="PHP is a popular language";
    echo strlen($str);
    echo "<br>";
?>

<!-- strcmp(문자열1, 문자열2) : 문자열1과 문자열2의 비교 같으면 0, 다르면 1 -->

<?php

$str1="Hello php";
$str2="Hello PHP";

if (strcmp($str1, $str2)) {
    echo "다르다<br>";
    echo "<br>";
} else {
    echo "같다<br>";
    echo "<br>";
}

?>

<!-- strtolower(문자열): 소문자로 변경 -->
<!-- strtoupper(문자열): 대문자로 변경 -->
<?php
$str="Marry Had A Little Lamb and She LOVED It So Much";
echo strtolower($str);
echo "<br>";
echo strtoupper($str);
echo "<br>";
?>

<!-- explode(구분자, 문자열): 문자열->배열로 변환 -->
<?php
$pizza = "piecel piece2 piece3 piee4 piece5 piece6";
$arr = explode(" ", $pizza);
// var_dump($arr);
foreach ($arr as $element) {
    echo $element;
}
echo "<br>";
?>

<!-- implode(구분자, 배열): 배열->문자열로 변환-->
<?php
$arr=array("piecel", "piece2", "piece3");
// 배열을 | 기준으로 문자열로 출력
$str2 = implode("|", $arr);
echo $str2;
echo "<br>";
?>

<!-- str_replace(바꿀문자열, 바뀌는문자열, 대상문자열): 문자열치환 -->
<?php
$str="Marry could study hard";
$str2 = str_replace("should", "could", $str);
echo $str2;
echo "<br>";
?>