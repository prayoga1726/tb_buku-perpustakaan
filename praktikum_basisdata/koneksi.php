<?php
    
    $koneksi = mysqli_connect("localhost", "root", "", "db_perpustakaan");
    if($koneksi)
    {
        echo("Sukses");
    }
    else
    {
        echo("Gagal");
    }
    $result = mysqli_query($koneksi, 'select * from tb_buku');
    // while($buku = mysqli_fetch_assoc($result))
    // {
    //     var_dump($buku["judul_buku"]);
    // }
?>