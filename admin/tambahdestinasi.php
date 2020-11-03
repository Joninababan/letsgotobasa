<h2>Tambah Destinasi</h2>

<form method="post" enctype="multipart/form-data">
	<div class="form-group">
		<label>Nama</label>
		<input type="text" class="form-control" name="nama_destinasi">
	</div>
<div class="form-group">
		<label>Nama Kabupaten</label>
		<input type="text" class="form-control" name="nama_kabupaten">
	</div>



	<div class="form-group">
		<label>Foto</label>
		<input type="file" class="form-control" name="foto">
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
	$nama_kabupaten = $_POST['nama_kabupaten'];
	$nama = $_FILES['foto']['name'];
	$lokasi = $_FILES['foto']['tmp_name'];
	move_uploaded_file($lokasi, "../foto_destinasi/".$nama);
	$koneksi->query("INSERT INTO destinasi (nama_destinasi,nama_kabupaten,foto_destinasi,map,deskripsi)
		VALUES('$_POST[nama_destinasi]','$nama_kabupaten','$nama','$_POST[map]','$_POST[deskripsi]')");


	echo "<div class='alert alert-info'>Data tersimpan</div>";
	echo "<meta http-equiv='refresh' content='1;url=index.php?halaman=destinasi'>";
}
?>