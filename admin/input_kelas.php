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
	<h1>Input Data Kelas</h1>
	<form id="form_kelas" action="proses_kelas.php" method="POST">
		<fieldset>
			<legend>Input Data Kelas</legend>
			<table border="0">
			
			<tr>
				<td>ID Kelas</td>
				<td>:</td>
				<td> <input type="text" name="id_kelas" size="20"></td>
			</tr>
			<tr>
				<td>Nama Kelas</td>
				<td>:</td>
				<td> <input type="text" name="kelas" size="20"></td>
			</tr>
			<tr>
				<td>Jurusan</td>
				<td>:</td>
				<td> <input type="text" name="jurusan" size="20"></td>
			</tr>
			
			<tr>
				<td></td>
				<td></td>
				<td> <input type="submit" name="simpan" value="Simpan"> <a href="index.php?page=tampil_kelas">Data Kelas</a></td>
			</tr>
		</table>
		</fieldset> 
	</form>
		
</body>
</html>