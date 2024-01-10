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
  <link href="https://cdn.jsdelivr.net/npm/sweetalert2@11.10.2/dist/sweetalert2.min.css" rel="stylesheet">
  <link rel="icon" type="image/x-icon" href="icon.ico">

  <style>
     body {
      display: flex;
      flex-direction: column;
      min-height: 100vh;
    }

    .content-wrapper {
      flex: 1;
    }

    footer {
      margin-top: auto;
    }
    .card {
      perspective: 1000px;
    }

    .card:hover .card-inner {
      transform: rotateY(180deg);
    }

    .card-inner {
      position: relative;
      width: 100%;
      height: 100%;
      text-align: center;
      transition: transform 0.6s;
      transform-style: preserve-3d;
    }

    .card-front,
    .card-back {
      position: absolute;
      width: 100%;
      height: 100%;
      -webkit-backface-visibility: hidden;
      backface-visibility: hidden;
    }

    .card-front {
      background-color: #fff;
    }

    .card-back {
      background-color: #ced4da;
      color: #000;
      transform: rotateY(180deg);
    }
  </style>
</head>
<body id="body" data-spy="scroll" data-target=".navbar" data-offset="100">
  <header id="header-section">
    <nav class="navbar navbar-expand-lg pl-3 pl-sm-0" id="navbar">
    <div class="container">
      <div class="navbar-brand-wrapper d-flex w-100">
        <?php
        session_start();
        // Periksa apakah pengguna sudah login
        if (!isset($_SESSION["namaLog"])) {
            // Jika tidak, redirect ke halaman login
            header("location:index.php");
            exit();
        }
        echo "<h5>Selamat Datang," . " " . $_SESSION["namaLog"] . "</h5>";
        ?>
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
            <a class="nav-link" href="Dashboard.php">Pembayaran</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="History.php">History</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="Promo.php">Promo</a>  
          </li>
          <li class="nav-item btn-contact-us pl-4 pl-lg-0">
            <a href="Logout.php" style="margin-left: 140px;" class="btn btn-info">Logout</a>
          </li>
        </ul>
      </div>
    </div> 
    </nav>   
  </header>
  <div class="container mt-4">
    <div class="row">
        <div class="col-sm-4 col-lg-4">
            <div class="card">
                <div class="card-inner">
                <div class="card-front">
                    <div class="card" style="width: 18rem; border: 1px solid #ced4da;">
                    <div class="card-body">
                        <h5 class="card-title">Promo Tahun Baru</h5>
                        <p class="card-text">Lihat promo Tahun baru di setiap Tahun, Ayo buruan cek sekarang promo menariknya! .</p>
                    </div>
                    </div>
                </div>
                <div class="card-back">
                  <div class="card" style="width: 18rem; border: 1px solid #ced4da;">
                      <div class="card-body">
                          <h5 class="card-title">Diskon 20%</h5>
                          <p class="card-text">Selamat Anda mendapatkan diskon 20%, Ayo buruan cek sekarang promo lainnya! .</p>
                      </div>
                  </div>
                </div>
                </div>
            </div>
        </div>
        <div class="col-sm-4 col-lg-4">
            <div class="card">
                <div class="card-inner">
                <div class="card-front">
                    <div class="card" style="width: 18rem; border: 1px solid #ced4da;">
                    <div class="card-body">
                        <h5 class="card-title">Promo Mahasiswa Baru</h5>
                        <p class="card-text">Lihat promo mahasiswa baru, Ayo buruan cek sekarang promo menariknya! .</p>
                    </div>
                    </div>
                </div>
                <div class="card-back">
                  <div class="card" style="width: 18rem; border: 1px solid #ced4da;">
                      <div class="card-body">
                          <h5 class="card-title">Diskon 15%</h5>
                          <p class="card-text">Selamat Anda mendapatkan diskon 15%, Ayo buruan cek sekarang promo lainnya! .</p>
                      </div>
                  </div>
                </div>
                </div>
            </div>
        </div>
        <div class="col-sm-4 col-lg-4">
            <div class="card">
                <div class="card-inner">
                <div class="card-front">
                    <div class="card" style="width: 18rem; border: 1px solid #ced4da;">
                      <div class="card-body">
                          <h5 class="card-title">Promo Nasional</h5>
                          <p class="card-text">Lihat promo pada hari libur nasional, Ayo buruan cek sekarang promo menariknya! .</p>
                      </div>
                    </div>
                </div>
                <div class="card-back">
                  <div class="card" style="width: 18rem; border: 1px solid #ced4da;">
                      <div class="card-body">
                          <h5 class="card-title">Diskon 10%</h5>
                          <p class="card-text">Selamat Anda mendapatkan diskon 10%, Ayo buruan cek sekarang promo lainnya! .</p>
                      </div>
                  </div>
                </div>
                </div>
            </div>
        </div>
    </div>
  </div>
  <footer class="border-top">
    <div class="container">
      <p class="text-center text-muted pt-4">Copyright © 2024<a href="https://www.unbin.ac.id/" class="px-1">UnbinPayment.</a>All rights reserved.</p>
    </div>
  </footer>
  <script src="template/vendors/jquery/jquery.min.js"></script>
  <script src="template/vendors/bootstrap/bootstrap.min.js"></script>
  <script src="template/vendors/owl-carousel/js/owl.carousel.min.js"></script>
  <script src="template/vendors/aos/js/aos.js"></script>
  <script src="template/js/landingpage.js"></script>
</body>
</html>