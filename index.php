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
        <?php include ('header.php');?>

        <div class="pricing-header px-3 py-3 pt-md-5 pb-md-4 mx-auto text-center">
            <h1 class="display-4">웹 해킹 실습 페이지</h1>
            <p class="lead">XSS, 파일 업로드 취약점, 쿠키 탈취 취약점 등<br>다양한 취약점을 실습해보세요.</p>
        </div>

        <div class="container">
          <div class="row row-cols-3">
            <div class="col col-md-4 mt-4 d-flex justify-content-center">
              <div class="card" style="width: 18rem;">
                <img src="./img/webhackingguid.JPG" class="card-img-top rounded mx-auto d-block" alt="web security guid img">
                <div class="card-body">
                  <h5 class="card-title">웹 취약점 가이드</h5>
                  <p class="card-text">seKUrity의 실습 사이트입니다.</p>
                  <a href="http://seku-assign.iptime.org:9999/" target="_blank" class="btn btn-primary">Go somewhere</a>
                </div>
              </div>
            </div>
            <div class="col col-md-4 mt-4 d-flex justify-content-center">
              <div class="card" style="width: 18rem;">
                <img src="./img/os.JPG" class="card-img-top rounded mx-auto d-block" alt="Apple Market img">
                <div class="card-body">
                  <h5 class="card-title">Blind command injection</h5>
                  <p class="card-text">sapphire의 실습 사이트입니다.</p>
                  <a href="http://sekurity.online:5555" target="_blank" class="btn btn-primary">Go somewhere</a>
                </div>
              </div>
            </div>
            <div class="col col-md-4 mt-4 d-flex justify-content-center">
              <div class="card" style="width: 18rem;">
                <img src="./img/ping.JPG" class="card-img-top rounded mx-auto d-block" alt="Moon's Security img">
                <div class="card-body">
                  <h5 class="card-title">Ping playground</h5>
                  <p class="card-text">sapphire의 실습 사이트입니다.</p>
                  <a href="http://sekurity.online:5055" target="_blank" class="btn btn-primary">Go somewhere</a>
                </div>
              </div>
            </div>
            <div class="col col-md-4 mt-4 d-flex justify-content-center">
              <div class="card" style="width: 18rem;">
              <img src="./img/ping2.JPG" class="card-img-top rounded mx-auto d-block" alt="XSS Game img">
                <div class="card-body">
                    <h5 class="card-title">Ping</h5>
                    <p class="card-text">sapphire의 실습 사이트입니다.</p>
                    <a href="http://sekurity.online:5006" target="_blank" class="btn btn-primary">Go somewhere</a>
                </div>
              </div>
            </div>
            <div class="col col-md-4 mt-4 d-flex justify-content-center">
              <div class="card" style="width: 18rem;">
                <img src="./img/length.JPG" class="card-img-top rounded mx-auto d-block" alt="XSS Game img">
                <div class="card-body">
                    <h5 class="card-title">Forelength</h5>
                    <p class="card-text">sapphire의 실습 사이트입니다.</p>
                    <a href="http://sekurity.online:5005" target="_blank" class="btn btn-primary">Go somewhere</a>
                </div>
              </div>
            </div>
            <div class="col col-md-4 mt-4 d-flex justify-content-center">
              <div class="card" style="width: 18rem;">
                <img src="./img/applemarket.JPG" class="card-img-top rounded mx-auto d-block" alt="Apple Market img">
                <div class="card-body">
                  <h5 class="card-title">애플마켓</h5>
                  <p class="card-text">쇼핑몰 실습 사이트입니다.</p>
                  <a href="http://sekurity.online:9999/AppleMarket/" target="_blank" class="btn btn-primary">Go somewhere</a>
                </div>
              </div>
            </div>
            <div class="col col-md-4 mt-4 d-flex justify-content-center">
              <div class="card" style="width: 18rem;">
                <img src="./img/hackingbook.JPG" class="card-img-top rounded mx-auto d-block" alt="Moon's Security img">
                <div class="card-body">
                  <h5 class="card-title">Moon's Security</h5>
                  <p class="card-text">MoonLab의 실습 사이트입니다.</p>
                  <a href="http://sekurity.online:9999/hackersite/" target="_blank" class="btn btn-primary">Go somewhere</a>
                </div>
              </div>
            </div>
            <div class="col col-md-4 mt-4 d-flex justify-content-center">
              <div class="card" style="width: 18rem;">
                <img src="./img/DVWA.JPG" class="card-img-top rounded mx-auto d-block" alt="NAS img">
                <div class="card-body">
                  <h5 class="card-title">DVWA</h5>
                  <p class="card-text">DVWA 실습 사이트입니다.</p>
                  <a href="http://sekurity.online:8080" target="_blank" class="btn btn-primary">Go somewhere</a>
                </div>
              </div>
            </div>
            <!--
            <div class="col col-md-4 mt-4 d-flex justify-content-center">
              <div class="card" style="width: 18rem;">
              <img src="./img/xssGame.JPG" class="card-img-top rounded mx-auto d-block" alt="XSS Game img">
                <div class="card-body">
                    <h5 class="card-title">XSS Game</h5>
                    <p class="card-text">XSS 실습 사이트입니다.</p>
                    <a href="https://xss-game.appspot.com" target="_blank" class="btn btn-primary">Go somewhere</a>
                </div>
              </div>
            </div>
            <div class="col col-md-4 mt-4 d-flex justify-content-center">
              <div class="card" style="width: 18rem;">
                <img src="./img/dreamhack.JPG" class="card-img-top rounded mx-auto d-block" alt="XSS Game img">
                <div class="card-body">
                    <h5 class="card-title">Dreamhack</h5>
                    <p class="card-text">다양한 실습 가능한 사이트입니다.</p>
                    <a href="https://dreamhack.io" target="_blank" class="btn btn-primary">Go somewhere</a>
                </div>
              </div>
            </div>
            -->
            <div class="col col-md-4 mt-4 d-flex justify-content-center">
              <div class="card" style="width: 18rem;">
                <img src="./img/NAS.JPG" class="card-img-top rounded mx-auto d-block" alt="NAS img">
                <div class="card-body">
                  <h5 class="card-title">seKUrity NAS</h5>
                  <p class="card-text">seKUrity NAS 바로가기입니다.</p>
                  <a href="https://sekurity.synology.me:8643" target="_blank" class="btn btn-primary">Go somewhere</a>
                </div>
              </div>
            </div>
          </div>
        </div>

        <br>
        
        <?php include ('bootstrap_core.html'); ?>
    </body>
</html>
