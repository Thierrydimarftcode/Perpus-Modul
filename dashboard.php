<?php
session_start();
include 'koneksi.php';

if (!isset($_SESSION['status_login'])) {
    header ("Location: login.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Perpustakaan</title>
</head>
<body>
    //Editan dari Herdynan
    <h1>Selamat datang, <?php echo $_SESSION['nama_lengkap'];?>!</h1>
    <h3>Sistem Informasi Perpustakaan SMK Muhammadiyah 3 Kota Tangerang Selatan</h3>
    <a href="tambah.php"><button>+Tambah Buku</button></a>
    <a href="logout.php"><button>Logout</button></a>
    <br> <br>

    // Editan dari Dimar
    <table border="1" cellpadding="10" cellspacing="0">
        <thead>
            <tr>
                <th>No</th>
                <th>Judul Buku</th>
                <th>Pengarang</th>
                <th>Penerbit</th>
                <th>Tahun</th>
                <th>Stok</th>
                <th>Aksi</th>
            </tr>
        </thead>
    </table>
</body>
</html>