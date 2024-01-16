<?php
    require 'koneksi.php';
    $kd_buku = $_GET['kd_buku'];
    $sqlGet = "SELECT * FROM tb_buku WHERE kd_buku='$kd_buku'";
    $queryGet = mysqli_query($koneksi, $sqlGet);
    $row = mysqli_fetch_array($queryGet);
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
    <div class="w-50 border p-3 mt-3">
        <a href="index.php">Kembali ke home</a>
        <form action="ubah.php" method="post">
        <label for="kd_buku">Kode Buku</label>
        <input type="text" id="kd_buku" name="kd_buku" value="<?php echo"$row[kd_buku]";?>" class="form-control" readonly>

        <label for="judul_buku">Judul Buku</label>
        <input type="text" id="judul_buku" name="judul_buku" value="<?php echo"$row[judul_buku]";?>" class="form-control" required>

        <label for="pengarang">Pengarang</label>
        <input type="text" id="pengarang" name="pengarang" value="<?php echo"$row[pengarang]";?>" class="form-control" required>

        <label for="kd_penerbit">Kode Penerbit</label>
        <input type="text" id="kd_penerbit" name="kd_penerbit" value="<?php echo"$row[kd_penerbit]";?>" class="form-control" required>

        <label for="jml_buku">Jumlah Buku</label>
        <input type="text" id="jml_buku" name="jml_buku" value="<?php echo"$row[jml_buku]";?>" class="form-control" required>

        <input type="submit" class="btn btn-primary mt-3" name="tambah" value="Tambah Data">
        </form>
    </div>

    <?php
if (isset($_POST['tambah'])) {
    $kd_buku = $_POST['kd_buku'];
    $judul_buku = $_POST['judul_buku'];
    $pengarang = $_POST['pengarang'];
    $kd_penerbit = $_POST['kd_penerbit'];
    $jml_buku = $_POST['jml_buku'];

    $sqlUpdate = "UPDATE tb_buku 
                  SET kd_buku='$kd_buku',judul_buku='$judul_buku',pengarang='$pengarang',kd_penerbit='$kd_penerbit',jml_buku='$jml_buku' 
                  WHERE kd_buku='$kd_buku' ";

    $queryUpdate = mysqli_query($koneksi, $sqlUpdate);
    
    header("Location: index.php");
}
    ?>
</html>