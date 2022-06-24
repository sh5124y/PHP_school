<?php
// 1. 파일 열기. read.txt 파일은 fp를 통해서만 접근 가능하다.
$fp = fopen("read.txt";, "r");

// 2. 파일 일어오기 fgetc(), fgets(), fread(), file_get_contents()
$file=file_get_contents("read.txt");
echo $file;

// 3. 파일 닫기
fclose("read.txt");
?>