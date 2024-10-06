<?php
include 'connection.php';

$judul = $_POST['judul'];
$penulis = $_POST['penulis'];
$penerbit = $_POST['penerbit'];
$tahunTerbit = $_POST['tahunTerbit'];
$jumlahHalaman = $_POST['jumlahHalaman'];
$lokasi = $_POST['lokasi'];
$gambar = $_POST['gambar'];

$submitSQL = "INSERT INTO buku(gambar, judul, penulis, penerbit, tahunTerbit, jumlahHalaman, lokasi) VALUES ( '$gambar', '$judul', '$penulis', '$penerbit', '$tahunTerbit', '$jumlahHalaman', '$lokasi')";

if (!$judul || !$penulis || !$penerbit || !$tahunTerbit || !$jumlahHalaman || !$lokasi || !$gambar) {
    echo "<script> alert ('Isi semua data!'); window.location='tambah.php';</script>";
} else {
    $db->query($submitSQL);
    echo "<script> alert ('Data Masuk'); window.location='tambah.php';</script>";
}
