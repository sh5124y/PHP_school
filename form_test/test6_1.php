<?php
$gender2=$_POST["gender"];
for ($i=0; $i < count($_POST["fruit"]); $i++) { 
    $a = $_POST["fruit"][$i];
    echo $a."<br>";
}

echo "성별: ".$gender2;
?>