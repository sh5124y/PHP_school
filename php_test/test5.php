<?php
    $cnt=0;
    $sum=0;
    for ($i=100; $i < 999; $i++) { 
        if ($i%4 != 0) {
            $cnt++;
            $sum+=$i;
        }
    }
    echo "개수: $cnt, 합: $sum"
?>