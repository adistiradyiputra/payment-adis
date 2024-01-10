<?php 
session_start();

// Periksa apakah pengguna sudah login
if (isset($_SESSION["namaLog"])) {
    // Jika sudah login, redirect ke halaman dashboard (atau halaman lain yang sesuai)
    header("location: dashboard.php");
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Unbin Payment</title>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="template/vendors/owl-carousel/css/owl.carousel.min.css">
  <link rel="stylesheet" href="template/vendors/owl-carousel/css/owl.theme.default.css">
  <link rel="stylesheet" href="template/vendors/mdi/css/materialdesignicons.min.css">
  <link rel="stylesheet" href="template/vendors/aos/css/aos.css">
  <link rel="stylesheet" href="template/css/style.min.css">
  <link rel="icon" type="image/x-icon" href="icon.ico">
</head>
<body id="body" data-spy="scroll" data-target=".navbar" data-offset="100">
  <header id="header-section">
    <nav class="navbar navbar-expand-lg pl-3 pl-sm-0" id="navbar">
    <div class="container">
      <div class="navbar-brand-wrapper d-flex w-100">
        <h4 class="font-weight-semibold">Unbin Payment</h4>
        <button class="navbar-toggler ml-auto" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="mdi mdi-menu navbar-toggler-icon"></span>
        </button> 
      </div>
      <div class="collapse navbar-collapse navbar-menu-wrapper" id="navbarSupportedContent">
        <ul class="navbar-nav align-items-lg-center align-items-start ml-auto">
          <li class="d-flex align-items-center justify-content-between pl-4 pl-lg-0">
            <div class="navbar-collapse-logo">
              <img src="template/images/Group2.svg" alt="">
            </div>
            <button class="navbar-toggler close-button" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class="mdi mdi-close navbar-toggler-icon pl-5"></span>
            </button>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#header-section">Home <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#features-section">Benefit</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#contact-section">Contact</a>  
          </li>
          <li class="nav-item btn-contact-us pl-4 pl-lg-0">
            <button style="margin-left: 140px;" class="btn btn-info" data-toggle="modal" data-target="#loginmodal">Login</button>
          </li>
        </ul>
      </div>
    </div> 
    </nav>   
  </header>
  <div class="banner" >
    <div class="container">
      <h1 class="font-weight-semibold">Easy Payment, Fast &<br>Affordable.</h1>
      <h6 class="font-weight-normal text-muted pb-3">Unbin Payment adalah solusi pembayaran kampus online dengan desain kreatif, sederhana, dan efisien.</h6>
      <img src="template/images/Group171.svg" alt="" class="img-fluid">
    </div>
  </div>
  <div class="content-wrapper">
    <div class="container">
      <section class="features-overview" id="features-section" >
        <div class="content-header">
          <h2>Benefit Memakai UnbinPayment</h2>
          <h6 class="section-subtitle text-muted">Ayo pakai UnbinPayment sekarang, <br>anda bisa merasakan kemudahan dan kecepatannya.</h6>
        </div>
        <div class="d-md-flex justify-content-between">
          <div class="grid-margin d-flex justify-content-start">
            <div class="features-width">
              <img src="template/images/Group12.svg" alt="" class="img-icons">
              <h5 class="py-3">Pembayaran<br>Cepat</h5>
              <p class="text-muted">Dengan memakai UnbinPayment. Anda tidak harus mengantri lagi.</p>
            </div>
          </div>
          <div class="grid-margin d-flex justify-content-center">
            <div class="features-width">
              <img src="template/images/Group7.svg" alt="" class="img-icons">
              <h5 class="py-3">Pembayaran<br>Mudah</h5>
              <p class="text-muted">Mudah memakai unbin payment . Tedapat 3 cara pembayaran, bayar melalui UnbinPayment, Bayar langsung dann Cicilan.</p>
            </div>
          </div>
          <div class="grid-margin d-flex justify-content-end">
            <div class="features-width">
              <img src="template/images/Group5.svg" alt="" class="img-icons">
              <h5 class="py-3">Banyak<br>Promo</h5>
              <p class="text-muted">Gunakan UnbinPayment secara terus menerus. Karena akan ada promo menarik setiap tahunnya.</p>
            </div>
          </div>
        </div>
      </section>
      <section class="contact-us" id="contact-section">
        <div class="contact-us-bgimage grid-margin" >
          <div class="pb-4">
            <h4 class="px-3 px-md-0 m-0" data-aos="fade-down">Butuh Informasi Lebih Lanjut ?</h4>
            <h4 class="pt-1" data-aos="fade-down">Hubungi Kami</h4>
          </div>
          <div data-aos="fade-up">
            <a href="https://wa.me/628992782269" target="_blank" class="btn btn-rounded btn-outline-danger">Contact us</a>
          </div>          
        </div>
      </section>
      <section class="contact-details" id="contact-details-section">
        <div class="row text-center text-md-left">
          <div class="col-12 col-md-6 col-lg-3 grid-margin">
            <h5 class="font-weight-regular">Unbin Payment</h5>
            <div class="pt-2">
              <p class="text-muted m-0">info@unbin.ac.id</p>
              <p class="text-muted m-0">(0251) 8360688</p>
            </div>         
          </div>
          <div class="col-12 col-md-6 col-lg-3 grid-margin">
            <h5 class="pb-2">Kelas</h5>
            <p class="text-muted">Kelas Reguler Pagi</p>
            <p class="text-muted">Kelas Pekerja</p>
            <p class="text-muted">Kelas Ektensi</p>
          </div>
          <div class="col-12 col-md-6 col-lg-3 grid-margin">
            <h5 class="pb-2">Fakultas</h5>
            <a href="#"><p class="m-0 pb-2">Fakultas Informatika dan Komputer</p></a>   
            <a href="#" ><p class="m-0 pt-1 pb-2">Fakultas Eknomi dan <br>Manajemen</p></a> 
          </div>
          <div class="col-12 col-md-6 col-lg-3 grid-margin">
              <h5 class="pb-2">Alamat Kami</h5>
              <p class="text-muted">Jalan Raya Pajajaran <br>No. 100, Kota Bogor 16153, Indonesia</p>
              <div class="d-flex justify-content-center justify-content-md-start">
                <a href="#"><span class="mdi mdi-facebook"></span></a>
                <a href="#"><span class="mdi mdi-twitter"></span></a>
                <a href="#"><span class="mdi mdi-instagram"></span></a>
                <a href="#"><span class="mdi mdi-linkedin"></span></a>
              </div>
          </div>
        </div>  
      </section>
      <footer class="border-top">
        <p class="text-center text-muted pt-4">Copyright © 2024<a href="https://www.unbin.ac.id/" class="px-1">UnbinPayment.</a>All rights reserved.</p>
      </footer>
      <!-- Modal for Contact - us Button -->
      <div class="modal fade" id="loginmodal" tabindex="-1" role="dialog" aria-labelledby="loginmodalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title" id="loginmodalLabel">Login</h4>
            </div>
            <div class="modal-body">
              <form action="Login.php" method="post">
                <div class="form-group">
                  <label for="Name">NPM</label>
                  <input type="text" name="npm" class="form-control" id="npm" placeholder="NPM">
                </div>
                <div class="form-group">
                  <label for="Password">Password</label>
                  <input type="password" name="password" class="form-control" id="password" placeholder="Password">
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-light" data-dismiss="modal">Close</button>
                  <button type="submit" class="btn btn-success">Login</button>
                </div>
              </form>
            </div>   
          </div>
        </div>
      </div>
    </div> 
  </div>
  <script src="template/vendors/jquery/jquery.min.js"></script>
  <script src="template/vendors/bootstrap/bootstrap.min.js"></script>
  <script src="template/vendors/owl-carousel/js/owl.carousel.min.js"></script>
  <script src="template/vendors/aos/js/aos.js"></script>
  <script src="template/js/landingpage.js"></script>
</body>
</html>