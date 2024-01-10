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
      <div class="row g-5">
        <div class="col-md-7 col-lg-12">
            <div class="col-lg-8 pb-4">
              <h4 class="mb-3">History Pembayaran</h4>
              <span>*Cari data berdasarkan nama</span>
            </div>
            <div class="container-fluid">
              <form id="formCari" class="d-flex">
                <input class="form-control me-2" type="search" placeholder="Cari" aria-label="Search" name="cari" id="cari">
                <button style="height:35px; margin-bottom:10px" class="btn btn-success" type="submit">
                  <i class="mdi mdi-magnify"></i> 
                </button>
              </form>
            </div>
            <div id="hasilPencarian">

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
<script src="https://code.jquery.com/jquery-3.5.1.js"
integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.2/dist/jquery.validate.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert2/11.10.2/sweetalert2.min.js" integrity="sha512-k1jHgQwcMNMFymeyYv93tJOsIGpceFgh5VDTq2B5pF0pICXBzRGY97vlMobgYA4azK7936iOWkqm/C1vv/PKMA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script>
$(document).ready(function () {
    // Handle form submission with AJAX
    $("#formCari").submit(function (event) {
        event.preventDefault();

        var cariValue = $("#cari").val();

        $.ajax({
            type: "GET",
            url: "Search.php",
            data: { cari: cariValue },
            success: function (response) {
                console.log(response)
                // Tampilkan hasil pencarian di div hasilPencarian
                $("#hasilPencarian").html(response);
                
            },
            error: function () {
                console.error("Error during AJAX request.");
            }
        });
    });
});


</script>
</html>