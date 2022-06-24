<?php
// 아이디: userid
// 비밀번호: userpass
    $id = $_POST['userid']; // 사용자가 입력한 값
    $pass = $_POST['userpass']; // 사용자가 입력한 비밀번호 값
// 아이디가 kim 비밀번호가 1111이면 로그인되었습니다 출력
// 둘중에 하나 틀리면, 둘다 틀리면  '아이디나 비밀번호가 틀렸습니다'
// 위의 둘다가 아니면 '회원이 아닙니다' 출력

    if ($id!=$_POST['userid'] || $pass!=$_POST['userpass']) {
        echo "아이디나 비밀번호가 틀렸습니다<br>";
    } else if ($id==$_POST['userid'] && $pass==$_POST['userpass']) {
        echo "로그인 되었습니다<br>";
    } else {
        echo "회원이 아닙니다<br>";
    }
    echo "userid:".$id;
    echo "<br>userpass:".$pass;

?>