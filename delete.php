<?php 
	include "koneksi.php";
	$id = $_GET['id'];
	mysqli_query($koneksi, "DELETE FROM tabel_kk4 WHERE id='$id'");
	header("location:table.php");
 ?>