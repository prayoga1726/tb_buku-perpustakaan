<?php
    require 'koneksi.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>CRUD Tabel Buku</title>
</head>
<body>
    <h1>Daftar Buku</h1>
    <a href="tambah.php" class="btn btn-primary mb-3">Tambah Data</a>
    <table border="3" cellpading="20" cellspacing="5">
        <tr>
            <th>No</th>
            <th>Aksi</th>
            <th>Kode Buku</th>
            <th>Judul Buku</th>
            <th>Pengarang</th>
            <th>Kode Penerbit</th>
            <th>Jumlah Buku</th>
        </tr>
        <?php $i = 1 ?>
        <?php while ($row = mysqli_fetch_assoc($result)): ?>
        <tr>
            <td><?=$i ?></td>
            <td>
                <a href="ubah.php?kd_buku=<?= $row["kd_buku"]; ?>" onclick="return confirm ('yakin, dek?');">Ubah |</a>
                <a href="hapus.php?kd_buku=<?= $row["kd_buku"]; ?>" onclick="return confirm ('yakin, dek?');">Hapus</a>
            </td>
            <td><?= $row["kd_buku"]; ?></td>
            <td><?= $row["judul_buku"]; ?></td>
            <td><?= $row["pengarang"]; ?></td>
            <td><?= $row["kd_penerbit"]; ?></td>
            <td><?= $row["jml_buku"]; ?></td>
        </tr>
        <?php $i++; ?>
        <?php endwhile; ?>
    </table>
</body>
</html>