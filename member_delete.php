<?php
    // 전달받은 인자 값
	$id = $_GET['id'];
	$pw = $_GET['pw'];

    // 데이터베이스 연결
    $db_conn = mysqli_connect("127.0.0.1", "webhacking_db", "webhacking", "login");

    // 데이터 삭제 명령
    $query = "delete from user where id='{$id}' and pw='{$pw}'";

    // 명령 실행
    mysqli_query($db_conn, $query);
    mysqli_close($db_conn);

    // cookie_logout.php 로그아웃 페이지로 이동 -> index.php 이동
    echo "<script>
        location.href='cookie_logout.php';
        </script>";
?>
