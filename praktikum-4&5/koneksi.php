<?php
    $host = "localhost";
    $user = "root"; 
    $pass = "";
    $connect = mysql_connect($host, $user, $pass);

    // check koneksi
    if ($connect) {
        echo "Koneksi database Berhasil";
    } else {
        echo "Koneksi database GAGAL";
    }
?>
