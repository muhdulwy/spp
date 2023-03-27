<?php 
session_start();
include'koneksi.php';


// define variables and set to empty values
$username = $password = "";


  $username = test_input($_POST["username"]);
  $password = test_input($_POST["password"]);


function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  $data = htmlentities($data);
  return $data;
}

$query = sprintf("SELECT * FROM user WHERE username = '%s' and password = '%s'",
    mysqli_real_escape_string($link, $username), mysqli_real_escape_string($link, $password));

	die ( $query );

	$login = mysqli_query($link, $query);

	$cek = mysqli_num_rows($login);

if ($cek >=0) {
	$data = mysqli_fetch_assoc($login);

	if ($data['level']=="admin"){
		$_SESSION['username'] = $username;
		$_SESSION['level'] = "admin";
		header("location:admin/");

	}elseif ($data['level']=="petugas"){
		$_SESSION['username'] = $username;
		$_SESSION['level'] = "petugas";
		header("location:petugas/");

	}elseif ($data['level']=="siswa"){
		$_SESSION['username'] = $username;
		$_SESSION['level'] = "siswa";
		header("location:siswa/");
	}else{
		header("location:index.php?pesan=gagal");
	}
	}else{
	header("location:index.php?pesan=gagal");
	}

 ?>

