<?php
session_start();
include 'koneksi.php';

if(!isset($_SESSION['status_login'])) {
    header ("Location: login.php");
    exit;
}

if (isset($_POST['simpan'])) {
    $judul = $_POST['judul'];
    $pengarang = $_POST['pengarang'];
    $penerbit = $_POST['penerbit'];
    $tahun = $_POST['tahun_terbit'];
    $stok = $_POST['stok'];
    $query = "INSERT INTO buku (judul, pengarang, penerbit, tahun_terbit, stok) VALUES ('$judul', '$pengarang', '$penerbit', '$tahun', '$stok')";

    if (mysqli_query($koneksi, $query)) {
        echo "<script>alert('Data buku berhasil ditambahkan!'); window.location='dashboard.php';</script>";
    } else {
        echo "Error: " . mysqli_error($koneksi);
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menambahkan buku</title>
</head>
<body>
    <h2>Form Tambah Buku Baru</h2>
    <form method="POST" action="">
        <label>Judul Buku:</label> <br>
        <input type="text" name="judul" placeholder="Masukkan judul buku" required><br><br>
        <label>Pengarang:</label> <br>
        <input type="text" name="pengarang" placeholder="Masukkan nama pengarang" required><br><br>
        <label>Penerbit:</label> <br>
        <input type="text" name="penerbit" placeholder="Masukkan nama penerbit" required><br><br>
        <label>Tahun Terbit:</label> <br>
        <input type="text" name="tahun_terbit" placeholder="Masukkan tahun kapan diterbitkan" required><br><br>
        <label>Stok:</label> <br>
        <input type="number" name="stok" placeholder="Masukkan jumlah stok"  required><br><br>
        <button type="submit" name="simpan">Simpan</button>
        <a href="dashboard.php">Batal</a>
    </form>
</body>
</html>