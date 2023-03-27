<?php
if (isset($_POST['edit'])){
	include("koneksi.php");

	$id_kelas = $_POST['id_kelas'];
	$kelas = $_POST['kelas'];
	$jurusan = $_POST['jurusan'];

	$query = "UPDATE kelas SET ";
	$query .= "kelas = '$kelas', ";
	$query .= "jurusan = '$jurusan' ";
	$query .= "WHERE id_kelas = '$id_kelas' ";

	$result = mysqli_query($koneksi, $query);

	if (!$result) {
		die("Query gagal dijalankan: ".mysqli_errno($koneksi)."-".mysqli_error($koneksi));
	}
}

header("location:index.php?page=tampil_kelas");
?>