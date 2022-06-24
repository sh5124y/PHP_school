<?php

$f_name = $_FILES['userfile']['name'];
$f_size = $_FILES['userfile']['size'];
$f_type = $_FILES['userfile']['type'];
$f_tmp_name = $_FILES['userfile']['tmp_name'];

echo "파일이름 : ".$f_name;
echo "파일크기 : ".$f_size;
echo "파일타입 : ".$f_type;
echo "파일이상한 이름 : ".$f_tmp_name;

$uploads_dir = 'uploads/';
if(!is_dir($uploads_dir)){
    mkdir($uploads_dir);
}
$upload_file = $uploads_dir.basename($_FILES['userfile']['name']);
echo $upload_file;

if(move_uploaded_file($_FILES['userfile']['tmp_name'],$upload_file)){
    echo "업로드 성공!";
}
else{
    echo "업로드 실패";
}
?>