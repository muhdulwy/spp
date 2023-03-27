<?php 

include 'koneksi.php';

//mengecek apakah tombol input dari form telah diklik
if (isset($_POST['input'])) {

	//membuat variabel untuk menampung data dari form
	$id_pembayaran =  $_POST['id_pembayaran'];
	$id_petugas =  $_POST['id_petugas'];
	$id_spp =  $_POST['id_spp'];
	$nisn =  $_POST['nisn'];
	$tgl_bayar =  $_POST['tgl_bayar'];
	$bulan_bayar =  $_POST['bulan_bayar'];
	$tahun_bayar =  $_POST['tahun_bayar'];
	$jumlah_bayar =  $_POST['jumlah_bayar'];

	//jalankan query insert untuk menambah data ke database
	$query = "INSERT INTO pembayaran VALUES ('$id_pembayaran','$id_petugas','$id_spp','$nisn','$tgl_bayar','$bulan_bayar','$tahun_bayar','$jumlah_bayar')";
	$result = mysqli_query($koneksi, $query);

	//periksa query apakah ada error
	if (!$result) {
		die("query gagal di jalankan:".mysqli_connect_errno($koneksi)." - ".mysqli_connect_error($koneksi));
	}
}

//melakukan redirect (mengalihkan)ke halaman index.php 
header("location:index.php?page=tampil_pembayaran");
 ?>