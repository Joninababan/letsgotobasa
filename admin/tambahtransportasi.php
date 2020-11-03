<h2>Tambah Transportasi</h2>

<form method="post" enctype="multipart/form-data">
	<div class="form-group">
		<label>Nama Driver</label>
		<input type="text" class="form-control" name="nama_driver">
	</div>
	<div class="form-group">
		<label>Usia Driver</label>
		<input type="text" class="form-control" name="usia">
	</div>
	<div class="form-group">
		<label>No telepon Driver</label>
		<input type="text" class="form-control" name="notelp_driver">
	</div>
	<div class="form-group">
		<label>Alamat Driver</label>
		<input type="text" class="form-control" name="alamat_driver">
	</div>

	<div class="form-group">
		<label>Foto Driver</label>
		<input type="file" class="form-control" name="fotoo">
	</div>
	

	<div class="form-group">
		<label>Nama Mobil</label>
		<input type="text" class="form-control" name="nama">
	</div>
	<div class="form-group">
		<label>Brand</label>
		<input type="text" class="form-control" name="brand">
	</div>

	<div class="form-group">
		<label>Tempat duduk</label>
		<input type="number" class="form-control" name="tempatduduktransportasi">
	</div>
	
	<div class="form-group">
		<label>Plat</label>
		<input type="text" class="form-control" name="plat">
	</div>
	
	<div class="form-group">
		<label>Harga</label>
		<input type="number" class="form-control" name="harga">
	</div>
	
	<div class="form-group">
		<label>Deskripsi</label>
		<textarea class="form-control" name="deskripsi" rows="10"></textarea>
	</div>
	
	
	<div class="form-group">
		<label>Foto</label>
		<input type="file" class="form-control" name="foto">
	</div>
	<button class="btn btn-primary" name="save">Simpan</button>



</form>
<?php
if (isset($_POST['save'])) 
{
	$nama = $_FILES['foto']['name'];
	$lokasi = $_FILES['foto']['tmp_name'];
	move_uploaded_file($lokasi, "../foto_transportasi/".$nama);
	
	$namaa = $_FILES['fotoo']['name'];
	$lokasii = $_FILES['fotoo']['tmp_name'];
	move_uploaded_file($lokasii, "../foto_driver/".$namaa);
	



	$koneksi->query("INSERT INTO transportasi (nama_transportasi,nama_driver,usia,notelp_driver,alamat_driver,foto_driver,brand,tempat_duduk_transportasi,plat_transportasi,harga_transportasi,deskripsi_transportasi,foto_transportasi)
		VALUES('$_POST[nama]','$_POST[nama_driver]','$_POST[usia]','$_POST[notelp_driver]','$_POST[alamat_driver]','$namaa','$_POST[brand]','$_POST[tempatduduktransportasi]','$_POST[plat]','$_POST[harga]','$_POST[deskripsi]','$nama')");

	echo "<div class='alert alert-info'>Data tersimpan</div>";
	echo "<meta http-equiv='refresh' content='1;url=index.php?halaman=transportasi'>";
}
?>