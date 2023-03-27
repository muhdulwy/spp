<?php
include '../koneksi.php'; 
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
 			<th>Kelas</th>
 			<th>Jurusan</th>
 			<th>AKSI</th>
 		</tr>
 	<?php
 
 	$query = "SELECT * FROM kelas ORDER BY id_kelas ASC";
 	$result = mysqli_query($link, $query);
 
 	if (!$result) {
 		die("Query Error: ".mysqli_errno($link).
 			"-".mysqli_error($link));
 	}

 
 	$no = 1;
 
 	while ($data = mysqli_fetch_assoc($result)) 
 	{

 		echo "<tr>";
 		echo "<td>$no</td>";
 		echo "<td>$data[id_kelas]</td>";
 		echo "<td>$data[kelas]</td>";
 		echo "<td>$data[jurusan]</td>";

 		echo '<td>
 		<a href="edit_kelas.php?id_kelas='.$data['id_kelas'].'">Edit</a>
  		<a href="hapus_kelas.php?id_kelas='.$data['id_kelas'].'"
  		onclick="return confirm(\'Anda yakin akan menghapus data?\')">Hapus</a>
  		</td>';
  		echo "</tr>";
  		$no++;
 	}
 	?>
 	</table>
 
 </body>
 </html>