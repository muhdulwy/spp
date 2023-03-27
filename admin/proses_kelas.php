<?php 

include '../koneksi.php';

if (isset($_POST['simpan'])) {

	$id_kelas 	=  $_POST['id_kelas'];
	$kelas 	=  $_POST['kelas'];
	$jurusan 	=  $_POST['jurusan'];

	$query = "INSERT INTO kelas VALUES ('$id_kelas','$kelas','$jurusan')";
	$result = mysqli_query($link, $query);

	if (!$result) {
		die("query gagal di jalankan:".mysqli_connect_errno($link)." - ".mysqli_connect_error($link));
	}
}
header("location:index.php?page=tampil_kelas");
 ?>