<?php
// echo "hello world";
require_once("admin/db_connect.php");
session_start();
$ipaddress ='-';
if (!empty($_SERVER['HTTP_CLIENT_IP'])) {
    $ipaddress = $_SERVER['HTTP_CLIENT_IP'];
}else if (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
    $ipaddress = $_SERVER['HTTP_X_FORWARDED_FOR'];
}else {
    $ipaddress = $_SERVER['REMOTE_ADDR'];
}
$session = session_id();
$databases = new databases();
$tanggal = date("Y-m-d");
$pengunjung = $databases->insertpengunjung($session,$tanggal,$ipaddress);
?>
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Viga&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

        <!-- CSS PUNYA WARDANAA -->
        <link rel="stylesheet" href="css/style.css">

    <title>Website Landing Page</title>
</head>

<body>
    <!-- Navbar  -->
    <nav class="navbar navbar-expand-lg navbar-light">
    <!-- <div class="container">-->
        <a class="navbar-brand" href="#">Website</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup"
          aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
          <div class="navbar-nav ml-auto">
            <div class="dropdown">
              <li class="nav-item nav-link">Home<c/li>
              <div class="dropdown-content ">
                <div class="hover-me">
              <a href="#">Link 1 <i class="fa fa-caret-right"></i>
                <div class="sub-menu">
              <a href="#">Link 1</a>
              <a href="#">Link 2</a>
              <a href="#">Link 3</a>
                </div>
              </div>
              </a>
              <a href="#">Link 2</a>
              <a href="#">Link 3</a>
              </div>
            </div>
            <div class="dropdown">
            <a class="nav-item nav-link" href="#">Pricing</a>
            <div class="dropdown-content">
              <a href="#">Link 1</a>
              <a href="#">Link 2</a>
              <a href="#">Link 3</a>
            </div>
          </div>
          <div class="dropdown">
            <a class="nav-item nav-link" href="#">Features</a>
            <div class="dropdown-content">
              <a href="#">Link 1</a>
              <a href="#">Link 2
                <div class=""></div>
                <a href="#">link 2.1</a>
              </a>
              <a href="#">Link 3</a>
              </div>
            </div>
            <div class="dropdown">
            <a class="nav-item nav-link " href="#" tabindex="-1" aria-disabled="true">About</a>
            <div class="dropdown-content">
              <a href="#">Link 1</a>
              <a href="#">Link 2</a>
              <a href="#">Link 3</a>
              </div>
            </div>
            <a class="nav-item btn btn-primary tombol" href="#" tabindex="-1" aria-disabled="true">Join Us</a>
          </div>
        </div>
      </div>
    </nav>
    <!-- Akhir dari navbar -->

    <!-- jumbotron -->
  <div class="jumbotron jumbotron-fluid">
    <div class="container">
      <h1 class="display-4 kntl">Don't be your <span>Self</span><br>and <span>Surrender</span></h1>
      <a href="" class="btn btn-primary tombol">Kampus</a>
    </div>
  </div>
    <!-- Akhir Jumbotron -->

    <!-- Container -->
    <div class="container">

      <!-- Info Panel -->
      <div class="w3-container w3-center w3-animate-zoom">
      <div class="row justify-content-center">
        <div class="col-10 info-panel">
          <div class="row">
            <div class="col-lg">
            <img src="img/employee.png" alt="employee" class="float-left">
            <h4>24 Hour</h4>
            <p>Lorem ipsum dolor sit amet.</p>
          </div>
          <div class="col-lg">
            <img src="img/hires.png" alt="employee" class="float-left">
            <h4>High-Res</h4>
            <p>Lorem ipsum dolor sit amet.</p>
          </div>
          <div class="col-lg">
            <img src="img/security.png" alt="employee" class="float-left">
            <h4>Security</h4>
            <p>Lorem ipsum dolor sit amet.</p>
          </div>
          </div>
        </div>
      </div>
      </div>
      <!-- Akhir Info Panel -->

      <!-- Working SPace -->
      <div class="row workingspace">
        <div class="col-lg-6">
          <div class="slideshow-container">

            <div class="mySlides fade">
              <div class="numbertext">1 / 3</div>
              <img src="img/farm-house.jpg" class="img-fluid" style="border-radius: 12px;">
              <div class="text">Caption Text</div>
            </div>

            <div class="mySlides fade">
              <div class="numbertext">2 / 3</div>
              <img src="img/bosscha.jpg" class="img-fluid"  style="border-radius: 12px;">
              <div class="text">Caption Two</div>
            </div>

            <div class="mySlides fade">
              <div class="numbertext">3 / 3</div>
              <img src="img/jumbotron-bg.jpg" class="img-fluid"  style="border-radius: 12px;">
              <div class="text">Caption Three</div>
            </div>

            </div>
            <br>

            <div style="text-align:center">
              <span class="dot"></span>
              <span class="dot"></span>
              <span class="dot"></span>
            </div>

        </div>
        <div class="col-lg-5">
          <h3>Your <span>Work</span> better with <span>US</span></h3>
          <p> Bekerja dengan suasana hati yang lebih asik dan mempelajari hal baru setiap harinya</p>
          <a href="Gallery.html" class="btn btn-primary tombol">Gallery</a>
        </div>
      </div>
      <!-- Akhir Working Space -->


      <!-- Testimonial -->

      <section class="testimonial">
        <div class="row justify-content-center quote">
          <div class="col-lg-8">
            <h5> "Bekerja  dengan suasana hati yang lebih baik dan mempelajari hal baru setiap harinya. "</h5>
          </div>
        </div>

        <div class="row justify-content-center">
          <div class="col-lg-6 justify-content-center d-flex">
            <figure class="figure">
              <img src="img/img1.png" class="figure-img img-fluid rounded-circle" alt=" testi 1">
            </figure>
            <figure class="figure">
              <img src="img/img2.png" class="figure-img img-fluid rounded-circle utama"  alt="testi 1">
              <figcaption class="figure-caption">
                <h5>HANYA CONTOH</h5>
                <p>CONTOH</p>
              </figcaption>
            </figure>
            <figure class="figure">
              <img src="img/img3.png" class="figure-img img-fluid rounded-circle alt=" testi 1">
            </figure>
          </div>
        </div>
      </section>
      <!-- Akhir Testimonial -->

      <!-- footer -->
      <div class="row footer">
        <div class="col text-center">
          <p>2020 All Right Reversed by US</p>
        </div>
      </div>
      <!-- Akhit footer -->
   </div>
    <!-- Akhir Container -->


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
        integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
        integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6"
        crossorigin="anonymous"></script>
        <script type="text/javascript" src="js/jq.min.js"></script>
</body>

</html>
