<!DOCTYPE html>
<html>
<head>
	<title>Halaman Admin</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<?php 
		session_start();
		if ($_SESSION['level']=="") {
			header("location:index.php?pesan=gagal");
		}
	 ?>
	<div id="bungkus">
	<div id="header"><h1>Web Pembayaran SPP</h1></div>
	<div id="menu">
		<ul>
			<li class="utama"><a href="index.php">Branda</a></li>
	
			<li class="utama"><a  href="">Input Data</a>
				<ul>
				<li><a href="?page=petugas">Data Petugas</a></li>
				<li><a href="?page=siswa">Data Siswa</a></li>
				<li><a href="?page=kelas">Data Kelas</a></li>
				<li><a href="?page=spp">Data spp</a></li>
				<li><a href="?page=pembayaran">Data Pembayaran</a></li>
			</ul>
			</li>

			<li class="utama"><a href="?page=history">History Pembayaran</a></li>
			<li class="utama"><a href="?page=laporan">Laporan</a></li>
			<li class="utama"><a href="../logout.php">Logout</a></li>
		</ul>
	</div>

	<div id="isi">
		<?php 
		$page = @$_GET['page'];
		if ($page == "petugas") {
		 	include "input_petugas.php";
		 }elseif ($page == "tampil_petugas") {
		 	include "tampil_petugas.php";

		 }elseif ($page == "siswa") {
		 	include "input_siswa.php";
		 }elseif ($page == "tampil_siswa") {
		 	include "tampil_siswa.php";

		 }elseif ($page == "kelas") {
		 	include "input_kelas.php";
		 }elseif ($page == "tampil_kelas") {
		 	include "tampil_kelas.php"; 
		 }elseif ($page == "edit_kelas") {
		 	include "edit_kelas.php";

		 }elseif ($page == "spp") {
		 	include "input_spp.php";
		 }elseif ($page == "tampil_spp") {
		 	include "tampil_spp.php";

		 }elseif ($page == "pembayaran") {
		 	include "input_pembayaran.php";
		 }elseif ($page == "tampil_pembayaran") {
		 	include "tampil_pembayaran.php";

		 }elseif ($page == "history") {
		 	include "history.php";
		 }elseif ($page == "laporan") {
		 	include "laporan.php";
		 }
		 ?>
	</div>
	<div id="footer">&copy; 2021-<?php echo date("Y") ; ?> <br>
	 Muhammad Ulwy. All Right Reseved.</div>
	</div>
</body>
</html>
