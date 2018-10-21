<?php
    include "koneksi.php";
    
    $sql = "CREATE TABLE user
    (
        id varchar(50),
        username varchar(50),
        password varchar(50),
        level varchar(50),
        fullname varchar(50)
    )";

    if ($koneksi->query($sql) == TRUE){
        echo "Tabel berhasil di buat";
    } else {
        echo "Tabel gagal di buat";
    }
?>