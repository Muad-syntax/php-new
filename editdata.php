<?php
include "service/koneksi.php";
if (isset($_GET['id'])) {
    $id = $_GET['id'];

    $data = mysqli_query($koneksi, "SELECT * FROM tbsiswa WHERE id = '$id'");
    $row = mysqli_fetch_assoc($data);

    if (!$row) {
        die("Data siswa tidak ditemukan");
    }
}

if (isset($_POST['submit'])) {
    $id = $_POST['id'];
    $nama = $_POST['nama'];
    $kelas = $_POST['kelas'];

    mysqli_query($koneksi, "UPDATE tbsiswa SET nama='$nama', kelas='$kelas' WHERE id='$id'");
    header("Location: index.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h2>Edit Data Siswa</h2>
    <form action="editdata.php" method="post">
        <input type="hidden" name="id" value="<?php echo $row['id']; ?>">

        <label>Nama:</label><br>
        <input type="text" name="nama" value="<?php echo $row['nama']; ?>" required><br><br>

        <label>Kelas:</label><br>
        <input type="text" name="kelas" value="<?php echo $row['kelas']; ?>" required><br><br>

        <button type="submit" name="submit">Simpan</button>
    </form>
</body>

</html>