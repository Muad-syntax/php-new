<?php
include "koneksi.php";
if (isset($_GET['id'])) {
    $get = $_GET['id'];
    $query = "SELECT * FROM tbsiswa WHERE id = '$get' or nama = '$get' or kelas = '$get'";
} else {
    $query = "SELECT * FROM tbsiswa ";
}
$hasil = mysqli_query($koneksi, $query);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>latihan php</title>
</head>

<body>
    <h2>Data User</h2>
    <form action="" method="get">
        <input type="text" name="id" required>
        <button>cari</button>
    </form>
    <table border="1" cellpadding="8" cellspacing="0" class="table">
        <tr>
            <th>ID</th>
            <th>Nama</th>
            <th>Kelas</th>
            <th>Aksi</th>
        </tr>
        <?php while ($row = mysqli_fetch_assoc($hasil)) { ?>
            <tr>
                <td><?php echo $row['id']; ?></td>
                <td><?php echo $row['nama']; ?></td>
                <td><?php echo $row['kelas']; ?></td>
                <!-- <td><a href="hapus.php?id=<?php echo $row['id']; ?>">hapus</a></td> -->
                <td>
                    <form action="hapus.php" method="post">
                        <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
                        <button>hapus</button>
                    </form>
                </td>
            </tr>
        <?php } ?>
</body>

</html>