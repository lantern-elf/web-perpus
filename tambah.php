<?php
include 'connection.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Tambahkan Buku | Perpustakaan</title>
</head>

<body>
    <?php
    include 'components/navbar.html'
    ?>

    <form action="tambah_prosess.php" method="post">
        <label for="">Judul: </label><br>
        <input type="text" name="judul"><br>
        <label for="">Penulis: </label><br>
        <input type="text" name="penulis"><br>
        <label for="">Penerbit: </label><br>
        <input type="text" name=""><br>
        <label for="">Tahun Terbit: </label><br>
        <input type="text" name=""><br>
        <label for="">Jumlah Halaman</label><br>
        <input type="text" name=""><br>
        <label for="">Lokasi</label><br>
        <input type="text" name=""><br>

        <br>
        <label for="">Gambar: </label><br />
        <input type="image" alt="submit" name="gambar"><br>
    </form>
</body>

</html>