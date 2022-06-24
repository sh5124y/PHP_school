<?php
    $even=0;
    $odd=0;
    for ($i = 0; $i < 5; $i++) { 
        if ($i%2==0) {
            $even += $i;
        } else {
            $odd += $i;
        }
    }
    echo "$even, $odd"

?>