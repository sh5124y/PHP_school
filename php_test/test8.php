<?php
    $sum = 0;
    for ($i=1; $i < 1000; $i++) { 
        if ($i%7==0 && $i%9==0) {
            $sum += $i;
            echo "$i<br>\n";
        }
    }
?>