<?php
    // 전달받은 인자 값
    $id = $_POST["id"];
    $pw = $_POST["pw"];

    // 데이터베이스 연결
    $db_conn = mysqli_connect("127.0.0.1", "webhacking_db", "webhacking", "login");

    // 데이터 삽입 명령
    $query = "insert into user(id, pw) values('$id', '$pw')";

    // sl 명령 실행
    mysqli_query($db_conn, $query);
    mysqli_close($db_conn);

    // signup.php 로그인 페이지로 이동
    echo "<script>
        location.href='login.php';
        </script>";
?>
