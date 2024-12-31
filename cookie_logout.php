<?php
	// 쿠키 삭제
	setcookie("user_id", "", time() - 3600);
	
	// index.php로 리디렉션
	header("Location: index.php");
?>

