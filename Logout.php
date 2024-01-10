<?php 
session_start();
session_unset();
session_destroy(); // hapus session yang tersimpan
 
header('location:index.php'); // kembali kehome
exit();