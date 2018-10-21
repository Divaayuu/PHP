<?php
    $host = "localhost"; //host database
    $username = "root"; //username database
    $password = ""; //password database
    $database = "database_kk4";
    
    $koneksi = mysqli_connect($host,$username,$password,$database); //membuat koneksi server ke mysql

    if ($koneksi->connect_error){
        die("Koneksi ke database gagal");
    }
?>