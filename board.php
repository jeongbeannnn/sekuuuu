<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>게시판</title>
</head>
<body>
    <h1>게시판</h1>

    <form action="" method="post">
        <label for="comment">댓글을 입력하세요:</label><br>
        <textarea id="comment" name="comment" rows="4" cols="50"></textarea><br>
        <input type="submit" value="제출">
    </form>

    <h2>댓글 목록</h2>
    <div>
        <?php
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $comment = $_POST['comment'];
            echo "<p>" . $comment . "</p>";
        }
        ?>
    </div>
</body>
</html>