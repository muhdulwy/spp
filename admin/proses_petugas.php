<?php 

include 'koneksi.php';

//mengecek apakah tombol input dari form telah diklik
if (isset($_POST['input'])) {

	//membuat variabel untuk menampung data dari form
	$id_petugas =  $_POST['id_petugas'];
	$nama =  $_POST['nama'];


	//jalankan query insert untuk menambah data ke database
	$query = "INSERT INTO petugas VALUES ('$id_petugas','$nama')";
	$result = mysqli_query($koneksi, $query);

	//periksa query apakah ada error
	if (!$result) {
		die("query gagal di jalankan:".mysqli_connect_errno($koneksi)." - ".mysqli_connect_error($koneksi));
	}
}

//melakukan redirect (mengalihkan)ke halaman index.php 
header("location:index.php?page=tampil_petugas");
 ?>