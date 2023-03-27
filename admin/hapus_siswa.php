<?php

include 'koneksi.php';
	if (isset($_GET["nisn"])){ //mengecek apakah di url ada GET id_kelas
	$nisn = $_GET["nisn"];
	$query = "DELETE FROM siswa WHERE nisn='$nisn' ";
	$hasil_query = mysqli_query($koneksi, $query);

if(!$hasil_query) {
	die ("Gagal Menghapus Data: ".mysqli_errno($koneksi).
	"-".mysqli_error($koneksi));
}
}
	header("location:index.php?page=tampil_siswa");
?>