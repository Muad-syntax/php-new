<?php
include "koneksi.php";

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
    <table border="1" cellpadding="8" cellspacing="0" class="table">
        <tr>
            <th>ID</th>
            <th>Nama</th>
            <th>Kelas</th>
        </tr>
        <?php while ($row = mysqli_fetch_assoc($hasil)) { ?>
            <tr>
                <td><?php echo $row['id']; ?></td>
                <td><?php echo $row['nama']; ?></td>
                <td><?php echo $row['kelas']; ?></td>
            </tr>
        <?php } ?>
</body>

</html>