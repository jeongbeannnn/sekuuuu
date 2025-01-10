<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="웹 해킹 실습">
    <meta name="author" content="">

    <title>웹 해킹 실습</title>

    <!-- Bootstrap core CSS -->
    <link href="./css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="./css/pricing.css" rel="stylesheet">
</head>

<body>
    <div class="container mt-5">
        <div class="text-center">
            <h1 class="display-4">XSS 실습 게시판</h1>
            <p class="lead">Stored XSS와 Reflected XSS 취약점을 테스트해보세요.</p>
        </div>

        <!-- 게시글 작성 -->
        <div class="mt-4">
            <h2>게시글 작성</h2>
            <form method="post" action="">
                <div class="form-group">
                    <label for="name">이름</label>
                    <input type="text" name="name" id="name" class="form-control" placeholder="이름을 입력하세요" required>
                </div>
                <div class="form-group">
                    <label for="content">내용</label>
                    <textarea name="content" id="content" class="form-control" placeholder="내용을 입력하세요" required></textarea>
                </div>
                <button type="submit" class="btn btn-primary">작성</button>
            </form>
        </div>

        <!-- 게시글 목록 -->
        <div class="mt-5">
            <h2>게시글 목록</h2>
            <ul class="list-group">
                <?php
                $dataFile = 'data.txt';
                if ($_SERVER['REQUEST_METHOD'] === 'POST') {
                    $name = $_POST['name'];
                    $content = $_POST['content'];
                    $entry = $name . "|" . $content . "\n";
                    file_put_contents($dataFile, $entry, FILE_APPEND);
                }
                $entries = file_exists($dataFile) ? file($dataFile, FILE_IGNORE_NEW_LINES) : [];
                foreach ($entries as $line):
                    list($name, $content) = explode('|', $line, 2);
                ?>
                <li class="list-group-item">
                    <strong><?= $name; ?></strong>: <?= $content; ?>
                </li>
                <?php endforeach; ?>
            </ul>
        </div>

        <!-- 검색 기능 -->
        <div class="mt-5">
            <h2>검색</h2>
            <form method="get" action="">
                <div class="form-group">
                    <label for="q">검색어</label>
                    <input type="text" name="q" id="q" class="form-control" placeholder="검색어를 입력하세요">
                </div>
                <button type="submit" class="btn btn-primary">검색</button>
            </form>
            <?php if (isset($_GET['q'])): ?>
                <p class="mt-3">검색 결과: <?= $_GET['q']; ?></p>
            <?php endif; ?>
        </div>
    </div>

    <?php include('bootstrap_core.html'); ?>
</body>
</html>