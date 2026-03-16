<?php
include "koneksi.php";
$id = $_POST['id'];
$query = "DELETE FROM tbsiswa WHERE id = '$id'";
$hasil = mysqli_query($koneksi, $query);

header("Location: ../index.php")
?>