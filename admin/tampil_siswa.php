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
 	<h1>Data Siswa</h1>
 	<center><a href="?page=siswa">Input Data Siswa&Gt;</a></center>
 	<br/>
 	<table border="1">
 		<tr>
 			<th>No</th>
 			<th>NISN</th>
 			<th>NIS</th>
 			<th>ID Kelas</th>
 			<th>ID SPP</th>
 			<th>Nama</th>
 			<th>Alamat</th>
 			<th>No HP</th>
 			<th>AKSI</th>
 		</tr>
 	<?php
 	//jalankan query untuk menampilkan semua data diurutkan berdasarkan....
 	$query = "SELECT * FROM siswa ORDER BY nisn ASC"; //ASC adalah kebalikan dari kecil ke besar
 	$result = mysqli_query($koneksi, $query);
 	//mengecek apakah ada error ketika menjalankan query
 	if (!$result) {
 		die("Query Error: ".mysqli_errno($koneksi).
 			"-".mysqli_error($koneksi));
 	}

 	//buat perulangan untuk element tabel dari data mahasiswa
 	$no = 1; //variabel untuk membuat nomor urut 
 	//hasil query akan disimpan dalam variabel $data dalam bentuk.....
 	//kemudian dicetak dengfan perulangan while
 	while ($data = mysqli_fetch_assoc($result)) 
 	{
 	//mencetak /menampilakn data
 		echo "<tr>";
 		echo "<td>$no</td>"; //menampilkan no urut
 		echo "<td>$data[nisn]</td>";
 		echo "<td>$data[nis]</td>";
 		echo "<td>$data[id_kelas]</td>";
 		echo "<td>$data[id_spp]</td>";
 		echo "<td>$data[nama]</td>";
 		echo "<td>$data[alamat]</td>";
 		echo "<td>$data[hp]</td>";

 		echo '<td>
 		<a href="edit.php?nisn='.$data['nisn'].'">Edit</a>
  		<a href="hapus.php?nisn='.$data['nisn'].'"
  		onclick="return confirm(\'Anda yakin akan menghapus data?\')">Hapus</a>
  		</td>';
  		echo "</tr>";
  		$no++; //menambah nilai urut
 	}
 	?>
 	</table>
 
 </body>
 </html>