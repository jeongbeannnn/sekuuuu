<?php
	$id = $_GET['id'];
	$pw = $_GET['pw'];

	$db_conn = mysqli_connect("127.0.0.1", "webhacking_db", "webhacking", "login");
	if ($db_conn == false) {
		echo mysqli_connect_error();
	}

	$query = "select * from user where id='{$id}' and pw='{$pw}'";
	$result = mysqli_query($db_conn, $query);
	echo "query: {$query} <br>";

	if ($result == false) {
		echo mysqli_error($db_conn);
	} else {
		$row = mysqli_fetch_array($result);
		if ($row) {
			// 로그인 성공 시 쿠키 설정
			setcookie("user_id", $row['id'], time() + 3600); // 쿠키 유효 시간: 1 시간

			// 로그인 성공 시 index.php로 리디렉션
			header("Location: index.php");
			exit; // 리디렉션 후 코드 실행을 중지합니다.
		} else {
			// 로그인 실패 시 다시 로그인 페이지로 리디렉션
			// echo "<script>alert('로그인 실패');</script>";
			// header("Location: login.php");
			exit("<script>alert('로그인 실패');
			location.replace('login.php');
			</script>");
		}

		mysqli_close($db_conn);
	}
?>
