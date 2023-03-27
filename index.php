<!DOCTYPE html>
<html>
<head>
	<title>Pembayaran SPP</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

	<h1>Form Login Pembayaran SPP</h1>

	<?php 
	if (isset($_GET['pesan'])) {
		if ($_GET['pesan']=="gagal") {
			echo "<div class='alert'>Username dan Password tidak sesuai</div>";
		}
	} ?>

	<div class="kotak_login">
		<p class="tulisan_login">Silahkan Login</p>
		<form action="cek_login.php" method="POST">

			<label>Username</label>
			<input type="text" name="username" class="form_login">

			<label>Password</label>
			<input type="password" name="password" class="form_login">

			<input type="submit" name="login" class="tombol_login" value="LOGIN">

		</form>
	</div>

</body>
</html>