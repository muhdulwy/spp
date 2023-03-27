<?php

include '../koneksi.php';
if (isset($_GET['id_kelas'])) {
	
$id_kelas = ($_GET["id_kelas"]);
$query = "SELECT * FROM kelas WHERE id_kelas='$id_kelas'";
$result = mysqli_query($link, $query);

if(!$result){
	die("Query Error: ".mysqli_errno($link).
	"-".mysqli_error($link));
}
	$data = mysqli_fetch_assoc($result);
	$id_kelas = $data["id_kelas"];
	$kelas = $data["kelas"];
	$jurusan = $data["jurusan"];

}else{
	header("location:index.php?page=tampil_kelas");
}
?>
<!DOCTYPE html>
<html>
<head>
	<style>
		h1{
			text-align: center;
		  }
		.container{
			width: 480px;
			margin: auto;
		} 
	</style>
</head>
<body>
    <h1>Edit Data</h1>
    <div class="container">
   <form id="form_kelas" action="edit_proses_kelas.php" method="post">
     <input type="hidden" name="id_kelas" value="<?php echo $id_kelas; ?>"> 
    <fieldset>

      <legend>Edit Data Kelas</legend>
      <table border="0">
      
      <tr>
        <td>Nama Kelas</td>
        <td>:</td>
        <td> <input type="text" name="kelas" value="<?php echo $kelas ?>"></td>
      </tr>
      <tr>
        <td>Jurusan</td>
        <td>:</td>
        <td> <input type="text" name="jurusan" value="<?php echo $jurusan ?>"></td>
      </tr>
      
      <tr>
        <td></td>
        <td></td>
        <td>  <input type="submit" name="ubah" value="Update "></td>
      </tr>
    </table>
    </fieldset> 
    </form>
    </div>
</body>
</html>
