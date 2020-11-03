<h2>Ubah Transportasi</h2>

<?php 

$ambil = $koneksi->query("SELECT * FROM transportasi WHERE id_transportasi='$_GET[id]'"); 
$pecah = $ambil -> fetch_assoc();



?>

<form method="post" enctype="multipart/form-data">
	




<div class="form-group">
		<label>Nama Transportasi</label>
		<input type="text" name="namatransportasi" class="form-control" value="<?php echo $pecah['nama_transportasi']  ?>">
	</div>



	
	
	<div class="form-group">
		<label>Tempat duduk</label>
		<input type="text" name="tempatduduktransportasi" class="form-control" value="<?php echo $pecah['tempat_duduk_transportasi']  ?>">
	</div>

	<div class="form-group">
		<label>No Polisi</label>
		<input type="text" name="plat" class="form-control" value="<?php echo $pecah['plat_transportasi']  ?>">
	</div>

	

	<div class="form-group">
		<img src="../foto_transportasi/<?php echo $pecah['foto_transportasi'];?>" width="200">
	</div>

	<div class="form-grpup">
		<label>Ganti foto</label>
		<input type="file" name="foto" class="form-control">
	</div>

	<div class="form-group">
		<label>Harga</label>
		<input type="number" name="harga" class="form-control" value="<?php echo $pecah['harga_transportasi']  ?>">
	</div>

	<div class="form-group">
		<label>Deskripsi</label>
		<textarea name="deskripsi" class="form-control" rows="5"><?php echo $pecah['deskripsi_transportasi'] ?></textarea>
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

		$koneksi -> query("UPDATE transportasi SET nama_transportasi = '$_POST[namatransportasi]', tempat_duduk_transportasi = '$_POST[tempatduduktransportasi]', plat_transportasi = '$_POST[plat]' , foto_transportasi = '$namafoto', harga_transportasi = '$_POST[harga]', deskripsi_transportasi = '$_POST[deskripsi]' WHERE id_transportasi='$_GET[id]'");
	}
	else{
		$koneksi -> query("UPDATE transportasi SET nama_transportasi = '$_POST[namatransportasi]', tempat_duduk_transportasi = '$_POST[tempatduduktransportasi]', plat_transportasi = '$_POST[plat]' , harga_transportasi = '$_POST[harga]', deskripsi_transportasi = '$_POST[deskripsi]' WHERE id_transportasi='$_GET[id]'");
	}

	echo "<script>location='index.php?halaman=transportasi';</script>";
} 
?>