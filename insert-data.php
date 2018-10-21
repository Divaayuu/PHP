<?php
    include "koneksi.php";
    
    $sql = "INSERT INTO user
     VALUE 
    (
        '15',
        'Diva Ayu Kusumawati',
        'divaa',
        'admin',
        'Diva Ayu Kusumawati',
    )";
    if ($koneksi->query($sql) == TRUE){
        echo"Insert data telah berhasil";
    } else {
        echo"Insert data gagal";
    }
?>