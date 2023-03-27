<?php 

include 'koneksi.php';

//mengecek apakah tombol input dari form telah diklik
if (isset($_POST['input'])) {

	//membuat variabel untuk menampung data dari form
	$nisn =  $_POST['nisn'];
	$nis =  $_POST['nis'];
	$id_kelas =  $_POST['id_kelas'];
	$id_spp =  $_POST['id_spp'];
	$nama =  $_POST['nama'];
	$alamat =  $_POST['alamat'];
	$hp =  $_POST['hp'];

	//jalankan query insert untuk menambah data ke database
	$query = "INSERT INTO siswa VALUES ('$nisn','$nis','$id_kelas','$id_spp','$nama','$alamat','$hp')";
	$result = mysqli_query($koneksi, $query);

	//periksa query apakah ada error
	if (!$result) {
		die("query gagal di jalankan:".mysqli_connect_errno($koneksi)." - ".mysqli_connect_error($koneksi));
	}
}

//melakukan redirect (mengalihkan)ke halaman index.php 
header("location:index.php?page=tampil_siswa");
 ?>