<?php

include '../koneksi.php';
	if (isset($_GET["id_kelas"])){
	$id_kelas = $_GET["id_kelas"];
	$query = "DELETE FROM kelas WHERE id_kelas='$id_kelas' ";
	$hasil_query = mysqli_query($link, $query);

if(!$hasil_query) {
	die ("Gagal Menghapus Data: ".mysqli_errno($link).
	"-".mysqli_error($link));
}
}
	header("location:index.php?page=tampil_kelas");
?>