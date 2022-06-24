<?php
$dir = opendir(".");    // 현재 디렉토리를 엶
    while ($files = readdir($dir)) {
        echo $files."<br/>";
    }

closedir($dir)
?>