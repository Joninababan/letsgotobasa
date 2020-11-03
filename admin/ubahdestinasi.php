<h2>Ubah Destinasi</h2>

<?php 

$ambil = $koneksi->query("SELECT * FROM destinasi WHERE id_destinasi='$_GET[id]'"); 
$pecah = $ambil -> fetch_assoc();



?>

<form method="post" enctype="multipart/form-data">
	<div class="form-group">
		<label>Nama Kabupaten</label>
		<input type="text" name="namakabupaten" class="form-control" value="<?php echo $pecah['nama_kabupaten']  ?>">
	</div>
	
	<div class="form-group">
		<label>nama Destinasi</label>
		<input type="text" name="namadestinasi" class="form-control" value="<?php echo $pecah['nama_destinasi']  ?>">
	</div>

	

	<div class="form-group">
		<img src="../foto_destinasi/<?php echo $pecah['foto_destinasi'];?>" width="200">
	</div>

	<div class="form-grpup">
		<label>Ganti foto</label>
		<input type="file" name="foto" class="form-control">
	</div>

	<div class="form-group">
		<label>Map</label>
		<input type="text" name="map" class="form-control" value="<?php echo $pecah['map']  ?>">
	</div>



	<button class="btn btn-primary" name="ubah">Ubah </button>

</form>

<?php 
if (isset($_POST['ubah']))
{
	$namafoto = $_FILES['foto']['name'];
	$lokasifoto = $_FILES['foto']['tmp_name'];
	if (!empty($lokasifoto)) 
	{
		move_uploaded_file($lokasifoto, "../foto_destinasi/$namafoto");

		$koneksi -> query("UPDATE destinasi SET nama_kabupaten = '$_POST[namakabupaten]', nama_destinasi = '$_POST[namadestinasi]', foto_destinasi = '$namafoto', deskripsi = '$_POST[deskripsi]', map = '$_POST[map]' WHERE id_destinasi='$_GET[id]'");
	}
	else{
		$koneksi -> query("UPDATE destinasi SET nama_kabupaten = '$_POST[namakabupaten]', nama_destinasi = '$_POST[namadestinasi]',  deskripsi = '$_POST[deskripsi]', map = '$_POST[map]' WHERE id_destinasi='$_GET[id]'");
	}

	echo "<script>location='index.php?halaman=destinasi';</script>";
} 
?>