<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<style >
	h1{
		text-align: center;
	}
	.container{
		width: 400px;
		margin: auto;
	}
</style>
<body>
	<h1>Input Data Siswa</h1>
	<form id="form_siswa" action="proses_siswa.php" method="post">
		<fieldset>
			<legend>Input Data Siswa</legend>
			<table border="0">
			
			<tr>
				<td>NISN</td>
				<td>:</td>
				<td> <input type="text" name="nisn" size="20"></td>
			</tr>
			<tr>
				<td>NIS</td>
				<td>:</td>
				<td> <input type="text" name="nis" size="20"></td>
			</tr>
			<tr>
				<td>ID Kelas</td>
				<td>:</td>
				<td> <input type="text" name="id_kelas" size="20"></td>
			</tr>
			<tr>
				<td>ID SPP</td>
				<td>:</td>
				<td> <input type="text" name="id_spp" size="20"></td>
			</tr>
			<tr>
				<td>Nama</td>
				<td>:</td>
				<td> <input type="text" name="nama" size="20"></td>
			</tr>
			<tr>
				<td>Alamat</td>
				<td>:</td>
				<td> <input type="text" name="alamat" size="20"></td>
			</tr>
			<tr>
				<td>No HP</td>
				<td>:</td>
				<td> <input type="text" name="hp" size="20"></td>
			</tr>
			<tr>
				<td></td>
				<td></td>
				<td> <input type="submit" name="input" value="Simpan"></td>
			</tr>
		</table>
	</form>
</body>
</html>