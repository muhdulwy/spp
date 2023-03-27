<?php
//memanggil file koneksi.php untuk melakukan koneksi database
include 'koneksi.php'; 
 ?>

 <!DOCTYPE html>
 <html>
 <head>
 	<style>
 		table{
 			width: 840px;
 			margin: auto;
 		}
 		h1{
 			text-align: center;
 		}
 	</style>
 </head>
 <body>
 	<h1>Data Pembayaran</h1>
 	<center><a href="?page=pembayaran">Input Data Pembayaran&Gt;</a></center>
 	<br/>
 	<table border="1">
 		<tr>
 			<th>No</th>
 			<th>Id Pembayaran</th>
 			<th>ID Petugas</th>
 			<th>ID SPP</th>
 			<th>NISN</th>
 			<th>Tanggal Bayar</th>
 			<th>Bulan Bayar</th>
 			<th>Tahun Bayar</th>
 			<th>Jumlah Bayar</th>
 			<th>AKSI</th>
 		</tr>
 	<?php
 	//jalankan query untuk menampilkan semua data diurutkan berdasarkan....
 	$query = "SELECT * FROM kelas ORDER BY id_kelas ASC"; //ASC adalah kebalikan dari kecil ke besar
 	$result = mysqli_query($koneksi, $query);
 	//mengecek apakah ada error ketika menjalankan query
 	if (!$result) {
 		die("Query Error: ".mysqli_errno($koneksi).
 			"-".mysqli_error($koneksi));
 	}

 	//buat perulangan untuk element tabel dari data mahasiswa
 	$no = 1; //variabel untuk memmbuat nomor urut 
 	//hasil query akan disimpan dalam variabel $data dalam bentuk.....
 	//kemudian dicetak dengfan perulangan while
 	while ($data = mysqli_fetch_assoc($result)) 
 	{
 	//mencetak /menampilakn data
 		echo "<tr>";
 		echo "<td>$no</td>"; //menampilkan no urut
 		echo "<td>$data[id_pembayaran]</td>";
 		echo "<td>$data[id_petugas]</td>";
 		echo "<td>$data[id_spp]</td>";
 		echo "<td>$data[nisn]</td>";
 		echo "<td>$data[tanggal_bayar]</td>";
 		echo "<td>$data[bulan_bayar]</td>";
		echo "<td>$data[tahun_bayar]</td>";
 		echo "<td>$data[jumlah_bayar]</td>";

 		echo '<td>
 		<a href="edit.php?id_kelas='.$data['id_kelas'].'">Edit</a>
  		</td>';
  		echo "</tr>";
  		$no++; //menambah nilai urut
 	}
 	?>
 	</table>
 
 </body>
 </html>