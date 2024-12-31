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

    <style>
		/* Add padding to the .card class */
		.card {
			padding: 20px;
		}
    </style>
</head>
<body>
	<?php include ('header.php');?>

    <!-- Login Form -->
	<main class="form-signin text-center" style="max-width: 450px; margin: 0 auto;">
		<form method="GET" action="cookie_login.php">
			<br><br>
			<img class="mb-4" src="img/seKUrity.png" alt="" width="50%" height=auto>
			<div class="card">
				<h1 class="h3 mb-3 fw-normal">Please sign in</h1>
				<div class="form-floating">
					<div class="input-group">
						<span class="input-group-text">
							<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person" viewBox="0 0 16 16">
							  <path d="M8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6Zm2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0Zm4 8c0 1-1 1-1 1H3s-1 0-1-1 1-4 6-4 6 3 6 4Zm-1-.004c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664h10Z"/>
							</svg>
						</span>
						<input type="text" name="id" class="form-control" id="floatingInput" placeholder="ID">
					</div>
					<label for="floatingInput"></label>
				</div>
				<div class="form-floating">
					<div class="input-group">
						<span class="input-group-text">
							<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-lock" viewBox="0 0 16 16">
							  <path d="M8 1a2 2 0 0 1 2 2v4H6V3a2 2 0 0 1 2-2zm3 6V3a3 3 0 0 0-6 0v4a2 2 0 0 0-2 2v5a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V9a2 2 0 0 0-2-2zM5 8h6a1 1 0 0 1 1 1v5a1 1 0 0 1-1 1H5a1 1 0 0 1-1-1V9a1 1 0 0 1 1-1z"/>
							</svg>
						</span>
						<input type="password" name="pw" class="form-control" id="floatingPassword" placeholder="PASSWORD">
					</div>
					<label for="floatingPassword"></label>
				</div>
				<div class="form-check text-start my-3">
					<input class="form-check-input" type="checkbox" value="remember-me" id="flexCheckDefault">
					<label class="form-check-label" for="flexCheckDefault">
						Remember me
					</label>
				</div>
				<button class="btn btn-primary w-100 py-2" type="submit">Sign in</button>
			</div>
			<!-- <button type="button" class="btn btn-link"><a href="forgot_password.html">Reset it</a></button> -->
			<!-- <button type="button" class="btn btn-link"><a href="forgot_username.html">Find it</a></button> -->
			<button type="button" class="btn btn-link"><a href="signup.php">Sign up</a></button>
			<p class="mt-5 mb-3 text-body-secondary">&copy; 2017–2023</p>
		</form>
	</main>
    <!-- End of Login Form -->
</body>
</html>
