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
            <a class="nav-link" href="dashboard.php">Pembayaran</a>
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
          <h4 class="mb-3">Form Pembayaran</h4>
          <form class="needs-validation" id="form_input">
            <div class="row g-3">
                <div class="col-sm-8">
                  <label for="nama" class="form-label">Nama Lengkap</label>
                  <input type="text" class="form-control" name="nama" id="nama" placeholder="" value="<?= $_SESSION["namaLog"]?>" autocomplete="off">
                </div>
                <div class="col-sm-8">
                  <label for="nama" class="form-label">Fakultas</label>
                  <input type="text" class="form-control" name="fakultas" id="fakultas" placeholder="" value="<?= $_SESSION["fakultas"]?>" autocomplete="off">
                </div>
                <div class="col-sm-8 mt-2">
                  <label class="form-label">Jenis Pembayaran</label>
                  <select name="jenis_bayar" for="jenis_bayar" id="jenis_bayar" class="form-control" aria-label="Disabled select example">
                    <option disabled selected valu>Pilih Jenis Pembayaran</option>
                    <option value="transfer">Transfer</option>
                    <option value="langsung">Langsung</option>
                    <option value="cicilan">Cicilan</option>
                  </select>
                </div>
                <div class="col-sm-12 mt-1">
                  <span>*Kirim bukti transfer melalui WhatsApp</span>
                </div>
                <div class="col-sm-8 mt-3">
                  <label for="ket_bayar" class="form-label">Keterangan Pembayaran</label>
                  <input type="text" class="form-control" name="ket_bayar" id="ket_bayar" placeholder="" value="" autocomplete="off" required>
                </div>
            </div>
            <button style="width:66%;" id="tombol_simpan" class="btn btn-primary btn-lg mt-4 mb-4" type="submit">Bayar</button>
          </form>
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
$("#tombol_simpan").click(function () {
            //validasi form
            $('#form_input').validate({
                rules: {
                    nama: {
                        required: true
                    },
                    fakultas: {
                        required: true
                    },
                    jenis_bayar: {
                        required: true
                    },
                    ket_bayar: {
                        required: true
                    }
                },
 
                // alert(nama);
                //jika validasi sukses maka lakukan
                submitHandler: function (form) {
                    $.ajax({
                        type: 'POST',
                        url: "Pembayaran.php",
                        data: $('#form_input').serialize(),
                        success: function () {
                            //setelah simpan data, update data terbaru
                            Swal.fire({
                              title: "Pembayaran Behasil!",
                              text: "Tunggu konfirmasi dari admin",
                              icon: "success",
                            }).then(function () {
                              // Mengalihkan langsung ke history.php setelah menekan tombol OK
                              window.location.replace("History.php");
                            });
                        },error: function(){
                          console.error();
                        }
                    });
                    //kosongkan form nama dan jurusan
                    document.getElementById("nama").value = "";
                    document.getElementById("fakultas").value = "";
                    document.getElementById("jenis_bayar").value = "";
                    document.getElementById("ket_bayar").value = "";
                    return false;
                }
            });
        });
</script>
</html>