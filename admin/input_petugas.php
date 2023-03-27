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
	<h1>Input Data Petugas</h1>
	<form id="form_petugas" action="proses_petugas.php" method="post">
		<fieldset>
			<legend>Input Data Petugas</legend>
			<table border="0">
			
			<tr>
				<td>ID Petugas</td>
				<td>:</td>
				<td> <input type="text" name="id_petugas" size="20"></td>
			</tr>
			<tr>
				<td>Nama Petugas</td>
				<td>:</td>
				<td> <input type="text" name="nama" size="20"></td>
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