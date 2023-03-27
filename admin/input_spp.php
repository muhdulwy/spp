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
	<h1>Input Spp</h1>
	<form id="form_spp" action="proses_spp.php" method="post">
		<fieldset>
			<legend>Input Spp</legend>
			<table border="0">
			
			<tr>
				<td>ID SPP</td>
				<td>:</td>
				<td> <input type="text" name="id_spp" size="20"></td>
			</tr>
			<tr>
				<td>Tahun</td>
				<td>:</td>
				<td> <input type="text" name="tahun" size="20"></td>
			</tr>
			<tr>
				<td>Nominal</td>
				<td>:</td>
				<td> <input type="text" name="nominal" size="20"></td>
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