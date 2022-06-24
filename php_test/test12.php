<?php
$filename="data.txt";
$fp = fopen($filename, "r");
// // 한글자
// while ($c=fgetc($fp)) {
//     echo $c,"<br>";
// }

// // 문자열
// while ($s=fgets($fp)) {
//     echo $s,"<br>";
// }

// // 한줄 (오류남)
// while ($r=fread($fp)) {
//     echo $r,"<br>";
// }
fclose($fp);

?>

<?php
$file=file_get_contents("data.txt");
echo $file;
?>