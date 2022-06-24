<?php
    $id = $_POST["userid"];
    echo "아이디: ".$id."<br/>";
    $pass1 = $_POST["userpass"];
    echo "비밀번호: ".$pass1."<br/>";
    $pass2 = $_POST["pass"];
    $name = $_POST["username"];
    echo "이름: ".$name."<br/>";
    $fir = $_POST["firN"];
    $sec = $_POST["secN"];
    echo "전화번호: ";
    for ($i=0; $i < count($_POST["sel"]); $i++) { 
        $sel2 = $_POST["sel"][$i];
        echo $s."<br>";
    }
    echo $fir.$sec."<br/>";
    $self = $_POST["ta"];
    echo "자기소개: ".$self."<br/>";

    echo "취미: ";
    for ($i=0; $i < count($_POST["hobby"]); $i++) { 
        $hob = $_POST["hobby"][$i];
        echo $hob." ";
    }
    echo "<br>";

    if ($pass1!=$pass2) {
        echo "<script>alert('비밀번호가 일치하지 않습니다'); history.go(-1);</script>";
    } else {
        echo "<script>alert('맞아요~'); </script>";
    }
?>