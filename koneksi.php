<?php
$host = "localhost";
$user = "root";
$pass = "";
$db = "sekolahdb";

$koneksi = mysqli_connect($host, $user, $pass, $db);
$get = $_GET['kelas'];

$query = "SELECT * FROM tbsiswa WHERE kelas = '$get'";
$hasil = mysqli_query($koneksi,$query);



if (!$koneksi) {
    die("koneksi gagal: " . mysqli_connect_error());
}
?>