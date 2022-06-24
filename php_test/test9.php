<?php
    $score = 98;

    switch ((int)($score/10)) {
        case 10: case 9: 
            echo "<h3>A";
            break;
        
        case 8 :
            echo "<h3>B";
            break;

        case 7 :
            echo "<h3>C";
            break;

        case 6 :
            echo "<h3>D";
            break;

        default :
            echo "<h3>F";
            break;
    }
?>