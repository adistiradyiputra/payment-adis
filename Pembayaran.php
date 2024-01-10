<?php 
    include 'Database.php';

    $db  = new Database();
    $con = $db->Connect();

    $nama = $_POST['nama'];
    $fakultas = $_POST['fakultas'];
    $jenis_bayar = $_POST['jenis_bayar'];
    $ket_bayar = $_POST['ket_bayar'];    
    mysqli_query($con,"insert into payment values(NULL,'$nama','$fakultas','$jenis_bayar','$ket_bayar')");
    
?>