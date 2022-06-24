<?php
    $suma=0;
    $sumb=0;
    for ($i=1; $i <= 30; $i++) { 
        if ($i%2==0) {
            $suma+=$i;
        } else {
            $sumb+=$i;
        }
    }
    echo "짝수 합: $suma, 홀수 합: $sumb";
?>