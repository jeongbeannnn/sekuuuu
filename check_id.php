<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
		<style>
			.close { margin: 20px 0 0 120px; cursor:pointer; }
		</style>
    </head>
    <body>
        <h3>아이디 중복체크</h3>
		<div>
			<script>
				var result = 0;
			</script>
			<?php
				$id = $_GET["id"];
				
				if(!$id) {
					echo "아이디를 입력해 주세요!";
				} 
				else {
					$db_conn = mysqli_connect("127.0.0.1", "webhacking_db", "webhacking", "login");
					if($db_conn == false) {
						echo mysqli_connect_error();
					}
					$query = "select * from user where id='{$id}'";
					$result = mysqli_query($db_conn, $query);

					$num_record=mysqli_num_rows($result);

					if(strlen($id) >= 20) {
						echo "20자 이하로 작성해주세요!<br>";
					} else if($num_record){
						echo $id." 아이디는 중복됩니다<br>";
						echo "다른 아이디를 사용해 주세요!<br>";
					}
					else {
						echo $id." 아이디는 사용 가능합니다<br>";
						echo "<script>result = 1;</script>";
					}
					
					mysqli_close($db_conn);
				}
			?>
		</div>
		<div class="close">
			<script>
				function getResult() {
					window.opener.postMessage(result, '*');
					// window.close();
				}
			</script>
			<button onclick="javascript:self.close()">창 닫기</button>
		</div>
    </body>
</html>
