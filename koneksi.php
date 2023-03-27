<?php 
$host = "localhost";
$user = "root";
$pass = "";
$name = "pembayaranspp";

$link = mysqli_connect($host,$user,$pass,$name);

if (!$link) {
	die("Koneksi Gagal: ".mysqli_connect_errno()." - ".mysqli_connect_error());
}
 ?>