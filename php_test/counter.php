<?php
$fp = fopen("count.txt", "r");
$num = file_get_contents("count.txt");
$count = (int)$num;
$count += 1;
fclose($fp);
echo "당신은 <b><font size = 30px color = pink>".$count."</b></font>번째 방문자입니다.";

$fp = fopen("count.txt", "w");
fwrite($fp, $count);
fclose($fp);

?>

<h1> 당신은 <span><?php echo $count ?> </span>번째 방문자 입니다</h1>