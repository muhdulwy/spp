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
 	<h1>Data Kelas</h1>
 	<center><a href="?page=kelas">Input Data Kelas&Gt;</a></center>
 	<br/>
 	<table border="1">
 		<tr>
 			<th>No</th>
 			<th>Id Kelas</th>
 			<th>kelas</th>
 			<th>Jurusan</th>
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
 		echo "<td>$data[id_kelas]</td>";
 		echo "<td>$data[kelas]</td>";
 		echo "<td>$data[jurusan]</td>";

 		echo '<td>
 		<a href="edit_kelas.php?id_kelas='.$data['id_kelas'].'">Edit</a>
  		<a href="hapus_kelas.php?id_kelas='.$data['id_kelas'].'"
  		onclick="return confirm(\'Anda yakin akan menghapus data?\')">Hapus</a>
  		</td>';
  		echo "</tr>";
  		$no++; //menambah nilai urut
 	}
 	?>
 	</table>
 
 </body>
 </html>