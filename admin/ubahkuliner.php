<h2>Ubah Kuliner</h2>

<?php 

$ambil = $koneksi->query("SELECT * FROM kulinerr WHERE idKuliner='$_GET[id]'"); 
$pecah = $ambil -> fetch_assoc();



?>

<form method="post" enctype="multipart/form-data">
	<div class="form-group">
		<label>Nama</label>
		<input type="text" name="nama" class="form-control" value="<?php echo $pecah['namatTempat']  ?>">
	</div>
	
	<div class="form-group">
		<label>Alamat</label>
		<input type="text" name="Alamat" class="form-control" value="<?php echo $pecah['Alamat']  ?>">
	</div>

	<div class="form-group">
		<label>Kontak</label>
		<input type="text" name="kontak" class="form-control" value="<?php echo $pecah['kontak']  ?>">
	</div>

	

	<div class="form-group">
		<img src="../foto_kuliner/<?php echo $pecah['foto_kuliner'];?>" width="200">
	</div>

	<div class="form-grpup">
		<label>Ganti foto</label>
		<input type="file" name="foto" class="form-control">
	</div>

	<div class="form-group">
		<label>Map</label>
		<input type="text" name="map" class="form-control" value="<?php echo $pecah['map']  ?>">
	</div>



	<div class="form-group">
		<label>Deskripsi</label>
		<textarea name="deskripsi" class="form-control" rows="5"><?php echo $pecah['deskripsi'] ?></textarea>
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
		move_uploaded_file($lokasifoto, "../foto_kuliner/$namafoto");

		$koneksi -> query("UPDATE kulinerr SET namatTempat = '$_POST[nama]', Alamat = '$_POST[Alamat]', kontak = '$_POST[kontak]', deskripsi = '$_POST[deskripsi]', foto_kuliner = '$namafoto', map = '$_POST[map]'WHERE idKuliner='$_GET[id]'");
	}
	else{
		$koneksi -> query("UPDATE kulinerr SET namatTempat = '$_POST[nama]', Alamat = '$_POST[Alamat]', kontak = '$_POST[kontak]', deskripsi = '$_POST[deskripsi]', map = '$_POST[map]' WHERE idKuliner='$_GET[id]'");
	}

	echo "<script>location='index.php?halaman=kuliner';</script>";
} 
?>