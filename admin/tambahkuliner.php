<h2>Tambah Kuliner</h2>

<form method="post" enctype="multipart/form-data">
	<div class="form-group">
		<label>Nama</label>
		<input type="text" class="form-control" name="namatTempat">
	</div>
	<div class="form-group">
		<label>Alamat</label>
		<input type="text" class="form-control" name="Alamat">
	</div>
	<div class="form-group">
		<label>Kontak</label>
		<input type="text" class="form-control" name="kontak">
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
	$nama = $_FILES['foto']['name'];
	$lokasi = $_FILES['foto']['tmp_name'];
	move_uploaded_file($lokasi, "../foto_kuliner/".$nama);
	$koneksi->query("INSERT INTO kulinerr (namatTempat,Alamat,kontak,deskripsi,foto_kuliner,buka,map)
		VALUES('$_POST[namatTempat]','$_POST[Alamat]','$_POST[kontak]','$_POST[deskripsi]','$nama', '$_POST[buka]', '$_POST[map]')");

	echo "<div class='alert alert-info'>Data tersimpan</div>";
	echo "<meta http-equiv='refresh' content='1;url=index.php?halaman=kuliner'>";
}
?>