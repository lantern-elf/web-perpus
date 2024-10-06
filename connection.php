<?php
$host = "localhost";
$username = "root";
$password = "";
$database = "basisperpustakaan";

$db = mysqli_connect($host, $username, $password, $database);

if ($db->connect_error) {
    echo 'Koneksi rusak';
    die();
} else {
    // echo 'koneksi berhasil';
}
