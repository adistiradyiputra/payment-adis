<?php
include 'Database.php';

$db  = new Database();
$conn = $db->Connect();

// Periksa koneksi
if (!$conn) {
    die("Koneksi gagal: " . mysqli_connect_error());
}

if ($_SERVER["REQUEST_METHOD"] == "GET") {
    // Periksa apakah 'cari' sudah didefinisikan dalam $_GET
    if (isset($_GET["cari"])) {
        // Ambil kata kunci pencarian dari formulir
        $nama = $_GET["cari"];

        // Lakukan query pencarian ke database (sesuaikan dengan struktur tabel Anda)
        $query = "SELECT * FROM payment WHERE nama LIKE '%$nama%'";
        $result = mysqli_query($conn, $query);

        // Tampilkan hasil pencarian dalam bentuk tabel
        echo "<table id='tbhistory' class='table table-striped'>";
        echo "<thead><tr><th>No</th><th>Nama</th><th>Fakultas</th><th>Keterangan Bayar</th></tr></thead><tbody>";

        $counter = 1;
        while ($row = mysqli_fetch_assoc($result)) {
            echo "<tr>";
            echo "<th scope='row'>" . $counter . "</th>";
            echo "<td>" . $row['nama'] . "</td>";
            echo "<td>" . $row['fakultas'] . "</td>";
            echo "<td>" . $row['ket_bayar'] . "</td>";
            echo "</tr>";

            $counter++;
        }

        echo "</tbody></table>";
    } else {
        // Berikan pesan kesalahan atau tangani dengan cara lain
        echo "Nama tidak ditemukan dalam data GET.";
    }
}

// Tutup koneksi database
mysqli_close($conn);
?>
