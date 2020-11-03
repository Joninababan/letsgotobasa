<h2>Tambah Souvenir</h2>

<form method="post" enctype="multipart/form-data">
	<div class="form-group">
		<label>Nama</label>
		<input type="text" class="form-control" name="namaTempat">
	</div>
	<div class="form-group">
		<label>Alamat</label>
		<input type="text" class="form-control" name="alamat">
	</div>
	<div class="form-group">
		<label>Deskripsi</label>
		<textarea class="form-control" name="deskripsi" rows="5"></textarea>
	</div>
	<div class="form-group">
		<label>Foto</label>
		<input type="file" class="form-control" name="foto">
	</div>
	<div class="form-group">
		<label>Buka</label>
		<input type="text" class="form-control" name="buka">
	</div>
	<div class="form-group">
		<label>Map</label>
		<input type="text" class="form-control" name="map">
	</div>
	<button class="btn btn-primary" name="save">Simpan</button>



</form>
<?php
if (isset($_POST['save'])) 
{
	$nama = $_FILES['fotosouvenir']['name'];
	$lokasi = $_FILES['fotosouvenir']['tmp_name'];
	move_uploaded_file($lokasi, "../fotosouvenir/".$nama);
	$koneksi->query("INSERT INTO souvenir (namaTempat,alamat,deskripsi,fotosouvenir,buka)
		VALUES('$_POST[namaTempat]','$_POST[alamat]','$_POST[deskripsi]','$nama', '$_POST[buka]', '$nama', '$_POST[map]')");

	echo "<div class='alert alert-info'>Data tersimpan</div>";
	echo "<meta http-equiv='refresh' content='1;url=index.php?halaman=souvenir'>";
}
?>