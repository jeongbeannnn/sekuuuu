<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>웹 해킹 실습</title>

    <!-- Bootstrap core CSS -->
    <link href="./css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="./css/pricing.css" rel="stylesheet">
  </head>
    <body>
        <header class="d-flex flex-column flex-md-row align-items-center p-3 px-md-4 mb-3 bg-white border-bottom box-shadow">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-shield-fill-check" viewBox="0 0 16 16">
                <path fill-rule="evenodd" d="M8 0c-.69 0-1.843.265-2.928.56-1.11.3-2.229.655-2.887.870a1.54 1.54 0 0 0-1.044 1.262c-.596 4.477.787 7.795 2.465 9.99a11.777 11.777 0 0 0 2.517 2.453c.386.273.744.482 1.048.625.28.132.581.24.829.240s.548-.108.829-.240a7.159 7.159 0 0 0 1.048-.625 11.775 11.775 0 0 0 2.517-2.453c1.678-2.195 3.061-5.513 2.465-9.90a1.541 1.541 0 0 0-1.044-1.263 62.467 62.467 0 0 0-2.887-.870C9.843.266 8.69 0 8.000 0.000zm2.146 5.146a.5.5 0 0 1 .708.708l-3 3a.5.5 0 0 1-.708 0l-1.5-1.5a.5.5 0 1 1 .708-.708L7.5 7.793l2.646-2.647z"/>
            </svg>&nbsp;&nbsp;
            <h5 class="my-0 mr-md-auto font-weight-normal">seKUrity</h5>
            <nav class="my-2 my-md-0 mr-md-3">
                    <a class="p-2 text-dark" href="index.php">Home</a>
                    <a class="p-2 text-dark" href="about.php">About</a>
                    <a class="p-2 text-dark" href="board.php">Board</a>
                    <a class="p-2 text-dark" href="members.php">Members</a>
                </nav>
            <a class="btn <?php if(isset($_COOKIE["user_id"])) { echo "btn-outline-danger"; } else { echo "btn-outline-success"; } ?>" href="<?php if(isset($_COOKIE["user_id"])) { echo "cookie_logout.php"; } else { echo "login.php"; } ?>">
                <?php if(isset($_COOKIE["user_id"])) { echo "Logout"; } else { echo "Login"; } ?>
            </a>
            <!--signup.php-->
        </header>
    </body>
</html>
