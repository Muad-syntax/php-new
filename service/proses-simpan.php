<?php
include 'koneksi.php';


$nama = $_POST['nama'];
$kelas = $_POST['kelas'];

$query = "INSERT INTO tbsiswa (`nama` , `kelas`) VALUES ('$nama', '$kelas')";
$hasil = mysqli_query($koneksi, $query);

if ($hasil) {
    header ("Location: ../index.php");
} else {
    echo "Gagal menyiman data: " . mysqli_error($koneksi);
}
?>

