<?php
if (isset($_POST['ubah'])){
	include("../koneksi.php");

	$id_kelas = $_POST['id_kelas'];
	$kelas = $_POST['kelas'];
	$jurusan = $_POST['jurusan'];

	$result = mysqli_query($link, "UPDATE kelas SET kelas = '$kelas', jurusan = '$jurusan' WHERE id_kelas = '$id_kelas'");

	if (!$result) {
		die("Query gagal dijalankan: ".mysqli_errno($link)."-".mysqli_error($link));
	}
}

header("location:index.php?page=tampil_kelas");
?>