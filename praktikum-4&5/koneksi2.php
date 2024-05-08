<?php
    $host = "localhost";
    $user = "root"; 
    $pass = "";
    $db   = "formdata";
    $connect = mysql_connect($host, $user, $pass);

    // check koneksi
    if ($connect) {
        $select = mysql_select_db($db, $connect);

        if ($select) {
            echo "Berhasil menemukan database " . $db;
        } else {
            echo "Database " . $db . " tidak ditemukan";
        }
    } else {
        echo "Koneksi database GAGAL";
    }
?>
