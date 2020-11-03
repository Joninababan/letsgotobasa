<?php

$id = $_GET["id"];
$ambil = $koneksi->query("SELECT * FROM booking JOIN transportasi ON booking.id_transportasi=transportasi.id_transportasi WHERE id='$_GET[id]' ");
$pecah = $ambil->fetch_assoc();






?>

<div class="row">
	<div class="col-md-6">
		<table class="table">
			<tr>
				<th>Nama Transportasi</th>
				<td><?php echo $pecah['nama_transportasi'] ?></td>
			</tr>
			<tr>
				<th>Tempat duduk</th>
				<td><?php echo $pecah['tempat_duduk_transportasi'] ?></td>
			</tr>
				<tr>
				<th>No Polisi</th>
				<td><?php echo $pecah['plat_transportasi'] ?></td>
			</tr>
			<tr>
				<th>Harga</th>
				<td><?php echo $pecah['harga_transportasi'] ?></td>
			</tr>
		</table>
	</div>
	<div class="col-md-6">
		<img src="../foto_transportasi/<?php echo $pecah['foto_transportasi'] ?>" alt="" class="img-responsive">
	</div>

	<form method="post">

	<div class="'form-group">
		<label>Status</label>
		<select class="form-control" name="status">
			<option value="">Pilih Status</option>
			<option value="Menunggu">Menunggu</option>
			<option value="Dalam perjalanan">Diperjalanan</option>
			<option value="Telah sampai">Telah sampai</option>
			<option value="batal">Batal</option>
		</select>
	</div>
</div>

<br></br>
	<button class="btn btn-primary" name="proses">Proses</button>
</form>

<?php
if(isset($_POST["proses"]))
{
	
	$status = $_POST["status"];
	$koneksi->query("UPDATE booking SET status ='$status' WHERE id='$id'");

	echo "<script>alert('data booking telah diupdate');</script>"; 
	echo "<script>location='index.php?halaman=pembookingan';</script>"; 
}

?>