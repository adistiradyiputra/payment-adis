<?php 

    include 'Database.php';

    $db  = new Database();
    $con = $db->Connect();

    session_start();
    if (isset($_POST['npm'])) { // check apakah ada pengiriman data
        $npm = $_POST['npm'];
        $password = $_POST['password'];
     
     
        $sql = "SELECT * FROM user WHERE npm = '$npm' AND password = '$password'";
     
        $query = $con->query($sql);
     
        if ($query->num_rows > 0) { // jika datanya ada
            $row = $query->fetch_assoc();
            $_SESSION['namaLog'] = $row['nama']; // menyimpan nama yang login pada session
            $_SESSION['fakultas'] = $row['fakultas']; // menyimpan nama yang login pada session
            header('location:Dashboard.php');
     
        } else { // jika datanya tidak ada
            echo "<script>alert('Username & Password Salah !!!'); window.location.href='index.php'</script>";
        }
        exit();
    }
?>