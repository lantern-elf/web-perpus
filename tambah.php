<?php
include 'connection.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="/components/navbar.css">
    <title>Tambahkan Buku | Perpustakaan</title>
</head>

<body>
    <?php
    include 'components/navbar.html'
    ?>

    <form action="tambah_prosess.php" method="post">
        <label for="">Judul: </label><br>
        <input type="text" name="judul"><br>
        <br>

        <label for="">Penulis: </label><br>
        <input type="text" name="penulis"><br>
        <br>

        <label for="">Penerbit: </label><br>
        <input type="text" name="penerbit"><br>
        <br>

        <label for="">Tahun Terbit: </label><br>
        <input type="text" name="tahunTerbit"><br>
        <br>

        <label for="">Jumlah Halaman</label><br>
        <input type="text" name="jumlahHalaman"><br>
        <br>

        <label for="">Lokasi</label><br>
        <input type="text" name="lokasi"><br>
        <br>

        <label for="">Gambar: </label><br />
        <input type="file" name="gambar" src="assets/1337310-200.png" alt="" name="gambar" width="64px" height="64px"><br>
        <br>

        <input type="submit" value="Submit">
    </form>
</body>

</html>