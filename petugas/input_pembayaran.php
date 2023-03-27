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
	<h1>Input Data Transaksi</h1>
	<form id="form_transaksi" action="proses_pembayaran.php" method="post">
		<fieldset>
			<legend>Input Data Transaksi</legend>
<table border="0">
			
			<tr>
				<td>ID Pembayaran</td>
				<td>:</td>
				<td> <input type="text" name="id_pembayaran" size="20"></td>
			</tr>
			<tr>
				<td>ID Petugas</td>
				<td>:</td>
				<td> <input type="text" name="id_petugas" size="20"></td>
			</tr>
			<tr>
				<td>ID SPP</td>
				<td>:</td>
				<td> <input type="text" name="id_spp" size="20"></td>
			</tr>
			<tr>
				<td>NISN</td>
				<td>:</td>
				<td> <input type="text" name="nisn" size="20"></td>
			</tr>
			<tr>
				<td>Tanggal Bayar</td>
				<td>:</td>
				<td> <input type="text" name="tgl_bayar" size="20"></td>
			</tr>
			<tr>
				<td>Bulan Bayar</td>
				<td>:</td>
				<td> <input type="text" name="Bulan_bayar" size="20"></td>
			</tr>
			<tr>
				<td>Tahun Bayar</td>
				<td>:</td>
				<td> <input type="text" name="tahun_bayar" size="20"></td>
			</tr>
			<tr>
				<td>Jumlah Bayar</td>
				<td>:</td>
				<td> <input type="text" name="jumlah_bayar" size="20"></td>
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