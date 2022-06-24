<!-- is_dir(디렉토리): 디렉토리가 있는지 없는지 여부
file_exists(디렉토리): 파일이 있는지 없는지 여부 -->

<?php
$dir = "./data";    // php_test/data
if (is_dir($dir)) {
    echo "있다";
} else {
    echo "없다";
}

$dir = "./";
if (file_exists($dir)) {
    echo "있다";
} else {
    echo "없다";
}