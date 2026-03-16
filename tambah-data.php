<?php
    include "service/koneksi.php";
    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style/input.css">
    <title>Tambah data</title>
</head>
<body>
    <?php include "layout/header.html" ?>
    <form action="service/proses-simpan.php" method="post">
        <input type="text" placeholder="masukan nama" name="nama">
        <input type="text" placeholder="masukan kelas" name="kelas">
        <button type="submit" >kirim</button>
    </form>
    <!--     -->
</body>
</html>