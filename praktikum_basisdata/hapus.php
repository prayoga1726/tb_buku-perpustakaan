<?php
    require 'koneksi.php';

    $kd_buku = $_GET['kd_buku'];
    $sqlDelete = "DELETE FROM tb_buku WHERE kd_buku='$kd_buku'";
    mysqli_query($koneksi, $sqlDelete);

    header("Location: index.php");
?>